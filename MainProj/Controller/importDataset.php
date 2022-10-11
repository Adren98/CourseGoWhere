<?php

require_once("config.php");

if(isset($_POST['upload'])) {
    if(isset($_FILES)){
    // Configure upload directory , file type and file name
        $upload_dir = '../datafiles/';
        $file_tmpname = $_FILES['filename']["tmp_name"];
        $file_name = $_FILES['filename']['name'];
        $file_type = $_FILES['filename']['type'];

        // Set upload file path
        $filepath = $upload_dir.$file_name;

        // Check file type is csv
        if (preg_match('/\bcsv\b/', $file_type)) {
            // Check if file exist
            if(file_exists($filepath)) {
                    echo "<script type='text/javascript'>"."alert('Error uploading {$file_name}, file exist on server');". "window.location='../admin.php';</script>";
            }
            else {
                if( move_uploaded_file($file_tmpname, $filepath)) {
                    // Do Check here if file has the right column names
                    $result = checkCSVheaders($filepath);
                    $message = $result[1];

                    // check message from result
                    if($message === NULL )
                        echo "<script type='text/javascript'>"."alert( '{$file_name} successfully uploaded' );". "window.location='../admin.php';</script>";
                    else
                    {
                        unlink($filepath);
                        echo "<script type='text/javascript'>"."alert( 'File not uploaded. CSV does not contain: \\n{$message}as headers. Please ensure CSV file have these column headers' );"."window.location='../admin.php';</script>";
                    }
                }
                // if error moving file to directory
                else {
                    echo "<script type='text/javascript'>"."alert( 'Error uploading {$file_name} to {$upload_dir}. Please try other file' );". "window.location='../admin.php';</script>";
                }
            }
        }
        else {
            // If file extension not valid
            echo "<script type='text/javascript'>" . "alert('Error uploading {$file_name}. Only CSV file type is allowed');". "window.location='../admin.php';</script>";
        }
    }

}

if(isset($_POST['repopulate'])) {
    if(isset($_POST['file'])){
        $file_name = ($_POST['file']);
        $upload_dir = '../datafiles/';

        $filepath = $upload_dir.$file_name;

        $count = 0;
        $result =  checkCSVheaders($filepath);
        $req_headers = $result[0];
        $message = $result[1];

        //Check error message from result
        if($message)
        {
            unlink($filepath);
            echo "<script type='text/javascript'>". "alert('Error! \\n$result[1]  not found in CSV as headers. File may be corrupted. Automatically removing CSV from server...' );"."window.location='../admin.php';</script>";
        }

        else if ($req_headers && !$message)
        {
             $count = importCourses($filepath, $req_headers , true);
        }

        if($count > 0 ){
            echo "<script type='text/javascript'>"."alert( 'Database repopulated successfully with {$count} number of courses added' );". "window.location='../admin.php';</script>";
        }
        else {
            echo "<script type='text/javascript'>"."alert( 'Error. Database repopulated unsuccessfully with {$count} number of courses added' );"."window.location='../admin.php';</script>";
        }
    }
}


if(isset($_POST['remove'])) {
    if(isset($_POST['file'])){
        $file_name = ($_POST['file']);
        $upload_dir = '../datafiles/';

        $filepath = $upload_dir.$file_name;

        if( unlink($filepath)){
            echo "<script type='text/javascript'>" . "alert( '{$file_name} is removed successfully.' );". "window.location='../admin.php';</script>";
        }
        else echo "<script type='text/javascript'>" . "alert( 'Error removing {$fie_name}.' );". "window.location='../admin.php';</script>";
    }

}



// A simple function to show files in ../datafiles/
// Returns only names of file with type .csv
function showDatafiles(){
    // $path = ("../datafiles/");
    $folder = "../MainProj/datafiles/";
    if ($dir = opendir($folder))
    {
        $files = array();
        $i = 0;
        while (($file = readdir($dir)) !== false)
        {
            if (preg_match('/\bcsv\b/', $file))
                $files[$i++]= $file;
        }
        return $files;
        closedir($dir);
    }
}


//Course Name,Course code,School,Admission type,Cut off Point,Course duration,
//Field of study,Certification offered,Website//

function checkCSVheaders($filepath){

    $message = NULL ;
    if (($handle = fopen($filepath, "r")) !== FALSE)
    {
        //associative array in PHP (key -> value)
        $req_headers = array("Course Name" => NULL, "Course Code" => NULL, "School" =>NULL,
        "Cut off Point" => NULL , "Course duration" => NULL , "Field of study" => NULL ,
        // "Certification offered" => NULL ,
        "Website" => NULL);

        //Read header row in CSV
        $data = fgetcsv($handle, 1000, ",");

        // iterate columns in the header row
        $num = count($data);
        for ($col =0; $col < $num; $col++)
        {
            if (preg_match("/\bCourse Name\b/i", $data[$col])) $req_headers['Course Name'] = $col;
            if (preg_match("/\bCourse code\b/i", $data[$col])) $req_headers['Course Code'] = $col;
            if (preg_match("/\bSchool\b/i", $data[$col])) $req_headers['School'] = $col;
            if (preg_match("/\bCut off Point\b/i", $data[$col]))$req_headers['Cut off Point'] = $col;
            if (preg_match("/\bCourse duration\b/i", $data[$col]))$req_headers['Course duration'] = $col;
            if (preg_match("/\bField of study\b/i", $data[$col]))$req_headers['Field of study'] = $col;
            // if (preg_match("/\bCertification offered\b/i", $data[$c]))$req_headers['Certification offered'] = $col;
            if (preg_match("/\bWebsite\b/i", $data[$col]))$req_headers['Website'] = $col;
        }

        fclose($handle);

        foreach ($req_headers as $header => $head_val){
            if($head_val === NULL ){
                // echo $header . "value = " .$head_val;
                $message .= $header.'\\n';
            }
        }
    }
    // if message is !null, there are errors in CSV file headers
    return  array($req_headers, $message);
}


function importCourses($filepath, $req_headers, $reset)
{
    $connection = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);

    if (mysqli_connect_errno()) {

        die(mysqli_connect_error());
    }

    // Open file from designated filepath
    if (($open = fopen($filepath, "r")) !== FALSE)
    {
        while (($csvfile = fgetcsv($open, 1000, ",")) !== FALSE)
        {
            $csvArray[] = $csvfile;
        }
        fclose($open);
    }

    // WARNING !! if reset is set to true, ALL entries from CoursesCatalogue table will be DELETED
    if ($reset)
    {
        echo "Removing all entries from CoursesCatalogue";
        $result = mysqli_prepare($connection, "DELETE FROM CoursesCatalogue" );
        if($result->execute()){
            echo " - Success ! <br>";
        }
        else echo " - Failed ! <br>";

        echo "Resetting auto-increment indexing";
        $result = mysqli_prepare($connection, "ALTER TABLE CoursesCatalogue AUTO_INCREMENT = 1");
        if($result->execute()){
            echo " - Success ! <br>";
        }
        else echo " - Failed ! <br>";
    }

    // //Extract index of column headers
    $courseCode_id = $req_headers["Course Code"];
    $courseName_id = $req_headers["Course Name"];
    $school_id = $req_headers["School"];
    $cutOff_id = $req_headers["Cut off Point"];
    $duration_id = $req_headers["Course duration"];
    $fieldofStudy_id = $req_headers["Field of study"];
    $website_id = $req_headers["Website"];
    $count = 0;


    // Insert to Database for every row/course in given CSV
    foreach($csvArray as $row){
        //Ignore header row
        if (preg_match("/\bCourse Name\b/i", $row[$courseName_id])) continue;

        //Check if course exist in DB
        $exist = mysqli_prepare($connection, "SELECT * FROM CoursesCatalogue WHERE course_code = '$row[$courseCode_id]' and school = '$row[$school_id]' " );
        $exist->execute();
        $result = $exist->get_result();
        if ($result->num_rows != 0) {
            echo "Course " ."$row[$courseName_id]" . ", " .$row[$courseCode_id].  " from " ."$row[$school_id]". " exist in database <br>";
        }

        else {
            echo "Adding " ."$row[$courseName_id]" . ", " .$row[$courseCode_id].  " from " ."$row[$school_id]";
            $course_name = $row[$courseName_id];
            $course_code = $row[$courseCode_id];
            $school = $row[$school_id];
            $course_cluster = $row[$fieldofStudy_id];
            $course_url = $row[$website_id];

            if($course_name == ""|| $course_code == "" || $school == "" ||  $course_cluster == "") {continue;}

            if(!preg_match("/\bedu\b/i", $row[$website_id])){
                $course_url = "Link not available";
            }

            preg_match_all('!\d+!', $row[$duration_id], $duration);
            if(sizeof($duration[0]) == 1){
                $duration = $duration[0][0];
            }
            else if (sizeof($duration[0]) == 0){
                $duration = -1;
            }
            preg_match_all('!\d+!', $row[$cutOff_id], $cut_off_point);
            if (sizeof($cut_off_point[0]) == 2 ){
                $point = intval($cut_off_point[0][1]);
            }
            else if (sizeof($cut_off_point[0]) == 0){
                $point = -1;
            }


            // Inserting Course to DB
            $query = "INSERT INTO CoursesCatalogue (course_name, course_code, year, course_cluster, cut_off_point, course_url,
                      school) VALUES ('$course_name', '$course_code', '$duration' , '$course_cluster' , '$point' , '$course_url' , '$school' )";
            if($insert = mysqli_prepare($connection, $query ))
                        {
                            if($insert->execute()){
                                echo " - Success ! <br> ";
                                $count++;
                            }
                            else {
                                echo " - failed to add course <br>";
                            }
            }

         }


        }
        echo "---------------    {$count} number of courses added ---------------";
        return $count;

}

?>
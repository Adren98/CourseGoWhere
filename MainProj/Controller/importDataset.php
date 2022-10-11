<?php

require_once("config.php");


if(isset($_POST['repopulate'])) {

    $file_name = ($_POST['repopulate']);
    $upload_dir = '../datafiles/';

    $filepath = $upload_dir.$file_name;

    $req_headers = array();
    if(!is_null($req_headers = checkCSVheaders($filepath, 1)) ){

        // importCourses($filepath, $headers, boolean to reset database entries)
        // importCourses($filepath, $req_headers, true);

        $count = importCourses($filepath, $req_headers, true);

        // var_dump($req_headers);
    }

    if($count > 0 ){
        echo "<script type='text/javascript'>" . "alert( 'Database repopulated Successfully with {$count} number of courses' );". "window.location='../admin.php';</script>";
    }
    else {
        echo "<script type='text/javascript'>" . "alert( 'Database repopulated unsuccessfully with {$count} number of courses' );". "window.location='../admin.php';</script>";

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

// If return_headers is true, index of the matching required column headers for the csv file will be return as associative array
function checkCSVheaders($filepath, $return_headers){

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
        for ($c=0; $c < $num; $c++)
        {
            if (preg_match("/\bCourse Name\b/i", $data[$c])) $req_headers['Course Name'] = $c;
            if (preg_match("/\bCourse code\b/i", $data[$c])) $req_headers['Course Code'] = $c;
            if (preg_match("/\bSchool\b/i", $data[$c])) $req_headers['School'] = $c;
            if (preg_match("/\bCut off Point\b/i", $data[$c]))$req_headers['Cut off Point'] = $c;
            if (preg_match("/\bCourse duration\b/i", $data[$c]))$req_headers['Course duration'] = $c;
            if (preg_match("/\bField of study\b/i", $data[$c]))$req_headers['Field of study'] = $c;
            // if (preg_match("/\bCertification offered\b/i", $data[$c]))$req_headers['Certification offered'] = $c;
            if (preg_match("/\bWebsite\b/i", $data[$c]))$req_headers['Website'] = $c;
        }

        fclose($handle);

        foreach ($req_headers as $header => $head_val){
            if(is_null($head_val) == 1){
                // echo $header . "value = " .$head_val;
                $message .= $header . "\\n";
            }
        }
    }


    if (!$return_headers){
        // No missing headers
        if (is_null($message))
            return 1;

        else{
            unlink($filepath);
            // echo $message;
            echo "<script type='text/javascript'>" . "alert( 'File not uploaded. \\n{$message} not found in CSV as column headers. Please ensure CSV file have these column headers' );". "window.location='../admin.php';</script>";
            return NULL;
        }
    }

    // For reading any CSV admin selected from server and returning the index with the expected column headers
    else
    {
        // No missing headers
        if (is_null($message)){
            // var_dump ($req_headers);
            return $req_headers;
    }
        else{
            unlink($filepath);
            // echo $message;
            echo "<script type='text/javascript'>" . "alert( '{$message} not found in CSV as headers. File may be corrupted. Automatically removing CSV from server...' );". "window.location='../admin.php';</script>";
            return NULL;
        }
    }
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

    // WARNING !! if reset is set to true, ALL entries from CoursesCatalogue will be DELETED
    if ($reset)
    {
        echo "Removing all entries from CoursesCatalogue";
        $result = mysqli_prepare($connection, "DELETE FROM CoursesCatalogue" );
        if($result->execute()){
            echo " - Success <br>";
        }
        else echo " - Failed <br>";

        echo "Resetting Auto increment indexing";
        $result = mysqli_prepare($connection, "ALTER TABLE CoursesCatalogue AUTO_INCREMENT = 1");
        if($result->execute()){
            echo " - Success <br>";
        }
        else echo " - Failed <br>";
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
            $course_cluster = $row[$fieldofStudy_id];
            $course_url = $row[$website_id];

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
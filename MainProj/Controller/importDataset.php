<?php

require_once("config.php");

// Check if form was submitted
function showDatafiles(){
    $path = ("../datafiles/");

}


//Course Name,Course code,School,Admission type,Cut off Point,Course duration,
//Field of study,Certification offered,Website//

function checkCSVFormat($filepath, $returnCol){

    if (($handle = fopen($filepath, "r")) !== FALSE)
    {
        // Using associative array in PHP
        // read header row and check if all requirement exist and grab col id
        // for mapping to SQL statement
        $req_headers = array("Course Name" => NULL, "Course Code" => NULL, "School" =>NULL,
        "Cut off Point" => NULL , "Course duration" => NULL , "Field of study" => NULL , "Certification offered" => NULL , "Website" => NULL);

        $data = fgetcsv($handle, 1000, ",");

        $num = count($data);
        for ($c=0; $c < $num; $c++)
        {
            if (preg_match("/\bCourse Name\b/i", $data[$c])) $req_headers['Course Name'] = $c;
            if (preg_match("/\bCourse code\b/i", $data[$c])) $req_headers['Course Code'] = $c;
            if (preg_match("/\bSchool\b/i", $data[$c])) $req_headers['School'] = $c;
            if (preg_match("/\bCut off Point\b/i", $data[$c]))$req_headers['Cut off Point'] = $c;
            if (preg_match("/\bCourse duration\b/i", $data[$c]))$req_headers['Course duration'] = $c;
            if (preg_match("/\bField of study\b/i", $data[$c]))$req_headers['Field of study'] = $c;
            if (preg_match("/\bCertification offered\b/i", $data[$c]))$req_headers['Certification offered'] = $c;
            if (preg_match("/\bWebsite\b/i", $data[$c]))$req_headers['Website'] = $c;
        }

        fclose($handle);

        $message = NULL ;
        foreach ($req_headers as $header => $head_val){
            if(is_null($head_val) == 1){
                // echo $header . "value = " .$head_val;
                $message .= $header . "\\n";
            }
        }
    }
    if (!$returnCol){
        if (is_null($message))
            return 1;

        else{
            unlink($filepath);
            // echo $message;
            echo "<script type='text/javascript'>" . "alert( 'File not uploaded. \\n{$message} not found in CSV as column headers. Please ensure CSV file have these column headers' );". "window.location='../admin.php';</script>";
            return 0;
        }
    }
    else
    {
        if (is_null($message))
            return $message;

        else{
            unlink($filepath);
            // echo $message;
            echo "<script type='text/javascript'>" . "alert( '{$message} not found in CSV as headers. File may be corrupted. Automatically removing...' );". "window.location='../admin.php';</script>";
            return 0;
        }
    }
}

function importCourses()
{
    $connection = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);

    if (mysqli_connect_errno()) {

        die(mysqli_connect_error());
    }

    // Import Polytechnic courses csv
    if (($open = fopen("../datafiles/Polytechnic_Courses.csv", "r")) !== FALSE)
    {
        while (($data = fgetcsv($open, 1000, ",")) !== FALSE)
        {
        $PolytechnicCourses[] = $data;
        }
        fclose($open);
    }
    // Insert to Database for every row/course in given CSV
    $count = 0;
    foreach($PolytechnicCourses as $polyCourse){
        //Ignore header row
        if (preg_match("/\bCourse Name\b/i", $polyCourse[0])) continue;

        //Check if course exist in DB
        $exist = mysqli_prepare($connection, "SELECT * FROM CoursesCatalogue WHERE course_code = '$polyCourse[1]' and school = '$polyCourse[2]' " );
        $exist->execute();
        $result = $exist->get_result();
        if ($result->num_rows != 0) {
            echo "course " ."$polyCourse[0]" ." Exist in database \n";
        }

        else {
            echo "Adding " ."$polyCourse[0]";
            $course_name = $polyCourse[0];
            $course_code = $polyCourse[1];
            $school = $polyCourse[2];
            preg_match_all('!\d+!', $polyCourse[5], $duration);
            if(sizeof($duration[0]) == 1){
                $duration = $duration[0][0];
            }
            else if (sizeof($duration[0]) == 0){
                $duration = -1;
            }
            preg_match_all('!\d+!', $polyCourse[4], $cut_off_point);
            if (sizeof($cut_off_point[0]) == 2 ){
                $point = intval($cut_off_point[0][1]);
            }
            else if (sizeof($cut_off_point[0]) == 0){
                $point = -1;
            }
            $course_cluster = $polyCourse[6];
            $course_url = $polyCourse[8];

            // Inserting Course to DB
            $query = "INSERT INTO CoursesCatalogue (course_name, course_code, year, course_cluster, cut_off_point, course_url,
                      school) VALUES ('$course_name', '$course_code', '$duration' , '$course_cluster' , '$point' , '$course_url' , '$school' )";
            if($insert = mysqli_prepare($connection, $query ))
                        {
                            if($insert->execute()){
                                echo " - Success\n";
                                $count++;
                            }
                            else {
                                echo " - failed to add course\n";
                            }
            }
         }

        }

}

// importCourses();

?>
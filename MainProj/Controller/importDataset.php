<?php

require_once("config.php");

// Check if form was submitted
if(isset($_POST['submit'])) {
    echo "uploading";
    // Configure upload directory and allowed file types
    $upload_dir = '../datafiles/';
    $file_tmpname = $_FILES['filename']["tmp_name"];
    $file_name = $_FILES['filename']['name'];
    // $file_ext = strtolower(end(explode('.', $_FILES['filename']['name'])));
    $file_type = $_FILES['filename']['type'];
    // var_dump($_FILES);
    // Set upload file path
    $filepath = $upload_dir.$file_name;

    // Check file type is allowed or not
    if (preg_match('/\bcsv\b/', $file_type)) {

        if(file_exists($filepath)) {
                echo "Error uploading {$file_name}, file exist <br />";
        }
        else {
            if( move_uploaded_file($file_tmpname, $filepath)) {
                echo "{$file_name} successfully uploaded <br />";
            }
            else {
                echo "Error uploading {$file_name} <br />";
            }
        }
    }
    else {
        // If file extension not valid
        echo "Error uploading {$file_name} ";
        echo "({$file_type} file type is not allowed)<br / >";
    }
}

function importCourses()
{
    $connection = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);

    if (mysqli_connect_errno()) {

        die(mysqli_connect_error());
    }

    // Import Polytechnic courses csv
    if (($open = fopen("..\datafiles\Polytechnic_Courses.csv", "r")) !== FALSE)
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
<?php
//var_dump($_POST);

$school_cluster = array();
foreach ($_POST as $key => $data) {
    if (gettype($data) == "array") {
        foreach ($data as $value) {
            echo $value;
        }
    } else {

        if ($key != "submit") {
            if (!array_key_exists(strval(substr($key, 0, -1)), $school_cluster)) {
                $school_cluster[substr($key, 0, -1)] = $data;
//             var_dump($school_cluster);
            } else {
                $school_cluster[substr($key, 0, -1)] = $school_cluster[substr($key, 0, -1)] + $data;
            }

        }
    }

}

// sort array by value
arsort($school_cluster);

//var_dump($school_cluster);

$number_of_top_schools = 0;

$sql = "SELECT * FROM CoursesCatalogue WHERE course_cluster = '";
$counter = 0;
foreach ($school_cluster as $key => $value) {

        if ($value == reset($school_cluster)) {
            if($counter ==0){
                echo $key . " " . $value . " ";
                $sql = $sql . str_replace("_", " ", $key) . "'";
                $counter ++;
            }
            else{

                $sql = $sql ." OR course_cluster = '". str_replace("_", " ", $key)."'"  ;

        }
    }

}

require_once 'courses_sql.php';
$_SESSION['qnsearch'] = genGenericSQL($sql);

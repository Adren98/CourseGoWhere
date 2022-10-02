<?php
require_once('config.php');
function getcolNames(){

    require_once 'courses_sql.php';
    $sql = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = 'CoursesCatalogue'";
    $result = genGenericSQL($sql);

    $colnames = array();
    foreach ($result as $colname){
        if($colname['COLUMN_NAME'] != 'course_id'){
            array_push($colnames, $colname['COLUMN_NAME']);
        }

    }


    return $colnames;

}
function getALLcolNames(){

    require_once 'courses_sql.php';
    $sql = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = 'CoursesCatalogue'";
    $result = genGenericSQL($sql);

    $colnames = array();
    foreach ($result as $colname){

            array_push($colnames, $colname['COLUMN_NAME']);


    }


    return $colnames;

}
function getadmincolNames(){

    require_once 'courses_sql.php';
    $sql = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = 'CoursesCatalogue'";
    $result = genGenericSQL($sql);

    $colnames = array();
    foreach ($result as $colname){
        if($colname['COLUMN_NAME'] != 'course_id'&&$colname['COLUMN_NAME'] !='course_url'){
            array_push($colnames, $colname['COLUMN_NAME']);
        }

    }


    return $colnames;

}



/**
 * @return void
 */
function coursesDisplay()
{

    require_once 'courses_sql.php';
    $Field_of_Interest = "";
    $cut_off_point = "";
    $school = array();

    if (isset($_GET['FOI'])) {
        $Field_of_Interest = urldecode($_GET['FOI']);
    }
    if (isset($_GET['cutoffpoint'])) {
        $cut_off_point = $_GET['cutoffpoint'];
    }
    if (isset($_GET['checkboxSchool'])) {
        $school = $_GET['checkboxSchool'];
    }


    $sql = [];
    $parameters = [];

    if ($Field_of_Interest != "NIL") {
        $sql[] = "course_cluster = ?";
        $parameters[] = $Field_of_Interest;
    }
    if ($cut_off_point != "") {
        $sql[] = "cut_off_point >= ?";
        $parameters[] = $cut_off_point;
    }
    if (!empty($school)) {

        if (count($school) == 1) {
            $sql[] = "school = ?";
            $parameters[] = $school[0];
        } else {
            $sql[] = "school IN (" . implode(',', array_fill(0, count($school), '?')) . ")";
            $parameters = array_merge($parameters, $school);
        }

    }
    if (!empty($sql)) {
        $sql = "SELECT * FROM CoursesCatalogue WHERE " . implode(' AND ', $sql);
        getFilteredCourses($sql, $parameters);
    } else {
        getAllCourse();
    }
}
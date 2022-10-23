<?php

if (isset($_POST['submit'])) {
    session_start();

    require_once 'courses_sql.php';
    $course_id = $_POST['course_id'];
    $sql = "SELECT * FROM CoursesCatalogue WHERE course_id = $course_id";
    $result = genGenericSQL($sql);

    if (!isset($_SESSION['planner'])) {

        $_SESSION['planner'] = array();

    }

    $length = count($_SESSION['planner']);

    $arr[] = $course_id;
    $arr[] = $result[0]['course_name'];
    $arr[] = $result[0]['cut_off_point'];
    $arr[] = $result[0]['school'];
    $arr[] = "No remarksNo remarksNo remarksNo remarksNo remarksNo remarksNo remarksNo remarksNo remarksNo remarksNo remarksNo remarksNo remarksNo remarksNo remarksNo remarksNo remarksNo remarksNo remarksNo remarksNo remarksNo remarksNo remarksNo remarksNo remarks";


    $_SESSION['planner'][] = $arr;
//    var_dump($_SESSION['planner']);


    header("Location: ../courses.php");


} elseif (isset($_POST['delete'])) {
    session_start();
//var_dump($_POST['delete']);
//var_dump($_SESSION['planner']);
    $_SESSION['planner'] = $_POST['delete'];

} else {


    header("Location: ../index.php");
}

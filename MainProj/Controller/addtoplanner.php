<?php
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    $data=str_replace(array("\r\n", "\n", "\r"), '<br>', $data);
    return $data;
}

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
    $arr[] = "";


    $_SESSION['planner'][] = $arr;
//    var_dump($_SESSION['planner']);


    header("Location: ../courses.php");


} elseif (isset($_POST['delete'])) {


    session_start();
//var_dump($_POST['delete']);
//var_dump($_SESSION['planner']);
require_once 'courses_sql.php';
    $_SESSION['planner'] = $_POST['delete'];



    //check if array is not empty
    if(isset($_SESSION['email'])) {
//        var_dump($_SESSION['email']);
        $sql = "Delete FROM Planner WHERE Email_ID = " ."'" .$_SESSION['email']."'";
        gendeleteGenericSQL($sql);

        $index=0;
        foreach ($_SESSION['planner'] as $course) {
            $sql = "INSERT INTO Planner (Course_id,  Priority, Email_ID,Remarks) VALUES ('" . $course[0] ."', '" . "$index"."','".$_SESSION['email'] .   "', '" . test_input($course[4]) . "')";
            gendeleteGenericSQL($sql);
            $index++;

        }



    }



} else {


    header("Location: ../index.php");
}

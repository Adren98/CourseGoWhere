<?php
require_once('config.php');

function test()
{
    return "test";
}

function getAllCourse()
{
    $connection = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);
    if (mysqli_connect_errno()) {
        die(mysqli_connect_error());

    }
    if ($output = mysqli_prepare($connection, "SELECT * FROM CoursesCatalogue")) {
        $output->execute();
        return $output->get_result();


    } else {
        return NULL;
    }


}


?>
<?php
require_once('config.php');


function getFilteredCourses($sql, array $parameters)
{
    $connection = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);

    if (mysqli_connect_errno()) {

        die(mysqli_connect_error());
    }
//var_dump("DEBUGGER:",$sql);

    if ($output = mysqli_prepare($connection, strval($sql))){
        $output->bind_param(str_repeat('s', count($parameters)),...$parameters);
        printHtmlRow($output, $connection);
    } else {
        die(mysqli_error($connection));
    }



}

/**
 * @param mysqli_stmt $output
 * @param mysqli $connection
 * @return false|mysqli_result
 */
function printHtmlRow(mysqli_stmt $output, mysqli $connection)
{
    $output->execute();
    $result = $output->get_result();
    $index = 0;
    while (($row = $result->fetch_assoc()) != NULL) {

        $index++;
        echo '<tr>';
        echo '<th scope="row">' . $index . '</th>';
        echo '<td>' . $row['course_name'] . '</td>';
        echo '<td>' . $row['year'] . '</td>';
        echo '<td>' . $row['course_cluster'] . '</td>';
        echo '<td>' . $row['cut_off_point'] . '</td>';
        echo '<td>' . $row['course_url'] . '</td>';

        echo '<td>' . $row['school'] . '</td>';

    }
    $output->close();
    $connection->close();
    return $result;
}

function getFieldOfInterest()
{
    $connection = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);
    if (mysqli_connect_errno()) {
        die(mysqli_connect_error());

    }

    $a = array();

    if ($output = mysqli_prepare($connection, "SELECT course_cluster FROM CoursesCatalogue")) {
        $output->execute();
        $result = $output->get_result();

        while (($row = $result->fetch_assoc()) != NULL) {


            array_push($a, $row['course_cluster']);


        }
        $output->close();
        $connection->close();
        return $a;
    } else {
        return NULL;
    }
}


function getAllCourse()
{
    $connection = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);
    if (mysqli_connect_errno()) {
        die(mysqli_connect_error());

    }
    if ($output = mysqli_prepare($connection, "SELECT * FROM CoursesCatalogue")) {
        $result = printHtmlRow($output, $connection);
    }

}





?>




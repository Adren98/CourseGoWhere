<?php
require_once('config.php');


function genGenericSQL($sql){
    $connection = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);

    if (mysqli_connect_errno()) {

        die(mysqli_connect_error());
    }
//var_dump("DEBUGGER:",$sql);

    if ($output = mysqli_prepare($connection, strval($sql))){
        $output->execute();
        $result = $output->get_result();

        $arr = array();
        while ($row = $result->fetch_assoc()) {
            $arr[] = $row;
        }
        $output->close();
        mysqli_close($connection);
        return $arr;
    } else {
        die(mysqli_error($connection));
    }

}


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
 */
function printHtmlRow(mysqli_stmt $output, mysqli $connection)
{
    $output->execute();
    $result = $output->get_result();
    $index = 0;

    $colnames = getcolNames();

    while (($row = $result->fetch_assoc()) != NULL) {

        $index++;
        echo '<tr>';


        foreach ($colnames as $colname){
            echo '<td>' . $row[$colname] . '</td>';
        }
//        echo '<td>' . $row['course_name'] . '</td>';
//        echo '<td>' . $row['year'] . '</td>';
//        echo '<td>' . $row['course_cluster'] . '</td>';
//        echo '<td>' . $row['cut_off_point'] . '</td>';
//        echo '<td>' . $row['course_url'] . '</td>';
//
//        echo '<td>' . $row['school'] . '</td>';



        echo '</tr>';
    }
    $output->close();
    $connection->close();

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
       printHtmlRow($output, $connection);
    }

}





?>




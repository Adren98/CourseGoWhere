<?php
require_once('config.php');


function genGenericSQL($sql)
{
    $connection = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);

    if (mysqli_connect_errno()) {

        die(mysqli_connect_error());
    }
//var_dump("DEBUGGER:",$sql);

    if ($output = mysqli_prepare($connection, strval($sql))) {
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
function gendeleteGenericSQL($sql)
{
    $connection = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);

    if (mysqli_connect_errno()) {

        die(mysqli_connect_error());
    }
//var_dump("DEBUGGER:",$sql);

    if ($output = mysqli_prepare($connection, strval($sql))) {
        $output->execute();



        $output->close();
        mysqli_close($connection);

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

    if ($output = mysqli_prepare($connection, strval($sql))) {
        $output->bind_param(str_repeat('s', count($parameters)), ...$parameters);
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
        $url_pattern = '/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/';


        foreach ($colnames as $colname) {
            if($colname === "course_url"){
                $row[$colname] = preg_replace($url_pattern, '<a href="$0">$0</a>', $row[$colname]);
            }

            echo '<td>' . $row[$colname] . '</td>';

        }
//        echo '<td>' . $row['course_name'] . '</td>';
//        echo '<td>' . $row['year'] . '</td>';
//        echo '<td>' . $row['course_cluster'] . '</td>';
//        echo '<td>' . $row['cut_off_point'] . '</td>';
//        echo '<td>' . $row['course_url'] . '</td>';
//
//        echo '<td>' . $row['school'] . '</td>';

        //create form
        echo '<td colspan="6">';
        echo '<form action="Controller/addtoplanner.php" method="post">';
        echo '<input type="hidden" name="course_id" value="' . $row['course_id'] . '">';

        echo '<input name="submit" type="submit" class="btn btn-primary" value="Add to Planner">';
        echo '</form>';
        echo '</td>';

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

function getSchoolsCol()
{

    $sql = 'SELECT DISTINCT school FROM CoursesCatalogue';
    return genGenericSQL($sql);

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

function getcustomisedCourse($sql)
{
    $connection = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);
    if (mysqli_connect_errno()) {
        die(mysqli_connect_error());

    }
    if ($output = mysqli_prepare($connection, $sql)) {
        printHtmlRow($output, $connection);
    }

}


?>




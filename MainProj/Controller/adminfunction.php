<?php
require_once('config.php');

if(isset($_POST["action"])){
    if($_POST["action"] == "insert"){
        echo 'I AM HERE in insert action:';
      insert();
    }
    else if($_POST["action"] == "edit"){
        echo 'I AM HERE in edit action:';
      edit();
    }
    else{
        echo 'I AM HERE in delete action:';
      delete();
    }
  }

function printAdminHtmlRow(mysqli_stmt $output, mysqli $connection)
{
    $output->execute();
    $result = $output->get_result();
    $index = 0;
    
    require 'script.php';

    require_once "Controller/courses.php";

    $colnames = getadmincolNames();

    while (($row = $result->fetch_assoc()) != NULL) {

        $index++;



        echo '<tr id='.$row['course_id'].'>';
        foreach ($colnames as $colname){
            echo '<td>' . $row[$colname] . '</td>';
        }


//        echo '<th scope="row">' . $index . '</th>';
//        echo '<td>' . $row['course_code'] . '</td>';
//        echo '<td>' . $row['course_name'] . '</td>';
//        echo '<td>' . $row['year'] . '</td>';
//        echo '<td>' . $row['course_cluster'] . '</td>';
//        echo '<td>' . $row['cut_off_point'] . '</td>';
//        echo '<td>' . $row['course_url'] . '</td>';
//
//        echo '<td>' . $row['school'] . '</td>';
        echo '<td><button type="button" class="btn btn-primary" name="delete" onclick=submitData('.$row['course_id'].')>' . "Delete" . '</button></td>';
        echo '<td><button type="button" class="btn btn-primary" name ="edit" onclick=Edit()>' . "Edit" . '</button></td>';
        echo '</tr>';
    }
    $output->close();
    $connection->close();
    return $result;
}
function delete(){
    echo"INDELETE ";
    $connection = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);

    if (mysqli_connect_errno()) {

        die(mysqli_connect_error());
    }
  
    $id = $_POST["action"];

    $query = "DELETE FROM CoursesCatalogue WHERE course_id = $id";
    mysqli_query($connection, $query);
    echo "Deleted Successfully";
    

  }
function insert(){
    echo"Inserting ";
    $connection = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);
    if (mysqli_connect_errno()) {

        die(mysqli_connect_error());
    }
    $coursecode = $_POST["coursecode"];
    $year= $_POST["year"];
    $courseName = $_POST["courseName"];
    $course_cluster =$_POST["course_cluster"];
    $cutoff = $_POST["cutoff"];
    $url = $_POST["url"];
    $school =$_POST["school"];
    echo     '<script type="text/javascript">    alert("Before query");    </script>';

    //Check if exist in DB
    $exist = mysqli_prepare($connection, "SELECT * FROM CoursesCatalogue WHERE course_code = '$coursecode' and school = '$school' " );
    $exist->execute();
    $result = $exist->get_result();
    if ($result->num_rows != 0) {
        echo "course " ."$coursecode" ." from " ."$school" ." exist in database \n";

    }
    else {
        $query = "INSERT INTO CoursesCatalogue (course_name, course_code, year, course_cluster, cut_off_point, course_url,
                                school) VALUES ('$courseName', '$coursecode','$year', '$course_cluster','$cutoff','$url','$school')";
        mysqli_query($connection,$query);
        echo "Inserted";
        echo     '<script type="text/javascript">    alert("added");    </script>';
    }
}

function getAdminAllCourse()
{
    $connection = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);
    if (mysqli_connect_errno()) {
        die(mysqli_connect_error());

    }

    if ($output = mysqli_prepare($connection, "SELECT * FROM CoursesCatalogue")) {
        $result = printAdminHtmlRow($output, $connection);
    }

}



?>




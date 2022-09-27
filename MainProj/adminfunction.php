<?php
require_once('config.php');

if(isset($_POST["action"])){
    if($_POST["action"] == "insert"){
      insert();
    }
    else if($_POST["action"] == "edit"){
      edit();
    }
    else{
      delete();
    }
  }

function printAdminHtmlRow(mysqli_stmt $output, mysqli $connection)
{
    $output->execute();
    $result = $output->get_result();
    $index = 0;
    
    require 'script.php';
    while (($row = $result->fetch_assoc()) != NULL) {

        $index++;
        echo '<tr id='.$row['idCourses'].'>';
        echo '<th scope="row">' . $index . '</th>';
        echo '<td>' . $row['course_name'] . '</td>';
        echo '<td>' . $row['year'] . '</td>';
        echo '<td>' . $row['course_cluster'] . '</td>';
        echo '<td>' . $row['cut_off_point'] . '</td>';
        echo '<td>' . $row['course_url'] . '</td>';
        echo '<td>' . $row['new_course'] . '</td>';
        echo '<td>' . $row['school'] . '</td>';
        echo '<td><button type="button" class="btn btn-primary name="delete" onclick=submitData('.$row['idCourses'].')>' . "Delete" . '</button></td>'; 
        echo '<td><button type="button" class="btn btn-primary name ="edit" onclick=Edit()>' . "Edit" . '</button></td>'; 
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
  
    $query = "DELETE FROM CoursesCatalogue WHERE idCourses = $id";
    mysqli_query($connection, $query);
    echo "Deleted Successfully";
    

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




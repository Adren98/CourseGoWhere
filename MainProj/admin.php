<!DOCTYPE html>
<?php

session_start();

if (isset($_SESSION['user_type'])&&$_SESSION['user_type'] != 'admin') {
    echo "<script type='text/javascript'>" . "alert('You are not an admin. Redirecting you back to homepage now.');" . " window.location='index.php';</script>";

}

?>
<br><br><br>
<html lang="en">

<head>


    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="./assets/img/favicon.png">


    <!-- Not required for the header part -->
    <!--     Fonts and icons     -->
    <!-- <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700"/> -->

    <!-- Nucleo Icons -->
    <!-- <link href="./assets/css/nucleo-icons.css" rel="stylesheet"/>
    <link href="./assets/css/nucleo-svg.css" rel="stylesheet"/> -->

    <!-- Font Awesome Icons -->
    <!-- <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script> -->

    <!-- Material Icons -->
    <!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet"> -->

    <!-- CSS Files -->
    <!-- End of not required for the nav bar -->
    <!-- <link rel="stylesheet" type="text/css" href="./assets/css/loginstyles.css"> -->

    <link id="pagestyle" href="./assets/css/material-kit.css?v=3.0.4" rel="stylesheet"/>
    <title>CourseGoWhere</title>

</head>

<body class="tab-content tab-space">
<h1 style = "display:flex ; justify-content: center;">Admin Home Page</h1>
<div class="row">
    <div class="col-lg-6">
        <a type="submit" class="btn btn-primary"  href="adminCreate.php">
            Add Course
        </a>

    </div>
    <div class="col-lg-6">
               <a style=" float: right;" class="btn btn-primary" href="Controller/logout_abort.php">Logout</a>
    </div>
</div>


<!-- csv file upload to server -->
<div >
    <form action="Controller/importDataset.php" method="post" enctype="multipart/form-data">
        <label>Upload course CSV data file here</label>
        <input size='50' type='file' name='filename' required >
        <input type='submit' name='upload' value='Upload CSV'  >
    </form>

</div>

<!-- Select csv file from server to repopulate database -->
<div id="wrapper">
    <div id="file_div" style="float: right" >
        <form action="Controller/importDataset.php" method="post" >
        <label for="file">Select a csv file to repopulate database</label>
        <select id="csvfile" name = 'file' required>
            <?php
            require_once "Controller/importDataset.php";
            $files = showDatafiles();

            foreach ( $files as $file) {
                echo '<option value= "'.$file .'">' .$file .'</option>';
            }
             ?>
        </select>
        <input type="submit" name ="repopulate" value="Repopulate database"
             onclick="return confirm('  !! Proceed with caution !! \nThis action is irreversible, any changes made so far to the courses catalogue data stored in database will be erased. \nClick OK to proceed with repopulating the database with the selected CSV.')"
        />
        <input type="submit" name="remove" value="Remove CSV"
             onclick="return confirm('  !! Proceed with caution !! \nThis action is irreversible, this will remove the selected CSV file from server. \nClick OK to proceed. ')"
        />

      </form>
    </div>

</div>

<div class="tab-pane active" id="preview-pagination-simple">
    <table class="table" id="myTable">
        <thead>
        <tr>
            <?php
            require_once "Controller/courses.php";

            $courses = getadmincolNames();

            foreach ($courses as $course) {
                echo '<th scope="col">' . $course. '</th>';
            }


            ?>
            <th scope="col">Delete Column</th>
            <th scope="col">Edit Column</th>



        </tr>
        </thead>
        <tbody>

        <?php
        require 'Controller/adminfunction.php';

        getAdminAllCourse();


        ?>


        </tbody>
    </table>

</div>
</body>
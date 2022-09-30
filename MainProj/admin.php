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

<div >


<form action="Controller/adminfunction.php" method="post" enctype="multipart/form-data">

        <label> Or Upload Product CSV file Here</label>
        <input size='50' type='file' name='filename' required >
        <input type='submit' name='submit' value='Upload CSV' href="Controller/importDataset.php" >

    </form>
</div>


<!--
<form action="Controller/importDataset.php" method="post" enctype="multipart/form-data">
        <label> Or Upload Product CSV file Here</label>
        <input size='50' type='file' name='filename' required>
        <input type='submit' name='submit' value='Upload CSV' href="Controller/importDataset.php" >
    </form>
</div> -->


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
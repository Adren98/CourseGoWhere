<!DOCTYPE html>
<?php

session_start();

if( $_SESSION['user_type'] != 'admin'){
    echo "<script type='text/javascript'>" . "alert('You are not an admin. Redirecting you back to homepage now.');" . " window.location='index.php';</script>";
//    header("Location: index.php");
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
    <h1 class ="offset-md-4">Admin Home Page</h1><title>CourseGoWhere</title>

</head>
<body >
<div class="tab-content tab-space">
    <button type="submit" class="btn btn-primary" name="addcourse">
        Add Course
    </button>
                    <div class="tab-pane active" id="preview-pagination-simple">
                        <table class="table" id="myTable">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">CourseName</th>
                                <th scope="col">Year</th>
                                <th scope="col">course_cluster</th>
                                <th scope="col">cut_off_point</th>
                                <th scope="col">course_url</th>
                                <th scope="col">new_course</th>
                                <th scope="col">School</th>
                                <th scope="col" colspan="2" style="justify-content:space-around; display:flex; "> Options</th> 
                                
                            </tr>
                            </thead>
                            <tbody>
                            
                            <?php
                            require 'adminfunction.php';
                            // require 'config.php';
                            // $connection = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);

                            // if (mysqli_connect_errno()) {

                            //     die(mysqli_connect_error());
                            // }
                            getAdminAllCourse();

                            

                            ?>
                            

                            </tbody>
                        </table>

                    </div>
                </div>
                
                
</body>
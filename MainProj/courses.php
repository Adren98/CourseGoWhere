<!--
=========================================================
* Material Kit 2 - v3.0.4
=========================================================

* Product Page: https://www.creative-tim.com/product/material-kit
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->

<?php

session_start();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="./assets/img/favicon.png">
    <title>
       CourseGoWhere
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700"/>
    <!-- Nucleo Icons -->
    <link href="./assets/css/nucleo-icons.css" rel="stylesheet"/>
    <link href="./assets/css/nucleo-svg.css" rel="stylesheet"/>
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="./assets/css/material-kit.css?v=3.0.4" rel="stylesheet"/>
</head>

<body class="pagination-sections">
<!-- Navbar Light -->
<?php

include 'navfloating.php';
?>
<br><br><br>
<!-- End Navbar -->
<div class="container mt-5">

    <div class="row">

        <div class="col-lg-12 mx-auto">



            <div class="card justify-content-center">
                <div class="col-lg-12">
                    todo: A centered filter form
                </div>

            </div>

            <div class="position-relative border-radius-xl overflow-hidden shadow-lg mb-7">
                <div class="container border-bottom">
                    <div class="row justify-space-between py-2">
                        <div class="col-lg-3 me-auto">
                            <p class="lead text-dark pt-1 mb-0">Pagination Simple</p>
                        </div>
                        <div class="col-lg-3">
                            <div class="nav-wrapper position-relative end-0">
                                <!--                                <ul class="nav nav-pills nav-fill flex-row p-1" role="tablist">-->
                                <!--                                    <li class="nav-item">-->
                                <!--                                        <a class="nav-link mb-0 px-0 py-1 active" data-bs-toggle="tab"-->
                                <!--                                           href="#preview-pagination-simple" role="tab" aria-selected="true">-->
                                <!--                                            <i class="fas fa-desktop text-sm me-2"></i> Preview-->
                                <!--                                        </a>-->
                                <!--                                    </li>-->
                                <!--                                    <li class="nav-item">-->
                                <!--                                        <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab"-->
                                <!--                                           href="#code-pagination-simple" role="tab" aria-selected="false">-->
                                <!--                                            <i class="fas fa-code text-sm me-2"></i> Code-->
                                <!--                                        </a>-->
                                <!--                                    </li>-->
                                <!--                                </ul>-->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-content tab-space">
                    <div class="tab-pane active" id="preview-pagination-simple">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">CourseName</th>
                                <th scope="col">Year</th>
                                <th scope="col">course_cluster</th>
                                <th scope="col">cut_off_point</th>
                                <th scope="col">course_url</th>
                                <th scope="col">new_course</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php
                            require_once 'courses_sql.php';
                            $result = getAllCourse();
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
                                echo '<td>' . $row['new_course'] . '</td>';

                            }
                            ?>


                            </tbody>
                        </table>

                    </div>
                </div>
            </div>

            <!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
<!--            <footer class="footer py-5">-->
<!--                <div class="container">-->
<!--                    <div class="row">-->
<!--                        <div class="col-lg-8 mb-4 mx-auto text-center">-->
<!--                            <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">-->
<!--                                Company-->
<!--                            </a>-->
<!--                            <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">-->
<!--                                About Us-->
<!--                            </a>-->
<!--                            <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">-->
<!--                                Team-->
<!--                            </a>-->
<!--                            <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">-->
<!--                                Products-->
<!--                            </a>-->
<!--                            <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">-->
<!--                                Blog-->
<!--                            </a>-->
<!--                            <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">-->
<!--                                Pricing-->
<!--                            </a>-->
<!--                        </div>-->
<!--                        <div class="col-lg-8 mx-auto text-center mb-4 mt-2">-->
<!--                            <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">-->
<!--                                <span class="text-lg fab fa-dribbble"></span>-->
<!--                            </a>-->
<!--                            <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">-->
<!--                                <span class="text-lg fab fa-twitter"></span>-->
<!--                            </a>-->
<!--                            <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">-->
<!--                                <span class="text-lg fab fa-instagram"></span>-->
<!--                            </a>-->
<!--                            <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">-->
<!--                                <span class="text-lg fab fa-pinterest"></span>-->
<!--                            </a>-->
<!--                            <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">-->
<!--                                <span class="text-lg fab fa-github"></span>-->
<!--                            </a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="row">-->
<!--                        <div class="col-8 mx-auto text-center mt-1">-->
<!--                            <p class="mb-0 text-secondary">-->
<!--                                Copyright ©-->
<!--                                <script>-->
<!--                                    document.write(new Date().getFullYear())-->
<!--                                </script>-->
<!--                                Material by Creative Tim.-->
<!--                            </p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </footer>-->

</body>

</html>
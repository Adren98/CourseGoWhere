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

    <script>
        function filter() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[0];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    console.log(td);
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    </script>
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


            <div class="card justify-content-center" style="margin-left:200px;margin-right:200px">
                <div class="col-lg-12">
                    <div class="card-body align-items-center justify-content-center">
                        <h5 style="text-align: center;">Filter</h5><br>
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                            <div class="form-group row">
                                <label for="Field_of_interest" class="col-md-4 col-form-label text-md-right">Field of
                                    Interest</label>
                                <div class="col-md-4">
                                    <!-- Create a dropdown list with <select> -->
                                    <select id="Field_of_interest" name="FOI">
                                        <?php
                                        require_once "Controller/courses_sql.php";
                                        $FOIarr = getFieldOfInterest();
                                        $FOIarr = array_unique($FOIarr);
                                        echo '<option value = "NIL">None Selected</option>';

                                        foreach ($FOIarr as $interest) {
                                            echo '<option value = ' . $interest . '>' . $interest . '</option>';
                                        }

                                        ?>

                                    </select>
                                </div>

                            </div>
                            <br>
                            <div class="form-group row">
                                <label for="cutoffpoint" class="col-md-4 col-form-label text-md-right">Cut Off
                                    Point</label>
                                <div class="col-md-1">
                                    <input type="number" id="cutoffpoint" class="form-control-text" name="cutoffpoint"
                                           min=0
                                           max=40>

                                </div>
                            </div>
                            <br>
                            <div class="form-group row ">
                                <label for="school" class="col-md-4 col-form-label text-md-right">School</label>
                                <div class="col-md-4">
                                    <input type="checkbox" id="NP" name="checkboxSchool[]" value="Ngee Ann Polytechnic">
                                    <label for="NYP"> Ngee Ann Poly</label><br>
                                    <input type="checkbox" id="NYP" name="checkboxSchool[]" value="Nanyang Polytechnic">
                                    <label for="NP">Nanyang Poly</label><br>
                                    <input type="checkbox" id="RP" name="checkboxSchool[]" value="Republic Polytechnic">
                                    <label for="RP"> Republic Poly</label><br>
                                    <input type="checkbox" id="SP" name="checkboxSchool[]" value="Singapore Polytechnic">
                                    <label for="SP"> Singapore Poly</label><br>
                                    <input type="checkbox" id="TP" name="checkboxSchool[]" value="Temasek Polytechnic">
                                    <label for="TP"> Temasek Poly</label><br>

                                </div>
                            </div>


                            <div class="col-md-6 offset-md-4">

                                <button type="submit" class="btn btn-primary" name="submit">
                                    Filter
                                </button>

                            </div>

                        </form>
                    </div>

                </div>

            </div>

            <div class="position-relative border-radius-xl overflow-hidden shadow-lg mb-7">
                <div class="container border-bottom">
                    <div class="row justify-space-between py-2">
                        <div class="col-lg-3 me-auto">
                            <!--                            <p class="lead text-dark pt-1 mb-0">Pagination Simple</p>-->
                            <div class="input-group flex-nowrap">
                                <!--                                <span class="input-group-text" id="addon-wrapping">@</span>-->
                                <input id="myInput" onkeyup="filter()" type="text" class="form-control"
                                       placeholder="Search" aria-label="Search" aria-describedby="addon-wrapping">
                            </div>

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
                        <table class="table" id="myTable">
                            <thead>
                            <tr>
                                <?php
                                require_once "Controller/courses.php";

                                $courses = getcolNames();

                                foreach ($courses as $course) {
                                    echo '<th scope="col">' . $course. '</th>';
                                }


                                ?>

                                <!--                                <th scope="col">#</th>-->
                                <!--                                <th scope="col">CourseName</th>-->
                                <!--                                <th scope="col">Year</th>-->
                                <!--                                <th scope="col">course_cluster</th>-->
                                <!--                                <th scope="col">cut_off_point</th>-->
                                <!--                                <th scope="col">course_url</th>-->
                                <!--                                <th scope="col">School</th>-->
                            </tr>
                            </thead>
                            <tbody>

                            <?php


                            if (isset($_POST['submit'])) {
                                require_once "Controller/courses.php";
                                coursesDisplay();

                            } else {
                                getAllCourse();
                            }


                            ?>


                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


</body>

</html>
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
    <link rel="shortcut icon" type="image/x-icon" href="Picture/logo.png" />
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
<div class="card">

    <form method="post" action="Controller/questionnaire.php">


        <div class="container">

            <div class="row">
                <div class="col-2"></div>
                <div class="col-5">Not interested</div>
                <div class="col-5" style="text-align: center">Interested</div>

            </div>


            <div class="row">
                <div class="col-2">
                    <label for="business1" class="col-form-label text-md-right"
                           style="display: flex; justify-content:end;">Do you wish to take on roles such as business
                        advisor, consultant and financial analyst?</label>

                </div>

                <div class="col-10">
                    <input class="col-2" type="radio" id="business1" name="Business and Management1" value="1">
                    <input class="col-2" type="radio" id="business1" name="Business and Management1" value="2">
                    <input class="col-2" type="radio" id="business1" name="Business and Management1" value="3" checked>
                    <input class="col-2" type="radio" id="business1" name="Business and Management1" value="4">
                    <input class="col-2" type="radio" id="business1" name="Business and Management1" value="5">

                </div>
            </div>


            <hr class="border-1 border-top border-dark">
            <div class="row">
                <div class="col-2">
                    <label for="engineering1" class="col-form-label text-md-right"
                           style="display: flex; justify-content:end;">Do you enjoy creating robots? </label>

                </div>

                <div class="col-10">
                    <input class="col-2" type="radio" id="engineering1" name="Engineering1" value="1">
                    <input class="col-2" type="radio" id="engineering1" name="Engineering1" value="2">
                    <input class="col-2" type="radio" id="engineering1" name="Engineering1" value="3" checked>
                    <input class="col-2" type="radio" id="engineering1" name="Engineering1" value="4">
                    <input class="col-2" type="radio" id="engineering1" name="Engineering1" value="5">

                </div>
            </div>
            <hr class="border-1 border-top border-dark">
            <div class="row">
                <div class="col-2">
                    <label for="adm1" class="col-form-label text-md-right"
                           style="display: flex; justify-content:end;">Are you a creative person?</label>

                </div>

                <div class="col-10">
                    <input class="col-2" type="radio" id="adm1" name="Media and Design1" value="1">
                    <input class="col-2" type="radio" id="adm1" name="Media and Design1" value="2">
                    <input class="col-2" type="radio" id="adm1" name="Media and Design1" value="3" checked>
                    <input class="col-2" type="radio" id="adm1" name="Media and Design1" value="4">
                    <input class="col-2" type="radio" id="adm1" name="Media and Design1" value="5">

                </div>
            </div>


            <hr class="border-1 border-top border-dark">
            <div class="row">
                <div class="col-2">
                    <label for="it1" class="col-form-label text-md-right"
                           style="display: flex; justify-content:end;">Are you interested in coding?</label>

                </div>

                <div class="col-10">
                    <input class="col-2" type="radio" id="it1" name="Information and Digital Technologies1" value="1">
                    <input class="col-2" type="radio" id="it1" name="Information and Digital Technologies1" value="2">
                    <input class="col-2" type="radio" id="it1" name="Information and Digital Technologies1" value="3" checked>
                    <input class="col-2" type="radio" id="it1" name="Information and Digital Technologies1" value="4">
                    <input class="col-2" type="radio" id="it1" name="Information and Digital Technologies1" value="5">

                </div>
            </div>
            <hr class="border-1 border-top border-dark">
            <div class="row">
                <div class="col-2">
                    <label for="appscience1" class="col-form-label text-md-right"
                           style="display: flex; justify-content:end;">Create items based on scientific
                        knowledge </label>

                </div>

                <div class="col-10">
                    <input class="col-2" type="radio" id="appscience1" name="Applied Sciences1" value="1">
                    <input class="col-2" type="radio" id="appscience1" name="Applied Sciences1" value="2">
                    <input class="col-2" type="radio" id="appscience1" name="Applied Sciences1" value="3" checked>
                    <input class="col-2" type="radio" id="appscience1" name="Applied Sciences1" value="4">
                    <input class="col-2" type="radio" id="appscience1" name="Applied Sciences1" value="5">

                </div>
            </div>
            <hr class="border-1 border-top border-dark">
            <div class="row">
                <div class="col-2">
                    <label for="environment1" class="col-form-label text-md-right"
                           style="display: flex; justify-content:end;">Do you aspire to create infrastructure/buildings ? </label>
                </div>
                <div class="col-10">
                    <input class="col-2" type="radio" id="environment1" name="Built Environment1" value="1">
                    <input class="col-2" type="radio" id="environment1" name="Built Environment1" value="2">
                    <input class="col-2" type="radio" id="environment1" name="Built Environment1" value="3" checked>
                    <input class="col-2" type="radio" id="environment1" name="Built Environment1" value="4">
                    <input class="col-2" type="radio" id="environment1" name="Built Environment1" value="5">

                </div>
            </div>


            <hr class="border-1 border-top border-dark">
            <div class="row">
                <div class="col-2">
                    <label for="appscience2" class="col-form-label text-md-right"
                           style="display: flex; justify-content:end;">Interested in research and development?</label>

                </div>

                <div class="col-10">
                    <input class="col-2" type="radio" id="appscience2" name="Applied Sciences2" value="1">
                    <input class="col-2" type="radio" id="appscience2" name="Applied Sciences2" value="2">
                    <input class="col-2" type="radio" id="appscience2" name="Applied Sciences2" value="3" checked>
                    <input class="col-2" type="radio" id="appscience2" name="Applied Sciences2" value="4">
                    <input class="col-2" type="radio" id="appscience2" name="Applied Sciences2" value="5">

                </div>
            </div>
            <hr class="border-1 border-top border-dark">
            <div class="row">
                <div class="col-2">
                    <label for="humanities1" class="col-form-label text-md-right"
                           style="display: flex; justify-content:end;">Are you interested in being a social
                        worker? </label>
                </div>
                <div class="col-10">
                    <input class="col-2" type="radio" id="humanities1" name="Humanities1" value="1">
                    <input class="col-2" type="radio" id="humanities1" name="Humanities1" value="2">
                    <input class="col-2" type="radio" id="humanities1" name="Humanities1" value="3" checked>
                    <input class="col-2" type="radio" id="humanities1" name="Humanities1" value="4">
                    <input class="col-2" type="radio" id="humanities1" name="Humanities1" value="5">

                </div>
            </div>


            <hr class="border-1 border-top border-dark">
            <div class="row">
                <div class="col-2">
                    <label for="maritime1" class="col-form-label text-md-right"
                           style="display: flex; justify-content:end;">Do you like to work on ships? </label>
                </div>
                <div class="col-10">
                    <input class="col-2" type="radio" id="maritime1" name="Maritime Studies1" value="1">
                    <input class="col-2" type="radio" id="maritime1" name="Maritime Studies1" value="2">
                    <input class="col-2" type="radio" id="maritime1" name="Maritime Studies1" value="3" checked>
                    <input class="col-2" type="radio" id="maritime1" name="Maritime Studies1" value="4">
                    <input class="col-2" type="radio" id="maritime1" name="Maritime Studies1" value="5">

                </div>
            </div>


            <hr class="border-1 border-top border-dark">
            <div class="row">
                <div class="col-2">
                    <label for="health1" class="col-form-label text-md-right"
                           style="display: flex; justify-content:end;">Do you like to do like to promote sport as a way
                        of life and get Singaporeans to champion their health?</label>

                </div>

                <div class="col-10">
                    <input class="col-2" type="radio" id="health1" name="Health Sciences1" value="1">
                    <input class="col-2" type="radio" id="health1" name="Health Sciences1" value="2">
                    <input class="col-2" type="radio" id="health1" name="Health Sciences1" value="3" checked>
                    <input class="col-2" type="radio" id="health1" name="Health Sciences1" value="4">
                    <input class="col-2" type="radio" id="health1" name="Health Sciences1" value="5">

                </div>
            </div>

            <hr class="border-1 border-top border-dark">
            <div class="row">
                <div class="col-2">
                    <label for="business2" class="col-form-label text-md-right"
                           style="display: flex; justify-content:end;">Do you want to be a entrepreneur? </label>
                </div>
                <div class="col-10">
                    <input class="col-2" type="radio" id="business2" name="Business and Management2" value="1">
                    <input class="col-2" type="radio" id="business2" name="Business and Management2" value="2">
                    <input class="col-2" type="radio" id="business2" name="Business and Management2" value="3" checked>
                    <input class="col-2" type="radio" id="business2" name="Business and Management2" value="4">
                    <input class="col-2" type="radio" id="business2" name="Business and Management2" value="5">

                </div>
            </div>


            <hr class="border-1 border-top border-dark">
            <div class="row">
                <div class="col-2">
                    <label for="engineering2" class="col-form-label text-md-right"
                           style="display: flex; justify-content:end;"> Do you like to solve problems?</label>

                </div>

                <div class="col-10">
                    <input class="col-2" type="radio" id="engineering2" name="Engineering2" value="1">
                    <input class="col-2" type="radio" id="engineering2" name="Engineering2" value="2">
                    <input class="col-2" type="radio" id="engineering2" name="Engineering2" value="3" checked>
                    <input class="col-2" type="radio" id="engineering2" name="Engineering2" value="4">
                    <input class="col-2" type="radio" id="engineering2" name="Engineering2" value="5">

                </div>
            </div>
            <hr class="border-1 border-top border-dark">
            <div class="row">
                <div class="col-2">
                    <label for="it2" class="col-form-label text-md-right"
                           style="display: flex; justify-content:end;">Are you interested in working with computers and technology? </label>
                </div>
                <div class="col-10">
                    <input class="col-2" type="radio" id="it2" name="Information and Digital Technologies2" value="1">
                    <input class="col-2" type="radio" id="it2" name="Information and Digital Technologies2" value="2">
                    <input class="col-2" type="radio" id="it2" name="Information and Digital Technologies2" value="3" checked>
                    <input class="col-2" type="radio" id="it2" name="Information and Digital Technologies2" value="4">
                    <input class="col-2" type="radio" id="it2" name="Information and Digital Technologies2" value="5">

                </div>
            </div>


            <hr class="border-1 border-top border-dark">
            <div class="row">
                <div class="col-2">
                    <label for="adm2" class="col-form-label text-md-right"
                           style="display: flex; justify-content:end;">Are you interested in content creation?</label>
                </div>
                <div class="col-10">
                    <input class="col-2" type="radio" id="adm2" name="Media and Design2" value="1">
                    <input class="col-2" type="radio" id="adm2" name="Media and Design2" value="2">
                    <input class="col-2" type="radio" id="adm2" name="Media and Design2" value="3" checked>
                    <input class="col-2" type="radio" id="adm2" name="Media and Design2" value="4">
                    <input class="col-2" type="radio" id="adm2" name="Media and Design2" value="5">

                </div>
            </div>

            <hr class="border-1 border-top border-dark">
            <div class="row">
                <div class="col-2">
                    <label for="environment2" class="col-form-label text-md-right"
                           style="display: flex; justify-content:end;"> Do you want to be an Architect?</label>
                </div>
                <div class="col-10">
                    <input class="col-2" type="radio" id="environment2" name="Built Environment2" value="1">
                    <input class="col-2" type="radio" id="environment2" name="Built Environment2" value="2">
                    <input class="col-2" type="radio" id="environment2" name="Built Environment2" value="3" checked>
                    <input class="col-2" type="radio" id="environment2" name="Built Environment2" value="4">
                    <input class="col-2" type="radio" id="environment2" name="Built Environment2" value="5">

                </div>
            </div>
            <hr class="border-1 border-top border-dark">
            <div class="row">
                <div class="col-2">
                    <label for="humanities2" class="col-form-label text-md-right"
                           style="display: flex; justify-content:end;">Do you want to be a teacher? </label>
                </div>
                <div class="col-10">
                    <input class="col-2" type="radio" id="humanities2" name="Humanities2" value="1">
                    <input class="col-2" type="radio" id="humanities2" name="Humanities2" value="2">
                    <input class="col-2" type="radio" id="humanities2" name="Humanities2" value="3" checked>
                    <input class="col-2" type="radio" id="humanities2" name="Humanities2" value="4">
                    <input class="col-2" type="radio" id="humanities2" name="Humanities2" value="5">

                </div>
            </div>

            <hr class="border-1 border-top border-dark">
            <div class="row">
                <div class="col-2">
                    <label for="health2" class="col-form-label text-md-right"
                           style="display: flex; justify-content:end;">Interested in being a health care
                        proffesional? </label>
                </div>
                <div class="col-10">
                    <input class="col-2" type="radio" id="health2" name="Health Sciences2" value="1">
                    <input class="col-2" type="radio" id="health2" name="Health Sciences2" value="2">
                    <input class="col-2" type="radio" id="health2" name="Health Sciences2" value="3" checked>
                    <input class="col-2" type="radio" id="health2" name="Health Sciences2" value="4">
                    <input class="col-2" type="radio" id="health2" name="Health Sciences2" value="5">

                </div>
            </div>


            <hr class="border-1 border-top border-dark">
            <div class="row">
                <div class="col-2">
                    <label for="humanities3" class="col-form-label text-md-right"
                           style="display: flex; justify-content:end;">Do you like to study the human psychology,
                        sociology, anthropology, political science, economics?</label>
                </div>
                <div class="col-10">
                    <input class="col-2" type="radio" id="humanities3" name="Humanities3" value="1">
                    <input class="col-2" type="radio" id="humanities3" name="Humanities3" value="2">
                    <input class="col-2" type="radio" id="humanities3" name="Humanities3" value="3" checked>
                    <input class="col-2" type="radio" id="humanities3" name="Humanities3" value="4">
                    <input class="col-2" type="radio" id="humanities3" name="Humanities3" value="5">

                </div>
            </div>
            <hr class="border-1 border-top border-dark">
            <div class="row">
                <div class="col-2">
                    <label for="maritime2" class="col-form-label text-md-right"
                           style="display: flex; justify-content:end;">Do you like naval architecture? </label>
                </div>
                <div class="col-10">
                    <input class="col-2" type="radio" id="maritime2" name="Maritime Studies2" value="1">
                    <input class="col-2" type="radio" id="maritime2" name="Maritime Studies2" value="2">
                    <input class="col-2" type="radio" id="maritime2" name="Maritime Studies2" value="3" checked>
                    <input class="col-2" type="radio" id="maritime2" name="Maritime Studies2" value="4">
                    <input class="col-2" type="radio" id="maritime2" name="Maritime Studies2" value="5">

                </div>
            </div>

            <hr class="border-1 border-top border-dark">
            <div class="row">
                <div class="col-2">
                    <label for="business3" class="col-form-label text-md-right"
                           style="display: flex; justify-content:end;">Do you want to be a business
                        leader? </label>
                </div>
                <div class="col-10">
                    <input class="col-2" type="radio" id="business3" name="Business and Management3" value="1">
                    <input class="col-2" type="radio" id="business3" name="Business and Management3" value="2">
                    <input class="col-2" type="radio" id="business3" name="Business and Management3" value="3" checked>
                    <input class="col-2" type="radio" id="business3" name="Business and Management3" value="4">
                    <input class="col-2" type="radio" id="business3" name="Business and Management3" value="5">

                </div>
            </div>


            <hr class="border-1 border-top border-dark">
            <div class="row">
                <div class="col-2">
                    <label for="health3" class="col-form-label text-md-right"
                           style="display: flex; justify-content:end;"> Do you have a passion to help people?</label>
                </div>
                <div class="col-10">
                    <input class="col-2" type="radio" id="health3" name="Health Sciences3" value="1">
                    <input class="col-2" type="radio" id="health3" name="Health Sciences3" value="2">
                    <input class="col-2" type="radio" id="health3" name="Health Sciences3" value="3" checked>
                    <input class="col-2" type="radio" id="health3" name="Health Sciences3" value="4">
                    <input class="col-2" type="radio" id="health3" name="Health Sciences3" value="5">

                </div>
            </div>
            <hr class="border-1 border-top border-dark">
            <div class="row">
                <div class="col-2">
                    <label for="engineering3" class="col-form-label text-md-right"
                           style="display: flex; justify-content:end;"> Do you want to be an engineer? </label>
                </div>
                <div class="col-10">
                    <input class="col-2" type="radio" id="engineering3" name="Engineering3" value="1">
                    <input class="col-2" type="radio" id="engineering3" name="Engineering3" value="2">
                    <input class="col-2" type="radio" id="engineering3" name="Engineering3" value="3" checked>
                    <input class="col-2" type="radio" id="engineering3" name="Engineering3" value="4">
                    <input class="col-2" type="radio" id="engineering3" name="Engineering3" value="5">

                </div>
            </div>


            <hr class="border-1 border-top border-dark">
            <div class="row">
                <div class="col-2">
                    <label for="maritime3" class="col-form-label text-md-right"
                           style="display: flex; justify-content:end;"> Do you like to work with offshore design
                        technology?</label>
                </div>
                <div class="col-10">
                    <input class="col-2" type="radio" id="maritime3" name="Maritime Studies3" value="1">
                    <input class="col-2" type="radio" id="maritime3" name="Maritime Studies3" value="2">
                    <input class="col-2" type="radio" id="maritime3" name="Maritime Studies3" value="3" checked>
                    <input class="col-2" type="radio" id="maritime3" name="Maritime Studies3" value="4">
                    <input class="col-2" type="radio" id="maritime3" name="Maritime Studies3" value="5">

                </div>
            </div>

            <hr class="border-1 border-top border-dark">
            <div class="row">
                <div class="col-2">
                    <label for="environment3" class="col-form-label text-md-right"
                           style="display: flex; justify-content:end;">Do you want to be an interior
                        designer?</label>
                </div>
                <div class="col-10">
                    <input class="col-2" type="radio" id="environment3" name="Built Environment3" value="1">
                    <input class="col-2" type="radio" id="environment3" name="Built Environment3" value="2">
                    <input class="col-2" type="radio" id="environment3" name="Built Environment3" value="3" checked>
                    <input class="col-2" type="radio" id="environment3" name="Built Environment3" value="4">
                    <input class="col-2" type="radio" id="environment3" name="Built Environment3" value="5">

                </div>
            </div>
            <hr class="border-1 border-top border-dark">
            <div class="row">
                <div class="col-2">
                    <label for="adm3" class="col-form-label text-md-right"
                           style="display: flex; justify-content:end;"> Are you interested in arts / design /
                        media? </label>
                </div>
                <div class="col-10">
                    <input class="col-2" type="radio" id="adm3" name="Media and Design3" value="1">
                    <input class="col-2" type="radio" id="adm3" name="Media and Design3" value="2">
                    <input class="col-2" type="radio" id="adm3" name="Media and Design3" value="3" checked>
                    <input class="col-2" type="radio" id="adm3" name="Media and Design3" value="4">
                    <input class="col-2" type="radio" id="adm3" name="Media and Design3" value="5">

                </div>
            </div>
            <hr class="border-1 border-top border-dark">
            <div class="row">
                <div class="col-2">
                    <label for="appscience3" class="col-form-label text-md-right"
                           style="display: flex; justify-content:end;">Do you like working with pharmaceutical, chemical
                        and food companies?</label>
                </div>
                <div class="col-10">
                    <input class="col-2" type="radio" id="appscience3" name="Applied Sciences3" value="1">
                    <input class="col-2" type="radio" id="appscience3" name="Applied Sciences3" value="2">
                    <input class="col-2" type="radio" id="appscience3" name="Applied Sciences3" value="3" checked>
                    <input class="col-2" type="radio" id="appscience3" name="Applied Sciences3" value="4">
                    <input class="col-2" type="radio" id="appscience3" name="Applied Sciences3" value="5">

                </div>
            </div>

            <hr class="border-1 border-top border-dark">
            <div class="row">
                <div class="col-2">
                    <label for="it3" class="col-form-label text-md-right"
                           style="display: flex; justify-content:end;"> Creating solutions to problems with software
                        programs? </label>
                </div>
                <div class="col-10">
                    <input class="col-2" type="radio" id="it3" name="Information and Digital Technologies3" value="1">
                    <input class="col-2" type="radio" id="it3" name="Information and Digital Technologies3" value="2">
                    <input class="col-2" type="radio" id="it3" name="Information and Digital Technologies3" value="3" checked>
                    <input class="col-2" type="radio" id="it3" name="Information and Digital Technologies3" value="4">
                    <input class="col-2" type="radio" id="it3" name="Information and Digital Technologies3" value="5">

                </div>
            </div>
            <hr class="border-1 border-top border-dark">
            <div class="row">
                <div class="col-2">
                    <label for="schoolselect" class="col-form-label text-md-right"
                           style="display: flex; justify-content:end;"> Which schools are you interested in?</label>
                </div>


                <div class="col-sm">


                    <input type="checkbox" id="nyp" name="checkboxSchool[]"" value="nyp" checked>
                    <label for="nyp">NYP</label>


                </div>


                <div class="col-sm">

                    <input type="checkbox" id="np" name="checkboxSchool[]" value="np" checked>
                    <label for="np">NP</label>
                </div>

                <div class="col-sm">

                    <input type="checkbox" id="sp" name="checkboxSchool[]" value="sp" checked>
                    <label for="sp">SP</label>
                </div>

                <div class="col-sm">

                    <input type="checkbox" id="rp" name="checkboxSchool[]" value="rp" checked>
                    <label for="rp">RP</label>

                </div>
                <div class="col-sm">

                    <input type="checkbox" id="tp" name="checkboxSchool[]" value="tp" checked>
                    <label for="tp">TP</label>
                </div>


            </div>



            <div class="row">

                <div class="col-12 col text-center">
                    <button  type="submit" id="submit" name="submit" value="submit" class="btn btn-primary ">Submit</button>
                </div>
            </div>
        </div>
    </form>
</div>


</body>

</html>
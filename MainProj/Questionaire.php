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
<div class="card">

    <form>


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
                    <input class="col-2" type="radio" id="business1" name="business1" value="1">
                    <input class="col-2" type="radio" id="business1" name="business1" value="2">
                    <input class="col-2" type="radio" id="business1" name="business1" value="3">
                    <input class="col-2" type="radio" id="business1" name="business1" value="4">
                    <input class="col-2" type="radio" id="business1" name="business1" value="5">

                </div>
            </div>

            <div class="row">
                <div class="col-2">
                    <label for="engineering1" class="col-form-label text-md-right"
                           style="display: flex; justify-content:end;">Enjoy physical Creation?</label>

                </div>

                <div class="col-10">
                    <input class="col-2" type="radio" id="engineering1" name="engineering1" value="1">
                    <input class="col-2" type="radio" id="engineering1" name="engineering1" value="2">
                    <input class="col-2" type="radio" id="engineering1" name="engineering1" value="3">
                    <input class="col-2" type="radio" id="engineering1" name="engineering1" value="4">
                    <input class="col-2" type="radio" id="engineering1" name="engineering1" value="5">

                </div>
            </div>



            <div class="row">
                <div class="col-2">
                    <label for="adm1" class="col-form-label text-md-right"
                           style="display: flex; justify-content:end;">Are you a creative person?</label>

                </div>

                <div class="col-10">
                    <input class="col-2" type="radio" id="adm1" name="adm1" value="1">
                    <input class="col-2" type="radio" id="adm1" name="adm1" value="2">
                    <input class="col-2" type="radio" id="adm1" name="adm1" value="3">
                    <input class="col-2" type="radio" id="adm1" name="adm1" value="4">
                    <input class="col-2" type="radio" id="adm1" name="adm1" value="5">

                </div>
            </div>




            <div class="row">
                <div class="col-2">
                    <label for="it1" class="col-form-label text-md-right"
                           style="display: flex; justify-content:end;">Are you interested in coding?</label>

                </div>

                <div class="col-10">
                    <input class="col-2" type="radio" id="it1" name="it1" value="1">
                    <input class="col-2" type="radio" id="it1" name="it1" value="2">
                    <input class="col-2" type="radio" id="it1" name="it1" value="3">
                    <input class="col-2" type="radio" id="it1" name="it1" value="4">
                    <input class="col-2" type="radio" id="it1" name="it1" value="5">

                </div>
            </div>

            <div class="row">
                <div class="col-2">
                    <label for="appscience1" class="col-form-label text-md-right"
                           style="display: flex; justify-content:end;">Attain practical goals based on scientific knowledge </label>

                </div>

                <div class="col-10">
                    <input class="col-2" type="radio" id="appscience1" name="appscience1" value="1">
                    <input class="col-2" type="radio" id="appscience1" name="appscience1" value="2">
                    <input class="col-2" type="radio" id="appscience1" name="appscience1" value="3">
                    <input class="col-2" type="radio" id="appscience1" name="appscience1" value="4">
                    <input class="col-2" type="radio" id="appscience1" name="appscience1" value="5">

                </div>
            </div>

            <div class="row">
                <div class="col-2">
                    <label for="enviroment1" class="col-form-label text-md-right"
                           style="display: flex; justify-content:end;">Do you aspire to create infrastructure/buildings in the future? </label>
                </div>
                <div class="col-10">
                    <input class="col-2" type="radio" id="enviroment1" name="enviroment1" value="1">
                    <input class="col-2" type="radio" id="enviroment1" name="enviroment1" value="2">
                    <input class="col-2" type="radio" id="enviroment1" name="enviroment1" value="3">
                    <input class="col-2" type="radio" id="enviroment1" name="enviroment1" value="4">
                    <input class="col-2" type="radio" id="enviroment1" name="enviroment1" value="5">

                </div>
            </div>



            <div class="row">
                <div class="col-2">
                    <label for="appscience2" class="col-form-label text-md-right"
                           style="display: flex; justify-content:end;">Interested in research and development?</label>

                </div>

                <div class="col-10">
                    <input class="col-2" type="radio" id="appscience2" name="appscience2" value="1">
                    <input class="col-2" type="radio" id="appscience2" name="appscience2" value="2">
                    <input class="col-2" type="radio" id="appscience2" name="appscience2" value="3">
                    <input class="col-2" type="radio" id="appscience2" name="appscience2" value="4">
                    <input class="col-2" type="radio" id="appscience2" name="appscience2" value="5">

                </div>
            </div>

            <div class="row">
                <div class="col-2">
                    <label for="humanities1" class="col-form-label text-md-right"
                           style="display: flex; justify-content:end;">Do you want to be a future social worker? </label>
                </div>
                <div class="col-10">
                    <input class="col-2" type="radio" id="humanities1" name="humanities1" value="1">
                    <input class="col-2" type="radio" id="humanities1" name="humanities1" value="2">
                    <input class="col-2" type="radio" id="humanities1" name="humanities1" value="3">
                    <input class="col-2" type="radio" id="humanities1" name="humanities1" value="4">
                    <input class="col-2" type="radio" id="humanities1" name="humanities1" value="5">

                </div>
            </div>



            <div class="row">
                <div class="col-2">
                    <label for="maritime1" class="col-form-label text-md-right"
                           style="display: flex; justify-content:end;">Do you like to work on ships? </label>
                </div>
                <div class="col-10">
                    <input class="col-2" type="radio" id="maritime1" name="maritime1" value="1">
                    <input class="col-2" type="radio" id="maritime1" name="maritime1" value="2">
                    <input class="col-2" type="radio" id="maritime1" name="maritime1" value="3">
                    <input class="col-2" type="radio" id="maritime1" name="maritime1" value="4">
                    <input class="col-2" type="radio" id="maritime1" name="maritime1" value="5">

                </div>
            </div>








            <div class="row">
                <div class="col-2">
                    <label for="health1" class="col-form-label text-md-right"
                           style="display: flex; justify-content:end;">Do you like to do like to promote sport as a way of life and get Singaporeans to champion their health?</label>

                </div>

                <div class="col-10">
                    <input class="col-2" type="radio" id="health1" name="health1" value="1">
                    <input class="col-2" type="radio" id="health1" name="health1" value="2">
                    <input class="col-2" type="radio" id="health1" name="health1" value="3">
                    <input class="col-2" type="radio" id="health1" name="health1" value="4">
                    <input class="col-2" type="radio" id="health1" name="health1" value="5">

                </div>
            </div>


            <div class="row">
                <div class="col-2">
                    <label for="business2" class="col-form-label text-md-right"
                           style="display: flex; justify-content:end;">Do you want to be a future entrepreneur? </label>
                </div>
                <div class="col-10">
                    <input class="col-2" type="radio" id="business2" name="business2" value="1">
                    <input class="col-2" type="radio" id="business2" name="business2" value="2">
                    <input class="col-2" type="radio" id="business2" name="business2" value="3">
                    <input class="col-2" type="radio" id="business2" name="business2" value="4">
                    <input class="col-2" type="radio" id="business2" name="business2" value="5">

                </div>
            </div>






            <div class="row">
                <div class="col-2">
                    <label for="engineering2" class="col-form-label text-md-right"
                           style="display: flex; justify-content:end;"> Do you like to solve problems?</label>

                </div>

                <div class="col-10">
                    <input class="col-2" type="radio" id="engineering2" name="engineering2" value="1">
                    <input class="col-2" type="radio" id="engineering2" name="engineering2" value="2">
                    <input class="col-2" type="radio" id="engineering2" name="engineering2" value="3">
                    <input class="col-2" type="radio" id="engineering2" name="engineering2" value="4">
                    <input class="col-2" type="radio" id="engineering2" name="engineering2" value="5">

                </div>
            </div>

            <div class="row">
                <div class="col-2">
                    <label for="it2" class="col-form-label text-md-right"
                           style="display: flex; justify-content:end;">Working with computers and technology? </label>
                </div>
                <div class="col-10">
                    <input class="col-2" type="radio" id="it2" name="it2" value="1">
                    <input class="col-2" type="radio" id="it2" name="it2" value="2">
                    <input class="col-2" type="radio" id="it2" name="it2" value="3">
                    <input class="col-2" type="radio" id="it2" name="it2" value="4">
                    <input class="col-2" type="radio" id="it2" name="it2" value="5">

                </div>
            </div>



            <div class="row">
                <div class="col-2">
                    <label for="adm2" class="col-form-label text-md-right"
                           style="display: flex; justify-content:end;">Are you interested in content creation?</label>
                </div>
                <div class="col-10">
                    <input class="col-2" type="radio" id="adm2" name="adm2" value="1">
                    <input class="col-2" type="radio" id="adm2" name="adm2" value="2">
                    <input class="col-2" type="radio" id="adm2" name="adm2" value="3">
                    <input class="col-2" type="radio" id="adm2" name="adm2" value="4">
                    <input class="col-2" type="radio" id="adm2" name="adm2" value="5">

                </div>
            </div>


            <div class="row">
                <div class="col-2">
                    <label for="enviroment2" class="col-form-label text-md-right"
                           style="display: flex; justify-content:end;"> Do you want to be a future architect?</label>
                </div>
                <div class="col-10">
                    <input class="col-2" type="radio" id="enviroment2" name="enviroment2" value="1">
                    <input class="col-2" type="radio" id="enviroment2" name="enviroment2" value="2">
                    <input class="col-2" type="radio" id="enviroment2" name="enviroment2" value="3">
                    <input class="col-2" type="radio" id="enviroment2" name="enviroment2" value="4">
                    <input class="col-2" type="radio" id="enviroment2" name="enviroment2" value="5">

                </div>
            </div>

            <div class="row">
                <div class="col-2">
                    <label for="humanities2" class="col-form-label text-md-right"
                           style="display: flex; justify-content:end;">Do you want to be a future teacher? </label>
                </div>
                <div class="col-10">
                    <input class="col-2" type="radio" id="humanities2" name="humanities2" value="1">
                    <input class="col-2" type="radio" id="humanities2" name="humanities2" value="2">
                    <input class="col-2" type="radio" id="humanities2" name="humanities2" value="3">
                    <input class="col-2" type="radio" id="humanities2" name="humanities2" value="4">
                    <input class="col-2" type="radio" id="humanities2" name="humanities2" value="5">

                </div>
            </div>


            <div class="row">
                <div class="col-2">
                    <label for="heath2" class="col-form-label text-md-right"
                           style="display: flex; justify-content:end;">Interested in being a health care proffesional? </label>
                </div>
                <div class="col-10">
                    <input class="col-2" type="radio" id="heath2" name="heath2" value="1">
                    <input class="col-2" type="radio" id="heath2" name="heath2" value="2">
                    <input class="col-2" type="radio" id="heath2" name="heath2" value="3">
                    <input class="col-2" type="radio" id="heath2" name="heath2" value="4">
                    <input class="col-2" type="radio" id="heath2" name="heath2" value="5">

                </div>
            </div>





            <div class="row">
                <div class="col-2">
                    <label for="humanities3" class="col-form-label text-md-right"
                           style="display: flex; justify-content:end;">Do you like to study the human psychology, sociology, anthropology, political science, economics?</label>
                </div>
                <div class="col-10">
                    <input class="col-2" type="radio" id="humanities3" name="humanities3" value="1">
                    <input class="col-2" type="radio" id="humanities3" name="humanities3" value="2">
                    <input class="col-2" type="radio" id="humanities3" name="humanities3" value="3">
                    <input class="col-2" type="radio" id="humanities3" name="humanities3" value="4">
                    <input class="col-2" type="radio" id="humanities3" name="humanities3" value="5">

                </div>
            </div>

            <div class="row">
                <div class="col-2">
                    <label for="maritime2" class="col-form-label text-md-right"
                           style="display: flex; justify-content:end;">Do you like naval architecture?  </label>
                </div>
                <div class="col-10">
                    <input class="col-2" type="radio" id="maritime2" name="maritime2" value="1">
                    <input class="col-2" type="radio" id="maritime2" name="maritime2" value="2">
                    <input class="col-2" type="radio" id="maritime2" name="maritime2" value="3">
                    <input class="col-2" type="radio" id="maritime2" name="maritime2" value="4">
                    <input class="col-2" type="radio" id="maritime2" name="maritime2" value="5">

                </div>
            </div>


            <div class="row">
                <div class="col-2">
                    <label for="business3" class="col-form-label text-md-right"
                           style="display: flex; justify-content:end;">Do you want to be a future business leader?  </label>
                </div>
                <div class="col-10">
                    <input class="col-2" type="radio" id="business3" name="business3" value="1">
                    <input class="col-2" type="radio" id="business3" name="business3" value="2">
                    <input class="col-2" type="radio" id="business3" name="business3" value="3">
                    <input class="col-2" type="radio" id="business3" name="business3" value="4">
                    <input class="col-2" type="radio" id="business3" name="business3" value="5">

                </div>
            </div>





            <div class="row">
                <div class="col-2">
                    <label for="health3" class="col-form-label text-md-right"
                           style="display: flex; justify-content:end;"> A Passion To Touch Lives?</label>
                </div>
                <div class="col-10">
                    <input class="col-2" type="radio" id="health3" name="health3" value="1">
                    <input class="col-2" type="radio" id="health3" name="health3" value="2">
                    <input class="col-2" type="radio" id="health3" name="health3" value="3">
                    <input class="col-2" type="radio" id="health3" name="health3" value="4">
                    <input class="col-2" type="radio" id="health3" name="health3" value="5">

                </div>
            </div>

            <div class="row">
                <div class="col-2">
                    <label for="engineering3" class="col-form-label text-md-right"
                           style="display: flex; justify-content:end;"> Do you want to be a future engineer? </label>
                </div>
                <div class="col-10">
                    <input class="col-2" type="radio" id="engineering3" name="engineering3" value="1">
                    <input class="col-2" type="radio" id="engineering3" name="engineering3" value="2">
                    <input class="col-2" type="radio" id="engineering3" name="engineering3" value="3">
                    <input class="col-2" type="radio" id="engineering3" name="engineering3" value="4">
                    <input class="col-2" type="radio" id="engineering3" name="engineering3" value="5">

                </div>
            </div>



            <div class="row">
                <div class="col-2">
                    <label for="maritime3" class="col-form-label text-md-right"
                           style="display: flex; justify-content:end;"> Do you like to work with offshore design technology?</label>
                </div>
                <div class="col-10">
                    <input class="col-2" type="radio" id="maritime3" name="maritime3" value="1">
                    <input class="col-2" type="radio" id="maritime3" name="maritime3" value="2">
                    <input class="col-2" type="radio" id="maritime3" name="maritime3" value="3">
                    <input class="col-2" type="radio" id="maritime3" name="maritime3" value="4">
                    <input class="col-2" type="radio" id="maritime3" name="maritime3" value="5">

                </div>
            </div>


            <div class="row">
                <div class="col-2">
                    <label for="enviroment3" class="col-form-label text-md-right"
                           style="display: flex; justify-content:end;">Do you want to be a future interior designer?</label>
                </div>
                <div class="col-10">
                    <input class="col-2" type="radio" id="enviroment3" name="enviroment3" value="1">
                    <input class="col-2" type="radio" id="enviroment3" name="enviroment3" value="2">
                    <input class="col-2" type="radio" id="enviroment3" name="enviroment3" value="3">
                    <input class="col-2" type="radio" id="enviroment3" name="enviroment3" value="4">
                    <input class="col-2" type="radio" id="enviroment3" name="enviroment3" value="5">

                </div>
            </div>

            <div class="row">
                <div class="col-2">
                    <label for="adm3" class="col-form-label text-md-right"
                           style="display: flex; justify-content:end;"> are you interested in arts / design / media? </label>
                </div>
                <div class="col-10">
                    <input class="col-2" type="radio" id="adm3" name="adm3" value="1">
                    <input class="col-2" type="radio" id="adm3" name="adm3" value="2">
                    <input class="col-2" type="radio" id="adm3" name="adm3" value="3">
                    <input class="col-2" type="radio" id="adm3" name="adm3" value="4">
                    <input class="col-2" type="radio" id="adm3" name="adm3" value="5">

                </div>
            </div>

            <div class="row">
                <div class="col-2">
                    <label for="appscience3" class="col-form-label text-md-right"
                           style="display: flex; justify-content:end;">Do you like working with pharmaceutical, chemical and food companies?</label>
                </div>
                <div class="col-10">
                    <input class="col-2" type="radio" id="appscience3" name="appscience3" value="1">
                    <input class="col-2" type="radio" id="appscience3" name="appscience3" value="2">
                    <input class="col-2" type="radio" id="appscience3" name="appscience3" value="3">
                    <input class="col-2" type="radio" id="appscience3" name="appscience3" value="4">
                    <input class="col-2" type="radio" id="appscience3" name="appscience3" value="5">

                </div>
            </div>


            <div class="row">
                <div class="col-2">
                    <label for="it3" class="col-form-label text-md-right"
                           style="display: flex; justify-content:end;"> Creating solutions to problems with software programs? </label>
                </div>
                <div class="col-10">
                    <input class="col-2" type="radio" id="it3" name="it3" value="1">
                    <input class="col-2" type="radio" id="it3" name="it3" value="2">
                    <input class="col-2" type="radio" id="it3" name="it3" value="3">
                    <input class="col-2" type="radio" id="it3" name="it3" value="4">
                    <input class="col-2" type="radio" id="it3" name="it3" value="5">

                </div>
            </div>


        </div>
    </form>
</div>


</body>

</html>
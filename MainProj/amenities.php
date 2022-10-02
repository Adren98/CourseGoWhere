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

        $(document).ready(function(){

            $(".collapse").on('show.bs.collapse', function(){
                alert('The collapsible content is about to be shown.');
            });
    </script>
</head>

<body class="pagination-sections">
<!-- Navbar Light -->
<?php

include 'navfloating.php';
?>
<div class="container">
    <div class="row" style="margin-top: 10%">


        <div class="col-sm" >
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="Picture/NP_direction.png" alt="Los Angeles" style="width:100%;">
                    </div>

                    <div class="item">
                        <img src="" alt="Chicago" style="width:100%;">
                    </div>

                    <div class="item">
                        <img src="" alt="New york" style="width:100%;">
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

        </div>



        <div class="col-sm">
            <div class = "row">
            <div class="col-lg-6">
                <div class="rotating-card-container">
                    <div class="card card-rotate card-background card-background-mask-primary shadow-primary mt-md-0 mt-5">LifeStyle Library
                        <div class="front front-background"
                             style="background-image: url(Picture/np_lifestyle.png) ; background-size: cover; width: 300px">
                            <div class="card-body py-6 text-left">
                                <i class="material-icons text-white text-4xl my-3">touch_app</i>
                                <h3 class="text-white"></h3>
                                <p class="text-white opacity-10">
                                </p>
                            </div>
                        </div>
                        <div class="back back-background"
                             style="background-image: url(Picture/Amenities/primary_colour.png); background-size: cover;width: 300px">
                            <div class="card-body pt-1 text-center" >
                                <h3 class="text-primary"></h3>
                                <p class="text-white opacity-10">
                                    Keep yourself updated with trends in fashion, entertainment and food through the lifestyle magazines.
                                </p>
                                <a href="https://www.np.edu.sg/library/pages/facilities.aspx" target="_blank"
                                   class="btn btn-white btn-sm w-50 mx-auto mt-3">Find out more!</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
                <div class="col-lg-6">

                    <div class="rotating-card-container">
                        <div class="card card-rotate card-background card-background-mask-primary shadow-primary mt-md-0 mt-5">iSpace
                            <div class="front front-background"
                                 style="background-image: url(Picture/Amenities/ispace.png) ; background-size: cover; width: 300px">
                                <div class="card-body py-6 text-left">
                                    <i class="material-icons text-white text-4xl my-3">touch_app</i>
                                    <h3 class="text-white"></h3>
                                    <p class="text-white opacity-10">
                                    </p>
                                </div>
                            </div>
                            <div class="back back-background"
                                 style="background-image: url(Picture/Amenities/primary_colour.png); background-size: cover;width: 300px">
                                <div class="card-body pt-1 text-center" >
                                    <h3 class="text-primary"></h3>
                                    <p class="text-white opacity-10">
                                        iSpace is equipped with writable wall and interactive projector to support group learning and discussion. The room can accommodate up to 12 people.​
                                    </p>
                                    <a href="https://www.np.edu.sg/library/pages/facilities.aspx" target="_blank"
                                       class="btn btn-white btn-sm w-50 mx-auto mt-3">Find out more!</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>




            </div>
            <div class="col-sm">
                <div class = "row" style="margin-top: 15px">
                    <div class="col-lg-6">

                        <div class="rotating-card-container">
                            <div class="card card-rotate card-background card-background-mask-primary shadow-primary mt-md-0 mt-5">SmartCube
                                <div class="front front-background"
                                     style="background-image: url(Picture/Amenities/SmartCube.png) ; background-size: cover; width: 300px">
                                    <div class="card-body py-6 text-left">
                                        <i class="material-icons text-white text-4xl my-3">touch_app</i>
                                        <h3 class="text-white"></h3>
                                        <p class="text-white opacity-10">
                                        </p>
                                    </div>
                                </div>
                                <div class="back back-background"
                                     style="background-image: url(Picture/Amenities/primary_colour.png); background-size: cover;width: 300px">
                                    <div class="card-body pt-1 text-center" >
                                        <h3 class="text-primary"></h3>
                                        <p class="text-white opacity-10">
                                            Smart Cube is equipped with writable wall, writable table and TV projector to support group learning and discussion. Each room can accommodate up to 6 people.
                                        </p>
                                        <a href="https://www.np.edu.sg/library/pages/facilities.aspx" target="_blank"
                                           class="btn btn-white btn-sm w-50 mx-auto mt-3">Find out more!</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-6">

                        <div class="rotating-card-container">
                            <div class="card card-rotate card-background card-background-mask-primary shadow-primary mt-md-0 mt-5">Lien Ying Chow Gallery
                                <div class="front front-background"
                                     style="background-image: url(Picture/Amenities/gallery.png) ; background-size: cover; width: 300px">
                                    <div class="card-body py-6 text-left">
                                        <i class="material-icons text-white text-4xl my-3">touch_app</i>
                                        <h3 class="text-white"></h3>
                                        <p class="text-white opacity-10">
                                        </p>
                                    </div>
                                </div>
                                <div class="back back-background"
                                     style="background-image: url(Picture/Amenities/primary_colour.png); background-size: cover;width: 300px">
                                    <div class="card-body pt-1 text-center" >
                                        <h3 class="text-primary"></h3>
                                        <p class="text-white opacity-10">
                                            Be inspired to emulate Dr Lien’s qualities of perseverance, tenacity, philanthropy and humility, fire up your entrepreneurial spirit, achieve your own greatness and give back to society.
                                        </p>
                                        <a href="https://www.np.edu.sg/library/pages/facilities.aspx" target="_blank"
                                           class="btn btn-white btn-sm w-50 mx-auto mt-3">Find out more!</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>




                </div>


        </div>
            <div class="col-sm">
                <div class = "row" style="margin-top: 15px"> Special Mentions:
                    <div class="col-lg-12">

                        <div class="rotating-card-container">
                            <div class="card card-rotate card-background card-background-mask-primary shadow-primary mt-md-0 mt-5">Dialogue in the Dark
                                <div class="front front-background"
                                     style="background-image: url(Picture/Amenities/np_dialogueid.png) ; background-size: cover; width: 650px">
                                    <div class="card-body py-6 text-left">
                                        <i class="material-icons text-white text-4xl my-3">touch_app</i>
                                        <h3 class="text-white"></h3>
                                        <p class="text-white opacity-10">
                                        </p>
                                    </div>
                                </div>
                                <div class="back back-background"
                                     style="background-image: url(Picture/Amenities/primary_colour.png); background-size: cover;width: 650px">
                                    <div class="card-body pt-1 text-center" >
                                        <h3 class="text-primary"></h3>
                                        <p class="text-white opacity-10">
                                            Dialogue in the Dark is one of the world’s most exciting life-changing experiences where visitors are guided by blind guides in absolute darkness. You get the chance to experience daily environments from a completely new perspective, when you enjoy a walk in the park, take a boat cruise or visit a café in our specially designed darkened rooms. Daily routines become exciting and a reversal of role is created where sighted become blind and blind become sighted.
                                        </p>
                                        <a href="https://www.dialogue-se.com/what-we-do/dialogue-in-the-dark/" target="_blank"
                                           class="btn btn-white btn-sm w-50 mx-auto mt-3">Find out more!</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>


                    </div>




                </div>


            </div>
        </div>


    </div>
</div>



</body>

</html>
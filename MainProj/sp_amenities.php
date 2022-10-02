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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./assets/css/amenities.css">

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
        <div class="dropdown">
            <button class="btn bg-gradient-white dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <a href="amenities.php"> <img src="Picture/ngee-ann-polytechnic.png" style="height:100px; width:250px"; ></a>
                <a href="sp_amenities.php"> <img src="Picture/singapore-polytechnic.png" style="height:100px; width:250px"; ></a>
                <a href="nyp_amenities.php"> <img src="Picture/nanyang-polytechnic.png" style="height:100px; width:250px"; ></a>
                <a href="rp_amenities.php"> <img src="Picture/republic-polytechnic.png" style="height:100px; width:250px"; ></a>
                <a href="tp_amenities.php"> <img src="Picture/temasek_polytechnic.png" style="height:100px; width:200px"; ></a>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
        </div>

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














        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="./assets/css/amenities.css">

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








        <div class="col-sm">
            <div class = "row">
                <div class="col-lg-6">
                    <div class="rotating-card-container">
                        <div class="card card-rotate card-background card-background-mask-primary shadow-primary mt-md-0 mt-5">AI and Analytics Collab
                            <div class="front front-background"
                                 style="background-image: url(Picture/Amenities/sp/colab1.png) ; background-size: cover; width: 300px">
                                <div class="card-body py-6 text-left">
                                    <i class="material-icons text-white text-4xl my-3">touch_app</i>
                                    <h3 class="text-white"></h3>
                                    <p class="text-white opacity-10">
                                    </p>
                                </div>
                            </div>
                            <div class="back back-background"
                                 style="background-image: url(Picture/Amenities/np/primary_colour.png); background-size: cover;width: 300px">
                                <div class="card-body pt-1 text-center" >
                                    <h3 class="text-primary"></h3>
                                    <p class="text-white opacity-10">
                                        Equipped with a High Performance Computing server, students can experiment with deep learning applications to distill hidden insights in big data.
                                    </p>
                                    <a href="https://www.sp.edu.sg/soc/about-soc/our-facilities" target="_blank"
                                       class="btn btn-white btn-sm w-50 mx-auto mt-3">Find out more!</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6">

                    <div class="rotating-card-container">
                        <div class="card card-rotate card-background card-background-mask-primary shadow-primary mt-md-0 mt-5">App Studio
                            <div class="front front-background"
                                 style="background-image: url(Picture/Amenities/sp/Appstudio.png) ; background-size: cover; width: 300px">
                                <div class="card-body py-6 text-left">
                                    <i class="material-icons text-white text-4xl my-3">touch_app</i>
                                    <h3 class="text-white"></h3>
                                    <p class="text-white opacity-10">
                                    </p>
                                </div>
                            </div>
                            <div class="back back-background"
                                 style="background-image: url(Picture/Amenities/np/primary_colour.png); background-size: cover;width: 300px">
                                <div class="card-body pt-1 text-center" >
                                    <h3 class="text-primary"></h3>
                                    <p class="text-white opacity-10">
                                        A software development environment focusing on creating UI / UX design, web and mobile apps.
                                    </p>
                                    <a href="https://www.sp.edu.sg/soc/about-soc/our-facilities" target="_blank"
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
                            <div class="card card-rotate card-background card-background-mask-primary shadow-primary mt-md-0 mt-5">Cyber Warefare Centre
                                <div class="front front-background"
                                     style="background-image: url(Picture/Amenities/sp/Cyberwarfare.png) ; background-size: cover; width: 300px">
                                    <div class="card-body py-6 text-left">
                                        <i class="material-icons text-white text-4xl my-3">touch_app</i>
                                        <h3 class="text-white"></h3>
                                        <p class="text-white opacity-10">
                                        </p>
                                    </div>
                                </div>
                                <div class="back back-background"
                                     style="background-image: url(Picture/Amenities/np/primary_colour.png); background-size: cover;width: 300px">
                                    <div class="card-body pt-1 text-center" >
                                        <h3 class="text-primary"></h3>
                                        <p class="text-white opacity-10">
                                            Students get to hone their cyber defence skills through scenario-based simulated cyber attacks.
                                        </p>
                                        <a href="https://www.sp.edu.sg/soc/about-soc/our-facilities" target="_blank"
                                           class="btn btn-white btn-sm w-50 mx-auto mt-3">Find out more!</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-6">

                        <div class="rotating-card-container">
                            <div class="card card-rotate card-background card-background-mask-primary shadow-primary mt-md-0 mt-5">Immersive Lab
                                <div class="front front-background"
                                     style="background-image: url(Picture/Amenities/sp/immersive-lab-photo.png) ; background-size: cover; width: 300px">
                                    <div class="card-body py-6 text-left">
                                        <i class="material-icons text-white text-4xl my-3">touch_app</i>
                                        <h3 class="text-white"></h3>
                                        <p class="text-white opacity-10">
                                        </p>
                                    </div>
                                </div>
                                <div class="back back-background"
                                     style="background-image: url(Picture/Amenities/np/primary_colour.png); background-size: cover;width: 300px">
                                    <div class="card-body pt-1 text-center" >
                                        <h3 class="text-primary"></h3>
                                        <p class="text-white opacity-10">
                                            A design studio specialising in advance software capabilities to simulate immersions into the virtual and augmented worlds.
                                        </p>
                                        <a href="https://www.sp.edu.sg/soc/about-soc/our-facilities" target="_blank"
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
                            <div class="card card-rotate card-background card-background-mask-primary shadow-primary mt-md-0 mt-5">Mobile Food Van by Old Change Kee
                                <div class="front front-background"
                                     style="background-image: url(Picture/Amenities/sp/oldchangkee-sp.png) ; background-size: cover; width: 650px">
                                    <div class="card-body py-6 text-left">
                                        <i class="material-icons text-white text-4xl my-3">touch_app</i>
                                        <h3 class="text-white"></h3>
                                        <p class="text-white opacity-10">
                                        </p>
                                    </div>
                                </div>
                                <div class="back back-background"
                                     style="background-image: url(Picture/Amenities/np/primary_colour.png); background-size: cover;width: 650px">
                                    <div class="card-body pt-1 text-center" >
                                        <h3 class="text-primary"></h3>
                                        <p class="text-white opacity-10">
                                            Term time:
                                            <br>Level 1 T12A</br><br>Mon, Tue & Thurs: 8am to 3pm </br><br>Vacation period:
                                            Thurs: 8am to 3pm</br>
                                        </p>
                                        <a href="https://www.sp.edu.sg/sp/about-sp/facilities/retail-dining" target="_blank"
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
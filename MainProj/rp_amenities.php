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
    <script src="./assets/js/script.js" defer></script>

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
        <div class="nav-wrapper position-relative end-0">
            <ul class="nav nav-pills nav-fill p-1" role="tablist">
                <li class="nav-item">
                    <a class="nav-link mb-0 px-0 py-1 active" data-bs-toggle="tab" href="amenities.php" role="tab" aria-controls="profile" aria-selected="true">
                        <img src="Picture/ngee-ann-polytechnic.png" style="height:100px; width:250px"; >
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="sp_amenities.php" role="tab" aria-controls="dashboard" aria-selected="false">
                        <img src="Picture/singapore-polytechnic.png" style="height:100px; width:250px"; >
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="nyp_amenities.php" role="tab" aria-controls="dashboard" aria-selected="false">
                        <img src="Picture/nanyang-polytechnic.png" style="height:100px; width:250px"; >
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="rp_amenities.php" role="tab" aria-controls="dashboard" aria-selected="false">
                        <a href="rp_amenities.php"> <img src="Picture/republic-polytechnic.png" style="height:100px; width:250px"; >
                        </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="tp_amenities.php" role="tab" aria-controls="dashboard" aria-selected="false">
                        <img src="Picture/temasek_polytechnic.png" style="height:100px; width:200px"; >
                    </a>
                </li>
            </ul>
        </div>

        <div class="col-sm" >

            <section aria-label="Newest Photos">
                <div class="carousel" data-carousel>
                    <button class="carousel-button prev" data-carousel-button="prev">&#8656;</button>
                    <button class="carousel-button next" data-carousel-button="next">&#8658;</button>
                    <ul data-slides>
                        <li class="slide" data-active>
                            <img src="Picture/Amenities/Amenities_location/RP/busmrt.jpg" alt="Nature Image #1">
                        </li>
                        <li class="slide">
                            <img src="Picture/Amenities/Amenities_location/RP/car.jpg" alt="Nature Image #2">
                        </li>
                    </ul>
                </div>
            </section>

        </div>












        <div class="col-sm">
            <div class = "row">
                <div class="col-lg-6">
                    <div class="rotating-card-container">
                        <div class="card card-rotate card-background card-background-mask-primary shadow-primary mt-md-0 mt-5">Agriculture Technology Laboratory
                            <div class="front front-background"
                                 style="background-image: url(Picture/Amenities/rp/biomedicalrp.png) ; background-size: cover; width: 300px">
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
                                        The Agriculture Technology Laboratory is a new facility comprising 154 square metres of learning space, housing technologies for high-tech farming in a controlled environment.
                                    </p>
                                    <a href="https://www.rp.edu.sg/sas/about-sas/learning-facilities" target="_blank"
                                       class="btn btn-white btn-sm w-50 mx-auto mt-3">Find out more!</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6">

                    <div class="rotating-card-container">
                        <div class="card card-rotate card-background card-background-mask-primary shadow-primary mt-md-0 mt-5">Nu3Lab
                            <div class="front front-background"
                                 style="background-image: url(Picture/Amenities/rp/nu3lab.png) ; background-size: cover; width: 300px">
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
                                        Immerse yourself in the food manufacturing industry at our dedicated food formulation lab, Nu3Lab. Study and analyse the properties of existing F&B products. </p>
                                    <a href="https://www.rp.edu.sg/sas/about-sas/learning-facilities" target="_blank"
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
                            <div class="card card-rotate card-background card-background-mask-primary shadow-primary mt-md-0 mt-5">Republic Cultural Centre
                                <div class="front front-background"
                                     style="background-image: url(Picture/Amenities/rp/republiccult.png) ; background-size: cover; width: 300px">
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
                                            The Republic Cultural Centre also presents a  myriad of programmes from arts events and festivals on campus for the RP Community and General Public alike.
                                        </p>
                                        <a href="https://www.rp.edu.sg/trcc/home" target="_blank"
                                           class="btn btn-white btn-sm w-50 mx-auto mt-3">Find out more!</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-6">

                        <div class="rotating-card-container">
                            <div class="card card-rotate card-background card-background-mask-primary shadow-primary mt-md-0 mt-5">The Agora
                                <div class="front front-background"
                                     style="background-image: url(Picture/Amenities/rp/south-agora.png) ; background-size: cover; width: 300px">
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
                                            At RP, this space is a large, continuous and sheltered area that houses the Library, Cafeterias and many other facilities within an air-conditioned and carpeted environment.
                                        </p>
                                        <a href="https://www.rp.edu.sg/our-campus/facilities/others" target="_blank"
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
                            <div class="card card-rotate card-background card-background-mask-primary shadow-primary mt-md-0 mt-5">High Elements!
                                <div class="front front-background"
                                     style="background-image: url(Picture/Amenities/rp/challengingrp.png); background-size: cover; width: 650px">
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
                                            As part of the course curriculum, you’re provided with the perfect chance to build your confidence and even hone your social skills by regularly conducting presentations in front of an audience.
                                        </p>
                                        <a href="https://www.rp.edu.sg/feature/5-reasons" target="_blank"
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
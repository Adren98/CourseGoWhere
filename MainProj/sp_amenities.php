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
                        <img src="Picture/singapore-polytechnic.png" style="height:100px; width:250px;padding:1px;border:thick solid pink;" >
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
                            <img src="Picture/Amenities/Amenities_location/SP/busmrt.jpg" alt="Nature Image #1">
                        </li>
                        <li class="slide">
                            <img src="Picture/Amenities/Amenities_location/SP/car.jpg" alt="Nature Image #2">
                        </li>
                    </ul>
                </div>
            </section>



        </div>





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
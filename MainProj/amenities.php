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
    <link rel="shortcut icon" type="image/x-icon" href="Picture/logo.png" />
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
                        <img src="Picture/ngee-ann-polytechnic.png" style="height:100px; width:250px;padding:1px;border:thick solid pink;" >

                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="sp_amenities.php" role="tab" aria-controls="dashboard" aria-selected="false">
                        <img src="Picture/singapore-polytechnic.png" style="height:100px; width:250px;" >
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
                            <img src="Picture/Amenities/Amenities_location/NP/busmrt.jpg" alt="Nature Image #1">
                        </li>
                        <li class="slide">
                            <img src="Picture/Amenities/Amenities_location/NP/car.jpg" alt="Nature Image #2">
                        </li>
                        <li class="slide">
                            <img src="Picture/Amenities/Amenities_location/NP/Gatehours.jpg" alt="Nature Image #3">
                        </li>
                    </ul>
                </div>
            </section>



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
                             style="background-image: url(Picture/Amenities/np/primary_colour.png); background-size: cover;width: 300px">
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
                                 style="background-image: url(Picture/Amenities/np/ispace.png) ; background-size: cover; width: 300px">
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
                                        iSpace is equipped with writable wall and interactive projector to support group learning and discussion. The room can accommodate up to 12 people.???
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
                                     style="background-image: url(Picture/Amenities/np/SmartCube.png) ; background-size: cover; width: 300px">
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
                                     style="background-image: url(Picture/Amenities/np/primary_colour.png); background-size: cover;width: 300px">
                                    <div class="card-body pt-1 text-center" >
                                        <h3 class="text-primary"></h3>
                                        <p class="text-white opacity-10">
                                            Be inspired to emulate Dr Lien???s qualities of perseverance, tenacity, philanthropy and humility, fire up your entrepreneurial spirit, achieve your own greatness and give back to society.
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
                                     style="background-image: url(Picture/Amenities/np/np_dialogueid.png) ; background-size: cover; width: 650px">
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
                                            Dialogue in the Dark is one of the world???s most exciting life-changing experiences where visitors are guided by blind guides in absolute darkness. You get the chance to experience daily environments from a completely new perspective, when you enjoy a walk in the park, take a boat cruise or visit a caf?? in our specially designed darkened rooms. Daily routines become exciting and a reversal of role is created where sighted become blind and blind become sighted.
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
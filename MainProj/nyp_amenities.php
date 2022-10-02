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

            <section aria-label="Newest Photos">
                <div class="carousel" data-carousel>
                    <button class="carousel-button prev" data-carousel-button="prev">&#8656;</button>
                    <button class="carousel-button next" data-carousel-button="next">&#8658;</button>
                    <ul data-slides>
                        <li class="slide" data-active>
                            <img src="Picture/Amenities/Amenities_location/NYP/busmrt.jpg" alt="Nature Image #1">
                        </li>
                        <li class="slide">
                            <img src="Picture/Amenities/Amenities_location/NYP/car.jpg" alt="Nature Image #2">
                        </li>

                    </ul>
                </div>
            </section>

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
                        <div class="card card-rotate card-background card-background-mask-primary shadow-primary mt-md-0 mt-5">AI System Cheers Store
                            <div class="front front-background"
                                 style="background-image: url(Picture/Amenities/nyp/cheers.png) ; background-size: cover; width: 300px">
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
                                        NYP opens unmanned Cheers store equipped with AI system offering a wide variety of food & services
                                    </p>
                                    <a href="https://www.nyp.edu.sg/student-life/visit-nyp/nyp-campus.html" target="_blank"
                                       class="btn btn-white btn-sm w-50 mx-auto mt-3">Find out more!</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6">

                    <div class="rotating-card-container">
                        <div class="card card-rotate card-background card-background-mask-primary shadow-primary mt-md-0 mt-5">D’Studio (Lifestyle Store)*
                            <div class="front front-background"
                                 style="background-image: url(Picture/Amenities/nyp/dstudionyp.png) ; background-size: cover; width: 300px">
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
                                        Offers wide range of merchandise including:

                                        Fashion apparel & accessories, makeup & skin care products, lifestyle gifts &
                                        NYP Collections, sports, travel, photo and documents printing.
                                    </p>
                                    <a href="https://www.nyp.edu.sg/student-life/visit-nyp/nyp-campus.html" target="_blank"
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
                            <div class="card card-rotate card-background card-background-mask-primary shadow-primary mt-md-0 mt-5">L'Rex
                                <div class="front front-background"
                                     style="background-image: url(Picture/Amenities/nyp/Lrexnyp.png) ; background-size: cover; width: 300px">
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
                                            L'Rez - at Nanyang Polytechnic run by students of Diploma in Food and Beverage Business!
                                        </p>
                                        <a href="https://www.facebook.com/NYPRestaurantandCafe" target="_blank"
                                           class="btn btn-white btn-sm w-50 mx-auto mt-3">Find out more!</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-6">

                        <div class="rotating-card-container">
                            <div class="card card-rotate card-background card-background-mask-primary shadow-primary mt-md-0 mt-5">The Upper Room
                                <div class="front front-background"
                                     style="background-image: url(Picture/Amenities/nyp/upperroomnyp.png) ; background-size: cover; width: 300px">
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
                                            Tradtional Toast and Eggs

                                            Sandwiches

                                            Pasta

                                            Muffins

                                            Local Drinks and Gourmet Drinks
                                        </p>
                                        <a href="https://www.facebook.com/theupperroomNYP" target="_blank"
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
                            <div class="card card-rotate card-background card-background-mask-primary shadow-primary mt-md-0 mt-5">Modern-like Campus!
                                <div class="front front-background"
                                     style="background-image: url(Picture/Amenities/nyp/modern-campus.png); background-size: cover; width: 650px">
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
                                            The Nanyang Polytechnic (NYP) campus will be the centre of your student life. That’s why we’ve created some of the best study, social and sporting spaces in Singapore. You’ll learn, chill and play in modern spaces with state-of-the-art facilities that inspire you to aim high. So get ready to enjoy your exciting new life on campus.
                                        </p>
                                        <a href="https://www.nyp.edu.sg/student-life/visit-nyp/nyp-campus.html" target="_blank"
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
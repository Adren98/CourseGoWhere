<!--
=========================================================
* Material Kit 2 - v3.0.4
=========================================================

* Product Page:  https://www.creative-tim.com/product/material-kit 
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Coded by www.creative-tim.com

 =========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage" xmlns="http://www.w3.org/1999/html">
<?php
session_start();


if(isset($_SESSION['user_type'])&&$_SESSION['user_type'] == 'admin'){
    echo "<script type='text/javascript'> window.location='admin.php';</script>";

}




include 'navfloating.php';

?>

<head>


    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="./assets/img/favicon.png">

    <title>


        CourseGOWhere


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

<body class="index-page bg-gray-200">



<header class="header-2">
    <div class="page-header min-vh-75 relative" style="background-image: url('./assets/img/bg2.jpg')">
        <span class="mask bg-gradient-primary opacity-4"></span>
        <div class="container">
            <div class="row">
                <div class="col-lg-7 text-center mx-auto">
                    <h1 class="text-white pt-3 mt-n5">CourseGoWhere?</h1>
                    <p class="lead text-white mt-3">A free site to help plan your future! <br/> We aim
                        to find you the course you deserve !</p>
                    <a class="btn btn-lg  bg-gradient-primary" href="courses.php"
                       style="color : white; text-decoration: underline">Click here to proceed</a>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6">

    <section class="pt-3 pb-4" id="count-stats">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 mx-auto py-3">
                    <div class="row">
                        <div class="col-md-4 position-relative">
                            <div class="p-3 text-center">
                                <h1 class="text-gradient text-primary"><span id="state1" countTo="100">0</span>+</h1>
                                <h5 class="mt-3"> Students helped</h5>
                                <p class="text-sm font-weight-normal">From buttons, to inputs, navbars, alerts or cards,
                                    you are covered</p>
                            </div>
                            <hr class="vertical dark">
                        </div>
                        <div class="col-md-4 position-relative">
                            <div class="p-3 text-center">
                                <h1 class="text-gradient text-primary"><span id="state2" countTo="15">0</span>+</h1>
                                <h5 class="mt-3">Design Blocks</h5>
                                <p class="text-sm font-weight-normal">Mix the sections, change the colors and unleash
                                    your creativity</p>
                            </div>
                            <hr class="vertical dark">
                        </div>
                        <div class="col-md-4">
                            <div class="p-3 text-center">
                                <h1 class="text-gradient text-primary" id="state3" countTo="4">0</h1>
                                <h5 class="mt-3">Pages</h5>
                                <p class="text-sm font-weight-normal">Save 3-4 weeks of work when you use our pre-made
                                    pages for your website</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="my-5 py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 ms-auto me-auto p-lg-4 mt-lg-0 mt-4">
                    <div class="rotating-card-container">
                        <div class="card card-rotate card-background card-background-mask-primary shadow-primary mt-md-0 mt-5">
                            <div class="front front-background"
                                 style="background-image: url(https://images.unsplash.com/photo-1569683795645-b62e50fbf103?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=987&q=80); background-size: cover;">
                                <div class="card-body py-7 text-center">
                                    <i class="material-icons text-white text-4xl my-3">touch_app</i>
                                    <h3 class="text-white">Feel the <br/> Material Kit</h3>
                                    <p class="text-white opacity-8">All the Bootstrap components that you need in a
                                        development have been re-design with the new look.</p>
                                </div>
                            </div>
                            <div class="back back-background"
                                 style="background-image: url(https://images.unsplash.com/photo-1498889444388-e67ea62c464b?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1365&q=80); background-size: cover;">
                                <div class="card-body pt-7 text-center">
                                    <h3 class="text-white">Discover More</h3>
                                    <p class="text-white opacity-8"> You will save a lot of time going from prototyping
                                        to full-functional code because all elements are implemented.</p>
                                    <a href=".//sections/page-sections/hero-sections.html" target="_blank"
                                       class="btn btn-white btn-sm w-50 mx-auto mt-3">Start with Headers</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 ms-auto">
                    <div class="row justify-content-start">
                        <div class="col-md-6">
                            <div class="info">
                                <i class="material-icons text-gradient text-primary text-3xl">content_copy</i>
                                <h5 class="font-weight-bolder mt-3">Full Documentation</h5>
                                <p class="pe-5">Built by developers for developers. Check the foundation and you will
                                    find everything inside our documentation.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info">
                                <i class="material-icons text-gradient text-primary text-3xl">flip_to_front</i>
                                <h5 class="font-weight-bolder mt-3">Bootstrap 5 Ready</h5>
                                <p class="pe-3">The world’s most popular front-end open source toolkit, featuring Sass
                                    variables and mixins.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-start mt-5">
                        <div class="col-md-6 mt-3">
                            <i class="material-icons text-gradient text-primary text-3xl">price_change</i>
                            <h5 class="font-weight-bolder mt-3">Save Time & Money</h5>
                            <p class="pe-5">Creating your design from scratch with dedicated designers can be very
                                expensive. Start with our Design System.</p>
                        </div>
                        <div class="col-md-6 mt-3">
                            <div class="info">
                                <i class="material-icons text-gradient text-primary text-3xl">devices</i>
                                <h5 class="font-weight-bolder mt-3">Fully Responsive</h5>
                                <p class="pe-3">Regardless of the screen size, the website content will naturally fit
                                    the given resolution.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>







    <div class="container">
        <div class="row">




            <div class="col-lg-4 px-lg-1 mt-lg-0 mt-4">
                <div class="info-horizontal bg-gray-100 border-radius-xl d-block d-md-flex p-4 h-100">
                    <i class="material-icons text-gradient text-primary text-3xl">precision_manufacturing</i>
                    <div class="ps-0 ps-md-3 mt-3 mt-md-0">
                        <h5>Plugins</h5>
                        <p>Get inspiration and have an overview about the plugins that we used to create the Material
                            Kit.</p>
                        <a href="https://www.creative-tim.com/learning-lab/bootstrap/datepicker/material-kit"
                           class="text-primary icon-move-right">
                            Read more
                            <i class="fas fa-arrow-right text-sm ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>


            <div class="col-lg-4">
                <div class="info-horizontal bg-gradient-primary border-radius-xl d-block d-md-flex p-4">
                    <i class="material-icons text-white text-3xl">flag</i>
                    <div class="ps-0 ps-md-3 mt-3 mt-md-0">
                        <h5 class="text-white">Getting Started</h5>
                        <p class="text-white">Check the possible ways of working with our product and the necessary
                            files for building your own project.</p>
                        <a href="https://www.creative-tim.com/learning-lab/bootstrap/overview/material-kit"
                           class="text-white icon-move-right">
                            Let's start
                            <i class="fas fa-arrow-right text-sm ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>


            <div class="col-lg-4 mt-lg-0 mt-4">
                <div class="info-horizontal bg-gray-100 border-radius-xl d-block d-md-flex p-4">
                    <i class="material-icons text-gradient text-primary text-3xl">receipt_long</i>
                    <div class="ps-0 ps-md-3 mt-3 mt-md-0">
                        <h5>Utility Classes</h5>
                        <p>Material Kit is giving you a lot of pre-made elements. For those who want flexibility, we
                            included many utility classes.</p>
                        <a href="https://www.creative-tim.com/learning-lab/bootstrap/utilities/material-kit"
                           class="text-primary icon-move-right">
                            Read more
                            <i class="fas fa-arrow-right text-sm ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- -------- END Content Presentation Docs ------- -->


</div>


<footer class="footer pt-5 mt-5">
    <div class="container">
        <div class=" row">
            <div class="col-md-3 mb-4 ms-auto">
                <div>
                    <a href="https://www.creative-tim.com/product/material-kit">
                        <img src="./assets/img/logo-ct-dark.png" class="mb-3 footer-logo" alt="main_logo">
                    </a>
                    <h6 class="font-weight-bolder mb-4">Material Kit 2</h6>
                </div>
                <div>
                    <ul class="d-flex flex-row ms-n3 nav">
                        <li class="nav-item">
                            <a class="nav-link pe-1" href="https://www.facebook.com/CreativeTim" target="_blank">
                                <i class="fab fa-facebook text-lg opacity-8"></i>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link pe-1" href="https://twitter.com/creativetim" target="_blank">
                                <i class="fab fa-twitter text-lg opacity-8"></i>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link pe-1" href="https://dribbble.com/creativetim" target="_blank">
                                <i class="fab fa-dribbble text-lg opacity-8"></i>
                            </a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link pe-1" href="https://github.com/creativetimofficial" target="_blank">
                                <i class="fab fa-github text-lg opacity-8"></i>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link pe-1" href="https://www.youtube.com/channel/UCVyTG4sCw-rOvB9oHkzZD1w"
                               target="_blank">
                                <i class="fab fa-youtube text-lg opacity-8"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>


            <div class="col-md-2 col-sm-6 col-6 mb-4">
                <div>
                    <h6 class="text-sm">Company</h6>
                    <ul class="flex-column ms-n3 nav">
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.creative-tim.com/presentation" target="_blank">
                                About Us
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="https://www.creative-tim.com/templates/free" target="_blank">
                                Freebies
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="https://www.creative-tim.com/templates/premium" target="_blank">
                                Premium Tools
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="https://www.creative-tim.com/blog" target="_blank">
                                Blog
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-md-2 col-sm-6 col-6 mb-4">
                <div>
                    <h6 class="text-sm">Resources</h6>
                    <ul class="flex-column ms-n3 nav">
                        <li class="nav-item">
                            <a class="nav-link" href="https://iradesign.io/" target="_blank">
                                Illustrations
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="https://www.creative-tim.com/bits" target="_blank">
                                Bits & Snippets
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="https://www.creative-tim.com/affiliates/new" target="_blank">
                                Affiliate Program
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-md-2 col-sm-6 col-6 mb-4">
                <div>
                    <h6 class="text-sm">Help & Support</h6>
                    <ul class="flex-column ms-n3 nav">
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.creative-tim.com/contact-us" target="_blank">
                                Contact Us
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="https://www.creative-tim.com/knowledge-center" target="_blank">
                                Knowledge Center
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="https://services.creative-tim.com/?ref=ct-mk2-footer"
                               target="_blank">
                                Custom Development
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="https://www.creative-tim.com/sponsorships" target="_blank">
                                Sponsorships
                            </a>
                        </li>

                    </ul>
                </div>
            </div>

            <div class="col-md-2 col-sm-6 col-6 mb-4 me-auto">
                <div>
                    <h6 class="text-sm">Legal</h6>
                    <ul class="flex-column ms-n3 nav">
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.creative-tim.com/knowledge-center/terms-of-service"
                               target="_blank">
                                Terms & Conditions
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="https://www.creative-tim.com/knowledge-center/privacy-policy"
                               target="_blank">
                                Privacy Policy
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="https://www.creative-tim.com/license" target="_blank">
                                Licenses (EULA)
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-12">
                <div class="text-center">
                    <p class="text-dark my-4 text-sm font-weight-normal">
                        All rights reserved. Copyright ©
                        <script>document.write(new Date().getFullYear())</script>
                        Material Kit by <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>


<!--   Core JS Files   -->
<script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="./assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<script src="./assets/js/plugins/perfect-scrollbar.min.js"></script>


<!--  Plugin for TypedJS, full documentation here: https://github.com/inorganik/CountUp.js -->
<script src="./assets/js/plugins/countup.min.js"></script>


<script src="./assets/js/plugins/choices.min.js"></script>


<script src="./assets/js/plugins/prism.min.js"></script>
<script src="./assets/js/plugins/highlight.min.js"></script>


<!--  Plugin for Parallax, full documentation here: https://github.com/dixonandmoe/rellax -->
<script src="./assets/js/plugins/rellax.min.js"></script>
<!--  Plugin for TiltJS, full documentation here: https://gijsroge.github.io/tilt.js/ -->
<script src="./assets/js/plugins/tilt.min.js"></script>
<!--  Plugin for Selectpicker - ChoicesJS, full documentation here: https://github.com/jshjohnson/Choices -->
<script src="./assets/js/plugins/choices.min.js"></script>


<!--  Plugin for Parallax, full documentation here: https://github.com/wagerfield/parallax  -->
<script src="./assets/js/plugins/parallax.min.js"></script>


<!-- Control Center for Material UI Kit: parallax effects, scripts for the example pages etc -->
<!--  Google Maps Plugin    -->

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
<script src="./assets/js/material-kit.min.js?v=3.0.4" type="text/javascript"></script>


<script type="text/javascript">

    if (document.getElementById('state1')) {
        const countUp = new CountUp('state1', document.getElementById("state1").getAttribute("countTo"));
        if (!countUp.error) {
            countUp.start();
        } else {
            console.error(countUp.error);
        }
    }
    if (document.getElementById('state2')) {
        const countUp1 = new CountUp('state2', document.getElementById("state2").getAttribute("countTo"));
        if (!countUp1.error) {
            countUp1.start();
        } else {
            console.error(countUp1.error);
        }
    }
    if (document.getElementById('state3')) {
        const countUp2 = new CountUp('state3', document.getElementById("state3").getAttribute("countTo"));
        if (!countUp2.error) {
            countUp2.start();
        } else {
            console.error(countUp2.error);
        }

    }
</script>


</body>

</html>

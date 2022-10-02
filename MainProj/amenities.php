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
    <link rel="stylesheet" href="./assets/css/amenities.css">
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


        <div class="col-sm" style = "border: 1px solid #dd2d65">
            <div class="card bg-dark text-white border-0">
                <img class="card-img" src="" alt="Card image">
            </div>
        </div>



        <div class="col-sm">
            <div class = "row">
            <div class="col-lg-4">

                <div class="rotating-card-container">
                    <div class="card card-rotate card-background card-background-mask-primary shadow-primary mt-md-0 mt-5">
                        <div class="front front-background"
                             style="background-image: url(https://images.unsplash.com/photo-1569683795645-b62e50fbf103?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=987&q=80); background-size: cover;">
                            <div class="card-body py-1 text-center">
                                <i class="material-icons text-white text-4xl my-3">touch_app</i>
                                <h3 class="text-white">Feel the <br/> Material Kit</h3>
                                <p class="text-white opacity-8">All the Bootstrap components that you need in a
                                    development have been re-design with the new look.</p>
                            </div>
                        </div>
                        <div class="back back-background"
                             style="background-image: url(https://images.unsplash.com/photo-1498889444388-e67ea62c464b?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1365&q=80); background-size: cover;">
                            <div class="card-body pt-1 text-center">
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
                <div class="col-lg-4">

                    <div class="rotating-card-container">
                        <div class="card card-rotate card-background card-background-mask-primary shadow-primary mt-md-0 mt-5">
                            <div class="front front-background"
                                 style="background-image: url(https://images.unsplash.com/photo-1569683795645-b62e50fbf103?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=987&q=80); background-size: cover;">
                                <div class="card-body py-1 text-center">
                                    <i class="material-icons text-white text-4xl my-3">touch_app</i>
                                    <h3 class="text-white">Feel the <br/> Material Kit</h3>
                                    <p class="text-white opacity-8">All the Bootstrap components that you need in a
                                        development have been re-design with the new look.</p>
                                </div>
                            </div>
                            <div class="back back-background"
                                 style="background-image: url(https://images.unsplash.com/photo-1498889444388-e67ea62c464b?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1365&q=80); background-size: cover;">
                                <div class="card-body pt-1 text-center">
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


            </div>
            <div class="col-sm">
                <div class="rotating-card-container">
                    <div class="card card-rotate card-background card-background-mask-primary shadow-primary mt-md-0 mt-5">
                        <div class="front front-background"
                             style="background-image: url(https://images.unsplash.com/photo-1569683795645-b62e50fbf103?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=987&q=80); background-size: cover;">
                            <div class="card-body py-1 text-center">
                                <i class="material-icons text-white text-4xl my-3">touch_app</i>
                                <h3 class="text-white">Feel the <br/> Material Kit</h3>
                                <p class="text-white opacity-8">All the Bootstrap components that you need in a
                                    development have been re-design with the new look.</p>
                            </div>
                        </div>
                        <div class="back back-background"
                             style="background-image: url(https://images.unsplash.com/photo-1498889444388-e67ea62c464b?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1365&q=80); background-size: cover;">
                            <div class="card-body pt-1 text-center">
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
            <div class="col-sm">
                <div class="rotating-card-container">
                    <div class="card card-rotate card-background card-background-mask-primary shadow-primary mt-md-0 mt-5">
                        <div class="front front-background"
                             style="background-image: url(https://images.unsplash.com/photo-1569683795645-b62e50fbf103?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=987&q=80); background-size: cover;">
                            <div class="card-body py-1 text-center">
                                <i class="material-icons text-white text-4xl my-3">touch_app</i>
                                <h3 class="text-white">Feel the <br/> Material Kit</h3>
                                <p class="text-white opacity-8">All the Bootstrap components that you need in a
                                    development have been re-design with the new look.</p>
                            </div>
                        </div>
                        <div class="back back-background"
                             style="background-image: url(https://images.unsplash.com/photo-1498889444388-e67ea62c464b?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1365&q=80); background-size: cover;">
                            <div class="card-body pt-1 text-center">
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
        </div>


    </div>
</div>



</body>

</html>
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

<div class="container">
    <div class="row">


        <div class="col-lg-3 col-sm-12">

            <div class="row" >
            <pre class="wp-block-syntaxhighlighter-code"><form method="POST">
            <p>
                Select choice of School:
                <select name="School" id="School" onchange="this.form.submit()">
                    <option value="Singapore">None selected</option>
                    <option value="Nanyang Polytechnic">Nanyang Polytechnic</option>
                    <option value="Ngee Ann Polytechnic">Ngee Ann Polytechnic</option>
                    <option value="Republic Polytechnic">Republic Polytechnic</option>
                    <option value="Singapore Polytechnic">Singapore Polytechnic</option>
                    <option value="Temasek Polytechnic">Temasek Polytechnic</option>
                </select>
            </p>
            </div>

            <div class="row">
                <?php
                if (isset($_POST["School"]))
                {
                    $address = $_POST["School"];
                    if($address =="Nanyang Polytechnic" )
                    {
                        $picture_location ="Picture/nanyang-polytechnic.png";
                    }
                    elseif ($address =="Ngee Ann Polytechnic")
                    {
                        $picture_location ="Picture/ngee-ann-polytechnic.png";
                    }
                    elseif ($address =="Republic Polytechnic")
                    {
                        $picture_location ="Picture/republic-polytechnic.png";
                    }
                    elseif ($address =="Singapore Polytechnic")
                    {
                        $picture_location ="Picture/singapore-polytechnic.png";
                    }
                    elseif ($address =="Temasek Polytechnic")
                    {
                        $picture_location ="Picture/temasek polytechnic.png";
                    }
                    echo $picture_location;
                }
                ?>


                <div class="card" style="width:250px;height: 350px;">
                    <img class="card-img-top" width="200" height="150"
                         alt="Card image" src=<?php echo $picture_location?>
                    <div class="card-body">
                        <h4 class="card-title">Ngee Ann Polytechnic</h4>
                        <p class="card-text">Founded in 1999 , this is one of the largest sch</p>
                        <a href="#" class="btn btn-primary">School Course</a>
                    </div>
                </div>
            </div>


        </div>


        <div class="col-lg-9 col-sm-12" style="margin-top: 10%">
            <div class="col-sm">
                <?php
                if (isset($_POST["School"])) {

                    $address = $_POST["School"] ?: "singapore";
                    $address = str_replace(" ", "+", " $address");
                    ?>

                    <iframe width="100%" height="500 "
                            src="https://maps.google.com/maps?q=<?php echo $address; ?>&output=embed"></iframe>

                    <?php
                } else {
                    ?>

                    <iframe width="100%" height="500"
                            src="https://maps.google.com/maps?q=<?php echo "singapore"; ?>&output=embed"></iframe>

                    <?php
                }
                ?>
            </div>

        </div>

    </div>
</div>


<!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
<!--            <footer class="footer py-5">-->
<!--                <div class="container">-->
<!--                    <div class="row">-->
<!--                        <div class="col-lg-8 mb-4 mx-auto text-center">-->
<!--                            <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">-->
<!--                                Company-->
<!--                            </a>-->
<!--                            <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">-->
<!--                                About Us-->
<!--                            </a>-->
<!--                            <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">-->
<!--                                Team-->
<!--                            </a>-->
<!--                            <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">-->
<!--                                Products-->
<!--                            </a>-->
<!--                            <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">-->
<!--                                Blog-->
<!--                            </a>-->
<!--                            <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">-->
<!--                                Pricing-->
<!--                            </a>-->
<!--                        </div>-->
<!--                        <div class="col-lg-8 mx-auto text-center mb-4 mt-2">-->
<!--                            <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">-->
<!--                                <span class="text-lg fab fa-dribbble"></span>-->
<!--                            </a>-->
<!--                            <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">-->
<!--                                <span class="text-lg fab fa-twitter"></span>-->
<!--                            </a>-->
<!--                            <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">-->
<!--                                <span class="text-lg fab fa-instagram"></span>-->
<!--                            </a>-->
<!--                            <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">-->
<!--                                <span class="text-lg fab fa-pinterest"></span>-->
<!--                            </a>-->
<!--                            <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">-->
<!--                                <span class="text-lg fab fa-github"></span>-->
<!--                            </a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="row">-->
<!--                        <div class="col-8 mx-auto text-center mt-1">-->
<!--                            <p class="mb-0 text-secondary">-->
<!--                                Copyright ©-->
<!--                                <script>-->
<!--                                    document.write(new Date().getFullYear())-->
<!--                                </script>-->
<!--                                Material by Creative Tim.-->
<!--                            </p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </footer>-->

</body>

</html>
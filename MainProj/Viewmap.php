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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
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
        <div class = "col-lg-3 " >
            <h4><center>Click on the School LOGO <br> for more Information</center></h4>
            <div id="accordion">
                <div class="card" >
                    <div class="card-header">
                        <a class="card-link" data-toggle="collapse" href="#collapseOne">
                            <img class="card-img-top"   alt="Card image" src="Picture/ngee-ann-polytechnic.png"  height="100" onclick="document.getElementById('frame').src='https://maps.google.com/maps?q=Ngee Ann Polytechnic&output=embed'">
                        </a>
                    </div>
                    <div id="collapseOne" class="collapse" data-parent="#accordion">

                        <div class="card-body">
                            The history of Ngee Ann Polytechnic (NP) could be traced back to 1963, when it started out as Ngee Ann College. Its founder, The Ngee Ann Kongsi, had envisioned setting up a quality educational institution to link the Chinese-speaking community to its cultural roots during the colonial-rule era. The College had since morphed into a full-fledged polytechnic, a public institution overseen by an independent Council.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                            <img class="card-img-top"   alt="Card image" src="Picture/nanyang-polytechnic.png"  height="100" onclick="document.getElementById('frame').src='https://maps.google.com/maps?q=Nanyang Polytechnic&output=embed'">
                        </a>
                    </div>
                    <div id="collapseTwo" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                            The history of the NYP can be traced back to its predecessor institutions of the late 1970s and early 1980s - the Japan-Singapore Institute (JSI), German-Singapore Institute (GSI) and French-Singapore Institute(FSI) set up by the Economic Development Board (EDB) of Singapore.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
                            <img class="card-img-top"   alt="Card image" src="Picture/republic-polytechnic.png"  height="100" onclick="document.getElementById('frame').src='https://maps.google.com/maps?q=Republic Polytechnic&output=embed'">
                        </a>
                    </div>
                    <div id="collapseThree" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                            First established in 2002, Republic Polytechnic (RP) had an initial enrolment of just 800. Over the years, RP has grown from strength to strength building our reputation as a tertiary institution of academic excellence. Today, we are home to a lively community of about 14,000 students and more than 1,000 staff.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <a class="collapsed card-link" data-toggle="collapse" href="#collapseFour">
                            <img class="card-img-top"   alt="Card image" src="Picture/singapore-polytechnic.png" height="100" onclick="document.getElementById('frame').src='https://maps.google.com/maps?q=Singapore Polytechnic&output=embed'">
                        </a>
                    </div>
                    <div id="collapseFour" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                            Singapore Polytechnic was set up on 27 October 1954, making it the very first polytechnic to be established in Singapore. Singapore Polytechnic started out right in the heart of the financial district. Today, the polytechnic is located strategically in Dover Road - in the educational belt and science hub in the western part of Singapore.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <a class="collapsed card-link" data-toggle="collapse" href="#collapseFive">
                            <img class="card-img-top"   alt="Card image" src="Picture/temasek_polytechnic.png"  height="150" onclick="document.getElementById('frame').src='https://maps.google.com/maps?q=Temasek Polytechnic&output=embed'">
                        </a>
                    </div>
                    <div id="collapseFive" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                            Situated in Tampines next to the idyllic Bedok Reservoir, Temasek Polytechnic is a leading institution of higher learning in Singapore. Established in April 1990, we take pride in equipping our students with lifelong skills and digital knowledge for a future of dynamic change..
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-lg-9 col-sm-20" >
<!--            <iframe width="100%" height="800 " src="https://maps.google.com/maps?q=--><?php //echo $school ?><!-- &output=embed"></iframe>-->

            <iframe width="100%" height="800 " name="frame" id="frame" src="https://maps.google.com/maps?q=Singapore polytechincs&output=embed"></iframe>
        </div>

    </div>
</div>





</body>

</html>
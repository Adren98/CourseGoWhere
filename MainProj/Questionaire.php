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
<br><br><br>
<!-- End Navbar -->
<div class="card">
    <form>

        <div class="form-group row">
            <label for="mathInterest" class="col-md-4 col-form-label text-md-right" style="display: flex; justify-content:end;">Interest level for Math</label>
            <div class="col-md-4">
                <input class="col-md-2" type="radio" id="mathInterest"  name="mathInterest" value="1" >
                <input class="col-md-2" type="radio" id="mathInterest"  name="mathInterest" value="2" >
                <input class="col-md-2" type="radio" id="mathInterest"  name="mathInterest" value="3" >
                <input class="col-md-2" type="radio" id="mathInterest"  name="mathInterest" value="4" >
                <input class="col-md-2" type="radio" id="mathInterest"  name="mathInterest" value="5" >

            </div>
            <label for="speaking" class="col-md-4 col-form-label text-md-right" style="display: flex; justify-content:end;">Public Speaking</label>
            <div class="col-md-4">
                <input class="col-md-2" type="radio" id="speaking"  name="speaking" value="1" >
                <input class="col-md-2" type="radio" id="speaking"  name="speaking" value="2" >
                <input class="col-md-2" type="radio" id="speaking"  name="speaking" value="3" >
                <input class="col-md-2" type="radio" id="speaking"  name="speaking" value="4" >
                <input class="col-md-2" type="radio" id="speaking"  name="speaking" value="5" >

            </div>
    </form>
</div>



</body>

</html>
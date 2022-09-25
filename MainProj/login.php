<!--
=========================================================
* Material Kit 2 - v3.0.4
=========================================================

* Product Page:  https://www.creative-tim.com/product/material-kit 
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Coded by www.creative-tim.com

 =========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->

<?php

session_start();


$username = $password = $wrong = "";

require_once('config.php');
$connection = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);

if (mysqli_connect_errno()) {

    die(mysqli_connect_error());
}


if (isset($_POST['submit'])) {


    $username = mysqli_real_escape_string($connection, $_POST['email']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);



    if ($findAccount = mysqli_prepare($connection, "SELECT * FROM User WHERE email =?")) {

        $findAccount->bind_param('s', $username);
        $findAccount->execute();

        $result = $findAccount->get_result();


        if ($result->num_rows != 0) {

            $row = $result->fetch_assoc();


            $hash = $row['password'];

var_dump(password_verify($password, $hash));
            if (password_verify($password, $hash)) {

                $_SESSION['email'] = $username;
                $_SESSION['user_type'] = $row['user_type'];

                echo "<script type='text/javascript'>" . "alert('You have logged in. Redirecting you back to homepage now.');" . " window.location='index.php';</script>";

            } else {
                $wrong = "Incorrect username/password.";
            }


        } else {

            $wrong = "Incorrect username/password.";

        }


    }else{
        echo "Error: " . $findAccount . "<br>" . mysqli_error($connection);
    }


}


?>


<!DOCTYPE html>
<?php

include 'navfloating.php';

?>

<html lang="en" itemscope itemtype="http://schema.org/WebPage" xmlns="http://www.w3.org/1999/html">

<head>


    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="./assets/img/favicon.png">


    <!-- Not required for the header part -->
    <!--     Fonts and icons     -->
    <!-- <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700"/> -->

    <!-- Nucleo Icons -->
    <!-- <link href="./assets/css/nucleo-icons.css" rel="stylesheet"/>
    <link href="./assets/css/nucleo-svg.css" rel="stylesheet"/> -->

    <!-- Font Awesome Icons -->
    <!-- <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script> -->

    <!-- Material Icons -->
    <!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet"> -->

    <!-- CSS Files -->
    <!-- End of not required for the nav bar -->
    <!-- <link rel="stylesheet" type="text/css" href="./assets/css/loginstyles.css"> -->

    <link id="pagestyle" href="./assets/css/material-kit.css?v=3.0.4" rel="stylesheet"/>


</head>
<body>


<main class="login-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><h2 style = "text-align:center">Login</h2></div>
                    <div class="card-body">
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                            <div class="form-group row">
                                <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail
                                    Address</label>
                                <div class="col-md-4">
                                    <input type="text" id="email_address" class="form-control-text" name="email"
                                           required autofocus>
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                                <div class="col-md-4">
                                    <input type="password" id="password" class="form-control-text" name="password"
                                           required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-5 offset-md-4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember"> Remember Me
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <a href="register.php" class="btn btn-link">
                                        Register
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6 offset-md-4">
                                <small style="margin-bottom:0px" class="help-block"><?php echo $wrong ?></small>
                                <button type="submit" class="btn btn-primary" name="submit">
                                    Login
                                </button>
                                <a href="#" class="btn btn-link">
                                    Forgot Your Password?
                                </a>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

</main>


</body>








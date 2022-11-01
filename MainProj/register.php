<?php session_start();

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$confirmpasswordER = $emailER = $emailusedER = $passwordER = "";
$validcount = 0;

$email = $password = $confirmpassword = "";
require_once('Controller/config.php');
$connection = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);
if (mysqli_connect_errno()) {
    die(mysqli_connect_error());
}

if (isset($_POST['submit'])) {


    if (empty($_POST['email'])) { //check name if empty
        $emailER = "Please enter your email";
    } else {
        if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            $emailER = "Please enter a valid email address.";
        } else {
            $email = test_input($_POST["email"]);
            $validcount++;
        }
    }
    if (empty($_POST["password"])) { //check password if empty
        $passwordER = "Please enter a password.";
    } else {

        if (!preg_match('#.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$#', $_POST["password"])) {
            $passwordER = "Password must be alphanumeric, at least 8 characters long,  contains upper and lower case and at least 1 special character";
        } else {
            $password = test_input($_POST["password"]);
            $validcount++;
        }
    }
    if (empty($_POST["confirmpassword"])) { //check passwordconfirm if empty
        $passwordconfirmER = "Please re-enter the confirmed password";
    } else {
        if ($_POST["password"] == $_POST["confirmpassword"]) {
            $confirm = test_input($_POST["confirmpassword"]);
            $validcount++;
        } else {
            $confirmpasswordER = "Passwords do not match";

        }
    }

}
if ($validcount == 3) {
    $email = mysqli_real_escape_string($connection, $email);
    $confirm = mysqli_real_escape_string($connection, $confirm);
    $password = password_hash($password, PASSWORD_DEFAULT);
    $user = "user";
    //check if user is registered already
    if ($output = mysqli_prepare($connection, "SELECT email FROM User WHERE email = ?")) {
        $output->bind_param("s", $email);
        $output->execute();
        $results = $output->get_result();
        if ($results->num_rows > 0) {
            $emailusedER = "Email already registered";
        } else {
            //email is new. time to register user to DB
            if ($insert = mysqli_prepare($connection, "INSERT INTO User (email,password,user_type) VALUES (?,?,?)")) {
                $insert->bind_param("sss", $email, $password, $user);
                if ($insert->execute()) {
                    echo "<script type='text/javascript'>"
                        . "alert('Thank you for signing up with us!');"
                        . " window.location='index.php';</script>";
                } else {
                    echo "fail";
                }
            }
        }
    }
}
mysqli_close($connection);

?>


<!DOCTYPE html>
<?php

include 'navfloating.php';

?>
<br><br><br>
<html lang="en">

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
    <title>CourseGoWhere</title>


</head>
<body>


<main class="login-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><h2 style="text-align:center">Register</h2></div>
                    <div class="card-body">
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">





                            <div class="form-group row">
                                <label for="email_address"
                                       class="col-md-4 col-form-label text-md-right d-flex justify-content-end">E-Mail
                                    Address</label>
                                <div class="col-md-4">
                                    <input type="text" id="email_address" class="form-control-text" name="email"
                                           required autofocus>
                                    <small style="margin-bottom:0" class="help-block"><?php echo $emailER ?></small>
                                </div>

                            </div>
                            <br>




                            <div class="form-group row">
                                <label for="password"
                                       class="col-md-4 col-form-label text-md-right d-flex justify-content-end">Password</label>
                                <div class="col-md-4">
                                    <input type="password" id="password" class="form-control-text" name="password"
                                           required>
                                    <small style="margin-bottom:0"
                                           class="help-block"><?php echo $passwordER ?></small>
                                </div>
                            </div>
                            <br>





                            <div class="form-group row ">
                                <label for="confirmpassword"
                                       class="col-md-4 col-form-label text-md-right d-flex justify-content-end">Confirm
                                    Password</label>
                                <div class="col-md-4">
                                    <input type="password" id="confirmpassword" class="form-control-text"
                                           name="confirmpassword"
                                           required>
                                    <small style="margin-bottom:0"
                                           class="help-block"><?php echo $confirmpasswordER ?></small>
                                </div>
                            </div>







                            <div class="col-md-6 offset-md-4">
                                <small style="margin-bottom:0" class="help-block"><?php echo $emailusedER ?></small>
                                <button type="submit" class="btn btn-primary" name="submit" style="margin-top: 10px">
                                    Register
                                </button>

                            </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

</main>


</body>
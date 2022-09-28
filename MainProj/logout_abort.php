<?php


if(isset($_POST['logout'])){

    unset($_SESSION['email']);
    unset($_SESSION['user_type']);
    session_unset();
    session_destroy();
    header("Location: index.php");


}

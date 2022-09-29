<?php

$username = $password = $wrong = "";



if (isset($_POST['submit'])) {

    require_once 'Controller/login.php';
    list($username, $wrong) = login( $wrong);


}
/**
 * @param string $wrong
 * @return array
 */
function login(string $wrong): array
{

    require_once('config.php');
    $connection = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);

    if (mysqli_connect_errno()) {

        die(mysqli_connect_error());
    }
    $username = mysqli_real_escape_string($connection, $_POST['email']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);


    if ($findAccount = mysqli_prepare($connection, "SELECT * FROM User WHERE email =?")) {

        $findAccount->bind_param('s', $username);
        $findAccount->execute();

        $result = $findAccount->get_result();


        if ($result->num_rows != 0) {

            $row = $result->fetch_assoc();


            $hash = $row['password'];

//            var_dump(password_verify($password, $hash));
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


    } else {
        echo "Error: " . $findAccount . "<br>" . mysqli_error($connection);
    }
    return array($username, $wrong);
}
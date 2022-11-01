<head>
    <title>CourseGoWhere</title>
    <link id="pagestyle" href="./assets/css/material-kit.css?v=3.0.4" rel="stylesheet"/>
</head>
<body>

<?php

session_start();

if (!isset($_SESSION['user_type'])) {
    echo "<script type='text/javascript'>" . "alert('You are not an admin. Redirecting you back to homepage now.');" . " window.location='index.php';</script>";

}

if (isset($_SESSION['user_type'])&&$_SESSION['user_type'] != 'admin') {
    echo "<script type='text/javascript'>" . "alert('You are not an admin. Redirecting you back to homepage now.');" . " window.location='index.php';</script>";

}

?>
<?php
require 'Controller/script.php';
?>
<main class="addcourse">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <h1 style="display:Flex; justify-content:center">
                        Create Course
                    </h1>
                    <div class="card-body">
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

                            <?php
                            require_once 'Controller/courses.php';

                            $cols = getcolNames();
                            foreach ($cols as $col){
                                echo "<div class='form-group row'>";
                                echo "<label for='".$col."' class='col-md-4 col-form-label text-md-right d-flex justify-content-end'>".$col."</label>";
                                echo "<div class='col-md-6'>";
                                echo "<input id='".$col."' type='text' class='form-control-text' name='".$col."' value='' required autofocus>";
                                echo "</div>";
                                echo "</div>";
                                echo "<br>";
                            }

                            ?>


                            <br>

                            <div class="col-md-6 offset-md-4">

                                <button type="button" class="btn btn-primary" name="insert" style="margin-top: 10px"
                                        onclick="submitData('insert');">
                                    Create
                                </button>
                                <a href="admin.php" class="btn btn-link">
                                    Back to Homepage
                                </a>
                            </div>



                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

</main>
</body>
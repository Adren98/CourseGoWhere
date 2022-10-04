<head>
    <title>CourseGoWhere</title>
    <link id="pagestyle" href="./assets/css/material-kit.css?v=3.0.4" rel="stylesheet"/>
</head>
<body>
<?php
require 'Controller/script.php';
?>
<main class="addcourse">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <h1 style="display:Flex; justify-content:center">
                        Edit Course
                    </h1>
                    <div class="card-body">
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

                            <?php
                            require_once 'Controller/courses.php';
//                            require_once'Controller/adminfunction.php';
                            require_once 'Controller/config.php';
                            $id = $_GET['id'];
                            $conn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);
//                            $sql = "SELECT * FROM CoursesCatalogue WHERE course_id = $id";
//                            $result = mysqli_query($conn, $sql);

                            if ($findcourse = mysqli_prepare($conn, "SELECT * FROM CoursesCatalogue WHERE course_id =?")) {

                                $findcourse->bind_param('i', $id);
                                $findcourse->execute();
//                                var_dump($findcourse);
                                $result = $findcourse->get_result();
                            }
                            $arr = array();
                            while ($row = $result->fetch_assoc()) {
                                $arr[] = $row;
                            }

//                            var_dump($findcourse);
//                            var_dump($arr);
//                            var_dump($arr[0]['course_id']);
                            $cols = getcolNames();
                            foreach ($cols as $col){
                                echo "<div class='form-group row'>";
                                echo "<label for='".$col."' class='col-md-4 col-form-label text-md-right d-flex justify-content-end'>".$col."</label>";
                                echo "<div class='col-md-6'>";
                                echo "<input id='".$col."' type='text' class='form-control-text' name='".$col."' value='".$arr[0][$col]."' required autofocus>";

                                echo "</div>";
                                echo "</div>";
                                echo "<br>";
                            }

                            ?>
                            <input id ="course_id" type="hidden" name="course_id" value="<?php echo $arr[0]['course_id']; ?>">


                            <br>

                            <div class="col-md-6 offset-md-4">

                                <button type="button" class="btn btn-primary" name="edit" style="margin-top: 10px"
                                        onclick="submitData('edit');">
                                    Edit
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
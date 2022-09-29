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
                        Create Course
                    </h1>
                    <div class="card-body">
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                            <div class="form-group row">
                                <label for="coursecode"
                                       class="col-md-4 col-form-label text-md-right d-flex justify-content-end">Course
                                    Code</label>
                                <div class="col-md-4">
                                    <input type="text" id="coursecode" class="form-control-text" name="coursecode"
                                           required autofocus>

                                </div>

                            </div>
                            <br>
                            <div class="form-group row">
                                <label for="courseName"
                                       class="col-md-4 col-form-label text-md-right d-flex justify-content-end">Course
                                    Name</label>
                                <div class="col-md-4">
                                    <input type="text" id="courseName" class="form-control-text" name="courseName"
                                           required>

                                </div>
                            </div>
                            <br>
                            <div class="form-group row">

                                <label for="year"
                                       class="col-md-4 col-form-label text-md-right d-flex justify-content-end">Year</label>
                                <div class="col-md-4">
                                    <input type="text" id="year" class="form-control-text" name="year"
                                           required>

                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label for="school"
                                       class="col-md-4 col-form-label text-md-right d-flex justify-content-end">School</label>
                                <div class="col-md-4">
                                    <input type="text" id="school" class="form-control-text" name="school"
                                           required>
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label for="course_cluster"
                                       class="col-md-4 col-form-label text-md-right d-flex justify-content-end">course_cluster</label>
                                <div class="col-md-4">
                                    <input type="text" id="course_cluster" class="form-control-text"
                                           name="course_cluster"
                                           required>

                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label for="cutoff"
                                       class="col-md-4 col-form-label text-md-right d-flex justify-content-end">Cut Off
                                    Points</label>
                                <div class="col-md-4">
                                    <input type="text" id="cutoff" class="form-control-text" name="cutoff"
                                           required>

                                </div>
                            </div>
                            <br>

                            <div class="form-group row">
                                <label for="url"
                                       class="col-md-4 col-form-label text-md-right d-flex justify-content-end">URL</label>
                                <div class="col-md-4">
                                    <input type="text" id="url" class="form-control-text" name="url"
                                    >

                                </div>

                            </div>

                            <br>

                            <div class="col-md-6 offset-md-4">
                                <!--                                <small style="margin-bottom:0px" class="help-block">-->
                                <?php //echo $emailusedER ?><!--</small>-->
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
<?php 
require_once('inc/top.php');
if(isset($_POST['submit'])){
    $insert_array = array(
    'course_name' => $_POST['courseName'],
    'course_duration' => $_POST['duration'],
    'course_fee' => $_POST['fee'],
    'course_start' => $_POST['date']
);
    if($crud->insert("courses",$insert_array)){
        header("location:addCourse.php?insert");
    }else{
        header("location:addCourse.php?error");
    }
}
?>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <?php include('inc/navbar.php');?>
            </div>
        </div>
        <div class="row" style="margin-top:10px;">
            <div class="col-md-3">
                <?php include('inc/sidebar.php');?>
            </div>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-12">
                        <img src="images/logo.jpg" class="img-fluid shadow-light">
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <?php
                            if(isset($_GET['insert'])){
                            ?>
                            <div class="alert alert-secondary">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <h4 class="alert-heading text-center">Well done! You Added Following Data Successfully</h4>
                                <hr>
                                <?php
                                    extract($crud->lastRecord('courses','course_id'));
                                ?>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <ul class="list-group">
                                                <li class="list-group-item">Course Name : <span class="text-muted"><?php echo $course_name;?></span></li>
                                                <li class="list-group-item">Duration : <span class="text-muted"><?php echo $course_duration;?></span></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <ul class="list-group">
                                                <li class="list-group-item">Fee : <span class="text-muted"><?php echo $course_fee;?></span></li>
                                                <li class="list-group-item">Batch Starts From : <span class="text-muted"><?php echo $course_start;?></span></li>
                                            </ul>
                                        </div>
                                    </div>
                            </div>
                            <?php
                            }
                        ?>
                                <?php
                            if(isset($_GET['error'])){
                            ?>
                                    <div class="alert alert-danger">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        <h4 class="alert-heading text-center">Sorry! Please Try again.</h4>
                                        <hr>
                                    </div>
                                    <?php
                            }
                        ?>
                                        <form action="" method="post" enctype="multipart/form-data">
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label text-dark">Course Name</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" placeholder="Enter Course Name" name="courseName" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label text-dark">Course Dutration</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" placeholder="Enter Duration Here" name="duration" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label text-dark">Course Fee</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" placeholder="Enter Fee Here" name="fee" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label text-dark">Batch Starts From</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control datepicker" data-date-format="dd/mm/yyyy" name="date" placeholder="Choose Date">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="offset-sm-2 col-sm-10">
                                                    <button type="submit" class="btn btn-primary" name="submit">Add Course</button>
                                                </div>
                                            </div>
                                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--------------------Footer---------------------------------->
        <div class="row bg-dark" style="padding-top:20px; margin-top:120px;">
            <?php include('inc/footer.php');?>
        </div>
        <!--------------------Footer---------------------------------->
    </div>
    </html>
    <script>
        $(function() {
            $('.datepicker').datepicker();
        });
    </script>
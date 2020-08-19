<?php 
require_once('inc/top.php');
if(isset($_POST['submit'])){
    $insert_array = array(
    'cust_name' => $_POST['studentName'],
    'cust_shop' => $_POST['address'],
    'courseName' => $_POST['courseCat'],
    'cust_mobile' => $_POST['mobile']
);
    if($crud->insert("customer",$insert_array)){
        header("location:addStudent.php?insert");
    }else{
        header("location:addStudent.php?error");
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
                                <label class="col-sm-2 col-form-label text-dark">Student Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Enter Student Name" name="studentName" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label text-dark">Address</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Enter Address Here" name="address" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label text-dark">Course</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="courseCat" required>
                                        <?php
                                        $postData = $crud->getOption('courses','course_name');
                                        foreach($postData as $data){
                                          ?>
                                        <option value="<?php echo $data->course_id;?>">
                                            <?php echo ucfirst($data->course_name) ;?></option>
                                <?php } ?>
                              </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label text-dark">Mobile</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Enter Mobile Here" name="mobile" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="offset-sm-2 col-sm-10">
                                    <button type="submit" class="btn btn-primary" name="submit">Add Studetn</button>
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
        CKEDITOR.replace('prodata');
    </script>
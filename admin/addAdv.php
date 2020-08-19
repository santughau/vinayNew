<?php 
require_once('inc/top.php');
if(isset($_POST['submit'])){
    $insert_array = array(
    'ad_name' => $_POST['adName'],
    'ad_mobile' => $_POST['adMobile'],
    'ad_type' => $_POST['adCat'],
    'ad_date' => $_POST['date'],
    'ad_desc' => $_POST['desc']
);
/*echo "<pre>";
print_r ($insert_array);
exit();*/
    if($crud->insert("advertise",$insert_array)){
        header("location:addAdv.php?insert");
    }else{
        header("location:addAdv.php?error");
    }}
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
                                <label class="col-sm-2 col-form-label text-dark">Advertisers Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Enter Advertisers Name" name="adName" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label text-dark">Advertisers Mobile</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Enter Mobile Price" name="adMobile" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label text-dark">Adv Category</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="adCat" required>
                                <?php echo get_option_list('adtype','adType_id','adType_name');?>
                                <?php
                                        $postData = $crud->getOption('adtype','adType_name');
                                        foreach($postData as $data){
                                          ?>
                                        <option value="<?php echo $data->adType_id;?>">
                                            <?php echo $data->adType_name ;?></option>
                                <?php } ?>
                              </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label text-dark">Advertisers Mobile</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control datepicker" data-date-format="dd/mm/yyyy" name="date" placeholder="Choose Date">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label text-dark">Product Description</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" rows="3" name="desc" id="textarea1" data-status-message="#counter1"></textarea>
                                    <div id="counter1" class="text-left"></div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="offset-sm-2 col-sm-10">
                                    <button type="submit" class="btn btn-primary" name="submit">Add Advertisement</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--------------------Footer---------------------------------->
        <div class="row bg-dark" style="padding-top:20px;">
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
    <script>
        $(function() {
            $('#textarea1').limitText({
                limit: 500,
                warningLimit: 50
            });
        });
    </script>
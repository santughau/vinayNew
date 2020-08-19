<?php 
/*$path = "../images/gallery/";
$u_image = "ss.jpg";
echo $road =  $path. ''.$u_image ;*/
require_once('inc/top.php');
if(isset($_POST['submit'])){
    $u_image = $_FILES['image']['name'];
      $image_tmp = $_FILES['image']['tmp_name'];
      $u_image = 'image' . date('Y-m-d-H-i-s') . '_' . uniqid() . '.jpg';
      move_uploaded_file($image_tmp,"../images/gallery/$u_image");
    
    $insert_array = array(
    'gallery_title' => $_POST['imageTitle'],
    'gallery_image' => $u_image
);
    if($crud->insert("gallery",$insert_array)){
        header("location:addGallery.php?insert");
    }else{
        header("location:addGallery.php?error");
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
                                    extract($crud->lastRecord('gallery','gallery_id'));
                                ?>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <ul class="list-group">
                                                <li class="list-group-item">Course Name : <span class="text-muted"><?php echo $gallery_title;?></span></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <ul class="list-group">
                                                <li class="list-group-item">Image : 
                                                    <img src="../images/gallery/<?php echo $gallery_image;?>" class="img-fluid" style="width:50px;" /></li>
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
                                                <label class="col-sm-2 col-form-label text-dark">Image Title</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" placeholder="Enter Image Title Here" name="imageTitle" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label text-dark">Product Image</label>
                                                <div class="col-sm-10">
                                                    <input type="file" class="form-control-file btn btn-secondary" name="image" required />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="offset-sm-2 col-sm-10">
                                                    <button type="submit" class="btn btn-primary" name="submit">Add Image</button>
                                                </div>
                                            </div>
                                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--------------------Footer---------------------------------->
        <div class="row bg-dark" style="padding-top:20px; margin-top:230px;">
            <?php include('inc/footer.php');?>
        </div>
        <!--------------------Footer---------------------------------->
    </div>

    </html>
    <script>
        CKEDITOR.replace('prodata');
    </script>
<?php 
require_once('inc/top.php');

if(isset($_POST['submit'])){
    $u_image = $_FILES['image']['name'];
      $image_tmp = $_FILES['image']['tmp_name'];
      $u_image = 'image' . date('Y-m-d-H-i-s') . '_' . uniqid() . '.jpg';
      move_uploaded_file($image_tmp,"../images/product/$u_image");
    
    $insert_array = array(
    'product_name' => $_POST['productName'],
    'product_price' => $_POST['productPrice'],
    'cat_id' => $_POST['productCat'],
    'product_desc' => $_POST['prodata'],
    'product_image' => $u_image
);
    
    if($crud->insert("products",$insert_array)){
        header("location:addProduct.php?insert");
    }else{
        header("location:addProduct.php?error");
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
                                <label class="col-sm-2 col-form-label text-dark">Product Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Enter Product Name" name="productName" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label text-dark">Product Price</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Enter Product Price" name="productPrice" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label text-dark">Product Category</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="productCat" required>
                               <?php
                                        $postData = $crud->getOption('category','cat_name');
                                        foreach($postData as $data){
                                          ?>
                                        <option value="<?php echo $data->cat_id;?>">
                                            <?php echo $data->cat_name ;?></option>
                                <?php } ?>
                                            
                              </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label text-dark">Product Image</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control-file btn btn-secondary" name="image" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label text-dark">Product Description</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" rows="3" placeholder="Textarea" name="prodata"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="offset-sm-2 col-sm-10">
                                    <button type="submit" class="btn btn-primary" name="submit">Add Product</button>
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
        CKEDITOR.replace('prodata');
    </script>
   
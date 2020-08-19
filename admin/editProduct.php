<?php 

require_once('inc/top.php');

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
                    <img src="images/logo.jpg" class="img-fluid shadow-light"><hr>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <form action="" method="post" enctype="multipart/form-data">
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label text-dark">Product Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control"  value="" name="productName" required>
                        </div>
                      </div>
                        <div class="form-group row">
                        <label class="col-sm-2 col-form-label text-dark">Product Price</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" value="" name="productPrice" required>
                        </div>
                      </div>
                        <div class="form-group row">
                        <label class="col-sm-2 col-form-label text-dark">Product Category</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="productCat" required>
                               
                              </select>
                        </div>
                      </div>
                        <div class="form-group row">
                        <label class="col-sm-2 col-form-label text-dark">Product Image</label>
                        <div class="col-sm-10">
                          <input type="file" class="form-control-file btn btn-secondary" name="u_image" >
                        </div>
                      </div>
                        <div class="form-group row">
                        <label class="col-sm-2 col-form-label text-dark">Product Description</label>
                        <div class="col-sm-10">
                           <textarea class="form-control" rows="3"  name="prodata"></textarea>
                        </div>
                      </div>
                        
                      
                      
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-primary" name="update">Update</button>
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
            CKEDITOR.replace( 'prodata' );
</script>


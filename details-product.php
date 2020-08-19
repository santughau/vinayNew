<?php 
ob_start();
session_start();
$values= $_SESSION['cat_id'];
 
$page_title = "Home Pages";
$page_key = "";
$page_desc = "";
include('inc/top.php');

?>
<!-- Start from here-->
<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
                <?php include('inc/navbar.php');?>
            </div>
        </div>
        <div class="row" style="margin-top:10px;">
			<div class="col-md-9">
                <div class="row">
                    <?php
                    if(isset($_GET['id'])){
                        $id = $_GET['id'];
                        $product = "SELECT * FROM products WHERE product_id = '$id' ";
                    
                    $run_product = mysqli_query($con, $product);
                            $i=0;
                            while($row_product = mysqli_fetch_array($run_product)){
                                $product_id = $row_product['product_id'];
                                $cat_id = $row_product['cat_id'];
                                $product_name = $row_product['product_name'];
                                $product_desc = $row_product['product_desc'];
                                $product_price = $row_product['product_price'];
                                $product_image = $row_product['product_image'];
                                
                ?>
                   <div class="col-md-5">
                        <img class="img-fluid shadow-light" src="images/<?php echo $product_image;?>"><br><br>
                       <button type="button" class="btn btn-outline-primary offset-md-5">Rs <?php echo $product_price;?></button><hr>
                    </div>
                    <div class="col-md-7">
                       <button type="button" class="btn btn-outline-warning btn-block"><?php echo $product_name;?></button><hr>     
                        <div class="jumbotron purple lighten-4 ">
                          <?php echo $product_desc;?>
                          <p class="lead">
                            <a class="btn btn-secondary " href="online-shop.php" role="button">Go Back</a>
                          </p>
                        </div>
                    </div>
                    <?php }}?>
                </div>
                <hr>
                <h2 class="text-secondary">You May also Like</h2><hr>
                <div class="row">
                  <?php
                     $product1 = "SELECT * FROM products WHERE cat_id = '$values' ";
                    
                    $run_product1 = mysqli_query($con, $product1);
                            $i=0;
                            while($row_product1 = mysqli_fetch_array($run_product1)){
                                $product_id = $row_product1['product_id'];
                                $cat_id = $row_product1['cat_id'];
                                $product_name = $row_product1['product_name'];
                                $product_desc = $row_product1['product_desc'];
                                $product_price = $row_product1['product_price'];
                                $product_image = $row_product1['product_image'];
                                
                ?>  
                <div class="col-md-3">
                        <div class="card">
                          <img class="card-img-top img-fluid" src="images/<?php echo $product_image;?>" alt="Card image cap">
                          <div class="card-body">
                            <button type="button" class="btn btn-warning 1 btn-block">  <?php echo $product_name;?> </button>
                            <p class="card-text text-center">Rs <?php echo $product_price;?></p>
                            <a href="#" class="btn btn-outline-danger   btn-block">View Details </a>
                          </div>
                        </div>
                    </div>
                  <?php } ?>  
                </div>
            </div>
            <div class="col-md-3">
                 
                <img src="images/g1.jpg" class="img-fluid shadow-light"><br><br>
                <img src="images/g1.jpg" class="img-fluid shadow-light"><br><br>
                <img src="images/g1.jpg" class="img-fluid shadow-light"><br>
            </div>
        </div><hr>
    
    
       
<!--------------------Footer---------------------------------->
    <div class="row bg-dark" style="padding-top:20px;">
			
               <?php include('inc/footer.php');?>
            
        </div>
<!--------------------Footer---------------------------------->
</div>
</body>
</html>



	


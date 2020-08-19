<?php 
ob_start();
session_start();
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
                    $record_per_page = 1;
                    $page = '';
                    if (isset($_GET["page"]))
                    {
                        $page = $_GET["page"];
                    }
                    else 
                    {
                        $page = 1;	
                    }
                    $start_from = ($page-1)*$record_per_page;
                    if(isset($_GET['cat'])){
                        $cat_id = $_GET['cat'];
                        $product = "SELECT * FROM products WHERE cat_id = '$cat_id' LIMIT $start_from, $record_per_page ";
                    }
                    else{
                        $product = "SELECT * FROM products ORDER BY product_id DESC  LIMIT $start_from, $record_per_page";
                    }
                    $run_product = mysqli_query($con, $product);
                            $i=0;
                            while($row_product = mysqli_fetch_array($run_product)){
                                $product_id = $row_product['product_id'];
                                $cat_id = $row_product['cat_id'];
                                $product_name = $row_product['product_name'];
                                $product_desc = $row_product['product_desc'];
                                $product_price = $row_product['product_price'];
                                $product_image = $row_product['product_image'];
                                
                                $value =  $cat_id;
                                $_SESSION['cat_id']=$value;
                                
                ?>
                    <div class="col-md-3">
                        <div class="card">
                          <img class="card-img-top img-fluid" src="images/product/<?php echo $product_image;?>" alt="Card image cap">
                          <div class="card-body">
                            <button type="button" class="btn btn-warning 1 btn-block">  <?php echo $product_name;?> </button>
                             
                            <p class="card-text text-center">Rs <?php echo $product_price;?></p>
                            <a href="details-product.php?id=<?php echo $product_id;?>" class="btn btn-outline-danger   btn-block">View Details </a>
                          </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <div class="row">
                    <div class="col-md-12">
                       <br> <ul class="pagination pagination-circle border-0">
                        <?php
                          if(isset($_GET['cat'])){
                              $cat_id = $_GET['cat'];
                        $page_query = "SELECT * FROM products WHERE cat_id = '$cat_id' ";
                              $page_result = mysqli_query($con,$page_query);
                            $total_records = mysqli_num_rows($page_result);
                            $total_pages = ceil($total_records/$record_per_page);
                            for ($i=1;$i<=$total_pages; $i++)
                            {
                                echo "<li class='page-item ".($page==$i ? 'active':'')."'><a class='page-link  ".($page==$i ? 'deep-orange':'deep-orange-text')."' href='online-shop.php?cat=".$cat_id."&page=".$i."'>".$i."</a></li>";
                            }
                        }
                          else {                          
                            $page_query = "SELECT * FROM products ";
                            $page_result = mysqli_query($con,$page_query);
                            $total_records = mysqli_num_rows($page_result);
                            $total_pages = ceil($total_records/$record_per_page);
                            for ($i=1;$i<=$total_pages; $i++)
                            {
                                echo "<li class='page-item ".($page==$i ? 'active':'')."'><a class='page-link ".($page==$i ? 'deep-orange':'deep-orange-text')."' href='online-shop.php?page=".$i."'>".$i."</a></li>";
                            }
                          }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <img src="images/009.jpg" class="img-fluid shadow-light"><br><br>
                <img src="images/008.jpg" class="img-fluid shadow-light"><br><br>
                <img src="images/007.jpg" class="img-fluid shadow-light"><br><br>
                <img src="images/006.jpg" class="img-fluid shadow-light"><br><br>
                <img src="images/005.jpg" class="img-fluid shadow-light"><br><br>
                <img src="images/004.jpg" class="img-fluid shadow-light"><br><br>
                <img src="images/003.jpg" class="img-fluid shadow-light"><br>
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



	


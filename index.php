<?php 
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
                <?php include('inc/slider.php');?>
            </div>
        </div>
        <div class="row" style="margin-top:10px;">
			<div class="col-md-9">
                <h2 class="bg-dark text-white text-center">Training On-hands</h2>
                <div class="row">
                    <div class="col-md-3">
                        <div class="card">
                              <img class="card-img-top" src="images/008.jpg" alt="Card image cap">
                              <div class="card-body">
                                <h4 class="card-title text-danger">HTML / CSS</h4><hr>
                                <p class="card-text text-justify">Hypertext Markup Language is the standard markup language for creating web pages and web applications. With Cascading Style Sheets and JavaScript, it forms a triad of cornerstone technologies .....</p>
                                <a href="html-css-training- classes-nanded.php" class="btn btn-outline-danger">View Details</a>
                              </div>
                         </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                              <img class="card-img-top" src="images/009.jpg" alt="Card image cap">
                              <div class="card-body">
                                <h4 class="card-title text-primary">BOOTSTRAP</h4><hr>
                                <p class="card-text text-justify">Bootstrap is a free and open-source front-end library for designing websites and web applications. It contains HTML- and CSS-based design templates for typography, .....</p>
                                <a href="bootstrap-training-classes-nanded.php" class="btn btn-outline-primary">View Details</a>
                              </div>
                         </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                              <img class="card-img-top" src="images/007.jpg" alt="Card image cap">
                              <div class="card-body">
                                <h4 class="card-title text-warning">PHP </h4><hr>
                                <p class="card-text text-justify">PHP is a server-side scripting language designed for web development but also used as a general-purpose programming language. Originally created by Rasmus Lerdorf in 1994.he PHP .....</p>
                                <a href="php-mysql-classes-training-nanded.php" class="btn btn-outline-warning">View Details</a>
                              </div>
                         </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                              <img class="card-img-top" src="images/005.jpg" alt="Card image cap">
                              <div class="card-body">
                                <h4 class="card-title text-secondary">JavaScript</h4><hr>
                                <p class="card-text text-justify">JavaScript, often abbreviated as JS, is a high-level, interpreted programming language. It is a language which is also characterized as dynamic, weakly typed, prototype-based and multi-paradigm.</p>
                                <a href="javascript-training-classes-nanded.php" class="btn btn-outline-secondary">View Details</a>
                              </div>
                         </div>
                    </div>
                </div><hr>
                <div class="row">
                    <div class="col-md-3">
                        <div class="card">
                              <img class="card-img-top" src="images/003.jpg" alt="Card image cap">
                              <div class="card-body">
                                <h4 class="card-title text-danger">Jquery</h4><hr>
                                <p class="card-text text-justify">jQuery is a cross-platform JavaScript library designed to simplify the client-side scripting of HTML. It is free, open-source software using the permissive MIT License</p>
                                <a href="jquery-training-classes-nanded.php" class="btn btn-outline-danger">View Details</a>
                              </div>
                         </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                              <img class="card-img-top" src="images/004.jpg" alt="Card image cap">
                              <div class="card-body">
                                <h4 class="card-title text-primary">Ajax</h4><hr>
                                <p class="card-text text-justify">Ajax is a set of Web development techniques using many Web technologies on the client side to create asynchronous Web applications.</p>
                                <a href="ajax-training-classes-nanded.php" class="btn btn-outline-primary">View Details</a>
                              </div>
                         </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                              <img class="card-img-top" src="images/006.jpg" alt="Card image cap">
                              <div class="card-body">
                                <h4 class="card-title text-warning">Angular</h4><hr>
                                <p class="card-text text-justify">Angular is a TypeScript-based open-source front-end web application platform led by the Angular Team at Google and by a community of .....</p>
                                <a href="angular-training-classes-nanded.php" class="btn btn-outline-warning">View Details</a>
                              </div>
                         </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                              <img class="card-img-top" src="images/001.jpg" alt="Card image cap">
                              <div class="card-body">
                                <h4 class="card-title text-secondary">Web Development</h4><hr>
                                <p class="card-text text-justify">Web development is a broad term for the work involved in developing a web site for the Internet (World Wide Web) or an intranet (a private network).</p>
                                <a href="#" class="btn btn-outline-secondary">View Details</a>
                              </div>
                         </div>
                    </div>
                </div>
                
               <!--<h2 class="bg-dark text-white text-center">Product For Sales</h2>
                <div class="row">
                    <?php
                   $product = "SELECT * FROM products ORDER BY product_id DESC LIMIT 4";
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
                    <div class="col-md-3">
                        <div class="card">
                          <img class="card-img-top img-fluid" src="images/product/<?php echo $product_image;?>" alt="Card image cap">
                          <div class="card-body">
                            <button type="button" class="btn btn-warning 1 btn-block">  <?php echo $product_name;?> </button>
                            <p class="card-text text-center">Rs <?php echo $product_price;?></p>
                            <a href="online-shop.php" class="btn btn-outline-danger   btn-block">View Online Shop </a>
                          </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>-->
                <hr><h2 class="bg-dark text-white text-center">Our Team</h2>
                <div class="row">
                    <div class="col-md-4">
                <div class="card card-testimonial text-center">
                  <div class="card-header lime">
                    <img src="images/default.jpg" alt="Card image cap">
                  </div>
                  <div class="card-body">
                    <h4 class="card-title mt-5">Vinay Pawar</h4>
                    <hr>
                    <p class="card-text">Certified Computer Repair Technician successful at developing unique troubleshooting technician, executing high-quality repairs, and providing sound installation services to customers.<br><br></p>
                    <a href="#" class="btn twitter btn-circle white-text"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="btn facebook btn-circle white-text"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="btn google-plus btn-circle white-text"><i class="fa fa-google-plus"></i></a>
                  </div>
                </div>
            </div>
                    <div class="col-md-4">
                <div class="card card-testimonial text-center">
                  <div class="card-header indigo darken-4  ">
                    <img src="images/default.jpg" alt="Card image cap">
                  </div>
                  <div class="card-body">
                    <h4 class="card-title mt-5">Gaurav Sontakke</h4>
                    <hr>
                    <p class="card-text">Attentive Computer Programmer with excellent skills. Organised and driven with the innate ability to stay on task. Users effective methods of teaching whilst focusing on the individual needs of each student.</p>
                    <a href="#" class="btn twitter btn-circle white-text"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="btn facebook btn-circle white-text"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="btn google-plus btn-circle white-text"><i class="fa fa-google-plus"></i></a>
                  </div>
                </div>
            </div>
                    <div class="col-md-4">
                <div class="card card-testimonial text-center">
                  <div class="card-header red accent-3 ">
                    <img src="images/default.jpg" alt="Card image cap">
                  </div>
                  <div class="card-body">
                    <h4 class="card-title mt-5">Mohan Pawar</h4>
                    <hr>
                    <p class="card-text">Provides network connectivity support for network printers, as well as repair Laser Jet printers and perform hardware and software upgrades including various peripherales .<br><br> </p>
                    <a href="#" class="btn twitter btn-circle white-text"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="btn facebook btn-circle white-text"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="btn google-plus btn-circle white-text"><i class="fa fa-google-plus"></i></a>
                  </div>
                </div>
            </div>
                </div>
                <div class="row">
                <marquee><br><img src="images/logo.jpg"></marquee>
                </div>
            </div>
            <div class="col-md-3">
                 
                <div class="card bg-warning orange darken-1 text-white">
                  <div class="card-body">
                    <h4 class="card-title text-center">Review Us</h4>
                  </div>
                </div>
                 <div class="list-group">
                <?php
                   $query = "SELECT * FROM review ORDER BY review_id DESC LIMIT 6";
                    $run = mysqli_query($con, $query);
                            $i=0;
                            while($row = mysqli_fetch_array($run)){
                                $review_id = $row['review_id'];
                                $review_name = $row['review_name'];
                                $review_image = $row['review_image'];
                                $review = $row['review'];
                                $review_date = $row['review_date'];
                                
                ?>
                  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                  <div class="row">
                    <div class="col-md-4 review">
                        <small><?php echo $review_date; ?></small>
                      <img class="img-fluid rounded-circle shadow-light border border-dark" src="images/review/<?php echo $review_image ;?>" alt="">
                        
                    </div>
                    <div class="col-md-8">
                      <div class="w-100 justify-content-between">
                        <h5 class="mb-1 text-secondary"><?php echo $review_name;?></h5><hr>
                        
                      </div>
                      <p class="mb-1"><em>" <?php echo $review;?> "</em></p>
                    </div>
                  </div>
                  </a>
                     
                 <?php } ?>
                     <hr>
                </div>
               <button class="btn btn-warning orange darken-1" data-toggle="modal" data-target="#exampleModal">Add Your Review</button> 
               <a href="" class="btn btn-info deep-purple darken-3 btn-right" data-target="#exampleModalLong" data-toggle="modal">View Review</a> <hr>
                <img src="images/001.jpg" class="img-fluid">
            </div>
        </div><hr>
    
    
       
<!--------------------Footer---------------------------------->
    <div class="row bg-dark" style="padding-top:20px;">
			
               <?php include('inc/footer.php');?>
            
        </div>
<!--------------------Footer---------------------------------->
<div class="modal fade" id="exampleModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add Your Review</h5>
        <button type="button" class="close" data-dismiss="modal">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
            <form method="post" action="" enctype="multipart/form-data">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label text-dark">Name</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" placeholder="Add Your Name" name="name" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label text-dark">Comment</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" placeholder="Add Your Comment" name="comment" required>
                    </div>
                  </div>
                    <div class="form-group row">
                    <label class="col-sm-3 col-form-label text-dark">Image</label>
                    <div class="col-sm-9">
                      <input type="file" class="form-control-file btn btn-warning" name="image">
                    </div>
                  </div>
                <button type="submit" class="btn btn-primary" name="reviewAdd">Save changes</button>
                </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
        <?php
  if(isset($_POST['reviewAdd'])){
       $name = $_POST['name'];
      $comment = $_POST['comment'];
     
      
        $image = $_FILES['image']['name'];
        $product_image_tmp = $_FILES['image']['tmp_name'];
        
        move_uploaded_file($product_image_tmp,"images/review/$image");
      if($image == ''){
          $image = 'default.jpg';
      }
       
       
      $insert_review = "INSERT INTO review (review_name,review_image,review,review_date) VALUES ('$name','$image','$comment',NOW())";
      
      $insert_pro = mysqli_query($con,$insert_review);
      
      if($insert_pro){
          $get_media = "SELECT * FROM review WHERE review_image = '$image'";
                
        $media_query = mysqli_query($con,$get_media);
        $row_media = mysqli_fetch_array($media_query);
                
        $review_id = $row_media['review_id'];
        $review_image = $row_media['review_image'];
            
        if(file_exists("images/review/$review_image")){
            if(rename("images/review/$review_image","images/review/$review_id.jpg")){
            $update = "UPDATE review SET review_image='$review_id.jpg' WHERE review_image = '$review_image'";

            $run = mysqli_query($con,$update);
            echo"<script>alert('Thanks, Ur review is important for us !')</script>";
            echo"<script>window.open('index.php','_self')</script>";
            }
            else{
                echo "Error in rename";
            }
        }
        else{
         echo "File Not exist";
            }
	   //echo"<script>alert('Welcome, You have added a Your Review !')</script>";
	   //echo"<script>window.open('index.php','_self')</script>";
        }
  }  
        
    
?>
    </div>
  </div>
</div>
</div>
</body>
</html>

<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-secondary" id="exampleModalLongTitle">Reviews about Us</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
            <?php 
            $query = "SELECT * FROM review ORDER BY review_id DESC LIMIT 8";
            $run = mysqli_query($con, $query);
                
                while($row = mysqli_fetch_array($run)){
                    $review_id = $row['review_id'];
                    $review_name = $row['review_name'];
                    $review_image = $row['review_image'];
                    $review = $row['review'];
                    $review_date = $row['review_date'];            
                                
            ?>
            <div class="col-md-12">
                <blockquote class="blockquote">
                  <p class="mb-0">"<?php echo $review;?>"</p>
                  <footer class="blockquote-footer text-right"><?php echo $review_name;?> <cite title="Source Title "> <?php echo $review_date;?></cite></footer>
                </blockquote><hr>
            </div> 
            <?php } ?>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>




	


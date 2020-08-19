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
                  <h1 class="text-center bg-secondary text-white">View Details</h1>
                   <div class="row">
                    
                   <div class="col-md-5">
                        <img class="img-fluid shadow-light" src="../images/product/"><br><br>
                       <button type="button" class="btn btn-outline-primary offset-md-5">Rs </button><hr>
                    </div>
                    <div class="col-md-7">
                       <button type="button" class="btn btn-outline-warning btn-block"></button><hr>     
                        <div class="jumbotron purple lighten-4 ">
                          
                          <p class="lead">
                            <a class="btn btn-secondary " href="product.php" role="button">Go Back</a>
                          </p>
                        </div>
                    </div>
                    
                </div>
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
<!------------------View Product----------------------------------->


<!----------------------------------------------------->

<!------------------------------------------------------>
<script>
CKEDITOR.replace( 'post-data' ); 
</script>
<script>
$(document).ready(function(){
    $('#table2excel').DataTable();
});
</script>
<script>
$("#but").click(function(){
  $("#table2excel").table2excel({
    // exclude CSS class
    exclude: ".noExl",
    name: "Worksheet Name",
    filename: "customer_name.xls" //do not include extension
  }); 
});
</script>







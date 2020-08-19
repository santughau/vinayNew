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
                    if(isset($_GET['id'])){
                        $id = $_GET['id'];
                        $ad = "SELECT * FROM advertise WHERE ad_type = '$id' LIMIT $start_from, $record_per_page ";
                    }
                    else{
                        $ad = "SELECT * FROM advertise ORDER BY ad_id DESC  LIMIT $start_from, $record_per_page";
                    }
                    $run_ad = mysqli_query($con, $ad);
                            $i=0;
                            while($row_ad = mysqli_fetch_array($run_ad)){
                                $ad_id = $row_ad['ad_id'];
                                $ad_date = $row_ad['ad_date'];
                                $ad_desc = $row_ad['ad_desc'];
                                $ad_name = $row_ad['ad_name'];
                                $ad_mobile = $row_ad['ad_mobile'];
                                $ad_type = $row_ad['ad_type'];
                                
                          $adType = "SELECT * FROM adtype WHERE adType_id = '$ad_type' ";  
                          $run_adType = mysqli_query($con, $adType);
                          $row_adType = mysqli_fetch_array($run_adType);
                          $adType_name = $row_adType['adType_name'];
                ?>        
                        <div class="col-md-3" style="margin-bottom:20px;">
                            <div class="card text-center" style="height:380px;">
                              <div class="card-body">
                                  
                                  <a href="#" class="btn btn-primary btn-block"><?php echo $adType_name;?></a>
                                <h4 class="card-title"></h4>
                                  Date : <small><?php echo $ad_date;?></small><hr>
                                <h6 class="card-subtitle text-muted text-justify"><?php echo $ad_desc;?> </h6><hr>
                                <h4 class="text-secondary"><?php echo $ad_name;?></h4>
                                <p class="card-text">Contact :  <small><?php echo $ad_mobile;?></small></p>
                                  
                                
                              </div>
                            </div>
                       </div>
                       <?php }?>
                    </div>
                <div class="row">
                    <div class="col-md-12">
                       <br> <ul class="pagination pagination-circle border-0">
                        <?php
                          if(isset($_GET['id'])){
                              $id = $_GET['id'];
                        $page_query = "SELECT * FROM advertise WHERE ad_type = '$id' ";
                              $page_result = mysqli_query($con,$page_query);
                            $total_records = mysqli_num_rows($page_result);
                            $total_pages = ceil($total_records/$record_per_page);
                            for ($i=1;$i<=$total_pages; $i++)
                            {
                                echo "<li class='page-item ".($page==$i ? 'active':'')."'><a class='page-link  ".($page==$i ? 'deep-orange':'deep-orange-text')."' href='advertisement.php?cat=".$cat_id."&page=".$i."'>".$i."</a></li>";
                            }
                        }
                          else {                          
                            $page_query = "SELECT * FROM advertise ";
                            $page_result = mysqli_query($con,$page_query);
                            $total_records = mysqli_num_rows($page_result);
                            $total_pages = ceil($total_records/$record_per_page);
                            for ($i=1;$i<=$total_pages; $i++)
                            {
                                echo "<li class='page-item ".($page==$i ? 'active':'')."'><a class='page-link ".($page==$i ? 'deep-orange':'deep-orange-text')."' href='advertisement.php?page=".$i."'>".$i."</a></li>";
                            }
                          }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3">
                <div class="clearfix"></div>
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
<script>
    $(document).ready(function(){
    $('#table2excel').DataTable();
});
    
</script>
<script>
$("button").click(function(){
  $("#table2excel").table2excel({
    // exclude CSS class
    exclude: ".noExl",
    name: "Worksheet Name",
    filename: "customer_name.xls" //do not include extension
  }); 
});
</script>




	


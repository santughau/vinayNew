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
                <small class="text-center text-secondary"><h3>Some Of Our Successful Students ..... </h3></small>  <hr> 
                    <table class="table table-bordered display" id="table2excel">
                      <thead  class="thead-dark">
                        <tr>
                          <th scope="col">Sr No</th>
                          <th scope="col">Student Name</th>
                          <th scope="col">Address</th>
                          <th scope="col">Course Name</th>
                          <th scope="col">Mobile</th>
                        </tr>
                      </thead>
                      <tbody>
                         <?php
                   $customer = "SELECT * FROM customer ORDER BY cust_name DESC ";
                    $run_customer = mysqli_query($con, $customer);
                            $ia=0;
                            while($row_customer = mysqli_fetch_array($run_customer)){
                                $cust_id = $row_customer['cust_id'];
                                $cust_name = $row_customer['cust_name'];
                                $cust_shop = $row_customer['cust_shop'];
                                $cust_mobile = $row_customer['cust_mobile'];
                                $courseName = $row_customer['courseName'];
                                
                                 $ia=$ia+1;
                                
                $courses = "SELECT * FROM courses WHERE course_id = '$courseName' ";
                $run_courses = mysqli_query($con, $courses);
                $row_courses = mysqli_fetch_array($run_courses);
                
                $course_id = $row_courses['course_id'];
                $course_name = $row_courses['course_name'];
                $course_duration = $row_courses['course_duration'];
                $course_fee = $row_courses['course_fee'];
                $course_start = $row_courses['course_start'];
                
                ?> 
                        <tr>
                          <th scope="row"><?php echo $ia;?></th>
                          <td><?php echo ucfirst($cust_name); ?></td>
                          <td><?php echo ucfirst($cust_shop); ?></td>
                          <td><?php echo $course_name; ?></td>
                          <td><?php echo $cust_mobile; ?></td>
                        </tr>
                     <?php } ?>   
                      </tbody>
                    </table><hr>
                    <button type="button" class="btn btn-warning offset-md-4">Export to Excel</button>
               
            </div>
            <div class="col-md-3">
                <img src="images/009.jpg" class="img-fluid shadow-light"><br><br>
                <img src="images/008.jpg" class="img-fluid shadow-light"><br><br>
                <img src="images/007.jpg" class="img-fluid shadow-light"><br><br>
                
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




	


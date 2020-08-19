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
                        <img src="images/logo.jpg" class="img-fluid shadow-light">
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="text-center bg-secondary text-white">View all Review</h1>
                        <div id="product_table">
                            <table class="table table-bordered  table-responsive" id="table2excel">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">Sr No</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Description</th>
                                        <th scope="col"><i class="fa fa-trash-o" aria-hidden="true"></i>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $postData = $crud->select('review');
                                        $i = 0;
                                        foreach($postData as $data){
                                           $i = $i+1;
                                          ?>
                                    <tr>
                                        <th scope="row"><?php echo $i;?></th>
                                        <td><?php echo $data->review_name ;?></td>
                                        <td><?php echo $data->review_date ;?></td>
                                        <td><img src="../images/review/<?php echo $data->review_image ;?>" class="img-fluid shadow-bold" width="100px;"></td>
                                        <td><?php echo $data->review ;?></td>
                                        <td><a href="review .php?del=<?php echo $data->review_id ;?>" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                            <hr>
                        </div>
                        <button type="button" class="btn btn-warning offset-md-4" id="but">Export to Excel</button>
                        <hr>
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
        CKEDITOR.replace('post-data');
    </script>
    <script>
        $(document).ready(function() {
            $('#table2excel').DataTable();
        });
    </script>
    <script>
        $("#but").click(function() {
            $("#table2excel").table2excel({
                // exclude CSS class
                exclude: ".noExl",
                name: "Worksheet Name",
                filename: "customer_name.xls" //do not include extension
            });
        });
    </script>
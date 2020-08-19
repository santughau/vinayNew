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
                        <h1 class="text-center bg-secondary text-white">View all Courses</h1>
                        <div align="right">
                            <a href="addCourse.php" class="btn btn-outline-primary">Add Courses</a>
                            <hr>
                        </div>
                        <div id="product_table">
                            <table class="table table-bordered display" id="table2excel">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">Sr No</th>
                                        <th scope="col">Course Name</th>
                                        <th scope="col">Duration</th>
                                        <th scope="col">Course Fee</th>
                                        <th scope="col">Batch Starts</th>
                                        <th scope="col"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                        </th>
                                        <th scope="col"><i class="fa fa-trash-o" aria-hidden="true"></i>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $postData = $crud->select('courses');
                                        $i = 0;
                                        foreach($postData as $data){
                                           $i = $i+1;
                                          ?>
                                        <tr>
                                            <th scope="row"><?php echo $i;?></th>
                                            <td><?php echo $data->course_name;?></td>
                                            <td><?php echo $data->course_duration;?></td>
                                            <td><?php echo $data->course_fee;?></td>
                                            <td><?php echo $data->course_start;?></td>
                                            <td><a href="editCourse.php?id=<?php echo $data->course_id;?>" class="btn btn-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                                            <td><a href="course.php?del=<?php echo $data->course_id;?>" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
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
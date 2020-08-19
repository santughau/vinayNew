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
                        <h1 class="text-center bg-secondary text-white">View all Registration</h1>
                        <div id="product_table">
                            <table class="table table-bordered display" id="table2excel">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">Sr No</th>
                                        <th scope="col">Student Name</th>
                                        <th scope="col">Student Email</th>
                                        <th scope="col">Mobile</th>
                                        <th scope="col">Address</th>
                                        <th scope="col">Qualification</th>
                                        <th scope="col">Course</th>
                                        <th scope="col">Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $postData = $crud->select('register');
                                        $i = 0;
                                        foreach($postData as $data){
                                           $i = $i+1;
                                             $regCourse = $data->regCourse;
                                extract((array)$crud->getID($regCourse,'courses','course_id'));
                                          ?>
                                    <tr>
                                        <th scope="row"><?php echo $i;?></th>
                                        <td><?php echo $data->regName;?></td>
                                        <td><?php echo $data->regEmail;?></td>
                                        <td><?php echo $data->regMobile;?></td>
                                        <td><?php echo $data->regAddress;?></td>
                                        <td><?php echo $data->regQua;?></td>
                                        <td><?php echo $regCourse;?></td>
                                        <td><?php echo $data->date;?></td>
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
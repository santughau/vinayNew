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
                    <div class="col-md-12"> <img src="images/logo.jpg" class="img-fluid shadow-light">
                        <hr> </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="text-center bg-secondary text-white">View all Products</h1>
                        <div align="right"> <a href="addProduct.php" class="btn btn-outline-primary">Add Product</a>
                            <hr> </div>
                        <div id="product_table">
                            <table class="table table-bordered  table-responsive" id="table2excel">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">Sr No</th>
                                        <th scope="col">Product Name</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Image</th>
                                        <th scope="col"><i class="fa fa-eye" aria-hidden="true"></i> </th>
                                        <th scope="col"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> </th>
                                        <th scope="col"><i class="fa fa-trash-o" aria-hidden="true"></i> </th>
                                        <th scope="col"><i class="fa fa-print" aria-hidden="true"></i> </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $postData = $crud->select('products');
                                        $i = 0;
                                        foreach($postData as $data){
                                             $i = $i+1;
                                             $cat = $data->cat_id;
                                            extract($crud->getID($cat,'category','cat_id'));
                                            
                                          ?>
                                        <tr>
                                            <th scope="row">
                                                <?php echo $i;?>
                                            </th>
                                            <td>
                                                <?php echo $data->product_name;?>
                                            </td>
                                            <td>
                                                <?php echo $cat_name;?>
                                            </td>
                                            <td>Rs 
                                                <?php echo $data->product_price;?>
                                            </td>

                                            <td><img src="../images/product/<?php echo $data-> 	product_image;?>" class="img-fluid shadow-bold" width="100px;"></td>
                                            <td><a href="view_products.php?id=<?php echo $data-> 	product_id;?>" class="btn btn-primary"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
                                            <td><a href="editProduct.php?id=<?php echo $data-> 	product_id;?>" class="btn btn-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                                            <td><a href="product.php?del=<?php echo $data-> 	product_id;?>" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
                                            <td><a href="print_products.php" class="btn btn-info"><i class="fa fa-print" aria-hidden="true"></i></a></td>
                                        </tr>
                                        <?php } ?>
                                </tbody>
                            </table>
                            <hr> </div>
                        <button type="button" class="btn btn-warning offset-md-4" id="but">Export to Excel</button>
                        <hr> </div>
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
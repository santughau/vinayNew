    <div class="list-group">
        <a href="index.php" class="list-group-item list-group-item-action active"> <i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard</a>
        <a href="product.php" class="list-group-item list-group-item-action"> <i class="fa fa-cart-plus" aria-hidden="true"></i> Products
            <button type="button" class="btn btn-secondary pull-right btn-sm"> <span class="badge badge-light text-secondary"><?php echo $crud->countRows("products");?></span></button>
        </a>
        <a href="gallery.php" class="list-group-item list-group-item-action"> <i class="fa fa-camera " aria-hidden="true"></i> Gallery
            <button type="button" class="btn btn-primary pull-right btn-sm"> <span class="badge badge-light text-secondary"><?php echo $crud->countRows("gallery");?></span></button>
        </a>
        <a href="student.php" class="list-group-item list-group-item-action"> <i class="fa fa-user" aria-hidden="true"></i> Students
            <button type="button" class="btn btn-danger pull-right btn-sm"> <span class="badge badge-light text-secondary"><?php echo $crud->countRows("customer");?></span></button>
        </a>
        <a href="ad.php" class="list-group-item list-group-item-action"> <i class="fa fa-handshake-o" aria-hidden="true"></i> Advertisement
            <button type="button" class="btn btn-warning pull-right btn-sm"> <span class="badge badge-light text-secondary"><?php echo $crud->countRows("advertise");?></span></button>
        </a>
        <a href="review.php" class="list-group-item list-group-item-action"> <i class="fa fa-star" aria-hidden="true"></i> Reviews
            <button type="button" class="btn btn-info pull-right btn-sm"> <span class="badge badge-light text-secondary"><?php echo $crud->countRows("review");?></span></button>
        </a>
        <a href="course.php" class="list-group-item list-group-item-action"> <i class="fa fa-life-ring" aria-hidden="true"></i> Courses
            <button type="button" class="btn btn-dark pull-right btn-sm"> <span class="badge badge-light text-secondary"><?php echo $crud->countRows("courses");?></span></button>
        </a>
        <a href="register.php" class="list-group-item list-group-item-action"> <i class="fa fa-lightbulb-o" aria-hidden="true"></i> Registration
            <button type="button" class="btn btn-secondary pull-right btn-sm"> <span class="badge badge-light text-secondary"><?php echo $crud->countRows("register");?></span></button>
        </a>
        <a href="adType.php" class="list-group-item list-group-item-action"> <i class="fa fa-bars" aria-hidden="true"></i> Ad Type
            <button type="button" class="btn btn-primary pull-right btn-sm"> <span class="badge badge-light text-secondary"><?php echo $crud->countRows("adtype");?></span></button>
        </a>
        <a href="category.php" class="list-group-item list-group-item-action"> <i class="fa fa-sort" aria-hidden="true"></i> Category
            <button type="button" class="btn btn-danger pull-right btn-sm"> <span class="badge badge-light text-secondary"><?php echo $crud->countRows("category");?></span></button>
        </a>
    </div>
<nav class="navbar navbar-expand-lg navbar-dark orange darken-1 mt-2 ">
  <a class="navbar-brand" href="index.php">Vinay</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar5">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbar5">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" data-toggle="dropdown">
             <i class="fa fa-home"></i>  Home
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="about-us.php">About Us</a>
            <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="solid.php">Why Us</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="gallery.php">Gallery</a>
            <a class="dropdown-item" href="customer.php">Our Students</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" data-toggle="dropdown">
             <i class="fa fa-laptop"></i>  Computer
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="desktop_repair-degloor-nanded.php">Desktop Repair</a>
            <a class="dropdown-item" href="laptop_repair-sales-service-degloor-nanded.php">Laptop Repair</a>
            <a class="dropdown-item" href="networking-training-service-degloor-nanded.php">Networking</a>
            <a class="dropdown-item" href="antivirus-dealer-update-nanded-degloor.php">Antivirus</a>
            <a class="dropdown-item" href="printer-repairing-sales-service-degloor-nanded.php">Printers</a>
            </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" data-toggle="dropdown">
             <i class="fa  fa-book"></i>  Education
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="msoffice-classes-degloor-nanded.php">MS Office 2010</a>
            <a class="dropdown-item" href="tallyerp9-classes-training-degloor-nanded.php">Talley ERP 9</a>
           
            <a class="dropdown-item" href="computer-hardware-networking-degloor-nanded.php">Computer Hardware & Networking</a>
            <a class="dropdown-item" href="printer-repairing-sales-service-degloor-nanded.php">Printer Repairing</a>
            <a class="dropdown-item" href="geogebra-math-digital-classes-degloor-nanded.php">Geometry Concept With Geogebra</a>
            
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" data-toggle="dropdown">
             <i class="fa  fa-star"></i>  Training
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="c-programming-classes-nanded.php">C & C++ Programming</a>
            <a class="dropdown-item" href="tally-defination-language-tdl-tally-customize-nanded.php">Tally Defination Language</a>
            <a class="dropdown-item" href="html-css-training- classes-nanded.php">HTML / CSS</a>
            <a class="dropdown-item" href="bootstrap-training-classes-nanded.php">Bootstrap 4</a>
            <a class="dropdown-item" href="php-mysql-classes-training-nanded.php">PHP / MySQL</a>
            <a class="dropdown-item" href="javascript-training-classes-nanded.php">Javascript</a>
            <a class="dropdown-item" href="jquery-training-classes-nanded.php">Jquery</a>
            <a class="dropdown-item" href="ajax-training-classes-nanded.php">Ajax</a>
            <a class="dropdown-item" href="angular-training-classes-nanded.php">Angular</a>
            <div class="dropdown-divider"></div>
            
            <a class="dropdown-item" href="linux-rhce-classes-training-nanded.php">CentOS Linux Server</a>
            <a class="dropdown-item" href="windows-server-2016-2012-training-nanded.php">WIndows Server 2012</a>
          </div>
        </li>
         
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" data-toggle="dropdown">
             <i class="fa  fa-internet-explorer"></i>  Web Services
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="web-design-development-nanded.php">Web Designing</a>
          
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" data-toggle="dropdown">
             <i class="fa   fa-shopping-cart"></i>  Online Shop
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
               <?php
                   $category = "SELECT * FROM category ORDER BY cat_name DESC ";
                    $run_category = mysqli_query($con, $category);
                            $i=0;
                            while($row_category = mysqli_fetch_array($run_category)){
                                $cat_id = $row_category['cat_id'];
                                $cat_name = $row_category['cat_name'];
                ?>
            <a class="dropdown-item" href="online-shop.php?cat=<?php echo $cat_id;?>"><?php echo $cat_name; ?></a>
            <?php } ?>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" data-toggle="dropdown">
             <i class="fa    fa-handshake-o"></i>  Advertisemt
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <?php
                   $ad = "SELECT * FROM adtype ORDER BY adType_name DESC ";
                    $run_ad = mysqli_query($con, $ad);
                            $i=0;
                            while($row_ad = mysqli_fetch_array($run_ad)){
                                $adType_id = $row_ad['adType_id'];
                                $adType_name = $row_ad['adType_name'];
                ?>
            <a class="dropdown-item" href="advertisement.php?id=<?php echo $adType_id;?>"><?php echo $adType_name;?></a>
            <?php }?>
            
          </div>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="contact-us.php"><i class="fa fa-envelope"></i> Contact Us</a>
      </li>
   </ul>
    <ul class="navbar-nav ml-auto ">
      
    </ul>
  </div>
</nav>
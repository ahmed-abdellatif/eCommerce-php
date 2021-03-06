<!--
******************************************************************************************
* header.php : index.php
******************************************************************************************
-->

<?php
if(session_id() == '' || !isset($_SESSION)){session_start();}
?>
<!--
******************************************************************************************
* Begin html
******************************************************************************************
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Mobile Shop | iPhone, Samsung, LG | Columbia SC
  </title>
  <!-- SEO Meta Tags-->
  <meta name="description" content="We sell phones, cases, accessories, and much more.">
  <meta name="keywords" content="Ahmed Abdellatif, Web Developer, eCommerce Developer, Shopify, Web Design, Website Design, Website, Online Business, Business, Online Store">
  <meta name="author" content="Ahmed Abdellatif">

  <!-- Mobile Specific Meta Tag-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">


  <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">

  <!-- Favicon and Apple Icons-->
  <link rel="icon" type="image/x-icon" href="favicon.ico">

  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

  <link rel="icon" type="image/png" href="favicon.png">

  <link rel="apple-touch-icon" href="touch-icon-iphone.png">

  <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

  <link rel="apple-touch-icon" sizes="180x180" href="touch-icon-iphone-retina.png">

  <link rel="apple-touch-icon" sizes="167x167" href="touch-icon-ipad-retina.png">

  <!-- Vendor Styles including: Bootstrap, Font Icons, Plugins, etc.-->

  <link rel="stylesheet" media="screen" href="../assets/css/vendor.min.css">

  <!-- Main Template Styles-->
  <link id="mainStyles" rel="stylesheet" media="screen" href="../assets/css/styles.min.css">

  <link href="https://fonts.googleapis.com/css?family=Sarala" rel="stylesheet">

  <!-- Modernizr-->
  <script src="../assets/js/modernizr.min.js"></script>

  <style>
  .title-banner {
    overflow-x: hidden;
    position: relative;
    bottom: -2.5em;
    -webkit-text-size-adjust: 100%;
    -webkit-overflow-scrolling: touch;
    -webkit-font-smoothing: antialiased !important;
    font-size: 52px;
    text-shadow: 1px 1px 1px #000;
    font-weight: 550;
    color: #fff;
  }

  </style>
</head>
<!-- Body-->
<body>
<!--
******************************************************************************************
* Begin Sidebar Navigation Fullscreen
******************************************************************************************
-->
    <div class="offcanvas-container" id="shop-categories">
      <div class="offcanvas-header">
        <a class="site-logo" href="../index.php">
          <img src="../assets/img/logo/logo.png" alt="AA Mobile Accessories Columbia South Carolina" style="position:relative; bottom:-1em; margin:0 auto;"></a>
      </div>
      <!--Break off canvas menu-->

      <nav class="offcanvas-menu">
        <ul class="menu">

      <!-- Home -->
        <li><a href="../index.php">Home</a></li>

           <!-- Mobile Cases Begin -->
          <li class="has-children"><span><a href="#">Phone Cases</a>
            <span class="sub-menu-toggle"></span></span>
            <ul class="offcanvas-submenu">
              <li><a href="../iphone/iphone.php">iPhones</a></li>
              <li><a href="samsung.php">Samsung</a></li>
              <li><a href="../motorola/motorola.php">Motorola</a></li>
              <li><a href="../lg/lg.php">LG</a></li>
              <li><a href="../zte/zte.php">ZTE</a></li>
              <li><a href="../alcatel/alcatel.php">Alcatel</a></li>
              <li><a href="../google/google.php">Google</a></li>
              <li><a href="../huawei/huawei.php">Huawei</a></li>
              <li><a href="../htc/htc.php">HTC</a></li>
              <li><a href="../coolpad/coolpad.php">Coolpad</a></li>
            </ul>
          </li>



          <!-- Contact -->
          <li><a href="../index.php#contact">Contact</a></li>

          <!--Register/Login -->
          <?php

      if(isset($_SESSION['username'])){
        echo '<li><a href="../account.php">My Account</a></li>';
        echo '<li><a href="../orders.php">My Orders</a></li>';
        echo '<li><a href="../logout.php">Log Out</a></li>';
        echo '<li><a href="../cart.php">My Cart</a></li>';
      }
      else{
        echo '<li><a href="../register.php"><span>Sign Up</span></a></li>';
        echo '<li><a href="../login.php"><span>Log In</span></a></li>';
      }
      ?>
          </ul>
      </nav>
    </div>



<!--
******************************************************************************************
* Begin Sidebar Navigation Mobile Screen
******************************************************************************************
-->

    <div class="offcanvas-container" id="mobile-menu">
      <nav class="offcanvas-menu">
        <ul class="menu">
          <!-- Home -->
          <li><span><a href="../index.php"><span>Home</span></a></li>
          <!--Phone Cases Begin -->
          <li class="has-children"><span><a href="#">Phone Cases</a><span class="sub-menu-toggle"></span></span>
            <ul class="offcanvas-submenu">
              <li><a href="../iphone/iphone.php">iPhones</a></li>
              <li><a href="samsung.php">Samsung</a></li>
              <li><a href="../motorola/motorola.php">Motorola</a></li>
              <li><a href="../lg/lg.php">LG</a></li>
              <li><a href="../zte/zte.php">ZTE</a></li>
              <li><a href="../alcatel/alcatel.php">Alcatel</a></li>
              <li><a href="../google/google.php">Google</a></li>
              <li><a href="../huawei/huawei.php">Huawei</a></li>
              <li><a href="../htc/htc.php">HTC</a></li>
              <li><a href="../coolpad/coolpad.php">Coolpad</a></li>
            </ul>
          </li>



          <?php

      if(isset($_SESSION['username'])){
        echo '<li><a href="../account.php">My Account</a></li>';
        echo '<li><a href="../orders.php">My Orders</a></li>';
        echo '<li><a href="../logout.php">Log Out</a></li>';
        echo '<li><a href="../cart.php">My Cart</a></li>';

      }
      else{
        echo '<li><a href="../register.php"><span>Sign Up</span></a></li>';
        echo '<li><a href="../login.php"><span>Log In</span></a></li>';
      }
      ?>
        </ul>
        </li>
        </ul>
      </nav>
    </div>

    <!--
    ******************************************************************************************
    * Top Bar
    ******************************************************************************************
    -->



<!--
******************************************************************************************
* Begin Main Screen Navigation Bar
******************************************************************************************
-->
        <header class="navbar navbar-sticky">
          <!-- Search-->
          <form class="site-search" method="get">
            <input type="text" name="site_search" placeholder="Type to search...">
            <div class="search-tools"><span class="clear-search">Clear</span><span class="close-search"><i class="icon-cross"></i></span></div>
          </form>
          <div class="site-branding">
            <div class="inner">
              <!-- Off-Canvas Toggle (#shop-categories)-->
              <a class="offcanvas-toggle cats-toggle" href="#shop-categories" data-toggle="offcanvas"></a>
              <!-- Off-Canvas Toggle (#mobile-menu)-->
              <a class="offcanvas-toggle menu-toggle" href="#mobile-menu" data-toggle="offcanvas"></a>
              <!-- Site Logo-->
              <a class="site-logo" href="../index.php"><img src="../assets/img/logo/logo.png" alt="AA Accessories is a phone accessories company in Columbia South Carolina"></a>
            </div>
          </div>


      <nav class="site-menu">
        <ul>
          <li><a href="../index.php"><span>Home <i class="fas fa-home" style="position: relative;margin:0 auto;top:-1px;"></i></span></a></li>
          <li><a href="#"><span>Phone Cases</span></a>
            <ul class="sub-menu">
              <li class="has-children"><a href="../iphone/iphone.php">iPhones</a>
                <ul class="sub-menu">
                 <li><a href="../iphone/model/iphone5.php" name="iphone5">iPhone 5</a></li>
                  <li><a href="../iphone/model/iphone6.php" >iPhone 6</a>
                  </li>
                  <li><a href="../iphone/model/iphone7.php" >iPhone 7</a>
                  </li>
                  <li><a href="../iphone/model/iphone7-plus.php" >iPhone 7 Plus</a>
                  </li>
                  <li><a href="../iphone/model/iphone8.php" >iPhone 8</a>
                  </li>
                  <li><a href="../iphone/model/iphone8-plus.php" >iPhone 8 Plus</a>
                  </li>
                  <li><a href="../iphone/model/iphonex.php" >iPhone X</a>
                  </li>
                </ul>
              </li>

               <!--Samsung-->
              <li class="has-children"><a href="samsung.php">Samsung</a>
                <ul class="sub-menu">
                  <li>
                    <a href="model/galaxy-8.php" >Galaxy S8</a>
                  </li>
                  <li>
                    <a href="model/galaxy-8-plus.php" name="i5s" />Galaxy S8 Plus</a>
                  </li>
                  <li>
                    <a href="model/galaxy-s7-edge.php" >Galaxy S7 Edge</a>
                  </li>
                </ul>
              </li>

              <!--Motorola -->
              <li class="has-children"><a href="motorola/motorola.php">Motorola</a>
                <ul class="sub-menu">
                  <li><a href="../motorola/motorola.php" name="i5">Moto G55 Play</a></li>
                </ul>
              </li>

              <!--LG -->
              <li class="has-children"><a href="#">LG</a>
                <ul class="sub-menu">
                  <li><a href="../lg/lg.php" >LG</a></li>
                </ul>
              </li>

              <!--ZTE -->
              <li class="has-children"><a href="#">ZTE</a>
                <ul class="sub-menu">
                  <li><a href="../zte/zte.php" >ZTE</a></li>
                </ul>
              </li>

              <!--Alcatel -->
              <li class="has-children"><a href="#">Alcatel</a>
                <ul class="sub-menu">
                  <li><a href="../alcatel/alcatel.php" >Alcatel</a></li>
                </ul>
              </li>

             <!--Coolpad -->
              <li class="has-children"><a href="#">Coolpad</a>
                <ul class="sub-menu">
                  <li><a href="../coolpad/coolpad.php" >Coolpad</a></li>
                </ul>
              </li>

              <!--Google -->
              <li class="has-children"><a href="#">Google</a>
                <ul class="sub-menu">
                  <li><a href="../google/google.php" >google</a></li>
                </ul>
              </li>

              <!--Huawei -->
              <li class="has-children"><a href="#">Huawei</a>
                <ul class="sub-menu">
                  <li><a href="../huawei/huawei.php" >Huawei</a></li>
                </ul>
              </li>

              <!--HTC -->
              <li class="has-children"><a href="#">HTC</a>
                <ul class="sub-menu">
                  <li><a href="../htc/htc.php" >HTC</a></li>
                </ul>
              </li>
            </ul>
          </li>







          <!-- My Account Drop Link -->
          <li><a href="#"><span>My Account<i class="fas fa-user-circle" style="position:relative; right:-1px;margin: 0 auto;"></i></span></a>
            <ul class="sub-menu">
              <?php
                if(isset($_SESSION['username'])){
                  echo '<li><a href="../account.php">My Account</a></li>';
                  echo '<li><a href="../cart.php">My Cart</a></li>';

                  echo '<li><a href="../orders.php">My Orders</a></li>';

                  echo '<li><a href="../logout.php">Log Out</a></li>';
                }
                 else {
                   echo '<li><a href="../register.php"><span>Sign Up</span></a></li>';
                   echo '<li><a href="../login.php"><span>Log In</span></a></li>';
                 }
             ?>
          </li>
          </ul>
          </li>

        </ul>
      </nav>
    </header>


    <!-- Off-Canvas Wrapper-->
    <div class="offcanvas-wrapper">
      <div class="container padding-bottom-3x mb-1">
             <div class="row">
               <div class="col-lg-12 order-md-2">
          <h6 class="text-muted text-normal text-uppercase padding-top-5x mt-2" style="text-align:center;">Samsung</h6>
             <hr class="margin-bottom-1x">
             <ul class="nav nav-pills nav-justified">
               <li class="nav-item"><a class="nav-link" href="../index.php">Home</a></li>
               <li class="nav-item"><a class="nav-link" href="samsung.php">Samsung Home</a></li>
               <li class="nav-item"><a class="nav-link" href="model/galaxy-8.php" >Galaxy S8</a>
               </li>
               <li class="nav-item"> <a class="nav-link" href="model/galaxy-8-plus.php">Galaxy S8 Plus</a> </li>
               <li class="nav-item"><a class="nav-link" href="model/galaxy-s7-edge.php" >Galaxy S7 Edge</a></li>
               <li class="nav-item"><a class="nav-link" href="model/galaxy-j3-emerge.php" >Galaxy J3 Emerge</a></li>



             </ul>

      </div>
      </div>
      </div>

<!--
************************************************************************************************************
* END NAVIGATION MENU
*
* BEGIN PRODUCTS
*
************************************************************************************************************
-->
    <!-- Page Content-->
    <div class="container padding-bottom-3x mb-1">
      <div class="row">
        <!-- Products-->
        <div class="col-xl-9 col-lg-8 order-lg-2">

          <div class="isotope-grid cols-3 mb-2">
            <div class="gutter-sizer"></div>
            <div class="grid-sizer"></div>
            <!-- Product-->
            <div class="grid-item">
              <div class="product-card">
                <div class="product-badge text-danger"></div><a class="product-thumb" href="">
                  <img src="../assets/img/galaxy-s8.jpg" alt="Product"></a>
                <h3 class="product-title">Galaxy 8</h3>
                <div class="card-body text-center">
                  <a class="category btn-outline-primary btn-sm" href="model/galaxy-8.php">View Accessories</a>
                </div>
              </div>
            </div>


            <!-- Product-->
            <div class="grid-item">
              <div class="product-card">
                <div class="product-badge text-danger"></div><a class="product-thumb" href=""><img src="../assets/img/galaxy-s7-edge.jpg" alt="Product"></a>
                <h3 class="product-title">Galaxy 8 Plus</h3>
                <div class="card-body text-center">
                  <a class="category btn-outline-primary btn-sm" href="model/galaxy-8-plus.php">View Accessories</a>
                </div>
              </div>
            </div>

              <!-- Product-->
            <div class="grid-item">
              <div class="product-card">
                <div class="product-badge text-danger"></div><a class="product-thumb" href=""><img src="../assets/img/galaxy-s7-edge.jpg" alt="Product"></a>
                <h3 class="product-title">Galaxy J3 Emerge</h3>
                <div class="card-body text-center">
                  <a class="category btn-outline-primary btn-sm" href="model/galaxy-j3-emerge.php">View Accessories</a>
                </div>
              </div>
            </div>

            <!-- Product-->
            <div class="grid-item">
              <div class="product-card">
                <div class="product-badge text-danger"></div><a class="product-thumb" href=""><img src="../assets/img/shop/products/iphone5.jpg" alt="Product"></a>
                <h3 class="product-title">Galaxy S7 Edge<a href="model/galaxy-s7-edge.php"></a></h3>
                <div class="card-body text-center">
                  <a class="category btn-outline-primary btn-sm" href="model/galaxy-s7-edge.php">View Accessories</a>
                </div>
              </div>
            </div>


        </div>
      </div>



<!--


END PRODUCTS

-->
<!--


Footer


-->




<!-- Site Footer-->

<!-- Sidebar -->
<div class="col-xl-3 col-lg-4 order-lg-1">
<aside class="sidebar">
<div class="padding-top-2x hidden-lg-up"></div>
<!-- Widget Categories-->
<section class="widget widget-categories">
  <h3 class="category-title">Shop Categories <i class="fas fa-mobile-alt"></i></h3>
  <ul>
    <li class=""><a href="../iphone/iphone.php">iPhone</a></li>
    <li class=""><a href="samsung.php">Samsung</a></li>
    <li class=""><a href="../motorola/motorola.php">Motorola</a></li>
    <li class=""><a href="../lg/lg.html">LG</a></li>
    <li class=""><a href="../zte/zte.php">ZTE</a></li>
    <li class=""><a href="../alcatel/alcatel.php">Alcatel</a></li>
    <li class=""><a href="../google/google.php">Google</a></li>
    <li class=""><a href="../huawei/huawei.php">Huawei</a></li>
    <li class=""><a href="../htc/htc.php">HTC</a></li>
    <li class=""><a href="../coolpad/coolpad.php">Coolpad</a></li>
    <li class=""><a href="../accessories/chargers.php">Chargers</a></li>
    <li class=""><a href="../accessories/headphones.html">Headphones</a></li>
    <li class=""><a href="../accessories/holders.php">Holders</a></li>
    <li class=""><a href="../accessories/lcds.php">LCDs</a></li>
    <li class=""><a href="../accessories/pouches.php">Pouches</a></li>
  </ul>
</section>
</aside>
</div>
</div>
</div>


  <!-- Site Footer-->
  <footer class="site-footer">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <!-- Contact Info-->
          <section class="widget widget-light-skin">
            <h3 class="widget-title">Get In Touch With Us</h3>
          


          </section>
        </div>

        <div class="col-md-4">
          <!-- Account / Shipping Info-->
          <section class="widget widget-links widget-light-skin">
            <h3 class="widget-title">Account &amp; Shipping Info</h3>
            <ul>
              <?php

      if(isset($_SESSION['username'])){
        echo '<li><a href="../account.php">My Account</a></li>';
        echo '<li><a href="../orders.php">My Orders</a></li>';
        echo '<li><a href="../logout.php">Log Out</a></li>';
        echo '<li><a href="../cart.php">My Cart</a></li>';
      }
      else{
        echo '<li><a href="../register.php"><span>Sign Up</span></a></li>';
        echo '<li><a href="../login.php"><span>Log In</span></a></li>';
      }
      ?>
            </ul>
          </section>
        </div>


      <div class="col-md-4">
        <!-- Account / Shipping Info-->
        <section class="widget widget-links widget-light-skin">
          <h3 class="widget-title">We Also Open On Demand!</h3>
        </section>
      </div>
    </div>




      <!-- Copyright-->
    </div>
  </footer>
</div>
<!-- Back To Top Button--><a class="scroll-to-top-btn" href="#"><i class="icon-arrow-up"></i></a>
<!-- Backdrop-->
<div class="site-backdrop"></div>
<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

<!-- JavaScript (jQuery) libraries, plugins and custom scripts-->
<script src="../assets/js/vendor.min.js"></script>
<script src="../assets/js/scripts.min.js"></script>
</body>
</html>

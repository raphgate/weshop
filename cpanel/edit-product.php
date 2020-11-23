<?php 
    include_once './../inc/session.php';
    include_once 'auth/accounts.php';
    include_once 'inc/display_products.php';
    include_once 'inc/updateProducts.php';
    if (!isset($_SESSION['shop_id'])) {
      $URL = "../index.php";
       echo "<script>location.href='$URL'</script>";
    }
    if (!isset($_GET['prd'])) {
      $URL = "../index.php";
       echo "<script>location.href='$URL'</script>";
    }
    @$shop_id = $_SESSION['shop_id'];
    @$product_id = $_GET['prd'];

function getInfo($table_name,$product_id,$con)
    {
      $query = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM `$table_name` WHERE product_id='$product_id' "));
      return $query;
    }

    $prod = mysqli_fetch_array(mysqli_query($con, "SELECT product_name,discount,price,product_pix,sub_category FROM products WHERE product_id='$product_id' "));
    $product_name = $prod['product_name'];
    $sub_category = $prod['sub_category'];
    if ($sub_category == 'Television') {
        $table_name = 'televisions';
    }elseif ($sub_category == 'Smart Phone' || $sub_category == 'Tablet') {
        $table_name = 'phones';
    }elseif ($sub_category == 'Laptop And Notebook' || $sub_category == 'Ultrabook') {
        $table_name = 'laptops';
    }elseif ($sub_category == 'Accessory') {
        $table_name = 'accessories';
    }elseif ($sub_category == 'Other') {
        $table_name = 'orther';
    }elseif ($sub_category == 'Phone Repair') {
        $table_name = 'repairs';
    }
    $getInfo = getInfo($table_name,$product_id,$con);
    $im1 = $getInfo['product_pix'];
    $im2 = $getInfo['image_2'];
    $im3 = $getInfo['image_3'];
?>
<html>
    <head>
        
        <!-- Title -->
        <title>Moes</title>
        
        <?php include_once 'inc/metalinks.php'; ?>
        
    </head>
    <body class="page-header-fixed">
        <form class="search-form" action="#" method="GET">
            <div class="input-group">
                <input type="text" name="search" class="form-control search-input" placeholder="Search...">
                <span class="input-group-btn">
                    <button class="btn btn-default close-search waves-effect waves-button waves-classic" type="button"><i class="fa fa-times"></i></button>
                </span>
            </div><!-- Input Group -->
        </form><!-- Search Form -->
        <main class="page-content content-wrap">

           <?php include_once 'inc/shop-header.php'; ?>

            <?php include_once 'inc/shop-sidebar.php'; ?>
            <div class="page-inner">
                <div class="page-title">
                    <h5>Shop Dashboard</h5>
                </div>
                <div id="main-wrapper">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="panel panel-white">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><?php echo $product_name ?></h4>
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive project-stats">  
                                      <div class="">
                                         <div class="col-md-offset-2 col-md-8">
                                        <?php 
                                        $update = new updateProducts;
                                            if (isset($_POST['update_laptop'])) {
                                             $update->update_laptop($con,$shop_id,$product_id,$im1,$im2,$im3);  
                                            }elseif (isset($_POST['update_repair'])) {
                                              $update->update_repair($con,$shop_id,$product_id,$im1,$im2,$im3);  
                                            }elseif (isset($_POST['update_other'])) {
                                              $update->update_other($con,$shop_id,$product_id,$im1,$im2,$im3);  
                                            }elseif (isset($_POST['update_accessory'])) {
                                              $update->update_accessory($con,$shop_id,$product_id,$im1,$im2,$im3);  
                                            }elseif (isset($_POST['update_smart_phone'])) {
                                             $update->update_smart_phone($con,$shop_id,$product_id,$im1,$im2,$im3);   
                                            }elseif (isset($_POST['update_television'])) {
                                             $update->update_television($con,$shop_id,$product_id,$im1,$im2,$im3);   
                                            }
                                         ?>
                                              <form action="" method="post" style="border: 1px solid;padding: 10%" enctype="multipart/form-data">
                                                <b>Edit <?php echo $product_name ?></b>
                                                <?php 
                                                if ($sub_category == 'Television') {
                                                    include_once 'tvEdit.php';
                                                }elseif ($sub_category == 'Smart Phone' || $sub_category == 'Tablet') {
                                                    include_once 'phoneEdit.php';
                                                }elseif ($sub_category == 'Laptop And Notebook' || $sub_category == 'Used Laptop') {
                                                    include_once 'laptopEdit.php';
                                                }elseif ($sub_category == 'Accessory') {
                                                    include_once 'accessoryEdit.php';
                                                }elseif ($sub_category == 'Other') {
                                                    include_once 'otherEdit.php';
                                                }elseif ($sub_category == 'Phone Repair') {
                                                    include_once 'repairEdit.php';
                                                } 

                                                ?>
                                              </form>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- Main Wrapper -->
                <div class="page-footer">
                    <p class="no-s">2018 &copy; MOES.</p>
                </div>
            </div><!-- Page Inner -->
        </main><!-- Page Content -->
        <nav class="cd-nav-container" id="cd-nav">
            <header>
                <h3>Navigation</h3>
                <a href="index.html#0" class="cd-close-nav">Close</a>
            </header>
            <ul class="cd-nav list-unstyled">
                <li class="cd-selected" data-menu="index">
                    <a href="javsacript:void(0);">
                        <span>
                            <i class="glyphicon glyphicon-home"></i>
                        </span>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li data-menu="profile">
                    <a href="javsacript:void(0);">
                        <span>
                            <i class="glyphicon glyphicon-user"></i>
                        </span>
                        <p>Profile</p>
                    </a>
                </li>
                <li data-menu="inbox">
                    <a href="javsacript:void(0);">
                        <span>
                            <i class="glyphicon glyphicon-envelope"></i>
                        </span>
                        <p>Mailbox</p>
                    </a>
                </li>
                <li data-menu="#">
                    <a href="javsacript:void(0);">
                        <span>
                            <i class="glyphicon glyphicon-tasks"></i>
                        </span>
                        <p>Tasks</p>
                    </a>
                </li>
                <li data-menu="#">
                    <a href="javsacript:void(0);">
                        <span>
                            <i class="glyphicon glyphicon-cog"></i>
                        </span>
                        <p>Settings</p>
                    </a>
                </li>
                <li data-menu="calendar">
                    <a href="javsacript:void(0);">
                        <span>
                            <i class="glyphicon glyphicon-calendar"></i>
                        </span>
                        <p>Calendar</p>
                    </a>
                </li>
            </ul>
        </nav>
        <div class="cd-overlay"></div>
                <!-- Javascripts -->
        <script src="assets/plugins/jquery/jquery-2.1.4.min.js"></script>
        <script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>
        <script src="assets/plugins/pace-master/pace.min.js"></script>
        <script src="assets/plugins/jquery-blockui/jquery.blockui.js"></script>
        <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="assets/plugins/switchery/switchery.min.js"></script>
        <script src="assets/plugins/uniform/jquery.uniform.min.js"></script>
        <script src="assets/plugins/offcanvasmenueffects/js/classie.js"></script>
        <script src="assets/plugins/offcanvasmenueffects/js/main.js"></script>
        <script src="assets/plugins/waves/waves.min.js"></script>
        <script src="assets/plugins/3d-bold-navigation/js/main.js"></script>
        <script src="assets/plugins/waypoints/jquery.waypoints.min.js"></script>
        <script src="assets/plugins/jquery-counterup/jquery.counterup.min.js"></script>
        <script src="assets/plugins/toastr/toastr.min.js"></script>
        <script src="assets/plugins/flot/jquery.flot.min.js"></script>
        <script src="assets/plugins/flot/jquery.flot.time.min.js"></script>
        <script src="assets/plugins/flot/jquery.flot.symbol.min.js"></script>
        <script src="assets/plugins/flot/jquery.flot.resize.min.js"></script>
        <script src="assets/plugins/flot/jquery.flot.tooltip.min.js"></script>
        <script src="assets/plugins/curvedlines/curvedLines.js"></script>
        <script src="assets/plugins/metrojs/MetroJs.min.js"></script>
        <script src="assets/js/modern.js"></script>
        <script src="assets/js/pages/dashboard.js"></script>
       
     <script type="text/javascript">
           <?php 
            include_once 'inc/products.js'; 
          ?>
        </script>
        <script type="text/javascript">
           <?php 
            include_once  'inc/settings.js';
          ?>
        </script>
      </body>
</html>
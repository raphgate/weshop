<?php 
    include_once './../inc/session.php';
    include_once 'auth/accounts.php';
    include_once 'inc/display_products.php';
    if (!isset($_SESSION['shop_id'])) {
      $URL = "../index.php";
       echo "<script>location.href='$URL'</script>";
    }
    @$shop_id = $_SESSION['shop_id'];
    $con = open();
    @$order_id = mysqli_real_escape_string($con, $_GET['odr']);
    @$q = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM orders WHERE order_id='$order_id' "));
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
                                    <h4 class="panel-title">Order Info</h4>
                                </div>
                                <div class="panel-body" id="myorders">
                                    <div class="table-responsive project-stats">  
                                        <div class="row">
                                            <div class="col-md-6 col-xs-6">
                                               <b style="font-weight: bold;">Customer Name: <?php echo $q['customer_name'] ?></b><br><br>
                                               <b style="font-weight: bold;">Customer Email: <?php echo $q['customer_email'] ?></b><br><br>
                                               <b style="font-weight: bold;">Shipping Address: <?php echo $q['location'] ?></b><br><br>
                                            </div>
                                            <div class="col-md-6 col-xs-6" style="text-align: right;">
                                                <b style="font-weight: bold;">Phone: <?php echo $q['phone'] ?></b><br><br>

                                                 <b style="font-weight: bold">Date:  <?php echo $q['time_added'] ?></b> 
                                            </div>
                                        </div>
                                        <center>
                                            <img src="../images/logo.png" style="max-height: 30px">
                                        </center>
                                    <hr>
                                       <table class="table">
                                           <thead>
                                               <tr>
                                                    <th>#</th>
                                                    <th>Image</th>
                                                    <th colspan="4">Description</th>
                                                    <th>Quantity</th>
                                                    <th>Unit Price</th>
                                                    <th>Amount</th>
                                               </tr>
                                           </thead>
                                           <tbody id="myproducts">
                                              <?php 
                                                $sales = new display_products;
                                                $sales ->viewOrder($con,$order_id);
                                              ?>
                                           </tbody>
                                        </table>
                                        <button class="btn-sm btn-primary" style="float: right;" onclick="confirmOrder()" id="prbtn">Confirm Delivery</button>
                                        <input type="hidden" id="order_id" value="<?php echo $order_id; ?>"><br><br><br>
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
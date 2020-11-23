<?php 
    include_once './../inc/session.php';
    include_once 'auth/accounts.php';
    include_once 'inc/display_products.php';
    if (!isset($_SESSION['shop_id'])) {
      $URL = "login.php";
       echo "<script>location.href='$URL'</script>";
    }
    
?>
<html>
    <head>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
        <!-- Title -->
        <title>WeShop Nigeria</title>
        
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
                    <?php include_once 'inc/stats.php'; ?>
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="panel panel-white">
                                <div class="panel-heading">
                                    <h4 class="panel-title">My Products</h4>
                                    <center>
                                        <input type="text" name="search" class="form-control" id="search" style="width: 50%" placeholder="Search for product here" oninput="searchme()">
                                        <input type="hidden" id="shop_id" value="<?php echo $shop_id ?>">
                                    </center>
                                    <a href="upload_product.php" class="btn btn-info" style="float: right;margin-top: -4%"><i class="fa fa-upload"></i> Upload Product</a>
                                </div>
                                <hr>
                                <div class="panel-body">
                                    <div class="table-responsive project-stats">  
                                       <table class="table table-hover" id="myown">
                                           <thead>
                                               <tr>
                                                   <th>Image</th>
                                                   <th>Product Name</th>
                                                   <th>Discount Price</th>
                                                   <th>Price</th>
                                                   <th>Action</th>
                                               </tr>
                                           </thead>
                                           <tbody id="myproducts">
                                              <?php 
                                                $myProducts = new display_products;
                                                $myProducts-> getMyProducts('all',0);
                                              ?>
                                           </tbody>
                                        </table>
                                         <center>
                                          <a href="#" class="btn btn-lg btn-info" id="loadMore">Load More Product</a>
                                        </center>   
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- Main Wrapper -->
                <div class="page-footer">
                    <p class="no-s">2018 &copy; WeShop Nigeria.</p>
                </div>
            </div><!-- Page Inner -->
        </main><!-- Page Content -->
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

        var flag = 0;
        flag += 10

        //load more data on click
        $("#loadMore").click(function () {
            $("#loadMore").html('Fetching Data...');
          event.preventDefault();
            $.ajax({
                type: "POST",
                url: "inc/moreProducts.php",
                data: {
                    'offset': flag,
                },
                success: function (data) {
                    $('#myproducts').append(data);
                    $("#loadMore").html('Load More');
                    flag += 10;
                }
            });
        });
    </script>
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
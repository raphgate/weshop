<?php 
    include_once './../inc/session.php';
    include_once 'auth/accounts.php';
    include_once 'inc/display_products.php';
    if (!isset($_SESSION['shop_id'])) {
      $URL = "../index.php";
       echo "<script>location.href='$URL'</script>";
    }
    @$shop_id = $_SESSION['shop_id'];
?>
<html>
    <head>
        
        <title>Dashboard</title>
        
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
                        <div class="col-lg-12 col-md-12"  style="max-height: 90%;overflow-y: scroll;">
                            <div class="panel panel-white">
                                <div class="panel-heading">
                                    <h4 class="panel-title">Create New Sub-Category</h4>
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive project-stats">  
                                      <div class="">
                                        <div class="col-md-offset-2 col-md-8">
                                          <form method="POST" enctype="multipart/form-data" action="">
                                        <?php 
                                            if (isset($_POST['add_sub'])) {
                                             $con = open();
                                              $category = clean('category');
                                              $sub_category = clean('sub_category');
                                              $insert = mysqli_query($con, "INSERT INTO product_samples (category,subcategory) VALUES('$category','$sub_category')");
                                              if ($insert == true) {
                                                echo '<script>alert("Sub-Category Added")</script>';
                                              }else{
                                                   echo '<script>alert("Failed to Add Sample")</script>';
                                              }
                                            }
                                         ?>
                                              <div class="row">
                                                  <div class="col-sm-10" >
                                                      <p><i></i></p>
                                                      <div class="clear"></div> <br>
                                                       <select class="form-control" id="category" name="category">
                                                          <option disabled="" selected="true">Select Category</option>
                                                          <?php 
                                                              $con = open();
                                                              $pr_query = mysqli_query($con,"SELECT * FROM product_samples GROUP BY category ORDER BY sample_id ASC");
                                                              while ($prow = mysqli_fetch_array($pr_query)) {
                                                                  $category = $prow['category'];
                                                                  echo '<option>'.$category.'</option>';
                                                              }
                                                              close($con);
                                                          ?>
                                                      </select>
                                                      <br><br>
<input class="form-control" type="text" name="sub_category" placeholder="Sub Category here"><br><br>

<button class="btn btn-danger" type="submit" name="add_sub">Add Sub-category</button>
                                                      
                                                  </div>
                                              </div>
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
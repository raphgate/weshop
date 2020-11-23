<?php 
include_once '../inc/session.php';
include_once 'dbc.php';
$con = open();
     @$wallet = mysqli_fetch_array(mysqli_query($con, "SELECT SUM(amount) AS total FROM payments"));
     @$product_view = mysqli_fetch_array(mysqli_query($con, "SELECT SUM(product_views) AS product_views FROM products "));
     @$products = mysqli_num_rows(mysqli_query($con, "SELECT product_id FROM products"));
     @$sales = mysqli_num_rows(mysqli_query($con, "SELECT order_id FROM purchases"));
close($con);
?>
<div class="row">
    <div class="col-lg-3 col-md-6">
        <div class="panel info-box panel-white">
            <div class="panel-body">
                <div class="info-box-stats">
                    ₦<p class="counter"> <?php echo number_format($wallet['total']);  ?></p>
                    <span class="info-box-title">Total Income</span>
                </div>
                <div class="info-box-icon">
                    <i class="fa fa-money"></i>
                </div>
                <div class="info-box-progress">
                    <div class="progress progress-xs progress-squared bs-n">
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel info-box panel-white">
            <div class="panel-body">
                <div class="info-box-stats">
                    <p class="counter"><?php echo number_format($products);  ?></p>
                    <span class="info-box-title">Products</span>
                </div>
                <div class="info-box-icon">
                    <i class="icon-bag"></i>
                </div>
                <div class="info-box-progress">
                    <div class="progress progress-xs progress-squared bs-n">
                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel info-box panel-white">
            <div class="panel-body">
                <div class="info-box-stats">
                    <p><span class="counter"><?php echo number_format($sales);  ?></span></p>
                    <span class="info-box-title">Items Sold</span>
                </div>
                <div class="info-box-icon">
                    <i class="icon-basket"></i>
                </div>
                <div class="info-box-progress">
                    <div class="progress progress-xs progress-squared bs-n">
                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel info-box panel-white">
            <div class="panel-body">
                <div class="info-box-stats">
                    <p class="counter"><?php echo number_format($product_view['product_views']);  ?></p>
                    <span class="info-box-title">Product Views</span>
                </div>
                <div class="info-box-icon">
                    <i class="icon-eye"></i>
                </div>
                <div class="info-box-progress">
                    <div class="progress progress-xs progress-squared bs-n">
                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- Row -->

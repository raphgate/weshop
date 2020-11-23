<?php  
  include_once 'inc/dbc.php';
 include_once 'inc/session.php';
 include_once 'inc/display_products.php';
        
    if (!isset($_GET['orderID'])) {
       $URL = "index.php";
         echo "<script>location.href='$URL'</script>"; 
    }else{
      @$order_id = htmlentities(trim($_GET['orderID']));
      $con = open();
      @$q = mysqli_fetch_array(mysqli_query($con, "SELECT time_added,location,customer_name,phone FROM orders WHERE order_id='$order_id' "));
    }
?>
<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <!-- Site Title-->
   <title>Weshop || Order detail</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Libre+Franklin:200,300,500,600,300italic">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">
<style type="text/css">
    p {color: #000;}
    @media print{
        #sidebar{
            display: none;
        }
        #header{
            display: none;
        }
        #rtitle{
            display: none;
        }
        #prbtn{
            display: none;
        }
        #mfoot{
            display: none;
        }
        #mayaa{
          margin-left: 0px!important;
        }
    }

     @media (min-width: 1920px) {
        #remark{
        margin-left:60em;
        }
    }
</style>
  </head>
  <body>
    <!-- Page-->
    <div class="page">
      
      <div class="preloader">
        <div class="cssload-container">
          <div class="cssload-speeding-wheel"></div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8" style="margin-left: 20%;margin-top: 5%" id="mayaa">
          <section class="text-center fullwidth-page" style="">
        <div style="padding: 2%;border: 1px solid ;border-radius: 10px 10px 10px 10px;width: 90%;margin-bottom: 5%" id="receipt">                
              <div class="row">
                <div class="col-xs-6 col-md-6">
                  <img src="images/weshop-logo.png" style="float: left;">
                </div>
                <div class="col-xs-6 col-md-6" style="text-align: right;">
                    <h5 style="">Order Info</h5>
                </div>
              </div><br><hr>
              <div class="row">
                <div class="col-xs-6 col-md-6" style="text-align: left;">
                 <b style="">Name: <?php echo $q['customer_name'] ?></b><br>
                 <b style="">Shipping Address: <?php echo $q['location'] ?></b>
              </div>
              <div class="col-xs-6 col-md-6 " style="text-align: right;">
                   <b style="">Date:  <?php echo $q['time_added'] ?></b><br> 
                   <b style="">Order ID:  <?php echo $order_id ?></b> 
              </div>
              </div>
              <div style="margin-top: 5%">
                  <table class="table table-hover table-striped">
                      <thead>
                          <tr class="table table-bordered" style="background: #d7cfcf;color: #000">
                              <th>#</th>
                              <th>Image</th>
                              <th colspan="4">Description</th>
                              <th>Quantity</th>
                              <th>Unit Price</th>
                              <th>Amount</th>
                          </tr>
                      </thead>
                      <tbody>
                           <?php 
                              $sales = new display_products;
                              $con = open();
                              $sales ->viewCustomerOrder($con,$order_id);
                          ?>
                      </tbody>
                      
                  </table>
                  <hr>
                  <center><b>Thanks for your patronage</b></center><br><br>
                  <div class="row" id="prbtn">
                    <div class="col-xs-6 col-md-6">
                      <button onclick="window.print()" class="btn btn-success btn-sm pull-left">Print order detail</button>
                    </div>
                    <div class="col-xs-6 col-md-6">
                      <a href="index.php" class="pull-right">Back to home</a>
                    </div>
                  </div>
                  
              </div>
          </div>
      </section>
        </div>
      </div>
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- PhotoSwipe Gallery-->
    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="pswp__bg"></div>
      <div class="pswp__scroll-wrap">
        <div class="pswp__container">
          <div class="pswp__item"></div>
          <div class="pswp__item"></div>
          <div class="pswp__item"></div>
        </div>
        <div class="pswp__ui pswp__ui--hidden">
          <div class="pswp__top-bar">
            <div class="pswp__counter"></div>
            <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
            <button class="pswp__button pswp__button--share" title="Share"></button>
            <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
            <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
            <div class="pswp__preloader">
              <div class="pswp__preloader__icn">
                <div class="pswp__preloader__cut">
                  <div class="pswp__preloader__donut"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
            <div class="pswp__share-tooltip"></div>
          </div>
          <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
          <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
          <div class="pswp__caption">
            <div class="pswp__caption__cent"></div>
          </div>
        </div>
      </div>
    </div>
    <!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body><!-- Google Tag Manager --><noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-P9FT69"height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript><script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-P9FT69');</script><!-- End Google Tag Manager -->
</html>
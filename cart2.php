<?php 
  include_once 'inc/dbc.php';
  include_once 'inc/session.php';
  include_once 'auth/accounts.php';
  include_once 'inc/display_products.php';
    if (isset($_SESSION['cart_id'])) {
        $cart_id = $_SESSION['cart_id'];
    }else{
        $URL = "index.php";
         echo "<script>location.href='$URL'</script>"; 
    }
?>
<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Cart</title>
    <?php include_once('inc/metalinks.php'); ?>
  </head>
  <body>
    
    <div class="page">
      <div class="preloader">
        <div class="cssload-container">
          <div class="cssload-speeding-wheel"></div>
        </div>
      </div>
      
      <?php include_once('inc/header.php'); ?>
      
      <section class="breadcrumbs-custom">
        <div class="container">
          <div class="breadcrumbs-custom__inner">
            <p class="breadcrumbs-custom__title">Cart</p>
            <ul class="breadcrumbs-custom__path">
              <li><a href="index.php">Home</a></li>
              <li class="active">Cart</li>
            </ul>
          </div>
        </div>
      </section>
      <section class="section-md bg-default">
        <div class="container">
          <div class="table-responsive">
            <table class="table-cart">
              <thead>
                <tr>
                  <th>Product</th>
                  <th>Price</th>
                  <th>Quantity</th>
                  <th>Total</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody id="cartino">
                <?php 
                        $cart = new display_products;
                        $con = open();
                        $cart ->getCart($con,$cart_id);
                    ?>
              </tbody>
            </table>
          </div>
        </div>
      </section>
      
      <?php include_once('inc/footer.php'); ?>
    </div>
    
    <div class="snackbars" id="form-output-global"></div>
    
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
    
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
    <script type="text/javascript" src="inc/products.js"></script>
    <script type="text/javascript" src="inc/settings.js"></script>
  </body>
</html>
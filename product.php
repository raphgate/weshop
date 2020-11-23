<?php include_once 'inc/session.php';
      include_once 'inc/display_products.php';
      include_once 'inc/dbc.php';

      if (!isset($_GET['product'])) {
          print " <script>window.location.assign('index.php')</script>";
      }
        $con = open();
        @$product_id = mysqli_real_escape_string($con, $_GET['product']);
        $update = mysqli_query($con,"UPDATE products SET product_views=product_views+1 WHERE product_id='$product_id' ");

        $r = mysqli_fetch_array(mysqli_query($con, "SELECT sub_category,product_name,instock FROM products WHERE product_id='$product_id' "));
        $sub_category = $r['sub_category'];
        $instock = $r['instock'];
        if ($instock == 1) {
          $stock = 'In stock';
        }elseif ($instock == 0) {
          $stock = 'Not in stock';
        }
      
?>
<html class="wide wow-animation" lang="en">
  <head>
    <title><?php echo $r['product_name'] ?></title>
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
            <p class="breadcrumbs-custom__title"><?php echo $r['product_name'] ?></p>
            <p class=""><b>(Item <?php echo $stock; ?>)</b></p>
          </div>
        </div>
      </section>
      <?php  
          $view_product = new display_products;
          $view_product->viewProduct($sub_category,$product_id);
      ?>



        
      
      <div class="container">
        <div class="divider"></div>
      </div>

      <section class="section-sm bg-default">
        <div class="container text-center">
          <h5>Related Products</h5>
          
          <div class="owl-carousel carousel-product" data-items="1" data-md-items="2" data-lg-items="3" data-xl-items="4" data-stage-padding="0" data-loop="false" data-margin="50" data-mouse-drag="false" data-nav="true">
               <?php  
                    $related = new display_products;
                    $related->relatedProducts($sub_category,$product_id);
                ?>
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
  </body>
</html>
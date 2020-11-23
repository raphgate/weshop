<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>WeShop Nigeria</title>
    <?php include_once('inc/metalinks.php'); ?>
  </head>
  <body>
    
    <div class="page">
      <div class="preloader">
        <div class="cssload-container">
          <div class="cssload-speeding-wheel"></div>
        </div>
      </div>
      <?php include_once 'inc/header.php'; ?>

      <section style="background-color: #b35521 !important;" class="section-limit bg-gray-lighter bg-image bg-image">
        <div class="container">
          <div class="row">
            <div class="col-md-7 col-lg-5 section-xl section-xl_bigger">
              <h3 class="wow fadeInUpSmall" data-wow-delay=".2s" data-wow-duration="1.2s">Need Custom Order?</h3>
              <p class="big wow fadeInUpSmall" data-wow-delay=".5s" data-wow-duration="1.2s">Send direct message to WeShop Nigeria on your custom request or bulk purchase order.</p>
              <a class="banner-link wow fadeInUpSmall" href="whatsapp://send?phone=+2347037348375&text=Hello WeShop Nigeria. I need a custom order." data-wow-delay=".7s" data-wow-duration="1.2s">Contact WeShop Nigeria</a>
            </div>
          </div>
        </div>
      </section>

      <!-- Divider-->
      <div class="container">
        <div class="divider"></div>
      </div>

      <section class="section-lg bg-default">
        <div class="container text-center">
          <h4>Products</h4>
          
          <div class="row" id="moreP">

            <?php  
              $products = new display_products;
              $products-> getProducts(0);
             ?>

          </div><hr><br>
          <a href="#" class="btn btn-lg button-black" id="loadMore">Load More</a>
        </div>
      </section>

      
      <div class="container">
        <div class="divider"></div>
      </div>

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
    <!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
    <script type="text/javascript" src="inc/products.js"></script>
  </body>
  <script type="text/javascript">

        var flag = 0;
        flag += 12
        var action1 = 'load';

        //load more data on click
        $("#loadMore").click(function () {
          event.preventDefault();
          $("#loadMore").html('Fetching Data...');
            $.ajax({
                type: "POST",
                url: "inc/loadMore.php",
                data: {
                    'offset': flag,
                },
                success: function (data) {
                    $('#moreP').append(data);
                    $("#loadMore").html('Load More');
                    flag += 12;
                }
            });
        });
    </script>
</html>
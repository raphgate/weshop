<?php include_once 'inc/session.php';
      include_once 'inc/display_products.php';
      include_once 'inc/dbc.php';

     if (!isset($_GET['category'])) {
       print " <script>window.location.assign('index.php')</script>";
    }else{
      $con = open();
      @$mycategory = mysqli_real_escape_string($con, $_GET['category']);
    }
?>
<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title><?php echo $mycategory ?></title>
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
      <section class="breadcrumbs-custom">
        <div class="container">
          <div class="breadcrumbs-custom__inner">
            <p class="breadcrumbs-custom__title"><?php echo $mycategory; ?></p>
            <ul class="breadcrumbs-custom__path">
              <li><a href="index.php">Home</a></li>
              <li><a href="#">Category</a></li>
              <li class="active"><?php echo $mycategory; ?></li>
            </ul>
          </div>
        </div>
      </section>

      <!-- Divider-->
      <div class="container">
        <div class="divider"></div>
      </div>

      <section class="section-lg bg-default">
        <div class="container text-center">          
          <div class="row" id="moreCat">
            <input type="hidden" name="category" value="<?php echo $mycategory; ?>" id="category">
            <?php  
              $products = new display_products;
              $products-> getCategory($mycategory,0);
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
  </body>
  <script type="text/javascript">

        var flag = 0;
        flag += 12
        var action1 = 'load';

        //load more data on click
        $("#loadMore").click(function () {
          event.preventDefault();
          $("#loadMore").html('Fetching Data...');
          var category = $("#category").val();
            $.ajax({
                type: "POST",
                url: "inc/moreCat.php",
                data: {
                    'offset': flag,
                    'category' : category,
                },
                success: function (data) {
                    $('#moreCat').append(data);
                    $("#loadMore").html('Load More');
                    flag += 12;
                }
            });
        });
    </script>
</html>
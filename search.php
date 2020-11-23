<?php include_once 'inc/session.php';
      include_once 'inc/display_products.php';
      include_once 'inc/dbc.php';

     if (!isset($_GET['result'])) {
       print " <script>window.location.assign('index.php')</script>";
    }else{
      $con = open();
      @$keyword = mysqli_real_escape_string($con, $_GET['result']);
    }
?>
<html class="wide wow-animation" lang="en">
  <head>
    <title><?php echo $keyword; ?></title>
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
      
      <div class="container">
        <div class="divider"></div>
      </div>

      <section class="section-lg bg-default">
        <div class="container text-center">
          <h6>Search Result for <?php echo $keyword; ?></h6>
          <input type="hidden" id="keyword" value="<?php echo $keyword ?>">
          
          <div class="row" id="moreSearch">

            <?php  
              $search = new display_products;
              $search-> processSearch($keyword,0);
             ?>

          </div>
        </div><br><hr><br>
        <center>
              <a href="#" class="btn btn-lg button-black" id="loadMore">Load More</a>
            </center>
      </section>
      <!-- Divider-->
      <div class="container">
        <div class="divider"></div>
      </div>

      
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
    
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
    <script type="text/javascript">

        var flag = 0;
        flag += 12
        var action1 = 'load';

        //load more data on click
        $("#loadMore").click(function () {
          event.preventDefault();
          $("#loadMore").html('Fetching Data...');
          var keyword = $("#keyword").val();
            $.ajax({
                type: "POST",
                url: "inc/moreSearch.php",
                data: {
                    'offset': flag,
                    'keyword' : keyword,
                },
                success: function (data) {
                    $('#moreSearch').append(data);
                    $("#loadMore").html('Load More');
                    flag += 12;
                }
            });
        });
    </script>
  </body>
</html>
<?php include_once 'dbc.php'; 
  $computers = mysqli_num_rows(mysqli_query($con, "SELECT product_id FROM products WHERE category = 'Computer' "));
  $phone = mysqli_num_rows(mysqli_query($con, "SELECT product_id FROM products WHERE category = 'Mobile Phone' "));
  $television = mysqli_num_rows(mysqli_query($con, "SELECT product_id FROM products WHERE sub_category = 'Television' "));
  $accessory = mysqli_num_rows(mysqli_query($con, "SELECT product_id FROM products WHERE sub_category = 'Accessory' "));

?>
<section class="section-lg bg-default text-center">
        <div class="container">
          <h4>Top Moes Telecomture Categories</h4>
          <div class="row row-60">
            <div class="col-md-6 col-xl-3">
              
              <div class="thumb thumb-corporate">
                <div class="thumb-corporate__main"><img src="sample_pix/computer.png" alt="" style="max-width: 200px" />
                </div>
                <div class="thumb-corporate__caption">
                  <p class="thumb__title"><a href="category.php?category=Computer">Computers</a></p>
                  <p class="thumb__subtitle"><?php echo number_format($computers) ?> product(s)</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-xl-3">
              
              <div class="thumb thumb-corporate">
                <div class="thumb-corporate__main"><img src="sample_pix/phone.jpg" alt="" style="max-width: 200px" />
                </div>
                <div class="thumb-corporate__caption">
                  <p class="thumb__title"><a href="category.php?category=Mobile Phone">Mobile Phones</a></p>
                  <p class="thumb__subtitle"><?php echo number_format($phone) ?> product(s)</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-xl-3">
              
              <div class="thumb thumb-corporate">
                <div class="thumb-corporate__main"><img src="sample_pix/television.jpg" alt="" style="max-width: 200px" />
                </div>
                <div class="thumb-corporate__caption">
                  <p class="thumb__title"><a href="category.php?category=Television">Televisions</a></p>
                  <p class="thumb__subtitle"><?php echo number_format($television) ?> product(s)</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-xl-3">
              
              <div class="thumb thumb-corporate">
                <div class="thumb-corporate__main"><img src="sample_pix/accessory.jpg" alt="" style="max-width: 200px" />
                </div>
                <div class="thumb-corporate__caption">
                  <p class="thumb__title"><a href="category.php?category=Accessory">Accessories</a></p>
                  <p class="thumb__subtitle"><?php echo number_format($accessory) ?> product(s)</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
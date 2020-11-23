<script>
        <?php include_once 'filter.js'; ?>
</script>
    <?php   
        if(isset($_GET['pdt'])){
            $sample_id = $_GET['pdt'];
          $pr = mysqli_fetch_array(mysqli_query($con,"SELECT product FROM product_samples WHERE sample_id='$sample_id' "));
          $product = $pr['product'];
        }elseif(isset($_POST['product'])){
            $product = mysqli_real_escape_string($con,$_POST['product']);
        }
          
    ?>
    
 <form method="POST" action="filtered-products.php" enctype="">
    <div class="page-selector">
    <div class="shop-grid-controls">
        <div class="entry">
            <div class="inline-text">Filter <?php echo $product; ?> By:</div>
            <div class="" style="max-width: 150px">
                <select class="form-control" id="product" name="product" style="display:none;" required="required">
                <option><?php echo $product; ?></option>
            </select>
            </div>
        </div>
        <div class="entry">
            <div class="inline-text">Option</div>
            <div class="simple-drop-down" style="max-width: 150px;margin-bottom: 5%" id="muni">
                <select>
                    <option>Select One</option>
                </select>
            </div>
             <div class="simple-drop-down" style="max-width: 150px;max-height:30px;margin-bottom: 5%" id="value_here">
                <select>
                    <option>Enter Value</option>
                </select>
            </div>
            <button style="border: 0px;max-height: 30px;color: #fff;background: #000;float: right;" type="submit" name="filter_me" id="filter_btn">Filter</button>
        </div>

    </div>
    <div class="clear"></div>
</div>
<script>window.onload = getProduct(); </script>
 </form>

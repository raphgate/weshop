<?php
  include_once 'inc/dbc.php';
  include_once './../inc/session.php';

  class updateProducts{
    public function update_television($con,$shop_id,$product_id,$im1,$im2,$im3){
    $date = date('F-d-Y');
    $screen_type = mysqli_real_escape_string($con,$_POST['screen_type']);
    $screen_size = mysqli_real_escape_string($con,$_POST['screen_size']);
    $hdmi = mysqli_real_escape_string($con,$_POST['hdmi']);
    $cl_plus = mysqli_real_escape_string($con,$_POST['cl_plus']);
    $vga = mysqli_real_escape_string($con,$_POST['vga']);
    $usb = mysqli_real_escape_string($con,$_POST['usb']);
    $web_cam = mysqli_real_escape_string($con,$_POST['web_cam']);
    $aspect = mysqli_real_escape_string($con,$_POST['aspect']);
    $internet = mysqli_real_escape_string($con,$_POST['internet']);
    $smart = mysqli_real_escape_string($con,$_POST['smart']);
    $pc_streaming = mysqli_real_escape_string($con,$_POST['pc_streaming']);
    $speaker = mysqli_real_escape_string($con,$_POST['speaker']);
    $discount = mysqli_real_escape_string($con,$_POST['discount']);
    $brand = mysqli_real_escape_string($con,$_POST['brand']);
    $color = mysqli_real_escape_string($con,$_POST['color']);
    $pname = mysqli_real_escape_string($con,$_POST['pname']);
    $price = mysqli_real_escape_string($con,$_POST['price']);
    $product_description = mysqli_real_escape_string($con,$_POST['product_description']);

    $unique=time();
    @$pix=$_FILES['pix']['name'];
    @$pix_2=$_FILES['pix_2']['name'];
    @$pix_3=$_FILES['pix_3']['name'];
    if ($pix != '') {
      $pix = $unique.$pix;
      $rphoto=$_FILES['pix']['tmp_name'];
      $target="../product_pix/".$pix;
      move_uploaded_file($rphoto, $target);
    }else{
      $pix = $im1;
    }
    if ($pix_2 != '') {
      $pix_2 = $unique.$pix_2;
      $rphoto=$_FILES['pix_2']['tmp_name'];
      $target="../product_pix/".$pix_2;
      $image_2 = $pix_2;
      move_uploaded_file($rphoto, $target);
    }else{
      $image_2 = $im2;
    }

    if ($pix_3 != '') {
      $pix_3 = $unique.$pix_3;
      $rphoto=$_FILES['pix_3']['tmp_name'];
      $target="../product_pix/".$pix_3;
      $image_3 = $pix_3;
      move_uploaded_file($rphoto, $target);
    }else{
      $image_3 = $im3;
    }

 $update = mysqli_query($con, "UPDATE products SET product_name='$pname',brand='$brand',product_pix='$pix',price='$price',discount='$discount' WHERE product_id='$product_id' ");

    $update2 = mysqli_query($con, "UPDATE televisions SET product_name='$pname', product_pix='$pix', price='$price', discount='$discount', brand='$brand', screen_type='$screen_type', screen_size='$screen_size', hdmi='$hdmi', cl_plus='$cl_plus', vga='$vga', usb='$usb', color='$color', aspect_ratio='$aspect', internet_access='$internet', smart_tv='$smart', web_cam='$web_cam', pc_streaming='$pc_streaming', speaker='$speaker', product_description='$product_description',image_2='$image_2',image_3='$image_3' WHERE product_id='$product_id' ");
    if ($update == true && $update2 == true) {
      print "<script>alert('Product updateed')</script>";
    }else{
      print "<script>alert('Failed to update product.. Please try again later')</script>";
    }

    }
    //////////////////Function for updateing ballpoint pen to products//////////////////
    public function update_smart_phone($con,$shop_id,$product_id,$im1,$im2,$im3){
    $date = date('F-d-Y');
    $network = mysqli_real_escape_string($con,$_POST['network']);
    $sim = mysqli_real_escape_string($con,$_POST['sim']);
    $screen_type = mysqli_real_escape_string($con,$_POST['screen_type']);
    $p_condition = mysqli_real_escape_string($con,$_POST['p_condition']);
    $screen_size = mysqli_real_escape_string($con,$_POST['screen_size']);
    $screen_protection = mysqli_real_escape_string($con,$_POST['screen_protection']);
    $multitouch = mysqli_real_escape_string($con,$_POST['multitouch']);
    $os = mysqli_real_escape_string($con,$_POST['os']);
    $cpu = mysqli_real_escape_string($con,$_POST['cpu']);
    $card_slot = mysqli_real_escape_string($con,$_POST['card_slot']);
    $internal = mysqli_real_escape_string($con,$_POST['internal']);
    $ram = mysqli_real_escape_string($con,$_POST['ram']);
    $front_cam = mysqli_real_escape_string($con,$_POST['front_cam']);
    $back_cam = mysqli_real_escape_string($con,$_POST['back_cam']);
    $speaker = mysqli_real_escape_string($con,$_POST['speaker']);
    $wifi = mysqli_real_escape_string($con,$_POST['wifi']);
    $hotspot = mysqli_real_escape_string($con,$_POST['hotspot']);
    $bluetooth = mysqli_real_escape_string($con,$_POST['bluetooth']);
    $usb = mysqli_real_escape_string($con,$_POST['usb']);
    $gps = mysqli_real_escape_string($con,$_POST['gps']);
    $radio = mysqli_real_escape_string($con,$_POST['radio']);
    $battery = mysqli_real_escape_string($con,$_POST['battery']);
    $fingerprint = mysqli_real_escape_string($con,$_POST['fingerprint']);
    $discount = mysqli_real_escape_string($con,$_POST['discount']);
    $brand = mysqli_real_escape_string($con,$_POST['brand']);
    $color = mysqli_real_escape_string($con,$_POST['color']);
    $pname = mysqli_real_escape_string($con,$_POST['pname']);
    $price = mysqli_real_escape_string($con,$_POST['price']);
    $product_description = mysqli_real_escape_string($con,$_POST['product_description']);

    $unique=time();
    @$pix=$_FILES['pix']['name'];
    @$pix_2=$_FILES['pix_2']['name'];
    @$pix_3=$_FILES['pix_3']['name'];
    if ($pix != '') {
      $pix = $unique.$pix;
      $rphoto=$_FILES['pix']['tmp_name'];
      $target="../product_pix/".$pix;
      move_uploaded_file($rphoto, $target);
    }else{
      $pix = $im1;
    }
    if ($pix_2 != '') {
      $pix_2 = $unique.$pix_2;
      $rphoto=$_FILES['pix_2']['tmp_name'];
      $target="../product_pix/".$pix_2;
      $image_2 = $pix_2;
      move_uploaded_file($rphoto, $target);
    }else{
      $image_2 = $im2;
    }

    if ($pix_3 != '') {
      $pix_3 = $unique.$pix_3;
      $rphoto=$_FILES['pix_3']['tmp_name'];
      $target="../product_pix/".$pix_3;
      $image_3 = $pix_3;
      move_uploaded_file($rphoto, $target);
    }else{
      $image_3 = $im3;
    }

 $update = mysqli_query($con, "UPDATE products SET product_name='$pname',brand='$brand',product_pix='$pix',price='$price',discount='$discount' WHERE product_id='$product_id' ");

    $update2 = mysqli_query($con, "UPDATE phones SET product_name='$pname', brand='$brand', product_pix='$pix', network='$network', sim_type='$sim', screen_type='$screen_type', screen_size='$screen_size', screen_protection='$screen_protection', multitouch='$multitouch', os='$os', cpu='$cpu', card_slot='$card_slot', internal_storage='$internal', ram='$ram', front_cam='$front_cam', back_cam='$back_cam', speaker='$speaker', wifi='$wifi', hotspot='$hotspot', bluetooth='$bluetooth', usb='$usb', gps='$gps', radio='$radio', battery='$battery', price='$price', discount='$discount', color='$color', product_description='$product_description', fingerprint='$fingerprint',image_2='$image_2',image_3='$image_3',phone_condition='$p_condition' WHERE product_id='$product_id' ");

    if ($update == true && $update2 == true) {
      print "<script>alert('Product updateed')</script>";
    }else{
      print "<script>alert('Failed to update product.. Please try again later')</script>";
    }

    }

    //////////////////Function for updateing Laptop to products//////////////////
    public function update_laptop($con,$shop_id,$product_id,$im1,$im2,$im3){
    $date = date('F-d-Y');
    $processor = mysqli_real_escape_string($con,$_POST['processor']);
    $ram = mysqli_real_escape_string($con,$_POST['ram']);
    $graphics_card = mysqli_real_escape_string($con,$_POST['graphics_card']);
    $dedicated = mysqli_real_escape_string($con,$_POST['dedicated']);
    $hard_type = mysqli_real_escape_string($con,$_POST['hard_type']);
    $storage_size = mysqli_real_escape_string($con,$_POST['storage_size']);
    $screen_type = mysqli_real_escape_string($con,$_POST['screen_type']);
    $screen_size = mysqli_real_escape_string($con,$_POST['screen_size']);
    $network_card = mysqli_real_escape_string($con,$_POST['network_card']);
    $wifi = mysqli_real_escape_string($con,$_POST['wifi']);
    $bluetooth = mysqli_real_escape_string($con,$_POST['bluetooth']);
    $speaker = mysqli_real_escape_string($con,$_POST['speaker']);
    $keyboard_type = mysqli_real_escape_string($con,$_POST['keyboard_type']);
    $key_light = mysqli_real_escape_string($con,$_POST['key_light']);
    $pointing_device = mysqli_real_escape_string($con,$_POST['pointing_device']);
    $no_usb = mysqli_real_escape_string($con,$_POST['no_usb']);
    $hdmi = mysqli_real_escape_string($con,$_POST['hdmi']);
    $sata_port = mysqli_real_escape_string($con,$_POST['sata_port']);
    $head_port = mysqli_real_escape_string($con,$_POST['head_port']);
    $lan_port = mysqli_real_escape_string($con,$_POST['lan_port']);
    $vga_port = mysqli_real_escape_string($con,$_POST['vga_port']);
    $battery = mysqli_real_escape_string($con,$_POST['battery']);
    $os = mysqli_real_escape_string($con,$_POST['os']);
    $web_cam = mysqli_real_escape_string($con,$_POST['web_cam']);
    $discount = mysqli_real_escape_string($con,$_POST['discount']);
    $brand = mysqli_real_escape_string($con,$_POST['brand']);
    $color = mysqli_real_escape_string($con,$_POST['color']);
    $pname = mysqli_real_escape_string($con,$_POST['pname']);
    $price = mysqli_real_escape_string($con,$_POST['price']);
    $product_description = mysqli_real_escape_string($con,$_POST['product_description']);

    $unique=time();
    @$pix=$_FILES['pix']['name'];
    @$pix_2=$_FILES['pix_2']['name'];
    @$pix_3=$_FILES['pix_3']['name'];
    if ($pix != '') {
      $pix = $unique.$pix;
      $rphoto=$_FILES['pix']['tmp_name'];
      $target="../product_pix/".$pix;
      move_uploaded_file($rphoto, $target);
    }else{
      $pix = $im1;
    }
    if ($pix_2 != '') {
      $pix_2 = $unique.$pix_2;
      $rphoto=$_FILES['pix_2']['tmp_name'];
      $target="../product_pix/".$pix_2;
      $image_2 = $pix_2;
      move_uploaded_file($rphoto, $target);
    }else{
      $image_2 = $im2;
    }

    if ($pix_3 != '') {
      $pix_3 = $unique.$pix_3;
      $rphoto=$_FILES['pix_3']['tmp_name'];
      $target="../product_pix/".$pix_3;
      $image_3 = $pix_3;
      move_uploaded_file($rphoto, $target);
    }else{
      $image_3 = $im3;
    }

 $update = mysqli_query($con, "UPDATE products SET product_name='$pname',brand='$brand',product_pix='$pix',price='$price',discount='$discount' WHERE product_id='$product_id' ");

    $update2 = mysqli_query($con, "UPDATE laptops SET product_name='$pname', product_pix='$pix', brand='$brand', price='$price', discount='$discount', processor='$processor', ram='$ram', graphics_card='$graphics_card', dedicated='$dedicated', hard_drive_type='$hard_type', hard_drive_size='$storage_size', screen_type='$screen_type', screen_size='$screen_size', network_card='$network_card', wifi='$wifi', bluetooth='$bluetooth', speaker='$speaker', keyboard_type='$keyboard_type', keyboard_light='$key_light', pointing_device='$pointing_device', no_usb='$no_usb', hdmi='$hdmi', sata='$sata_port', head_phone_port='$head_port', lan_port='$lan_port', battery='$battery', os='$os', vga='$vga_port', web_cam='$web_cam', color='$color', product_description='$product_description', image_2='$image_2', image_3='$image_3' WHERE product_id='$product_id' ");
    if ($update == true && $update2 == true) {
      print "<script>alert('Product updateed')</script>";
    }else{
      print "<script>alert('Failed to update product.. Please try again later')</script>";
    }

    }

    //////////////////Function for updateing Accessory to products//////////////////
    public function update_accessory($con,$shop_id,$product_id,$im1,$im2,$im3){
    $date = date('F-d-Y');
    $brand = mysqli_real_escape_string($con,$_POST['brand']);
    $color = mysqli_real_escape_string($con,$_POST['color']);
    $pname = mysqli_real_escape_string($con,$_POST['pname']);
    $price = mysqli_real_escape_string($con,$_POST['price']);
    $discount = mysqli_real_escape_string($con,$_POST['discount']);
    $product_description = mysqli_real_escape_string($con,$_POST['product_description']);

    $unique=time();
    @$pix=$_FILES['pix']['name'];
    @$pix_2=$_FILES['pix_2']['name'];
    @$pix_3=$_FILES['pix_3']['name'];
    if ($pix != '') {
      $pix = $unique.$pix;
      $rphoto=$_FILES['pix']['tmp_name'];
      $target="../product_pix/".$pix;
      move_uploaded_file($rphoto, $target);
    }else{
      $pix = $im1;
    }
    if ($pix_2 != '') {
      $pix_2 = $unique.$pix_2;
      $rphoto=$_FILES['pix_2']['tmp_name'];
      $target="../product_pix/".$pix_2;
      $image_2 = $pix_2;
      move_uploaded_file($rphoto, $target);
    }else{
      $image_2 = $im2;
    }

    if ($pix_3 != '') {
      $pix_3 = $unique.$pix_3;
      $rphoto=$_FILES['pix_3']['tmp_name'];
      $target="../product_pix/".$pix_3;
      $image_3 = $pix_3;
      move_uploaded_file($rphoto, $target);
    }else{
      $image_3 = $im3;
    }

 $update = mysqli_query($con, "UPDATE products SET product_name='$pname',brand='$brand',product_pix='$pix',price='$price',discount='$discount' WHERE product_id='$product_id' ");

    $update2 = mysqli_query($con, "UPDATE accessories SET product_name='$pname',brand='$brand',color='$color',product_pix='$pix',price='$price',product_description='$product_description',discount='$discount',image_2='$image_2',image_3='$image_3' WHERE product_id='$product_id' ");

    if ($update == true && $update2 == true) {
      print "<script>alert('Product updateed')</script>";
    }else{
      print "<script>alert('Failed to update product')</script>";
    }

    }


    //////////////////Function for updateing Accessory to products//////////////////
    public function update_other($con,$shop_id,$product_id,$im1,$im2,$im3){
    $date = date('F-d-Y');
    $brand = mysqli_real_escape_string($con,$_POST['brand']);
    $pname = mysqli_real_escape_string($con,$_POST['pname']);
    $price = mysqli_real_escape_string($con,$_POST['price']);
    $discount = mysqli_real_escape_string($con,$_POST['discount']);
    $product_description = mysqli_real_escape_string($con,$_POST['product_description']);

    $unique=time();
    @$pix=$_FILES['pix']['name'];
    @$pix_2=$_FILES['pix_2']['name'];
    @$pix_3=$_FILES['pix_3']['name'];
    if ($pix != '') {
      $pix = $unique.$pix;
      $rphoto=$_FILES['pix']['tmp_name'];
      $target="../product_pix/".$pix;
      move_uploaded_file($rphoto, $target);
    }else{
      $pix = $im1;
    }
    if ($pix_2 != '') {
      $pix_2 = $unique.$pix_2;
      $rphoto=$_FILES['pix_2']['tmp_name'];
      $target="../product_pix/".$pix_2;
      $image_2 = $pix_2;
      move_uploaded_file($rphoto, $target);
    }else{
      $image_2 = $im2;
    }

    if ($pix_3 != '') {
      $pix_3 = $unique.$pix_3;
      $rphoto=$_FILES['pix_3']['tmp_name'];
      $target="../product_pix/".$pix_3;
      $image_3 = $pix_3;
      move_uploaded_file($rphoto, $target);
    }else{
      $image_3 = $im3;
    }

 $update = mysqli_query($con, "UPDATE products SET product_name='$pname',brand='$brand',product_pix='$pix',price='$price',discount='$discount' WHERE product_id='$product_id' ");

    $update2 = mysqli_query($con, "UPDATE orther SET product_name='$pname',brand='$brand',product_pix='$pix',price='$price',product_description='$product_description',discount='$discount',image_2='$image_2',image_3='$image_3' WHERE product_id='$product_id' ");

    if ($update == true && $update2 == true) {
      print "<script>alert('Product updateed')</script>";
    }else{
      print "<script>alert('Failed to update product')</script>";
    }

    }

    //////////////////Function for updateing Accessory to products//////////////////
    public function update_repair($con,$shop_id,$product_id,$im1,$im2,$im3){
    $date = date('F-d-Y');
    $brand = mysqli_real_escape_string($con,$_POST['brand']);
    $pname = mysqli_real_escape_string($con,$_POST['pname']);
    $price = mysqli_real_escape_string($con,$_POST['price']);
    $discount = mysqli_real_escape_string($con,$_POST['discount']);
    $component_to_fix = mysqli_real_escape_string($con,$_POST['component_to_fix']);

    $unique=time();
    @$pix=$_FILES['pix']['name'];
    @$pix_2=$_FILES['pix_2']['name'];
    @$pix_3=$_FILES['pix_3']['name'];
    if ($pix != '') {
      $pix = $unique.$pix;
      $rphoto=$_FILES['pix']['tmp_name'];
      $target="../product_pix/".$pix;
      move_uploaded_file($rphoto, $target);
    }else{
      $pix = $im1;
    }
    if ($pix_2 != '') {
      $pix_2 = $unique.$pix_2;
      $rphoto=$_FILES['pix_2']['tmp_name'];
      $target="../product_pix/".$pix_2;
      $image_2 = $pix_2;
      move_uploaded_file($rphoto, $target);
    }else{
      $image_2 = $im2;
    }

    if ($pix_3 != '') {
      $pix_3 = $unique.$pix_3;
      $rphoto=$_FILES['pix_3']['tmp_name'];
      $target="../product_pix/".$pix_3;
      $image_3 = $pix_3;
      move_uploaded_file($rphoto, $target);
    }else{
      $image_3 = $im3;
    }

    $update = mysqli_query($con, "UPDATE products SET product_name='$pname',brand='$brand',product_pix='$pix',price='$price',discount='$discount' WHERE product_id='$product_id' ");

    $update2 = mysqli_query($con, "UPDATE repairs SET product_name='$pname',brand='$brand',product_pix='$pix',price='$price',component_to_fix='$component_to_fix',discount='$discount',image_2='$image_2',image_3='$image_3' WHERE product_id='$product_id' ");

    if ($update == true && $update2 == true) {
      print "<script>alert('Repair updated')</script>";
    }else{
      print "<script>alert('Failed to update Repair')</script>";
    }

    }


  }

?>
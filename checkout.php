<?php
 
 include_once 'inc/dbc.php';
 include_once 'inc/session.php';
 include_once 'inc/display_products.php';
        
    @$cart_id = htmlentities(trim($_GET['cart_id']));
    @$ref = htmlentities(trim($_GET['payment']));
    @$location = htmlentities(trim($_GET['address']));
    @$email = htmlentities(trim($_GET['email']));
    @$phone = htmlentities(trim($_GET['phone']));
    @$fullname = htmlentities(trim($_GET['fullname']));

    //The parameter after verify/ is the transaction reference to be verified
        $url = 'https://api.paystack.co/transaction/verify/'.$ref.'';
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt(
          $ch, CURLOPT_HTTPHEADER, [
            'Authorization: Bearer sk_test_1b4e64193fa3e4d6b5f5a667445b77f156302aaa']
        );
        $request = curl_exec($ch);
        if(curl_error($ch)){
         echo 'error' . curl_error($ch);
         }
        curl_close($ch);
        
        if ($request) {
          $result = json_decode($request, true);
              if (array_key_exists('data', $result) && array_key_exists('status', $result['data']) && ($result['data']['status'] === 'success')) {
                echo 'done';
                $checkout = new display_products;
                $con = open();
                $checkout->checkout($con,$cart_id,$location,$email,$phone,$fullname);
                
            }else{
              echo "Transaction was unsuccessful";
            }
        }

     
 ?>
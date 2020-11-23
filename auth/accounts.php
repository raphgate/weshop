<?php
	include_once 'inc/dbc.php';
	include_once 'inc/session.php';

	class user{

		public function register($con)
		{
			$phone = mysqli_real_escape_string($con, $_POST['phone']);
			$email = mysqli_real_escape_string($con, $_POST['email']);
			$password = mysqli_real_escape_string($con, $_POST['password']);
			$address = mysqli_real_escape_string($con, $_POST['address']);
			$company_name = mysqli_real_escape_string($con, $_POST['company_name']);
			$rc_num = mysqli_real_escape_string($con, $_POST['rc_num']);
			$state = mysqli_real_escape_string($con, $_POST['state']);
			$shop_name = mysqli_real_escape_string($con, $_POST['shop_name']);
			$dates = date("Y/m/d");
			$password = sha1($password);

			$check = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM users WHERE email='$email' OR phone='$phone' "));
			$check2 = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM shops WHERE email='$email' OR phone='$phone' "));
			if ($phone == $check['phone'] || $phone == $check2['phone']) {
				echo "<script>alert('Phone Number Already Exist');</script>";
			}elseif ($email == $check['email'] || $email == $check2['email']) {
				echo "<script>alert('Email Already Exist');</script>";
			}else{
				$create_shop = mysqli_query($con, "INSERT INTO shops(phone,email,password,date_created,location,shop_name,state,status,company_name,rc_number) VALUES('$phone','$email','$password','$dates','$address','$shop_name','$state',0,'$company_name','$rc_num') ");

				  if($create_shop == true){
				  echo "<script>alert('Account Created Successfully');</script>";
				  $tinx = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM shops WHERE email='$email' AND password='$password' "));
						$_SESSION['shop_id'] = $tinx['shop_id'];
						$_SESSION['shop_name'] = $tinx['shop_name'];
						$_SESSION['email'] = $tinx['email'];
				            $URL = "cpanel/index.php";
				            echo "<script>location.href='$URL'</script>";
				  }else{
				  	echo "<script>alert('Failed to create account, Please try again later');
						        </script>";
				  }

		}

	}


		public function request($con)
		{
			$phone = mysqli_real_escape_string($con, $_POST['phone']);
			$send_to = "info@gratheoffice.com";
			$email = mysqli_real_escape_string($con, $_POST['email']);
			$company_name = mysqli_real_escape_string($con, $_POST['company_name']);
			$address = mysqli_real_escape_string($con, $_POST['address']);
			$state = mysqli_real_escape_string($con, $_POST['state']);
			$fullname = mysqli_real_escape_string($con, $_POST['fullname']);
			$dates = date("Y/m/d");

			$doc=$_FILES['document']['name'];
			$my_doc=$_FILES['document']['tmp_name'];
			 $arr = explode(".",$doc);
                        $len = count($arr);
            for ($i=0; $i < $len ; $i++) { 
                   $key1 = $arr[$i];                            
            }
            if ($key1 == "pdf" || $key1 == "doc" || $key1 == "docx") {
            	$subject = "Quotation";
    			$date = date("Y");

    		 $message = "Company Name : ".$company_name."\r\n";
    		 $message .= "Address : ".$address."\"\r\n";
    		 $message .= "Email Address : ".$email."\"\r\n";
    		 $message .= "Phone Number : ".$phone."\"\r\n";
    		 $message .= "State : ".$state."\"\r\n";

    			$file = "quotations/".$doc;
				$content = file_get_contents( $file);
				$content = chunk_split(base64_encode($content));
				$uid = md5(time());
				$name = basename($file);

				// header
				$header = "From: ".$company_name."<Quotation@yelocode.com>\r\n";
				$header .= "Reply-To: ".$email."\r\n";
				$header .= "MIME-Version: 1.0\r\n";
				$header .= "Content-Type: multipart/mixed; boundary=\"".$uid."\"\r\n\r\n";


				// message & attachment
				$nmessage = "--".$uid."\r\n";
				$nmessage .= "Content-type:text/plain; charset=iso-8859-1\r\n";
				$nmessage .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
				$nmessage .= $message."\r\n\r\n";
				$nmessage .= "--".$uid."\r\n";
				$nmessage .= "Content-Type: application/octet-stream; name=\"".$doc."\"\r\n";
				$nmessage .= "Content-Transfer-Encoding: base64\r\n";
				$nmessage .= "Content-Disposition: attachment; filename=\"".$doc."\"\r\n\r\n";
				$nmessage .= $content."\r\n\r\n";
				$nmessage .= "--".$uid."--";

 			$send = mail($send_to, $subject, $nmessage, $header);
 			if ($send == true) {
 				print "<script>alert('message Sent')</script>";
 			}else{
 				print "<script>alert('Message Not Sent')</script>";
 			}

            }else{
            	print "<script>alert('The File type you uploaded is not allowed')</script>";
            }

		}


		public function customerRegister($con)
		{
			$phone = mysqli_real_escape_string($con, $_POST['phone']);
			$email = mysqli_real_escape_string($con, $_POST['email']);
			$password = mysqli_real_escape_string($con, $_POST['password']);
			$address = mysqli_real_escape_string($con, $_POST['address']);
			$state = mysqli_real_escape_string($con, $_POST['state']);
			$fullname = mysqli_real_escape_string($con, $_POST['fullname']);
			$dates = date("Y/m/d");
			$password = sha1($password);

			$check = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM users WHERE email='$email' OR phone='$phone' "));
			$check2 = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM shops WHERE email='$email' OR phone='$phone' "));
			if ($phone == $check['phone'] || $phone == $check2['phone']) {
				echo '<script>alert("Phone Number already exist")</script>';
			}elseif ($email == $check['email'] || $email == $check2['email']) {
				echo '<script>alert("Email already exist")</script>';
			}else{
				$create_acc = mysqli_query($con, "INSERT INTO users(phone,email,password,date_created,location,fullname,state,status) VALUES('$phone','$email','$password','$dates','$address','$fullname','$state',0) ");
				if ($create_acc == true) {
		            echo "<script>alert('Account Created Successfully!')</script>";
		           if (isset($_SESSION['cart_id'])) {
					$URL = "cart.php";
				}else{
					$URL = "cpanel/customer.php";
				}
				$tinx = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM users WHERE email='$email' AND password='$password' "));
				$_SESSION['customer_id'] = $tinx['customer_id'];
				$_SESSION['fullname'] = $tinx['fullname'];
				$_SESSION['email'] = $tinx['email'];
		            echo "<script>location.href='$URL'</script>";
		        }else{
		        	 echo "<script>alert('Unable to create Account! Please try again later')</script>";
		        }
			}
		}


		public function login($con)
		{
			$email = mysqli_real_escape_string($con, $_POST['email']);
			$password = mysqli_real_escape_string($con, $_POST['password']);
			$password = sha1($password);

			$check = mysqli_num_rows(mysqli_query($con, "SELECT * FROM users WHERE email='$email' AND password='$password' "));
			if ($check == 1) {
				if (isset($_SESSION['cart_id']) && !isset($_SESSION['tmp_pd'])) {
					$URL = "cart.php";
				}elseif(isset($_SESSION['tmp_pd'])){
						$URL = "product.php?product=".$_SESSION['tmp_pd'];
				}else{
					$URL = "cpanel/customer.php";
				}
				$tinx = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM users WHERE email='$email' AND password='$password' "));
				$_SESSION['customer_id'] = $tinx['customer_id'];
				$_SESSION['fullname'] = $tinx['fullname'];
				$_SESSION['email'] = $tinx['email'];
		            echo "<script>location.href='$URL'</script>";
			}else{
				echo '<center><h6 style="color:red">Email OR Password Incorrect</h6></center>';
			}
		}

		public function updateUser($con,$shop_id){
			$shop_name = mysqli_real_escape_string($con, $_POST['shop_name']);
			$new_password = mysqli_real_escape_string($con, $_POST['newP']);
			$old_password = mysqli_real_escape_string($con, $_POST['oldP']);
			$URL = "shop-settings.php";
			if ($new_password != '' && $old_password != '') {
				$oldP_hash = sha1($old_password);
				$newP_hash = sha1($new_password);

				$check = mysqli_num_rows(mysqli_query($con, "SELECT password FROM shops WHERE shop_id='$shop_id' AND password='$oldP_hash' "));
				if ($check == 1) {
					$update = mysqli_query($con,"UPDATE shops SET password='$newP_hash',shop_name='$shop_name' WHERE shop_id='$shop_id' ");
			            echo "<script>alert('account updated')</script>";
		            echo "<script>location.href='$URL'</script>";
				}elseif($check < 1){
					echo '<center><h4 style="color:red">Password Incorrect</h4></center>';
				}
			}else{
				$update = mysqli_query($con,"UPDATE shops SET shop_name='$shop_name' WHERE shop_id='$shop_id' ");
			    echo "<script>alert('account updated')</script>";
			    echo "<script>location.href='$URL'</script>";
			}
			
		}

		public function updateCustomer($con,$customer_id){
			$fullname = mysqli_real_escape_string($con, $_POST['fullname']);
			$new_password = mysqli_real_escape_string($con, $_POST['newP']);
			$old_password = mysqli_real_escape_string($con, $_POST['oldP']);
			$URL = "customer-settings.php";
			if ($new_password != '' && $old_password != '') {
				$oldP_hash = sha1($old_password);
				$newP_hash = sha1($new_password);

				$check = mysqli_num_rows(mysqli_query($con, "SELECT password FROM users WHERE customer_id='$customer_id' AND password='$oldP_hash' "));
				if ($check == 1) {
					$update = mysqli_query($con,"UPDATE users SET password='$newP_hash',fullname='$fullname' WHERE customer_id='$customer_id' ");
			            echo "<script>alert('account updated')</script>";
		            echo "<script>location.href='$URL'</script>";
				}elseif($check < 1){
					echo '<center><h4 style="color:red">Password Incorrect</h4></center>';
				}
			}else{
				$update = mysqli_query($con,"UPDATE users SET fullname='$fullname' WHERE customer_id='$customer_id' ");
			    echo "<script>alert('account updated')</script>";
			    echo "<script>location.href='$URL'</script>";
			}
			
		}


		public function reset($con){
		$email = mysqli_real_escape_string($con,$_POST['email']);
	
		$check = mysqli_num_rows(mysqli_query($con, "SELECT email FROM users WHERE email='$email' "));
		$check2 = mysqli_num_rows(mysqli_query($con, "SELECT email FROM shops WHERE email='$email' "));
		if ($check > 0 || $check2 > 0) {
			$characters = '123456789ABCDEFGHIJKLMNOPQRSTUV';
			$characterslength=45;
			$randomString='';
			for ($i = 1; $i <= 10; $i++){
				$randomString.=$characters[rand(0,$characterslength - 1)];
			}
			$new_password = sha1($randomString);
			$new_password1 = $randomString;
			if ($check > 0) {
				$update_user = mysqli_query($con, "UPDATE users SET password='$new_password' WHERE email = '$email' ");
			}elseif ($check2 > 0) {
				$update_user = mysqli_query($con, "UPDATE shops SET password='$new_password' WHERE email = '$email' ");
			}
			

			

  	$subject = "Password Reset";
    $date = date("Y");

                $htmlContent = '<html>
                  <body style="background: #e4e2e2">
                  <center><div style="width: 50%;border-radius: 5px 5px 5px 5px;height:60%">
    
                  <div style="background: white;padding:10%;margin-top:25px">
                   <div>
                    <h6>Password Reset</h6>
                   </div>
                  <h3  style="color: #1ab394;font-family: Open Sans, helvetica, arial, sans-serif;margin:1%">Moes password reset</h3>
                  <p style="padding:10px;line-height:200%">You have successfully Reset <em style="color: #1ab394;font-family: CASTELLAR;font-size:1.2em;">Your password</em> Your new password is : '.$new_password1.'</p>
                 <div >
                    <div></div>
                     </div>
                   <br>
                   <div>
                    <p><strong>Copyright</strong> &copy; <i id="today_d">'.$date.'</i> Moes </p>
                   </div>
               </div>
    
               </div>
             </center>
          </body>
          </html>';

$from ='<password_reset@yelocode.com>';
// Additional headers
$headers = 'From: ' . $from. "\r\n";   
$headers  .= 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

 

 $send = mail($email,$subject,$htmlContent,$headers);
			
	echo "<script>alert('A mail has been sent to your email, check your mail and proceed to login')</script>";
	
		}

		else{
			echo "<script>alert('Sorry this email address is not associated with any account on this platform')</script>";
		}

	}


	}

?>
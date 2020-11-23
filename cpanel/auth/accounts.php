<?php
	include_once 'inc/dbc.php';
	include_once '../inc/session.php';

	class user{


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

		public function adminLogin()
		{
			$con = open();
			$email = clean('admin_email');
			$password = clean('admin_password');
			$password = sha1($password);

			$check = mysqli_num_rows(mysqli_query($con, "SELECT * FROM shops WHERE email='$email' AND password='$password' "));
			if ($check == 1) {
				$tinx = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM shops WHERE email='$email' AND password='$password' "));
				$_SESSION['shop_id'] = $tinx['shop_id'];
				$_SESSION['shop_name'] = $tinx['shop_name'];
				$_SESSION['shop_email'] = $tinx['email'];
		            $URL = "index.php";
		            echo "<script>location.href='$URL'</script>";
			}else{
				echo '<center><h4 style="color:red">Email OR Password Incorrect</h4></center>';
			}

			close($con);
		}


	}

?>
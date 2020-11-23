<?php
	 function open(){
		 // $con = mysqli_connect("localhost","root","","fashi");
		 $con = mysqli_connect("localhost","chuqxnoo_tacuini","4Yl^SqZe$+EP","chuqxnoo_weshopzuruwa");

		// Check connection
		if (mysqli_connect_errno())
		{
		    echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}else{
			return $con;
		}
	}

	function close($con){
		mysqli_close($con);
	}

	/////////////// Function to prevent SQL injection /////////////////
	function clean($txt){
		$con = open();
		$txt=mysqli_real_escape_string($con,trim($_POST[$txt]));
		return $txt;
		mysqli_close($con);
	}
?>
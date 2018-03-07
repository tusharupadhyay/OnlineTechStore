<?php 
session_start();
include("functions/functions.php");
include("includes/db.php");
	
		/* Get the new user parameters */
     	$ip = getIp();
		
		$c_name = $_POST['c_name'];
		$c_email = $_POST['c_email'];
		$c_pass = $_POST['c_pass'];
		$c_image = $_FILES['c_image']['name'];
		$c_image_tmp = $_FILES['c_image']['tmp_name'];
		$c_country = $_POST['c_country'];
		$c_city = $_POST['c_city'];
		$c_contact = $_POST['c_contact'];
		$c_address = $_POST['c_address'];
	
		/* Move customer image to customer_images folder */
		move_uploaded_file($c_image_tmp,"customer/customer_images/$c_image");
		
		/* Insert Data into database */
		$insert_c = "insert into customers (customer_ip,customer_name,customer_email,customer_pass,customer_country,customer_city,customer_contact,customer_address,customer_image) values ('$ip','$c_name','$c_email','$c_pass','$c_country','$c_city','$c_contact','$c_address','$c_image')";
		$run_c = mysqli_query($con, $insert_c); 
		
		/* Get the customer cart information */
		$sel_cart = "select * from cart where ip_add='$ip'";
		
		$run_cart = mysqli_query($con, $sel_cart); 
		
		$check_cart = mysqli_num_rows($run_cart); 
		
		/* If customer cart is empty then redirect to my accont page other wise redirect to check out page */
		if($check_cart==0){
		
		$_SESSION['customer_email']=$c_email; 
		
		#echo "<script>alert('Account has been created successfully, Thanks!')</script>";
		#echo "<script>window.open('customer/my_account.php','_self')</script>";
		
		}
		else {
		
		$_SESSION['customer_email']=$c_email; 
		
		#echo "<script>alert('Account has been created successfully, Thanks!')</script>";
		
		#echo "<script>window.open('checkout.php','_self')</script>";
		
		
		}
		if($run_c){
			echo 1;
		  }
		  else{
			echo 0;
		  }
		
?>
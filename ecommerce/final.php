<html>
	<head>
		<title>Payment Successful!</title>
	</head>
<body>

<h1>Payment Successful!</h1>
<?php 
  include("includes/db.php");
  //this is all for product details
		
  $total = 0;
		
  global $con; 
  // Get the customer information		
  $ip = getIp(); 
  $user = $_SESSION['customer_email'];
				
  $get_c = "select * from customers where customer_email='$user'";
  $run_c = mysqli_query($con, $get_c); 
				
  $row_c = mysqli_fetch_array($run_c); 
				
  $c_id = $row_c['customer_id'];
  $c_email = $row_c['customer_email'];
  $c_name = $row_c['customer_name']; 
	
  // Get the price and quanitity of items that customer has checkedout	
  $sel_price = "select * from cart where ip_add='$ip'";
  $run_price = mysqli_query($con, $sel_price); 
  while($p_price=mysqli_fetch_array($run_price)){
	$pro_id = $p_price['p_id']; 
	$qty = $p_price['qty'];
	
	$pro_price = "select * from products where product_id='$pro_id'";
	$run_pro_price = mysqli_query($con,$pro_price); 
	
	while ($pp_price = mysqli_fetch_array($run_pro_price)){
	  $product_price = array($pp_price['product_price']);
	  $prod_price = $pp_price['product_price'];
			
	  $product_id = $pp_price['product_id'];
	  $pro_name = $pp_price['product_title'];
	  
	  $values = array_sum($product_price);
	  
	  $total +=$values;
	  $total = $total * $qty;
	  
	  $invoice = 11112;
	  // inserting the order into table
	  $insert_order = "insert into orders (p_id, c_id, qty, invoice_no, order_date,status) values ('$pro_id','$c_id','$qty','$invoice',NOW(),'in Progress')";
	  $run_order = mysqli_query($con, $insert_order); 
	  
	  $trx_id = "123456ghgh";
	  $currency = "USD";
							
	  //inserting the payment to table 
	  $insert_payment = "insert into payments (amount,customer_id,product_id,trx_id,currency,payment_date) values ('$prod_price','$c_id','$pro_id','$trx_id','$currency',NOW())";
	  $run_payment = mysqli_query($con, $insert_payment); 
	}
  }
				
  //removing the products from cart
  $empty_cart = "delete from cart where ip_add='$ip'";
  $run_cart = mysqli_query($con, $empty_cart);
?>
</body>
</html>








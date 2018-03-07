<!DOCTYPE>
<?php 

include("functions/functions.php");

?>
<html>
	<head>
		<title>My Online Shop</title>
		
		
		
	<link rel="stylesheet" href="styles/style.css" media="all" /> 
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script src="js/jquery-1.9.1.min.js"></script>
	<script src="js/addTiles.js"></script>
	</head>
	
<body>
	
	<!--Main Container starts here-->
	<div class="main_wrapper">
	
		<!--Header starts here-->
		<div class="header_wrapper">
		
			
		</div>
		<!--Header ends here-->
		
		<!--Navigation Bar starts-->
		<div class="menubar">
			
			
			
		</div>
		<!--Navigation Bar ends-->
	
		<!--Content wrapper starts-->
		<div class="content_wrapper">
		
			<div id="sidebar">
			
				
			
			
			</div>
		
			<div id="content_area">
			<?php cart(); ?>
			<div id="shopping_cart"> 
					
					<span style="float:right; font-size:17px; padding:5px; line-height:40px;">
					
					<?php 
					if(isset($_SESSION['customer_email'])){
					echo "<b>Welcome:</b>" . $_SESSION['customer_email'] . "<b style='color:yellow;'>Your</b>" ;
					}
					else {
					echo "<b>Welcome Guest:</b>";
					}
					?>
					
					<b style="color:yellow">Shopping Cart -</b> Total Items: <?php total_items();?> Total Price: <?php total_price(); ?> <a href="cart.php" style="color:yellow">Go to Cart</a>
					
					
					<?php 
					if(!isset($_SESSION['customer_email'])){
					
					echo "<a href='checkout.php' style='color:orange;'>Login</a>";
					
					}
					else {
					echo "<a href='logout.php' style='color:orange;'>Logout</a>";
					}
					
					
					
					?>
					
					
					
					</span>
			</div>
			
				<div id="products_box">
	<?php 
	
	if(isset($_GET['search'])){
	
	$search_query = $_GET['user_query'];
	
	$get_pro = "select * from products where product_keywords like '%$search_query%'";

	$run_pro = mysqli_query($con, $get_pro); 
	
	while($row_pro=mysqli_fetch_array($run_pro)){
	
		$pro_id = $row_pro['product_id'];
		$pro_cat = $row_pro['product_cat'];
		$pro_brand = $row_pro['product_brand'];
		$pro_title = $row_pro['product_title'];
		$pro_price = $row_pro['product_price'];
		$pro_image = $row_pro['product_image'];
	
		echo "
				<div id='single_product'>
				
					<h3>$pro_title</h3>
					
					<img src='admin_area/product_images/$pro_image' width='180' height='180' class='img-rounded' />
					
					<p><b> $ $pro_price </b></p>
					
					<a href='details.php?pro_id=$pro_id'><button class='btn btn-primary'style='float:left'>Details</button></a>
					
					<a href='results.php?add_cart=$pro_id'><button class='btn btn-primary' style='float:right'>Add to Cart</button></a>
				
				</div>
		
		
		";
	
	}
	}
	?>
				
				</div>
			
			</div>
		</div>
		<!--Content wrapper ends-->
		
		
		
		<div id="footer">
		
		
		</div>
	
	
	
	
	
	
	</div> 
<!--Main Container ends here-->


</body>
</html>
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
		  <!-- header html partial is rendered by JS -->
		</div>
		<!--Header ends here-->
		
		<!--Navigation Bar starts-->
		<div class="menubar">
		  <!-- Navigation html partial rendered by JS -->
		</div>
		<!--Navigation Bar ends-->
	
		<!--Content wrapper starts-->
		<div class="content_wrapper">
		
			<div id="sidebar">
			  <!-- sidebar html partial rendered by JS -->
			</div>
		
			<div id="content_area">
			<?php cart(); ?>
			
			  <!-- Display shoping cart information on top of the page -->
			  <div id="shopping_cart"> 
				<?php include 'shopping_cart_info.php';?>						
			  </div>
			
			  <!-- Displaying available all products -->
			  <div id="products_box">
	          <?php
			  
				/* Getting all available products from database */
	            $get_pro = "select * from products";
	            $run_pro = mysqli_query($con, $get_pro); 
				
				/* Displaying all returned product data */
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
					  <a href='all_products.php?add_cart=$pro_id'><button class='btn btn-primary' style='float:right'>Add to Cart</button></a>
				   </div>
				  ";
	           }
	          ?>
			  </div>
		  </div>
		</div>
	    <!--Content wrapper ends-->
				
		<div id="footer">
		 <!-- footer html partial rendering through JS -->	
		</div>
	</div> 
<!--Main Container ends here-->
  </body>
</html>
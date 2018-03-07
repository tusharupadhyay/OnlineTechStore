<!DOCTYPE>
<?php 
session_start();
include("functions/functions.php");

?>
<html>
	<head>
	  <title>My Online Shop</title>
	  <link rel="stylesheet" href="styles/style.css" media="all" /> 
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
			
				
			  <div id="products_box">
			    <?php

				/* If the customer is not logged in then take him to login page, other wise take him to payment successful page */
				  if(!isset($_SESSION['customer_email'])){
				    include("customer_login.php");
				  }
				  else {
				    include("final.php");
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
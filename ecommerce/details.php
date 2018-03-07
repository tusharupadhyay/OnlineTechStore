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
		  
		  <!-- Get the details of the selected product -->
		  <div id="products_box">
	        <?php 
	          detailPro();
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
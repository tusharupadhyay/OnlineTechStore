<!DOCTYPE>
<?php 
session_start();
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
			
			<!-- Display contact information of Makers -->
			<div id="products_box">
			  <img src="images/contactus.jpg" alt="Contact Us Image" width='700' height='350' class='img-rounded'>
			  <br>
			  <h3>Tushar Upadhyay - tushar.upadhyay@live.com</h3>
			  <br>
			  <h3>Meghana Manchegowda - meghanamgm5@gmail.com</h3>
			  <br>
			  <h3>Shreyas Gokhale - shreyas.gokhale@utdallas.edu</h3>
 		    </div>
		    <!--Content wrapper ends-->
		  </div>
		  <div id="footer">
		   <!-- footer html partial rendering through JS -->	
		  </div>
	    </div> 
	    <!--Main Container ends here-->
	</div>	
  </body>
</html>
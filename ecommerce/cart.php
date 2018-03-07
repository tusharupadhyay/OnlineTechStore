<!DOCTYPE>
<?php 
session_start(); 

include("functions/functions.php");

include("includes/db.php");
?>
<html>
	<head>
		<title>My Online Shop</title>
		
		
	    <link rel="stylesheet" href="styles/style.css" media="all" /> 
	    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<script src="js/jquery-1.9.1.min.js"></script>
		<script src="js/changeVal.js"></script>
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
			  
			  <!-- Dsiplaying user's shoping cart information in detail -->
			  <div id="products_box">
				<!-- provide a form for user to update the cart item quantity -->
			    <form action="" method="post" enctype="multipart/form-data">
				  <table class="table" align="center" width="700" bgcolor="skyblue">
			   	    <tr align="center">
					  <th>Product(S)</th>
					  <th>Quantity</th>
					  <th >Total Price</th>
					</tr>
					
		            <?php 
		              $total = 0;
		              global $con; 
					  
		              /* Get the user cart information from database and display the product cost and quantity in form */
		              $ip = getIp(); 
						
		              $sel_price = "select * from cart where ip_add='$ip'";
		
		              $run_price = mysqli_query($con, $sel_price); 
		
		              while($p_price=mysqli_fetch_array($run_price)){
			
			              $pro_id = $p_price['p_id']; 
			              $qty = $p_price['qty'];
			
			              $pro_price = "select * from products where product_id='$pro_id'";
			
			              $run_pro_price = mysqli_query($con,$pro_price); 
			
			              while ($pp_price = mysqli_fetch_array($run_pro_price)){
			
			                $product_price = array($pp_price['product_price']);
			
			                $product_title = $pp_price['product_title'];
			
			                $product_image = $pp_price['product_image']; 
			
			                $single_price = $pp_price['product_price'];
			
			                $values = array_sum($product_price); 
			                $priceVal = $values * $qty;
			                $total += $priceVal; 
					  ?>
					
					  <tr >
					    <td><?php echo $product_title; ?><br>
						<img src="admin_area/product_images/<?php echo $product_image;?>" width="60" height="60"/>
						</td>
						<td ><input type="text" size="4" name="<?php echo $pro_id ?>" class="qty" value="<?php echo $qty;?>"/></td>
						<td ><?php echo "$" . $priceVal; ?></td>
					  </tr>
					
					
				      <?php } } ?>
				
				      <tr>
						<td ><b>Sub Total:</b></td>
						<td  ></td>
						<td  ><?php echo "  $" . $total;?></td>
					  </tr>
					
					  <!-- Display buttons to update cart and to checkout the user order -->
					  <tr >
						<td colspan="2"><input class='btn btn-primary' type="submit" id="update_cart" name="update_cart" value="Update Cart"/></td>
						<td><button class='btn btn-primary'><a href="checkout.php" style="text-decoration:none; color:black;">Checkout</a></button></td>
					  </tr>
				  </table> 
			  </form>
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
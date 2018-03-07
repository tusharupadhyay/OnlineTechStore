<!DOCTYPE>
<html>
<!-- Adds navigation bar in all pages -->
  <body>	
	<ul id="menu">
		<li><a class="changeUrl" href="index.php">Home</a></li>
		<li><a class="changeUrl" href="all_products.php">All Products</a></li>
		<li><a class="changeUrl" href="customer/my_account.php">My Account</a></li>
		<li><a class="changeUrl" href="customer_register.php">Sign Up</a></li>
		<li><a class="changeUrl" href="cart.php">Shopping Cart</a></li>
		<li><a class="changeUrl" href="contact.php">Contact Us</a></li>
	</ul>
	<div id="form">
	  <form method="get" action="results.php" enctype="multipart/form-data" class="form-inline">
	    <input type="text" class="form-control" name="user_query" placeholder="Search a Product"/ > 
		<input type="submit" class="btn btn-default" name="search" value="Search" />
	  </form>
	</div>
  </body>
</html>
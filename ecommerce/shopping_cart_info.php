<!DOCTYPE>
<html>
  <body>
    <!-- HTML partial to display shoping cart information for user or guest user on top of all pages -->
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
  </body>
</html>
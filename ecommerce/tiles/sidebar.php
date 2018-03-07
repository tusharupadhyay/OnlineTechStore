<!DOCTYPE>
<?php 
session_start();
include("../functions/functions.php");
?>
<html>
  <body>
    <!-- List all available categories -->
	<div id="sidebar_title">Categories</div>
	<ul id="cats">
	  <?php getCats(); ?>
	<ul>
	<!-- List all avaialble brands -->
	<div id="sidebar_title">Brands</div>
	<ul id="cats">
	  <?php getBrands(); ?>
	<ul>
  </body>
</html>
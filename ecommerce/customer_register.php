<!DOCTYPE>
<?php 
session_start();
include("functions/functions.php");
include("includes/db.php"); 
?>
<html>
	<head>
		<title>My Online Shop</title>
		<link rel="stylesheet" href="styles/style.css" /> 
	    <link rel="stylesheet" href="styles/validate.css">
	    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<script src="js/jquery-1.9.1.min.js"></script>
		<script src="js/addTiles.js"></script>
		<script src="js/validate.js"></script>
	</head>
	
  <body>
	
	<!--Main Container starts here-->
	<div class="main_wrapper">
	
		<!--Header starts here-->
		<div class="header_wrapper">
		  <!-- sidebart html partial rendered by JS -->
		</div>
		<!--Header ends here-->
		
		<!--Navigation Bar starts-->
		<div class="menubar">
		  <!-- navigation html partial rendered by JS -->
		</div>
		<!--Navigation Bar ends-->
	
		<!--Content wrapper starts-->
		<div class="content_wrapper">
		
			<div id="sidebar">
			  <!-- sidebart html partial rendered by JS -->
			</div>
		
			<div id="content_area">
			
			<?php cart(); ?>
			
			<!-- Display shoping cart information on top of the page -->
			<div id="shopping_cart"> 
				<?php include 'shopping_cart_info.php';?>						
			</div>
				
				<!-- Display form to register a new user. All the field are neccessary except image file -->
				<form align="center"  class="form-horizontal" id = "customerForm"action="add_customer.php" method="post" enctype="multipart/form-data">
					
					<div class="form-group">
						<h2>Create an Account</h2>
					</div>
					
					<div class="form-group">
						<label class="col-sm-2 control-label">Name:</label>
							<div class="col-sm-7">
								<input class="form-control" type="text" name="c_name" id="username" required/>
							</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-2 control-label">Email:</label>
							<div class="col-sm-7">
								<input class="form-control" type="text" name="c_email" id ="email"required/>
							</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Password:</label>
							<div class="col-sm-7">
								<input class="form-control" type="password" name="c_pass"  id = "password" required/>
							</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-2 control-label">Retype Password:</label>
							<div class="col-sm-7">
								<input class="form-control" type="password" name="c_repass" id = "repassword"required/>
							</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-2 control-label">Image:</label>
							<div class="col-sm-7">
								<input id="img" type="file" name="c_image"/>
							</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-2 control-label">Country:</label>
							<div class="col-sm-7">
								<select class="form-control" id ="country" name="c_country" >
								<option>United States</option>
								<option>Afghanistan</option>
								<option>India</option>
								<option>Japan</option>
								<option>Pakistan</option>
								<option>Israel</option>
								<option>Nepal</option>
								<option>United Arab Emirates</option>
								<option>United Kingdom</option>
							</select>
							</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-2 control-label">City:</label>
							<div class="col-sm-7">
								<input class="form-control" id = "c_city" type="text" name="c_city" required/>
							</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-2 control-label">Contact:</label>
							<div class="col-sm-7">
								<input  class="form-control" id = "c_contact" type="text" name="c_contact" required/>
							</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-2 control-label">Address:</label>
							<div class="col-sm-7">
								<input class="form-control" id = "c_add" type="text" name="c_address" required/>
							</div>
					</div>
					
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
						  <input class="btn btn-primary"  id="regButton" type="submit" name="register" value="Create Account" />
						</div>
					  </div>
									
				</form>
			
			</div>
		</div>
		<!--Content wrapper ends-->
				
		<div id="footer">
			<!-- footer html partial rendered by JS -->	
		</div>
	
	</div> 
<!--Main Container ends here-->

  </body>
</html>











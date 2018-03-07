<?php 
session_start(); 
include("functions/functions.php");

// Get user Ip address
$ip = getIp();

// try to connect to database
$con = mysqli_connect("localhost","root","","ecommerce");

if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
} 

//get the username  
$qty = $_POST['qty'];
$pID = $_POST['p_id'];  
if($qty == 0)
{
  $query = "delete from cart where p_id ='$pID' AND ip_add ='$ip'" ;
//mysql query to select field username if it's equal to the username that we check '  
  $result = mysqli_query($con,$query);
}
else{	
 $query = "update cart set qty ='$qty' where p_id ='$pID' AND ip_add ='$ip'" ;
//mysql query to select field username if it's equal to the username that we check '  
$result = mysqli_query($con,$query);  
} 
//if number of rows fields is bigger them 0 that means it's NOT available '  
  echo "success";
?>
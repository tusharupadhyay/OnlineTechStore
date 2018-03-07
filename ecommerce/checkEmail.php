<?php 

$con = mysqli_connect("localhost","root","","ecommerce");

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  } 

//get the username  
$username = $_GET['username'];  
  
//mysql query to select field username if it's equal to the username that we check '  
$result = mysqli_query($con,'select customer_email from customers where customer_email = "'. $username .'"');  
  
//if number of rows fields is bigger them 0 that means it's NOT available '  
if(mysqli_num_rows($result)>0){  
    //and we send 0 to the ajax request  
    echo 0;  
}else{  
    //else if it's not bigger then 0, then it's available '  
    //and we send 1 to the ajax request  
    echo 1;  
}  

?>
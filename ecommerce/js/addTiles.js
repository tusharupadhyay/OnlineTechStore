/*
This javascript files inserts different tiles in page and buids whole page
made of four sections. Navigation bar, Sidebar, main context, footer.
*/


$(document).ready(function() {
	
$('.header_wrapper').load("tiles/header.php");
$('.menubar').load("tiles/navigation.php");
$('#footer').load("tiles/footer.php");	

var path = getCurentFileName();

//checks if page is my_account.php the loads different sidebar related to my_account.php

if(path != "customer/my_account.php")
{
	
	$('#sidebar').load("tiles/sidebar.php");
}

// This function returns filename from url

function getCurentFileName(){
    var pagePathName= window.location.pathname;
	return pagePathName.substring(pagePathName.lastIndexOf("/") + 1);
}

});


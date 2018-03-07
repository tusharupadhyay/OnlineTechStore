/*
This javascript file updates the cart information when user clicks on update cart using Ajax post request.
*/


$(document).ready(function() {


$("#update_cart").click(function(){
	
	
	 var favorite = [];
	 var pIds = [];
            $.each($(".qty"), function(){
				
                favorite.push($(this).val());
				pIds.push($(this).attr("name"));
            });
			
		var i;	
		
		
		for(i=0; i<pIds.length;i++)
		{
				$.ajax({
				 
				 
				 url: "updateCart.php",
				
				 type: "POST",
				 
				 
				 data: "qty="+favorite[i]+"&p_id="+pIds[i],
						 
				 success: function(resp){
				 
				}
			});
			
		}
		location.reload();
	
});
});


$(document).ready(function() {
	
	var flag = [false,false,false,false,false,false,false];
	
	$("#password").focus(function(){
		$("#password").parent().children('span').remove();
        $("#password").after("<span class=\"info\">Password must be 8 charecters long.</span>");
		
	});
    $("#password").blur(function(){
        var myLength = $("#password").val().length;
		var lengthDesired = 8;
		var noLength = 1;
		if(myLength < noLength)
		{
			$("#password").parent().children().last().remove();
		}
		else if(myLength < lengthDesired)
		{
			$("#password").parent().children().last().removeClass("info").addClass("error").text("Enter at least 8 charecter");
			flag[0] = false;
		}
		
		else if(myLength >= lengthDesired)
		{
			$("#password").parent().children().last().removeClass("info").addClass("ok").text("Ok");
			flag[0] = true;
		}
    });
	
	$("#repassword").focus(function(){
		$("#repassword").parent().children('span').remove();
        $("#repassword").after("<span class=\"info\">Password must match.</span>");
		
	});
    $("#repassword").blur(function(){
        var myLength = $("#repassword").val().length;
		var lengthDesired = 8;
		var noLength = 1;
		var passVal = $("#password").val();
		var repassVal = $("#repassword").val();
		if(myLength < noLength)
		{
			$("#repassword").parent().children().last().remove();
		}
		else if(passVal==repassVal)
		{
			$("#repassword").parent().children().last().removeClass("info").addClass("ok").text("Ok");
			flag[1] = true;
		}
		else{
			$("#repassword").parent().children().last().removeClass("info").addClass("error").text("password don't match");
			flag[1]=false;
		}
		
    });
	
	$("#username").focus(function(){
		$("#username").parent().children('span').remove();
		
		$("#username").after("<span class=\"info\">Name field must contain only alphabetical characters</span>");
		
	});
	
	$("#username").blur(function(){
		
		var inputString = $("#username").val();
		var inputLength = $("#username").val().length;
		
		
		var match = inputString.match(/[^a-zA-Z\s:]/);
		
		if(inputLength < 1)
		{
			$("#username").parent().children().last().remove();
		}
		
		else if(match  != null)
		{
				$("#username").parent().children().last().removeClass("info").addClass("error").text("Enter only alpha-numerical");
				flag[2] = false;
		}
		
		else if(match == null)
		{
			$("#username").parent().children().last().removeClass("info").addClass("ok").text("Ok.");
			flag[2] = true;
		}
			
		
	});
	
	$("#email").focus(function(){
		$("#email").parent().children('span').remove();
		$("#email").after("<span class=\"info\">email address field should contain a @ character.</span>");
	});
	
	$("#email").blur(function(){
		
		var emailInputLen = $("#email").val().length;
		
		var match = $("#email").val().match(/@/);
		
		if(emailInputLen<1)
		{
			$("#email").parent().children().last().remove();
		}
		
		else if(match != null)
		{
			$("#email").parent().children('span').removeClass("info").addClass('ok').text("Ok.");
			
			var val = $("#email").val();
			checkForEmail(val);
			/*if(data == 1){  
						$("#email").parent().children('span').removeClass("info").addClass('ok').text("Ok.");
						flag += 1;
					}
				else{  
						$("#email").parent().children('span').removeClass("info").addClass("error").text("Customer already exist");
						flag -= 1;  
					}*/
		}
		
		else if(match == null)
		{
			$("#email").parent().children('span').removeClass("info").addClass("error").text("required @ in email");
			flag[3]= false;
		}
		
	});
	
	
	
	$("#c_city").focus(function(){
		$("#c_city").parent().children('span').remove();
        $("#c_city").after("<span class=\"info\">It should not be empty.</span>");
		
	});
    $("#c_city").blur(function(){
        var myLength = $("#c_city").val().length;
		var lengthDesired = 2;
		var noLength = 1;
		
		if(myLength < noLength)
		{
			$("#c_city").parent().children().last().remove();
		}
		else if(myLength < lengthDesired)
		{
			$("#c_city").parent().children().last().removeClass("info").addClass("error").text("It should not be null");
			flag[4] = false;
		}
		
		else if(myLength >= lengthDesired)
		{
			$("#c_city").parent().children().last().removeClass("info").addClass("ok").text("Ok");
			flag[4] = true;
		}
		
    });
	
	
	$("#c_contact").focus(function(){
		$("#c_contact").parent().children('span').remove();
        $("#c_contact").after("<span class=\"info\">It should not be empty</span>");
		
	});
	
	 $("#c_contact").blur(function(){
        var myLength = $("#c_contact").val().length;
		var lengthDesired = 2;
		var noLength = 1;
		
		if(myLength < noLength)
		{
			$("#c_contact").parent().children().last().remove();
		}
		else if(myLength < lengthDesired)
		{
			$("#c_contact").parent().children().last().removeClass("info").addClass("error").text("It should not be null");
			flag[5] =false;
		}
		
		else if(myLength >= lengthDesired)
		{
			$("#c_contact").parent().children().last().removeClass("info").addClass("ok").text("Ok");
			flag[5] =true;
		}
		
    });
	
	
	$("#c_add").focus(function(){
		$("#c_add").parent().children('span').remove();
        $("#c_add").after("<span class=\"info\">It should not be empty</span>");
		
	});
	
	 $("#c_add").blur(function(){
        var myLength = $("#c_add").val().length;
		var lengthDesired = 2;
		var noLength = 1;
		
		if(myLength < noLength)
		{
			$("#c_add").parent().children().last().remove();
		}
		else if(myLength < lengthDesired)
		{
			$("#c_add").parent().children().last().removeClass("info").addClass("error").text("It should not be null");
			flag[6] = false;
		}
		
		else if(myLength >= lengthDesired)
		{
			$("#c_add").parent().children().last().removeClass("info").addClass("ok").text("Ok");
			flag[6] = true;
		}
		
    });
	/*$("#regButton").click(function(){
		if(flag == 7)
		{
			var name = $("#username").val();
			var add = $("#c_add").val();
			var contact = $("#c_contact").val();
			var pass = $("#password").val();
			var email = $("#email").val();
			var city = $("#c_city").val();
			var img = $("#img").val();
			var country = $("country").val();
			
			$.ajax({
			type: "POST",
			data: "c_name="+name+"&c_email="+email+"&c_pass="+pass+"&c_image="+img+"&c_country="+country+"&c_city="+city+"&c_address="+add+"&c_contact="+contact,
			url: 'add_customer.php',
			success: function(resp){
				/*var scripts = resp.getElementsByTagName("script");
				for (var i = 0; i < scripts; i ++) {
					eval(scripts[i].text);
				}*/
				
				/*if(resp==1)
				{
					alert("Added Successfully");
					window.location.href = "index.php";
				}
				else{
					alert("Error in adding");
				}
			
			}				
              
                  
        });  
			
		}
		else{
			alert("Not valid form data");
		}
		
	});*/
	
	function checkForEmail( val){
		
		$.ajax({
			type: "GET",
			data: "username=" + val,
			url: 'checkEmail.php',
			success: function(data){
				if(data == 1){  
						//show that the username is available  
						$("#email").parent().children('span').removeClass("info").addClass('ok').text("Ok.");
						flag[3] =true;
					}
				else{  
						$("#email").parent().children('span').removeClass("info").addClass("error").text("Customer already exist");
						flag[3] = false;   
						 
					}
			
			}				
              
                  
        });  
		
	}
	
	$('#customerForm').submit(function(e){
 
		 //Preventing the default behavior of the form 
		 //Because of this line the form will do nothing i.e will not refresh or redirect the page 
		 e.preventDefault();
		 var count = 0;
		 var i;
		 for(i=0;i<flag.length;i++)
		 {
			 if(flag[i])
			 {
				 count+=1;
			 }
		 }
		 if(count == 7)
		{
		 //Creating an ajax method
		 $.ajax({
		 
		 //Getting the url of the uploadphp from action attr of form 
		 //this means currently selected element which is our form 
		 url: $(this).attr('action'),
		 
		 //For file upload we use post request
		 type: "POST",
		 
		 //Creating data from form 
		 data: new FormData(this),
		 
		 //Setting these to false because we are sending a multipart request
		 contentType: false,
		 cache: false,
		 processData: false,
		 success: function(resp){
		 //If the request is successfull we will get the scripts output in data variable 
		 //Showing the result in our html element 
		 if(resp==1)
				{
					alert("Added Successfully");
					window.location.href = "customer/my_account.php";
				}
				else{
					alert("Error in adding");
				}
		 },
		 error: function(){}
		 });
		}
		
		else{
			alert("Not valid form data");
		}
	});
	
	
});

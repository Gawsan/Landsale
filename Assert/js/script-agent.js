function agentformvalid() 
{
	
  var fname=document.forms["agentform"]["F-name"].value;
  var lname=document.forms["agentform"]["L-name"].value;
  var UID=document.forms["agentform"]["User-ID"].value;
  var Email=document.forms["agentform"]["email"].value;
  var Mnumber=document.forms["agentform"]["phone-number"].value;

	
		if (fname==""){
			alert("First Name must be filled out");
		return false;
		}
  
		if (lname==""){
			alert("Last Name must be filled out");
		return false;
		}
		
		if (UID==""){
			alert("User ID must be filled out");
		return false;
		}
		
		if (Email==""){
			alert(" Email must be filled out");
		return false;
		}
		
		if (Mnumber==""){
			alert("Phone number must be filled out");
		return false;
		}
  
}
function formValidation(){

	// Make quick references to our fields
	var firstname =  document.getElementById('firstname');
	var addr =  document.getElementById('addr');
	var username =  document.getElementById('username');
	var email =  document.getElementById('email');
	var pwd = document.getElementById('pwd');
	var cpwd = document.getElementById('cpwd');
	var phone=document.getElementById('phone');
	

	//  to check empty form fields.

    if(firstname.value.length == 0){
		document.getElementById('head').innerText = "* All fields are mandatory *"; //this segment displays the validation rule for all fields
		firstname.focus();
		return false;
	} 
	
	// Check each input in the order that it appears in the form!
	           if(inputAlphabet(firstname, "* For your name please use alphabets only *")){
		            if(lengthDefine(username, 6,12)){

                        if(password(pwd,"*enter between 8-10 characters*")){
	
                            if(cpassword(cpwd,pwd,"*password not matched*")){
                              if(emailValidation(email, "* Please enter a valid email address *")){
	                               if(phonenum(phone,"*enter 10 digits number *")){
								   
	                                    if(textAlphanumeric(addr, "* For Address use letters,digits,special symbols *")){
			                                 return true;
					                     }	
				                    }
			                    }                    
                            }
	                    }
                    }
                }	
	
	return false;
	
}



//functoin phone
function phonenum(inputtext,alertmsg)
{
var exp=/^[0-9]{10}$/;
if(inputtext.value.match(exp)){

document.getElementById('p4').innerText ="";
		return true;
}
else{
document.getElementById('p4').innerText = alertmsg;  //this segment displays the validation rule for phone
		inputtext.focus();
		return false;
}

}

//functon password
function password(inputtext,alertmsg)
{
var pa=/^[0-9a-zA-Z,_$]+$/;
if(inputtext.value.match(pa)){
document.getElementById('p8').innerText ="";
		return true;
	}else{
		document.getElementById('p8').innerText = alertmsg;  //this segment displays the validation rule for zip
		inputtext.focus();
		return false;
	}


}
function cpassword(inputtext,inpo,alertmsg)
{
//var pa=/^[0-9a-zA-Z,_$]+$/;
if(inputtext.value==inpo.value){
		document.getElementById('p9').innerText ="";
		return true;
	}else{
		document.getElementById('p9').innerText = alertmsg;  //this segment displays the validation rule for zip
		inputtext.focus();
		return false;
	}


}
//function that checks whether input text is numeric or not.

function textNumeric(inputtext, alertMsg){
	var numericExpression = /^[0-9]+$/;
	if(inputtext.value.match(numericExpression)){
	document.getElementById('p6').innerText ="";
		return true;
	}else{
		document.getElementById('p6').innerText = alertMsg;  //this segment displays the validation rule for zip
		inputtext.focus();
		return false;
	}
}

function inputroll(inputtext,alertmsg)
{
var exp=/^[0-9]{2}[a-zA-Z]{1}[0-9]{2}[a-zA-Z]{1}[0-9]{2}[0-9a-zA-Z]{2}$/;

if(inputtext.value.match(exp)){
return true;
}
else{
		document.getElementById('p10').innerText = alertmsg;  //this segment displays the validation rule for rollno
		//alert(alertMsg);
		inputtext.focus();
		return false;
	}
}
//function that checks whether input text is an alphabetic character or not.

function inputAlphabet(inputtext, alertMsg){
	var alphaExp = /^[a-zA-Z]+$/;
	if(inputtext.value.match(alphaExp)){
		document.getElementById('p1').innerText ="";
		return true;
	}else{
		document.getElementById('p1').innerText = alertMsg;  //this segment displays the validation rule for name
		//alert(alertMsg);
		inputtext.focus();
		return false;
	}
}


//function that checks whether input text includes alphabetic and numeric characters.

function textAlphanumeric(inputtext, alertMsg){
	var alphaExp = /^[0-9a-zA-Z. ,-\n\t():;/]+$/;
	if(inputtext.value.match(alphaExp)){
		document.getElementById('p5').innerText ="";
		return true;
	}else{
		document.getElementById('p5').innerText = alertMsg; //this segment displays the validation rule for address
		inputtext.focus();
		return false;
	}
}

// Function that checks whether the input characters are restricted according to defined by user.

function lengthDefine(inputtext, min, max){
	var uInput = inputtext.value;
	if(uInput.length >= min && uInput.length <= max){
	document.getElementById('p7').innerText ="";
		return true;
	}else{
		
		document.getElementById('p7').innerText = "* Please enter between " +min+ " and " +max+ " characters *"; //this segment displays the validation rule for username
		inputtext.focus();
		return false;
	}
}

// Function that checks whether a option is selected from the selector and if it's not it displays an alert message.

function trueSelection(inputtext, alertMsg){
 re = /^\d{1,2}\/\d{1,2}\/\d{4}$/;
var today= new Date();

    if(inputtext.value !=''&& inputtext.value =="08/18/2015") {
      
		document.getElementById('p4').innerText = alertMsg; //this segment displays the validation rule for selection
		inputtext.focus();
		return false;
	}else{
		return true;
	}
}

// Function that checks whether an user entered valid email address or not and displays alert message on wrong email address format.

function emailValidation(inputtext, alertMsg){
	var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
	if(inputtext.value.match(emailExp)){
		document.getElementById('p3').innerText ="";
		return true;
	}else{
		document.getElementById('p3').innerText = alertMsg; //this segment displays the validation rule for email
		inputtext.focus();
		return false;
	}
}

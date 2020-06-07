<script type="text/javascript">























/*var username = document.forms["vform"]["name"].value;
var email = document.forms["vform"]["email"].value;
var password = document.forms["vform"]["password"].value;
var confirm_password = document.forms["vform"]["confirm_password"].value;

var name_error = document.getElementById("name_error");
var email_error = document.getElementById("email_error");
var password_error = document.getElementById("password_error");


username.addEventListener("blur" ,nameVerify, true)
email.addEventListener("blur" ,emailVerify, true);
passwordname.addEventListener("blur" ,passwordVerify, true);

function validate(){
	if (username.value == " "){
		username.style.border = "1px solid red";
		name_error.textContent ="username is required";
		username.focus();
		return false;

	}
	if (email.value == " "){
		email.style.border = "1px solid red";
		email_error.textContent ="email is required";
		email.focus();
		return false;
	}
	//if(!/^[^\s@]{2,30}@[^\s@]{2,20}\.[^\s@]{2,3}$/.test(f["email"].value)){
	//	alert("adresse mail non valide");
		//f["email"].focus();
		//return false
	//}
	if (password.value == " "){
		password.style.border = "1px solid red";
		password_error.textContent ="password is required";
		password.focus();
		return false;
	}
}


function nameVerify(){
	if (username.value !=""){
		username.style.border = "1px solid #5E6E66";
		name_error.innerHTML = "";
		return true;
	}
	if (email.value !=""){
		email.style.border = "1px solid #5E6E66";
		email_error.innerHTML = "";
		return true;
	}
	if (password.value !=""){
		password.style.border = "1px solid #5E6E66";
		password_error.innerHTML = "";
		return true;
	}
}
*/










function check(f){
 
 if(!/^[^\s@]{2,30}@[^\s@]{2,20}\.[^\s@]{2,3}$/.test(f["create_email"].value)){
	 alert("adresse mail non valide");
	 f["create_email"].focus();
	 return false
 }
 if(f["create_password"].value.replace(/\s/g,"").length!=6 || !/^\w+$/.test(f["create_password"].value) || f["create_password"].value != f["create_confirm"].value){
	 alert("Mot de passe non valide ou mal confirmé.");
	 f["create_password"].value="";
	 f["create_confirm"].value="";
	 f["create_password"].focus();
	 return false
 }
}


function ValidateEmail(mail) 
{
 if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(Form.email.value))
  {
    return (true)
  }
    alert("You have entered an invalid email address!")
    return (false)
}

</script>


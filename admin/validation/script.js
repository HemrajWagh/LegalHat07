var nameError = document.getElementById('name_error');
var phoneError = document.getElementById('phone_error');
var emailError = document.getElementById('email_error');
var massageError = document.getElementById('massage_error');
var submitError = document.getElementById('submit_error');


function validatName(){
	var name = document.getElementById('contact_name').value;
	if(name.length=0){
		nameError.innerHTML= "Name is required";
		return false;
	}
	if(!name.match(/^[_a-zA-Z0-9]*\s{1}[A-Za-z]*$/)){
		nameError.innerHTML ="Write full name";
		return false;
	}
	nameError.innerHTML = '<i class="fa-solid fa-circle-check"></i>';
	return true;
}

function  validatPhone(){
	var name = document.getElementById('contact_phone').value;
	if(phone.length==0){
		phoneError.innerHTML ='Phone should be 10 digits';
		return false;

	}
	if(!phone.match(/^[0-9]{10}$/)){
		phoneError.innerHTML ="Only digits please.";
		return false;
	}
	phoneError.innerHTML ='<i class="fa-solid fa-circle-check"></i>';
	return true;
}	

function validatEmail(){
	var email = document.getElementById('contact_email').value;
	if(email.length == 0 ){
		emailError.innerHTML ="Email is required";
		return false;
	}
	if(!email.match(/^[_a-zA-Z0-9\._\-[0-9]*[@][A-Z]{2-4}&/)){
		emailError = "Email Invalid";
		return false;
	}
	emailError.innerHTML='<i class="fa-solid fa-circle-check"></i>';
	return true;
}

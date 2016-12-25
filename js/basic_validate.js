function validate() {

	var alertmessage = "";

	if (document.myForm.name.value == "") {
		alertmessage += "Please provide your name.\n";
		document.myForm.name.focus();
	}

	if (document.myForm.email.value == "") {
		alertmessage += "Please provide your email address.\n";
		document.myForm.email.focus();
	}

	if (document.myForm.email.value.indexOf("@") < 1 || (document.myForm.email.value.lastIndexOf(".") - document.myForm.email.value.indexOf("@") < 2)) {
		alertmessage += "Please enter a correct email address in the format #####@#####.###.\n";
		document.myForm.email.focus();
	}

	if (document.myForm.phone.value == "") {
		alertmessage += "Please provide your phone number.\n";
		document.myForm.phone.focus();
	}

	if (document.myForm.message.value == "") {
		alertmessage += "Please provide your message.\n";
		document.myForm.message.focus();
	}

	if (alertmessage != "") {
		alert(alertmessage);
		return false;
	}

	else {
		return true;
	}

}
function validateEmail() {

   var emailID = document.myForm.email.value;

   atpos = emailID.indexOf("@");

   dotpos = emailID.lastIndexOf(".");

   // contain at least a ‘@’ sign and a dot (.);
   // the ‘@’ must not be the first character of the email address;
   // the last dot must at least be one character after the ‘@’ sign

   if (atpos < 1 || (dotpos - atpos < 2)) {
      alert("Please enter a correct email address in the format #####@#####.###.")
      document.myForm.email.focus();
      return false;
   }
   
   return true;

}
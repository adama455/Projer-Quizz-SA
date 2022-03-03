// Validation code input:
var email = document.forms['form']['email'];
var password = document.forms['form']['password'];

var email_error = document.getElementById('email-error');
var pass_error = document.getElementById('pass-error');


email.addEvenListerner('textInput',email_Verify);
password.addEvenListerner('textInput',pass_Verify);



function validation() {
    if (email.value.lenght<6) {
        email.style.border = "1px solid red";
        email_error.style.display='block';
        email.focus();
        return false;
    }

    if (password.value.lenght<6) {
        password.style.border = "1px solid red";
        pass_error.style.display='block';
        password.focus();
        return false;
    }
    
}

function email_Verify() {
    if (email.value.lenght>=8) {
        email.style.border = "1px solid silver";
        email_error.style.display='none';
        email.focus();
        return true;
    }    
} 
function pass_Verify() {
    if (password.value.lenght>=8) {
        password.style.border = "1px solid silver";
        pass_error.style.display='none';
       password.focus();
        return true;
    }    
} 

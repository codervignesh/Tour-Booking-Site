var firstname = document.forms['signupForm']['firstname'];
var lastname = document.forms['signupForm']['lastname'];
var email = document.forms['signupForm']['email'];
var password = document.forms['signupForm']['password'];

var signup_error = document.querySelector('.signup_error');

firstname.addEventListener('textInput', fstnameVerify);
lastname.addEventListener('textInput', lstnameVerify);
email.addEventListener('textInput', emailVerify);
password.addEventListener('textInput', passwordVerify);

var mailformat = /^w+([.-]?w+)*@w+([.-]?w+)*(.w{2,3})+$/;

function signupValid() {
    if (firstname.value.length <= 2) {
        signup_error.style.display = "block";
        firstname.style.border = "1px solid red";
        signup_error.innerText = "Please Fill up Your Firstname";
        firstname.focus();
        return false;
    }
    if (lastname.value.length < 1) {
        signup_error.style.display = "block";
        lastname.style.border = "1px solid red";
        signup_error.innerText = "Please Fill up Your Lastname";
        lastname.focus();
        return false;
    }
    if (email.value.length <= 8) {
        signup_error.style.display = "block";
        email.style.border = "1px solid red";
        signup_error.innerText = "Please Fill up correct Email";
        email.focus();
        return false;
    }
    if (password.value.length <= 5) {
        signup_error.style.display = "block";
        password.style.border = "1px solid red";
        signup_error.innerText = "Please Fill up Your Password";
        password.focus();
        return false;
    }
}

function fstnameVerify() {
    if (firstname.value.length > 1) {
        signup_error.style.display = "none";
        firstname.style.border = "1px solid #3498db";
        signup_error.innerText = "";
        return true;
    }
}

function lstnameVerify() {
    if (lastname.value.length > 1) {
        signup_error.style.display = "none";
        lastname.style.border = "1px solid #3498db";
        signup_error.innerText = "";
        return true;
    }
}

function emailVerify() {
    if ((email.value.length >= 8) || (!mail.value.match(mailformat))) {
        signup_error.style.display = "none";
        email.style.border = "1px solid #3498db";
        signup_error.innerText = "";
        return true;
    }
}

function passwordVerify() {
    if (password.value.length >= 6) {
        signup_error.style.display = "none";
        password.style.border = "1px solid #3498db";
        signup_error.innerText = "";
        return true;
    }
}



var email1 = document.forms['loginForm']['email1'];
var password1 = document.forms['loginForm']['password1'];

var login_error = document.querySelector('.login_error');

email1.addEventListener('textInput', emailVerify1);
password1.addEventListener('textInput', passwordVerify1);

function loginValid() {
    if (email1.value.length <= 8) {
        login_error.style.display = "block";
        email1.style.border = "1px solid red";
        login_error.innerText = "Please Fill up Your Email or Phone";
        email1.focus();
        return false;
    }
    if (password1.value.length <= 3) {
        login_error.style.display = "block";
        password1.style.border = "1px solid red";
        login_error.innerText = "Please Fill up Your Password";
        password1.focus();
        return false;
    }
}

function emailVerify1() {
    if (email1.value.length > 7) {
        login_error.style.display = "none";
        email1.style.border = "1px solid #3498db";
        login_error.innerText = "";
        return true;
    }
}

function passwordVerify1() {
    if (password1.value.length > 2) {
        login_error.style.display = "none";
        password1.style.border = "1px solid #3498db";
        login_error.innerText = "";
        return true;
    }
}
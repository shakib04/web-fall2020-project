function getElement(id) {
    return document.getElementById(id);
}

var err_name = getElement("erName");
var err_username = getElement("erUsername");
var err_email = getElement("erEmail");
var err_password = getElement("erPassword");
var err_cfpassword = getElement("ercfpassword");
var err_contact = getElement("erContact");
var err_address = getElement("erAddress");


function refresh() {
    err_name.innerHTML = "";
    err_username.innerHTML = "";
    err_email.innerHTML = "";
    err_password.innerHTML = "";
    err_cfpassword.innerHTML = "";
    err_contact.innerHTML = "";
    err_address.innerHTML = "";

}



function regValidation() {
    refresh();
    var hasError = false;
    var fullname = getElement("fullname").value;
    var username = getElement("username").value;
    var password = getElement("password").value;
    var cfpassword = getElement("cfpassword").value;
    var email = getElement("email").value;
    var contact = getElement("contact").value;
    var address = getElement("address").value;


    //fullname validation

    if (isempty(fullname)) {
        hasError = true;
        err_name.innerHTML = "This Field is Empty";
    } else if (checkNumberContains(fullname)) {
        hasError = true;
        err_name.innerHTML = "Number is not allowed";
    }

    //username validation
    if (isempty(username)) {
        hasError = true;
        err_username.innerHTML = "This Field is Empty";
    } else if (username.length < 5 || username.length > 10) {
        hasError = true;
        err_username.innerHTML = "Usename must be 5-10 characters long";
    } else if (username.search(" ") > -1) {
        hasError = true;
        err_username.innerHTML = "Usename can not contain spaces ";
    }

    //password
    if (isempty(password)) {
        hasError = true;
        err_password.innerHTML = "This Field is Empty";
    } else if (password.length <= 7) {
        hasError = true;
        err_password.innerHTML = "Password must be 8 characters long";
    } else if (password.length > 32) {
        hasError = true;
        err_password.innerHTML = "Password must be less than 32 characters";
    } else if (password == password.toUpperCase()) {
        hasError = true;
        err_password.innerHTML = "Password must be 1 LowerCase character";
    } else if (password == password.toLowerCase()) {
        hasError = true;
        err_password.innerHTML = "Password must be 1 Uppercase character";
    }

    //confirm password validation
    if (isempty(cfpassword)) {
        hasError = true;
        err_cfpassword.innerHTML = "This Field is Empty";
    } else if (cfpassword != password) {
        hasError = true;
        err_cfpassword.innerHTML = "Confirm Password does not match";
    }


    //email validation
    if (isempty(email)) {
        hasError = true;
        err_email.innerHTML = "This Field is Empty";
    } else if (email.search("@") == -1) {
        hasError = true;
        err_email.innerHTML = "no @ at email";
    }

    //contact validation
    if (isempty(contact)) {
        hasError = true;
        err_contact.innerHTML = "This Field is Empty";
    } else if (contact.length <= 10 || contact.length > 11) {
        hasError = true;
        err_contact.innerHTML = "Phone must be 11 characters ";
    } else if (parseFloat(contact) != contact) {
        hasError = true;
        err_contact.innerHTML = "Phone must have no alphabet";
    }


    //address
    if (isempty(address)) {
        hasError = true;
        err_address.innerHTML = "This Field is Empty";
    } else if (address.length > 200) {
        hasError = true;
        err_address.innerHTML = "Length of address is greater than 200";
    }

    return !hasError;
}




//empty check

function isempty(str) {
    if (str == "") {
        return true;
    }
    return false;
}


function checkNumberContains(str) {
    for (let index = 0; index < str.length; index++) {
        let s = str[index];
        if (s == "1" || s == "2" || s == "3" || s == "4" || s == "5" || s == "6" || s == "7" || s == "8" || s == "9" || s == "0") {
            return true;
        }
    }

    return false;

}
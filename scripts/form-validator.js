username = document.querySelector("input[name=username]");
username_error = document.querySelector("#username-error");
email = document.querySelector("input[name=email]");
email_error = document.querySelector("#email-error");
password = document.querySelector("input[name=password]");
password_error = document.querySelector("#password-error");
c_password = document.querySelector("input[name=c-password]");
c_password_error = document.querySelector("#c-password-error");
submit = document.querySelector("input[type=submit]");

var entry_valid = false;

document.addEventListener('DOMContentLoaded',function() {
    username.onkeyup = changeEventHandler;
    email.onkeyup = emailValidateHandler;
    password.onkeyup = passwordValidateHandler;
    c_password.onkeyup = c_passwordValidateHandler;
    submit.onclick = submitClickEventHandler;
},false);

function changeEventHandler(event) {
    if (event.target.value == ""){
        username_error.innerHTML = "Invalid Username";
        return;
    }
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            //document.write(this.responseText);
            var res = JSON.parse(this.responseText);
            console.log(res);
            if(res.valid){
                console.log("Valid Username");
                username_error.innerHTML = "";
                entry_valid = true;
            }
            else{
                console.log("Invalid Username");
                username_error.innerHTML = "Username already in use";
                entry_valid = false;
            }
        }
    }
    xmlhttp.open("POST", "./username_validator.php?username="+event.target.value,true);
    xmlhttp.send(); 
}

function emailValidateHandler(event){
    expression = /\S*?@\S*/;
    if(event.target.value == "" || expression.test(event.target.value)){
        email_error.innerHTML = "";
        entry_valid = true;
    }
    else{
        email_error.innerHTML = "Invalid E-Mail address";
        entry_valid = false;
    }
}

function passwordValidateHandler(event){
    if (event.target.value.length > 0 && event.target.value.length < 8){
        password_error.innerHTML = "Password must be at least 8 characters long";
        entry_valid = false;
    }
    else{
        password_error.innerHTML = "";
        entry_valid = true;
    }
}

function c_passwordValidateHandler(event){
    if (event.target.value === password.value){
        c_password_error.innerHTML = "";
        entry_valid = true;
    }
    else{
        c_password_error.innerHTML = "Passwords do not match";
        entry_valid = false;
    }
}

function submitClickEventHandler(event){
    console.log(entry_valid);
    if(entry_valid){

    }
    else{
        preventDefault();
    }
}
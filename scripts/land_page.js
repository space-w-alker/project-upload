
count = 0;

for(x = 0;x<5;x++){
    var display = document.querySelector(`#dis-${x}`);
    var textDisplay = document.querySelector(`#dis-text-${x}`);
    display.style.display = "none";
    textDisplay.style.display = "none";

    document.querySelector(`#dis-0`).style.display = "block";
    document.querySelector(`#dis-text-0`).style.display = "block";
}

var rotate = function(){
    for(x = 0;x<5;x++){
        var display = document.querySelector(`#dis-${x}`);
        var textDisplay = document.querySelector(`#dis-text-${x}`);
        display.style.display = "none";
        textDisplay.style.display = "none";
    }

    count = (count + 1) % 5;
    document.querySelector(`#dis-${count}`).style.display = "block";
    document.querySelector(`#dis-text-${count}`).style.display = "block";
}

setInterval(rotate, 5000);

var loginDisplay = document.querySelector("#login-contain");
var regDisplay = document.querySelector("#reg-contain");
regDisplay.style.display = "none";

function show_register(){
    loginDisplay.style.display = "none";
    regDisplay.style.display = "block";
}

function show_login(){
    loginDisplay.style.display = "block";
    regDisplay.style.display = "none";
}
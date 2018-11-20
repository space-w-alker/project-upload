var logOut = document.querySelector("#log-out");
console.log("Activated");
logOut.onclick = function(event){
    event.preventDefault();
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function(){
        if (this.readyState == 4 && this.status == 200){
            console.log(this.responseText);
            var res = JSON.parse(this.responseText);
            if(res.logout){
                console.log("Logged Out");
                window.location = "./login.html";
            }
        }
    }


    xmlhttp.open("POST","./logout.php?logout=t");
    xmlhttp.send();
}

var fileSelect = document.querySelector("input[type=file]");
var fileSelected = document.querySelector("#file-selected");
fileSelect.onchange = function(event){
    fileSelected.innerHTML = event.target.value.split('\\').pop();
}
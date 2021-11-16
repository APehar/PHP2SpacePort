window.onscroll = function() {fix()};
var header = document.getElementById("meni");
var sticky = header.offsetTop;
var sort = document.getElementById("order");
var sticky2 = sort.offsetTop;
function fix() {
    if (window.pageYOffset > sticky) {
        header.classList.add("sticky");
        sort.classList.add("sticky2");
    } else {
        header.classList.remove("sticky");
        sort.classList.remove("sticky2");
    }
}

// <input type="checkbox" id="my-checkbox" onclick="ChangeCheckboxLabel(this)">
//     <span id="my-checkbox-checked" style="display:none; font-weight:bold; color:blue;">My favorite color is blue.</span>
// <span id="my-checkbox-unchecked" style="display:inline; font-style:italic;">My favorite color is blue.</span>

function ChangeCheckboxLabel(ckbx)
{
    var d = ckbx.id;
    var lable = document.getElementById("add");

    if( ckbx.checked )
    {
        lable.style.display = "inline-block";
    }
    else
    {
        lable.style.display = "none";
    }
}




function regCheck()
{
    var x = false;
    var email = document.querySelector("#email").value;
    var username = document.querySelector("#username").value;
    var pass = document.querySelector("#password").value;
    var conpass = document.querySelector("#conpass").value;
    var regEmail = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    var regName = /^[a-zA-Z0-9]{4,20}$/;
    var regPass = /^[a-zA-Z0-9]{4,20}$/;
    var errors = "<hr class='hr'>";
    if(!regEmail.test(email))
    {
        document.querySelector("#email").style.border = "2px solid red";
        errors = errors + "Email is not valid<br>";
    }
    else
    {
        document.querySelector("#email").style.border = "2px solid green";
    }
    if(!regName.test(username))
    {
        document.querySelector("#username").style.border = "2px solid red";
        errors = errors + "Usrename is not valid<br>";
    }
    else
    {
        document.querySelector("#username").style.border = "2px solid green";
    }

    if(!regPass.test(pass))
    {
        document.querySelector("#password").style.border = "2px solid red";
        errors = errors + "Password is valid<br>";
    }
    else
    {
        document.querySelector("#password").style.border = "2px solid green";
    }
    if(pass != conpass || pass == "")
    {
        document.querySelector("#conpass").style.border = "2px solid red";
        errors = errors + "Passwords do not match<br>";
    }
    else if(pass == conpass)
    {
        document.querySelector("#conpass").style.border = "2px solid green";
    }
    if(errors == "<hr class='hr'>")
    {
        x = true;
        return x;
    }
    else{
        errors = errors + "<hr class='hr'>";
        document.querySelector("#error").innerHTML = errors;
        return x;
    }
}

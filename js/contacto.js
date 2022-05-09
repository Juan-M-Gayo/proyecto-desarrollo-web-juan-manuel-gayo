function message() {

    var firstname = document.getElementById("firstname");
    var lastname = document.getElementById("lastname");
    var emailinfo = document.getElementById("emailinfo");
    var comments = document.getElementById("comments");
    let success = document.getElementById("success");
    let danger = document.getElementById("danger");

    // alert(emailinfo.innerHTML);

    let emailCorrecto = validateEmail(emailinfo);

    if(firstname.value === "" || lastname.value === "" || emailinfo.value === "" || comments.value === "" || emailCorrecto === false) {
        success.style.display = "none";
        danger.style.display = "block";
        setTimeout(() => {
            danger.style.display = "none";
        }, 5000);
    } else {
        setTimeout(() => {
            firstname.value = "";
            lastname.value = "";
            emailinfo.value = "";
            comments.value = "";
        }, 2000);
        danger.style.display = "none";
        success.style.display = "block";
        setTimeout(() => {
            success.style.display = "none";
        }, 3000);
    }
}

function validateEmail(inputText) {
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if(inputText.value.match(mailformat)) {
        return true;
    } else {
        return false;
    }
}
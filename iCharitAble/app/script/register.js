function validatePassword(pass) {
    if (pass.trim().length === 0) return "password is  empty"
    if (pass.trim().length > 10) return "password is too long ,range is 6-10"
    if (pass.trim().length < 6) return "password is too short ,range is 6-10"
    else return "success"
}

function validateUsername(pass) {
    if (pass.trim().length === 0) return "username is  empty"
    if (pass.trim().length > 20) return "username is too long ,range is 3-20"
    if (pass.trim().length < 3) return "username is too short ,range is 3-20"
    else return "success"
}

function valEmail(email) {
    var re = /\S+@\S+\.\S+/;
    return re.test(email);
}

function validateEmail(email) {
    if (email.trim().length === 0) return "email is  empty"
    if (valEmail(email) === false) return "invalid email"
    else return "success"
}


function gotoPage(_link) {
    window.location.replace(_link);
    return false;
 }

$(document).ready(() => {
    $("#submit_register").click(() => {
        var username = $("#username").val();
        var email = $("#email").val().trim().toLowerCase();
        var password = $("#password").val().trim();

        var validateU = validateUsername(username)
        var validateE = validateEmail(email);

        var validateP = validatePassword(password);

        if (validateU != "success") {
            $(".err_username").html(validateU);
            return false;
        }
        //IF SUCCESS THEN WE CLEAR THE ERROR TEXT
        $(".err_username").html("");

        if (validateE != "success") {
            $(".err_email").html(validateE);
            return false;
        }
        //IF SUCCESS THEN WE CLEAR THE ERROR TEXT
        $(".err_email").html("");


        if (validateP != "success") {
            $(".err_password").html(validateP);
            return false;
        }

        //IF SUCCESS THEN WE CLEAR THE ERROR TEXT
        $(".err_password").html("");


        $.post("logic/register.php", {
            email: email,
            password: password,
            username:username
        }, (data, status) => {
            if ("fail" in data) {
                $(".err_password").html(data["fail"]);
            }else{
               gotoPage("./user.php");
            }
        }, "json")


    })
})
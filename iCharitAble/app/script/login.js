function validatePassword(pass) {
    if (pass.trim().length === 0) return "password is  empty"
    if (pass.trim().length > 10) return "password is too long ,range is 6-10"
    if (pass.trim().length < 6) return "password is too short ,range is 6-10"
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
    $("#submitLogin").click(() => {
        var email = $("#email").val().trim().toLowerCase();
        var password = $("#password").val().trim();

        var validateE = validateEmail(email);

        var validateP = validatePassword(password);
        if (validateE != "success") {
            $(".err_email").html(validateE);
            return false;
        }
        //IF SUCCESS THEN WE CLEAR THE ERROR TEXT
        $(".err_email").html("");


        if (validateP != "success") {
            $(".err_passowrd").html(validateP);
            return false;
        }

        //IF SUCCESS THEN WE CLEAR THE ERROR TEXT
        $(".err_passowrd").html("");


        $.post("logic/login.php", {
            email: email,
            password: password
        }, (data, status) => {
            console.log(data);
            if ("fail" in data) {
                $(".err_passowrd").html(data["fail"]);
            }
            else {
                if ("type" in data) {
                    if (data["type"] == "user") {
                        gotoPage("./user.php");
                    } else {
                        gotoPage("./admins.php");
                    }
                }
            }
        }, "json")


    })
})
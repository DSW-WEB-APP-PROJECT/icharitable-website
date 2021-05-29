function validatePassword(pass) {
    if (pass.trim().length === 0) return "password is  empty"
    if (pass.trim().length > 10) return "password is too long ,range is 6-10"
    if (pass.trim().length < 6) return "password is too short ,range is 6-10"
    else return "success"
}

$(document).ready(()=>{
    $("#updateBtn").click(e=>{
        var input=$("#updateInp").val().trim();
        if(validatePassword(input)!="success"){
            alert(validatePassword(input))
            return false;
        }

        $.post("logic/updateAdmin.php",{password:input},(data)=>{
         console.log(data);

           if("pass" in data){
               $("#updateInp").val("");
               alert("Admin password  is updated")
           }
        },"JSON")
    })
})
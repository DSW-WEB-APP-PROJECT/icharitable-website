$(document).ready(() => {
    var optionValue = "";

    $('#province').on('change', function () {
        var selectVal = $("#province option:selected").val();
        optionValue = selectVal;
      
    });


    $("#donateButton").click(() => {
      
        var things = $("#things").val();
        var phone = $("#phone").val();

        if (optionValue.trim().length == 0) {
            alert("select a province")
            console.log(optionValue)
            return false;
        }
        if (phone.trim().length == 0 || things.trim().length == 0) {
            alert("fill all input")
            return false;
        }
        if(phone.trim().length < 10){
            alert("phone number is too short")
            return false;
        }
        if(isNaN(phone.trim())){
            alert("invalid phone number")
            return false;
        }
        if(things.trim().length < 9){
            alert("things to donate  is too short")
            return false;
        }

       


        $.post("logic/sendDonation.php",{things:things,phone:phone,province:optionValue},(data)=>{
            console.log(data)  
            alert("thank you for the support") 
            //clear inputs
             $("#things").val("");
             $("#phone").val("");
        })
    })
})
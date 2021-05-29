

$(document).ready(() => {
    $(".chat-button").click(() => {
        var chatInput = $(".chat-input").val();
        if (chatInput.trim().length == 0) {
            alert("message box is empty")
            return false;
        }

        $.post("logic/sendMessage.php", { message: chatInput }, (data) => {
            /// if message is sent , then clear the input
            
            
            if ("pass" in data) {
                $(".chat-input").val("");
            }
            
        }, "json")
    })

})
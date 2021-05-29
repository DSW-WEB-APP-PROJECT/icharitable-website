

function CurrentUser(name, message) {
    return ` 
               
    <div class="box">
        <div class="user"  style="float:left;">
            <div class="username">${name}</div>
            <div class="message">
            ${message}
            </div>
        </div>
    </div>
`
}


function OtherUser(name, message) {
    return ` 
               
    <div class="box">
        <div class="user"  style="float:right;">
            <div class="username">${name}</div>
            <div class="message">
            ${message}
            </div>
        </div>
    </div>
`
}




$(document).ready(() => {

    var str = "";
    $.get("logic/getMessages.php", (data) => {
        /// if message is sent , then clear the input
        var username = data["username"];
        var chat = data["chats"];
        chat.forEach(user => {

            var name = user.username;
            var message = user.message;
            console.log(name)
            console.log(username)
            if (name == username) {
                str += CurrentUser(name, message)

            } else {
                str += OtherUser(name, message)
            }

        })
        $(".chat").html(str);
    }, "json")



    ///refresh in very 2 second
    setInterval(() => {
        var str = "";
        $.get("logic/getMessages.php", (data) => {
            /// if message is sent , then clear the input
            var username = data["username"];
            var chat = data["chats"];
            chat.forEach(user => {

                var name = user.username;
                var message = user.message;
                if (name == username) {
                    str += CurrentUser(name, message)

                } else {
                    str +=OtherUser(name, message)
                }

            })
            $(".chat").html(str);
        }, "json")

    }, 2000);


})

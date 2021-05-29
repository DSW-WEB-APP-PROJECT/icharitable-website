$(document).ready(()=>{
    $("#logoutBtn").click(()=>{
        $.get("logic/userLogout.php",()=>{
            window.location.replace("index.php");
        })
    })
})

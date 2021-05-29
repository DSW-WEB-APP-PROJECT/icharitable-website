$(document).ready(()=>{
    $("#logoutBtn").click(()=>{
        $.get("logic/adminLogout.php",()=>{
            location.replace("index.php");
        })
    })
})
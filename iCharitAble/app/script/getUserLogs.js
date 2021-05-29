
function donateBox(province, message) {
    return ` 
    <div class="donation-log">
    <div class="top">
        <div class="left">
            donated to  ${province}
        </div>
        <div class="righ">
        </div>
    </div>

    <div class="donated-things">
        ${message}
    </div>
</div>
`
}



$(document).ready(() => {
  
        var str = "";
        $.get("logic/getUserLog.php", (data) => {

            var Logs = data.logs;
            Logs.forEach(e => {
                var province = e.province;
                var things = e.things;
                str += donateBox(province, things);
            })
            $(".donation-log-container").html(str);
        }, "json")


})



$(document).ready(() => {
    setInterval(() => {
        var str = "";
        $.get("logic/getUserLog.php", (data) => {

            var Logs = data.logs;
            Logs.forEach(e => {
                var province = e.province;
                var things = e.things;
                str += donateBox(province, things);
            })
            $(".donation-log-container").html(str);
        }, "json")

    }, 3000);
})






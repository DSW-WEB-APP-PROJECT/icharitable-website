function table(data = []) {
    return `
        <thead>
            <tr>
                <th>id</th>
                <th>contact</th>
                <th>province</th>
                <th>things to donate</th>
                <th>delete</th>
            </tr>
        </thead>
        ${data.map((row, index) => { return`      
            <tr>
            <td>${(index+1)}</td>
            <td>${row.phone}</td>
            <td>${row.province}</td>
            <td>${row.things}</td>
            <td><button class="btn danger  deleteButtons" data-delete='${row.id}' onclick='mybtn(${row.id})'  >Delete</button></td>
            
        </tr>
            `
    }).join(" ")}
    `


  
}


//fetch data when the page load
$.get("logic/getAdminTable.php", (data) => {
    console.log(data)
     var tableData=table(data["admin"]);

    $(".table-data").html(tableData);
}, "json")




setInterval(() => {
     ///make fetch new data
     $.get("logic/getAdminTable.php", (data) => {
        console.log(data)
         var tableData=table(data["admin"]);
    
        $(".table-data").html(tableData);
    }, "json")
}, 5000);

//this delete data in the table and update
function mybtn(id) {
    $.post("logic/deleteAdminRow.php",{id:id},(data)=>{
        alert("row deleted")


        ///make fetch new data
        $.get("logic/getAdminTable.php", (data) => {
            console.log(data)
             var tableData=table(data["admin"]);
        
            $(".table-data").html(tableData);
        }, "json")

    })
}



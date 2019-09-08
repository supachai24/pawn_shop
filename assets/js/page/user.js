$(document).ready(function() {
    $.ajax({
        url: api + "api-pawn-shop/get-user.php",
        method: "GET",
        processData: false,
        contentType: false,
        dataType: "json",
        success: function(data) {
            var res = data;
            display(res);
        },
        error: function(jqXHR) {
            console.log(jqXHR);
        }
    });
});

if (typeof table != "undefined") table.destroy();
    table = $("#userTable").DataTable({
    paging: true,
    bSort: false,
    searching: true,
    aLengthMenu: [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
    iDisplayLength: 10,
    drawCallback: function(settings) {
    $(".btnDetails").unbind("click");
    $(".btnDetails").click(function() {
    
        var trParents = $(this).parents("tr");
        var userId = trParents.find(".o_UserID").val();
        var fullname = trParents.find(".o_Fullname").val();
        var username = trParents.find(".o_Username").val();
        var accesId = trParents.find(".o_AccessID").val();
        var params = "userId=" + userId + "&fullname=" + fullname + "&username=" + username + "&accessId=" + accesId;
        window.location.href = "edit-user.php?" + params;
      
    });
    },
    deferRender: true,
    dom: "lfBrtip",
    buttons: []
});

function display(results) {
    table.clear().draw();
    console.log(results.data);
    if (typeof results.data[0] != "undefined") {
        var index = 1;
        results.data.forEach(function(data) {
            // console.log(data.detail);
            tableData = [];
            tableData.push(
                '<input type="hidden" class="o_UserID" value="' + data.UserID + '" />'  
                + '<input type="hidden" class="o_Fullname" value="' + data.Fullname + '" />'   
                + '<input type="hidden" class="o_Username" value="' + data.Username + '" />'
                + '<input type="hidden" class="o_AccessID" value="' + data.AccessID + '" />'
                + '<input type="hidden" class="o_AccessName" value="' + data.AccessName + '" />'
                + index++
            );

            tableData.push(data.Fullname);
            tableData.push(data.Username);
            tableData.push(data.AccessName);
            tableData.push(
                '<div class="tooltip-demo"><button class="btn btn-link btn-xs btnDetails w-100" style="font-size: 14px;" data-toggle="tooltip" data-placement="top" title="รายละเอียด">รายละเอียด</i></button></div>'
            );
        
            table.row.add(tableData);
            table.draw();
        });
    } else {
        console.log('Empty data');
    }
}

$("#btnAdd").click(function() {
    window.location.href = "add-user.php";
});
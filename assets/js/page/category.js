$(document).ready(function() {
    $.ajax({
        url: api + "api-pawn-shop/get-category.php",
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
    table = $("#categoryTable").DataTable({
    paging: true,
    bSort: false,
    searching: true,
    aLengthMenu: [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
    iDisplayLength: 10,
    drawCallback: function(settings) {
    $(".btnDetails").unbind("click");
    $(".btnDetails").click(function() {
    
        var trParents = $(this).parents("tr");
        var categoryId = trParents.find(".o_CategoryID").val();
        var categoryName = trParents.find(".o_CategoryName").val();
        var params = "categoryId=" + categoryId + "&categoryName=" + categoryName;
        window.location.href = "edit-category.php?" + params;
      
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
                '<input type="hidden" class="o_CategoryID" value="' + data.CategoryID + '" />'  
                + '<input type="hidden" class="o_CategoryName" value="' + data.CategoryName + '" />'   
                + index++
            );

            tableData.push(data.CategoryName);
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
    window.location.href = "add-category.php";
});
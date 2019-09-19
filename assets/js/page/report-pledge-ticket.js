$(document).ready(function() {
    $.ajax({
        url: api + "api-pawn-shop/get-category.php",
        method: "GET",
        processData: false,
        contentType: false,
        data: formData,
        dataType: "json",
        success: function(data) {
            var res = data;
            res.data.forEach(function(element) {
                $("#category").append(
                    "<option value="+ element.CategoryID +">"+ element.CategoryName +"</option>"
                );
            });
        },
        error: function(jqXHR) {
            console.log(jqXHR);
        }
    });

    // get start date of month
    var startDateOfMonth = moment().date(1).hours(0).minutes(0).seconds(0).milliseconds(0).format("YYYY-MM-DD");
    $("#startDate").val(startDateOfMonth);
    // get date now
    var now = moment().format("YYYY-MM-DD");
    $("#endDate").val(now);
    var formData = JSON.stringify({
        startDate: $("#startDate").val(),
        endDate: $("#endDate").val(),
        category: $("#category").val(),
        status: $("#status").val()
    });
    $.ajax({
        url: api + "api-pawn-shop/report-pledge-ticket.php",
        method: "POST",
        processData: false,
        contentType: false,
        data: formData,
        dataType: "json",
        success: function(data) {
            console.log(data);
            var res = data;
            display(res);
        },
        error: function(jqXHR) {
            console.log(jqXHR);
        }
    });

    $(".dt-buttons").addClass("my-3");
    $(".dt-buttons").css("float", "right");
    $(".dt-button span").html("<span><i class='far fa-file-excel'></i> Excel</span>");
});

if (typeof table != "undefined") table.destroy();
    table = $("#reportPledgeTable").DataTable({
    paging: false,
    bSort: false,
    searching: false,
    aLengthMenu: [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
    iDisplayLength: 10,
    deferRender: true,
    dom: "lfBrtip",
    buttons: [{
        extend: "excel", className: "btn btn-primary btn-icon icon-left"
    }]
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
                '<input type="hidden" class="o_PledgeTicketID" value="' + data.PledgeTicketID + '" />' 
                + '<input type="hidden" class="o_PledgeStartDate" value="' + data.PledgeStartDate + '" />'
                + '<input type="hidden" class="o_Name" value="' + data.Name + '" />'   
                + '<input type="hidden" class="o_Surname" value="' + data.Surname + '" />'
                + '<input type="hidden" class="o_Phone" value="' + data.Phone + '" />'
                + '<input type="hidden" class="o_PledgeEndDate" value="' + data.PledgeEndDate + '" />'
                + '<input type="hidden" class="o_CitizenID" value="' + data.CitizenID + '" />'
                + '<input type="hidden" class="o_CustomerID" value="' + data.CustomerID + '" />'
                + '<input type="hidden" class="o_CurrentAddress" value="' + data.CurrentAddress + '" />'
                + '<input type="hidden" class="o_Description" value="' + data.Description + '" />'
                + '<input type="hidden" class="o_Email" value="' + data.Email + '" />'
                + '<input type="hidden" class="o_Price" value="' + data.Price + '" />'
                + '<input type="hidden" class="o_TotalPrice" value="' + data.TotalPrice + '" />'
                + '<input type="hidden" class="o_AssetID" value="' + data.AssetID + '" />'
                + '<input type="hidden" class="o_TitleAsset" value="' + data.TitleAsset + '" />'
                + '<input type="hidden" class="o_Brand" value="' + data.Brand + '" />'
                + '<input type="hidden" class="o_Model" value="' + data.Model + '" />'
                + '<input type="hidden" class="o_Color" value="' + data.Color + '" />'
                + '<input type="hidden" class="o_Size" value="' + data.Size + '" />'
                + '<input type="hidden" class="o_InterestRate" value="' + data.InterestRate + '" />'
                + '<input type="hidden" class="o_PledgeStatus" value="' + data.PledgeStatus + '" />'
                + '<input type="hidden" class="o_CategoryName" value="' + data.CategoryName + '" />'
                + '<input type="hidden" class="o_TitleName" value="' + data.Title + '" />'
                + index++
            );

            tableData.push(data.PledgeTicketID);
            tableData.push(data.TitleAsset);
            tableData.push(data.CategoryName);
            tableData.push(handleCommaThousand(data.Price));
            tableData.push(handleCommaThousand(data.TotalPrice));
            tableData.push(data.PledgeStatus);
        
            table.row.add(tableData);
            table.draw();
        });
    } else {
        console.log('Empty data');
    }
}

$("#btnSearch").click(function(e) {
    e.preventDefault();
    var formData = JSON.stringify({
        startDate: $("#startDate").val(),
        endDate: $("#endDate").val(),
        category: $("#category").val(),
        status: $("#status").val()
    });
    $.ajax({
        url: api + "api-pawn-shop/report-pledge-ticket.php",
        method: "POST",
        processData: false,
        contentType: false,
        data: formData,
        dataType: "json",
        success: function(data) {
            console.log(data);
            var res = data;
            display(res);
        },
        error: function(jqXHR) {
            console.log(jqXHR);
        }
    });
});
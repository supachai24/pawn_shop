if (typeof table != "undefined") table.destroy();
    table = $("#pledgeTable").DataTable({
    paging: true,
    bSort: false,
    searching: true,
    aLengthMenu: [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
    iDisplayLength: 10,
    drawCallback: function(settings) {
    $(".btnDetails").unbind("click");
    $(".btnDetails").click(function() {
    
        var trParents = $(this).parents("tr");
        var pledgeTicketID = trParents.find(".o_PledgeTicketID").val();
        var pledgeStartDate = trParents.find(".o_PledgeStartDate").val();
        var name = trParents.find(".o_Name").val();
        var surname = trParents.find(".o_Surname").val();
        var phone = trParents.find(".o_Phone").val();
        var pledgeEndDate = trParents.find(".o_PledgeEndDate").val();
        var citizeneID = trParents.find(".o_CitizenID").val();
        var currentAddress = trParents.find(".o_CurrentAddress").val();
        var title = trParents.find(".o_TitleName").val();
        var customerID = trParents.find(".o_CustomerID").val();
        var email = trParents.find(".o_Email").val();
        var assetID = trParents.find(".o_AssetID").val();
        var brand = trParents.find(".o_Brand").val();
        var model = trParents.find(".o_Model").val();
        var color = trParents.find(".o_Color").val();
        var size = trParents.find(".o_Size").val();
        var categoryName = trParents.find(".o_CategoryName").val();
        var subCategoryName = trParents.find(".o_SubCategoryName").val();
        var description = trParents.find(".o_Description").val();
        var price = trParents.find(".o_Price").val();
        var pledgeStatusName = trParents.find(".o_PledgeStatusName").val();
        var interestRate = trParents.find(".o_InterestRate").val();
        var params = "pledgeTicketID=" + pledgeTicketID;
        window.location.href="pledge-ticket-details.php?" + params;
      
    });

    $(".btnDelete").unbind("click");
    $(".btnDelete").click(function() {

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
                + '<input type="hidden" class="o_AssetID" value="' + data.AssetID + '" />'
                + '<input type="hidden" class="o_Brand" value="' + data.Brand + '" />'
                + '<input type="hidden" class="o_Model" value="' + data.Model + '" />'
                + '<input type="hidden" class="o_Color" value="' + data.Color + '" />'
                + '<input type="hidden" class="o_Size" value="' + data.Size + '" />'
                + '<input type="hidden" class="o_InterestRate" value="' + data.InterestRate + '" />'
                + '<input type="hidden" class="o_PledgeStatus" value="' + data.PledgeStatus+ '" />'
                + '<input type="hidden" class="o_CategoryName" value="' + data.CategoryName + '" />'
                + '<input type="hidden" class="o_TitleName" value="' + data.Title + '" />'
                + index++
            );

            tableData.push(data.PledgeTicketID);
            tableData.push(data.PledgeStartDate);
            tableData.push(data.Title + ' ' + data.Name + ' ' + data.Surname);
            tableData.push(data.Phone);
            tableData.push(data.PledgeEndDate);
            tableData.push(
                // setInterval(function() {
                    countDownDate(data.PledgeEndDate, data.PledgeTicketID)
                // }, 86400)
            );
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

function call() {
    $.ajax({
        url: api + 'api-pawn-shop/get-pledge-ticket.php',
        method: 'GET',
        processData: false,
        contentType: false,
        dataType: "json",
        success: function (data) {
            // console.log(data);
            var results = data;
            display(results);
        }
    });
};

call();

function countDownDate(date, id) {
    var endDate = new Date(date).getTime();
    var now = new Date().getTime();
    var distance = endDate - now;
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));

    if (distance < 0) {
        var params = "id=" + id;
        $.ajax({
            url: api + 'api-pawn-shop/update-pledge-ticket-unactive.php?' + params,
            method: 'GET',
            processData: false,
            contentType: false,
            dataType: "json",
            success: function (data) {
                console.log(data);
            }, 
            error: function(jqXHR) {
                console.log("Error", jqXHR);
            }
        });
    }

    return days;    
}

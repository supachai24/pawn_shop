$(document).ready(function() {
    var customerId = getUrlParameter("customerId");
    var params = "id=" + customerId;
    $.ajax({
        url: api + "api-pawn-shop/get-customer-detail.php?" + params,
        method: "GET",
        processData: false,
        contentType: false,
        dataType: "json",
        success: function(data) {
            var res = data;
            display(res);
            res = res.data[0];
            $("#customerName").append(res.Title + " " + res.Name + " " + res.Surname);
            $("#customerId").append(res.CustomerID);
            $("#citizenId").append(res.CitizenID);
            $("#address").append(res.CurrentAddress);
            $("#phone").append(res.Phone);
            $("#email").append(res.Email);
        },
        error: function(jqXHR) {
            console.log(jqXHR);
        }
    });

    $("#btnEdit").click(function() {
        var params = "customerId=" + customerId;
        window.location.href = "edit-customer.php?" + params;
    });
});

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
        var customerId = trParents.find(".o_CustomerID").val();
        var params = "customerId=" + customerId;
        window.location.href = "customer-details.php?" + params;
      
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
                + '<input type="hidden" class="o_Price" value="' + data.TotalPrice + '" />'
                + '<input type="hidden" class="o_AssetID" value="' + data.AssetID + '" />'
                + '<input type="hidden" class="o_Brand" value="' + data.Brand + '" />'
                + '<input type="hidden" class="o_Model" value="' + data.Model + '" />'
                + '<input type="hidden" class="o_Color" value="' + data.Color + '" />'
                + '<input type="hidden" class="o_Size" value="' + data.Size + '" />'
                + '<input type="hidden" class="o_InterestRate" value="' + data.InterestRate + '" />'
                + '<input type="hidden" class="o_PledgeStatusName" value="' + data.PledgeStatus + '" />'
                + '<input type="hidden" class="o_CategoryName" value="' + data.CategoryName + '" />'
                + '<input type="hidden" class="o_SubCategoryName" value="' + data.SubCategoryName + '" />'
                + '<input type="hidden" class="o_TitleName" value="' + data.Title + '" />'
                + index++
            );

            tableData.push(data.PledgeTicketID);
            tableData.push(data.TitleAsset);
            tableData.push(handleCommaThousand(data.Price));
            tableData.push(handleCommaThousand(data.TotalPrice));
            tableData.push(data.PledgeStartDate);
            tableData.push(data.PledgeStatus);
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

$("#btnDelete").click(function() {
    swal({
        title: "ยืนยันลบข้อมูลลูกค้า",
        text: "คุณต้องการลบข้อมูล "+ $("#customerName").text() +" ใช่หรือไม่?",
        icon: "warning",
        buttons: true,
        dangerMode: true,
        }).then((willDelete) => {
            if (willDelete) {
                var customerId = $("#customerId").val();
                var params = "id=" + customerId;
                $.ajax({
                    url: api + "api-pawn-shop/delete-customer.php?" + params,
                    method: "GET",
                    processData: false,
                    contentType: false,
                    dataType: "json",
                    success: function(data) {
                        var res = data;
                        console.log(res);
                        if (res.status.code == 0) {
                            swal({
                                title: "ดำเนินการเรียบร้อย",
                                text: "ลบข้อมูลลูกค้าเรียบร้อย",
                                icon: "success"
                            }).then(function() {
                                window.location.href = "customer.php"
                            });
                        }
                    },
                    error: function(jqXHR) {
                        console.log(jqXHR);
                    }
                });
            } 
    });
});
// Get parameter from url
function getUrlParameter(param) {
    var pageUrl = window.location.search.substring(1);
    var urlVariables = pageUrl.split('&');

    for (var i = 0; i < urlVariables.length; i++) {
        var parameterName = urlVariables[i].split('=');

        if (parameterName[0] === param) {
            return parameterName[1] === undefined ? true : decodeURIComponent(parameterName[1]);
        }
    }
}

function call() {
    var pledgeTicketID = getUrlParameter('pledgeTicketID');
    var params = "id=" + pledgeTicketID;
    $.ajax({
        url: '../api/get-pledge-ticker-details.php?' + params,
        method: 'GET',
        processData: false,
        contentType: false,
        dataType: 'json',
        success: function (data) {
            var results = data;
            this.results = results.data;
            console.log(this.results);
            $("#pledgeTicketID").append(this.results.PledgeTicketID);
            $("#price").append(parseFloat(this.results.Price).toLocaleString('thai', { minimumFractionDigits: 2}));
            $("#interestRate").append(this.results.InterestRate);
            $("#pledgeStartDate").append(this.results.PledgeStartDate);
            $("#pledgeEndDate").append(this.results.PledgeEndDate);
            $("#pledgeStatus").append(this.results.PledgeStatusName);
            
            if ($("#pledgeStatus").text() == 'จำนำ') {
                $("#pledgeStatus").css({
                    'color': 'green',
                    'font-size': '16px',
                    'font-weight': 'bold'
                });
            } else if ($("#pledgeStatus").text() == 'ไถ่ถอน') {
                $("#pledgeStatus").css({
                    'color': 'orange',
                    'font-size': '16px',
                    'font-weight': 'bold'
                });
                disabledButton();
            }

            $("#customerID").append(this.results.CustomerID);
            $("#citizenID").append(this.results.CitizenID);
            $("#customerName").append(this.results.TitleName + ' ' + this.results.Name + ' ' + this.results.Surname);
            $("#currentAddress").append(this.results.CurrentAddress);
            $("#phone").append(this.results.Phone);
            $("#email").append(this.results.Email);
            $("#assetID").append(this.results.AssetID);
            $("#category").append(this.results.CategoryName);
            $("#subCategory").append(this.results.SubCategoryName);
            $("#brand").append(this.results.Brand);
            $("#model").append(this.results.Model);
            $("#color").append(this.results.Color);
            $("#size").append(this.results.Size);
            $("#description").append(this.results.Description);
            var redeemPrice = parseFloat(this.results.Price) + ((parseFloat(this.results.InterestRate) * parseFloat(this.results.Price)) / 100);
            $("#redeemPrice").append(redeemPrice.toLocaleString('thai', { minimumFractionDigits: 2}));
            $("#modalPledgeTicketID").append(this.results.PledgeTicketID);
            $("#modalPrice").append(parseFloat(this.results.Price).toLocaleString('thai', { minimumFractionDigits: 2}));
            $("#modalInterestRate").append(this.results.InterestRate);
            var priceRate = parseFloat(this.results.InterestRate) * parseFloat(this.results.Price) / 100;
            $("#priceRate").append(priceRate);
        },
        error: function(status) {
            console.log("Error", status);
        }
    });
}

call();

$("#btnRedeem").click(function() {
    swal({
        title: "ยืนยันการไถ่ถอน",
        text: "คุณต้องการทำการไถ่ถอนใช่หรือไม่?",
        icon: "warning",
        buttons: true,
        dangerMode: true,
        }).then((willRedeem) => {
            if (willRedeem) {
                var pledgeTicketID = getUrlParameter('pledgeTicketID');
                var params = "id=" + pledgeTicketID;
                $.ajax({
                    url: '../api/update-pledge-ticket-status.php?' + params,
                    method: 'GET',
                    processData: false,
                    contentType: false,
                    dataType: 'json',
                    success: function (data) {
                        console.log(data);
                        if (data.status.code == 0) {
                            $("#btnRedeem").prop('disabled', true);
                            
                            if ($("#btnRedeem").prop('disabled') == true) {
                                disabledButton();
                            }

                            clearData();
                            call();
                            swal({
                                title: "ดำเนินการเรียบร้อย",
                                icon: "success",
                            });
                        }
                    },
                    error: function(jqXHR, textStatus) {
                        console.log("Error", textStatus, jqXHR);
                    }
                });
            } 
    });
});

$("#btnContinueRate").click(function() {
    console.log("Click");
    $("#continueRateModal").modal();
});

$("#btnCancel").click(function() {
    console.log("Click");
});

function clearData() {
    $("#pledgeTicketID").text('');
    $("#price").text('');
    $("#interestRate").text('');
    $("#pledgeStartDate").text('');
    $("#pledgeEndDate").text('');
    $("#pledgeStatus").text('');
    $("#customerID").text('');
    $("#citizenID").text('');
    $("#customerName").text('');
    $("#currentAddress").text('');
    $("#phone").text('');
    $("#email").text('');
    $("#assetID").text('');
    $("#category").text('');
    $("#subCategory").text('');
    $("#brand").text('');
    $("#model").text('');
    $("#color").text('');
    $("#size").text('');
    $("#description").text('');
    $("#redeemPrice").text('');
}

function disabledButton() {
    $("#btnRedeem").css('display', 'none');
    $("#btnContinueRate").css('display', 'none');
}

$("#btnConfirm").click(function() {
    var pledgeTicketID = getUrlParameter('pledgeTicketID');
    var priceRate = $("#priceRate").text();
    var params = "id=" + pledgeTicketID + "&priceRate=" + priceRate;
    $.ajax({
        url: '../api/add-continue-rate.php?' + params,
        method: 'GET',
        processData: false,
        contentType: false,
        dataType: 'json',
        success: function (data) {
            console.log(data);
            if (data.status.code == 0) {
                clearData();
                call();
                swal({
                    title: "ดำเนินการเรียบร้อย",
                    icon: "success",
                });
                $("#continueRateModal").modal('hide');
            }
        },
        error: function(jqXHR, textStatus) {
            console.log("Error", textStatus, jqXHR);
        }
    });
});

function callContinueRate() {
    var pledgeTicketID = getUrlParameter('pledgeTicketID');
    var params = "id=" + pledgeTicketID;
    $.ajax({
        url: '../api/get-continue-rate.php?' + params,
        method: 'GET',
        processData: false,
        contentType: false,
        dataType: "json",
        success: function (data) {
            console.log(data);
            var results = data;
            display(results);
        }
    });
}

callContinueRate();

if (typeof table != "undefined") table.destroy();
    table = $("#continueRateTable").DataTable({
    paging: true,
    bSort: false,
    searching: false,
    aLengthMenu: [[5, 10, 25, 50, 100, -1], [5, 10, 25, 50, 100, "All"]],
    iDisplayLength: 5,
    drawCallback: function(settings) {
    $(".btnDetails").unbind("click");
    $(".btnDetails").click(function() {
    
        var trParents = $(this).parents("tr");
        
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
                + '<input type="hidden" class="o_PriceRate" value="' + data.PriceRate + '" />'
                + '<input type="hidden" class="o_ContinueDate" value="' + data.ContinueDate + '" />'   
                + index++
            );

            tableData.push(data.PriceRate);
            tableData.push(data.ContinueDate);
        
            table.row.add(tableData);
            table.draw();
        });
    } else {
        console.log('Empty data');
    }
}

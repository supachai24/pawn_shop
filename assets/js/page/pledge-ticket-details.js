function call() {
    var pledgeTicketID = getUrlParameter('pledgeTicketID');
    var params = "id=" + pledgeTicketID;
    $.ajax({
        url: api + 'api-pawn-shop/get-pledge-ticket-details.php?' + params,
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
            $("#pledgeStatus").append(this.results.PledgeStatus);
            
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
            $("#customerName").append(this.results.Title + ' ' + this.results.Name + ' ' + this.results.Surname);
            $("#currentAddress").append(this.results.CurrentAddress);
            $("#phone").append(this.results.Phone);
            $("#email").append(this.results.Email);
            $("#assetID").append(this.results.AssetID);
            $("#titleAsset").append(this.results.TitleAsset);
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
                    url: api + 'api-pawn-shop/update-pledge-ticket-status.php?' + params,
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
    $("#continueRateModal").modal();
});

$("#btnCancel").click(function() {
    swal({
        title: "ยืนยันยกเลิกตั๋วจำนำ",
        text: "คุณต้องการยกเลิกตั๋วจำนำใช่หรือไม่?",
        icon: "warning",
        buttons: true,
        dangerMode: true,
        }).then((willCancel) => {
            if (willCancel) {
                var pledgeTicketID = getUrlParameter('pledgeTicketID');
                var params = "id=" + pledgeTicketID;
                $.ajax({
                    url: api + 'api-pawn-shop/cancel-pledge-ticket.php?' + params,
                    method: 'GET',
                    processData: false,
                    contentType: false,
                    dataType: 'json',
                    success: function (data) {
                        console.log(data);
                        if (data.status.code == 0) {
                            swal({
                                title: "ดำเนินการเรียบร้อย",
                                icon: "success",
                            }).then(function() {
                                window.location.href = "index.php";
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
    $("#modalPledgeTicketID").text('');
    $("#modalPrice").text('');
    $("#modalInterestRate").text('');
    $("#priceRate").text('');
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
        url: api + 'api-pawn-shop/add-continue-rate.php?' + params,
        method: 'GET',
        processData: false,
        contentType: false,
        dataType: 'json',
        success: function (data) {
            console.log(data);
            if (data.status.code == 0) {
                swal({
                    title: "ดำเนินการเรียบร้อย",
                    icon: "success",
                }).then(function() {
                    clearData();
                    call();
                    callContinueRate();
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
        url: api + 'api-pawn-shop/get-continue-rate.php?' + params,
        method: 'GET',
        processData: false,
        contentType: false,
        dataType: "json",
        success: function (data) {
            console.log(data);
            var results = data;
            results.data.forEach(function(element) {
                var i = element.ContinueDate.substring(5, 7);
                var month = handleGetMonth();
                if (i == month) {
                    $("#btnContinueRate").prop("disabled", true);
                }
            });
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

function handleGetMonth() {
    var date = new Date();
    var month = date.getMonth() + 1;
    if (month != 10 || month != 11 || month != 12) {
        return "0" + month;
    } else {
        return month;
    }
}

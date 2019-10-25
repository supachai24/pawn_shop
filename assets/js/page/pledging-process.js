$(document).ready(function() {
    $.ajax({
        url: api + "api-pawn-shop/get-category.php",
        method: "GET",
        processData: false,
        contentType: false,
        dataType: "json",
        success: function(data) {
            var res = data;
             res.data.forEach(function(element) {
                $("#category").append(
                    "<option value="+ element.CategoryID +">"+ element.CategoryName +"</option>"
                );
            });

            if (store.get("editPledgeTicket").edit) {
                var data =  store.get("pledgeDetails");
                $("#title").val(data.Title);
                $("#name").val(data.Name);
                $("#surname").val(data.Surname);
                $("#citizenId").val(data.CitizenID);
                $("#address").val(data.CurrentAddress);
                $("#phone").val(data.Phone);
                $("#email").val(data.Email);
                $("#titleAsset").val(data.TitleAsset);
                $("#category").val(data.CategoryID);
                $("#brand").val(data.Brand);
                $("#serialno").val(data.SerialNo);
                $("#model").val(data.Model);
                $("#size").val(data.Size);
                $("#color").val(data.Color);
                $("#description").val(data.Description);
                $("#price").val(data.Price);
                $("#interestRate").val(data.InterestRate);
                $("#totalPrice").val(data.TotalPrice);
                $("#customerId").val(data.CustomerID);
            }
        },
        error: function(jqXHR) {
            console.log("Error", jqXHR);
        }
    });

    $("#citizenId").mask('0-0000-00000-00-0');
    $("#phone").mask('000-000-0000');
    $("#price").mask('#.00', {reverse: true});
    $("#interestRate").mask('#.00', {reverse: true});

    $("#title").change(function() {
        $("#title").removeClass("require-input");
        $(".invalid-title").css("display", "none");
    });
    $("#name").keypress(function() {
        $("#name").removeClass("require-input");
        $(".invalid-name").css("display", "none");
    });
    $("#surname").keypress(function() {
        $("#surname").removeClass("require-input");
        $(".invalid-surname").css("display", "none");
    });
    $("#citizenId").keypress(function() {
        $("#citizenId").removeClass("require-input");
        $(".invalid-citizenId").css("display", "none");
        $(".invalid-format-citizenId").css("display", "none");
    });
    $("#address").keypress(function() {
        $("#address").removeClass("require-input");
        $(".invalid-address").css("display", "none");
    });
    $("#titleAsset").keypress(function() {
        $("#titleAsset").removeClass("require-input");
        $(".invalid-titleAsset").css("display", "none");
    });
    $("#category").change(function() {
        $("#category").removeClass("require-input");
        $(".invalid-category").css("display", "none");
    });
    $("#serialno").keypress(function() {
        $("#serialno").removeClass("require-input");
        $(".invalid-serialno").css("display", "none");
    });
    $("#price").keypress(function() {
        $("#price").removeClass("require-input");
        $(".invalid-price").css("display", "none");
    });
    $("#interestRate").keypress(function() {
        $("#interestRate").removeClass("require-input");
        $(".invalid-interestRate").css("display", "none");
        $(".invalid-format-interestRate").css("display", "none");
    });

    $("#price").keyup(function() {
        var price = parseFloat($("#price").val());
        var rate = parseFloat($("#interestRate").val());
        var totalPrice = price + ((price * rate)/100);
        $("#totalPrice").val(totalPrice.toFixed(2));
    });

    $("#interestRate").keyup(function() {
        var price = parseFloat($("#price").val());
        var rate = parseFloat($("#interestRate").val());
        var totalPrice = price + ((price * rate)/100);
        $("#totalPrice").val(totalPrice.toFixed(2));
    });

    var table = $("#customerTable").DataTable();
    $("#customerTable tbody").on('click', 'tr', function() {
        var data = table.row(this).data();
        $("#customerId").val(data[4].CustomerID);
        $("#title").val(data[4].Title);
        $("#name").val(data[4].Name);
        $("#surname").val(data[4].Surname);
        $("#citizenId").val(data[4].CitizenID);
        $("#address").val(data[4].CurrentAddress);
        $("#phone").val(data[4].Phone);
        $("#email").val(data[4].Email);
        $("#customerModal").modal("hide");
    });
});

function nextTab(e) {
    $(e).next().find('a[data-toggle="tab"]').click();
}

$(".next-step").click(function(e) {
    if (e.currentTarget.hash == "#step2") {
        if (validateStepOne()) {
            $("#step1").css('display', 'none');
            $("#step2").css('display', 'block');
            $("#step3").css('display', 'none');
            $(".step1").removeClass('wizard-step-active');
            $(".step2").addClass('wizard-step-active');
            $(".step3").removeClass('wizard-step-active');
        }
    } else if (e.currentTarget.hash == "#step3") {
        if (validateStepTwo()) {
            $("#step1").css('display', 'none');
            $("#step2").css('display', 'none');
            $("#step3").css('display', 'block');
            $(".step1").removeClass('wizard-step-active');
            $(".step2").removeClass('wizard-step-active');
            $(".step3").addClass('wizard-step-active');
        }
    }
});

$(".prev-step").click(function(e) {
    if (e.currentTarget.hash == "#step1") {
        $("#step1").css('display', 'block');
        $("#step2").css('display', 'none');
        $("#step3").css('display', 'none');
        $(".step1").addClass('wizard-step-active');
        $(".step2").removeClass('wizard-step-active');
        $(".step3").removeClass('wizard-step-active');
    } else if (e.currentTarget.hash == "#step2") {
        $("#step1").css('display', 'none');
        $("#step2").css('display', 'block');
        $("#step3").css('display', 'none');
        $(".step1").removeClass('wizard-step-active');
        $(".step2").addClass('wizard-step-active');
        $(".step3").removeClass('wizard-step-active');
    }
});

function validateStepOne() {
    if ($("#title").val() == 0) {
        $("#title").addClass("require-input");
        $(".invalid-title").css("display", "block");
        return false;
    } else if ($("#name").val() == "") {
        $("#name").addClass("require-input");
        $(".invalid-name").css("display", "block");
        return false;
    } else if ($("#surname").val() == "") {
        $("#surname").addClass("require-input");
        $(".invalid-surname").css("display", "block");
        return false;
    } else if ($("#citizenId").val() == "") {
        $("#citizenId").addClass("require-input");
        $(".invalid-citizenId").css("display", "block");
        return false;
    } else if ($("#citizenId").val() != "" && $("#citizenId").val().length != 17) {
        $("#citizenId").addClass("require-input");
        $(".invalid-format-citizenId").css("display", "block");
        return false;
    } else if ($("#address").val() == "") {
        $("#address").addClass("require-input");
        $(".invalid-address").css("display", "block");
        return false;
    }
    return true;
}

function validateStepTwo() {
    if ($("#titleAsset").val() == "") {
        $("#titleAsset").addClass("require-input");
        $(".invalid-titleAsset").css("display", "block");
        return false;
    } else if ($("#category").val() == 0) {
        $("#category").addClass("require-input");
        $(".invalid-category").css("display", "block");
        return false;
    } else if ($("#serialno").val() == "") {
        $("#serialno").addClass("require-input");
        $(".invalid-serialno").css("display", "block");
        return false;
    }
    return true;
}

function validateStepThree() {
    if ($("#price").val() == "") {
        $("#price").addClass("require-input");
        $(".invalid-price").css("display", "block");
        return false;
    } else if ($("#interestRate").val().length < 3) {
        $("#interestRate").addClass("require-input");
        $(".invalid-format-interestRate").css("display", "block");
        return false;
    }
    return true;
}

$("#wizard-steps").submit(function(e) {
    e.preventDefault();
    var title = $("#title").val();
    var name = $("#name").val();
    var surname = $("#surname").val();
    var citizenId = $("#citizenId").val();
    var address = $("#address").val();
    var phone = $("#phone").val();
    var email = $("#email").val();
    var titleAsset = $("#titleAsset").val();
    var categoryId = $("#category").val();
    var brand = $("#brand").val();
    var serialNo = $("#serialno").val();
    var model = $("#model").val();
    var size = $("#size").val();
    var color = $("#color").val();
    var description = $("#description").val();
    var price = $("#price").val();
    var interestRate = $("#interestRate").val();
    var totalPrice = $("#totalPrice").val();
    var interestPeriod = $("#interestPeriod").val();
    var pledgeTicketId = "PT-" + (Math.floor(Math.random() * 899999999) + 100000000);
    var customerId = $("#customerId").val();

    if (validateStepThree()) {
        if (store.get("editPledgeTicket").edit) {
            console.log("Hello");
        } else {
            var formData = JSON.stringify({
                citizenId: citizenId
            });
            $.ajax({
                url: api + "api-pawn-shop/check-customer.php",
                method: "POST",
                processData: false,
                contentType: false,
                data: formData,
                dataType: "json",
                success: function(data) {
                    // console.log(data);
                    var res = data;
                    if (res.status.code == 0) {
                        var formData = JSON.stringify({
                            pledgeTicketId: pledgeTicketId,
                            customerId: customerId,
                            title: title,
                            name: name,
                            surname: surname,
                            citizenId: citizenId,
                            address: address,
                            phone: phone,
                            email: email,
                            titleAsset: titleAsset,
                            categoryId: categoryId,
                            brand: brand,
                            serialno: serialNo,
                            model: model,
                            size: size,
                            color: color,
                            description: description,
                            price: price,
                            interestRate: interestRate,
                            totalPrice: totalPrice,
                            interestPeriod: interestPeriod
                        });
                        $.ajax({
                            url: api + "api-pawn-shop/add-pledge-ticket-with-customer.php",
                            method: "POST",
                            processData: false,
                            contentType: false,
                            data: formData,
                            dataType: "json",
                            success: function(data) {
                                // console.log(data);
                                var res = data;
                                if (res.status.code == 0) {
                                    swal({
                                        title: "ดำเนินการเรียบร้อย",
                                        text: "บันทึกข้อมูลตั๋วจำนำเรียบร้อย",
                                        icon: "success"
                                    }).then(function() {
                                        handleClearInput();
                                        window.location.href = "pledging-process.php"
                                    });
                                } else {
                                    swal({
                                        title: "ผิดพลาด",
                                        text: "บันทึกข้อมูลตั๋วจำนำไม่สำเร็จ",
                                        icon: "error"
                                    });
                                }
                            },
                            error: function(jqXHR) {
                                console.log("Error", jqXHR);
                            }
                        });
                    } else {
                        var formData = JSON.stringify({
                            pledgeTicketId: pledgeTicketId,
                            title: title,
                            name: name,
                            surname: surname,
                            citizenId: citizenId,
                            address: address,
                            phone: phone,
                            email: email,
                            titleAsset: titleAsset,
                            categoryId: categoryId,
                            brand: brand,
                            serialno: serialNo,
                            model: model,
                            size: size,
                            color: color,
                            description: description,
                            price: price,
                            interestRate: interestRate,
                            totalPrice: totalPrice,
                            interestPeriod: interestPeriod
                        });
                        $.ajax({
                            url: api + "api-pawn-shop/add-pledge-ticket.php",
                            method: "POST",
                            processData: false,
                            contentType: false,
                            data: formData,
                            dataType: "json",
                            success: function(data) {
                                // console.log(data);
                                var res = data;
                                if (res.status.code == 0) {
                                    swal({
                                        title: "ดำเนินการเรียบร้อย",
                                        text: "บันทึกข้อมูลตั๋วจำนำเรียบร้อย",
                                        icon: "success"
                                    }).then(function() {
                                        handleClearInput();
                                        window.location.href = "pledging-process.php"
                                    });
                                } else {
                                    swal({
                                        title: "ผิดพลาด",
                                        text: "บันทึกข้อมูลตั๋วจำนำไม่สำเร็จ",
                                        icon: "error"
                                    });
                                }
                            },
                            error: function(jqXHR) {
                                console.log("Error", jqXHR);
                            }
                        });
                    }
                },
                error: function(jqXHR) {
                    console.log("Error", jqXHR);
                }
            });
        }
        
    }
});

function handleClearInput() {
    $("#title").val(0);
    $("#name").val("");
    $("#surname").val("");
    $("#citizenId").val("");
    $("#address").val("");
    $("#phone").val("");
    $("#email").val("");
    $("#titleAsset").val("");
    $("#category").val(0);
    $("#brand").val("");
    $("#serialno").val("");
    $("#model").val("");
    $("#size").val("");
    $("#color").val("");
    $("#description").val("");
    $("#price").val("");
    $("#interestRate").val(1.25);
    $("#totalPrice").val("");
    $("#customerId").val("");
}

$("#searchCustomer").click(function() {
    $.ajax({
        url: api + "api-pawn-shop/get-customer.php",
        method: "GET",
        processData: false,
        contentType: false,
        dataType: "json",
        success: function(data) {
            var res = data;
            display(res);
        },
        error: function(jqXHR) {
            console.log("Error", jqXHR);
        }
    });
    $("#customerModal").modal();
});

if (typeof table != "undefined") table.destroy();
    table = $("#customerTable").DataTable({
    paging: true,
    bSort: false,
    searching: true,
    aLengthMenu: [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
    iDisplayLength: 10,
    deferRender: true,
    dom: "lfBrtip",
    buttons: []
});

function display(results) {
    table.clear().draw();
    if (typeof results.data[0] != "undefined") {
        var index = 1;
        results.data.forEach(function(data) {
            tableData = [];
            tableData.push(
                '<input type="hidden" class="o_CustomerID" value="' + data.CustomerID + '" />' 
                + '<input type="hidden" class="o_Title" value="' + data.Title + '" />'
                + '<input type="hidden" class="o_Name" value="' + data.Name + '" />'   
                + '<input type="hidden" class="o_Surname" value="' + data.Surname + '" />'
                + '<input type="hidden" class="o_Phone" value="' + data.Phone + '" />'
                + '<input type="hidden" class="o_CitizenID" value="' + data.CitizenID + '" />'
                + '<input type="hidden" class="o_CustomerID" value="' + data.CustomerID + '" />'
                + '<input type="hidden" class="o_CurrentAddress" value="' + data.CurrentAddress + '" />'
                + '<input type="hidden" class="o_Email" value="' + data.Email + '" />'
                + index++
            );

            tableData.push(data.CustomerID);
            tableData.push(data.Title + ' ' + data.Name + ' ' + data.Surname);
            tableData.push(data.CitizenID);
            tableData.push(data);
        
            table.row.add(tableData);
            table.draw();
        });
    } else {
        console.log('Empty data');
    }
}
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
            res = res.data[0];
            $("#customerId").val(res.CustomerID);
            $("#title").val(res.Title);
            $("#name").val(res.Name);
            $("#surname").val(res.Surname); 
            $("#citizenId").val(res.CitizenID);
            $("#address").val(res.CurrentAddress);
            $("#phone").val(res.Phone);
            $("#email").val(res.Email);
        },
        error: function(jqXHR) {
            console.log(jqXHR);
        }
    });
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

$("#submitCustomer").submit(function(e) {
    e.preventDefault();
    var formData = JSON.stringify({
        customerId: $("#customerId").val(),
        title: $("#title").val(),
        name: $("#name").val(),
        surname: $("#surname").val(),
        citizenId: $("#citizenId").val(),
        address: $("#address").val(),
        phone: $("#phone").val(),
        email: $("#email").val()
    });
    if (validateStepOne()) {
        $.ajax({
            url: api + "api-pawn-shop/update-customer.php",
            method: "POST",
            processData: false,
            contentType: false,
            data: formData,
            dataType: "json",
            success: function(data) {
                var res = data;
                if (res.status.code == 0) {
                    swal({
                        title: "ดำเนินการเรียบร้อย",
                        text: "บันทึกข้อมูลลูกค้าเรียบร้อย",
                        icon: "success"
                    });
                } else {
                    swal({
                        title: "ผิดพลาด",
                        text: "บันทึกข้อมูลลูกค้าไม่สำเร็จ",
                        icon: "error"
                    });
                }
            },
            error: function(jqXHR) {
                console.log(jqXHR);
            }
        });
    }
});
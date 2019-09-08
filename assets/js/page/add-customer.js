$(document).ready(function() {
    $("#citizenId").mask('0-0000-00000-00-0');
    $("#phone").mask('000-000-0000');

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
            url: api + "api-pawn-shop/add-customer.php",
            method: "POST",
            processData: false,
            contentType: false,
            data: formData,
            dataType: "json",
            success: function(data) {
                var res = data;
                // console.log(res);
                if (res.status.code == 0) {
                    swal({
                        title: "ดำเนินการเรียบร้อย",
                        text: "บันทึกข้อมูลลูกค้าเรียบร้อย",
                        icon: "success"
                    }).then(function() {
                        window.location.href = "customer.php";
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
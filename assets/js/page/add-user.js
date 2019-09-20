$(document).ready(function() {
    $.ajax({
        url: api + "api-pawn-shop/get-access.php",
        method: "GET",
        processData: false,
        contentType: false,
        dataType: "json",
        success: function(data) {
            var res = data;
            // console.log(res);
            res.data.forEach(function(element) {
                $("#access").append(
                    "<option value="+ element.AccessID +">"+ element.AccessName +"</option>"
                );
            }); 
        },
        error: function(jqXHR) {
            console.log(jqXHR);
        }
    });

    $("#fullname").keypress(function() {
        $("#fullname").removeClass("require-input");
        $(".invalid-fullname").css("display", "none");
    });
    $("#username").keypress(function() {
        $("#username").removeClass("require-input");
        $(".invalid-username").css("display", "none");
    });
    $("#password").keypress(function() {
        $("#password").removeClass("require-input");
        $(".invalid-password").css("display", "none");
    });
    $("#confirmPassword").keypress(function() {
        $("#confirmPassword").removeClass("require-input");
        $(".invalid-confirmPassword").css("display", "none");
        $(".invalid-format-confirmPassword").css("display", "none");
    });
    $("#access").change(function() {
        $("#access").removeClass("require-input");
        $(".invalid-access").css("display", "none");
    });
});

function validate() {
    if ($("#fullname").val() == 0) {
        $("#fullname").addClass("require-input");
        $(".invalid-fullname").css("display", "block");
        return false;
    } else if ($("#username").val() == "") {
        $("#username").addClass("require-input");
        $(".invalid-username").css("display", "block");
        return false;
    } else if ($("#password").val() == "") {
        $("#password").addClass("require-input");
        $(".invalid-password").css("display", "block");
        return false;
    } else if ($("#confirmPassword").val() == "") {
        $("#confirmPassword").addClass("require-input");
        $(".invalid-confirmPassword").css("display", "block");
        return false;
    } else if ($("#confirmPassword").val() != $("#password").val()) {
        $("#confirmPassword").addClass("require-input");
        $(".invalid-format-confirmPassword").css("display", "block");
        return false;
    } else if ($("#access").val() == 0) {
        $("#access").addClass("require-input");
        $(".invalid-access").css("display", "block");
        return false;
    }
    return true;
}

$("#submitUser").submit(function(e) {
    e.preventDefault();
    var formData = JSON.stringify({
        fullname: $("#fullname").val(),
        username: $("#username").val(),
        password: $("#password").val(),
        access: $("#access").val()
    });
    if (validate()) {
        $.ajax({
            url: api + "api-pawn-shop/add-user.php",
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
                        text: "บันทึกข้อมูลเจ้าหน้าที่เรียบร้อย",
                        icon: "success"
                    }).then(function() {
                        window.location.href = "user.php";
                    });
                } else {
                    swal({
                        title: "ผิดพลาด",
                        text: "บันทึกข้อมูลเจ้าหน้าที่ไม่สำเร็จ",
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
$(document).ready(function() {
    $("#category").keypress(function() {
        $("#category").removeClass("require-input");
        $(".invalid-category").css("display", "none");
    });
});

function validate() {
    if ($("#category").val() == "") {
        $("#category").addClass("require-input");
        $(".invalid-category").css("display", "block");
        return false;
    }
    return true;
}

$("#submitCategory").submit(function(e) {
    e.preventDefault();
    var formData = JSON.stringify({
        category: $("#category").val()
    });
    if (validate()) {
        $.ajax({
            url: api + "api-pawn-shop/add-category.php",
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
                        text: "บันทึกข้อมูลหมวดหมู่เรียบร้อย",
                        icon: "success"
                    }).then(function() {
                        window.location.href = "category.php";
                    });
                } else {
                    swal({
                        title: "ผิดพลาด",
                        text: "บันทึกข้อมูลหมวดหมู่ไม่สำเร็จ",
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
$(document).ready(function() {
    var categoryId = getUrlParameter("categoryId");
    var categoryName = getUrlParameter("categoryName");

    $("#categoryId").val(categoryId);
    $("#category").val(categoryName);
    $("#categoryName").append(categoryName);

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
        categoryId: $("#categoryId").val(),
        category: $("#category").val()
    });
    if (validate()) {
        $.ajax({
            url: api + "api-pawn-shop/update-category.php",
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
                swal({
                    title: "ผิดพลาด",
                    text: "บันทึกข้อมูลหมวดหมู่ไม่สำเร็จ",
                    icon: "error"
                });
            }
        });
    }
});

$("#btnDelete").click(function() {
    swal({
        title: "ยืนยันลบข้อมูลหมวดหมู่",
        text: "คุณต้องการลบข้อมูล "+ $("#categoryName").text() +" ใช่หรือไม่?",
        icon: "warning",
        buttons: true,
        dangerMode: true,
        }).then((willDelete) => {
            if (willDelete) {
                var categoryId = $("#categoryId").val()
                var params = "id=" + categoryId;
                $.ajax({
                    url: api + "api-pawn-shop/delete-category.php?" + params,
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
                                text: "ลบข้อมูลหมวดหมู่เรียบร้อย",
                                icon: "success"
                            }).then(function() {
                                window.location.href = "category.php"
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
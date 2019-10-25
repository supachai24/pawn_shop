$(document).ready(function() {
    $("#formLogin").on('submit', function(e) {
        var formData = new FormData(this);
        e.preventDefault();
        $.ajax({
            url: api + 'api-pawn-shop/post-login.php',
            method: 'POST',
            processData: false,
            contentType: false,
            data: formData,
            dataType: 'json',
            success: function(data) {
                console.log(data);
                var myData = data;
                myData = myData.status.code;
                if (myData == 0) {
                    window.location.href="../pages/index.php";
                }
            }, error: function(jqXHR) {
                console.log("Error", jqXHR);
                if ($("#username").val() != "" && $("#password").val() != "") {
                    swal({
                        title: "ผิดพลาด",
                        text: "ชื่อผู้ใช้หรือรหัสผู้ใช้ไม่ถูกต้อง",
                        icon: "error"
                    });
                }
            }            
        });
    });
});
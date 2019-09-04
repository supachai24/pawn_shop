$(document).ready(function() {
    $.ajax({
        url: api + "api-pawn-shop/get-category.php",
        method: "GET",
        processData: false,
        contentType: false,
        dataType: "json",
        success: function(data) {
            console.log(data);
            var res = data;
            res.data.forEach(function(element) {
                $("#category").append(
                    "<option value="+ element.CategoryID +">"+ element.CategoryName +"</option>"
                );
            });
        },
        error: function(jqXHR) {
            console.log(jqXHR);
        }
    });

    $("#citizenId").mask('0-0000-00000-00-0');
    $("#phone").mask('000-000-0000');

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
});

function nextTab(e) {
    $(e).next().find('a[data-toggle="tab"]').click();
}

$(".next-step").click(function(e) {
    if (e.currentTarget.hash == "#step2") {
        // if (validateStepOne()) {
            $("#step1").css('display', 'none');
            $("#step2").css('display', 'block');
            $("#step3").css('display', 'none');
            $(".step1").removeClass('wizard-step-active');
            $(".step2").addClass('wizard-step-active');
            $(".step3").removeClass('wizard-step-active');
        // }
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
    if ($("#name").val() == "") {
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
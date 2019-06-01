function nextTab(e) {
    $(e).next().find('a[data-toggle="tab"]').click();
}

$(".next-step").click(function(e) {
    if ($("#step2")) {
        $("#step1").css('display', 'none');
        $("#step2").css('display', 'block');
        $(".step1").removeClass('wizard-step-active');
        $(".step2").addClass('wizard-step-active');
    } else if ($("#step3")) {
        $("#step1").css('display', 'none');
        $("#step2").css('display', 'none');
        $("#step3").css('display', 'block');
    }
});

$(".prev-step").click(function(e) {
    if ($("#step1")) {
        $("#step1").css('display', 'block');
        $("#step2").css('display', 'none');
        $(".step1").addClass('wizard-step-active');
        $(".step2").removeClass('wizard-step-active');
    }
});
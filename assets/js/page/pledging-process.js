function nextTab(e) {
    $(e).next().find('a[data-toggle="tab"]').click();
}

$(".next-step").click(function(e) {
    if (e.currentTarget.hash == "#step2") {
        $("#step1").css('display', 'none');
        $("#step2").css('display', 'block');
        $("#step3").css('display', 'none');
        $(".step1").removeClass('wizard-step-active');
        $(".step2").addClass('wizard-step-active');
        $(".step3").removeClass('wizard-step-active');
    } else if (e.currentTarget.hash == "#step3") {
        $("#step1").css('display', 'none');
        $("#step2").css('display', 'none');
        $("#step3").css('display', 'block');
        $(".step1").removeClass('wizard-step-active');
        $(".step2").removeClass('wizard-step-active');
        $(".step3").addClass('wizard-step-active');
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
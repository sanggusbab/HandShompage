$('#buttonLogoCheckbox').click(function () {
    console.log($('buttonLogoCheckbox'))
    if ($('#buttonLogoCheckbox').is(":checked") == true) {
        console.log("hello World!011");
        $('#contentsWrapper').slideDown(1000);
        $('.contentsContainer').css('background', 'rgba(0, 0, 0, 0)');
    } else {
        console.log("hello World!022");
        $('#contentsWrapper').slideUp(1000);
        console.log("hell");
        $('.contentsContainer').css('background', 'rgba(0, 0, 0, 0.8)');
    }
});
$(document).ready(function () {
    $(window).on('load', function (event) {
        var minWidth = 300; //resolução minima
        var element = ".autoHeight";
        var WindowWidth = $(window).width();
        if (WindowWidth >= minWidth) {
            $(element).autoHeight();
        }
        autoResize(element, minWidth);
    });
});

/* MENU RESPONSIVO */
$('#toggle-menu').click(function() {
    $(this).toggleClass('active');
    $('#overlay_drop').toggleClass('open');
});

$(".overlay ul li a").click(function() {
    $("#toggle-menu").removeClass("active");
    $("#overlay_drop").removeClass("open");
});

/* FANCYBOX */
$(document).ready(function () {
    $(".fancybox").fancybox();
});

// MAKS
$(function () {
    $(".mask-date").mask('00/00/0000');
    $(".mask-datetime").mask('00/00/0000 00:00');
    $(".mask-month").mask('00/0000', { reverse: true });
    $(".mask-cpf").mask('000.000.000-00', { reverse: true });
    $(".mask-card").mask('0000  0000  0000  0000', { reverse: true });
    $(".mask-money").mask('000.000.000.000.000,00', { reverse: true, placeholder: "0,00" });
    $(".mask-cnpj").mask('00.000.000/0000-00');
    $(".mask-cep").mask('00.000-000');
    $(".mask-tel").mask('(00) 00000-0000');
});

// FORM LOADING AND SCROLL
$(document).ready(function(){
    $('form').submit(function(){
        $('.form_loading').show();
    });

    if($('.scrollToForm').length > 0){
        if($('.ajax_response').length > 0){
            $('html, body').animate({
                scrollTop: $('.scrollToForm').offset().top - 150
            }, 1000);
        }
    }
});
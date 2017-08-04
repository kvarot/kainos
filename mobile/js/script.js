
$(document).ready(function () {

    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.change').hide();
            $('.menukev').hide();
            $('.change').delay(1000).fadeIn("slow");
            $('.menukev').delay(1000).fadeIn("slow");
        } else {
            $('.change').fadeOut("slow");
            $('.menukev').fadeOut("slow");
        }

    });
});

$('#changecolor').on('click', function () {
    $('.yellow-background').toggleClass("blue-background");
    $('.h2_home_yellow').toggleClass("h2_home_blue");
    $('.section-heading-yellow').toggleClass("section-heading-blue");
});
(function(){
    var burger = document.querySelector('.burger-container'),
        header = document.querySelector('.header');
        menuoff = document.querySelector('.menuoff');
    burger.onclick = function() {
        header.classList.toggle('menu-opened');
        menuoff.classList.toggle('menuon')
    }
}());
$(".linkmenu").click(function(e) {
    $(".header").removeClass("menu-opened");
    $(".menuoff").removeClass("menuon");
});
if ($('#burger').length) {
    var scrollTrigger = 100, // px
        backToTop = function () {
            var scrollTop = $(window).scrollTop();
            if (scrollTop > scrollTrigger) {
                $('#burger').addClass('show');
            } else {
                $('#burger').removeClass('show');
            }
        };
    backToTop();
    $(window).on('scroll', function () {
        backToTop();
    });
    $('#burger').on('click', function (e) {
        e.preventDefault();
        $('html,body').animate({
            scrollTop: 0
        }, 700);
    });
}
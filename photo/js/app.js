window.addEventListener("DOMContentLoaded", function () {

    $('.carousel_wrapp').slick({
        speed: 1000,
        prevArrow: '<button type="button" class="slick-prev"><i class="fa fa-arrow-left" aria-hidden="true"></i></button>',
        nextArrow: '<button type="button" class="slick-next"><i class="fa fa-arrow-right" aria-hidden="true"></i></button>',
        responsive: [{
            breakpoint: 1000,
            settings: {
                dots: false,
                arrows: true
            }
        }]
    });






});
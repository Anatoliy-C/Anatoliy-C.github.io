window.addEventListener("DOMContentLoaded", function () {

const   btn = document.querySelector('.head-btn'),
        overlay = document.querySelector('.popup-form'),
        close = document.querySelector('.form-close');

    btn.addEventListener('click', function () {
        overlay.style.display = 'block';
    });

    close.addEventListener('click', function () {
        overlay.style.display = 'none';
    });


const   hbtn = document.querySelector('.header-btn'),
        form = document.querySelector('.payment-form'),
        paymentclose = document.querySelector('.payment-form-close');

    hbtn.addEventListener('click', function () {
        form.style.display = 'block';
    });

    paymentclose.addEventListener('click', function () {
        form.style.display = 'none';
    });


const   burger = document.querySelector('.fa-bars'),
        BurgerClose = document.querySelector('.fa-times'),
        menu = document.querySelector('.head-nav');

        burger.addEventListener('click', function () {
            menu.style.display = 'block';
            burger.style.display = 'none';
            BurgerClose.style.display = 'block';
        });

        BurgerClose.addEventListener('click', function () {
            menu.style.display = 'none';
            burger.style.display = 'block';
            BurgerClose.style.display = 'none';
        });


        $(".reviews-items").slick({
            speed: 1e3,
            prevArrow: '<button type="button" class="slick-prev"><i class="fa fa-angle-left" aria-hidden="true"></i></button>',
            nextArrow: '<button type="button" class="slick-next"><i class="fa fa-angle-right" aria-hidden="true"></i></button>',
            responsive: [{
                breakpoint: 1e3,
                settings: {
                    dots: !1,
                    arrows: !0
                }
            }]
        })

        $(window).scroll(function () {
            if ($(this).scrollTop() > 1200) {
                $('.up').fadeIn();
            } else {
                $('.up').fadeOut();
            }
        });

        $("a[href^='#']").click(function () {
            var _href = $(this).attr("href");
            $("html, body").animate({
                scrollTop: $(_href).offset().top + "px"
            });
            return false;
        });


        $('.price-btn, .footer-btn').on('click', function(){
            $('.popup-form').fadeIn('slow');
        });

});
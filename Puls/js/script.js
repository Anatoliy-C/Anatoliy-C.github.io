$(document).ready(function () {
    $('.carousel_wrapp').slick({
        speed: 1200,
        prevArrow: '<button type="button" class="slick-prev"><img src="img/chevron-left-solid.png"></button>',
        nextArrow: '<button type="button" class="slick-next"><img src="img/chevron-right-solid.png" </button>',
        responsive: [{
            breakpoint: 1100,
            settings: {
                dots: true,
                arrows: false
            }
        }]
    });
    $('ul.catalog_mnu_items').on('click', 'li:not(.catalog_mnu_item_active)', function () {
        $(this)
            .addClass('catalog_mnu_item_active').siblings().removeClass('catalog_mnu_item_active')
            .closest('div.container').find('div.catalog_content').removeClass('catalog_content_active')
            .eq($(this).index()).addClass('catalog_content_active');
    });
    function toggleSlide(item) {
        $(item).each(function(i) {
            $(this).on('click', function(e) {
                e.preventDefault();
                $('.catalog_content_face').eq(i).toggleClass('catalog_content_face_active');
                $('.catalog_content_description').eq(i).toggleClass('catalog_content_description_active');
            });
        });
    };

    toggleSlide('.catalog_content_linc-go');
    toggleSlide('.catalog_content_link-back');


    $('[data-modal=consultation]').on('click', function(){
        $('.overley, #consultation').fadeIn('slow');
    });

    $('.modal_close').on('click', function(){
        $('.overley, #consultation, #order, #thanks').fadeOut('slow');
    });

    $('.catalog_content_btn').on('click', function(){
        $('.overley, #order').fadeIn('slow');
    });
    $('.catalog_content_btn').each(function(i){
        $(this).on('click', function(){
            $('#order .modal_descr').text($('.catalog_content_subtitle').eq(i).text());
            $('.overlay, #order').fadeIn('slow');
        });
    });


    $('form').submit(function(e){
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "smart.php",
            data: $(this).serialize()
        }).done(function(){
            $(this).find("input").val("");

            $('#consultation, #order').fadeOut();
            $('.overlay, #thanks').fadeIn('slow');

            $('form').trigger('reset');
        });
        return false;
    });
    new WOW().init();
});
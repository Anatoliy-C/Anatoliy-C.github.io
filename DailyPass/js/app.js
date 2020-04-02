window.addEventListener("DOMContentLoaded", function () {




    $('[data-modal="consultation"]').on('click', function () {
        $('.overley-form, #consultation').fadeIn('slow');
    });

    $('.modal_close').on('click', function () {
        $('.overley-form, #consultation').fadeOut('slow');
    });





    $('.defolt_btn').on('click', function(){
        $('.form_box, #thanks').fadeOut('slow');
    });


    $('.defolt_btn').on('click', function(){
        $('.modal, #thanks').fadeIn('slow');
    });

    // E-mail Ajax Send
    // $("form").submit(function () { //Change
    //     var th = $(this);
    //     $.ajax({
    //         type: "POST",
    //         url: "mail.php", //Change
    //         data: th.serialize()
    //     }).done(function () {
    //         alert("Thank you!");
    //         setTimeout(function () {
    //             // Done Functions
    //             th.trigger("reset");
    //         }, 1000);
    //     });
    //     return false;
    // });




});
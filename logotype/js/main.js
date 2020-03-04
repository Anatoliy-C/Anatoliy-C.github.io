$(document).ready(function() {

	//E-mail Ajax Send
	$("form").submit(function() { //Change
		var th = $(this);
		$.ajax({
			type: "POST",
			url: "mail.php", //Change
			data: th.serialize()
		}).done(function() {
			alert("Спасибо за заявку, скоро мы с вами свяжимся");
			setTimeout(function() {
				// Done Functions
				th.trigger("reset");
			}, 1000);
		});
		return false;
	});


$(function(){

$('.slider_inner, .news_slider-inner').slick({
    nextArrow: '<botton type="button" class="slinck-btn slinck-next"></button>',
    prevArrow: '<botton type="button" class="slinck-btn slinck-prev"></button>',
    infinite: false
});

$('select').styler();


$('.headre_btn-mnu').on('click', function(){
    $('.mnu ul').slideToggle();
});



});
});
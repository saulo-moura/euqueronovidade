$(document).ready(function() {
	$(".fancybox").fancybox({
		openEffect	: 'none',
		closeEffect	: 'none'
	});
});

$('#myCarousel-2').carousel({
  interval: 10000
})

$('.carousel .item-2').each(function(){
  var next = $(this).next();
  if (!next.length) {
    next = $(this).siblings(':first');
  }
  next.children(':first-child').clone().appendTo($(this));
  
  if (next.next().length>0) {
    next.next().children(':first-child').clone().appendTo($(this));
  }
  else {
  	$(this).siblings(':first').children(':first-child').clone().appendTo($(this));
  }
});

$(".nav li a").click(function() {
	var target = $(this).attr('data-target');
    $('html, body').animate({
        scrollTop: $(target).offset().top
    }, 1000);
});

$("#menu ul li a").click(function() {
	var target = $(this).attr('data-target');
    $('html, body').animate({
        scrollTop: $(target).offset().top
    }, 1000);
});
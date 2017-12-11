// Changing navigation background-color when scroll

$(document).ready(function(){
  $(window).scroll(function(){
  	var scroll = $(window).scrollTop();
	  if (scroll > 430) {
	    $(".navbar").css("background" , "#323334");
	  }

	  else{
		  $(".navbar").css("background" , "transparent");  	
	  }
  })

  if ($('#back-to-top').length) {
    var scrollTrigger = 400, // px
        backToTop = function () {
            var scrollTop = $(window).scrollTop();
            if (scrollTop > scrollTrigger) {
                $('#back-to-top').addClass('show');
            } else {
                $('#back-to-top').removeClass('show');
            }
        };
    backToTop();
    $(window).on('scroll', function () {
        backToTop();
    });
    $('#back-to-top').on('click', function (e) {
        e.preventDefault();
        $('html,body').animate({
            scrollTop: 0
        }, 700);
    });
}
})


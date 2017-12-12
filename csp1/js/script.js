$(document).ready(function(){
  /* Changing navigation background-color when scroll  */
  $(window).scroll(function(){
  	var scroll = $(window).scrollTop();
	  if (scroll > 430) {
	    $(".pintoMain").css("background" , "#323334");
	  }

	  else{
		  $(".pintoMain").css("background" , "transparent");  	
	  }
  })

  /* Back top top button when scroll */
  if ($('#back-to-top').length) {
    var scrollTrigger = 400,
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


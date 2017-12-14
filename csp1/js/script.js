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

  /* Back to top button when scroll */
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

  /* Remove the FOCUS on Modal in footer after clicking */
  $('#tooltip').tooltip();

  $('#myModal').on('show.bs.modal', function () {
      $('#tooltip').blur();
    
  });

  $('#myModal').on('hidden.bs.modal', function (e) {
      console.log(e);
      $('#tooltip').tooltip('blur');
  });  


  /* Hide and Show tabs in Gallery Page */
  $('#tab-1').addClass('tabActive');
  $('#tab-1').click(function(){
    $('#tab-1-info').show();
    $('#tab-2-info').hide();
    $('#tab-3-info').hide();
    $('#tab-4-info').hide();
    $('#tab-5-info').hide();
    $('#tab-6-info').hide();
    $('#tab-1').addClass('tabActive');
    $('#tab-2').removeClass('tabActive');
    $('#tab-3').removeClass('tabActive');
    $('#tab-4').removeClass('tabActive');
    $('#tab-5').removeClass('tabActive');
    $('#tab-6').removeClass('tabActive');
  });
  $('#tab-2').click(function(){
    $('#tab-2-info').show();
    $('#tab-1-info').hide();
    $('#tab-3-info').hide();
    $('#tab-4-info').hide();
    $('#tab-5-info').hide();
    $('#tab-6-info').hide();
    $('#tab-2').addClass('tabActive');
    $('#tab-1').removeClass('tabActive');
    $('#tab-3').removeClass('tabActive');
    $('#tab-4').removeClass('tabActive');
    $('#tab-5').removeClass('tabActive');
    $('#tab-6').removeClass('tabActive');
  });
  $('#tab-3').click(function(){
    $('#tab-3-info').show();
    $('#tab-1-info').hide();
    $('#tab-2-info').hide();
    $('#tab-4-info').hide();
    $('#tab-5-info').hide();
    $('#tab-6-info').hide();
    $('#tab-3').addClass('tabActive');
    $('#tab-1').removeClass('tabActive');
    $('#tab-2').removeClass('tabActive');
    $('#tab-4').removeClass('tabActive');
    $('#tab-5').removeClass('tabActive');
    $('#tab-6').removeClass('tabActive');
  });
  $('#tab-4').click(function(){
    $('#tab-4-info').show();
    $('#tab-1-info').hide();
    $('#tab-2-info').hide();
    $('#tab-3-info').hide();
    $('#tab-5-info').hide();
    $('#tab-6-info').hide();
    $('#tab-4').addClass('tabActive');
    $('#tab-1').removeClass('tabActive');
    $('#tab-2').removeClass('tabActive');
    $('#tab-3').removeClass('tabActive');
    $('#tab-5').removeClass('tabActive');
    $('#tab-6').removeClass('tabActive');
  });
  $('#tab-5').click(function(){
    $('#tab-5-info').show();
    $('#tab-1-info').hide();
    $('#tab-2-info').hide();
    $('#tab-3-info').hide();
    $('#tab-4-info').hide();
    $('#tab-6-info').hide();
    $('#tab-5').addClass('tabActive');
    $('#tab-1').removeClass('tabActive');
    $('#tab-2').removeClass('tabActive');
    $('#tab-3').removeClass('tabActive');
    $('#tab-4').removeClass('tabActive');
    $('#tab-6').removeClass('tabActive');
  });
  $('#tab-6').click(function(){
    $('#tab-6-info').show();
    $('#tab-1-info').hide();
    $('#tab-2-info').hide();
    $('#tab-3-info').hide();
    $('#tab-4-info').hide();
    $('#tab-5-info').hide();
    $('#tab-6').addClass('tabActive');
    $('#tab-1').removeClass('tabActive');
    $('#tab-2').removeClass('tabActive');
    $('#tab-3').removeClass('tabActive');
    $('#tab-4').removeClass('tabActive');
    $('#tab-5').removeClass('tabActive');
  });

  /* Show image info in gallery when hover */
   $('.gallery-item').hover( function() {
        $(this).find('.image-info').fadeOut(100);
    }, function() {
        $(this).find('.image-info').fadeIn(300);
    });
})


$(document).ready(function(){
	// Back to top button
	if ($('#back-to-top').length) {
	    var scrollTrigger = 100, // px
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
	} // End of back to top button



	//Slick Slider (Brand Logo Slider)
	$('.brands').slick({
	  slidesToShow: 5,
	  slidesToScroll: 1,
	  autoplay: true,
	  autoplaySpeed: 2000,
	  arrows: false,
      dots: false,
      pauseOnHover: false,
	  responsive: [{
        breakpoint: 768,
        settings: {
            slidesToShow: 4
        }
      }, {
        breakpoint: 520,
        settings: {
            slidesToShow: 3
        }
      }]
	}); // End of Slick Slider (Brand Logo Slider)



})




var validate = document.getElementById('not-match');
var registerButton = document.getElementById('register');
var pw = document.getElementById('pw'), cpw = document.getElementById('cpw');


function confirmPassword(){
  if (pw.value != cpw.value && pw.value.length != cpw.value.length) {	
  	validate.innerText = "Password not match";
 	registerButton.classList.add("disabled");	
 	validate.classList.add("password-not-match");	
 	validate.classList.remove("password-match");
  } else if (pw.value == cpw.value && pw.value.length == cpw.value.length) {
 	registerButton.classList.remove("disabled");
  	validate.innerText = "Password Match";
 	validate.classList.remove("password-not-match");	
 	validate.classList.add("password-match");	
  }	 
document.getElementById("cpw").addEventListener('keyup', confirmPassword);
}


//Menu Open in Mobile
function openMenu() {
	document.getElementById('mySidemenu').style.transform = "translate(0, 0)";
	document.body.style.overflow = "hidden"; // Disabled scroll for body when sidenav is open
}


//Menu Close in Mobile
function closeMenu() {
	document.getElementById('mySidemenu').style.transform = "translate(-100%, 0)";
	document.body.style.overflow = "scroll";
}



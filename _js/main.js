$( document ).ready(function() {

	$('.menu-toggle').click(function(){
		$(this).toggleClass('active');
		$(this).toggleClass('inactive');
		$('.nav').toggleClass('active');
		$('.nav').toggleClass('inactive');
	});

	$('.slider').slick({
        arrows: true,
        autoplay: false,
        centerMode: true,
        centerPadding: '120px',
        infinite: true,
        slidesToShow: 3,
  		slidesToScroll: 1,
  		cssEase: "ease",
  		autoplaySpeed: 1000,
  		pauseOnFocus: false,
  		responsive: [
		     {
		      breakpoint: 1200,
		      settings: {
		      	centerMode: true,
        		centerPadding: '120px',
		        slidesToShow: 2,
		        slidesToScroll: 1
		      }
		    },
		    {
		      breakpoint: 700,
		      settings: {
		      	centerMode: true,
        		centerPadding: '60px',
		        slidesToShow: 1,
		        slidesToScroll: 1
		      }
		    }
		    // You can unslick at a given breakpoint now by adding:
		    // settings: "unslick"
		    // instead of a settings object
		  ]
    });

     $('.testimonials .wrapper').slick({
        arrows: true,
        autoplay: true,
        infinite: true,
        slidesToShow: 3,
  		slidesToScroll: 1,
  		cssEase: "linear",
  		autoplaySpeed: 0,
  		speed: 1000,
  		pauseOnHover: true,
  		responsive: [
		    {
		      breakpoint: 992,
		      settings: {
		      	dots: true,
		      	autoplay: true,
		      	autoplaySpeed: 1000,
		        slidesToShow: 1,
		        slidesToScroll: 1
		      }
		    }
		    // You can unslick at a given breakpoint now by adding:
		    // settings: "unslick"
		    // instead of a settings object
		  ]
    });

     $('.awards .container').slick({
        arrows: true,
        autoplay: false,
        infinite: true,
        slidesToShow: 4,
  		slidesToScroll: 1,
  		cssEase: "linear",
  		speed: 1000,
  		pauseOnHover: true,
  		responsive: [
		    {
		      breakpoint: 992,
		      settings: {
		      	dots: true,
		      	autoplay: false,
		        slidesToShow: 1,
		        slidesToScroll: 1
		      }
		    }
		    // You can unslick at a given breakpoint now by adding:
		    // settings: "unslick"
		    // instead of a settings object
		  ]
    });

    $('.nav .dropdown').hover(function(e){

    	if($( window ).width() < 1200) {
    		if ($(this).hasClass('open')) {
    			$(this).removeClass('open');
    		} else {
    			$(this).addClass('open');
    			e.preventDefault(); 
    		}
    		
    	}
    });


});
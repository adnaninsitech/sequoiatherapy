$(document).ready(function(){

$('.rslider').slick({
  infinite: true,
  rows: 4,
  slidesToShow: 1,
  slidesToScroll: 1,
     autoplay: true,
  autoplaySpeed: 4000,
  dots: false,
  arrows: true,
 nextArrow: $('.review-left'),
   prevArrow: $('.review-right'),
  });
	
	$(".faq-main ul li a").click(function(){
	    var id = $(this).attr("rel");
	    
	    if($(this).hasClass( "active" )){
	        
	        $("#ans"+id).slideUp();
	        $(this).removeClass( "active" );
	        $(".fa"+id).removeClass("fa-angle-right").addClass("fa-angle-down");
	        
	   }else{
	       
	       $("#ans"+id).slideDown();
	        $(this).addClass( "active" );
	        $(".fa"+id).removeClass("fa-angle-down").addClass("fa-angle-right");
	       
	   }
	    
	 })

$(".part-left").on({
    mouseenter: function () {
          $(".part-left img").attr("src" , "https://insitechstaging.com/demo/sequoiatherapy/wp-content/themes/sequoia/images/lr.png");
    },
    mouseleave: function () {
            $(".part-left img").attr("src" , "https://insitechstaging.com/demo/sequoiatherapy/wp-content/themes/sequoia/images/la.png");
    }
});

$(".part-right").on({
    mouseenter: function () {
          $(".part-right img").attr("src" , "https://insitechstaging.com/demo/sequoiatherapy/wp-content/themes/sequoia/images/hr.png");
    },
    mouseleave: function () {
            $(".part-right img").attr("src" , "https://insitechstaging.com/demo/sequoiatherapy/wp-content/themes/sequoia/images/ra.png");
    }
});
		
/*		  $('#mainslider').camera({
    
    loader: 'none',
    height: '45%',
    pagination: false,
    playPause: false,
    thumbnails: false,
    autoAdvance: true,
    navigation: false,
    hover: false,
    opacityOnGrid: false,
    overlayer: true,
    fx: 'random'
  });*/

   wow = new WOW(
    {
    animateClass: 'animated',
    offset:       100,
    callback:     function(box) {
      console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
    }
    }
  );
  
 wow.init();



$('#mainslider').slick({
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
     autoplay: true,
  autoplaySpeed: 5000,
  dots: false,
  arrows: false,
  fade:true,
  speed:5000
 
  });









$('.test-slider').slick({
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
     autoplay: true,
  autoplaySpeed: 2000,
  dots: false,
  arrows: true,
 nextArrow: $('.part-left'),
   prevArrow: $('.part-right'),
   responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 2,
         dots: false,
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
  });



});


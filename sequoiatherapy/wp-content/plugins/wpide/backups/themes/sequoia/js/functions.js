	$(document).ready(function(){

		
		  $('#mainslider').camera({
    
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
  });

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
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
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


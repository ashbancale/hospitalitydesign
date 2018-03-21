// JavaScript Document
$(window).load(function() {

  $('#carousel').flexslider({
    animation: "slide",
    controlNav: false,
    directionNav:false,
    animationLoop: false,
    slideshow: false,
    itemWidth: 98,
    itemMargin: 5,
    asNavFor: '#slider'
  });
   
  $('#slider').flexslider({
    animation: "slide",
    controlNav: false,
    directionNav:false,
    animationLoop: false,
    slideshow: false,
    start: function(slider){
      $('body').removeClass('loading');
      $('.total-slides').text(slider.count);
        $('.current-slide').text(slider.currentSlide+1);
    },
      after: function(slider) {
        $('.current-slide').text(slider.currentSlide+1);
      },
    sync: "#carousel"
  });
});
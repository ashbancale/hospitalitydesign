/*--------------------------------------------------- Carousels ----*/
$(document).ready (function () {

    

    $('.flexslider-main').flexslider({
        
        startAt: 0,
        
        
        animation: "fade",
        slideshow: true,
        prevText: "",      
        nextText: "",
        start: function(slider){
          $('body').removeClass('loading');
        }
   });
});
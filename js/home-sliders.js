// JavaScript Document
$(window).load(function(){

      $('.flexslider-main').flexslider({
        animation: "slide",
        slideshow: true,
        prevText: "",      
        nextText: "",
        useCSS : false,  
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
$(window).load(function(){
      $('.flexslider-products').flexslider({
        animation: "slide",
        animationSpeed: 450, 
        controlNav: "thumbnails",
        directionNav: false,
        slideshow: false,
        useCSS : false,
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
    
$(window).load(function(){
      $('.flexslider-projects').flexslider({
        animation: "slide",
        controlNav: "thumbnails",
        directionNav: false,
        slideshow: false,
        useCSS : false,
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
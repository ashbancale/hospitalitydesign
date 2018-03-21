// JavaScript Document
$(window).load(function() {
    
     var curSlide;
  //set some variables for calculating the hash
    var index = 0, hash = window.location.hash;
    //via malsup (Cycle plugin), calculates the hash value
   // Get the Index for the Currently Open Slide in Smart Edit
    var CurrentLiGallery;
    CurrentLiGallery = $(".slide-open-gallery");
    CurrentIndexGallery = $(".slide-open-gallery").attr('number');
  
    
    if (hash) {
        index = /\d+/.exec(hash)[0];
        index = (parseInt(index) || 1) - 1;
    } 
    if (CurrentIndexGallery)  {
        index = parseInt(CurrentIndexGallery);
        $('.current-slide').text(parseInt(CurrentIndexGallery));
    }
    if (!CurrentIndexGallery)
        CurrentIndexGallery = 0;
    //alert(CurrentIndexGallery);
    
  $('#carousel').flexslider({
    animation: "slide",
    controlNav: false,
    directionNav:true,
    prevText: "",      
    nextText: "",  
    animationLoop: false,
    slideshow: false,
    itemWidth: 98,
    itemMargin: 5,
    asNavFor: '#slider'
  });
   
  $('#slider').flexslider({
    animation: "fade",
    controlNav: false,
    directionNav:true,
    animationLoop: false,
    slideshow: false,
    prevText: "",      
    nextText: "",  
    start: function(slider){
      $('body').removeClass('loading');
      $('.total-slides').text(slider.count);
        $('.current-slide').text(slider.currentSlide+1);
    },
    startAt: CurrentIndexGallery, //now foo.html#3 will load item 3
      after: function(slider) {
        $('.current-slide').text(slider.currentSlide+1);
        window.location.hash = parseInt(slider.currentSlide)+parseInt(1);

      $(".flex-direction-nav li a").click(function(){
        /* Added 7-21-2014 */
        googletag.cmd.push(function () {
                googletag.pubads().refresh();    
                return false;                
        }); 
        /* End 7-21-2014 */
      })

      },
    sync: "#carousel"
  });
});
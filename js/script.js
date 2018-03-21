/*--------------------------------------------------- Load More News ----*/
$(document).ready(function() {
    // Handler for .ready() called.
var currentIndex = 20;
var numMore = 20;
var totalItems = $("article.news-item").length;
$("article.news-item").hide();
$("article.news-item").slice(0,20).show();
clickButton();
function clickButton() {
    var currentLength = $("article.news-item:visible").length;
    if (currentLength >= totalItems) {
        $("#loadMore").hide();            
    } else {
        $("#loadMore").show();   
    }
    
}
$("#loadMore").click(function (e) { 
    e.preventDefault();
    $("article.news-item").slice(currentIndex, currentIndex + 20).show();
    currentIndex += 20;
    clickButton();
});
});
/*--------------------------------------------------- Load More Projects ----*/
$(document).ready(function() {
    // Handler for .ready() called.
var currentIndex = 12;
var numMore = 12;
var totalProj = $("div.project").length;
$("div.project").hide();
$("div.project").slice(0,12).show();
clickButton();
function clickButton() {
    var currentLength = $("div.project:visible").length;
    if (currentLength >= totalProj) {
        $("#loadMoreProj").hide();            
    } else {
        $("#loadMoreProj").show();   
    }
    
}
$("#loadMoreProj").click(function (e) { 
    e.preventDefault();
    $("div.project").slice(currentIndex, currentIndex + 12).show();
    currentIndex += 12;
    clickButton();
});
});
/*--------------------------------------------------- Load More Products ----*/
$(document).ready(function() {
    // Handler for .ready() called.
var currentIndex = 21;
var numMore = 21;
var totalProj = $("p.prod").length;
$("p.prod").hide();
$("p.prod").slice(0,21).show();
clickButton();
function clickButton() {
    var currentLength = $("p.prod:visible").length;
    if (currentLength >= totalProj) {
        $("#loadMoreProd").hide();            
    } else {
        $("#loadMoreProd").show();   
    }
    
}
$("#loadMoreProd").click(function (e) { 
    e.preventDefault();
    $("p.prod").slice(currentIndex, currentIndex + 21).show();
    currentIndex += 21;
    clickButton();
});
});
/*--------------------------------------------------- Load More People ----*/
$(document).ready(function() {
    // Handler for .ready() called.
var currentIndex = 12;
var numMore = 12;
var totalPeople = $("div.people-item").length;
$("div.people-item").hide();
$("div.people-item").slice(0,12).show();
clickButton();
function clickButton() {
    var currentLength = $("div.people-item:visible").length;
    if (currentLength >= totalPeople) {
        $("#loadMorePeople").hide();            
    } else {
        $("#loadMorePeople").show();   
    }
    
}
$("#loadMorePeople").click(function (e) { 
    e.preventDefault();
    $("div.people-item").slice(currentIndex, currentIndex + 12).show();
    currentIndex += 12;
    clickButton();
});
});
/*--------------------------------------------------- Load More Gallery ----*/
$(document).ready(function() {
    // Handler for .ready() called.
var currentIndex = 20;
var numMore = 20;
var totalGallery = $("div.gallery-item").length;
$("div.gallery-item").hide();
$("div.gallery-item").slice(0,20).show();
clickButton();
function clickButton() {
    var currentLength = $("div.gallery-item:visible").length;
    if (currentLength >= totalGallery) {
        $("#loadMoreGallery").hide();            
    } else {
        $("#loadMoreGallery").show();   
    }
    
}
$("#loadMoreGallery").click(function (e) { 
    e.preventDefault();
    $("div.gallery-item").slice(currentIndex, currentIndex + 20).show();
    currentIndex += 20;
    clickButton();
});
});
/*--------------------------------------------------- FitVids ----*/
$(document).ready(function(){
    // Target your .container, .wrapper, .post, etc.
    $("#content").fitVids();
  });
/* -------------------------------------------------- Mobile Nav Toggles ---- */
//Toggles network nav open and close on click
$(document).ready (function () {
    $('nav#network h5 a').click(function(){
        if ($('nav#network ul').hasClass('show')) {
            $('nav#network ul').removeClass('show');
            $('nav#network h5 a').removeClass('active');
            $('nav#network h5').removeClass('active');
        } else {
            $('nav#network ul').addClass('show');
            $('nav#network a').addClass('active');
            $('nav#network h5').addClass('active');
        }
        if ($('nav#main ul').hasClass('nav-show')) {
            $('nav#main ul').removeClass('nav-show')
            $('header > h4 a').removeClass('toggle');
            $('header > h4').removeClass('toggle');
        }
    });
});
//Toggles main nav open and close on click
$(document).ready (function () {
    $('header > h4 a').click(function(){
        if ($('nav#main ul').hasClass('nav-show')) {
            $('nav#main ul').removeClass('nav-show');
            $('header > h4 a').removeClass('toggle');
            $('header > h4').removeClass('toggle');
        } else {
            $('nav#main ul').addClass('nav-show');
            $('nav#main a').addClass('toggle');
            $('header > h4').addClass('toggle');
            $('.search form').removeClass('show');
            $('.search h4 a').removeClass('active');
        }
        if ($('nav#network ul').hasClass('show')) {
            $('nav#network ul').removeClass('show')
        }
    });
});
//Toggles mobile sub nav open and close on click
$(document).ready (function () {
    $('nav#main ul li span a').click(function(){
        if ($(this).parent('span').parent('li').children('ul').hasClass('active')) {
            $(this).parent('span').parent('li').children('ul').removeClass('active');
        } else {
            $(this).parent('span').parent('li').children('ul').addClass('active');
        }
        
        if($(this).hasClass('sub-active') ){
            $(this).removeClass('sub-active');
        } else {
            $(this).addClass('sub-active');
        }
    });    
});
//Toggles search open and close on click
$(document).ready (function () {
    $('.search a').click(function(){
        if ($('.search form').hasClass('show')) {
            $('.search form').removeClass('show');
            $('.search h4 a').removeClass('active');
        } else {
            $('.search form').addClass('show');
            $('.search h4 a').addClass('active');
            $('nav#main ul').removeClass('nav-show');
            $('nav#main a').removeClass('toggle');
            $('header > h4').removeClass('toggle');
        }
    });
});

/* ------------------------------------------------- Nav Current Link ---- */
 $(function(){
   var url = window.location.href;
    url = url.substr(url.lastIndexOf("/") + 1);
    $("nav#main").find("a[href='" + url + "']").closest("li").addClass("active");
    
    $('li.active').parent().parent().addClass("active");
 });
 
 /* ----------------------------------------------- Flexslider CSS Chrome Hack ---- */
if (navigator.userAgent.toLowerCase().indexOf('chrome') > -1)
{
     var chromeCss = document.createElement("link");
     chromeCss.rel = "stylesheet";
     chromeCss.href = "http://www.hospitalitydesign.com/static/chrome-slider-fix.css";
     document.getElementsByTagName("head")[0].appendChild(chromeCss);
}
 
/*--------------------------------------------------- Navigation ----*/

$(document).ready(function() {
    var people = "<ul><li><a href='/people/interviews.shtml'>Interviews</a></li><li><a href='/people/on-the-move.shtml'>On the Move</a></li><li><a href='/people/video-interviews.shtml'>Video Interviews</a></li></ul>";
    var gallery ="<ul><li><a href='/galleries/projects.shtml'>Projects</a></li><li><a href='/galleries/events.shtml'>Events</a></li><li><a href='/galleries/products.shtml'>Products</a></li></ul>";
   
   var products ="<ul><li><a href='/products/accessories-art.shtml'>Accessories / Art</a></li>"
                   +       "<li><a href='/products/bath-spa.shtml'>Bath / Spa</a></li>"
                   +       "<li><a href='/products/beds-bedding.shtml'>Beds / Bedding</a></li>"
                   +       "<li><a href='/products/flooring.shtml'>Flooring</a></li>"
                   +       "<li><a href='/products/furniture.shtml'>Furniture</a></li>"
                   +       "<li><a href='/products/lighting.shtml'>Lighting</a></li>"
                   +       "<li><a href='/products/outdoor.shtml'>Outdoor</a></li>"
                   +       "<li><a href='/products/surfaces.shtml'>Surfaces</a></li>"
                   +       "<li><a href='/products/technology.shtml'>Technology</a></li>"
                   +       "<li><a href='/products/textiles.shtml'>Textiles</a></li>"
                   +       "<li><a href='/products/catalog-library.shtml'>Catalog Library</a></li>"
                   +     "</ul>";  

    /** featured links **/

    var featuredpeople;
    var featuredgallery;
    var featuredproducts;


    $.ajax({ type: "GET",   
         url: "http://www.hospitalitydesign.com/featured-people-section.shtml",   
         async: false,
         success : function(peopletext)
         {
         featuredpeople= peopletext;
         }
    });
    $.ajax({ type: "GET",   
         url: "http://www.hospitalitydesign.com/featured-gallery-section.shtml",   
         async: false,
         success : function(gallerytext)
         {
         featuredgallery= gallerytext;
         }
    });

    $.ajax({ type: "GET",   
         url: "http://www.hospitalitydesign.com/featured-product-section.shtml",   
         async: false,
         success : function(productstext)
         {
         featuredproducts= productstext;
         }
    });    


   
     $('nav#main ul li.News1').addClass("small-drop");
     $('nav#main ul li.Projects1').addClass("small-drop");
     $('nav#main ul li.Events1').addClass("small-drop");     
     $('nav#main ul li.Products1').addClass("big-drop");
     $('nav#main ul li.People1').addClass("big-drop");
     $('nav#main ul li.Galleries1').addClass("big-drop");                   
     $('nav#main ul li.Events1 div.nav-section').unwrap( "<div class='Events-drop'></div>" );          
     $('nav#main ul li.News1 div.nav-section').unwrap( "<div class='News-drop'></div>" ); 
     $('nav#main ul li.Projects1 div.nav-section').unwrap( "<div class='Projects-drop'></div>" );

     $('nav#main ul li.People1 div.People-drop').prepend(featuredpeople);          
     $('nav#main ul li.Galleries1 div.Galleries-drop').prepend(featuredgallery);          
     $('nav#main ul li.Products1 div.Products-drop').prepend(featuredproducts);          

     
     $('nav#main ul li.News1 ul').unwrap( "<div class='nav-section'></div>" ); 
     $('nav#main ul li.Projects1 ul').unwrap( "<div class='nav-section'></div>" );      
     $('nav#main ul li.Events1 ul').unwrap( "<div class='nav-section'></div>" );          
     
     $('nav#main ul li.People1 div.People-drop').after(people);
     $('nav#main ul li.Galleries1 div.Galleries-drop').after(gallery);
     $('nav#main ul li.Products1 div.Products-drop').after(products);
 });
 

$(document).ready(function(){
  
    $('.Products1 .nav-section ul.list').each(function(){
        var listElements = $(this).children('li');
        
        var firstColumn = listElements.slice(0, 2).clone();
        var secondColumn = listElements.slice(2,5).clone();
        var thirdColumn = listElements.slice(5,7).clone();
        var fourthColumn = listElements.slice(7,11).clone();                
        $(this).wrap('<div class="no-css3-columns">');
        parentDiv = $(this).parent('.no-css3-columns');
        $(this).remove(); // delete the < ul >
        $(firstColumn).appendTo(parentDiv).wrapAll('<ul />');
        $(secondColumn).appendTo(parentDiv).wrapAll('<ul />');
        $(thirdColumn).appendTo(parentDiv).wrapAll('<ul />');
        $(fourthColumn).appendTo(parentDiv).wrapAll('<ul />');        
  
  });

    $('.Galleries1 .nav-section ul.list').each(function(){
        var listElements = $(this).children('li');
        var firstColumn = listElements.slice(0, 2).clone();
        var secondColumn = listElements.slice(2,3).clone();
        $(this).wrap('<div class="no-css3-columns">');
        parentDiv = $(this).parent('.no-css3-columns');
        $(this).remove(); // delete the < ul >
        $(firstColumn).appendTo(parentDiv).wrapAll('<ul />');
        $(secondColumn).appendTo(parentDiv).wrapAll('<ul />');
  
  });
  
});

/*--------------------------------------------------- Load More HD Editorial Advisory Board ----*/
$(document).ready(function() {
    // Handler for .ready() called.
var currentIndex = 15;
var numMore = 15;
var totalItems = $(".advisory_board_item").length;
$(".advisory_board_item").hide();
$(".advisory_board_item").slice(0,15).show();
clickButton();
function clickButton() {
    var currentLength = $(".advisory_board_item:visible").length;
    if (currentLength >= totalItems) {
        //$("#loadMore").hide();
    } else {
        $("#loadMore").show();
    }

}
$("#loadMore").click(function (e) {
    e.preventDefault();
    $(".advisory_board_item").slice(currentIndex, currentIndex + 15).show();
    currentIndex += 15;
    clickButton();
});
});
 
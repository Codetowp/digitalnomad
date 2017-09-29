
jQuery(function($) { // DOM is now read and ready to be manipulated
equalheight = function(container){

var currentTallest = 0,
     currentRowStart = 0,
     rowDivs = new Array(),
     $el,
     topPosition = 0;
 $(container).each(function() {

   $el = $(this);
   $($el).height('auto')
   topPostion = $el.position().top;

   if (currentRowStart != topPostion) {
     for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
       rowDivs[currentDiv].height(currentTallest);
     }
     rowDivs.length = 0; // empty the array
     currentRowStart = topPostion;
     currentTallest = $el.height();
     rowDivs.push($el);
   } else {
     rowDivs.push($el);
     currentTallest = (currentTallest < $el.height()) ? ($el.height()) : (currentTallest);
  }
   for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
     rowDivs[currentDiv].height(currentTallest);
   }
 });
}

$(window).load(function() {
  equalheight('.eq-blocks');
});


$(window).resize(function(){
  equalheight('.eq-blocks');
});

});







function main() {
	
	
	/*====================================
    counter
    ======================================*/

(function(e){"use strict";e.fn.counterUp=function(t){var n=e.extend({time:400,delay:10},t);return this.each(function(){var t=e(this),r=n,i=function(){var e=[],n=r.time/r.delay,i=t.text(),s=/[0-9]+,[0-9]+/.test(i);i=i.replace(/,/g,"");var o=/^[0-9]+$/.test(i),u=/^[0-9]+\.[0-9]+$/.test(i),a=u?(i.split(".")[1]||[]).length:0;for(var f=n;f>=1;f--){var l=parseInt(i/n*f);u&&(l=parseFloat(i/n*f).toFixed(a));if(s)while(/(\d+)(\d{3})/.test(l.toString()))l=l.toString().replace(/(\d+)(\d{3})/,"");e.unshift(l)}t.data("counterup-nums",e);t.text("0");var c=function(){t.text(t.data("counterup-nums").shift());if(t.data("counterup-nums").length)setTimeout(t.data("counterup-func"),r.delay);else{delete t.data("counterup-nums");t.data("counterup-nums",null);t.data("counterup-func",null)}};t.data("counterup-func",c);setTimeout(t.data("counterup-func"),r.delay)};t.waypoint(i,{offset:"100%",triggerOnce:!0})})}})(jQuery);

	

(function () {
   'use strict';









    /*====================================
    Show Menu on Book
    ======================================*/
    $(window).bind('scroll', function() {
        var navHeight = $(window).height() - 10;
        if ($(window).scrollTop() > navHeight) {
            $('.navbar-default').addClass('on');
        } else {
            $('.navbar-default').removeClass('on');
        }
    });

    $('body').scrollspy({ 
        target: '.navbar-default',
        offset: 10
    })


  	
  


	/*====================================
    top -menu
    ======================================*/

$('#top-menu.navbar-default li:has(ul)').addClass('menu-item-has-children');



/*====================================
    text center
    ======================================*/


$(window).resize(function(){

    $('#home-banner .content').css({
        position:'relative',
        left: ($(window).width() - $('#home-banner .content').outerWidth())/2,
        top: ($(window).height() - $('#home-banner .content ').outerHeight())/2
    });
	
	
	 $('#home-banner.half-height .content').css({
        position:'relative',
        left: ($(window).width() - $('#home-banner.half-height .content').outerWidth())/3,
        top: ($(window).height() - $('#home-banner.half-height .content ').outerHeight())/3
    });
	
	
    $('.single .entry-header .content, #page-banner .content').css({
        position:'relative',
        left: ($(window).width() - $('.single  .entry-header .content, #page-banner .content').outerWidth())/2,
        top: ($(window).height() - $('.single  .entry-header .content, #page-banner .content ').outerHeight())/2
    });
	
	
	 $(' #page-banner .content').css({
        position:'relative',
        left: ($(window).width() - $(' #page-banner .content').outerWidth())/3,
        top: ($(window).height() - $(' #page-banner .content ').outerHeight())/3
    });
	
	
	 $('.search-block form').css({
        position:'relative',
        top: ($(window).height() - $('.search-block form ').outerHeight())/5
		
    });
	
	

});

// To initially run the function:
$(window).resize();



// footer hover change color
$(document).ready(function() {     

//facebook
    $('.social-nav ul li a .fa-facebook').hover(function(){     
        $('footer.footer-bottom').addClass('fa-facebook-b');    
    },     
    function(){    
        $('footer.footer-bottom').removeClass('fa-facebook-b');     
    });
	
	
	//twitter
	  $('.social-nav ul li a .fa-twitter').hover(function(){     
        $('footer.footer-bottom').addClass('fa-twitter-b');    
    },     
    function(){    
        $('footer.footer-bottom').removeClass('fa-twitter-b');     
    });
	
	
	//google plus
	
  $('.social-nav ul li a .fa-google-plus').hover(function(){     
        $('footer.footer-bottom').addClass('fa-google-plus-b');    
    },     
    function(){    
        $('footer.footer-bottom').removeClass('fa-google-plus-b');     
    });
	
	
		//behance
	
  $('.social-nav ul li a .fa-behance').hover(function(){     
        $('footer.footer-bottom').addClass('fa-behance-b');    
    },     
    function(){    
        $('footer.footer-bottom').removeClass('fa-behance-b');     
    });
	
	
		//tumblr
	
  $('.social-nav ul li a .fa-tumblr').hover(function(){     
        $('footer.footer-bottom').addClass('fa-tumblr-b');    
    },     
    function(){    
        $('footer.footer-bottom').removeClass('fa-tumblr-b');     
    });
	
	
		//behance
	
  $('.social-nav ul li a .fa-dribbble').hover(function(){     
        $('footer.footer-bottom').addClass('fa-dribbble-b');    
    },     
    function(){    
        $('footer.footer-bottom').removeClass('fa-dribbble-b');     
    });
	
	
	
			//youtube
	
  $('.social-nav ul li a .fa-youtube').hover(function(){     
        $('footer.footer-bottom').addClass('fa-youtube-b');    
    },     
    function(){    
        $('footer.footer-bottom').removeClass('fa-youtube-b');     
    });
	
	
	
	
});   













// search top
$('.search-up').on('click', function(e) {
    $( ".search-block" ).slideToggle( "slow", function() {
        // Animation complete.
    });

    $(this).toggleClass("menu-up menu-down")
    e.preventDefault();
});


/*creating click event*/
$(document).ready(function(){
  
   $("#article-slider").owlCarousel({
  	 
  	      navigation : true, // Show next and prev buttons
  	      slideSpeed : 300,
  	      paginationSpeed : 400,
  	      autoHeight : true,
		  navigationText : ["", ""],
		  singleItem:true,
  	      itemsCustom : [
				        [0, 1],
				        [450, 1],
				        [600, 1],
				        [700, 1],
				        [1000, 1],
				        [1200, 1],
				        [1400, 1],
				        [1600, 1]
				      ],
  	  });

  

  

		
		
		
    
  
});







}());


}
main();
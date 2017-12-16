
jQuery(function(jQuery) { // DOM is now read and ready to be manipulated
equalheight = function(container){

var currentTallest = 0,
     currentRowStart = 0,
     rowDivs = new Array(),
     jQueryel,
     topPosition = 0;
 jQuery(container).each(function() {

   jQueryel = jQuery(this);
   jQuery(jQueryel).height('auto')
   topPostion = jQueryel.position().top;

   if (currentRowStart != topPostion) {
     for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
       rowDivs[currentDiv].height(currentTallest);
     }
     rowDivs.length = 0; // empty the array
     currentRowStart = topPostion;
     currentTallest = jQueryel.height();
     rowDivs.push(jQueryel);
   } else {
     rowDivs.push(jQueryel);
     currentTallest = (currentTallest < jQueryel.height()) ? (jQueryel.height()) : (currentTallest);
  }
   for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
     rowDivs[currentDiv].height(currentTallest);
   }
 });
}

jQuery(window).load(function() {
  equalheight('.eq-blocks');
});


jQuery(window).resize(function(){
  equalheight('.eq-blocks');
});

});







function main() {
	
	
	/*====================================
    counter
    ======================================*/

(function(e){"use strict";e.fn.counterUp=function(t){var n=e.extend({time:400,delay:10},t);return this.each(function(){var t=e(this),r=n,i=function(){var e=[],n=r.time/r.delay,i=t.text(),s=/[0-9]+,[0-9]+/.test(i);i=i.replace(/,/g,"");var o=/^[0-9]+jQuery/.test(i),u=/^[0-9]+\.[0-9]+jQuery/.test(i),a=u?(i.split(".")[1]||[]).length:0;for(var f=n;f>=1;f--){var l=parseInt(i/n*f);u&&(l=parseFloat(i/n*f).toFixed(a));if(s)while(/(\d+)(\d{3})/.test(l.toString()))l=l.toString().replace(/(\d+)(\d{3})/,"");e.unshift(l)}t.data("counterup-nums",e);t.text("0");var c=function(){t.text(t.data("counterup-nums").shift());if(t.data("counterup-nums").length)setTimeout(t.data("counterup-func"),r.delay);else{delete t.data("counterup-nums");t.data("counterup-nums",null);t.data("counterup-func",null)}};t.data("counterup-func",c);setTimeout(t.data("counterup-func"),r.delay)};t.waypoint(i,{offset:"100%",triggerOnce:!0})})}})(jQuery);

	

(function () {
   'use strict';









    /*====================================
    Show Menu on Book
    ======================================*/
    jQuery(window).bind('scroll', function() {
        var navHeight = jQuery(window).height() - 10;
        if (jQuery(window).scrollTop() > navHeight) {
            jQuery('.navbar-default').addClass('on');
        } else {
            jQuery('.navbar-default').removeClass('on');
        }
    });

    jQuery('body').scrollspy({ 
        target: '.navbar-default',
        offset: 10
    })


  	/*====================================
 layout -left and right
    ======================================*/		


jQuery(document).ready(function () {

	if(jQuery('#home-content').hasClass('right-radio')) {
  jQuery('.content-layout-set').addClass('col-md-push-4');
   jQuery('.aside-layout-set').addClass('col-md-pull-8');
}
	
});
  


	/*====================================
    top -menu
    ======================================*/

jQuery('#top-menu.navbar-default li:has(ul)').addClass('menu-item-has-children');



/*====================================
    text center
    ======================================*/


jQuery(window).resize(function(){

    jQuery('#home-banner .content').css({
        position:'relative',
        left: (jQuery(window).width() - jQuery('#home-banner .content').outerWidth())/2,
        top: (jQuery(window).height() - jQuery('#home-banner .content ').outerHeight())/2
    });
	
	
	 jQuery('#home-banner.half-height .content').css({
        position:'relative',
        left: (jQuery(window).width() - jQuery('#home-banner.half-height .content').outerWidth())/3,
        top: (jQuery(window).height() - jQuery('#home-banner.half-height .content ').outerHeight())/3
    });
	
	
    jQuery('.single .entry-header .content, #page-banner .content').css({
        position:'relative',
        left: (jQuery(window).width() - jQuery('.single  .entry-header .content, #page-banner .content').outerWidth())/2,
        top: (jQuery(window).height() - jQuery('.single  .entry-header .content, #page-banner .content ').outerHeight())/2
    });
	
	
	 jQuery(' #page-banner .content').css({
        position:'relative',
        left: (jQuery(window).width() - jQuery(' #page-banner .content').outerWidth())/3,
        top: (jQuery(window).height() - jQuery(' #page-banner .content ').outerHeight())/3
    });
	
	
	 jQuery('.search-block form').css({
        position:'relative',
        top: (jQuery(window).height() - jQuery('.search-block form ').outerHeight())/5
		
    });
	
	

});

// To initially run the function:
jQuery(window).resize();



// footer hover change color
jQuery(document).ready(function() {     

//facebook
    jQuery('.social-nav ul li a .fa-facebook').hover(function(){     
        jQuery('footer.footer-bottom').addClass('fa-facebook-b');    
    },     
    function(){    
        jQuery('footer.footer-bottom').removeClass('fa-facebook-b');     
    });
	
	
	//twitter
	  jQuery('.social-nav ul li a .fa-twitter').hover(function(){     
        jQuery('footer.footer-bottom').addClass('fa-twitter-b');    
    },     
    function(){    
        jQuery('footer.footer-bottom').removeClass('fa-twitter-b');     
    });
	
	
	//google plus
	
  jQuery('.social-nav ul li a .fa-google-plus').hover(function(){     
        jQuery('footer.footer-bottom').addClass('fa-google-plus-b');    
    },     
    function(){    
        jQuery('footer.footer-bottom').removeClass('fa-google-plus-b');     
    });
	
	
		//behance
	
  jQuery('.social-nav ul li a .fa-behance').hover(function(){     
        jQuery('footer.footer-bottom').addClass('fa-behance-b');    
    },     
    function(){    
        jQuery('footer.footer-bottom').removeClass('fa-behance-b');     
    });
	
	
		//tumblr
	
  jQuery('.social-nav ul li a .fa-tumblr').hover(function(){     
        jQuery('footer.footer-bottom').addClass('fa-tumblr-b');    
    },     
    function(){    
        jQuery('footer.footer-bottom').removeClass('fa-tumblr-b');     
    });
	
	
		//behance
	
  jQuery('.social-nav ul li a .fa-dribbble').hover(function(){     
        jQuery('footer.footer-bottom').addClass('fa-dribbble-b');    
    },     
    function(){    
        jQuery('footer.footer-bottom').removeClass('fa-dribbble-b');     
    });
	
	
	
			//youtube
	
  jQuery('.social-nav ul li a .fa-youtube').hover(function(){     
        jQuery('footer.footer-bottom').addClass('fa-youtube-b');    
    },     
    function(){    
        jQuery('footer.footer-bottom').removeClass('fa-youtube-b');     
    });
	
	
	
	
});   













// search top
jQuery('.search-up').on('click', function(e) {
    jQuery( ".search-block" ).slideToggle( "slow", function() {
        // Animation complete.
    });

    jQuery(this).toggleClass("menu-up menu-down")
    e.preventDefault();
});


/*creating click event*/
jQuery(document).ready(function(){
  
   jQuery("#article-slider").owlCarousel({
  	 
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
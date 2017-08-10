	(function ($) {
    'use strict';
    jQuery(document).ready(function () {

/*
         * ----------------------------------------------------------------------------------------
         *  OWL CAROUSEL
         * ----------------------------------------------------------------------------------------
         */


         jQuery(document).ready(function($) {
            jQuery("#mobile-carousel").each(function(index, el) {
              var containerHeight = jQuery(el).height();
              jQuery(el).find("img").each(function(index, img) {
                var w = jQuery(img).prop('naturalWidth');
                var h = jQuery(img).prop('naturalHeight');
                jQuery(img).css({
                  'width': Math.round(containerHeight * w / h) + 'px',
                  'height': containerHeight + 'px'
                });
              }),
              jQuery(el).owlCarousel({
                autoWidth: true
              });
            });
          });
			
			jQuery(".owl-carousel").owlCarousel({ 

               autoPlay: 5000,
               singleItem : true,
               transitionStyle : "fade",
               autoWidth:true,
               responsive: true,
               responsiveClass: true,
               nav: true,
               loop: true,
               smartSpeed: 900,
               navClass: ['owl-prev', 'owl-next'],
               navigationText: ["<i class='fa fa-chevron-left'> < </i>", "<i class='fa fa-chevron-right'> > </i>"]
               
                });


      jQuery("#owl-demo2").owlCarousel({
 
      autoPlay: 5000, 
 
      items : 1,
      itemsDesktop : [1199,3],
      itemsDesktopSmall : [979,3],
      responsive: true

 
  });


        jQuery("#mobile #owl-demo2").owlCarousel({
 
      autoPlay: 5000, 
 
      items : 1,
      itemsDesktop : [1199,3],
      itemsDesktopSmall : [979,3],
      responsive: true

 
  });


      jQuery("#owl-demo3").owlCarousel({
 
      autoPlay: 5000, 
 
      items : 1,
      itemsDesktop : [1199,3],
      itemsDesktopSmall : [979,3],
      responsive: true

 
  });




      
        /*
         * ----------------------------------------------------------------------------------------
         *  PARALLAX JS
         * ----------------------------------------------------------------------------------------
         */

        // var parallaxeffect = jQuery(window);
        // parallaxeffect.stellar({
        //     responsive: true,
        //     positionProperty: 'position',
        //     horizontalScrolling: false
        // });


        /*
         * ----------------------------------------------------------------------------------------
         *  MAGNIFIC POPUP JS
         * ----------------------------------------------------------------------------------------
         */

  // var magnifPopup = function () {
  //           jQuery('.service-popup').magnificPopup({
  //               type: 'image',
  //               removalDelay: 300,
  //               mainClass: 'mfp-with-zoom',
  //               gallery: {
  //                   enabled: true
  //               },
  //               zoom: {
  //                   enabled: true, 
  //                   duration: 300, 
  //                   easing: 'ease-in-out', 

               
  //                   opener: function (openerElement) {
                       
  //                       return openerElement.is('img') ? openerElement : openerElement.find('img');
  //                   }
  //               }
  //           });
  //       };
        
  //       magnifPopup();



        var magnifPopup = function () {
            jQuery('.popup1').magnificPopup({
               items: [
     
      {
        src: $('<div class="service-popup" id="evaluation"><div class="container"><div class="row"><div class="col-xs-12"><div class="col-md-6"><img src="http://i.imgur.com/bTZ0ZiD.jpg" alt=""></div><div class="col-md-6 text-left" id="evaluation-info"><h1>Wellness Evaluation </h1> <hr><p>We offer free wellness evaluations for our members and the guests of our coaches!</p><h3 class=text-left>Get Your Evaluation Numbers</h3><ul class="eval-areas text-left"><li>Weight</li><li>Lean body mass</li><li>Body fat%</li><li>Protein Factor</li><li>Resting metabolic rate</li></ul><p class="text-left">Once you get to know your numbers, we will work with you in setting specific goals for you to reach the numbers of your desire!</p><a href="http://localhost/wordpress/nutrition-club/wp-content/themes/nutrition-club/profile.php"  class="ghost-btn">Complete a Wellness Profile Here</a></div></div></div></div></div>'), // Dynamically created element
        type: 'inline'
      }
     
    ],
        type: 'image' // this is a default type
                
            });
        };
        
        magnifPopup();


         var magnifPopup = function () {
            jQuery('.popup2').magnificPopup({
               items: [
     
      {
        src: $('<div class="service-popup" id="challenge"><div class="container"><div class="row"><div class="col-xs-12"><div class="col-md-6"><img src="http://i.imgur.com/wApnRnL.jpg" alt=""></div><div class="col-md-6" id="challenge-info"><h1>Body Transformational Challenge</h1><hr><p>We host body challenges, fit challenges and weight loss challenges a few times each year and award cash prizes!</p><a href="#" class="ghost-btn">Check Challenge Dates</a></div></div></div></div></div>'), // Dynamically created element
        type: 'inline'
      }
     
    ],
        type: 'image' // this is a default type
                
            });
        };
        
        magnifPopup();



         var magnifPopup = function () {
            jQuery('.popup3').magnificPopup({
               items: [
     
      {
        src: $('<div class="service-popup" id="shakes"><div class="container"><div class="row"><div class="col-xs-12"><div class="col-md-6"><img src="http://i.imgur.com/AP4WbGS.jpg" alt=""></div><div class="col-md-6" id="shakes-info"><h1>Nutrition Shakes</h1><hr><p>Please come and try our healthy protein shakes! You\'ll get a healthy protein meal which includes our Original Herbal Tea and the Herbal Aloe. We do breakfast, lunch, and dinner. We offer so many varities of flavors.</p><ul class="flavors"><li>Wild Berry</li><li>French Vanilla</li><li>Dutch Chocolate</li><li>Mint Chocolate</li><li>Cafe Latte</li></ul><p>Feeling hungry? Stop by and check us out!</p><a href="#contact" class="ghost-btn">Get Started Today!</a></div></div></div></div></div>'), // Dynamically created element
        type: 'inline'
      }
     
    ],
        type: 'image' // this is a default type
                
            });
        };
        
        magnifPopup();


         var magnifPopup = function () {
            jQuery('.popup4').magnificPopup({
               items: [
     
      {
        src: $('<div class="service-popup" id="events"><div class="container"><div class="row"><div class="col-xs-12"><div class="col-md-6"><img src="http://i.imgur.com/6uNY941.jpg" alt=""></div><div class="col-md-6" id="events-info"><h1>Events</h1><hr><p>Please join us at our special events with our team and the community!</p> <a href="https://www.facebook.com/pg/Shamrock-Nutrition-146217185463088/events/?ref=page_internal" target="_blank" class="ghost-btn">Check out our latest happenings here!</a></div></div></div></div></div>'), // Dynamically created element
        type: 'inline'
      }
     
    ],
        type: 'image' // this is a default type
                
            });
        };
        
        magnifPopup();


         var magnifPopup = function () {
            jQuery('.popup5').magnificPopup({
               items: [
     
      {
        src: $('<div class="service-popup" id="trial-pack"><div class="container"><div class="row"><div class="col-xs-12"><div class="col-md-6"><img src="http://i.imgur.com/0KsTXoc.jpg" alt=""></div><div class="col-md-6" id="trial-pack-info"><h1>3 Day Trial Pack</h1><hr><p>Interested in trying us out before committing to the program? We want you to have the Herbalife experience before you buy! We want you to experience the taste and the results for yourself!</p><br><p>Your 3 Day Trial Pack Comes With a 3 Day Supply Of</p><ul class="package"><li>Formula 1 Meal Packets</li><li>Total Control Tablets</li></ul><a href="#" class="ghost-btn"> Contact us today to get your 3 day trial pack!</a></div></div></div></div></div>'), // Dynamically created element
        type: 'inline'
      }
     
    ],
        type: 'image' // this is a default type
                
            });
        };
        
        magnifPopup();


         var magnifPopup = function () {
            jQuery('.popup6').magnificPopup({
               items: [
     
      {
        src: $('<div class="service-popup" id="coach"><div class="container"><div class="row"><div class="col-xs-12"><div class="col-md-6"><img src="http://i.imgur.com/TeJurJd.jpg" alt="Herbalife-Coach" id="coach-img"></div><div class="col-md-6" id="coach-info"><h1>Become a Coach Today!</h1><hr><p>We\'re always looking for new coaches to be part of our team. If you have a passion for wellness and are have a desire to learn more about a becoming a wellness coach, watch this video and contact us today!</p><br><iframe id="coach-iframe" width="560" height="315" src="https://www.youtube.com/embed/pTuQV26Bt0M" frameborder="0" allowfullscreen></iframe><a href="#" class="ghost-btn">Join Now!</a></div></div></div></div>'), // Dynamically created element
        type: 'inline'
      }
     
    ],
        type: 'image' // this is a default type
                
            });
        };
        
        magnifPopup();



        /*
         * ----------------------------------------------------------------------------------------
         *  Portfolio Lightbox
         * ----------------------------------------------------------------------------------------
         */

    //      jQuery(".service-popup").lightBox({
    //     imgpath: 'https://unsplash.it/1200/900?image=839',
    //     title: 'Your Title',
    //     text: 'Enter any text',
    //     link: ['http://www.link1.com', 'http://www.link2.com'],
    //     linkText: ['Site 1 Text', 'Link 2 text']
    // });     


          /*
         * ----------------------------------------------------------------------------------------
         *  WOW JS
         * ----------------------------------------------------------------------------------------
         */
        new WOW().init();


   /*
         * ----------------------------------------------------------------------------------------
         *  MOBILE NAV BAR TOGGLE
         * ----------------------------------------------------------------------------------------
         */

    jQuery('.nav-toggle').on('click', function(){
    jQuery('#mobile-menu').toggleClass('open');

    });


    


   /*
         * ----------------------------------------------------------------------------------------
         *  PRODUCT LINKS
         * ----------------------------------------------------------------------------------------
         */


    jQuery('#formula1').click(function(){
    window.open('', '_blank');


  });

    jQuery('#protein').click(function(){
    window.open('', '_blank');


  });

    jQuery('#tea').click(function(){
    window.open('', '_blank');


  });

    jQuery('#aloe').click(function(){
    window.open('', '_blank');


  });

    jQuery('#21day').click(function(){
    window.open('', '_blank');


  });


     /*
         * ----------------------------------------------------------------------------------------
         *  AUTO SCROLL
         * ----------------------------------------------------------------------------------------
         */
  
         $('a[href*=#]').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
    && location.hostname == this.hostname) {
      var $target = $(this.hash);
      $target = $target.length && $target
      || $('[name=' + this.hash.slice(1) +']');
      if ($target.length) {
        var targetOffset = $target.offset().top;
        $('html,body')
        .animate({scrollTop: targetOffset}, 1000);
       return false;
      }
    }
  });





});


			
	


    })(jQuery);


  
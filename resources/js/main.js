jQuery(function($) {
    if ($(window).width() > 769) {
      $('.navbar .dropdown').hover(function() {
        $(this).find('.dropdown-menu').first().stop(true, true).delay(250).slideDown();
  
      }, function() {
        $(this).find('.dropdown-menu').first().stop(true, true).delay(100).slideUp();
  
      });
  
      $('.navbar .dropdown > a').click(function() {
        location.href = this.href;
      });
  
    }
  });
/*====================================
			Home Page Slider Section
====================================*/
$('.carousel').carousel({
    interval: 2000
});

$('.owl-partner-slider').owlCarousel({
        items:1,
        loop:true,
        margin:10,
        autoplay:true,
        autoplayTimeout:5000,
        autoplayHoverPause:true,
        nav:false,
        dots:true
      });

     
/* ==== MOBILE ==== */
$(document).ready(function(){
        $('.navbar-toggler').on('click', function(){
        $('.mobile-menu').toggleClass('open-slide');
        });
});


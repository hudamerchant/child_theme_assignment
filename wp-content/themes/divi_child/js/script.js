
(function($){
    $(document).ready(function(){
        $('.single-banner').slick({
          dots: true,
          infinite: true,
          speed: 500,
          fade: true,
          cssEase: 'linear'
        });
        // $('.banner-text').addClass('animated fadeInUp')
        // if($('.slick-slide').hasClass('.slick-active')){
        //     $('.banner-text').addClass('animated fadeInUp')
        // }else{
        //     $('.banner-text').removeClass('animated fadeInUp')
        // }
    });    

})(jQuery);
// ( function( $ ) {
//     class SlickCarousel {
//       constructor() {
//         this.initiateCarousel();
//       }
  
//       initiateCarousel() {
//         $('.your-class').slick({
//                       dots: true,
//                       infinite: true,
//                       speed: 500,
//                       fade: true,
//                       cssEase: 'linear'
//                     });
//       }
//     }
  
//     new SlickCarousel();
  
//   } )( jQuery );

// ( function( $ ) {
//     class SlickCarousel {
//       constructor() {
//         this.initiateCarousel();
//       }
  
//       initiateCarousel() {
//         $( '.posts-carousel' ).slick( {
//           autoplay: true,
//           autoplaySpeed: 1000,
//           slidesToShow: 3,
//           slidesToScroll: 1,
//         } );
//       }
//     }
  
//     new SlickCarousel();
  
//   } )( jQuery );
jQuery(document).ready(function($){

 // contact form send
  var wpcf7Elm = document.querySelector( '#wpcf7-f34-o1.wpcf7' );

  wpcf7Elm.addEventListener( 'wpcf7mailsent', function( event ) {
      location = 'http://amo.kinsly.studio/success/';
  }, false );

  // contact form send
  var wpcf7Elm2 = document.querySelector( '#wpcf7-f33-o2.wpcf7' );

  wpcf7Elm2.addEventListener( 'wpcf7mailsent', function( event ) {
      location = 'http://amo.kinsly.studio/success/';
  }, false );

  $('.amo-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    nextArrow: $(".amo-slider__arrow-next"),
    prevArrow: $(".amo-slider__arrow-prew"),
    autoplay: true,
    autoplaySpeed: 5000
  });
})

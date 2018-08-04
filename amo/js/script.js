$(document).ready(function() {
  $('.amo-slider').slick({
   slidesToShow: 1,
   slidesToScroll: 1,
   nextArrow: $(".amo-slider__arrow-next"),
   prevArrow: $(".amo-slider__arrow-prew"),
   autoplay: true,
   autoplaySpeed: 5000,
  });
});

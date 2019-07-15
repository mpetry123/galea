var jQuery = null;

(function ($, document, window, undefined) {

    var swiper = new Swiper('.swiper-container', {
        loop: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
          el: '.swiper-pagination',
        }
        
      });
    
}(jQuery, document, window));

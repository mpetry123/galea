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


    const Globals = function() {
      
      const toggleMenu = function() {
        
        const menuToggle = document.querySelector("[data-js=toggleMenu");
        const menu = document.querySelector("[data-js=menu]");

        if(window.getComputedStyle(menu).display == "flex") {
          menu.style.display = "none";
          menuToggle.classList.remove("is-active");
        }
        else {
          menu.style.display = "flex";
          menuToggle.classList.add("is-active");
        }
      }

      return { toggleMenu };
    }();

    if ( !window.Galea ) window.Galea = {};
      window.Galea.Globals = Globals;
        

    document.addEventListener("DOMContentLoaded", function() {
      document.querySelectorAll("[data-js]").forEach(function(elem){
        elem.addEventListener("click", function() {
          var targetFn = window.Galea.Globals[elem.dataset.js];
            (typeof( targetFn ) == "function" && targetFn() )
        })
      })
    })
    
}(jQuery, document, window));

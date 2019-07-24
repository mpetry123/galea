var jQuery = null;

(function ($, document, window, undefined) {

    const swiper = new Swiper('.swiper-container', {
        loop: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
          el: '.swiper-pagination',
        }
        
      });

      
    const Form = function(){
        
      const labelHandler = function(e) {

        const parent = e.target.closest(".gfield");
	
        //console.log(e.type);
        //console.dir(parent);
        

        if(e.type == "focusin") 
            parent.querySelector(".gfield_label").style.display = "none";
            //$parent.css("outline", "1px solid red");
        else if( e.target.value == 0 )
            parent.querySelector(".gfield_label").style.display = "block";
            //$parent.css("outline", "1px solid transparent");	
      }

      return { labelHandler }
	
    }();
    


    const Globals = function() {
      
      const toggleMenu = function() {
        
        const menuToggle = document.querySelector("[data-js=toggleMenu");
        const menu = document.querySelector("header nav");

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

    
        
    /* START DOMContentLoaded Event Listeners */
    document.addEventListener("DOMContentLoaded", function() {

      document.querySelectorAll("[data-js]").forEach(function(elem){
        elem.addEventListener("click", function() {
          var targetFn = window.Galea.Globals[elem.dataset.js];
            (typeof( targetFn ) == "function" && targetFn() )
        })
      });

      document.querySelectorAll(".gfield input, .gfield textarea").forEach(function(elem){
        elem.addEventListener("focusin", Form.labelHandler);
        elem.addEventListener("focusout", Form.labelHandler);
      });

      

    }); /* END DOMContentLoaded */
    
}(jQuery, document, window));

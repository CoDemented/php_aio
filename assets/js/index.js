$(document).ready(function(){
    if (jQuery) {  
      console.log("jquery-341: Ok!");
    }
// --------- Preloader
// window.addEventListener('load', function () {
//       $(".loading").fadeOut();
// })
// --------- Preloader

// ------------------------------------------------ Menu
    (function($){
      $('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
        if (!$(this).next().hasClass('show')) {
        $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
        }
        var $subMenu = $(this).next(".dropdown-menu");
        $subMenu.toggleClass('show');
    
        $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
        $('.dropdown-submenu .show').removeClass("show");
        });
    
        return false;
      });
    })(jQuery) });
// ------------------------------------------------ Menu


// $("ul.navbar-nav li").click(function(){
//   $("ul.navbar-nav li").removeClass("active");
//   $(this).addClass("active");
//   // alert();
// })



 
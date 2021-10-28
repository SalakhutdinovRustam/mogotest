// import external dependencies

import "jquery"
import "owl.carousel/dist/owl.carousel"


// Import everything from autoload
import "./autoload/**/*"


jQuery(document).ready(() => {
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        items:1,
        onInitialized: function (e) {
            $(e.target).find('.owl-dots .owl-dot').each(function(i, el) {
            $(el)    
              .find('span')                    // Ищем span в owl-dot
              .html(document.querySelector('.owl-txt'))                   // Добавляем текст
               })
          },
    
    })


    

});

jQuery( ".ttm-menu-toggle-block" ).click(function() {
    jQuery( "nav.menu" ).toggleClass( "menu-mobile" );
    jQuery( ".menu-item-has-children" ).removeClass( "is_active" ); 
});

var $ = jQuery;
$('ul li:has(ul)').addClass('has-submenu');
$('ul li ul').addClass('sub-menu');


$("ul.dropdown li").on({

mouseover: function(){
   $(this).addClass("hover");
},  
mouseout: function(){
   $(this).removeClass("hover");
}, 

});

var $menu = $('#menu'), $menulink = $('#menu-toggle-form'), $menuTrigger = $('.has-submenu > a');
$menulink.on('click',function () {

$menulink.toggleClass('active');
$menu.toggleClass('active');
});

$menuTrigger.on('click',function (e) {
e.preventDefault();
var t = $(this);
t.toggleClass('active').next('ul').toggleClass('active');
});


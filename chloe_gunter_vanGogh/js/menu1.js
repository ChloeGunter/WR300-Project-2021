	
// when using click function on the burger menu, toggle the burger menu for the ul with class of global.

$('html').removeClass('no-js').addClass("js");

let menu = $('#main_nav'); //the menu itself
let menuBtn =$('.hamburger'); //the hamburger button

$('button.hamburger').click( function(){
 $(this).toggleClass('is-active');
 menu.toggleClass('active');
})
	
// when using click function on the burger menu, toggle the burger menu for the ul with class of global.

$('html').attr('class', 'js');

$('button.hamburger').click( function(){
 $('button.hamburger, #main_nav').toggleClass('is-active');
})
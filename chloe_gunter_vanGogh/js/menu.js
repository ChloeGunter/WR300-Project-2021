// $('button.hamburger').click( function(){
// 	$(this).toggleClass('is-active');
// })	
// when using click function on the burger menu, toggle the burger menu for the ul with class of global.

$('html').removeClass('no-js').addClass("js");

let menu = $('#main_nav'); //the menu itself
let menuBtn =$('.hamburger'); //the hamburger button

menuBtn.click( function(e){
    e.preventDefault();
    menuBtn.toggleClass('active');
    menu.toggleClass('active');

    if(menuBtn.hasClass('active')){

        $('i.icon-menu').removeClass('icon-menu').addClass('icon-cancel-circled');
    }
    else{
        $('i.icon-cancel-circled').removeClass('icon-cancel-circled').addClass('icon-menu');
    }

})
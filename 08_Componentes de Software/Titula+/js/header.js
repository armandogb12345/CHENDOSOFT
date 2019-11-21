$(document).ready(function(){
    $(window).scroll(function(){
        if	( $(this).scrollTop() > 0 ){
            $('header').addClass('headermove');
        }else {
            $('header').removeClass('headermove');
        }
    });
});
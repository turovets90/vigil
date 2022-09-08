$(document).ready(function(){

    $('.mm_btn').click(function () {
       $('.main_menu').addClass('open');
       $('html').addClass('page_noscroll');

       $('.mm_close').click(function(){
           $('.main_menu').removeClass('open');
           $('html').removeClass('page_noscroll');
        });

       return false;
   });


    $('.slider').slick({
        slidesToShow:1,
        slidesToScroll: 1,
        dots: true,
        arrows: true,
        infinite: true,
        fade: true,
    });



});






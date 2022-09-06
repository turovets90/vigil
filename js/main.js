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


/*
    if($(window).innerWidth() < 768){
        $('.main_services_list').slick({
            slidesToShow:1,
            slidesToScroll: 1,
            dots: true,
            arrows: false,
            infinite: false,
            //fade: true,
        });
    }

    $('.main_catalog_list').slick({
        slidesToShow:1,
        slidesToScroll: 1,
        dots: false,
        arrows: true,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 5000,
        speed: 1500,
        fade: true,
    });

    $('.main_catalog_item_content .prev').click(function(){
        $('.main_catalog_list').slick('slickPrev');
    });

    $('.main_catalog_item_content .next').click(function(){
        $('.main_catalog_list').slick('slickNext');
    });

    $('.how_doing_slider').slick({
        slidesToShow:1,
        slidesToScroll: 1,
        dots: true,
        arrows: true,
        infinite: true,
        speed: 1500,
        autoplay: true,
        autoplaySpeed: 5000,
        fade: true,
    });

    $('.card_head').click(function(){
        $(this).parent().toggleClass('act');
    });

    $('.production_slider').slick({
        slidesToShow:1,
        slidesToScroll: 1,
        dots: false,
        arrows: true,
        infinite: false,
        //speed: 1500,
        //centerMode: true,
        //focusOnSelect: true,
        //centerPadding: "20%"
        //fade: true,
    });

    $('.select2').select2({
        minimumResultsForSearch: -1,
    });

    $('.scroll_up').click(function(){
        $('html, body').animate({
            scrollTop: $('html').offset().top
        },1500);
    });


    document.addEventListener( 'wpcf7mailsent', function( event ) {
        if(event.detail.contactFormId=="6" || event.detail.contactFormId=="200"){
            $('.kp_content').addClass('success');
        }
    }, false );

    $('.kp_content .btn_reset').click(function(){
        $('.kp_content').removeClass('success');
        //$('form#wpcf7-f6-o1').resetForm();
        $('.wpcf7-response-output').hide();
    });


    var video = document.getElementById("video");
    var play_btn = document.getElementById("play_btn");

    function togglePlay() {
        if (video.paused || video.ended) {
            video.play();
        } else {
            video.pause();
        }
    }
    if(video){
        play_btn.addEventListener("click", togglePlay);
        video.addEventListener("playing", function () {
            play_btn.style.opacity = 0;
        });
        video.addEventListener("pause", function () {
            play_btn.style.opacity = 1;
        });
    }

     */





});






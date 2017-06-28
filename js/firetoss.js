////////////////////////////////////////
//        Mean Menu                   //
////////////////////////////////////////


// you can change the settings in \firetoss_seed\js\jquery.meanmenu.js

(function ($) {
    $(document).ready(function () {


////////////////////////////////////////
//        Mean Menu                   //
////////////////////////////////////////
        $('header nav').meanmenu();





////////////////////////////////////////
//        Owl Carousel                //
////////////////////////////////////////


        $('.owl-carousel-content').owlCarousel({
            dots: true,
            autoplay: false,
            items: 3
        });

        $('.owl-carousel-hero').owlCarousel({
            dots: true,
            autoHeight:true,
            autoplay: false,
            loop: true,
            items: 1,
            nav: true,
            navText: [ "<span class='arrow'><img src='/wp-content/uploads/2017/05/slider-arrow-left.png'></span>", "<span class='arrow'><img src='/wp-content/uploads/2017/05/slider-arrow-right.png'></span>" ],
            singleItem: true
        });


        // $( "p" ).addClass( "myClass yourClass" );



});
})(jQuery);






////////////////////////////////////////
//        Scroll Reveal               //
////////////////////////////////////////

// https://github.com/jlmakes/scrollreveal
//
// // Changing the defaults
//     window.sr = ScrollReveal({ reset: true });
//
// // Customizing a reveal set
// sr.reveal('.foo', { duration: 200 });
//
// // Basic usage and variations
// window.sr = ScrollReveal();
// sr.reveal('.foo');
// sr.reveal('.bar');
//
// // Is the same as...
// window.sr = ScrollReveal().reveal('.foo, .bar');




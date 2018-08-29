$(document).ready(function(){

    $('#owl_doitac').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        // dots:true,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        responsive:{
            0:{
                items:2,
                // dots:true,
            },
            600:{
                items:3,
                // dots:true,
            },
            1000:{
                items:6,
                // dots:true,
            }
        }
    });

});
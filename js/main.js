/*global jQuery, document, WOW */
$(document).ready(function ($) {
    'use strict';

/*----------------------------
    wow js active
------------------------------ */
    // TODO: Get this working
    new WOW().init();

/*----------------------------
    $ MeanMenu
------------------------------ */
    $('nav#dropdown').meanmenu({
        meanScreenWidth: "991",
        meanMenuContainer: ".mobile-menu-area .container"
    });

/*----------------------------
    Best Sell Owl Carousel
------------------------------ */
    $('.best-sell-slider').owlCarousel({
        autoPlay: false,
        items: 2,
        itemsDesktop: [1199, 2],
        itemsDesktopSmall: [980, 3],
        itemsMobile: [479, 1],
        itemsTablet: [768, 2],
        navigation: true,
        navigationText: [
            '<i class="fa fa-angle-left"></i>',
            '<i class="fa fa-angle-right"></i>'
        ],
        pagination: false,
        slideSpeed: 2000,
        /* transitionStyle : 'fade', */    /* [This code for animation ] */
    });
/*----------------------------
    Partner Owl Carousel
------------------------------ */
    $('.partner-carousel').owlCarousel({
        autoPlay: false,
        items: 4,
        itemsDesktop: [1199, 4],
        itemsDesktopSmall: [980, 3],
        itemsMobile: [479, 1],
        itemsTablet: [768, 2],
        navigation: true,
        navigationText: [
            '<i class="fa fa-angle-left"></i>',
            '<i class="fa fa-angle-right"></i>'
        ],
        pagination: false,
        slideSpeed: 2000,
        /* transitionStyle : 'fade', */    /* [This code for animation ] */
    });

/*----------------------------
    Price Slider Activate
------------------------------ */
    $('#slider-range').slider({
        max: 300,
        min: 110,
        range: true,
        slide: function (event, ui) {
            $('#amount').val('$' + ui.values[0] + ' - $' + ui.values[1]);
        },
        values: [120, 240],
    });
    $('#amount').val('$' + $('#slider-range').slider('values', 0) +
        ' - $' + $('#slider-range').slider('values', 1));

/*--------------------------
    ScrollUp
---------------------------- */
    $.scrollUp({
        animation: 'fade',
        animationInSpeed: 2000,
        easingType: 'linear',
        scrollName: 'scrollUp',
        scrollSpeed: 900,
        scrollText: '<i class="fa fa-angle-up"></i>',
    });

/*--------------------------
    Nivo Slider
---------------------------- */
    $('#nivoslider').nivoSlider({
        animSpeed: 500,
        boxCols: 10,
        boxRows: 10,
        controlNavThumbs: false,
        directionNav: true,
        effect: 'random',
        manualAdvance: true,
        pauseOnHover: false,
        pauseTime: 5000,
        slices: 15,
        startSlide: 0,
    });

/*--------------------------
    Counter Up
---------------------------- */
    /*
    $('.counter').counterUp({
        delay: 70,
        time: 5000
    });
    */

/*------------------------------------
    Tooltip
-------------------------------------- */
    $('[data-toggle="tooltip"]').tooltip();




/*--------------------------------------
    Contact Form
--------------------------------------*/






});

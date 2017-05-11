/*global jQuery, document */
jQuery(document).ready(function ($) {
    "use strict";

    //---------------------------------------------
    //Nivo slider
    //---------------------------------------------
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

    $('#nivoslider-four').nivoSlider({
        animSpeed: 500,
        boxCols: 12,
        boxRows: 12,
        controlNavThumbs: false,
        directionNav: false,
        effect: 'fade',
        manualAdvance: false,
        pauseOnHover: true,
        pauseTime: 5000,
        slices: 15,
        startSlide: 0,
    });
});

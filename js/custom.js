jQuery(document).ready(function() {
    jQuery(".menu").click(function() {
        jQuery(".sidenav").toggleClass("active")
    });

    jQuery(".sidenav .close").on("click", function() {
        jQuery(".sidenav").removeClass("active");
    });

    jQuery(".menu").click(function() {
        jQuery(".body-overlay").fadeIn();
    });

    jQuery(".body-overlay, .close").click(function() {
        jQuery(".sidenav").removeClass("active");
        jQuery(".body-overlay").fadeOut();
    });

    InitWaypointAnimations({
        delay: "0.5s",
        animateClass: "animate-on-scroll",
        animateGroupClass: "animate-group-on-scroll"
    });

});

// nav-content overlay scroll

$(document).ready(function() {
    'use strict'

    $(window).scroll(function() {
        'use strict'
        if ($(window).scrollTop() > 500) {
            $('.nav-content').css({
                'background': '#011D64',
            });

        } else {
            $('.nav-content').css({
                'background': 'none'
            });

        }
    });
});
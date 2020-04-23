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

// Pop Up Modal onLoad

$(document).ready(function() {
    $('#onLoadModal').modal('show');
});
(function($) {
    $('.mobile-menu').hide();
    $('.menu-toggle').on('click', function(event) {
        event.preventDefault();
        $('.mobile-menu').animate({ height: 'toggle' });
        // $('#primary-menu').toggle("slide", { direction: "left" }, 5000);
    });
    $('.x-logo').hide();
    $('.menu-toggle').on('click', function(event) {
        event.preventDefault();
        $('.hamburger').toggle();
        $('.x-logo').toggle();
    });
    // news and events button to show/hide news/events
    $(".events-section").on('click', function() {
        event.preventDefault();
        $(".events-lists").show();
        $(".news-lists").hide();
    });

    $(".news-section").on('click', function() {
        event.preventDefault();
        $(".news-lists").show();
        $(".events-lists").hide();
    });
    /////////

})(jQuery);
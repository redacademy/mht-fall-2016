(function($) {
    // shows the navigation when hamburger is clicked
    // changes phone number and logo from blue to green
    $('.phone-and-number-green').hide();
    // $('.mobile-menu').hide();
    $('.menu-toggle').on('click', function(event) {
        event.preventDefault();
        $('.mobile-menu').animate({ height: 'toggle' });
        $('.mobile-menu').removeClass('.mobile-menu-hide')

    });
    // toggles hamburger when clicked and shows X on menu bar

    $('.x-logo').hide();
    $('.menu-toggle').on('click', function(event) {
        event.preventDefault();
        $('.hamburger').toggle();
        $('.x-logo').toggle();
        $('.phone-and-number').toggle();
        $('.phone-and-number-green').toggle();
    });

    // Parallax scroll function
    function parallax() {
        var scrolled = $(window).scrollTop();
        $('.parallax-scroll, .parallax-scroll-about').css('top', -(scrolled * 0.85) + 'px');
    };
    $(window).scroll(function(e) {
        parallax();
    });
    //hides everything when search is clicked and brings up search field
    $('.search-field-mobile').hide();
    $(".search").on('click', function() {
        $('header, #primary, .mobile-menu, footer').hide();
        $('.search-field-mobile').show();
    });
    // cancel button for search field
    $('.search-cancel').on('click', function() {
        $('.search-field-mobile').hide();
        $('header, #primary, .mobile-menu, footer').show();
    });
    // hide/show treatment through flickity carousel
    // $('.treatment-description').hide();


    // display/function for X upon contact form completetion;
    $('.x-icon').hide();
    $(".wpcf7-submit").on('click', function() {
        $('.contact-us').addClass('.grey-background');
        $('.x-icon').show();
        window.scrollTo(0, 0);
    });


    $(".x-icon").on('click', function() {
        $('.wpcf7-response-output').hide();
        $('.x-icon').hide();
        $('.contact-us').removeClass('.grey-background');
    });



    // news and events button to show/hide news/events
    $(".events-section").on('click', function() {
        event.preventDefault();
        $(".events-section").removeClass('events-section-off').addClass('events-section-on');
        $(".news-section").removeClass('news-section-on').addClass('news-section-off');
        $(".events-lists").show();
        $(".news-lists").hide();
    });

    $(".news-section").on('click', function() {
        event.preventDefault();
        $(".news-section").removeClass('news-section-off').addClass('news-section-on');
        $(".events-section").removeClass('events-section-on').addClass('events-section-off');
        $(".news-lists").show();
        $(".events-lists").hide();
    });
    // lab testing data from loop
    $('.labtesting-btn-off').on('click', function() {
        $('.labtesting-single-wrapper-active').stop().hide();
        $(this).next('.labtesting-single-wrapper-active').stop().show();
    });
    // treatment  data from loop
    $(".treatments-wrapper div:nth-child(2)").stop().show();
    $(".treatments-wrapper div:first-child button:first-child").focus();
    $(".treatments-wrapper div:first-child").css("margin-left", "20px");
    $('.treatment-btn-off').on('click', function() {
        $('.treatment-description-single-active').stop().hide();
        $(this).next('.treatment-description-single-active').stop().show();


    });

})(jQuery);
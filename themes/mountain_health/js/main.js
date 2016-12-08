(function($) {
    // shows the navigation when hamburger is clicked
    // changes phone number and logo from blue to green
    $('.phone-and-number-green').hide();
    // $('.mobile-menu').hide();
    $('.menu-toggle').on('click', function(event) {
        event.preventDefault();
        $('.mobile-menu').animate({ height: 'toggle' });
        $('.mobile-menu').removeClass('.mobile-menu-hide');
        $(".about-page .main-header header .phone-and-number-green .phone-green, .front-page .main-header header .phone-and-number-green .phone-green").hide();
        $(".about-page .main-header header .phone-white .front-page .main-header header .phone-white").show();

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
    $(".labtesting-wrapper div:nth-child(2)").stop().show();
    $(".labtesting-wrapper div:first-child button:first-child").focus();
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
    // about page header color change
    $(".about-page .main-header header p, .front-page .main-header header p").addClass("phone-number-white");
    $(".about-page .main-header header .phone-blue, .front-page .main-header header .phone-blue").hide();
    $(".about-page .main-header header .MTH-logo, .front-page .main-header header .MTH-logo").hide();
    $(".about-page .main-header header .MTH-logo-white, .front-page .main-header header .MTH-logo-white").show();
    $(".about-page .main-header header .phone-and-number .phone-white .front-page .main-header header .phone-and-number .phone-white").show();

    $(window).on("scroll", function() {
        if ($(window).scrollTop() > 400) {
            $(".about-page .main-header header, .front-page .main-header header").addClass("header-white");
            $(".about-page .main-header header .hamburger, .front-page .main-header header .hamburger").removeClass("hamburger");
            $(".about-page .main-header header p, .front-page .main-header header p").removeClass("phone-number-white");
            $(".about-page .main-header header .phone-blue, .front-page .main-header header .phone-blue").show();
            $(".about-page .main-header header .MTH-logo, .front-page .main-header header .MTH-logo").show();
            $(".about-page .main-header header .MTH-logo-white, .front-page .main-header header .MTH-logo-white").hide();
            $(".about-page .main-header header .phone-white, .front-page .main-header header .phone-white").hide();

        } else {
            $(".about-page .main-header header, .front-page .main-header header").removeClass("header-white");
            $(".about-page .main-header header .hamburger-white, .front-page .main-header header .hamburger-white").addClass("hamburger");
            $(".about-page .main-header header p, .front-page .main-header header p").addClass("phone-number-white");
            $(".about-page .main-header header .MTH-logo, .front-page .main-header header .MTH-logo").hide();
            $(".about-page .main-header header .MTH-logo-white, .front-page .main-header header .MTH-logo-white").show();
            $(".about-page .main-header header .phone-blue, .front-page .main-header header .phone-blue").hide();
            $(".about-page .main-header header .phone-and-number .phone-white .front-page .main-header header .phone-and-number .phone-white").show();

        }
    });

})(jQuery);
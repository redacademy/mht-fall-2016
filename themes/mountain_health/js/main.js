(function($) {
    // shows the navigation when hamburger is clicked
    // changes phone number and logo from blue to green
    $('.phone-and-number-green').hide();

    $('.x-logo').hide();
    // $('.mobile-menu').hide();
    $('.menu-toggle').on('click', function(event) {
        event.preventDefault();
        $('.content, footer, .mountains').toggle();
        $('.mobile-menu').animate({ height: 'toggle' });
        $('.mobile-menu').removeClass('.mobile-menu-hide');
        $('.fa-bars').toggle();
        $('.x-logo').toggle();
        $('.phone-and-number').toggle();
        $('.phone-and-number-green').toggle();
        $(".about-page .phone-green, .front-page .phone-green").hide();
        // $(".about-page  header .phone-and-number-green .phone-green, .front-page  header .phone-and-number-green .phone-green").hide();
        $(".about-page  header .phone-white .front-page  header .phone-white").show();
        $('.mth-logo-white').toggle();
        $('.mth-logo-dt').toggle();

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


    $(".labtesting-single-wrapper-active:first-child").stop().show();
    $(".labtesting-wrapper .labtesting-btn-off button:first-child").focus();

    $(".labtesting-btn-off").focus();
    $('.labtesting-btn-off').on('click', function() {
        $('.labtesting-single-wrapper-active').stop().hide();
        $(this).next('.labtesting-single-wrapper-active').stop().show();
    });
    // treatment  data from loop


    //
    $(".treatments-wrapper div:nth-child(2)").stop().show();
    $(".treatments-wrapper button:first-child").focus();
    $(".treatments-wrapper div:first-child").css("margin-left", "20px");
    $('.treatment-btn-off').on('click', function() {
        $('.treatment-description-single-active').stop().hide();
        $(this).next('.treatment-description-single-active').stop().show();
    });
    // about page header color change
    $(".about-page  header p, .front-page  header p").addClass("phone-number-white");
    $(".about-page  header .phone-blue, .front-page  header .phone-blue").hide();
    $(".about-page  header .MTH-logo-dt, .front-page  header .MTH-logo-dt").hide();
    $(".about-page  header .MTH-logo-white, .front-page  header .MTH-logo-white").show();
    $(".about-page  header .phone-and-number .phone-white .front-page  header .phone-and-number .phone-white").show();
    $(".about-page .search-icon-dt, .front-page .search-icon-dt").hide();
    $(".about-page .external-link-logo-dt, .front-page .external-link-logo-dt").hide();
    $(".about-page .external-link-logo-white-dt, .front-page .external-link-logo-white-dt").show();
    $(".search-logo-white-dt").hide();
    $(".about-page header .search-logo-white-dt").show();


    $(window).on("scroll", function() {
        if ($(window).scrollTop() > 1) {
            $(".about-page  header, .front-page header").addClass("header-white");
            $(".about-page  header .hamburger-white, .front-page  header .hamburger-white").removeClass("hamburger");
            $(".about-page  header p, .front-page  header p").removeClass("phone-number-white");
            $(".about-page  header .phone-blue, .front-page  header .phone-blue").show();
            $(".about-page  header .MTH-logo-dt, .front-page  header .MTH-logo-dt").show();
            $(".about-page  header .MTH-logo-white, .front-page  header .MTH-logo-white").hide();
            $(".about-page  header .phone-white, .front-page  header .phone-white").hide();
            $(".about-page .search-icon-dt, .front-page .search-icon-dt").show();
            $(".about-page .search-logo-white-dt, .front-page .search-logo-white-dt").hide();
            $(".about-page .external-link-logo-dt, .front-page .external-link-logo-dt").show();
            $(".about-page .external-link-logo-white-dt, .front-page .external-link-logo-white-dt").hide();
            $(".about-page #primary-menu a, .front-page #primary-menu a").css("color", "#1a9481");
            $(".about-page header .patient-portal-desktop a, .front-page header .patient-portal-desktop a").css("color", "#1a9481");



        } else {
            $(".about-page  header, .front-page  header").removeClass("header-white");
            $(".about-page .hamburger-white, .front-page  header .hamburger-white ").addClass("hamburger");
            $(".about-page  header p, .front-page  header p").addClass("phone-number-white");
            $(".about-page  header .MTH-logo-dt, .front-page  header .MTH-logo-dt").hide();
            $(".about-page  header .MTH-logo-white, .front-page  header .MTH-logo-white").show();
            $(".about-page  header .phone-blue, .front-page  header .phone-blue").hide();
            $(".about-page  header .phone-and-number .phone-white, .front-page  header .phone-and-number .phone-white").show();
            $(".about-page .search-icon-dt, .front-page .search-icon-dt").hide();
            $(".about-page .search-logo-white, .front-page .search-logo-white").show();
            $(".about-page .external-link-logo-dt, .front-page .external-link-logo-dt").hide();
            $(".about-page .external-link-logo-white-dt, .front-page .external-link-logo-white-dt").show();
            $(".about-page #primary-menu a, .front-page #primary-menu a").css("color", "white");
            // $(".about-page header .patient-portal-desktop a, .front-page header .patient-portal-desktop a").css("color", "white");
            $(".about-page header .search-logo-white-dt").show();



        }
    });
    // search state desktop
    $('.search-state-dt').hide();

    $('.search-icon-dt, .search-logo-white').on('click', function() {
        $('.search-state-dt').animate({ height: 'toggle' });
    });


    // Countdown
    if ($('body').hasClass('page-template-redirect')) {

        var $counter = $('#counter');
        var countDown = setInterval(function() {

            if (parseInt($counter.text()) === 0) {
                clearInterval(countDown);
                window.location.href = 'https://www.smartnd.ca/patient-portal/login';
            } else if (parseInt($counter.text()) > 0) {
                $counter.text(parseInt($counter.text()) - 1);
            }
        }, 1000);

    }


    //addinf contact us success message
    $('.wpcf7-submit').on('click', function() {
        $('.wpcf7-response-output').css('background-image', 'linear-gradient(to right, #1a9481, #9bcc93)');
        // $('body').css('background-image', 'linear-gradient(90deg,rgba(0, 53, 87, 0.76),rgba(0, 155, 132, 0.73))');
        // $('body').css('z-index','-3');

    });
    // $('.x-icon').on('click',function(){
    //   $('body').removeClass('.body-shadow'));
    // });
})(jQuery);
(function($) {

    $('.menu-toggle').on('click', function(event) {
        event.preventDefault();
        $('#primary-menu').toggle("slide", { direction: "left" }, 2000);
    })
})(jQuery);
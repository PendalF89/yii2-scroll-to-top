// Only enable if the document has a long scroll bar
// Note the window height + offset
// http://jsfiddle.net/panman8201/mkzrm/10/
(function ($) {

    if (($(window).height() + 100) < $(document).height()) {
        $('.scroll-to-top')
            .removeClass('hidden')
            .affix({
                // how far to scroll down before link "slides" into view
                offset: {top: 100}
            })
            .click(function (e) {
                $('html,body').animate({scrollTop: 0}, 'fast');
                return false;
            });
    }

}(jQuery));

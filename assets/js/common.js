(function() {
    // 헤더 네비게이션 관련 이벤트 
    $(document).on('mouseenter focusin', '#header .container .menu-list > ul > li > a', function() {
        $('body').addClass('nav-expanded');
    });
    $(document).on('mouseleave', '#header', function() {
        $('body').removeClass('nav-expanded');
    });

    $(document).on('mouseenter focus', '#header .container .menu-list > ul > li > a', function(e) {
        if ($(this).parent().hasClass('active')) {
            $(this).parent().removeClass('active');
        } else {
            $(this).parent().siblings('.active').removeClass('active');
            $(this).parent().addClass('active');
        }
        e.preventDefault();
    });
    $(document).on('mouseleave', '#header .container .menu-list > ul > li', function(e) {
        $(this).removeClass('active');
    });
})(jQuery);
// mouse over
$(".catalog-link").parent().mouseover(function(e) {
    var el_disp = $(this).find('.catalog-menu-sub').css('display');
    if (el_disp == 'none') {
        $(this).addClass('sfHover');
        $(this).find('.catalog-menu-sub').show(200);
    }
});
// mouse out
$(".catalog-link").parent().mouseleave(function(e) {
    var el_disp = $(this).find('.catalog-menu-sub').css('display');
    if (el_disp == 'block' || el_disp == 'inline-block') {
        $(this).removeClass('sfHover');
        $(this).find('.catalog-menu-sub').hide(200);
    }
});
// mouse click
$(".catalog-link").parent().click(function(e) {
    var el_disp = $(this).find('.catalog-menu-sub').css('display');
    /* ----- */
    $(".catalog-link").parent().removeClass('sfHover');
    $('.catalog-menu-sub').css('display', 'none');
    /* ----- */
    if (el_disp == 'none') {
        $(this).addClass('sfHover');
        $(this).find('.catalog-menu-sub').css('display', 'block');
        //$(this).find('.catalog-menu-sub').show(200);
    } else {
        $(this).removeClass('sfHover');
        $(this).find('.catalog-menu-sub').css('display', 'none');
        //$(this).find('.catalog-menu-sub').hide(200);
    }
});
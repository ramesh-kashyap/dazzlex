jQuery(document).ready(function ($) {

    var html = jQuery("html");

    /* ============== IE<8 WARNING ============== */

    if (html.hasClass("ie7")) {
        jQuery("body").empty().html('Please, Update your Browser to at least IE8');
    }


    /* ============== DISABLE EMPTY LINKS ============== */

    jQuery("[href=#]").click(function (event) {
        event.preventDefault();
    });


    /* ============== REMOVE LINKS OUTLINE IN IE 7 ============== */

    jQuery("a, input, textarea").attr("hideFocus", "true").css("outline", "none");


    /* ============== ODD/EVEN ============== */

    jQuery("").addClass("odd");
    jQuery("").addClass("even");


    /* ============== FIRST/LAST CHILD ============== */

    jQuery(".nav-menu li:first , .header-option li:first").addClass("first");
    jQuery(".nav-menu li:last , .header-option li:last , .new-contribution .table-row:last").addClass("last");


    /* ============== PARENT MENU ============== */

    jQuery(".nav-menu li").has('ul').addClass('parent');


    /* ============== STYLED SELECT , CHECKBOX , RADIOBOX ============== */

    if ($(".select-styled").length) {
        cuSel({changedEl: ".select-styled", visRows: 6, itemPadding: 14});
    }

    if (jQuery(".input-styled").length) {
        jQuery(".input-styled input").customInput();
    }

    /* ============== TOGGLES ============== */

    $('.toggle-link').click(function () {
        $(this).parents('.toggle').removeClass('collapsed');

        if (!$(this).hasClass('collapsed')) {
            $(this).parents('.toggle').addClass('collapsed');
        }
    });


    /* ============== TOOLTIPS DEFINE ============== */

    $(function () {
        $('[data-toggle="tooltip"]').tooltip();
    });


    /* ============== BACK TO TOP BUTTON ============== */

    jQuery("body").append('')

    $(window).on('scroll', function () {
        if (parseInt($(window).scrollTop(), 10) > 600) {
            $('#toTop').fadeIn(500);
        }
        else {
            $('#toTop').fadeOut(500);
        }
    });

    $('.anchor[href^="#"]').on('click', function (e) {
        e.preventDefault();
        var speed = 2,
            boost = 1,
            offset = 80,
            target = $(this).attr('href'),
            currPos = parseInt($(window).scrollTop(), 10),
            targetPos = target != "#" && $(target).length == 1 ? parseInt($(target).offset().top, 10) - offset : currPos,
            distance = targetPos - currPos,
            boost2 = Math.abs(distance * boost / 1000);
        $("html, body").animate({scrollTop: targetPos}, parseInt(Math.abs(distance / (speed + boost2)), 10));

    });


    setTimeout(function () {
        $('.alert-temporary').hide(900);
    }, 10000);

    calc_plan_perspectiv();
    change_slider();
    calc_plan();

    $('#plan_sel').change(function () {
        change_slider();
    });

    $('#plan_persp_sel').change(function () {
        change_slider_plan_persp();
    });

    $('.section-fp_alert-popup').on('click', '.page-overlay, .close-icon', function () {
        var overlay = $(this).parents('.section-fp_alert-popup').children('.page-overlay'),
            modal = $(this).parents('.section-fp_alert-popup').children('.fp_alert-modal');

        if (Modernizr.cssanimations) {
            modal.addClass('animated fadeOutUp');
            overlay.addClass('animated fadeOut').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
                overlay.removeClass('animated fadeOut').addClass('hidden');
                modal.removeClass('animated fadeOutUp').addClass('hidden');
                window.onmousewheel = document.onmousewheel = window.onscroll = document.onscroll = function (e) {
                    return true;
                };
            });
        } else {
            overlay.addClass('hidden');
            modal.addClass('hidden');
            window.onmousewheel = document.onmousewheel = window.onscroll = document.onscroll = function (e) {
                return true;
            };
        }
    });
});

function fp_alert(title, text) {
    var f = $('.section-fp_alert');

    $('.close-icon').each(function (k, v) {
        if ($(this).parents('.section-fp_alert').length == 0) {
            var s = $(this).parents('section');
            if (s.children('.page-overlay').hasClass('hidden') == false)
                $(this).click();
        }
    });

    f.find('.section-title').html(title);
    f.find('.section-subtitle').html(text);

    $('.section-fp_alert-popup .page-overlay, .section-fp_alert-popup .fp_alert-modal').removeClass('hidden');
    $('.section-fp_alert-popup .page-overlay').addClass("animated fadeIn");
    $('.section-fp_alert-popup .fp_alert-modal').addClass("animated fadeInDown").one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
        $('.section-fp_alert-popup .page-overlay').removeClass("animated fadeIn");
        $('.section-fp_alert-popup .fp_alert-modal').removeClass("animated fadeInDown");
    });
}

function calc_plan_perspectiv() {
    var plan = $('#plan_persp_sel').val();

    // todo: executing work in account
    var reg_plan = -1;
    var deposited = parseInt($('#slider-sum_dep_cp').parent().find('.jslider-value-to').children('span').text());

    var earn = deposited;
    var days = 0;

    var need_min_next = [];
    $.each(fp_sett_js.list_plans, function (k, p) {
        if (k >= 1) {
            need_min_next[k - 1] = p.deposit_min;
        }
    });

    var name_plan = '';
    $.each(fp_sett_js.list_plans, function (k, p) {
        if (p.id == plan) {
            reg_plan = 0;
            name_plan = p.name;
        }

        if (reg_plan >= 0) {
            reg_plan++;

            var proc = earn * parseFloat(p.earn_rate) / 100;

            while (earn < need_min_next[k]) {
                earn += proc;
                days++;
            }

            $('#days_cp_out').text(days);
            $('#calc_perspectiv_earn').text(addCommas(Math.round(earn)) + ' $');
            var title = "При вкладе " + addCommas(Math.round(deposited)) + " $ в план '" + name_plan + "', через " + days + " дней сможете вытащить сумму в размере " + addCommas(Math.round(earn)) + " $"; // todoȘ lang
            $('#calc_perspectiv_earn').attr({title: title, 'data-original-title': title});

            if (reg_plan >= 2 || k == (fp_sett_js.list_plans.length - 1)) {
                reg_plan = -1;
            }
        }
    });
}

function calc_plan() {
    if (fp_sett_js.list_plans == undefined) {
        return false;
    }

    var plan = $('#plan_sel').val();
    var s = $('#slider-sum').parent().find('.jslider-value-to').children('span').text();
    var d = $('#slider-days').parent().find('.jslider-value-to').children('span').text();

    // todo: executing work in account

    s = parseInt(s);
    d = parseInt(d);

    $.each(fp_sett_js.list_plans, function (k, p) {
        if (p.id == plan) {

            var earn = s;
            var proc = s * p.earn_rate / 100;

            earn += d * proc;

            $('#calc_plan_earn').text(addCommas(earn) + ' $'); // todo: need formating
        }
    });
}

function change_slider_plan_persp() {
    if (fp_sett_js.list_plans == undefined)
        return false;

    var plan = $('#plan_persp_sel').val();

    $.each(fp_sett_js.list_plans, function (k, v) {
        if (plan == v.id) {
            // Reload summ
            var p = $("#slider-sum_dep_cp").parent();
            p.children('.jslider').remove();
            $("#slider-sum_dep_cp").remove();

            var suma = parseInt(v.deposit_min) + Math.round((parseInt(v.deposit_max) - parseInt(v.deposit_min)) * 0.6);

            p.append('<input id="slider-sum_dep_cp" type="slider" name="price" value="0;' + suma + '"/>');

            jQuery("#slider-sum_dep_cp").slider({
                from: parseInt(v.deposit_min),
                to: parseInt(v.deposit_max),
                step: 10,
                round: 1,
                format: {format: '##', locale: 'ru'},
                dimension: '&nbsp;$',
                onstatechange: function () {
                    calc_plan_perspectiv();
                }
            });

            calc_plan_perspectiv();
        }
    });
}

function change_slider() {
    var plan = $('#plan_sel').val();

    $.each(fp_sett_js.list_plans, function (k, v) {
        if (plan == v.id) {
            // Reload summ
            var p = $("#slider-sum").parent();
            p.children('.jslider').remove();
            $("#slider-sum").remove();

            var suma = parseInt(v.deposit_min) + Math.round((parseInt(v.deposit_max) - parseInt(v.deposit_min)) * 0.6);

            p.append('<input id="slider-sum" type="slider" name="price" value="0;' + suma + '"/>');

            jQuery("#slider-sum").slider({
                from: parseInt(v.deposit_min),
                to: parseInt(v.deposit_max),
                step: 10,
                round: 1,
                format: {format: '##', locale: 'ru'},
                dimension: '&nbsp;$',
                onstatechange: function () {
                    calc_plan();
                }
            });

            // Reload days
            p = $("#slider-days").parent();
            p.children('.jslider').remove();
            $("#slider-days").remove();

            var days = Math.round(parseInt(v.freezing_days) * 0.3);

            p.append('<input id="slider-days" type="slider" name="days" value="0;' + days + '"/>');

            jQuery("#slider-days").slider({
                from: 1,
                to: parseInt(v.freezing_days),
                step: 1,
                round: 1,
                scale: ['|', '|', '|', '|', '|', '|', '|', '|', '|', '|', '|', '|', '|', '|', '|', '|'],
                format: {format: '##', locale: 'ru'},
                dimension: '&nbsp;' + fp_sett_js.lang['days'],
                onstatechange: function () {
                    calc_plan();
                }
            });


            calc_plan();
        }
    });
}

function addCommas(nStr) {
    nStr += '';
    x = nStr.split('.');
    x1 = x[0];
    x2 = x.length > 1 ? '.' + x[1] : '';
    var rgx = /(\d+)(\d{3})/;
    while (rgx.test(x1)) {
        x1 = x1.replace(rgx, '$1' + ' ' + '$2');
    }
    if(x2.length > 3){
        x2 = x2.substr(0, 3);
    }
    return x1 + x2;
}

var timeInit = (new Date()).getTime();
function startTime() {
    var tn = $('.timenow').first();
    var today = new Date(tn.attr('data-time'));
    var today_time = today.getTime();
    var timeDiffSec = (new Date()).getTime() - timeInit;
    today.setTime(today_time + timeDiffSec);
    var d = today.getDate();
    var M = today.getMonth() + 1;
    var y = today.getFullYear();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    d = checkTime(d);
    M = checkTime(M);
    h = checkTime(h);
    m = checkTime(m);
    s = checkTime(s);
    let listTimers = document.getElementsByClassName('timenow');
    for(var k in listTimers) {
        listTimers[k].innerHTML =
            d + '.' + M + '.' + y + ' ' + h + ":" + m + ":" + s;
    }
    var t = setTimeout(startTime, 500);
}

function checkTime(i) {
    if (i < 10) {
        i = "0" + i
    } // add zero in front of numbers < 10
    return i;
}

function numberFormat(number, decimals = 0, decPoint = '.', thousandsSep = ' ') {
    number = parseFloat(number).toFixed(decimals);

    let parts = number.split('.');
    let integerPart = parts[0];
    let decimalPart = parts[1] ? decPoint + parts[1] : '';

    integerPart = integerPart.replace(/\B(?=(\d{3})+(?!\d))/g, thousandsSep);

    return integerPart + decimalPart;
}
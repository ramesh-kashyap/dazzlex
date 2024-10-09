$(document).ready(function(){

    /**
     * Captch renew
     */
    $('.capcha-img').on('click', function(){
        $('.capcha-img').attr('src', '/captch.png?t=' + ((new Date()).getTime()));
    });

    /**
     * Authorization block
     */
    $('#modal_btn_auth').on('click', function(){
        var form = $(this).parents('form');
        var labelError = form.find('.label-error-value');

        let fUser = form.find('input[name=user]');
        let fPass = form.find('input[name=pass]');
        let fCaptch = form.find('input[name=captcha]');

        let user = fUser.val().trim();
        let pass = fPass.val().trim();
        let captch = fCaptch.val().trim();

        /**
         * Clears
         */
        labelError.text('');

        /**
         * Focus to inputs
         */
        if(user === ''){
            fUser.focus();
            return false;
        } else if(pass === ''){
            fPass.focus();
            return false;
        } else if(captch === '' && fCaptch.is(':visible')){
            fCaptch.focus();
            return false;
        }

        form.children('.netmi-loader-popup').show();

        /**
         * Clean inputs
         */
        fPass.val('');
        fCaptch.val('');

        /**
         *
         */
        $.post('/ajax', {
            go: 'auth',
            username: user,
            password: pass,
            captch: captch
        })
            .done(function(data){
                if(data.status && data.link){
                    window.location.href = data.link;
                } else {
                    labelError.text(data.error);
                    form.children('.netmi-loader-popup').hide();
                }

                if(data.show_captch && fCaptch.is(':visible') === false){
                    fCaptch.parent().show();
                }
            })
            .fail(function(){
                labelError.text('Sorry. Error authorization. Technical problem');
                form.children('.netmi-loader-popup').hide();
            })
            .always(function(){
                form.find('.capcha-img').trigger('click');
            });
    });

    /**
     *
     */
    $('#modal_btn_resetpass').on('click', function(){
        var form = $(this).parents('form');
        var labelError = form.find('.label-error-value');

        let fEmail = form.find('input[name=email]');
        let fCaptch = form.find('input[name=captcha]');

        let email = fEmail.val().trim();
        let captch = fCaptch.val().trim();

        /**
         * Clears
         */
        labelError.text('');

        /**
         * Focus to inputs
         */
        if(email === ''){
            fEmail.focus();
            return false;
        } else if(validateEmail(email) === false){
            fEmail.focus();
            labelError.text(LANG['error_format_email']);
            return false;
        } else if(captch === ''){
            fCaptch.focus();
            return false;
        }

        form.children('.netmi-loader-popup').show();

        /**
         * Clean inputs
         */
        fCaptch.val('');

        /**
         *
         */
        $.post('/ajax', {
            go: 'reset_pass',
            email: email,
            captch: captch
        })
            .done(function(data){

                if(data.status){
                    $('#popup-signin').find('.label-success-value').text(LANG['forgot_password_restable_se']).show();
                    setTimeout(function(){
                        $('#popup-signin').find('.label-success-value').hide(500).text('');
                    }, 5000);
                    popupOpen('#popup-signin');
                } else {
                    labelError.text(data.error);
                }
            })
            .fail(function(){
                labelError.text('Sorry. Error reset password. Technical problem');
            })
            .always(function(){
                form.find('.capcha-img').trigger('click');
                form.children('.netmi-loader-popup').hide();
            });
    });

    /**
     *
     */
    $('#modal_btn_reg').on('click', function(){
        var form = $(this).parents('form');
        var labelError = form.find('.label-error-value');

        let fUsername = form.find('input[name=username]');
        let fEmail = form.find('input[name=email]');
        let fPass1 = form.find('input[name=pass]');
        let fPass2 = form.find('input[name=pass2]');
        let fCaptch = form.find('input[name=captcha]');
        let fRules = form.find('input[name=dbl]');

        let username = fUsername.val().trim();
        let email = fEmail.val().trim();
        let pass1 = fPass1.val().trim();
        let pass2 = fPass2.val().trim();
        let captch = fCaptch.val().trim();
        let ruleIsChecked = fRules.prop('checked');

        /**
         * Clears
         */
        labelError.text('');

        /**
         * Focus to inputs
         */
        if(username === ''){
            fUsername.focus();
            return false;
        } else if(email === ''){
            fEmail.focus();
            return false;
        } else if(validateEmail(email) === false){
            fEmail.focus();
            labelError.text(LANG['error_format_email']);
            return false;
        } else if(pass1 === ''){
            fPass1.focus();
            return false;
        } else if(pass1.length < 8){
            fPass1.focus();
            labelError.text(LANG['min_lenght_pass']);
            return false;
        } else if(pass2 === ''){
            fPass2.focus();
            return false;
        } else if(pass1 !== pass2){
            fPass2.val('').focus();
            labelError.text(LANG['pass_diff']);
            return false;
        } else if(captch === ''){
            fCaptch.focus();
            return false;
        } else if(ruleIsChecked === false) {
            fRules.parent().fadeOut(500).fadeIn(500);
            return false;
        }

        form.children('.netmi-loader-popup').show();

        /**
         * Clean inputs
         */
        fCaptch.val('');

        /**
         *
         */
        $.post('/ajax', {
            go: 'reg',
            login: username,
            password: pass1,
            email: email,
            captch: captch,
            rules: 1
        })
            .done(function(data){

                if(data.status){
                    $('#popup-signin').find('.label-success-value').html(LANG['reg_success']).show();
                    setTimeout(function(){
                        $('#popup-signin').find('.label-success-value').hide(500).text('');
                    }, 5000);
                    popupOpen('#popup-signin');
                } else {
                    let message = [];
                    for(var k in data.errors){
                        message.push(data.errors[k]);
                    }
                    labelError.html(message.join("<br/>"));
                }
            })
            .fail(function(){
                labelError.html('Sorry. Error reg account. Technical problem');
            })
            .always(function(){
                form.find('.capcha-img').trigger('click');
                form.children('.netmi-loader-popup').hide();
            });
    });

    /**
     *
     */
    $('#btn_win_participate').on('click', function(){
        let fUsername = $('#fld-name');
        let fTelegram = $('#fld-tgid');
        let fReview = $('#fld-feedback-url');
        let fTgURL = $('#fld-contact');
        let username = fUsername.val().trim();
        let telegram_id = fTelegram.val().trim();
        let review_url = fReview.val().trim();
        let telegram_url = fTgURL.val().trim();

        if(username === ''){
            fUsername.focus();
        } else if(telegram_id === ''){
            fTelegram.focus();
        } else if(review_url === '' || validURL(review_url) === false){
            fReview.focus();
        } else if(telegram_url === '' || validURL(telegram_url) === false){
            fTgURL.focus();
        } else {

            $.post('/api-web/reviews-win-usdt', {
                contest: 1,
                username: username,
                telegram_id: telegram_id,
                hmetrics_url: review_url,
                tg_url: telegram_url
            }).done(function(data){
                window.location.reload();
            }).fail(function(data){
                alert(data.responseJSON.message);
            });
        }

        return false;
    });

    /**
     *
     */
    $('#btn_win_usdt_participate').on('click', function(){
        let fUsername = $('#fld-name');
        let fTelegram = $('#fld-tgid');
        let fReview = $('#fld-feedback-url');
        let fTgURL = $('#fld-contact');
        let username = fUsername.val().trim();
        let telegram_id = fTelegram.val().trim();
        let review_url = fReview.val().trim();
        let telegram_url = fTgURL.val().trim();

        if(username === ''){
            fUsername.focus();
        } else if(telegram_id === ''){
            fTelegram.focus();
        } else if(review_url === '' || validURL(review_url) === false){
            fReview.focus();
        } else if(telegram_url === '' || validURL(telegram_url) === false){
            fTgURL.focus();
        } else {

            $.post('/api-web/reviews-win', {
                username: username,
                telegram_id: telegram_id,
                hmetrics_url: review_url,
                tg_url: telegram_url
            }).done(function(data){
                window.location.reload();
            }).fail(function(data){
                alert(data.responseJSON.message);
            });
        }

        return false;
    });

    /**
     *
     */
    $('.btn_booster_check').on('click', function(){
        let task = $(this).data('task');
        let type = $(this).data('type');

        if ($(this).hasClass('disabled') === false) {
            var promptValue;

            if(type !== 'confirm_dialog' || (promptValue = prompt($(this).data('dialog-msg')))) {
                var btn = $(this);
                $(this).addClass('disabled');
                let textBtn = $(this).text();

                $(this).text(textBtn + ' ...');

                boosterCheck(
                    task,
                    function (data) {
                        alert(data.message);
                        window.location.reload();
                    },
                    function (message) {
                        alert(message);
                    },
                    function () {
                        btn.text(textBtn);
                        btn.removeClass('disabled');
                    },
                    promptValue
                )
            }
        }

        return false;
    });
});

function boosterCheck(task, callbackDone, callbackFail, callbackAlways, promptValue)
{
    $.post('/api-web/booster-check', {
        task: task,
        value: promptValue
    }).done(function(data){
        callbackDone(data);
    }).fail(function(data){
        callbackFail(data.responseJSON.message);
    }).always(function(){
        callbackAlways();
    });
}

function validURL(str) {
    var pattern = new RegExp('^(https?:\\/\\/)?'+ // protocol
        '((([a-z\\d]([a-z\\d-]*[a-z\\d])*)\\.)+[a-z]{2,}|'+ // domain name
        '((\\d{1,3}\\.){3}\\d{1,3}))'+ // OR ip (v4) address
        '(\\:\\d+)?(\\/[-a-z\\d%_.~+]*)*'+ // port and path
        '(\\?[;&a-z\\d%_.~+=-]*)?'+ // query string
        '(\\#[-a-z\\d_]*)?$','i'); // fragment locator
    return !!pattern.test(str);
}

function onTelegramAuth(user) {
    var labelError = $('#popup-signin').find('.label-error-value');

    $.post('/ajax', {
        go: 'auth-telegram',
        user: user
    })
        .done(function (data) {
            if (data.status && data.link) {
                window.location.href = data.link;
            } else {
                labelError.text(data.error);
            }
        })
        .fail(function () {
            labelError.text('Sorry. Error authorization. Technical problem');
        });
}
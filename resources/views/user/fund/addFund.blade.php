<main class="eas bg-gray">
    <div class="account-mob-link">
        <div class="container">
            <a class="js-account-menu" href="#"><i class="flaticon-menu"></i>Navigation</a>
            <a href="/notifications" class="notification-mobile"><img
                    src="{{ asset('') }}assets/theme/images/netmi/left-menu/new-notifications.svg?v=3.22.1726217824"
                    alt=""><span class="notification-buble-mobile total_count_notifications"></span></a>
        </div>
    </div>

    <div class="container">
        <div class="row help-row">
            <div class="col-xl-9 col-lg-8">
                <div class="account-info-list">





                    <style type="text/css">
                        .account-tab form {
                            position: relative;
                        }

                    </style>
                    <div class="account-tabs" style="display:none">
                        <div class="account-tabs-white">
                            <a class="active" data-tab="crypt" style="outline: none;" hidefocus="true">
                                <strong>Cryptocurrencies</strong></a>
                        </div>
                    </div>
















                    <div class="account-tab tab-crypt active">
                     
                        <div class="account-form account-form--2">
                            <div class="caption caption--border">Balance funding</div>




                            <form method="POST" id="form-id" action="{{ route('user.fundconfirm') }}">
                            @csrf                                <div class="recharge-page" style="display:none">
                                    <img
                                        src="{{ asset('') }}assets/images/icons/coinpayments4.png?v=3.22.1726217824">
                                    <h3>Cryptocurrencies</h3>
                                </div>
                                <div class="cls"></div>
                                <div style="margin-top: 20px;">


                             



                                    <div class="exchange__section">
                                        <div class="exchange__section__row exchange__process">
                                            <div class="exchange__status exchange-status-section">
                                                <div class="exchange__status__item no-grab">
                                                    <div class="exchange__status__status">
                                                        <span
                                                            class="exchange__status__status__text exchange-status status-color__grey">Top
                                                            up order</span>
                                                        <span class="exchange-status-icon">
                                                            <img class="exchange__status__status__spinner"
                                                                src="{{ asset('') }}assets/images/icons/top-up.svg"
                                                                alt="">
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="exchange-process-details">
                                                <div class="exchange__process__row">
                                                    <div class="exchange__deposit__box">
                                                        <div class="exchange__form">
                                                            <div class="g g-fill"><label>Choose a crypto
                                                                    currency</label>
                                                                <div class="xsel xsel--0">
                                                                    <div class="SumoSelect sumo_network_id" tabindex="0"
                                                                        role="button" aria-expanded="false"><select
                                                                            name="paymentMode"
                                                                            class="js-select SumoUnder method-wallet">
                                                                          
                                                                            <option value="USDT.TRC20"
                                                                                data-img="{{ asset('') }}assets/images/coins/BEP20_BNB.svg?v=3.22.1726217824">
                                                                                USDT (TRC20)</option>
                                                                        
                                                                            <option value="USDT.BEP20"
                                                                                data-img="{{ asset('') }}assets/images/coins/TRC20_USDT.svg?v=3.22.1726217824">
                                                                                USDT (BEP20)</option>
                                                                        </select></div>
                                                                </div>
                                                            </div>
                                                            <div class="g g-fill g-currency">
                                                                <span class="currency" style="right: 20px;">$</span>
                                                                <label>Enter an Amount</label>
                                                                <input type="text" name="amount" value="100"
                                                                    class="inp inp-0 input-only-pos suma-recharge">
                                                            </div>
                                                        </div>
                                                        <div class="exchange__details">
                                                            <div class="exchange__details__info no-grab">
                                                                <div class="exchange__details__title">
                                                                    <div class="exchange__details__title__text">Payment
                                                                        Information</div>
                                                                </div>
                                                                <div class="exchange__details__item">
                                                                    Current Rate<span
                                                                        class="exchange__details__item__data data-rate"><span
                                                                            id="exchange_info_rate">..</span> <span
                                                                            class="exchange_info_curr">..</span> = 1
                                                                        USD</span>
                                                                </div>
                                                                <div class="exchange__details__item">
                                                                    Minimum amount<span
                                                                        class="exchange__details__item__data data-netfee"><span
                                                                            id="exchange_info_min">..</span> <span
                                                                            class="exchange_info_curr">..</span></span>
                                                                </div>
                                                                <div class="exchange__details__item">
                                                                    Fee<span
                                                                        class="exchange__details__item__data data-fee"><span
                                                                            id="exchange_info_fee">..</span></span>
                                                                </div>
                                                                <div class="exchange__details__item">
                                                                    Processing Time<span
                                                                        class="exchange__details__item__data data-minutes">3-5
                                                                        Minutes</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="exchange__process__details__coins">
                                                    <!-- <div class="exchange__process__details__coin">
                                                        <div class="exchange__process__details__column">
                                                            <div
                                                                class="exchange__process__details__coin__label no-grab">
                                                                You Send</div>
                                                            <div
                                                                class="exchange__process__details__coin__amount final-deposit-amount">
                                                                ..</div>
                                                        </div>
                                                        <div class="exchange__process__details__coin__holder">
                                                            <img class="exchange__process__details__coin__icon crypt-icon no-grab"
                                                                src="{{ asset('') }}assets/images/coins/TRX.svg?v=3.22.1726217824"
                                                                alt="">
                                                            <span
                                                                class="exchange__process__details__coin__str">TRX</span>
                                                        </div>
                                                        <div
                                                            class="exchange__process__details__coin__network deposit-network">
                                                            TRC-20</div>
                                                    </div> -->

                                                    <div class="exchange__process__details__middle">
                                                        <div class="exchange__process__details__arrow progress-arrows">
                                                            <span></span>
                                                            <span></span>
                                                            <span></span>
                                                        </div>
                                                    </div>

                                                    <!-- <div class="exchange__process__details__coin">
                                                        <div class="exchange__process__details__column">
                                                            <div
                                                                class="exchange__process__details__coin__label no-grab">
                                                                You Receive</div>
                                                            <div class="exchange__process__details__coin__amount">
                                                                <span class="final-receive-amount">..</span>
                                                            </div>
                                                        </div>
                                                        <div class="exchange__process__details__coin__holder">
                                                            <img class="exchange__process__details__coin__icon no-grab"
                                                                src="{{ asset('') }}assets/images/coins/BALANCE.svg?v=3.22.1726217824"
                                                                alt="">
                                                            USD
                                                        </div>
                                                        <div
                                                            class="exchange__process__details__coin__network receive-network">
                                                            BALANCE</div>
                                                    </div> -->
                                                </div>

                                                <div class="exchange__process__info">
                                                    <div class="exchange__process__info__item">The current rate will be
                                                        fixed for <b>20 minutes</b> since the time of placing of a Top
                                                        Up Order.</div>
                                                    <div class="exchange__process__info__item">The order execution
                                                        process will be automatically updated stage by stage depending
                                                        on the status of the transaction.</div>
                                                </div>

                                                <div class="b b--1">
                                                    <button type="submit" class="btn btn-b btn-recharge"
                                                         style="outline: none; color:#fff;">
                                                        Add funds </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>



                    <style type="text/css">
                        <blade media|%20screen%20and%20(max-width%3A%20760px)%20%7B>td:nth-of-type(1):before {
                            content: "Date";
                            text-align: left;
                        }

                        td:nth-of-type(2):before {
                            content: "Amount";
                            text-align: left;
                        }

                        td:nth-of-type(3):before {
                            content: "Status";
                            text-align: left;
                        }

                        td:nth-of-type(4):before {
                            content: "Action";
                            text-align: left;
                        }

                        .table td.text-center {
                            text-align: left !important;
                        }

                        .table tr {
                            border-bottom: 0px;
                        }

                        .table tr:nth-of-type(odd) {
                            background: #f7f8fc;
                        }
                        }

                    </style>

                    <script type="text/javascript">
                        function loadDataExchangeInfo(method) {
                            $('#exchange_info_rate').text('..');
                            $('#exchange_info_curr').text('..');
                            $('#exchange_info_min').text('..');
                            $('#exchange_info_fee').text('..');

                            var fieldSuma = $('form[data-type=crypt]').find('input[name=suma]');
                            fieldSuma.attr('disabled', 'disabled');

                            $.post('/ajax', {
                                    go: 'exchange_crypt_rate_recharge',
                                    code: method
                                })
                                .done(function (data) {
                                    if (data.status) {
                                        $('#exchange_info_rate').text(data.rate_formatted);
                                        $('.exchange_info_curr').text(data.currency);
                                        $('#exchange_info_min').text(data.min);
                                        $('#exchange_info_fee').text(data.fee);

                                        fieldSuma.attr('data-rate', data.rate);
                                        fieldSuma.attr('data-fee', JSON.stringify(data.fee_data));
                                        calcDepositReceiveAmount();
                                    }
                                })
                                .always(function () {
                                    fieldSuma.removeAttr('disabled');
                                });
                        }

                        function calcDepositReceiveAmount() {
                            var fieldSuma = $('form[data-type=crypt]').find('input[name=suma]');
                            let decimal = parseFloat(fieldSuma.attr('data-rate')) >= 0.98 ? 4 : 8;
                            let deposit = parseFloat(fieldSuma.val()) * parseFloat(fieldSuma.attr('data-rate'));

                            let feeData = JSON.parse(fieldSuma.attr('data-fee'));

                            /**
                             * Calculate Fee
                             */
                            let amountFinal = deposit;
                            if (feeData.fee_percent > 0) {
                                amountFinal = Math.ceil(deposit * (100 + feeData.fee_percent) * Math.pow(10, decimal -
                                    2)) / Math.pow(10, decimal);
                            }
                            if (amountFinal - deposit < feeData.minimum_fee) {
                                deposit += feeData.minimum_fee;
                            } else {
                                deposit = amountFinal;
                            }
                            deposit += feeData.fee_static;
                            deposit = Math.ceil(deposit * Math.pow(10, decimal)) / Math.pow(10, decimal);

                            $('.final-deposit-amount').text(deposit);
                            $('.final-receive-amount').text(fieldSuma.val());
                        }

                    </script>

                </div>
            </div>




            @include('layouts.sidebar')




</main>
<footer class="footer">
    <div class="bottom">
        <div class="inner">
            <div class="copyright">Copyright © 2023. All rights reserved.<br>Netmi Limited.</div>
            <div class="clr"></div>
        </div>
    </div>
</footer>
</div>

<!-- Alerts form -->
<section class="section-fp_alert section-fp_alert-popup">
    <div class="page-overlay hidden"></div>

    <div class="fp_alert-modal hidden">
        <div class="popup-form-container">
            <div class="popup-form-header">
                <div class="close-icon"></div>
            </div>
            <div class="popup-form-content">
                <div class="entry-title clearfix">
                    <h2 class="section-title"></h2>

                    <h3 class="section-subtitle"></h3>
                </div>
            </div>
        </div>
    </div>
</section>
</div>

<!-- scripts -->
<!-- https://cdn.jsdelivr.net/jquery/1.11.1/jquery.min.js -->
<script src="{{ asset('') }}assets/js/jquery.min.js?v=3.22.1726217824"></script>
<!-- https://cdn.jsdelivr.net/jquery.migrate/1.2.1/jquery-migrate.min.js -->
<script src="{{ asset('') }}assets/js/jquery-migrate.min.js?v=3.22.1726217824"></script>
<!-- https://cdn.jsdelivr.net/modernizr/2.8.3/modernizr.min.js -->
<script type="text/javascript" src="{{ asset('') }}assets/template/js/menu.js?v=3.22.1726217824">
</script>

<!--https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js-->
<script src="{{ asset('') }}assets/js/bootstrap.min.js?v=3.22.1726217824"></script>
<!-- RANGE -->
<script src="{{ asset('') }}assets/js/jquery.slider.min.js?v=3.22.1726217824"></script>
<!-- CAROUFREDSEL JS -->
<!--https://cdn.jsdelivr.net/caroufredsel/6.2.1/jquery.carouFredSel.packed.js-->
<script src="{{ asset('') }}assets/js/jquery.carouFredSel.packed.js?v=3.22.1726217824"></script>
<!--https://cdn.jsdelivr.net/caroufredsel/6.2.1/helper-plugins/jquery.mousewheel.min.js-->
<script src="{{ asset('') }}assets/js/jquery.mousewheel.min.js?v=3.22.1726217824"></script>
<!--https://cdn.jsdelivr.net/caroufredsel/6.2.1/helper-plugins/jquery.touchSwipe.min.js-->
<script src="{{ asset('') }}assets/js/jquery.touchSwipe.min.js?v=3.22.1726217824"></script>
<!-- FLIP CLOCK JS -->
<script src="{{ asset('') }}assets/js/flipclock.min.js?v=3.22.1726217824"></script>
<!-- CUSEL JS -->
<script src="{{ asset('') }}assets/js/cusel.min.js?v=3.22.1726217824'"></script>
<!-- OTHER JS -->
<script src="{{ asset('') }}assets/js/jquery.countTo.js?v=3.22.1726217824"></script>
<script src="{{ asset('') }}assets/js/jquery.customInput.js?v=3.22.1726217824"></script>
<script src="{{ asset('') }}assets/js/onScreen.js?v=3.22.1726217824"></script>
<script src="{{ asset('') }}assets/js/jquery.nicescroll.min.js?v=3.22.1726217824"></script>
<script type="text/javascript"
    src="{{ asset('') }}assets/template/js/jquery-confirm.min.js?v=3.22.1726217824"></script>
<script type="text/javascript">
    jconfirm.defaults = {
        theme: 'modern'
    };

</script>
<!-- General JS -->
<script src="{{ asset('') }}assets/js/general.js?v=3.22.1726217824" type="text/javascript"></script>
<script src="{{ asset('') }}assets/js/account.js?v=3.22.1726217824" type="text/javascript"></script>

<script type="text/javascript" src="{{ asset('') }}assets/theme/js/core.js?v=3.22.1726217824">
</script>
<script type="text/javascript" src="{{ asset('') }}assets/theme/js/inner.js?v=3.22.1726217824">
</script>



<!--    <script type="text/javascript" src="{{ asset('') }}assets/js/jquery-ui.min.js"></script>-->




<script type="text/javascript">
    $(document).ready(function ($) {
        $("section").onScreen({
            tolerance: 200,
            debug: false,
            toggleClass: false,
            doIn: function () {
                $(this).addClass('animated');
                $(this).find('*').each(function () {
                    if ($(this).attr('data-animate')) {
                        $(this).addClass($(this).attr('data-animate')).addClass('animated');
                    }
                });
            }
        });

        $(".global-ranking").onScreen({
            tolerance: 200,
            debug: false,
            toggleClass: false,
            doIn: function () {
                $('.count').countTo();
            }
        });

    });

</script>


<script type="text/javascript">
    var global_params = [];
    $(document).ready(function ($) {
        let btnResend = 'yes';
        var reset_timer = parseInt('-1384657');

        let params = {
            title: '<img src="{{ asset('') }}assets/images/animated/email-animate.svg" alt="">',
            content: 'Please, check your e-mail and follow instructions to confirm your account registration.',
            type: 'dark',
            buttons: {
                confirm: {
                    text: 'Resend',
                    isDisabled: btnResend === 'no' && reset_timer > 0,
                    btnClass: btnResend === 'yes' || reset_timer <= 0 ? 'btn-dark' : 'btn-default',
                    action: function () {
                        resendMailConfirmation();
                    }
                },
                ok: {}
            }
        }
        if (reset_timer > 0) {
            params.autoClose = 'confirm|' + (reset_timer * 1000)
        }

        $.alert(params);

        function resendMailConfirmation() {
            $.post('/ajax', {
                go: 'resend_email_confirmation'
            }).done(function (data) {
                $.alert({
                    icon: '',
                    title: '<img src="{{ asset('') }}assets/theme/images/animated/success.svg?' +
                        Math.floor(Math.random() * 1000000) + '" alt="">',
                    type: 'green',
                    content: 'The message with confirmation instructions was sent to your e-mail address.'
                });
            });
        }
        $('form[data-type=crypt]').find('input[name=suma]').keyup(function () {
            calcDepositReceiveAmount()
        });

        setInterval(function () {
            loadDataExchangeInfo($('select[name=method]').val())
        }, 60000);

        $('select[name=method]').change(function () {
            let value = $(this).val();
            loadDataExchangeInfo(value);

            let img = $(this).children('option:selected').data('img');
            $('.exchange__process__details__coin__icon.crypt-icon').attr('src', img);

            let match = value.match(/cryptapi_(\w+)(?:\.(\w+))?/);
            if (match) {
                $('.exchange__process__details__coin__str').text(match[1]);
                if (match[2]) {
                    $('.exchange__process__details__coin__network.deposit-network').text(match[2])
                        .removeClass('hide');
                } else {
                    $('.exchange__process__details__coin__network.deposit-network').addClass('hide');
                }
            }

            //
            $(this).next('p.selected').find('.preimgcrypt').remove();
            if (img !== undefined) {
                $(this).next('p.selected').prepend(
                    '<img class="preimgcrypt" style="float: left;" src="' + img + '"/>');
            }
        });
        $('select[name=method]').trigger('change');

        $('select[name=method]').on('sumo:opening', function (sumo) {
            var selectObj = $(this);

            if (selectObj.hasClass('imgCryptAppended') === false) {
                let optWrapper = selectObj.next().next('.optWrapper');
                selectObj.children('option').each(function (k) {
                    let img = $(this).data('img');
                    if (img !== undefined) {
                        $(optWrapper.children().children()[k]).append('<img src="' + img +
                        '">');
                    }
                });
            }
            selectObj.addClass('imgCryptAppended');

        });

        $('.btn-recharge[type=button]').on('click', function () {
            var form = $(this).parents('form');
            var type = form.data('type');
            var suma = form.find('.suma-recharge').val();
            let walletSelect = form.find('.method-wallet');
            var method = walletSelect ? form.find('.method-wallet').val() : null;

            if (form.children('.loading').length === 0) {
                form.append('<div class="loading"></div>');
            }

            form.children('.loading').show();

            $.post('/pay/' + type, {
                    suma: suma,
                    method: method
                })
                .done(function (response) {

                    if (response.modal !== undefined) {
                        $.alert({
                            icon: 'flaticon-money',
                            title: '<img src="{{ asset('') }}assets/theme/images/notifications/success-top-up.svg" alt=""> Congratulations! You have successfully funded your account balance via',
                            columnClass: 'medium',
                            containerFluid: true,
                            content: response.modal,
                            type: 'green'
                        });
                    } else if (response.redirect !== undefined) {
                        // window.open(response.redirect);
                        window.location.href = response.redirect;
                    }

                    if (type === 'coinpayments') {
                        setTimeout(function () {
                            window.location.reload();
                        }, 1000);
                    }
                })
                .fail(function (response) {
                    $.alert({
                        icon: 'flaticon-info',
                        title: '',
                        content: response.responseJSON.error,
                        type: 'red'
                    });
                })
                .always(function () {
                    form.children('.loading').hide();
                });
        });
    });

</script>
<script type="text/javascript" src="https://netmi.org/api-web/js-last-news"></script>

</body>

</html>

<!-- Generated in 0.0156 s. -->
<!-- Version 3.22.1726217824 -->

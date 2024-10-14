<main class="eas bg-gray">
    <div class="account-mob-link">
        <div class="container">
            <a class="js-account-menu" href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 80" width="40" height="40" style="font-size: 24px; display: flex; margin: 0px 9px 0 0; color: #8e88a4;width:17px">
    <rect width="100" height="20" fill="currentColor"></rect>
    <rect y="30" width="100" height="20" fill="currentColor"></rect>
    <rect y="60" width="100" height="20" fill="currentColor"></rect>
  </svg>Navigation</a>
            <a href="/notifications" class="notification-mobile"><img
                    src="{{ asset('') }}assets/theme/images/netmi/left-menu/new-notifications.svg?v=3.22.1726217824"
                    alt=""><span class="notification-buble-mobile total_count_notifications"></span></a>
        </div>
    </div>

    <div class="container">
        <div class="row help-row">
            <div class="col-xl-9 col-lg-8">
                <div class="account-info-list">







                    <div class="account-form account-form--2">

                        <form action="{{ route('user.Withdraw-Request') }}" method="POST">
                        {{ csrf_field() }}

                            <div class="caption caption--border">Withdrawal of funds</div>
                            <div style="margin-top: 20px;">
                              

                                <div class="exchange__section">
                                    <div class="exchange__section__row exchange__process">
                                        <div class="exchange__status exchange-status-section">
                                            <div class="exchange__status__item no-grab">
                                                <div class="exchange__status__status">
                                                    <span
                                                        class="exchange__status__status__text exchange-status status-color__grey">New
                                                        withdrawal</span>
                                                    <span class="exchange-status-icon">
                                                        <img class="exchange__status__status__spinner"
                                                            src="{{ asset('') }}assets/images/icons/payouts.svg"
                                                            alt="">
                                                    </span>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="exchange-process-details">
                                            <div class="exchange__process__row">
                                                <div class="exchange__deposit__box">
                                                    <div class="exchange__form">
                                                        <div class="g g-fill">
                                                            <label>Payment method</label>
                                                            <div class="xsel xsel--0">
                                                                <div class="SumoSelect sumo_network_id" tabindex="0"
                                                                    role="button" aria-expanded="false">

                                                                    <select name="paymentMode" id="payout_method_select" class="js-select SumoUnder" onmousedown="return false" onselectstart="return false">
    <option value="USDT.TRC20" data-wallet="" data-img="{{ asset('') }}assets/images/coins/BEP20_BNB.svg?v=3.22.1726217824">USDT (TRC20)</option>
    <option value="USDT.BEP20" data-wallet="" data-img="{{ asset('') }}assets/images/coins/TRC20_USDT.svg?v=3.22.1726217824">USDT (BEP20)</option>
</select>
                                                                    <script type="text/javascript">
                                                                        var fp_payments = [];

                                                                    </script>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="g g-fill g-currency">
                                                            <span class="currency" style="right: 20px;">$</span>
                                                            <label>Withdrawal amount<span
                                                                    style="font-size: 13px; padding-left: 0px; float: right;">Available:{{ currency() }} {{ number_format(Auth::user()->available_balance(), 2) }}
                                                                    <b style="color: #aa72cf; display: inline-block;">
                                                                        </b></span></label>
                                                                        <input type="text" placeholder="Amount" class="inp inp-0 input-only-pos" value="" name="amount">
                                                        </div>
                                                        <div class="g g-fill g-currency">
                                                            <span class="currency" style="right: 20px;"></span>
                                                            <label>Transaction Password</label>
                                                                        <input type="text"  placeholder="Transaction Password" class="inp inp-0 input-only-pos" value="" name="transaction_password">
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
                                                                    class="exchange__details__item__data data-rate">1
                                                                    USD = <span id="exchange_info_rate">..</span> <span
                                                                        class="exchange_info_curr">..</span></span>
                                                            </div>
                                                            <div class="exchange__details__item">
                                                                Minimum amount<span
                                                                    class="exchange__details__item__data data-netfee"><span
                                                                        id="exchange_info_min">..</span>
                                                                    <span>USD</span></span>
                                                            </div>
                                                            <div class="exchange__details__item">
                                                                Fee<span
                                                                    class="exchange__details__item__data data-fee"><span
                                                                        id="exchange_info_fee">..</span></span>
                                                            </div>
                                                            <div class="exchange__details__item">
                                                                Processing Time<span
                                                                    class="exchange__details__item__data data-minutes">5-15
                                                                    Minutes</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="exchange__process__details__coins">
                                                <div class="exchange__process__details__coin">
                                                    <div class="exchange__process__details__column">
                                                        <div class="exchange__process__details__coin__label no-grab">You
                                                            Withdraw</div>
                                                            <div class="exchange__process__details__coin__amount">
    <span class="final-receive-amount">400</span>
</div>
                                                    </div>
                                                    <div class="exchange__process__details__coin__holder">
                                                        <!-- <img class="exchange__process__details__coin__icon no-grab"
                                                            src="{{ asset('') }}assets/images/coins/BALANCE.svg?v=3.22.1726217824"
                                                            alt=""> -->
                                                        USD
                                                    </div>
                                                    <div
                                                        class="exchange__process__details__coin__network receive-network">
                                                        BALANCE</div>
                                                </div>
                                                <div class="exchange__process__details__middle">
                                                    <div class="exchange__process__details__arrow progress-arrows">
                                                        <span></span>
                                                        <span></span>
                                                        <span></span>
                                                    </div>
                                                </div>
                                                <div class="exchange__process__details__coin">
                                                    <div class="exchange__process__details__column">
                                                        <div class="exchange__process__details__coin__label no-grab">You
                                                            Receive</div>
                                                            <div class="exchange__process__details__coin__amount final-deposit-amount"></div>
                                                    </div>
                                                    <div class="exchange__process__details__coin__holder">
                                                        <img class="exchange__process__details__coin__icon crypt-icon no-grab"
                                                            src="{{ asset('') }}assets/images/coins/BTC.svg"
                                                            alt="">
                                                        <span class="exchange__process__details__coin__str">TRX</span>
                                                    </div>
                                                    <div
                                                        class="exchange__process__details__coin__network deposit-network">
                                                        TRC-20</div>
                                                </div>
                                            </div>

                                            <div class="exchange__process__info">
                                                <div class="exchange__process__info__item">Withdrawals are made to the
                                                    payment system which you used to top up your balance.</div>
                                                <div class="exchange__process__info__item">The status of your withdrawal
                                                    will be automatically updated from stage to stage, until the
                                                    transfer of funds is completed.</div>
                                                <div class="exchange__process__info__item">Make sure that you have
                                                    specified the correct payment wallet address in the appropriate
                                                    blockchain network.</div>
                                            </div>

                                            <div class="b b--1">
                                                <button type="submit" class="btn btn-b" hidefocus="true"
                                                    style="outline: none; color:#fff;">Withdraw </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>


                        <script type="text/javascript">
                            function loadDataExchangeInfo(method) {
                                $('#exchange_info_rate').text('..');
                                $('#exchange_info_curr').text('..');
                                $('#exchange_info_min').text('..');
                                $('#exchange_info_fee').text('..');

                                var fieldSuma = $('form').find('input[name=suma]');
                                fieldSuma.attr('disabled', 'disabled');

                                $.post('/ajax', {
                                        go: 'exchange_crypt_rate_recharge_out',
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
                                            calcWithdrawalReceiveAmount();
                                        }
                                    })
                                    .always(function () {
                                        fieldSuma.removeAttr('disabled');
                                    });
                            }

                            function calcWithdrawalReceiveAmount() {
                                var fieldSuma = $('form').find('input[name=suma]');
                                let decimal = parseFloat(fieldSuma.attr('data-rate')) >= 0.98 ? 4 : 8;
                                let deposit = parseFloat(fieldSuma.val()) * parseFloat(fieldSuma.attr('data-rate'));

                                let feeData = JSON.parse(fieldSuma.attr('data-fee'));

                                /**
                                 * Calculate Fee
                                 */
                                let amountFinal = deposit;
                                if (feeData.fee_percent > 0) {
                                    amountFinal = Math.ceil(deposit * (100 - feeData.fee_percent) * Math.pow(10,
                                        decimal - 2)) / Math.pow(10, decimal);
                                }

                                if (deposit - amountFinal < feeData.minimum_fee) {
                                    deposit -= feeData.minimum_fee;
                                } else {
                                    deposit = amountFinal;
                                }
                                deposit -= feeData.fee_static;
                                deposit = Math.ceil(deposit * Math.pow(10, decimal)) / Math.pow(10, decimal);

                                $('.final-deposit-amount').text(deposit);
                                $('.final-receive-amount').text(fieldSuma.val());
                            }

                        </script>


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


<script>
    document.getElementById('payout_method_select').addEventListener('change', function() {
        // Get the selected option text (for display)
        var selectedOptionText = this.options[this.selectedIndex].text;

        // Update the 'final-deposit-amount' div with the selected payment mode
        document.querySelector('.final-deposit-amount').textContent = selectedOptionText;
    });
</script>
<!-- General JS -->
<script src="{{ asset('') }}assets/js/general.js?v=3.22.1726217824" type="text/javascript"></script>
<script src="{{ asset('') }}assets/js/account.js?v=3.22.1726217824" type="text/javascript"></script>

<script type="text/javascript" src="{{ asset('') }}assets/theme/js/core.js?v=3.22.1726217824">
</script>
<script type="text/javascript" src="{{ asset('') }}assets/theme/js/inner.js?v=3.22.1726217824">
</script>


<script>
    document.querySelector('input[name="amount"]').addEventListener('input', function() {
        var enteredAmount = this.value;
        document.querySelector('.final-receive-amount').textContent = enteredAmount;
    });
</script>

<script type="text/javascript">
    $(document).ready(function () {
        select_method_wallet();
        $('#payout_method_select').on('change', function () {
            select_method_wallet();
        });
    });

    function select_method_wallet() {
        let span = $('#wallet_method_payment');
        let textWallet = span.text();
        if (span.data('text-no-wallet') === undefined) {
            span.data('text-no-wallet', textWallet);
        }

        var wallet = $('#payout_method_select option:selected').attr('data-wallet');
        if (wallet === '') {
            wallet = span.data('text-no-wallet');
            $('.link_set_wallet').show();
        } else {
            $('.link_set_wallet').hide();
        }
        $('#wallet_method_payment').text(wallet);
    }

</script>



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
    $(document).ready(function () {
        var ctime;

        if (existPayoutsWaits()) {
            ctime = setInterval(function () {

                if (existPayoutsWaits() === false && ctime !== undefined) {
                    clearInterval(ctime);
                }

                checkPayouts();

            }, 3000);
        }


    });

    function existPayoutsWaits() {
        return $('.payouts_wait[data-status=process]').length > 0;
    }

    function checkPayoutsIDS(ids, callback) {
        if (ids.length > 0) {
            $.post('/ajax', {
                    go: 'check_payouts',
                    ids: ids
                })
                .done(function (data) {
                    callback(data);
                })
                .fail(function () {
                    window.location.href = '/payout';
                })
        }
    }

    function checkPayouts() {
        var ids = [];

        $('.payouts_wait[data-status=process]').each(function () {
            let id = $(this).data('id');

            ids.push(id);
        })

        checkPayoutsIDS(ids, function (data) {
            if (data.status && data.list.length > 0) {

                for (var k in data.list) {
                    let st = data.list[k];
                    let tr = $('tr.payouts_wait[data-id="' + st.id + '"]');
                    let status, icon;

                    if (st.status === 'ok') {
                        status = 'succes';
                        icon = 'status-check';
                    } else if (st.status === 'cancel' || st.status === 'cancel_client') {
                        status = 'canceled';
                        icon = 'status-error';
                    }

                    if (status) {
                        tr.attr('data-status', status);
                        let label = tr.find('label.data-status');
                        label.removeClass('process').addClass(status);
                        label.html('<img src="{{ asset('') }}assets/images/icons/' + icon +
                            '.svg" class="icons" style="float: right;margin-right: -30px;top: 3px;position: relative;" alt=""> ' +
                            st.status_text);
                    }
                }

            } else {
                window.location.reload();
            }
        });
    }

</script>
<script type="text/javascript">
    function myChangeFunction(input1) {
        var val = input1.value;

        if (val == "USDT.TRC20") {
            document.getElementById("account").value = "{{ Auth::user()->trx_addres }}";
        } else if (val == "USDT.BEP20") {
            document.getElementById("account").value = "{{ Auth::user()->usdBep20 }}";
        } else {
            document.getElementById("account").value = "{{ Auth::user()->usdArbitrum }}";
        }
    }
</script>


<script type="text/javascript">
    var global_params = [];
    $(document).ready(function ($) {
        $('form').find('input[name=suma]').keyup(function () {
            calcWithdrawalReceiveAmount()
        });

        setInterval(function () {
            loadDataExchangeInfo($('#payout_method_select').val())
        }, 60000);

        $('button[name=payout]').on('click', function () {
            var form = $(this).parents('form');
            if (form.children('.loading').length === 0) {
                form.append('<div class="loading"></div>');
            }
            form.children('.loading').show();
        });

        $('#payout_method_select').change(function () {
            let value = $(this).val();
            loadDataExchangeInfo(value);

            let img = $(this).children('option:selected').data('img');
            if (img !== undefined) {
                $('.exchange__process__details__coin__icon.crypt-icon').attr('src', img);
            }

            let match = value.match(/(cryptapi|crypt)_(.[^\._]*)(?:(?:\.|\_)(\w+))?/);
            if (match) {
                $('.exchange__process__details__coin__str').text(match[2]);
                if (match[3]) {
                    $('.exchange__process__details__coin__network.deposit-network').text(match[3])
                        .removeClass('hide');
                } else {
                    $('.exchange__process__details__coin__network.deposit-network').addClass('hide');
                }
            } else {
                $('.exchange__process__details__coin__network.deposit-network').addClass('hide');
                $('.exchange__process__details__coin__str').text('USD');
            }

            //
            $(this).next('p.selected').find('.preimgcrypt').remove();
            if (img !== undefined) {
                $(this).next('p.selected').prepend(
                    '<img class="preimgcrypt" style="float: left;" src="' + img + '"/>');
            }
        });
        $('#payout_method_select').trigger('change');

        $('select[name=type]').on('sumo:opening', function (sumo) {
            var selectObj = $(this);
            if (selectObj.hasClass('imgCryptAppended') === false) {
                let optWrapper = selectObj.next().next('.optWrapper');
                selectObj.children('option').each(function (k) {
                    let img = $(this).data('img');
                    $(optWrapper.children().children()[k]).append('<img src="' + img + '">');
                });
            }
            selectObj.addClass('imgCryptAppended');

        });

    });

</script>
<script type="text/javascript" src="https://netmi.org/api-web/js-last-news"></script>

</body>

</html>

<!-- Generated in 0.0217 s. -->
<!-- Version 3.22.1726217824 -->

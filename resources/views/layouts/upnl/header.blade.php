<!DOCTYPE html>
<!--[if lt IE 7]>
<html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]>
<html lang="en" class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]>
<html lang="en" class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <title>{{siteName()}}</title>
    <meta name="description"
        content="Netmi Limited is a new generation high-tech business! We work with the most prominent financial instruments , ensuring highest returns and minimizing risks for our partners. Invest and make your dreams come true with us!">
    <meta name="keywords"
        content="Netmi, netmi.org, Netmi Limited, Netmi Company, Netmi Investments, Staking Crypto, Affiliate Program, Bonus Tasks, Monthly prize draw, Bonus coupons, Business packages, Loyalty Program, High-tech business, Netmi Pays, Crypto investments">
    <meta name="format-detection" content="telephone=no">
    <base href="https://panel.netmi.org/">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <link rel="apple-touch-icon" sizes="57x57"
        href="{{ asset('') }}assets/images/apple-icon-57x57.png?v=3.22.1726217824">
    <link rel="apple-touch-icon" sizes="72x72"
        href="{{ asset('') }}assets/images/apple-icon-72x72.png?v=3.22.1726217824">
    <link rel="apple-touch-icon" sizes="114x114"
        href="{{ asset('') }}assets/images/apple-icon-114x114.png?v=3.22.1726217824">
    <link rel="apple-touch-icon" sizes="144x144"
        href="{{ asset('') }}assets/images/apple-icon-144x144.png?v=3.22.1726217824">
    <link rel="apple-touch-icon" sizes="152x152"
        href="{{ asset('') }}assets/images/apple-icon-152x152.png?v=3.22.1726217824">
    <link rel="apple-touch-icon" sizes="180x180"
        href="{{ asset('') }}assets/images/apple-icon-180x180.png?v=3.22.1726217824">
    <link rel="apple-touch-icon" sizes="192x192"
        href="{{ asset('') }}assets/images/apple-icon-192x192.png?v=3.22.1726217824">
    <link rel="apple-touch-icon" href="{{ asset('') }}favicon.png?v=3.22.1726217824">
    <link rel="shortcut icon" href="{{ asset('') }}favicon.ico?v=3.22.1726217824" type="image/x-icon">
    <link rel="icon" href="{{ asset('') }}favicon.png?v=3.22.1726217824" type="image/png">
    <link rel="mask-icon" color="#0088cc">
    <meta name="apple-mobile-web-app-title" content="Netmi">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <style>
        body {
            opacity: 0;
        }

    </style>
    <!-- CORE CSS -->
    <!-- https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css -->
    <link rel="stylesheet" href="{{ asset('') }}upnl/css/bootstrap.min.css">
    <!-- https://cdn.jsdelivr.net/normalize/3.0.1/normalize.min.css -->
    <link rel="stylesheet" href="{{ asset('') }}upnl/css/normalize.min.css">
    <link rel="stylesheet" href="{{ asset('') }}upnl/css/animate.min.css">
    <!-- RANGE -->
    <link rel="stylesheet" href="{{ asset('') }}upnl/css/jquery.slider.min.css">
    <!-- CUSEL CSS -->
    <link rel="stylesheet" href="{{ asset('') }}upnl/css/cusel.min.css">
    <!-- FLIP CLOCK -->
    <link rel="stylesheet" href="{{ asset('') }}upnl/css/flipclock.min.css">
    <!-- BASE CSS -->

    <!--    <link rel="stylesheet" href="-->
    <!--">-->
    <link rel="stylesheet" href="{{ asset('') }}upnl/css/style.css">
    <link rel="stylesheet" href="{{ asset('') }}upnl/css/inner.css">
    <link rel="stylesheet" href="{{ asset('') }}upnl/css/core.css">
    <link rel="stylesheet" href="{{ asset('') }}upnl/css/main.css">
    <link rel="stylesheet" href="{{ asset('') }}upnl/css/tabs.css" />

    <link rel="shortcut icon" href="{{ asset('') }}favicon.ico?v=3.22.1726217824">
    <link rel="stylesheet" href="{{ asset('') }}upnl/css/jquery-confirm.min.css">
    <!--[if lte IE 7]>
    <script src="{{ asset('') }}assets/e_lte-ie7.js?v=3.22.1726217824"></script>
    <![endif]-->
</head>

<body onload="startTime()">
    <script type="text/javascript">
        var fp_sett_js = {
            "list_plans": [{
                "id": 35,
                "code": "LITE-PLAN-5",
                "name": "LITE",
                "deposit_min": 50,
                "deposit_max": 1000,
                "earn_rate": 0.7,
                "freezing_days": 30,
                "return_deposit": 0,
                "return_earn_close": 0,
                "periodicity": "daily",
                "only_for_bonus": 0,
                "reinvest_plan": null,
                "reinvest_rate": "0",
                "active": 1,
                "ord": "0",
                "updated_at": "2024-08-20 17:59:06",
                "created_at": "2024-08-20 16:59:37",
                "deleted_at": null,
                "cnt_replans": "0"
            }, {
                "id": 36,
                "code": "STANDARD-PLAN-5",
                "name": "STANDARD",
                "deposit_min": 50,
                "deposit_max": 5000,
                "earn_rate": 0.8,
                "freezing_days": 40,
                "return_deposit": 0,
                "return_earn_close": 0,
                "periodicity": "daily",
                "only_for_bonus": 0,
                "reinvest_plan": null,
                "reinvest_rate": null,
                "active": 1,
                "ord": "1",
                "updated_at": "2024-08-20 17:02:35",
                "created_at": "2024-08-20 17:00:10",
                "deleted_at": null,
                "cnt_replans": "0"
            }, {
                "id": 37,
                "code": "ADVANCED-PLAN-5",
                "name": "ADVANCED",
                "deposit_min": 50,
                "deposit_max": 15000,
                "earn_rate": 0.9,
                "freezing_days": 50,
                "return_deposit": 0,
                "return_earn_close": 0,
                "periodicity": "daily",
                "only_for_bonus": 0,
                "reinvest_plan": null,
                "reinvest_rate": null,
                "active": 1,
                "ord": "2",
                "updated_at": "2024-08-20 17:02:35",
                "created_at": "2024-08-20 17:00:48",
                "deleted_at": null,
                "cnt_replans": "0"
            }, {
                "id": 38,
                "code": "ULTIMATE-PLAN-5",
                "name": "ULTIMATE",
                "deposit_min": 50,
                "deposit_max": 100000,
                "earn_rate": 1,
                "freezing_days": 60,
                "return_deposit": 0,
                "return_earn_close": 0,
                "periodicity": "daily",
                "only_for_bonus": 0,
                "reinvest_plan": null,
                "reinvest_rate": "0",
                "active": 1,
                "ord": "3",
                "updated_at": "2024-08-20 17:02:46",
                "created_at": "2024-08-20 17:02:21",
                "deleted_at": null,
                "cnt_replans": "0"
            }, {
                "id": 8,
                "code": "PREMIUM-1",
                "name": "PREMIUM (BONUS)",
                "deposit_min": 250,
                "deposit_max": 10000,
                "earn_rate": 0.1,
                "freezing_days": 30,
                "return_deposit": 2,
                "return_earn_close": 0,
                "periodicity": "daily",
                "only_for_bonus": 1,
                "reinvest_plan": null,
                "reinvest_rate": "0",
                "active": 1,
                "ord": "14",
                "updated_at": "2024-08-20 17:03:53",
                "created_at": "2023-09-01 14:40:20",
                "deleted_at": null,
                "cnt_replans": "0"
            }],
            "balance": 0,
            "balance_bonus": 0,
            "second_site": 45,
            "date_time": "2024-09-27 04:30:19",
            "time": 1727411419,
            "csrf": "da34d580ab242255b283db3e45685e97",
            "lang_site": "en",
            "url_www": "https:\/\/netmi.org\/",
            "url_account": "https:\/\/panel.netmi.org\/",
            "lang": {
                "btn_action_deposit2": "Make a Stake",
                "days": "Days",
                "weekly": "Weeks",
                "monthly": "Months",
                "s_executed": "Completed",
                "s_wait_payout": "Payout History",
                "s_cancel_admin": "Payment cancelled",
                "s_cancel_client": "Payment cancelled by client",
                "financy_pass_no_identic": "Financial passwords don't correspond or fields are not filled",
                "min_security_need": "At least one method must be available for unblocking this security system (SMS or email)",
                "your_actual_ip": "Your current  IP address",
                "ip_in_limit": "Is in list of allowed",
                "ip_no_in_limit": "Is not in the list of allowed",
                "delete": "Delete",
                "code_sended": "Code sent",
                "error": "Error",
                "example": "Example",
                "valute": "Currency",
                "query_sended_success": "Your request has been sent.",
                "5minutes_recharge": "Your account will be funded in 5 minutes if you followed the transaction instructions.",
                "a1": "Name:",
                "a2": "Daily:",
                "a3": "Amount:",
                "plan": "Plan",
                "v1": "Return of Stake:",
                "v2": "<b>No<\/b>",
                "v3": "Staking Time:",
                "v4": "<b>Yes<\/b>",
                "v5": "-",
                "plan_source_balance": "Source of funds",
                "plan_type_bonus": "Premium balance",
                "plan_type_main": "Main balance",
                "plan_daily": "Daily return",
                "plan_weekly": "Weekly interest",
                "plan_monthly": "Monthly interest",
                "plan_nolimit": "Unlimited",
                "plan_body": "deposit body",
                "plan_return_close_yes": "Yes",
                "plan_return_deposit_yes": "No",
                "plan_return_deposit_no": "Yes",
                "plan_bonus_main_deposit_close": "No",
                "game_title": "Balance exchange",
                "game_operation": "Operation",
                "game_balance": "On account",
                "game_credits": "Credits",
                "game_credits2": "Credits",
                "game_min": "Min",
                "game_summ": "Amount",
                "game_course": "Rate",
                "game_credit": "Credits replenishment",
                "game_debit": "Withdrawal of credits",
                "game_btn_action": "Exchange",
                "game_btn_cancel": "Close",
                "game_payout_memo": "-",
                "crypt_title": "Cryptocurrencies",
                "refused_admin": "Transaction canceled",
                "cancel_user_p": "Payment canceled by Client",
                "date_executed": "Processing Date",
                "1canceled": "Canceled",
                "no_archived_notifications": "No archived notifications",
                "no_active_notifications": "No new notifications",
                "token_sell_success": "You have successfully sold <b>%tokens% NTM <\/b> to the system. <br>Your income: <b>%amount%$<\/b>",
                "token_sell_confirm": "Confirm the transaction to sell %tokens% NTM for %amount%$. After the confirmation this amount will be credited to your balance.",
                "token_buy_success": "You have successfully purchased <b>%tokens% NTM<\/b> from the system. <br>You paid <b>%amount%$<\/b>.",
                "token_buy_confirm": "Confirm the transaction to purchase %tokens% NTM for %amount%$.\nAfter confirmation, this amount will be deducted from your account.",
                "error_insufficient_tokens": "Not enough NTM for sale.",
                "error_insufficient_amount": "Not enough funds to purchase NTM.",
                "error_unknown": "Error performing operations. Try refreshing the page and repeating your request, or try again later."
            },
            "email_confirmed": false,
            "deposits_active": 0,
            "deposits_closed": 0,
            "token_price": 3.7593
        };

    </script>
    <div class="wrapper">
        <header class="header header-inner">

            <div class="header-middle">
                <div class="inner">
                    <div class="nav-button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 80" width="40" height="40" style="font-size: 24px; display: flex; margin: 0px 9px 0 0; color: #8e88a4;width:17px">
                        <rect width="100" height="20" fill="currentColor"></rect>
                        <rect y="30" width="100" height="20" fill="currentColor"></rect>
                        <rect y="60" width="100" height="20" fill="currentColor"></rect>
                      </svg></div>
                    <div class="logo"><a href="https://netmi.org/en/">
                            <img src="{{ asset('') }}assets/logo.png" class="full-logo" alt="Netmi">
                            <img src="{{ asset('') }}assets/logo.png" style="width:137px;" class="mobile-logo" alt="Netmi">
                        </a>
                    </div>

                    <div class="seperator"></div>
                    <div class="navigation">
                        <span class="current">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 80" width="40" height="40" style="font-size: 24px; display: flex; margin: 0px 9px 0 0; color: #8e88a4;width:17px">
                                <rect width="100" height="20" fill="currentColor"></rect>
                                <rect y="30" width="100" height="20" fill="currentColor"></rect>
                                <rect y="60" width="100" height="20" fill="currentColor"></rect>
                              </svg>
                              
                               Navigation
                        </span>
                        <ul class="dropdown">
                            <li><a href="{{ route('Index') }}">Home</a></li>
                            <li><a href="{{ route('about') }}">About Us</a></li>
                            <li><a href="{{ route('work') }}">How it works?</a></li>
                            <li><a href="{{ route('faq') }}">FAQ</a></li>
                            <li><a href="{{ route('news') }}">News
                                    <img src="{{ asset('') }}assets/theme/images/netmi/dot-main-menu.svg?v=3.22.1726217824"
                                        alt="" style="position: relative;width: 10px; top: -6px;left: 1px;"></a>
                            </li>
                            <li><a href="{{ route('contacts') }}" class="last">Contacts</a></li>
                        </ul>
                    </div>
                    <ul class="nav">
                        <li class="close eas"><img
                                src="{{ asset('') }}assets/theme/images/menu-close.svg?v=3.22.1726217824"
                                alt="" style="position: relative;width: 32px;top: -17px;right: -5px;"></li>
                        <li class="eas eas mob-hidden "><a href="https://netmi.org/en/" class="main-menu first">Home</a>
                        </li>
                        <li class="eas eas mob-hidden "><a href="https://netmi.org/en/about" class="main-menu">About
                                Us</a></li>
                        <li class="eas eas mob-hidden "><a href="https://netmi.org/en/how-it-works"
                                class="main-menu">How it works?</a></li>
                        <li class="eas eas mob-hidden "><a href="https://netmi.org/en/faq" class="main-menu">FAQ</a>
                        </li>
                        <li class="eas eas mob-hidden "><a href="https://netmi.org/en/news" class="main-menu">News <img
                                    src="{{ asset('') }}assets/theme/images/netmi/dot-main-menu.svg?v=3.22.1726217824"
                                    alt=""
                                    style="position: relative;width: 10px; top: -7px;left: -2px;margin-right:-12px"></a>
                        </li>
                        <li class="eas eas mob-hidden "><a href="https://netmi.org/en/contact"
                                class="main-menu last">Contacts</a></li>
                        <li class="eas">
                            <a href="#"
                                onclick="$('.income-options-popup').fadeIn(50);$('body').css('overflow', 'hidden');return false;"
                                class="earn"> Income Options <span class="icon-bubble eas">4</span>
                            </a>
                        </li>
                        <div class="netmi-soc netmi-mob">
                            <a href="https://t.me/netmi_news" target="_blank" class="netmi-soc-a netmi-soc-a-channel">
                                <img src="{{ asset('') }}assets/theme/images/netmi/telegram-header.svg?v=3.22.1726217824"
                                    alt="">
                                Сhannel </a>
                            <a href="https://t.me/netmi_chat" target="_blank" class="netmi-soc-a netmi-soc-a-chat">
                                <img src="{{ asset('') }}assets/theme/images/netmi/chat-header.svg?v=3.22.1726217824"
                                    alt="">
                                Chat </a>
                        </div>
                    </ul>
                    <div class="userbox">
                        <a href="{{ route('user.dashboard') }}" class="eas"><img
                                src="{{ asset('') }}assets/theme/images/netmi/header-user.svg?v=3.22.1726217824"
                                class="eas"><span>My account</span></a>
                    </div>
                    <div class="netmi-soc netmi-header">
                        <a href="https://t.me/netmi_news" target="_blank" class="netmi-soc-a netmi-soc-a-channel">
                            <img src="{{ asset('') }}assets/theme/images/netmi/telegram-header.svg?v=3.22.1726217824"
                                alt="">
                            <span>Сhannel</span>
                        </a>
                        <a href="https://t.me/netmi_chat" target="_blank" class="netmi-soc-a netmi-soc-a-chat">
                            <img src="{{ asset('') }}assets/theme/images/netmi/chat-header.svg?v=3.22.1726217824"
                                alt="">
                            <span>Chat</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="income-options-popup">
                <div class="in">
                    <div class="in-header">
                        <span class="netmiicon-close close eas"
                            onclick="$('.income-options-popup').fadeOut(100);$('body').css('overflow', 'auto');"></span>
                        <h3>Income Options</h3>
                    </div>
                    <div class="in-items">
                        <h5>Active</h5>
                        <a href="https://netmi.org/en/staking"><span class="in-item eas"><img
                                    src="{{ asset('') }}assets/theme/images/netmi/popup-staking-active.svg?v=3.22.1726217824"
                                    alt=""> Staking</span></a>
                        <a href="https://netmi.org/en/accelerators"><span class="in-item eas"><img
                                    src="{{ asset('') }}assets/theme/images/netmi/popup-accelerators.svg?v=3.22.1726217824"
                                    alt=""> Accelerators</span></a>
                        <a href="https://netmi.org/en/partners"><span class="in-item eas"><img
                                    src="{{ asset('') }}assets/theme/images/netmi/popup-affiliates-active.svg?v=3.22.1726217824"
                                    alt=""> Affiliates</span></a>
                        <a href="https://netmi.org/en/tasks"><span class="in-item eas"><img
                                    src="{{ asset('') }}assets/theme/images/netmi/popup-tasks-active.svg?v=3.22.1726217824"
                                    alt=""> Tasks</span></a>
                        <h5 style="margin-top: 8px;">Coming soon</h5>
                        <span class="in-item eas coming-soon"><img
                                src="{{ asset('') }}assets/theme/images/netmi/popup-prize.svg?v=3.22.1726217824"
                                style="opacity: 0.3;" alt=""> Prize Raffle</span>
                        <span class="in-item eas coming-soon"><img
                                src="{{ asset('') }}assets/theme/images/netmi/popup-saving.svg?v=3.22.1726217824"
                                style="opacity: 0.3;" alt=""> Savings</span>
                        <span class="in-item eas coming-soon"><img
                                src="{{ asset('') }}assets/theme/images/netmi/popup-marketplace.svg?v=3.22.1726217824"
                                style="opacity: 0.3;" alt=""> Marketplace</span>
                        <span class="in-item eas coming-soon"><img
                                src="{{ asset('') }}assets/theme/images/netmi/popup-loyalty.svg?v=3.22.1726217824"
                                style="opacity: 0.3;" alt=""> Loyalty Program</span>
                    </div>
                </div>
            </div>



        </header>
        @include('partials.notify')

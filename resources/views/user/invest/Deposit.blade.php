

    <main class="eas bg-gray">
    <div class="account-mob-link">
   <div class="container">
   <a class="js-account-menu" href="#"><i class="flaticon-menu"></i>Navigation</a>
   <a href="/notifications" class="notification-mobile"><img src="{{asset('')}}assets/theme/images/netmi/left-menu/new-notifications.svg?v=3.22.1726217824" alt=""><span class="notification-buble-mobile total_count_notifications"></span></a>
   </div>
   </div>
   <form action="{{ route('user.fundActivation') }}" method="POST" enctype="multipart/form-data">
   {{ csrf_field() }}
   <div class="container">
	<div class="row help-row">
               <div class="col-xl-9 col-lg-8">
                   <div class="account-info-list">

                        

	

<style type="text/css">
    .deposits-balance .head:not(.active) {
        opacity: 0.2;
    }

    .table-payouts-dates {
        width: 100%;
    }

    .table-payouts-dates thead th {
        background-color: #98a2b7 !important;
    }
</style>
<div class="account-tabs">
    <div class="account-tabs-white">
        <a href="#" onclick="return false;" data-tab="new" class="active"><b>Deposit</b></a>

       
    </div>
</div>


<div class="account-tab tab-new active">
   
<div class="account-form account-form--2">
	<div class="caption caption--border">Make a New Stake</div>
   <div class="g">
   <div class="g-left">
   <label>Payment Mode</label>
   <div class="xsel xsel--0">
   <div class="SumoSelect sumo_network_id" tabindex="0" role="button" aria-expanded="false">
   <select id="paymentModeSelect" class="inp inp-0 input-only-pos" name="paymentMode" >
   <option value="USDT.TRC20">USDT (TRC20)</option>
 <option value="USDT.BEP20">USDT (BEP20)</option>
                            
                                     </select>

        

</div>

</div>
</div>
<div class="g-right g-currency">
<span class="currency">$</span>
<label>Enter amount</label>
<input type="text" class="inp inp-0 input-only-pos"  placeholder="Enter Amount" data-init="0" name="amount">
</div>

</div>




<div class="g g-fill g-currency">
                                                            <label>Transaction Id<span
                                                                    style="font-size: 13px; padding-left: 0px; float: right;">
                                                                    <b style="color: #aa72cf; display: inline-block;">
                                                                        </b></span></label>
                                                                        <input type="text" placeholder="Transaction Id" class="inp inp-0 input-only-pos" value="" name="transaction_id" >
                                                        </div>

<div class="exchange__section__row exchange__process" style="margin-bottom: 5px;margin-top: 20px;">
<!-- <div class="exchange-process-details">
    <div class="exchange__process__details__coins" style="margin-top: 0px;">
        <div class="exchange__process__details__coin">
            <div class="exchange__process__details__column">
                <div class="exchange__process__details__coin__label no-grab">Your Stake</div>
                <div class="exchange__process__details__coin__amount final-deposit-amount"></div>
            </div>
            <div class="exchange__process__details__coin__holder">
            <img class="exchange__process__details__coin__icon-deposit crypt-icon no-grab" src="{{asset('')}}assets/images/icons/your-investment.svg" alt="">
            </div>
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
    <div class="exchange__process__details__coin__label no-grab">Your Total ROI</div>
    <div class="exchange__process__details__coin__amount">
        <span class="final-receive-amount"> $</span>
    </div>
    </div>
    <div class="exchange__process__details__coin__holder">
    <img class="exchange__process__details__coin__icon-deposit no-grab" src="{{asset('')}}assets/images/icons/your-profit.svg" alt="">
    </div>
    </div>
    </div>
</div> -->
</div>
<div class="table-row clearfix">

        <div class="reviews-item deposits-balance"
             style="margin-bottom: 15px; margin-left: 0;">
            <div class="head balance-left active">
                    <img src="{{asset('')}}assets/theme/images/netmi/main-wallet-3.svg?v=3.22.1726217824" alt="">
                <div class="author balance_ndp">{{ currency() }}
                {{ number_format(Auth::user()->available_balance(), 2) }}
                </div>
                <div class="date">Main balance</div>
            </div>
            <div class="head balance-right is-bonus">
                    <img src="{{asset('')}}assets/theme/images/netmi/bonus-wallet.svg?v=3.22.1726217824" alt="">
                <div class="author balance_ndp">0.00 $
                </div>
                <div class="date">Premium balance</div>
            </div>
            <div class="cls"></div>
        </div>

    </div>

    <div class="b b--1">
        <button type="submit" class="btn btn-b" style="outline: none; color:#fff; text-decoration: none"
           id="btn_add_new_deposit">Start Staking</button>
    </div>
   </div>

</from>
</div>

<div class="account-tab tab-active ">
    <div class="account-info-list">
    <div class="account-form account-form--2">
    <div class="caption caption--border">Active Stakes</div>
    <div class="account-no-data"><i class="flaticon-info icon"></i><br>No active stakes<br><a class="btn btn-affiliate" style="width: max-content; margin: 30px auto 0px; outline: none;" href="/deposits#new">New stake</a></div></div></div></div>

<div class="account-tab tab-reinvest ">
    
<div class="account-info-list">
    <div class="account-form account-form--2">
    <div class="caption caption--border">Реинвест вкладов</div>
    <div class="account-no-data"><i class="flaticon-info icon"></i><br>You have no reinvestment offer<br><a class="btn btn-affiliate" style="width: max-content; margin: 0px auto; padding: 0px 20px;margin-top: 20px;" href="/deposits#new">Новый депозит</a>.</div></div></div>
</div>

<div class="account-tab tab-previous ">
    <div class="account-info-list">
<div class="account-form account-form--2">
<div class="caption caption--border">Expired Stakes</div>
<div class="account-no-data"><i class="flaticon-info icon"></i><br>No expired stakes<br><a class="btn btn-affiliate" style="width: max-content; margin: 30px auto 0px; outline: none;" href="/deposits#new">New stake</a></div></div></div></div>


</div></div>


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



<script>



document.getElementById('paymentModeSelect').addEventListener('change', function() {
    var selectedPaymentMode = this.options[this.selectedIndex].text; // Get selected payment mode
    var finalAmountElement = document.querySelector('.final-deposit-amount'); // Target the final deposit amount div
    finalAmountElement.innerHTML = ' (' + selectedPaymentMode + ')'; // Update the final deposit amount text
});


</script>


<script>




document.querySelector('input[name="amount"]').addEventListener('input', function() {
    const enteredAmount = this.value;
    const receiveAmountSpan = document.querySelector('.final-receive-amount');
    
    // Update the span element with the entered amount, defaulting to 0 if the field is empty
    receiveAmountSpan.textContent = enteredAmount ? `${enteredAmount} $` : '0 $';
});


</script>
<!-- scripts -->
<!-- https://cdn.jsdelivr.net/jquery/1.11.1/jquery.min.js -->
<script src="{{asset('')}}assets/js/jquery.min.js?v=3.22.1726217824"></script>
<!-- https://cdn.jsdelivr.net/jquery.migrate/1.2.1/jquery-migrate.min.js -->
<script src="{{asset('')}}assets/js/jquery-migrate.min.js?v=3.22.1726217824"></script>
<!-- https://cdn.jsdelivr.net/modernizr/2.8.3/modernizr.min.js -->
<script type="text/javascript" src="{{asset('')}}assets/template/js/menu.js?v=3.22.1726217824"></script>

<!--https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js-->
<script src="{{asset('')}}assets/js/bootstrap.min.js?v=3.22.1726217824"></script>
<!-- RANGE -->
<script src="{{asset('')}}assets/js/jquery.slider.min.js?v=3.22.1726217824"></script>
<!-- CAROUFREDSEL JS -->
<!--https://cdn.jsdelivr.net/caroufredsel/6.2.1/jquery.carouFredSel.packed.js-->
<script src="{{asset('')}}assets/js/jquery.carouFredSel.packed.js?v=3.22.1726217824"></script>
<!--https://cdn.jsdelivr.net/caroufredsel/6.2.1/helper-plugins/jquery.mousewheel.min.js-->
<script src="{{asset('')}}assets/js/jquery.mousewheel.min.js?v=3.22.1726217824"></script>
<!--https://cdn.jsdelivr.net/caroufredsel/6.2.1/helper-plugins/jquery.touchSwipe.min.js-->
<script src="{{asset('')}}assets/js/jquery.touchSwipe.min.js?v=3.22.1726217824"></script>
<!-- FLIP CLOCK JS -->
<script src="{{asset('')}}assets/js/flipclock.min.js?v=3.22.1726217824"></script>
<!-- CUSEL JS -->
<script src="{{asset('')}}assets/js/cusel.min.js?v=3.22.1726217824'"></script>
<!-- OTHER JS -->
<script src="{{asset('')}}assets/js/jquery.countTo.js?v=3.22.1726217824"></script>
<script src="{{asset('')}}assets/js/jquery.customInput.js?v=3.22.1726217824"></script>
<script src="{{asset('')}}assets/js/onScreen.js?v=3.22.1726217824"></script>
<script src="{{asset('')}}assets/js/jquery.nicescroll.min.js?v=3.22.1726217824"></script>
<script type="text/javascript" src="{{asset('')}}assets/template/js/jquery-confirm.min.js?v=3.22.1726217824"></script>
<script type="text/javascript">
    jconfirm.defaults = {
        theme: 'modern'
    };
</script>
<!-- General JS -->
<script src="{{asset('')}}assets/js/general.js?v=3.22.1726217824" type="text/javascript"></script>
<script src="{{asset('')}}assets/js/account.js?v=3.22.1726217824" type="text/javascript"></script>

<script type="text/javascript" src="{{asset('')}}assets/theme/js/core.js?v=3.22.1726217824"></script>
<script type="text/javascript" src="{{asset('')}}assets/theme/js/inner.js?v=3.22.1726217824"></script>





<script type="text/javascript" src="https://netmi.org/api-web/js-last-news"></script>

</body>
</html>

<!-- Generated in 0.0105 s. -->
<!-- Version 3.22.1726217824 -->


<main class="eas bg-gray">
    <div class="account-mob-link">
   <div class="container">
   <a class="js-account-menu" href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 80" width="40" height="40" style="font-size: 24px; display: flex; margin: 0px 9px 0 0; color: #8e88a4;width:17px">
    <rect width="100" height="20" fill="currentColor"></rect>
    <rect y="30" width="100" height="20" fill="currentColor"></rect>
    <rect y="60" width="100" height="20" fill="currentColor"></rect>
  </svg>Navigation</a>
   <a href="/notifications" class="notification-mobile"><img src="{{asset('')}}assets/theme/images/netmi/left-menu/new-notifications.svg?v=3.22.1726217824" alt=""><span class="notification-buble-mobile total_count_notifications"></span></a>
   </div>
   </div>

   <div class="container">
	<div class="row help-row">
               <div class="col-xl-9 col-lg-8">
                   <div class="account-info-list">

                        

	


<style type="text/css">
    img.qrcode {
        transition:transform 0.25s ease;
    }

    img.qrcode:hover {
        -webkit-transform:scale(2.5); /* or some other value */
        transform:scale(2.5);
    }
</style>
<div class="account-form account-form--2" style="margin-bottom: 20px; padding: 0;">
<div class="caption caption--border">Balance funding</div>
</div>
<div class="account-tab tab-depositwait active">

    <div class="exchange__steps no-grab">
<span class="exchange__step exchange__step__first exchange-step-1 step-passed">
<span></span>

</div><div class="exchange__section">
    <div class="exchange__section__row exchange__process">
        <div class="exchange__status exchange-status-section">
           
            <div class="exchange__status__item exchange__status__order">
                <div class="exchange__status__order__title copy-exchange" data-copy="id">Fixed rate:                    <span class="exchange__status__order__id order-id copy-exchange" id="timer-last-fixrate" data-now="1727778137" data-end="1727779284">--:--</span>
                </div>
            </div>
        </div>
        <form action="{{ route('user.SubmitBuyFund') }}"
                                                                method="POST" enctype="multipart/form-data">
                                                                {{ csrf_field() }}
                                                                <input type="hidden" name="amount" value="{{$amount}}">
                                                                <input type="hidden" name="paymentMode" value="{{$paymentMode}}">
        <div class="exchange-process-details">
            <div class="exchange__process__row">
                <div class="exchange__deposit__box">
                    <div class="exchange__deposit__column">
                        <div class="exchange__deposit__title no-grab"> <span class="exchange__deposit__title__bold"></span>
                             <span class="exchange__deposit__title__bold"></span> Add Fund                         </div>
                        <div class="exchange__deposit__address">
                            <div class="exchange__deposit__address__address deposit-address"><span id="copyadress">{{ $walletAddress }}</span></div>
                            <div class="exchange__deposit__address__copy no-grab copy-exchange" onclick="CopyToClipboard('copyadress'); alerx('Saved','Wallet address saved to clipboard.','green'); return false; ">Copy</div></div></div>
                            
                    <div class="exchange__deposit__qr no-grab">
                        <div class="deposit-address-qr" title="3MJK8thEEmGUmrUHDqkPEbp5YnUbbLv3KR">
                                                        <img src="data:image/jpeg;base64,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" alt="" style="max-width: 125px;">
                        </div>
                    </div>
                </div>
            </div>

            <div class="exchange__process__details__coins">
                <div class="exchange__process__details__coin">
                    <div class="exchange__process__details__column">
                        <div class="exchange__process__details__coin__label no-grab">Payment Mode</div>
                        <div class="exchange__process__details__coin__amount final-deposit-amount">{{$paymentMode}}</div>
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
                        <div class="exchange__process__details__coin__label no-grab">Amount</div>
                        <div class="exchange__process__details__coin__amount">
    <span class="final-receive-amount">
    {{$amount}}  </span>
                        </div>
                    </div>
                    <div class="exchange__process__details__coin__holder">
                        <img class="exchange__process__details__coin__icon no-grab" src="{{asset('')}}assets/images/coins/BALANCE.svg?v=3.22.1726217824" alt="">
                        USD
                    </div>
                    <div class="exchange__process__details__coin__network receive-network">BALANCE</div>
                </div>
            </div>
</br></br>
            <div class="g-left">
   <label>Transaction Id</label>
   <div class="xsel xsel--0">
   <div class="SumoSelect sumo_network_id" tabindex="0" role="button" aria-expanded="false">
   <input type="text" class="inp inp-0 input-only-pos"  data-init="0" placeholder="Transaction Id"  name="transaction_hash">

            </select>

</div>
</div>
</div>
            

            <div class="exchange__process__details__info">
                <div class="exchange__process__details__info__column">
                    <div class="exchange__process__details__info__item">
                        <div class="exchange__process__details__info__title no-grab"></span></div>
                    </div>
                </div>
            </div>

            <div class="b b--1">
        <button type="submit" class="btn btn-b" style="outline: none; color:#fff; text-decoration: none"
           id="btn_add_new_deposit">Submit</button>
    </div>

            </form>






         

        </div>
    </div>
</div><input type="hidden" id="order-id-cryptapi" value="2447">
</div>

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



    <!--    <script type="text/javascript" src="/assets/js/jquery-ui.min.js"></script>-->




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
let spanTimer = $('#timer-last-fixrate');
if(spanTimer.length > 0){
    var countDownDate = parseInt(spanTimer.data('end'))*1000;
    var x = setInterval(function() {

        // Get today's date and time
        var now = new Date().getTime();
    
        // Find the distance between now and the count down date
        var distance = countDownDate - now;
    
        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
        // Display the result in the element with id="demo"
        document.getElementById("timer-last-fixrate").innerHTML = ('0' + minutes).substr(-2) + ":" + ('0'+seconds).substr(-2);
    
        // If the count down is finished, write some text
        if (distance < 0) {
          clearInterval(x);
          spanTimer.parent().remove();
        }
    }, 1000);
}

var isWaitPaid = spanTimer.length > 0;
var isWaitConfirmation = $('#confirmations-value-count').length > 0;

if(isWaitPaid || isWaitConfirmation){
    setInterval(function(){
         $.post('/ajax',
            {
                go: 'status_order_pay_crypt',
                id: $('#order-id-cryptapi').val()
            })
            .done(function(data){
                if(data.status) {
                    let needReloadPage = true;
                    
                    if(isWaitPaid && data.step === 'wait'){
                        needReloadPage = false;
                    } else if(isWaitConfirmation && data.step === 'confirmation') {
                        needReloadPage = false;
                    }
                    
                    if(needReloadPage){
                        window.location.reload();
                    }
                }
            });
    }, 5000);
}
});

</script>
<script type="text/javascript" src="https://netmi.org/api-web/js-last-news"></script>

</body>
</html>

<!-- Generated in 0.2127 s. -->
<!-- Version 3.22.1726217824 -->
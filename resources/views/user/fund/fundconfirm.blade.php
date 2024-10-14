

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
                                                        <img src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=3MJK8thEEmGUmrUHDqkPEbp5YnUbbLv3KR" alt="" style="max-width: 125px;">
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


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

                        

	



<!-- Main account statistics -->
<div class="my-account">
    <div class="card">
    <div class="name">Welcome, <span>{{ Auth::user()->name }}</span></div>
    <div class="balance">{{ currency() }}
    {{ number_format(Auth::user()->available_balance(), 2) }}<span class="subtitle">Main balance</span></div>
    <div class="buttons">
    <a href="{{route('user.AddFund')}}"><img src="{{asset('')}}assets/theme/images/netmi/balance-top-up.svg?v=3.22.1726217824" alt=""> <span>Top Up</span></a>
    <a href="{{route('user.invest')}}"><img src="{{asset('')}}assets/theme/images/netmi/balance-newdeposit.svg?v=3.22.1726217824" alt=""> <span>Invest</span></a>
    <a href="{{route('user.Withdraw')}}"><img src="{{asset('')}}assets/theme/images/netmi/balance-payout.svg?v=3.22.1726217824" alt=""> <span>Withdraw</span></a>
    </div>

    <div class="wallet__process__details__coins">
        <div class="wallet__process__details__coin">
            <div class="wallet__process__details__column">
                <div class="wallet__process__details__coin__label no-grab">Total Deposit</div>
                <div class="wallet__process__details__coin__amount final-deposit-amount">{{ currency() }}
                {{ number_format(Auth::user()->investment->sum('amount'), 2) }}</div>
            </div>
            <div class="wallet__process__details__coin__holder">
            <img class="wallet__process__details__coin__icon-deposit crypt-icon no-grab" src="{{asset('')}}assets/theme/images/netmi/money-topups.png?v=3.22.1726217824" alt="">
            </div>
        </div>

    <div class="wallet__process__details__middle">
        <div class="wallet__process__details__arrow progress-arrows">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>

    <div class="wallet__process__details__coin">
    <div class="wallet__process__details__column">
    <div class="wallet__process__details__coin__label no-grab"> Total Withdrawals</div>
    <div class="wallet__process__details__coin__amount">
        <span class="final-receive-amount">{{ currency() }}
        {{ number_format(Auth::user()->withdraw(), 2) }}</span>
    </div>
    </div>
    <div class="wallet__process__details__coin__holder">
    <img class="wallet__process__details__coin__icon-deposit no-grab" src="{{asset('')}}assets/theme/images/netmi/money-payout.png?v=3.22.1726217824" alt="">
    </div>
    </div>
    </div>
    
</div>

    <div class="stat">
   <h4><b>General statistics</b></h4>
   <div class="balances-list">
<div class="l">
<div class="in block-2">
<div class="ltitle"><img src="{{asset('')}}assets/theme/images/netmi/money-payout.svg?v=3.22.1726217824" alt="" class="icon"><span>Booster Income</span></div>
<div class="lamount" id="lamount-ltc">{{ currency() }}
{{ number_format(Auth::user()->booster_bonus->sum('comm'), 2) }}</div>
<div class="llink">
<a href="{{route('user.cashback_income')}}" data-toggle="tooltip" ><img src="{{asset('')}}assets/theme/images/netmi/account-deposits.svg?v=3.22.1726217824" alt=""></a>
</div>
</div>
</div>
<div class="l">
    <div class="in block-3">
        <div class="ltitle"><img src="{{asset('')}}assets/theme/images/netmi/deposits-icon.svg?v=3.22.1726217824" alt="" class="icon"><span>Level  Income</span></div>
        <div class="lamount" id="lamount-doge">{{ currency() }}
        {{ number_format(Auth::user()->level_bonus->sum('comm'), 2) }}<span style="font-size: 12px;color: #9093ab;top: 0px;position: relative;"></span></div>
        <div class="llink">
            <a href="{{route('user.cashback_income')}}" data-toggle="tooltip" ><img src="{{asset('')}}assets/theme/images/netmi/account-withdraw.svg?v=3.22.1726217824" alt=""></a>
        </div>
    </div>
</div>
<div class="l">
<div class="in block-3">
<div class="ltitle"><img src="{{asset('')}}assets/theme/images/netmi/affiliate-income.svg?v=3.22.1726217824" alt="" class="icon"><span>Referral Income</span></div>
<div class="lamount" id="lamount-doge">{{ currency() }}
{{ number_format(Auth::user()->royalty_bonus->sum('comm'), 2) }}</div>
<div class="llink">
<a href="{{route('user.cashback_income')}}" data-toggle="tooltip" ><img src="{{asset('')}}assets/theme/images/netmi/account-referrals.svg?v=3.22.1726217824" alt=""></a>
</div>
</div>
</div>
</div>
   </div>

</div>
<div class="partner-bonus" style="margin-bottom: 30px;">
        <div class="col-12" style="width: 100%;">
            <div class="name">
            <h4>NTM Price <span style="margin-left:5px;border: 2px solid #2f2f4d; background: #0c071a;border-radius: 5px;-moz-border-radius: 5px;-webkit-border-radius: 5px;padding: 2px 10px;">1 NTM = 3.7593 $</span></h4>
            <div class="main-ntm-block">
            <div class="main-ntm-block-1">
            <canvas id="myChart"></canvas>
            </div>
            <div class="main-ntm-block-2">
                <div class="ref-left-2">
                    <div class="line-2"><i class="flaticon-check"></i><img src="{{asset('')}}assets/theme/images/netmi/token-ntm.svg?v=3.22.1726217824" alt="">
                    <b>0</b><br>
                        Available                    </div>
                </div>
                <div class="ref-center-2">
                    <div class="line-2"><i class="netmiicon-wating" style="background: #8e89a4;padding-top: 1px;"></i><img src="{{asset('')}}assets/theme/images/netmi/token-ntm-blocked.svg?v=3.22.1726217824" alt=""><b>0</b><br>
                        Locked                    </div>
                </div>
                <div class="ref-right-2">
                    <div class="line-2"><b>0.0000$</b><span style="display:block;margin-top:3px">
                        Income from sale</span></div>
                </div>
                </div>
                </div>
                <div class="cls"></div>
            </div>
        </div>
</div>
<script type="text/javascript" src="{{asset('')}}assets/theme/js/Chart-ntm.js?v=3.22.1726217824"></script>

<script>
  const ctx = document.getElementById('myChart');
  const data = [3.5922,3.5922,3.7261,3.7261,3.73733333,3.7593,3.7593];

  const totalDuration = 200;
  const delayBetweenPoints = totalDuration / data.length;
  const previousY = (ctx) => ctx.index === 0 ? ctx.chart.scales.y.getPixelForValue(100) : ctx.chart.getDatasetMeta(ctx.datasetIndex).data[ctx.index - 1].getProps(['y'], true).y;
  const animation = {
      x: {
          type: 'number',
          easing: 'linear',
          duration: delayBetweenPoints,
          from: NaN, // the point is initially skipped
          delay(ctx) {
              if (ctx.type !== 'data' || ctx.xStarted) {
                  return 0;
              }
              ctx.xStarted = true;
              return ctx.index * delayBetweenPoints;
          }
      },
      y: {
          type: 'number',
          easing: 'linear',
          duration: delayBetweenPoints,
          from: previousY,
          delay(ctx) {
              if (ctx.type !== 'data' || ctx.yStarted) {
                  return 0;
              }
              ctx.yStarted = true;
              return ctx.index * delayBetweenPoints;
          }
      }
  };

  new Chart(ctx, {
    type: 'line',
    data: {
      labels: ["21.09","22.09","23.09","24.09","25.09","26.09","27.09"],
      datasets: [{
        borderColor: "#aa72ce",
        label: '1 NTM = $',
        data: [3.5922,3.5922,3.7261,3.7261,3.73733333,3.7593,3.7593],
        borderWidth: 1
      }]
    },
    options: {
        animation,
        plugins: {
            legend: {
                display: false
            }
        },
        title: {
            display: false,
            text: '',
        },
        scales: {
            y: {
                beginAtZero: true,
                ticks: {
                    stepSize: 1,
                    min: 0
                }
            }
        }
    }
  });
  
</script>
<!-- Premium Balance -->



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





    <script type="text/javascript">
        $(document).ready(function () {

            setTimeout(function () {
                var fieldChartDiv = $('#chart_div');
                var w = fieldChartDiv.children().width();
                var r = w - 629;
                fieldChartDiv.scrollLeft(r / 2);
            }, 300);

            $('textarea').focus(function () {
                $(this).select();
            });

            $('#view_ref_banners').click(function () {
                $('#modal_ref_banners').modal('show');
                $('html').getNiceScroll().hide();
            });

            $('#modal_ref_banners').on('hide.bs.modal', function () {
                $('html').getNiceScroll().show();
            });

        });
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



<script type="text/javascript" src="https://netmi.org/api-web/js-last-news"></script>

</body>
</html>

<!-- Generated in 0.0143 s. -->
<!-- Version 3.22.1726217824 -->
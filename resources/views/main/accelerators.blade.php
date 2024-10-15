@include('layouts.mainsite.header')

<main class="netmi-content"><div class="netmi-header-page accelerator">
<div class="netmi-inner">
<ul class="netmi-breadcrumbs">
<li class="netmi-breadcrumbs__item"><a href="/en/">Home</a></li>
<li class="netmi-breadcrumbs__item"><a href="#" onclick="$('.netmi-income-options-popup').fadeIn(50);$('body').css('overflow', 'hidden');return false;">Income Options</a></li>
<li class="netmi-breadcrumbs__item netmi-breadcrumbs__item--active">Accelerators</li>
</ul>
</div>
</div>
<div class="netmi-static">
<div class="netmi-inner"><h1>Accelerators</h1>
<div class="netmi-hiw-header netmi-page-box">
<div class="netmi-row netmi-row-1">
<div class="netmi-subdesc" >Use our unique accelerator system to increase daily interest and speed up the return of principal. Get various bonuses, and obtain internal {{siteName()}} tokens, which you can sell later to receive even more profit.</div>
<div class="netmi-buttons">
<a href="javascript: goTo('.block-2');" class="netmi-btn netmi-purple">Bonuses</a>
<a href="javascript: goTo('.block-3');" class="netmi-link">Have a Question?</a>
</div>
</div>
<div class="netmi-row netmi-row-2"><img src="{{asset('')}}assets/tpl/images/page-accelerators.png?v=3.10.1726217824" alt=""></div>
</div>
</div>
</div>
<div class="netmi-main">
<div class="block-2">
<div class="netmi-tariffs">
<div class="netmi-inner">
<div class="netmi-title">
<h3>Accelerator <span>Bonuses</span></h3>
<div class="netmi-d">Bonuses are credited right after you make a new stake using the accelerator.</div>
</div>
<div class="netmi-home-slider-info box-1">
        <div class="netmi-home-block netmi-hfs-1" style="border-left: unset;">
            <div class="netmi-l"><img src="/assets/tpl/images/icons/more-income.svg?v=3.10.1635857564-1687417121" alt="" style="width: 52px;"></div>
            <div class="netmi-r">
            <div><span>1 »</span> Increased Profitability</div>
            Increased rate of daily returns</div>
            <div class="netmi-cls"></div>
        </div>
        <div class="netmi-home-block netmi-hfs-2" style="border-left: unset;">
            <div class="netmi-l"><img src="/assets/tpl/images/icons/token-ntm.svg?v=3.10.1635857564-1687417122" alt="" style="width: 52px;"></div>
            <div class="netmi-r"><div><span>2 »</span> Allocation of {{siteName()}} Tokens</div>
            Provision of a certain number of custom {{siteName()}} tokens. </div>
        <div class="netmi-cls"></div>
        </div>
        <div class="netmi-home-block netmi-hfs-3" style="border-left: unset;">
            <div class="netmi-l"><img src="/assets/tpl/images/icons/cashback.svg?v=3.10.1635857564-1687417122" alt="" style="width: 52px;"></div>
            <div class="netmi-r"><div><span>3 »</span> Cashback to the Main balance</div>
            Refund of part of the funds to the main balance after new stake has been created.</div>
            <div class="netmi-cls"></div>
        </div>
<div class="netmi-cls"></div>
</div>
<div class="netmi-home-slider-info" style="padding-bottom:20px">
        <div class="netmi-home-block netmi-hfs-1" style="border-left: unset;">
            <div class="netmi-l"><img src="/assets/tpl/images/icons/premium-bonus.svg?v=3.10.1635857564-1687417121" alt="" style="width: 52px;"></div>
            <div class="netmi-r">
            <div><span>4 »</span> Bonus to Premium balance</div>
            Receive a certain amount of premium bonus.</div>
            <div class="netmi-cls"></div>
        </div>
        <div class="netmi-home-block netmi-hfs-2" style="border-left: unset;">
            <div class="netmi-l"><img src="/assets/tpl/images/icons/stake-percentage.svg?v=3.10.1635857564-1687417122" alt="" style="width: 52px;"></div>
            <div class="netmi-r"><div><span>5 »</span> Stake Amount Bonus (%)</div>
            Additional bonus as a percentage of the stake amount.</div>
        <div class="netmi-cls"></div>
        </div>
        <div class="netmi-home-block netmi-hfs-3" style="border-left: unset;">
            <div class="netmi-l"><img src="/assets/tpl/images/icons/stake-money.svg?v=3.10.1635857564-1687417122" alt="" style="width: 52px;"></div>
            <div class="netmi-r"><div><span>6 »</span> Bonus to the stake amount ($)</div>
            Additional cash bonus to the stake amount.</div>
            <div class="netmi-cls"></div>
        </div>
<div class="netmi-cls"></div>
</div>
</div>
</div>

<div class="netmi-tariffs">
<div class="netmi-inner">
<div class="netmi-title">
<h3>Advantages <span>of the {{siteName()}}</span></h3>
<div class="netmi-d">The token rate grows on a daily basis. You can collect tokens, sell them later at a better price, and get additional profit.</div>
</div>
<div class="rate-box">
<div class="rate-row">
							<div class="col-12 col-lg-5">
								<div class="invest__rate-wrap">
									<div class="invest__rate">
										<span>{{siteName()}} Price</span>
										<p>$3.8836</p>
									</div>

									<div class="invest__graph">
										<img src="{{asset('')}}assets/tpl/images/icons/graph1.svg?v=3.10.1726217824" alt="">
									</div>
								</div>
							</div>

							<div class="col-12 col-lg-5 offset-lg-1">
								<div class="invest__rate-wrap">
									<div class="invest__rate">
										<span>Change in 24h</span>
                                        <p class="purple">0.00%</p>									</div>

									<div class="invest__graph">
										<img src="{{asset('')}}assets/tpl/images/icons/graph2.svg?v=3.10.1726217824" alt="">
									</div>
								</div>
							</div>

							<div class="col-12 col-lg-5">
								<div class="invest__rate-wrap">
									<div class="invest__rate">
										<span>Change in a week</span>
                                        <p class="purple">+1.03%</p>									</div>

									<div class="invest__graph">
										<img src="{{asset('')}}assets/tpl/images/icons/graph3.svg?v=3.10.1726217824" alt="">
									</div>
								</div>
							</div>

							<div class="col-12 col-lg-5 offset-lg-1">
								<div class="invest__rate-wrap">
									<div class="invest__rate">
										<span>All-time change</span>
                                        <p class="purple">+587.98%</p>									</div>

									<div class="invest__graph">
										<img src="{{asset('')}}assets/tpl/images/icons/graph4.svg?v=3.10.1726217824" alt="">
									</div>
								</div>
							</div>
						</div>
<p class="invest__info">After you purchase the accelerator, you will receive a certain amount of {{siteName()}} tokens. These tokens are locked on a special account. As soon your accelerator is activated, the tokens will be unlocked and become available for sale. Each accelerator has its validity period. In case this period has expired, and accelerator has not been activated, your tokens will still get unlocked and you will be able to sell them any time as advantageous.</p>

</div>
<div class="bxhead-info" style="margin: 0px auto; text-align:center">
<div class="netmi-buttons" style="margin-top: 50px;">
	<a href="#" onclick="popup_open('#popup-signin'); return false;" class="netmi-btn netmi-purple">Purchase</a>
   </div>
</div>
</div>
</div>		
<div class="booster">   
<div class="block-3">
        <div class="netmi-inner">
            <h3 >FAQ</h3>
            <div class="sides">
                <div class="l" >
                    <div class="question">
                        <h5 ><span class="flaticon-sign-help icon" ></span><span>What are accelerators?</span></h5>
                        <div class="answer">Accelerators are unique financial instruments of our company, which give each client the opportunity to increase the return on investment, receive various bonuses, and participate in the placement of an internal {{siteName()}} token.</div>
                    </div>
                    <div class="question">
                        <h5 ><span class="flaticon-sign-help icon" ></span><span>How does the accelerator work?</span></h5>
                        <div class="answer">Let's say you purchase an accelerator at the price of <b>$100</b> with the following features:
<br/>
<br/>
Allocation: <b>500 {{siteName()}} (~ 105$ at the rate of 1{{siteName()}} = 0.21$)</b><br/>
ROI increase: <b>30 days (+0.5%)</b><br/>
Cashback to the Main balance: <b>+10.00$</b><br/>
Bonus on Premium balance: <b>+100.00$</b><br/>
Bonus on the Stake amount: <b>+3.00%</b><br/>
Bonus to the Stake amount: <b>+20.00$</b><br/>
<br/>
Immediately after the purchase, you receive <b>100 {{siteName()}}</b> to a special locked account.
In case you make a stake in the amount of <b>$1000</b> to the <b>STANDARD plan (yielding you 0.8% per day for 210 days)</b>, the accelerator will allow you to get an increase of <b>0.5%</b> to the base daily percentage for a period of <b>30 days</b>. In this case your daily ROI will be up to <b>1.3%</b> for the first <b>30 days</b>, then during the remaining <b>180 days</b> you will continue to receive <b>0.8%</b> daily. Additionally, you will receive a <b>$10</b> cashback to your main balance, as well as a <b>$100</b> bonus to the Premium balance, and extra bonuses to the stake amount <b>+ 3%</b> and + <b>$20</b>.  The total amount of the stake with all bonuses and benefits will come to <b>$1050</b>.
Also, immediately after activation, your <b>500 {{siteName()}}</b> tokens will be available for sale.
When you sell your tokens in the amount of <b>500 {{siteName()}}</b>, you will receive up to <b>$105</b> at the rate of <b>0.21$ for 1 {{siteName()}}</b>. As a result, you will return the funds you spent on the accelerator and make a profit.
<br/>
<br/>
Even if you don't activate the accelerator, it has an expiration date, after which the {{siteName()}} tokens will still be unlocked and become available for sale. You can activate the accelerator yourself or give it to another participant. In this case you will receive earnings from the sale of your tokens, and the other participant will receive all the other bonuses.</div>
                    </div>
                    <div class="question">
                        <h5 ><span class="flaticon-sign-help icon" ></span><span>How do I purchase an accelerator?</span></h5>
                        <div class="answer">To purchase an accelerator, login to your personal account and proceed to the “Accelerators” section, select the desired accelerator block and click “Purchase”. After the purchase, you will receive a special code that must be specified when you make a new stake.</div>
                    </div>
                </div>
                <div class="r" >
                <div class="question">
                        <h5 ><span class="flaticon-sign-help icon" ></span><span>How do I activate the accelerator?</span></h5>
                        <div class="answer">After purchasing the accelerator, you can find it on the “My Accelerators” page. Copy its code, and while making a stake at the My Investments - New Contribution section, click on the “Use Accelerator” button. After the stake has been made, the accelerator will come into effect, and all bonuses that come with it will be credited and applied.</div>
                    </div>
                    <div class="question">
                        <h5 ><span class="flaticon-sign-help icon" ></span><span>How do I sell {{siteName()}} tokens?</span></h5>
                        <div class="answer">You will be able to sell the tokens from the locked account at the current rate either as soon as you activate the accelerator, or another participant makes use of it. If the accelerator expires, the tokens will also be unlocked and you will be able to sell them.
If you activate the accelerator yourself, you will receive all bonuses owing to you, and your {{siteName()}} tokens will be unlocked. If the accelerator expires and it has not been activated, the bonuses will be invalid. Nevertheless, the tokens will be unlocked and become available for sale.</div>
                    </div>
                    <div class="question">
                        <h5 ><span class="flaticon-sign-help icon" ></span><span>What are the limitations of accelerators?</span></h5>
                        <div class="answer">You can buy no more than 5 accelerators in each block available for sale! Each accelerator has an expiration date, a condition on the minimum stake amount, or a restriction to the certain Staking plan.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


</main>
@include('layouts.mainsite.footer')

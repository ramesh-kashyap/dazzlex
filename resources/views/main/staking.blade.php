@include('layouts.mainsite.header')

<main class="netmi-content"><div class="netmi-header-page staking">
<div class="netmi-inner">
<ul class="netmi-breadcrumbs">
<li class="netmi-breadcrumbs__item"><a href="/en/">Home</a></li>
<li class="netmi-breadcrumbs__item"><a href="#" onclick="$('.netmi-income-options-popup').fadeIn(50);$('body').css('overflow', 'hidden');return false;">Income Options</a></li>
<li class="netmi-breadcrumbs__item netmi-breadcrumbs__item--active">Staking</li>
</ul>
</div>
</div>
<div class="netmi-static">
<div class="netmi-inner"><h1>Staking <span>Crypto</span></h1>
<div class="netmi-hiw-header netmi-page-box">
<div class="netmi-row netmi-row-1">
<div class="netmi-subdesc" >Allocate your free crypto assets to our trading pool, provide liquidity for Netmi custom developed crypto instruments, and get paid generous returns on a daily basis.</div>
<div class="netmi-buttons">
<a href="javascript: goTo('.netmi-block-2');" class="netmi-btn netmi-purple">Staking offer</a>
<a href="javascript: goTo('.block-3');" class="netmi-link">Have a Question?</a>
</div>
</div>
<div class="netmi-row netmi-row-2"><img src="{{asset('')}}assets/tpl/images/page-staking.png?v=3.10.1726217824" alt=""></div>
</div>
</div>
</div>
<div class="netmi-main">
<div class="netmi-tariffs">
<div class="netmi-inner">
<div class="netmi-title netmi-block-2">
<h3 >Investment <span>Options</span></h3>
<div class="netmi-d" >Choose the best Staking plan to meet your investment goals and objectives.</div>
</div>
<div class="netmi-list">
<div class="netmi-item">
<div class="netmi-in netmi-eas"><div class="netmi-title">Lite</div>
<div class="netmi-subtitle">Trial staking option</div>
<div class="netmi-seperator"></div>
<div class="netmi-percent"><img src="{{asset('')}}assets/tpl/images/LITE.png?v=3.10.1726217824" alt="" style="width: 140px;"></div>
<div class="netmi-days"><span style="color:#aa72cf">+0.70%</span> daily for <span style="color:#aa72cf">30 days</span></div>
<div class="netmi-button">
	<a href="#" onclick="popup_open('#popup-signup'); return false;" class="netmi-btn netmi-purple">Stake Now</a>
   </div>
<div class="netmi-specs">
<div class="netmi-spec">
<div class="netmi-left">Min deposit</div>
<div class="netmi-right netmi-text-bold">50$</div>
<div class="netmi-clr"></div>
</div>
<div class="netmi-spec">
<div class="netmi-left">Max deposit</div>
<div class="netmi-right netmi-text-bold">1 000$</div>
<div class="netmi-clr"></div>
</div>
<div class="netmi-spec">
<div class="netmi-left">Status</div>
<div class="netmi-right netmi-text-bold"><span class="flaticon-crown" style="position: relative;top: 2px;margin-right: 3px;color: #8e88a4;"></span> <b>SILVER</b></div>
<div class="netmi-clr"></div>
</div>
</div>
<div class="netmi-seperator"></div>
<div class="netmi-calculator">
<div class="netmi-t">Profit Calculator</div>
<div class="netmi-clr"></div>
<div class="netmi-left">Deposit:</br> <b id="js-investment-1">500$</b></div>
<div class="netmi-right">Total ROI:</br> <b id="js-profit-1">670$</b></div>
<div class="netmi-clr"></div>
<div class="netmi-progress">
<input type="range" style="display: none;" class="js-range-slider-1 irs-hidden-input" value="500" data-grid-num="121" data-type="single" data-min="50" data-max="1000" data-step="1" data-from="500" data-to="1000" data-skin="big" data-hide-min-max="true" data-hide-from-to="true" data-prettify-enabled="true" data-disable="false" data-grid="false" tabindex="-1" readonly="">
</div>
</div>
</div>
</div>
<div class="netmi-item netmi-popular">
<div class="netmi-in netmi-eas"><div class="netmi-popular"><img src="{{asset('')}}assets/tpl/images/icons/most-popular.svg?v=3.10.1726217824" alt=""></div>
<div class="netmi-title">Standard</div>
<div class="netmi-subtitle">Popular money making option </div>
<div class="netmi-seperator"></div>
<div class="netmi-percent"><img src="{{asset('')}}assets/tpl/images/STANDARD.png?v=3.10.1726217824" alt="" style="width: 140px;"></div>
<div class="netmi-days"><span style="color:#e8d189">+0.80%</span> daily for <span style="color:#e8d189">40 days</span></div>
<div class="netmi-button">
	<a href="#" onclick="popup_open('#popup-signup'); return false;" class="netmi-btn netmi-yellow">Stake Now</a>
   </div>
<div class="netmi-specs">
<div class="netmi-spec">
<div class="netmi-left">Min deposit</div>
<div class="netmi-right netmi-text-bold">50$</div>
<div class="netmi-clr"></div>
</div>
<div class="netmi-spec">
<div class="netmi-left">Max deposit</div>
<div class="netmi-right netmi-text-bold">5 000$</div>
<div class="netmi-clr"></div>
</div>
<div class="netmi-spec">
<div class="netmi-left">Status</div>
<div class="netmi-right netmi-text-bold"><span class="flaticon-crown" style="position: relative;top: 2px;margin-right: 3px;color: #e8d189;"></span> <b>GOLD</b></div>
<div class="netmi-clr"></div>
</div>
</div>
<div class="netmi-seperator"></div>
<div class="netmi-calculator">
<div class="netmi-t">Profit Calculator</div>
<div class="netmi-clr"></div>
<div class="netmi-left">Deposit:</br><b id="js-investment-3">3000$</b></div>
<div class="netmi-right">Total ROI:</br><b id="js-profit-3">4500$</b></div>
<div class="netmi-clr"></div>
<div class="netmi-progress">
<input type="range" style="display: none;" class="js-range-slider-3 irs-hidden-input" value="3000" data-grid-num="132" data-type="single" data-min="50" data-max="5000" data-step="1" data-from="2500" data-to="5000" data-skin="big" data-hide-min-max="true" data-hide-from-to="true" data-prettify-enabled="true" data-disable="false" data-grid="false" tabindex="-1" readonly="">
</div>
</div>
</div>
</div>
<div class="netmi-item ">
<div class="netmi-in netmi-eas">
<div class="netmi-title">Advanced</div>
<div class="netmi-subtitle">Prudent intermediate option</div>
<div class="netmi-seperator"></div>
<div class="netmi-percent"><img src="{{asset('')}}assets/tpl/images/ADVANCED.png?v=3.10.1726217824" alt="" style="width: 140px;"></div>
<div class="netmi-days"><span style="color:#aa72cf">+0.90%</span> daily for <span style="color:#aa72cf">50 days</span></div>
<div class="netmi-button">
	<a href="#" onclick="popup_open('#popup-signup'); return false;" class="netmi-btn netmi-purple">Stake Now</a>
   </div>
<div class="netmi-specs">
<div class="netmi-spec">
<div class="netmi-left">Min deposit</div>
<div class="netmi-right netmi-text-bold">50$</div>
<div class="netmi-clr"></div>
</div>
<div class="netmi-spec">
<div class="netmi-left">Max deposit</div>
<div class="netmi-right netmi-text-bold">15 000$</div>
<div class="netmi-clr"></div>
</div>
<div class="netmi-spec">
<div class="netmi-left">Status</div>
<div class="netmi-right netmi-text-bold"><span class="flaticon-crown" style="position: relative;top: 2px;margin-right: 3px;color: #227f9e;"></span> <b>SAPPHIRE</b></div>
<div class="netmi-clr"></div>
</div>
</div>
<div class="netmi-seperator"></div>
<div class="netmi-calculator">
<div class="netmi-t">Profit Calculator</div>
<div class="netmi-clr"></div>
<div class="netmi-left">Deposit:</br><b id="js-investment-2">5000$</b></div>
<div class="netmi-right">Total ROI:</br><b id="js-profit-2">19800$</b></div>
<div class="netmi-clr"></div>
<div class="netmi-progress">
<input type="range" style="display: none;" class="js-range-slider-2 irs-hidden-input" value="7500" data-grid-num="145" data-type="single" data-min="50" data-max="15000" data-step="1" data-from="7500" data-to="15000" data-skin="big" data-hide-min-max="true" data-hide-from-to="true" data-prettify-enabled="true" data-disable="false" data-grid="false" tabindex="-1" readonly="">
</div>
</div>
</div>
</div>
<div class="netmi-item">
<div class="netmi-in netmi-eas">
<div class="netmi-title">Ultimate</div>
<div class="netmi-subtitle">Best residual income choice</div>
<div class="netmi-seperator"></div>
<div class="netmi-percent"><img src="{{asset('')}}assets/tpl/images/ULTIMATE.png?v=3.10.1726217824" alt="" style="width: 140px;"></div>
<div class="netmi-days"><span style="color:#aa72cf">+1.00%</span> daily for <span style="color:#aa72cf">60 days</span></div>
<div class="netmi-button">
	<a href="#" onclick="popup_open('#popup-signup'); return false;" class="netmi-btn netmi-purple">Stake Now</a>
   </div>
<div class="netmi-specs">
<div class="netmi-spec">
<div class="netmi-left">Min deposit</div>
<div class="netmi-right netmi-text-bold">50$</div>
<div class="netmi-clr"></div>
</div>
<div class="netmi-spec">
<div class="netmi-left">Max deposit</div>
<div class="netmi-right netmi-text-bold">100 000$</div>
<div class="netmi-clr"></div>
</div>
<div class="netmi-spec">
<div class="netmi-left">Status</div>
<div class="netmi-right netmi-text-bold"><span class="flaticon-crown" style="position: relative;top: 2px;margin-right: 3px;color: #bf467a;"></span> <b>RUBY</b></div>
<div class="netmi-clr"></div>
</div>
</div>
<div class="netmi-seperator"></div>
<div class="netmi-calculator">
<div class="netmi-t">Profit Calculator</div>
<div class="netmi-clr"></div>
<div class="netmi-left">Deposit:</br><b id="js-investment-4">50000$</b></div>
<div class="netmi-right">Total ROI:</br><b id="js-profit-4">115000$</b></div>
<div class="netmi-clr"></div>
<div class="netmi-progress">
		<input type="range" style="display: none;" class="js-range-slider-4 irs-hidden-input" value="50000" data-grid-num="160" data-type="single" data-min="50" data-max="100000" data-step="1" data-from="50000" data-to="100000" data-skin="big" data-hide-min-max="true" data-hide-from-to="true" data-prettify-enabled="true" data-disable="false" data-grid="false" tabindex="-1" readonly="">
</div>
</div>
</div>
</div></div>
</div>
</div>		
<div class="booster">   
<div class="block-3">
        <div class="netmi-inner">
            <h3 >FAQ</h3>
            <div class="sides">
                <div class="l" >
                    <div class="question">
                        <h5 ><span class="flaticon-sign-help icon" ></span><span>How do I start investing?</span></h5>
                        <div class="answer">Top up your member account, choose from the Staking options available, and allocate your free crypto assets to Netmi trading pool.</div>
                    </div>
                    <div class="question">
                        <h5 ><span class="flaticon-sign-help icon" ></span><span>What payment methods are available to top up my account?</span></h5>
                        <div class="answer">The platform accepts the following crypto assets: Bitcoin, Litecoin, Dogecoin, Tron, USDT-TRC20 etc.</div>
                    </div>
                    <div class="question">
                        <h5 ><span class="flaticon-sign-help icon" ></span><span>How do the Staking plans work?</span></h5>
                        <div class="answer">Let's say you have staked $1000 to the STANDARD Plan. In this case you will receive $8 each day for 40 calendar days. Your principal is secured and will be returned to your balance after the end of term. Your total profit for the term will be $320. After the staking period expires your staking plan closes and you can withdraw or reinvest your principal.</div>
                    </div>
                </div>
                <div class="r" >
                <div class="question">
                        <h5 ><span class="flaticon-sign-help icon" ></span><span>Is it possible to withdraw my principal early?</span></h5>
                        <div class="answer">No. Your principal is bound for the whole investment term and can not be withdrawn from the trading pool.</div>
                    </div>
                    <div class="question">
                        <h5 ><span class="flaticon-sign-help icon" ></span><span>Is it possible to stake funds from account balance?</span></h5>
                        <div class="answer">Yes you can open a new Staking plan and invest with the funds that are accrued from the partner program and profits accumulated from staking. Look out for our Loyalty program special rates for re-investments available to our long term partners.</div>
                    </div>
                    <div class="question">
                        <h5 ><span class="flaticon-sign-help icon" ></span><span>How many Staking plans can I start?</span></h5>
                        <div class="answer">The number of Staking plans you can open is not limited. You can have several Staking plans running at the same time.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


</main>


@include('layouts.mainsite.footer')

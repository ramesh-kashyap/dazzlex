

    <main class="eas bg-gray">
    <div class="account-mob-link">
   <div class="container">
   <a class="js-account-menu" href="#"><i class="flaticon-menu"></i>Navigation</a>
   <a href="/notifications" class="notification-mobile"><img src="{{asset('')}}assets/theme/images/netmi/left-menu/new-notifications.svg?v=3.22.1726217824" alt=""><span class="notification-buble-mobile total_count_notifications"></span></a>
   </div>
   </div>

   <div class="container">
	<div class="row help-row">
               <div class="col-xl-9 col-lg-8">
                   <div class="account-info-list">

                        

	

<div class="account-tabs">
    <div class="account-tabs-white">
        <a href="" class="blocs3-tabs active" data-tab="notifications" style="outline: none;">
            <strong>
            New Notifications <span class="contests-bg total_count_notifications" style="background: rgb(219 161 225 / 16%); color: #b378da;">0</span>
            </strong></a>
        <!-- <a href="#" class="blocs3-tabs " style="outline: none;" data-tab="actions">
            <strong>
            Archive            </strong></a> -->
    </div>
</div>


<div class="account-tab tab-notifications active">
    <div class="account-form account-form--2">
        <div class="caption caption--border">New Notifications</div>

        <a class="button-clear-notifiaction" id="clear_all_notifications"><img src="{{asset('')}}assets/theme/images/notifications/archive.svg?v=3.22.1726217824" alt="">Archive all notifications</a>

        <div class="g">
            <div class="g-left">
                <label>Choose notification type</label>
                <div class="xsel xsel--0" style="margin-top:5px; margin-bottom:15px;">
                    <div class="SumoSelect sumo_network_id" tabindex="0" role="button" aria-expanded="false">
                        <select id="filter_actions_notifications" class="js-select SumoUnder">
                            <option value="all">All notifications</option>
                            <option value="auth" >Authorization and account                            </option>
                            <option value="pay" >Funding and payments                            </option>
                            <option value="deposits" >Investments                            </option>
                            <option value="referals" >Referral system                            </option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="account-info-item" style="display: block; margin-top: 15px;">
        <table class="table-product-group-2" id="table_notifications_actions" style="margin-top: 0px;">
            <thead>
            <tr>
                <th><input type="checkbox" class="notification_checkbox" value="all" id="all"><label for="all" style="margin-right: 20px"> Select All</label> <a href="#" style="display: inline-block; color: #aa72ce;" class="notification_clear_selected">Archive selected</a></th>
            </tr>
            </thead>
            <tbody >
            <tr>
                <td colspan="3" style="text-align: center; color: #9093ab; padding-bottom: 30px; padding-top:30px"><img src="{{asset('')}}assets//images/icons/balance-loader.svg" style="width:28px; margin-bottom:10px" alt=""><br>Loading data ..</td>
            </tr>
            </tbody>
        </table>
        <p class="text-center">
            <input type="hidden" class="page_actual" value="1"/>
            <a href="#"
               class="btn-xs btn_load_notifications">Load more                ...</a>
        </p>
        </div>
    </div>
</div>
<div class="account-tab tab-actions ">

    <div class="account-form account-form--2">
        <div class="caption caption--border">Notifications Archive</div>
        <div class="g">
            <div class="g-left">
                <label>Choose notification type</label>
                <div class="xsel xsel--0" style="margin-top:5px; margin-bottom:15px;">
                    <div class="SumoSelect sumo_network_id" tabindex="0" role="button" aria-expanded="false">
                        <select id="filter_actions" class="js-select SumoUnder">
                            <option value="all">All notifications</option>
                            <option value="auth" >Authorization and account                            </option>
                            <option value="pay" >Funding and payments                            </option>
                            <option value="deposits" >Investments                            </option>
                            <option value="referals" >Referral system                            </option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="account-info-item" style="display: block; margin-top: 15px;">
        <table class="table-product-group-2" id="table_history_actions" style="margin-top: -20px;">
            <thead>
            </thead>
            <tbody >
            <tr>
                <td colspan="4" style="text-align: center; color: #9093ab; padding-bottom: 30px; padding-top:30px"><img src="{{asset('')}}assets//images/icons/balance-loader.svg" style="width:28px; margin-bottom:10px" alt=""><br>Loading data ..</td>
            </tr>
            </tbody>
        </table>
        <p class="text-center">
            <input type="hidden" class="page_actual" value="1"/>
            <a href="#"
               class="btn-xs load_history_actions">Load more                ...</a>
        </p>
        </div>
    </div>

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










<script type="text/javascript" src="https://netmi.org/api-web/js-last-news"></script>

</body>
</html>

<!-- Generated in 0.0088 s. -->
<!-- Version 3.22.1726217824 -->
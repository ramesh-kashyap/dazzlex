

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
    <a href="{{route('user.DepositHistory')}}" style="outline: none;" >
        <strong>
            Deposit History    
       </strong></a>
       <!-- <a href="{{route('user.invest')}}"  style="outline: none;" >
        <strong>
            Withdraw History      
        </strong></a> -->
        <!-- <a href="#" class="blocs3-tabs " style="outline: none;" data-tab="profit">
        <strong>
            Accruals    
       </strong></a> -->
    </div>
</div>



<div id="example_wrapper" class="dataTables_wrapper">
                                    <form action="{{ route('user.DepositHistory') }}" method="GET">
                                        <div class="row">
                                            <div class="col-xl-4">
                                                <div class="form-group mb-3">
                                                    <input type="text"  Placeholder="Search Users"
                                                        name="search" class="form-control" value="{{ @$search }}" style="    background: #0b071a;
    border-color: #aa73ce;
" >
                                                </div>
                                            </div>
                                            <div class="col-xl-2">
                                                <div class="form-group mb-3">
                                                    <select name="limit"  class="form-control" style=" background: #0b071a; border-color: #aa73ce;" >
                                                        <option value="10">10</option>
                                                        <option value="25">25</option>
                                                        <option value="50">50</option>
                                                        <option value="100">100</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xl-2">
                                                <div class="form-group mb-3">
                                                    <input type="submit"  name="submit" style="padding: 4px; background: #aa73cf;"
                                                        class="btn btn-outline-theme btn-lg d-block w-100 btn-primary"
                                                        value="Search"    >
                                                </div>
                                            </div>
                                            <div class="col-xl-2">
                                                <div class="form-group mb-3">
                                                    <a href="{{ route('user.DepositHistory') }}" 
                                                        name="reset" style="padding: 4px; background: #aa73cf;"
                                                        class="btn btn-outline-theme btn-lg d-block w-100 btn-primary"
                                                        value="Reset">Reset</a>
                                                </div>
                                            </div>
        
        
                                        </div>
                                    </form>
                                </div>


<div class="account-tab tab-topup active">
        <div class="account-form account-form--2">
      
        <table class="table-product-group" style="margin-top:25px">
            <thead>
                 
            <tr>
                                    <th>#S.NO</th>
                                    <th>User ID</th>
                                    <th>Amount</th>
                                    <th>Transaction Date</th>
                                    <th>Transaction ID</th>
                                    <th>Status</th>
                                </tr>
            </thead>
            <tbody>


            <?php if(is_array($deposit_list) || is_object($deposit_list)){ ?>

<?php $cnt = 0; ?>
@foreach($deposit_list as $value)
                                            <tr>
                    <td class="td-price"> <div>
                            <span class="amount-dark"><?= $cnt += 1?></span>
                        </div></td>

                

                    <td class="td-price">
                        <div>
                            <span class="amount-dark">{{ $value->user_id_fk }}</span>
                        </div></td>
                        <td class="td-price">
                        <div>
                            <span class="amount-dark">{{ $value->amount }}</span>
                        </div></td>
                        <td class="td-price">
                        <div>
                            <span class="amount-dark">{{ $value->created_at }}</span>
                        </div></td>
                    <td class="td-price">
                        <div>
                    <span class="status">
                    <span class="amount-dark">{{ $value->transaction_id }}</span>
                    </span>
                        </div>
                    </td>
                    <td class="td-price" style="height: 64px;">
                        <div class="last">
                                                            <span class="button">

                                                            <span   class="amount-dark" style="background-color: {{ $value->status == 'Active' ? 'green' : 'red' }}; color: white;">{{ $value->status }}</span>


                                                        </span>

                                                    </div>
                    </td>
                </tr>
                  
                @endforeach

<?php }?>
                        </tbody>
        </table>
        {{ $deposit_list->withQueryString()->links() }}
    </div>
    <style type="text/css">
@media screen and (max-width: 760px) {
    .tab-topup td:nth-of-type(1):before { content: "Date"; text-align: left; }
    .tab-topup td:nth-of-type(2):before { content: "Amount"; text-align: left; }
    .tab-topup td:nth-of-type(3):before { content: "Status"; text-align: left; }
    .tab-topup td:nth-of-type(4):before { content: "Action"; text-align: left;}
    .tab-topup .table td.text-center {
        text-align: left !important;
    }
    .tab-topup .table tr {
        border-bottom: 0px;
    }
.table tr:nth-of-type(odd) {
background: #f7f8fc;
}
}
</style>
</div>

<div class="account-tab tab-payout ">
    <div class="account-info-list">
    <div class="account-form account-form--2">
    <div class="caption caption--border">Payout History</div>
    <div class="account-no-data"><i class="flaticon-info icon"></i>
    <br>Payout history is empty<br><a class="btn btn-affiliate" style="margin: 30px auto 0px;" href="/payout">Withdraw Funds</a></div></div></div>

    <style type="text/css">
@media screen and (max-width: 760px) {
    .tab-payout td:nth-of-type(1):before { content: "Date"; text-align: left; }
    .tab-payout td:nth-of-type(2):before { content: "Amount"; text-align: left; }
    .tab-payout td:nth-of-type(3):before { content: "Status"; text-align: left; }
    .tab-payout td:nth-of-type(4):before { content: "Action"; text-align: left; }
    .tab-payout .table td.text-center {
        text-align: left !important;
    }
    .tab-payout .table tr {
        border-bottom: 0px;
    }
.table tr:nth-of-type(odd) {
background: #f7f8fc;
}
}
</style>
</div>
<div class="account-tab tab-profit ">
    <!-- End tabs navigation -->
<style type="text/css">
    #filter_history_specific {
        display: none;
    }
</style>


<div class="account-info-list">
    <div class="account-form account-form--2">
    <div class="caption caption--border">Accruals history</div>
    <div class="account-no-data"><i class="flaticon-info icon"></i><br>No accruals found<br><a class="btn btn-affiliate" style="margin:30px auto 0px;" href="/deposits">Make a New Stake</a></div></div></div></div></div></div>









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

<!-- Generated in 0.0225 s. -->
<!-- Version 3.22.1726217824 -->
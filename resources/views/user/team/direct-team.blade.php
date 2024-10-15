

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
    .modal-dialog {
        overflow-y: initial !important;
        width: 95%;
    }

    .modal-body {
        overflow-y: auto;
    }
</style>


<div class="account-tabs">
    <div class="account-tabs-white">
        <a href="#" onclick="return false;" data-tab="list" class="blocs3-tabs active">
            <b>Referral list</b>
        </a>
        <a href="#" onclick="return false;" data-tab="statistic" class="blocs3-tabs">
            <b>Statistics</b>
        </a>
        <a href="{{route('user.tree-view')}}"  data-tab="statistic" class="blocs3-tabs">
            <b>Tree</b>
        </a>
        <a href="{{route('user.right-team')}}"  data-tab="statistic" class="blocs3-tabs">
            <b>Right Team</b>
        </a>
        <a href="{{route('user.left-team')}}"  data-tab="statistic" class="blocs3-tabs">
            <b>Left Team</b>
        </a>
       
      
    </div>
</div>


            <div class="account-tab tab-statistic">
            <div class="account-form account-form--2" style="margin-bottom: 0px;">
            <div class="caption caption--border" style="padding-bottom: 0px;">Statistics</div>
                                <div class="account-notification" style="margin-top:20px; margin-bottom:0px">
                    <div class="i"><img src="{{asset('')}}assets/theme/images/netmi/upline-check.svg?v=3.22.1726217824" alt=""></div>
                     <div class="m">Your Upline: <b class="c1" style="color:#fff">{{ Auth::user()->username }}</b></div>
                     <div class="d">
                     <div class="upline-contacts">
                                                                        </div>
</div>
</div>
                
                </div>

                <div class="ref-box-link">
                    <div class="account-info-item box-1" style="background: #141329;">
                        <div class="desc box-referrals" style="width: 100%">
                            <div class="dashbox__title">
                                <h3>Referral link</h3>
                            </div>
                            <form action="{{ route('user.confirm') }}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                                                        <div class="input-wrapper">
                                <input type="text" style="background: rgb(28 17 41); color: #ffffff; outline: none;" class="inp inp-0" name="referral-link" id="copyInp"   value="{{ asset('') }}register?ref={{ Auth::user()->username }}"
                                >
                                <a class="btn copy" hidefocus="true" data-toggle="tooltip" data-original-title="<b>Copy</b>" onclick="copyText('copyInp'); alerx('Saved','The referral link was saved to clipboard','green'); return false; "><span class="netmiicon-copy"></span></a>
                            </div>

                            </form>
                                                        <div class="ref-box">
                                <div class="status">
                                    <div><span class="icons netmiicon-crown refIconStatus-starter"></span> <span class="ref-title">{{ $total_team }}</span><span class="ref-subtitle">Level Team</span></div>
                                    <div><span class="icons netmiicon-partners"></span> <span class="ref-title">{{ $user_direct }}</span> <span class="ref-subtitle">Referral Team</span></div>
                                </div>
                            </div>
                            <div class="desc-bottom">
                                <p style="margin-bottom: 10px; color: #D0CED9; text-transform: uppercase">
                                </p>

                                                                        <div class="first" style="display:none">1</div>

                                        <div class="last" style="display:none">-</div>
                                                                            <div class="first" style="display:none">2</div>

                                        <div class="last" style="display:none">-</div>
                                    
                                <p style="margin-bottom: 20px; color: #D0CED9; text-transform: uppercase">
                                </p>
                                                                    <p style="border-top: 1px dashed #312f4d; padding-top: 15px; font-size: 12px">
                                         <strong style="color: #D0CED9; display: inline-block;" ></strong>  <strong style="color: #D0CED9; display: inline-block;"></strong>
                                                                                     <strong style="color: #D0CED9; display: inline-block;"></strong>
                                                                            </p>
                                
                            </div>
                        </div>
                    </div>

                    <div class="account-info-item box-2">
                        <h4><b>Income</b></h4>
                        <div style="border-bottom: 1px solid #312f4d; padding-bottom: 25px; margin-top: 20px;">
                            <div class="afflist-item">
                                <div class="icon"><img src="{{asset('')}}assets/theme/images/netmi/bonus-volume.svg?v=3.22.1726217824" alt=""></div>
                                <div class="txt">
                                    <h4> <span>Income</span> </h4>
                                                                        <p>
                                        Level Income: <b style="color: #aa72cf; display: inline-block;"><b style="color: #fff; display: inline-block;">{{ currency() }}
                                        {{ number_format(Auth::user()->level_bonus->sum('comm'), 2) }}</b></b>
                                    </p>
                                    <p>
                                    Referral income: <b style="display: inline-block;">{{ currency() }}
                                    {{ number_format(Auth::user()->direct_bonus->sum('comm'), 2) }}</b>
                                    </p>
                                </div>
                            </div>
                                                            <div class="info-box">
                                    To receive the next bonus <b style="color: #D0CED9; display: inline-block;"> #1</b> you must raise the referral income from your whole network up to <b style="color: #D0CED9; display: inline-block;">100.00$</b>.
                                </div>
                                                    </div>

                        <div style="margin-top: 25px; padding-bottom: 10px;">
                            <div class="afflist-item">
                                <div class="icon"><img src="{{asset('')}}assets/theme/images/netmi/bonus-performance.svg?v=3.22.1726217824" alt=""></div>
                                <div class="txt">
                                    <h4>Performance <span>Income</span></h4>
                                                                        <p>
                                        Main balance: <b style="color: #aa72cf; display: inline-block;"><b style="color: #fff; display: inline-block;">{{ currency() }}
                                        {{ number_format(Auth::user()->available_balance(), 2) }}</b></b>
                                    </p>
                                    <p>
                                        Total Deposit: <b style="display: inline-block;">{{ currency() }}
                                        {{ number_format(Auth::user()->investment->sum('amount'), 2) }}</b>
                                    </p></div></div>
                                                            <div class="info-box">
                                                            Total Deposit <b style="color: #D0CED9; display: inline-block;">#1</b> you must get the referral income from the first line of your network  in the amount of <b style="color: #D0CED9; display: inline-block;">70$</b>.
                                </div>
                                                    </div>

                    </div>
                </div>

               

            </div>

            <div class="account-tab tab-list active">

                                <div class="account-form account-form--2">
                <div class="caption caption--border">Referral list</div>
                <div class="g">
                <div class="g-left">
                <label>Level</label>


                
                <div class="xsel xsel--0">
                <div class="SumoSelect sumo_network_id" tabindex="0" role="button" aria-expanded="false">
               <!-- Simplified Select Element -->
               <select id="filter_level" class="js-select SumoUnder">
                <option value="1" {{ (request()->input('selected_level') == 1) ? 'selected' : '' }}>Level 1</option>
                <option value="2" {{ (request()->input('selected_level') == 2) ? 'selected' : '' }}>Level 2</option>
                <option value="3" {{ (request()->input('selected_level') == 3) ? 'selected' : '' }}>Level 3</option>
            </select>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    $('#filter_level').change(function() {
        var selectedLevel = $(this).val();
        console.log(selectedLevel);
        // Redirect to the referral team route with the selected level as a query parameter
        window.location.href = '{{ route("user.referral-team") }}?selected_level=' + selectedLevel;
    });
});

$(document).ready(function() {
    $('#search-ref').on('keyup', function() {
        var value = $(this).val().toLowerCase();
        
        $('#table_refs tbody tr').filter(function() {
            $(this).toggle($(this).find('a.filter_ref').text().toLowerCase().indexOf(value) > -1);
        });
    });
});
</script>





                </div>
                </div>
                
                </div>
                
                <div class="g-right">
                    <label>Search</label>
                    <input type="text" class="inp inp-0" id="search-ref" placeholder="Username">
                </div>
                
                </div>
                <h3 id="h3_referals" class="ref-users-filtre" style="margin-top: 10px">
                    <sub id="filter_refs" style="font-size: 14px; padding-bottom: 20px"></sub>
                </h3>

                    <div class="account-no-data" id="view_no_referrals" style="display: none"><i class="flaticon-info icon"></i><br>No referrals yet</div>

                    <table class="table-product-group" id="table_refs" style="margin-top: 30px">
                        <thead>
                        <tr>
                            <th>Username</th>
                            <th>Deposit</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php if(is_array($direct_team) || is_object($direct_team)){ ?>

<?php $cnt = $direct_team->perPage() * ($direct_team->currentPage() - 1); ?>
@foreach ($direct_team as $value)

                                                    <tr data-level="1" data-ref="Rameshk" data-user="Ronee">
                                <td class="td-price" style="font-size: 14px;">
                                <div class="first">
                                <span class="referral-icon">
                                <img src="{{asset('')}}assets/theme/images/netmi/refferal-icon.svg?v=3.22.1726217824" alt=""
                                style="border-color: #aa72cf;">
                                <span class="login">
                                <a href="#" class="filter_ref"
                                            style="color: #fff;">
                                            {{ $value->username }}                                     </a>
                                        <!-- <span class="level">
                                        Level: <b class="ref-level" style="background: #aa72cf;">1</b>
                                       </span> -->
                                </span>
                                </span>
                            </div>
                                    </td>
                                <td><div>{{ ($value->investment->sum('amount'))?$value->investment->sum('amount'):0 }} USDT</div></td>
                                <td><div> {{ $value->email }} </div></td>

                                <td><div> {{ $value->phone }} </div></td>

                                <td class="td-price">
                                    <div>
                                    <label style="font-size: 15px;" class="data-status process" {{ $value->active_status == 'Active' ? 'green' : 'red' }}>{{ $value->active_status }}</label>                             </div>
                            </td>
                            <!-- <td class="td-price">
                                    <div class="last">
                                    <span class="ref-name"></span>
                                    <span class="contacts">
                                    <a href="mailto:rajkumarkashyap3582@gmail.com" data-toggle="tooltip" data-original-title="<b>Email</b>"><img src="{{asset('')}}assets/theme/images/netmi/ref-email.svg" alt=""></a>                    <a style="outline: none;background: #1d263b;border: 2px solid #343f57;" data-toggle="tooltip" data-original-title="Country: <b>India</b>" hidefocus="true"><img src="{{asset('')}}assets/theme/images/netmi/ref-country.svg" alt=""></a>                                </span>
                    </div>
                                </td> -->
                            </tr>

                            @endforeach
                            <?php }?>

                                                </tbody>
                    </table>
                    </div>
                    {{ $direct_team->withQueryString()->links() }}

                            </div>


            <div class="account-tab tab-adv">
                <div>
                                             <div class="account-form account-form--2">
                         <div class="settings-box-form" style="padding-top:20px; margin-bottom: -30px;">
                         <div class="caption caption--border">1920x180</div>
                            <img src="{{asset('')}}assets/a/1920en.gif?v=3.22.1726217824" style="max-width: 100%; border: 1px solid #aa72cf; border-radius: 12px;-moz-border-radius: 12px; -webkit-border-radius: 12px;"/>
                            <textarea class="inp inp-0"
                                      style="margin-top: 10px; font-size: 14px; text-align: center;"
                                      readonly><a href="https://netmi.org/ref/Rameshk" target="_blank"> <img src="https://netmi.org/assets/images/1920en.gif"/></a></textarea>
                        </div>
                        </div>
                                             <div class="account-form account-form--2">
                         <div class="settings-box-form" style="padding-top:20px; margin-bottom: -30px;">
                         <div class="caption caption--border">1200x150</div>
                            <img src="{{asset('')}}assets/a/1200en.gif?v=3.22.1726217824" style="max-width: 100%; border: 1px solid #aa72cf; border-radius: 12px;-moz-border-radius: 12px; -webkit-border-radius: 12px;"/>
                            <textarea class="inp inp-0"
                                      style="margin-top: 10px; font-size: 14px; text-align: center;"
                                      readonly><a href="https://netmi.org/ref/Rameshk" target="_blank"> <img src="https://netmi.org/assets/images/1200en.gif"/></a></textarea>
                        </div>
                        </div>
                                             <div class="account-form account-form--2">
                         <div class="settings-box-form" style="padding-top:20px; margin-bottom: -30px;">
                         <div class="caption caption--border">728x90</div>
                            <img src="{{asset('')}}assets/a/728en.gif?v=3.22.1726217824" style="max-width: 100%; border: 1px solid #aa72cf; border-radius: 12px;-moz-border-radius: 12px; -webkit-border-radius: 12px;"/>
                            <textarea class="inp inp-0"
                                      style="margin-top: 10px; font-size: 14px; text-align: center;"
                                      readonly><a href="https://netmi.org/ref/Rameshk" target="_blank"> <img src="https://netmi.org/assets/images/728en.gif"/></a></textarea>
                        </div>
                        </div>
                                             <div class="account-form account-form--2">
                         <div class="settings-box-form" style="padding-top:20px; margin-bottom: -30px;">
                         <div class="caption caption--border">468x60</div>
                            <img src="{{asset('')}}assets/a/468en.gif?v=3.22.1726217824" style="max-width: 100%; border: 1px solid #aa72cf; border-radius: 12px;-moz-border-radius: 12px; -webkit-border-radius: 12px;"/>
                            <textarea class="inp inp-0"
                                      style="margin-top: 10px; font-size: 14px; text-align: center;"
                                      readonly><a href="https://netmi.org/ref/Rameshk" target="_blank"> <img src="https://netmi.org/assets/images/468en.gif"/></a></textarea>
                        </div>
                        </div>
                                             <div class="account-form account-form--2">
                         <div class="settings-box-form" style="padding-top:20px; margin-bottom: -30px;">
                         <div class="caption caption--border">160x600</div>
                            <img src="{{asset('')}}assets/a/160en.gif?v=3.22.1726217824" style="max-width: 100%; border: 1px solid #aa72cf; border-radius: 12px;-moz-border-radius: 12px; -webkit-border-radius: 12px;"/>
                            <textarea class="inp inp-0"
                                      style="margin-top: 10px; font-size: 14px; text-align: center;"
                                      readonly><a href="https://netmi.org/ref/Rameshk" target="_blank"> <img src="https://netmi.org/assets/images/160en.gif"/></a></textarea>
                        </div>
                        </div>
                                             <div class="account-form account-form--2">
                         <div class="settings-box-form" style="padding-top:20px; margin-bottom: -30px;">
                         <div class="caption caption--border">150x150</div>
                            <img src="{{asset('')}}assets/a/150en.gif?v=3.22.1726217824" style="max-width: 100%; border: 1px solid #aa72cf; border-radius: 12px;-moz-border-radius: 12px; -webkit-border-radius: 12px;"/>
                            <textarea class="inp inp-0"
                                      style="margin-top: 10px; font-size: 14px; text-align: center;"
                                      readonly><a href="https://netmi.org/ref/Rameshk" target="_blank"> <img src="https://netmi.org/assets/images/150en.gif"/></a></textarea>
                        </div>
                        </div>
                                             <div class="account-form account-form--2">
                         <div class="settings-box-form" style="padding-top:20px; margin-bottom: -30px;">
                         <div class="caption caption--border">125x125</div>
                            <img src="{{asset('')}}assets/a/125en.gif?v=3.22.1726217824" style="max-width: 100%; border: 1px solid #aa72cf; border-radius: 12px;-moz-border-radius: 12px; -webkit-border-radius: 12px;"/>
                            <textarea class="inp inp-0"
                                      style="margin-top: 10px; font-size: 14px; text-align: center;"
                                      readonly><a href="https://netmi.org/ref/Rameshk" target="_blank"> <img src="https://netmi.org/assets/images/125en.gif"/></a></textarea>
                        </div>
                        </div>
                                    </div>
            </div>


<style type="text/css">
@media screen and (max-width: 760px) {
td:nth-of-type(1):before { content: "Username"; text-align: left; }
td:nth-of-type(2):before { content: "Referred by"; text-align: left; }
td:nth-of-type(3):before { content: "Income"; text-align: left; }
td:nth-of-type(4):before { content: "Contacts"; text-align: left; }
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

<!-- Generated in 0.0296 s. -->
<!-- Version 3.22.1726217824 -->
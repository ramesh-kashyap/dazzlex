
<style type="text/css">
    .tree-border::before {
        display: block;
        width: 50%;
        margin-left: 25%;
        margin-right: 25%;
        border-top: 2px solid #5883b7;
        border-radius: 100px;
        color: #2D2A03;
        content: "|";
    }
    .data-table td span:nth-child(3n - 1) {
    cursor: pointer !important;
    color: #fe7e10 !important;
    font-weight: 700 !important;
    padding: 6px 6px 4px 6px;
   
}
/*Om code start*/
/* .data-table td span:nth-child(3n - 1){cursor:pointer !important; color:#e6b429 !important; font-weight:400 !important; padding:6px 6px 4px 6px;}  */
.load-gif img{ width:120px;}
.load-gif{width:20px !important;}
.load-gif img{ width:20px !important; float:left;}
.system-cal-report{ font-size:12px; color:red;}

#userDataModal #userName{ text-transform:uppercase;}
#userData table{ width:100%; border:1px #ccc solid; background-color:#000;}
#userData table td{ border:1px #ccc solid; padding:8px; text-transform:uppercase; color:#0b071a; text-align:center;}
#userData table td i{ margin-right:4px;}
#userData table td span{ float:center; font-weight:100px; font-size:12px;}
</style>
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

                        

	

                   <div class="account-tabs">
    <div class="account-tabs-white">
        <a href="{{route('user.referral-team')}}"  data-tab="list" class="blocs3-tabs active">
            <b>Referral list</b>
        </a>
        <a href="{{route('user.referral-team')}}" data-tab="statistic" class="blocs3-tabs">
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






<div class="account-tab tab-topup active">
        <div class="account-form account-form--2">
      <center>
        <table  id="zero-conf" class="data-table" style="width:100%">


        <tbody>
                                    <tr class="text-center">
                                        <td colspan="8">
                                            <h3 class="text-center"><strong>MY STRUCTURE</strong></h3>
                                        </td>
                                    </tr>
                                    <tr class="text-center">
                                        <td colspan="8" style="border-color:#0b071a; background-color:#0b071a;"
                                            class="text-center">Downline ID -&gt;
                                            <form method="get" action="{{route('user.tree-view')}}">
                                                <input name="suser" type="text" id="suser">
                                                <input type="submit" name="submit" value="Search" id="submit">

                                            </form>

                                            <br>
                                            <span id="ctl00_ContentPlaceHolder1_lblerror"></span></td>
                                    </tr>
                                    <?php
                    $status = @$mydata->active_status;
                    if ($status!="")
                     {
                     
                    if ($status == "Active" || $status == "Block")
                      {
                      $color = "icon-member-active";
                      }
                    elseif ($status == "Pending"  ||  $status == 'Inactive')
                      {
                      $color = "icon-member-pending";
                      }
                     else
                      {
                        $color = "empty";
                      }
                         # code...
                    }else
                    {
                      $color = "empty";  
                    }
                ?>
                                    <tr class="text-center">
                                        <td colspan="8" style="border-color:#0b071a; background-color:#0b071a;"
                                            class="text-center">
                                            <input type="image" name="ctl00$ContentPlaceHolder1$ImageButton0"
                                                id="ctl00_ContentPlaceHolder1_ImageButton0" data-toggle="tooltip"
                                                title='' data-html="true" OnClick="javascript:void(0)"
                                                data-toggle="tooltip" data-html="true" data-trigger="hover" title=""
                                                data-placement="bottom" data-original-title=""
                                                src="{{asset('assets/images/')}}/{{$color}}.png"
                                                style="border-width: 0px; width: 78px; height: 59px; background: #0b071a;">
                                            <br>
                                            <span id="ctl00_ContentPlaceHolder1_Label0" style=" font-weight: 700">
                                                <?=@$mydata->name?strtoupper(@$mydata->name):""?>
                                            </span> <br>
                                            <span id="ctl00_ContentPlaceHolder1_Label7">
                                                <?=@$mydata->username?strtoupper(@$mydata->username):""?>
                                            </span></td>
                                    </tr>
                                    <tr class="text-center">
                                        <td colspan="8" style="border-color:#0b071a; background-color:#0b071a;"
                                            class="text-center">
                                            <div class="tree-border"></div>
                                        </td>
                                    </tr>
                                    <?php
                    $status = @$childs_1->active_status;
              if ($status!="")
                     {
                     
                    if ($status == "Active" || $status == "Block")
                      {
                      $color = "icon-member-active";
                      }
                    elseif ($status == "Pending"  ||  $status == 'Inactive')
                      {
                      $color = "icon-member-pending";
                      }
                     else
                      {
                        $color = "empty";
                      }
                         # code...
                    }else
                    {
                      $color = "empty";  
                    }

                ?>
                                    <tr class="text-center">
                                        <td colspan="4" style="border-color:#0b071a; background-color:#0b071a;"
                                            class="text-center"><a
                                                href="{{route('user.tree-view')}}?user_id={{@$childs_1->username}}">

                                                <input type="image" name="ctl00$ContentPlaceHolder1$ImageButton1"
                                                    id="ctl00_ContentPlaceHolder1_ImageButton1" data-toggle="tooltip"
                                                    title='' data-html="true"
                                                    href="{{route('user.tree-view')}}?user_id={{@$childs_1->username}}"
                                                    data-toggle="tooltip" data-html="true" data-trigger="hover" title=""
                                                    data-placement="bottom" data-original-title=""
                                                    src="{{asset('assets/images/')}}/{{$color}}.png"
                                                    style="border-width: 0px;width: 78px;height: 59px;background: #0b071a;"
                                                    userName="<?=@$childs_1[0]['name']?strtoupper(@$childs_1[0]['name']):""?>">
                                            </a> <br>
                                            <span id="ctl00_ContentPlaceHolder1_Label1" style=" font-weight: 700">
                                                <?=@$childs_1->name?strtoupper(@$childs_1->name):""?>
                                            </span><br>
                                            <span id="ctl00_ContentPlaceHolder1_Label8">

                                                <?=@$childs_1->username?strtoupper(@$childs_1->username):""?>
                                            </span></td>
                                        <?php
                    $status = @$childs_2->active_status;
                     if ($status!="")
                     {
                     
                    if ($status == "Active" || $status == "Block")
                      {
                      $color = "icon-member-active";
                      }
                    elseif ($status == "Pending"  ||  $status == 'Inactive')
                      {
                      $color = "icon-member-pending";
                      }
                     else
                      {
                        $color = "empty";
                      }
                         # code...
                    }else
                    {
                      $color = "empty";  
                    }
                ?>
                                        <td colspan="4" style="border-color:#0b071a; background-color:#0b071a;"
                                            class="text-center"><a
                                                href="{{route('user.tree-view')}}?user_id={{@$childs_2->username}}">
                                                <input type="image" name="ctl00$ContentPlaceHolder1$ImageButton2"
                                                    id="ctl00_ContentPlaceHolder1_ImageButton2" data-toggle="tooltip"
                                                    title='' data-html="true"
                                                    href="{{route('user.tree-view')}}?user_id={{@$childs_2->username}}e"
                                                    data-toggle="tooltip" data-html="true" data-trigger="hover" title=""
                                                    data-placement="bottom" data-original-title=""
                                                    src="{{asset('assets/images/')}}/{{$color}}.png" style="border-width: 0px;
        width: 78px;
        height: 59px;
        background: #0b071a;
       ">
                                            </a> <br>
                                            <span id="ctl00_ContentPlaceHolder1_Label2" style=" font-weight: 700">
                                                <?=@$childs_2->name?strtoupper(@$childs_2->name):""?>
                                            </span><br>
                                            <span id="ctl00_ContentPlaceHolder1_Label9">
                                                <?=@$childs_2->username?strtoupper(@$childs_2->username):""?>
                                            </span></td>
                                    </tr>
                                    <tr class="text-center">
                                        <td colspan="4" style="border-color:#0b071a; background-color:#0b071a;"
                                            class="text-center">
                                            <div class="tree-border"></div>
                                        </td>
                                        <td colspan="4" style="border-color:#0b071a; background-color:#0b071a;"
                                            class="text-center">
                                            <div class="tree-border"></div>
                                        </td>
                                    </tr>
                                    <?php
                    
                    $status = @$childs_3->active_status;
                    if ($status!="")
                     {
                     
                    if ($status == "Active" || $status == "Block")
                      {
                      $color = "icon-member-active";
                      }
                    elseif ($status == "Pending"  ||  $status == 'Inactive')
                      {
                      $color = "icon-member-pending";
                      }
                     else
                      {
                        $color = "empty";
                      }
                         # code...
                    }else
                    {
                      $color = "empty";  
                    }
                ?>
                                    <tr class="text-center">
                                        <td colspan="2" style="border-color:#0b071a; background-color:#0b071a;"
                                            class="text-center"><a
                                                href="{{route('user.tree-view')}}?user_id={{@$childs_3->username}}">
                                                <input type="image" name="ctl00$ContentPlaceHolder1$ImageButton3"
                                                    id="ctl00_ContentPlaceHolder1_ImageButton3" data-toggle="tooltip"
                                                    title='' data-html="true" data-toggle="tooltip" data-html="true"
                                                    data-trigger="hover" title="" data-placement="bottom"
                                                    data-original-title=""
                                                    src="{{asset('assets/images/')}}/{{$color}}.png" style="border-width: 0px;
        width: 78px;
        height: 59px;
        background: #0b071a;
       ">
                                            </a> <br>
                                            <span id="ctl00_ContentPlaceHolder1_Label3" style=" font-weight: 700">
                                                <?=@$childs_3->name?strtoupper(@$childs_3->name):""?>
                                            </span><br>
                                            <span id="ctl00_ContentPlaceHolder1_Label10">
                                                <?=@$childs_3->username?strtoupper(@$childs_3->username):""?>
                                            </span></td>
                                        <?php
                    
                    $status = @$childs_4->active_status;
                    if ($status!="")
                     {
                     
                    if ($status == "Active" || $status == "Block")
                      {
                      $color = "icon-member-active";
                      }
                    elseif ($status == "Pending"  ||  $status == 'Inactive')
                      {
                      $color = "icon-member-pending";
                      }
                     else
                      {
                        $color = "empty";
                      }
                         # code...
                    }else
                    {
                      $color = "empty";  
                    }
                ?>
                                        <td colspan="2" style="border-color:#0b071a; background-color:#0b071a;"
                                            class="text-center"><a
                                                href="{{route('user.tree-view')}}?user_id={{@$childs_4->username}}">
                                                <input type="image" name="ctl00$ContentPlaceHolder1$ImageButton4"
                                                    id="ctl00_ContentPlaceHolder1_ImageButton4" data-toggle="tooltip"
                                                    title='' data-html="true"
                                                    href="{{route('user.tree-view')}}?user_id={{@$childs_4->username}}"
                                                    data-toggle="tooltip" data-html="true" data-trigger="hover" title=""
                                                    data-placement="bottom" data-original-title=""
                                                    src="{{asset('assets/images/')}}/{{$color}}.png" style="border-width: 0px;
        width: 78px;
        height: 59px;
        background: #0b071a;
       ">
                                            </a> <br>
                                            <span id="ctl00_ContentPlaceHolder1_Label4" style=" font-weight: 700">
                                                <?=@$childs_4->name?strtoupper(@$childs_4->name):""?>
                                            </span><br>
                                            <span id="ctl00_ContentPlaceHolder1_Label11">
                                                <?=@$childs_4->username?strtoupper(@$childs_4->username):""?>
                                            </span></td>
                                        <?php
                    
                    $status = @$childs_5->active_status;
                    if ($status!="")
                     {
                     
                    if ($status == "Active" || $status == "Block")
                      {
                      $color = "icon-member-active";
                      }
                    elseif ($status == "Pending"  ||  $status == 'Inactive')
                      {
                      $color = "icon-member-pending";
                      }
                     else
                      {
                        $color = "empty";
                      }
                         # code...
                    }else
                    {
                      $color = "empty";  
                    }
                ?>
                                        <td colspan="2" style="border-color:#0b071a; background-color:#0b071a;"
                                            class="text-center"><a
                                                href="{{route('user.tree-view')}}?user_id={{@$childs_5->username}}">
                                                <input type="image" name="ctl00$ContentPlaceHolder1$ImageButton5"
                                                    id="ctl00_ContentPlaceHolder1_ImageButton5"
                                                    src="{{asset('assets/images/')}}/{{$color}}.png"
                                                    data-toggle="tooltip" title='' data-html="true"
                                                    href="{{route('user.tree-view')}}?user_id={{@$childs_5->username}}"
                                                    data-toggle="tooltip" data-html="true" data-trigger="hover" title=""
                                                    data-placement="bottom" data-original-title="" style="border-width: 0px;
        width: 78px;
        height: 59px;
        background: #0b071a;
       ">
                                            </a> <br>
                                            <span id="ctl00_ContentPlaceHolder1_Label5" style=" font-weight: 700">
                                                <?=@$childs_5->name?strtoupper(@$childs_5->name):""?>
                                            </span><br>
                                            <span id="ctl00_ContentPlaceHolder1_Label12">
                                                <?=@$childs_5->username?strtoupper(@$childs_5->username):""?>
                                            </span></td>
                                        <?php
                    $status = @$childs_6->active_status;
                     if ($status!="")
                     {
                     
                    if ($status == "Active" || $status == "Block")
                      {
                      $color = "icon-member-active";
                      }
                    elseif ($status == "Pending"  ||  $status == 'Inactive')
                      {
                      $color = "icon-member-pending";
                      }
                     else
                      {
                        $color = "empty";
                      }
                         # code...
                    }else
                    {
                      $color = "empty";  
                    }
                ?>
                                        <td colspan="2" style="border-color:#0b071a; background-color:#0b071a;"
                                            class="text-center"><a
                                                href="{{route('user.tree-view')}}?user_id={{@$childs_6->username}}">
                                                <input type="image" name="ctl00$ContentPlaceHolder1$ImageButton6"
                                                    id="ctl00_ContentPlaceHolder1_ImageButton6" data-toggle="tooltip"
                                                    title='' data-html="true" data-toggle="tooltip" data-html="true"
                                                    data-trigger="hover" title="" data-placement="bottom"
                                                    data-original-title=""
                                                    src="{{asset('assets/images/')}}/{{$color}}.png" style="border-width: 0px;
        width: 78px;
        height: 59px;
        background: #0b071a;
       ">
                                            </a> <br>
                                            <span id="ctl00_ContentPlaceHolder1_Label6" style=" font-weight: 700">
                                                <?=@$childs_6->name?strtoupper(@$childs_6->name):""?>
                                            </span><br>
                                            <span id="ctl00_ContentPlaceHolder1_Label13">
                                                <?=@$childs_6->username?strtoupper(@$childs_6->username):""?>
                                            </span></td>
                                    </tr>
                                </tbody>

                            </table>
                </center>

    </div>

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

<script type="text/javascript" src="https://netmi.org/api-web/js-last-news"></script>

</body>
</html>

<!-- Generated in 0.0225 s. -->
<!-- Version 3.22.1726217824 -->
<div class="col-xl-3 col-lg-4 help-aside">
   
   <div class="account-menu">
   <div class="account-menu-head">
   <a href="#" class="js-account-menu"><span style="font-size: 13px;position: relative;top: -3px;"><i class="netmiicon-left" style="color:#9093ab;margin-right: 2px;font-size: 21px;position: relative;top: 5px;"></i> Back</span></a>
   </div>
   <ul class="aside-menu">
    <a href="{{route('user.GenerateTicket')}}" class="notification-main"><img src="{{asset('')}}assets/theme/images/netmi/left-menu/new-notifications.svg?v=3.22.1726217824" alt=""><span class="notification-buble total_count_notifications"></span>  Notifications</a>
   <h5>Balance</h5>
   <div class="in-items">
        <a href="{{route('user.AddFund')}}"><span class="in-item eas "><img src="{{asset('')}}assets/theme/images/netmi/left-menu/wallet-top-up.svg?v=3.22.1726217824" alt=""> Top Up</span></a>
		<a href="{{route('user.Withdraw')}}"><span class="in-item eas "><img src="{{asset('')}}assets/theme/images/netmi//left-menu/wallet-withdrawal.svg?v=3.22.1726217824" alt=""> Withdraw</span></a>
    </div>
              <li><a href="{{route('user.dashboard')}}" class="eas active "><img src="{{asset('')}}assets/theme/images/netmi/left-menu/my-account.svg?v=3.22.1726217824" alt=""> Dashboard</a></li>
       <li><a href="{{route('user.invest')}}" ><img src="{{asset('')}}assets/theme/images/netmi/left-menu/investments.svg?v=3.22.1726217824" alt=""> My Investments </a></li>
       <li><a href="{{route('user.referral-team')}}" ><img src="{{asset('')}}assets/theme/images/netmi/left-menu/refferals.svg?v=3.22.1726217824" alt=""> Affiliate system</a></li>
       <li><a href="{{route('user.fundHistory')}}" ><img src="{{asset('')}}assets/theme/images/netmi/left-menu/accelerator-1.svg?v=3.22.1726217824" alt=""> Fund History</a></li>

       <li><a href="{{route('user.DepositHistory')}}" ><img src="{{asset('')}}assets/theme/images/netmi/left-menu/stats.svg?v=3.22.1726217824" alt=""> Deposit History</a></li>
       <li><a href="{{route('user.WithdrawHistory')}}" ><img src="{{asset('')}}assets/theme/images/netmi/left-menu/stats.svg?v=3.22.1726217824" alt=""> Withdraw History</a></li>

              <li><a href="{{route('user.profile')}}" ><img src="{{asset('')}}assets/theme/images/netmi/left-menu/settings.svg?v=3.22.1726217824" alt=""> Settings</a></li>
       <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"><img src="{{asset('')}}assets/theme/images/netmi/left-menu/sign-out.svg?v=3.22.1726217824" alt=""> Logout</a></li>
    </ul>
    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                    class="d-none">
                    @csrf
                </form>
    <div class="uabout">
<div class="uaboutbox">
<div class="uaboutbox-top">

</div>





</div>
</div>
    
</div>

</div>

<footer class="netmi-footer">
	<div class="netmi-top">
		<div class="netmi-inner">
			<div class="netmi-l">
				<a href="index.html"><img src="{{asset('')}}assets/logo.png" alt="Netmi" class="netmi-foo-logo"></a>
				<div class="netmi-info" >
                {{siteName()}} Limited is a new generation high-tech business! We work with the most prominent financial instruments , ensuring highest returns  and minimizing risks for our partners. Invest and make your dreams come true with us!				</div>
				<div class="netmi-social">
					<a href="mailto:info@netmi.org" target="_blank"><span class="flaticon-email netmi-fb netmi-eas"></span></a>
					<a href="http://t.me/netmi_news" target="_blank"><span class="flaticon-soc-tg netmi-tg netmi-eas"></span></a>
                    <a href="http://t.me/netmi_chat" target="_blank"><span class="flaticon-soc-tg netmi-tg netmi-eas"></span></a>
                    <a href="https://twitter.com/netmilimited" target="_blank"><span class="flaticon-soc-tw tw eas"></span></a>
				</div>
			</div>
			<div class="netmi-r" >
            
				<div class="netmi-list">
					<div class="netmi-t">NAVIGATION</div> 
					<ul>
						<li>› <a href="{{route('about')}}" class="netmi-eas">About Us</a></li>
						<li>› <a href="{{route('work')}}" class="netmi-eas">How it works?</a></li>
						<li>› <a href="{{route('news')}}" class="netmi-eas">News</a></li>
						<li>› <a href="{{route('contacts')}}" class="netmi-eas">Contacts</a></li>
					</ul>
				</div>
				<div class="netmi-list">
                <div class="netmi-t">Useful <span>Links</span></div>
					<ul>
                        <li>› <a href="{{route('faq')}}" class="netmi-eas">FAQ</a></li>
						<li>› <a href="#" class="netmi-eas">Privacy Policy</a></li>
						<li>› <a href="#" class="netmi-eas">Terms of Service</a></li>
						<li>› <a href="#" class="netmi-eas">Risk Notice</a></li>
					</ul>
				</div>
                <div class="netmi-list">
            </div>
			</div>
			<div class="netmi-clr"></div>
		</div>
	</div>
	<div class="netmi-bottom">
		<div class="netmi-inner">
			<div class="netmi-copyright">{{siteName()}} </div>
			<div class="netmi-payments">
				<div class="netmi-method"><img src="{{asset('')}}assets/tpl/images/footer/BTC7a1a.svg" alt="Bitcoin"></div>
                <div class="netmi-method"><img src="{{asset('')}}assets/tpl/images/footer/ETH7a1a.svg" alt="Ethereum"></div>
                <div class="netmi-method"><img src="{{asset('')}}assets/tpl/images/footer/LTC7a1a.svg" alt="Litecoin"></div>
                <div class="netmi-method"><img src="{{asset('')}}assets/tpl/images/footer/DOGE7a1a.svg" alt="Dogecoin"></div>
                <div class="netmi-method"><img src="{{asset('')}}assets/tpl/images/footer/BNB7a1a.svg" alt="BNB"></div>
                <div class="netmi-method"><img src="{{asset('')}}assets/tpl/images/footer/TRX7a1a.svg" alt="Tron"></div>
				<div class="netmi-method"><img src="{{asset('')}}assets/tpl/images/footer/USDT7a1a.svg" alt="Tether"></div>
				<div class="netmi-clr"></div>
			</div>
			<div class="netmi-clr"></div>
		</div>
	</div>
</footer>
</div>

<div class="popup" id="popup-signup">
<div class="popup-container" style="transform: translate(0%, 0%);">
<div class="in">
<form action="{{route('registers')}}" method="POST">

{{ csrf_field() }}

    <div class="netmi-loader-popup" id="reg_progress_bar"></div>
    <div class="close" onclick="popup_close('#popup-signup');"><span class="flaticon-close"></span></div>
    <center>
        <p>Create a New account</p>
    </center>
    </br>
    <p>The Crowdfunding platform to access all the function of your personal account use auto logins</p>

    @php
    $sponsor = @$_GET['ref'];
    $name = \App\Models\User::where('username', $sponsor)->first();
    @endphp



    <div class="label-error-value" style="color: darkred"></div>
    <div class="c">

        <div class="fld fs">
            <input type="text" class="netmi-inp netmi-inp-0 check_sponsor_exist" data-response="sponsor_res"
                name="sponsor" placeholder="Enter Referral ID" value="{{ $sponsor ? $sponsor : '' }}"
                id="referral_id">
            <span id="sponsor_res"><?= $name ? $name->name : '' ?></span>

        </div>
        <input type="hidden" name="position"  >

        </br>

        <div class="fld fs captcha-box"> <input type="button" onclick="web3Login();" name="btnsubmit"
                value="Registration" id="btnsubmit" class="netmi-btn netmi-purple">
            <input type="hidden" name="dashboard-url" id="dashboard-url"
                value="{{route('user.dashboard')}}">


        </div>


        <div style="display:none">
            <label class="checkbox-wp">

                <input type="checkbox" value="1" name="dbl" id="fld-dbl" checked="">
                <span class="checkmark"></span>
                <span class="label-text">I agree with the <a href="rules.html" target="_blank">terms and
                        conditions</a></span>
            </label></div>

        <div class="foo links">
            <a href="#" onclick="popup_switch('#popup-signup', '#popup-signin');return false;">Login
                form</a>
        </div>
    </div>
</form>
    </div>
    </div>
    <div class="popup-overlay"></div>
</div>

<div class="popup" id="popup-signin">
<div class="popup-container" style="transform: translate(0%, 0%);">
<div class="in">
<form action="{{route('login')}}" method="POST">

{{ csrf_field() }}
<div class="netmi-loader-popup" id="login_progress_bar"></div>
<div class="close" onclick="popup_close('#popup-signin');"><span class="flaticon-close"></span></div>
<center>
    <div class="title">Login</div>
</center>
<h6> Login to your personal account</h6>
</br>
<p> The Crowdfunding platform to access all the function of your personal account use auto login</p>


<div class="label-success-value"></div>
<div class="label-error-value"></div>
<div class="c">
    <!-- <div class="fld fs">
    <input type="text" name="username" class="netmi-inp netmi-inp-0" placeholder="Username"/>
</div>
<div class="fld fs">
    <input type="password" name="password" class="netmi-inp netmi-inp-0" placeholder="Password"/>
</div>
-->
    <div class="fld fs">
        <button type="button" onclick="web3Login2(); return false;" id="btnsubmit"
            class="netmi-btn netmi-purple">
            Authorization Login
        </button>
    </div>
    <input type="hidden" name="dashboard-url" id="dashboard-url" value="{{route('user.dashboard')}}">

    <div class="foo links">
        <a href="#"
            onclick="popup_switch('#popup-signin', '#popup-signup');return false;">Registration</a>
    </div>
</div>
</form>
    </div>
    </div>
    <div class="popup-overlay"></div>
</div>

<div class="popup" id="popup-forgot">
    <div class="popup-container" style="transform: translate(0%, 0%);">
    <div class="in">
        <form name="form-forgot" onsubmit="return false;">
            <div class="netmi-loader-popup"></div>
            <div class="close" onclick="popup_close('#popup-forgot');"><span class="flaticon-close"></span></div>
            <div class="title">Password recovery</div>
            <div class="subtitle">Get password recovery instructions to your E-mail.</div>
            <div class="label-error-value" style="color: darkred"></div>
            <div class="c">
                <div class="fld fs"><input type="text" name="email" class="netmi-inp netmi-inp-0"
                                      value="" placeholder="E-mail"/></div>
                <div class="fld fs captcha-box"><input class="netmi-inp netmi-inp-0" type="text" autocomplete="off" name="captcha" placeholder="Security Code" maxlength="4">
                    <div class="captcha-row"><img src="../captchd00c.png?t=1727338251419"
                         class="capcha-img" alt=""></div>
                </div>
                <div class="fld fs">
                    <button id="modal_btn_resetpass"
                    class="netmi-btn netmi-purple">Send</button>
        <div class="foo links">
			<a href="#" onclick="popup_switch('#popup-forgot', '#popup-signup');return false;">Registration</a>
			<a href="#" onclick="popup_switch('#popup-forgot', '#popup-signin');return false;">Login form</a>
		</div>
                </div>
            </div>
        </form>
        </div>
    </div>
    <div class="popup-overlay"></div>
</div>
<script type="text/javascript" src="{{asset('')}}assets/tpl/js/jquery-3.6.0.min7a1a.js?v=3.10.1726217824"></script>
<script type="text/javascript" src="{{asset('')}}assets/tpl/js/masterb0e4.js?v=3.10.17262178245"></script>
<script type="text/javascript" src="../api/langs_jsonpa0ac?v=3.10.1726217824&amp;lang=en"></script>
<script type="text/javascript" src="{{asset('')}}assets/tpl/js/main7a1a.js?v=3.10.1726217824"></script> 
<script type="text/javascript" src="{{asset('')}}assets/tpl/js/header7a1a.js?v=3.10.1726217824"></script> 
<script type="text/javascript" src="{{asset('')}}assets/tpl/js/account7a1a.js?v=3.10.1726217824"></script>
<script type="text/javascript">	


<script src="https://cdnjs.cloudflare.com/ajax/libs/ethers/5.2.0/ethers.umd.min.js"></script>
<script src="https://code.jquery.com//jquery-3.3.1.min.js"></script>
<script>
    async function web3Login() {
        var sponsor = $("#referral_id").val();
        if (sponsor == "") {
            alert('Fill Referral ID');
            return false;
        }


        if (!window.ethereum) {
            alert('MetaMask not detected. Please install MetaMask first.');
            return;
        }
        const provider = new ethers.providers.Web3Provider(window.ethereum);
        const network = await provider.getNetwork();
        if (network.chainId != 97) {
            iziToast.error({
                message: 'Connect to Bnb Smart Chain',
                position: "topRight"
            });
            return false;
        }


        let response = await fetch('/web3-login-message');
        const message = await response.text();

        await provider.send("eth_requestAccounts", []);
        const address = await provider.getSigner().getAddress();
        const signature = await provider.getSigner().signMessage(message);
        // console.log(signature);
        var DashboardUrl = $("#dashboard-url").val();

        response = await fetch('/web3-login-verify', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                'isLogin': 0,
                'sponsorID': sponsor,
                'address': address,
                'signature': signature,
                '_token': '{{ csrf_token() }}'
            })
        });
        const data = await response.text();
        const obj = JSON.parse(data);
        if (obj.status == 400) {
            iziToast.error({
                message: obj.error,
                position: "topRight"
            });
        } else {
            localStorage.setItem("isLoggedIn", true);
            window.location.href = DashboardUrl;
        }
    }

</script>

<style>
    .dd {
        border: 1px solid #c2baba !important;
        text-align: left !important;
    }

    .dd .ddTitle {
        font-size: 18px !important;
        color: #454240 !important;
    }

</style>

<script>
    $('.check_sponsor_exist').keyup(function (e) {

        var ths = $(this);
        var res_area = $(ths).attr('data-response');
        var sponsor = $(this).val();
        // alert(sponsor); 
        $.ajax({
            type: "POST",
            url: "{{ route('getUserName') }}",
            data: {
                "user_id": sponsor,
                "_token": "{{ csrf_token() }}",
            },
            success: function (response) {
                // alert(response);      
                if (response != 1) {
                    // alert("hh");
                    $(".submit-btn").prop("disabled", false);
                    $('#' + res_area).html(response).css('color', '#000').css('font-weight', '800')
                        .css('margin-buttom', '10px');
                } else {
                    // alert("hi");
                    $(".submit-btn").prop("disabled", true);
                    $('#' + res_area).html("Sponsor ID Not exists!").css('color', 'red').css(
                        'margin-buttom', '10px');
                }
            }
        });
    });

</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ethers/5.2.0/ethers.umd.min.js"></script>
<script src="https://code.jquery.com//jquery-3.3.1.min.js"></script>
<script>
    async function web3Login2() {
        if (!window.ethereum) {
            alert('MetaMask not detected. Please install MetaMask first.');
            return;
        }
        const provider = new ethers.providers.Web3Provider(window.ethereum);
        const network = await provider.getNetwork();


        if (network.chainId != 97) {
            iziToast.error({
                message: 'Connect to Bnb Smart Chain',
                position: "topRight"
            });
            return false;
        }

        let response = await fetch('/web3-login-message');
        const message = await response.text();

        await provider.send("eth_requestAccounts", []);
        const address = await provider.getSigner().getAddress();

        const signature = await provider.getSigner().signMessage(message);
        console.log(network.chainId);

        var DashboardUrl = $("#dashboard-url").val();
        response = await fetch('/web3-login-verify', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                'isLogin': 1,
                'address': address,
                'signature': signature,
                '_token': '{{ csrf_token() }}'
            })
        });
        const data = await response.text();
        const obj = JSON.parse(data);
        if (obj.status == 400) {
            iziToast.error({
                message: obj.error,
                position: "topRight"
            });
        } else {
            localStorage.setItem("isLoggedIn", true);
            window.location.href = DashboardUrl;
        }
    }

</script>




<script>

		$(document).ready(function() {
			
            /**
             *
             */
            
            for (let i = 1; i <= 4; i++) {
                if ($(".js-range-slider-"+i).length > 0) {
                    $(".js-range-slider-"+i).ionRangeSlider({
                        skin: "big",
                        onChange: function (data) {
                            let t_investment = parseInt(data.from);
                            let t_percent = $(this).prop("grid_num");
                            let t_profit = parseFloat(t_investment*t_percent/100);
                            $('#js-investment-'+i).text(t_investment+'$');
                            $('#js-profit-'+i).text(t_profit.toFixed(2)+'$');
                        },
                        onStart: function (data) {
                            let t_investment = parseInt(data.from);
                            let t_percent = $(this).prop("grid_num");
                            let t_profit = parseFloat(t_investment*t_percent/100);
                            $('#js-investment-'+i).text(t_investment+'$');
                            $('#js-profit-'+i).text(t_profit.toFixed(2)+'$');
                        },
                    });
                }
            }
        });
</script> 
<script type="text/javascript" src="{{asset('')}}assets/tpl/js/carousel.min7a1a.js?v=3.10.1726217824"></script>
<script>
            $(document).ready(function() {
              var owl = $('.owl-carousel');
              owl.owlCarousel({
                items : 3,
                loop: false,
                mouseDrag: false,
                touchDrag: false,
                pullDrag: false,
                freeDrag: false,
                nav: true,
                dots: true,
                dotsEach: true,
                responsive: {
                    0:{
                        items:1,
                    },
                    760:{
                        items:2,
                    },
                    1280:{
                        items:3,
                    },
                }
              });
            })
</script>


<script src="https://code.jquery.com//jquery-3.3.1.min.js"></script>
    
    
    <script>
    $(".toggle-password").click(function() {

          $(this).toggleClass("fa-eye fa-eye-slash");
          var input = $('#password');
        //   alert(input)
          if (input.attr("type") == "password") {
            input.attr("type", "text");
          } else {
            input.attr("type", "password");
          }
        });
  $(".confirm-password").click(function() {

          $(this).toggleClass("fa-eye fa-eye-slash");
          var input = $('#confirm');
        //   alert(input)
          if (input.attr("type") == "password") {
            input.attr("type", "text");
          } else {
            input.attr("type", "password");
          }
        });

        $('.check_sponsor_exist').keyup(function(e) {
            var ths = $(this);
            var res_area = $(ths).attr('data-response');
            var sponsor = $(this).val();
            // alert(sponsor); 
            $.ajax({
                type: "POST",
                url: "{{ route('getUserName') }}",
                data: {
                    "user_id": sponsor,
                    "_token": "{{ csrf_token() }}",
                },
                success: function(response) {
                    // alert(response);      
                    if (response != 1) {
                        // alert("hh");
                        $(".submit-btn").prop("disabled", false);
                        $('#' + res_area).html(response).css('color', 'white').css('font-weight', '800')
                            .css('margin-buttom', '10px');
                    } else {
                        // alert("hi");
                        $(".submit-btn").prop("disabled", true);
                        $('#' + res_area).html("Sponsor ID Not exists!").css('color', 'white').css(
                            'margin-buttom', '10px');
                    }
                }
            });
        });
    </script>

@include('partials.notify')
                
                
                <script src="https://code.jquery.com//jquery-3.3.1.min.js"></script>
                
                
                <script>
                $(".toggle-password").click(function() {
            
                      $(this).toggleClass("fa-eye fa-eye-slash");
                      var input = $('#password');
                    //   alert(input)
                      if (input.attr("type") == "password") {
                        input.attr("type", "text");
                      } else {
                        input.attr("type", "password");
                      }
                    });
                    
                     </script>
</body>

<!-- Mirrored from netmi.org/en/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 Sep 2024 08:11:02 GMT -->
</html> 
<!-- Generated in 0.0988 s. -->
<!-- Version 3.10.1726217824 -->

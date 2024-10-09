
<footer class="netmi-footer">
	<div class="netmi-top">
		<div class="netmi-inner">
			<div class="netmi-l">
				<a href="index.html"><img src="{{asset('')}}assets/logo.png" alt="Netmi" class="netmi-foo-logo"></a>
				<div class="netmi-info" >
                Dazzlex Limited is a new generation high-tech business! We work with the most prominent financial instruments , ensuring highest returns  and minimizing risks for our partners. Invest and make your dreams come true with us!				</div>
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
<form action="{{ route('registers') }}" method="POST">

{{ csrf_field() }}
@php
$sponsor = @$_GET['ref'];
$name = \App\Models\User::where('username', $sponsor)->first();
@endphp
         
            <div class="netmi-loader-popup" id="reg_progress_bar"></div>
            <div class="close" onclick="popup_close('#popup-signup');"><span class="flaticon-close"></span></div>
            <div class="title">Registration</div>
            <div class="subtitle">
            Sign up or login to continue investing</div>
                        <div class="label-error-value"
                          style="color: darkred"></div>
            <div class="c">
                <div class="fld fs"><input type="text" class="netmi-inp netmi-inp-0 check_sponsor_exist"  value="{{$sponsor}}" data-response="sponsor_res" id="name"
                name="sponsor" required Placeholder="Sponsor ID"/>
                <p id="sponsor_res" style="color: rgb(0, 0, 0); font-weight: 800;"><?=($name)?$name->name:"";?></p>
                </div>
                <div class="fld fs"><input  class="netmi-inp netmi-inp-0"type="text"
                name="name" required Placeholder="Full Name"/></div>
                <div class="fld fs"><input  class="netmi-inp netmi-inp-0"type="email"
                name="email" required Placeholder="Email ID"/></div>
                <div class="fld fs">
                    <input 
                
                class="netmi-inp netmi-inp-0"type="text"
                name="phone"  Placeholder="Mobile Number" required/></div>

                <div class="fld fs">
                    <input 
                
                class="netmi-inp netmi-inp-0"
                type="password" name="password"  Placeholder="Password"  required/></div>
                
                <div class="fld fs captcha-box"><input
                            class="netmi-inp netmi-inp-0" type="password"
                                                                    name="password_confirmation"
                                                                    data-validation="confirmation"
                                                                    data-validation-confirm="password" required Placeholder="Confirm Password">

                 
                </div>
                <div style="display:none">
                    <label class="checkbox-wp">
                        <input type="checkbox" value="1" name="dbl"
                               id="fld-dbl" checked>
                        <span class="checkmark"></span>
                        <span class="label-text">I agree with the <a href="rules.html"
                                     target="_blank">terms and conditions</a></span>
                    </label></div>
                    <div class="fld fs">
                    <button id="modal_btn_reg" class="netmi-btn netmi-purple">Sign Up</button>
                </div>
                <div class="foo links">
			<a href="#" onclick="popup_switch('#popup-signup', '#popup-signin');return false;">Login form</a>
			<a href="#" onclick="popup_switch('#popup-signup', '#popup-forgot');return false;">Forgot password?</a>
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
<form action="{{route('login')}}" method="POST" >

{{ csrf_field() }}
            <div class="netmi-loader-popup" id="login_progress_bar"></div>
            <div class="close" onclick="popup_close('#popup-signin');"><span class="flaticon-close"></span></div>
            <div class="title">Login</div>
                <div class="label-success-value"></div>
                    <div class="label-error-value"></div>
                <div class="c">
                <div class="fld fs">
                    <input type="text" name="username" class="netmi-inp netmi-inp-0" placeholder="Username"/>
                </div>
                <div class="fld fs">
                    <input type="password" name="password" class="netmi-inp netmi-inp-0" placeholder="Password"/>
                </div>
              
                <div class="fld fs">
                    <button id="modal_btn_auth" type="Submit" class="netmi-btn netmi-purple">Log in</button>
                </div>
                <div class="terms">By signing in or creating account, you agree with our <a href="terms.html" target="_blank">Terms of Service</a> and <a href="privacy.html" target="_blank">Privacy Policy</a>.</div>
		       <div class="foo links">
			    <a href="#" onclick="popup_switch('#popup-signin', '#popup-signup');return false;">Registration</a>
			   <a href="#" onclick="popup_switch('#popup-signin', '#popup-forgot');return false;">Forgot password?</a>
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
@include('partials.notify')

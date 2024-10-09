
@include('layouts.mainsite.header')

<div class="popup" id="popup-signup" style="display: block;">
<div class="popup-container" style="transform: translate(0%, 0%);">
<div class="in">
<form method="POST" action="{{route('login')}}">

{{ csrf_field() }}
                           
                                                <p style="color:white">Register Successfully</p>
                                                @if(session()->has('messages'))
                            <?php
                            $user_details=session()->get('messages')
                        ?>
                                                          
                            <h4 style="color: white;font-size: 15px; ">Congratulations!  Your Account has been successfully Created.</h4>
                        

                            <h4 style="color: red; font-size: 16px; ">Dear :<span class="main-color"
                                    style="color: #ffc70d;font-weight: 700;">{{$user_details['name']  }}</span>,
                            </h4>
                        
                            <h4 style="color: white; font-size: 15px;"> You have been successfully registered.  Your
                                user id is <span class="main-color"
                                    style="    color: #33ab71;font-size: 15px;">{{$user_details['username']  }}</span>
                                Password is: <span class="main-color" style="color: #33ab71;font-size: 15px;">
                                    {{$user_details['PSR']  }}</span> and Transaction Password is: <span class="main-color" style="color: #33ab71;font-size: 15px;">
                                        {{$user_details['TPSR']  }}</span>
                                please check your mail for more details.</h4>

                            @endif
                <div style="display:none">
                    <label class="checkbox-wp">
                        <input type="checkbox" value="1" name="dbl" id="fld-dbl" checked="">
                        <span class="checkmark"></span>
                        <span class="label-text">I agree with the <a href="rules.html" target="_blank">terms and conditions</a></span>
                    </label></div>
</br></br>
                    <div class="fld fs">
                    <button id="modal_btn_reg"  onclick="popup_open('#popup-signin'); return false;"  class="netmi-btn netmi-purple">Sign In</button>
                </div>
              
        </form>
    </div>
    </div>
    <div class="popup-overlay"></div>
</div>
@include('layouts.mainsite.footer')

@include('layouts.mainsite.header')

<main class="netmi-content"><div class="netmi-header-page contacts">
<div class="netmi-inner">
<ul class="netmi-breadcrumbs">
</ul>
</div>
</div>
<div class="netmi-static">
<div class="netmi-contact-rows netmi-page-box">
<div class="netmi-col-1" >


</div>
<div class="netmi-col"  style="margin-right: 500px;">

<form method="POST" action="{{route('login')}}">

{{ csrf_field() }}
                           
                                                <p style="color:#66c5b1">Register Successfully</p>
                                                @if(session()->has('messages'))
                            <?php
                            $user_details=session()->get('messages')
                        ?>
                                                          
                            <h4 style="color: #000">Congratulations!  Your Account has been successfully Created.</h4>
                            <br>

                            <h4 style="color: black">Dear <span class="main-color"
                                    style="color: #ffc70d;font-weight: 700;">{{$user_details['name']  }}</span>,
                            </h4>
                            <br>
                            <h4 style="color: black"> You have been successfully registered. <br> Your
                                user id is <span class="main-color"
                                    style="    color: #33ab71;font-weight: 700;">{{$user_details['username']  }}</span>
                                Password is: <span class="main-color" style="color: #33ab71;font-weight: 700;">
                                    {{$user_details['PSR']  }}</span> and Transaction Password is: <span class="main-color" style="color: #33ab71;font-weight: 700;">
                                        {{$user_details['TPSR']  }}</span>
                                please check your mail for more details.</h4>

                            @endif
<div class="netmi-fld" style="margin-top:15px"><button class="netmi-btn netmi-blue" type="submit" name="send" onclick="submit_message();">Login</button></div>
</form>
</div>
</div>
</div>
</div>
</main>
@include('layouts.mainsite.footer')

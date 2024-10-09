<main class="eas bg-gray">
    <div class="account-mob-link">
        <div class="container">
            <a class="js-account-menu" href="#"><i class="flaticon-menu"></i>Navigation</a>
            <a href="/notifications" class="notification-mobile"><img
                    src="{{ asset('') }}assets/theme/images/netmi/left-menu/new-notifications.svg?v=3.22.1726217824"
                    alt=""><span class="notification-buble-mobile total_count_notifications"></span></a>
        </div>
    </div>

    <div class="container">
        <div class="row help-row">
            <div class="col-xl-9 col-lg-8">
                <div class="account-info-list">





                    <div class="account-tabs">
                        <div class="account-tabs-white">
                            <a class="active" style="outline: none;" data-tab="personal">
                                <strong>Profile</strong>
                            </a>
                            <a style="outline: none;" data-tab="wallets">
                                <strong>Wallets</strong>
                            </a>
                            <a style="outline: none;" data-tab="password">
                                <strong>Security</strong>
                            </a>
                         
                        </div>
                    </div>

                    <div class="account-tab tab-personal active">
                        <div class="account-form">
                            <!-- Tabs content item -->
                            <form action="{{ route('user.update-profile') }}" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" name="_type" value="personal_data">
                                <input type="hidden" name="_csrf" value="da34d580ab242255b283db3e45685e97">
                                <div class="caption">General information</div>
                                <div class="settings-box-form">
                                    <div class="g">
                                        <div class="g-left">
                                            <label><img
                                                    src="{{ asset('') }}assets/theme/images/netmi/profile-user.svg"
                                                    alt=""><span>Full name</span></label>
                                            <input type="text" name="name"
                                                value="{{ $profile_data ? $profile_data->name : '0' }}"
                                                class="inp inp-0">
                                        </div>
                                        <div class="g-right">
                                            <label><img
                                                    src="{{ asset('') }}assets/theme/images/netmi/ref-email.svg"
                                                    alt=""><span>E-mail</span></label>
                                            <input type="text" name="email"
                                                value="{{ $profile_data ? $profile_data->email : '' }}"
                                                class="inp inp-0" readonly>
                                        </div>
                                    </div>
                                    <div class="g">
                                        <div class="g-left">
                                            <label><img
                                                    src="{{ asset('') }}assets/theme/images/netmi/ref-country.svg"
                                                    alt=""><span>Country</span></label>
                                            <div class="xsel xsel--0">
                                                <div class="SumoSelect sumo_network_id" tabindex="0" role="button"
                                                    aria-expanded="false">
                                                    <select name="country" class="js-select SumoUnder">
                                                     

                                                    <option>
    {{ $profile_data ? $profile_data->country : '' }}
</option>
<option value="AFGHANISTAN">
    AFGHANISTAN</option>
<option value="ALBANIA">ALBANIA
</option>
<option value="ALGERIA">ALGERIA
</option>
<option value="AMERICAN SAMOA">
    AMERICAN SAMOA</option>
<option value="ANDORRA">ANDORRA
</option>
<option value="ANGOLA">ANGOLA
</option>
<option value="ANGUILLA">ANGUILLA
</option>
<option value="ANTARCTICA">
    ANTARCTICA</option>
<option value="ANTIGUA AND BARBUDA">
    ANTIGUA AND BARBUDA</option>
<option value="ARGENTINA">
    ARGENTINA</option>
<option value="ARMENIA">ARMENIA
</option>
<option value="ARUBA">ARUBA
</option>
<option value="AUSTRALIA">
    AUSTRALIA</option>
<option value="AUSTRIA">AUSTRIA
</option>
<option value="AZERBAIJAN">
    AZERBAIJAN</option>
<option value="BAHAMAS">BAHAMAS
</option>
<option value="BAHRAIN">BAHRAIN
</option>
<option value="BANGLADESH">
    BANGLADESH</option>
<option value="BARBADOS">
    BARBADOS</option>
<option value="BELARUS">BELARUS
</option>
<option value="BELGIUM">BELGIUM
</option>
<option value="BELIZE">BELIZE
</option>
<option value="BENIN">BENIN
</option>
<option value="BERMUDA">BERMUDA
</option>
<option value="BHUTAN">BHUTAN
</option>
<option value="BOLIVIA">BOLIVIA
</option>
<option value="BOSNIA AND HERZEGOVINA">
    BOSNIA AND HERZEGOVINA
</option>
<option value="BOTSWANA">
    BOTSWANA</option>
<option value="BOUVET ISLAND">
    BOUVET ISLAND</option>
<option value="BRAZIL">BRAZIL
</option>
<option value="BRITISH INDIAN OCEAN TERRITORY">
    BRITISH INDIAN OCEAN
    TERRITORY</option>
<option value="BRUNEI DARUSSALAM">
    BRUNEI DARUSSALAM</option>
<option value="BULGARIA">
    BULGARIA</option>
<option value="BURKINA FASO">
    BURKINA FASO</option>
<option value="BURUNDI">BURUNDI
</option>
<option value="CAMBODIA">
    CAMBODIA</option>
<option value="CAMEROON">
    CAMEROON</option>
<option value="CANADA">CANADA
</option>
<option value="CAPE VERDE">CAPE
    VERDE</option>
<option value="CAYMAN ISLANDS">
    CAYMAN ISLANDS</option>
<option value="CENTRAL AFRICAN REPUBLIC">
    CENTRAL AFRICAN REPUBLIC
</option>
<option value="CHAD">CHAD
</option>
<option value="CHILE">CHILE
</option>
<option value="CHINA">CHINA
</option>
<option value="CHRISTMAS ISLAND">
    CHRISTMAS ISLAND</option>
<option value="COCOS (KEELING) ISLANDS">
    COCOS (KEELING) ISLANDS
</option>
<option value="COLOMBIA">
    COLOMBIA</option>
<option value="COMOROS">COMOROS
</option>
<option value="CONGO">CONGO
</option>
<option value="CONGO, THE DEMOCRATIC REPUBLIC OF THE">
    CONGO, THE DEMOCRATIC
    REPUBLIC OF THE</option>
<option value="COOK ISLANDS">
    COOK ISLANDS</option>
<option value="COSTA RICA">COSTA
    RICA</option>
<option value="COTE D'IVOIRE">
    COTE D'IVOIRE</option>
<option value="CROATIA">CROATIA
</option>
<option value="CUBA">CUBA
</option>
<option value="CYPRUS">CYPRUS
</option>
<option value="CZECH REPUBLIC">
    CZECH REPUBLIC</option>
<option value="DENMARK">DENMARK
</option>
<option value="DJIBOUTI">
    DJIBOUTI</option>
<option value="DOMINICA">
    DOMINICA</option>
<option value="DOMINICAN REPUBLIC">
    DOMINICAN REPUBLIC</option>
<option value="ECUADOR">ECUADOR
</option>
<option value="EGYPT">EGYPT
</option>
<option value="EL SALVADOR">EL
    SALVADOR</option>
<option value="EQUATORIAL GUINEA">
    EQUATORIAL GUINEA</option>
<option value="ERITREA">ERITREA
</option>
<option value="ESTONIA">ESTONIA
</option>
<option value="ETHIOPIA">
    ETHIOPIA</option>
<option value="FALKLAND ISLANDS (MALVINAS)">
    FALKLAND ISLANDS (MALVINAS)
</option>
<option value="FAROE ISLANDS">
    FAROE ISLANDS</option>
<option value="FIJI">FIJI
</option>
<option value="FINLAND">FINLAND
</option>
<option value="FRANCE">FRANCE
</option>
<option value="FRENCH GUIANA">
    FRENCH GUIANA</option>
<option value="FRENCH POLYNESIA">
    FRENCH POLYNESIA</option>
<option value="FRENCH SOUTHERN TERRITORIES">
    FRENCH SOUTHERN TERRITORIES
</option>
<option value="GABON">GABON
</option>
<option value="GAMBIA">GAMBIA
</option>
<option value="GEORGIA">GEORGIA
</option>
<option value="GERMANY">GERMANY
</option>
<option value="GHANA">GHANA
</option>
<option value="GIBRALTAR">
    GIBRALTAR</option>
<option value="GREECE">GREECE
</option>
<option value="GREENLAND">
    GREENLAND</option>
<option value="GRENADA">GRENADA
</option>
<option value="GUADELOUPE">
    GUADELOUPE</option>
<option value="GUAM">GUAM
</option>
<option value="GUATEMALA">
    GUATEMALA</option>
<option value="GUINEA">GUINEA
</option>
<option value="GUINEA-BISSAU">
    GUINEA-BISSAU</option>
<option value="GUYANA">GUYANA
</option>
<option value="HAITI">HAITI
</option>
<option value="HEARD ISLAND AND MCDONALD ISLANDS">
    HEARD ISLAND AND MCDONALD
    ISLANDS</option>
<option value="HOLY SEE (VATICAN CITY STATE)">
    HOLY SEE (VATICAN CITY STATE)
</option>
<option value="HONDURAS">
    HONDURAS</option>
<option value="HONG KONG">HONG
    KONG</option>
<option value="HUNGARY">HUNGARY
</option>
<option value="ICELAND">ICELAND
</option>
<option value="INDIA">INDIA
</option>
<option value="INDONESIA">
    INDONESIA</option>
<option value="IRAN, ISLAMIC REPUBLIC OF">
    IRAN, ISLAMIC REPUBLIC OF
</option>
<option value="IRAQ">IRAQ
</option>
<option value="IRELAND">IRELAND
</option>
<option value="ISRAEL">ISRAEL
</option>
<option value="ITALY">ITALY
</option>
<option value="JAMAICA">JAMAICA
</option>
<option value="JAPAN">JAPAN
</option>
<option value="JORDAN">JORDAN
</option>
<option value="KAZAKHSTAN">
    KAZAKHSTAN</option>
<option value="KENYA">KENYA
</option>
<option value="KIRIBATI">
    KIRIBATI</option>
<option value="KOREA, DEMOCRATIC PEOPLE'S REPUBLIC OF">
    KOREA, DEMOCRATIC PEOPLE'S
    REPUBLIC OF</option>
<option value="KOREA, REPUBLIC OF">
    KOREA, REPUBLIC OF</option>
<option value="KUWAIT">KUWAIT
</option>
<option value="KYRGYZSTAN">
    KYRGYZSTAN</option>
<option value="LAO PEOPLE'S DEMOCRATIC REPUBLIC">
    LAO PEOPLE'S DEMOCRATIC
    REPUBLIC</option>
<option value="LATVIA">LATVIA
</option>
<option value="LEBANON">LEBANON
</option>
<option value="LESOTHO">LESOTHO
</option>
<option value="LIBERIA">LIBERIA
</option>
<option value="LIBYAN ARAB JAMAHIRIYA">
    LIBYAN ARAB JAMAHIRIYA
</option>
<option value="LIECHTENSTEIN">
    LIECHTENSTEIN</option>
<option value="LITHUANIA">
    LITHUANIA</option>
<option value="LUXEMBOURG">
    LUXEMBOURG</option>
<option value="MACAO">MACAO
</option>
<option value="MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF">
    MACEDONIA, THE FORMER
    YUGOSLAV REPUBLIC OF</option>
<option value="MADAGASCAR">
    MADAGASCAR</option>
<option value="MALAWI">MALAWI
</option>
<option value="MALAYSIA">
    MALAYSIA</option>
<option value="MALDIVES">
    MALDIVES</option>
<option value="MALI">MALI
</option>
<option value="MALTA">MALTA
</option>
<option value="MARSHALL ISLANDS">
    MARSHALL ISLANDS</option>
<option value="MARTINIQUE">
    MARTINIQUE</option>
<option value="MAURITANIA">
    MAURITANIA</option>
<option value="MAURITIUS">
    MAURITIUS</option>
<option value="MAYOTTE">MAYOTTE
</option>
<option value="MEXICO">MEXICO
</option>
<option value="MICRONESIA, FEDERATED STATES OF">
    MICRONESIA, FEDERATED STATES
    OF</option>
<option value="MOLDOVA, REPUBLIC OF">
    MOLDOVA, REPUBLIC OF</option>
<option value="MONACO">MONACO
</option>
<option value="MONGOLIA">
    MONGOLIA</option>
<option value="MONTSERRAT">
    MONTSERRAT</option>
<option value="MOROCCO">MOROCCO
</option>
<option value="MOZAMBIQUE">
    MOZAMBIQUE</option>
<option value="MYANMAR">MYANMAR
</option>
<option value="NAMIBIA">NAMIBIA
</option>
<option value="NAURU">NAURU
</option>
<option value="NEPAL">NEPAL
</option>
<option value="NETHERLANDS">
    NETHERLANDS</option>
<option value="NETHERLANDS ANTILLES">
    NETHERLANDS ANTILLES</option>
<option value="NEW CALEDONIA">
    NEW CALEDONIA</option>
<option value="NEW ZEALAND">NEW
    ZEALAND</option>
<option value="NICARAGUA">
    NICARAGUA</option>
<option value="NIGER">NIGER
</option>
<option value="NIGERIA">NIGERIA
</option>
<option value="NIUE">NIUE
</option>
<option value="NORFOLK ISLAND">
    NORFOLK ISLAND</option>
<option value="NORTHERN MARIANA ISLANDS">
    NORTHERN MARIANA ISLANDS
</option>
<option value="NORWAY">NORWAY
</option>
<option value="OMAN">OMAN
</option>
<option value="PAKISTAN">
    PAKISTAN</option>
<option value="PALAU">PALAU
</option>
<option value="PALESTINIAN TERRITORY, OCCUPIED">
    PALESTINIAN TERRITORY,
    OCCUPIED</option>
<option value="PANAMA">PANAMA
</option>
<option value="PAPUA NEW GUINEA">
    PAPUA NEW GUINEA</option>
<option value="PARAGUAY">
    PARAGUAY</option>
<option value="PERU">PERU
</option>
<option value="PHILIPPINES">
    PHILIPPINES</option>
<option value="PITCAIRN">
    PITCAIRN</option>
<option value="POLAND">POLAND
</option>
<option value="PORTUGAL">
    PORTUGAL</option>
<option value="PUERTO RICO">
    PUERTO RICO</option>
<option value="QATAR">QATAR
</option>
<option value="REUNION">REUNION
</option>
<option value="ROMANIA">ROMANIA
</option>
<option value="RUSSIAN FEDERATION">
    RUSSIAN FEDERATION</option>
<option value="RWANDA">RWANDA
</option>
<option value="SAINT HELENA">
    SAINT HELENA</option>
<option value="SAINT KITTS AND NEVIS">
    SAINT KITTS AND NEVIS
</option>
<option value="SAINT LUCIA">
    SAINT LUCIA</option>
<option value="SAINT PIERRE AND MIQUELON">
    SAINT PIERRE AND MIQUELON
</option>
<option value="SAINT VINCENT AND THE GRENADINES">
    SAINT VINCENT AND THE
    GRENADINES</option>
<option value="SAMOA">SAMOA
</option>
<option value="SAN MARINO">SAN
    MARINO</option>
<option value="SAO TOME AND PRINCIPE">
    SAO TOME AND PRINCIPE
</option>
<option value="SAUDI ARABIA">
    SAUDI ARABIA</option>
<option value="SENEGAL">SENEGAL
</option>
<option value="SERBIA AND MONTENEGRO">
    SERBIA AND MONTENEGRO
</option>
<option value="SEYCHELLES">
    SEYCHELLES</option>
<option value="SIERRA LEONE">
    SIERRA LEONE</option>
<option value="SINGAPORE">
    SINGAPORE</option>
<option value="SLOVAKIA">
    SLOVAKIA</option>
<option value="SLOVENIA">
    SLOVENIA</option>
<option value="SOLOMON ISLANDS">
    SOLOMON ISLANDS</option>
<option value="SOMALIA">SOMALIA
</option>
<option value="SOUTH AFRICA">
    SOUTH AFRICA</option>
<option value="SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS">
    SOUTH GEORGIA AND THE SOUTH
    SANDWICH ISLANDS</option>
<option value="SPAIN">SPAIN
</option>
<option value="SRI LANKA">SRI
    LANKA</option>
<option value="SUDAN">SUDAN
</option>
<option value="SURINAME">
    SURINAME</option>
<option value="SVALBARD AND JAN MAYEN">
    SVALBARD AND JAN MAYEN
</option>
<option value="SWAZILAND">
    SWAZILAND</option>
<option value="SWEDEN">SWEDEN
</option>
<option value="SWITZERLAND">
    SWITZERLAND</option>
<option value="SYRIAN ARAB REPUBLIC">
    SYRIAN ARAB REPUBLIC</option>
<option value="TAIWAN, PROVINCE OF CHINA">
    TAIWAN, PROVINCE OF CHINA
</option>
<option value="TAJIKISTAN">
    TAJIKISTAN</option>
<option value="TANZANIA, UNITED REPUBLIC OF">
    TANZANIA, UNITED REPUBLIC OF
</option>
<option value="THAILAND">
    THAILAND</option>
<option value="TIMOR-LESTE">
    TIMOR-LESTE</option>
<option value="TOGO">TOGO
</option>
<option value="TOKELAU">TOKELAU
</option>
<option value="TONGA">TONGA
</option>
<option value="TRINIDAD AND TOBAGO">
    TRINIDAD AND TOBAGO</option>
<option value="TUNISIA">TUNISIA
</option>
<option value="TURKEY">TURKEY
</option>
<option value="TURKMENISTAN">
    TURKMENISTAN</option>
<option value="TURKS AND CAICOS ISLANDS">
    TURKS AND CAICOS ISLANDS
</option>
<option value="TUVALU">TUVALU
</option>
<option value="UGANDA">UGANDA
</option>
<option value="UKRAINE">UKRAINE
</option>
<option value="UNITED ARAB EMIRATES">
    UNITED ARAB EMIRATES</option>
<option value="UNITED KINGDOM">
    UNITED KINGDOM</option>
<option value="UNITED STATES">
    UNITED STATES</option>
<option value="UNITED STATES MINOR OUTLYING ISLANDS">
    UNITED STATES MINOR OUTLYING
    ISLANDS</option>
<option value="URUGUAY">URUGUAY
</option>
<option value="UZBEKISTAN">
    UZBEKISTAN</option>
<option value="VANUATU">VANUATU
</option>
<option value="VENEZUELA">
    VENEZUELA</option>
<option value="VIET NAM">VIET
    NAM</option>
<option value="VIRGIN ISLANDS, BRITISH">
    VIRGIN ISLANDS, BRITISH
</option>
<option value="VIRGIN ISLANDS, U.S.">
    VIRGIN ISLANDS, U.S.</option>
<option value="WALLIS AND FUTUNA">
    WALLIS AND FUTUNA</option>
<option value="WESTERN SAHARA">
    WESTERN SAHARA</option>
<option value="YEMEN">YEMEN
</option>
<option value="ZAMBIA">ZAMBIA
</option>
<option value="ZIMBABWE">
    ZIMBABWE</option>
</select>
               

                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="g-right">
                                            <label><img
                                                    src="{{ asset('') }}assets/theme/images/netmi/setting-phone.svg"
                                                    alt=""><span>Phone</span></label>
                                            <input type="text" name="phone" class="inp inp-0 inp-phone-number"
                                                value="{{($profile_data)?$profile_data->phone:''}}" readonly>
                                        </div>
                                    </div>
                                    <div class="g">
                                        <div class="g-left">
                                            <label><img
                                                    src="{{ asset('') }}assets/theme/images/netmi/ref-country.svg"
                                                    alt=""><span>City</span></label>
                                            <input type="text" name="townCity" value="{{($profile_data)?$profile_data->townCity:''}}"
                                                class="inp inp-0 inp-phone-number" autocomplete="off"></div>
                                      
                                    </div>
                                    <div class="b b--1">
                                        <button type="submit" class="btn btn-b" 
                                            style="outline: none; color:#fff">Save</button>

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="account-tab tab-wallets ">
                        <div class="account-form">
                            <form action="{{route('user.update-wallet')}}" method="post" autocomplete="off">
                                <input type="hidden" name="_type" value="wallets">
                                <div class="caption">Wallets</div>
                                <div class="caption-sub">To withdraw funds, please, indicate your wallet addresses.
                                </div>
                                <div class="settings-box-form">
                                    <div class="g" style="margin-top: 0px;">
                                        <div class="g-left">
                                            <!-- todo: generating list -->

















                                            <label style="margin-top: 20px;"><img
                                                    src="{{ asset('') }}assets/theme/images/wallets/BUSD-icon.svg">
                                                <span>BNB (BEP20)</span></label>
                                            <input type="text" class="inp inp-0" name="usdBep20"   value="{{$profile_data?$profile_data->usdBep20:''}}">

                                            <label style="margin-top: 20px;"><img
                                                    src="{{ asset('') }}assets/theme/images/wallets/TronUSDT-icon.svg">
                                                <span>USDT (TRC20)</span></label>
                                            <input type="text" class="inp inp-0" name="trx_addres"   value="{{$profile_data?$profile_data->trx_addres:''}}" >


                                        </div>
                                    </div>
                                    <div class="b b--1">
                                        <button type="submit" class="btn btn-b" hidefocus="true"
                                            style="outline: none; color:#fff" name="save_wallets">Save</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- End tabs content item -->
                    <div class="account-tab tab-password ">
                        <div class="account-form">
                            <!-- Tabs content item -->
                            <form action="{{ route('user.edit-password') }}" method="POST">
                            {{ csrf_field() }}
                             
                                <div class="caption">Password</div>
                                <div class="caption-sub">Please, enter your password if you want to change it.</div>
                                <div class="settings-box-form">
                                    <div class="g">
                                        <div class="g-left">
                                            <label><img
                                                    src="{{ asset('') }}assets/theme/images/netmi/password-current.svg"
                                                    alt=""><span>Old password</span></label>
                                            <input  class="inp inp-0"  placeholder="Old password" type="password" name="old_password">
                                        </div>
                                        <div class="g-right">
                                            <label><img
                                                    src="{{ asset('') }}assets/theme/images/netmi/password-current.svg"
                                                    alt=""><span>New password</span></label>
                                            <input  class="inp inp-0"  placeholder="New password" type="password" name="password">
                                        </div>
                                    </div>

                                    <div class="g g-fill">
                                        <label><img
                                                src="{{ asset('') }}assets/theme/images/netmi/password-active.svg"
                                                alt=""><span>Retype New password</span></label>
                                        <input  class="inp inp-0"  placeholder="Retype New password" type="password" name="password_confirmation">
                                    </div>
                                    <div class="b b--1" style="margin-bottom:15px">
                                        <button type="submit" class="btn btn-b" 
                                            style="outline: none; color:#fff">Save</button>
                                    </div>
                            </form>

                            <form action="" method="post" autocomplete="off">
                                <input type="hidden" name="_type" value="passwords">
                                <input type="hidden" name="_csrf" value="da34d580ab242255b283db3e45685e97">
                                <div class="account-form-box">
                                    <div class="caption">Account security</div>
                                    <div class="caption-sub">Turn on the defence for maximum security.</div>

                                    <div class="g">
                                        <div class="g-left">
                                            <label>Secure login (E-mail)</label>
                                            <input type="hidden" id="h_sec_auth_email" value="0">
                                            <div class="xsel xsel--0">
                                                <div class="SumoSelect sumo_network_id" tabindex="0" role="button"
                                                    aria-expanded="false">
                                                    <select name="sec_auth_email" class="js-select SumoUnder">
                                                        <option value="1">Yes</option>
                                                        <option value="0" selected>No </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="g-right" style="display: none">
                                            <label>IP authorization security - TODO</label>
                                            <div class="xsel xsel--0">
                                                <div class="SumoSelect sumo_network_id" tabindex="0" role="button"
                                                    aria-expanded="false">
                                                    <select name="sec_ip" class="js-select SumoUnder">
                                                        <option value="1">Yes</option>
                                                        <option value="0" selected>No </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="g" style="display: none">
                                        <div class="g-left">
                                            <label>Payment Protection (E-mail) - TODO</label>
                                            <div class="xsel xsel--0">
                                                <div class="SumoSelect sumo_network_id" tabindex="0" role="button"
                                                    aria-expanded="false">
                                                    <select name="sec_payout_email" class="js-select SumoUnder">
                                                        <option value="1">Yes</option>
                                                        <option value="0" selected>No </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="g-right">
                                            <label>Payment Protection (SMS) - TODO</label>
                                            <div class="xsel xsel--0">
                                                <div class="SumoSelect sumo_network_id" tabindex="0" role="button"
                                                    aria-expanded="false">
                                                    <select name="sec_payout_sms" class="js-select SumoUnder">
                                                        <option value="1">Yes</option>
                                                        <option value="0" selected>No </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="g" style="display: none">
                                        <div class="g-left">
                                            <label>Financial password - TODO</label>
                                            <div class="xsel xsel--0">
                                                <div class="SumoSelect sumo_network_id" tabindex="0" role="button"
                                                    aria-expanded="false">
                                                    <select name="sec_financy_pass" class="js-select SumoUnder">
                                                        <option value="1">Yes</option>
                                                        <option value="0" selected>No </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="account-form-box" style="display: none">
                                    <div class="caption">Two-Factor Security Option</div>
                                    <div class="caption-sub">Two-factor authentication is a method for protection your
                                        web account. When it is activated you need to enter not only your password, but
                                        also a special code. You can receive this code by in mobile app. Even if third
                                        person will find your password, then can't access with that code.</div>
                                    <div class="g">
                                        <div class="g-left">
                                            Current Status: <span
                                                style="color: #ffa9a9;background: rgb(255 57 57 / 18%); font-weight: bold; padding: 5px 10px; border-radius: 8px; margin-left: 10px">Disabled</span>
                                        </div>
                                    </div>
                                    <div style="margin-top: 20px;font-weight: 500;margin-bottom: 20px; "><b
                                            style="color: #fff;">1.</b> Install an authentication app on your device.
                                        Any app that supports the Time-based One-Time Password (TOTP) protocol should
                                        work, including:</div>
                                    <ul>
                                        <li>- Google Authenticator (Android/iOS)</li>
                                        <li>- Authy (Android/iOS)</li>
                                        <li>- Microsoft Authenticator (Windows Phone)</li>
                                    </ul>
                                    <div style="margin-top: 20px;font-weight: 500;margin-bottom: 20px; "><b
                                            style="color: #fff;">2.</b> Use the authenticator app to scan the barcode
                                        below.</div>
                                    <div
                                        style="background: #fff; border-radius: 15px; padding: 10px; width: fit-content;">
                                        <img src="{{ asset('') }}assets/theme/images/qrcode.png"
                                            style="width:130px" alt=""></div>
                                    <div style="margin-top: 20px;font-weight: 500;margin-bottom: 20px; "><b
                                            style="color: #fff;">3.</b> Enter the code generated by the authenticator
                                        app.</div>
                                    <div class="g">
                                        <div class="g-left">
                                            <input type="text" class="inp inp-0" name="" hidefocus="true"
                                                style="outline: none;">
                                        </div>
                                        <button type="submit" class="btn btn-b" hidefocus="true"
                                            style="outline: none; color:#fff" name="change_password">Enable</button>
                                    </div>
                                </div>
                        </div>
                        </form>

                        <!-- End tabs content item -->
                    </div>
                </div>





                <!-- Tabs content item -->
                <div class="account-tab tab-privacy ">
                    <div class="account-form">
                        <form action="" method="post">
                            <input type="hidden" name="_type" value="privacy">
                            <input type="hidden" name="_csrf" value="da34d580ab242255b283db3e45685e97">
                            <div class="caption">Publicity</div>
                            <div class="settings-box-form">
                                <div class="g">
                                    <div class="g-left">
                                        <label>Show e-mail to your upline </label>
                                        <div class="xsel xsel--0">
                                            <div class="SumoSelect sumo_network_id" tabindex="0" role="button"
                                                aria-expanded="false">
                                                <select name="allow_ref_view_email" class="js-select SumoUnder">
                                                    <option value="1">Yes</option>
                                                    <option value="0">No </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="g-right">
                                        <label>Show phone to your upline </label>
                                        <div class="xsel xsel--0">
                                            <div class="SumoSelect sumo_network_id" tabindex="0" role="button"
                                                aria-expanded="false">
                                                <select name="allow_ref_view_phone1" class="js-select SumoUnder">
                                                    <option value="1">Yes</option>
                                                    <option value="0">No </option>
                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="g">
                                    <div class="g-left">
                                        <label>Enable stakes updates e-mail alerts </label>
                                        <div>
                                            <div class="xsel xsel--0">
                                                <div class="SumoSelect sumo_network_id" tabindex="0" role="button"
                                                    aria-expanded="false">
                                                    <select name="alert_email_earn_deposit" class="js-select SumoUnder">
                                                        <option value="1">Yes</option>
                                                        <option value="0">No </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="g-right">
                                        <label>Show Whatsapp to your upline</label>
                                        <div class="xsel xsel--0">
                                            <div class="SumoSelect sumo_network_id" tabindex="0" role="button"
                                                aria-expanded="false">
                                                <select name="allow_ref_view_skype" class="js-select SumoUnder">
                                                    <option value="1">Yes</option>
                                                    <option value="0">No </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="g">
                                    <div class="g-left">
                                        <label>Show Telegram to your upline </label>
                                        <div class="xsel xsel--0">
                                            <div class="SumoSelect sumo_network_id" tabindex="0" role="button"
                                                aria-expanded="false">
                                                <select name="allow_ref_view_phone2" class="js-select SumoUnder">
                                                    <option value="1">Yes</option>
                                                    <option value="0">No </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="b b--1" style="margin-bottom:15px">
                                    <button type="submit" class="btn btn-b" hidefocus="true"
                                        style="outline: none; color:#fff" name="save_privacy">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- End tabs content item -->
            </div>
        </div>


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
<script src="{{ asset('') }}assets/js/jquery.min.js?v=3.22.1726217824"></script>
<!-- https://cdn.jsdelivr.net/jquery.migrate/1.2.1/jquery-migrate.min.js -->
<script src="{{ asset('') }}assets/js/jquery-migrate.min.js?v=3.22.1726217824"></script>
<!-- https://cdn.jsdelivr.net/modernizr/2.8.3/modernizr.min.js -->
<script type="text/javascript" src="{{ asset('') }}assets/template/js/menu.js?v=3.22.1726217824">
</script>

<!--https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js-->
<script src="{{ asset('') }}assets/js/bootstrap.min.js?v=3.22.1726217824"></script>
<!-- RANGE -->
<script src="{{ asset('') }}assets/js/jquery.slider.min.js?v=3.22.1726217824"></script>
<!-- CAROUFREDSEL JS -->
<!--https://cdn.jsdelivr.net/caroufredsel/6.2.1/jquery.carouFredSel.packed.js-->
<script src="{{ asset('') }}assets/js/jquery.carouFredSel.packed.js?v=3.22.1726217824"></script>
<!--https://cdn.jsdelivr.net/caroufredsel/6.2.1/helper-plugins/jquery.mousewheel.min.js-->
<script src="{{ asset('') }}assets/js/jquery.mousewheel.min.js?v=3.22.1726217824"></script>
<!--https://cdn.jsdelivr.net/caroufredsel/6.2.1/helper-plugins/jquery.touchSwipe.min.js-->
<script src="{{ asset('') }}assets/js/jquery.touchSwipe.min.js?v=3.22.1726217824"></script>
<!-- FLIP CLOCK JS -->
<script src="{{ asset('') }}assets/js/flipclock.min.js?v=3.22.1726217824"></script>
<!-- CUSEL JS -->
<script src="{{ asset('') }}assets/js/cusel.min.js?v=3.22.1726217824'"></script>
<!-- OTHER JS -->
<script src="{{ asset('') }}assets/js/jquery.countTo.js?v=3.22.1726217824"></script>
<script src="{{ asset('') }}assets/js/jquery.customInput.js?v=3.22.1726217824"></script>
<script src="{{ asset('') }}assets/js/onScreen.js?v=3.22.1726217824"></script>
<script src="{{ asset('') }}assets/js/jquery.nicescroll.min.js?v=3.22.1726217824"></script>
<script type="text/javascript"
    src="{{ asset('') }}assets/template/js/jquery-confirm.min.js?v=3.22.1726217824"></script>
<script type="text/javascript">
    jconfirm.defaults = {
        theme: 'modern'
    };

</script>
<!-- General JS -->
<script src="{{ asset('') }}assets/js/general.js?v=3.22.1726217824" type="text/javascript"></script>
<script src="{{ asset('') }}assets/js/account.js?v=3.22.1726217824" type="text/javascript"></script>

<script type="text/javascript" src="{{ asset('') }}assets/theme/js/core.js?v=3.22.1726217824">
</script>
<script type="text/javascript" src="{{ asset('') }}assets/theme/js/inner.js?v=3.22.1726217824">
</script>


<script src="{{ asset('') }}assets/js/bootstrap-toggle.min.js?v=3.22.1726217824"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('[data-toggle="toggle-button"]').bootstrapToggle();
    });

</script>





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


<script type="text/javascript">
    var global_params = [];
    $(document).ready(function ($) {
        $('form').on('submit', function () {
            var form = $(this);
            var btn = $(this).find('button[type=submit]');
            if (btn.attr('name') === 'save_personal_data') {
                var params = {};
                form.find('input, select').each(function () {
                    let key = $(this).attr('name');
                    params[key] = $(this).val();
                });

                params.go = 'profile_data';
                $.post('/ajax', params)
                    .done(function (data) {
                        if (data.status) {
                            $.alert({
                                icon: '',
                                title: '<img src="{{ asset('') }}assets/theme/images/animated/success.svg?' +
                                    Math.floor(Math.random() * 1000000) + '" alt="">',
                                type: 'green',
                                content: data.message
                            });
                            form.find('input[type=password]').val('');
                        } else {
                            $.alert({
                                icon: '',
                                title: '<img src="{{ asset('') }}assets/theme/images/animated/error.svg?' +
                                    Math.floor(Math.random() * 1000000) + '" alt="">',
                                type: 'red',
                                content: data.error
                            });
                        }

                    });

                return false;
            }

            return true;
        });
        $('form').on('submit', function () {
            var form = $(this);
            var btn = $(this).find('button[type=submit]');
            if (btn.attr('name') === 'save_wallets') {
                var params = {};
                form.find('input, select').each(function () {
                    let key = $(this).attr('name');
                    params[key] = $(this).val();
                });

                params.go = 'profile_wallets';
                $.post('/ajax', params)
                    .done(function (data) {
                        if (data.status) {
                            $.alert({
                                icon: '',
                                title: '<img src="{{ asset('') }}assets/theme/images/animated/success.svg?' +
                                    Math.floor(Math.random() * 1000000) + '" alt="">',
                                type: 'green',
                                content: data.message
                            });

                            form.find('input[type=text]:not(:read-only)').each(function () {
                                let key = $(this).attr('name');
                                let value = data.data[key] === undefined ? '' : data.data[
                                    key];
                                $(this).val(value);
                                if (value !== '') {
                                    $(this).prop('readonly', true).css('color', '#8c9aad');
                                }
                            });
                        } else {
                            $.alert({
                                icon: '',
                                title: '<img src="{{ asset('') }}assets/theme/images/animated/error.svg?' +
                                    Math.floor(Math.random() * 1000000) + '" alt="">',
                                type: 'red',
                                content: data.error
                            });
                        }

                    });

                return false;
            }

            return true;
        });
        $('form').on('submit', function () {
            var form = $(this);
            var btn = $(this).find('button[type=submit]');
            if (btn.attr('name') === 'save_privacy') {
                var params = {};
                form.find('input, select').each(function () {
                    let key = $(this).attr('name');
                    params[key] = $(this).val();
                });

                params.go = 'profile';
                $.post('/ajax', params)
                    .done(function (data) {
                        if (data.status) {
                            $.alert({
                                icon: '',
                                title: '<img src="{{ asset('') }}assets/theme/images/animated/success.svg?' +
                                    Math.floor(Math.random() * 1000000) + '" alt="">',
                                type: 'green',
                                content: data.message
                            });
                            form.find('input[type=password]').val('');
                        } else {
                            $.alert({
                                icon: '',
                                title: '<img src="{{ asset('') }}assets/theme/images/animated/error.svg?' +
                                    Math.floor(Math.random() * 1000000) + '" alt="">',
                                type: 'red',
                                content: data.error
                            });
                        }

                    });

                return false;
            }

            return true;
        });
        $('form').on('submit', function () {
            var form = $(this);
            var btn = $(this).find('button[type=submit]');
            if (btn.attr('name') === 'change_password') {
                var params = {};
                form.find('input').each(function () {
                    let key = $(this).attr('name');
                    params[key] = $(this).val();
                });

                params.go = 'changePass';
                $.post('/ajax', params)
                    .done(function (data) {
                        if (data.status) {
                            $.alert({
                                icon: '',
                                title: '<img src="{{ asset('') }}assets/theme/images/animated/success.svg?' +
                                    Math.floor(Math.random() * 1000000) + '" alt="">',
                                type: 'green',
                                content: data.message
                            });
                            form.find('input[type=password]').val('');
                        } else {
                            $.alert({
                                icon: '',
                                title: '<img src="{{ asset('') }}assets/theme/images/animated/error.svg?' +
                                    Math.floor(Math.random() * 1000000) + '" alt="">',
                                type: 'red',
                                content: data.error
                            });
                        }

                    });

                return false;
            }

            return true;
        });
        $('select[name=sec_auth_email]').on('change', function () {

            let statusSecure = parseInt($(this).val());
            let initStatusSecure = parseInt($('#h_sec_auth_email').val());

            if (statusSecure !== initStatusSecure) {
                if (statusSecure > 0) {

                    let params = {
                        go: 'save_security',
                        type: 'security_conf_auth_email',
                        value: 'true',
                        _csrf: fp_sett_js.csrf
                    };

                    $.post('/ajax', params)
                        .done(function (data) {
                            if (data.status) {
                                $.alert({
                                    icon: '',
                                    title: '<img src="{{ asset('') }}assets/theme/images/animated/success.svg?' +
                                        Math.floor(Math.random() * 1000000) + '" alt="">',
                                    type: 'green',
                                    content: 'Secure login by e-mail confirmation code has been successfully enabled'
                                });
                                $('#h_sec_auth_email').val(1);
                            } else {
                                $.alert({
                                    icon: '',
                                    title: '<img src="{{ asset('') }}assets/theme/images/animated/error.svg?' +
                                        Math.floor(Math.random() * 1000000) + '" alt="">',
                                    type: 'red',
                                    content: data.error
                                });
                            }

                        });

                } else {

                    $.post('/ajax', {
                            go: 'security_auth_email_send',
                            type: 'security_conf_auth_email',
                            _csrf: fp_sett_js.csrf
                        })
                        .done(function (data) {
                            if (data.status) {
                                $.alert({
                                    icon: '',
                                    title: '<img src="{{ asset('') }}assets/theme/images/animated/success.svg?' +
                                        Math.floor(Math.random() * 1000000) + '" alt="">',
                                    type: 'green',
                                    content: 'The code to confirm your e-mail address has been sent to your mailbox'
                                });
                            }

                        });


                    var popupConfirm = $.confirm({
                        title: 'Secure login (E-mail)',
                        type: 'blue',
                        content: '<form action="" class="formName">' +
                            '<div class="form-group">' +
                            'To disable this function, please, enter authorization code that was sent to your e-mail.' +
                            '<input type="text" placeholder="" style="margin-top:25px" class="name inp inp-0" required />' +
                            '</div>' +
                            '</form>',
                        buttons: {
                            formSubmit: {
                                text: 'Confirm',
                                btnClass: 'btn-blue',
                                action: function () {
                                    var code = this.$content.find('.name').val();
                                    if (!code) {
                                        $.alert('Authorization code is not entered');
                                        return false;
                                    }

                                    var btn = $(this)[0]['$$formSubmit'];

                                    var textInit = btn.text().trim();
                                    btn.text('Checking ..');

                                    let params = {
                                        go: 'save_security',
                                        type: 'security_conf_auth_email',
                                        value: 'false',
                                        code: code,
                                        _csrf: fp_sett_js.csrf
                                    };

                                    $.post('/ajax', params)
                                        .done(function (data) {
                                            if (data.status) {
                                                $.alert({
                                                    icon: '',
                                                    title: '<img src="{{ asset('') }}assets/theme/images/animated/success.svg?' +
                                                        Math.floor(Math
                                                        .random() * 1000000) +
                                                        '" alt="">',
                                                    type: 'green',
                                                    content: 'Secure login: access with e-mail confirmation code Disabled.'
                                                });
                                                $('#h_sec_auth_email').val(0);

                                                //
                                                popupConfirm.close();
                                            } else {
                                                $.alert({
                                                    icon: '',
                                                    title: '<img src="{{ asset('') }}assets/theme/images/animated/error.svg?' +
                                                        Math.floor(Math
                                                        .random() * 1000000) +
                                                        '" alt="">',
                                                    type: 'red',
                                                    content: data.error
                                                });
                                            }
                                        })
                                        .always(function () {
                                            btn.text(textInit);
                                        });

                                    return false;
                                }
                            },
                            cancel: {
                                text: 'Cancel',
                                action: function () {
                                    //close
                                    $('select[name=sec_auth_email]').val(1)
                                        .next('.CaptionCont').attr('title', 'Yes').children(
                                            'span').text('Yes');
                                }
                            },
                        },
                        onContentReady: function () {
                            // bind to events
                            var jc = this;
                            this.$content.find('form').on('submit', function (e) {
                                // if the user submits the form by pressing enter in the field.
                                e.preventDefault();
                                jc.$$formSubmit.trigger(
                                'click'); // reference the button and click it
                            });
                        }
                    });
                }
            }
        });
    });

</script>
<script type="text/javascript" src="https://netmi.org/api-web/js-last-news"></script>

</body>

</html>

<!-- Generated in 0.013 s. -->
<!-- Version 3.22.1726217824 -->

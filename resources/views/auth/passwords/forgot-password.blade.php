<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="description" content="{{siteName()}} Cryptocurrency Platform">
    <meta name="viewport" content="minimum-scale=1,initial-scale=1,width=device-width,shrink-to-fit=no"><!-- Favicon-->
  <link rel="shortcut icon" href="{{asset('')}}main/favicons/fav.ico">
    <link rel="manifest" href="{{asset('')}}main/favicons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{asset('')}}main/favicons/ms-icon-144x144.png">
    <!-- PWA primary color-->
    <meta name="theme-color" content="#4CAF50">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"><!-- Facebook-->
    <meta property="author" content="luxi">
    <meta property="og:site_name" content="{{siteName()}}">
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website"><!-- Twitter-->
    <meta property="twitter:site" content="{{asset('')}}">
    <meta property="twitter:domain" content="{{asset('')}}">
    <meta property="twitter:creator" content="luxi">
    <meta property="twitter:card" content="summary">
    <meta property="twitter:image:src" content="{{asset('')}}main/images/logo.png">
    <meta property="og:url" content="{{asset('')}}">
    <meta property="og:title" content="coinz">
    <meta property="og:description" content="{{siteName()}} Cryptocurrency Platform">
    <meta name="twitter:site" content="{{asset('')}}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:image" content="/images/crypto-logo.png">
    <meta property="og:image" content="/images/crypto-logo.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <title>{{siteName()}} - Login</title><!-- Styles-->
    <link href="../{{asset('')}}main/css/side-right.css" rel="stylesheet">
    <link href="{{asset('')}}main/css/crypto-bundle.min.css" rel="stylesheet">
</head>

<body>
    <div id="preloader" style="position: fixed; z-index: 10000; background: #fafafa; width: 100%; height: 100%"><img
            style="opacity: 0.5; position: fixed; top: calc(50% - 50px); left: calc(50% - 50px)"
            src="{{asset('')}}main/images/loading.gif" alt="loading"></div>
    <div class="invisible-deco"><svg width="38px" height="43px" viewbox="0 0 38 43" version="1.1">
            <defs>
                <lineargradient id="titleLinearGradient-1" x1="34.5063846%" y1="15.1303808%" x2="20.8153155%"
                    y2="110.664023%">
                    <stop stop-color="#4CAF50" offset="0%"></stop>
                    <stop stop-color="#FFA000" offset="100%"></stop>
                </lineargradient>
            </defs>
            <defs>
                <lineargradient id="hexaLinearGradient-3" x1="66.8412844%" y1="30.62426%" x2="-21.0581447%" y2="100%">
                    <stop stop-color="#FFA000" offset="0%"></stop>
                    <stop stop-color="#FFECB3" offset="100%"></stop>
                </lineargradient>
            </defs>
            <defs>
                <lineargradient id="hexaLinearGradient-2" x1="66.8412844%" y1="30.62426%" x2="-21.0581447%" y2="100%">
                    <stop stop-color="#4CAF50" offset="0%"></stop>
                    <stop stop-color="#C8E6C9" offset="100%"></stop>
                </lineargradient>
            </defs>
            <defs>
                <lineargradient id="frmDecoLinearGradient-1" x1="33.650521%" y1="14.3140713%" x2="18.9688557%"
                    y2="110.664023%">
                    <stop stop-color="#4CAF50" offset="0%"></stop>
                    <stop stop-color="#FFA000" offset="100%"></stop>
                </lineargradient>
            </defs>
            <defs>
                <lineargradient id="frmDecoLinearGradientDark-1" x1="33.650521%" y1="14.3140713%" x2="18.9688557%"
                    y2="110.664023%">
                    <stop stop-color="#2E7D32" offset="0%"></stop>
                    <stop stop-color="#FF6F00" offset="100%"></stop>
                </lineargradient>
                <path id="path-2"
                    d="M40.0268505,351.888258 C299.475775,-137.933311 505.867463,-306.185765 659.201915,-152.869104 C788.709519,-23.376527 935.329477,275.20658 1099.06179,742.880218 C1145.23269,874.759604 1075.75224,1019.09788 943.872862,1065.26879 C895.054476,1082.36009 842.170492,1084.07787 792.345858,1070.19072 L372.341154,953.126774 C318.012942,937.984384 270.301991,905.123239 236.786543,859.762889 L60.1185534,620.657575 C2.28750686,542.3881 -5.52448856,437.886026 40.0268505,351.888258 Z">
                </path>
            </defs>
        </svg></div>
    <div class="m-application theme--light transition-page" id="app">
        <div class="loading"></div>
        <div class="m-content money money-var" id="main-wrap">
            <div>
              
               
            </div>
            <div class="form-page">
                <div class="page-wrap">
                    <div class="deco"><svg class="light" width="1274px" height="1018px" viewbox="0 0 1274 1018"
                            version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <mask fill="white">
                                    <use xlink:href="#path-2"></use>
                                </mask>
                                <use fill="url(#frmDecoLinearGradient-1)"
                                    transform="translate(607.224351, 494.641126) rotate(-45.000000) translate(-607.224351, -494.641126) "
                                    xlink:href="#path-2"></use>
                            </g>
                        </svg> <svg class="dark" width="1274px" height="1018px" viewbox="0 0 1274 1018" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <mask fill="white">
                                    <use xlink:href="#path-2"></use>
                                </mask>
                                <use fill="url(#frmDecoLinearGradientDark-1)"
                                    transform="translate(607.224351, 494.641126) rotate(-45.000000) translate(-607.224351, -494.641126) "
                                    xlink:href="#path-2"></use>
                            </g>
                        </svg></div>
                    <div class="parallax parallax-left">
                        <div class="parallax-wrap dots-wrap">
                            <div class="inner-parallax large">
                                <div class="hexa-wrap">
                                    <div data-enllax-ratio="-0.3" data-enllax-type="foreground">
                                        <div class="parallax-figure right-top-back big">
                                            <div><svg class="hexa-back">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <g transform="translate(227.651059, 155.535288) rotate(-27.000000) translate(-227.651059, -155.535288) translate(56.651059, -60.964712)"
                                                            fill="#000000">
                                                            <path
                                                                d="M0.44343974,128.791576 C0.44343974,135.606019 4.09101735,141.903161 10.0124295,145.310383 L73.4952406,181.840468 C79.4166528,185.24769 86.711808,185.24769 92.6332201,181.840468 L156.116031,145.310383 C162.037443,141.903161 165.685021,135.606019 165.685021,128.791576 L165.685021,55.7310994 C165.685021,48.9163504 162.037443,42.6195139 156.116031,39.2119866 L92.6332201,2.6819012 C86.711808,-0.725320492 79.4166528,-0.725320492 73.4952406,2.6819012 L10.0124295,39.2119866 C4.09101735,42.6195139 0.44343974,48.9163504 0.44343974,55.7310994 L0.44343974,128.791576 Z">
                                                            </path>
                                                            <path
                                                                d="M95.127122,349.251509 C95.127122,359.454656 100.576382,368.883258 109.422613,373.984832 L204.262085,428.680693 C213.108316,433.782267 224.006836,433.782267 232.853067,428.680693 L327.692539,373.984832 C336.53877,368.883258 341.98803,359.454656 341.98803,349.251509 L341.98803,239.859328 C341.98803,229.655723 336.53877,220.227579 327.692539,215.125548 L232.853067,160.429686 C224.006836,155.328112 213.108316,155.328112 204.262085,160.429686 L109.422613,215.125548 C100.576382,220.227579 95.127122,229.655723 95.127122,239.859328 L95.127122,349.251509 Z">
                                                            </path>
                                                        </g>
                                                    </g>
                                                </svg></div>
                                        </div>
                                    </div>
                                    <div data-enllax-ratio="-0.2" data-enllax-type="foreground">
                                        <div class="parallax-figure right-top-front small">
                                            <div><svg width="585px" height="151px" viewbox="0 0 585 151" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <g transform="translate(-143.000000, -88.000000)">
                                                            <g transform="translate(132.623862, 70.912032)">
                                                                <path
                                                                    d="M520.561173,148.252603 C520.561173,151.131802 522.101234,153.792433 524.601342,155.232033 L551.404725,170.666509 C553.904833,172.106108 556.984955,172.106108 559.485063,170.666509 L586.288446,155.232033 C588.788553,153.792433 590.328615,151.131802 590.328615,148.252603 L590.328615,117.383522 C590.328615,114.504194 588.788553,111.843692 586.288446,110.403963 L559.485063,94.9694871 C556.984955,93.5298879 553.904833,93.5298879 551.404725,94.9694871 L524.601342,110.403963 C522.101234,111.843692 520.561173,114.504194 520.561173,117.383522 L520.561173,148.252603 Z"
                                                                    fill="url(#hexaLinearGradient-2)"
                                                                    transform="translate(555.444894, 132.817998) rotate(-330.000000) translate(-555.444894, -132.817998)">
                                                                </path>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="hexa-wrap">
                                    <div data-enllax-ratio="-0.15" data-enllax-type="foreground">
                                        <div class="parallax-figure left-bottom-back big">
                                            <div><svg class="hexa-back">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <g transform="translate(-82.000000, -68.000000)" fill="#000000">
                                                            <g
                                                                transform="translate(203.500000, 201.352321) rotate(-27.000000) translate(-203.500000, -201.352321) translate(51.000000, 54.000000)">
                                                                <path
                                                                    d="M0.251779512,246.826389 C0.251779512,252.66427 3.37663097,258.058983 8.44945884,260.977923 L62.8346909,292.272964 C67.9075188,295.191905 74.1572217,295.191905 79.2300496,292.272964 L133.615282,260.977923 C138.688109,258.058983 141.812961,252.66427 141.812961,246.826389 L141.812961,184.236046 C141.812961,178.397903 138.688109,173.003452 133.615282,170.08425 L79.2300496,138.789209 C74.1572217,135.870269 67.9075188,135.870269 62.8346909,138.789209 L8.44945884,170.08425 C3.37663097,173.003452 0.251779512,178.397903 0.251779512,184.236046 L0.251779512,246.826389 Z">
                                                                </path>
                                                                <path
                                                                    d="M82.1856754,110.412887 C82.1856754,116.250768 85.3105269,121.645481 90.3833548,124.564421 L144.768587,155.859462 C149.841415,158.778403 156.091118,158.778403 161.163945,155.859462 L215.549178,124.564421 C220.622005,121.645481 223.746857,116.250768 223.746857,110.412887 L223.746857,47.8225436 C223.746857,41.984401 220.622005,36.58995 215.549178,33.6707478 L161.163945,2.37570687 C156.091118,-0.54323354 149.841415,-0.54323354 144.768587,2.37570687 L90.3833548,33.6707478 C85.3105269,36.58995 82.1856754,41.984401 82.1856754,47.8225436 L82.1856754,110.412887 Z">
                                                                </path>
                                                                <path
                                                                    d="M163.261625,246.826389 C163.261625,252.66427 166.386476,258.058983 171.459304,260.977923 L225.844536,292.272964 C230.917364,295.191905 237.167067,295.191905 242.239895,292.272964 L296.625127,260.977923 C301.697955,258.058983 304.822806,252.66427 304.822806,246.826389 L304.822806,184.236046 C304.822806,178.397903 301.697955,173.003452 296.625127,170.08425 L242.239895,138.789209 C237.167067,135.870269 230.917364,135.870269 225.844536,138.789209 L171.459304,170.08425 C166.386476,173.003452 163.261625,178.397903 163.261625,184.236046 L163.261625,246.826389 Z">
                                                                </path>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg></div>
                                        </div>
                                    </div>
                                    <div data-enllax-ratio="-0.1" data-enllax-type="foreground">
                                        <div class="parallax-figure left-bottom-front small">
                                            <div><svg width="585px" height="151px" viewbox="0 0 585 151" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <g transform="translate(-143.000000, -88.000000)">
                                                            <g transform="translate(132.623862, 70.912032)">
                                                                <path
                                                                    d="M15,67.3628158 C15,70.2420142 16.5400613,72.9026456 19.0401691,74.3422448 L45.8435518,89.7767212 C48.3436597,91.2163204 51.4237822,91.2163204 53.9238901,89.7767212 L80.7272727,74.3422448 C83.2273806,72.9026456 84.7674419,70.2420142 84.7674419,67.3628158 L84.7674419,36.4937339 C84.7674419,33.6144064 83.2273806,30.9539041 80.7272727,29.5141758 L53.9238901,14.0796994 C51.4237822,12.6401002 48.3436597,12.6401002 45.8435518,14.0796994 L19.0401691,29.5141758 C16.5400613,30.9539041 15,33.6144064 15,36.4937339 L15,67.3628158 Z"
                                                                    fill="url(#hexaLinearGradient-3)"
                                                                    transform="translate(49.883721, 51.928210) rotate(-330.000000) translate(-49.883721, -51.928210)">
                                                                </path>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hidden-md-up">
                        <div class="logo logo-header"><a href="{{('Index')}}"><img
                                    src="{{asset('')}}main/images/crypto-logo.png" alt="logo"></a></div>
                    </div>
                    <div class="container max-lg inner-wrap">
                        <div class="card form-box fragment-fadeUp">
                            <div class="hidden-sm-down"><a class="waves-effect btn-icon backtohome invert"
                                    href="{{asset('')}}"><span><i class="ion-ios-home-outline"></i><i
                                            class="ion-ios-arrow-thin-left"></i></span></a></div>
                            <div class="deco-inner">
                                <div class="deco"><svg class="light" width="1274px" height="1018px"
                                        viewbox="0 0 1274 1018" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <mask fill="white">
                                                <use xlink:href="#path-2"></use>
                                            </mask>
                                            <use fill="url(#frmDecoLinearGradient-1)"
                                                transform="translate(607.224351, 494.641126) rotate(-45.000000) translate(-607.224351, -494.641126) "
                                                xlink:href="#path-2"></use>
                                        </g>
                                    </svg> <svg class="dark" width="1274px" height="1018px" viewbox="0 0 1274 1018"
                                        version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <mask fill="white">
                                                <use xlink:href="#path-2"></use>
                                            </mask>
                                            <use fill="url(#frmDecoLinearGradientDark-1)"
                                                transform="translate(607.224351, 494.641126) rotate(-45.000000) translate(-607.224351, -494.641126) "
                                                xlink:href="#path-2"></use>
                                        </g>
                                    </svg></div>
                            </div>
                            <div class="auth-frame">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="hidden-sm-down">
                                            <div class="greeting">
                                                <div class="logo"><img src="{{asset('')}}main/images/crypto-logo.png"
                                                        alt="logo" style="width:100px;">
                                                 
                                                </div>
                                                <h4 class="use-text-title2 pb-2">Welcome back</h4>
                                                <h6 class="use-text-subtitle2">Please login to continue</h6>
                                                <div class="deco-sm"><svg width="55px" height="49px" viewbox="0 0 55 49"
                                                        version="1.1">
                                                        <defs>
                                                            <lineargradient id="linearGradient-sm" x1="34.4430017%"
                                                                y1="14.3140713%" x2="131.062329%" y2="100%">
                                                                <stop stop-color="#FFA000" offset="0%"></stop>
                                                                <stop stop-color="#FFECB3" offset="100%"></stop>
                                                            </lineargradient>
                                                        </defs>
                                                        <g id="Auth-1" stroke="none" stroke-width="1" fill="none"
                                                            fill-rule="evenodd">
                                                            <path id="AuthFill-1"
                                                                d="M3.56921938,35.4705736 C3.56921938,37.4675408 4.62878153,39.3129133 6.34885575,40.3113968 L24.789583,51.0165091 C26.5096572,52.0149927 28.6287815,52.0149927 30.3488557,51.0165091 L48.789583,40.3113968 C50.5096572,39.3129133 51.5692194,37.4675408 51.5692194,35.4705736 L51.5692194,14.0602595 C51.5692194,12.0632028 50.5096572,10.2179199 48.789583,9.21934677 L30.3488557,-1.4857655 C28.6287815,-2.48424909 26.5096572,-2.48424909 24.789583,-1.4857655 L6.34885575,9.21934677 C4.62878153,10.2179199 3.56921938,12.0632028 3.56921938,14.0602595 L3.56921938,35.4705736 Z"
                                                                fill="url(#linearGradient-sm)"
                                                                transform="translate(27.569219, 24.765372) rotate(-330.000000) translate(-27.569219, -24.765372) ">
                                                            </path>
                                                        </g>
                                                    </svg></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="form-wrap">
                                            <div>
                                                <div class="head">
                                                    <div class="title-secondary align-left">
                                                        <h4>Forgot Password</h4>
                                                    </div><a class="btn btn-flat waves-effect button-link"
                                                        href="{{ route('login') }}"><i
                                                            class="material-icons icon left mr-1">arrow_forward</i>Already
                                                        have account?</a>
                                                </div>
                                             
                                                <form action="{{route('forgot_submit')}}" method="POST">

                {{ csrf_field() }}
                                                    <div class="row spacing3">
                                                        <div class="col-sm-12">
                                                            <div class="input-field primary filled"><input
                                                                    class="validate" id="email" type="text"
                                                                    name="username" required> <label
                                                                    for="email">Username</label></div>
                                                        </div>
                                                       
                                                    </div>
                                                    
                                                    <div class="btn-area"><button
                                                            class="btn secondary btn-large block waves-effect"
                                                            type="submit">Submit</button></div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- Scripts-->
    <script src="{{asset('')}}main/js/crypto-bundle.min.js"></script>
    <script src="../{{asset('')}}main/js/side-right.js"></script>
</body>

</html>

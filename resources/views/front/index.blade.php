
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <link rel="shortcut icon" href="{{asset('back')}}/assets/images/favicon.ico">

    <title>Jaeza</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cairo&display=swap" rel="stylesheet">


    <!-- Bootstrap core CSS -->
    <link href="{{asset('front')}}/css/bootstrap.min.css" rel="stylesheet">

    <!-- Owl Carousel CSS -->
    <link href="{{asset('front')}}/css/owl.carousel.css" rel="stylesheet">
    <link href="{{asset('front')}}/css/owl.theme.default.min.css" rel="stylesheet">

    <!-- Icon CSS -->
    <link href="{{asset('front')}}/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('front')}}/css/style.css" rel="stylesheet">



    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="{{asset('front')}}/js/html5shiv.js"></script>
    <script src="{{asset('front')}}/js/respond.min.js"></script>
    <![endif]-->

</head>
<style>
    h2, a, li {
        font-family: 'Cairo', sans-serif;
    }
    .home-wrapper h2 {
        margin-top: -88px !important;
    }
    .bg-img-1 {

        height: 521px;
    }

    #countdown{
        width: 465px;
        height: 160px;
        text-align: center;
        background: #222;
        background-image: -webkit-linear-gradient(top, #222, #333, #333, #222);
        background-image:    -moz-linear-gradient(top, #222, #333, #333, #222);
        background-image:     -ms-linear-gradient(top, #222, #333, #333, #222);
        background-image:      -o-linear-gradient(top, #222, #333, #333, #222);
        border: 1px solid #111;
        border-radius: 5px;
        box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.6);
        margin: auto;
        padding: 24px 0;
        position: absolute;
        top: 0; bottom: -230px; left: 0; right: 0;
    }

    #countdown:before{
        content:"";
        width: 8px;
        height: 65px;
        background: #444;
        background-image: -webkit-linear-gradient(top, #555, #444, #444, #555);
        background-image:    -moz-linear-gradient(top, #555, #444, #444, #555);
        background-image:     -ms-linear-gradient(top, #555, #444, #444, #555);
        background-image:      -o-linear-gradient(top, #555, #444, #444, #555);
        border: 1px solid #111;
        border-top-left-radius: 6px;
        border-bottom-left-radius: 6px;
        display: block;
        position: absolute;
        top: 48px; left: -10px;
    }

    #countdown:after{
        content:"";
        width: 8px;
        height: 65px;
        background: #444;
        background-image: -webkit-linear-gradient(top, #555, #444, #444, #555);
        background-image:    -moz-linear-gradient(top, #555, #444, #444, #555);
        background-image:     -ms-linear-gradient(top, #555, #444, #444, #555);
        background-image:      -o-linear-gradient(top, #555, #444, #444, #555);
        border: 1px solid #111;
        border-top-right-radius: 6px;
        border-bottom-right-radius: 6px;
        display: block;
        position: absolute;
        top: 48px; right: -10px;
    }

    #countdown #tiles{
        position: relative;
        z-index: 1;
    }

    #countdown #tiles > span{
        width: 92px;
        max-width: 92px;
        font: bold 48px 'Droid Sans', Arial, sans-serif;
        text-align: center;
        color: #111;
        background-color: #ddd;
        background-image: -webkit-linear-gradient(top, #bbb, #eee);
        background-image:    -moz-linear-gradient(top, #bbb, #eee);
        background-image:     -ms-linear-gradient(top, #bbb, #eee);
        background-image:      -o-linear-gradient(top, #bbb, #eee);
        border-top: 1px solid #fff;
        border-radius: 3px;
        box-shadow: 0px 0px 12px rgba(0, 0, 0, 0.7);
        margin: 0 7px;
        padding: 18px 0;
        display: inline-block;
        position: relative;
    }

    #countdown #tiles > span:before{
        content:"";
        width: 100%;
        height: 13px;
        background: #111;
        display: block;
        padding: 0 3px;
        position: absolute;
        top: 41%; left: -3px;
        z-index: -1;
    }

    #countdown #tiles > span:after{
        content:"";
        width: 100%;
        height: 1px;
        background: #eee;
        border-top: 1px solid #333;
        display: block;
        position: absolute;
        top: 48%; left: 0;
    }

    #countdown .labels{
        width: 100%;
        height: 25px;
        text-align: center;
        position: absolute;
        bottom: 8px;
    }

    #countdown .labels li{
        width: 102px;
        font: bold 15px 'Droid Sans', Arial, sans-serif;
        color: #f47321;
        text-shadow: 1px 1px 0px #000;
        text-align: center;
        text-transform: uppercase;
        display: inline-block;
    }
</style>

<body data-spy="scroll" data-target="#navbar-menu">

<!-- Navbar -->
<nav class="navbar navbar-custom navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand logo" href="#">الجائزة </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsMenu" aria-controls="navbarsMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsMenu">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#pricing">إتصل بنا</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#clients">مساعدة</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('login') }}">@lang('home.login')</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#home">@lang('home.home')</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="btn btn-custom navbar-btn">@lang('home.register_eveluator')</a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('constructor/register') }}" class="btn btn-custom navbar-btn">@lang('home.register_constructor')</a>
                </li>
            </ul>

        </div>
    </div>
</nav>
<!-- End navbar-custom -->



<!-- HOME -->
<section class="home bg-img-1" id="home">
    <div class="bg-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <div class="home-fullscreen">
                    <div class="full-screen">
                        <div class="home-wrapper home-wrapper-alt">
                            <h2 class="text-white">التسجيل للمشاركة في دورة الجائزة </h2>
                            <div id="countdown">
                                <div id='tiles'></div>
                                <div class="labels">
                                    <li>تانية</li>
                                    <li>دقيقة</li>
                                    <li>ساعة</li>
                                    <li>يوم</li>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <a href="{{ url('constructor/register') }}" target="_blank" class="btn btn-white-bordered">التسجيل </a>

            </div>
        </div>
    </div>
</section>
<!-- END HOME -->
<!-- PRICING -->
{{--<section class="section" id="pricing">--}}
{{--    <div class="container">--}}

{{--        <div class="row">--}}
{{--            <div class="col-sm-12 text-center">--}}
{{--                <h3 class="title">Pricing</h3>--}}
{{--                <p class="text-muted sub-title">The clean and well commented code allows easy customization of the theme.It's <br> designed for describing your app, agency or business.</p>--}}
{{--            </div>--}}
{{--        </div> <!-- end row -->--}}


{{--        <div class="row justify-content-center">--}}
{{--            <div class="col-lg-10">--}}
{{--                <div class="row">--}}

{{--                    <!--Pricing Column-->--}}
{{--                    <article class="pricing-column col-lg-4 col-md-4">--}}
{{--                        <div class="inner-box">--}}
{{--                            <div class="plan-header text-center">--}}
{{--                                <h3 class="plan-title">Ragular</h3>--}}
{{--                                <h2 class="plan-price">$24</h2>--}}
{{--                                <div class="plan-duration">Per License</div>--}}
{{--                            </div>--}}
{{--                            <ul class="plan-stats list-unstyled">--}}
{{--                                <li> <i class="pe-7s-server"></i>Number of end products <b>1</b></li>--}}
{{--                                <li> <i class="pe-7s-graph"></i>Customer support</li>--}}
{{--                                <li> <i class="pe-7s-mail-open"></i>Free Updates</li>--}}
{{--                                <li> <i class="pe-7s-tools"></i>24x7 Support</li>--}}
{{--                            </ul>--}}

{{--                            <div class="text-center">--}}
{{--                                <a href="#" class="btn btn-sm btn-custom">Purchase Now</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </article>--}}


{{--                    <!--Pricing Column-->--}}
{{--                    <article class="pricing-column col-lg-4 col-md-4">--}}
{{--                        <div class="inner-box active">--}}
{{--                            <div class="plan-header text-center">--}}
{{--                                <h3 class="plan-title">Multiple</h3>--}}
{{--                                <h2 class="plan-price">$120</h2>--}}
{{--                                <div class="plan-duration">Per License</div>--}}
{{--                            </div>--}}
{{--                            <ul class="plan-stats list-unstyled">--}}
{{--                                <li> <i class="pe-7s-server"></i>Number of end products <b>1</b></li>--}}
{{--                                <li> <i class="pe-7s-graph"></i>Customer support</li>--}}
{{--                                <li> <i class="pe-7s-mail-open"></i>Free Updates</li>--}}
{{--                                <li> <i class="pe-7s-tools"></i>24x7 Support</li>--}}
{{--                            </ul>--}}

{{--                            <div class="text-center">--}}
{{--                                <a href="#" class="btn btn-sm btn-custom">Purchase Now</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </article>--}}


{{--                    <!--Pricing Column-->--}}
{{--                    <article class="pricing-column col-lg-4 col-md-4">--}}
{{--                        <div class="inner-box">--}}
{{--                            <div class="plan-header text-center">--}}
{{--                                <h3 class="plan-title">Extended</h3>--}}
{{--                                <h2 class="plan-price">$999</h2>--}}
{{--                                <div class="plan-duration">Per License</div>--}}
{{--                            </div>--}}
{{--                            <ul class="plan-stats list-unstyled">--}}
{{--                                <li> <i class="pe-7s-server"></i>Number of end products <b>1</b></li>--}}
{{--                                <li> <i class="pe-7s-graph"></i>Customer support</li>--}}
{{--                                <li> <i class="pe-7s-mail-open"></i>Free Updates</li>--}}
{{--                                <li> <i class="pe-7s-tools"></i>24x7 Support</li>--}}
{{--                            </ul>--}}

{{--                            <div class="text-center">--}}
{{--                                <a href="#" class="btn btn-sm btn-custom">Purchase Now</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </article>--}}

{{--                </div>--}}
{{--            </div><!-- end col -->--}}
{{--        </div>--}}
{{--        <!-- end row -->--}}

{{--    </div> <!-- end container -->--}}
{{--</section>--}}
{{--<!-- End Pricing -->--}}


{{--<!-- Clients -->--}}
{{--<section class="section p-t-0" id="clients">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-sm-12 text-center">--}}
{{--                <h3 class="title">Trusted by Thousands</h3>--}}
{{--                <p class="text-muted sub-title">The clean and well commented code allows easy customization of the theme.It's <br/> designed for describing your app, agency or business.</p>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <!-- end row -->--}}

{{--        <div class="row text-center">--}}
{{--            <div class="col-sm-12">--}}
{{--                <ul class="list-inline client-list">--}}
{{--                    <li class="list-inline-item"><a href="" title="Microsoft"><img src="images/clients/microsoft.png" alt="clients"></a></li>--}}
{{--                    <li class="list-inline-item"><a href="" title="Google"><img src="images/clients/google.png" alt="clients"></a></li>--}}
{{--                    <li class="list-inline-item"><a href="" title="Instagram"><img src="images/clients/instagram.png" alt="clients"></a></li>--}}
{{--                    <li class="list-inline-item"><a href="" title="Converse"><img src="images/clients/converse.png" alt="clients"></a></li>--}}
{{--                </ul>--}}
{{--            </div> <!-- end Col -->--}}

{{--        </div><!-- end row -->--}}

{{--    </div>--}}
{{--</section>--}}
{{--<!--End  Clients -->--}}


{{--<!-- FOOTER -->--}}
{{--<footer class="footer">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-6">--}}
{{--                <p class="text-muted copyright">© 2016 - 2018. All rights reserved.</p>--}}
{{--            </div>--}}
{{--            <div class="col-md-3 ml-auto">--}}
{{--                <ul class="social-icons text-md-right">--}}
{{--                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>--}}
{{--                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>--}}
{{--                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        </div> <!-- end row -->--}}
{{--    </div> <!-- end container -->--}}
{{--</footer>--}}
{{--<!-- End Footer -->--}}


<!-- Back to top -->
<a href="#" class="back-to-top" id="back-to-top"> <i class="fa fa-angle-up"></i> </a>


<!-- js placed at the end of the document so the pages load faster -->
<script src="{{asset('front')}}/js/jquery.min.js"></script>
<script src="{{asset('front')}}/js/popper.min.js"></script>
<script src="{{asset('front')}}/js/bootstrap.min.js"></script>

<!-- Jquery easing -->
<script type="text/javascript" src="{{asset('front')}}/js/jquery.easing.1.3.min.js"></script>

<!-- Owl Carousel -->
<script type="text/javascript" src="{{asset('front')}}/js/owl.carousel.min.js"></script>

<!--common script for all pages-->
<script src="{{asset('front')}}/js/jquery.app.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        var myTime=<?php echo json_encode($date_diff->end_date); ?>;
        var date = Date.now();
        var milliseconds =new Date(myTime)-date;
        var target_date = new Date().getTime()+ milliseconds; // set the countdown date
        var days, hours, minutes, seconds; // variables for time units

        var countdown = document.getElementById("tiles"); // get tag element

        getCountdown();

        setInterval(function () { getCountdown(); }, 1000);

        function getCountdown(){

            // find the amount of "seconds" between now and target
            var current_date = new Date().getTime();
            var seconds_left = (target_date - current_date) / 1000;

            days = pad( parseInt(seconds_left / 86400) );
            seconds_left = seconds_left % 86400;

            hours = pad( parseInt(seconds_left / 3600) );
            seconds_left = seconds_left % 3600;

            minutes = pad( parseInt(seconds_left / 60) );
            seconds = pad( parseInt( seconds_left % 60 ) );

            // format countdown string + set tag value
            countdown.innerHTML = "<span>" + seconds + "</span><span>" + minutes + "</span><span>" + hours + "</span><span>" + days + "</span>";
        }

        function pad(n) {
            return (n < 10 ? '0' : '') + n;
        }
    });


    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        autoplay: true,
        autoplayTimeout: 4000,
        responsive:{
            0:{
                items:1
            }
        }
    })
</script>

</body>
</html>

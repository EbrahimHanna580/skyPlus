<!DOCTYPE html>
<html lang={{App::getLocale()}} dir={{App::getLocale()=='ar'? 'rtl':'ltr' }}>

    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="keywords" content="firatnet internet service provider wireless">
        <meta name="description" content="">
        <meta name="author" content="Ghiath MUTLAK">
        <meta http-equiv="X-UA-Compatible" content="IE=9">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title> Blog </title>

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- CSS Files -->
        <!--web fonts-->
		<link href="https://fonts.googleapis.com/css?family=Cairo&display=swap" rel="stylesheet">
		<!--libs css-->
		<link rel="stylesheet" type="text/css" media="all" href="{{ asset('plugins/owl-carousel/owl.carousel.css') }}">
		<link rel="stylesheet" type="text/css" media="all" href="{{ asset('plugins/owl-carousel/owl.transitions.css') }}">
		<link rel="stylesheet" type="text/css" media="all" href="{{ asset('plugins/jackbox/css/jackbox.min.css') }}">
		<link rel="stylesheet" type="text/css" media="screen" href="{{ asset('plugins/rs-plugin/css/settings.css') }}">

		<!--theme css-->
		<link rel="stylesheet" type="text/css" media="all" href="{{ asset('css/bootstrap.min.css') }}">
		<link rel="stylesheet" type="text/css" media="all" href="{{ asset('css/theme-animate.css') }}">
		<link rel="stylesheet" type="text/css" media="all" href="{{ asset('css/style.css') }}">
		<link rel="stylesheet" type="text/css" media="all" href="{{ asset('css/rtl.css') }}">

        <!--head libs-->
		<script src="{{ asset('js/jquery-2.1.0.min.js') }}"></script>
		<script src="{{ asset('plugins/jquery.queryloader2.min.js') }}"></script>
		<script src="{{ asset('plugins/modernizr.js') }}"></script>
		<script>
			$('html').addClass('d_none');
			$(document).ready(function(){
				$('html').show();
				$("body").queryLoader2({
					backgroundColor: '#fff',
					barColor : '#35eef6',
					barHeight: 4,
					percentage:true,
					deepSearch:true,
					minimumTime:1000
				});
			});
		</script>
			  <style>
      body {
        font-family: 'Cairo', sans-serif;
        font-size: 16px;
      }
    </style>

	<!-- Smartsupp Live Chat script -->
    <script type="text/javascript">
    var _smartsupp = _smartsupp || {};
    _smartsupp.key = '5127af59e6e5584a823d97f44faa07657ee5a4d0';
    window.smartsupp||(function(d) {
    var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
    s=d.getElementsByTagName('script')[0];c=d.createElement('script');
    c.type='text/javascript';c.charset='utf-8';c.async=true;
    c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
    })(document);
    </script>


    </head>

    <body class="sticky_menu">


        <div>

            @include('includes.navbar')

            <div>

                @yield('content')

            </div>

            @include('includes.footer')

        </div>

    <!--back to top button-->
    <button id="back_to_top" class="circle icon_wrap_size_2 color_blue_hover color_grey_light_4 tr_all d_md_none">
        <i class="icon-angle-up fs_large"></i>
    </button>


    <!-- JS Files -->
    <!--Libs-->
    <script src="plugins/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
    <script src="plugins/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script src="plugins/jquery.appear.js"></script>
    <script src="plugins/afterresize.min.js"></script>
    <script src="plugins/jquery.easing.1.3.js"></script>
    <script src="plugins/jquery.easytabs.min.js"></script>
    <script src="plugins/jackbox/js/jackbox-packed.min.js"></script>
    <script src="plugins/twitter/jquery.tweet.min.js"></script>
    <script src="plugins/owl-carousel/owl.carousel.min.js"></script>
    <script src="plugins/flickr.js"></script>


    <!--Theme Initializer-->
    <script src="js/theme.plugins.js"></script>
    <script src="js/theme.js"></script>

    </body>

</html>


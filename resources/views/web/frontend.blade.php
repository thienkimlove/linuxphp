<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<head>
    <title>Free Share the Blog Website Template | Home :: w3layouts</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="{{url('frontend/web/css/style.css')}}" rel="stylesheet" type="text/css" media="all"/>
    <link href='http://fonts.googleapis.com/css?family=Monda' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Audiowide' rel='stylesheet' type='text/css'>
    <!-- light-box -->
    <script type="text/javascript" src="{{url('frontend/web/js/jquery-1.10.1.min.js')}}"></script>
    <script type="text/javascript" src="{{url('frontend/web/js/jquery.mousewheel-3.0.6.pack.js')}}"></script>
    <script type="text/javascript" src="{{url('frontend/web/js/jquery.fancybox.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{url('frontend/web/css/jquery.fancybox.css')}}" media="screen" />
    <script type="text/javascript">
        $(document).ready(function() {

            $('.fancybox').fancybox();

        });
    </script>
    <!---- End Light-box ------>
</head>
<body>
@include('web.header')
<!--------------------- Main Content ------------------->
<div class="wrap">
    <div class="main">
        @yield('content')
        @include('web.sidebar')
        <div class="clear"></div>
    </div>
</div>
<!--------------------- End Main Content ----------------------------------->
@include('web.footer')
</body>
</html>
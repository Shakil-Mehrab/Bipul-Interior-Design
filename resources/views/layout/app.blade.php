<!DOCTYPE HTML>
<html lang="en">

<!-- Collected from paul-themes.com/html/bauhaus/demo/dark/index.html by Tiger Cage Technology, Sun, 04 Oct 2020 16:33:32 GMT -->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="">
<meta name="keywords" content="thespaceltd.com,thespace,interior,design" />
<meta name="description" content="The Space Ltd is the Largest Online Place for Interior Design " />
<title>@yield('title')The Space Ltd</title>
{{-- <link rel="icon" type="image/x-icon" href="{{asset('porto/images/icons/favicon.png')}}"> --}}
<link rel="shortcut icon" type="image/x-icon" href="{{asset('images/favicon.png')}}">
<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i|Poppins:300,400,500,600,700" rel="stylesheet">
<link href="{{asset('porto/css/style.css')}}" rel="stylesheet" media="screen">
<link href="{{asset('css/style.css')}}" rel="stylesheet">
<script src="https://kit.fontawesome.com/bb2f33706c.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="animsition">
    <div class="wrapper boxed">
        <div class="click-capture"></div>

        {{-- header --}}
        @include('layout.includes.nav')
        {{-- jumbotron --}}
        @yield('jumbotron')
        {{-- content --}}
        @yield('content')
        {{-- footer --}}
        @include('layout.includes.footer')
    </div>
</div>

<script src="{{asset('porto/js/jquery.min.js')}}"></script>
<script src="{{asset('porto/js/animsition.min.js')}}"></script>
<script src="{{asset('porto/js/bootstrap.min.js')}}"></script>
<script src="{{asset('porto/js/smoothscroll.js')}}"></script>
<script src="{{asset('porto/js/jquery.validate.min.js')}}"></script>
<script src="{{asset('porto/js/wow.min.js')}}"></script>
<script src="{{asset('porto/js/jquery.stellar.min.js')}}"></script>
<script src="{{asset('porto/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('porto/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('porto/js/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('porto/js/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('porto/js/plugins.js')}}"></script>
<script src="{{asset('porto/js/sly.min.js')}}"></script>

<script src="{{asset('porto/js/rev-slider/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('porto/js/rev-slider/jquery.themepunch.revolution.min.js')}}"></script>

<script src="{{asset('porto/js/rev-slider/revolution.extension.actions.min.js')}}"></script>
<script src="{{asset('porto/js/rev-slider/revolution.extension.carousel.min.js')}}"></script>
<script src="{{asset('porto/js/rev-slider/revolution.extension.kenburn.min.js')}}"></script>
<script src="{{asset('porto/js/rev-slider/revolution.extension.layeranimation.min.js')}}"></script>
<script src="{{asset('porto/js/rev-slider/revolution.extension.migration.min.js')}}"></script>
<script src="{{asset('porto/js/rev-slider/revolution.extension.navigation.min.js')}}"></script>
<script src="{{asset('porto/js/rev-slider/revolution.extension.parallax.min.js')}}"></script>
<script src="{{asset('porto/js/rev-slider/revolution.extension.slideanims.min.js')}}"></script>
<script src="{{asset('porto/js/rev-slider/revolution.extension.video.min.js')}}"></script>

<script src="{{asset('porto/js/scripts.js')}}"></script>
<script src="{{asset('porto/js/rev-slider-init.js')}}"></script>
</body>

<!-- Collected from paul-themes.com/html/bauhaus/demo/dark/index.html by Tiger Cage Technology, Sun, 04 Oct 2020 16:39:35 GMT -->
</html>

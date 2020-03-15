<!DOCTYPE HTML>
<html>
<head>
    @if($pagina != 8 || isset($pagina) == false)
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="shortcut icon" href="formatoWeb/images/iconofw.ico"></link>
    <title>FormatoWeb</title>

    <!--Main Element CSS-->
    <link href="{{asset('formatoWeb/css/style.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('formatoWeb/css/form.css')}}" rel="stylesheet" type="text/css">
    <!--<link href="css/font-awesome.css" rel="stylesheet" type="text/css">-->
        <link href="{{asset('formatoWeb/font-awesome-4.7.0/css/font-awesome.css')}}" rel="stylesheet" type="text/css">

    <!--Responsive CSS-->
    <link href="{{asset('formatoWeb/css/responsive.css')}}" rel="stylesheet" type="text/css">

    <!--Flexy Menu CSS-->
    <link href="{{asset('formatoWeb/css/flexy-menu.css')}}" rel="stylesheet" type="text/css">

    <!--LayerSlider CSS-->
    <link href="{{asset('formatoWeb/layerslider/css/layerslider.css')}}" rel="stylesheet" type="text/css">

    <!--Important Owl CSS-->
    <link href="{{asset('formatoWeb/css/owl.carousel.css')}}" rel="stylesheet" type="text/css">

    <!--Owl DefaultTheme -->
    <link href="{{asset('formatoWeb/css/owl.theme.css')}}" rel="stylesheet" type="text/css">

    <!--MEGAFOLIO PRO GALLERY CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('formatoWeb/megafolio/css/settings.css')}}" media="screen" />

    <!--COLORBOX LIGHTBOX CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('formatoWeb/css/colorbox.css')}}" media="screen" />

    <!-- Flexslider CSS -->
    <link href="{{asset('formatoWeb/css/flexslider.css')}}" rel="stylesheet" type="text/css">

    <!-- Fancybox CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('formatoWeb/css/jquery.fancybox.css?v=2.1.5')}}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{asset('formatoWeb/css/jquery.fancybox-buttons.css?v=1.0.5')}}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{asset('formatoWeb/css/jquery.fancybox-thumbs.css?v=1.0.7')}}" media="screen" />

    <!-- Tooltip CSS -->
    <link href="{{asset('formatoWeb/css/tooltip.css')}}" rel="stylesheet" type="text/css">

    <!--Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,400italic,300,500,700|Roboto+Slab:400,300,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="{{asset('formatoWeb/css/main.css')}}">

    <!--[if lte IE 8]>
    <meta HTTP-EQUIV="REFRESH" content="0; url=lte-ie8.html">
    <![endif]-->
    @endif

    @if($pagina == 8)
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
            <link rel="shortcut icon" href="formatoWeb/images/iconofw.ico"></link>
            <title>FormatoWeb</title>
        <!--Main Element CSS-->
            <!--  <link href="css/style.css" rel="stylesheet" type="text/css">-->
            <link href="css/form.css" rel="stylesheet" type="text/css">

            <!--Responsive CSS-->
            <link href="css/responsive.css" rel="stylesheet" type="text/css">

            <!--Flexy Menu CSS-->
            <link href="css/flexy-menu.css" rel="stylesheet" type="text/css">

            <!--LayerSlider CSS-->
            <link href="{{asset('formatoWeb/layerslider/css/layerslider.css')}}" rel="stylesheet" type="text/css">
            <link rel="stylesheet" href="{{asset('formatoWeb/css/main.css')}}">
        @include("includes.headBlog")
    @endif

    @if($pagina == 7)
        @include("includes.map")
    @endif
</head>

<body>
<!--Top Header Start-->
@include ("includes.socialMedia")
<!--Top Header End-->

<div class="wrapper">

    <!--Logo and Main Menu Start-->
    <header class="header-section">

        <!--Logo Start-->
        <!--<div class="logo-wrapper">
            <div class="logo-wrapper">
                <a hrindex.blade.phphtml"><img src="formatoWeb/images/logofw200_147.jpg" alt="logo" /></a>
            </div>
            <div class="logoP2" id="idLogoP"></div>
        </div>-->

        <div class="logo">
            <div class="logo-wrapper">
            </div>
        </div>
        <!--End-->

        <!--Navigation Menu Start-->

    @include("includes.menu")
    <!--Navigation Menu End-->

    </header>
    <!--Logo and Main Menu End-->

    <div class="container">

        <!--All Content Start-->
        <div class="content-wrapper">

            <!-- CONTENIDO DE LA PAGINA WEB -->
        @yield('contenido')


        <!--Footer Start-->
        @if($pagina == 8)
            @include("includes.footerBlog")
                <div class="clearfix"></div>
        @endif
        @include("includes.footer")
        <!--Footer End-->

        </div>

    </div>

</div>


    <div class="clearfix"></div>


    <script type="text/javascript" src="{{asset('formatoWeb/js/jquery-1.10.2.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('formatoWeb/js/greensock.js')}}"></script>

    <!--Flexy Menu Script-->
    <script type="text/javascript" src="{{asset('formatoWeb/js/flexy-menu.js')}}"></script>

    <!--LayerSlider Script-->
    <script type="text/javascript" src="{{asset('formatoWeb/layerslider/js/layerslider.kreaturamedia.jquery.js')}}"></script>
    <script type="text/javascript" src="{{asset('formatoWeb/layerslider/js/layerslider.transitions.js')}}"></script>

    <!--Carousel Plugin Script-->
    <script type="text/javascript" src="{{asset('formatoWeb/js/owl.carousel.js')}}"></script>

    <!-- MEGAFOLIO PRO GALLERY SCRIPT -->
    <script type="text/javascript" src="{{asset('formatoWeb/megafolio/js/jquery.themepunch.plugins.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('formatoWeb/megafolio/js/jquery.themepunch.megafoliopro.js')}}"></script>

    <!-- COLORBOX LIGHTBOX SCRIPT -->
    <script type="text/javascript" src="{{asset('formatoWeb/js/jquery.colorbox.js')}}"></script>

    <!-- Flexslider Script -->
    <script type="text/javascript" src="{{asset('formatoWeb/js/jquery.flexslider.js')}}"></script>

    <!--Social Share Button Script-->
    <script src="{{asset('formatoWeb/js/jquery.sharrre.min.js')}}" type="text/javascript"></script>

    <!-- Fancybox Script -->
    <script type="text/javascript" src="{{asset('formatoWeb/js/jquery.fancybox.pack.js?v=2.1.5')}}"></script>
    <script type="text/javascript" src="{{asset('formatoWeb/js/jquery.fancybox-buttons.js?v=1.0.5')}}"></script>
    <script type="text/javascript" src="{{asset('formatoWeb/js/jquery.fancybox-media.js?v=1.0.6')}}"></script>
    <script type="text/javascript" src="{{asset('formatoWeb/js/jquery.fancybox-thumbs.js?v=1.0.7')}}"></script>

    <!--Tooltip Script-->
    <script type="text/javascript" src="{{asset('formatoWeb/js/tooltip.js')}}"></script>

    <!--Placeholder Script-->
    <script type="text/javascript" src="{{asset('formatoWeb/js/placeholder.js')}}"></script>

    <!--Custom-->
    <script type="text/javascript" src="{{asset('formatoWeb/js/custom.js')}}"></script>

    <script src="{{asset('formatoWeb/js/main.js')}}"></script>


</body>
</html>


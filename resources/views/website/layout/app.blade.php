<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title', 'Welcome to Vidya Global')</title>
    <!-- Stylesheets -->
    <link href="{{ asset('website/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('website/css/style.css') }}" rel="stylesheet">

    <link rel="shortcut icon" href="{{ asset('website/images/favicon.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('website/images/favicon.png') }}" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

</head>

<body>

    <div class="page-wrapper">
        {{-- header include --}}
        @include('website.components.common.header')
        {{-- content --}}
        @yield('content')
        {{-- footer --}}
        @include('website.components.common.footer')

    </div>
    <!-- End Page Wrapper -->

    <!-- Scroll To Top -->
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>

    <script src="{{ asset('website/js/jquery.js') }}"></script>
    <script src="{{ asset('website/js/popper.min.js') }}"></script>
    <!--Revolution Slider-->
    <script src="{{ asset('website/plugins/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script src="{{ asset('website/plugins/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('website/plugins/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
    <script src="{{ asset('website/plugins/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
    <script src="{{ asset('website/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
    <script
        src="{{ asset('website/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
    <script
        src="{{ asset('website/plugins/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
    <script
        src="{{ asset('website/plugins/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
    <script src="{{ asset('website/plugins/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
    <script
        src="{{ asset('website/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
    <script src="{{ asset('website/plugins/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
    <script src="{{ asset('website/js/main-slider-script.js') }}"></script>
    <!--Revolution Slider-->
    <script src="{{ asset('website/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('website/js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('website/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('website/js/wow.js') }}"></script>
    <script src="{{ asset('website/js/appear.js') }}"></script>
    <script src="{{ asset('website/js/select2.min.js') }}"></script>
    <script src="{{ asset('website/js/swiper.min.js') }}"></script>
    <script src="{{ asset('website/js/owl.js') }}"></script>
    <script src="{{ asset('website/js/script.js') }}"></script>
    @stack('scripts')
</body>

</html>
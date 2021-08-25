<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Title -->
    <title>@yield('title')</title>

    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('web/img/logo-mini.png') }}">

    <!-- Google Fonts -->
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800">

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="{{ asset('web/plugins/bootstrap/bootstrap.min.css') }}">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="{{ asset('web/plugins/icon-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('web/plugins/icon-line/css/simple-line-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('web/plugins/icon-hs/style.css') }}">
    <link rel="stylesheet" href="{{ asset('web/plugins/hamburgers/hamburgers.min.css') }}">
    <link rel="stylesheet" href="{{ asset('web/plugins/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('web/plugins/slick-carousel/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('web/plugins/hs-megamenu/src/hs.megamenu.css') }}">

    @yield('style')

    <!-- CSS Template -->
    <link rel="stylesheet" href="{{ asset('web/css/styles.op-accounting.css') }}">
    <!-- <link rel="stylesheet" href="{{ asset('web/css/unify-core.css') }}"> -->
    <!-- <link rel="stylesheet" href="{{ asset('web/css/unify-components.css') }}"> -->
    <!-- <link rel="stylesheet" href="{{ asset('web/css/unify-globals.css') }}"> -->

    <!-- CSS Customization -->
    <link rel="stylesheet" href="{{ asset('web/css/custom.css') }}">

</head>
<body>
<main>
    @include('web.template.menu')
    @yield('content')
</main>
@yield('footer')
<!-- JS Global Compulsory -->
<script src="{{ asset('web/plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('web/plugins/jquery-migrate/jquery-migrate.min.js') }}"></script>
<script src="{{ asset('web/plugins/popper.min.js') }}"></script>
<script src="{{ asset('web/plugins/bootstrap/bootstrap.min.js') }}"></script>

<!-- JS Implementing Plugins -->
<script src="{{ asset('web/plugins/appear.js') }}"></script>
<script src="{{ asset('web/plugins/hs-megamenu/src/hs.megamenu.js') }}"></script>

<!-- JS Unify -->
<script src="{{ asset('web/js/hs.core.js') }}"></script>
<script src="{{ asset('web/js/hs.header.js') }}"></script>
<script src="{{ asset('web/js/hs.hamburgers.js') }}"></script>
<script src="{{ asset('web/js/hs.scroll-nav.js') }}"></script>
<!--<script src="{{ asset('web/js/hs.go-to.js') }}"></script>-->
<script src="{{ asset('web/js/hs.dropdown.js') }}"></script>
<script src="{{ asset('web/js/hs.scrollbar.js') }}"></script>

<!-- JS Customization -->
<script src="{{ asset('web/js/custom.js') }}"></script>

@yield('script')

<!-- JS Plugins Init. -->
<script>
    $(document).on('ready', function () {

        // initialization of HSScrollNav
        /*$.HSCore.components.HSScrollNav.init($('#js-scroll-nav'), {
            duration: 700
        });*/

        // initialization of header
        $.HSCore.components.HSHeader.init($('#js-header'));
        $.HSCore.helpers.HSHamburgers.init('.hamburger');

        // Initialization of HSMegaMenu plugin
        $('.js-mega-menu').HSMegaMenu({
            event: 'hover',
            pageContainer: $('.container'),
            breakpoint: 991
        });

        // initialization of go to section
        //$.HSCore.components.HSGoTo.init('.js-go-to');

        // initialization of HSDropdown component
        $.HSCore.components.HSDropdown.init($('[data-dropdown-target]'), {
            afterOpen: function(){
                $(this).find('input[type="search"]').focus();
            }
        });
    });

    $(document).on('load', function () {

    });
</script>
</body>
</html>

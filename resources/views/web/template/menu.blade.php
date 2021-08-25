<header id="js-header" class="u-header u-header--sticky-top u-header--change-appearance"
        data-header-fix-moment="100">

    <div class="u-header__section u-header__section--hidden u-header__section--light g-bg-white g-py-15">
        <div class="container">
            <div class="row flex-column flex-md-row justify-content-end align-items-center text-uppercase g-font-weight-600 g-color-black">
                <div class="col-auto g-pos-rel g-px-15">
                    <ul class="list-inline g-overflow-hidden g-font-size-12 g-mt-minus-10 g-mx-minus-4 mb-0">
                        <li class="list-inline-item g-mx-4 g-mt-10">
                            <a href="#!" id="languages-dropdown-invoker-2" class="g-color-gray-dark-v2 g-color-primary--hover g-text-underline--none--hover"
                               aria-controls="languages-dropdown-2"
                               aria-haspopup="true"
                               aria-expanded="false"
                               data-dropdown-event="hover"
                               data-dropdown-target="#languages-dropdown-2"
                               data-dropdown-type="css-animation"
                               data-dropdown-duration="300"
                               data-dropdown-hide-on-scroll="false"
                               data-dropdown-animation-in="fadeIn"
                               data-dropdown-animation-out="fadeOut">{{__('menu.language')}}
                                <i class="fa fa-angle-down g-ml-3"></i>
                            </a>
                            <ul id="languages-dropdown-2" class="list-unstyled text-left u-shadow-v23 g-pos-abs g-left-0 g-bg-white g-width-160 g-py-20 g-pb-15 g-mt-5 g-z-index-2" aria-labelledby="languages-dropdown-invoker-2">
                                <li>
                                    <a class="d-flex align-items-center g-color-main g-color-primary--hover g-text-underline--none--hover g-py-8 g-px-20" href="{{route('set_language', 'en')}}">
                                        <img src="{{ asset('web/img/menu/bandera-usa.svg') }}" alt="spanish" class="g-height-10">&nbsp;{{__('menu.english')}}
                                    </a>
                                </li>
                                <li>
                                    <a class="d-flex align-items-center g-color-main g-color-primary--hover g-text-underline--none--hover g-py-8 g-px-20" href="{{route('set_language', 'es')}}">
                                        <img src="{{ asset('web/img/menu/bandera-colombia.svg') }}" alt="spanish" class="g-height-10">&nbsp;{{__('menu.spanish')}}
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="list-inline-item g-mx-4 g-mt-10">|</li>
                        <li class="list-inline-item g-mx-4 g-mt-10">
                            <a href="//eco.agromakers.org/Registrar" class="g-color-black g-color-primary--hover g-text-underline--none--hover">{{__('menu.register')}}</a>
                        </li>
                        <li class="list-inline-item g-mx-4 g-mt-10">|</li>
                        <li class="list-inline-item g-mx-4 g-mt-10">
                            <a href="//eco.agromakers.org/Login" class="g-color-black g-color-primary--hover g-text-underline--none--hover">{{__('menu.login')}}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="u-header__section u-header__section--light g-bg-white-opacity-0_8 g-transition-0_3 "
         data-header-fix-moment-exclude=""
         data-header-fix-moment-classes="u-shadow-v18 ">

        <nav class="navbar navbar-expand-lg py-0">
            <div class="container g-pos-rel">

                <!-- Logo -->
                <a href="{{ route('index') }}" class="js-go-to navbar-brand u-header__logo "
                   data-type="static">
                    <img class="g-width-auto g-height-100 u-header__logo-img u-header__logo-img--main" src="{{ asset('web/img/logo-2020.svg') }}" alt="Logo">
                </a>
                <!-- End Logo -->

                <div id="navBar" class="js-mega-menu collapse navbar-collapse w-100 " data-mobile-scroll-hide="true">
                    <!-- Navigation -->
                    <div class="navbar-collapse align-items-center flex-sm-row">
                        <ul id="js-scroll-nav" class="navbar-nav text-uppercase g-font-weight-700 g-font-size-15 g-py-10 g-py-0--lg mx-auto">

                            <li class="nav-item hs-has-sub-menu g-mx-10--lg g-mx-15--xl my-auto g-mb-0--lg">
                                <a href="#bestOffers" class="nav-link" id="nav-link-5"
                                   aria-haspopup="true"
                                   aria-expanded="false"
                                   aria-controls="nav-submenu-5"
                                >{{ __('menu.aboutus') }}</a>

                                <!-- Submenu -->
                                <ul class="hs-sub-menu list-unstyled g-text-transform-none g-brd-top g-brd-primary g-brd-top-2 g-min-width-200 g-py-7 " id="nav-submenu-5"
                                    aria-labelledby="nav-link-4">

                                    <li class="dropdown-item"><a class="nav-link g-px-0" href="{{ route('digital-cooperative') }}">{{ __('menu.cooperative') }}</a></li>
                                    <li class="dropdown-item"><a class="nav-link g-px-0" href="{{ route('productors') }}">{{ __('menu.productors') }}</a></li>
                                    <li class="dropdown-item"><a class="nav-link g-px-0" href="{{ route('institucional') }}">{{ __('menu.institutions') }}</a></li>
                                    <li class="dropdown-item"><a class="nav-link g-px-0" href="{{ route('associations') }}">{{ __('menu.associations') }}</a></li>
                                    <li class="dropdown-item"><a class="nav-link g-px-0" href="{{ route('companies') }}">{{ __('menu.companies') }}</a></li>
                                    <li class="dropdown-item"><a class="nav-link g-px-0" href="{{ route('tourism') }}">{{ __('menu.touristic-farm') }}</a></li>
                                </ul>
                                <!-- End Submenu -->
                            </li>

                            <li class="nav-item hs-has-sub-menu g-mx-10--lg g-mx-15--xl my-auto g-mb-0--lg">
                                <a href="#bestOffers" class="nav-link" id="nav-link-2"
                                   aria-haspopup="true"
                                   aria-expanded="false"
                                   aria-controls="nav-submenu-2"
                                >{{ __('menu.resources') }}</a>

                                <!-- Submenu -->
                                <ul class="hs-sub-menu list-unstyled g-text-transform-none g-brd-top g-brd-primary g-brd-top-2 g-min-width-200 g-py-7 " id="nav-submenu-2"
                                    aria-labelledby="nav-link-2">
                                    <li class="dropdown-item"><a class="nav-link g-px-0" href="{{ route('open-source') }}">{{ __('menu.open-source') }}</a></li>
                                    <li class="dropdown-item"><a class="nav-link g-px-0" href="{{ route('learning') }}">{{ __('menu.learning') }}</a></li>
                                    <li class="dropdown-item hs-has-sub-menu">
                                        <a href="#bestOffers" class="nav-link" id="nav-link-2"
                                           aria-haspopup="true"
                                           aria-expanded="false"
                                           aria-controls="nav-submenu-2"
                                        >{{ __('menu.apps') }}</a>

                                        <!-- Submenu -->
                                        <ul class="hs-sub-menu list-unstyled g-text-transform-none g-brd-top g-brd-primary g-brd-top-2 g-min-width-200 g-py-7 " id="nav-submenu-2"
                                            aria-labelledby="nav-link-2">
                                            <li class="dropdown-item"><a class="nav-link g-px-0" href="{{ route('mi-campo-app') }}">{{ __('menu.mi-campo-app') }}</a></li>
                                            <li class="dropdown-item"><a class="nav-link g-px-0" href="{{ route('other-apps') }}">{{ __('menu.other-apps') }}</a></li>
                                        </ul>
                                        <!-- End Submenu -->
                                    </li>
                                    <li class="dropdown-item"><a class="nav-link g-px-0" href="{{ route('e-commerce') }}">{{ __('menu.e-commerce') }}</a></li>
                                </ul>
                                <!-- End Submenu -->
                            </li>

                            <li class="nav-item g-mx-10--lg g-mx-15--xl my-auto g-mb-0--lg"><a class="nav-link g-px-0" href="{{ route('events') }}">{{ __('menu.events') }}</a></li>

                            <li class="nav-item">
                                <!-- Logo BioINCA-->
                                <a href="http://bioinca.org/" class="js-go-to navbar-brand u-header__logo "
                                   data-type="static" target="_blank">
                                    <img class="g-width-82 g-height-60 u-header__logo-img u-header__logo-img--main" src="{{ asset('web/img/bioinca.png') }}" alt="Logo">
                                </a>
                                <!-- End Logo -->
                            </li>
                        </ul>
                    </div>
                    <!-- End Navigation -->
                </div>


                <!-- Responsive Toggle Button -->
                <button class="navbar-toggler btn g-line-height-1 g-brd-none g-pa-0 g-pos-abs g-top-5 g-right-0" type="button"
                        aria-label="Toggle navigation"
                        aria-expanded="false"
                        aria-controls="navBar"
                        data-toggle="collapse"
                        data-target="#navBar">
                <span class="hamburger hamburger--slider">
                  <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                  </span>
                </span>
                </button>
                <!-- End Responsive Toggle Button -->
            </div>
        </nav>
    </div>
</header>

<header id="js-header" class="u-header u-header--sticky-top u-header--change-appearance"
        data-header-fix-moment="100">
    <div class="u-header__section u-header__section--light g-bg-white-opacity-0_8 g-transition-0_3 g-py-20"
         data-header-fix-moment-exclude="g-py-20"
         data-header-fix-moment-classes="u-shadow-v18 g-py-10">
        <nav class="navbar navbar-expand-lg py-0">
            <div class="container g-pos-rel">
                <!-- Logo -->
                <a href="{{ route('index') }}" class="js-go-to navbar-brand u-header__logo g-width-350 g-mr-60"
                   data-type="static">
                    <img class="img-fluid u-header__logo-img u-header__logo-img--main" src="{{ asset('web/img/logo.png') }}" alt="Logo">
                </a>
                <!-- End Logo -->

                <div id="navBar" class="js-mega-menu collapse navbar-collapse w-100" data-mobile-scroll-hide="true">
                    <!-- Navigation -->
                    <div class="navbar-collapse align-items-center flex-sm-row">
                        <ul id="js-scroll-nav" class="navbar-nav text-uppercase g-font-weight-700 g-font-size-15 g-py-20 g-py-0--lg">
                            <li class="nav-item hs-has-sub-menu g-mx-10--lg g-mx-15--xl g-my-7 g-mb-0--lg">
                                <a href="#bestOffers" class="nav-link p-0" id="nav-link-1"
                                   aria-haspopup="true"
                                   aria-expanded="false"
                                   aria-controls="nav-submenu-1"
                                >{{ __('menu.hardware') }}</a>

                                <!-- Submenu -->
                                <ul class="hs-sub-menu list-unstyled g-text-transform-none g-brd-top g-brd-primary g-brd-top-2 g-min-width-200 g-py-7 g-mt-30--lg g-mt-20--lg--scrolling" id="nav-submenu-1"
                                    aria-labelledby="nav-link-1">
                                    <li class="dropdown-item"><a class="nav-link g-px-0" href="{{ route('hardware-production') }}">{{ __('menu.machines-for-production') }}</a></li>
                                    <li class="dropdown-item"><a class="nav-link g-px-0" href="https://www.instagram.com/p/B7TEl2AJsL9/?igshid=1ctu6p1opl22o" target="_blank">{{ __('menu.machines-for-selling') }}</a></li>
                                </ul>
                                <!-- End Submenu -->
                            </li>
                            <li class="nav-item hs-has-sub-menu g-mx-10--lg g-mx-15--xl g-my-7 g-mb-0--lg">
                                <a href="#bestOffers" class="nav-link p-0" id="nav-link-2"
                                   aria-haspopup="true"
                                   aria-expanded="false"
                                   aria-controls="nav-submenu-1"
                                >{{ __('menu.software') }}</a>

                                <!-- Submenu -->
                                <ul class="hs-sub-menu list-unstyled g-text-transform-none g-brd-top g-brd-primary g-brd-top-2 g-min-width-200 g-py-7 g-mt-30--lg g-mt-20--lg--scrolling" id="nav-submenu-1"
                                    aria-labelledby="nav-link-1">
                                    <li class="dropdown-item"><a class="nav-link g-px-0" href="http://eco.agromakers.org/" target="_blank">{{ __('menu.eco.agromakers.app') }}</a></li>
                                    <li class="dropdown-item"><a class="nav-link g-px-0" href="" target="_blank">{{ __('menu.voice.agromakers.app') }}</a></li>
                                    <li class="dropdown-item"><a class="nav-link g-px-0" href="http://eco.agromakers.org/" target="_blank">>{{ __('menu.logistic-distribution') }}</a></li>
                                    <li class="dropdown-item"><a class="nav-link g-px-0" href="https://world.openfoodfacts.org/" target="_blank">>{{ __('menu.qrcode-traceability') }}</a></li>
                                    <!--<li class="dropdown-item"><a class="nav-link g-px-0" href="{{ route('software-certification') }}" target="_blank">Participative Certification</a></li>-->
                                </ul>
                                <!-- End Submenu -->
                            </li>

                            <li class="nav-item hs-has-sub-menu g-mx-10--lg g-mx-15--xl g-my-7 g-mb-0--lg">
                                <a href="#bestOffers" class="nav-link p-0" id="nav-link-3"
                                   aria-haspopup="true"
                                   aria-expanded="false"
                                   aria-controls="nav-submenu-1"
                                >{{ __('menu.spaces') }}</a>

                                <!-- Submenu -->
                                <ul class="hs-sub-menu list-unstyled g-text-transform-none g-brd-top g-brd-primary g-brd-top-2 g-min-width-200 g-py-7 g-mt-30--lg g-mt-20--lg--scrolling" id="nav-submenu-1"
                                    aria-labelledby="nav-link-1">
                                    <li class="dropdown-item"><a class="nav-link g-px-0" href="https://www.organicoslalulu.com/" target="_blank">{{ __('menu.footprint-cafe-n-shop') }}</a></li>
                                    <li class="dropdown-item"><a class="nav-link g-px-0" href="https://www.facebook.com/Utop%C3%ADabio-205617153207983/" target="_blank">{{ __('menu.touristic-farm') }}</a></li>
                                </ul>
                                <!-- End Submenu -->
                            </li>

                            <li class="nav-item hs-has-sub-menu g-mx-10--lg g-mx-15--xl g-my-7 g-mb-0--lg">
                                <a href="#bestOffers" class="nav-link p-0" id="nav-link-4"
                                   aria-haspopup="true"
                                   aria-expanded="false"
                                   aria-controls="nav-submenu-1"
                                >{{ __('menu.events') }}</a>

                                <!-- Submenu -->
                                <ul class="hs-sub-menu list-unstyled g-text-transform-none g-brd-top g-brd-primary g-brd-top-2 g-min-width-200 g-py-7 g-mt-30--lg g-mt-20--lg--scrolling" id="nav-submenu-1"
                                    aria-labelledby="nav-link-1">
                                    <li class="dropdown-item"><a class="nav-link g-px-0" href="#">WorkShop</a></li>
                                    <li class="dropdown-item"><a class="nav-link g-px-0" href="http://bogota2019.agromakers.org/" target="_blank">{{ __('menu.agromakers-event') }}</a></li>
                                </ul>
                                <!-- End Submenu -->
                            </li>
                        </ul>
                    </div>
                    <!-- End Navigation -->

                    <a class="btn btn-lg text-uppercase u-btn-primary g-font-weight-700 g-font-size-12 g-rounded-30 g-px-40 g-py-15 g-ma-5" href="#">Log in</a>
                    <a class="btn btn-lg text-uppercase u-btn-blue g-font-weight-700 g-font-size-12 g-rounded-30 g-px-40 g-py-15 g-ma-5" href="#">Register</a>
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

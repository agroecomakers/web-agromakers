<!-- Contact -->
<footer class="g-pos-rel">
    <!-- Content -->
    <div class="g-bg-size-cover g-bg-img-hero g-bg-cover g-bg-black-opacity-0_7--after g-pt-120 g-pb-70" style="background-image: url('https://res.cloudinary.com/civico/image/upload/c_fit,f_auto,fl_lossy,h_1200,q_auto:low,w_1200/v1/entity/image/file/04c/000/52f8f4f1820c65860700004c.jpg');">
        <div class="container u-bg-overlay__inner">
            <div class="row align-items-center">
                <div class="col-md-4 g-mb-50">
                    <h3 class="h4 g-color-white mb-4">{{ __('footer.contact-Info') }}</h3>

                    <!-- Icon Block -->
                    <div class="media align-items-center mb-4">
                        <div class="d-flex"><span class="u-icon-v1 u-icon-size--sm g-color-white mr-2"><i class="icon-hotel-restaurant-235 u-line-icon-pro"></i></span>
                        </div>
                        <div class="media-body">
                            <p class="g-color-white-opacity-0_6 mb-0">UNIANDES, CRA. 1 #18A 12, BOGOTÁ COLOMBIA</p>
                        </div>
                    </div>
                    <!-- End Icon Block -->

                    <!-- Icon Block -->
                    <div class="media align-items-center mb-4">
                        <div class="d-flex">
                            <span class="u-icon-v1 u-icon-size--sm g-color-white mr-2"><i class="icon-communication-033 u-line-icon-pro"></i></span>
                        </div>
                        <div class="media-body">
                            <p class="g-color-white-opacity-0_6 mb-0">+57 301 264 37 92</p>
                        </div>
                    </div>
                    <!-- End Icon Block -->

                    <!-- Icon Block -->
                    <div class="media align-items-center g-mb-60">
                        <div class="d-flex">
                            <span class="u-icon-v1 u-icon-size--sm g-color-white mr-2"><i class="icon-communication-062 u-line-icon-pro"></i></span>
                        </div>
                        <div class="media-body">
                            <p class="g-color-white-opacity-0_6 mb-0"> DUPAS.ST@GMAIL.COM</p>
                        </div>
                    </div>
                    <!-- End Icon Block -->

                    <!-- Social Icons -->
                    <!--<h3 class="h4 g-color-white">Social Networks</h3>

                    <ul class="list-inline mb-0">
                        <li class="list-inline-item g-mx-2">
                            <a class="u-icon-v1 u-icon-size--sm g-color-white g-bg-white-opacity-0_1 g-bg-primary--hover g-font-size-13 rounded-circle" href="https://www.facebook.com/htmlstream">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li class="list-inline-item g-mx-2">
                            <a class="u-icon-v1 u-icon-size--sm g-color-white g-bg-white-opacity-0_1 g-bg-primary--hover g-font-size-13 rounded-circle" href="https://twitter.com/htmlstream">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li class="list-inline-item g-mx-2">
                            <a class="u-icon-v1 u-icon-size--sm g-color-white g-bg-white-opacity-0_1 g-bg-primary--hover g-font-size-13 rounded-circle" href="https://github.com/htmlstream">
                                <i class="fa fa-github"></i>
                            </a>
                        </li>
                        <li class="list-inline-item g-mx-2">
                            <a class="u-icon-v1 u-icon-size--sm g-color-white g-bg-white-opacity-0_1 g-bg-primary--hover g-font-size-13 rounded-circle" href="https://dribbble.com/htmlstream">
                                <i class="fa fa-dribbble"></i>
                            </a>
                        </li>
                    </ul>-->
                    <!-- End Social Icons -->
                </div>

                <div class="col-md-8 g-mb-50">
                    <div class="g-brd-around g-brd-white-opacity-0_6 g-px-45 g-py-60">
                        <div class="row">
                            <div class="col-md-4 g-mb-30">
                                <h2 class="h1 g-color-white">{{ __('footer.contact-us') }}</h2>
                            </div>

                            <div class="col-md-8 g-mb-30">
                                <!-- Contact Form -->
                                <form action="{{ route('contact') }}" method="post">
                                    @if (Session::has('message-confirmation'))
                                        <!-- Success Alert -->
                                            <div class="alert alert-success" role="alert">
                                                <strong>{{ Session::get('message-confirmation') }}</strong>
                                            </div>
                                            <!-- End Success Alert -->
                                    @endif
                                    @csrf
                                    <div class="mb-3">
                                        <select class="form-control g-brd-none g-brd-bottom g-brd-white g-brd-primary--focus g-color-white g-bg-transparent g-placeholder-gray-light-v5 rounded-0 g-py-13 g-px-0 mb-2" name="team" placeholder="{{ __('footer.team') }}">
                                            <option class="g-color-black" {{ old('team') == 'hardware' ? 'selected' : '' }}value="hardware">{{ __('footer.item-1') }}</option>
                                            <option class="g-color-black" {{ old('team') == 'software' ? 'selected' : '' }}value="software">{{ __('footer.item-2') }}</option>
                                            <option class="g-color-black" {{ old('team') == 'spices' ? 'selected' : '' }}value="spices">{{ __('footer.item-3') }}</option>
                                            <option class="g-color-black" {{ old('team') == 'other' ? 'selected' : '' }}value="other">{{ __('footer.item-4') }}</option>
                                        </select>
                                        @error('team')<div class="form-control-feedback">{{ $message }}</div>@enderror
                                    </div>

                                    <div class="mb-3">
                                        <input class="form-control g-brd-none g-brd-bottom g-brd-white g-brd-primary--focus g-color-white g-bg-transparent g-placeholder-gray-light-v5 rounded-0 g-py-13 g-px-0 mb-2 " type="text" name="name" placeholder="{{ __('footer.name') }}" value="{{ old('name') }}">
                                        @error('name')<div class="form-control-feedback">{{ $message }}</div>@enderror
                                    </div>

                                    <div class="mb-3">
                                        <input class="form-control g-brd-none g-brd-bottom g-brd-white g-brd-primary--focus g-color-white g-bg-transparent g-placeholder-gray-light-v5 rounded-0 g-py-13 g-px-0 mb-2" type="email" name="email" placeholder="{{ __('footer.email') }}" value="{{ old('email') }}">
                                        @error('email')<div class="form-control-feedback">{{ $message }}</div>@enderror
                                    </div>

                                    <div class="mb-3">
                                        <input class="form-control   g-brd-none g-brd-bottom g-brd-white g-brd-primary--focus g-color-white g-bg-transparent g-placeholder-gray-light-v5 rounded-0 g-py-13 g-px-0 mb-2" type="number" name="phone" placeholder="{{ __('footer.phone') }}" value="{{ old('phone') }}">
                                        @error('phone')<div class="form-control-feedback">{{ $message }}</div>@enderror
                                    </div>

                                    <div class="mb-4">
                                        <textarea class="form-control  g-brd-none g-brd-bottom g-brd-white g-brd-primary--focus g-color-white g-bg-transparent g-placeholder-gray-light-v5 g-resize-none rounded-0 g-py-13 g-px-0 mb-5" rows="5" name="message" placeholder="{{ __('footer.message') }}"> {{ old('message') }}</textarea>
                                        @error('message')<div class="form-control-feedback">{{ $message }}</div>@enderror
                                    </div>

                                    <button class="btn u-btn-primary g-bg-secondary g-color-primary g-color-white--hover g-bg-primary--hover g-font-weight-600 g-font-size-12 g-rounded-30 g-py-15 g-px-35" type="submit" role="button">{{ __('footer.button-message') }}</button>
                                </form>
                                <!-- End Contact Form -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Content -->

    <!-- Copyright -->
    <div class="container text-center g-py-10">
        <p class="g-font-size-13 mb-0">© 2020 <a href="http://ideco.com.co" target="_blank">IDECO SAS</a>. All Rights Reserved.</p>
    </div>
    <!-- End Copyright -->
</footer>
<!-- End Contact -->

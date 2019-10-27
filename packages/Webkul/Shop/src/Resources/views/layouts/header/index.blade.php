<header>
    <div class="header_top">
        <div class="container">
            <div class="row">

                <div class="col-sm-6">
                    <div class="contactinfo">
                        <ul class="nav nav-pills">
                            <li><a href="#"><span style="width: 25px;"><i class="fa fa-phone"></i></span> 071 262626262</a></li>
                            <li><a href="#"><span style="width: 25px;"><i class="fa fa-envelope"></i></span> info@swanyk.com</a></li>
                        </ul>
                    </div>
                    {{-- /.contactinfo --}}
                </div>
                {{-- /.col-sm-6 --}}

                <div class="col-sm-6">
                    <div class="social-icons pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>							
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                    {{-- /.social-icons --}}
                </div>
                {{-- /.col-sm-6 --}}
            </div>
            {{-- /.row --}}
        </div> 
        {{-- /.container --}}
    </div>
    {{-- /.header_top  --}}

    <div class="header-middle">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo pull-left">
                        <ul class="logo-container">
                            <li>
                                <a href="{{ route('shop.home.index') }}">
                                    @if ($logo = core()->getCurrentChannel()->logo_url)
                                        <img class="logo" src="{{ $logo }}" width="270" />
                                    @else
                                        <img class="logo" src="{{ bagisto_asset('images/logo.jpg') }}" width="270"/>
                                    @endif
                                </a>
                            </li>
                        </ul>
                    </div>
                    {{-- /.logo --}}
                    <div class="btn-group pull-right">
                        <!-- <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                                USA
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">Canada</a></li>
                                <li><a href="#">UK</a></li>
                            </ul>
                        </div>
                         -->
                        <!-- <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                                DOLLAR
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">Canadian Dollar</a></li>
                                <li><a href="#">Pound</a></li>
                            </ul>
                        </div> -->
                    </div>
                </div>

                <div class="col-sm-4 pull-right">
                    <div class="search_box">
                        <ul class="search-container">
                            <li class="search-group">
                                <form role="search" action="{{ route('shop.search.index') }}" method="GET" style="display: inherit;">
                                    <input type="search" name="term" class="search-field" placeholder="{{ __('shop::app.header.search-text') }}" required>
                                </form>
                            </li>
                        </ul>
                        <?php
                            $query = parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY);
                            $searchTerm = explode("&", $query);
                
                            foreach($searchTerm as $term){
                                if (strpos($term, 'term') !== false) {
                                    $serachQuery = $term;
                                }
                            }
                        ?>
            
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="shop-menu pull-right">
                        <ul class="nav navbar-nav">
                            {!! view_render_event('bagisto.shop.layout.header.account-item.before') !!}
                            <li>
                                <span class="dropdown-toggle">
                                    <i class="icon account-icon"></i>

                                    <span class="name">{{ __('shop::app.header.account') }}</span>

                                    <i class="icon arrow-down-icon"></i>
                                </span>

                                @guest('customer')
                                    <ul class="dropdown-list account guest">
                                        <li>
                                            <div>
                                                <label style="color: #9e9e9e; font-weight: 700; text-transform: uppercase; font-size: 15px;">
                                                    {{ __('shop::app.header.title') }}
                                                </label>
                                            </div>

                                            <div style="margin-top: 5px;">
                                                <span style="font-size: 12px;">{{ __('shop::app.header.dropdown-text') }}</span>
                                            </div>

                                            <div style="margin-top: 15px;">
                                                <a class="btn btn-primary btn-md" href="{{ route('customer.session.index') }}" style="color: #ffffff">
                                                    {{ __('shop::app.header.sign-in') }}
                                                </a>

                                                <a class="btn btn-primary btn-md" href="{{ route('customer.register.index') }}" style="float: right; color: #ffffff">
                                                    {{ __('shop::app.header.sign-up') }}
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                @endguest

                                @auth('customer')
                                    <ul class="dropdown-list account customer">
                                        <li>
                                            <div>
                                                <label style="color: #9e9e9e; font-weight: 700; text-transform: uppercase; font-size: 15px;">
                                                    {{ auth()->guard('customer')->user()->first_name }}
                                                </label>
                                            </div>

                                            <ul>
                                                <li>
                                                    <a href="{{ route('customer.profile.index') }}">{{ __('shop::app.header.profile') }}</a>
                                                </li>

                                                <li>
                                                    <a href="{{ route('customer.wishlist.index') }}">{{ __('shop::app.header.wishlist') }}</a>
                                                </li>

                                                <li>
                                                    <a href="{{ route('shop.checkout.cart.index') }}">{{ __('shop::app.header.cart') }}</a>
                                                </li>

                                                <li>
                                                    <a href="{{ route('customer.session.destroy') }}">{{ __('shop::app.header.logout') }}</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                @endauth
                            </li>

                            {!! view_render_event('bagisto.shop.layout.header.account-item.after') !!}
                            {{-- <li><a href="#"><i class="fa fa-user"></i> Account</a></li> --}}
                            {{-- <li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li> --}}
                            {{-- <li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Checkout</a></li> --}}
                            {!! view_render_event('bagisto.shop.layout.header.cart-item.before') !!}

                            <li class="cart-dropdown-container">
                                @include('shop::checkout.cart.mini-cart')
            
                            </li>
            
                            {!! view_render_event('bagisto.shop.layout.header.cart-item.after') !!}
                            {{-- <li><a href="login.html"><i class="fa fa-lock"></i> Login</a></li> --}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-middle-->

    	<div class="header-bottom">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
						<div class="mainmenu pull-left">
							
                            @include('shop::layouts.header.nav-menu.navmenu')
                        </div>
                        {{-- /.mainmenu --}}
					</div>
					
				</div>
			</div>
		</div> <!--/header-bottom-->
</header>

@push('scripts')
    <script>
        $(document).ready(function() {

            $('body').delegate('#search, .icon-menu-close, .icon.icon-menu', 'click', function(e) {
                toggleDropdown(e);
            });

            function toggleDropdown(e) {
                var currentElement = $(e.currentTarget);

                if (currentElement.hasClass('icon-search')) {
                    currentElement.removeClass('icon-search');
                    currentElement.addClass('icon-menu-close');
                    $('#hammenu').removeClass('icon-menu-close');
                    $('#hammenu').addClass('icon-menu');
                    $("#search-responsive").css("display", "block");
                    $("#header-bottom").css("display", "none");
                } else if (currentElement.hasClass('icon-menu')) {
                    currentElement.removeClass('icon-menu');
                    currentElement.addClass('icon-menu-close');
                    $('#search').removeClass('icon-menu-close');
                    $('#search').addClass('icon-search');
                    $("#search-responsive").css("display", "none");
                    $("#header-bottom").css("display", "block");
                } else {
                    currentElement.removeClass('icon-menu-close');
                    $("#search-responsive").css("display", "none");
                    $("#header-bottom").css("display", "none");
                    if (currentElement.attr("id") == 'search') {
                        currentElement.addClass('icon-search');
                    } else {
                        currentElement.addClass('icon-menu');
                    }
                }
            }
        });
    </script>
@endpush

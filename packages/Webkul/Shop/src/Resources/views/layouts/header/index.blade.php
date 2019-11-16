<header id="header"><!--header-->
    <div class="header_top"><!--header_top-->
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="contactinfo">
                        <ul class="nav nav-pills">
                            <li><a href="#"><span style="width: 25px;"><i class="fa fa-phone"></i></span> 071 262626262</a></li>
                            <li><a href="#"><span style="width: 25px;"><i class="fa fa-envelope"></i></span> info@swanyk.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="social-icons pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>							
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header_top-->
    
    <div class="header-middle"><!--header-middle-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo pull-left">
                            <a href="{{ route('shop.home.index') }}">
                                @if ($logo = core()->getCurrentChannel()->logo_url)
                                    <img class="logo" src="{{ $logo }}" width="270" />
                                @else
                                    <img class="logo" src="{{ bagisto_asset('images/logo.jpg') }}" width="270"/>
                                @endif
                            </a>
                    </div>
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
                <div class="col-sm-8">
                    <div class="shop-menu pull-right">
                        <ul class="nav navbar-nav">
                            @guest('customer')
                                <li><a href="{{ route('customer.session.index') }}"><i class="fa fa-sign-in"></i> {{ __('shop::app.header.sign-in') }}</a></li>
                                <li><a href="{{ route('customer.register.index') }}"><i class="fa fa-lock"></i> {{ __('shop::app.header.sign-up') }}</a></li>
                            @endguest

                            @auth('customer')
                            <li><a href="{{ route('customer.profile.index') }}"><i class="fa fa-user"></i>{{ __('shop::app.header.profile') }}</a></li>
                            <li><a href="{{ route('customer.wishlist.index') }}"><i class="fa fa-star"></i>{{ __('shop::app.header.wishlist') }}</a></li>
                            <li><a href="{{ route('shop.checkout.cart.index') }}"><i class="fa fa-crosshairs"></i>{{ __('shop::app.header.cart') }}</a></li>
                            {{-- <li><a href="cart.html"><i class="fa fa-shopping-cart"></i> Cart</a></li> --}}
                            <li><a href="{{ route('customer.session.destroy') }}"><i class="fa fa-sign-out"></i>{{ __('shop::app.header.logout') }}</a></li>
                            @endauth
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-middle-->

    <!-- <div class="header-bottom">
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="mainmenu pull-left">
                        <ul class="nav navbar-nav collapse navbar-collapse">
                            <li><a href="index.html" class="active">Home</a></li>
                            <li><a href="#">Men</a></li>
                            <li><a href="#">Women</a></li>
                            <li><a href="#">Kids</a></li>
                            
                        
                            <li class="dropdown"><a href="#">Other<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="blog.html">Other List</a></li>
                                    <li><a href="blog-single.html">Cuples Tshirts</a></li>
                                    <li><a href="blog-single.html">Wedding Dress</a></li>
                                </ul>
                            </li> 
                            
                            
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="search_box pull-right">
                        <input type="text" placeholder="Search"/>
                    </div>
                </div>
            </div>
        </div>
    </div> --><!--/header-bottom-->
</header><!--/header-->
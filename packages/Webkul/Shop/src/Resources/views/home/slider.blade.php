{{-- <section class="slider-block">
    <image-slider :slides='@json($sliderData)' public_path="{{ url()->to('/') }}"></image-slider>
</section> --}}

<section id="slider" style="overflow: hidden;"><!--slider-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#slider-carousel" data-slide-to="1"></li>
                        <li data-target="#slider-carousel" data-slide-to="2"></li>
                        <li data-target="#slider-carousel" data-slide-to="3"></li>
                    </ol>
                    
                    <div class="carousel-inner">
                        <div class="item item-slide-01 active">
                            <div class="col-sm-6" >
                                <h1>SWANKY</h1>
                                <h2 style="color: white;">New Arival with Good Price</h2>
                                <p style="color: white;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                <button type="button" class="btn btn-default get">Get it now</button>
                            </div>
                            <div class="col-sm-6">
                                
                            </div>
                        </div>
                        <div class="item item-slide-02">
                            <div class="col-sm-6">
                                <!-- <h1><span>SWA</span>NKY</h1>
                                <h2>Best Offers Today</h2> -->									
                                <!-- <button type="button" class="btn btn-default get">Get it now</button> -->
                            </div>
                    
                        </div>
                        <div class="item">
                            <div class="col-sm-6">
                                <h1><span>SWA</span>NKY</h1>
                                <h2>75% off this Weekend</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                <button type="button" class="btn btn-default get">Get it now</button>
                            </div>
                            <div class="col-sm-6">
                                <img src="{{ bagisto_asset('images/home/girl2.png') }}" class="girl img-responsive" alt="" />
                                <!-- <img src="images/home/pricing.png"  class="pricing" alt="" /> -->
                            </div>
                        </div>
                        
                        <div class="item">
                            <div class="col-sm-6">
                                <h1><span>SWA</span>NKY</h1>
                                <h2>New Arival with Good Price</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                <button type="button" class="btn btn-default get">Get it now</button>
                            </div>
                            <div class="col-sm-6">
                                <img src="{{ bagisto_asset('images/home/girl3.png') }}" class="girl img-responsive" alt="" />
                                <!-- <img src="images/home/pricing.png" class="pricing" alt="" /> -->
                            </div>
                        </div>
                        
                        
                    </div>
                    
                    <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>
                
            </div>
        </div>
    </div>
</section><!--/slider-->
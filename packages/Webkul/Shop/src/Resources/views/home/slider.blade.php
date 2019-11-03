<section id="slider" class="slider-block" style="overflow: hidden;"><!--slider-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <image-slider :slides='@json($sliderData)' public_path="{{ url()->to('/') }}"></image-slider>  
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--/slider-->
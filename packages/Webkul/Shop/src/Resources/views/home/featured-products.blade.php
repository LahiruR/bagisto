@if (app('Webkul\Product\Repositories\ProductRepository')->getFeaturedProducts()->count())
    <section class="featured-products">

        <div class="featured-heading">
            {{ __('shop::app.home.featured-products') }}<br/>

            <span class="featured-seperator" style="color:lightgrey;">_____</span>
        </div>

        <div class="row">
            <div class="col-sm-3">
                    <div class="featured-grid product-grid-4">
                        @foreach (app('Webkul\Product\Repositories\ProductRepository')->getFeaturedProducts() as $productFlat)
            
                            @include ('shop::products.list.card', ['product' => $productFlat])
            
                        @endforeach
            
                    </div>
            </div>
            <div class="col-sm-3">
                    <div class="featured-grid product-grid-4">
                        @foreach (app('Webkul\Product\Repositories\ProductRepository')->getFeaturedProducts() as $productFlat)
            
                            @include ('shop::products.list.card', ['product' => $productFlat])
            
                        @endforeach
            
                    </div>
            </div>
            <div class="col-sm-3">
                    <div class="featured-grid product-grid-4">
                        @foreach (app('Webkul\Product\Repositories\ProductRepository')->getFeaturedProducts() as $productFlat)
            
                            @include ('shop::products.list.card', ['product' => $productFlat])
            
                        @endforeach
            
                    </div>
            </div>
            <div class="col-sm-3">
                    <div class="featured-grid product-grid-4">
                        @foreach (app('Webkul\Product\Repositories\ProductRepository')->getFeaturedProducts() as $productFlat)
            
                            @include ('shop::products.list.card', ['product' => $productFlat])
            
                        @endforeach
            
                    </div>
            </div>
        </div>
    </section>
@endif
{!! view_render_event('bagisto.shop.products.list.card.before', ['product' => $product]) !!}

{{-- <div class="product-card product-image-wrapper">

    <div class="single-products">
        <div class="productinfo text-center">
                @inject ('productImageHelper', 'Webkul\Product\Helpers\ProductImage')

                @php 
                    $productBaseImage = $productImageHelper->getProductBaseImage($product);
                @endphp    
            
                @if ($product->new)
                    <div class="sticker new">
                        {{ __('shop::app.products.new') }}
                    </div>
                @endif
            
                <div class="product-image"> 
                     <a href="{{ route('shop.products.index', $product->url_key) }}" title="{{ $product->name }}"> --}}
                        {{-- <img src="{{ $productBaseImage['medium_image_url'] }}" onerror="this.src='{{ asset('vendor/webkul/ui/assets/images/product/meduim-product-placeholder.png') }}'"/>
                    </a>
                    @include ('shop::products.price', ['product' => $product])
                    <div class="product-name">
                        <a href="{{ url()->to('/').'/products/' . $product->url_key }}" title="{{ $product->name }}">
                            <span>
                                {{ $product->name }}
                            </span>
                        </a>
                    </div>
                    @include('shop::products.add-buttons', ['product' => $product])
            
                </div>
      </div>
    </div> 
</div> --}}

<div class="col-sm-4">
    <div class="product-image-wrapper">
            <div class="single-products">
            <div class="productinfo text-center">

                @inject ('productImageHelper', 'Webkul\Product\Helpers\ProductImage')

                @php 
                    $productBaseImage = $productImageHelper->getProductBaseImage($product);
                @endphp

                <a href="{{ route('shop.products.index', $product->url_key) }}" title="{{ $product->name }}">
                    <img src="{{ $productBaseImage['medium_image_url'] }}" onerror="this.src='{{ asset('vendor/webkul/ui/assets/images/product/meduim-product-placeholder.png') }}'"/>
                </a>
                @include ('shop::products.price', ['product' => $product])
                <p>
                    <a href="{{ url()->to('/').'/products/' . $product->url_key }}" title="{{ $product->name }}">
                        {{ $product->name }}
                    </a>
                </p>  
                @include('shop::products.add-buttons', ['product' => $product])  
            </div>
            @if ($product->new)
                <img src="{{ bagisto_asset('images/home/new.png') }}" class="new" alt="" />
            @endif
          
            {{-- <div class="choose">
                    <ul class="nav nav-pills nav-justified">
                        <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                    </ul>
                </div>
             --}}
            {{-- <div class="product-overlay">
                <div class="overlay-content">
                    <p>Easy Polo Black Edition</p>
                    @include('shop::products.add-buttons', ['product' => $product])
                    <div class="choose">
                        <ul class="nav nav-pills nav-justified">
                            <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                        </ul>
                    </div>
                </div>
            </div>
             --}}
        </div>
    </div>        
</div>

{!! view_render_event('bagisto.shop.products.list.card.after', ['product' => $product]) !!}
{!! view_render_event('bagisto.shop.products.list.card.before', ['product' => $product]) !!}

<div class="product-card product-image-wrapper">

    <div class="single-products">
        <div class="productinfo text-center">
                @inject ('productImageHelper', 'Webkul\Product\Helpers\ProductImage')

                <?php $productBaseImage = $productImageHelper->getProductBaseImage($product); ?>
            
                @if ($product->new)
                    <div class="sticker new">
                        {{ __('shop::app.products.new') }}
                    </div>
                @endif
            
                {{-- <div class="product-image"> --}}
                    <a href="{{ route('shop.products.index', $product->url_key) }}" title="{{ $product->name }}">
                        <img src="{{ $productBaseImage['medium_image_url'] }}" onerror="this.src='{{ asset('vendor/webkul/ui/assets/images/product/meduim-product-placeholder.png') }}'"/>
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
            
                {{-- </div> --}}
        </div>
    </div>
</div>

{!! view_render_event('bagisto.shop.products.list.card.after', ['product' => $product]) !!}
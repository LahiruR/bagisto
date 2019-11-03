<div class="cart-wish-wrap">
    <form action="{{ route('cart.add', $product->product_id) }}" method="POST">
        @csrf
        <input type="hidden" name="product_id" value="{{ $product->product_id }}">
        <input type="hidden" name="quantity" value="1">
        <button class="btn btn-lg btn-default addtocart add-to-cart" {{ $product->isSaleable() ? '' : 'disabled' }}><i class="fa fa-shopping-cart"></i> {{ __('shop::app.products.add-to-cart') }}</button>
    </form>

    @include('shop::products.wishlist')
</div>  
{!! view_render_event('bagisto.shop.products.price.before', ['product' => $product]) !!}

<h2>
    {!! $product->getTypeInstance()->getPriceHtml() !!}
</h2>

{!! view_render_event('bagisto.shop.products.price.after', ['product' => $product]) !!}
@php
	$categories = [];

	foreach (app('Webkul\Category\Repositories\CategoryRepository')->getHomeCategoryTree(core()->getCurrentChannel()->root_category_id) as $category) {
		if ($category->slug)
			array_push($categories, $category);
	}
@endphp

@if (sizeof($categories) > 0)
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-12 padding-right">
					<div class="features_items"><!--features_items-->						
						@foreach ($categories as $cat)
							<div class="col-sm-3">
								<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="{{ bagisto_asset('storage/'.$cat->image) }}" alt="" />										
												<a style="color:black;" class="btn" href="{{'categories/'. $cat->slug }}" target="_blank">
													<h3>{{$cat->name}}</h3>
												</a>	
											</div>
										</div>
										{{-- ./single-products --}}
								</div>
								{{-- ./product-image-wrapper --}}
							</div>
							{{-- ./col-sm-3 --}}
						@endforeach
				</div>
			</div>
		</div>
	</section>		
@endif

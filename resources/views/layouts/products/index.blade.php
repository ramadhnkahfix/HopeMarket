@extends('layouts.app')

@section('content')
<div class="shop-page-wrapper shop-page-padding">
	<div class="container-fluid">
		<div class="row pt-4">
			<div class="col-lg-3">
				@include('layouts.products.sidebar')
			</div>
			<div class="col-lg-9">
				<div class="shop-product-wrapper res-xl">
					<div class="shop-bar-area">
						<div class="shop-bar pb-60">
							<div class="shop-found-selector">
								<!-- <div class="shop-found">
									<p><span></span> Product Found of <span>50</span></p>
								</div>
								<div class="shop-selector">
									<label>Sort By : </label>
									<select name="select">
										<option value="">Default</option>
										<option value="">A to Z</option>
										<option value=""> Z to A</option>
										<option value="">In stock</option>
									</select>
								</div> -->
							</div>
							<div class="shop-filter-tab">
								<div class="shop-tab nav" role=tablist>
									<a class="active" href="#grid-sidebar3" data-toggle="tab" role="tab" aria-selected="false">
										<i class="ti-layout-grid4-alt"></i>
									</a>
									<a href="#grid-sidebar4" data-toggle="tab" role="tab" aria-selected="true">
										<i class="ti-menu"></i>
									</a>
								</div>
							</div>
						</div>
						<div class="shop-product-content tab-content">
							<div id="grid-sidebar3" class="tab-pane fade active show">
								@include('layouts.products.grid_view')
							</div>
							<div id="grid-sidebar4" class="tab-pane fade">
								@include('layouts.products.list_view')
							</div>
						</div>
					</div>
				</div>
				<div class="mt-50 text-center">
					{{ $products->links() }}
				</div>
			</div>
		</div>
	</div>
</div>
@include('layouts.includes.modals')
@endsection
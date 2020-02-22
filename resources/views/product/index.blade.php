@extends ('layout.layout')

@section ('content')
<div class="top-brands">
  <div class="container">
      <h3>Hot Offers</h3>
      <div class="agile_top_brands_grids">
          @foreach($products as $product)
              <div class="col-md-3 top_brand_left">
                  <div class="hover14 column">
                      <div class="agile_top_brand_left_grid">
                          <div class="tag"><img src="images/tag.png" alt=" " class="img-responsive" /></div>
                          <div class="agile_top_brand_left_grid1">
                              <figure>
                                  <div class="snipcart-item block" >
                                      <div class="snipcart-thumb">
                                          <a href="{!! route('product.show',$hot_product->id) !!}"><img width="150" height="150" title=" " alt=" " src="{!! $hot_product->image !!}" /></a>
                                          <p>{!! $product->title !!}</p>
                                          <h4>${!! $product->discount_price !!} <span>${!! $product->original_price !!}</span></h4>
                                      </div>
                                      <div class="snipcart-details top_brand_home_details">
                                          <a class="btn btn-primary" href="{!! route('cart.add',$product->id) !!}">Add to Cart</a>
                                      </div>
                                  </div>
                              </figure>
                          </div>
                      </div>
                  </div>
              </div>
          @endforeach



@endsection
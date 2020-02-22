@extends ('layout.layout')

@section ('content')
  <div class="container">
    <h3>Produits</h3>
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
                      <a href="{!! route('product.show',$product->id) !!}"><img width="150" height="150" title=" " alt=" " src="{!! $product->image !!}" /></a>
                      <p>{!! $product->title !!}</p>
                      <h4>${!! $product->discount_price !!} <span>${!! $product->original_price !!}</span></h4>
          
                      <div class="snipcart-details top_brand_home_details">
                        <a class="btn btn-primary" href="#">Add to Cart</a>
                      </div>
                    </div>
                  </div>
                </figure>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
      </div>
      </div>


@endsection
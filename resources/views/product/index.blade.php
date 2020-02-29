@extends ('layout.layout')

@section ('content')
<div class="album py-5 bg-light">
  <div class="container">
    <h3 class="text-center">Produits</h3>
    <div class="row">
      @foreach($products as $product)
      <div class="col-md-4">
        <div class="card mb-4 shadow-sm">

          <div class="bd-placeholder-img card-img-top"><img src="images/tag.png" alt=" " class="img-responsive" /></div>
            
            <div class="card-body" >
      
              <a href="{!! route('product.show',$product->id) !!}"><img width="150" height="150" title=" " alt=" " src="{!! $product->image !!}" /></a>
              <p class="card-text">{!! $product->title !!}</p>
              <h4>${!! $product->discount_price !!} <span>${!! $product->original_price !!}</span></h4>
            
              <div class="btn-group">
                <a class="btn btn-primary" href="#">Add to Cart</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    
      @endforeach
      
    </div>
  </div>
</div>

@endsection
@extends('index')

@section('konten')
@include('navigation')

    <div class="featured-page">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-12">
            <div class="section-heading">
              <div class="line-dec"></div>
              <h1>Featured Items</h1>
            </div>
          </div>
          <div class="col-md-8 col-sm-12">
            <div id="filters" class="button-group">
              <button class="btn btn-primary" data-filter="*">All Products</button>
              <button class="btn btn-primary" data-filter=".new">Newest</button>
              <button class="btn btn-primary" data-filter=".low">Best Seller</button>
              <button type="button" class="btn btn-primary position-relative"> 
                <a href="/shopcart"> 
                  <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                  </svg> 
                  <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                    99+
                  </span>
                </a>
              </button>
              <!--<a href="/shopcart"> <button class= "shop-cart"> <img src="assets/images/cart.png" style="max-width: 40px">
                <span class="badge">6</span> </button>
              </a><button class="btn btn-primary" data-filter=".high">Top Price</button>-->
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="featured container no-gutter">
        <div class="row posts">
            <div class="item new col-md-4">
              
            </div>
        </div>
    </div>

    <!-- Features -->
    @include('features')

@endsection
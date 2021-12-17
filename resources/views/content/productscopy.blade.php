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
            <div id="1" class="item new col-md-4">
              <a href="/single-product-jw1">
                <div class="featured-item">
                  <img src="assets/images/jw1_4.jpg" alt="Item 1">
                  <h4>Denim Ladies Light Blue</h4>
                  <h6>Rp 275,000</h6>
                </div>
              </a>
            </div>
            <div id="2" class="item high col-md-4">
              <a href="/single-product-jw2">
                <div class="featured-item">
                  <img src="assets/images/jw2_1.jpeg" alt="Item 2">
                  <h4>Denim Ladies Black</h4>
                  <h6>Rp 275,000</h6>
                </div>
              </a>
            </div>
            <div id="3" class="item low col-md-4">
              <a href="/single-product-hoodie">
                <div class="featured-item">
                  <img src="assets/images/hoodie1_1.jpeg" alt="Item 3">
                  <h4>Greyish Unisex Hoodie</h4>
                  <h6>Rp 350,000</h6>
                </div>
              </a>
            </div>
            <div id="4" class="item low col-md-4">
              <a href="/single-product-shoes">
                <div class="featured-item">
                  <img src="assets/images/s1_1.jpg" alt="Item 4">
                  <h4>Unisex Orange-Camo Shoes</h4>
                  <h6>Rp 500,000</h6>
                </div>
              </a>
            </div>
            <div id="5" class="item new high col-md-4">
              <a href="/single-product-sbag1">
                <div class="featured-item">
                  <img src="assets/images/t1_1.jpg" alt="Item 5">
                  <h4>Grey-Black SackBag</h4>
                  <h6>Rp 100,000</h6>
                </div>
              </a>
            </div>
            <div id="6" class="item new col-md-4">
              <a href="/single-product-sbag2">
                <div class="featured-item">
                  <img src="assets/images/t2_1.jpg" alt="Item 6">
                  <h4>Navy-Maroon SackBag</h4>
                  <h6>Rp 100,000</h6>
                </div>
              </a>
            </div>
            <div id="7" class="item new high col-md-4">
              <a href="/single-product-jacket">
                <div class="featured-item">
                  <img src="assets/images/jk1_1.jpeg" alt="Item 7">
                  <h4>Denim Sandwash Jacket</h4>
                  <h6>Rp 650,000</h6>
                </div>
              </a>
            </div>
            <div id="8" class="item low new col-md-4">
              <a href="/single-product-jm1">
                <div class="featured-item">
                  <img src="assets/images/jm1_1.jpeg" alt="Item 8">
                  <h4>Denim Light Grey</h4>
                  <h6>Rp 300,000</h6>
                </div>
              </a>
            </div>
            <div id="9" class="item new col-md-4">
              <a href="/single-product-jm2">
                <div class="featured-item">
                  <img src="assets/images/jm2_1.jpeg" alt="Item 9">
                  <h4>Denim Black</h4>
                  <h6>Rp 300,000</h6>
                </div>
              </a>
            </div>
        </div>
    </div>

    <!-- Features -->
    @include('features')

@endsection
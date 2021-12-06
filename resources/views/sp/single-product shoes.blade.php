@include('header')
@include('navigation')
    <!-- Page Content -->
    <!-- Single Starts Here -->
    <div class="single-product">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <div class="line-dec"></div>
              <h1>Single Product</h1>
            </div>
          </div>
          <div class="col-md-6">
            <div class="product-slider">
              <div id="slider" class="flexslider">
                <ul class="slides">
                  <li>
                    <img src="assets/images/s1_1.jpg" />
                  </li>
                  <li>
                    <img src="assets/images/s1_2.jpg" />
                  </li>
                  <li>
                    <img src="assets/images/s1_3.jpg" />
                  </li>
                  <li>
                    <img src="assets/images/s1_4.jpg" />
                  </li>
                  <!-- items mirrored twice, total of 12 -->
                </ul>
              </div>
              <div id="carousel" class="flexslider">
                <ul class="slides">
                  <li>
                    <img src="assets/images/thumb s1_1.jpg" />
                  </li>
                  <li>
                    <img src="assets/images/thumb s1_2.jpg" />
                  </li>
                  <li>
                    <img src="assets/images/thumb s1_3.jpg" />
                  </li>
                  <li>
                    <img src="assets/images/thumb s1_4.jpg" />
                  </li>
                  <!-- items mirrored twice, total of 12 -->
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-content">
              <h4>Unisex Orange-Camo Shoes</h4>
              <h6>Rp 500,000</h6>
              <p>Ultraboost is designed to flow with natural running motion and place you closer to the technology for maximum comfort and more energy return than ever before. Motion weave construction through the midfoot feels like a second skin, made of fused yarn that offers the perfect balance of support and flexibility. A new fusion method eliminates layers of adhesive, providing instant step in comfort and a direct connection to the seamless Primeknit upper and Boost midsole. A 3D heel frame allows for heel expansion and pressure distribution with each step. Finally, a re-engineered midsole enhances Boost technology with a 20% increase in energy return to fuel your run. </p>
              <span>20 left on stock</span>
              <form action="" method="get">
                <label for="quantity">Quantity:</label>
                <input name="quantity" type="quantity" class="quantity-text" id="quantity" 
                	onfocus="if(this.value == '1') { this.value = ''; }" 
                    onBlur="if(this.value == '') { this.value = '1';}"
                    value="1">
                <input type="submit" class="button" value="Order Now!">
              </form>
              <div class="down-content">
                <div class="categories">
                  <h6>Category: <span><a href="#">Shoes</a>,<a href="#">Unisex</a>,<a href="#">Lifestyle</a></span></h6>
                </div>
                <div class="share">
                <h6>Share: <span><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a><a href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></span></h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Single Page Ends Here -->


    @include('features')

    @include('footer')
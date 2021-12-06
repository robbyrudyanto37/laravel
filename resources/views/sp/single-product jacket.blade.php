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
                    <img src="assets/images/jk1_1.jpeg" />
                  </li>
                  <li>
                    <img src="assets/images/jk1_2.jpeg" />
                  </li>
                  <li>
                    <img src="assets/images/jk1_3.jpeg" />
                  </li>
                  <li>
                    <img src="assets/images/jk1_4.jpeg" />
                  </li>
                  <!-- items mirrored twice, total of 12 -->
                </ul>
              </div>
              <div id="carousel" class="flexslider">
                <ul class="slides">
                  <li>
                    <img src="assets/images/thumb jk1_1.jpg" />
                  </li>
                  <li>
                    <img src="assets/images/thumb jk1_2.jpg" />
                  </li>
                  <li>
                    <img src="assets/images/thumb jk1_3.jpg" />
                  </li>
                  <li>
                    <img src="assets/images/thumb jk1_4.jpg" />
                  </li>
                  <!-- items mirrored twice, total of 12 -->
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-content">
              <h4>Denim Sandwash Jacket</h4>
              <h6>Rp 650,000</h6>
              <p>15 OZ NON STRETCH DENIM <br>100% COTTON <br> REGULAR FIT JACKET</p>
              <span>10 left on stock</span>
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
                  <h6>Category: <span><a href="#">Jacket</a>,<a href="#">Unisex</a>,<a href="#">Lifestyle</a></span></h6>
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
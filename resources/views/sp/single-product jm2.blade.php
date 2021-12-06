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
                    <img src="assets/images/jm2_1.jpeg" />
                  </li>
                  <li>
                    <img src="assets/images/jm2_2.jpeg" />
                  </li>
                  <li>
                    <img src="assets/images/jm2_3.jpeg" />
                  </li>
                  <li>
                    <img src="assets/images/jm2_4.jpeg" />
                  </li>
                  <!-- items mirrored twice, total of 12 -->
                </ul>
              </div>
              <div id="carousel" class="flexslider">
                <ul class="slides">
                  <li>
                    <img src="assets/images/thumb jm2_1.jpg" />
                  </li>
                  <li>
                    <img src="assets/images/thumb jm2_2.jpg" />
                  </li>
                  <li>
                    <img src="assets/images/thumb jm2_3.jpg" />
                  </li>
                  <li>
                    <img src="assets/images/thumb jm2_4.jpg" />
                  </li>
                  <!-- items mirrored twice, total of 12 -->
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-content">
              <h4>Denim Black</h4>
              <h6>Rp 300,000</h6>
              <p>Skinny fit<br> 98% cotton<br>2% elastane<br> model height is 178cm, 73kg and wears size 32 </p>
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
                  <h6>Category: <span><a href="#">Pants</a>,<a href="#">Men</a>,<a href="#">Lifestyle</a></span></h6>
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
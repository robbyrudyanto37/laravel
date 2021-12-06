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
                    <img src="assets/images/hoodie1_1.jpeg" />
                  </li>
                  <li>
                    <img src="assets/images/hoodie1_2.jpeg" />
                  </li>
                  <li>
                    <img src="assets/images/hoodie1_3.jpeg" />
                  </li>
                  
                  <!-- items mirrored twice, total of 12 -->
                </ul>
              </div>
              <div id="carousel" class="flexslider">
                <ul class="slides">
                  <li>
                    <img src="assets/images/thumb hoodie1_1.jpg" />
                  </li>
                  <li>
                    <img src="assets/images/thumb hoodie1_2.jpg" />
                  </li>
                  <li>
                    <img src="assets/images/thumb hoodie1_3.jpg" />
                  </li>
                  
                  <!-- items mirrored twice, total of 12 -->
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-content">
              <h4>Greyish Unisex Hoodie</h4>
              <h6>Rp 350,000</h6>
              <p>mengunakan bahan FLEECE, dengan sablon depan belakang<br>
                 model mengunakan size M dengan berat 73KG
                <br>
                available size S/M/L <br>
              <span>27 left on stock</span>
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
                  <h6>Category: <span><a href="#">Hoodie</a>,<a href="#">Men</a>,<a href="#">Lifestyle</a></span></h6>
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
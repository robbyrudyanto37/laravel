@extends('index')
@section('konten')
@include('navigation')
   <!-- Banner Starts Here -->
    <div class="banner">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="caption">
                <h2>Selamat Datang di SmartShop!</h2>
                <div class="line-dec"></div>
                <p>SmartShop merupakan e-commerce <strong> terbesar no.1 di Indonesia. </strong> Menyediakan berbagai <a rel="nofollow" href="products"> produk </a> fashion yang dapat menemani setiap aktivitasmu. 
                <br><br>Harga bersahabat dengan kualitas unggulan. Hubungi SmartShop melalui sosial media kami di <a rel="nofollow" href="https://www.instagram.com"> Instagram </a> dan WA <a rel="nofollow" href="https://www.whatsapp.com/"> +62 81234567899 </a> </p>
                <div class="main-button">
                  <a href="products">Order Now!</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Banner Ends Here -->

<!-- Features -->
@include('features')

@endsection
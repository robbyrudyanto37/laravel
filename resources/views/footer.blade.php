    <!-- Footer Starts Here -->
    <div class="footer">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="logo">
                <img src="assets/images/new_logo.png" alt="">
              </div>
            </div>
  
            <div class="col-md-12">
              <div class="social-icons">
                <ul>
                  <li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a></li>
                  <li><a href="https://dashboard.rss.com/auth/sign-in/"><i class="fa fa-rss"></i></a></li>
                </ul>
              </div>
            </div>
  
  
      <!-- Bootstrap core JavaScript -->
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  
  
      <!-- Additional Scripts -->
      <script src="assets/js/custom.js"></script>
      <script src="assets/js/owl.js"></script>
      <script src="assets/js/isotope.js"></script>
      <script src="assets/js/flex-slider.js"></script>
  
  
      <script language = "text/Javascript"> 
        cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
        function clearField(t){                   //declaring the array outside of the
        if(! cleared[t.id]){                      // function makes it static and global
            cleared[t.id] = 1;  // you could use true and false, but that's more typing
            t.value='';         // with more chance of typos
            t.style.color='#fff';
            }
        }
      </script>
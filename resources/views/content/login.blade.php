@include('header')
<body>
    <a class="navbar-brand" href="/home"><img src="assets/images/new_logo.png" alt=""></a>
    <section class="login-clean">
        <form method="post">
            <h5 class="text-uppercase text-center" style="height: 46px;width: 240px;">
                <strong>Login</strong>
            </h5>
            <div class="illustration">
                <img src="assets/images/new_icon.png" style="padding-top: 0px;width: 85px;height: 85px;">
            </div>
            <div class="mb-3"><input class="form-control" type="email" name="email" placeholder="Email">
            </div>
            <div class="mb-3"><input class="form-control" type="password" name="password" placeholder="Password">
            </div>
            <div class="mb-3">
                <button class="btn btn-primary d-block w-100" type="submit">Log In</button>
            </div><a class="signup" href="/signup">Sign Up</a>
        </form>
    </section>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
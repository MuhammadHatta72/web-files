<nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0 sticky-top shadow-sm">
    <a href="/" class="navbar-brand p-0">
        <img src="{{ asset('assets/img/logo-tf.png') }}" alt="logo" class="img-fluid my-3" style="width: 250px" />
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">
            <a href="/" class="nav-item nav-link">Home</a>
            <a href="#about" class="nav-item nav-link">About</a>
            <a href="#choose" class="nav-item nav-link">Choose Me</a>
            <a href="#service" class="nav-item nav-link">Service</a>
            <a href="#blog" class="nav-item nav-link">Blog</a>
        </div>
        <a href="{{ url('login') }}" class="btn btn-info py-2 px-4 ms-3">LOGIN</a>
    </div>
</nav>

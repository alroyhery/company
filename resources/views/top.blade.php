<nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky sticky-dark">
    <div class="container-fluid">
        <!-- LOGO -->
        <a class="logo text-uppercase" href="index.html">
            <img src="{{ asset('assets/landingpage/img/logo-dig.png') }}" alt="" class="logo-light" height="24" />
            <img src="{{ asset('assets/landingpage/img/logo-digputih.png') }}" alt="" class="logo-dark" height="24" />
        </a>

        <!-- Mobile Toggle Button -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="mdi mdi-menu"></i>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
            <!-- Navigation Links -->
            <ul class="navbar-nav ms-auto" id="mySidenav"> 
                <li class="nav-item active">
                    <a href="{{ route('landing.home') }}" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('landing.about') }}" class="nav-link">About us</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('landing.service') }}" class="nav-link">Services</a>
                </li>
               
                <li class="nav-item">
                    <a href="{{ route('landing.contact') }}" class="nav-link">Contact</a>
                </li>
               
            </ul>

            <!-- Register Button -->
            <div class="ms-3 button-light">
                <button class="btn btn-sm btn-primary btn-rounded navbar-btn">Register</button>
            </div>
            <div class="ms-3 button-dark">
                <button class="btn btn-sm btn-primary btn-rounded navbar-btn">Register</button>
            </div>
        </div>
    </div>
</nav>

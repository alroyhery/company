@extends('app-landing')
@section('title', 'Service')
@section('content-landing')
<section class="bg-home " id="home" style="background-color: #1053F3; height:80%">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h2><em>Revolutionizing <strong>Finance</strong></em></h2>
                <h2><em><strong>Future Of</strong> Digital Banking</em></h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
            <div class="col-lg-6 phone-images">
                <img src="{{ asset('assets/landingpage/img/orang.png') }}" alt="Phone 1" class="img-fluid">
            </div>
        </div>
    </div>
    <!-- container-fluid end -->
    <div class="bg-pattern-effect">
        <img src="images/bg-pattern.png" alt="">
    </div>

</section>

<section class="container service-container">
    <h3>Our Service</h3>
    <div class="row align-items-center">
        <div class="col-md-6">
            <div class="service-item">
                <i class="fas fa-file-alt"></i>
                <div>
                    <h5>Lorem Ipsum</h5>
                    <p>Lorem ipsum dolor sit amet consectetur. Ultricies tellus enim molestie.</p>
                </div>
            </div>

            <div class="service-item">
                <i class="fas fa-list"></i>
                <div>
                    <h5>Lorem Ipsum</h5>
                    <p>Lorem ipsum dolor sit amet consectetur. Ultricies tellus enim molestie.</p>
                </div>
            </div>

            <div class="service-item">
                <i class="fas fa-users"></i>
                <div>
                    <h5>Lorem Ipsum</h5>
                    <p>Lorem ipsum dolor sit amet consectetur. Ultricies tellus enim molestie.</p>
                </div>
            </div>

            <div class="service-item">
                <i class="fas fa-chart-bar"></i>
                <div>
                    <h5>Lorem Ipsum</h5>
                    <p>Lorem ipsum dolor sit amet consectetur. Ultricies tellus enim molestie.</p>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="image-placeholder"></div>
        </div>
    </div>
</section>

<section class="container service-section">
    <h3>Lorem Ipsum</h3>
    <p class="service-description">Lorem ipsum dolor sit amet consectetur. Ultricies tellus enim molestie accumsan placerat pellentesque justo hendrerit.</p>
    
    <div class="service-card-container">
        <div class="service-card">
            <div class="service-icon-box">
                <img src="" alt="Icon 1"> <!-- Keep src empty for now -->
            </div>
            <div class="service-card-footer">Lorem Ipsum</div>
        </div>

        <div class="service-card">
            <div class="service-icon-box">
                <img src="" alt="Icon 2">
            </div>
            <div class="service-card-footer">Lorem Ipsum</div>
        </div>

        <div class="service-card">
            <div class="service-icon-box">
                <img src="" alt="Icon 3">
            </div>
            <div class="service-card-footer">Lorem Ipsum</div>
        </div>
    </div>
</section>

<div class="centered-image" >
    <img src="{{ asset('assets/landingpage/img/servicegambar.png') }}" alt="Mobile App" class="app-image img-fluid" style="width:80%">
</div>

<div class="centered-image" >
    <img src="{{ asset('assets/landingpage/img/gambarabout.png') }}" alt="Mobile App" class="app-image img-fluid" style="width:80%">
</div>

@endsection

@push('styles')
<style>
.navbar-custom {
  padding: 20px 0px;
  width: 100%;
  z-index: 999;
  background-color:transparent;
  margin-bottom: 0px;
  -webkit-transition: all 0.5s ease-in-out;
  transition: all 0.5s ease-in-out;
}

.navbar-custom .logo .logo-light {
  display: none;
}

.navbar-custom .logo .logo-dark {
  display: inline-block;
}

.navbar-custom  .button-light .btn-primary {
  display: none;
}

.navbar-custom .button-dark  .btn-primary{
  display: inline-block;
  background-color: #ffffff !important;
  border-color: #ffffff !important;
  color: #1053F3;
}

.navbar-custom .navbar-nav .nav-item .nav-link {
  line-height: 26px;
  color: #000000;
  -webkit-transition: all 0.4s;
  transition: all 0.4s;
  background-color: transparent !important;
  padding: 6px 10px;
  margin: 0 10px;
  font-size: 15px;
}

.navbar-custom .navbar-nav .nav-item .nav-link:hover, .navbar-custom .navbar-nav .nav-item .nav-link:active {
  color: #ffffff;
}

.navbar-custom .navbar-nav .nav-item.active .nav-link {
  color: #000000;
}

.navbar-toggler {
  font-size: 24px;
  margin-top: 5px;
  margin-bottom: 0px;
  color: #ffffff;
}

/*--- navbar sticky ---*/
.nav-sticky.navbar-custom {
  margin-top: 0px;
  padding: 10px 0px;
  background-color: #FFFFFF;
  transition: background-color 0.3s ease-in-out;
  -webkit-box-shadow: 0 10px 33px -14px rgba(0, 0, 0, 0.1);
          box-shadow: 0 10px 33px -14px rgba(0, 0, 0, 0.1);
}

.nav-sticky.navbar-custom .logo .logo-dark {
 display: none;
}

.nav-sticky.navbar-custom .logo .logo-light {
  display: inline-block;
}

.nav-sticky.navbar-custom  .button-dark .btn-primary {
  display: none;
}

.nav-sticky.navbar-custom  .button-light  .btn-primary{
  display: inline-block;
  background-color: #1053F3 !important;
  border-color: #1053F3 !important;
  color: #FFFFFF;
}

.nav-sticky.navbar-custom .navbar-nav .nav-item .nav-link {
  color: rgb(0, 0, 0);
}

.nav-sticky.navbar-custom .navbar-nav .nav-item .nav-link:hover, .nav-sticky.navbar-custom .navbar-nav .nav-item .nav-link:active {
  color: rgb(0, 0, 0);
}

.nav-sticky.navbar-custom .navbar-nav .nav-item.active .nav-link {
  color: rgb(0, 0, 0);
}
</style>
@endpush

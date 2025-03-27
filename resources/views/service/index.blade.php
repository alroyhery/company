@extends('app-landing')
@section('title', 'Service')
@section('content-landing')
<section class="bg-home " id="home" style="background-color: #1053F3">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h2><em>Revolutionizing <strong>Finance</strong></em></h2>
                <h2><em><strong>Future Of</strong> Digital Banking</em></h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
            <div class="col-lg-6 phone-images">
                <img src="{{ asset('assets/landingpage/img/orang.png') }}" alt="Phone 1" class="img-fluid">
                

                <!-- Floating Cards -->
                <div class="floating-card card-top">
                    <img src="https://cdn-icons-png.flaticon.com/512/1828/1828884.png" alt="Icon">
                    <span>Lorem Ipsum</span>
                </div>
                <div class="floating-card card-middle">
                    <img src="https://cdn-icons-png.flaticon.com/512/1828/1828884.png" alt="Icon">
                    <span>Lorem Ipsum</span>
                </div>
                <div class="floating-card card-bottom">
                    <img src="https://cdn-icons-png.flaticon.com/512/1828/1828884.png" alt="Icon">
                    <span>Lorem Ipsum</span>
                </div>
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
    <p>Lorem ipsum dolor sit amet consectetur. Ultricies tellus enim molestie.</p>
    
    <div class="service-card-container">
        <div class="service-card">
            <div class="service-icon-box">
                <i class="fas fa-cogs"></i>
            </div>
            <h5 class="mt-4">Lorem Ipsum</h5>
        </div>

        <div class="service-card">
            <div class="service-icon-box">
                <i class="fas fa-cogs"></i>
            </div>
            <h5 class="mt-4">Lorem Ipsum</h5>
        </div>

        <div class="service-card">
            <div class="service-icon-box">
                <i class="fas fa-cogs"></i>
            </div>
            <h5 class="mt-4">Lorem Ipsum</h5>
        </div>
    </div>
</section>

@endsection
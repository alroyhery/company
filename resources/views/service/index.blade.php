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
    
<section>

</section>

@endsection
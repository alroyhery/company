
@extends('app-landing')
@section('title', 'About Us')
@section('content-landing')
        <!-- home start -->
        <section class="bg-home bg-gradient" id="home">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <h2><em>Revolutionizing <strong>Finance</strong></em></h2>
                        <h2><em><strong>Future Of</strong> Digital Banking</em></h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                    <div class="col-lg-6 phone-images">
                        <img src="{{ asset('assets/landingpage/img/iPhone.png') }}" alt="Phone 1" class="img-fluid">
                        <img src="{{ asset('assets/landingpage/img/iPhone.png') }}" alt="Phone 2" class="img-fluid" style="position: absolute; right: 5%; bottom: -10%;">
        
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
        <!-- home end -->
        
        

        <!-- Services start -->
        <section class="section" id="services">
            <div class="container-fluid">
                <div class="container mt-5">
                    <div class="row align-items-center">
                        <!-- Image Grid -->
                        <div class="col-lg-6">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="image-placeholder large-image">
                                        <img src="" alt="Large Image" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-md-6 d-flex flex-column justify-content-between">
                                    <div class="image-placeholder small-image">
                                        <img src="" alt="Small Image 1" class="img-fluid">
                                    </div>
                                    <div class="image-placeholder small-image mt-3">
                                        <img src="" alt="Small Image 2" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                
                        <!-- Text Content -->
                        <div class="col-lg-6">
                            <h2>Digital Inti Sejahtera</h2>
                            <p>
                                Lorem ipsum dolor sit amet consectetur. Ultricies tellus enim molestie 
                                accumsan placerat pellentesque justo hendrerit. Sed vitae vel lacus 
                                ut a. Bibendum ultricies et faucibus euismod nullam nulla amet morbi. 
                                Sed neque. Lorem ipsum dolor sit amet consectetur. Ultricies tellus enim 
                                molestie accumsan placerat pellentesque justo hendrerit. Sed vitae vel lacus 
                                ut a. Bibendum ultricies et faucibus euismod nullam nulla amet morbi.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- container-fluid end -->
        </section>
        <!-- Services end -->

        <!-- Features start -->
       <section>
        <div class="container mt-5">
            <h2 class="mb-4">Manajemen & Direksi</h2>
            <div class="row text-center">
                <div class="col-md-3">
                    <div class="image-placeholder">
                        <img src="" alt="Team Member 1" class="img-fluid">
                    </div>
                    <div class="team-member">
                        <h4>Lorem Ipsum</h4>
                        <p>Lorem ipsum dolor sit amet consectetur. Ultricies tellus enim molestie accumsan placerat pellentesque.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="image-placeholder">
                        <img src="" alt="Team Member 2" class="img-fluid">
                    </div>
                    <div class="team-member">
                        <h4>Lorem Ipsum</h4>
                        <p>Lorem ipsum dolor sit amet consectetur. Ultricies tellus enim molestie accumsan placerat pellentesque.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="image-placeholder">
                        <img src="" alt="Team Member 3" class="img-fluid">
                    </div>
                    <div class="team-member">
                        <h4>Lorem Ipsum</h4>
                        <p>Lorem ipsum dolor sit amet consectetur. Ultricies tellus enim molestie accumsan placerat pellentesque.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="image-placeholder">
                        <img src="" alt="Team Member 4" class="img-fluid">
                    </div>
                    <div class="team-member">
                        <h4>Lorem Ipsum</h4>
                        <p>Lorem ipsum dolor sit amet consectetur. Ultricies tellus enim molestie accumsan placerat pellentesque.</p>
                    </div>
                </div>
            </div>
        </div>
       </section>
        <!-- Features end -->

        <div class="centered-image" >
            <img src="{{ asset('assets/landingpage/img/gambarabout.png') }}" alt="Mobile App" class="app-image img-fluid" style="width:80%">
        </div>

        <!-- available demos start -->
       
        <!-- footer end -->

      

        <!-- Javascript -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/jquery.easing.min.js"></script>
        <script src="js/scrollspy.min.js"></script>

        <!-- owl-carousel -->
        <script src="js/owl.carousel.min.js"></script>

        <!-- custom js -->
        <script src="js/app.js"></script>
@endsection
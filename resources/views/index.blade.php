@extends('app-landing')
@section('title', 'Contact')
@section('content-landing')

    <div class="container finance-section" style="padding-top:100px">
        <div class="row align-items-center">
            <!-- Text Section -->
            <div class="col-md-6">
                <h2><em>Revolutionizing</em></h2>
                <h2><strong><em>Finance Future Of</em></strong></h2>
                <h2>Digital Banking</h2>
                <p>
                    Explore how digital banking is transforming the financial world, offering unprecedented convenience,
                    security, and efficiency. From mobile banking apps to blockchain technology, this comprehensive guide
                    delves into the future of finance.
                </p>
            </div>

            <!-- Image Section -->
            <div class="col-md-6 finance-img-container">
                <img class="hp img-fluid custom-img" src="{{ asset('assets/landingpage/img/image.png') }}" alt="Phone Mockup 1"
                    class="finance-img">
            </div>
        </div>
    </div>


    <div class="container reason">
        <section class="container my-5">
            <h2 class="text-center mb-4">Mengapa Digis?</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="card text-center  text-white" style="background: #1053F3">
                        <div class="card-body">Lorem Ipsum</div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card text-center  text-white" style="background: #1053F3">
                        <div class="card-body">Lorem Ipsum</div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card text-center  text-white" style="background: #1053F3">
                        <div class="card-body">Lorem Ipsum</div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card text-center  text-white" style="background: #1053F3">
                        <div class="card-body">Lorem Ipsum</div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="container data">
        <div class="container my-5">
            <h3 class="fw-bold">Data Terkini</h3>
            <div class="row text-center mt-4">
                <!-- First Column -->
                <div class="col-md-3">
                    <img src="" alt="Icon 1" class="img-fluid mb-2">
                    <p class="stat-title">Jumlah <strong>Pendana Aktif</strong></p>
                    <div class="stat-card">
                        <p class="stat-value">102300</p>
                        <div class="separator"></div>
                        <p class="stat-subtext">Sejak Berdiri</p>
                    </div>
                </div>
                <!-- Second Column -->
                <div class="col-md-3">
                    <img src="" alt="Icon 2" class="img-fluid mb-2">
                    <p class="stat-title">Jumlah <strong>Penerima Pembiayaan</strong></p>
                    <div class="stat-card">
                        <p class="stat-value">102300</p>
                        <div class="separator"></div>
                        <p class="stat-subtext">Sejak Berdiri</p>
                    </div>
                </div>
                <!-- Third Column -->
                <div class="col-md-3">
                    <img src="" alt="Icon 3" class="img-fluid mb-2">
                    <p class="stat-title">Akumulasi <strong>Pembiayaan</strong></p>
                    <div class="stat-card">
                        <p class="stat-value">102300</p>
                        <div class="separator"></div>
                        <p class="stat-subtext">Sejak Berdiri</p>
                    </div>
                </div>
                <!-- Fourth Column -->
                <div class="col-md-3">
                    <img src="" alt="Icon 4" class="img-fluid mb-2">
                    <p class="stat-title">Total <strong>Outstanding Pembiayaan</strong></p>
                    <div class="stat-card">
                        <p class="stat-value">102300</p>
                        <div class="separator"></div>
                        <p class="stat-subtext">Sejak Berdiri</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="container gradient-bg">
        <div class="row align-items-center">
            <!-- Left Image -->
            <div class="col-md-6 text-center">
                <img src="{{ asset('assets/landingpage') }}" alt="Credit Cards" class="img-fluid">
            </div>
            <!-- Right Content -->
            <div class="col-md-6">
                <h2 class="fw-bold">Simple & fast payment</h2>
                <p>Use receiving accounts in a growing number of currencies and get paid like a local. Pay freelancers and
                    customers anywhere in the world straight.</p>
                <p class="testimonial">“Transferring is very easy and super fast. I find a different way from Coca Pay.
                    Perfect payment app for all!”</p>
                <div class="d-flex align-items-center">
                    <div class="me-3">
                        <img src="" alt="Profile Picture" class="rounded-circle" width="40" height="40">
                    </div>
                    <div>
                        <p class="testimonial-author mb-0">Jesica Azalea</p>
                        <p class="author-role">Director of Technology, Sans Bothers</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Partners Section -->
    <div class="container text-center mt-5">
        <h3 class="fw-bold">Mitra Kami</h3>
        <div class="row mt-3">
            <div class="col-md-2 col-4">
                <img src="" alt="Partner 1" class="partner-logo img-fluid">
            </div>
            <div class="col-md-2 col-4">
                <img src="" alt="Partner 2" class="partner-logo img-fluid">
            </div>
            <div class="col-md-2 col-4">
                <img src="" alt="Partner 3" class="partner-logo img-fluid">
            </div>
            <div class="col-md-2 col-4">
                <img src="" alt="Partner 4" class="partner-logo img-fluid">
            </div>
            <div class="col-md-2 col-4">
                <img src="" alt="Partner 5" class="partner-logo img-fluid">
            </div>
        </div>
    </div>

    <div class="container faq-container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h2 class="faq-title"><span>Frequently</span> Asked Questions</h2>
                <div class="faq-box">How do I sign up for a digital banking account?</div>
                <div class="faq-box">What services are available through digital banking?</div>
                <div class="faq-box">What should I do if I suspect fraud on my account?</div>
            </div>
            <div class="col-md-6 text-center">
                <img src="" alt="FAQ Image" class="faq-image">
            </div>
        </div>
    </div>

    <!-- Challenges in Digital Banking -->
    <div class="container mt-5">
        <div class="row align-items-center">
            <div class="col-md-6 text-center">
                <img src="" alt="Challenges Image" class="img-fluid">
            </div>
            <div class="col-md-6">
                <h3>Challenges In <span class="highlight">Digital Banking</span></h3>
                <p>
                    <span class="highlight">Digital banking has revolutionized the financial services</span>
                    offering convenience and accessibility.
                </p>
                <a href="#" class="text-dark fw-bold">Learn More →</a>
                <hr>
                <p>
                    <span class="highlight">Digital banking has revolutionized the financial services</span>
                    offering convenience and accessibility.
                </p>
                <a href="#" class="text-dark fw-bold">Learn More →</a>
            </div>
        </div>
    </div>

    <!-- Mobile Banking App -->
    <div class="container mt-5">
        <div class="row align-items-center">
            <div class="col-md-1">
                <div class="icon-button">
                    →
                </div>
            </div>
            <div class="col-md-5">
                <h5>Mobile Banking App</h5>
                <p>Stay connected with your finances using our app.</p>
            </div>
            <div class="col-md-6">
                <p>
                    <span class="highlight">Digital banking has revolutionized the financial services</span>
                    offering convenience and accessibility.
                </p>
                <a href="#" class="text-dark fw-bold">Learn More →</a>
            </div>
        </div>
    </div>


    <div class="centered-image">
        <img src="{{ asset('assets/landingpage/img/grouphp.png') }}" alt="Mobile App" class="app-image img-fluid">
    </div>



    @push('js')
    @endpush
@endsection

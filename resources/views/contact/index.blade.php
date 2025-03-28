@extends('app-landing')
@section('title', 'Contact')
@section('content-landing')


<section class="bg-home " id="home">
    <div class="container contact-section">
        <h3>Contact Us</h3>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
    
        <!-- Google Map Embed -->
        <div class="map-container" style="width: 100%; height: 350px; margin-top: 20px;">
            <iframe 
                width="100%" 
                height="100%" 
                style="border:0; border-radius: 10px;" 
                loading="lazy" 
                allowfullscreen 
                referrerpolicy="no-referrer-when-downgrade"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.371238607633!2d106.8166357749376!3d-6.215052860702465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3e09701bb0b%3A0x4b714b8c637f4!2sJl.%20Kemang%20Raya%20No.4%2C%20RT.11%2FRW.1%2C%20Bangka%2C%20Kec.%20Mampang%20Prpt.%2C%20Kota%20Jakarta%20Selatan%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2012730!5e0!3m2!1sen!2sid!4v1711400000000">
            </iframe>
        </div>
    
        <!-- Contact Info -->
        <div class="contact-info">
            <div>
                <h5>Email</h5>
                <p>info@digisfunding.id</p>
            </div>
            <div>
                <h5>Phone</h5>
                <p>+62 812 3456 7890</p>
            </div>
            <div>
                <h5>Address</h5>
                <p>Jl. Kemang Raya No.4, RT.11/RW.1, Bangka, Kec. Mampang Prpt., Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12730</p>
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
                <div class="faq-box">What should I do if I suspect fraud on my account?</div>
                <div class="faq-box">What should I do if I suspect fraud on my account?</div>
            </div>
            <div class="col-md-6 text-center">
                <img src="{{ asset('assets/landingpage/img/orangtanganbuka.png') }}" alt="FAQ Image" class="faq-image">
            </div>
        </div>
    </div>

</section>

@endsection
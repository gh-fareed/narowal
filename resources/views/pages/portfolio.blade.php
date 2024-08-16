@extends('layouts.master')
@section('content')
   
<div class="container">
    <div class="row mb-md-3">
        <div class="col-12 my-4">
            <h1 class="text-center heading mt-3">Our Portfolio</h1>
            <p class="text-center">________________</p>
        </div>
        
        <div class="col-md-4 mb-3 text-center ">
            <div class="col-12">
                <img src="{{ asset('images/hopes.jpg') }}" class="img-fluid" alt="Your Immigration Journey Starts Here">
                <h4 class="heading my-3">Your Immigration Journey Starts Here</h4>
                <p>Embark on the path to a brighter future with Hopes Immigration. Our team of experts is dedicated to guiding you through every step of the immigration process, ensuring a smooth and successful transition to your dream destination.</p>
            </div>
        </div>

        <div class="col-md-4 mb-3  text-center">
            <div class="col-12">
                <img src="{{ asset('images/hopes 1.jpg') }}" class="img-fluid" alt="Tailored Solutions for Your Dreams">
                <h4 class="heading my-3">Tailored Solutions for Your Dreams</h4>
                <p>At Hopes Immigration, we understand that your immigration goals are unique. That's why we offer personalized solutions designed to match your aspirations, whether it's studying abroad, reuniting with family, or pursuing a new career overseas.</p>
            </div>
        </div>

        <div class="col-md-4 mb-3  text-center">
            <div class="col-12">
                <img src="{{ asset('images/hopes3.jpg') }}" class="img-fluid" alt="Global Expertise">
                <h4 class="heading my-3">Global Expertise</h4>
                <p>With a global network of immigration experts and a commitment to local support, Hopes Immigration offers the perfect blend of international experience and personalized, locally-focused assistance. Rest assured, you're in good hands.</p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4 mb-3  text-center">
            <div class="col-12">
                <img src="{{ asset('images/hopes 4.jpg') }}" class="img-fluid" alt="Your Success Stories, Our Pride">
                <h4 class="heading my-3">Your Success Stories, Our Pride</h4>
                <p>Explore our gallery of success stories where dreams turned into reality. Join the ranks of our satisfied clients who have successfully settled in their dream countries with the help of Hopes Immigration.</p>
            </div>
        </div>

        <div class="col-md-4 mb-3  text-center">
            <div class="col-12">
                <img src="{{ asset('images/hopes 5.jpg') }}" class="img-fluid" alt="Seamless Visa Processing">
                <h4 class="heading my-3">Seamless Visa Processing</h4>
                <p>Leave the complexities of visa processing to us. Our team ensures your application is complete, accurate, and submitted on time, giving you peace of mind as you plan your journey.</p>
            </div>
        </div>

        <div class="col-md-4 mb-3  text-center">
            <div class="col-12">
                <img src="{{ asset('images/hopes 6.jpg') }}" class="img-fluid" alt="Unlock Opportunities Worldwide">
                <h4 class="heading my-3">Unlock Opportunities Worldwide</h4>
                <p>Unlock a world of opportunities with Hopes Immigration. We specialize in immigration to countries like the USA, Australia, Canada, the UK, and more, opening doors to a life filled with possibilities.</p>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-12 py-5 p-back d-flex justify-content-center">
            <h2 class="text-light">WELCOME TO OUR IMMIGRATION COMPANY</h2>
            <a href="/contact-us" class="btn btn-secondary mx-4 rounded-5 pt-2">GET A QUOTE</a>
        </div>
    </div>
</div>
@endsection
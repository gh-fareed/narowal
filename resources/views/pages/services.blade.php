@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row">
        <h1 class="text-center mt-4  mb-5">Our Services</h1>
        <div class="col-md-4 mb-3">
            <div class="col-12">
                <div class="icon d-flex justify-content-center mb-3">
                    <i class="fa-solid fa-suitcase" style="font-size: 50px;"></i>
                </div>
                <h2 class="text-center heading">Immigration</h2>
                <p class="text-center">Our experienced team will assist you in navigating the complex immigration processes, ensuring your application is accurate and timely.</p>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="col-12">
                <div class="icon d-flex justify-content-center mb-3">
                    <i class="fa-regular fa-address-card" style="font-size: 50px;"></i>
                </div>
                <h2 class="text-center heading">Permanent Residency(PR)</h2>
                <p class="text-center">We help you secure permanent residency status in your dream country, giving you the stability and benefits of a long-term resident.</p>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="col-12">
                <div class="icon d-flex justify-content-center mb-3">
                    <i class="fa-solid fa-globe" style="font-size: 50px;"></i>
                </div>
                <h2 class="text-center heading">Visit Visa</h2>
                <p class="text-center">Explore new destinations with ease. We facilitate hassle-free visit visa applications, making your travel plans a reality.</p>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="col-12">
                <div class="icon d-flex justify-content-center mb-3">
                    <i class="fa-regular fa-keyboard" style="font-size: 50px;"></i>
                </div>
                <h2 class="text-center heading">Job Visa</h2>
                <p class="text-center">Unlock international career opportunities. We assist you in obtaining the right work visa for your dream job abroad.</p>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="col-12">
                <div class="icon d-flex justify-content-center mb-3">
                    <i class="fa-solid fa-wallet" style="font-size: 50px;"></i>
                </div>
                <h2 class="text-center heading">Work Permit</h2>
                <p class="text-center">Seamlessly transition into the workforce of your chosen country with our expert guidance on work permit applications.</p>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="col-12">
                <div class="icon d-flex justify-content-center mb-3">
                    <i class="fa-solid fa-pencil" style="font-size: 50px;"></i>
                </div>
                <h2 class="text-center heading">Study Visa</h2>
                <p class="text-center">Achieve your educational aspirations. We simplify the process of obtaining study visas, ensuring you have a smooth entry into your chosen academic institution.</p>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid mt-4">
    <div class="row">
        <div class="col-md-6 px-0">
            <img src="{{ asset('images/portfolio7.png') }}" alt="" style="width:100%;height:100%;">
        </div>
        <div class="col-md-6 d-flex justify-content-center flex-column px-5 padding-container" 
     style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), 
             url('images/reviews-bg.jpg'); background-size: cover; background-position: center;background-attachment: fixed;">
    <h4 class="px-5 text-light">JOIN US TODAY</h4>
    <p class="px-5 text-light">EXPLORE ENDLESS OPPORTUNITIES, NAVIGATE THE IMMIGRATION PROCESS WITH EASE, AND MAKE YOUR DREAMS A REALITY. LET'S UNITE YOUR ASPIRATIONS WITH THE WORLD OF POSSIBILITIES.</p>
    <a href="#" class="btn btn-primary w-25 mx-5">Contact Us</a>
</div>

    </div>
</div>
@endsection
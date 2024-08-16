@extends('layouts.master')
@section('content')
<div class="container-fluid d-flex justify-content-center align-items-center flex-column" style="height: 60vh;background-image:url('images/c-landing.jpg');background-position:top;background-size:cover;background-repeat:no-repeat;">
    <h1 class="text-center">Contact Us Now</h1>
    <p class="text-center">Feel free to reach out to us through your preferred contact method.</p>
</div>
<div class="container my-5">
    <div class="row contact-top">
        <div class="col-md-3 mx-md-5 d-flex justify-content-center align-items-center flex-column border border-1 p-3 ">
            <div class="icon mb-3">
                <i class="fa-solid fa-location-dot" style="font-size: 70px;"></i>
            </div>
            <h3>Office Address</h3>
            <p>House No: 1, Near LACAS School Girls Campus Gate No: 2 Ali Town Raiwind Road Thoker Niaz Baig Lahore.</p>
        </div>
        <div class="col-md-3 mx-md-5 d-flex justify-content-center align-items-center flex-column border border-1 p-3">
            <div class="icon mb-3">
                <i class="fa-solid fa-phone" style="font-size: 70px;"></i>
            </div>
            <h3>Contact Number</h3>
            <p class="mb-0">+92 42 35919710  </p>
            <p>+92 300 1043101</p>
        </div>
        <div class="col-md-3 mx-md-5 d-flex justify-content-center align-items-center flex-column border border-1 p-3">
            <div class="icon mb-3">
                <i class="fa-solid fa-envelope" style="font-size: 70px;"></i>
            </div>
            <h3>Email</h3>
            <p>info@narowalmanpower.com</p>
        </div>
    </div>
    <div class="row mt-5">
        <h2 class="text-center mb-3">Ask for any Queries and Information</h2>
        <form action="{{ route('contact.submit') }}" method="POST" class="row">
            @csrf
            <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" placeholder="Enter your name">
            </div>
            <div class="form-group col-md-6">
                <input type="text" name="email" class="form-control" placeholder="Enter your email">
            </div>
            <div class="form-group col-md-12 mt-3">
                <input type="text" name="subject" class="form-control" placeholder="Enter your Subject">
            </div>
            <div class="form-group col-md-12 mt-3">
                <textarea class="form-control" name="message" cols="30" rows="10" placeholder="Message"></textarea>
            </div>
            <button type="submit" class="btn btn-primary col-md-3 mx-2 mt-3">Submit</button>
        </form>
    </div>
</div>
<div class="container-fluid">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3403.2402632701396!2d74.2412849872429!3d31.46257628358964!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39190220b0352be9%3A0xd44091a121f02cd9!2s2%20Ali%20Town%20Rd%2C%20Ali%20Town%20Lahore%2C%20Punjab%2C%20Pakistan!5e0!3m2!1sen!2s!4v1723198298876!5m2!1sen!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

@endsection
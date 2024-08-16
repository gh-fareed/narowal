@extends('layouts.master')
@section('content')
<div class="container-fluid mb-5" data-aos="fade-down"
data-aos-easing="linear"
data-aos-duration="1100">
    <div class="row">
        <div class="col-12 about-landing" style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('images/about-landing.webp');background-repeat:no-repeat;background-size:cover;background-position:center;" >
            <div class="container">
                <h1 class="text-light text-center mt-5 text-shadow">About Us</h1>
                <p class="text-light text-shadow">Narowal Manpower is a distinguished manpower and recruitment consultancy, committed to delivering exceptional results for our clients through a dedicated approach.Narowal Manpower was founded and led by its Chief Executive Officer, Mr. Mirza Muhammad Shahzad. With extensive experience in Marketing and Human Resources Management, Mr. Shahzad brings invaluable expertise to the organization.Narowal Manpower has established collaborations with numerous professional manpower and recruitment consultancies across various countries, including Pakistan, Bangladesh, and the UAE.Recognized as one of the premier names in the manpower and job placement sector, Narowal Manpower excels in delivering innovative and internationally acclaimed services to its clients with unwavering dedication.Our firm specializes in offering a comprehensive suite of services to our clients, encompassing permanent, temporary, and contract recruitment, skill testing, training and development, screening and interviewing. employee assessment and selection, overseas placement and development, as well as outsourcing and consulting.</p>   
            </div>
        </div> 
    </div>
</div>
<div class="container my-5">
    <div class="row">
        <div class="col-md-6" style="overflow: hidden"> 
            <div class="upper"><img src="{{ asset('images/ceo.jpeg') }}" alt=""></div>
            <div class="lower">
                <h2 class="text-light">Mirza Muhammad Shahzad</h2>
                <p class="text-light">CEO</p>
            </div>
        </div>
        <div class="col-md-6" style="border-left: 1px solid #0e4a6f">
            <h2>Message From The Ceo</h2>
            <p class="mt-3">We hereby take this opportunity to sincerely thank to all our existing and potential clients based in all over the middle east and as well as our educated and experienced candidates for your trust and co-operation for more than 10 years with Narowal Manpower. As a leading manpower company in Pakistan, our major commitment is to expand its capabilities. These capabilities include our expertise in successfully supplying high quality Pakistani manpower for the Construction, Engineering, Oil & Gas, Manufacturing, Agricultural, Information Technology, Mining, Retail, Hospitality, and Healthcare Sector. Narowal Manpower maintains highest standards of professionalism, ethics, trustworthiness and Dedication. Our well trained and experienced teams are

                committed to completing each assignment with
                
                speed and accuracy.
                
                We align ourselves with our clients as partners to assist
                
                them in achieving their goals and objectives.
                
                We assure you, this is the manpower and human resources Consultancy you should trust and can
                
                easily rely on. Best Wishes and regards,
                <br>
                
                Mirza Muhammad Shahzad
                <br>
                CEO</p>
        </div>
    </div>
</div>
<div class="container my-5" data-aos="fade-zoom-in"
data-aos-easing="ease-in-back"
data-aos-delay="300"
data-aos-offset="0">
    <div class="row">
        <div class="col-md-4 mb-md-0 mb-3">
            <div class="col-12 d-flex justify-content-center align-items-center flex-column rounded-4 py-4 cards">
                <div class="top d-flex justify-content-center align-items-center">
                    <i class="fa-solid fa-eye text-light" style="font-size:50px"></i>
                </div>
                <div class="bottom d-flex align-items-center flex-column mt-3 px-3">
                    <h4 class="text-light">Our Vision</h4>
                    <p class="text-light"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab est ratione ea atque fugiat, maxime obcaecati aliquid sint earum nesciunt.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-md-0 mb-3">
            <div class="col-12 d-flex justify-content-center align-items-center flex-column rounded-4 py-4 cards">
                <div class="top d-flex justify-content-center align-items-center">
                    <i class="fa-solid fa-bullseye text-light" style="font-size: 50px;"></i>
                </div>
                <div class="bottom d-flex align-items-center flex-column mt-3 px-3">
                    <h4 class="text-light">Our Mission</h4>
                    <p class="text-light"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab est ratione ea atque fugiat, maxime obcaecati aliquid sint earum nesciunt.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-md-0 mb-3">
            <div class="col-12 d-flex justify-content-center align-items-center flex-column rounded-4 py-4 cards">
                <div class="top d-flex justify-content-center align-items-center">
                    <i class="fa-solid fa-gem text-light" style="font-size: 50px;"></i>
                </div>
                <div class="bottom d-flex align-items-center flex-column mt-3 px-3">
                    <h4 class="text-light">Our Commitment</h4>
                    <p class="text-light"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab est ratione ea atque fugiat, maxime obcaecati aliquid sint earum nesciunt.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container my-5" data-aos="fade-up"
data-aos-anchor-placement="center-bottom">    
    <div class="row">
        <h2 class="text-center text-decoration-underline mb-4">Our Quality Policy</h2>
        <div class="col-md-6">
            
            <p>We recognize that the disciplines of quality are an integral part of our management function and view this as our primary responsibility for a good business practice. This high level of quality is achieved through adoption of a system of procedures that reflect the competence of our organization to clients, potential clients and workers. Achievement of this policy involves all staff, who are individually responsible for this quality of their work, resulting in a casually improving working environment for all.

                Narowal Overseas emphasize the need to meet and maintain all our quality
                
                expectations by: Continuously following the quality, value and reliability of service to our Clients and striving to meet and, where possible, exceed Client expectations, thereby maximizing total satisfaction. Enhancing the skills of management and staff through review and pursuing
                
                a standard training policy, the objective of which is to prepare staff to perform
                
                work more effectively and improve their professional skills.</p>
        </div>
        <div class="col-md-6">
            <img src="https://www.thecoresolution.com/wp-content/uploads/2020/06/Quality-policy-header.jpg" alt="" class="img-fluid" style="height: 100%">
        </div>
    </div>
</div>

@endsection
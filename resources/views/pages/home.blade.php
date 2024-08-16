@extends('layouts.master')
@section('content')
        <!-- Slider -->
        <div class="container-fluid p-0 position-relative">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <!-- Slide 1 -->
                    <div class="swiper-slide swiper-slide2" style="background-image: url('images/manpower.jpg');">
                        <div class="slide-content d-flex flex-column align-items-center">
                            <h2 class="slide-title">OUR VISION</h2>
                            <p class="slide-description text-center">Our vision is to be the guiding light for individuals and families seeking to explore new horizons and opportunities around the world.</p>
                        </div>
                    </div>
    
                    <!-- Slide 2 -->
                    <div class="swiper-slide swiper-slide2" style="background-image: url('images/network.jpeg');">
                        <div class="slide-content d-flex flex-column align-items-center">
                            <h2 class="slide-title">GET IN TOUCH</h2>
                            <p class="slide-description">Ready to take the first step toward your dream destination? Contact us today to schedule a consultation. Let's make your aspirations a reality together.</p>
                        </div>
                    </div>
    
                    <!-- Slide 3 -->
                    <div class="swiper-slide swiper-slide2" style="background-image: url('images/specialization.jpg');">
                        <div class="slide-content d-flex flex-column align-items-center">
                            <h2 class="slide-title">OUR COMMITMENT</h2>
                            <p class="slide-description">At Hopes Immigration, we are committed to your success. Our team of experienced professionals understands the complexities of immigration.</p>
                        </div>
                    </div>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
                <!-- Add Navigation -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>

        <!-- Service 5 - Bootstrap Brain Component -->
<section class="bg-light py-3 py-md-5 py-xl-8" >
    <div class="container overflow-hidden">
      <div class="row gy-4 gy-md-5 gy-lg-0 align-items-center">
        <div class="col-12 col-lg-5" data-aos="fade-right">
          <div class="row">
            <div class="col-12 col-xl-11">
              <h3 class="fs-6 text-secondary mb-3 mb-xl-4 text-uppercase">What We Offer?</h3>
              <h2 class="display-5 mb-3 mb-xl-4">Our Core Services</h2>
              <p class="mb-3 mb-xl-4">Narowal Manpower has a deep rooted understanding of the recruitment process. job competency requirement and efficient screening of the candidates from our well integrated process to match personality traits with the job role. Considering all the aspects, we arrive at candidate rating to help our clients position themselves better, prioritizing on selected candidates, optimize on time and thereby increase confidence in the overall process and the candidate rating.</p>
              <a href="/industries" class="btn bsb-btn-2xl btn-primary rounded-pill">More Details</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-7 overflow-hidden" data-aos="fade-left">
          <div class="row gy-4">
            <div class="col-12 col-sm-6">
              <img src="https://storage.googleapis.com/dialpad-cms.appspot.com/cms/blog/content/_800x439_crop_center-center_none/Customer-orientation-header.png" style="width:100%;object-fit:cover;height:200px" class="img-fluid">
              <div style="background:rgb(10 102 156 / 96%);">
                  <h5 class="py-4 text-center text-light">Customer Orientation</h5>
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <img src="https://media.istockphoto.com/id/1346944001/photo/close-up-of-co-workers-stacking-their-hands-together.jpg?s=612x612&w=0&k=20&c=lidJcFUSR3rkMt4B0yoNwH55lz3sth9o2280keqBXGE=" style="width:100%;object-fit:cover;height:200px" class="img-fluid">
              <div style="background:rgb(10 102 156 / 96%);">
                  <h5 class="py-4 text-center text-light">Team Work</h5>
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <img src="https://static.wixstatic.com/media/341119_3ff3880b71224ca3a170bcc4aecf10e3~mv2.jpg/v1/fill/w_720,h_480,al_c,lg_1,q_80,enc_auto/341119_3ff3880b71224ca3a170bcc4aecf10e3~mv2.jpg" style="width:100%;object-fit:cover;height:200px" class="img-fluid">
              <div style="background:rgb(10 102 156 / 96%);">
                  <h5 class="py-4 text-center text-light">Self Development</h5>
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <img src="https://thumbor.forbes.com/thumbor/fit-in/1290x/https://www.forbes.com/advisor/wp-content/uploads/2023/05/Image-6.jpg" style="width:100%;object-fit:cover;height:200px" class="img-fluid">
              <div style="background:rgb(10 102 156 / 96%);">
                  <h5 class="py-4 text-center text-light">Communication</h5>
              </div> 
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="container-fluid" data-aos="fade-up">
        <div class="row">
            <div class="col-12">
                <div class="swiper-container2">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide s2">
                            <img width="60px" height="40px" src="{{ asset('images/c6.jpg') }}" alt="">
                        </div>
                        <div class="swiper-slide s2"><img width="60px" height="40px" src="{{ asset('images/c1.png') }}" alt="Slide 2"></div>
                        <div class="swiper-slide s2"><img width="60px" height="40px" src="{{ asset('images/c2png.png') }}" alt="Slide 3"></div>
                        <div class="swiper-slide s2"><img width="60px" height="40px" src="{{ asset('images/c3jpg.jpg') }}" alt="Slide 4"></div>
                        <div class="swiper-slide s2"><img width="60px" height="40px" src="{{ asset('images/c4.png') }}" alt="Slide 5"></div>
                        <div class="swiper-slide s2"><img width="60px" height="40px" src="{{ asset('images/c5.svg') }}" alt="Slide 6"></div>
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
  </section>
  <section>
    <div class="container" data-aos="fade-zoom-in"
    data-aos-easing="ease-in-back"
    data-aos-delay="300"
    data-aos-offset="0">
        <div class="row">
            <div class="col-md-6">
                <img src="https://www.calendar.com/wp-content/uploads/2023/11/Automate-Your-Recruitment-1536x1024.jpg.webp  " height="100%" width="100%" alt="">
            </div>
            <div class="col-md-6">
                <h2>Recruitment Process</h2>
                <div class="row mt-3">
                    <div class="col-2">
                      <i class="fa-solid fa-clipboard-check r-icon"></i>
                    </div>
                    <div class="col-10">
                     <h4>Agreement Sign-off</h4>
                     <p>The agency agreement is signed off between client and Narowal Manpower management.</p>
                    </div>
                 </div>
                 <div class="row mt-3">
                    <div class="col-2">
                      <i class="fa-solid fa-handshake" style="padding: 12px; font-size:50px; color:#0e4a6f"></i>
                    </div>
                    <div class="col-10">
                     <h4>Order Sign-off</h4>
                     <p>A service level order is signed off by the clients as a confirmation that contains all details of manpower number of vacancies. Salary structures other benefits and terms and conditions applicable to the order.</p>
                    </div>
                 </div>
                 <div class="row mt-3">
                    <div class="col-2">
                      <i class="fa-solid fa-plane-departure" style="padding: 12px; font-size:50px; color:#0e4a6f"></i>
                    </div>
                    <div class="col-10">
                     <h4>Deployment</h4>
                     <p>Employment contracts of new recruits are signed between employer and employees and projects is signed-off. All the formalities related to departure are also completed.</p>
                    </div>
                 </div>
              </div>
        </div>
    </div>
  </section>

  <section>
    <div class="container my-5">
      <div class="row d-flex align-items-center">
        <div class="col-md-4"  data-aos="fade-right"
        data-aos-offset="300"
        data-aos-easing="ease-in-sine">
          <form action="">
        <h2 style="color:#0e4a6f;">Get a Quote</h2>
            <div class="form-group my-3">
              <input type="text" placeholder="Enter Full Name" class="form-control">
            </div>
            <div class="form-group my-3">
              <input type="email" placeholder="Enter Email" class="form-control">
            </div>
            <div class="form-group my-3">
              <input type="number" placeholder="Enter Number" class="form-control">
            </div>
            <div class="form-group my-3">
              <select name="" id="" class="form-select">
                <option selected disabled> Select option</option>
              </select>
            </div>
            <div class="form-group my-3">
              <textarea name="" id="" cols="30" rows="5" placeholder="Enter Message" class="form-control"></textarea>
            </div>
            <div class="form-group my-3">
              <button class="btn btn-primary" type="submit">Submit Form</button>
            
          </form>
        </div>
      
      </div>
      <div class="col-md-8" data-aos="fade-left"
      data-aos-anchor="#example-anchor"
      data-aos-offset="500"
      data-aos-duration="500">
        <div class="row ">
          <div class="col-md-4">
            <div class="card">
                <div class="hexagon">
                    <img src="{{ asset('images/saudia.png') }}" alt="Saudi Arabia">
                </div>
                <div class="card-body" style="left: 40px;">
                    <h5 class="card-title">Saudi Arabia</h5>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="hexagon">
                    <img src="{{ asset('images/turkey.webp') }}" alt="Turkey">
                </div>
                <div class="card-body" style="left: 75px;">
                    <h5 class="card-title">Turkey</h5>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="hexagon">
                    <img src="images/iraq.png" alt="Iraq">
                </div>
                <div class="card-body" style="left: 75px">
                    <h5 class="card-title">Iraq</h5>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="hexagon">
                    <img src="images/dubai.jpg" alt="Dubai">
                </div>
                <div class="card-body" style="left: 75px">
                    <h5 class="card-title">Dubai</h5>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="hexagon">
                    <img src="images/thailand.webp" alt="Thailand">
                </div>
                <div class="card-body" style="left: 65px">
                    <h5 class="card-title">Thailand</h5>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="hexagon">
                    <img src="images/iran.png" alt="Iran">
                </div>
                <div class="card-body" style="left: 84px">
                    <h5 class="card-title">Iran</h5>
                </div>
            </div>
        </div>
        </div>
      </div>
    </div>
  </section>

    
@endsection
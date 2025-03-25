@extends('layout')
@section('title', 'Service')
@section('content')
    <section id="about-us" class="d-flex align-items-center justify-content-center">
        <div class="container" data-aos="fade-up">
            <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
                <div class="col-xl-6 col-lg-8">
                    <h1><span>OUR</span> SERVICES</h1>
                </div>
            </div>
        </div>
    </section>

    <main>
        <section id="services" class="services">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Services</h2>
                    <p>I Provide The Best <span>Services</span></p>
                </div>

                <div class="row">

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon"><img src="{{ asset("assets/img/service/6636_profile.jpg") }}"></div>
                            <h4><a href="javascript:void(0)">Data Science & ML</a></h4>
                            <p>
                                <ul class="text-start">
                                    <li>Data Science & ML</li>
                                    <li>Machine Learning</li>
                                    <li>Computer Vision</li>
                                    <li>NLP</li>
                                    <li>Deep Learning</li>
                                    <li>Generative Models</li>
                                </ul>
                            </p>
                        </div>
                    </div>


                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box">

                            <div class="icon"><img src="{{ asset("assets/img/service/9916_profile.jpg") }}"></div>
                            <h4><a href="javascript:void(0)">Data Collection</a></h4>
                            <p>
                                <ul class="text-start">
                                    <li>Data Entry</li>
                                    <li>Data Scraping</li>
                                    <li>Data Typing</li>
                                    <li>Data Formatting</li>
                                    <li>Data Cleaning</li>
                                    <li>Data Enrichment</li>
                                </ul>
                            </p>

                        </div>
                    </div>


                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box">

                            <div class="icon"><img src="{{ asset("assets/img/service/7709_profile.jpg") }}"></div>
                            <h4><a href="javascript:void(0)">Data Analyst</a></h4>
                            <p>
                                <ul class="text-start">
                                    <li>Data Visualization</li>
                                    <li>Data Tagging & Annotation</li>
                                    <li>Data Analytics</li>
                                    <li>Dashboard</li>
                                </ul>
                            </p>

                        </div>
                    </div>


                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box">

                            <div class="icon"><img src="{{ asset("assets/img/service/1237_profile.jpg") }}"></div>
                            <h4><a href="javascript:void(0)">Data Managment</a></h4>
                            <p>
                                <ul class="text-start">
                                    <li>Data Processing</li>
                                    <li>Data Engineering</li>
                                    <li>Databases</li>
                                    <li>Data Governance & Protection</li>
                                </ul>
                            </p>

                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section id="cta" class="cta">
            <div class="container" data-aos="zoom-in">

                <div class="text-center">
                    <div class=row>
                        <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
                            <div class="icon-box">
                                <div class="section-title">
                                    <a href="https://github.com/ShahrukhShamshad" target="_blank">
                                        <p>call to <span>action</span></p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
                            <div class="cta-image">
                                <a href="{{ route('home') }}"><img src="{{ asset("assets/img/logo/logo.png") }}"></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
                            <div>
                                <p>
                                    <strong>+92 (303) 4819561</strong> <br>
                                    <a href="mail:shahruukh.shamshad3@gmail.com">shahruukh.shamshad3@gmail.com</a>
                                </p>
                                <a href="{{ route('contact') }}" class="get-started-btn scrollto">Let's Start</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section id="testimonials" class="testimonials">
            <div class="container" data-aos="zoom-in">

                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{ asset("assets/img/testimonials/7758_profile.jpg") }}" class="testimonial-img">
                                <h3>Thepranjalbora</h3>

                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Communication With the Seller is excellent. But took much longer than first agreed. The
                                    final product is delivered as asked but the theme is not as expected. We have it done by
                                    someone else. <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{ asset("assets/img/testimonials/3238_profile.jpg") }}" class="testimonial-img">
                                <h3>Sharath</h3>

                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Good in supporting the client needs and delivering things more than agreed. delivered
                                    all the things which are not discussed earlier. Looking forward to work again. <i
                                        class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{ asset("assets/img/testimonials/6615_profile.jpg") }}" class="testimonial-img">
                                <h3>Manish Upadhyay</h3>

                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    However, my project took multiple delivery extensions because of its complication. Yet,
                                    they managed to deliver the results I was expecting from them. They are very supportive
                                    and solve your issues if you are not satisfied. I will love working again. Recommended
                                    100% <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>


                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section>
    </main>
@endsection

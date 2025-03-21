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
                    <p>Check our <span>Services</span></p>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon"><img src="{{ asset("assets/img/service/6636_profile.jpg") }}"></div>
                            <h4><a href="#">Web Development</a></h4>
                            <p>At AZ Solutions, we focus on web design and our developer�s help businesses seize thei
                                digital footprint with optimized user interaction and user engagement.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon"><img src="{{ asset("assets/img/service/9916_profile.jpg") }}"></div>
                            <h4><a href="#">Software Development</a></h4>
                            <p>Software development refers to a set of computer science activities dedicated to the process
                                of creating, designing, deploying and supporting software.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon"><img src="{{ asset("assets/img/service/7709_profile.jpg") }}"></div>
                            <h4><a href="#">Android Development</a></h4>
                            <p>AZ Solutions create apps for a variety of reasons. Developers choose to develop for Android
                                in order to reach the majority of mobile device users.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon"><img src="{{ asset("assets/img/service/1237_profile.jpg") }}"></div>
                            <h4><a href="#">Graphic Designing</a></h4>
                            <p>We merge graphic design elements and human-centric approaches to amplify your brand's
                                persona. Harness the power of our creative junkies for unforgettable results.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon"><img src="{{ asset("assets/img/service/5043_profile.jpg") }}"></div>
                            <h4><a href="#">IOS Development</a></h4>
                            <p>iOS development is the process of creating applications for Apple�s mobile operating
                                system�the operating system used by the iPhone and iPod Touch.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon"><img src="{{ asset("assets/img/service/2170_service.jpg") }}"></div>
                            <h4><a href="#">Web Application</a></h4>
                            <p>Web applications serve distinct purposes based on their execution and delivery methods.</p>
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
                                    <p>call to <span>action</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
                            <div class="cta-image">
                                <a href="{{ route('home') }}"><img src="{{ asset("assets/img/logo/logo.png") }}"></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
                            <div class="let">
                                <p>
                                    <strong>Phone:</strong> (+92) 3434718990<br>
                                    <strong>Email:</strong> <a href="cdn-cgi/l/email-protection.html" class="__cf_email__"
                                        data-cfemail="a5cccbc3cae5c4dfd6cac9d0d1cccacbd6d5ce8bc6cac8">[email&#160;protected]</a>
                                    <br>
                                    <a href="cdn-cgi/l/email-protection.html" class="__cf_email__"
                                        data-cfemail="315750584b4050585c5a59505f5871565c50585d1f525e5c">[email&#160;protected]</a>
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

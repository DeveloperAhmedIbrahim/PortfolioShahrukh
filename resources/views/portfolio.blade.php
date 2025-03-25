@extends('layout')
@section('title', 'Portfolio')
@section('content')
    <section id="about-us" class="d-flex align-items-center justify-content-center">
        <div class="container" data-aos="fade-up">
            <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
                <div class="col-xl-6 col-lg-8">
                    <h1>PORT<span>FOLIO</span></h1>
                </div>
            </div>
        </div>
    </section>

    <main>
        <section id="portfolio" class="portfolio">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Portfolio</h2>
                    <p>MOST RECENT <span>WORK</span></p>
                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <!-- <li data-filter="*" class="filter-active">All</li> -->
                            <li data-filter=".filter-4">Logo Design</li>
                            <li data-filter=".filter-5">Graphic Design</li>
                            <li data-filter=".filter-6">UI/UX</li>
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                    <div class="col-lg-4 col-md-6 portfolio-item filter-6">
                        <div class="portfolio-wrap">
                            <img src="{{ asset("assets/img/portfolio/4151_portfolio.jpg") }}" class="img-fluid">
                            <div class="portfolio-info">
                                <h4>WEBSITE</h4>
                                <div class="portfolio-links">
                                    <a href="{{ asset("assets/img/portfolio/4151_portfolio.jpg") }}" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="WEBSITE"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-6">
                        <div class="portfolio-wrap">
                            <img src="{{ asset("assets/img/portfolio/9517_portfolio.jpg") }}" class="img-fluid">
                            <div class="portfolio-info">
                                <h4>WEBSITE</h4>
                                <div class="portfolio-links">
                                    <a href="{{ asset("assets/img/portfolio/9517_portfolio.jpg") }}" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="WEBSITE"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-6">
                        <div class="portfolio-wrap">
                            <img src="{{ asset("assets/img/portfolio/9015_portfolio.jpg") }}" class="img-fluid">
                            <div class="portfolio-info">
                                <h4>WEBSITE</h4>
                                <div class="portfolio-links">
                                    <a href="{{ asset("assets/img/portfolio/9015_portfolio.jpg") }}" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="WEBSITE"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-6">
                        <div class="portfolio-wrap">
                            <img src="{{ asset("assets/img/portfolio/3525_portfolio.jpg") }}" class="img-fluid">
                            <div class="portfolio-info">
                                <h4>WEBSITE</h4>
                                <div class="portfolio-links">
                                    <a href="{{ asset("assets/img/portfolio/3525_portfolio.jpg") }}" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="WEBSITE"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-6">
                        <div class="portfolio-wrap">
                            <img src="{{ asset("assets/img/portfolio/5500_portfolio.jpg") }}" class="img-fluid">
                            <div class="portfolio-info">
                                <h4>WEBSITE</h4>
                                <div class="portfolio-links">
                                    <a href="{{ asset("assets/img/portfolio/5500_portfolio.jpg") }}" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="WEBSITE"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-6">
                        <div class="portfolio-wrap">
                            <img src="{{ asset("assets/img/portfolio/4674_portfolio.jpg") }}" class="img-fluid">
                            <div class="portfolio-info">
                                <h4>WEBSITE</h4>
                                <div class="portfolio-links">
                                    <a href="{{ asset("assets/img/portfolio/4674_portfolio.jpg") }}" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="WEBSITE"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-6">
                        <div class="portfolio-wrap">
                            <img src="{{ asset("assets/img/portfolio/6416_portfolio.jpg") }}" class="img-fluid">
                            <div class="portfolio-info">
                                <h4>WEBSITE</h4>
                                <div class="portfolio-links">
                                    <a href="{{ asset("assets/img/portfolio/6416_portfolio.jpg") }}" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="WEBSITE"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-6">
                        <div class="portfolio-wrap">
                            <img src="{{ asset("assets/img/portfolio/7090_portfolio.jpg") }}" class="img-fluid">
                            <div class="portfolio-info">
                                <h4>WEBSITE</h4>
                                <div class="portfolio-links">
                                    <a href="{{ asset("assets/img/portfolio/7090_portfolio.jpg") }}" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="WEBSITE"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-6">
                        <div class="portfolio-wrap">
                            <img src="{{ asset("assets/img/portfolio/4100_portfolio.jpg") }}" class="img-fluid">
                            <div class="portfolio-info">
                                <h4>WEBSITE</h4>
                                <div class="portfolio-links">
                                    <a href="{{ asset("assets/img/portfolio/4100_portfolio.jpg") }}" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="WEBSITE"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-4">
                        <div class="portfolio-wrap">
                            <img src="{{ asset("assets/img/portfolio/5945_portfolio.jpg") }}" class="img-fluid">
                            <div class="portfolio-info">
                                <h4>LOGO DESIGN</h4>
                                <div class="portfolio-links">
                                    <a href="{{ asset("assets/img/portfolio/5945_portfolio.jpg") }}" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="LOGO DESIGN"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-4">
                        <div class="portfolio-wrap">
                            <img src="{{ asset("assets/img/portfolio/9306_portfolio.jpg") }}" class="img-fluid">
                            <div class="portfolio-info">
                                <h4>LOGO DESIGN</h4>
                                <div class="portfolio-links">
                                    <a href="{{ asset("assets/img/portfolio/9306_portfolio.jpg") }}" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="LOGO DESIGN"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-4">
                        <div class="portfolio-wrap">
                            <img src="{{ asset("assets/img/portfolio/8113_portfolio.jpg") }}" class="img-fluid">
                            <div class="portfolio-info">
                                <h4>LOGO DESIGN</h4>
                                <div class="portfolio-links">
                                    <a href="{{ asset("assets/img/portfolio/8113_portfolio.jpg") }}" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="LOGO DESIGN"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-4">
                        <div class="portfolio-wrap">
                            <img src="{{ asset("assets/img/portfolio/9765_portfolio.jpg") }}" class="img-fluid">
                            <div class="portfolio-info">
                                <h4>LOGO DESIGN</h4>
                                <div class="portfolio-links">
                                    <a href="{{ asset("assets/img/portfolio/9765_portfolio.jpg") }}" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="LOGO DESIGN"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-4">
                        <div class="portfolio-wrap">
                            <img src="{{ asset("assets/img/portfolio/4254_portfolio.jpg") }}" class="img-fluid">
                            <div class="portfolio-info">
                                <h4>LOGO DESIGN</h4>
                                <div class="portfolio-links">
                                    <a href="{{ asset("assets/img/portfolio/4254_portfolio.jpg") }}" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="LOGO DESIGN"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-4">
                        <div class="portfolio-wrap">
                            <img src="{{ asset("assets/img/portfolio/7731_portfolio.jpg") }}" class="img-fluid">
                            <div class="portfolio-info">
                                <h4>LOGO DESIGN</h4>
                                <div class="portfolio-links">
                                    <a href="{{ asset("assets/img/portfolio/7731_portfolio.jpg") }}" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="LOGO DESIGN"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-6">
                        <div class="portfolio-wrap">
                            <img src="{{ asset("assets/img/portfolio/3463_portfolio.jpg") }}" class="img-fluid">
                            <div class="portfolio-info">
                                <h4>WEBSITE</h4>
                                <div class="portfolio-links">
                                    <a href="{{ asset("assets/img/portfolio/3463_portfolio.jpg") }}" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="WEBSITE"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-6">
                        <div class="portfolio-wrap">
                            <img src="{{ asset("assets/img/portfolio/3429_portfolio.jpg") }}" class="img-fluid">
                            <div class="portfolio-info">
                                <h4>WEBSITE</h4>
                                <div class="portfolio-links">
                                    <a href="{{ asset("assets/img/portfolio/3429_portfolio.jpg") }}" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="WEBSITE"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-6">
                        <div class="portfolio-wrap">
                            <img src="{{ asset("assets/img/portfolio/6558_portfolio.jpg") }}" class="img-fluid">
                            <div class="portfolio-info">
                                <h4>WEBSITE</h4>
                                <div class="portfolio-links">
                                    <a href="{{ asset("assets/img/portfolio/6558_portfolio.jpg") }}" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="WEBSITE"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-5">
                        <div class="portfolio-wrap">
                            <img src="{{ asset("assets/img/portfolio/4481_portfolio.jpg") }}" class="img-fluid">
                            <div class="portfolio-info">
                                <h4>Graphic Designing</h4>
                                <div class="portfolio-links">
                                    <a href="{{ asset("assets/img/portfolio/4481_portfolio.jpg") }}" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="Graphic Designing"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-5">
                        <div class="portfolio-wrap">
                            <img src="{{ asset("assets/img/portfolio/2349_portfolio.jpg") }}" class="img-fluid">
                            <div class="portfolio-info">
                                <h4>Graphic Designing</h4>
                                <div class="portfolio-links">
                                    <a href="{{ asset("assets/img/portfolio/2349_portfolio.jpg") }}" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="Graphic Designing"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-5">
                        <div class="portfolio-wrap">
                            <img src="{{ asset("assets/img/portfolio/7028_portfolio.jpg") }}" class="img-fluid">
                            <div class="portfolio-info">
                                <h4>Graphic Designing</h4>
                                <div class="portfolio-links">
                                    <a href="{{ asset("assets/img/portfolio/7028_portfolio.jpg") }}" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="Graphic Designing"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-5">
                        <div class="portfolio-wrap">
                            <img src="{{ asset("assets/img/portfolio/5415_portfolio.jpg") }}" class="img-fluid">
                            <div class="portfolio-info">
                                <h4>Graphic Designing</h4>
                                <div class="portfolio-links">
                                    <a href="{{ asset("assets/img/portfolio/5415_portfolio.jpg") }}" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="Graphic Designing"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-5">
                        <div class="portfolio-wrap">
                            <img src="{{ asset("assets/img/portfolio/8527_portfolio.jpg") }}" class="img-fluid">
                            <div class="portfolio-info">
                                <h4>Graphic Designing</h4>
                                <div class="portfolio-links">
                                    <a href="{{ asset("assets/img/portfolio/8527_portfolio.jpg") }}" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="Graphic Designing"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-5">
                        <div class="portfolio-wrap">
                            <img src="{{ asset("assets/img/portfolio/1193_portfolio.jpg") }}" class="img-fluid">
                            <div class="portfolio-info">
                                <h4>Graphic Designing</h4>
                                <div class="portfolio-links">
                                    <a href="{{ asset("assets/img/portfolio/1193_portfolio.jpg") }}" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="Graphic Designing"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-5">
                        <div class="portfolio-wrap">
                            <img src="{{ asset("assets/img/portfolio/9796_portfolio.jpg") }}" class="img-fluid">
                            <div class="portfolio-info">
                                <h4>Graphic Designing</h4>
                                <div class="portfolio-links">
                                    <a href="{{ asset("assets/img/portfolio/9796_portfolio.jpg") }}" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="Graphic Designing"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-5">
                        <div class="portfolio-wrap">
                            <img src="{{ asset("assets/img/portfolio/2074_portfolio.jpg") }}" class="img-fluid">
                            <div class="portfolio-info">
                                <h4>Graphic Designing</h4>
                                <div class="portfolio-links">
                                    <a href="{{ asset("assets/img/portfolio/2074_portfolio.jpg") }}" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="Graphic Designing"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-5">
                        <div class="portfolio-wrap">
                            <img src="{{ asset("assets/img/portfolio/6029_portfolio.jpg") }}" class="img-fluid">
                            <div class="portfolio-info">
                                <h4>Graphic Designing</h4>
                                <div class="portfolio-links">
                                    <a href="{{ asset("assets/img/portfolio/6029_portfolio.jpg") }}" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="Graphic Designing"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


            </div>
        </section>

        <section id="cta" class="cta">
            <div class="container" data-aos="zoom-in">

                <div class="text-center">
                    <div class=row>
                        <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in"
                            data-aos-delay="300">
                            <div class="icon-box">
                                <div class="section-title">
                                    <a href="https://github.com/ShahrukhShamshad" target="_blank">
                                        <p>call to <span>action</span></p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in"
                            data-aos-delay="300">
                            <div class="cta-image">
                                <a href="{{ route('home') }}"><img src="{{ asset("assets/img/logo/logo.png") }}"></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in"
                            data-aos-delay="300">
                            <div class="let">
                                <p>
                                    <strong>Phone:</strong> +92 (303) 4819561<br>
                                    <strong>Email:</strong> <a href="email:shahruukh.shamshad3@gmail.com">shahruukh.shamshad3@gmail.com</a>                                </p>
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

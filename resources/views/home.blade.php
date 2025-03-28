@extends('layout')
@section('title', 'Home')
@section('content')
    <section id="hero" class="d-flex align-items-center justify-content-center">
        <div class="container" data-aos="fade-up">
            <div class="row text-start" data-aos="fade-up" data-aos-delay="150">
                <div class="col-xl-8 col-lg-8">
                    <h1><span class="h2">Hello, This is</span><br>Shahrukh Shamshad<br><span>Data Analyst | Freelance</span>.</h1>

                </div>
            </div>
        </div>
    </section>

    <main id="main">
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                        <img src="{{ asset("assets/img/About.png") }}" class="about-img" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right"
                        data-aos-delay="100">
                        <div class="section-title">
                            <h2>About Us</h2>
                            <p>Who Am I?</p>
                        </div>
                        <p class="about-p">
                            My name is <b>Shahrukh Shamshad</b>, and I am a passionate data storyteller dedicated to transforming complex datasets into clear, actionable insights. I specialize in analyzing trends, visualizing patterns, and crafting intuitive narratives that drive strategic decision-making. Whether decoding customer behavior, optimizing business processes, or enhancing data-driven strategies, I thrive on turning raw data into meaningful business solutions.
                        </p>
                        <a href="{{ route('about') }}" class="about-a">Read More</a>


                    </div>

                </div>
        </section>

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
        <section id="portfolio" class="portfolio">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Portfolio</h2>
                    <p>MOST RECENT <span>WORK</span></p>
                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-12 d-flex justify-content-center mt-4">
                        <ul id="portfolio-flters">

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
                                        class="portfolio-lightbox" title="Graphic Designing"><i
                                            class="bx bx-plus"></i></a>
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
                                        class="portfolio-lightbox" title="Graphic Designing"><i
                                            class="bx bx-plus"></i></a>
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
                                        class="portfolio-lightbox" title="Graphic Designing"><i
                                            class="bx bx-plus"></i></a>
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
                                        class="portfolio-lightbox" title="Graphic Designing"><i
                                            class="bx bx-plus"></i></a>
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
                                        class="portfolio-lightbox" title="Graphic Designing"><i
                                            class="bx bx-plus"></i></a>
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
                                        class="portfolio-lightbox" title="Graphic Designing"><i
                                            class="bx bx-plus"></i></a>
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
                                        class="portfolio-lightbox" title="Graphic Designing"><i
                                            class="bx bx-plus"></i></a>
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
                                        class="portfolio-lightbox" title="Graphic Designing"><i
                                            class="bx bx-plus"></i></a>
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
                                        class="portfolio-lightbox" title="Graphic Designing"><i
                                            class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
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
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                        <img src="{{ asset("assets/img/Contact.png") }}" class="contact-img" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right"
                        data-aos-delay="100">
                        <div class="section-title">
                            <h2>Contact Us</h2>
                            <p><span>chat</span> with us</p>
                        </div>
                        <form action="#" method="post" role="form" class="">
                            <div class="row">
                                <div class="col-md-6 form-group mt-3">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6 form-group mt-3">
                                    <input type="email" name="email" class="form-control" id="email"
                                        placeholder="Email" required>

                                </div>
                                <div class="col-md-6 form-group mt-3">
                                    <input type="text" name="phone" class="form-control" id="phone"
                                        placeholder="Phone" required>
                                </div>
                                <div class="col-md-6 form-group mt-3">
                                    <input type="text" class="form-control" name="address" id="address"
                                        placeholder="Address" required>
                                </div>
                                <div class="col-md-6 form-group mt-3">
                                    <input type="text" class="form-control" name="budget" id="budget"
                                        placeholder="Estimated Budget" required>
                                </div>
                                <div class="col-md-6 form-group mt-3">
                                    <input type="select" class="form-control" name="service" id="service"
                                        placeholder="Select Service" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Subject" required>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>

                            </div>
                            <center>
                                <div class="form-group btn">
                                    <button type="submit" name="submit" value="Send Message" class=" py-3 px-5">Send
                                        Message</button>

                                </div>
                            </center>
                        </form>


                    </div>

                </div>
        </section>
        <!--<div class="container" data-aos="fade-up">-->
        <!--    <div class="row">-->
        <!--        <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-right" data-aos-delay="100">-->
        <!--            <div class="ifram">-->
        <!--            <center>-->
        <!--                <iframe width="100%" height="315" src="https://www.youtube.com/embed/AITCEx_4Jv8"-->
        <!--                    title="YouTube video player" frameborder="0"-->
        <!--                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"-->
        <!--                    allowfullscreen></iframe>-->
        <!--            </center>-->
        <!--        </div>-->
        <!--        </div>-->
        <!--        <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">-->
        <!--            <div class="ifram">-->
        <!--            <center>-->
        <!--                <iframe width="100%" height="315" src="https://www.youtube.com/embed/l_wB-vypdyY"-->
        <!--                    title="YouTube video player" frameborder="0"-->
        <!--                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"-->
        <!--                    allowfullscreen></iframe>-->
        <!--            </center>-->
        <!--        </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->
        <section id="counts" class="counts">
            <div class="container" data-aos="fade-up">

                <div class="row no-gutters">
                    <div class="col-xl-7 ps-4 ps-lg-5 pe-4 pe-lg-1 d-flex align-items-stretch" data-aos="fade-left"
                        data-aos-delay="100">

                        <div class="content d-flex flex-column justify-content-center">
                            <div class="section-title">
                                <h2>History</h2>
                                <p>our work <span>history</span></p>

                            </div>
                            <div class="row">
                                <div class="col-md-6 d-md-flex align-items-md-stretch">
                                    <div class="count-box">
                                        <i class="bi bi-emoji-smile"></i>
                                        <span>100+</span>
                                        <p><strong>Happy Clients :</strong> Discover why clients love working with
                                            Az-Solutions! Our dedicated team of experts delivers exceptional results and
                                            unmatched customer satisfaction.</p>
                                    </div>
                                </div>

                                <div class="col-md-6 d-md-flex align-items-md-stretch">
                                    <div class="count-box">
                                        <i class="bi bi-journal-richtext"></i>
                                        <span>100+</span>
                                        <p><strong>Projects :</strong> From web development and mobile applications to
                                            cloud
                                            solutions and data analytics, we leverage our extensive expertise to
                                            transform
                                            ideas into exceptional digital experiences.</p>
                                    </div>
                                </div>

                                <div class="col-md-6 d-md-flex align-items-md-stretch">
                                    <div class="count-box">
                                        <i class="bi bi-award"></i>

                                        <span data-purecounter-start="0" data-purecounter-end="8"
                                            data-purecounter-duration="4" class="purecounter"></span>
                                        <p><strong>Years of experience :</strong> With years of experience and a
                                            commitment to
                                            exceptional customer service, we provide timely solutions tailored to your
                                            specific needs.</p>
                                    </div>
                                </div>

                                <div class="col-md-6 d-md-flex align-items-md-stretch">
                                    <div class="count-box">
                                        <i class="bi bi-clock"></i>
                                        <span>24/7</span>
                                        <p><strong>Support Available :</strong> Our dedicated team is here to assist you
                                            with
                                            any technical issues, inquiries, or concerns you may have.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start"
                        data-aos="fade-right" data-aos-delay="100">
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
                                    Communication With the Seller is excellent. But took much longer than first agreed.
                                    The final product is delivered as asked but the theme is not as expected. We have it
                                    done by someone else. <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{ asset("assets/img/testimonials/3238_profile.jpg") }}" class="testimonial-img">
                                <h3>Sharath</h3>

                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Good in supporting the client needs and delivering things more than agreed.
                                    delivered all the things which are not discussed earlier. Looking forward to work
                                    again. <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{ asset("assets/img/testimonials/6615_profile.jpg") }}" class="testimonial-img">
                                <h3>Manish Upadhyay</h3>

                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    However, my project took multiple delivery extensions because of its complication.
                                    Yet, they managed to deliver the results I was expecting from them. They are very
                                    supportive and solve your issues if you are not satisfied. I will love working
                                    again. Recommended 100% <i class="bx bxs-quote-alt-right quote-icon-right"></i>
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

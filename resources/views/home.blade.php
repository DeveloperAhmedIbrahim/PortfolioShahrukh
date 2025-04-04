@extends('layout')
@section('title', 'Home')
@section('content')
    <!-- tmp banner area start -->
    <div class="tmp-banner-one-area">
        <div class="container">
            <div class="banner-one-main-wrapper">
                <div class="row align-items-center">
                    <div class="col-lg-6 order-lg-2">
                        <div class="banner-right-content">
                            <img class="tmp-scroll-trigger tmp-zoom-in animation-order-1" src="{{ asset('assets/images/banner/banner-user-image-one.png') }}" alt="banner-img">
                            <h2 class="banner-big-text-1 up-down">DATA ANALYST</h2>
                            <h2 class="banner-big-text-2 up-down-2">FREELANCER</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div class="inner">
                            <span class="sub-title tmp-scroll-trigger tmp-fade-in animation-order-1">Hello</span>
                            <h1 class="title tmp-scroll-trigger tmp-fade-in animation-order-2 mt--5">i’m
                                Shahrukh Shamshad a <br>
                                <span class="header-caption">
                                    <span class="cd-headline clip is-full-width">
                                        <span class="cd-words-wrapper">
                                            <b class="is-visible theme-gradient">Data Analyst.</b>
                                            <b class="is-hidden theme-gradient">Freelancer.</b>
                                        </span>
                                </span>
                                </span>
                            </h1>
                            <p class="disc tmp-scroll-trigger tmp-fade-in animation-order-3"> Bringing analytical thinking into business decisions. Skilled in statistical analysis, data mining, and insights generation. </p>
                            <div class="button-area-banner-one tmp-scroll-trigger tmp-fade-in animation-order-4">
                                <a class="tmp-btn hover-icon-reverse radius-round" href="{{ route('portfolio') }}">
                                    <span class="icon-reverse-wrapper">
                                        <span class="btn-text">View Portfolio</span>
                                    <span class="btn-icon"><i class="fa-sharp fa-regular fa-arrow-right"></i></span>
                                    <span class="btn-icon"><i class="fa-sharp fa-regular fa-arrow-right"></i></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- tmp banner area end -->


    <!-- Tpm Service Area Start -->
    <section class="service-area tmp-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="custom-title mb--30 tmp-scroll-trigger tmp-fade-in animation-order-1">
                        About Me <span><img src="{{ asset('assets/images/custom-line/custom-line.png') }}" alt="custom-line"></span>
                    </h2>
                    <p class="fw-bold">
                        This is Shahrukh Shamshad, and I am a passionate data storyteller dedicated to transforming complex datasets into clear, actionable insights. I specialize in analyzing trends, visualizing patterns, and crafting intuitive narratives that drive strategic decision-making. Whether decoding customer behavior, optimizing business processes, or enhancing data-driven strategies, I thrive on turning raw data into meaningful business solutions.
                    </p>
                    <a class="tmp-btn hover-icon-reverse radius-round" href="{{ route('portfolio') }}">
                        <span class="icon-reverse-wrapper">
                            <span class="btn-text">Read More</span>
                        <span class="btn-icon"><i class="fa-sharp fa-regular fa-arrow-right"></i></span>
                        <span class="btn-icon"><i class="fa-sharp fa-regular fa-arrow-right"></i></span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Tpm Service Area End -->


    <!-- Tpm Counter Area Start -->
    <section class="counter-area">
        <div class="container">
            <div class="row g-5">
                <div class="col-12 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="year-of-expariance-wrapper bg-blur-style-one tmp-scroll-trigger tmp-fade-in animation-order-1">
                        <div class="year-expariance-wrap">
                            <!-- <h2 class="year-number"><span class="counter">25 </span> </h2> -->
                            <h2 class="counter year-number"><span class="odometer" data-count="05">00</span>
                            </h2>
                            <h3 class="year-title">Years Of <br> experience</h3>
                        </div>
                        <p class="year-para">Business consulting consultants provide expert advice and guida the a
                            businesses to help theme their performance efficiency</p>
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="counter-area-right-content">
                        <div class="row g-5">
                            <div class="col-lg-12 col-sm-12 col-12">
                                <div class="counter-card tmponhover tmp-scroll-trigger tmp-fade-in animation-order-1">
                                    <h3 class="counter counter-title"><span class="odometer" data-count="20">00</span>+
                                    </h3>
                                    <p class="counter-para">Our Project Complete</p>
                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-12 col-12">
                                <div class="counter-card tmponhover tmp-scroll-trigger tmp-fade-in animation-order-3">
                                    <h3 class="counter counter-title"><span class="odometer" data-count="15">00</span>+
                                    </h3>
                                    <p class="counter-para">Satisfied Client</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Tpm Counter Area End -->

    <!-- tmp skill area start -->
    <div class="tmp-skill-area tmp-section-gapTop">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="progress-wrapper">
                        <div class="content">
                            <h2 class="custom-title mb--30 tmp-scroll-trigger tmp-fade-in animation-order-1">
                                Technical Skills <span><img src="{{ asset('assets/images/custom-line/custom-line.png') }}" alt="custom-line"></span>
                            </h2>
                            <!-- Start Single Progress Charts -->
                            <div class="progress-charts">
                                <h6 class="heading heading-h6">
                                    Programming Languages: Python, R</h6>
                                <div class="progress">
                                    <div class="progress-bar wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay=".3s" role="progressbar" style="width: 100%; visibility: visible; animation-duration: 0.5s; animation-delay: 0.3s; animation-name: fadeInLeft;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                        <span class="percent-label">100%</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Progress Charts -->
                            <!-- Start Single Progress Charts -->
                            <div class="progress-charts">
                                <h6 class="heading heading-h6">
                                    Database Management Systems: SQL</h6>
                                <div class="progress">
                                    <div class="progress-bar wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay=".3s" role="progressbar" style="width: 100%; visibility: visible; animation-duration: 0.5s; animation-delay: 0.3s; animation-name: fadeInLeft;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                        <span class="percent-label">100%</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Progress Charts -->
                            <!-- Start Single Progress Charts -->
                            <div class="progress-charts">
                                <h6 class="heading heading-h6">
                                    MS Office: Word, Excel, Access, PowerPoint</h6>
                                <div class="progress">
                                    <div class="progress-bar wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay=".3s" role="progressbar" style="width: 100%; visibility: visible; animation-duration: 0.5s; animation-delay: 0.3s; animation-name: fadeInLeft;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                        <span class="percent-label">100%</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Progress Charts -->
                            <!-- Start Single Progress Charts -->
                            <div class="progress-charts">
                                <h6 class="heading heading-h6">
                                    Data Visualization Tools: Power BI, Tableau</h6>
                                <div class="progress">
                                    <div class="progress-bar wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay=".3s" role="progressbar" style="width: 100%; visibility: visible; animation-duration: 0.5s; animation-delay: 0.3s; animation-name: fadeInLeft;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                        <span class="percent-label">100%</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Progress Charts -->
                            <!-- Start Single Progress Charts -->
                            <div class="progress-charts">
                                <h6 class="heading heading-h6">
                                    Version Control: Git and GitHub</h6>
                                <div class="progress">
                                    <div class="progress-bar wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay=".3s" role="progressbar" style="width: 100%; visibility: visible; animation-duration: 0.5s; animation-delay: 0.3s; animation-name: fadeInLeft;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                        <span class="percent-label">100%</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Progress Charts -->
                            <!-- Start Single Progress Charts -->
                            <div class="progress-charts">
                                <h6 class="heading heading-h6">
                                    Statistical Analysis</h6>
                                <div class="progress">
                                    <div class="progress-bar wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay=".3s" role="progressbar" style="width: 100%; visibility: visible; animation-duration: 0.5s; animation-delay: 0.3s; animation-name: fadeInLeft;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                        <span class="percent-label">100%</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Progress Charts -->
                            <!-- Start Single Progress Charts -->
                            <div class="progress-charts">
                                <h6 class="heading heading-h6">
                                    Cloud Computing: AWS, Google Cloud, Azure</h6>
                                <div class="progress">
                                    <div class="progress-bar wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay=".3s" role="progressbar" style="width: 100%; visibility: visible; animation-duration: 0.5s; animation-delay: 0.3s; animation-name: fadeInLeft;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                        <span class="percent-label">100%</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Progress Charts -->
                            <!-- Start Single Progress Charts -->
                            <div class="progress-charts">
                                <h6 class="heading heading-h6">
                                    Machine Learning & AI</h6>
                                <div class="progress">
                                    <div class="progress-bar wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay=".3s" role="progressbar" style="width: 100%; visibility: visible; animation-duration: 0.5s; animation-delay: 0.3s; animation-name: fadeInLeft;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                        <span class="percent-label">100%</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Progress Charts -->

                            <!-- Start Single Progress Charts -->
                            <div class="progress-charts">
                                <h6 class="heading heading-h6">
                                    Web Scraping & Data Scraping</h6>
                                <div class="progress">
                                    <div class="progress-bar wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay=".3s" role="progressbar" style="width: 100%; visibility: visible; animation-duration: 0.5s; animation-delay: 0.3s; animation-name: fadeInLeft;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                        <span class="percent-label">100%</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Progress Charts -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="progress-wrapper">
                        <div class="content">
                            <h2 class="custom-title mb--30 tmp-scroll-trigger tmp-fade-in animation-order-1">
                                Soft Skills <span><img src="{{ asset('assets/images/custom-line/custom-line.png') }}" alt="custom-line"></span>
                            </h2>
                            <!-- Start Single Progress Charts -->
                            <div class="progress-charts">
                                <h6 class="heading heading-h6">
                                    Critical Thinking & Problem-Solving</h6>
                                <div class="progress">
                                    <div class="progress-bar wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay=".3s" role="progressbar" style="width: 100%; visibility: visible; animation-duration: 0.5s; animation-delay: 0.3s; animation-name: fadeInLeft;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                        <span class="percent-label">100%</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Progress Charts -->
                            <!-- Start Single Progress Charts -->
                            <div class="progress-charts">
                                <h6 class="heading heading-h6">
                                    Analytical Thinking</h6>
                                <div class="progress">
                                    <div class="progress-bar wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay=".3s" role="progressbar" style="width: 100%; visibility: visible; animation-duration: 0.5s; animation-delay: 0.3s; animation-name: fadeInLeft;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                        <span class="percent-label">100%</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Progress Charts -->
                            <!-- Start Single Progress Charts -->
                            <div class="progress-charts">
                                <h6 class="heading heading-h6">
                                    Attention to Detail & Time Management</h6>
                                <div class="progress">
                                    <div class="progress-bar wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay=".3s" role="progressbar" style="width: 100%; visibility: visible; animation-duration: 0.5s; animation-delay: 0.3s; animation-name: fadeInLeft;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                        <span class="percent-label">100%</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Progress Charts -->
                            <!-- Start Single Progress Charts -->
                            <div class="progress-charts">
                                <h6 class="heading heading-h6">
                                    Decision-Making
                                </h6>
                                <div class="progress">
                                    <div class="progress-bar wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay=".3s" role="progressbar" style="width: 100%; visibility: visible; animation-duration: 0.5s; animation-delay: 0.3s; animation-name: fadeInLeft;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                        <span class="percent-label">100%</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Progress Charts -->
                            <!-- Start Single Progress Charts -->
                            <div class="progress-charts">
                                <h6 class="heading heading-h6">
                                    Storytelling with Data
                                </h6>
                                <div class="progress">
                                    <div class="progress-bar wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay=".3s" role="progressbar" style="width: 100%; visibility: visible; animation-duration: 0.5s; animation-delay: 0.3s; animation-name: fadeInLeft;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                        <span class="percent-label">100%</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Progress Charts -->
                            <!-- Start Single Progress Charts -->
                            <div class="progress-charts">
                                <h6 class="heading heading-h6">
                                    Communication & Interpersonal
                                </h6>
                                <div class="progress">
                                    <div class="progress-bar wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay=".3s" role="progressbar" style="width: 100%; visibility: visible; animation-duration: 0.5s; animation-delay: 0.3s; animation-name: fadeInLeft;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                        <span class="percent-label">100%</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Progress Charts -->
                            <!-- Start Single Progress Charts -->
                            <div class="progress-charts">
                                <h6 class="heading heading-h6">
                                    Collaboration & Teamwork
                                </h6>
                                <div class="progress">
                                    <div class="progress-bar wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay=".3s" role="progressbar" style="width: 100%; visibility: visible; animation-duration: 0.5s; animation-delay: 0.3s; animation-name: fadeInLeft;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                        <span class="percent-label">100%</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Progress Charts -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- tmp skill area end -->

    <!-- Tpm Education Experience Area Start -->
    <section class="education-experience tmp-section-gapTop">
        <div class="container">
            <div class="section-head mb--50">
                <div class="section-sub-title center-title tmp-scroll-trigger tmp-fade-in animation-order-1">
                    <span class="subtitle">Education & Experience</span>
                </div>
                <h2 class="title split-collab tmp-scroll-trigger tmp-fade-in animation-order-2">Empowering Creativity
                    <br> through
                </h2>
                <p class="description section-sm tmp-scroll-trigger tmp-fade-in animation-order-3">Business consulting
                    consultants provide expert advice and guida
                    businesses to help them improve their performance, efficiency, and organizational</p>
            </div>
            <h2 class="custom-title mb-32 tmp-scroll-trigger tmp-fade-in animation-order-1">Education <span><img
                        src="{{ asset('assets/images/custom-line/custom-line.png') }}" alt="custom-line"></span>
            </h2>
            <div class="row g-5">
                <div class="col-lg-6 col-sm-6">
                    <div class="education-experience-card tmponhover tmp-scroll-trigger tmp-fade-in animation-order-1">
                        <h4 class="edu-sub-title">Mathematics, Master of Science</h4>
                        <div class="d-flex justify-content-between">
                            <h2 class="edu-title">Nov 2020 - Apr 2022</h2>
                            <h2 class="edu-title">University of Sindh</h2>
                        </div>
                        <p class="edu-para">
                            <b>Skills:</b>
                            <span>Mathematical Modellings</span>,
                            <span>Statistical Analysis & Probablity</span>,
                            <span>Optimization Techniques</span>,
                            <span>Computational Mathematics</span>,
                            <span>Advance Data Analysis</span>
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <div class="education-experience-card tmponhover tmp-scroll-trigger tmp-fade-in animation-order-1">
                        <h4 class="edu-sub-title">Science, Bachelors of Science</h4>
                        <div class="d-flex justify-content-between">
                            <h2 class="edu-title">Nov 2018 - Apr 2021</h2>
                            <h2 class="edu-title">University of Sindh</h2>
                        </div>
                        <p class="edu-para">
                            <b>Skills:</b>
                            <span>Chemistry</span>,
                            <span>Mathematics</span>,
                            <span>Physics</span>,
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <div class="education-experience-card tmponhover tmp-scroll-trigger tmp-fade-in animation-order-1">
                        <h4 class="edu-sub-title">Education, Associate's Degree</h4>
                        <div class="d-flex justify-content-between">
                            <h2 class="edu-title">Nov 2016 - Apr 2018</h2>
                            <h2 class="edu-title">Allama Iqbal Open University</h2>
                        </div>
                        <p class="edu-para">
                            <b>Skills:</b>
                            <span>Teaching & Instruction</span>,
                            <span>Educational Phychology</span>,
                            <span>Curriculum Development</span>,
                            <span>Classroom Management</span>,
                            <span>Communication & Presentation</span>,
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <div class="education-experience-card tmponhover tmp-scroll-trigger tmp-fade-in animation-order-1">
                        <h4 class="edu-sub-title">Civil Engineering, Associate's Degree</h4>
                        <div class="d-flex justify-content-between">
                            <h2 class="edu-title">Nov 2015 - Apr 2017</h2>
                            <h2 class="edu-title">Sindh Board of Technical Education</h2>
                        </div>
                        <p class="edu-para">
                            {{-- <b>Skills:</b>
                            <span>Teaching & Instruction</span>,
                            <span>Educational Phychology</span>,
                            <span>Curriculum Development</span>,
                            <span>Classroom Management</span>,
                            <span>Communication & Presentation</span>, --}}
                        </p>
                    </div>
                </div>
            </div>
            <div class="experiences-wrapper">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="experiences-wrap-left-content">
                            <h2 class="custom-title mb-32 tmp-scroll-trigger tmp-fade-in animation-order-1">Experiences <span><img
                            src="{{ asset('assets/images/custom-line/custom-line.png') }}" alt="custom-line"></span></h2>

                            <div class="experience-content tmp-scroll-trigger tmp-fade-in animation-order-1">
                                <p class="ex-subtitle">experience</p>
                                <h2 class="ex-name">Web Developer (3 Months)</h2>
                                <div class="d-flex justify-content-between">
                                    <h3 class="ex-title">AZ Solutions - Internship</h3>
                                    <h3 class="ex-title">DEC 2023 - FEB 2024</h3>
                                </div>
                                <ul class="fw-bold">
                                    <li class="my-0 ms-5" style="list-style: disc">Designed and developed responsive and user-friendly websites.</li>
                                    <li class="my-0 ms-5" style="list-style: disc">Tested and debugged web applications to ensure optimal functionality and performance.</li>
                                    <li class="my-0 ms-5" style="list-style: disc">Implemented web security measures and optimized application performance.</li>
                                    <li class="my-0 ms-5" style="list-style: disc">Utilized HTML, CSS, JavaScript, and PHP in development tasks.</li>
                                    <li class="my-0 ms-5" style="list-style: disc">Collaborated on various projects, showcasing attention to detail and a results-driven approach.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="experiences-wrap-left-content">
                            <h2 class="custom-title mb-32 tmp-scroll-trigger tmp-fade-in animation-order-1">&nbsp;</h2>

                            <div class="experience-content tmp-scroll-trigger tmp-fade-in animation-order-1">
                                <p class="ex-subtitle">experience</p>
                                <h2 class="ex-name">Mathematics Teacher (1 yr 2 mos)</h2>
                                <div class="d-flex justify-content-between">
                                    <h3 class="ex-title">Standard public school - Full-time</h3>
                                    <h3 class="ex-title">Jan 2022 - Feb 2023</h3>
                                </div>
                                <ul class="fw-bold">
                                    <li class="my-0 ms-5" style="list-style: disc">Taught higher education mathematics, focusing on real-world applications and critical thinking development.</li>
                                    <li class="my-0 ms-5" style="list-style: disc">Designed and delivered interactive lesson plans to enhance student engagement and comprehension.</li>
                                    <li class="my-0 ms-5" style="list-style: disc">Implemented problem-solving techniques to help students understand complex mathematical concepts.</li>
                                    <li class="my-0 ms-5" style="list-style: disc">Provided individualized learning support, ensuring student progress and confidence in mathematics.</li>
                                    <li class="my-0 ms-5" style="list-style: disc">Integrated modern teaching technologies to create an engaging and effective classroom environment.</li>
                                    <li class="my-0 ms-5" style="list-style: disc">Developed and conducted student assessments to track performance and optimize teaching strategies.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Tpm Education Experience Area End -->


    <!-- Tpm Latest Portfolio Area Start -->
    <div class="latest-portfolio-area custom-column-grid tmp-section-gapTop">
        <div class="container">
            <div class="section-head mb--60">
                <div class="section-sub-title center-title tmp-scroll-trigger tmp-fade-in animation-order-1">
                    <span class="subtitle">Latest Portfolio</span>
                </div>
                <h2 class="title split-collab tmp-scroll-trigger tmp-fade-in animation-order-2">Transforming Ideas into
                    <br> Exceptional
                </h2>
                <p class="description section-sm tmp-scroll-trigger tmp-fade-in animation-order-3">Business consulting
                    consultants provide expert advice and guida
                    businesses to help them improve their performance, efficiency, and organizational</p>
            </div>
            <div class="row">
                <div class="col-lg-6 col-sm-6">
                    <div class="latest-portfolio-card tmp-hover-link tmp-scroll-trigger tmp-fade-in animation-order-1">
                        <div class="portfoli-card-img">
                            <div class="img-box v2">
                                <a class="tmp-scroll-trigger tmp-zoom-in animation-order-1" href="project-details.html">
                                    <img class="w-100" src="{{ asset('assets/images/latest-portfolio/portfoli-img-1.jpg') }}" alt="Thumbnail">
                                </a>
                            </div>
                        </div>
                        <div class="portfolio-card-content-wrap">
                            <div class="content-left">
                                <h3 class="portfolio-card-title"><a class="link" href="project-details.html">Digital
                                        Transformation Advisors</a></h3>
                                <p class="portfoli-card-para">Development Coaches</p>
                            </div>
                            <a href="project-details.html" class="tmp-arrow-icon-btn">
                                <div class="btn-inner">
                                    <i class="tmp-icon fa-solid fa-arrow-up-right"></i>
                                    <i class="tmp-icon-bottom fa-solid fa-arrow-up-right"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-sm-6">
                    <div class="latest-portfolio-card tmp-hover-link tmp-scroll-trigger tmp-fade-in animation-order-2">
                        <div class="portfoli-card-img">
                            <div class="img-box v2">
                                <a class="tmp-scroll-trigger tmp-zoom-in animation-order-1" href="project-details.html">
                                    <img class="w-100" src="{{ asset('assets/images/latest-portfolio/portfoli-img-2.jpg') }}" alt="Thumbnail">
                                </a>
                            </div>
                        </div>
                        <div class="portfolio-card-content-wrap">
                            <div class="content-left">
                                <h3 class="portfolio-card-title"><a class="link" href="project-details.html">My work is driven by the belief that thoughtful.</a></h3>
                                <p class="portfoli-card-para">Development App</p>
                            </div>
                            <a href="project-details.html" class="tmp-arrow-icon-btn">
                                <div class="btn-inner">
                                    <i class="tmp-icon fa-solid fa-arrow-up-right"></i>
                                    <i class="tmp-icon-bottom fa-solid fa-arrow-up-right"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-sm-6">
                    <div class="latest-portfolio-card tmp-hover-link tmp-scroll-trigger tmp-fade-in animation-order-3">
                        <div class="portfoli-card-img">
                            <div class="img-box v2">
                                <a class="tmp-scroll-trigger tmp-zoom-in animation-order-1" href="project-details.html">
                                    <img class="w-100" src="{{ asset('assets/images/latest-portfolio/portfoli-img-3.jpg') }}" alt="Thumbnail">
                                </a>
                            </div>
                        </div>
                        <div class="portfolio-card-content-wrap">
                            <div class="content-left">
                                <h3 class="portfolio-card-title"><a class="link" href="project-details.html">In this portfolio, you’ll find a curated selection</a></h3>
                                <p class="portfoli-card-para">Web Design</p>
                            </div>
                            <a href="project-details.html" class="tmp-arrow-icon-btn">
                                <div class="btn-inner">
                                    <i class="tmp-icon fa-solid fa-arrow-up-right"></i>
                                    <i class="tmp-icon-bottom fa-solid fa-arrow-up-right"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-sm-6">
                    <div class="latest-portfolio-card tmp-hover-link tmp-scroll-trigger tmp-fade-in animation-order-4">
                        <div class="portfoli-card-img">
                            <div class="img-box v2">
                                <a class="tmp-scroll-trigger tmp-zoom-in animation-order-1" href="project-details.html">
                                    <img class="w-100" src="{{ asset('assets/images/latest-portfolio/portfoli-img-4.jpg') }}" alt="Thumbnail">
                                </a>
                            </div>
                        </div>
                        <div class="portfolio-card-content-wrap">
                            <div class="content-left">
                                <h3 class="portfolio-card-title"><a class="link" href="project-details.html">I’ve had the privilege of working with various</a></h3>
                                <p class="portfoli-card-para">App Development</p>
                            </div>
                            <a href="project-details.html" class="tmp-arrow-icon-btn">
                                <div class="btn-inner">
                                    <i class="tmp-icon fa-solid fa-arrow-up-right"></i>
                                    <i class="tmp-icon-bottom fa-solid fa-arrow-up-right"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Tpm Latest Portfolio Area End -->


    <!-- Tpm Testimonial Area Start -->
    <section class="testimonial tmp-section-gapTop">
        <div class="testimonial-wrapper">
            <div class="container">
                <div class="swiper testimonial-swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testimonial-card">
                                <div class="card-content-wrap">
                                    <h2 class="text-doc">Working with themespark was an absolute pleasure! They understood my vision immediately and brought it to life even better than I’d imagined.</h2>
                                    <h3 class="card-title">Cameron Williamson</h3>
                                    <p class="card-para">Ui/Ux Designer</p>
                                    <div class="testimonital-icon">
                                        <img src="{{ asset('assets/images/testimonial/testimonial-icon.svg') }}" alt="testimonial-icon">
                                    </div>
                                </div>
                                <div class="testimonial-card-img">
                                    <img class="tmp-scroll-trigger tmp-zoom-in animation-order-1" src="{{ asset('assets/images/testimonial/bg-image-1png.png') }}" alt="bg-image">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-card">
                                <div class="card-content-wrap">
                                    <h2 class="text-doc">ThemesPark is incredibly talented and detail-oriented. They took the time to understand my brand and created something truly unique</h2>
                                    <h3 class="card-title">Cameron Williamson</h3>
                                    <p class="card-para">Ui/Ux Designer</p>
                                    <div class="testimonital-icon">
                                        <img src="{{ asset('assets/images/testimonial/testimonial-icon.svg') }}" alt="testimonial-icon">
                                    </div>
                                </div>
                                <div class="testimonial-card-img">
                                    <img class="tmp-scroll-trigger tmp-zoom-in animation-order-2" src="{{ asset('assets/images/testimonial/bg-image-2.png') }}" alt="bg-image">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-card">
                                <div class="card-content-wrap">
                                    <h2 class="text-doc">A personal portfolio is a curated collection of an individual's
                                        professional work, showcasing their skills, experience, and achievements</h2>
                                    <h3 class="card-title">Cameron Williamson</h3>
                                    <p class="card-para">Ui/Ux Designer</p>
                                    <div class="testimonital-icon">
                                        <img src="{{ asset('assets/images/testimonial/testimonial-icon.svg') }}" alt="testimonial-icon">
                                    </div>
                                </div>
                                <div class="testimonial-card-img">
                                    <img class="tmp-scroll-trigger tmp-zoom-in animation-order-3" src="{{ asset('assets/images/testimonial/bg-image-1png.png') }}" alt="bg-image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- </div> -->
                <div class="testimonial-btn-next-prev">
                    <div class="swiper-button-next"><i class="fa-solid fa-arrow-right"></i></div>
                    <div class="swiper-button-prev"><i class="fa-solid fa-arrow-left"></i></div>
                </div>
            </div>
        </div>
    </section>
    <!-- Tpm Testimonial Area End -->

    <!-- Tpm Get In touch start -->
    <section class="get-in-touch-area tmp-section-gapTop mb-5">
        <div class="container">
            <div class="contact-get-in-touch-wrap">
                <div class="get-in-touch-wrapper tmponhover">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-5">
                            <div class="section-head text-align-left">
                                <div class="section-sub-title tmp-scroll-trigger tmp-fade-in animation-order-1">
                                    <span class="subtitle">GET IN TOUCH</span>
                                </div>
                                <h2 class="title split-collab tmp-scroll-trigger tmp-fade-in animation-order-2">Elevate your brand with Me </h2>
                                <p class="description tmp-scroll-trigger tmp-fade-in animation-order-3">ished fact that a reader will be
                                    distrol acted bioiiy desig
                                    ished fact that a reader will acted ished fact that a reader will be distrol
                                    acted </p>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="contact-inner">
                                <div class="contact-form">
                                    <div id="form-messages" class="error"></div>
                                    <form class="tmp-dynamic-form" id="contact-form" method="POST" action="{{ route('home') }}product/html/reeni/mailer.php">
                                        <div class="contact-form-wrapper row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <input class="input-field" name="name" id="contact-name" placeholder="Your Name" type="text" required>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <input class="input-field" id="contact-phone" placeholder="Phone Number" type="number" required>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <input class="input-field" id="contact-email" name="email" placeholder="Your Email" type="email" required>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <input class="input-field" type="text" id="subject" name="subject" placeholder="Subject">
                                                </div>
                                            </div>

                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <textarea class="input-field" placeholder="Your Message" name="message" id="contact-message" required></textarea>
                                                </div>
                                            </div>

                                            <div class="col-lg-12">
                                                <div class="tmp-button-here">
                                                    <button class="tmp-btn hover-icon-reverse radius-round w-100" name="submit" type="submit" id="submit">
                                                        <span class="icon-reverse-wrapper">
                                        <span class="btn-text">Appointment Now</span>
                                                        <span class="btn-icon"><i class="fa-sharp fa-regular fa-arrow-right"></i></span>
                                                        <span class="btn-icon"><i class="fa-sharp fa-regular fa-arrow-right"></i></span>
                                                        </span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Tpm Get In touch End -->


@endsection

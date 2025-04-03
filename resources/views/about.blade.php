@extends('layout')
@section('title', 'About')
@section('content')
    <!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner text-center">
                        <h1 class="title split-collab">About Me</h1>
                        <ul class="page-list">
                            <li class="tmp-breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="icon"><i class="fa-solid fa-angle-right"></i></li>
                            <li class="tmp-breadcrumb-item active">About Me</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->

    <!-- Tpm Service Area Start -->
    <section class="service-area tmp-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="custom-title mb--30 tmp-scroll-trigger tmp-fade-in animation-order-1">
                        About Me <span><img src="{{ asset('assets/images/custom-line/custom-line.png') }}" alt="custom-line"></span>
                    </h2>
                    <div>
                        <ul class="fw-bold">
                            <li><h6>Profile:</h6> Data Science and Data Analytics.</li>
                            <li><h6>Domain:</h6> E-commerce & Retail Analytics, Supply Chain & Logistics Analytics, Marketing & Customer Analytics.</li>
                            <li><h6>Education:</h6> Master in Mathematics.</li>
                            <li><h6>Language:</h6> English, Urdu.</li>
                            <li><h6>Interest:</h6> Football, Swimming, Traveling.</li>
                        </ul>
                        <br>
                        <p class="fw-bold">
                            This is Shahrukh Shamshad, and I am a passionate data storyteller dedicated to transforming complex datasets into clear, actionable insights. I specialize in analyzing trends, visualizing patterns, and crafting intuitive narratives that drive strategic decision-making. Whether decoding customer behavior, optimizing business processes, or enhancing data-driven strategies, I thrive on turning raw data into meaningful business solutions.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Tpm Service Area End -->

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

    <!-- Tpm Get In touch start -->
    <section class="get-in-touch-area tmp-section-gapBottom mb-5">
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

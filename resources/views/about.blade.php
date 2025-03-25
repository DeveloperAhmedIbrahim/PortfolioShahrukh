@extends('layout')
@section('title', 'About')
@section('content')
    <section id="about-us" class="d-flex align-items-center justify-content-center">
        <div class="container" data-aos="fade-up">

            <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
                <div class="col-xl-6 col-lg-8">
                    <h1>ABOUT <span>US</span></h1>
                    <div class="section-title">
                        <h2></h2>

                    </div>


                </div>
            </div>

        </div>
    </section>
    <main>
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                        <img src="{{ asset("assets/img/About.png") }}" class="about-img" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right"
                        data-aos-delay="100">
                        <div class="section-title">
                            <h2>About Me</h2>
                            <p>Who <span>Am I?<span></p>
                        </div>
                        <p class="early fs-5">
                            My name is <b>Shahrukh Shamshad</b>, and I am a passionate data storyteller dedicated to transforming complex datasets into clear, actionable insights. I specialize in analyzing trends, visualizing patterns, and crafting intuitive narratives that drive strategic decision-making. Whether decoding customer behavior, optimizing business processes, or enhancing data-driven strategies, I thrive on turning raw data into meaningful business solutions.
                            <ul>
                                <li><b>Profile:</b> Data Science and Data Analytics.</li>
                                <li><b>Domain:</b> E-commerce & Retail Analytics, Supply Chain & Logistics Analytics, Marketing & Customer Analytics.</li>
                                <li><b>Education:</b> Master of Science.</li>
                                <li><b>Language:</b> English, Urdu.</li>
                                <li><b>Interest:</b> Football, Swimming, Traveling.</li>
                            </ul>
                        </p>
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
                        <div class="about_us">
                            <p>Technical <span>Skills</span></p>
                        </div>
                        <p class="early">
                            <ul>
                                <li><b>Programming Languages:</b> Python, R.</li>
                                <li><b>Database Management Systems:</b> SQL, MySQL, PostgreSQL.</li>
                                <li><b>Microsoft Office Suite:</b> Word, Excel, Access, PowerPoint</li>
                                <li><b>Data Visualization Tools:</b> Power BI, Tableau</li>
                                <li><b>Statistical Analysis & Data Modeling.</b></li>
                                <li><b>Machine Learning & AI.</b></li>
                                <li><b>Big Data Technologies:</b> Hadoop, Spark.</li>
                                <li><b>Version Control:</b> Git, GitHub.</li>
                                <li><b>Cloud Computing:</b> AWS, Google Cloud, Azure.</li>
                                <li><b>Data Cleaning & Preprocessing</b>.</li>
                                <li><b>ETL (Extract, Transform, Load) Processes.</b></li>
                                <li><b>Web Scraping & APIs (Using BeautifulSoup, Scrapy, and REST APIs).</b></li>
                            </ul>
                        </p>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                        <div class="about_us">
                            <p>Soft <span>Skills</span></p>
                        </div>
                        <p class="early">
                            <ul>
                                <li><b>Analytical Thinking</b></li>
                                <li><b>Problem-Solving</b></li>
                                <li><b>Attention to Detail</b></li>
                                <li><b>Communication & Interpersonal Skills</b></li>
                                <li><b>Critical Thinking</b></li>
                                <li><b>Time Management</b></li>
                                <li><b>Collaboration & Teamwork</b></li>
                                <li><b>Adaptability & Flexibility</b></li>
                                <li><b>Storytelling with Data</b></li>
                                <li><b>Curiosity & Continuous Learning</b></li>
                                <li><b>Patience & Resilience</b></li>
                                <li><b>Leadership & People Management</b></li>
                                <li><b>Emotional Intelligence</b></li>
                                <li><b>Decision-Making</b></li>
                                <li><b>Negotiation & Persuasion</b></li>
                                <li><b>Public Speaking & Presentation Skillst</b></li>
                            </ul>
                        </p>
                    </div>
                </div>

            </div>
        </section>

        <section id="cta" class="cta">
            <div class="container" data-aos="zoom-in">

                <div class="text-center">
                    <h3>I'm Delivering The Best Customer Experience</h3>
                    <div class=row>
                        <div class="col-lg-6 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in"
                            data-aos-delay="300">
                            <div class="icon-box">
                                <h3><a href="#">My Mission</a></h3>
                                <p class="early">
                                    My mission is to unlock the true potential of data by transforming raw numbers into meaningful insights. I am passionate about helping businesses make data-driven decisions that drive growth, efficiency, and innovation. Through advanced analytics, visualization, and predictive modeling, I aim to turn complex data into clear, actionable strategies.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in"
                            data-aos-delay="300">
                            <div class="icon-box">
                                <h3><a href="#">My Vision</a></h3>
                                <p class="early">
                                    I envision a future where businesses fully utilize data to stay ahead in an ever-evolving world. My goal is to bridge the gap between data and decision-making, providing insights that enhance performance and create new opportunities. With expertise in data analytics, business intelligence, and AI-driven solutions, I strive to make data work smarter for businesses and individuals alike.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </section>
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-12 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right"
                        data-aos-delay="100">
                        <div class="section-title">
                            <p><span>Education</span></p>
                            <hr>
                        </div>
                        <p class="early fs-5">
                            <b class="d-flex align-items-center"><i class='bx bxs-circle fs-6'></i>&nbsp;Master of Science in Mathematics.</b>
                            <ul>
                                <li><b>Date:</b> NOV 2020 to APR 2022.</li>
                                <li><b>Majors:</b> Pure Mathematics, Applied Mathematics, Statistics & Probability, Computational Mathematics, Operations Research.</li>
                            </ul>
                        </p>
                        <p class="early fs-5">
                            <b class="d-flex align-items-center"><i class='bx bxs-circle fs-6'></i>&nbsp;Bachelor of Science.</b>
                            <ul>
                                <li><b>Date:</b> NOV 2020 to APR 2022.</li>
                                <li><b>Majors:</b> Pure Mathematics, Applied Mathematics, Statistics & Probability, Computational Mathematics, Operations Research.</li>
                            </ul>
                        </p>
                        <p class="early fs-5">
                            <b class="d-flex align-items-center"><i class='bx bxs-circle fs-6'></i>&nbsp;Associate Degree in Education.</b>
                            <ul>
                                <li><b>Date:</b> NOV 2020 to APR 2022.</li>
                                <li><b>Majors:</b> Pure Mathematics, Applied Mathematics, Statistics & Probability, Computational Mathematics, Operations Research.</li>
                            </ul>
                        </p>
                        <p class="early fs-5">
                            <b class="d-flex align-items-center"><i class='bx bxs-circle fs-6'></i>&nbsp;Diploma of Associate Engineer.</b>
                            <ul>
                                <li><b>Date:</b> NOV 2020 to APR 2022.</li>
                                <li><b>Majors:</b> Pure Mathematics, Applied Mathematics, Statistics & Probability, Computational Mathematics, Operations Research.</li>
                            </ul>
                        </p>
                    </div>
                </div>

            </div>
        </section>
        <section id="cta" class="cta">
            <div class="container" data-aos="zoom-in">
                <div class=row>
                    <div class="col-lg-6 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in"
                        data-aos-delay="300">
                        <div class="icon-box">
                            <img src="{{ asset("assets/img/ACHIEVEMENT.png") }}" class="milestones-img" alt="">

                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in"
                        data-aos-delay="300">
                        <div class="milestones">
                            <p>Milestones and Achievements</p>
                            <span class="early">Over the years, we've achieved many important milestones. We've launched
                                successful websites,
                                mobile
                                apps, and software solutions for businesses of all sizes and industries. We've won awards
                                for
                                our
                                work, and we've been recognized as a leader in our industry.
                                We're proud of the work we've done and the impact we've had on our clients' businesses.
                                We've
                                helped
                                businesses grow their online presence, increase their revenue, and reach new customers.
                                We've
                                also
                                helped businesses adapt to new technologies and stay ahead of the competition.
                            </span>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <p><span>Experience</span></p>
                            <hr>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <h4><b>2021 - Present</b></h4>
                                <p class="fs-5">Senior Data Analyst.</p>
                                <h6>MERKLE</h6>
                                <ul>
                                    <li>Leading a team of 5 data analysts in a global CRM and marketing company with over 10K+ professionals globally. It’s a part of Dentons with 100+ operational countries.</li>
                                    <li>Analyze company campaigns, clickstream, and customer survey data to identify trends, patterns, and insights.</li>
                                    <li>Developed strategic product line recommendations, resulting in a 15% increase in sales and marketing budgets, got model performance of 82%.</li>
                                    <li>Built 18 A/B tests, performed rigorous statistical analysis, led to 20% MoM in the conversion rate.</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <h4><b>2018 - 2021</b></h4>
                                <p class="fs-5">Senior Data Analyst.</p>
                                <h6>IQUANTI</h6>
                                <ul>
                                    <li>Led a team of 3 data analysts in a digital marketing agency focused on solutions for companies with top 100 global brands.</li>
                                    <li>Performed in-depth market research and analysis to create online reports, resulting in 100% accurate growth and 30% increase in conversion rate year over year.</li>
                                    <li>Developed 10+ predictive models using statistical tools like SQL, Excel, Tableau, Power BI, and Python.</li>
                                    <li>Conducted research and enhancements for merchandising dashboard, involving data integration and its feature improvement.</li>
                                </ul>
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

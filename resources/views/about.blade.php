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
                            <h2>About Us</h2>
                            <p>Founding of <span>the Company<span></p>
                        </div>
                        <p class="early">
                            Our company was founded in <b>2019</b> by a group of friends who shared a passion for software
                            engineering.
                            At the time, they were all working for different companies, but they shared a common goal: to
                            create
                            a company that would provide businesses with the tools they need to succeed online. They saw the
                            potential of the internet and wanted to help businesses take advantage of it.
                            The founders had different areas of expertise, which allowed them to create a well-rounded team.
                            They had experience in software development, digital marketing, and business management. They
                            knew
                            that these skills would be essential to the success of their company.
                            After months of planning and preparation, they finally launched their company. They started out
                            small, working out of a shared office space. But they had big dreams and a clear vision of what
                            they
                            wanted to achieve. They knew that they would face challenges along the way, but they were
                            determined
                            to succeed.

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
                                    <p>call to <span>action</span></p>
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
                                    <strong>Phone:</strong> (+92) 3434718990<br>
                                    <strong>Email:</strong> <a href="cdn-cgi/l/email-protection.html" class="__cf_email__"
                                        data-cfemail="650c0b030a25041f160a0910110c0a0b16150e4b060a08">[email&#160;protected]</a>
                                    <br>
                                    <a href="cdn-cgi/l/email-protection.html" class="__cf_email__"
                                        data-cfemail="7b1d1a12010a1a121610131a15123b1c161a121755181416">[email&#160;protected]</a>
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
                            <p>Early Challenges and <span>Success</span></p>
                        </div>
                        <p class="early">
                            Like any new business, our company faced its share of challenges in the early days. One of the
                            biggest challenges was finding clients. They knew that they had the skills and expertise to help
                            businesses succeed online, but they needed to get the word out.
                            To overcome this challenge, they started attending networking events and reaching out to their
                            personal and professional networks. They offered free consultations and worked hard to build
                            relationships with potential clients. Slowly but surely, they began to build a client base.
                            Despite the challenges, our company had early successes that gave them the confidence they
                            needed to
                            keep going. They landed their first major client within the first year of launching. This was a
                            huge
                            milestone for the team and gave them the motivation they needed to keep pushing forward.They
                            landed
                            their first major client within the first year of launching. This was a huge
                            milestone for the team and gave them the motivation.
                        </p>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right"
                        data-aos-delay="100">
                        <img src="{{ asset("assets/img/success.jpg") }}" class="success-img" alt="">
                    </div>
                </div>

            </div>
        </section>

        <section id="cta" class="cta">
            <div class="container" data-aos="zoom-in">

                <div class="text-center">
                    <h3>We’re Delivering The Best Customer Experience</h3>
                    <div class=row>
                        <div class="col-lg-6 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in"
                            data-aos-delay="300">
                            <div class="icon-box">
                                <h3><a href="#">Our Mission</a></h3>
                                <p class="early">Our mission is to take the business to new heights with advanced IT
                                    services.
                                    The
                                    industry is growing as time passes and we are continuously searching for new
                                    technologies and tactics to meet the industry level. We are also focused on reaching out
                                    to new opportunities that will help to stay ahead. We think that our passion for
                                    technology and continuous struggle will drive more success in the coming years.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in"
                            data-aos-delay="300">
                            <div class="icon-box">
                                <h3><a href="#">Our Vision</a></h3>
                                <p class="early">We use all resources to reach our customer's goals. To revolutionize the
                                    industry through
                                    innovation, we empower individuals and organizations worldwide with advanced solutions.
                                    Committed to sustainability, customer-centricity, and global reach, we lead the industry
                                    by anticipating change and delivering excellence. Together, we shape a brighter future.
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
                    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right"
                        data-aos-delay="100">
                        <div class="section-title">
                            <p><span>GROWTH</span> AND EXPANSION</p>
                        </div>
                        <p class="early">
                            As our company's reputation grew, so did the demand for our services. We started out focusing on
                            Website design/development, and Custom Software Development, but we soon expanded our services
                            to
                            include API Development and Integration and mobile app development.
                            To keep up with the demand, we had to grow our team. We started out with just a handful of
                            employees, but we now have a team of over 23 highly skilled professionals. We've hired some of
                            the
                            best and brightest in the industry, and we're proud of the team we've built.
                            We've also expanded our physical presence. We started out working out of a shared office space,
                            but
                            we now have our own office building. We've invested in state-of-the-art equipment and technology
                            to
                            ensure that our team has everything they need to do their best work.
                        </p>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                        <div class="section-title">
                            <p> <span>Company</span> Values and Culture</p>
                        </div>
                        <p class="early">
                            At our company, we believe that our success is directly tied to the success of our clients.
                            We're
                            passionate about helping businesses succeed online, and we're committed to providing them with
                            the
                            tools and expertise they need to do so.
                            We also believe in fostering a positive and supportive company culture. We prioritize teamwork
                            and
                            collaboration, and we're always looking for ways to help our employees grow and develop their
                            skills. We've created a company culture that is focused on innovation, creativity, and
                            continuous
                            learning.</p>

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
                            <p><span>Future</span> Plans and Goals</p>
                        </div>
                        <p>
                            As we look to the future, we're excited about the opportunities that lie ahead. We're committed
                            to continuing to innovate and develop new solutions that will help our clients succeed online.
                            We're also focused on expanding our reach and serving businesses in new industries and markets.
                            We're constantly exploring new technologies and techniques that will help us stay ahead of the
                            curve. We believe that our passion for innovation and our commitment to excellence will continue
                            to drive our success in the years to come.

                        </p>
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
                                    <p>call to <span>action</span></p>
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
                                    <strong>Phone:</strong> (+92) 3434718990<br>
                                    <strong>Email:</strong> <a href="cdn-cgi/l/email-protection.html" class="__cf_email__"
                                        data-cfemail="e1888f878ea1809b928e8d9495888e8f92918acf828e8c">[email&#160;protected]</a>
                                    <br>
                                    <a href="cdn-cgi/l/email-protection.html" class="__cf_email__"
                                        data-cfemail="1e787f77646f7f777375767f70775e79737f7772307d7173">[email&#160;protected]</a>
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
                    <div class="col-lg-12">
                        <div class="section-title">
                            <p>See what <span>Our CEO</span> says</p>
                        </div>
                        <p>
                            At our <b>AZ Solutions</b>, we're proud of the team we've built. We've hired some of the best
                            and
                            brightest in the industry, and we're committed to fostering a positive and supportive company
                            culture.
                            <b>Faiz QaimKhani</b>

                        </p>

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

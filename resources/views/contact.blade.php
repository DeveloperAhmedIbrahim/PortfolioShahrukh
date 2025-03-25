@extends('layout')
@section('title', 'Contact')
@section('content')
    <section id="about-us" class="d-flex align-items-center justify-content-center">
        <div class="container" data-aos="fade-up">

            <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
                <div class="col-xl-6 col-lg-8">
                    <h1>CONTACT US</h1>

                </div>
            </div>

        </div>
    </section>
    <main>

        <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Contact</h2>
                <p>Write Us A <span>Message</span></p>

            </div>

            <div class="row mt-5">

                <div class="col-lg-4">
                    <div class="info">
                        <div class="address">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Location:</h4>
                            <p> Office No # 401, Floor 9th, Dawood Mart, Main Auto Bhan Road, Hyderabad, Pakistan</p>
                        </div>

                        <div class="email">
                            <i class="bi bi-envelope"></i>
                            <h4>Email:</h4>
                            <p> <a href="email:shahruukh.shamshad3@gmail.com">shahruukh.shamshad3@gmail.com</a></p>                            </p>
                        </div>

                        <div class="phone">
                            <i class="bi bi-phone"></i>
                            <h4>Call:</h4>
                            <p>+92 (303) 4819561</p>
                        </div>

                    </div>

                </div>
                <div class="col-lg-8 mt-5 mt-lg-0">
                    <form action="#" method="post" role="form" class="">
                        <div class="row">
                            <div class="col-md-6 form-group mt-3">
                                <small class="text-center ml-5" style="color:green; font-weight:bold; text-align:center">
                                    <!-- Your message has been sent -->
                                </small>
                                <input type="text" name="name" class="form-control" id="name"
                                    placeholder="Your Name" required>
                                <small style="color:red;">
                                </small>
                            </div>
                            <div class="col-md-6 form-group mt-3">
                                <input type="email" name="email" class="form-control" id="email" placeholder="Email"
                                    required>
                                <small style="color:red;">
                                </small>
                            </div>
                            <div class="col-md-6 form-group mt-3">
                                <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone"
                                    required>
                                <small style="color:red;">
                                </small>
                            </div>
                            <div class="col-md-6 form-group mt-3">
                                <input type="text" class="form-control" name="address" id="address"
                                    placeholder="Address" required>
                                <small style="color:red;">
                                </small>
                            </div>
                            <div class="col-md-6 form-group mt-3">
                                <input type="select" class="form-control" name="service" id="service"
                                    placeholder="Select Service" required>
                                <small style="color:red;">
                                </small>
                            </div>
                            <div class="col-md-6 form-group mt-3">
                                <input type="text" class="form-control" name="budget" id="budget"
                                    placeholder="Estimated Budget" required>
                                <small style="color:red;">
                                </small>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                                required>
                            <small style="color:red;">
                            </small>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                            <small style="color:red;">
                            </small>
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

        </div>
    </section>
    <div>
        <iframe style="border:0; width: 100%; height: 270px;"
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
            frameborder="0" allowfullscreen></iframe>
    </div>

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

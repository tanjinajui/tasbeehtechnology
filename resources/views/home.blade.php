<!-- header and footer file master include -->
@extends('layouts.includes.master')
<!-- title set -->
@section('title', 'Home')
@section('content')
    <section class="slider-section  swiper-container-2" data-aos="fade-up">
        <div class="swiper-wrapper">
            <div class="slider-area-2 height-600 swiper-slide" style="background-image:url(assets/images/slider_bg.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="slider-content-2 overlay_3 p-5">
                                <h6>Online Learning</h6>
                                <h2 class="display-3">Start learning at <span>Your Home</span></h2>
                                <a href="#" class="button_two mt-4">Get In Touch</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-area-2 height-600 swiper-slide" style="background-image:url(assets/images/home_2_slide.jpg)">
                <div class="container">
                    <div class="col-md-8">
                        <div class="slider-content-2 overlay_3 p-5">
                            <h6>Online Learning</h6>
                            <h2 class="display-3">Start learning <span>Your Home</span></h2>
                            <a href="#" class="button_two mt-4">Get In Touch</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-area-2 height-600 swiper-slide" style="background-image:url(assets/images/slider_bg_4.jpg)">
                <div class="container">
                    <div class="col-md-8">
                        <div class="slider-content-2 overlay_3 p-5">
                            <h6>Online Learning</h6>
                            <h2 class="display-3">Start learning<span>Your Home</span></h2>
                            <a href="#" class="button_two mt-4">Get In Touch</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </section>
    <!-- End Slider -->
    <!-- Start Services -->
    <section class="services-section section-ptb">
        <div class="services-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="service-wrapper shadow-theme-lg">
                            <div class="row">
                                <div class="col-md-4 mb-xs-5" data-aos="fade-up" data-aos-duration="300">
                                    <div class="single-service-2 text-center py-5 px-4">
                                        <div class="service-icon">
                                            <img src="assets/images/service_icon_04.png" alt="service one"
                                                class="img-fluid">
                                        </div>
                                        <div class="service-text">
                                            <h4>Skilled Lecturers</h4>
                                            <p>The point of using Lorem Ipsum is that it has a more-or-less normal
                                                distribution of letters, as opposed to using.</p>
                                            <a href="#">Read More <i class="fas fa-angle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-xs-5" data-aos="fade-up" data-aos-duration="500">
                                    <div class="single-service-2 text-center py-5 px-4">
                                        <div class="service-icon">
                                            <img src="assets/images/service_icon_05.png" alt="service one"
                                                class="img-fluid">
                                        </div>
                                        <div class="service-text">
                                            <h4>Scholarship Facility</h4>
                                            <p>The point of using Lorem Ipsum is that it has a more-or-less normal
                                                distribution of letters, as opposed to using.</p>
                                            <a href="#">Read More <i class="fas fa-angle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-xs-5" data-aos="fade-up" data-aos-duration="700">
                                    <div class="single-service-2 text-center py-5 px-4">
                                        <div class="service-icon">
                                            <img src="assets/images/service_icon_06.png" alt="service one"
                                                class="img-fluid">
                                        </div>
                                        <div class="service-text">
                                            <h4>Book Library & Store</h4>
                                            <p>The point of using Lorem Ipsum is that it has a more-or-less normal
                                                distribution of letters, as opposed to using.</p>
                                            <a href="#">Read More <i class="fas fa-angle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Services -->
    <!-- Start Welcome Section -->
    <section class="welcome-section section-pb">
        <div class="welcome-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="half_column_content_2" data-aos="fade-up" data-aos-duration="300">
                            <h2 class="font-weight-bold">Eduaid is Awesome</h2>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab maxime architecto voluptatum
                                asperiores quisquam dolore numquam, necessitatibus corporis vel provident adipisci
                                laboriosam fugiat dignissimos sit aliquam rerum ipsam assumenda dolorem.</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam velit vero voluptas
                                ratione quasi fuga commodi autem repellendus officia ex!</p>
                            <div class="theme-list-2">
                                <ul>
                                    <li><a href="#">Best Industry Leaders</a></li>
                                    <li><a href="#">Best Industry Leaders</a></li>
                                    <li><a href="#">Learn Courses Online</a></li>
                                </ul>
                            </div>
                            <div class="theme-list-2 ml-xl-5">
                                <ul>
                                    <li><a href="#">Best Industry Leaders</a></li>
                                    <li><a href="#">Best Industry Leaders</a></li>
                                    <li><a href="#">Learn Courses Online</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-3d-5" data-aos="fade-up" data-aos-duration="600">
                        <div class="half_column_image">
                            <img src="assets/images/half_column_2.jpg" alt="welcome" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="row mt-4" data-aos="fade-up" data-aos-duration="500">
                    <div class="col-md-3 col-sm-6 mb-xs-2">
                        <div class="single-countdown-2">
                            <span class="counter">60</span>
                            <p>Teachers</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-xs-2">
                        <div class="single-countdown-2">
                            <span class="counter">800</span>
                            <p>Students</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="single-countdown-2">
                            <span class="counter">37</span>
                            <p>Courses</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="single-countdown-2">
                            <span class="counter">19</span>
                            <p>National Awards</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Welcome Section -->
    <!-- Start Featured Section -->
    <section class="featured-section-3 section-ptb semi_dark_bg" style="background-image:url(assets/images/big_bg.jpg);">
        <div class="featured-area show_navigation_2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title-2" data-aos="fade-up" data-aos-duration="300">
                            <h4>Best Courses</h4>
                            <h2 class="text-white">Featured Courses</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="featured-carousel owl-carousel">
                            <div class="single-featured-2  bg-white" data-aos="fade-up" data-aos-duration="300">
                                <div class="feature-image">
                                    <img src="assets/images/featured_01.jpg" alt="Featured" class="img-fluid">
                                    <div class="product-price-2">
                                        <p>$80</p>
                                    </div>
                                </div>
                                <div class="featured-text-and-info border border-top-0">
                                    <div class="feature-status-wrapper border-bottom">
                                        <div class="feature-status-2 px-4 py-3">
                                            <div class="single-status">
                                                <i class="fas fa-user"></i>
                                                <span>M Park</span>
                                            </div>
                                            <div class="single-status">
                                                <i class="fas fa-users"></i>
                                                <span>16 Seats</span>
                                            </div>
                                            <div class="single-status">
                                                <i class="fa fa-clock"></i>
                                                <span>4 Years</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="feature-content-2 p-4">
                                        <h3><a href="#">Advanced Web Design</a></h3>
                                        <p>Mauris at varius orci. Vestibulum um felis eu nisl pulvinar, quis ultricies nibh.
                                            Sed ultricies ante vitae.</p>
                                        <a href="#" class="button_two mb-3">Apply Now <i
                                                class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="single-featured-2  bg-white" data-aos="fade-up" data-aos-duration="500">
                                <div class="feature-image">
                                    <img src="assets/images/featured_02.jpg" alt="Featured" class="img-fluid">
                                    <div class="product-price-2">
                                        <p>$80</p>
                                    </div>
                                </div>
                                <div class="featured-text-and-info border border-top-0">
                                    <div class="feature-status-wrapper border-bottom">
                                        <div class="feature-status-2 px-4 py-3">
                                            <div class="single-status">
                                                <i class="fas fa-user"></i>
                                                <span>M Park</span>
                                            </div>
                                            <div class="single-status">
                                                <i class="fas fa-users"></i>
                                                <span>16 Seats</span>
                                            </div>
                                            <div class="single-status">
                                                <i class="fa fa-clock"></i>
                                                <span>4 Years</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="feature-content-2 p-4">
                                        <h3><a href="#">Web Development</a></h3>
                                        <p>Mauris at varius orci. Vestibulum um felis eu nisl pulvinar, quis ultricies nibh.
                                            Sed ultricies ante vitae.</p>
                                        <a href="#" class="button_two mb-3">Apply Now <i
                                                class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="single-featured-2  bg-white" data-aos="fade-up" data-aos-duration="500">
                                <div class="feature-image">
                                    <img src="assets/images/featured_03.jpg" alt="Featured" class="img-fluid">
                                    <div class="product-price-2">
                                        <p>$80</p>
                                    </div>
                                </div>
                                <div class="featured-text-and-info border border-top-0">
                                    <div class="feature-status-wrapper border-bottom">
                                        <div class="feature-status-2 px-4 py-3">
                                            <div class="single-status">
                                                <i class="fas fa-user"></i>
                                                <span>M Park</span>
                                            </div>
                                            <div class="single-status">
                                                <i class="fas fa-users"></i>
                                                <span>16 Seats</span>
                                            </div>
                                            <div class="single-status">
                                                <i class="fa fa-clock"></i>
                                                <span>4 Years</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="feature-content-2 p-4">
                                        <h3><a href="#">Graphic Design</a></h3>
                                        <p>Mauris at varius orci. Vestibulum um felis eu nisl pulvinar, quis ultricies nibh.
                                            Sed ultricies ante vitae.</p>
                                        <a href="#" class="button_two mb-3">Apply Now <i
                                                class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="single-featured-2  bg-white" data-aos="fade-up" data-aos-duration="600">
                                <div class="feature-image">
                                    <img src="assets/images/featured_04.jpg" alt="Featured" class="img-fluid">
                                    <div class="product-price-2">
                                        <p>$80</p>
                                    </div>
                                </div>
                                <div class="featured-text-and-info border border-top-0">
                                    <div class="feature-status-wrapper border-bottom">
                                        <div class="feature-status-2 px-4 py-3">
                                            <div class="single-status">
                                                <i class="fas fa-user"></i>
                                                <span>M Park</span>
                                            </div>
                                            <div class="single-status">
                                                <i class="fas fa-users"></i>
                                                <span>16 Seats</span>
                                            </div>
                                            <div class="single-status">
                                                <i class="fa fa-clock"></i>
                                                <span>4 Years</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="feature-content-2 p-4">
                                        <h3><a href="#">UI Design</a></h3>
                                        <p>Mauris at varius orci. Vestibulum um felis eu nisl pulvinar, quis ultricies nibh.
                                            Sed ultricies ante vitae.</p>
                                        <a href="#" class="button_two mb-3">Apply Now <i
                                                class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="single-featured-2  bg-white" data-aos="fade-up" data-aos-duration="700">
                                <div class="feature-image">
                                    <img src="assets/images/featured_05.jpg" alt="Featured" class="img-fluid">
                                    <div class="product-price-2">
                                        <p>$80</p>
                                    </div>
                                </div>
                                <div class="featured-text-and-info border border-top-0">
                                    <div class="feature-status-wrapper border-bottom">
                                        <div class="feature-status-2 px-4 py-3">
                                            <div class="single-status">
                                                <i class="fas fa-user"></i>
                                                <span>M Park</span>
                                            </div>
                                            <div class="single-status">
                                                <i class="fas fa-users"></i>
                                                <span>16 Seats</span>
                                            </div>
                                            <div class="single-status">
                                                <i class="fa fa-clock"></i>
                                                <span>4 Years</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="feature-content-2 p-4">
                                        <h3><a href="#">UX Design</a></h3>
                                        <p>Mauris at varius orci. Vestibulum um felis eu nisl pulvinar, quis ultricies nibh.
                                            Sed ultricies ante vitae.</p>
                                        <a href="#" class="button_two mb-3">Apply Now <i
                                                class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Featured Section -->
    <!-- Start Our Team Carousel -->
    <section class="team-section section-ptb" style="background-image:url(assets/images/big_bg_2.jpg);"
        data-aos="fade-up" data-aos-duration="300">
        <div class="our-team-area show_navigation">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title-2 text-center mb-4">
                            <h4>Our Teachers</h4>
                            <h2>Best Certified Faculty</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="our-team-carousel-2 owl-carousel">
                            <div class="single-team">
                                <div class="member-image-2">
                                    <img src="assets/images/member_04.jpg" alt="team member" class="img-fluid">
                                    <div class="social-profile-2">
                                        <ul>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="member-info-2 border border-top-0 text-center p-4">
                                    <div class="designation mb-3">
                                        <h5>Mitchel Sweedon</h5>
                                        <span>CEO & Founder</span>
                                    </div>
                                    <div class="extra-skilled">
                                        <p><strong>Experience:</strong> 3 Years</p>
                                        <p><strong>Specialist:</strong> PHP, .NET</p>
                                        <p><strong>Total:</strong> 0 Lesson(s)</p>
                                    </div>
                                </div>
                            </div>
                            <div class="single-team">
                                <div class="member-image-2">
                                    <img src="assets/images/member_05.jpg" alt="team member" class="img-fluid">
                                    <div class="social-profile-2">
                                        <ul>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="member-info-2 border border-top-0 text-center p-4">
                                    <div class="designation mb-3">
                                        <h5>Stephen Hoking</h5>
                                        <span>Physics Teacher</span>
                                    </div>
                                    <div class="extra-skilled">
                                        <p><strong>Experience:</strong> 1 Years</p>
                                        <p><strong>Specialist:</strong> ASP.NET</p>
                                        <p><strong>Total:</strong> 10 Lesson(s)</p>
                                    </div>
                                </div>
                            </div>
                            <div class="single-team">
                                <div class="member-image-2">
                                    <img src="assets/images/member_06.jpg" alt="team member" class="img-fluid">
                                    <div class="social-profile-2">
                                        <ul>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="member-info-2 border border-top-0 text-center p-4">
                                    <div class="designation mb-3">
                                        <h5>Micheal Jhon</h5>
                                        <span>Senior Teacher</span>
                                    </div>
                                    <div class="extra-skilled">
                                        <p><strong>Experience:</strong> 2 Years</p>
                                        <p><strong>Specialist:</strong> PHP,JS</p>
                                        <p><strong>Total:</strong> 15 Lesson(s)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Our Team Carousel -->
    <!-- Start Welcome Section -->
    <section class="two-columns-section section-ptb" style="background-image:url(assets/images/big_bg_3.jpg);">
        <div class="two-columns-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mt-3d-5 pr-0" data-aos="fade-up" data-aos-duration="300">
                        <div class="half_column_image">
                            <img src="assets/images/half_column_3.png" alt="welcome" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-6 pl-0" data-aos="fade-up" data-aos-duration="600">
                        <div class="half_column_content_2 text-white">
                            <h2 class="text-white font-weight-bold">World Best Univercity</h2>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab maxime architecto voluptatum
                                asperiores quisquam dolore numquam, necessitatibus corporis vel provident adipisci
                                laboriosam fugiat dignissimos sit aliquam rerum ipsam assumenda dolorem.</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam velit vero voluptas
                                ratione quasi fuga commodi autem repellendus officia ex!</p>
                            <a href="#" class="button_two mt-2">Join Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Welcome Section -->
    <!-- Start Testimonials Section -->
    <section class="testimonials-section section-ptb" data-aos="fade-up" data-aos-duration="300">
        <div class="testimonials-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title-2 text-center mb-4">
                            <h4>Testimonials</h4>
                            <h2>Our Student Saying...</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="testimonials-wrapper-2 owl-carousel">
                            <div class="single-testimonial-2 border-3 p-4">
                                <div class="testimonial-text mt-5">
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat nulla sint occaecat cupidatat non proident, sunt in culpa.</p>
                                </div>
                                <div class="testimonial-referance">
                                    <p><strong>Jhon Smith; </strong> CEO & Founder</p>
                                </div>
                                <div class="testimonial-pic"><img src="assets/images/author_01.jpg" alt="author"></div>
                            </div>
                            <div class="single-testimonial-2 border-3 p-4">
                                <div class="testimonial-text mt-5">
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat nulla sint occaecat cupidatat non proident, sunt in culpa.</p>
                                </div>
                                <div class="testimonial-referance">
                                    <p><strong>Jhon Smith; </strong> CEO & Founder</p>
                                </div>
                                <div class="testimonial-pic"><img src="assets/images/author_02.jpg" alt="author"></div>
                            </div>
                            <div class="single-testimonial-2 border-3 p-4">
                                <div class="testimonial-text mt-5">
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat nulla sint occaecat cupidatat non proident, sunt in culpa.</p>
                                </div>
                                <div class="testimonial-referance">
                                    <p><strong>Jhon Smith; </strong> CEO & Founder</p>
                                </div>
                                <div class="testimonial-pic"><img src="assets/images/author_01.jpg" alt="author"></div>
                            </div>
                            <div class="single-testimonial-2 border-3 p-4">
                                <div class="testimonial-text mt-5">
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat nulla sint occaecat cupidatat non proident, sunt in culpa.</p>
                                </div>
                                <div class="testimonial-referance">
                                    <p><strong>Jhon Smith; </strong> CEO & Founder</p>
                                </div>
                                <div class="testimonial-pic"><img src="assets/images/author_02.jpg" alt="author"></div>
                            </div>
                            <div class="single-testimonial-2 border-3 p-4">
                                <div class="testimonial-text mt-5">
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat nulla sint occaecat cupidatat non proident, sunt in culpa.</p>
                                </div>
                                <div class="testimonial-referance">
                                    <p><strong>Jhon Smith; </strong> CEO & Founder</p>
                                </div>
                                <div class="testimonial-pic"><img src="assets/images/author_01.jpg" alt="author"></div>
                            </div>
                            <div class="single-testimonial-2 border-3 p-4">
                                <div class="testimonial-text mt-5">
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat nulla sint occaecat cupidatat non proident, sunt in culpa.</p>
                                </div>
                                <div class="testimonial-referance">
                                    <p><strong>Jhon Smith; </strong> CEO & Founder</p>
                                </div>
                                <div class="testimonial-pic"><img src="assets/images/author_02.jpg" alt="author"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Testimonials Section -->
    <!-- Start Events Section -->
    <section class="events-section-2 section-ptb semi_dark_bg overlay_2"
        style="background-image:url(assets/images/big_bg_4.jpg);" data-aos="fade-up" data-aos-duration="300">
        <div class="events-area-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title-2 text-center">
                            <h4>Events</h4>
                            <h2 class="text-white">Recent Events</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="events-carousel owl-carousel">
                            <div class="single-featured-2  bg-white">
                                <div class="feature-image">
                                    <img src="assets/images/featured_01.jpg" alt="Featured" class="img-fluid">
                                    <div class="event-date-2">
                                        <p>2nd June</p>
                                    </div>
                                </div>
                                <div class="featured-text-and-info border border-top-0">
                                    <div class="feature-content-2 p-4">
                                        <h3><a href="#">Electrick Engeering</a></h3>
                                        <p>Mauris at varius orci. Vestibulum um felis eu nisl pulvinar, quis ultricies nibh.
                                            Sed ultricies ante vitae.</p>
                                        <a href="#" class="button_two">Join Now <i
                                                class="fa fa-angle-right"></i></a>
                                    </div>
                                    <div class="feature-status-wrapper border-top">
                                        <div class="feature-status-2 px-4 py-3">
                                            <div class="single-status">
                                                <i class="fas fa-map-marker-alt"></i>
                                                <span>INDIA</span>
                                            </div>
                                            <div class="single-status">
                                                <i class="fa fa-clock"></i>
                                                <span>12:00AM - 5:00PM</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-featured-2  bg-white">
                                <div class="feature-image">
                                    <img src="assets/images/featured_02.jpg" alt="Featured" class="img-fluid">
                                    <div class="event-date-2">
                                        <p>2nd May</p>
                                    </div>
                                </div>
                                <div class="featured-text-and-info border border-top-0">
                                    <div class="feature-content-2 p-4">
                                        <h3><a href="#">Civil Engeering</a></h3>
                                        <p>Mauris at varius orci. Vestibulum um felis eu nisl pulvinar, quis ultricies nibh.
                                            Sed ultricies ante vitae.</p>
                                        <a href="#" class="button_two">Join Now <i
                                                class="fa fa-angle-right"></i></a>
                                    </div>
                                    <div class="feature-status-wrapper border-top">
                                        <div class="feature-status-2 px-4 py-3">
                                            <div class="single-status">
                                                <i class="fas fa-map-marker-alt"></i>
                                                <span>AFRICA</span>
                                            </div>
                                            <div class="single-status">
                                                <i class="fa fa-clock"></i>
                                                <span>10:00AM - 2:00PM</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-featured-2  bg-white">
                                <div class="feature-image">
                                    <img src="assets/images/featured_03.jpg" alt="Featured" class="img-fluid">
                                    <div class="event-date-2">
                                        <p>3rd April</p>
                                    </div>
                                </div>
                                <div class="featured-text-and-info border border-top-0">
                                    <div class="feature-content-2 p-4">
                                        <h3><a href="#">Computer Engeering</a></h3>
                                        <p>Mauris at varius orci. Vestibulum um felis eu nisl pulvinar, quis ultricies nibh.
                                            Sed ultricies ante vitae.</p>
                                        <a href="#" class="button_two">Join Now <i
                                                class="fa fa-angle-right"></i></a>
                                    </div>
                                    <div class="feature-status-wrapper border-top">
                                        <div class="feature-status-2 px-4 py-3">
                                            <div class="single-status">
                                                <i class="fas fa-map-marker-alt"></i>
                                                <span>AMERICA</span>
                                            </div>
                                            <div class="single-status">
                                                <i class="fa fa-clock"></i>
                                                <span>5:00PM - 11:00PM</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-featured-2  bg-white">
                                <div class="feature-image">
                                    <img src="assets/images/featured_04.jpg" alt="Featured" class="img-fluid">
                                    <div class="event-date-2">
                                        <p>5th October</p>
                                    </div>
                                </div>
                                <div class="featured-text-and-info border border-top-0">

                                    <div class="feature-content-2 p-4">
                                        <h3><a href="#">Electrick Engeering</a></h3>
                                        <p>Mauris at varius orci. Vestibulum um felis eu nisl pulvinar, quis ultricies nibh.
                                            Sed ultricies ante vitae.</p>
                                        <a href="#" class="button_two">Join Now <i
                                                class="fa fa-angle-right"></i></a>
                                    </div>
                                    <div class="feature-status-wrapper border-top">
                                        <div class="feature-status-2 px-4 py-3">
                                            <div class="single-status">
                                                <i class="fas fa-map-marker-alt"></i>
                                                <span>LONDON</span>
                                            </div>
                                            <div class="single-status">
                                                <i class="fa fa-clock"></i>
                                                <span>7:00AM - 10:00PM</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-featured-2  bg-white">
                                <div class="feature-image">
                                    <img src="assets/images/featured_05.jpg" alt="Featured" class="img-fluid">
                                    <div class="event-date-2">
                                        <p>2nd Navember</p>
                                    </div>
                                </div>
                                <div class="featured-text-and-info border border-top-0">
                                    <div class="feature-content-2 p-4">
                                        <h3><a href="#">Micro Engeering</a></h3>
                                        <p>Mauris at varius orci. Vestibulum um felis eu nisl pulvinar, quis ultricies nibh.
                                            Sed ultricies ante vitae.</p>
                                        <a href="#" class="button_two">Join Now <i
                                                class="fa fa-angle-right"></i></a>
                                    </div>
                                    <div class="feature-status-wrapper border-top">
                                        <div class="feature-status-2 px-4 py-3">
                                            <div class="single-status">
                                                <i class="fas fa-map-marker-alt"></i>
                                                <span>JAPAN</span>
                                            </div>
                                            <div class="single-status">
                                                <i class="fa fa-clock"></i>
                                                <span>8:00AM - 5:00PM</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Events Section -->
    <!-- Start Blog Section -->
    <section class="blog-section semi_dark_bg section-ptb">
        <div class="blog-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12" data-aos="fade-up" data-aos-duration="300">
                        <div class="section-title-2 text-center mb-4">
                            <h4>Blog Posts</h4>
                            <h2>Latest News</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 mb-xs-3" data-aos="fade-up" data-aos-duration="300">
                        <div class="subscribe_box dark_2_bg">
                            <div class="subscribe-text">
                                <i class="far fa-envelope-open"></i>
                                <h3>Subscribe</h3>
                                <p>and get the latest updates</p>
                            </div>
                            <div class="subscribe-form">
                                <form action="#">
                                    <input type="email" class="form-control" placeholder="Your Email" required />
                                    <button type="submit"><i class="fas fa-paper-plane"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-xs-3" data-aos="fade-up" data-aos-duration="500">
                        <div class="big-blog-area border bg-white">
                            <div class="blog-thumb">
                                <a href="#"><img src="assets/images/blog_05.jpg" alt="big blog"
                                        class="img-fluid"></a>
                            </div>
                            <div class="blog-content p-4">
                                <div class="blog-meta-2">
                                    <span>Posts By <a href="#">Admin</a></span>
                                    <span>29 April, 2020</span>
                                </div>
                                <div class="blog-text-2">
                                    <h3><a href="#">Tips to make your workforce security front line</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore.</p>
                                    <a href="#">Read More <i class="fas fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="600">
                        <div class="big-blog-area border bg-white">
                            <div class="blog-thumb">
                                <a href="#"><img src="assets/images/blog_06.jpg" alt="big blog"
                                        class="img-fluid"></a>
                            </div>
                            <div class="blog-content p-4">
                                <div class="blog-meta-2">
                                    <span>Posts By <a href="#">Admin</a></span>
                                    <span>29 April, 2020</span>
                                </div>
                                <div class="blog-text-2">
                                    <h3><a href="#">Main reasons to explan fast business builder</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore.</p>
                                    <a href="#">Read More <i class="fas fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

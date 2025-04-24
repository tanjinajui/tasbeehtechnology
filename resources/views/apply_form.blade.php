<!-- header and footer file master include -->
@extends('layouts.includes.master')
<!-- title set -->
@section('title', 'Home')
@section('content')
    <!-- Start Hero Area -->
    <section class="hero-section height-470"
        data-aos="fade-up">
        <div class="hero-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center text-white page-hrader">
                            <h1 class="display-3">New Madrasa Registration For Free</h1>
                            <div class="page-breadcrumb">
                                <p><a class="text-white" href="index.html">Home</a> - Apply</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero Area -->
    <!--Start Page -->
    <div class="page-wrapper section-ptb-3" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="mx-auto col-md-10">
                    <ul class="mb-3 nav nav-pills registration-top-nav-pills justify-content-center" id="pills-tab"
                        role="tablist">
                        <li class="mr-2 nav-item" role="presentation">
                            <button class="nav-link active" id="pills-opening-info-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-opening-info" type="button" role="tab"
                                aria-controls="pills-opening-info" aria-selected="true">Opening Info</button>
                        </li>
                        <li class="mr-2 nav-item" role="presentation">
                            <button class="nav-link" id="pills-basic-info-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-basic-info" type="button" role="tab"
                                aria-controls="pills-basic-info" aria-selected="false">Basic-Info</button>
                        </li>
                        <!-- <li class="nav-item" role="presentation">
                                          <button class="nav-link" id="pills-contact-info-tab" data-bs-toggle="pill" data-bs-target="#pills-contact-info" type="button" role="tab" aria-controls="pills-contact-info" aria-selected="false">Contact Info</button>
                                        </li> -->
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-opening-info" role="tabpanel"
                            aria-labelledby="pills-home-tab" tabindex="0">
                            <div class="apply-wrapper">

                                <h2>Opening Info For Free Registration</h2>
                                <form action="{{ route('institute-apply') }}" method="POST"
                                    class="p-5 apply_form bg_dark_9">
                                    @method('POST')
                                    @csrf
                                    {{-- <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="user_first_name">Enter First Name</label>
                                                <input type="text" class="form-control" name="user_first_name"
                                                    placeholder="First Name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="user_last_name">Enter Last Name</label>
                                                <input type="text" class="form-control" name="user_last_name"
                                                    placeholder="Last Name">
                                            </div>
                                        </div>
                                    </div> --}}
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="name">Enter Institute Name</label>
                                                <input type="text" class="form-control" name="name"
                                                    placeholder=" Madrasa Name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="user_madrasa_type">Type of Institute*</label>
                                                <select name="type" id="user_madrasa_type" class="form-control">
                                                    <option value="dakhil" selected>Dakhil Madrasa</option>
                                                    <option value="alim">Alim Madrasa</option>
                                                    <option value="kamil">Kamil Madrasa</option>
                                                    <option value="fazil">Fazil Madrasa</option>
                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="country">Country*</label>
                                                <select name="country_id" id="country" class="form-control">
                                                    <option value="1">Bangladesh</option>
                                                    <option value="2">Saudi Arabia</option>
                                                    <option value="3">Malaysia</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="division">Division*</label>
                                                <select name="division_id" id="division" class="form-control">
                                                    <option value="1">Select the Division</option>
                                                    <option value="2">Dhaka</option>
                                                    <option value="3">Khulna</option>
                                                    <option value="4">Barishal</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="district">District*</label>
                                                <select name="district_id" id="district" class="form-control">
                                                    <option value="1">Select the District</option>
                                                    <option value="2">Narayanganj</option>
                                                    <option value="3">Comilla</option>
                                                    <option value="4">Barishal</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="upazila">Upazila*</label>
                                                <select name="upazila_id" id="upazila" class="form-control">
                                                    <option value="1">Select the upazila</option>
                                                    <option value="2">Bandar</option>
                                                    <option value="3">Sonargaon</option>
                                                    <option value="4">Narayanganj Sadar</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="address">Institute full Address</label>
                                                <textarea name="address" id="address" class="form-control" placeholder="Institute full Address"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="user_username">Institute Email</label>
                                                <input type="email" name="Institute Email" class="form-control"
                                                    placeholder="Institute Email">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="user_phone_number">Institute Phone Number</label>
                                                <input type="text" name="phone" class="form-control"
                                                    placeholder="Institute Phone Number">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        {{-- <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="user_password">Enter Password</label>
                                                <input type="password" class="form-control" placeholder="Password">
                                            </div>
                                        </div> --}}
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="user_recaptcha">Google Recaptcha</label>
                                                <div class="g-recaptcha"
                                                    data-sitekey="6Lf_PqsqAAAAALKeJwEWWj7tUrvLviBoIRyInFzO"
                                                    data-callback="enableSubmitBtn"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="user_signature">Digital Signature</label>
                                                                <textarea name="user_signature" class="form-control" id="user_signature" cols="30" rows="5"
                                                                    placeholder="Your Signature"></textarea>
                                                            </div>
                                                        </div>
                                                    </div> -->
                                    <div class="row">
                                        <div class="mx-auto text-center col-md-12">
                                            <button type="submit" id="submitBtn" class="mt-3 button_one">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-basic-info" role="tabpanel"
                            aria-labelledby="pills-basic-info-tab" tabindex="0">
                            <div class="apply-wrapper">

                                <h2>Basic Info For Free Registration</h2>
                                <form action="#" class="p-5 apply_form bg_dark_9">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="user_madrasa_name">Enter Madrasa Name</label>
                                                <input type="text" class="form-control" placeholder="madrasa Name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="user_avata_image">Avata Image</label>
                                                <img src="assets/images/default-logo.png" alt="" srcset=""
                                                    class="img-thumbnail user-avata-img">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="user_founded">Enter Founded</label>
                                                <input type="text" class="form-control" placeholder=" Founded">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="user_founder">Enter Founder</label>
                                                <input type="text" class="form-control" placeholder=" Founder">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="user_recognition">Enter Recognition</label>
                                                <input type="text" class="form-control" placeholder=" Recognition">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="user_date">Enter date</label>
                                                <input type="date" class="form-control" placeholder=" date">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="user_recognition-level">Enter Recognition Level</label>
                                                <input type="text" class="form-control"
                                                    placeholder=" Recognition Level">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="user_mpo-level">Enter MPO Level</label>
                                                <input type="text" class="form-control" placeholder=" MPO Level">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="user_version">Enter Version</label>
                                                <input type="text" class="form-control" placeholder=" Version">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="user_type">Enter Type</label>
                                                <input type="text" class="form-control" placeholder=" Type">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="user_board">Enter Board</label>
                                                <input type="text" class="form-control" placeholder=" Board">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="user_discipline">Enter Discipline</label>
                                                <input type="text" class="form-control" placeholder=" Discipline">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="user_management">Enter Management</label>
                                                <input type="text" class="form-control" placeholder=" Management">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="user_shift">Enter Shift</label>
                                                <input type="text" class="form-control" placeholder="Shift">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="user_region">Enter Region</label>
                                                <input type="text" class="form-control" placeholder=" Region">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="user_geographic_location">Enter Geographic location</label>
                                                <input type="text" class="form-control"
                                                    placeholder="Geographic location">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="user_signature">Digital Signature</label>
                                                                <textarea name="user_signature" class="form-control" id="user_signature" cols="30" rows="5"
                                                                    placeholder="Your Signature"></textarea>
                                                            </div>
                                                        </div>
                                                    </div> -->
                                    <div class="row">
                                        <div class="mx-auto text-center col-md-12">
                                            <button type="submit" id="submitBtn" class="mt-3 button_one">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-contact-info" role="tabpanel"
                            aria-labelledby="pills-contact-info-tab" tabindex="0">
                            <!-- Start Page Wrapper-->

                            <div class="page-wrapper apply-wrapper">
                                <div>
                                    <h2>Contact with us for any kind of information</h2>
                                </div>
                                <div class="pt-5">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-8 mb-3d-5" data-aos="fade-up">
                                                <div class="main-content">
                                                    <div class="contact-from-wrapper-2">

                                                        <h4 class="section-heading">For e-mail communication</h4>
                                                        <p>To:admin@tasbeehtech.com </p>
                                                        <form action="#" class="mt-4 contact-form">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control"
                                                                            placeholder="Enter Your Name" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <input type="email" class="form-control"
                                                                            placeholder="Enter Your Email" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control"
                                                                            id="phone_number"
                                                                            placeholder="Enter Phone Number" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <input type="subject" class="form-control"
                                                                            placeholder="Enter Subject">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <textarea name="message" class="form-control" id="message" cols="30" rows="6"
                                                                            placeholder="Write Your Message"></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="mx-auto text-center col-md-12">
                                                                    <button type="submit">Send Message</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4" data-aos="fade-up">
                                                <div class="p-4 text-white highlights-section hover_bg">
                                                    <h4>For Communication through presence</h4>
                                                    <ul>
                                                        <li><i class="mr-1 fa-solid fa-location-dot"></i>57/8, Shah Jalal
                                                            Plaza (3rd Floor), East Rajabazar,
                                                            West Panthapath, Dhaka-1215</li>
                                                        <li><i class="mr-1 fas fa-mobile-alt"></i>01534930755</li>
                                                        <li><i class="mr-1 fas fa-envelope"></i>admin@tasbeehtech.com</li>
                                                    </ul>
                                                    <!-- <div class="social-links">
                                                <ul>
                                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fa-brands fa-whatsapp"></i></a></li>
                                                    <li><a href="#"><i class="fa-solid fa-right-to-bracket"></i></a></li>
                                                </ul>
                                            </div> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="map-area section-pt" data-aos="fade-up">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="embeded-map-area">
                                                    <div class="mapouter">
                                                        <div class="gmap_canvas">
                                                            <iframe
                                                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.876344649786!2d90.38360307362434!3d23.751788588726253!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b9c494bd3a8b%3A0xf332dfff397ece67!2sDream%20Liner%20Travels%2C%20Bangladesh!5e0!3m2!1sen!2sbd!4v1737099861372!5m2!1sen!2sbd"
                                                                width="100%" height="500" style="border:0;"
                                                                allowfullscreen="" loading="lazy"
                                                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- End Page Wrapper-->
                        </div>
                    </div><!-- nav pills ends -->


                </div>
            </div>
        </div>
    </div>
    <!-- End Page -->
@endsection

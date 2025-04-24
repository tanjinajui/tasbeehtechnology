<!-- header and footer file master include -->
@extends('layouts.includes.master')
<!-- title set -->
@section('title', 'Home')
@section('content')
    <!-- Start Hero Area -->
    <section class="hero-section height-470" data-aos="fade-up">
        <div class="hero-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-hrader text-white text-center">
                            <h1 class="display-3">Contact Form</h1>
                            <div class="page-breadcrumb">
                                <p><a class="text-white" href="index.html">Home</a> - Contact Us</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero Area -->
    <!--Start Page -->
   <!-- Start Page Wrapper-->
                           
   <div class="page-wrapper apply-wrapper pt-3">
    <div>
     <h2 >Contact with us for any kind of information</h2>
    </div>
     <div class="pt-5">
         <div class="container">
             <div class="row">
                 <div class="col-lg-8 mb-3d-5" data-aos="fade-up">
                     <div class="main-content">
                         <div class="contact-from-wrapper-2">
                             
                             <h4 class="">For e-mail communication</h4>
                             <p>To:admin@tasbeehtech.com </p>
                             <form action="#" class="contact-form mt-4">
                                 <div class="row">
                                     <div class="col-md-6">
                                         <div class="form-group">
                                             <input type="text" class="form-control" placeholder="Enter Your Name" required>
                                         </div>
                                     </div>
                                     <div class="col-md-6">
                                         <div class="form-group">
                                             <input type="email" class="form-control" placeholder="Enter Your Email" required>
                                         </div>
                                     </div>
                                     <div class="col-md-6">
                                         <div class="form-group">
                                             <input type="text" class="form-control" id="phone_number" placeholder="Enter Phone Number" required>
                                         </div>
                                     </div>
                                     <div class="col-md-6">
                                         <div class="form-group">
                                             <input type="subject" class="form-control" placeholder="Enter Subject">
                                         </div>
                                     </div>
                                     <div class="col-md-12">
                                         <div class="form-group">
                                             <textarea name="message" class="form-control" id="message" cols="30" rows="6" placeholder="Write Your Message"></textarea>
                                         </div>
                                     </div>
                                     <div class="col-md-12 mx-auto text-center">
                                         <button type="submit">Send Message</button>
                                     </div>
                                 </div>
                             </form>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-4" data-aos="fade-up">
                     <div class="highlights-section hover_bg text-white p-4">
                         <h4>For Communication through presence</h4>
                         <ul>
                             <li><i class="fa-solid fa-location-dot mr-1"></i>57/8, Shah Jalal Plaza (3rd Floor), East Rajabazar, 
                                 West Panthapath, Dhaka-1215</li>
                             <li><i class="fas fa-mobile-alt mr-1"></i>01534930755</li>
                             <li><i class="fas fa-envelope mr-1"></i>admin@tasbeehtech.com</li>
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
                             <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.876344649786!2d90.38360307362434!3d23.751788588726253!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b9c494bd3a8b%3A0xf332dfff397ece67!2sDream%20Liner%20Travels%2C%20Bangladesh!5e0!3m2!1sen!2sbd!4v1737099861372!5m2!1sen!2sbd" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
   </div>
 </div>

 <!-- End Page Wrapper-->
@endsection
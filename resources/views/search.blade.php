<!-- header and footer file master include -->
@extends('layouts.includes.master')
<!-- title set -->
@section('title', 'Search')
@section('content')
    <!-- Start Hero Area -->
    <section class="hero-section height-470"
        data-aos="fade-up">
        <div class="hero-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center text-white page-hrader">
                            <h1 class="display-3">Search Here</h1>
                            <div class="page-breadcrumb">
                                <p><a class="text-white" href="/">Home</a> - Search</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Start Page -->
    <div class="page-wrapper" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mx-auto">
                    
                    <div class="apply-wrapper">
                                
                        <h2>Filter Results</h2>
                        <form action="#" class="apply_form bg_dark_9 p-5">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="user_madrasa_name">Enter Madrasa Name</label>
                                        <input type="text" class="form-control" placeholder="Madrasa Name">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="user_class">Type Of Madrasa</label>
                                        <select name="user_class" id="user_class" class="form-control">
                                            <option value="1">Select Type</option>
                                            <option value="2">Alim Madrasa</option>
                                            <option value="3">Dakhil Madrasa</option>
                                            <option value="4">Kamil Madrasa</option>
                                            <option value="5">Fazil Madrasa</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="user_eiin_number">EIIN Number</label>
                                        <input type="text" class="form-control" placeholder="EIIN Number">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <button type="submit" id="submitBtn" class="button_one search-btn">Search</button>
                                </div>
                            </div>
                            
                        </form>
                    </div>
                    
                    
                </div>
            </div>
            <div class="row mt-4">
                <div>
                    <h2>Division Wise Madrasa Information For Bangladesh</h2>
                </div>
                <ul class="nav nav-pills mb-3 mt-4 registration-top-nav-pills justify-content-start " id="pills-tab" role="tablist">
                    <li class="nav-item mr-2" role="presentation">
                      <button class="nav-link active" id="pills-opening-info-tab" data-bs-toggle="pill" data-bs-target="#pills-opening-info" type="button" role="tab" aria-controls="pills-opening-info" aria-selected="true">Barishal</button>
                    </li>
                    <li class="nav-item mr-2" role="presentation">
                      <button class="nav-link" id="pills-basic-info-tab" data-bs-toggle="pill" data-bs-target="#pills-basic-info" type="button" role="tab" aria-controls="pills-basic-info" aria-selected="false">Chattogram</button>
                    </li>
                    <li class="nav-item mr-2" role="presentation">
                      <button class="nav-link" id="pills-contact-info-tab" data-bs-toggle="pill" data-bs-target="#pills-contact-info" type="button" role="tab" aria-controls="pills-contact-info" aria-selected="false">Dhaka</button>
                    </li>
                    <li class="nav-item mr-2" role="presentation">
                        <button class="nav-link" id="pills-contact-info-tab" data-bs-toggle="pill" data-bs-target="#pills-contact-info" type="button" role="tab" aria-controls="pills-contact-info" aria-selected="false">Khulna</button>
                      </li>
                      <li class="nav-item mr-2" role="presentation">
                        <button class="nav-link" id="pills-contact-info-tab" data-bs-toggle="pill" data-bs-target="#pills-contact-info" type="button" role="tab" aria-controls="pills-contact-info" aria-selected="false">Rajshahi</button>
                      </li>
                      <li class="nav-item mr-2" role="presentation">
                        <button class="nav-link" id="pills-contact-info-tab" data-bs-toggle="pill" data-bs-target="#pills-contact-info" type="button" role="tab" aria-controls="pills-contact-info" aria-selected="false">Rangpur</button>
                      </li>
                      <li class="nav-item mr-2" role="presentation">
                        <button class="nav-link" id="pills-contact-info-tab" data-bs-toggle="pill" data-bs-target="#pills-contact-info" type="button" role="tab" aria-controls="pills-contact-info" aria-selected="false">Mymensingh</button>
                      </li>
                      <li class="nav-item mr-2" role="presentation">
                        <button class="nav-link" id="pills-contact-info-tab" data-bs-toggle="pill" data-bs-target="#pills-contact-info" type="button" role="tab" aria-controls="pills-contact-info" aria-selected="false">Sylhet</button>
                      </li>
                  </ul>
                  <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-opening-info" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                        <div class="apply-wrapper">
                            <div class="row">
                                <div class="col-md-10 offset-md-1 mt-4">
                                    <div class="division-madarasa-blog">
                                        <h4 class="text-center">Barishal Division Madrasa Information</h4>
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <img src="assets/images/logo..png" alt="">
                                                    <span>Darul Uloom Bangladesh Hafizia Kawmiya Madrasa</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="assets/images/logo..png" alt="">
                                                    <span>Darul Uloom Bangladesh Hafizia Kawmiya Madrasa</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="assets/images/logo..png" alt="">
                                                    <span>Darul Uloom Bangladesh Hafizia Kawmiya Madrasa</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="assets/images/logo..png" alt="">
                                                    <span>Darul Uloom Bangladesh Hafizia Kawmiya Madrasa</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="assets/images/logo..png" alt="">
                                                    <span>Darul Uloom Bangladesh Hafizia Kawmiya Madrasa</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="assets/images/logo..png" alt="">
                                                    <span>Darul Uloom Bangladesh Hafizia Kawmiya Madrasa</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <!-- <div class="division-madarasa-content">
                                            <div class="division-madrasa-logo">
                                                <img src="assets/images/logo..png" alt="">
                                            </div>
                                            <div class="madarasa-name">
                                                <span>Darul Uloom Bangladesh Hafizia Kawmiya Madrasa</span>
                                            </div>
                                        </div>
                                        <div class="division-madarasa-content">
                                            <div class="division-madrasa-logo">
                                                <img src="assets/images/logo..png" alt="">
                                            </div>
                                            <div class="madarasa-name">
                                                <span>Darul Uloom Bangladesh Hafizia Kawmiya Madrasa</span>
                                            </div>
                                        </div>
                                        <div class="division-madarasa-content">
                                            <div class="division-madrasa-logo">
                                                <img src="assets/images/logo..png" alt="">
                                            </div>
                                            <div class="madarasa-name">
                                                <span>Darul Uloom Bangladesh Hafizia Kawmiya Madrasa</span>
                                            </div>
                                        </div>
                                        <div class="division-madarasa-content">
                                            <div class="division-madrasa-logo">
                                                <img src="assets/images/logo..png" alt="">
                                            </div>
                                            <div class="madarasa-name">
                                                <span>Darul Uloom Bangladesh Hafizia Kawmiya Madrasa</span>
                                            </div>
                                        </div>
                                        <div class="division-madarasa-content">
                                            <div class="division-madrasa-logo">
                                                <img src="assets/images/logo..png" alt="">
                                            </div>
                                            <div class="madarasa-name">
                                                <span>Darul Uloom Bangladesh Hafizia Kawmiya Madrasa</span>
                                            </div>
                                        </div>
                                        <div class="division-madarasa-content">
                                            <div class="division-madrasa-logo">
                                                <img src="assets/images/logo..png" alt="">
                                            </div>
                                            <div class="madarasa-name">
                                                <span>Darul Uloom Bangladesh Hafizia Kawmiya Madrasa</span>
                                            </div>
                                        </div> -->
                                    </div>
                                    
                                    <!-- <div class="division-madarasa-content">
                                        <div class="division-madrasa-logo">
                                            <img src="assets/images/logo..png" alt="">
                                        </div>
                                        <div class="madarasa-name">
                                            <h4>Darul Uloom Bangladesh Hafizia Kawmiya Madrasa</h4>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-basic-info" role="tabpanel" aria-labelledby="pills-basic-info-tab" tabindex="0">
                        <div class="apply-wrapper">
                            
                            <h2>Basic Info For Free Registration</h2>
                            
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-contact-info" role="tabpanel" aria-labelledby="pills-contact-info-tab" tabindex="0">
                       <!-- Start Page Wrapper-->
                       
<div class="page-wrapper apply-wrapper">
   <div>
    <h2 >Contact with us for any kind of information</h2>
   </div>
</div>

<!-- End Page Wrapper-->
                    </div>
                  </div><!-- nav pills ends -->
            </div>
        </div>
    </div>
    <!-- End Page -->
     <div id="section" class="section">
        <div class="container"></div>
     </div>
    
    <!-- Start Footer -->
    @endsection
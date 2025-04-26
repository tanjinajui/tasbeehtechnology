<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="icon" type="image/png" href="{{ asset('frontend/images/favicon.png') }}">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" > -->
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min2.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/fontawesomeall.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
   
</head>

<body>
    <!-- Start Header -->
    <header>
        <!-- ============= top banner section starts ============= -->
        <section id="top-banner" class="top-banner">

        </section>
        <!-- ============= top banner section ends ============= -->
        {{-- //main menu end --}}
        <div class="main-menu-area bg_dark_mobile">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="main-menu">
                            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                                <div class="mobile_site_logo d-none">
                                    <a href="index.html"><img src="assets/images/logo..png" alt="logo"
                                            class="img-fluid"></a>
                                </div>
                                <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                                    <ul class="mt-2 mr-auto navbar-nav mt-lg-0 menu-item">
                                        <li class="nav-item">
                                            <a class="nav-link active" href="{{ route('home') }}">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('terms-&-conditions')}}">Terms &
                                                Conditions</a>
                                        </li>         
                                        <li class="nav-item">
                                            <a href="{{ route('career') }}" class="nav-link" id="career_pages">
                                                Career
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('apply') }}" class="nav-link">Apply</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('contact') }}" class="nav-link">Contact</a>
                                        </li>
                                        @auth
                                            @if (Auth::user()->role == 'admin')
                                                <li class="nav-item">
                                                    <a href="{{ route('dashboard') }}" class="nav-link">Dashboard</a>
                                                </li>
                                            @endif
                                            <li class="nav-item">
                                                <form method="POST" action="{{ route('logout') }}" class="w-full">
                                                    @csrf
                                                    <button class="btn logoutBtn">{{ __('Logout') }}</button>
                                                    {{-- <flux:button as="button" type="submit" icon="arrow-right-start-on-rectangle" class="w-full">
                                                        {{ __('Log Out') }}
                                                    </flux:button> --}}
                                                </form>
                                                {{-- <form method="POST" action="{{ route('logout') }}" class="w-full">
                                                    @csrf
                                                    <a  class="nav-link">Logout</a>
                                                </form> --}}
                                                
                                            </li>
                                        @else
                                            <li class="nav-item">
                                                <a href="{{ route('login') }}" class="nav-link">Login</a>
                                            </li>
                                            
                                        @endauth
                                        <li class="nav-item ">
                                            <a href="{{ route('search') }}" class="nav-link "><i
                                            class="fa fa-search searchBtn"></i></a>
                                        </li>
                                    </ul>
                                    <div class="collapse-bar">
                                        <a class="navbar-brand" data-toggle="collapse" href="#languages_options"><i
                                                class="fa fa-bars language-change-btn"></i></a>
                                        <div class="option-menu collapse" id="languages_options">
                                            <nav>
                                                <ul>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#">English</a>
                                                        <a class="nav-link" href="#">Bangla</a>
                                                        <a class="nav-link" href="#">Arabic</a>

                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Button trigger modal -->
            <!-- Start Search Modal -->
            <div class="modal fade" id="search_modal">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title sm-sub-title">Search Here</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="search-widget">
                                <form action="#">
                                    <input type="text" class="form-control" placeholder="Search Here">
                                    <button type="submit"><i class="fas fa-search"></i></button>
                                </form>
                            </div>
                            <div class="search-results">
                                <h5 class="my-4 sm-sub-title">10 Search Results Found</h5>
                                <div class="theme-list">
                                    <ul>
                                        <li><a href="#">Smply dummy text of the printing and typesetting
                                                industry</a></li>
                                        <li><a href="#">Mauris at varius orci. Vestibulum um felis eu nisl
                                                pulvinar</a></li>
                                        <li><a href="#">Welcome To Our Campus For Learn</a></li>
                                        <li><a href="#">The point of using Lorem Ipsum is that it has a
                                                more-or-less </a></li>
                                        <li><a href="#">has a more-or-less normal distribution of letters, as
                                                opposed to using.</a></li>
                                        <li><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            </a></li>
                                        <li><a href="#">Build Education Website Using WP</a></li>
                                        <li><a href="#">Build Education Website Using WordPress </a></li>
                                        <li><a href="#">And Other Modern Technology</a></li>
                                        <li><a href="#">assumenda est. Our friendly support team is standing.</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="button_one" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Search Modal -->
        </div>
    </header>
    <!-- End Header -->

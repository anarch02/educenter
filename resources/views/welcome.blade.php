<!doctype html>
<html lang="en" dir="ltr">

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Sash – Bootstrap 5  Admin & Dashboard Template">
    <meta name="author" content="Spruko Technologies Private Limited">
    <meta name="keywords" content="admin,admin dashboard,admin panel,admin template,bootstrap,clean,dashboard,flat,jquery,modern,responsive,premium admin templates,responsive admin,ui,ui kit.">

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="../assets/images/brand/favicon.ico" />

    <!-- TITLE -->
    <title>Sash – Education center</title>

    <!-- BOOTSTRAP CSS -->
    <link id="style" href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- STYLE CSS -->
    <link href="../assets/css/style.css" rel="stylesheet" />

    <!--- FONT-ICONS CSS -->
    <link href="../assets/css/icons.css" rel="stylesheet" />

    <!-- COLOR SKIN CSS -->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="../assets/colors/color1.css" />
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>

<body class="app sidebar-mini ltr landing-page horizontal">

<!-- GLOBAL-LOADER -->
<div id="global-loader">
    <img src="../assets/images/loader.svg" class="loader-img" alt="Loader">
</div>
<!-- /GLOBAL-LOADER -->

<!-- PAGE -->
<div class="page">
    <div class="page-main">

        <!-- app-Header -->
        <div class="app-header header">
            <div class="container-fluid main-container">
                <div class="d-flex">
                    <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-bs-toggle="sidebar" href="javascript:void(0)"></a>
                    <!-- sidebar-toggle-->
                    <a class="logo-horizontal " href="index.html">
                        <img src="../assets/images/brand/logo.png" class="header-brand-img desktop-logo" alt="logo">
                        <img src="../assets/images/brand/logo-3.png" class="header-brand-img light-logo1"
                             alt="logo">
                    </a>
                    <!-- LOGO -->
                    <div class="d-flex order-lg-2 ms-auto header-right-icons">
                        <button class="navbar-toggler navresponsive-toggler d-lg-none ms-auto" type="button"
                                data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4"
                                aria-controls="navbarSupportedContent-4" aria-expanded="false"
                                aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon fe fe-more-vertical"></span>
                        </button>
                        <div class="navbar navbar-collapse responsive-navbar p-0">
                            <div class="collapse navbar-collapse bg-white px-0" id="navbarSupportedContent-4">
                                <!-- SEARCH -->
                                <div class="header-nav-right p-5">
                                @guest
                                    @if (Route::has('login'))
                                        <a class="btn ripple btn-min w-sm btn-primary me-2" target="_blank" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    @endif

                                    @if (Route::has('register'))
                                        <a class="btn ripple btn-min w-sm btn-outline-primary me-2" target="_blank" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    @endif
                                @else
                                    <span class="btn ripple btn-min w-sm btn-outline-primary me-2" target="_blank">{{ Auth::user()->name }}
                                    </span>

                                    <a class="btn ripple btn-min w-sm btn-primary me-2" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                @endguest
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /app-Header -->

        <div class="landing-top-header overflow-hidden">
            <div class="top sticky overflow-hidden">
                <!--APP-SIDEBAR-->
                <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
                <div class="app-sidebar bg-transparent">
                    <div class="container">
                        <div class="row">
                            <div class="main-sidemenu navbar px-0">
                                <a class="navbar-brand ps-0 d-none d-lg-block" href="index.html">
                                    <img alt="" class="logo-2" src="../assets/images/brand/logo-3.png">
                                </a>
                                <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"><path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"/></svg></div>
                                <ul class="side-menu">
                                    <li class="slide">
                                        <a class="side-menu__item active" data-bs-toggle="slide" href="#home"><span class="side-menu__label">Home</span></a>
                                    </li>
                                    <li class="slide">
                                        <a class="side-menu__item" data-bs-toggle="slide" href="#About"><span class="side-menu__label">About</span></a>
                                    </li>
                                    <li class="slide">
                                        <a class="side-menu__item" data-bs-toggle="slide" href="#Contact"><span class="side-menu__label">Contact</span></a>
                                    </li>
                                </ul>
                                <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"><path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"/></svg></div>
                                <div class="header-nav-right d-none d-lg-block">
                                    @guest
                                        @if (Route::has('login'))
                                            <a class="btn ripple btn-min w-sm btn-primary me-2" target="_blank" href="{{ route('login') }}">{{ __('Login') }}</a>
                                        @endif

                                        @if (Route::has('register'))
                                            <a class="btn ripple btn-min w-sm btn-outline-primary me-2" target="_blank" href="{{ route('register') }}">{{ __('Register') }}</a>
                                        @endif
                                    @else
                                        <a href="{{ route('home') }}" class="btn ripple btn-min w-sm btn-outline-primary me-2" target="_blank">{{ Auth::user()->name }}
                                    </a>

                                        <a class="btn ripple btn-min w-sm btn-primary me-2" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    @endguest
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/APP-SIDEBAR-->
            </div>
            <div class="demo-screen-headline main-demo main-demo-1 spacing-top overflow-hidden reveal" id="home">
                <div class="container px-sm-0">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 mb-5 pb-5 animation-zidex pos-relative">
                            <h4 class="fw-semibold mt-7">Enhance Your Skills</h4>
                            <h1 class="text-start fw-bold">Unlock Your Potential with <span class="text-primary animate-heading">sash</span></h1>
                            <h6 class="pb-3">
                                Sash - Empowering learners with comprehensive courses and resources to excel in their chosen fields.
                                Experience a seamless learning journey with our user-friendly platform, designed to maximize your educational growth.
                            </h6>
            
                            <a href="https://example.com/get-started" target="_blank" class="btn ripple btn-min w-lg mb-3 me-2 btn-primary"><i
                                    class="fe fe-play me-2"></i> Get Started
                            </a>
                            <a href="https://example.com/discover-more"
                                class="btn ripple btn-min w-lg btn-outline-primary mb-3 me-2" target="_blank"><i
                                    class="fe fe-eye me-2"></i>Discover More
                            </a>
                        </div>
                        <div class="col-xl-6 col-lg-6 my-auto">
                            <img src="../assets/images/landing/market4.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            
        </div>

        <!--app-content open-->
        <div class="main-content mt-0">
            <div class="side-app">

                <!-- CONTAINER -->
                <div class="main-container">
                    <div class="">

                        <!-- ROW-1 OPEN -->
                        <div class="section pb-0">
                            <div class="container">
                                <div class="row">
                                    <h4 class="text-center fw-semibold">Educational Insights</h4>
                                    <span class="landing-title"></span>
                                    <h2 class="text-center fw-semibold mb-7">Statistics</h2>
                                </div>
                                <div class="row text-center services-statistics landing-statistics">
                                    <div class="col-xl-3 col-md-6 col-lg-6">
                                        <div class="card">
                                            <div class="card-body bg-primary-transparent">
                                                <div class="counter-status">
                                                    <div class="counter-icon bg-primary-transparent box-shadow-primary">
                                                        <i class="fe fe-book-open text-primary fs-23"></i>
                                                    </div>
                                                    <div class="test-body text-center">
                                                        <h1 class=" mb-0">
                                                            <span class="counter fw-semibold counter ">100</span>+
                                                        </h1>
                                                        <div class="counter-text">
                                                            <h5 class="font-weight-normal mb-0 ">Courses Available</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-md-6 col-lg-6">
                                        <div class="card">
                                            <div class="card-body bg-secondary-transparent">
                                                <div class="counter-status">
                                                    <div class="counter-icon bg-secondary-transparent box-shadow-secondary">
                                                        <i class="fe fe-users text-secondary fs-23"></i>
                                                    </div>
                                                    <div class="text-body text-center">
                                                        <h1 class=" mb-0">
                                                            <span class="counter fw-semibold counter ">2000</span>+
                                                        </h1>
                                                        <div class="counter-text">
                                                            <h5 class="font-weight-normal mb-0 ">Happy Students</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-md-6 col-lg-6">
                                        <div class="card">
                                            <div class="card-body bg-success-transparent">
                                                <div class="counter-status">
                                                    <div class="counter-icon bg-success-transparent box-shadow-success">
                                                        <i class="fe fe-award text-success fs-23"></i>
                                                    </div>
                                                    <div class="text-body text-center">
                                                        <h1 class=" mb-0">
                                                            <span class="counter fw-semibold counter ">50</span>+
                                                        </h1>
                                                        <div class="counter-text">
                                                            <h5 class="font-weight-normal mb-0 ">Certified Instructors</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-md-6 col-lg-6">
                                        <div class="card">
                                            <div class="card-body bg-danger-transparent">
                                                <div class="counter-status">
                                                    <div class="counter-icon bg-danger-transparent box-shadow-danger">
                                                        <i class="fe fe-heart text-danger fs-23"></i>
                                                    </div>
                                                    <div class="text-body text-center">
                                                        <h1 class=" mb-0">
                                                            <span class="counter fw-semibold counter ">95</span>%
                                                        </h1>
                                                        <div class="counter-text">
                                                            <h5 class="font-weight-normal mb-0 ">Student Satisfaction</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- ROW-1 CLOSED -->

                        <!-- ROW-3 OPEN -->
                        <div class="section bg-landing pb-0 bg-image-style" id="About">
                            <div class="container">
                                <div class="row">
                                    <h4 class="text-center fw-semibold">Our Mission</h4>
                                    <span class="landing-title"></span>
                                    <div class="text-center">
                                        <h2 class="text-center fw-semibold">Our mission is to make work meaningful.</h2>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="card bg-transparent">
                                            <div class="card-body text-dark">
                                                <div class="statistics-info">
                                                    <div class="row">
                                                        <div class="col-xl-6 col-lg-6 ps-0">
                                                            <div class="text-center reveal revealleft mb-3" >
                                                                <img src="../assets/images/landing/business-team-working-on-business-plan.png" alt="" class="br-5">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6 col-lg-6 pe-0 my-auto">

                                                            <div class="ps-5 reveal revealright">
                                                                <h2 class="text-start fw-semibold fs-25 mb-6">We are a creative agency with a passion for design.</h2>
                                                                <div class="d-flex">
                                                                            <span><svg style="width:20px;height:20px" viewBox="0 0 24 24">
                                                                                <path fill="#6c5ffc" d="M23,12L20.56,9.22L20.9,5.54L17.29,4.72L15.4,1.54L12,3L8.6,1.54L6.71,4.72L3.1,5.53L3.44,9.21L1,12L3.44,14.78L3.1,18.47L6.71,19.29L8.6,22.47L12,21L15.4,22.46L17.29,19.28L20.9,18.46L20.56,14.78L23,12M10,17L6,13L7.41,11.59L10,14.17L16.59,7.58L18,9L10,17Z" />
                                                                            </svg></span>
                                                                    <div class="ms-5 mb-4">
                                                                        <h5 class="fw-bold">Quality & Clean Code</h5>
                                                                        <p>The Sash admin code is maintained very cleanly and well-structured with proper comments.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex">
                                                                            <span><svg style="width:20px;height:20px" viewBox="0 0 24 24">
                                                                                <path fill="#6c5ffc" d="M23,12L20.56,9.22L20.9,5.54L17.29,4.72L15.4,1.54L12,3L8.6,1.54L6.71,4.72L3.1,5.53L3.44,9.21L1,12L3.44,14.78L3.1,18.47L6.71,19.29L8.6,22.47L12,21L15.4,22.46L17.29,19.28L20.9,18.46L20.56,14.78L23,12M10,17L6,13L7.41,11.59L10,14.17L16.59,7.58L18,9L10,17Z" />
                                                                            </svg></span>
                                                                    <div class="ms-5 mb-4">
                                                                        <h5 class="fw-bold">Well Documented</h5>
                                                                        <p>
                                                                            The documentation provides clear-cut material for the Sash admin template. The documentation is explained or instructed in such a way that every user can understand.
                                                                        </p>
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
                            </div>
                        </div>
                        <!-- ROW-3 CLOSED -->

                        <!-- ROW-4 OPEN -->
                        <div class="section testimonial-owl-landing">
                            <div class="container">
                                <div class="row">
                                    <div class="card bg-transparent mb-0">
                                        <h4 class="text-center fw-semibold text-white">Subjects</h4>
                                        <span class="landing-title"></span>
                                        <div class="demo-screen-skin code-quality" id="dependencies">
                                            <div class="text-center p-0">
                                                <h2 class="text-center fw-semibold text-white">Subjects Taught at Our Institution</h2>
                                                <div class="row justify-content-center">
                                                    <div class="col-lg-12 px-0">
                                                        <div class="feature-logos mt-5">
                                                            @foreach ($subjects as $subject)
                                                            <div class="slide">
                                                                <img src="../assets/images/landing/web/1.png">
                                                                <h5 class="mt-3 text-white">{{ $subject->name }}</h5>
                                                            </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ROW-4 CLOSED -->


                        <!-- ROW-6 OPEN -->
                        <div class="bg-landing section bg-image-style">
                            <div class="container">
                                <div class="row">
                                    <h4 class="text-center fw-semibold">Choose a plan </h4>
                                    <span class="landing-title"></span>
                                    <h2 class="text-center fw-semibold">Find the <span class="text-primary">Perfect Plan</span> for your Business.</h2>
                                    <div class="pricing-tabs">
                                        <div class="pri-tabs-heading text-center">
                                            <ul class="nav nav-price">
                                                <li><a data-bs-toggle="tab" href="#month">Monthly</a></li>
                                                <li><a class="active show" data-bs-toggle="tab" href="#annualyear">Annual</a></li>
                                            </ul>
                                        </div>
                                        <div class="tab-content">
                                            <div class="tab-pane pb-0 active show" id="annualyear">
                                                <div class="row d-flex align-items-center justify-content-center">
                                                    <div class="col-lg-4 col-xl-4 col-md-8 col-sm-12">
                                                        <div class="card p-3 pricing-card reveal revealrotate">
                                                            <div class="card-header d-block text-justified pt-2">
                                                                <p class="fs-18 fw-semibold mb-1">Basic</p>
                                                                <p class="text-justify fw-semibold mb-1"> <span class="fs-30 me-2">$</span><span class="fs-30 me-1">399</span><span class="fs-25"><span class="op-0-5 text-muted text-20">/</span> year</span></p>
                                                                <p class="fs-13 mb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure quos debitis aliquam .</p>
                                                                <p class="fs-13 mb-1 text-secondary">Billed monthly on regular basis!</p>
                                                            </div>
                                                            <div class="card-body pt-2">
                                                                <ul class="text-justify pricing-body ps-0">
                                                                    <li><i class="mdi mdi-checkbox-marked-circle-outline p-2 fs-16 text-secondary"></i><strong> 2 Free</strong> Domain Name</li>
                                                                    <li><i class="mdi mdi-checkbox-marked-circle-outline p-2 fs-16 text-secondary"></i> <strong>3 </strong> One-Click Apps</li>
                                                                    <li class="text-muted"><i class="mdi mdi-close-circle-outline p-2 fs-16 text-gray"></i><strong> 1 </strong> Databases</li>
                                                                    <li class="text-muted"><i class="mdi mdi-close-circle-outline p-2 fs-16 text-gray"></i><strong> Unlimited </strong> Cloud Storage</li>
                                                                    <li class="text-muted"><i class="mdi mdi-close-circle-outline p-2 fs-16 text-gray"></i><strong> Money </strong> BackGuarantee</li>
                                                                    <li class=text-muted"><i class="mdi mdi-close-circle-outline p-2 fs-16 text-gray"></i><strong> 24/7</strong> support</li>
                                                                </ul>
                                                            </div>
                                                            <div class="card-footer text-center border-top-0 pt-1">
                                                                <button class="btn btn-lg btn-outline-secondary btn-block">
                                                                    <span class="ms-4 me-4">Select</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-xl-4 col-md-8 col-sm-12">
                                                        <div class="card p-3 border-primary pricing-card advanced reveal revealrotate">
                                                            <div class="card-header d-block text-justified pt-2">
                                                                <p class="fs-18 fw-semibold mb-1 pe-0">Advanced<span class="tag bg-primary text-white float-end">Limited Deal</span></p>
                                                                <p class="text-justify fw-semibold mb-1"> <span class="fs-30 me-2">$</span><span class="fs-30 me-1">1,299</span><span class="fs-25"><span class="op-0-5 text-muted text-20">/</span> year</span></p>
                                                                <p class="fs-13 mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure quos debitis aliquam .</p>
                                                                <p class="fs-13 mb-1 text-primary">Billed monthly on regular basis!</p>
                                                            </div>
                                                            <div class="card-body pt-2">
                                                                <ul class="text-justify pricing-body ps-0">
                                                                    <li><i class="mdi mdi-checkbox-marked-circle-outline text-primary p-2 fs-16"></i> <strong> 5 Free</strong> Domain Name</li>
                                                                    <li><i class="mdi mdi-checkbox-marked-circle-outline text-primary p-2 fs-16"></i><strong>5 </strong> One-Click Apps</li>
                                                                    <li><i class="mdi mdi-checkbox-marked-circle-outline text-primary p-2 fs-16"></i><strong> 3 </strong> Databases</li>
                                                                    <li><i class="mdi mdi-checkbox-marked-circle-outline text-primary p-2 fs-16"></i><strong> Unlimited </strong> Cloud Storage</li>
                                                                    <li><i class="mdi mdi-checkbox-marked-circle-outline text-primary p-2 fs-16"></i><strong> Money </strong> BackGuarantee</li>
                                                                    <li class="mb-6"><i class="mdi mdi-checkbox-marked-circle-outline text-primary p-2 fs-16"></i><strong> 24/7</strong> support</li>
                                                                </ul>
                                                            </div>
                                                            <div class="card-footer text-center border-top-0 pt-1">
                                                                <button class="btn btn-lg btn-primary-gradient text-white btn-block">
                                                                    <span class="ms-4 me-4">Select</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-xl-4 col-md-8 col-sm-12">
                                                        <div class="card p-3 pricing-card reveal revealrotate">
                                                            <div class="card-header d-block text-justified pt-2">
                                                                <p class="fs-18 fw-semibold mb-1">Regular</p>
                                                                <p class="text-justify fw-semibold mb-1"> <span class="fs-30 me-2">$</span><span class="fs-30 me-1">899</span><span class="fs-25"><span class="op-0-5 text-muted text-20">/</span> year</span></p>
                                                                <p class="fs-13 mb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure quos debitis aliquam .</p>
                                                                <p class="fs-13 mb-1  text-danger">Billed monthly on regular basis!</p>
                                                            </div>
                                                            <div class="card-body pt-2">
                                                                <ul class="text-justify pricing-body ps-0">
                                                                    <li><i class="mdi mdi-checkbox-marked-circle-outline text-danger p-2 fs-16"></i><strong> 1 Free</strong> Domain Name</li>
                                                                    <li><i class="mdi mdi-checkbox-marked-circle-outline text-danger p-2 fs-16"></i><strong>4 </strong> One-Click Apps</li>
                                                                    <li><i class="mdi mdi-checkbox-marked-circle-outline text-danger p-2 fs-16"></i><strong> 2 </strong> Databases</li>
                                                                    <li class="text-muted"><i class="mdi mdi-close-circle-outline text-gray p-2 fs-16"></i><strong> Unlimited </strong> Cloud Storage</li>
                                                                    <li class="text-muted"><i class="mdi mdi-close-circle-outline text-gray p-2 fs-16"></i><strong> Money </strong> BackGuarantee</li>
                                                                    <li class="text-muted"><i class="mdi mdi-close-circle-outline text-gray p-2 fs-16"></i><strong> 24/7</strong> support</li>
                                                                </ul>
                                                            </div>
                                                            <div class="card-footer text-center border-top-0 pt-1">
                                                                <button class="btn btn-lg btn-outline-danger btn-block">
                                                                    <span class="ms-4 me-4">Select</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="month">
                                                <div class="row d-flex align-items-center justify-content-center">
                                                    <div class="col-lg-4 col-xl-4 col-md-8 col-sm-12">
                                                        <div class="card p-3 pricing-card">
                                                            <div class="card-header d-block text-justified pt-2">
                                                                <p class="fs-18 fw-semibold mb-1">Basic</p>
                                                                <p class="text-justify fw-semibold mb-1"> <span class="fs-30 me-2">$</span><span class="fs-30 me-1">39</span><span class="fs-25"><span class="op-0-5 text-muted text-20">/</span> month</span></p>
                                                                <p class="fs-13 mb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure quos debitis aliquam .</p>
                                                                <p class="fs-13 mb-1 text-secondary">Billed monthly on regular basis!</p>
                                                            </div>
                                                            <div class="card-body pt-2">
                                                                <ul class="text-justify pricing-body ps-0">
                                                                    <li><i class="mdi mdi-checkbox-marked-circle-outline p-2 fs-16 text-secondary"></i><strong> 2 Free</strong> Domain Name</li>
                                                                    <li><i class="mdi mdi-checkbox-marked-circle-outline p-2 fs-16 text-secondary"></i> <strong>3 </strong> One-Click Apps</li>
                                                                    <li class="text-muted"><i class="mdi mdi-close-circle-outline p-2 fs-16 text-gray"></i><strong> 1 </strong> Databases</li>
                                                                    <li class="text-muted"><i class="mdi mdi-close-circle-outline p-2 fs-16 text-gray"></i><strong> Unlimited </strong> Cloud Storage</li>
                                                                    <li class="text-muted"><i class="mdi mdi-close-circle-outline p-2 fs-16 text-gray"></i><strong> Money </strong> BackGuarantee</li>
                                                                    <li class=text-muted"><i class="mdi mdi-close-circle-outline p-2 fs-16 text-gray"></i><strong> 24/7</strong> support</li>
                                                                </ul>
                                                            </div>
                                                            <div class="card-footer text-center border-top-0 pt-1">
                                                                <button class="btn btn-lg btn-outline-secondary btn-block">
                                                                    <span class="ms-4 me-4">Select</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-xl-4 col-md-8 col-sm-12">
                                                        <div class="card p-3 border-primary pricing-card advanced">
                                                            <div class="card-header d-block text-justified pt-2">
                                                                <p class="fs-18 fw-semibold mb-1 pe-0">Advanced<span class="tag bg-primary text-white float-end">Limited Deal</span></p>
                                                                <p class="text-justify fw-semibold mb-1"> <span class="fs-30 me-2">$</span><span class="fs-30 me-1">199</span><span class="fs-25"><span class="op-0-5 text-muted text-20">/</span> month</span></p>
                                                                <p class="fs-13 mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure quos debitis aliquam .</p>
                                                                <p class="fs-13 mb-1 text-primary">Billed monthly on regular basis!</p>
                                                            </div>
                                                            <div class="card-body pt-2">
                                                                <ul class="text-justify pricing-body ps-0">
                                                                    <li><i class="mdi mdi-checkbox-marked-circle-outline text-primary p-2 fs-16"></i> <strong> 5 Free</strong> Domain Name</li>
                                                                    <li><i class="mdi mdi-checkbox-marked-circle-outline text-primary p-2 fs-16"></i><strong>5 </strong> One-Click Apps</li>
                                                                    <li><i class="mdi mdi-checkbox-marked-circle-outline text-primary p-2 fs-16"></i><strong> 3 </strong> Databases</li>
                                                                    <li><i class="mdi mdi-checkbox-marked-circle-outline text-primary p-2 fs-16"></i><strong> Unlimited </strong> Cloud Storage</li>
                                                                    <li><i class="mdi mdi-checkbox-marked-circle-outline text-primary p-2 fs-16"></i><strong> Money </strong> BackGuarantee</li>
                                                                    <li class="mb-6"><i class="mdi mdi-checkbox-marked-circle-outline text-primary p-2 fs-16"></i><strong> 24/7</strong> support</li>
                                                                </ul>
                                                            </div>
                                                            <div class="card-footer text-center border-top-0 pt-1">
                                                                <button class="btn btn-lg btn-primary-gradient text-white btn-block">
                                                                    <span class="ms-4 me-4">Select</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-xl-4 col-md-8 col-sm-12">
                                                        <div class="card p-3 pricing-card">
                                                            <div class="card-header d-block text-justified pt-2">
                                                                <p class="fs-18 fw-semibold mb-1">Regular</p>
                                                                <p class="text-justify fw-semibold mb-1"> <span class="fs-30 me-2">$</span><span class="fs-30 me-1">69</span><span class="fs-25"><span class="op-0-5 text-muted text-20">/</span> month</span></p>
                                                                <p class="fs-13 mb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure quos debitis aliquam .</p>
                                                                <p class="fs-13 mb-1  text-danger">Billed monthly on regular basis!</p>
                                                            </div>
                                                            <div class="card-body pt-2">
                                                                <ul class="text-justify pricing-body ps-0">
                                                                    <li><i class="mdi mdi-checkbox-marked-circle-outline text-danger p-2 fs-16"></i><strong> 1 Free</strong> Domain Name</li>
                                                                    <li><i class="mdi mdi-checkbox-marked-circle-outline text-danger p-2 fs-16"></i><strong>4 </strong> One-Click Apps</li>
                                                                    <li><i class="mdi mdi-checkbox-marked-circle-outline text-danger p-2 fs-16"></i><strong> 2 </strong> Databases</li>
                                                                    <li class="text-muted"><i class="mdi mdi-close-circle-outline text-gray p-2 fs-16"></i><strong> Unlimited </strong> Cloud Storage</li>
                                                                    <li class="text-muted"><i class="mdi mdi-close-circle-outline text-gray p-2 fs-16"></i><strong> Money </strong> BackGuarantee</li>
                                                                    <li class="text-muted"><i class="mdi mdi-close-circle-outline text-gray p-2 fs-16"></i><strong> 24/7</strong> support</li>
                                                                </ul>
                                                            </div>
                                                            <div class="card-footer text-center border-top-0 pt-1">
                                                                <button class="btn btn-lg btn-outline-danger btn-block">
                                                                    <span class="ms-4 me-4">Select</span>
                                                                </button>
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
                        <!-- ROW-6 CLOSED -->


                        <!-- ROW-10 OPEN -->
                        <div class="bg-image-landing section pb-0" id="Contact">
                            <div class="container">
                                <div class="">
                                    <div class="card card-shadow reveal">
                                        <h4 class="text-center fw-semibold mt-7">Contact</h4>
                                        <span class="landing-title"></span>
                                        <h2 class="text-center fw-semibold mb-0 px-2">Get in Touch with <span class="text-primary">US.</span></h2>
                                        <div class="card-body p-5 pb-6 text-dark">
                                            <div class="statistics-info p-4">
                                                <div class="row justify-content-center">
                                                    <div class="col-lg-9">
                                                        <div class="mt-3">
                                                            <div class="text-dark">
                                                                <div class="services-statistics reveal my-5">
                                                                    <div class="row text-center">
                                                                        <div class="col-xl-3 col-md-6 col-lg-6">
                                                                            <div class="card">
                                                                                <div class="card-body p-0">
                                                                                    <div class="counter-status">
                                                                                        <div class="counter-icon bg-primary-transparent box-shadow-primary">
                                                                                            <i class="fe fe-map-pin text-primary fs-23"></i>
                                                                                        </div>
                                                                                        <h4 class="mb-2 fw-semibold">Main Branch</h4>
                                                                                        <p>San Francisco, CA </p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xl-3 col-md-6 col-lg-6">
                                                                            <div class="card">
                                                                                <div class="card-body p-0">
                                                                                    <div class="counter-status">
                                                                                        <div class="counter-icon bg-secondary-transparent box-shadow-secondary">
                                                                                            <i class="fe fe-headphones text-secondary fs-23"></i>
                                                                                        </div>
                                                                                        <h4 class="mb-2 fw-semibold">Phone & Email</h4>
                                                                                        <p class="mb-0">+125 254 3562 </p>
                                                                                        <p>georgeme@abc.com</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xl-3 col-md-6 col-lg-6">
                                                                            <div class="card">
                                                                                <div class="card-body p-0">
                                                                                    <div class="counter-statuss">
                                                                                        <div class="counter-icon bg-success-transparent box-shadow-success">
                                                                                            <i class="fe fe-mail text-success fs-23"></i>
                                                                                        </div>
                                                                                        <h4 class="mb-2 fw-semibold">Contact</h4>
                                                                                        <p class="mb-0">www.example.com</p>
                                                                                        <p>example@dev.com</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xl-3 col-md-6 col-lg-6">
                                                                            <div class="card">
                                                                                <div class="card-body p-0">
                                                                                    <div class="counter-status">
                                                                                        <div class="counter-icon bg-danger-transparent box-shadow-danger">
                                                                                            <i class="fe fe-airplay text-danger fs-23"></i>
                                                                                        </div>
                                                                                        <h4 class="mb-2 fw-semibold">Working Hours</h4>
                                                                                        <p class="mb-0">Monday - Friday: 9am - 6pm</p>
                                                                                        <p>Satday - Sunday: Holiday</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-9">
                                                        <div class="">
                                                            <form class="form-horizontal reveal revealrotate m-t-20" action="index.html">
                                                                <div class="form-group">
                                                                    <div class="col-xs-12">
                                                                        <input class="form-control" type="text" required="" placeholder="Username*">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div class="col-xs-12">
                                                                        <input class="form-control" type="email" required="" placeholder="Email*">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div class="col-xs-12">
                                                                        <textarea class="form-control" rows="5">Your Comment*</textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="">
                                                                    <a href="javascript:void(0)" class="btn btn-primary btn-rounded  waves-effect waves-light">Submit</a>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ROW-10 CLOSED -->

                        <!-- ROW-11 OPEN -->
                        <div class="">
                            <div class="container">
                                <div class="testimonial-owl-landing buynow-landing reveal revealrotate">
                                    <div class="row pt-6">
                                        <div class="col-md-12">
                                            <div class="card bg-transparent">
                                                <div class="card-body pt-5 px-7">
                                                    <div class="row">
                                                        <div class="col-lg-9">
                                                            <h1 class="fw-semibold text-white">Start Your Project with Sash.</h1>
                                                            <p class="text-white">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                                                                explicabo.
                                                            </p>
                                                        </div>
                                                        <div class="col-lg-3 text-end my-auto">
                                                            <a href="https://themeforest.net/item/sash-bootstrap-5-admin-dashboard-template/35183671" target="_blank" class="btn btn-pink w-lg pt-2 pb-2"><i class="fe fe-shopping-cart me-2"></i>Buy Now
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ROW-11 CLOSED -->

                    </div>
                </div>
                <!-- CONTAINER CLOSED-->
            </div>
        </div>
        <!--app-content closed-->
    </div>

    <!-- FOOTER OPEN -->
    <div class="demo-footer">
        <div class="container">
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <div class="top-footer">
                            <div class="row">
                                <div class="col-lg-4 col-sm-12 col-md-12 reveal revealleft">
                                    <h6>About</h6>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                                        explicabo.
                                    </p>
                                    <p class="mb-5 mb-lg-2">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur Excepteur sint occaecat .</p>
                                </div>
                                <div class="col-lg-2 col-sm-6 col-md-4 reveal revealleft">
                                    <h6>Pages</h6>
                                    <ul class="list-unstyled mb-5 mb-lg-0">
                                        <li><a href="index.html">Dashboard</a></li>
                                        <li><a href="alerts.html">Elements</a></li>
                                        <li><a href="form-elements.html">Forms</a></li>
                                        <li><a href="charts.html">Charts</a></li>
                                        <li><a href="datatable.html">Tables</a></li>
                                        <li><a href="file-attachments.html">Other Pages</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-2 col-sm-6 col-md-4 reveal revealleft">
                                    <h6>Information</h6>
                                    <ul class="list-unstyled mb-5 mb-lg-0">
                                        <li><a href="about.html">Our Team</a></li>
                                        <li><a href="about.html">Contact US</a></li>
                                        <li><a href="about.html">About</a></li>
                                        <li><a href="services.html">Services</a></li>
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="terms.html">Terms and Services</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-4 col-sm-12 col-md-4 reveal revealleft">
                                    <div class="">
                                        <a href="index.html"><img loading="lazy" alt="" class="logo mb-3" src="../assets/images/brand/logo-3.png"></a>
                                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur Excepteur sint occaecat.</p>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Enter your email" aria-label="Example text with button addon" aria-describedby="button-addon1">
                                                <button class="btn btn-primary" type="button" id="button-addon2">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="btn-list mt-6">
                                        <button type="button" class="btn btn-icon rounded-pill"><i class="fa fa-facebook"></i></button>
                                        <button type="button" class="btn btn-icon rounded-pill"><i class="fa fa-youtube"></i></button>
                                        <button type="button" class="btn btn-icon rounded-pill"><i class="fa fa-twitter"></i></button>
                                        <button type="button" class="btn btn-icon rounded-pill"><i class="fa fa-instagram"></i></button>
                                    </div>
                                    <hr>
                                </div>
                            </div>
                        </div>
                        <footer class="main-footer px-0 pb-0 text-center">
                            <div class="row ">
                                <div class="col-md-12 col-sm-12">
                                    Copyright © <span id="year"></span> <a href="javascript:void(0)">Sash</a>. Designed with <span class="fa fa-heart text-danger"></span> by <a href="javascript:void(0)"> Spruko </a> All rights reserved.
                                </div>
                            </div>
                        </footer>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FOOTER CLOSED -->
</div>

<!-- BACK-TO-TOP -->
<a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

<!-- JQUERY JS -->
<script src="../assets/js/jquery.min.js"></script>

<!-- BOOTSTRAP JS -->
<script src="../assets/plugins/bootstrap/js/popper.min.js"></script>
<script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>

<!-- COUNTERS JS-->
<script src="../assets/plugins/counters/counterup.min.js"></script>
<script src="../assets/plugins/counters/waypoints.min.js"></script>
<script src="../assets/plugins/counters/counters-1.js"></script>

<!-- Perfect SCROLLBAR JS-->
<script src="../assets/plugins/owl-carousel/owl.carousel.js"></script>
<script src="../assets/plugins/company-slider/slider.js"></script>

<!-- SIDE-MENU JS -->
<script src="../assets/plugins/sidemenu/sidemenu.js"></script>

<!-- Star Rating Js-->
<script src="../assets/plugins/rating/jquery-rate-picker.js"></script>
<script src="../assets/plugins/rating/rating-picker.js"></script>

<!-- Star Rating-1 Js-->
<script src="../assets/plugins/ratings-2/jquery.star-rating.js"></script>
<script src="../assets/plugins/ratings-2/star-rating.js"></script>

<!-- Sticky js -->
<script src="../assets/js/sticky.js"></script>

<!-- CUSTOM JS -->
<script src="../assets/js/landing.js"></script>

</body>

</html>

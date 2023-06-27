@extends('layout.content')
@section('topslider')

<header class="header">
    <div class="container">
        <div class="header-wrapper">
            <div class="header-social">
                <ul>
                    <li>
                        <a target="_blank" href="https://www.linkedin.com/company/iroid/">
                            <img src="assets/images/header-linkdin.svg" alt="Linkdin logo">
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="https://www.facebook.com/iroidsolutions/">
                            <img src="assets/images/header-facebook.svg" alt="Facebook logo">
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="https://www.youtube.com/channel/UCgwfPp_d4qgD6l9vGvxwvgw/videos">
                            <img src="assets/images/header-youtube.svg" alt="Youtube logo">
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="https://www.instagram.com/iroid_solutions/">
                            <img src="assets/images/header-instagram.svg" alt="Instagram logo">
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="https://twitter.com/weareiroid">
                            <img src="assets/images/header-twitter.svg" alt="Twitter logo">
                        </a>
                    </li>
                </ul>
            </div>
            <div class="header-contact">
                <ul>

                    <li class="font-static-16 font-weight-500 font-static-white d-flex align-items-center call">
                        <img src="assets/images/whatsapp.svg" alt="Call">
                        <div class="font-static-16 font-weight-400  font-static-white ps-2">
                            <a class="font-static-16 font-weight-400  font-static-white d-block" href="//api.whatsapp.com/send?phone=91 77788 69939" target="_blank">+ 91 77788 69939
                                (Business)</a> <a class="font-static-16 font-weight-400  font-static-white d-block" target="_blank" href="//api.whatsapp.com/send?phone=91 90238 68898">+ 91
                                90238 68898 (HR)</a>
                        </div>
                    </li>
                    <li class="font-static-16 font-weight-500 font-static-white d-flex align-items-center call">
                        <img src="assets/images/gmail.svg" alt="Call">
                        <a href="javascript:void(0)" class="font-static-16 font-weight-400  font-static-white ps-2">
                            <span onclick="window.open('mailto:business@iroidsolutions.in');">business@iroidsolutions.in
                                (Business)</span><br><span onclick="window.open('mailto:hr@iroidsolutions.in');">
                                hr@iroidsolutions.in (HR)</span>
                        </a>
                    </li>

                    <li class="font-static-16 font-weight-500 font-static-white d-flex align-items-center">
                        <a href="skype:daxeshpatel7224?chat" target="_blank"> <img src="assets/images/skype.svg" alt="Skype"></a>
                        <a href="skype:daxeshpatel7224?chat" target="_blank" class="font-static-16 font-weight-400 font-static-white ps-2">
                        daxeshpatel7224
                        </a>
                    </li>
                </ul>
            </div>

        </div>
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <a class="navbar-brand" href="#">
                <img src="assets/images/header-logo.svg" alt="Best IT company in surat - iRoid ">
            </a>
            <button class="navbar-toggler" type="button" id="NavbarToggler">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 me-lg-3">
                    <li class="nav-item">
                        <a class="nav-link font-static-18 font-static-gray {{ isset($page) && in_array($page, ['home']) ? 'naactive' : '' }} " aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-static-18 font-static-gray {{ isset($page) && in_array($page, ['testimonialpage']) ? 'naactive' : '' }}" href="{{route('testimonialpage')}}">Testimonials</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link font-static-18 font-static-gray {{ isset($page) && in_array($page, ['portfolio']) ? 'naactive' : '' }}" aria-current="page" href="{{route('portfoliopage')}}">Portfolio</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link font-static-18 font-static-gray {{ isset($page) && in_array($page, ['career']) ? 'activenav' : '' }}" aria-current="page" href="javascript:void(0)" id="navbarDropdown" role="button" aria-expanded="false">Career</a>
                        <ul class="dropdown-menu career-dropdown" data-cat="app" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{route('careerpage')}}">Job Vacancies</a></li>
                            <li class="pt-0"><a class="dropdown-item" href="{{route('internshippage')}}">Internship</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-static-18 font-static-gray {{ isset($page) && in_array($page, ['contactus']) ? 'naactive' : '' }}" aria-current="page" href="{{route('contactuspage')}}">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-menu bg-blue" id="navmenu" href="#">
                            <img src="assets/images/menu.svg" alt="navbar-menu">
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>



<section class="slider-wrapper">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 order-last order-md-last order-lg-first">
                <div class="banner-slider-content">
                    <h1 class="font-static-blue font-static-48 font-weight-600 ">We provide you with complete IT solution for your Business</h1>
                    <p class="font-static-gray font-static-22 font-weight-400 ">We live and breathe apps - that's
                        why our clients love working with us</p>
                    <a href="{{route('testimonialpage')}}" type="submit" class="btn btn-primary bg-blue font-static-18 font-weight-500 font-static-white cursor-pointer">See
                        testimonials</a>
                    <div class="review-btn">
                        <p class="font-static-18 font-static-gray  mt-5">We are reviewed on:</p>
                        <ul class="list-unstyled mb-0">
                            <li class="ps-0">
                                <a target="_blank" href="https://clutch.co/profile/iroid-solutions#reviews">
                                    <img src="assets/images/clutch.svg" alt="Clutch" class="">
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="https://www.goodfirms.co/company/iroidsolutions/reviews">
                                    <img src="assets/images/goodfirms.svg" alt="Goodfirms" class="goodfirms ">
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="https://www.google.com/search?gs_ssp=eJzj4tVP1zc0TDYySLEsMCwzYLRSNagwTko1MEk1T0wxs0hOMzO2tDKoSEpNNTQ1NzI2MDJKskxLNfTizyzKz0xRKM7PKS3JzM8rBgDE6xVD&q=iroid+solutions&rlz=1C5CHFA_enIN794IN794&oq=&aqs=chrome.0.46i39i175i199i362j35i39i362l7.594784j0j7&sourceid=chrome&ie=UTF-8#lrd=0x3be04e7ad68cf639:0xbee15723022b9fe1,1,,,">
                                    <img src="assets/images/google.svg" alt="Google" class="">
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="https://www.glassdoor.co.in/Reviews/IRoid-Surat-Reviews-EI_IE1563381.0,5_IL.6,11_IC2933827.htm?filter.iso3Language=eng">
                                    <img src="assets/images/glassdoor.svg" alt="Glassdoor" class="">
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 order-first order-md-first order-lg-last">
                <div class="banner-slider-img text-end">
                    <img src="assets/images/slider-one.svg" alt="Slider One" class="">
                </div>
            </div>
        </div>
    </div>
</section>

<div class="sidebar-wrapper bg-blue" id="SidebarWrapper">
    <div class="right-sidebar">
        <div class="sidebar-close text-end">
            <a href="#" class="sidebar-close-icon" id="SidebarCloseIcon">
                <img src="assets/images/close.svg" alt="Close Icon">
            </a>
        </div>
        <div class="sidebar-brand text-center">
            <img src="assets/images/header-logo.svg" alt="Best IT company in surat - iRoid " class="">
        </div>
        <div class="sidebar-header ps-5">
            <ul class="list-unstyled">
                <li class="pt-2 pb-2">
                    <a href="#" class="font-static-16 font-weight-400 font-static-white " aria-current="page"> -- &nbsp;Home</a>
                </li>
                <li class="pt-2 pb-2">
                    <a href="{{route('servicepage')}}" class="font-static-16 font-weight-400 font-static-white " aria-current="page"> -- &nbsp;Services</a>
                </li>
                <li class="pt-2 pb-2">
                    <a href="{{route('portfoliopage')}}" class="font-static-16 font-weight-400 font-static-white " aria-current="page"> -- &nbsp;Portfolio</a>
                </li>
                <li class="pt-2 pb-2">
                    <a href="{{route('testimonialpage')}}" class="font-static-16 font-weight-400 font-static-white " aria-current="page"> -- &nbsp;Testimonials</a>
                </li>
                <li class="pt-2 pb-2">
                    <a href="{{route('clientmore')}}" class="font-static-16 font-weight-400 font-static-white " aria-current="page"> -- &nbsp;Our Clients</a>
                </li>
                <li class="pt-2 pb-2">
                    <a href="{{route('hireuspage')}}" class="font-static-16 font-weight-400 font-static-white " aria-current="page"> -- &nbsp;Hire Us</a>
                </li>
                <li class="pt-2 pb-2">
                    <a href="{{route('careerpage')}}" class="font-static-16 font-weight-400 font-static-white " aria-current="page"> -- &nbsp;Job Vacancies</a>
                </li>
                <li class="pt-2 pb-2">
                    <a href="{{Route::currentRouteName()=='blog'?'#' : route('blogdata')}} " class="font-static-16 font-weight-400 font-static-white "> --
                    &nbsp;Blog</a>
                </li>
                <li class="pt-2 pb-2">
                    <a href="{{route('internshippage')}}" class="font-static-16 font-weight-400 font-static-white " aria-current="page"> -- &nbsp;Internship</a>
                </li>
                <li class="pt-2 pb-2">
                    <a href="{{route('aboutuspage')}}" class="font-static-16 font-weight-400 font-static-white " aria-current="page"> -- &nbsp;About Us</a>
                </li>
                <li class="pt-2 pb-2">
                    <a href="{{route('contactuspage')}}" class="font-static-16 font-weight-400 font-static-white ">
                        -- &nbsp;Contact Us</a>
                </li>
            </ul>
            <div class="social-account pt-0 pt-md-4 pt-lg-4">
                <!-- <p class="text-white">Find us here : -</p> -->
                <ul class="list-unstyled d-flex align-items-center">
                    <li>
                        <a target="_blank" href="https://www.linkedin.com/company/iroid/ ">
                            <img src="assets/images/linkdin.svg" alt="Linkdin logo">
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="https://www.facebook.com/iroidsolutions/">
                            <img src="assets/images/facebook1.svg" alt="Facebook logo">
                        </a>
                    </li>

                    <li>
                        <a target="_blank" href="https://www.youtube.com/channel/UCgwfPp_d4qgD6l9vGvxwvgw/videos">
                            <img src="assets/images/youtube.svg" alt="Youtube logo">
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="https://www.instagram.com/iroid_solutions/">
                            <img src="assets/images/instagram.svg" alt="Instagram logo">
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="https://twitter.com/weareiroid">
                            <img src="assets/images/twitter1.svg" alt="Twitter logo">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')

<section class="who-we-are-section">
    <div class="container">
        <div class="who-we-title">
            <h2 class="font-static-36 font-static-blue font-weight-600 text-center ">Who we <span class="font-static-36 font-static-black font-weight-600">are</span></h2>
            <p class="font-static-18 font-static-gray font-weight-normal text-center subtitle ">We are a group of professional, hard-working and at the same time fun loving people who are experts and passionate about our work.</p>
        </div>
        <div class="video-player">
            <div class="company-video">
                <img src="assets/images/video.webp" alt="Comapny Video" class="">
                <a href="#Company" class="play-icon" data-bs-toggle="modal">
                    <img src="assets/images/play-video.svg" alt="Play Video" class="">
                </a>
            </div>
            <div class="video-text-skill prg-container">
                <div class="our-skills bg-white">
                    <h3 class="font-static-24 font-static-black font-weight-500 ">Our Skills</h3>
                    <div class="company-skills">
                        <div class="platform-development">
                            <div class="android-count count bg-light-blue font-static-white">
                                <p class="font-static-white ">01</p>
                            </div>
                            <div class="android-skills">
                                <div class="progrs-land">
                                    <p class="font-static-18 font-static-gray font-weight-normal ">Android
                                        Development</p>
                                    <div class="d-flex align-items-center">
                                        <p class="font-static-18 font-static-gray font-weight-normal count-width prg-count" data-count="98">0</p>
                                        <p class="font-static-18 font-static-gray font-weight-normal ">%</p>
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-android w-98 bg-light-blue wow animate__lightSpeedInLeft animated" data-wow-duration="5s" data-wow-delay=".3s" role="progressbar" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="platform-development">
                            <div class="ios-count count bg-light-red font-static-white">
                                <p class="font-static-white ">02</p>
                            </div>
                            <div class="android-skills">
                                <div class="progrs-land">
                                    <p class="font-static-18 font-static-gray font-weight-normal ">iOS Development
                                    </p>
                                    <div class="d-flex align-items-center">
                                        <p class="font-static-18 font-static-gray font-weight-normal count-width prg-count" data-count="98" style="width: 25px">0</p>
                                        <p class="font-static-18 font-static-gray font-weight-normal ">%</p>
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-ios w-98 bg-light-red wow animate__lightSpeedInLeft animated" data-wow-duration="5s" data-wow-delay=".3s" role="progressbar" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="platform-development">
                            <div class="website-count count bg-light-green font-static-white">
                                <p class="font-static-white ">03</p>
                            </div>
                            <div class="android-skills">
                                <div class="progrs-land">
                                    <p class="font-static-18 font-static-gray font-weight-normal ">Website & Webapp
                                        Development</p>
                                    <div class="d-flex align-items-center">
                                        <p class="font-static-18 font-static-gray font-weight-normal count-width prg-count" data-count="97">0</p>
                                        <p class="font-static-18 font-static-gray font-weight-normal ">%</p>
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-website w-97 bg-light-green wow animate__lightSpeedInLeft animated" data-wow-duration="5s" data-wow-delay=".3s" role="progressbar" aria-valuenow="97" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="platform-development">
                            <div class="cross-count count bg-blue font-static-white">
                                <p class="font-static-white ">04</p>
                            </div>
                            <div class="android-skills">
                                <div class="progrs-land">
                                    <p class="font-static-18 font-static-gray font-weight-normal ">Cross Platform
                                        Development</p>
                                    <div class="d-flex align-items-center">
                                        <p class="font-static-18 font-static-gray font-weight-normal count-width prg-count" data-count="95">0</p>
                                        <p class="font-static-18 font-static-gray font-weight-normal ">%</p>
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-cross w-95 bg-blue wow animate__lightSpeedInLeft animated" data-wow-duration="5s" data-wow-delay=".3s" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="platform-development p-0">
                            <div class="uiux-count count bg-light-perple font-static-white">
                                <p class="font-static-white ">05</p>
                            </div>
                            <div class="android-skills">
                                <div class="progrs-land">
                                    <p class="font-static-18 font-static-gray font-weight-normal ">UI/UX</p>
                                    <div class="d-flex align-items-center">
                                        <p class="font-static-18 font-static-gray font-weight-normal count-width prg-count" data-count="95">0</p>
                                        <p class="font-static-18 font-static-gray font-weight-normal ">%</p>
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-uiux w-95 bg-light-perple wow animate__lightSpeedInLeft animated" data-wow-duration="5s" data-wow-delay=".3s" role="progressbar" aria-valuenow="93" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!---------------------------------------------------------- Who we are section end ---------------------------------------------------------->

<!---------------------------------------------------------- Video Testimonials section start ---------------------------------------------------------->
<section class="video-testimonials bg-light-white">
    @routes
    <div class="who-we-title">
        <h2 class="font-static-36 font-static-black font-weight-600 text-center"> <span class="font-static-36 font-static-blue font-weight-600 ">Video</span> Testimonials</h2>
        <p class="font-static-18 font-static-gray font-weight-normal text-center subtitle">Our clients love our
            work. Have a look at some video testimonials of our clients
            sharing their experiences working with us.</p>
    </div>
    <div class="container">
        <div class="autoplay">

            @foreach($data as $val)

            <div class="client-video wow animate__fadeInUp animated" data-wow-duration=".8s" data-wow-delay=".2s" data-cat="app">
                <div class="clients-show-video w-100 h-100">
                    <img src="{{url(Storage::url($val->thumbnail))}}" alt="Clients {{$val->id}}" class="w-100 h-100 ">

                    <a href="#Popupone" class="play-icon video-testimonial" data-id="poponeid{{$val->id}}" id="poponeid{{$val->id}}" data-pk="{{$val->videolink}}">
                        <img src="assets/images/play-video.svg" alt="Play Video" class="">
                    </a>
                </div>
                <div class="client-details">
                    <div class="clients-name">
                        <h5 class="font-static-18 font-static-white font-weight-500">{{$val->clientname}}</h5>
                        <p class="font-static-16 font-static-white font-weight-normal">{{$val->position}}</p>
                    </div>
                    @if($val->country_data ==null)

                    <div></div>
                    @else
                    <div class="country">
                        <svg width="44" height="31" viewBox="0 0 44 31" fill="none" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink">
                            <rect width="44" height="31" fill="url(#pattern{{$val->id}})" />
                            <defs>
                                <pattern id="pattern{{$val->id}}" patternContentUnits="objectBoundingBox" width="1" height="1">
                                    <use xlink:href="#image0_36:{{$val->id}}" transform="translate(0 -0.00645161) scale(0.00454545 0.00645161)" />
                                </pattern>
                                <image id="image0_36:{{$val->id}}" width="220" height="157" xlink:href="{{ URL('assets/img/country/'.strtolower($val->country_data->code).'.png') }}" class="" />
                            </defs>
                        </svg>

                    </div>
                    @endif
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!---------------------------------------------------------- Video Testimonials section end ---------------------------------------------------------->
<!---------------------------------------------------------- Video Testimonials section start ---------------------------------------------------------->
<section class="video-testimonials bg-white mt-0 lozad">
    <div class="who-we-title">
        <h2 class="font-static-36 font-static-black font-weight-600 text-center"> <span class="font-static-36 font-static-blue font-weight-600 ">Our Friendly </span> Office Environment
        </h2>
        <p class="font-static-18 font-static-gray font-weight-normal text-center subtitle"></p>
    </div>
    <div class="container">
        <div class="autoplay">
            @foreach($office as $val)
            <div class="client-video wow animate__fadeInUp animated" data-wow-duration=".8s" data-wow-delay=".2s" data-cat="app">
                <div class="clients-show-video w-100 h-100">
                    <img src="{{url(Storage::url($val->thumbnail))}}" alt="iRoid - fun office environment at IT company" class="w-100 h-100 ">
                    <!-- <img src="assets/images/office-environment-one.png" alt="" class="w-100 h-100"> -->
                    <a href="#Environmentone" class="play-icon office-video" data-id="poponeid{{$val->id}}" id="poponeid{{$val->id}}" data-pk="{{$val->video}}">
                        <img src="assets/images/play-video.svg" alt="Play Video" class="">
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!---------------------------------------------------------- Video Testimonials section end ---------------------------------------------------------->

<!---------------------------------------------------------- services section start ---------------------------------------------------------->
<section class="service-section">
    <div class="container">
        <div class="who-we-title">
            <h2 class="font-static-36 font-static-black font-weight-600 text-center"><span class="font-static-36 font-static-blue font-weight-600 ">Services We</span> are Providing</h2>
            <p class="font-static-18 font-static-gray font-weight-normal text-center subtitle ">Offer your business
                with the best assistance for growth.</p>
        </div>
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                <div class="service-list wow animate__fadeInUp animated" data-wow-duration=".8s" data-wow-delay=".2s">
                    <div class="service-app bg-white">
                        <img src="assets/images/android-service.svg" alt="Android development company in surat" class="">
                    </div>
                    <h3 class="font-static-22 font-weight-500 font-static-blue ">Android App Development </h3>
                    <p class="font-static-16 font-weight-normal font-static-gray font-weight-500 ">Our Android app
                        developers have years of experience designing and deploying Android apps on the Google Play
                        app store. </p>
                    <a href="javascript:void(0)">
                        <img src="assets/images/service.svg" alt="right side arrow icon" class="">
                    </a>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-4 pt-5 pt-md-0">
                <div class="service-list wow animate__fadeInUp animated" data-wow-duration=".8s" data-wow-delay=".2s">
                    <div class="service-app bg-white">
                        <img src="assets/images/ios-service.svg" alt="iOS app development" class="">
                    </div>
                    <h3 class="font-static-22 font-weight-500 font-static-blue ">iOS App Development </h3>
                    <p class="font-static-16 font-weight-normal font-static-gray font-weight-500 ">iRoid has the
                        expertise to design, program, and deploy iPhone and iPad apps that meld function with
                        brilliant design.</p>
                    <a href="javascript:void(0)">
                        <img src="assets/images/service.svg" alt="right side arrow icon" class="">
                    </a>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-4 pt-5 pt-md-5 pt-lg-0">
                <div class="service-list wow animate__fadeInUp animated" data-wow-duration=".8s" data-wow-delay=".2s">
                    <div class="service-app bg-white">
                        <img src="assets/images/website-service.svg" alt="Web development company" class="">
                    </div>
                    <h3 class="font-static-22 font-weight-500 font-static-blue ">Website Development </h3>
                    <p class="font-static-16 font-weight-normal font-static-gray font-weight-500 ">With the
                        proliferation of websites throughout the world, the significance of web development cannot
                        be ignored.
                    </p>
                    <a href="javascript:void(0)">
                        <img src="assets/images/service.svg" alt="right side arrow icon" class="">
                    </a>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-4 pt-5">
                <div class="service-list wow animate__fadeInUp animated" data-wow-duration=".8s" data-wow-delay=".2s">
                    <div class="service-app bg-white">
                        <img src="assets/images/uiux-service.svg" alt="UIUX designs" class="">
                    </div>
                    <h3 class="font-static-22 font-weight-500 font-static-blue ">UI & UX Designs</h3>
                    <p class="font-static-16 font-weight-normal font-static-gray font-weight-500 ">UI design and UX development are some of our core areas of expertise. The different stages are Research, User Testing, Front-End Code Development, and Integration Support.</p>
                    <a href="javascript:void(0)">
                        <img src="assets/images/service.svg" alt="right side arrow icon" class="">
                    </a>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-4 pt-5">
                <div class="service-list wow animate__fadeInUp animated" data-wow-duration=".8s" data-wow-delay=".2s">
                    <div class="service-app bg-white">
                        <img src="assets/images/project-service.svg" alt="cross platform development" class="">
                    </div>
                    <h3 class="font-static-22 font-weight-500 font-static-blue ">Cross Platform Development</h3>
                    <p class="font-static-16 font-weight-normal font-static-gray font-weight-500 ">In recent times,
                        the popularity of hybrid application development is rising immensely. It has benefited
                        businesses in unimaginable ways.</p>
                    <a href="javascript:void(0)">
                        <img src="assets/images/service.svg" alt="right side arrow icon" class="">
                    </a>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-4 pt-5">
                <div class="service-list wow animate__fadeInUp animated" data-wow-duration=".8s" data-wow-delay=".2s">
                    <div class="service-app bg-white">
                        <img src="assets/images/trending-tech.svg" alt="Trending" class="">
                    </div>
                    <h3 class="font-static-22 font-weight-500 font-static-blue ">Trending Technologies</h3>
                    <p class="font-static-16 font-weight-normal font-static-gray font-weight-500 ">We also work with emerging and trending technologies. Our expert team has experience working with IoT (Internet of Things).</p>
                    <a href="javascript:void(0)">
                        <img src="assets/images/service.svg" alt="right side arrow icon">
                    </a>
                </div>
            </div>

        </div>
        <div class="mb-3 text-center">
            <a type="submit" href="{{route('servicepage')}}" class="btn btn-primary bg-blue font-static-18 font-weight-500 font-static-white">View More</a>
        </div>
    </div>
</section>
<!---------------------------------------------------------- services section end ---------------------------------------------------------->

<!---------------------------------------------------------- Amazing Facts section end ---------------------------------------------------------->
<section class="amazing-facts pt-lg-0">
    <div class="container">
        <div class="who-we-title">
            <h2 class="font-static-36 font-static-black font-weight-600 text-center"><span class="font-static-36 font-static-blue font-weight-600"> Our Amazing</span> Facts</h2>
        </div>
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                <div class="amazing-img">
                    <img src="assets/images/amazing-object.svg" alt="Amazing" class="">
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-4 mt-md-0 mt-lg-0">
                        <div class="single-skills bg-white wow fadeInUp animated box-hover center" data-wow-duration=".8s" data-wow-delay=".2s">
                            <div class="dashed-circle">
                                <p class="font-static-black count font-static-36 font-weight-bold year-count" data-count="9">0
                                <p class="font-static-black font-static-36 font-weight-bold">+</p>
                                </p>
                            </div>
                            <h3 class="font-weight-normal font-static-18 font-static-gray">Years in <br>Business
                            </h3>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-4 mt-md-0 mt-lg-0">
                        <div class="single-skills bg-white wow fadeInUp animated box-hover center" data-wow-duration=".8s" data-wow-delay=".2s">
                            <div class="dashed-circle">
                                <p class="font-static-black count font-static-36 font-weight-bold year-count" data-count="40">0
                                <p class="font-static-black font-static-36 font-weight-bold">+</p>
                                </p>
                            </div>
                            <h3 class="font-weight-normal font-static-18 font-static-gray">Team <br>Members</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4 mt-md-4 mt-lg-5">
            <div class="col-12 col-sm-12 col-md-6 col-lg-3">
                <div class="single-skills bg-white wow fadeInUp animated box-hover center" data-wow-duration=".8s" data-wow-delay=".2s">
                    <div class="dashed-circle">
                        <p class="font-static-black count font-static-36 font-weight-bold year-count" data-count="200">0
                        <p class="font-static-black font-static-36 font-weight-bold">+</p>
                        </p>
                    </div>
                    <h3 class="font-weight-normal font-static-18 font-static-gray">Happy <br>Clients</h3>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-3 mt-4 mt-md-4 mt-lg-0">
                <div class="single-skills bg-white wow fadeInUp animated box-hover center" data-wow-duration=".8s" data-wow-delay=".2s">
                    <div class="dashed-circle">
                        <p class="font-static-black count font-static-36 font-weight-bold year-count" data-count="300">0
                        <p class="font-static-black font-static-36 font-weight-bold">+</p>
                        </p>
                    </div>
                    <h3 class="font-weight-normal font-static-18 font-static-gray">Projects <br>Completed</h3>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-3 mt-4 mt-md-4 mt-lg-0">
                <div class="single-skills bg-white wow fadeInUp animated box-hover center" data-wow-duration=".8s" data-wow-delay=".2s">
                    <div class="dashed-circle">
                        <p class="font-static-black count font-static-36 font-weight-bold year-count" data-count="90">0
                        <p class="font-static-black font-static-36 font-weight-bold">%</p>
                        </p>
                    </div>
                    <h3 class="font-weight-normal font-static-18 font-static-gray client-max">Clients Recommended Us
                    </h3>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-3 mt-4 mt-md-4 mt-lg-0">
                <div class="single-skills bg-white wow fadeInUp animated box-hover center" data-wow-duration=".8s" data-wow-delay=".2s">
                    <div class="dashed-circle">
                        <p class="font-static-black count font-static-36 font-weight-bold year-count" data-count="86">0
                        <p class="font-static-black font-static-36 font-weight-bold">%</p>
                        </p>
                    </div>
                    <h3 class="font-weight-normal font-static-18 font-static-gray">Repeat Clients Ratio</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="portfolio-section lozad">
    <div class="container">

        <div class="who-we-title">
            <h2 class="font-static-36 font-static-blue font-weight-600 text-center">Check Our<span class="font-static-36 font-static-black font-weight-600"> Awesome Portfolio</span></h2>
            <p class="font-static-18 font-static-gray font-weight-normal text-center">iRoid is proud to be listed
                among the top 100 IT solutions companies in India,
                according to a recent online survey done in 2019.</p>
        </div>
        <div class="company-portfolio">
            <ul id="filter" class="clearfix mb-5 change">
                <li><span class="filter active" data-filter=".app, .card, .icon, .logo">All</span></li>
                <li><span class="filter" data-filter=".app">iPhone/iPad</span></li>
                <li><span class="filter" data-filter=".card">Android</span></li>
                <li><span class="filter" data-filter=".icon">Website/Webapp</span></li>
                <li><span class="filter" data-filter=".logo">UI/UX Design</span></li>
            </ul>

            <div id="portfoliolist">
                @foreach($iphonedata as $portfolio)
                <div class="portfolio {{$portfolio->app_name}}" data-cat="app">
                    <div class="portfolio-wrapper">
                        <img src="{{url(Storage::url($portfolio->thumbnail))}}" alt="Portfolio" data-bs-toggle="modal" data-bs-target="#portfolioImageOne{{$portfolio->id}}" class=""/>
                        <div class="label bg-white">
                            <div class="label-text">
                                <a class="font-weight-500 font-static-18 font-static-black text-decoration-none">{{$portfolio->projectname}}</a>
                                <ul class="change">
                                    @if ($portfolio->ioslink)
                                    <li>
                                        <a href="{{$portfolio->ioslink}}" target="_blank">
                                            <img src="assets/images/portfolio-ios.svg" alt="">
                                        </a>
                                    </li>
                                    @endif
                                    @if($portfolio->androidlink)
                                    <li>
                                        <a href="{{$portfolio->androidlink}}" target="_blank">
                                            <img src="assets/images/portfolio-android.svg" alt="">
                                        </a>
                                    </li>
                                    @endif
                                    @if($portfolio->weblink)
                                    <li>
                                        <a href="{{$portfolio->weblink}}" target="_blank">
                                            <img src="assets/images/portfolio-website.svg" alt="">
                                        </a>
                                    </li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>


            <div class="mb-3 mt-4 text-center">
                <a href="{{route('portfoliopage')}}" type="submit" class="btn btn-primary bg-blue font-static-18 font-weight-500 font-static-white" id="load-more">View More</a>
            </div>

        </div>
</section>
<section class="client-testimonials">
    <div class="container">
        <div class="who-we-title">
            <h2 class="font-static-36 font-static-white font-weight-600 text-center">Testimonials</h2>
            <p class="font-static-18 font-static-white font-weight-normal text-center subtitle">Have a look at what our clients have to say about working with us.</p>
        </div>
        <div class="multiple-items">
            @foreach($clienttestimonial as $val)
            <div class="client-video">

                <div class="clients-feedback">
                    <p class="font-static-18 font-static-black font-weight-normal pt-3">
                        {!! ($val->description) !!}
                    </p>
                </div>
                <div class="client-details">
                    <div class="client-flag">
                        @if($val->profilepic)
                        <div class="client-img">
                            <img src="{{url(Storage::url($val->profilepic))}}" alt="Clients" class="profilepic ">
                        </div>
                        @else
                        <div class="client-img d-none">
                            <img src="{{url(Storage::url($val->profilepic))}}" alt="Clients" class="profilepic ">
                        </div>
                        @endif
                        <div class="clients-name">
                            <h5 class="font-static-22 font-static-blue font-weight-600">{{$val->name}}</h5>
                            <p class="font-static-16 font-static-black font-weight-normal m-0 p-0">
                                {{$val->position}}
                            </p>
                        </div>
                    </div>

                    @if($val->country_data ==null)
                    <div></div>
                    @else
                    <div class="country">
                        <svg width="44" height="31" viewBox="0 0 44 31" fill="none" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink">
                            <rect width="44" height="31" fill="url(#pattern{{$val->id}})" />
                            <defs>
                                <pattern id="pattern{{$val->id}}" patternContentUnits="objectBoundingBox" width="1" height="1">
                                    <use xlink:href="#image0_36:{{$val->id}}" transform="translate(0 -0.00645161) scale(0.00454545 0.00645161)" />
                                </pattern>
                                <image id="image0_36:{{$val->id}}" width="220" height="157" src="" xlink:href="{{ URL('assets/img/country/'.strtolower($val->country_data->code).'.png') }}" class="" alt="Flag" />
                            </defs>
                        </svg>

                    </div>
                    @endif
                </div>
            </div>
            @endforeach
        </div>
        <div class="mb-3 text-center">
            <a href="{{route('testimonialpage')}}" type="submit" class="btn btn-primary bg-blue font-static-18 font-weight-500 font-static-white">View More</a>
        </div>
    </div>
</section>

<section class="awesome-clients">
    <div class="container">

        <div class="who-we-title">
            <h2 class="font-static-36 font-static-black font-weight-600 text-center"><span class="font-static-36 font-static-blue font-weight-600 ">Our Awesome </span> Clients</h2>
            <p class="font-static-18 font-static-gray font-weight-normal text-center  subtitle">Who can't thank you
                enough to all our clients who show faith in us to
                develop their applications and websites. </p>
        </div>

        <div class="brand-container" id="post_data">
            @php
            $reminder=count($client)%4;
            $div=count($client)-$reminder;
            @endphp
            @for($i=1;$i<=$div;$i+=4) <div class="clients-portfolio wow animate__fadeInUp animated" data-wow-duration=".8s" data-wow-delay=".2s">
                <div class="clients-company">
                    <img src="{{url(Storage::url($client[$i-1]->thumbnail))}}" alt="Project{{$val->id}}">

                </div>
        </div>


        <div class="clients-portfolio wow animate__fadeInUp animated" data-wow-duration=".8s" data-wow-delay=".2s">
            <div class="clients-company">
                <img src="{{url(Storage::url($client[$i]->thumbnail))}}" alt="Project{{$val->id}}" class="">

            </div>
        </div>

        <div class="clients-portfolio wow animate__fadeInUp animated" data-wow-duration=".8s" data-wow-delay=".2s">
            <div class="clients-company">
                <img src="{{url(Storage::url($client[$i+1]->thumbnail))}}" alt="Project{{$val->id}}" class="">

            </div>
        </div>

        <div class="clients-portfolio wow animate__fadeInUp animated" data-wow-duration=".8s" data-wow-delay=".2s">
            <div class="clients-company">
                <img src="{{url(Storage::url($client[$i+2]->thumbnail))}}" alt="Project{{$val->id}}">

            </div>
        </div>
        @endfor
        @for($i=1;$i<=$reminder;$i++) @if($i%2==0) <div class="clients-portfolio wow fadeInUp animated" data-wow-duration=".8s" data-wow-delay=".2s">
            <div class="clients-company">
                <img src="{{url(Storage::url($client[$div-1+$i]->thumbnail))}}" alt="Project{{$val->id}}" class="">

            </div>
    </div>


    @else

    <div class="clients-portfolio wow animate__fadeInUp animated" data-wow-duration=".8s" data-wow-delay=".2s">
        <div class="clients-company">
            <img src="{{url(Storage::url($client[$div-1+$i]->thumbnail))}}" alt="Project{{$val->id}}" class="">

        </div>
    </div>
    @endif
    @endfor

    </div>

    <div class="mb-3 text-center">
        <a href="{{route('clientmore')}}" type="submit" class="btn btn-primary bg-blue font-static-18 font-weight-500 font-static-white">View More</a>
    </div>


    </div>
</section>

<div id="Company" class="modal fade" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered p-0">
        <div class="modal-content p-0">
            <iframe id="CompanyOne" width="800" height="550" src="https://www.youtube.com/embed/w6r8yk1Ds6k" frameborder="0" allowfullscreen>
            </iframe>
            <!-- <lite-youtube videoid="w6r8yk1Ds6k"></lite-youtube> -->

        </div>
    </div>
</div>
<div id="Popupone" class="modal fade popup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered p-0 ">
        <div class="modal-content p-0">
            <iframe id="PopupOne" width="800" height="550" frameborder="0" allowfullscreen class="videopause">
            </iframe>
        </div>
    </div>
</div>


<div id="Environmentone" class="modal fade popup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered p-0">
        <div class="modal-content p-0">
            <iframe id="EnvironmentOne" width="800" height="550" frameborder="0" allowfullscreen>
            </iframe>
        </div>
    </div>
</div>



@foreach($iphonedata as $val)
<div class="modal fade Portfolio-image" id="portfolioImageOne{{$val->id}}" tabindex="-1" aria-labelledby="portfolioImageOneLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-dialog-centered p-0 ">
        <div class="position-relative w-100 modal-portfolio">
            <div class="modal-content p-0">
                <a href="#" class="modal-close" data-bs-dismiss="modal"><img src="assets/images/modal-close.svg" alt="Close"></a>
                <img src="{{url(Storage::url($val->thumbnail))}}" alt="Portfolio" class=""/>
                <div class="modal-app-download" data-backdrop="static" data-keyboard="false">
                    <div class="modal-playstore">
                        @if($val->androidlink)
                        <a href="{{$val->androidlink}}" target="_blank"><img src="assets/images/portfolio-android.svg" alt=""></a>
                        @else
                        <a href="{{$val->androidlink}}" target="_blank"><img src="assets/images/portfolio-android.svg" alt="" class="d-none"></a>
                        @endif
                        @if($val->ioslink)
                        <a href="{{$val->ioslink}}" target="_blank"><img src="assets/images/portfolio-ios.svg" alt=""></a>
                        @else
                        <a href="{{$val->ioslink}}" target="_blank"><img src="assets/images/portfolio-ios.svg" alt="" class="d-none"></a>
                        @endif
                        @if($val->weblink)
                        <a href="{{$val->weblink}}" target="_blank"><img src="assets/images/portfolio-website.svg" alt=""></a>
                        @else
                        <a href="{{$val->weblink}}" target="_blank"><img src="assets/images/portfolio-website.svg" alt="" class="d-none"></a>
                        @endif
                    </div>
                    <div class="modal-company-logo text-end">
                        <img src="assets/images/footer-logo.svg" alt="iRoid solutions - software company " class="">
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endforeach

@endsection

@section('scripts')
<script>
    new WOW().init();
</script>
<script>
$(function() {


var filterList = {


    init: function() {

       
        $('#portfoliolist').mixItUp({
            selectors: {
                target: '.portfolio',
                filter: '.filter'
            },
            load: {
                filter: '.app, .card, .icon, .logo'
            }
        });

    }

};

filterList.init();

});

 
    $(document).ready(function() {
        $(".clients-feedback p ").addClass("font-static-18 font-static-black font-weight-normal pt-3");
        $(".nameerror").hide();
        $(".emailerror").hide();
        $(".messageerror").hide();
        $("#success").hide();
        $(".phoneerror").hide();


    });

    $('.video-testimonial').click(function() {
        var url = $(this).attr('data-pk');
        $('#PopupOne').attr('src', url);
        $('#Popupone').modal('show');
    })
    // function modalOpen(e){
    //     data=$("#"+e).attr('data-pk');
    //     $('#PopupOne').attr('src',data);
    //     $('#Popupone').modal('show');
    // }
    // function modalOpen1(ef){
    //     data1=$("#"+ef).attr('data-pk');
    //     $('#EnvironmentOne').attr('src',data1);
    //     $('#Environmentone').modal('show');
    // }
    $('.office-video').click(function() {
        var url = $(this).attr('data-pk');
        $('#EnvironmentOne').attr('src', url);
        $('#Environmentone').modal('show');
    })
    $(function() {

        $('.popup').on('hidden.bs.modal', function() {



            $iframe = $(this).find("iframe");
            $iframe.attr("src", $iframe.attr("src"));
        });
    });


    $.ajax({
        url: route('homepage'),
        type: 'get',
        datatype: 'html',
        data: {
            _token: '{{ csrf_token() }}'
        },

        success: function(data) {
            for (i = 0; i < data.length; i++) {
                html = '';
                html += ``
            }
        }
    });
</script>



<script>
    $('.multiple-items').slick({
        infinite: true,
        slidesToShow: 2,
        dots: true,
        arrows: false,
        slidesToScroll: 2,
        responsive: [{
                breakpoint: 1201,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 2,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 1199,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });

    new WOW().init();
</script>

@endsection
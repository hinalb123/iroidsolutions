@extends('layout.content')

@section('topslider')


<section class="client-slider parallax-slide" id="parallax1">
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
                            <a class="font-static-16 font-weight-400  font-static-white d-block" target="_blank" href="//api.whatsapp.com/send?phone=91 77788 69939">+ 91 77788 69939
                                (Business)</a> <a class="font-static-16 font-weight-400  font-static-white d-block" target="_blank" href="//api.whatsapp.com/send?phone=91 90238 68898">+ 91
                                90238 68898 (HR)</a>
                        </div>
                    </li>

                        <li class="font-static-16 font-weight-500 font-static-white d-flex align-items-center call">
                            <img src="assets/images/gmail.svg" alt="Call">
                            <a href="javascript:void(0)" class="font-static-16 font-weight-400  font-static-white ps-2">
                                 <span onclick="window.open('mailto:business@iroidsolutions.in');">business@iroidsolutions.in (Business)</span><br><span onclick="window.open('mailto:hr@iroidsolutions.in');"> hr@iroidsolutions.in (HR)</span> 
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
                <a class="navbar-brand" href="{{route('homepage')}}">
                    <img src="assets/images/header-logo.svg" alt="Best IT company in surat - iRoid ">
                </a>

                <button class="navbar-toggler" type="button" id="NavbarToggler">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 me-lg-3">
                        <li class="nav-item">
                            <a class="nav-link font-static-18 font-static-gray {{ isset($page) && in_array($page, ['home']) ? 'naactive' : '' }}" aria-current="page" href="{{route('homepage')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link font-static-18 font-static-gray  {{ isset($page) && in_array($page, ['testimonialpage']) ? 'naactive' : '' }}" href="{{route('testimonialpage')}}">Testimonials</a>
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

    <div class="slider-container">
        <h1 class="font-static-48 font-weight-600 font-static-white wow fadeInUp animated" data-wow-duration="1s" data-wow-delay=".2s">Our Clients</h1>
        <p class="font-static-20 font-weight-400 font-static-white wow fadeInUp animated" data-wow-duration="1s" data-wow-delay=".2s">We have Happy clients and that thing satisfied Us</p>

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
                @for($i=1;$i<=$div;$i+=4) <div class="clients-portfolio wow fadeInUp animated" data-wow-duration=".8s" data-wow-delay=".2s">
                    <div class="clients-company">
                        <img src="{{url(Storage::url($client[$i-1]->thumbnail))}}" alt="Project">
                        <!-- <img src="assets/images/nature-application.svg" alt=""> -->
                    </div>
            </div>


            <div class="clients-portfolio wow fadeInUp animated" data-wow-duration=".8s" data-wow-delay=".2s">
                <div class="clients-company">
                    <img src="{{url(Storage::url($client[$i]->thumbnail))}}" alt="Project">
                    <!-- <img src="assets/images/nature-application.svg" alt=""> -->
                </div>
            </div>

            <div class="clients-portfolio wow fadeInUp animated" data-wow-duration=".8s" data-wow-delay=".2s">
                <div class="clients-company">
                    <img src="{{url(Storage::url($client[$i+1]->thumbnail))}}" alt="Project">
                    <!-- <img src="assets/images/nature-application.svg" alt=""> -->
                </div>
            </div>

            <div class="clients-portfolio wow fadeInUp animated" data-wow-duration=".8s" data-wow-delay=".2s">
                <div class="clients-company">
                    <img src="{{url(Storage::url($client[$i+2]->thumbnail))}}" alt="Project">
                    <!-- <img src="assets/images/nature-application.svg" alt=""> -->
                </div>
            </div>
            @endfor
            @for($i=1;$i<=$reminder;$i++) @if($i%2==0) <div class="clients-portfolio wow fadeInUp animated" data-wow-duration=".8s" data-wow-delay=".2s">
                <div class="clients-company">
                    <img src="{{url(Storage::url($client[$div-1+$i]->thumbnail))}}" alt="Project">
                    <!-- <img src="assets/images/nature-application.svg" alt=""> -->
                </div>
        </div>


        @else

        <div class="clients-portfolio wow fadeInUp animated" data-wow-duration=".8s" data-wow-delay=".2s">
            <div class="clients-company">
                <img src="{{url(Storage::url($client[$div-1+$i]->thumbnail))}}" alt="Project">
                <!-- <img src="assets/images/nature-application.svg" alt=""> -->
            </div>
        </div>
        @endif
        @endfor

        </div>

        </div>
    </section>

@endsection
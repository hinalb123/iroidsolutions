@extends('layout.content')
@section('topslider')

<section class="hireus-slider parallax-slide" id="parallax1">
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
    <!---------------------------------------------------------- header section end ---------------------------------------------------------->

    <!---------------------------------------------------------- Top Slider section start ---------------------------------------------------------->

    <div class="slider-container">
        <h1 class="font-static-48 font-weight-600 font-static-white wow fadeInUp animated" data-wow-duration="1s" data-wow-delay=".2s">Hire Us</h1>
        <p class="font-static-20 font-weight-400 font-static-white wow fadeInUp animated" data-wow-duration="1s" data-wow-delay=".2s">Hire our IT professionals for your Project</p>

    </div>
</section>
@endsection

@section('content')
<section class="amazing-facts pt-lg-0">
    <div class="container">
        <div class="who-we-title">
            <h2 class="font-static-36 font-static-black font-weight-600 text-center"><span class="font-static-36 font-static-blue font-weight-600"> Our Amazing</span> Facts</h2>
        </div>
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                <div class="amazing-img">
                    <img src="assets/images/amazing-object.svg" alt="Amazing" class="lazy">
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
                                <p class="font-static-black count font-static-36 font-weight-bold year-count" data-count="30">0
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
                        <p class="font-static-black count font-static-36 font-weight-bold year-count" data-count="400">0
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
<!---------------------------------------------------------- Amazing Facts section end ---------------------------------------------------------->


<!---------------------------------------------------------- hire us content section start ---------------------------------------------------------->
<section class="hire-us bg-light-white">
    <div class="container">
        <div class="who-we-title text-center">
            <h2 class="font-static-36 font-static-black font-weight-600 text-center">Why you should <span class="font-static-36 font-static-blue font-weight-600 text-center">hire us?</span></h2>
        </div>
        <div class="hire-details">
            <ul class="list-unstyled">
                <li class="font-static-18 font-static-black font-weight-normal">We have an expert team of mobile and web developers.</li>
                <li class="font-static-18 font-static-black font-weight-normal">We have a strong retention ratio of our clients. Our clients love us.</li>
                <li class="font-static-18 font-static-black font-weight-normal">We do quality work</li>
                <li class="font-static-18 font-static-black font-weight-normal">We are reasonably priced.</li>
                <li class="font-static-18 font-static-black font-weight-normal">We feel your pain and treat you as a partner not as a customer.</li>
                <li class="font-static-18 font-static-black font-weight-normal">100% Confidential Consultation! We sign NDA.</li>
                <li class="font-static-18 font-static-black font-weight-normal">We provide end-to-end solutions including design, development, testing and deployment.</li>
                <li class="font-static-18 font-static-black font-weight-normal">We Provide full support after your app is launched.</li>
                <li class="font-static-18 font-static-black font-weight-normal">We are here to stay.</li>
            </ul>
        </div>
    </div>
</section>
<!---------------------------------------------------------- hire us content section start ---------------------------------------------------------->


<!----------------------------------------------------------plan section Start ---------------------------------------------------------->
<section class="price-plan">
    <div class="container">
        <div class="who-we-title text-center">
            <h2 class="font-static-36 font-static-black font-weight-600 text-center">Choose the plan that's <span class="font-static-36 font-static-blue font-weight-600 text-center">right for you</span></h2>
            <p class="subtitle font-static-18 font-static-gray font-weight-normal text-center">Priced just right for companies of every size.</p>
        </div>
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                <div class="price-wrapper wow animate__fadeInUp animated" data-wow-duration="1s" data-wow-delay=".2s">
                    <div class="price-hourly">
                        <div class="hour-month-plan bg-blue">
                            <div class="plan-inner">
                                <p class="font-static-24 font-static-white font-weight-normal">Hourly</p>
                                <h2 class="font-static-48 font-static-white font-weight-normal">$$$ <sup class="font-static-18 font-static-white font-weight-normal">Per Hour*</sup></h2>
                            </div>
                        </div>
                        <div class="plan-details mt-4">
                            <ul class="list-unstyled">
                                <li class="font-static-18 font-weight-400 font-static-black">As Needed</li>
                                <li class="font-static-18 font-weight-400 font-static-black">Weekly Billing</li>
                                <li class="font-static-18 font-weight-400 font-static-black">Daily Reporting</li>
                            </ul>
                        </div>
                        <a href="{{route('contactuspage')}}" target="_blank" class="btn btn-primary font-static-18 font-static-white font-weight-500 bg-blue">Contact Us</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-4 mt-4 mt-md-4 mt-lg-0">
                <div class="price-wrapper wow animate__fadeInUp animated" data-wow-duration="1s" data-wow-delay=".2s">
                    <div class="price-hourly">
                        <div class="hour-month-plan bg-blue">
                            <div class="plan-inner">
                                <p class="font-static-24 font-static-white font-weight-normal">Monthly</p>
                                <h2 class="font-static-48 font-static-white font-weight-normal">$$$ <sup class="font-static-18 font-static-white font-weight-normal">Per Month*</sup></h2>
                            </div>
                        </div>
                        <div class="plan-details mt-4">
                            <ul class="list-unstyled">
                                <li class="font-static-18 font-weight-400 font-static-black">160 Hours</li>
                                <li class="font-static-18 font-weight-400 font-static-black">Monthly Billing</li>
                                <li class="font-static-18 font-weight-400 font-static-black">Daily Reporting</li>
                                <li class="font-static-18 font-weight-400 font-static-black">Money Back Guarantee**</li>
                            </ul>
                        </div>
                        <a href="{{route('contactuspage')}}" target="_blank" class="btn btn-primary font-static-18 font-static-white font-weight-500 bg-blue">Contact Us</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-4 mt-4 mt-md-4 mt-lg-0">
                <div class="price-wrapper wow animate__fadeInUp animated" data-wow-duration="1s" data-wow-delay=".2s">
                    <div class="price-hourly">
                        <div class="hour-month-plan bg-blue">
                            <div class="plan-inner">
                                <p class="font-static-24 font-static-white font-weight-normal">Fixed Quote</p>
                                <h2 class="font-static-48 font-static-white font-weight-normal">$$$ <sup class="font-static-18 font-static-white font-weight-normal">Per Milestone*</sup></h2>
                            </div>
                        </div>
                        <div class="plan-details mt-4">
                            <ul class="list-unstyled">
                                <li class="font-static-18 font-weight-400 font-static-black">Hours as needed</li>
                                <li class="font-static-18 font-weight-400 font-static-black">Milestone Billing</li>
                                <li class="font-static-18 font-weight-400 font-static-black">Daily Reporting</li>
                            </ul>
                        </div>
                        <a href="{{route('contactuspage')}}" target="_blank" class="btn btn-primary font-static-18 font-static-white font-weight-500 bg-blue">Contact Us</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                <div class="rate-money rate-may wow animate__fadeInUp animated" data-wow-duration="1s" data-wow-delay=".2s">
                    <h3 class="font-static-24 font-static-black font-weight-normal pt-2 pb-2">Rates may very</h3>
                    <p class="font-static-18 font-static-black font-weight-normal">* Rates would vary according to the Work Complexity
                        & Developer's Experience</p>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                <div class="rate-money money-back wow animate__fadeInUp animated" data-wow-duration="1s" data-wow-delay=".2s">
                    <h3 class="font-static-24 font-static-black font-weight-normal pt-2 pb-2">100% Money back guarantee</h3>
                    <p class="font-static-18 font-static-black font-weight-normal">** You have the freedom to withdraw the project in the
                        first 7 days. We shall refund the unutilized balance of
                        the advance.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('scripts')

<script>
    new WOW().init();
</script>
@endsection
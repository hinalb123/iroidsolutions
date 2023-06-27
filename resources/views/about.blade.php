@extends('layout.content')

<!---------------------------------------------------------- header section end ---------------------------------------------------------->



<!---------------------------------------------------------- Top Slider section start ---------------------------------------------------------->
@section('topslider')
<section class="aboutus-slider parallax-slide" id="parallax1">
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
                            <a class="nav-link font-static-18 font-static-gray {{ isset($page) && in_array($page, ['testimonialpage']) ? 'naactive' : '' }}" href="{{route('testimonialpage')}}"> Testimonials</a>
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
        <h1 class="font-static-48 font-weight-600 font-static-white wow fadeInUp animated" data-wow-duration="1s" data-wow-delay=".2s">About Us</h1>
        <p class="font-static-20 font-weight-400 font-static-white wow fadeInUp animated" data-wow-duration="1s" data-wow-delay=".2s">We are a team with a bright vision</p>

    </div>
</section>
@endsection

@section('content')
<section class="aboutus-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                <div class="about-img wow fadeInUp animated" data-wow-duration=".8s" data-wow-delay=".2s">
                    <img src="assets/images/about-section.webp" alt="About Us">
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                <div class="about-details">
                    <small class="font-static-18 font-weight-500 font-static-blue wow animate__fadeInUp animated" data-wow-duration=".8s" data-wow-delay=".2s">About our agency</small>
                    <h2 class="font-static-30 font-weight-600 font-static-black wow fadeInUp animated" data-wow-duration=".8s" data-wow-delay=".2s">We are here to IT solution with 9+ years
                        of experience</h2>
                    <p class="font-static-18 font-weight-normal font-static-black wow animate__fadeInUp animated" data-wow-duration=".8s" data-wow-delay=".2s">Established in the year 2014, iRoid was formed by three dynamic
                        entrepreneurs with a vision. In the subsequent years, this company
                        has grown from strength to strength, each time proving to be a
                        leading IT solutions provider with the capacity to offer top-notch
                        services in all possible spheres of IT development.</p>
                    <div class="our-skills">
                        <h3 class="font-static-24 font-weight-500 font-static-black pb-3">Our Skills</h3>
                        <div class="company-skills">
                            <div class="platform-development">
                                <div class="android-count count bg-light-blue font-static-white">
                                    <p class="font-static-white">01</p>
                                </div>
                                <div class="android-skills">
                                    <div class="progrs-land">
                                        <p class="font-static-18 font-static-gray font-weight-normal">Android
                                            Development</p>
                                        <div class="d-flex align-items-center">
                                            <p class="font-static-18 font-static-gray font-weight-normal prg-count" data-count="98">0</p>
                                            <p class="font-static-18 font-static-gray font-weight-normal">%</p>
                                        </div>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-android w-98 bg-light-blue wow fadeInUp animated" data-wow-duration="4s" data-wow-delay=".4s" role="progressbar" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="platform-development">
                                <div class="ios-count count bg-light-red font-static-white">
                                    <p class="font-static-white">02</p>
                                </div>
                                <div class="android-skills">
                                    <div class="progrs-land">
                                        <p class="font-static-18 font-static-gray font-weight-normal">iOS Development
                                        </p>
                                        <div class="d-flex align-items-center">
                                            <p class="font-static-18 font-static-gray font-weight-normal prg-count" data-count="98">0</p>
                                            <p class="font-static-18 font-static-gray font-weight-normal">%</p>
                                        </div>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-ios w-98 bg-light-red wow fadeInLeft animated" data-wow-duration="4s" data-wow-delay=".4s" role="progressbar" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="platform-development">
                                <div class="website-count count bg-light-green font-static-white">
                                    <p class="font-static-white">03</p>
                                </div>
                                <div class="android-skills">
                                    <div class="progrs-land">
                                        <p class="font-static-18 font-static-gray font-weight-normal">Website & Webapp
                                            Development</p>
                                        <div class="d-flex align-items-center">
                                            <p class="font-static-18 font-static-gray font-weight-normal prg-count" data-count="97">0</p>
                                            <p class="font-static-18 font-static-gray font-weight-normal">%</p>
                                        </div>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-website w-97 bg-light-green wow fadeInDown animated" data-wow-duration="4s" data-wow-delay=".4s" role="progressbar" aria-valuenow="97" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="platform-development">
                                <div class="website-count count bg-blue font-static-white">
                                    <p class="font-static-white">04</p>
                                </div>
                                <div class="android-skills">
                                    <div class="progrs-land">
                                        <p class="font-static-18 font-static-gray font-weight-normal">Cross Platform Development</p>
                                        <div class="d-flex align-items-center">
                                            <p class="font-static-18 font-static-gray font-weight-normal prg-count" data-count="95">0</p>
                                            <p class="font-static-18 font-static-gray font-weight-normal">%</p>
                                        </div>
                                    </div>


                                    <div class="progress">
                                        <div class="progress-cross w-95 bg-blue wow fadeInUp animated" data-wow-duration="4s" data-wow-delay=".4s" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="platform-development p-0">
                                <div class="uiux-count count bg-light-perple font-static-white">
                                    <p class="font-static-white">05</p>
                                </div>
                                <div class="android-skills">
                                    <div class="progrs-land">
                                        <p class="font-static-18 font-static-gray font-weight-normal">UI/UX</p>
                                        <div class="d-flex align-items-center">
                                            <p class="font-static-18 font-static-gray font-weight-normal prg-count" data-count="95">0</p>
                                            <p class="font-static-18 font-static-gray font-weight-normal">%</p>
                                        </div>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-uiux w-95 bg-light-perple wow fadeInDown animated" data-wow-duration="4s" data-wow-delay=".4s" role="progressbar" aria-valuenow="93" aria-valuemin="0" aria-valuemax="100"></div>
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
<!---------------------------------------------------------- about us section end ---------------------------------------------------------->

<!---------------------------------------------------------- Believe section start ---------------------------------------------------------->
<section class="believe-section">
    <div class="believe-content">
        <h2 class="font-static-36 font-weight-600 font-static-blue wow fadeInUp animated" data-wow-duration=".8s" data-wow-delay=".2s">What we <span class="font-static-36 font-weight-600 font-static-white">Believe In</span></h2>
        <p class="font-static-18 font-weight-normal font-static-white wow fadeInUp animated" data-wow-duration=".8s" data-wow-delay=".2s">We are a proactive group of entrepreneurs, and believe in moving with the times. Information technology
            is a field which is in a state of constant flux, so in order to survive, one needs to upgrade technology on an
            ongoing basis. This is the basic function of iRoid. We deliver to you products and services which keep you on top of things at all times.</p>
    </div>
</section>
<!---------------------------------------------------------- Believe section end ---------------------------------------------------------->

<!---------------------------------------------------------- process section end ---------------------------------------------------------->
<section class="process-section">
    <h2 class="font-static-36 font-static-blue font-weight-600 text-center">Our<span class="font-static-36 font-static-black font-weight-600"> Process</span></h2>
    <div class="container mt-4 d-none d-md-none d-lg-block">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                <div class="about-intensy-details wow animate__fadeInUp animated box-hover center idea" data-wow-duration=".8s" data-wow-delay=".2s">
                    <span><img src="assets/images/step-one.svg" alt="step one"></span>
                    <div class="process-img">
                        <img src="assets/images/idea.svg" alt="Idea">
                    </div>
                    <h3 class="font-static-24 font-weight-500 font-static-black">Requirement Gathering</h3>
                    <p class="font-static-18 font-weight-normal font-static-black">We will analyze your vision and find out everything about your goals, product, industry, audience, and competitors. In this process, we will also finalize the scope of the project. </p>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-4 mt-4 mt-md-0 mt-lg-0">
                <div class="about-intensy-details wow fadeInUp animated box-hover center sketch" data-wow-duration=".8s" data-wow-delay=".2s">
                    <span><img src="assets/images/step-one.svg" alt="step one"></span>
                    <div class="process-img">
                        <img src="assets/images/sketch.svg" alt="Sketch">
                    </div>
                    <h3 class="font-static-24 font-weight-500 font-static-black">UI/UX designs</h3>
                    <p class="font-static-18 font-weight-normal font-static-black">After finalizing the scope, we will create catchy, beautiful, and user-friendly mockups & designs for all the screens and will share them with you for review. Depending on your feedback, if required, we will do the required changes.</p>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-4 mt-4 mt-md-4 mt-lg-0">
                <div class="about-intensy-details wow animate__fadeInUp animated box-hover center design" data-wow-duration=".8s" data-wow-delay=".2s">
                    <span><img src="assets/images/step-two.svg" alt="step two"></span>
                    <div class="process-img">
                        <img src="assets/images/design.svg" alt="Design">
                    </div>
                    <h3 class="font-static-24 font-weight-500 font-static-black">Development</h3>
                    <p class="font-static-18 font-weight-normal font-static-black">Once we complete the designs, we will start working on the app/website development using the latest tools and technologies. We will divide the project features into multiple milestones/phases and share builds/demos at regular intervals.</p>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-4 mt-4">
                <div class="about-intensy-details wow fadeInUp animated box-hover center launch" data-wow-duration=".8s" data-wow-delay=".2s">
                    <span><img src="assets/images/step-three.svg" alt="step three"></span>
                    <div class="process-img">
                        <img src="assets/images/launch.svg" alt="Launch">
                    </div>
                    <h3 class="font-static-24 font-weight-500 font-static-black">Support & Maintenance</h3>
                    <p class="font-static-18 font-weight-normal font-static-black">We believe in long-term relationships with our clients and we stay with them even after the app/website launch. We provide 2 months of free support for all the apps and websites developed by us.
                    </p>
                </div>
            </div>

            <div class="col-12 col-sm-12 col-md-6 col-lg-4 mt-4">
                <div class="about-intensy-details wow animate__fadeInUp animated box-hover center test" data-wow-duration=".8s" data-wow-delay=".2s">
                    <span><img src="assets/images/step-three.svg" alt="step three"></span>
                    <div class="process-img">
                        <img src="assets/images/test.svg" alt="Test">
                    </div>
                    <h3 class="font-static-24 font-weight-500 font-static-black">Launch</h3>
                    <p class="font-static-18 font-weight-normal font-static-black">After testing all the features and completing them, we launch iOS applications on the AppStore, Android applications on the PlayStore, and websites on the production server.
                    </p>
                </div>
            </div>

            <div class="col-12 col-sm-12 col-md-6 col-lg-4 mt-4">
                <div class="about-intensy-details wow fadeInUp animated box-hover center develop" data-wow-duration=".8s" data-wow-delay=".2s">
                    <div class="process-img">
                        <img src="assets/images/develop.svg" alt="Develop">
                    </div>
                    <h3 class="font-static-24 font-weight-500 font-static-black">Quality Assurance</h3>
                    <p class="font-static-18 font-weight-normal font-static-black">
                        We thoroughly test all the features of the apps/websites developed by us to make sure they are bug-free before we launch for the live users.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-4 d-none d-md-block d-lg-none">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                <div class="about-intensy-details wow animate__fadeInUp animated box-hover center idea" data-wow-duration=".8s" data-wow-delay=".2s">
                    <span><img src="assets/images/step-one.svg" alt="step one"></span>
                    <div class="process-img">
                        <img src="assets/images/idea.svg" alt="Idea">
                    </div>
                    <h3 class="font-static-24 font-weight-500 font-static-black"> Requirement Gathering</h3>
                    <p class="font-static-18 font-weight-normal font-static-black">We will analyze your vision and find out everything about your goals, product, industry, audience, and competitors. In this process, we will also finalize the scope of the project.
                    </p>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-4 mt-4 mt-md-0 mt-lg-0">
                <div class="about-intensy-details wow fadeInUp animated box-hover center sketch" data-wow-duration=".8s" data-wow-delay=".2s">
                    <span><img src="assets/images/step-two.svg" alt="step two"></span>
                    <div class="process-img">
                        <img src="assets/images/sketch.svg" alt="Sketch">
                    </div>
                    <h3 class="font-static-24 font-weight-500 font-static-black"> UI/UX designs</h3>
                    <p class="font-static-18 font-weight-normal font-static-black">After finalizing the scope, we will create catchy, beautiful, and user-friendly mockups & designs for all the screens and will share them with you for review. Depending on your feedback, if required, we will do the required changes.</p>
                </div>
            </div>

            <div class="col-12 col-sm-12 col-md-6 col-lg-4 mt-4">
                <div class="about-intensy-details wow animate__fadeInUp animated box-hover center develop" data-wow-duration=".8s" data-wow-delay=".2s">
                    <span><img src="assets/images/step-two.svg" alt="step two"></span>
                    <div class="process-img">
                        <img src="assets/images/develop.svg" alt="Develop">
                    </div>
                    <h3 class="font-static-24 font-weight-500 font-static-black">Quality Assurance</h3>
                    <p class="font-static-18 font-weight-normal font-static-black">Once we complete the designs, we will start working on the app/website development using the latest tools and technologies. We will divide the project features into multiple milestones/phases and share builds/demos at regular intervals. </p>
                </div>
            </div>

            <div class="col-12 col-sm-12 col-md-6 col-lg-4 mt-4 mt-md-4 mt-lg-0">
                <div class="about-intensy-details wow fadeInUp animated box-hover center design" data-wow-duration=".8s" data-wow-delay=".2s">
                    <span><img src="assets/images/step-two.svg" alt="step two"></span>
                    <div class="process-img">
                        <img src="assets/images/design.svg" alt="Design">
                    </div>
                    <h3 class="font-static-24 font-weight-500 font-static-black">Development</h3>
                    <p class="font-static-18 font-weight-normal font-static-black">We thoroughly test all the features of the apps/websites developed by us so as to make sure they are bug-free before we launch for the live users.</p>
                </div>
            </div>


            <div class="col-12 col-sm-12 col-md-6 col-lg-4 mt-4">
                <div class="about-intensy-details wow animate__fadeInUp animated box-hover center test" data-wow-duration=".8s" data-wow-delay=".2s">
                    <span><img src="assets/images/step-three.svg" alt="step three"></span>
                    <div class="process-img">
                        <img src="assets/images/test.svg" alt="Test">
                    </div>
                    <h3 class="font-static-24 font-weight-500 font-static-black">Launch</h3>
                    <p class="font-static-18 font-weight-normal font-static-black">After testing all the features and completing them, we launch iOS applications on the AppStore, Android applications on the PlayStore, and websites on the production server.
                    </p>
                </div>
            </div>

            <div class="col-12 col-sm-12 col-md-6 col-lg-4 mt-4">
                <div class="about-intensy-details wow fadeInUp animated box-hover center launch" data-wow-duration=".8s" data-wow-delay=".2s">
                    <span><img src="assets/images/step-three.svg" alt="step three"></span>
                    <div class="process-img">
                        <img src="assets/images/launch.svg" alt="Launch">
                    </div>
                    <h3 class="font-static-24 font-weight-500 font-static-black">Support & Maintenance</h3>
                    <p class="font-static-18 font-weight-normal font-static-black">We believe in long-term relationships with our clients and we stay with them even after the app/website launch. We provide 2 months of free support for all the apps and websites developed by us.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-4 d-block d-md-none d-lg-none">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                <div class="about-intensy-details wow animate__fadeInUp animated box-hover center idea" data-wow-duration=".8s" data-wow-delay=".2s">
                    <span><img src="assets/images/step-two.svg" alt="step two"></span>
                    <div class="process-img">
                        <img src="assets/images/idea.svg" alt="Idea">
                    </div>
                    <h3 class="font-static-24 font-weight-500 font-static-black">Requirement Gathering</h3>
                    <p class="font-static-18 font-weight-normal font-static-black">We will analyze your vision and find out everything about your goals, product, industry, audience, and competitors. In this process, we will also finalize the scope of the project.
                    </p>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-4 mt-4 mt-md-0 mt-lg-0">
                <div class="about-intensy-details wow fadeInUp animated box-hover center sketch" data-wow-duration=".8s" data-wow-delay=".2s">
                    <span><img src="assets/images/step-two.svg" alt="step two"></span>
                    <div class="process-img">
                        <img src="assets/images/sketch.svg" alt="Sketch">
                    </div>
                    <h3 class="font-static-24 font-weight-500 font-static-black">UI/UX designs</h3>
                    <p class="font-static-18 font-weight-normal font-static-black">After finalizing the scope, we will create catchy, beautiful, and user-friendly mockups & designs for all the screens and will share them with you for review. Depending on your feedback, if required, we will do the required changes.
                    </p>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-4 mt-4 mt-md-4 mt-lg-0">
                <div class="about-intensy-details wow animate__fadeInUp animated box-hover center design" data-wow-duration=".8s" data-wow-delay=".2s">
                    <span><img src="assets/images/step-two.svg" alt="step two"></span>
                    <div class="process-img">
                        <img src="assets/images/design.svg" alt="Design">
                    </div>
                    <h3 class="font-static-24 font-weight-500 font-static-black">Development</h3>
                    <p class="font-static-18 font-weight-normal font-static-black">Once we complete the designs, we will start working on the app/website development using the latest tools and technologies. We will divide the project features into multiple milestones/phases and share builds/demos at regular intervals.
                    </p>
                </div>
            </div>

            <div class="col-12 col-sm-12 col-md-6 col-lg-4 mt-4">
                <div class="about-intensy-details wow fadeInUp animated box-hover center develop" data-wow-duration=".8s" data-wow-delay=".2s">
                    <span><img src="assets/images/step-two.svg" alt="step two"></span>
                    <div class="process-img">
                        <img src="assets/images/develop.svg" alt="Develop">
                    </div>
                    <h3 class="font-static-24 font-weight-500 font-static-black">Quality Assurance</h3>
                    <p class="font-static-18 font-weight-normal font-static-black">We thoroughly test all the features of the apps/websites developed by us so as to make sure they are bug-free before we launch for the live users.
                    </p>
                </div>
            </div>

            <div class="col-12 col-sm-12 col-md-6 col-lg-4 mt-4">
                <div class="about-intensy-details wow animate__fadeInUp animated box-hover center test" data-wow-duration=".8s" data-wow-delay=".2s">
                    <span><img src="assets/images/step-two.svg" alt="step two"></span>
                    <div class="process-img">
                        <img src="assets/images/test.svg" alt="Test">
                    </div>
                    <h3 class="font-static-24 font-weight-500 font-static-black">Launch</h3>
                    <p class="font-static-18 font-weight-normal font-static-black">After testing all the features and completing them, we launch iOS applications on the AppStore, Android applications on the PlayStore, and websites on the production server.
                    </p>
                </div>
            </div>

            <div class="col-12 col-sm-12 col-md-6 col-lg-4 mt-4">
                <div class="about-intensy-details wow fadeInUp animated box-hover center launch" data-wow-duration=".8s" data-wow-delay=".2s">
                    <div class="process-img">
                        <img src="assets/images/launch.svg" alt="Launch">
                    </div>
                    <h3 class="font-static-24 font-weight-500 font-static-black">Support & Maintenance</h3>
                    <p class="font-static-18 font-weight-normal font-static-black">We believe in long-term relationships with our clients and we stay with them even after the app/website launch. We provide 2 months of free support for all the apps and websites developed by us.
                    </p>
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
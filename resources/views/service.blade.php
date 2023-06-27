@extends('layout.content')

@section('topslider')
<section class="service-slider parallax-slide" id="parallax1">
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
        <h1 class="font-static-48 font-weight-600 font-static-white wow fadeInUp animated" data-wow-duration="1s" data-wow-delay=".2s">Our Services</h1>
        <p class="font-static-20 font-weight-400 font-static-white wow fadeInUp animated" data-wow-duration="1s" data-wow-delay=".2s">Managed IT services for your industry</p>
    </div>
</section>
@endsection

@section('content')
<section class="service-list">
    <div class="service-container wow fadeInUp animated" data-wow-duration="1s" data-wow-delay=".2s">
        <div class="multiple-items">
            <div class="service-wrapper bg-white box-hover center">
                <div class="overlay-android overlay bg-light-blue"></div>
                <div class="service-img">
                    <img src="assets/images/android-service.svg" alt="Android development company in surat">
                </div>
                <h3 class="font-static-18 font-static-black font-weight-500">Android App</h3>
            </div>

            <div class="service-wrapper bg-white box-hover center">
                <div class="overlay-ios overlay bg-light-red"></div>
                <div class="service-img">
                    <img src="assets/images/ios-service.svg" alt="iOS app development">
                </div>
                <h3 class="font-static-18 font-static-black font-weight-500">iPhone & iPad App </h3>
            </div>

            <div class="service-wrapper bg-white box-hover center">
                <div class="overlay-website overlay bg-light-green"></div>
                <div class="service-img">
                    <img src="assets/images/website-service.svg" alt="Web development company">
                </div>
                <h3 class="font-static-18 font-static-black font-weight-500">Website</h3>
            </div>

            <div class="service-wrapper bg-white box-hover center">
                <div class="overlay-uiux overlay bg-light-perple"></div>
                <div class="service-img">
                    <img src="assets/images/uiux-service.svg" alt="Android">
                </div>
                <h3 class="font-static-18 font-static-black font-weight-500">UI/UX</h3>
            </div>

            <div class="service-wrapper bg-white box-hover center">
                <div class="overlay-project overlay bg-blue"></div>
                <div class="service-img">
                    <img src="assets/images/project-service.svg" alt="Android">
                </div>
                <h3 class="font-static-18 font-static-black font-weight-500">Cross Platform</h3>
            </div>
            <div class="service-wrapper bg-white box-hover center">
                <div class="overlay-project overlay bg-blue"></div>
                <div class="service-img">
                    <img src="assets/images/project-management.svg" alt="Android">
                </div>
                <h3 class="font-static-18 font-static-black font-weight-500">Project Management</h3>
            </div>
            <div class="service-wrapper bg-white box-hover center">
                <div class="overlay-project overlay bg-blue"></div>
                <div class="service-img">
                    <img src="assets/images/trending-tech.svg" alt="Android">
                </div>
                <h3 class="font-static-18 font-static-black font-weight-500">Trending Technologies</h3>
            </div>
        </div>
    </div>
</section>
<!---------------------------------------------------------- services section list start ---------------------------------------------------------->


<!---------------------------------------------------------- services section start ---------------------------------------------------------->
<section class="services-section mt-5">
    <div class="container">
        <div class="company-service box-hover center">
            <div class="overlay-android overlay"></div>
            <div class="service-img">
                <img src="assets/images/android-service.svg" alt="Android development company in surat">
            </div>
            <div class="service-content">
                <h3 class="font-static-22 font-static-black font-weight-500"><span class="font-static-22 font-static-blue font-weight-500">Android App</span> Development</h3>
                <p class="font-static-16 font-static-black font-weight-normal">Our Android app developers have years of experience designing and deploying Android apps on the Google Play app store. We have deep experience with the Android Software Development Kit (SDK), utilizing various Media APIs, integrating location-based mapping technologies, and other technologies required to build best-in-class mobile apps.</p>
                <p class="font-static-16 font-static-black font-weight-normal">iRoid is a leading Android app development company, providing complete turnkey solutions to developers and dreamers alike. Whether you're a seasoned software development professional in need of additional resources or an amateur technophile with a great idea for an app, we can shepherd your app from concept to reality.</p>
            </div>
        </div>

        <div class="company-service box-hover center">
            <div class="overlay-ios overlay"></div>
            <div class="service-img">
                <img src="assets/images/ios-service.svg" alt="iOS app development">
            </div>
            <div class="service-content">
                <h3 class="font-static-22 font-static-black font-weight-500"><span class="font-static-22 font-static-blue font-weight-500">iOS App</span> Development</h3>
                <p class="font-static-16 font-static-black font-weight-normal">iRoid has the expertise to design, program, and deploy iPhone and iPad apps that meld function with brilliant design. Each mobile app our team develops goes through a rigorous process to ensure that the project is delivered on time and adheres to Apple's stringent app development guidelines.</p>
                <p class="font-static-16 font-static-black font-weight-normal">The iPhone app development team at our company can assist you in every phase of the iPad or iPhone app development process. From fleshing out an idea to submitting a finalized mobile application into the iTunes app store, we have the experience and wherewithal to make your big dreams come to fruition at a price you can afford.</p>
            </div>
        </div>

        <div class="company-service box-hover center">
            <div class="overlay-website overlay"></div>
            <div class="service-img">
                <img src="assets/images/website-service.svg" alt="Web development company">
            </div>
            <div class="service-content">
                <h3 class="font-static-22 font-static-black font-weight-500"><span class="font-static-22 font-static-blue font-weight-500">Website</span> Development</h3>
                <p class="font-static-16 font-static-black font-weight-normal">With the proliferation of websites throughout the world, the significance of web development cannot be ignored. iRoid takes web development to the next level with custom-built web development solutions, based on PHP, NodeJs, and Python. We also work with frameworks like Laravel, WordPress, Magento, Django.</p>
            </div>
        </div>

        <div class="company-service box-hover center">
            <div class="overlay-uiux overlay"></div>
            <div class="service-img">
                <img src="assets/images/uiux-service.svg" alt="UI/UX">
            </div>
            <div class="service-content">
                <h3 class="font-static-22 font-static-black font-weight-500"><span class="font-static-22 font-static-blue font-weight-500">UI/UX</span> Designing</h3>
                <p class="font-static-16 font-static-black font-weight-normal">UI design and UX development are some of our core areas of expertise. The UI/UX design department is headed by a seasoned professional who is well-versed with the intricacies of UI/UX design to suit specific customer requirements. At iRoid, we take UI/UX design to a point of perfection, by treating each step of the process with equal importance. The different stages are Research, IA & Wireframes, User Testing, Look & Feel Design, Front-End Code Development, and Integration Support. This ensures that our valued clients get solutions that are both useful to their specific needs and are affordable, too.</p>
            </div>
        </div>
        <div class="company-service box-hover center">
            <div class="overlay-project overlay"></div>
            <div class="service-img">
                <img src="assets/images/project-service.svg" alt="Project Management">
            </div>
            <div class="service-content">
                <h3 class="font-static-22 font-static-black font-weight-500"><span class="font-static-22 font-static-blue font-weight-500">Cross</span> Platform</h3>
                <p class="font-static-16 font-static-black font-weight-normal">In recent times, the popularity of hybrid application development is rising immensely. It has benefited businesses in unimaginable ways. Many enterprises and startups are using Cross-platform development technology because of its amazing advantages e.g. faster development, lower development cost.</p>
                <p class="font-static-16 font-static-black font-weight-normal">Get good-performance, interactive and scalable apps with the best Cross-Platform (Hybrid) App Development Company. With a “one-code-fits-all” feature, we ensure that your cross-platform app looks attractive on each platform and functions the same way. Our skilled Cross-Platform mobile app developers have great expertise in Flutter and React Native frameworks.</p>
            </div>
        </div>

        <div class="company-service box-hover center">
            <div class="overlay-project overlay"></div>
            <div class="service-img">
                <img src="assets/images/project-management.svg" alt="Project Management">
            </div>
            <div class="service-content">
                <h3 class="font-static-22 font-static-black font-weight-500"><span class="font-static-22 font-static-blue font-weight-500">Project</span> Management</h3>
                <p class="font-static-16 font-static-black font-weight-normal">iRoid understands the dynamics of doing business in the fast-paced digital world of today. Whether a small, medium or large firm, outsourcing has become a part and parcel of successfully running a business, which is why we decided to take the pain from companies that can gain from the process. If you have a project which needs to be launched and implemented, iRoid can take over, ensuring that the project is implemented successfully, taking the load away from you by attending to all the finer details, but ensuring that the project reaps all the intended profits.</p>
            </div>
        </div>

        <div class="company-service box-hover center">
            <div class="overlay-project overlay"></div>
            <div class="service-img">
                <img src="assets/images/trending-tech.svg" alt="Project Management">
            </div>
            <div class="service-content">
                <h3 class="font-static-22 font-static-black font-weight-500"><span class="font-static-22 font-static-blue font-weight-500">Trending</span> Technologies</h3>
                <p class="font-static-16 font-static-black font-weight-normal">We also work with emerging and trending technologies. Our expert team has experience working with IoT (Internet of Things), AR (Augmented reality), Machine learning and AI (artificial intelligence), iBeacon, and 360-degree virtual tours (Ricoh Theta).</p>
            </div>
        </div>


    </div>
</section>
@endsection
@section('scripts')
<script>
    new WOW().init();

    $('.multiple-items').slick({
        infinite: true,
        slidesToShow: 4,
        dots: true,
        arrows: false,
        slidesToScroll: 2,
        responsive: [{
                breakpoint: 1201,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 2,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 1199,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
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
</script>
@endsection
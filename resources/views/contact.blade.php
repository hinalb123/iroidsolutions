<!DOCTYPE html>
<html lang="en">


<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    @if($_SERVER['SERVER_NAME'] != "iroidsolutions.com") 
         <meta name = "robots" content = "noindex" />

        @endif

        @if($_SERVER['SERVER_NAME'] == "iroidsolutions.com") 
         <!-- <meta name = "robots" content = "noindex" /> -->
         <meta name="robots" content="follow,index"/>
         <script async src="https://www.googletagmanager.com/gtag/js?id=G-KSJS38C452"></script>
         <script async src="https://www.googletagmanager.com/gtag/js?id=UA-220118727-1"></script>

        @endif

    <script>
        @if($_SERVER['SERVER_NAME'] == "iroidsolutions.com")
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-220118727-1');
        @endif
    </script>

    <!-- Global site tag (gtag.js) - Google Analytics -->



    <script>
        @if($_SERVER['SERVER_NAME'] == "iroidsolutions.com")

        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-KSJS38C452');
        @endif
    </script>


    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="John Doe">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="copyright" content="iroid solutions">
    <meta name="language" content="en">
    <meta name="author" content="Business, contact@iroidsolutions.com (Business)">
    <meta name="copyright" content="https://iroidsolutions.com">
    <meta name="reply-to" content="hr@iroidsolutions.in (HR)">
    <meta name="url" content="https://iroidsolutions.com">
    <meta name="identifier-URL" content="https://iroidsolutions.com">
    <meta property="og:url" content="https://iroidsolutions.com" />
    <meta property="og:type" content="article" />

    @if(Route::currentRouteName()=='homepage')

    <title>iRoid solutions | Best IT company in surat</title>
    <meta property="og:title" content="iRoid solutions | Best IT company in surat" />
    <meta name="twitter:title" content="iRoid solutions | Best IT company in surat" />
    <meta property="og:description" content="iRoid solutions is a Software development company located in Surat.iRoid is right for you if you want Website development, android development, ios development, UIUX & IT solutions for your business. iRoid believes in its motto 'Quality matters'" />
    <meta name="twitter:description" content="iRoid solutions is a Software development company located in Surat.iRoid is right for you if you want Website development, android development, ios development, UIUX & IT solutions for your business. iRoid believes in its motto 'Quality matters'" />
    <meta name="description" content="iRoid solutions is a Software development company located in Surat.iRoid is right for you if you want Website development, android development, ios development, UIUX & IT solutions for your business. iRoid believes in its motto 'Quality matters'">
    <meta name="keywords" content="website development, android development, software company, web development, android app development, web development company, IT company in surat, IT company, software development company, iroid solutions, iroid technology, Software company in surat, iroidtechnologies, Ecommerce Website Development, web app development, web services">
    <link rel="canonical" href="https://iroidsolutions.com/" />
    @elseif(Route::currentRouteName()=='contactuspage')
    <title>Contact-Us | iRoid solutions | Best IT company in surat</title>
    <meta property="og:title" content="Contact-Us | iRoid solutions | Best IT company in surat" />
    <meta name="twitter:title" content="Contact-Us | iRoid solutions | Best IT company in surat" />
    <meta name="description" content="Our client's review tells about the Success of iRoid Solutions. Testimonial is the right thing for Results Which Are driven by top-notch IT services of iRoid.">
    <meta property="og:description" content="Our client's review tells about the Success of iRoid Solutions. Testimonial is the right thing for Results Which Are driven by top-notch IT services of iRoid." />
    <meta name="twitter:description" content="Our client's review tells about the Success of iRoid Solutions. Testimonial is the right thing for Results Which Are driven by top-notch IT services of iRoid." />
    <meta name="keywords" content="client testimonial, testimonial, customer testimonial, review, review of it company, testimonials on website, Testimonial on IT company, website design testimonial, video testimonial, iroid testimonial, iroid solutions">
    <link rel="canonical" href="https://iroidsolutions.com/contact-us/" />
    @elseif(Route::currentRouteName()=='portfoliopage')
    <title>Portfolio | iRoid solutions | Best IT company in surat</title>
    <meta property="og:title" content="Testimonials | iRoid solutions | Best IT company in surat" />
    <meta name="twitter:title" content="Testimonials | iRoid solutions | Best IT company in surat" />
    <meta name="description" content="Our client's review tells about the Success of iRoid Solutions. Testimonial is the right thing for Results Which Are driven by top-notch IT services of iRoid.">
    <meta property="og:description" content="Our client's review tells about the Success of iRoid Solutions. Testimonial is the right thing for Results Which Are driven by top-notch IT services of iRoid." />
    <meta name="twitter:description" content="Our client's review tells about the Success of iRoid Solutions. Testimonial is the right thing for Results Which Are driven by top-notch IT services of iRoid." />
    <meta name="keywords" content="client testimonial, testimonial, customer testimonial, review, review of it company, testimonials on website, Testimonial on IT company, website design testimonial, video testimonial, iroid testimonial, iroid solutions">
    <link rel="canonical" href="https://iroidsolutions.com/portfolio/" />

    @elseif(Route::currentRouteName()=='testimonialpage')
    <title>Testimonials | iRoid solutions | Best IT company in surat</title>
    <meta property="og:title" content="Testimonials | iRoid solutions | Best IT company in surat" />
    <meta name="twitter:title" content="Testimonials | iRoid solutions | Best IT company in surat" />
    <meta name="description" content="Our client's review tells about the Success of iRoid Solutions. Testimonial is the right thing for Results Which Are driven by top-notch IT services of iRoid.">
    <meta property="og:description" content="Our client's review tells about the Success of iRoid Solutions. Testimonial is the right thing for Results Which Are driven by top-notch IT services of iRoid." />
    <meta name="twitter:description" content="Our client's review tells about the Success of iRoid Solutions. Testimonial is the right thing for Results Which Are driven by top-notch IT services of iRoid." />
    <meta name="keywords" content="client testimonial, testimonial, customer testimonial, review, review of it company, testimonials on website, Testimonial on IT company, website design testimonial, video testimonial, iroid testimonial, iroid solutions">
    <link rel="canonical" href="https://iroidsolutions.com/testimonial/" />

    @elseif(Route::currentRouteName()=='careerpage')
    <title>iRoid solutions Career | Best IT company in surat</title>
    <meta property="og:title" content="iRoid solutions Career | Best IT company in surat" />
    <meta name="twitter:title" content="iRoid solutions Career | Best IT company in surat" />
    <meta name="description" content="We are hiring for different job roles in the IT industry. Career opportunity at our Software company is up to the mark because We have the expertise Team in every IT technology.">
    <meta property="og:description" content="We are hiring for different job roles in the IT industry. Career opportunity at our Software company is up to the mark because We have the expertise Team in every IT technology." />
    <meta name="twitter:description" content="We are hiring for different job roles in the IT industry. Career opportunity at our Software company is up to the mark because We have the expertise Team in every IT technology." />
    <meta name="keywords" content="career, Jobs hiring near me, job alert, work from office jobs, job vacancies, join us, iroid career, job at iroid, android developer jobs in surat, web designer, web designer job, 5 days working job">
    <link rel="canonical" href="https://iroidsolutions.com/career/" />


    @elseif(Route::currentRouteName()=='internshippage')
    <title>Internship | iRoid solutions | Best IT company in surat</title>
    <meta property="og:title" content="Internship | iRoid solutions | Best IT company in surat" />
    <meta name="twitter:title" content="Internship | iRoid solutions | Best IT company in surat" />
    <meta name="description" content="We have a great opportunity for Job vacancies in software development with the iRoid team your growth is remarkable. We have an Expert Engineer in every technology.">
    <meta property="og:description" content="We have a great opportunity for Job vacancies in software development with the iRoid team your growth is remarkable. We have an Expert Engineer in every technology." />
    <meta name="twitter:description" content="We have a great opportunity for Job vacancies in software development with the iRoid team your growth is remarkable. We have an Expert Engineer in every technology." />
    <meta name="keywords" content="internship jobs, internship, internship program, paid internship, IT internship, iroid internship, internship with job, software development, internship in surat, career opportunity, software internship, paid internship">
    <link rel="canonical" href="https://iroidsolutions.com/internship" />

    @elseif(Route::currentRouteName()=='aboutuspage')
    <title>About Us | iRoid Solutions | Best IT company in surat</title>
    <meta property="og:title" content="About Us | iRoid Solutions | Best IT company in surat" />
    <meta name="twitter:title" content="About Us | iRoid Solutions | Best IT company in surat" />
    <meta name="description" content="We are a team with 9+ experience in IT Industry. To make your project to the next level iRoid have expert engineer in every IT technology.  We promise you that we deliver on time. We completed 300+ projects with satisfied clients.">
    <meta property="og:description" content="We are a team with 9+ experience in IT Industry. To make your project to the next level iRoid have expert engineer in every IT technology.  We promise you that we deliver on time. We completed 300+ projects with satisfied clients." />
    <meta name="twitter:description" content="We are a team with 9+ experience in IT Industry. To make your project to the next level iRoid have expert engineer in every IT technology.  We promise you that we deliver on time. We completed 300+ projects with satisfied clients." />
    <meta name="keywords" content="website about us page, iroid about us, iroid team, software development company, about IT company, flutter development, php development, python language, UIUX design, Website maintenance">
    <link rel="canonical" href="https://iroidsolutions.com/about-us/" />


    @elseif(Route::currentRouteName()=='servicepage')
    <title>iRoid IT Services | iRoid Solutions | Best IT company in surat</title>
    <meta property="og:title" content="iRoid IT Services | iRoid Solutions | Best IT company in surat" />
    <meta name="twitter:title" content="iRoid IT Services | iRoid Solutions | Best IT company in surat" />
    <meta name="description" content="iRoid gives you a 360 degree IT solution for your project. We provide IT services like Android App, ios App, website design, UIUX design, Computer Software, Cross Plateform application for your Business.">
    <meta property="og:description" content="iRoid gives you a 360 degree IT solution for your project. We provide IT services like Android App, ios App, website design, UIUX design, Computer Software, Cross Plateform application for your Business." />
    <meta name="twitter:description" content="iRoid gives you a 360 degree IT solution for your project. We provide IT services like Android App, ios App, website design, UIUX design, Computer Software, Cross Plateform application for your Business." />
    <meta name="keywords" content="IT services, services, iRoid it services, Custom software development, software services, java, php, laravel, project management, project management services">
    <link rel="canonical" href="https://iroidsolutions.com/services/" />




    @elseif(Route::currentRouteName()=='clientmore')
    <title>Our Clients | iRoid Solutions | Best IT company in surat</title>
    <meta property="og:title" content="Our Clients | iRoid Solutions | Best IT company in surat" />
    <meta name="twitter:title" content="Our Clients | iRoid Solutions | Best IT company in surat" />
    <meta name="description" content="iRoid has done IT projects in different industries with 200+ clients across the world. We deliver on time to our awesome clients. Our clients have faith in us because we gave them weekly reports with results as promised.">
    <meta property="og:description" content="iRoid has done IT projects in different industries with 200+ clients across the world. We deliver on time to our awesome clients. Our clients have faith in us because we gave them weekly reports with results as promised." />
    <meta name="twitter:description" content="iRoid has done IT projects in different industries with 200+ clients across the world. We deliver on time to our awesome clients. Our clients have faith in us because we gave them weekly reports with results as promised." />
    <meta name="keywords" content="iroid clients, Php development, php backend, laravel devekoper, react native, java developer, javascript project, application development, IT project, freelancing project">
    <link rel="canonical" href="https://iroidsolutions.com/clients/" />

    @elseif(Route::currentRouteName()=='hireuspage')
    <title>Hire us | iRoid Solutions | Best IT company in surat</title>
    <meta property="og:title" content="Hire us | iRoid Solutions | Best IT company in surat" />
    <meta name="twitter:title" content="Hire us | iRoid Solutions | Best IT company in surat" />
    <meta name="description" content="Hire the expertise team of iRoid to level up your project. You can do faith in us because We are in the IT industry with successful 9+ years.">
    <meta property="og:description" content="Hire the expertise team of iRoid to level up your project. You can do faith in us because We are in the IT industry with successful 9+ years." />
    <meta name="twitter:description" content="Hire the expertise team of iRoid to level up your project. You can do faith in us because We are in the IT industry with successful 9+ years." />
    <meta name="keywords" content="Hire developer, coding, amazing facts, freelancing project, frontend developer, backend developer, contact us, quality matters, Ecommerce website development, web services, iRoid Solutions">
    <link rel="canonical" href="https://iroidsolutions.com/hire-us/" />

    @elseif(Route::currentRouteName()=='blogdata')
    <title>Blog | iRoid Solutions | Best IT company in surat</title>
    <meta property="og:title" content="Blog | iRoid Solutions | Best IT company in surat" />
    <meta name="twitter:title" content="Blog | iRoid Solutions | Best IT company in surat" />
    <!-- <meta name="description" content="Hire the expertise team of iRoid to level up your project. You can do faith in us because We are in the IT industry with successful 9+ years.">
    <meta property="og:description" content="Hire the expertise team of iRoid to level up your project. You can do faith in us because We are in the IT industry with successful 9+ years." />
    <meta name="twitter:description" content="Hire the expertise team of iRoid to level up your project. You can do faith in us because We are in the IT industry with successful 9+ years." />
    <meta name="keywords" content="Hire developer, coding, amazing facts, freelancing project, frontend developer, backend developer, contact us, quality matters, Ecommerce website development, web services, iRoid Solutions">
    <link rel="canonical" href="https://iroidsolutions.com/Blog/" /> -->

    @elseif(Route::currentRouteName()=='contactblog')
    <title>{{$data->slug}} | iRoid Solutions | Best IT company in surat</title>
    <meta property="og:title" content="Hire us | iRoid Solutions | Best IT company in surat" />
    <meta name="twitter:title" content="Hire us | iRoid Solutions | Best IT company in surat" />
    <!-- <meta name="description" content="Hire the expertise team of iRoid to level up your project. You can do faith in us because We are in the IT industry with successful 9+ years.">
    <meta property="og:description" content="Hire the expertise team of iRoid to level up your project. You can do faith in us because We are in the IT industry with successful 9+ years." />
    <meta name="twitter:description" content="Hire the expertise team of iRoid to level up your project. You can do faith in us because We are in the IT industry with successful 9+ years." />
    <meta name="keywords" content="Hire developer, coding, amazing facts, freelancing project, frontend developer, backend developer, contact us, quality matters, Ecommerce website development, web services, iRoid Solutions">
    <link rel="canonical" href="https://iroidsolutions.com/hire-us/" /> -->
    @endif

    <meta property="og:image" content="" />
    <meta http-equiv="Cache-control" content="public">
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@weareiroid" />
    <meta name="twitter:image" content="" />
    <meta name="robots" content="follow, index"/>

    <link rel="apple-touch-icon" sizes="57x57" href="assets/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="{{asset('assets/favicon/android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('assets/favicon/favicon-96x96.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/favicon/favicon-16x16.png')}}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugin.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://paulirish.github.io/lite-youtube-embed/src/lite-yt-embed.css" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">


</head>

<body>

    <div class="overlay" id="loader">
        <ul class="loader">
            <li class="center"></li>
            <li class="item item-1"></li>
            <li class="item item-2"></li>
            <li class="item item-3"></li>
            <li class="item item-4"></li>
            <li class="item item-5"></li>
            <li class="item item-6"></li>
            <li class="item item-7"></li>
            <li class="item item-8"></li>
        </ul>
    </div>
    <!-- <div class="circle-cursor circle-cursor--inner"></div>
    <div class="circle-cursor circle-cursor--outer"></div> -->
    <!-- <div class="loading" id="loader">Loading&#8230;</div> -->


    <!---------------------------------------------------------- header section start ---------------------------------------------------------->
    <section class="contact-slider parallax-slide" id="parallax1">

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
                                    <span onclick="window.open('mailto:business@iroidsolutions.in');">business@iroidsolutions.in
                                        (Business)</span><br><span onclick="window.open('mailto:hr@iroidsolutions.in');"> hr@iroidsolutions.in
                                        (HR)</span>
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
                                <a class="nav-link font-static-18 font-static-gray {{ isset($page) && in_array($page, ['contactus']) ? 'naactive' : '' }}" aria-current="page" href="#">Contact</a>
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
            <h1 class="font-static-48 font-weight-600 font-static-white wow fadeInUp animated" data-wow-duration="1s" data-wow-delay=".2s">Contact Us</h1>
            <p class="font-static-20 font-weight-400 font-static-white wow fadeInUp animated" data-wow-duration="1s" data-wow-delay=".2s">Let's talk about the project by sending us a message and we will be in touch within one workday.</p>
        </div>
    </section>
    <!---------------------------------------------------------- Top Slider section end ---------------------------------------------------------->

    <!---------------------------------------------------------- Sidebar section start ---------------------------------------------------------->
    <div class="sidebar-wrapper bg-blue" id="SidebarWrapper">
        <div class="right-sidebar">
            <div class="sidebar-close text-end">
                <a href="#" class="sidebar-close-icon" id="SidebarCloseIcon">
                    <img src="assets/images/close.svg" alt="Close Icon">
                </a>
            </div>
            <div class="sidebar-brand text-center">
                <img src="assets/images/header-logo.svg" alt="Best IT company in surat - iRoid ">
            </div>
            <div class="sidebar-header ps-5">
                <ul class="list-unstyled">
                    <li class="pt-2 pb-2">
                        <a href="{{Route::currentRouteName()=='homepage'?'#' : route('homepage')}} " class="font-static-16 font-weight-400 font-static-white "> --
                            &nbsp;Home</a>
                    </li>
                    <li class="pt-2 pb-2">
                        <a href="{{Route::currentRouteName()=='servicepage'?'#' : route('servicepage')}} " class="font-static-16 font-weight-400 font-static-white "> --
                            &nbsp;Services </a>
                    </li>
                    <li class="pt-2 pb-2">
                        <a href="{{Route::currentRouteName()=='portfoliopage'?'#' : route('portfoliopage')}} " class="font-static-16 font-weight-400 font-static-white ">
                            -- &nbsp;Portfolio</a>
                    </li>
                    <li class="pt-2 pb-2">
                        <a href="{{Route::currentRouteName()=='testimonialpage'?'#' : route('testimonialpage')}}" class="font-static-16 font-weight-400 font-static-white "> -- &nbsp;Testimonials</a>
                    </li>
                    <li class="pt-2 pb-2">
                        <a href="{{Route::currentRouteName()=='clientmore'?'#' : route('clientmore')}} " class="font-static-16 font-weight-400 font-static-white " aria-current="page"> -- &nbsp;Our Clients</a>
                    </li>
                    <li class="pt-2 pb-2">
                        <a href="{{Route::currentRouteName()=='hireuspage'?'#' : route('hireuspage')}} " class="font-static-16 font-weight-400 font-static-white "> --
                            &nbsp;Hire Us</a>
                    </li>
                    <li class="pt-2 pb-2">
                        <a href="{{Route::currentRouteName()=='careerpage'?'#' : route('careerpage')}} " class="font-static-16 font-weight-400 font-static-white "> --
                            &nbsp;Job Vacancies</a>
                    </li>
                    <li class="pt-2 pb-2">
                        <a href="{{Route::currentRouteName()=='blog'?'#' : route('blogdata')}} " class="font-static-16 font-weight-400 font-static-white "> --
                        &nbsp;Blog</a>
                    </li>
                    <li class="pt-2 pb-2">
                        <a href="{{Route::currentRouteName()=='internshippage'?'#' : route('internshippage')}} " class="font-static-16 font-weight-400 font-static-white ">
                            -- &nbsp;Internship</a>
                    </li>
                    <li class="pt-2 pb-2">
                        <a href="{{Route::currentRouteName()=='aboutuspage'?'#' : route('aboutuspage')}}" class="font-static-16 font-weight-400 font-static-white "> --
                            &nbsp;About Us</a>
                    </li>
                    <li class="pt-2 pb-2">
                        <a href="{{Route::currentRouteName()=='contactuspage'?'#' : route('contactuspage')}} " class="font-static-16 font-weight-400 font-static-white ">
                            -- &nbsp;Contact Us</a>
                    </li>
                </ul>
                <div class="social-account pt-0 pt-md-4 pt-lg-4">
                    <!-- <p class="text-white">Find us here : -</p> -->
                    <ul class="list-unstyled d-flex align-items-center">
                        <li>
                            <a target="_blank" href="https://www.linkedin.com/company/iroid/">
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
    <!---------------------------------------------------------- Sidebar section end ---------------------------------------------------------->

    <!---------------------------------------------------------- contact section start ---------------------------------------------------------->

    <section class="portfolio-section">
        <div class="container">

            <div class="who-we-title wow animate__fadeInUp animated" data-wow-duration="1s" data-wow-delay=".2s">
                <h2 class="font-static-36 font-static-blue font-weight-600 text-center">Contact <span class="font-static-36 font-static-black font-weight-600">Us</span></h2>
                <p class="font-static-18 font-static-black font-weight-normal text-center">If you are looking for a
                    solid partner for your projects, send us an
                    email. We'd love to talk to you!</p>
            </div>
            <div class="text-left talk-speak">
                <span class="font-static-16 font-static-black font-weight-normal">Let’s Talk</span>
                <h3 class="font-static-30 font-static-black font-weight-normal">Speak With Expert Engineers.</h3>
            </div>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="contact-details text-center wow animate__fadeInUp animated" data-wow-duration="1s" data-wow-delay=".2s">
                        <div class="contact-icon">
                            <a href="tel:91 90238 68898" target="_blank"> <img src="assets/images/contact-call.svg" alt="Call"></a>
                        </div>
                        <h5 class="font-static-20 font-static-black font-weight-500 ">Phone</h5>
                        <a href="tel:91 90238 68898" target="_blank" class="font-static-18 font-static-black font-weight-normal text-decoration-none">+ 91 90238 68898 (HR)</a><br><a href="tel:91 77788 69939" target="_blank" class="font-static-18 font-static-black font-weight-normal text-decoration-none">+ 91 77788
                            69939 (Business)</a>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="contact-details text-center wow animate__fadeInUp animated" data-wow-duration="1s" data-wow-delay=".2s">
                        <div class="contact-icon">
                            <a href="https://www.google.com/maps/place/iRoid+Solutions/@21.2004186,72.8031081,16z/data=!4m5!3m4!1s0x3be04e7ad68cf639:0xbee15723022b9fe1!8m2!3d21.200281!4d72.80384" target="_blank"> <img src="assets/images/contact-address.svg" alt="Address"></a>
                        </div>
                        <h5 class="font-static-20 font-static-black font-weight-500">Address</h5>
                        <a href="https://www.google.com/maps/place/iRoid+Solutions/@21.2004186,72.8031081,16z/data=!4m5!3m4!1s0x3be04e7ad68cf639:0xbee15723022b9fe1!8m2!3d21.200281!4d72.80384" target="_blank" class="font-static-18 font-static-black font-weight-normal text-decoration-none">418 - 419,
                            4th floor, Sangini
                            Magnus, Rushabh Char Rasta,
                            Adajan, Surat - 395009</a>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="contact-details text-center wow animate__fadeInUp animated" data-wow-duration="1s" data-wow-delay=".2s">
                        <div class="contact-icon">
                            <a href="mailto:hr@iroidsolutions.in" target="_blank"> <img src="assets/images/contact-gmail.svg" alt="Email"></a>
                        </div>
                        <h5 class="font-static-20 font-static-black font-weight-500 gmail">Email</h5>
                        <a href="mailto:hr@iroidsolutions.in" target="_blank" class="font-static-18 font-static-black font-weight-normal text-decoration-none">hr@iroidsolutions.in
                            (HR)</a><br><a href="mailto:business@iroidsolutions.in" class="font-static-18 font-static-black font-weight-normal text-decoration-none" target="_blank">business@iroidsolutions.in (Business)</a>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-sm-12 col-md-10 col-lg-8">
                    <div class="contact-form bg-white wow animate__fadeInUp animated" data-wow-duration="1s" data-wow-delay=".2s">

                        <form>
                            @routes
                            @csrf
                            <h3 class="font-static-22 font-static-blue font-weight-normal">Send us a message</h3>
                            <div class="mb-3">
                                <input type="text" placeholder="Name" name="name" id="name1" required="required" class="custom-form-control">
                                <span role="alert" class="nameerror text-danger">The Name field is required.</span>

                            </div>

                            <div class="mb-3">
                                <input type="text" placeholder="Email" name="email" id="email1" required="required" class="custom-form-control">
                                <span role="alert" class="emailerror text-danger">Please Enter valid email.</span>

                            </div>

                            <div class="mb-3">
                                <input type="text" placeholder="Phone" name="phone" id="phone1" required="required" class="custom-form-control">
                                <span role="alert" class="phoneerror text-danger">Please Enter valid phonenumber.</span>

                            </div>

                            <div class="mb-3">
                                <textarea type="message" class="custom-form-control" id="message1" name="message" placeholder="Message" id="" cols="30" rows="8"></textarea>
                                <!-- <input type="message" name="message" id="message1" required="required" placeholder="Message" class="custom-form-control"> -->
                                <span role="alert" class="messageerror text-danger">The Message field is required.</span>

                            </div>

                            <div class="text-center">
                                <a href="javascript:void(0);" onclick="addmessage()" class="btn btn-primary bg-blue font-static-18 font-weight-500 font-static-white">Send
                                    Message</a>
                                <div class="wpcf7-response-output wpcf7-display-none wpcf7-mail-sent-ok" style="display: none;" id="successmsg1">Your message was sent successfully. Thanks.
                                </div>
                            </div>
                            <div id="success">Your Message send successfully.</div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!---------------------------------------------------------- contact section end ---------------------------------------------------------->

    <!---------------------------------------------------------- location section start ---------------------------------------------------------->
    <section class="location">
        <div style="width: 100%">
            <iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=iroid%20solution+(My%20Business%20Name)&amp;t=&amp;z=17&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
            </iframe>
        </div>
    </section>
    <!---------------------------------------------------------- location section end ---------------------------------------------------------->

    <!---------------------------------------------------------- Footer section start ---------------------------------------------------------->
    <footer class="footer">
        <div class="container">
            <div class="footer-logo">
                <img src="assets/images/footer-logo.svg" alt="iRoid solutions - software company " class="d-none d-md-none d-lg-block">
                <img src="assets/images/header-logo.svg" alt="Best IT company in surat - iRoid " class="d-block d-md-block d-lg-none">
            </div>
        </div>
        <div class="container footer-container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                    <h3 class="font-static-22 font-weight-400 font-static-white">Company</h3>
                    <div class="servicediv">
                        <ul class="list-unstyled">
                            <li class="font-static-16 font-weight-500 font-static-white">
                                <a href="{{Route::currentRouteName()=='homepage'?'#' : route('homepage')}}" target="_blank" class="font-static-16 font-weight-400 font-static-white">
                                    <img src="assets/images/dash.svg" alt="Dash">
                                    Home
                                </a>
                            </li>
                            <li class="font-static-16 font-weight-500 font-static-white">
                                <a href="{{Route::currentRouteName()=='aboutuspage'?'#' : route('aboutuspage')}}" target="_blank" class="font-static-16 font-weight-400 font-static-white">
                                    <img src="assets/images/dash.svg" alt="Dash">
                                    About Us
                                </a>
                            </li>
                            <li class="font-static-16 font-weight-500 font-static-white">
                                <a href="{{Route::currentRouteName()=='servicepage'?'#' : route('servicepage')}} " target="_blank" class="font-static-16 font-weight-400 font-static-white">
                                    <img src="assets/images/dash.svg" alt="Dash">
                                    Services
                                </a>
                            </li>
                            <li class="font-static-16 font-weight-500 font-static-white">
                                <a href="{{Route::currentRouteName()=='testimonialpage'?'#' : route('testimonialpage')}}" target="_blank" class="font-static-16 font-weight-400 font-static-white">
                                    <img src="assets/images/dash.svg" alt="Dash">
                                    Testimonials
                                </a>
                            </li>
                            <li class="font-static-16 font-weight-500 font-static-white">
                                <a href="{{Route::currentRouteName()=='testimonialpage'?'#' : route('blogdata')}}" target="_blank" class="font-static-16 font-weight-400 font-static-white">
                                    <img src="{{asset('assets/images/dash.svg')}}" alt="Dash">
                                    Blog
                                </a>
                            </li>
                            <li class="font-static-16 font-weight-500 font-static-white">
                                <a href="{{Route::currentRouteName()=='testimonialpage'?'#' : route('internshippage')}}" target="_blank" class="font-static-16 font-weight-400 font-static-white">
                                    <img src="{{asset('assets/images/dash.svg')}}" alt="Dash">
                                    Internship
                                </a>
                            </li>
                        </ul>


                        <ul class="list-unstyled listservice">
                            <li class="font-static-16 font-weight-500 font-static-white">
                                <a href="{{Route::currentRouteName()=='portfoliopage'?'#' : route('portfoliopage')}}" target="_blank" class="font-static-16 font-weight-400 font-static-white">
                                    <img src="assets/images/dash.svg" alt="Dash">
                                    Portfolio
                                </a>
                            </li>
                            <li class="font-static-16 font-weight-500 font-static-white">
                                <a href="{{Route::currentRouteName()=='hireuspage'?'#' : route('hireuspage')}}" target="_blank" class="font-static-16 font-weight-400 font-static-white">
                                    <img src="assets/images/dash.svg" alt="Dash">
                                    Hire Us
                                </a>
                            </li>
                            <li class="font-static-16 font-weight-500 font-static-white">
                                <a href="{{Route::currentRouteName()=='careerpage'?'#' : route('careerpage')}} " target="_blank" class="font-static-16 font-weight-400 font-static-white">
                                    <img src="assets/images/dash.svg" alt="Dash">
                                    Career
                                </a>
                            </li>
                            <li class="font-static-16 font-weight-500 font-static-white">
                                <a href="{{Route::currentRouteName()=='contactuspage'?'#' : route('contactuspage')}} " target="_blank" class="font-static-16 font-weight-400 font-static-white">
                                    <img src="assets/images/dash.svg" alt="Dash">
                                    Contact Us
                                </a>
                            </li>
                            <li class="font-static-16 font-weight-500 font-static-white">
                                <a href="{{Route::currentRouteName()=='contactuspage'?'#' : route('clientmore')}} " target="_blank" class="font-static-16 font-weight-400 font-static-white">
                                    <img src="{{asset('assets/images/dash.svg')}}" alt="Dash">
                                    Our Clients
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                    <h3 class="font-static-22 font-weight-400 font-static-white">Get In Touch</h3>
                    <ul class="list-unstyled">


                        <li class="font-static-16 font-weight-500 font-static-white d-flex align-items-baseline call">
                            <img src="assets/images/call.svg" alt="Call">
                            <a href="javascript:void(0)" class="font-static-16 font-weight-400  font-static-white">
                                <span onclick="window.open('tel:+ 91 77788 69939');">+ 91 77788 69939 (Business)</span> <br>
                                <span onclick="window.open('tel:+ 91  90238 68898');">+ 91  90238 68898 (HR)</span>

                            </a>
                        </li>
                        <li class="font-static-16 font-weight-500 font-static-white d-flex align-items-baseline call">
                            <img src="assets/images/whatsapp.svg" alt="Call">
                            <div class="font-static-16 font-weight-400  font-static-white ps-2">
                                <a class="font-static-16 font-weight-400  font-static-white d-block" target="_blank" href="//api.whatsapp.com/send?phone=91 77788 69939">+ 91 77788 69939
                                    (Business)</a>
                                <a class="font-static-16 font-weight-400  font-static-white d-block" target="_blank" href="//api.whatsapp.com/send?phone=91 90238 68898">+ 91
                                90238 68898 (HR)</a>

                            </div>
                        </li>

                        <li class="font-static-16 font-weight-500 font-static-white d-flex align-items-baseline call">
                            <img src="assets/images/gmail.svg" alt="Call">
                            <a href="javascript:void(0)" class="font-static-16 font-weight-400  font-static-white">
                                <span onclick="window.open('mailto:business@iroidsolutions.in');">business@iroidsolutions.in
                                    (Business)</span><br>
                                <span onclick="window.open('mailto:hr@iroidsolutions.in');"> hr@iroidsolutions.in
                                    (HR)</span>
                            </a>
                        </li>



                        <li class="font-static-16 font-weight-500 font-static-white d-flex align-items-center">
                            <a href="skype:daxeshpatel7224?chat" target="_blank"> <img src="assets/images/skype.svg" alt="Skype"></a>
                            <a href="skype:daxeshpatel7224?chat" target="_blank" class="font-static-16 font-weight-400 font-static-white">
                            daxeshpatel7224

                            </a>
                        </li>

                    </ul>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                    <h3 class="font-static-22 font-weight-400 font-static-white">Address</h3>
                    <ul class="list-unstyled d-flex align-items-baseline address">
                        <a class="font-static-16 font-weight-400 font-static-white" target="_blank" href="https://www.google.com/maps/place/iRoid+Solutions/@21.2004186,72.8031081,16z/data=!4m5!3m4!1s0x3be04e7ad68cf639:0xbee15723022b9fe1!8m2!3d21.200281!4d72.80384">
                            <img src="assets/images/address.svg" alt="iRoid Address">
                            <li class="font-static-16 font-weight-400 font-static-white"> 418 - 419, 4th floor, Sangini
                                Magnus, Rushabh Char Rasta, Adajan, Surat - 395 009
                        </a></li>

                    </ul>
                </div>
            </div>
        </div>
    </footer>


    <section class="subfooter">
        <div class="container d-block d-md-flex d-lg-flex align-items-center justify-content-between">
            <div class="subfooter-text">
                <p class="m-0 p-0 font-static-16 font-weight-normal font-static-black">&copy; Copyright. All rights
                    reserved</p>
            </div>
            <div class="subfooter-social d-block d-md-flex d-lg-flex align-items-center justify-content-between mt-3 mt-md-0 mt-lg-0">
                <p class="m-0 p-0 pe-3 font-static-16 font-weight-normal font-static-black">Follow our Socials</p>
                <ul class="list-unstyled d-flex align-items-center m-0 p-0 mt-3 mt-md-0 mt-lg-0">
                    <li>
                        <a target="_blank" href="https://www.linkedin.com/company/iroid/">
                            <img src="assets/images/linkdin.svg" alt="Linkdin logo">
                        </a>
                    </li>
                    <li class="ps-3">
                        <a target="_blank" href="https://www.facebook.com/iroidsolutions/">
                            <img src="assets/images/facebook.svg" alt="Facebook logo">
                        </a>
                    </li>

                    <li class="ps-3">
                        <a target="_blank" href="https://www.youtube.com/channel/UCgwfPp_d4qgD6l9vGvxwvgw/videos">
                            <img src="assets/images/youtube.svg" alt="Youtube logo">
                        </a>
                    </li>
                    <li class="ps-3">
                        <a target="_blank" href="https://www.instagram.com/iroid_solutions/">
                            <img src="assets/images/instagram.svg" alt="Instagram logo">
                        </a>
                    </li>
                    <li class="ps-3">
                        <a target="_blank" href="https://twitter.com/weareiroid">
                            <img src="assets/images/twitter.svg" alt="Twitter logo">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <script src="https://iroidsolutions.com/js/wow.js"></script>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="assets/js/slick.min.js"></script>
    <script src="https://md-aqil.github.io/images/swiper.min.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/wow.js?{{CacheVersion()}}"></script>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "name": "iRoid Solutions - IT company",
            "alternateName": "iRoid solutions",
            "url": "https://iroidsolutions.com/",
            "logo": "https://iroidsolutions.com/assets/images/footer-logo.svg",
            "contactPoint": {
                "@type": "ContactPoint",
                "telephone": "+ 91 77788 69939",
                "contactType": "technical support"
            },
            "sameAs": [
                "https://www.linkedin.com/company/iroid/",
                "https://www.facebook.com/iroidsolutions/",
                "https://www.instagram.com/iroid_solutions/",
                "https://twitter.com/weareiroid",
                "https://www.youtube.com/channel/UCgwfPp_d4qgD6l9vGvxwvgw/videos"
            ]
        }
    </script>
    <script>
        new WOW().init();
    </script>
    <script>
        $('#loader').hide();
        $(".nameerror").hide();
        $(".emailerror").hide();
        $(".phoneerror").hide();
        $(".phoneerror1").hide();
        $(".messageerror").hide();
        $("#success").hide();

        $(function() {
            $(window).on("load", function() {
                $('#loader').hide();
            });
        });

        function addmessage() {

            var name = $("#name1").val();
            var email = $("#email1").val();
            var phone = $('#phone1').val();
            var message = $('#message1').val();
            $('#loader').show();
            var error = validation(name, email, phone, message);
            if (error == 1) {
                $('#loader').hide();
                $('#successmsg1').css('display', 'none');
                return false;

            }
            // console.log(name, email, phone, message);
            $.ajax({

                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: route('savecontactus'),

                dataType: 'JSON',
                data: {
                    'name': name,
                    'email': email,
                    'phone': phone,
                    'message': message

                },

                success: function(results) {
                    $('#loader').hide();
                    $("#name1").val('');
                    $("#email1").val('');
                    $("#phone1").val('');
                    $("#message1").val('');
                    $(".phoneerror1").hide();
                    $(".phoneerror").hide();
                    $("#success").show();
                }

            });
        }

        function validation(name, email, phone, message) {
            z = 0;
            $(".nameerror").hide();
            $(".emailerror").hide();
            $(".phoneerror").hide();
            $(".messageerror").hide();
            checkname = name.trim();
            checkmessage = message.trim();
            if (name == '' || $.isNumeric(name) || checkname.length <= 0) {
                z = 1;
                $(".nameerror").show();
            }
            if (message == '' || checkmessage.length <= 0) {
                z = 1;
                $(".messageerror").show();
            }
            var regex = /^[a-zA-Z0-9\-_]+(\.[a-zA-Z0-9\-_]+)*@[a-z0-9]+(\-[a-z0-9]+)*(\.[a-z0-9]+(\-[a-z0-9]+)*)*\.[a-z]{2,4}$/;
            if (email == '' || regex.test(email) == false) {
                z = 1;
                $(".emailerror").show();
            }
            var regx1 = /^[6-9]\d{9}$/;
            if (phone == '' || regx1.test(phone) == false) {
                z = 1;
                $(".phoneerror").show();
            }

            return z;

        }
    </script>

</html>
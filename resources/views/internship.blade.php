@extends('layout.content')
@section('topslider')
<style>

</style>
<section class="internship-slider parallax-slide" id="parallax1">
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
                                <span
                                    onclick="window.open('mailto:business@iroidsolutions.in');">business@iroidsolutions.in
                                    (Business)</span><br><span onclick="window.open('mailto:hr@iroidsolutions.in');">
                                    hr@iroidsolutions.in (HR)</span>
                            </a>
                        </li>

                        <li class="font-static-16 font-weight-500 font-static-white d-flex align-items-center">
                            <a href="skype:daxeshpatel7224?chat" target="_blank"> <img src="assets/images/skype.svg"
                                    alt="Skype"></a>
                            <a href="skype:daxeshpatel7224?chat" target="_blank"
                                class="font-static-16 font-weight-400 font-static-white ps-2">
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
                            <a class="nav-link font-static-18 font-static-gray {{ isset($page) && in_array($page, ['home']) ? 'naactive' : '' }}"
                                aria-current="page" href="{{route('homepage')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link font-static-18 font-static-gray {{ isset($page) && in_array($page, ['testimonialpage']) ? 'naactive' : '' }}"
                                href="{{route('testimonialpage')}}">Testimonials</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link font-static-18 font-static-gray {{ isset($page) && in_array($page, ['portfolio']) ? 'naactive' : '' }}"
                                aria-current="page" href="{{route('portfoliopage')}}">Portfolio</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link font-static-18 font-static-gray {{ isset($page) && in_array($page, ['career']) ? 'activenav' : '' }}"
                                aria-current="page" href="javascript:void(0)" id="navbarDropdown" role="button"
                                aria-expanded="false">Career</a>
                            <ul class="dropdown-menu career-dropdown" data-cat="app"
                                aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{route('careerpage')}}">Job Vacancies</a></li>
                                <li class="pt-0"><a class="dropdown-item"
                                        href="#">Internship</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link font-static-18 font-static-gray {{ isset($page) && in_array($page, ['contactus']) ? 'naactive' : '' }}"
                                aria-current="page" href="{{route('contactuspage')}}">Contact</a>
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
        <h1 class="font-static-48 font-weight-600 font-static-white wow fadeInUp animated" data-wow-duration="1s"
            data-wow-delay=".2s">Internship at iRoid </h1>

            <p class="font-static-20 font-weight-400 font-static-white wow fadeInUp animated" data-wow-duration="1s" data-wow-delay=".2s">Make a fresh start of your career with iRoid</p>

    </div>
</section>
@endsection

@section('content')
<section class="internship-section">
    <div class="container">
        <div class="who-we-title">
            <h2 class="font-static-36 font-static-black font-weight-600 text-center">We are providing the <span
                    class="font-static-36 font-static-blue font-weight-600 text-center">internship</span> in
                below <span class="font-static-36 font-static-black font-weight-600 text-center">technologies</span>
            </h2>
        </div>
        <div class="service-list">
            <div class="service-container m-0 mt-4">
                <div class="multiple-items">
                    <div class="service-wrapper wow animate__fadeInUp animated box-hover center" data-wow-duration="1s"
                        data-wow-delay=".2s">
                        <div class="overlay-android overlay bg-light-blue"></div>
                        <div class="service-img">
                            <img src="assets/images/android-internship.svg" alt="Android">
                        </div>
                        <h3 class="font-static-20 font-static-black font-weight-500 text-center">Android Development
                        </h3>
                    </div>

                    <div class="service-wrapper wow animate__fadeInUp animated box-hover center" data-wow-duration="1s"
                        data-wow-delay=".2s">
                        <div class="overlay-ios overlay bg-light-red"></div>
                        <div class="service-img">
                            <img src="assets/images/ios-internship.svg" alt="Android">
                        </div>
                        <h3 class="font-static-20 font-static-black font-weight-500 text-center">iOS Development</h3>
                    </div>

                    <div class="service-wrapper wow animate__fadeInUp animated box-hover center" data-wow-duration="1s"
                        data-wow-delay=".2s">
                        <div class="overlay-website overlay bg-light-green"></div>
                        <div class="service-img">
                            <img src="assets/images/flutter-internship.svg" alt="Android">
                        </div>
                        <h3 class="font-static-20 font-static-black font-weight-500 text-center">Flutter Development
                        </h3>
                    </div>


                    <div class="service-wrapper wow animate__fadeInUp animated box-hover center" data-wow-duration="1s"
                        data-wow-delay=".2s">
                        <div class="overlay-uiux overlay bg-light-perple"></div>
                        <div class="service-img">
                            <img src="assets/images/php-internship.svg" alt="Android">
                        </div>
                        <h3 class="font-static-20 font-static-black font-weight-500 text-center">PHP Development</h3>
                    </div>
                    <div class="service-wrapper wow animate__fadeInUp animated box-hover center" data-wow-duration="1s"
                        data-wow-delay=".2s">
                        <div class="overlay-uiux overlay bg-light-perple"></div>
                        <div class="service-img">
                            <img src="assets/images/python.svg" alt="Android">
                        </div>
                        <h3 class="font-static-20 font-static-black font-weight-500 text-center">Python Development</h3>
                    </div>
                    <div class="service-wrapper wow animate__fadeInUp animated box-hover center" data-wow-duration="1s"
                        data-wow-delay=".2s">
                        <div class="overlay-uiux overlay bg-light-perple"></div>
                        <div class="service-img">
                            <img src="assets/images/laravel.svg" alt="Android">
                        </div>
                        <h3 class="font-static-20 font-static-black font-weight-500 text-center">Laravel Development</h3>
                    </div>
                    <div class="service-wrapper wow animate__fadeInUp animated box-hover center" data-wow-duration="1s"
                        data-wow-delay=".2s">
                        <div class="overlay-uiux overlay bg-light-perple"></div>
                        <div class="service-img">
                            <img src="assets/images/webdesigner.svg" alt="Android">
                        </div>
                        <h3 class="font-static-20 font-static-black font-weight-500 text-center">Web Designing</h3>
                    </div>
                    <div class="service-wrapper wow animate__fadeInUp animated box-hover center" data-wow-duration="1s"
                        data-wow-delay=".2s">
                        <div class="overlay-uiux overlay bg-light-perple"></div>
                        <div class="service-img">
                            <img src="assets/images/ui_ux.svg" alt="Android">
                        </div>
                        <h3 class="font-static-20 font-static-black font-weight-500 text-center">UI/UX Designing</h3>
                    </div>
                    <div class="service-wrapper wow animate__fadeInUp animated box-hover center" data-wow-duration="1s"
                        data-wow-delay=".2s">
                        <div class="overlay-uiux overlay bg-light-perple"></div>
                        <div class="service-img">
                            <img src="assets/images/react.svg" alt="Android">
                        </div>
                        <h3 class="font-static-20 font-static-black font-weight-500 text-center">React Native</h3>
                    </div>
                    <div class="service-wrapper wow animate__fadeInUp animated box-hover center" data-wow-duration="1s"
                        data-wow-delay=".2s">
                        <div class="overlay-uiux overlay bg-light-perple"></div>
                        <div class="service-img">
                            <img src="assets/images/react.svg" alt="Android">
                        </div>
                        <h3 class="font-static-20 font-static-black font-weight-500 text-center">React JS</h3>
                    </div>

                    <div class="service-wrapper wow animate__fadeInUp animated box-hover center" data-wow-duration="1s"
                        data-wow-delay=".2s">
                        <div class="overlay-project overlay bg-blue"></div>
                        <div class="service-img">
                            <img src="assets/images/node.svg" alt="Android">
                        </div>
                        <h3 class="font-static-20 font-static-black font-weight-500 text-center">Node.js Development
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!---------------------------------------------------------- internship details section start ---------------------------------------------------------->
<section class="internship-details bg-light-white">

    <div class="container">
        <div class="process-details">
            <h3 class="font-static-24 font-static-black font-weight-500"><span
                    class="font-static-24 font-static-blue font-weight-500">Interview </span> Process :</h3>
            <p class="font-static-18 font-weight-500 font-static-black">There will be two rounds of the interview
                process:</p>
            <ul class="list-unstyled">
                <li class="font-static-18 font-weight-normal font-static-black pt-2 pb-2">Practical Evaluation: You will
                    be asked to develop an example in your preferred language  (Java, PHP, Android, iPhone, C/C++)</li>
                <li class="font-static-18 font-weight-normal font-static-black pt-2 pb-2">Oral Interview: Question -
                    Answers</li>
            </ul>
            <p class="font-static-18 font-weight-500 font-static-black">After you get selected, you will be given
                training first and then gradually you will be given chance to work on
                live projects.</p>
        </div>
        <div class="process-details">
            <h3 class="font-static-24 font-static-blue font-weight-500"><span>Stipend : </span></h3>
            <p class="font-static-18 font-weight-500 font-static-black">Depending upon your performance in the
                interview, you will get paid the stipend during the 6 months of
                the internship period.</p>
        </div>
        <div class="process-details">
            <h3 class="font-static-24 font-static-black font-weight-500"><span
                    class="font-static-24 font-static-blue font-weight-500">Employment  </span> Agreement :</h3>
            <p class="font-static-18 font-weight-500 font-static-black">1 year of Employment  agreement after 6 months
                of the internship period.</p>
        </div>
        <div class="process-details">
            <h3 class="font-static-24 font-static-black font-weight-500"><span
                    class="font-static-24 font-static-blue font-weight-500">Skills </span> Required :</h3>
            <ul class="list-unstyled">
                <li class="font-static-18 font-weight-normal font-static-black pt-2 pb-2">Strong command on programming
                </li>
                <li class="font-static-18 font-weight-normal font-static-black pt-2 pb-2">Strong OOPS concepts</li>
                <li class="font-static-18 font-weight-normal font-static-black pt-2 pb-2">Good English communication
                    skills</li>
                <li class="font-static-18 font-weight-normal font-static-black pt-2 pb-2">Quick Learner</li>
                <li class="font-static-18 font-weight-normal font-static-black pt-2 pb-2">Good team player</li>
                <li class="font-static-18 font-weight-normal font-static-black pt-2 pb-2">Hard-working</li>
                <li class="font-static-18 font-weight-normal font-static-black pt-2 pb-2">Self-Motivated</li>
                <li class="font-static-18 font-weight-normal font-static-black pt-2 pb-2">Disciplined</li>
                <li class="font-static-18 font-weight-normal font-static-black pt-2 pb-2">Passion for work</li>
            </ul>
        </div>
        <div class="process-details">
            <h3 class="font-static-24 font-static-blue font-weight-500"><span>Benefits : </span></h3>
            <ul class="list-unstyled">
                <li class="font-static-18 font-weight-normal font-static-black pt-2 pb-2">Flexible and friendly
                    environments</li>
                <li class="font-static-18 font-weight-normal font-static-black pt-2 pb-2">Great opportunity to work on
                    many exciting projects with seniors</li>
                <li class="font-static-18 font-weight-normal font-static-black pt-2 pb-2">You will be also given the
                    opportunity to work on the live projects individually</li>
            </ul>
        </div>
        <div class="apply-btn text-center">
            <a href="#" class="bg-blue btn btn-primary font-static-18 font-static-white font-weight-500"
                data-bs-toggle="modal" data-bs-target="#applymodal">Apply</a>
        </div>
    </div>
</section>

<div class="modal fade" id="applymodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <!-- <div class="loading" id="loader">Loading&#8230;</div> -->

    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <a href="#" class="modal-close" data-bs-dismiss="modal"><img src="assets/images/modal-close.svg"
                    alt="Close-Modal"></a>
            <div class="modal-body p-0 m-0">
                <h3 class="mb-4">Job Application Form</h3>


                <form method="post" id="upload-image-form" enctype="multipart/form-data">
                    @csrf



                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Name *</label>
                        <input type="text" class="application-form form-control" id="applyname" name="applyname"
                            aria-describedby="emailHelp">
                            <span role="alert" class="applynameerror text-danger">Please Enter Valid Name.</span>

                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Email *</label>
                        <input type="email" class="application-form form-control" id="applyemail" name="applyemail">
                        <span role="alert" class="applyemailerror text-danger">Please Enter Valid Email.</span>

                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Mobile Number *</label>
                        <input type="text" class="application-form form-control" id="applynumber" name="applynumber">
                        <span role="alert" class="applynumbererror text-danger">Please Enter Valid PhoneNumber.</span>

                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Upload CV *</label>
                        <input type="file" class="application-form form-control" id="image-input" name="file">
                        <span role="alert" class="applyfileeerror text-danger">Please Enter Valid file.</span>

                    </div>

                    <div class="apply-btn text-center">
                        <button type="submit"
                            class="bg-blue btn btn-primary font-static-18 font-static-white font-weight-500">Submit</button>
                        <button type="button" class="btn btn-primary bg-blue font-static-18 font-weight-500"
                            data-bs-dismiss="modal">Close</button>
                    </div>
                    <div id="sendjob">Your Message send successfully.</div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
$(document).ready(function() {
    $('#applymodal').on('hidden.bs.modal', function() {
        $(".applyemailerror").hide();
        $(".applynumbererror").hide();
        $(".applynameerror").hide();
        $(".applyfileeerror").hide();
        $("#sendjob ").hide();
    });
    $('#loader').hide();
    $(".applyemailerror").hide();
    $(".applynumbererror").hide();
    $(".applynamererror").hide();
    $(".applyfileeerror").hide();
    $("#sendjob ").hide();

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


    $('#upload-image-form').submit(function(e) {
        var applyname = $("#applyname").val();
        var applyemail = $("#applyemail").val();
        var applynumber = $('#applynumber').val();
        var file = $('#image-input').val();

        $('#loader').show();
        e.preventDefault();
        var invalid = applyvalidation(applyname, applyemail, applynumber, file);
        if (invalid == 1) {
            $('#loader').hide();
            $('#sendjob').css('display', 'none');
            return false;
        }
        let formData = new FormData(this);
        $('#image-input-error').text('');

        $.ajax({
            type: 'POST',
            url: route('saveapplycareer'),
            data: formData,
            contentType: false,
            processData: false,
            success: (response) => {
                if (response) {

                    this.reset();

                    $("#sendjob").show();
                    $('#loader').hide();

                }
            },
            error: function(response) {
                $('#loader').hide();

                $('#image-input-error').text(response.responseJSON.errors.file);
            }

        });

        function applyvalidation(applyname, applyemail, applynumber, file) {

            z = 0;
            $(".applynameerror").hide();
            $(".applyemailerror").hide();
            $(".applynumbererror").hide();
            $(".applyfileeerror").hide();
            checkname = applyname.trim();
            var letters1 = /^[a-zA-Z-,]+(\s{0,1}[a-zA-Z-, ])*$/;
            if (applyname == '' || letters1.test(applyname) == false || checkname.length <= 0) {
                z = 1;
                $(".applynameerror").show();
            }
            var regex = /^[a-zA-Z0-9\-_]+(\.[a-zA-Z0-9\-_]+)*@[a-z0-9]+(\-[a-z0-9]+)*(\.[a-z0-9]+(\-[a-z0-9]+)*)*\.[a-z]{2,4}$/;
            if (applyemail == '' || regex.test(applyemail) == false) {
                z = 1;
                $(".applyemailerror").show();
            }
            var regx1 = /^[6-9]\d{9}$/;
            if (applynumber == '' || regx1.test(applynumber) == false) {
                z = 1;
                $(".applynumbererror").show();
            }
            myfile = $('#image-input').val();
                var ext = $('#image-input').val().split(".").pop().toLowerCase();
            if (file == '' || $.inArray(ext, ["doc","pdf",'docx']) == -1) {
                z = 1;
                $(".applyfileeerror").show();
            }

            return z;

        }
    });
});
</script>
<script>
$('.multiple-items').slick({
    infinite: true,
    slidesToShow: 5,
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
                slidesToShow: 3,
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

new WOW().init();
</script>
@endsection
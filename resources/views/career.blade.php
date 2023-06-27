@extends('layout.content')

<!---------------------------------------------------------- header section end ---------------------------------------------------------->



<!---------------------------------------------------------- Top Slider section start ---------------------------------------------------------->
@section('topslider')

<section class="career-slider parallax-slide" id="parallax1">
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
                                <li><a class="dropdown-item" href="#">Job Vacancies</a></li>
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
        <h1 class="font-static-48 font-weight-600 font-static-white wow fadeInUp animated" data-wow-duration="1s" data-wow-delay=".2s">Career at iRoid</h1>
        <p class="font-static-20 font-weight-400 font-static-white wow fadeInUp animated" data-wow-duration="1s" data-wow-delay=".2s">We’re looking for a talented employee</p>
    </div>
</section>
@endsection

@section('content')

<section class="opportunities-section">

    <div class="container">
        <div class="who-we-title">
            <h2 class="font-static-36 font-static-blue font-weight-600 text-center">Exciting career <span class="font-static-36 font-static-black font-weight-600">opportunities</span></h2>
            <p class="font-static-18 font-static-gray font-weight-normal text-center">Are you ready to join our team?</p>
        </div>
        <div class="row">
            @foreach ($career as $key=>$val)
            <div class="col-12 col-sm-12 col-md-6 col-lg-4 mt-5">
                @php
                $class='animate__fadeInUp';
                $key=$key%3;
                if(($key+1)%3==0){
                $class='animate__fadeInUp';
                }elseif(($key+1)%2==0){
                $class='animate__fadeInUp';
                }
                @endphp
                <div class="vacancy-header {{$class}} wow animated" data-wow-duration="1s" data-wow-delay=".2s">
                    <span class="font-static-16 font-static-black font-weight-normal">{{$val->address}}</span>
                    <div class="job-title">
                        @php
                        $titleArray=explode(' ',$val->title);
                        @endphp
                        <!-- <input type="hidden" id="careerid"> -->
                        <h2 class="font-static-24 font-static-black font-weight-500">{{str_replace(end($titleArray),'',$val->title)}}<br>{{ end($titleArray) }}</h2>
                        <div class="number-opening text-center">
                            <div class="numbering bg-blue">
                                <p class="font-static-24 font-weight-normal font-static-white">{{$val->openings}}</p>
                            </div>
                            <small>Opening(s)</small>
                        </div>
                    </div>
                    <div class="job-details">
                        <h4 class="font-static-16 font-weight-600 font-static-black">Experience:</h4>
                        <p class="font-static-18 font-weight-normal fonbt-static-black">{!! strip_tags($val->experience) !!}</p>
                    </div>
                    <div class="job-details">
                        <h4 class="font-static-16 font-weight-600 font-static-black">Technical Skills:</h4>
                        @if(strlen($val->technicalskills) >= 100)
                        <p class="font-static-18 font-weight-normal fonbt-static-black"><?php echo htmlspecialchars_decode(substr(trim($val->technicalskills), 0, 99)); ?><a href="javascript:void(0)" onclick="careerdata({{$val->id}})" style="text-decoration: none;color: #337AB7;">...</a></p>
                        @else
                        <p class="font-static-18 font-weight-normal fonbt-static-black"><?php echo htmlspecialchars_decode(substr(trim($val->technicalskills), 0, 99)) ?> </p>
                        @endif
                    </div>
                    <div class="job-details">
                        <h4 class="font-static-16 font-weight-600 font-static-black">Optional Skills:</h4>
                        @if(strlen($val->optionalskills) >= 100)
                        <p class="font-static-18 font-weight-normal fonbt-static-black"><?php echo htmlspecialchars_decode(substr(trim($val->optionalskills), 0, 99)) ?><a href="javascript:void(0)" onclick="careerdata({{$val->id}})" style="text-decoration: none; color: #337AB7;">...</a></p>
                        @else
                        <p class="font-static-18 font-weight-normal fonbt-static-black"><?php echo htmlspecialchars_decode(substr(trim($val->optionalskills), 0, 99)) ?> </p>
                        @endif
                    </div>
                    <div class="view-btn">
                        <a href="javascript:void(0)" onclick="careerdata({{$val->id}})" class="bg-blue btn btn-primary font-static-18 font-static-white font-weight-500">View Details</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!---------------------------------------------------------- Amazing Facts section end ---------------------------------------------------------->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <a href="#" class="modal-close" data-bs-dismiss="modal"><img src="assets/images/modal-close.svg" alt="Close Icon"></a>


            <div class="modal-body">
                <h3 id="title"></h3>
                <div class="job-details">
                    <h4 class="textsmall">Experience:</h4>
                    <p class="text-dark ps-4" id="experience"></p>
                </div>
                <div class="job-details">
                    <h4 class="textsmall">Salary:</h4>
                    <p class="text-dark ps-4" id="salary"></p>
                </div>
                <div class="job-details">
                    <h4 class="textsmall">Technical Skills:</h4>
                    <p class="text-dark ps-4" id="technical"></p>
                </div>
                <div class="job-details">
                    <h4 class="textsmall">Optional Skills:</h4>
                    <p class="text-dark ps-4" id="optional"></p>
                </div>
                <div class="job-details">
                    <h4 class="textsmall">Other Skills:</h4>
                    <p class="text-dark ps-4" id="otherskills"></p>

                </div>
                <div class="job-details">
                    <h4 class="textsmall">Qualification:</h4>
                    <p class="text-dark ps-4" id="qualification"></p>
                </div>
                <div class="job-details">
                    <h4 class="textsmall">Benefits:</h4>
                    <p class="text-dark ps-4" id="benefits"></p>
                </div>
                <div class="apply-btn text-center">
                    <a href="#" onclick="findjobid()" class="bg-blue btn btn-primary font-static-18 font-static-white font-weight-500" data-bs-toggle="modal" data-bs-target="#applymodal">Apply</a>
                </div>

            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="applymodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <a href="#" class="modal-close" data-bs-dismiss="modal"><img src="assets/images/modal-close.svg" alt="Close Icon"></a>
            <div class="modal-body p-0 m-0">
                <h3 class="mb-4">Job Application Form</h3>

                <form method="post" id="upload-image-form" enctype="multipart/form-data">
                    @csrf

                    <input type="hidden" id="careerid" name="careerid">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Name *</label>
                        <input type="text" class="application-form form-control" id="applyname" name="applyname" aria-describedby="emailHelp">
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
                        <button type="submit" class="bg-blue btn btn-primary font-static-18 font-static-white font-weight-500">Submit</button>
                        <button type="button" class="btn btn-primary bg-blue font-static-18 font-weight-500" data-bs-dismiss="modal">Close</button>
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
    new WOW().init();
</script>
<script>
    $('#loader').hide();
       
    $(".job-details ul li").addClass('intro');

    function careerdata(id) {



        $('#exampleModal').modal('show');

        $.ajax({

            type: 'GET',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: route('careerpagebyid', id),
            dataType: 'JSON',
            data: {
                'id': id,
            },

            success: function(results) {
                $('#careerid').val(id);
                $('#title').append(results.data.title);
                $('#experience').append(results.data.experience);
                $('#salary').append(results.data.salary);
                $('#technical').append(results.data.technicalskills);
                $('#optional').append(results.data.optionalskills);
                $('#otherskills').append(results.data.otherskills);
                $('#qualification').append(results.data.qualification);
                $('#benefits').append(results.data.benefits);
            }
        });
        $("#title").html('');
        $("#experience").html('');
        $("#salary").html('');
        $("#technical").html('');
        $("#optional").html('');
        $("#qualification").html('');
        $("#benefits").html('');
        $('#otherskills').html('');

    }
</script>
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
        $(".applynameerror ").hide();
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

                if (file == '' || $.inArray(ext, ["doc", "pdf", 'docx']) == -1) {
                    z = 1;
                    $(".applyfileeerror").show();
                }

                return z;

            }
        });
    });
</script>

@endsection
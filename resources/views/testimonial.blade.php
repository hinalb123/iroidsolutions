@extends('layout.content')


@section('topslider')

<section class="testimonials-slider parallax-slide" id="parallax1">
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
                                    (Business)</a> <a class="font-static-16 font-weight-400  font-static-white d-block" target="_blank"  href="//api.whatsapp.com/send?phone=91 90238 68898">+ 91
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
                            <a class="nav-link font-static-18 font-static-gray  {{ isset($page) && in_array($page, ['testimonialpage']) ? 'naactive' : '' }}" href="#">Testimonials</a>
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
        <h1 class="font-static-48 font-weight-600 font-static-white wow fadeInUp animated" data-wow-duration="1s" data-wow-delay=".2s">Testimonials</h1>
        <p class="font-static-20 font-weight-400 font-static-white wow fadeInUp animated" data-wow-duration="1s" data-wow-delay=".2s">Our Client’s Testimonials is Our Real Award</p>

    </div>
</section>
@endsection
@section('content')

<section class="video-testimonials bg-white">
    <div class="who-we-title">
        <h2 class="font-static-36 font-static-black font-weight-600 text-center"> <span class="font-static-36 font-static-blue font-weight-600">Video</span> Testimonials</h2>
        <p class="font-static-18 font-static-gray font-weight-normal text-center">What Clients Says Our About Company?</p>
    </div>

    <div class="container">

        <div class="video-grid">
            @foreach($testimonial as $val)
            <div class="client-video wow fadeInUp animated" data-wow-duration=".8s" data-wow-delay=".2s" data-cat="app">
                <div class="clients-show-video">
                    <img src="{{url(Storage::url($val->thumbnail))}}" alt="Testimonial{{$val->id}}" class="lazy">
                    <a href="#Popupone" class="play-icon video-testimonial" data-id="poponeid{{$val->id}}" id="poponeid{{$val->id}}" data-pk="{{$val->videolink}}" >
                        <img src="assets/images/play-video.svg" alt="Play Video" class="lazy">
                    </a>
                </div>
                <div class="client-details">
                    <div class="clients-name">
                        <h5 class="font-static-20 font-static-white font-weight-500">{{$val->clientname}}</h5>
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
                                <image id="image0_36:{{$val->id}}" width="220" height="157" src="" xlink:href="{{ URL('assets/img/country/'.strtolower($val->country_data->code).'.png') }}" class="" />
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
<!---------------------------------------------------------- Video Testimonials section start ---------------------------------------------------------->
<section class="client-testimonial mb-5">
    <div class="container">
        <div class="who-we-title">
            <h2 class="font-static-36 font-static-black font-weight-600 text-center"> <span class="font-static-36 font-static-blue font-weight-600">Client</span> Testimonials</h2>
            <p class="font-static-18 font-static-gray font-weight-normal text-center">Have a look what our clients have to say about working with us.</p>
        </div>

        <div class="card-columns">
            @foreach($clientdes as $key=>$val)
            @php $rand=rand(10,100); @endphp
            @if($rand%2==0)
            <div class="custom-card">
                <div class="card bg-blue card-blue">
                    <div class="card-body clients-feedbacks ">
                        <p class="font-static-white">{!! html_entity_decode ($val->description) !!}</p>
                    </div>
                </div>
                <div class="client-details">
                    @if($val->profilepic)
                    <div class="client-img">
                        <img src="{{url(Storage::url($val->profilepic))}}" alt="Clients" class="lazy">
                    </div>
                    @else
                    <div class="client-img">
                        <img src="assets/images/avatar.svg" alt="Clients" class="lazy">
                    </div>
                    @endif
                    <div class="clients-name">
                        <h5 class="font-static-22 font-static-blue font-weight-600 ">{{$val->name}}</h5>
                        <p class="font-static-16 font-static-black font-weight-normal m-0 p-0">{{$val->position}}</p>
                    </div>
                </div>
            </div>

            @else

            <div class="custom-card">
                <div class="card bg-white card-white">
                    <div class="card-body clients-feedbacks1">
                        <p class="font-static-18 font-weight-400">{!! html_entity_decode($val->description) !!}</p>
                    </div>
                </div>
                <div class="client-details">
                    @if($val->profilepic)
                    <div class="client-img">
                        <img src="{{url(Storage::url($val->profilepic))}}" alt="Clients" class="lazy">
                    </div>
                    @else
                    <div class="client-img d-none">
                        <img src="{{url(Storage::url($val->profilepic))}}" alt="Clients" class="lazy">
                    </div>
                    @endif

                    <div class="clients-name">
                        <h5 class="font-static-22 font-static-blue font-weight-600 ">{{$val->name}}</h5>
                        <p class="font-static-16 font-static-black font-weight-normal m-0 p-0">{{$val->position}}</p>
                    </div>
                </div>
            </div>
            @endif



            @endforeach
        </div>
    </div>
</section>


<div id="Popupone" class="modal fade popup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered p-0">
        <div class="modal-content p-0">

            <iframe id="PopupOne" width="800" height="550"  frameborder="0" allowfullscreen>
            </iframe>
        </div>
    </div>
</div>


@endsection
@section('scripts')

<script>
    $(document).ready(function() {

        $(".clients-feedbacks p ").addClass("font-static-18 font-static-white font-weight-400");
        $(".clients-feedbacks1 p ").addClass("font-static-18 font-weight-400");
    });

    // function modalOpen(e){
    //     data=$('#'+e).attr('data-pk');
    //     $('#PopupOne').attr('src',data);
    //     $('#Popupone').modal('show');
    // }
    $('.video-testimonial').click(function(){
        var url=$(this).attr('data-pk');
        $('#PopupOne').attr('src',url);
        $('#Popupone').modal('show');
    })

    

    
</script>



@endsection
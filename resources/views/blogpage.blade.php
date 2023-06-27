<!----- header section start ----->
@extends('layout.content')

@section('topslider')
<section class="blog-slider parallax-slide" id="parallax1">
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


    <div class="slider-container">
        <h1 class="font-static-48 font-weight-600 font-static-white wow fadeInUp animated" data-wow-duration="1s" data-wow-delay=".2s">The iRoid Blogs</h1>
        <p class="font-static-20 font-weight-400 font-static-white wow fadeInUp animated" data-wow-duration="1s" data-wow-delay=".2s">Read insights on Information technology</p>

    </div>
</section>

@endsection
@section('content')

<section class="blog-section portfolio-section">
    @routes
    <div class="container">
        <div class="company-portfolio">
            <div class="blog-filter ">
                <div class="col-lg-9 col-md-9">
                    <ul id="filters" class="clearfix justify-content-start float-left change">
                        <li><span class="filter active1 filtercat" data-filter="{{ BlogCategoryFilterName() }}" data-filterId="-1" onclick="fetchdata('','',-1)">All</span></li>


                        @foreach ($blogcategory as $val)


                        <li><span class="filter filtercat" data-filter=".{{ strtolower($val->category) }}" data-filterId="{{$val->id}}" onclick="fetchdata('','',{{$val->id}})">{{ $val->category }}</span></li>
                        <li><span class="filters d-none filtercat">{{ $val->id }}</span></li>




                        @endforeach

                    </ul>
                </div>
                <div class="col-lg-3 col-md-3">
                    <!-- <div class="search float-right">
                    <input type="text" placeholder="Search. . ." class="form-control" id="search">
                    <img src="assets/images/search.svg" alt="search" class="d-none d-lg-none d-xl-none" />
                </div> -->

                    <div class="p-1 bg-light  shadow-sm mb-4 mt-4 ">
                        <div class="input-group">
                            <input type="search" id="search" placeholder="What're you searching for?" aria-describedby="button-addon1" class="form-control border-0 bg-light">
                            <div class="input-group-append">
                                <button id="button-addon1" type="submit" class="btn btn-link " style="color: #337ab7 !important;"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="portfoliolist">

                @php $categoryArr = explode(",",$val->categoryName); $categoryName = ''; @endphp
                @foreach ($categoryArr as $category)
                @php $categoryName .= $category." "; @endphp
                @endforeach




            </div>
            <div class="text-center mb-3">
                <input type="button" value="previous" data-pageNo="0" class="btn btnprevious buttontype" onclick="fetchdata('','prev')">
                <input type="button" value="next" data-pageNo="1" class="btn btnnext buttontype" onclick="fetchdata('','next')">

            </div>
        </div>


    </div>
</section>
<!-- blog section end -->
@endsection

@section('scripts')
<script type="text/javascript">
    $("#search").keyup(function() {
        var text = $("#search").val();
        $("#portfoliolist").html('');
        fetchdata(text, '', '-1')
    });



    $(".filtercat").click(function() {


        $(".filtercat").removeClass("active");
        $(this).addClass("active");

    });

    // $(function() {

    //     var filterList = {

    //         init: function() {

    //             // MixItUp plugin
    //             // http://mixitup.io
    //             $('#portfoliolist').mixItUp({
    //                 selectors: {
    //                     target: '.portfolio',
    //                     filter: '.filter'
    //                 },
    //                 load: {
    //                     filter: '{{ BlogCategoryFilterName() }}'
    //                 }
    //             });

    //         }

    //     };


    //     filterList.init();

    // });
    $(document).ready(function() {
        fetchdata(text = '', '', -1)
        $('.filter').on('click', function() {

            $('.filter').removeClass('active1');
        });


    });

    var text = $("#search").val();
    // var buttontype=$(".buttontype").val();

    function fetchdata(text = '', buttontype = '', categoryid) {
        $(".filtercat" + categoryid).removeClass("active");


        $(this).addClass("active");
        page = 1;
        if (buttontype == 'prev') {

            var page = $(".btnprevious").attr('data-pageNo');
            $(".filter").each(function() {
                if ($(this).hasClass('active')) {
                    categoryid = $(this).attr('data-filterId');

                }
            });
        } else if (buttontype == 'next') {

            $(".filter").each(function() {
                if ($(this).hasClass('active')) {
                    categoryid = $(this).attr('data-filterId');

                }
            });
            var page = $(".btnnext").attr('data-pageNo');
        }


        $.ajax({
                url: "{{ route('bloagpage') }}" + "?page=" + page,
                type: 'get',
                datatype: 'html',
                data: {
                    text: text,
                    categoryid: categoryid
                }
            })
            .done(function(data) {
                // console.log('data', data);

                if (data.last_page == data.current_page && data.prev_page_url == null) {
                    $(".btnnext").hide();
                    $(".btnprevious").hide();
                }
                if (data.last_page > data.current_page || data.prev_page_url == null) {
                    if (data.next_page_url) {
                        nextUrl = parseInt(data.current_page) + 1;
                        prevUrl = parseInt(data.current_page) - 1;
                        $(".btnnext").attr('data-pageNo', nextUrl);
                        $(".btnprevious").attr('data-pageNo', prevUrl);
                    }

                    $(".btnnext").show();
                    $(".btnprevious").prop('disabled', true);


                }

                if (data.next_page_url == null) {
                    $(".btnnext").hide();
                }
                if (data.next_page_url) {

                    nextUrl = parseInt(data.current_page) + 1;
                    prevUrl = parseInt(data.current_page) - 1;
                    console.log("hello")

                    $(".btnnext").show();
                    $(".btnnext").attr('data-pageNo', nextUrl);
                    $(".btnprevious").attr('data-pageNo', prevUrl);
                    $(".btnprevious").prop('disabled', true);
                    $(".btnnext").prop('disabled', false);


                }

                if (data.prev_page_url) {
                    $(".btnprevious").show();
                }

                if (data.next_page_url == null && data.last_page == data.current_page) {
                    previousurlUrl = parseInt(data.current_page) - 1;

                    $(".btnnext").prop('disabled', true);
                    $(".btnprevious").prop('disabled', false);
                    $(".btnprevious").attr('data-pageNo', previousurlUrl);
                    // $(".btnprevious").prop('disabled', false);
                    $(".btnnext").prop('disabled', true);

                }

                //    $('#portfoliolist').html('');
                data = data.data;


                if (data.length > 0) {
                    html = '';
                    for (i = 0; i < data.length; i++) {

                        var description = data[i].description;
                        var description1 = description.replace(/^\s+|\s+$/gm, '');



                        if (data[i].description.length > 100) {

                            var decs = description1.slice(0, 200) + '...';
                            decs = decs.replace(/<\/?[^>]+(>|$)/g, "");

                        } else {
                            decs = data[i].description;
                        }


                        // html += `<div class="portfolio ${data[i].categoryName.toLowerCase()}" data-cat="app" style="display: inline-block;" data-bound="">
                        //             <div class="blog-card">

                        //                 <div class="blog-img">
                        //                     <a href="blog-detailid/${data[i].slug}">   <img src="{{asset('storage/${data[i].thumbnail}')}}" alt="Blog"></a>
                        //                 </div>

                        //                 <h3><a href="blog-detailid/${data[i].slug}">${data[i].title}</a></h3>
                        //                 <ul class="justify-content-start change">
                        //                         <li><img src="assets/images/admin.svg" alt="admin"> ${data[i].blogusers.username}</li>
                        //                         <li><img src="assets/images/date.svg" alt="date"> ${data[i].blogdate}</li>
                        //                         <li><img src="{{url('assets/images/Calander.png')}}" alt="date"> ${data[i].time} read</li>
                        //                 </ul>

                        //                 <a href="blog-detailid/${data[i].slug}" style="text-decoration:none;"> <p>${decs}</p></a>

                        //                 <a href="blog-detailid/${data[i].slug}" style="text-decoration:none;color:#337ab7;" >Read More <img src="assets/images/next.svg"
                        //                                             alt="Next"></a>

                        //             </div>
                        //         </div>`

                        html += `  
                        <div class="portfolio ${data[i].categoryName.toLowerCase()}" data-cat="app" style="display: inline-block;" data-bound="">
                        <div class="container1">
                                        <div class="square">
                                        <a href="blog-detailid/${data[i].slug}" style="text-decoration: none;">    <img src="{{asset('storage/${data[i].thumbnail}')}}" class="mask" ></a>
                                           
                                        <a href="blog-detailid/${data[i].slug}" style="text-decoration: none;">     <div class="h1">${data[i].title}</div></a>
                                        <a href="blog-detailid/${data[i].slug}" style="text-decoration: none;">    
                                        <div class="startdate">
                                            <ul class="justify-content-start ">
                                                <li><img src="assets/images/admin.svg" alt="admin"> ${data[i].blogusers.username}</li>
                                                <li><img src="assets/images/date.svg" alt="date"> ${data[i].blogdate}</li>
                                                <li><img src="{{url('assets/images/Calander.png')}}" alt="date"> ${data[i].time} </li>
                                        </ul>
                                        </div></a>
                                        <a href="blog-detailid/${data[i].slug}" style="text-decoration: none;">   
                                            <p>${decs}</p>
                                        <div></a>
                                        
                                        <a href="blog-detailid/${data[i].slug}" style="text-decoration: none;
    color: #337ab7;
    padding-left: 18px;" >Read More <img src="assets/images/next.svg"
                                                                    alt="Next"></a>

                                       
                                        </div>
                                        </div>
                                 </div>
                                 </div>
                                 `


                    }
                    $('#portfoliolist').html(html);

                } else {
                    html = '';
                    html += `<div class="text-center ">Blog not available</div>`;
                    $(".btnnext").hide();
                    $(".btnprevious").hide();
                    $('#portfoliolist').html(html);
                }

            });
    }
</script>
@endsection
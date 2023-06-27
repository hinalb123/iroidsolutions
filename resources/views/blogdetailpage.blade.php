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
                                <img src="{{asset('assets/images/header-linkdin.svg')}}" alt="Linkdin logo">
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="https://www.facebook.com/iroidsolutions/">
                                <img src="{{asset('assets/images/header-facebook.svg')}}" alt="Facebook logo">
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="https://www.youtube.com/channel/UCgwfPp_d4qgD6l9vGvxwvgw/videos">
                                <img src="{{asset('assets/images/header-youtube.svg')}}" alt="Youtube logo">
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="https://www.instagram.com/iroid_solutions/">
                                <img src="{{asset('assets/images/header-instagram.svg')}}" alt="Instagram logo">
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="https://twitter.com/weareiroid">
                                <img src="{{asset('assets/images/header-twitter.svg')}}" alt="Twitter logo">
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="header-contact">
                    <ul>
                        <li class="font-static-16 font-weight-500 font-static-white d-flex align-items-center call">
                            <img src="{{asset('assets/images/whatsapp.svg')}}" alt="Call">
                            <div class="font-static-16 font-weight-400  font-static-white ps-2">
                                <a class="font-static-16 font-weight-400  font-static-white d-block" target="_blank" href="//api.whatsapp.com/send?phone=91 77788 69939">+ 91 77788 69939
                                    (Business)</a> <a class="font-static-16 font-weight-400  font-static-white d-block" target="_blank" href="//api.whatsapp.com/send?phone=91 90238 68898">+ 91
                                    90238 68898 (HR)</a>
                            </div>
                        </li>

                        <li class="font-static-16 font-weight-500 font-static-white d-flex align-items-center call">
                            <img src="{{asset('assets/images/gmail.svg')}}" alt="Call">
                            <a href="javascript:void(0)" class="font-static-16 font-weight-400  font-static-white ps-2">
                                <span onclick="window.open('mailto:business@iroidsolutions.in');">business@iroidsolutions.in (Business)</span><br><span onclick="window.open('mailto:hr@iroidsolutions.in');"> hr@iroidsolutions.in (HR)</span>
                            </a>
                        </li>

                        <li class="font-static-16 font-weight-500 font-static-white d-flex align-items-center">
                            <a href="skype:daxeshpatel7224?chat" target="_blank"> <img src="{{asset('assets/images/skype.svg')}}" alt="Skype"></a>
                            <a href="skype:daxeshpatel7224?chat" target="_blank" class="font-static-16 font-weight-400 font-static-white ps-2">
                                daxeshpatel7224
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
            <nav class="navbar navbar-expand-lg navbar-light bg-white">
                <a class="navbar-brand" href="{{route('homepage')}}">
                    <img src="{{asset('assets/images/header-logo.svg')}}" alt="Best IT company in surat - iRoid ">
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
                                <img src="{{asset('assets/images/menu.svg')}}" alt="navbar-menu">
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!----- header section end ----->

    <!----- Top Slider section start ----->

    <div class="slider-container">
        <h1 class="font-static-48 font-weight-600 font-static-white wow fadeInUp animated blogdeatil" data-wow-duration="1s" data-wow-delay=".2s">{{ $data->title}}</h1>
    </div>
</section>
@endsection

@section('content')


<section class="blog-section portfolio-section side-bar">

    <div class="container">
        <div class="company-portfolio col-10 col-lg-10 col-sm-12 col-md-12 m-auto" id="company-portfolio">
            <div class="mt-5">

                <div class="row">

                    <div class="col-12 col-sm-12 col-md-12 col-lg-10">

                        <div class="blog-details">
                            <!-- style="max-width: 990px;" -->
                            <div class="details-wrapper mt-2 description">
                                @routes
                                <ul class="justify-content-start change">
                                    <li><img src="https://iroidsolutions.com/assets/images/admin.svg" alt="admin"> &nbsp;{{ $data->blogusers->username }}</li>
                                    <li class=""><img src="https://iroidsolutions.com/assets/images/date.svg" alt="date"> &nbsp;{{ date('d M, Y', strtotime($data->created_at)) }}</li>
                                    <li class="test" data-toggle="tooltip" data-placement="top" title="Avg reading time"><img src="{{url('assets/images/Calander.png')}}" alt="time"> &nbsp;{{$data->time}}

                                    </li>

                                </ul>
                                <div class="blog-details-img mt-2">
                                    <img src="{{ $data->coverimage ? url(Storage::url($data->coverimage)) : url(Storage::url($data->thumbnail)) }}" alt="Blog Details" class="w-100">
                                </div>
                                <h2 style="font-weight: 700;margin-top: 18px;">{{ $data->title}}</h2>
                                <p> {!! $data->description !!}</p>
                            </div>


                            <div class="leave-reply">
                                <h2>Leave a Reply </h2>
                                <p>Your email address will not be published.</p>
                                <form id="commentForm">
                                    @routes
                                    @csrf
                                    <div class="blog-form">
                                        <div class="mb-4">
                                            <input type="text" name="name" id="name" placeholder="Name" class="form-control">
                                            <span role="alert" class="namecommenterror text-danger">Please Enter valid name.</span>

                                        </div>
                                        <div class="mb-4">
                                            <input type="email" name="email" id="email" placeholder="Email" class="form-control">
                                            <span role="alert" class="emailcommenterror text-danger">Please Enter valid email.</span>

                                        </div>
                                        <div class="mb-4">
                                            <textarea name="comment" id="comment" cols="30" rows="10" type="text" placeholder="Comment" class="form-control"></textarea>
                                            <span role="alert" class="commenterror text-danger">Please Enter valid comment.</span>

                                        </div>
                                        <div class="mb-4">
                                            <button type="button" class="btn btn-primary" onclick="addComment(0,'comment')">Post Comment</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="comment-section">
                                <h2>{{ count($comments)}} Comments</h2>

                                @if (count($comments) > 0)
                                @foreach ($comments as $comment)


                                <div class="user-comment{{$comment->parent_comment_id}} usercomment">

                                    <!-- <div class="user-img" id="profileImage">
                                                    <img src="https://iroidsolutions.com/assets/images/user-comment-two.png" alt="User">
                                                </div> -->

                                    <div class="user-img" style="background:#337ab7">
                                        <div class="text-white text-center" style="font-size: 30px;transform: translateY(9%);">{{ ucfirst($comment->name[0])}}</div>
                                    </div>
                                    <div class="user-show-comment">
                                        <span>{{ $comment->name }} {{ $comment->created_at->format('M d, Y') }}</span>
                                        <p style="white-space: pre-wrap;">{{ $comment->comment }}</p>
                                        <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#applymodal" onclick="add({{$comment->id}});">Reply</a>
                                    </div>
                                </div>

                                @if($comment->replies != "")

                                @foreach ($comment->replies as $reply)

                                <div class="user-comment usercomment ml-5 " style="margin-left: 50px;">

                                    <div class="user-img" style="background:#337ab7">
                                        <div class="text-white text-center" style="font-size: 30px;transform: translateY(9%);">{{ ucfirst($reply->name[0])}}</div>
                                    </div>
                                    <div class="user-show-comment">
                                        <span>{{ $reply->name }} {{ $reply->created_at->format('M d, Y') }}</span>
                                        <p style="white-space: pre-wrap;">{{ $reply->comment }}</p>
                                        <!-- <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#commentreply" onclick="add({{$comment->id}});">Reply</a> -->
                                    </div>
                                </div>
                                @endforeach
                                @endif

                                @endforeach

                                @endif


                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 mb-3">
                                @if(count($recentPosts) > 0)

                                <hr>
                                <h3 class="mt-5">Recent Post</h3>


                                @foreach ($recentPosts as $post)

                                <div class="blog-post-list clearfix">
                                    <a href="{{ route('blogdetail', $post->slug)  }}" class="a-unset" style="text-decoration: none;color: unset;">
                                        <div class="blog-post">
                                            <div class="post-list">
                                                <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                                                    <p style="margin-right: 5px;font-weight: 700;font-size: 24px !important;font-family: Work Sans;color:black;line-height: 35.19px;">{{$post->title}}</p>
                                                    <p style="font-weight:500;font-size: 18px;color: black;margin-bottom: 0px;">{{$post->blogusers->username}}</p>
                                                    <p style="font-weight:500;font-size: 18px;color: black;margin-bottom: 0px;">{{ date('d M / Y', strtotime($post->created_at)) }}</p>
                                                </div>
                                                <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                                                    <p style="overflow: hidden;display: -webkit-box;-webkit-line-clamp: 5;-webkit-box-orient: vertical;margin-right: 7%;font-weight: 400;font-size: 18px !important;font-family: Work Sans;color: black;line-height: 30.46px;"><?php echo strip_tags($post->description); ?></p>
                                                </div>
                                                <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                                                    <div class="post-img ">
                                                        <img src="{{ url(Storage::url($post->thumbnail)) }}" alt="Blog Post">
                                                    </div>
                                                </div>



                                            </div>
                                            <hr>
                                        </div>


                                    </a>

                                </div>
                                @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                    <div id="left" class="left col-lg-2 d-none d-lg-block d-xl-block" style="    margin-top: 50px;    text-align: -webkit-center;
">
                   <div id="vue" class="close">
                   <a href="{{route('blogdata')}}" id="link"> <img src="{{url('assets/images/Close button.svg')}}"  class="close" data-toggle="tooltip" data-placement="top" title="Close Screen">
                   </a></div>
                        <div id="vue" class="ct-socials1">
                            <p id="bodyData" class="sharecolour1"></p>
                            <img src="{{url('assets/images/hand.svg')}}" @click="clapClick()" id="butsave" alt="clap_icon" class="clap">
                        </div>
                        <div class="hovercheck" style="">
                            <div class="ct-socials2">
                                <p class="sharecolour ml-5">Share</p><img src="{{url('assets/images/Group 13.svg')}}" alt="social" class="social_icon " onclick="myFunction()">
                            </div>

                            <ul class="ct-socials ms-4 mb-3 social ">

                                <li>

                                </li>

                                <li>
                                    <a id="twitter" class="mb-2"><img src="{{url('assets/images/twitter.svg')}}" alt="Twitter logo"></a>
                                </li>
                                <li>
                                    <a href="" id="fb" class="mb-2"><img src="{{url('assets/images/facebook.svg')}}" alt="Facebook logo"></a>
                                </li>

                                <li>
                                    <a href="" id="linkdin" class="mb-2"><img src="{{url('assets/images/linkdin.svg')}}" alt="Linkdin logo"></a>
                                </li>
                                <li>
                                    <a href="" id="pintrest" class="mb-2"><img src="{{url('assets/images/pintrest1.svg')}}" alt="Pintrest logo"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>



        </div>
    </div>
    </div>

</section>

<div class="modal fade" id="applymodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <a href="#" class="modal-close" data-bs-dismiss="modal"><img src="{{asset('assets/images/modal-close.svg')}}" alt="Close Icon"></a>
            <div class="modal-body p-0 m-0">
                <h3 class="mb-4">Comment Reply</h3>

                <form id="commentsubmit" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" id="commentid" name="commentid">
                    <input type="hidden" id="blogid" name="blogid">
                    <div class="mb-3">
                        <label for="exampleInputName" class="form-label ">Name</label>
                        <input type="text" class="application-form form-control" id="applyname" name="applyname" aria-describedby="emailHelp">
                        <span role="alert" class="namereplycommenterror text-danger">Please Enter valid name.</span>
                    </div>


                    <div class="mb-3">
                        <label for="exampleInputName" class="form-label ">Email</label>
                        <input type="email" class="application-form form-control" id="applyemail" name="applyemail">
                        <span role="alert" class="emailreplycommenterror text-danger">Please Enter valid email.</span>

                    </div>

                    <div class="mb-3">
                        <label for="exampleInputName" class="form-label ">Comment</label>
                        <textarea cols="3" rows="2" type="text" class="application-form form-control" id="applycomment" name="applycomment"></textarea>
                        <span role="alert" class="commentreplyerror text-danger">Please Enter valid comment.</span>
                    </div>

                    <div class="apply-btn text-center mb-3">
                        <button type="button" class="bg-blue btn btn-primary font-static-18 font-static-white font-weight-500" onclick="addComment(1,'commentreply')">Submit</button>
                        <button type="button" class="btn btn-primary bg-blue font-static-18 font-weight-500 closemodal" data-bs-dismiss="modal">Close</button>
                    </div>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/stickyfill/1.1.4/stickyfill.min.js"></script> -->

<script>
    $(".hovercheck ").hover(function() {
        $('.social').show();
    }, function() {
        $('.social').hide();
    });
    $(function() {
        $('[data-toggle="tooltip"]').tooltip()
    })

    
    jQuery("hr").last().hide();

    $.fn.isOnScreen = function () {
    var win = $(window);
    var viewport = {
        top: win.scrollTop(),
        left: win.scrollLeft()
    };
    viewport.right = viewport.left + win.width();
    viewport.bottom = viewport.top + win.height();
    var bounds = this.offset();
    bounds.right = bounds.left + this.outerWidth();
    bounds.bottom = bounds.top + this.outerHeight();
    return (!(viewport.right < bounds.left || viewport.left > bounds.right || viewport.bottom < bounds.top || viewport.top > bounds.bottom));
};
$(window).scroll(function () {
    if ($('#footer').isOnScreen() == true) {
        $(".ct-socials2").hide();
            $(".ct-socials").hide();
            $(".close").hide();
    }
    else{
        $(".ct-socials2").show();
            $(".close").show();
    }
});


    // $(window).scroll(function() {
    //     var hT = $('#footer').offset().top,
    //         hH = $('#footer').outerHeight(),
    //         wH = $(window).height(),
    //         wS = $(this).scrollTop();
    //     if (wS > (hT + hH - wH)) {

    //         $(".ct-socials2").hide();
    //         $(".ct-socials").hide();
    //         $(".close").hide();
    //     } else {
    //         $(".ct-socials2").show();
    //         $(".close").show();
    //     }
    // });



    // var stickyElements = document.getElementsByClassName('');

    // for (var i = stickyElements.length - 1; i >= 0; i--) {
    //     Stickyfill.add(stickyElements[i]);
    //     console.log("length",stickyElements.length);
    //     console.log("i",i)


    // }



    $(".namecommenterror").hide();
    $(".emailcommenterror").hide();
    $(".commenterror").hide();
    $(".namereplycommenterror").hide();
    $(".commentreplyerror").hide();
    $(".emailreplycommenterror").hide();


    function add(id) {


        localStorage.setItem("parentcommentid", id);

    }

    $(".modal-close").click(function() {
        localStorage.removeItem("parentcommentid");

    });
    $(".closemodal").click(function() {
        localStorage.removeItem("parentcommentid");

    });

    function addComment(parent_comment_id = 0, commenttype) {

        if (commenttype == 'comment') {

            var name = $("#commentForm #name").val();
            var email = $("#commentForm #email").val();
            var comment = $('#commentForm #comment').val();
            var parent_comment_id = 0;
            var error = validationcomment(name, email, comment);
            if (error == 1) {
                $('#loader').hide();

                return false;

            }

        } else {

            var name = $("#commentsubmit #applyname").val();
            var email = $("#commentsubmit #applyemail").val();
            var comment = $('#commentsubmit #applycomment').val();
            var parent_comment_id = localStorage.getItem("parentcommentid");
            var error = validationcomment1(name, email, comment);
            if (error == 1) {
                $('#loader').hide();

                return false;

            }

        }




        $.ajax({
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: route('addComment'),
            dataType: 'JSON',
            data: {

                'name': name,
                'email': email,
                'comment': comment,
                'blog_id': "{{  $data->id }}",
                'parent_comment_id': parent_comment_id
            },

            success: function(results) {
                console.log('results', results);
                $('#loader').hide();
                $("#name").val('');
                $("#email").val('');
                $("#comment").val('');
                $('#applymodal').modal('hide');
                var html = '';
                localStorage.removeItem("parentcommentid");

                html += '<div class="user-comment' + results + ' usercomment ">' +
                    '<div class="user-img text-center" style="background:#337ab7">' +
                    '<div class="text-white" style="font-size: 30px;transform: translateY(9%);">' + name.charAt(0).toLocaleUpperCase() + '</div>' +
                    '</div>' +
                    '<div class="user-show-comment">' +
                    '<span>' + name + ' ' + moment().format("MMM D, YYYY") + '</span>' +
                    '<p>' + comment + '</p>' +
                    '<a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#applymodal">Reply</a>' +
                    '</div>' +
                    '</div>';

                $(html).insertAfter(".comment-section h2");

                location.reload();


            }

        });
    }

    function validationcomment(name, email, comment) {
        z = 0;
        $(".namecommenterror").hide();
        $(".emailcommenterror").hide();
        $(".commenterror").hide();



        checkname = name.trim();
        checkmessage = comment.trim();
        if (name == '' || $.isNumeric(name) || checkname.length <= 0) {
            z = 1;
            $(".namecommenterror").show();
            $(".namereplycommenterror").hide();
        }
        if (comment == '' || checkmessage.length <= 0) {
            z = 1;
            $(".commenterror").show();
            $(".commentreplyerror").hide();
        }
        var regex = /^[a-zA-Z0-9\-_]+(\.[a-zA-Z0-9\-_]+)*@[a-z0-9]+(\-[a-z0-9]+)*(\.[a-z0-9]+(\-[a-z0-9]+)*)*\.[a-z]{2,4}$/;
        if (email == '' || regex.test(email) == false) {
            z = 1;
            $(".emailcommenterror").show();
            $(".emailreplycommenterror").hide();
        }


        return z;

    }

    function validationcomment1(name, email, comment) {
        z = 0;
        $(".namecommenterror").hide();
        $(".emailcommenterror").hide();
        $(".commenterror").hide();
        $(".namereplycommenterror").hide();
        $(".commentreplyerror").hide();
        $(".emailreplycommenterror").hide();


        checkname = name.trim();
        checkmessage = comment.trim();
        if (name == '' || $.isNumeric(name) || checkname.length <= 0) {
            z = 1;
            $(".namecommenterror").hide();
            $(".namereplycommenterror").show();
        }
        if (comment == '' || checkmessage.length <= 0) {
            z = 1;
            $(".commenterror").hide();
            $(".commentreplyerror").show();
        }
        var regex = /^[a-zA-Z0-9\-_]+(\.[a-zA-Z0-9\-_]+)*@[a-z0-9]+(\-[a-z0-9]+)*(\.[a-z0-9]+(\-[a-z0-9]+)*)*\.[a-z]{2,4}$/;
        if (email == '' || regex.test(email) == false) {
            z = 1;
            $(".emailcommenterror").hide();
            $(".emailreplycommenterror").show();
        }


        return z;

    }

    const appDiv = document.getElementById('app');

    const fb = document.getElementById('fb');
    fb.addEventListener('click', shareOnFacebook);


    function shareOnFacebook() {
        var name = window.location.href

        console.log(name)

        const navUrl =
            'https://www.facebook.com/sharer/sharer.php?u=' + name;
        // 'https://www.linkedin.com/sharing/share-offsite?url='+'https://demo.iroidsolutions.com/iroid-website/public/blog/iroid-solutions-hailed-as-one-of-the-leading-app-developers-in-india-by-clutch';

        window.open(navUrl, '_blank');
    }

    const linkdin = document.getElementById('linkdin');
    linkdin.addEventListener('click', shareOnLinkdin);



    function shareOnLinkdin() {
        var name = window.location.href

        console.log(name)

        const navUrl = 'https://www.addtoany.com/add_to/linkedin?linkurl=' + name;
        // const navUrl =
        // 'https://www.linkedin.com/shareArticle?mini=true&url=' + name;
        // 'https://www.linkedin.com/sharing/share-offsite?url='+'https://demo.iroidsolutions.com/iroid-website/public/blog/iroid-solutions-hailed-as-one-of-the-leading-app-developers-in-india-by-clutch';

        window.open(navUrl, '_blank');
    }

    const tweet = document.getElementById('twitter');
    tweet.addEventListener('click', shareOnTwitter);

    function shareOnTwitter() {
        var name = window.location.href

        console.log(name)
        const navUrl =
            'https://twitter.com/intent/tweet?text=' + name;
        window.open(navUrl, '_blank');
    }


    const pintrest = document.getElementById('pintrest');
    pintrest.addEventListener('click', shareOnpintrest);

    function shareOnpintrest() {
        var name = window.location.href

        console.log(name)
        const navUrl =
            'http://pinterest.com/pin/create/button/?url=' + name;
        window.open(navUrl, '_blank');
    }

    // $('#butsave').hover(function(){
    //     document.getElementById("butsave").src="{{asset('assets/images/hand1.svg')}}";

    // });

    $("#butsave").hover(function() {
        document.getElementById("butsave").src = "{{asset('assets/images/hand1.svg')}}";
    }, function() {
        document.getElementById("butsave").src = "{{asset('assets/images/hand.svg')}}";
    });

    var count = 1;

    // function getCookie(user) {
    //     var cookieArr = document.cookie.split(";");
    //     for (var i = 0; i < cookieArr.length; i++) {
    //         var cookiePair = cookieArr[i].split("=");
    //         if (user == cookiePair[0].trim()) {
    //             return decodeURIComponent(cookiePair[1]);
    //         }
    //     }
    //     return null;
    // }
    
  

    $('#butsave').on('click', function() {
       
        // document.cookie = "name=" + '{{$data->id}}';
        document.getElementById("butsave").src = "{{asset('assets/images/hand3.svg')}}";
        // var user = getCookie("name");
        if(localStorage.getItem('name'+'{{$data->id}}')){
            console.log("allready exit");
           
            document.getElementById("butsave").disabled = true;
            return false;
        }
        localStorage.setItem('name'+'{{$data->id}}',true);

        clapclick();
        // console.log(user)
        // if (user == null) {
        //     document.cookie = "name=" + '{{$data->id}}';
        //     console.log("if")
        //     clapclick();

        // } else {
        //     console.log("else")
        // }

        function clapclick() {


            $.ajax({
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: route('blogclap'),
                dataType: "JSON",
                data: {


                    'blog_id': "{{$data->id}}",
                    'countblog': count

                },

                success: function(data) {
                    var resultData = data;
                    console.log(resultData);


                    $("#bodyData").html(resultData.count);
                }



            });


            $.ajax({
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: route('blogclapshow'),
                dataType: "JSON",
                data: {


                    'blog_id': "{{$data->id}}",
                    'countblog': count

                },

                success: function(data) {

                    var resultData = data;
                    console.log("resultdata", resultData.count)


                    $("#bodyData").html(resultData.count);
                }



            });
        }

        $(".clap-btn").addClass("clap-active");


    });

    $.ajax({
        type: 'POST',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: route('blogclapshow'),
        dataType: "JSON",
        data: {


            'blog_id': "{{$data->id}}",
            'countblog': count

        },

        success: function(data) {

            var resultData = data;
            console.log("resultdata", resultData.count)


            $("#bodyData").html(resultData.count);
        }



    });

//     $(".blog-post-list").click(function(){
     
//         var cookies = document.cookie.split(";");

// for (var i = 0; i < cookies.length; i++) {
//     var cookie = cookies[i];
//     var eqPos = cookie.indexOf("=");
//     var name = eqPos > -1 ? cookie.substr(0, eqPos) : cookie;
//     document.cookie = name + "=;expires=Thu, 01 Jan 1970 00:00:00 GMT";
// }
//     });

</script>
@endsection
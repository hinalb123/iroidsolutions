<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="HTML,CSS,XML,JavaScript">
  <meta name="author" content="John Doe">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <link href="{{ asset('/css/main.css') }}" rel="stylesheet">
  <!-- <script src="{{asset('/js/revslider.js')}}"></script> -->
  

 
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans:wght@300&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:ital@1&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans:wght@100&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <link rel='shortcut icon' type='image/x-icon' href='images/favicon.png' style="width:50%;"/>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans:wght@700&display=swap" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="magicscroll/magicscroll.css"/>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script type="text/javascript" src="magicscroll/magicscroll.js"></script>
<?php
  if($page === 'home')
  {
    $title = "";
  }
  else if($page === 'aboutus'){
    $title = "ABOUT US - ";
  }
  else if($page === 'contact'){
    $title = "CONTACT - ";
  }
  else if($page === 'viewcart'){
    $title = "Cart - ";
  }
  else if($page === 'product'){
    $title = "Products - ";
  }
?>
  <title> {{$title}} The Dribble Bridge</title>
</head>


<body>
  @if($view_name!='cart')
    <script>
        localStorage.removeItem('removeid');
        localStorage.removeItem('removeqty');
    </script>
  @endif
<header>
  <div class="topnav d-block d-xl-none d-lg-none d-md-block">
    <img src="{{url('/images/logo.png')}}" alt="Image" class="logo" />
    <div id="myLinks">
      <a class="nav-item nav-link text-white mr-5" href="{{route('home')}}">HOME</a>
      <!-- <a class="nav-item nav-link text-white mr-5" href="{{route('product')}}">PRODUCT</a> -->
      <a class="nav-item nav-link text-white mr-5" href="{{route('aboutus')}}">ABOUTUS</a>
      <a class="nav-item nav-link text-white mr-5" href="{{route('contact')}}">CONTACT</a>
      <a class="nav-item nav-link text-white mr-5" href="{{route('viewcart')}}">CHECKOUT</a>
    </div>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()" style="background: transparent;">
      <i class="fa fa-bars icontoggle"></i>
    </a>
  </div>

  
  
  
</header>
  <div class="content-wrapper">

  <nav class="navbar navbar-expand-lg d-none d-xl-block d-md-none d-lg-block nav-sticky" id="navbar">
  <div class="container py-3">
    <a class="navbar-brand" href="{{route('home')}}"><img src="{{url('/images/logo.png')}}" alt="Image"  class="stickylogo d-none d-xl-block d-md-block d-lg-block"/></a>
    <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button> -->
    <div class="collapse navbar-collapse " id="navbarSupportedContent" >
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item mr-3">
          <a class="nav-link {{ isset($page) && in_array($page, ['home']) ? 'active' : '' }} " aria-current="page" href="{{route('home')}}">HOME</a>
        </li>
        <!-- <li class="nav-item mr-3">
          <a class="nav-link {{ isset($page) && in_array($page, ['product']) ? 'active' : '' }} " aria-current="page" href="{{route('product')}}">PRODUCT</a>
        </li> -->
        <li class="nav-item mr-3">
          <a class="nav-link  {{ isset($page) && in_array($page, ['aboutus']) ? 'active' : '' }} " aria-current="page" href="{{route('aboutus')}}">ABOUTUS</a>
        </li>
        <li class="nav-item mr-3">
          <a class="nav-link  {{ isset($page) && in_array($page, ['contact']) ? 'active' : '' }} " aria-current="page" href="{{route('contact')}}">CONTACT</a>
        </li>
        <li class="nav-item mr-3">
          <a class="nav-link  {{ isset($page) && in_array($page, ['viewcart']) ? 'active' : '' }} "  aria-current="page" href="{{route('viewcart')}}">CHECKOUT</a>
        </li>
        <li class="nav-item mr-3">
          <a class="nav-link   {{ isset($page) && in_array($page, ['viewcart']) ? 'active' : '' }} text-white " href="{{route('viewcart')}}">BUYNOW            
          </a>
        </li>
        <li class="nav-item"><a href="{{route('viewcart')}}"><i class="fas fa-shopping-cart text-white nav-link m-0 p-0 "  style="margin-left: -17px !important;padding-top: 10px !important;"></i></a>
        </li>
        <li class="nav-item"><a href="{{route('viewcart')}}"><span id="result" class="totalqty "></span></a></li>
      </ul>
    </div>
  </div>
</nav>


    @yield('content')

  </div>
  <!-- <div class="content-wrapper">

  @yield('text')

</div> -->
  <!-- Footer -->
  <footer class="page-footer font-small teal pt-4 footer" id="footer">

    <!-- Footer Text -->
    <div class="container text-left text-md-left">

      <!-- Grid row -->
      <div class="row">

        <!-- Grid column -->
        <div class="col-md-4 mt-md-0 mt-3">

          <!-- Content -->
          <h5 class="text-uppercase text-white" style="font-size: 18px;
    line-height: 23px;
    font-weight: 400;">AVAILABLE AT</h5>
          <p class="text-uppercase" style="color:#a6a6a6">LIST OF LOCATIONS:</p>

          <p><a href="{{route('home')}}"><img src="{{url('/images/logo.png')}}" alt="" class="footerlogo" style="cursor: pointer;" /></a></p>

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none">

        <!-- Grid column -->
        <div class="col-md-4 mb-md-0 mb-3">

          <!-- Content -->
          <h4 class="text-uppercase  text-white" style="font-size: 18px;
    line-height: 23px;
    font-weight: 400;">ABOUT US</h4>
          <p class="" style="color:#a6a6a6;font-size:16px; line-height:30px;">The ultimate assist is dedicated to delivering skill development products designed to give your game the ultimate assist.</p>

        </div>
        <!-- Grid column -->
        <hr class="clearfix w-100 d-md-none pb-3">
        <div class="col-md-4 mb-md-0 mb-3">

          <!-- Content -->
          <h4 class="text-uppercase text-white" style="font-size: 18px;
    line-height: 23px;
    font-weight: 400;">CONTACT US</h4>

          @routes
          @csrf
          <!-- <span class="error" style="display:none;">invalid</span> -->
          <input type="hidden" id="errorimg1" name="errorimg1" value="{{url('images/contact_form_error.png')}}">
          <span role="alert" class="wpcf7-not-valid-tip error">The field is required.</span>
          <span> <input type="text" placeholder="Name" name="name" id="name" class="col-12 py-1 rounded-0 border-0 form-control" autocomplete="off" /></span>
          <div class="row pt-2 pb-2">
            <div class="col-xl-6 col-sm-12 col-md-12 col-lg-12">
              <span role="alert" class="wpcf7-not-valid-tip emailerror">The field is required.</span>
              <!-- <span class="emailerror" style="display:none;"></span> -->

              <input type="text" placeholder="Email" name="email" id="email" style="font-size:14px;" class=" rounded-0 mr-0 pr-0 border-0 w-100 form-control" autocomplete="off">
            </div>
            <div class="col-xl-6 col-sm-12 col-md-12 col-lg-12 phoneinput">
              <span role="alert" class="wpcf7-not-valid-tip phoneerror">The field is required.</span>

              <input type="text" placeholder="Phone" name="phone" id="phone" style="font-size:14px;" class=" rounded-0 border-0 w-100 form-control" autocomplete="off" >
            </div>
          </div>



          <span role="alert" class="wpcf7-not-valid-tip commenterror">The field is required.</span>
          <textarea rows="2" autocomplete="off" name="comment" id="comment" placeholder="Comment/Question" style="font-size:12px;" class="col-12 rounded-0 border-0" ></textarea>

          <div class="py-2">
            <input type="submit" value="Send" id="msgback" class="form-control col-xl-2 col-md-3 col-lg-3 col-sm-3 col-2 rounded-0 text-white border-0" onclick="addcontact()" style="background-color:#f8931f;font-size:15px;">

            <div class="wpcf7-response-output wpcf7-display-none wpcf7-mail-sent-ok" style="display: none;" id="successmsg">Thank you for your message. It has been sent. </div>

          </div>


        </div>
      </div>
      <!-- Grid row -->
    </div>
    <!-- Footer Text -->


    <!-- Copyright -->
    
    <div class="line"></div>
    <div class="container">
      <div class="row m-0 p-0">
        <div class="col-xl-6 col-sm-12 col-md-12 col-lg-12 py-3 mr-5">
          <div class="footer-copyright py-3">
            &copy; 2017 The Dribble Bridge. All Rights Reserved.
            <button class="rounded-0 border-0 ml-5 " name="button" id="button" style="height:42px;width:42px;background-color: #f8931f;"><i class='fas fa-angle-up' style="background-color: #f8931f;color: #000000;"></i>
          </div>
        </div>
      </div>
    </div>  
    <!-- Copyright -->

  </footer>
  <!-- Footer -->
</body>
<script>
  $("#button").on("click", function() {
    // $("body").scrollTop(0);

    $('body').animate({
      scrollTop: 0
    }, 500);

  });
</script>
<script>
  // Get the modal
  var modal = document.getElementById("myModal");

  // Get the image and insert it inside the modal - use its "alt" text as a caption
  var img = document.getElementById("myImg");
  var search = document.getElementById("search");
  var modalImg = document.getElementById("img01");
  var captionText = document.getElementById("caption");
  img.onclick = function() {
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
  }
  search.onclick = function() {
    modal.style.display = "block";
    modalImg.src = $('#myImg').attr('src');
    captionText.innerHTML = this.alt;
  }

  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName("close")[0];

  // When the user clicks on <span> (x), close the modal
  span.onclick = function() {
    modal.style.display = "none";
  }
</script>

<script>
  // Get the modal
  var modal = document.getElementById("myModal");
  var search1 = document.getElementById("search1");

  // Get the image and insert it inside the modal - use its "alt" text as a caption
  var img = document.getElementById("myImg1");
  var modalImg = document.getElementById("img01");
  var captionText = document.getElementById("caption");
  img.onclick = function() {
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
  }
  search1.onclick = function() {
    modal.style.display = "block";
    modalImg.src = $('#myImg1').attr('src');
    captionText.innerHTML = this.alt;
  }
  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName("close")[0];

  // When the user clicks on <span> (x), close the modal
  span.onclick = function() {
    modal.style.display = "none";
  }
</script>
<script>
  // Get the modal
  var modal = document.getElementById("myModal");
  var search3 = document.getElementById("search3");

  // Get the image and insert it inside the modal - use its "alt" text as a caption
  var img = document.getElementById("myImg2");
  var modalImg = document.getElementById("img01");
  var captionText = document.getElementById("caption");
  img.onclick = function() {
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
  }
  search3.onclick = function() {
    modal.style.display = "block";
    modalImg.src = $('#myImg2').attr('src');
    captionText.innerHTML = this.alt;
  }
  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName("close")[0];

  // When the user clicks on <span> (x), close the modal
  span.onclick = function() {
    modal.style.display = "none";
  }
</script>
<script>
  // Get the modal
  var modal = document.getElementById("myModal");
  var search4 = document.getElementById("search4");

  // Get the image and insert it inside the modal - use its "alt" text as a caption
  var img = document.getElementById("myImg3");
  var modalImg = document.getElementById("img01");
  var captionText = document.getElementById("caption");
  img.onclick = function() {
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
  }
  search4.onclick = function() {
    modal.style.display = "block";
    modalImg.src = $('#myImg3').attr('src');
    captionText.innerHTML = this.alt;
  }

  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName("close")[0];

  // When the user clicks on <span> (x), close the modal
  span.onclick = function() {
    modal.style.display = "none";
  }
</script>

<script type="text/javascript">
  $("#browse").click(function() {
    $('html,body').animate({
        scrollTop: $(".divShowHide").offset().top
      },
      'slow');
  });

  $("#browse1").click(function() {
    $('html,body').animate({
        scrollTop: $(".divShowHide").offset().top
      },
      'slow');
  });
</script>
<script>
  //   window.onscroll = function() {scrollFunction()};

  // function scrollFunction() {
  //   if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
  //     document.getElementById("navbar").style.top = "0";
  //   } else {
  //     document.getElementById("navbar").style.top = "-50px";
  //   }
  // }

  $('.overlytext').css('color', 'white !important');
  $('.overlay').mouseover(function() {
   
    $('.overlytext').css('color', '#f8931f !important');
  }).mouseleave(function() {
   

    $('.overlytext').css('color', 'white !important');
  });
</script>

<script>

</script>

<script>
  $(document).ready(function() {
    $("#btn").click(function() {
      $("#Outer").css('display', 'flex');
    });
  });
 
</script>

<script>
  function addcontact() {
   
    var name = $("#name").val();
    var email = $('#email').val();
    var phone = $('#phone').val();
    var comment = $('#comment').val();

    if($("#name").val()!="" || $('#email').val()!="" || $('#phone').val()!="" || $('#comment').val()!=""){
      $(".commenterror").css('display','none');
    }
    var error = validation(name, email, phone, comment);
    if (error == 1) {
      $('#successmsg').css('display','none');
      return false;
     
    }
    $.ajax({

      type: 'POST',
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      url: route('savecontact'),
      // data: {_token: CSRF_TOKEN},
      dataType: 'JSON',
      data: {
        'data': name,
        'email': email,
        'phone': phone,
        'comment': comment
      },

      success: function(results) {
        // alert("hello");
        $("#name").val('');
        $("#email").val('');
        $("#phone").val('');
        $("#comment").val('');
        $('#successmsg').show();
      }

    });
  }

  function validation(name, email, phone, comment) {
    z = 0;
    let bgimg = $('#errorimg1').val();
  $('.wpcf7-not-valid-tip').css('backgroundImage','url('+bgimg+')');

    $(".emailerror").hide();
    $(".error").hide();
    $(".phoneerror").hide();
    if (name == '' || $.isNumeric(name)) {
      z = 1;
      $(".error").show();
    }
    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if (email == '' || regex.test(email) == false) {
      z = 1;
      $(".emailerror").show();
    }
    if (phone == '' || $.isNumeric(phone) == false || phone.length != 10) {
      z = 1;
      $(".phoneerror").show();
    }
    if (comment == '') {
      z = 1;
      $(".commenterror").show();
    }
    return z;
  }
</script>
<script>
  function myFunction() {
    // var x = document.getElementById("myLinks");
    // if (x.style.display === "block") {
      $("#myLinks").toggle("slow");
    //   x.style.display = "none";
    // } else {
    //   x.style.display = "block";
    // }
  }
</script>

<script>
  document.addEventListener("DOMContentLoaded", function(){
  window.addEventListener('scroll', function() {
      if (window.scrollY > 20) {
        document.getElementById('navbar').classList.add('sticky-top');
        document.getElementById('navbar').classList.remove('nav-sticky');

        navbar_height = document.querySelector('.navbar').offsetHeight;

        $(".navbar").addClass('backcolor');
        $(".nav-link").addClass('changecolor');
        $(".stickylogo").addClass('stickylogo1');
        
      } else {
        document.getElementById('navbar').classList.remove('sticky-top');
        document.getElementById('navbar').classList.add('nav-sticky');
         // remove padding top from body
        document.body.style.paddingTop = '0';
        $(".navbar").removeClass('backcolor');
        $(".nav-link").removeClass('changecolor');
        $(".stickylogo").removeClass('stickylogo1');
      } 
  });
});


</script>
<script>
$(document).ready(function() {
 
 $(".owl-demo").owlCarousel({

     autoPlay: 3000, //Set AutoPlay to 3 seconds

     items : 1,
     itemsDesktop : [1199,3],
     itemsDesktopSmall : [979,3]

 });

});
</script>
</html>
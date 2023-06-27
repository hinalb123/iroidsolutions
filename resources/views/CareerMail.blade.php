<html>

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="John Doe">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="The iRoid Solutions is the leading Software Development company of India located in Surat.At iRoid, we pride ourselves in delivering quality in excellence through our motto, 'Quality Matters'. Our satisfied Clients will Happily testify that this statement is an apt description of iRoid.">
    <meta name="keywords" content="iRoid Company, Mobile app Development Company Surat, iroid apps, iRoid Solutions, iRoid Infotech, iroid infosol, Software Comapny, IT company,iphone app development company surat, android, ios, ipad, iroid website, web app developement, objective-c, swift, java, php, designing, quality, tablet, Surat Based IT Company in India, apple watch, outsourcing, Top Website Development  Company in Surat,   app development, CMS, android app Development Company surat, Surat website developers, Web Services, Website Design, UI & UX Designing, Ecommerce Website Development,  Website Design Company Surat, Top 10 IT Companies in Surat, Top 10 Software Companies in Surat, Best IT Company in surat, Outsourcing Website Design India, website design outsourcing and SEO company in Surat, PHP Website Design, Quality Matters, Outsource web development India">
    <meta name="copyright" content="iroid solutions">
    <meta name="language" content="ES">
    <meta name="author" content="Business, contact@iroidsolutions.com (Business)">
    <meta name="copyright" content="http://www.iroidsolutions.com">
    <meta name="reply-to" content="hr@iroidsolutions.in (HR)">
    <meta name="url" content="http://www.iroidsolutions.com">
    <meta name="identifier-URL" content="http://www.iroidsolutions.com">
    <meta property="og:url" content="http://www.iroidsolutions.com" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="iRoid Solutions" />
    <meta property="og:description" content="The iRoid Solutions is the leading Software Development company of India located in Surat.At iRoid, we pride ourselves in delivering quality in excellence through our motto, 'Quality Matters'. Our satisfied Clients will Happily testify that this statement is an apt description of iRoid." />
    <meta property="og:image" content="http://static01.nyt.com/images/2015/02/19/arts/international/19iht-btnumbers19A/19iht-btnumbers19A-facebookJumbo-v2.jpg" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@weareiroid" />
    <meta name="twitter:title" content="iRoid Solutions" />
    <meta name="twitter:description" content="The iRoid Solutions is the leading Software Development company of India located in Surat.At iRoid, we pride ourselves in delivering quality in excellence through our motto, 'Quality Matters'. Our satisfied Clients will Happily testify that this statement is an apt description of iRoid." />
    <meta name="twitter:image" content="https://farm6.staticflickr.com/5510/14338202952_93595258ff_z.jpg" />
    <link rel="apple-touch-icon" sizes="57x57" href="assets/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <title>iRoid Solutions</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/plugin.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css" />
    <link rel="stylesheet" href="assets/css/style.css?1.13">
</head>

<body>
    <h3>Hello Admin,</h3>
    @if($career['career_data']=='')
    <h3>New Job Application for Internship received from <b>{{$career['name']}}</b>.</h3>
    @else
    <h3>New Job Application for {{$career['career_data']['title']}} team member received from <b>{{$career['name']}}</b>.</h3>
    @endif
    <h3>Name: <b>{{$career['name']}}</b> </h3>
    <h3>Email : <b>{{$career['email']}}</b></h3>
    <h3>PhoneNumber : <b>{{$career['phonenumber']}}</b></h3>

    @if($career['career_data']=='')
    <h3>Job Profile : <b>Internship</b></h3>
    @else
    <h3>Job Profile : <b>{{$career['career_data']['title']}}</b></h3>
    @endif
    <h3>Cv link is here : </h3>
    <a href="{{$career['cvv']}}">{{$career['cvv']}}</a><br>

    <p><b> Thanks </b></p>
    <p><b> *This is auto generated email. Don't reply to this email.* </b></p>
</body>

</html>
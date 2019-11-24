<!-- Required meta tags -->
@php
    $contact = \App\Model\Contact::first();
@endphp
<meta charset="utf-8">
<meta name="description" content="Web Developer Portfolio ">
<meta name="keywords" content="HTML,CSS,XML,JavaScript,PHP,LARAVEL,JQUERY,MYSQL">
<meta name="author" content="RUBEL SARKER">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="icon" href="{{$contact->favicon}}" type="image/png">
<title>Rubel Sarker @yield('title') </title>
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="{{url('')}}/public/asset/public/css/bootstrap.css">
<link rel="stylesheet" href="{{url('')}}/public/asset/public/vendors/linericon/style.css">
<link rel="stylesheet" href="{{url('')}}/public/asset/public/css/font-awesome.min.css">
<link rel="stylesheet" href="{{url('')}}/public/asset/public/vendors/owl-carousel/owl.carousel.min.css">
<link rel="stylesheet" href="{{url('')}}/public/asset/public/css/magnific-popup.css">
<link rel="stylesheet" href="{{url('')}}/public/asset/public/vendors/nice-select/css/nice-select.css">
<link rel="stylesheet" href="{{url('')}}/public/asset/public/vendors/animate-css/animate.css">
<link rel="stylesheet" href="{{url('')}}/public/asset/public/vendors/flaticon/flaticon.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">

<!-- main css -->
<link rel="stylesheet" href="{{url('')}}/public/asset/public/css/style.css">
@yield('stylesheet')
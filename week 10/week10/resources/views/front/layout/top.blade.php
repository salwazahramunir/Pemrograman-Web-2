<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Home</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

    {{--  Favicons  --}}
  <link href="{{ asset('front/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('front/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    {{--  Fonts  --}}
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

   {{-- Vendor CSS Files --}}
  <link href="{{ asset('front/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('front/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('front/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('front/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
  <link href="{{ asset('front/assets/vendor/aos/aos.css') }}" rel="stylesheet">

  {{--  Template Main CSS File  --}}
  <link href="{{ asset('front/assets/css/main.css') }}" rel="stylesheet">

  {{--  =======================================================
   Template Name: Append
   Updated: Jun 20 2023 with Bootstrap v5.3.0
   Template URL: https://bootstrapmade.com/append-bootstrap-website-template/
   Author: BootstrapMade.com
   License: https://bootstrapmade.com/license/
  ========================================================  --}}
</head>

<body class="index-page" data-bs-spy="scroll" data-bs-target="#navmenu">

  {{--  Header  --}}
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
        {{--  Uncomment the line below if you also wish to use an image logo --}}
        {{--  <img src="{{ asset('front/assets/img/hero-bg.jpg') }}" alt="">  --}}
        <h1>Append</h1>
        <span>.</span>
      </a>

      {{--  Nav Menu  --}}
      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="{{ url('home') }}" class="active">Home</a></li>
          <li><a href="{{ url('about') }}">About</a></li>
          <li><a href="{{ url('dashboard') }}">Admin</a></li>
        </ul>

        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
        {{--  End Nav Menu  --}}

      <a class="btn-getstarted" href="#">Get Started</a>

    </div>
  </header>
  {{--  End Header  --}}

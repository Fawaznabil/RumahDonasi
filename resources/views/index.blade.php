<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Kind Heart Charity - Free Bootstrap 5.2.2 CSS Template</title>

    <!-- CSS FILES -->
    <link href="{{ asset('css/css/css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ asset('css/css/css/bootstrap-icons.css') }}" rel="stylesheet">

    <link href="{{ asset('css/css/css/templatemo-kind-heart-charity.css') }}" rel="stylesheet">
    <link href="{{ asset('style1.css') }}" rel="stylesheet">

    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" />
    <style type="text/css">
        .slider {
            width: 80%;
            margin: 0 auto;
        }

        .slider .card {
            width: 300px;
            height: 600px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
            text-align: right;
            padding: 17px;
        }

        .slider .card img {
            max-width: 100%;
            height: auto;
        }

    </style>

    <!--

TemplateMo 581 Kind Heart Charity

https://templatemo.com/tm-581-kind-heart-charity

-->

</head>

<body id="section_1">

    <nav class="navbar navbar-expand-lg bg-light shadow-lg">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <img src="{{ asset('assets/logo-2.png')}}" class="logo img-fluid" alt="Kind Heart Charity">
                <span>
                    Rumah Donasi
                    <small>Non-profit Organization</small>
                </span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="/">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="/about">About</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link  dropdown-toggle" href="#section_5" id="navbarLightDropdownMenuLink"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">Campaign</a>

                        <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                            <li><a class="dropdown-item" href="/campaign-bencana">Campaign Bencana</a></li>

                            <li><a class="dropdown-item" href="/campaign-pendidikan">Campaign Pendidikan</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/contact">Contact</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#section_3">Donate</a>
                    </li>
                    @if(Auth::check())
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle custom-btn custom-border-btn btn" href="#"
                            id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Akun
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/user-login/{id}">Akun Saya</a></li>
                            <li><a class="dropdown-item" href="/contact-login">Bantuan</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="/sesi/logout">Logout</a></li>
                        </ul>
                    </li>
                    @else

                    <li class="nav-item">
                        <a class="nav-link custom-btn custom-border-btn btn" href="/sign-in">Login</a>
                    </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    <main>

        <section class="hero-section hero-section-full-height">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-lg-12 col-12 p-0">
                        <div id="hero-slide" class="carousel carousel-fade slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ asset('assets/6.jpeg')}}" class="carousel-image img-fluid" alt="...">

                                    <div class="carousel-caption d-flex flex-column justify-content-end">
                                        <h1>be a Kind Heart</h1>

                                        <p>Professional charity theme based on Bootstrap 5.2.2</p>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <img src="{{ asset('assets/7.jpeg')}}" class="carousel-image img-fluid" alt="...">

                                    <div class="carousel-caption d-flex flex-column justify-content-end">
                                        <h1>Non-profit</h1>

                                        <p>You can support us to grow more</p>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <img src="{{ asset('assets/8.jpg')}}" class="carousel-image img-fluid" alt="...">

                                    <div class="carousel-caption d-flex flex-column justify-content-end">
                                        <h1>Humanity</h1>

                                        <p>Please tell your friends about our website</p>
                                    </div>
                                </div>
                            </div>

                            <button class="carousel-control-prev" type="button" data-bs-target="#hero-slide"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>

                            <button class="carousel-control-next" type="button" data-bs-target="#hero-slide"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <section class="section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-lg-10 col-12 text-center mx-auto">
                        <h2 class="mb-5">Welcome to Rumah Donasi</h2>
                    </div>



                    <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                        <div class="featured-block d-flex justify-content-center align-items-center">
                            <a href="donate.html" class="d-block">
                                <img src="{{ asset('assets/hands.png')}}" class="featured-block-image img-fluid" alt="">

                                <p class="featured-block-text">Donation<strong>Report</strong></p>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 mb-md-4">
                        <div class="featured-block d-flex justify-content-center align-items-center">
                            @auth
                            <a href="/form-campaign" class="d-block">
                                @else
                                <a href="/sign-in" class="d-block">
                            @endauth
                                <img src="{{ asset('assets/heart.png')}}" class="featured-block-image img-fluid" alt="">
                                <p class="featured-block-text"><strong>Make a </strong> Campaigner</p>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 mb-md-4">
                        <div class="featured-block d-flex justify-content-center align-items-center">
                            <a href="#section_3" class="d-block">
                                <img src="{{ asset('assets/receive.png')}}" class="featured-block-image img-fluid"
                                    alt="">

                                <p class="featured-block-text">Go <strong>Donation</strong></p>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                        <div class="featured-block d-flex justify-content-center align-items-center">
                            <a href="donate.html" class="d-block">
                                <img src="{{ asset('assets/scholarship.png')}}" class="featured-block-image img-fluid"
                                    alt="">

                                <p class="featured-block-text"><strong>Campaigner</strong> Program</p>
                            </a>
                        </div>
                    </div>


                </div>
            </div>
        </section>

        <section class="section-padding section-bg" id="section_2">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                        <img src="{{ asset('assets/logo-5.png')}}" class="custom-text-box-image img-fluid" alt="">
                    </div>

                    <div class="col-lg-6 col-12">
                        <div class="custom-text-box">
                            {{-- <h2 class="mb-2">Our Story</h2> --}}

                            <h5 class="mb-3">Apa itu Rumah Donasi ?</h5>

                            <p class="mb-0">RumahDonasi merupakan situs web yang dibangun khusus untuk mengumpulkan dana
                                bagi pasien dan masyarakat yang memiliki kemampuan finansial terbatas serta tinggal di
                                wilayah sulit dijangkau. RumahDonasi bekerja dengan menghubungkan para calon donatur dan
                                para pasien serta masyarakat membutuhkan sehingga mereka dapat memperoleh pengobatan dan
                                fasilitas pendukung lainnya yang menyeluruh.</p>
                        </div>

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="custom-text-box mb-lg-0">
                                    <h5 class="mb-3">Our Mission</h5>

                                    <p>Sed leo nisl, posuere at molestie ac, suscipit auctor quis metus</p>

                                    <ul class="custom-list mt-2">
                                        <li class="custom-list-item d-flex">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-check-lg custom-text-box-icon me-2"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z" />
                                            </svg>
                                            Charity Theme
                                        </li>

                                        <li class="custom-list-item d-flex">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-check-lg custom-text-box-icon me-2"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z" />
                                            </svg>
                                            Semantic HTML
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="custom-text-box d-flex flex-wrap d-lg-block mb-lg-0">
                                    <div class="counter-thumb">
                                        <div class="d-flex">
                                            <span class="counter-number" data-from="1" data-to="{{ $totalCampaign }}"
                                                data-speed="1000"></span>
                                            <span class="counter-number-text"></span>
                                        </div>
                                        <span class="counter-text">Campaign</span>
                                    </div>

                                    <div class="counter-thumb mt-4">
                                        <div class="d-flex">
                                            <span class="counter-number" data-from="1" data-to="{{ $totalDonasi }}"
                                                data-speed="1000"></span>
                                            <span class="counter-number-text"></span>
                                        </div>

                                        <span class="counter-text">Donations</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        {{-- <section class="about-section section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-md-5 col-12">
                        <img src="images/portrait-volunteer-who-organized-donations-charity.jpg"
                            class="about-image ms-lg-auto bg-light shadow-lg img-fluid" alt="">
                    </div>

                    <div class="col-lg-5 col-md-7 col-12">
                        <div class="custom-text-block">
                            <h2 class="mb-0">Sandy Chan</h2>

                            <p class="text-muted mb-lg-4 mb-md-4">Founding Partner</p>

                            <p>Lorem Ipsum dolor sit amet, consectetur adipsicing kengan omeg kohm tokito Professional
                                charity theme based</p>

                            <p>Sed leo nisl, posuere at molestie ac, suscipit auctor mauris. Etiam quis metus</p>

                            <ul class="social-icon mt-4">
                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-twitter"></a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-facebook"></a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-instagram"></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </section> --}}


        <section class="section-padding" id="section_3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-12 text-center mb-4">
                        <h2>Campaign Bencana </h2>
                    </div>
                </div>
            </div>
        </section>

        <div class="slider">
            @foreach ($bencana as $item )
            <div class="card" style="max-width: 330px;min-height: 700px">
                <img src="{{asset('/gambar_folder/'.$item->gambar)}}" class="custom-block-image img-fluid" alt="Card 2">
                <div class="custom-block-body" style="display: grid;grid-template-rows:90px 50px 100px">

                @auth
                <a href="/detailDonasi/{{$item->id_campaign}}" style="text-align: left; color:rgb(8, 8, 69)"><strong>{{ $item->judul }}</a></strong>
                @else
                <a href="/detailDonasilogin/{{$item->id_campaign}}" style="text-align: left; color:rgb(8, 8, 69)"><strong>{{ $item->judul }}</a></strong>
                @endauth

                    <div class="progress mt-4">
                        <div class="progress-bar" style="width: {{ $item->presentasi }}%" role="progressbar"
                            aria-valuenow="" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                    <div class="d-flex align-items-center my-2">
                        <p class="mb-0" style="text-align: left">
                            <strong style="text-align: center; color:rgb(46, 88, 152);font-size:14px">Dana
                                Terkumpul</strong><br><br>
                            <strong style="color: rgb(81, 79, 79);font-size:14px; text-align:left">
                                Rp.{{ number_format($item->total_donasi) }}</strong>
                        </p>
                        <p class="ms-auto mb-0">
                            <strong
                                style="text-align: right; color:rgb(46, 88, 152);font-size:14px;  ">Target</strong><br><br>
                            <strong style="color: rgb(81, 79, 79);font-size:14px">Rp.
                                {{ number_format($item->target) }}</strong>
                        </p>
                    </div>
                    <hr>
                    <div class="d-flex align-items-center my-2">
                        <p class="mb-0" style="color: black; font-size:15px">
                            <strong>{{ $item->namaLembaga }}</strong><br>
                        </p>

                    </div><br>

                    <div class="d-flex align-items-center my-2">
                        <p class="mb-0" style="color: rgb(197, 21, 21); font-size:12px">
                            <strong> {{ $item->sisa_hari }} Hari lagi</strong>
                        </p>
                        <p class="ms-auto mb-0" style="color:rgb(101, 101, 101);font-size:12px">
                            <strong>{{ $item->jumlah_donatur }} Donatur</strong>
                        </p>
                    </div>

                </div>

                <div class="d-flex justify-content-center">
                 @auth
                    <a href="/donate/{{$item->id_campaign}}" class="custom-btn btn">Donate now</a>
                @else
                    <a href="/sign-in" class="custom-btn btn">Donate now</a>
                @endauth
                </div>
            </div>
            @endforeach
        </div>


        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">

            <section class="section-padding" id="section_3">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-12 text-center mb-4">
                            <h2>Campaign Pendidikan</h2>
                        </div>
                    </div>
                </div>
            </section>

            <div class="slider">
                @foreach ($pendidikan as $item )
                <div class="card" style="max-width: 330px;min-height: 700px">
                    <img src="{{asset('/gambar_folder/'.$item->gambar)}}" class="custom-block-image img-fluid"
                        alt="Card 2">
                    <div class="custom-block-body" style="display: grid;grid-template-rows:90px 50px 100px">
                @auth
                <a href="/detailDonasi/{{$item->id_campaign}}" style="text-align: left; color:rgb(8, 8, 69)"><strong>{{ $item->judul }}</a></strong>
                @else
                <a href="/detailDonasilogin/{{$item->id_campaign}}" style="text-align: left; color:rgb(8, 8, 69)"><strong>{{ $item->judul }}</a></strong>
                @endauth
                        <div class="progress mt-4">
                            <div class="progress-bar" style="width: {{ $item->presentasi }}%" role="progressbar"
                                aria-valuenow="" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>

                        <div class="d-flex align-items-center my-2">
                            <p class="mb-0" style="text-align: left">
                                <strong style="text-align: center; color:rgb(46, 88, 152);font-size:14px">Dana
                                    Terkumpul</strong><br><br>
                                <strong style="color: rgb(81, 79, 79);font-size:14px; text-align:left">
                                    Rp.{{ number_format($item->total_donasi) }}</strong>
                            </p>
                            <p class="ms-auto mb-0">
                                <strong
                                    style="text-align: right; color:rgb(46, 88, 152);font-size:14px;  ">Target</strong><br><br>
                                <strong style="color: rgb(81, 79, 79);font-size:14px">Rp.
                                    {{ number_format($item->target) }}</strong>
                            </p>
                        </div>
                        <hr>
                        <div class="d-flex align-items-center my-2">
                            <p class="mb-0" style="color: black; font-size:15px">
                                <strong>{{ $item->namaLembaga }}</strong><br>
                            </p>

                        </div><br>

                        <div class="d-flex align-items-center my-2">
                            <p class="mb-0" style="color: rgb(197, 21, 21); font-size:12px">
                                <strong>{{ $item->sisa_hari}} Hari lagi</strong>
                            </p>
                            <p class="ms-auto mb-0" style="color:rgb(101, 101, 101);font-size:12px">
                                <strong>{{ $item->jumlah_donatur }} Donatur</strong>
                            </p>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        @auth
                        <a href="/donate/{{$item->id_campaign}}" class="custom-btn btn">Donate now</a>
                    @else
                        <a href="/sign-in" class="custom-btn btn">Donate now</a>
                    @endauth
                    </div>
                </div>
                @endforeach
            </div><br><br>

            <section class="cta-section section-padding section-bg">
                <div class="container">
                    <div class="row justify-content-center align-items-center">

                        <div class="col-lg-5 col-12 ms-auto">
                            <h2 class="mb-0">Berbagi Bersama<br> #RumahDonasi</h2>
                        </div>

                        <div class="col-lg-5 col-12">

                            <a href="#section_4" class="custom-btn btn smoothscroll">Bergabung bersama kita</a>
                        </div>

                    </div>
                </div>
            </section>

            <section class="news-section section-padding" id="section_5">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-12 mb-5">
                            <h2>Blogs</h2>
                        </div>

                        <div class="col-lg-7 col-12">
                            <div class="news-block">
                                <div class="news-block-top">
                                    <a href="news-detail.html">
                                        <img src="{{ asset('assets/7.jpeg')}}" class="news-image img-fluid" alt="">
                                    </a>

                                    <div class="news-category-block">
                                        <a href="#" class="category-block-link">
                                            Donation,
                                        </a>
                                        <a href="#" class="category-block-link">
                                            Bencana
                                        </a>
                                    </div>
                                </div>

                                <div class="news-block-info">
                                    <div class="d-flex mt-2">
                                        <div class="news-block-date">
                                            <p>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-calendar" viewBox="0 0 16 16">
                                                    <path
                                                        d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                                                </svg>
                                                October 12, 2036
                                            </p>
                                        </div>

                                        <div class="news-block-author mx-5">
                                            <p>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                                    <path
                                                        d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z" />
                                                </svg>
                                                By Admin
                                            </p>
                                        </div>

                                        {{-- <div class="news-block-comment">
                                        <p>
                                            <i class="bi-chat-left custom-icon me-1"></i>
                                            32 Comments
                                        </p>
                                    </div> --}}
                                    </div>

                                    <div class="news-block-title mb-2">
                                        <h4><a href="news-detail.html" class="news-block-title-link">Campaign Bencana
                                                menuju
                                                surga</a></h4>
                                    </div>

                                    <div class="news-block-body">
                                        <p>Lorem Ipsum dolor sit amet, consectetur adipsicing kengan omeg kohm tokito
                                            Professional charity theme based on Bootstrap</p>
                                    </div>
                                </div>
                            </div>

                            <div class="news-block mt-3">
                                <div class="news-block-top">
                                    <a href="news-detail.html">
                                        <img src="{{ asset('assets/6.jpeg')}}" class="news-image img-fluid" alt="">
                                    </a>

                                    <div class="news-category-block">
                                        <a href="#" class="category-block-link">
                                            Donation,
                                        </a>
                                        <a href="#" class="category-block-link">
                                            Pendidikan
                                        </a>
                                    </div>
                                </div>

                                <div class="news-block-info">
                                    <div class="d-flex mt-2">
                                        <div class="news-block-date">
                                            <p>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-calendar" viewBox="0 0 16 16">
                                                    <path
                                                        d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                                                </svg>
                                                October 20, 2036
                                            </p>
                                        </div>

                                        <div class="news-block-author mx-5">
                                            <p>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                                    <path
                                                        d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z" />
                                                </svg>
                                                By Admin
                                            </p>
                                        </div>
                                    </div>

                                    <div class="news-block-title mb-2">
                                        <h4><a href="news-detail.html" class="news-block-title-link">Campaign Pendidikan
                                                Is
                                                the best</a>
                                        </h4>
                                    </div>

                                    <div class="news-block-body">
                                        <p>Sed leo nisl, posuere at molestie ac, suscipit auctor mauris. Etiam quis
                                            metus
                                            elementum, tempor risus vel, condimentum orci</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-12 mx-auto">
                            <form class="custom-form search-form" action="#" method="post" role="form">
                                <input class="form-control" type="search" placeholder="Search" aria-label="Search">

                                <button type="submit" class="form-control">
                                    <i class="bi-search"></i>
                                </button>
                            </form>

                            <h5 class="mt-5 mb-3">Recent news</h5>

                            <div class="news-block news-block-two-col d-flex mt-4">
                                <div class="news-block-two-col-image-wrap">
                                    <a href="news-detail.html">
                                        <img src="{{ asset('assets/8.jpg')}}" class="news-image img-fluid" alt="">
                                    </a>
                                </div>

                                <div class="news-block-two-col-info">
                                    <div class="news-block-title mb-2">
                                        <h6><a href="news-detail.html" class="news-block-title-link">Food donation
                                                area</a>
                                        </h6>
                                    </div>

                                    <div class="news-block-date">
                                        <p>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-calendar" viewBox="0 0 16 16">
                                                <path
                                                    d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                                            </svg>
                                            October 16, 2036
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="news-block news-block-two-col d-flex mt-4">
                                <div class="news-block-two-col-image-wrap">
                                    <a href="news-detail.html">
                                        <img src="{{ asset('assets/2.jpeg')}}" class="news-image img-fluid" alt="">
                                    </a>
                                </div>

                                <div class="news-block-two-col-info">
                                    <div class="news-block-title mb-2">
                                        <h6><a href="news-detail.html" class="news-block-title-link">Volunteering
                                                Clean</a>
                                        </h6>
                                    </div>

                                    <div class="news-block-date">
                                        <p>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-calendar" viewBox="0 0 16 16">
                                                <path
                                                    d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                                            </svg>
                                            October 24, 2036
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="category-block d-flex flex-column">
                                <h5 class="mb-3">Categories</h5>

                                <a href="#" class="category-block-link">
                                    Donation
                                    <span class="badge">20</span>
                                </a>

                                <a href="#" class="category-block-link">
                                    Bencana
                                    <span class="badge">30</span>
                                </a>

                                <a href="#" class="category-block-link">
                                    Pendidikan
                                    <span class="badge">10</span>
                                </a>
                            </div>

                            <div class="tags-block">
                                <h5 class="mb-3">Tags</h5>

                                <a href="#" class="tags-block-link">
                                    Donation
                                </a>

                                <a href="#" class="tags-block-link">
                                    Bencana
                                </a>

                                <a href="#" class="tags-block-link">
                                    Pendidikan
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

    </main>

    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-12 mb-4">
                    <img src="images/logo.png" class="logo img-fluid" alt="">
                </div>

                <div class="col-lg-4 col-md-6 col-12 mb-4">
                    <h5 class="site-footer-title mb-3">Quick Links</h5>

                    <ul class="footer-menu">
                        <li class="footer-menu-item"><a href="#" class="footer-menu-link">Our Story</a></li>

                        <li class="footer-menu-item"><a href="#" class="footer-menu-link">Newsroom</a></li>

                        <li class="footer-menu-item"><a href="#" class="footer-menu-link">Causes</a></li>

                        <li class="footer-menu-item"><a href="#" class="footer-menu-link">Become a volunteer</a></li>

                        <li class="footer-menu-item"><a href="#" class="footer-menu-link">Partner with us</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 col-12 mx-auto">
                    <h5 class="site-footer-title mb-3">Contact Infomation</h5>

                    <p class="text-white d-flex mb-2">
                        <i class="bi-telephone me-2"></i>

                        <a href="tel: 305-240-9671" class="site-footer-link">
                            305-240-9671
                        </a>
                    </p>

                    <p class="text-white d-flex">
                        <i class="bi-envelope me-2"></i>

                        <a href="mailto:info@yourgmail.com" class="site-footer-link">
                            donate@charity.org
                        </a>
                    </p>

                    <p class="text-white d-flex mt-3">
                        <i class="bi-geo-alt me-2"></i>
                        Akershusstranda 20, 0150 Oslo, Norway
                    </p>

                    <a href="#" class="custom-btn btn mt-3">Get Direction</a>
                </div>
            </div>
        </div>

        <div class="site-footer-bottom">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-md-7 col-12">
                        <p class="copyright-text mb-0">Copyright © 2036 <a href="#">Kind Heart</a> Charity Org.
                            Design: <a href="https://templatemo.com" target="_blank">TemplateMo</a><br>Distribution:
                            <a href="https://themewagon.com">ThemeWagon</a>
                        </p>
                    </div>

                    <div class="col-lg-6 col-md-5 col-12 d-flex justify-content-center align-items-center mx-auto">
                        <ul class="social-icon">
                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-twitter"></a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-facebook"></a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-instagram"></a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-linkedin"></a>
                            </li>

                            <li class="social-icon-item">
                                <a href="https://youtube.com/templatemo" class="social-icon-link bi-youtube"></a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </footer>

    <!-- JAVASCRIPT FILES -->
    <script src="{{ asset('js/js/js/jquery.min.js')}}"></script>
    <script src="{{ asset('js/js/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('js/js/js/jquery.sticky.js')}}"></script>
    <script src="{{ asset('js/js/js/click-scroll.js')}}"></script>
    <script src="{{ asset('js/js/js/counter.js')}}"></script>
    <script src="{{ asset('js/js/js/custom.js')}}"></script>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js">
    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.slider').slick({
                dots: true,
                infinite: true,
                speed: 500,
                slidesToShow: 1,
                centerMode: true,
                variableWidth: true,
                adaptiveHeight: true,
            });
        });

    </script>

</body>

</html>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Kind Heart Charity - Free Bootstrap 5.2.2 CSS Template</title>

    <!-- CSS FILES -->
    <link href="css/css/css/bootstrap.min.css" rel="stylesheet">
    <link href="asset/css/bootstrap-icons.css" rel="stylesheet">
    <link href="asset/css/templatemo-kind-heart-charity.css" rel="stylesheet">
    <link href="style1.css" rel="stylesheet">

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
            height: 620px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
            /* text-align: center; */
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
                        <a class="nav-link click-scroll" href="/Home">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="/about-login">About</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link  dropdown-toggle" href="#section_5" id="navbarLightDropdownMenuLink"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">Campaign</a>

                        <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                            <li><a class="dropdown-item" href="/campaign-bencana-login">Campaign Bencana</a></li>

                            <li><a class="dropdown-item" href="/campaign-pendidikan-login">Campaign Pendidikan</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/contact-login">Contact</a>
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
                                    <img src="{{ asset('assets/bg1.jpg')}}" class="carousel-image img-fluid" alt="...">

                                    <div class="carousel-caption d-flex flex-column justify-content-end">
                                        <h1>Ayo Donasi</h1>

                                        <p>bersama Rumah Donasi kita bisa membantu!</p>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <img src="{{ asset('assets/bg2.jpg')}}" class="carousel-image img-fluid" alt="...">

                                    <div class="carousel-caption d-flex flex-column justify-content-end">
                                        <h1>Non-profit</h1>

                                        <p>You can support us to grow more</p>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <img src="{{ asset('assets/bg3.jpg')}}" class="carousel-image img-fluid" alt="...">

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

                                <p class="featured-block-text">Donation <strong>Report</strong></p>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 mb-md-4">
                        <div class="featured-block d-flex justify-content-center align-items-center">
                            <a href="/form-campaign" class="d-block">
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
            @if ($item->statusPengajuan === "Terverifikasi")
            <div class="card" style="max-width: 330px;min-height: 700px">
                <img src="{{asset('/gambar_folder/'.$item->gambar)}}" alt="Card 2" style="max-height: 2000px">
                <div class="custom-block-body" style="display: grid;grid-template-rows:90px 50px 100px">

                    <a href="/detailDonasi/{{$item->id_campaign}}" style="text-align: left; color:rgb(8, 8, 69)"><strong>{{ $item->judul }}</a></strong>

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
                                style="text-align: right; color:rgb(46, 88, 152);font-size:14px;">Target</strong><br><br>
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
                            <strong>{{ $item->sisa_hari }} Hari lagi</strong>
                        </p>
                        <p class="ms-auto mb-0" style="color:rgb(101, 101, 101);font-size:12px">
                            <strong>{{ $item->jumlah_donatur }} Donatur</strong>
                        </p>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <a href="/donate/{{$item->id_campaign}}" class="custom-btn btn">Donate now</a>
                </div>
            </div>
            @endif
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
                @if ($item->statusPengajuan === "Terverifikasi")
                <div class="card" style="max-width: 330px;min-height: 700px">
                    <img src="{{asset('/gambar_folder/'.$item->gambar)}}" alt="Card 2" style="max-height: 2000px">
                    <div class="custom-block-body" style="display: grid;grid-template-rows:90px 50px 100px">

                        <a href="/detailDonasi/{{$item->id_campaign}}"
                            style="text-align: left; color:rgb(8, 8, 69)"><strong>{{ $item->judul }}</a></strong>

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
                                <strong>{{ $item->sisa_hari }} Hari lagi</strong>
                            </p>
                            <p class="ms-auto mb-0" style="color:rgb(101, 101, 101);font-size:12px">
                                <strong>{{ $item->jumlah_donatur }} Donatur</strong>
                            </p>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <a href="/donate/{{$item->id_campaign}}" class="custom-btn btn">Donate now</a>
                    </div>
                </div>
                @endif
                @endforeach
            </div>

            <section class="cta-section section-padding section-bg">
                <div class="container">
                    <div class="row justify-content-center align-items-center">

                        <div class="col-lg-5 col-12 ms-auto">
                            <h2 class="mb-0">Berbagi Bersama<br> #RumahDonasi</h2>
                        </div>

                        <div class="col-lg-5 col-12">

                            <a href="#section_3" class="custom-btn btn smoothscroll">Bergabung bersama kita</a>
                        </div>

                    </div>
                </div>
            </section>

            <section class="news-section section-padding" id="section_5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-12 mb-5">
                            <h2>News</h2>
                        </div>
                        @foreach ($top1 as $data)
                        <div class="col-lg-7 col-12">
                            <div class="news-block">
                                <div class="news-block-top">
                                    <a href="">
                                        <img src="{{asset('/gambar_folder/'.$data->gambar1)}}"
                                        class="news-image img-fluid" alt="">
                                    </a>

                                    <div class="news-category-block">
                                        <a class="category-block-link">
                                            {{ $data->namaCampaigner }}
                                        </a>
                                    </div>
                                </div>

                                <div class="news-block-info">
                                    <div class="d-flex mt-2">
                                        <div class="news-block-category">
                                            <p>
                                                <i class="bi bi-list custom-icon me-1"></i>
                                                {{ $data->category }}
                                            </p>
                                        </div>

                                        <div class="news-block-date mx-5">
                                            <p>
                                                <i class="bi-calendar4 custom-icon me-1"></i>
                                                {{ $data->created_at }}
                                            </p>
                                        </div>

                                        <div class="news-block-author mx-2">
                                            <p>
                                                <i class="bi-person custom-icon me-1"></i>
                                                {{ $data->author }}
                                            </p>
                                        </div>
                                    </div>

                                    <div class="news-block-title mb-2">
                                        <h4><a href="/newsDetail/{{ $data->slug }}" class="news-block-title-link" style="font-weight: 700">
                                        {{ $data->title }}</a></h4>
                                    </div>

                                    <div class="news-block-body">
                                        <p>{{ $data->excerpt }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <div class="col-lg-4 col-12 mx-auto">
                            <h5 class="mt-5 mb-3">Recent news</h5>
                            @foreach ($top as $item)
                            <div class="news-block news-block-two-col d-flex mt-4">
                                <div class="news-block-two-col-image-wrap">
                                    <a>
                                        <img src="{{asset('/gambar_folder/'.$item->gambar1)}}" class="news-image img-fluid" alt="" style="max-width: 100px; ">
                                    </a>
                                </div>

                                <div class="news-block-two-col-info" style="margin-left:20px">
                                    <div class="news-block-title mb-2">
                                        <h6 style="font-size: 15px; font-weight:500"><a href="/newsDetail/{{ $item->slug }}" class="news-block-title-link">
                                            {{ $item->title }}</a>
                                        </h6>
                                    </div>

                                    <div class="news-block-date">
                                        <p>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-calendar" viewBox="0 0 16 16">
                                                <path
                                                    d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                                            </svg>
                                            {{ $item->created_at }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
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

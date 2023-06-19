<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Kind Heart Charity - News Listing</title>

    <!-- CSS FILES -->
    <link href="{{ asset('css/css/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/css/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/css/templatemo-kind-heart-charity.css') }}" rel="stylesheet">
    <link href="{{ asset('style1.css') }}" rel="stylesheet">
    <!--

TemplateMo 581 Kind Heart Charity

https://templatemo.com/tm-581-kind-heart-charity

-->
</head>
<form action='{{ url('detailDonasi/{id}') }}' method='post' enctype="multipart/form-data">
    @csrf

    <body>

        <nav class="navbar navbar-expand-lg bg-light shadow-lg">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <img src="{{ asset('assets/logo-2.png')}}" class="logo img-fluid" alt="">
                    <span>
                        Kind Heart Charity
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
                            <a class="nav-link click-scroll " href="/about">About</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link click-scroll dropdown-toggle" href="#section_5"
                                id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">Campaign</a>

                            <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                                <li><a class="dropdown-item" href="/campaign-bencana">Campaign Bencana</a></li>

                                <li><a class="dropdown-item" href="/campaign-pendidikan">Campaign Pendidikan</a></li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="/contact">Contact</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " href="login">Donate</a>
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

            <section class="news-section section-padding">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-7 col-12">
                            <div class="news-block">
                                <div class="news-block-top">
                                    <img src="{{asset('/gambar_folder/'.$detailDonasi->gambar)}}"
                                        class="news-image img-fluid" alt="">

                                    <div class="news-category-block">
                                        <a href="#" class="category-block-link">
                                            {{$detailDonasi->judul }}
                                        </a>
                                    </div>
                                </div>

                                <div class="news-block-info">
                                    <div class="d-flex mt-2">
                                        <div class="news-block-date">
                                            <p>

                                                <i class="bi bi-hourglass-split custom-icon me-1"></i>
                                                @foreach ($detail->where('id_campaign', $id_campaign) as
                                                $detailCampaign)
                                                {{$detailCampaign->sisa_hari}} hari lagi
                                                @endforeach


                                            </p>
                                        </div>

                                        <div class="news-block-author mx-5">
                                            <p>
                                                <i class="bi bi-people-fill custom-icon me-1"></i>
                                                @foreach ($detail->where('id_campaign', $id_campaign) as
                                                $detailCampaign)
                                                {{$detailCampaign->jumlah_donatur}} Donatur
                                                @endforeach
                                            </p>
                                        </div>
                                    </div>

                                    <div class="news-block-title mb-2">
                                        <h4>{{ $detailDonasi->judul }}</h4>
                                    </div>

                                    <div class="card bg-light">
                                        <div class="card-body">
                                            <div class="progress mt-4">
                                                @foreach ($detail->where('id_campaign', $id_campaign) as
                                                $detailCampaign)
                                                <div class="progress-bar"
                                                    style="width: {{ $detailCampaign->presentasi }}%" role="progressbar"
                                                    aria-valuenow="" aria-valuemin="0" aria-valuemax="100"></div>
                                                @endforeach
                                            </div>

                                            <div class="d-flex align-items-center my-2">
                                                <p class="mb-0">
                                                    @foreach ($detail->where('id_campaign', $id_campaign) as
                                                    $detailCampaign)
                                                    <strong>Dana Terkumpul</strong><br>
                                                    Rp {{ number_format($detailCampaign->total_donasi) }}
                                                    @endforeach
                                                </p>
                                                <p class="ms-auto mb-0">
                                                    <strong>Target</strong><br>
                                                    Rp {{ number_format($detailDonasi->target) }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="news-block-body">
                                        <p class="card-text"><strong>{!! $detailDonasi->deskripsiPenggalangan
                                                !!}</strong> </p>
                                    </div>


                                    <div class="accordion accordion-flush" id="accordionFlushExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                                    aria-expanded="false" aria-controls="flush-collapseOne">
                                                    Kabar Terbaru
                                                </button>
                                            </h2>
                                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                                data-bs-parent="#accordionFlushExample">
                                                <div class="accordion-body">
                                                    <div class="list-group">
                                                        <a class="list-group-item list-group-item-action">
                                                            @foreach ($donatur->where('id_campaign',
                                                            $id_campaign) as $item)
                                                            <div class="d-flex w-100 justify-content-between">
                                                                <h5 class="mb-1">Donasi Rp
                                                                    {{ number_format($item->total_donasi) }} </h5>
                                                                <small>3 days ago</small>
                                                            </div>

                                                            <p class="mb-1">Atas Nama :
                                                                {{ $item->nama }}</p>
                                                            <small>{{ $item->doa }}</small><br><br>
                                                            @endforeach
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><br>

                                    <form class="custom-form comment-form mt-5" action="#" method="post" role="form">
                                        <h6 class="">Doa Orang Baik</h6>
                                    </form>

                                    <div class="social-share border-top py-4 d-flex flex-wrap align-items-center">
                                    </div>
                                    @foreach ($donatur->where('id_campaign',
                                    $id_campaign) as $item)
                                    <div class="author-comment d-flex mb-4">
                                        <img src="{{ asset('assets/ava-icon-dark.png') }}"
                                            class="img-fluid avatar-image" alt="">

                                        <div class="author-comment-info ms-3">
                                            <h6 class="mb-1">{{ $item->nama }}</h6>

                                            <p class="mb-0">{{ $item->doa }}</p>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-12 mx-auto mt-4 mt-lg-0">
                            <div class="category-block d-flex flex-column">
                                <h5 class="mb-3">Para Donatur</h5>
                                <a class="category-block-link">
                                    @foreach ($donatur->where('id_campaign',
                                    $id_campaign) as $item)
                                    {{ $item->nama }}
                                    <span class="badge">Rp {{number_format($item->total_donasi )}}</span><br><br>
                                    @endforeach
                                </a>
                            </div>

                            <h5 class="mt-5 mb-3">Donasi Lainnya</h5>
                            @foreach ($top as $item)
                            <div class="news-block news-block-two-col d-flex mt-4">
                                <div class="news-block-two-col-image-wrap">
                                    <a>
                                        <img src="{{asset('/gambar_folder/'.$item->gambar1)}}"
                                            class="news-image img-fluid" alt="" style="max-width: 100px; ">
                                    </a>
                                </div>

                                <div class="news-block-two-col-info" style="margin-left:20px">
                                    <div class="news-block-title mb-2">
                                        <h6 style="font-size: 15px; font-weight:500"><a
                                                href="/newsDetail/{{ $item->slug }}" class="news-block-title-link">
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

</form>
</div>
</div>
</section>
</main>
<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-12 mb-4">
                <img src="asset/images/logo.png" class="logo img-fluid" alt="">
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
<script src="{{ asset('js/js/js/jquery.min.js') }}"></script>
<script src="{{ asset('js/js/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/js/js/jquery.sticky.js') }}"></script>
<script src="{{ asset('js/js/js/click-scroll.js') }}"></script>
<script src="{{ asset('js/js/js/counter.js') }}"></script>
<script src="{{ asset('js/js/js/custom.js') }}"></script>
<script>
    var myModal = document.getElementById('myModal')
    var myInput = document.getElementById('myInput')

    myModal.addEventListener('shown.bs.modal', function () {
        myInput.focus()
    })

</script>

</body>

</html>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Kind Heart Charity - News Listing</title>

    <!-- CSS FILES -->
    <link href="css/css/css/bootstrap.min.css" rel="stylesheet">
    <link href="asset/css/bootstrap-icons.css" rel="stylesheet">
    <link href="asset/css/templatemo-kind-heart-charity.css" rel="stylesheet">
    <link href="style1.css" rel="stylesheet">
    <!--

TemplateMo 581 Kind Heart Charity

https://templatemo.com/tm-581-kind-heart-charity

-->
</head>

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
                        <a class="nav-link" href="/Home">Donate</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle custom-btn custom-border-btn btn" href="#"
                            id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Akun
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/profile/{id}">Akun Saya</a></li>
                            <li><a class="dropdown-item" href="/contact-login">Bantuan</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="/sesi/logout">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>

        <section class="news-detail-header-section text-center">
            <div class="section-overlay"></div>

            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12">
                        <h1 class="text-white">Campaign Pendidikan</h1>
                    </div>

                </div>
            </div>
        </section>

        <section class="section-padding" id="section_3">
            <div class="container mb-5">
                <div class="row">
<<<<<<< Updated upstream
                    @foreach ($pendidikan as $item )
                    <div class="col-lg-4 col-md-6 col-12 mb-40 mb-lg-0 mt-5">
=======
                    @foreach ($data as $item)
                    @if($item->statusPengajuan == "terverifikasi")
                    <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
>>>>>>> Stashed changes
                        <div class="custom-block-wrap">
                            <img src="{{asset('/gambar_folder/'.$item->gambar)}}" class="custom-block-image img-fluid"
                                alt="">

                            <div class="custom-block">
                                <div class="custom-block-body" style="display: grid;grid-template-rows:90px 50px 100px">
                                    <a href="/detailDonasi/{{$item->id_campaign}}"
                                        style="text-align: left; color:rgb(8, 8, 69)"><strong>{{ $item->judul }}</a></strong>

                                    <div class="progress mt-4">
                                        <div class="progress-bar" style="width: {{ $item->presentasi }}%" role="progressbar" aria-valuenow=""
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>

                                    <div class="d-flex align-items-center my-2">
                                        <p class="mb-0">
                                            <strong
                                                style="text-align: center; color:rgb(46, 88, 152);font-size:14px">Dana
                                                Terkumpul</strong><br>
                                            <strong style="color: rgb(81, 79, 79);font-size:14px; text-align:left">Rp
                                                {{ $item->total_donasi }}</strong>
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
                                <a href="/sign-in" class="custom-btn btn">Donate now</a>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>

            {{-- Pagination --}}
            <div class="col-lg-4 col-12 mx-auto">
                <nav aria-label="Page navigation example">
                    <ul class="pagination pagination-lg justify-content-center mt-5">
                        {{ $pendidikan->links() }}
                    </ul>
                </nav>
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
    <script src="js/js/js/jquery.min.js"></script>
    <script src="js/js/js/bootstrap.min.js"></script>
    <script src="js/js/js/jquery.sticky.js"></script>
    <script src="js/js/js/click-scroll.js"></script>
    <script src="js/js/js/counter.js"></script>
    <script src="js/js/js/custom.js"></script>

</body>

</html>

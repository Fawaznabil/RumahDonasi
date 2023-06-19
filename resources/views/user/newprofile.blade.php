<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Kind Heart Charity - News Listing</title>

    <!-- @TODO: replace SET_YOUR_CLIENT_KEY_HERE with your client key -->
    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="SET_YOUR_CLIENT_KEY_HERE"></script>
    <!-- Note: replace with src="https://app.midtrans.com/snap/snap.js" for Production environment -->
    <!-- @TODO: replace SET_YOUR_CLIENT_KEY_HERE with your client key -->
    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="SET_YOUR_CLIENT_KEY_HERE"></script>
    <!-- Note: replace with src="https://app.midtrans.com/snap/snap.js" for Production environment -->

    <!-- CSS FILES -->
    <link href="{{ asset('css/css/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/css/css/bootstrap-icons.css') }}" rel="stylesheet">

    <link href="{{ asset('css/css/css/templatemo-kind-heart-charity.css') }}" rel="stylesheet">
    <link href="{{ asset('style1.css') }}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

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
                        <a class="nav-link click-scroll dropdown-toggle" href="#section_5" id="navbarLightDropdownMenuLink"
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
                            <li><a class="dropdown-item" href="/user-login/{id}">Akun Saya</a></li>
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
        <section class="profile-section">
            <div class="section-overlay"></div>
            <div class="container">
                <div class="main-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex flex-column align-items-center text-center">
                                        <img src="{{ asset( Auth::user()->photo ) }}" alt="Admin"
                                             width="130">
                                        <div class="mt-3">
                                            <h4> </h4>
                                            <p class="text-secondary mb-1"></p>
                                            <p class="text-muted font-size-sm"></p>
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ubahPassword{{ Auth::user()->id }}">
                                                Ubah Password
                                            </button>
                                        </div>
                                        <div class="modal fade" id="ubahPassword{{ Auth::user()->id }}" tabindex="-1" aria-hidden="true">
                                            <!--begin::Modal dialog-->
                                            <div class="modal-dialog modal-dialog-centered mw-650px">
                                                <!--begin::Modal content-->
                                                <div class="modal-content">
                                                    <!--begin::Modal header-->
                                                    <div class="modal-header">
                                                        <!--begin::Modal title-->
                                                        <h2>Ubah Password</h2>
                                                        <!--end::Modal title-->
                                                        <!--begin::Close-->
                                                        <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                                            <span class="svg-icon svg-icon-1">
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                                                    <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </div>
                                                        <!--end::Close-->
                                                    </div>
                                                    <!--end::Modal header-->
                                                    <!--begin::Modal body-->
                                                    <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                                                        <!--begin::Form-->
                                                        <form id="kt_modal_new_card_form{{ Auth::user()->id }}" class="form" action="/ubahPassword" method="post" enctype="multipart/form-data">
                                                            @csrf
                                                            <input type="hidden" value="{{ Auth::user()->id }}" name="ID_User">
                                                            <!--begin::Input group-->
                                                            <div class="d-flex flex-column mb-7 fv-row">
                                                                <!--begin::Label-->
                                                                <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                                                    <span class="">Password</span>
                                                                </label>
                                                                <!--end::Label-->
                                                                <input type="text" class="form-control form-control-solid" placeholder="{{ Auth::user()->password }}" name="password" />
                                                            </div>
                                                            <!--begin::Actions-->
                                                            <div class="text-center pt-15">
                                                                {{-- <button type="submit" class="btn btn-primary">
                                                                    <span class="indicator-label">Submit</span>
                                                                    <span class="indicator-progress">Please wait...
                                                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                                </button> --}}
                                                                <button type="submit" class="btn btn-primary">Submit</button>
                                                            </div>
                                                            <!--end::Actions-->
                                                        </form>
                                                        <!--end::Form-->
                                                    </div>
                                                    <!--end::Modal body-->
                                                </div>
                                                <!--end::Modal content-->
                                            </div>
                                            <!--end::Modal dialog-->
                                        </div>
                                    </div>
                                    {{-- <hr class="my-4">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                            <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe me-2 icon-inline"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>Website</h6>
                                            <span class="text-secondary">https://bootdey.com</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                            <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github me-2 icon-inline"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg>Github</h6>
                                            <span class="text-secondary">bootdey</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                            <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter me-2 icon-inline text-info"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>Twitter</h6>
                                            <span class="text-secondary">@bootdey</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                            <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram me-2 icon-inline text-danger"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>Instagram</h6>
                                            <span class="text-secondary">bootdey</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                            <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook me-2 icon-inline text-primary"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>Facebook</h6>
                                            <span class="text-secondary">bootdey</span>
                                        </li>
                                    </ul> --}}
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-8">
                            <div class="card">
                                <div class="card-body">

                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0" style="font-size: 20px">Nama Lengkap</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="text" class="form-control" name="name" value="{{ Auth::user()->name }}">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0" style="font-size: 20px">Email</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="text" class="form-control" name="email" value="{{ Auth::user()->email }}">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0" style="font-size: 20px">No Telepon</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="text" class="form-control"name="notelepon" value="{{ Auth::user()->notelepon }}">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0" >Alamat</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="text" class="form-control" name="alamat" value="{{ Auth::user()->alamat }}">
                                        </div>
                                    </div>
                                    {{-- <div class="row">
                                        <div class="col-sm-3"></div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="button" class="btn btn-primary px-4" value="Save Changes">
                                        </div>
                                    </div> --}}
                                </div>
                            </div>


                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="d-flex align-items-center mb-3">Laporan</h5><br>
                                <h4 style="font-size: 20px; text-align:center; color:rgb(13, 127, 89)">Donasi yang uda Terbayarkan</h4><br>
                                <div class="post d-flex flex-column-fluid" id="kt_post">
                                    <!--begin::Container-->
                                    <div id="kt_content_container" class="container-xxl">
                                        <div class="tab-content">
                                            <!--begin::Tab panel-->
                                            <div id="kt_billing_months"
                                                class="card-body p-0 tab-pane fade show active"
                                                role="tabpanel" aria-labelledby="kt_billing_months">
                                                <!--begin::Table container-->
                                                <div class="table-responsive">
                                                    <!--begin::Table-->
                                                    <table
                                                        class="table table-row-bordered align-middle gy-4 gs-9">
                                                        <thead
                                                            class="border-bottom border-gray-200 fs-6 text-gray-600 fw-bold bg-light bg-opacity-75">
                                                            <tr>
                                                                <td class="min-w-150px">Nama</td>
                                                                <td class="min-w-150px">jenis Campaign</td>
                                                                <td class="min-w-150px">Donasi</td>
                                                                <td class="min-w-150px">Total Harga</td>
                                                                {{-- <td class="min-w-150px">Status</td> --}}
                                                                {{-- <td></td> --}}
                                                            </tr>
                                                        </thead>
                                                        <tbody class="fw-semibold text-gray-600">
                                                            @foreach ($data->where('id_user',
                                                            Auth::user()->id) as $item)

                                                            <!--begin::Table row-->
                                                            <tr>
                                                                <td style="font-size: 13px; font-weight:500">
                                                                    {{ $item->nama }}
                                                                </td>
                                                                <td style="font-size: 13px; font-weight:500">
                                                                    @foreach ( $campaign as $judul)
                                                                    @if($item->id_campaign === $judul->id)
                                                                    {{ $judul->judul }}
                                                                    @endif
                                                                    @endforeach
                                                                    {{-- {{ $item->id_campaign }} --}}
                                                                </td>
                                                                <td style="font-size: 13px; font-weight:500">
                                                                    Rp.{{number_format($item->total_donasi) }}
                                                                </td>
                                                                <td style="font-size: 13px; font-weight:500">
                                                                    Rp.{{number_format($item->total_harga )}}
                                                                </td>
                                                                {{-- <td style="font-size: 13px; color: rgb(70, 161, 69)">
                                                                    {{ $item->status }}
                                                                </td> --}}
                                                            </tr>
                                                            @endforeach

                                                        </tbody>
                                                    </table>
                                                    <!--end::Table-->
                                                </div>
                                                <!--end::Table container-->
                                            </div>

                                        </div>
                                        <!--end::Tab Content-->
                                    </div>
                                    <!--end::Billing Address-->
                                </div>
                                <!--end::Container--> <br>

                                <h4 style="font-size: 20px; text-align:center; color:rgb(13, 127, 89)">Campaign</h4><br>
                                <div class="post d-flex flex-column-fluid" id="kt_post">
                                    <!--begin::Container-->
                                    <div id="kt_content_container" class="container-xxl">
                                        <div class="tab-content">
                                            <!--begin::Tab panel-->
                                            <div id="kt_billing_months"
                                                class="card-body p-0 tab-pane fade show active"
                                                role="tabpanel" aria-labelledby="kt_billing_months">
                                                <!--begin::Table container-->
                                                <div class="table-responsive">
                                                    <!--begin::Table-->
                                                    <table
                                                        class="table table-row-bordered align-middle gy-4 gs-9">
                                                        <thead
                                                            class="border-bottom border-gray-200 fs-6 text-gray-600 fw-bold bg-light bg-opacity-75">
                                                            <tr>
                                                                <td class="min-w-150px">Nama</td>
                                                                <td class="min-w-150px">Kategori</td>
                                                                <td class="min-w-150px">Judul</td>
                                                                <td class="min-w-150px">Target</td>
                                                                <td class="min-w-150px">Tanggal Penggalangan</td>
                                                                <td class="min-w-150px">Status pengajuan</td>
                                                                <td class="min-w-150px">Status Campaign</td>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="fw-semibold text-gray-600">
                                                            @foreach ($campaign->where('id_user',
                                                            Auth::user()->id) as $item)
                                                            <!--begin::Table row-->
                                                            <tr>
                                                                <td style="font-size: 13px; font-weight:500;">
                                                                    {{ $item->namaLembaga}}
                                                                </td>
                                                                <td style="font-size: 13px; font-weight:500;">
                                                                    {{ $item->kategori}}
                                                                </td>
                                                                <td style="font-size: 13px; font-weight:500;">
                                                                    {{ $item->judul}}
                                                                </td>
                                                                <td style="font-size: 13px; font-weight:500;">
                                                                    Rp.{{number_format($item->target)}}
                                                                </td>
                                                                <td style="font-size: 13px; font-weight:500">
                                                                    {{ $item->batasWaktu}}
                                                                </td>
                                                                <td style="color: rgb(112, 20, 20); font-size:13px; font-weight:600">
                                                                    {{ $item->statusPengajuan}}
                                                                </td>
                                                                <td style="color: rgb(112, 20, 20); font-size:13px; font-weight:600">
                                                                    {{ $item->statusCampaign}}
                                                                </td>
                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                    <!--end::Table-->
                                                </div>
                                                <!--end::Table container-->
                                            </div>

                                        </div>
                                        <!--end::Tab Content-->
                                    </div>
                                    <!--end::Billing Address-->
                                </div>
                            </div>
                            <!--end::Post-->
                        </div>
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
    <script src="js/js/js/jquery.min.js"></script>
    <script src="js/js/js/bootstrap.min.js"></script>
    <script src="js/js/js/jquery.sticky.js"></script>
    <script src="js/js/js/click-scroll.js"></script>
    <script src="js/js/js/counter.js"></script>
    <script src="js/js/js/custom.js"></script>
    <script>
        var myModal = document.getElementById('myModal')
        var myInput = document.getElementById('myInput')

        myModal.addEventListener('shown.bs.modal', function () {
            myInput.focus()
        })

    </script>

</body>

</html>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

     {{-- <!-- @TODO: replace SET_YOUR_CLIENT_KEY_HERE with your client key -->
     <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js"
     data-client-key="{{ config('midtrans.client_key') }}"></script>
 <!-- Note: replace with src="https://app.midtrans.com/snap/snap.js" for Production environment --> --}}


    <title>Kind Heart Charity - News Listing</title>

    <!-- CSS FILES -->

    <link href="{{ asset('css/css/css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ asset('css/css/css/bootstrap-icons.css') }}" rel="stylesheet">

    <link href="{{ asset('css/css/css/templatemo-kind-heart-charity.css') }}" rel="stylesheet">
    <link href="{{ asset('style1.css') }}" rel="stylesheet">

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
                        <a class="nav-link click-scroll " href="/about-login">About</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link click-scroll dropdown-toggle" href="#section_5"
                            id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">Campaign</a>

                        <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                            <li><a class="dropdown-item" href="/campaign-bencana-login">Campaign Bencana</a></li>

                            <li><a class="dropdown-item" href="/campaign-pendidikan-login">Campaign Pendidikan</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="/contact-login">Contact</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="/Home">Donate</a>
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

        <section class="donate-section">
            <div class="section-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-12 mx-auto">
                        <form class="custom-form donate-form" action="/checkout" method="post">
                            @csrf
                            <h3 class="mb-4" style="text-align: center">Buat Donasimu</h3><br>

                            <div class="row">
                                {{-- <div class="col-lg-12 col-12">
                                    <h5 class="mb-3">Donation Frequency</h5>
                                </div>

                                <div class="col-lg-6 col-6 form-check-group form-check-group-donation-frequency">
                                    <div class="form-check form-check-radio">
                                        <input class="form-check-input" type="radio" name="DonationFrequency"
                                            id="DonationFrequencyOne" checked>

                                        <label class="form-check-label" for="DonationFrequencyOne">
                                            One Time
                                        </label>
                                    </div>
                                </div> --}}

                                {{-- <div class="col-lg-6 col-6 form-check-group form-check-group-donation-frequency">
                                    <div class="form-check form-check-radio">
                                        <input class="form-check-input" type="radio" name="DonationFrequency"
                                            id="DonationFrequencyMonthly">

                                        <label class="form-check-label" for="DonationFrequencyMonthly">
                                            Monthly
                                        </label>
                                    </div>
                                </div> --}}

                                <div class="col-lg-12 col-12">
                                    <h5 class="mt-2 mb-3">Select an amount</h5>
                                </div>

                                {{-- <div class="col-lg-3 col-md-6 col-6 form-check-group">
                                    <div class="form-check form-check-radio">
                                        <input class="form-check-input" type="radio" id="flexRadioDefault1" name="total_donasi" value="10000">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                        10.000
                                        </label>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6 col-6 form-check-group">
                                    <div class="form-check form-check-radio">
                                        <input class="form-check-input" type="radio" for="total_donasi" name="total_donasi" value="15000"
                                            id="flexRadioDefault2">
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            15.000
                                        </label>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6 col-6 form-check-group">
                                    <div class="form-check form-check-radio">
                                        <input class="form-check-input" type="radio" for="total_donasi" name="total_donasi"
                                            id="flexRadioDefault3">
                                        <label class="form-check-label" for="flexRadioDefault3">
                                            20.000
                                        </label>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6 col-6 form-check-group">
                                    <div class="form-check form-check-radio">
                                        <input class="form-check-input" type="radio" for="total_donasi" name="total_donasi"
                                            id="flexRadioDefault4">
                                        <label class="form-check-label" for="flexRadioDefault4">
                                            30.000
                                        </label>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6 col-6 form-check-group">
                                    <div class="form-check form-check-radio">
                                        <input class="form-check-input" type="radio" for="total_donasi" name="total_donasi"
                                            id="flexRadioDefault5">
                                        <label class="form-check-label" for="flexRadioDefault5">
                                            45.000
                                        </label>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6 col-6 form-check-group">
                                    <div class="form-check form-check-radio">
                                        <input class="form-check-input" type="radio" for="total_donasi" name="total_donasi"
                                            id="flexRadioDefault6">
                                        <label class="form-check-label" for="flexRadioDefault6">
                                            50.000
                                        </label>
                                    </div>
                                </div> --}}

                                <div class=" form-check-group" style="">
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon1">Rp</span>
                                        <input type="text" class="form-control" placeholder="Custom amount"
                                            aria-label="Username" aria-describedby="basic-addon1" for="total_donasi" name="total_donasi" oninput="addComma(this)">
                                    </div>
                                </div>

                                @auth
                                <input type="text" class="form-control" placeholder="Custom amount"
                                            aria-label="Username" aria-describedby="basic-addon1" for="total_donasi" name="id_user" value="{{ Auth::user()->id }}" hidden>
                                            <input type="text" class="form-control" placeholder="Custom amount"
                                            aria-label="Username" aria-describedby="basic-addon1" for="total_donasi" name="id_campaign" value="{{ $campaign->id }}" hidden>
                                            @endauth

                                <div class="col-lg-12 col-12">
                                    <h5 class="mt-1">Personal Info</h5>
                                </div>

                                    <div class="col-lg-12 col-12 mt-2">

                                        <input type="text" name="nama" id="donation-name" class="form-control" for="nama"
                                            placeholder="Masukan Nama">

                                            <div class="form-check form-switch mt-2">
                                                <input class="form-check-input" type="checkbox" name="hide" id="flexSwitchCheckDefault">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">Sembunyikan nama saya (donasi sebagai anonim)</label>
                                              </div>
                                    </div>

                                    <div class="col-lg-12 col-12">
                                        <h5 class="mt-2">Doa di Donasi (Opsional)</h5>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Tulis doamu disini..." name="doa"></textarea>
                                    </div>

                                <button type="submit" class="form-control mt-4"  id="pay-button" >Kirim Donation</button>
                            </div>

                            </div>
                    </div>
                    </form>
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

<script>
  function addComma(input) {
  let value = input.value;

  // Menghapus semua karakter non-digit
  value = value.replace(/\D/g, '');

  // Menambahkan koma setiap 3 digit dari sebelah kiri
  value = value.replace(/\B(?=(\d{3})+(?!\d))/g, ',');

  // Mengupdate nilai input dengan nilai yang telah ditambahkan koma
  input.value = value;
}

        </script>

<script>
    // Ambil elemen checkbox dan textarea
    var checkbox = document.getElementById("flexSwitchCheckDefault");
    var textarea = document.getElementById("donation-name");

    // Tambahkan event listener untuk mendeteksi perubahan status checkbox
    checkbox.addEventListener('change', function() {
      if (this.checked) {
        // Checkbox diaktifkan
        textarea.style.display = "none";
      } else {
        // Checkbox dinonaktifkan
        textarea.style.display = "block";
      }
    });
  </script>

</body>

</html>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>
        @yield('title') - BEM FMIPA Unhas
    </title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/logokmfterbaru.png') }}" rel="icon" type="image/png">
    <link href="{{ asset('assets/img/logokmfterbaru.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,600;1,700&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">


    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

    @viteReactRefresh
    @vite(['resources/sass/app.scss', 'resources/js/app.jsx'])

    @stack('styles')
    @livewireStyles
    <!-- =======================================================
  * Template Name: UpConstruction
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <!-- ======= Header (Fixed Permanently) ======= -->
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="/" class="logo d-flex align-items-center gap-2 text-decoration-none">
                <img src="{{ asset('assets/img/logokmfterbaru.png') }}" alt="BEM FMIPA Unhas" width="160" height="40" style="max-height: 40px; width: auto;">
                <div class="d-flex flex-column text-start">
                    <span style="font-weight: 900; font-size: 17px; color: #ffffff; letter-spacing: 0.5px; line-height: 1.1;">BEM <span style="color: #FFE500;">FMIPA</span></span>
                    <span style="font-size: 10px; color: #a1a1aa; letter-spacing: 1.5px; text-transform: uppercase;">UNIVERSITAS HASANUDDIN</span>
                </div>
            </a>

            <div class="humburger">
                <input type="checkbox" id="mobileNavCheckbox" aria-label="Buka menu navigasi">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="/" class="{{ request()->is('/') ? 'active' : '' }}">Home</a></li>

                    <li class="dropdown"><a href="#" class="{{ request()->is('about*') ? 'active' : '' }}"><span>Profil BEM</span> <i
                                class="bi bi-chevron-down dropdown-indicator"></i></a>
                        <ul>
                            <li><a href="/#sambutan-ketua">Sambutan Ketua</a></li>
                            <li><a href="/#visi-misi">Visi & Misi</a></li>
                            <li><a href="/about#sejarah">Sejarah BEM</a></li>
                            <li><a href="/about/struktur">Bagan Struktur</a></li>
                            <li><a href="/about#konstitusi">Konstitusi & Pedoman</a></li>
                        </ul>
                    </li>

                    <li class="dropdown"><a href="#"><span>Bidang Kerja</span> <i
                                class="bi bi-chevron-down dropdown-indicator"></i></a>
                        <ul>
                            <li><a href="/about/inti">Struktur Inti</a></li>
                            <li><a href="/about/dewan">Dewan Mahasiswa (DPM)</a></li>
                            <li><a href="/about/pengaderan">Bidang Pengaderan</a></li>
                            <li><a href="/about/advokasi">Bidang Kajian Strategis & Advokasi</a></li>
                            <li><a href="/about/humas">Bidang Hubungan Masyarakat</a></li>
                            <li><a href="/about/akademik">Bidang Akademik & Kemahasiswaan</a></li>
                            <li><a href="/about/kesek">Bidang Kesekretariatan</a></li>
                            <li><a href="/about/rohis">Bidang Kerohanian Islam</a></li>
                        </ul>
                    </li>

                    @guest
                        <li><a href="/guest/blog" class="{{ request()->is('*blog*') ? 'active' : '' }}">Berita</a></li>
                        <li><a href="/guest/galeri" class="{{ request()->is('*galeri*') ? 'active' : '' }}">Galeri</a></li>
                        <li><a href="/guest/anggota" class="{{ request()->is('*anggota*') ? 'active' : '' }}">Database Anggota</a></li>
                    @else
                        <li><a href="/blog" class="{{ request()->is('blog*') ? 'active' : '' }}">Kelola Blog</a></li>
                        <li><a href="/galeri" class="{{ request()->is('galeri*') ? 'active' : '' }}">Kelola Galeri</a></li>
                        <li><a href="/anggota" class="{{ request()->is('anggota*') ? 'active' : '' }}">Data Anggota</a></li>
                    @endguest

                    <li><a href="/#aspirasi" class="text-warning">Aspirasi</a></li>

                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li>
                                <a href="{{ route('login') }}" class="login-btn px-3 py-1"
                                   style="background: #FFE500 !important; color: #09090b !important; font-weight: 700; font-size: 12px; margin-left: 10px; border: 1px solid #FFE500; border-radius: 4px;">
                                    {{ __('Login') }}
                                </a>
                            </li>
                        @endif
                    @else
                        <li class="dropdown">
                            <a id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false" class="px-3 py-1"
                                style="border: 1px solid #27272a; border-radius: 4px; color: #FFE500 !important; font-weight: 600; font-size: 12px; margin-left: 10px;" v-pre>
                                {{ Auth::user()->name }} <i class="bi bi-chevron-down dropdown-indicator"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown"
                                 style="background-color: #111115; border: 1px solid #27272a; border-radius: 4px; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.5);">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   style="color: #ffffff; font-weight: 600; padding: 10px 16px;"
                                   onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>

            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    @yield('slider')
    @yield('blog')
    @yield('content')



    @if (session()->has('message'))
        <!-- Modal Success -->
        <div class="modal fade show" id="myModal" role="dialog" aria-modal="true"
            style="display: block; z-index: 9999;">
            <div class="modal-dialog" style="z-index: 10000;">
                <div class="modal-content" style="background-color: #111115; border: 1px solid #FFE500; border-radius: 4px; color: #ffffff;">
                    <div class="modal-header" style="background-color: #18181b; border-bottom: 1px solid #27272a; color: #FFE500;">
                        <h5 class="modal-title font-weight-bold">Berhasil</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                            onclick="closeModal()"
                            style="color: #FFE500; background-color: transparent; border: none; font-size: 24px; cursor: pointer;">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" style="color: #e4e4e7; padding: 20px;">
                        <p class="m-0"> {{ session()->get('message') }}</p>
                    </div>
                    <div class="modal-footer" style="background-color: #111115; border-top: 1px solid #27272a;">
                        <button type="button" class="btn" style="background-color: #FFE500; color: #09090b; font-weight: 700; padding: 6px 20px; border-radius: 4px;"
                            onclick="closeModal()">OK</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Latar belakang hitam transparan -->
        <div class="modal-backdrop show"
            style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.85); z-index: 9998;"
            onclick="closeModal()">
        </div>
    @endif
    {{-- gagal --}}
    @if (session()->has('error'))
        <!-- Modal Error -->
        <div class="modal fade show" id="myModal" role="dialog" aria-modal="true"
            style="display: block; z-index: 9999;">
            <div class="modal-dialog" style="z-index: 10000;">
                <div class="modal-content" style="background-color: #111115; border: 1px solid #ef4444; border-radius: 4px; color: #ffffff;">
                    <div class="modal-header" style="background-color: #18181b; border-bottom: 1px solid #27272a; color: #ef4444;">
                        <h5 class="modal-title font-weight-bold">Terjadi Kesalahan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                            onclick="closeModal()"
                            style="color: #ef4444; background-color: transparent; border: none; font-size: 24px; cursor: pointer;">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" style="color: #e4e4e7; padding: 20px;">
                        <p class="m-0"> {{ session()->get('error') }}</p>
                    </div>
                    <div class="modal-footer" style="background-color: #111115; border-top: 1px solid #27272a;">
                        <button type="button" class="btn" style="background-color: #ef4444; color: #ffffff; font-weight: 700; padding: 6px 20px; border-radius: 4px;"
                            onclick="closeModal()">OK</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Latar belakang hitam transparan -->
        <div class="modal-backdrop show"
            style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.629); z-index: 9998;"
            onclick="closeModal()">
        </div>
    @endif
    <!-- JavaScript untuk menutup modal -->
    <script>
        function closeModal() {
            var modalBackdrop = document.querySelector('.modal-backdrop');
            var modal = document.querySelector('.modal');
            modalBackdrop.remove();
            modal.remove();
        }
    </script>
    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer" data-aos="fade-up" data-aos-delay="200" style="background-color: #09090b; border-top: 1px solid #27272a;">

        <div class="footer-content position-relative py-5">
            <div class="container">
                <div class="row gy-4">

                    <div class="col-lg-4 col-md-6">
                        <div class="footer-info">
                            <div class="d-flex align-items-center gap-2 mb-3">
                                <img src="{{ asset('assets/img/logokmfterbaru.png') }}" alt="Logo BEM FMIPA Unhas" width="176" height="44" style="max-height: 44px; width: auto;">
                                <div>
                                    <h4 class="m-0 text-white fw-black" style="font-size: 18px; font-weight: 900; line-height: 1.1;">BEM <span style="color: #FFE500;">FMIPA</span></h4>
                                    <small style="color: #a1a1aa; font-size: 10px; letter-spacing: 1.5px; text-transform: uppercase;">UNIVERSITAS HASANUDDIN</small>
                                </div>
                            </div>
                            <p style="color: #a1a1aa; font-size: 13px; line-height: 1.7;">
                                Lembaga eksekutif mahasiswa tertinggi di tingkat Fakultas MIPA Unhas. Berkomitmen mengawal aspirasi, memperkuat integritas sains, dan melahirkan karya inovatif bagi peradaban.
                            </p>
                            <p class="mt-3" style="color: #d4d4d8; font-size: 13px;">
                                Gedung BEM FMIPA Unhas, Kampus Tamalanrea, Jl. Perintis Kemerdekaan KM. 10, Makassar 90245<br>
                                bemfmipaunhas@gmail.com
                            </p>
                            <div class="social-links d-flex mt-3 gap-2">
                                <a href="https://twitter.com/bemfmipaunhas" aria-label="Twitter BEM FMIPA Unhas" class="d-flex align-items-center justify-content-center" style="border: 1px solid #27272a; color: #FFE500; width: 36px; height: 36px; border-radius: 4px; background: #111115;"><i class="bi bi-twitter" aria-hidden="true"></i></a>
                                <a href="https://www.facebook.com/bemfmipaunhas" aria-label="Facebook BEM FMIPA Unhas" class="d-flex align-items-center justify-content-center" style="border: 1px solid #27272a; color: #FFE500; width: 36px; height: 36px; border-radius: 4px; background: #111115;"><i class="bi bi-facebook" aria-hidden="true"></i></a>
                                <a href="https://www.instagram.com/bemfmipaunhas/" aria-label="Instagram BEM FMIPA Unhas" class="d-flex align-items-center justify-content-center" style="border: 1px solid #27272a; color: #FFE500; width: 36px; height: 36px; border-radius: 4px; background: #111115;"><i class="bi bi-instagram" aria-hidden="true"></i></a>
                                <a href="https://www.youtube.com/@bemfmipaunhas" aria-label="YouTube BEM FMIPA Unhas" class="d-flex align-items-center justify-content-center" style="border: 1px solid #27272a; color: #FFE500; width: 36px; height: 36px; border-radius: 4px; background: #111115;"><i class="bi bi-youtube" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div><!-- End footer info column-->

                    <div class="col-lg-2 col-md-3 col-6 footer-links">
                        <h4 style="color: #FFE500; font-size: 13px; font-weight: 800; letter-spacing: 1px; text-transform: uppercase;">Navigasi</h4>
                        <ul style="list-style: none; padding: 0; line-height: 2;">
                            <li><a href="/" style="color: #a1a1aa; font-size: 13px;">Beranda</a></li>
                            <li><a href="/#sambutan-ketua" style="color: #a1a1aa; font-size: 13px;">Sambutan Ketua</a></li>
                            <li><a href="/#visi-misi" style="color: #a1a1aa; font-size: 13px;">Visi & Misi</a></li>
                            <li><a href="/about" style="color: #a1a1aa; font-size: 13px;">Profil & Sejarah</a></li>
                            <li><a href="/guest/blog" style="color: #a1a1aa; font-size: 13px;">Kabar & Berita</a></li>
                            <li><a href="/guest/galeri" style="color: #a1a1aa; font-size: 13px;">Galeri Kegiatan</a></li>
                            <li><a href="/guest/anggota" style="color: #a1a1aa; font-size: 13px;">Database Anggota</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-md-3 col-6 footer-links">
                        <h4 style="color: #FFE500; font-size: 13px; font-weight: 800; letter-spacing: 1px; text-transform: uppercase;">Keluarga MIPA</h4>
                        <ul style="list-style: none; padding: 0; line-height: 2;">
                            <li><a href="https://himatikafmipaunhas.id" target="_blank" style="color: #a1a1aa; font-size: 13px;">HIMATIKA Unhas</a></li>
                            <li><a href="https://himastat.sci.unhas.ac.id" target="_blank" style="color: #a1a1aa; font-size: 13px;">HIMASTAT Unhas</a></li>
                            <li><a href="https://sl1nk.com/p2fr9su" target="_blank" style="color: #a1a1aa; font-size: 13px;">HMK FMIPA</a></li>
                            <li><a href="https://himafi.sci.unhas.ac.id" target="_blank" style="color: #a1a1aa; font-size: 13px;">HIMAFI Unhas</a></li>
                            <li><a href="https://hmgf.sci.unhas.ac.id" target="_blank" style="color: #a1a1aa; font-size: 13px;">HMGF Unhas</a></li>
                            <li><a href="https://himbiofmipaunhas001.blogspot.com" target="_blank" style="color: #a1a1aa; font-size: 13px;">HIMBIO FMIPA</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-link" id="aspirasi">
                        <h4 style="color: #FFE500; font-size: 13px; font-weight: 800; letter-spacing: 1px; text-transform: uppercase;">Hubungi Sekretariat</h4>
                        <p style="color: #a1a1aa; font-size: 12px; margin-bottom: 12px;">Sampaikan aspirasi, advokasi, atau kemitraan strategis:</p>
                        <form method="post" action="{{ route('submitForm') }}">
                            @csrf
                            <div class="mb-2">
                                <label for="footer-nama" class="form-label text-light mb-1" style="font-size: 11px; font-weight: 600;">Nama Lengkap</label>
                                <input type="text" id="footer-nama" name="name" required class="form-control fmipa-input" placeholder="Masukkan nama lengkap" style="font-size: 13px;">
                            </div>
                            <div class="row g-2 mb-2">
                                <div class="col-6">
                                    <label for="footer-email" class="form-label text-light mb-1" style="font-size: 11px; font-weight: 600;">Email</label>
                                    <input type="email" id="footer-email" name="email" required class="form-control fmipa-input" placeholder="nama@email.com" style="font-size: 13px;">
                                </div>
                                <div class="col-6">
                                    <label for="footer-phone" class="form-label text-light mb-1" style="font-size: 11px; font-weight: 600;">No. WhatsApp</label>
                                    <input type="text" id="footer-phone" name="phone" required class="form-control fmipa-input" placeholder="08xxxxxxxxxx" style="font-size: 13px;">
                                </div>
                            </div>
                            <div class="mb-2">
                                <label for="footer-pesan" class="form-label text-light mb-1" style="font-size: 11px; font-weight: 600;">Pesan atau Aspirasi</label>
                                <textarea id="footer-pesan" required name="message" rows="2" class="form-control fmipa-input" placeholder="Tuliskan aspirasi atau pesan..." style="font-size: 13px;"></textarea>
                            </div>
                            <div>
                                <button type="submit" class="fmipa-btn-primary w-100 justify-content-center" style="font-size: 13px; padding: 10px 18px !important;">
                                    Kirim Pesan
                                </button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <div class="footer-legal text-center position-relative py-3" style="background-color: #09090b; border-top: 1px solid #1f1f23;">
            <div class="container">
                <div class="copyright" style="color: #a1a1aa; font-size: 13px;">
                    &copy; {{ date('Y') }} <strong class="text-white">BEM FMIPA Universitas Hasanuddin</strong>. All Rights Reserved. 
                    <span style="color: #FFE500; font-weight: 600; margin-left: 8px;">Queen of Science</span>
                </div>
            </div>
        </div>

    </footer>
    <!-- End Footer -->

    <button type="button" class="scroll-top d-flex align-items-center justify-content-center" aria-label="Kembali ke atas layar" onclick="window.scrollTo({top: 0, behavior: 'smooth'});">
        <i class="bi bi-arrow-up-short" aria-hidden="true"></i>
    </button>

    <div id="preloader"></div>
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="https://cdn.tiny.cloud/1/5875j2ck7sspps3t45sgsafr53irk1owed2duchaz98s6394/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script>
        tinymce.init({
            selector: 'textarea.tiny',
            plugins: 'anchor autolink charmap emoticons image link lists media searchreplace table visualblocks wordcount',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
            height: 400,
            menubar: false,
            branding: false,
            setup: function (editor) {
                editor.on('change', function () {
                    editor.save();
                });
            }
        });
    </script>
    <div id="react-aspirasi-widget"></div>
    @livewireScripts
</body>

</html>

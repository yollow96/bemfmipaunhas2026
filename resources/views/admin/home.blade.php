@extends('layout')
@section('title', 'Home')
@section('slider')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero">

        <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="3500">
            <div class="carousel-item active Maincarousel " style="background-image: url(assets/img/slide/pengurus2023.jpg)">
                <div class="info d-flex align-items-center">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-6 text-center">
                                <h2 data-aos="fade-down">Himatika <span>FMIPA Unhas</span></h2>
                                <p data-aos="fade-up">Himpunan Mahasiswa Matematika Fakultas Matematika dan Ilmu Pengetahuan
                                    Alam Universitas Hasanuddin disingkat Himatika FMIPA Unhas berkedudukan di Departemen
                                    Matematika FMIPA Unhas.</p>
                                <a data-aos="fade-up" data-aos-delay="200" href="#alt-services" class="btn-get-started">Get
                                    Started</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @foreach ($carousels as $carousel)
                @if ($carousel->jenis_corcel === 'biasa')
                    <div class="carousel-item  Maincarousel "
                        style="background-image: url('{{ asset($carousel->gambar_path) }}">
                        <div class="info d-flex align-items-center">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-6 text-center">
                                        <h2 data-aos="fade-down"> <span>{{ $carousel->judul }}</span></h2>
                                        <p data-aos="fade-up"> {{ $carousel->deskripsi }}</p>
                                        <a data-aos="fade-up" data-aos-delay="200" href="{{ $carousel->link }}"
                                            class="btn-get-started">Selengkapnya</a>
                                        @guest
                                        @else
                                            <a href="/carousels" data-aos="fade-up" data-aos-delay="200" href="#alt-services"
                                                class="btn-get-started">
                                                Manage Carousels</a>
                                        @endguest
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @elseif ($carousel->jenis_corcel === 'event')
                    <div class="carousel-item Childcarousel ">
                        <div class="Maincontenthero">
                            <div class="contenthero">
                                <h2 data-aos="fade-down">{{ $carousel->judul }}</h2>
                                <p data-aos="fade-down" class="text-secondary fw-semibold">
                                    {{ $carousel->waktu_pelaksanaan }}</p>
                                <p data-aos="fade-up" class="ContentText">{{ $carousel->deskripsi }}</p>
                                <div class="d-flex ">
                                    <a data-aos="fade-up" data-aos-delay="200" href="{{ $carousel->link }}"
                                        class="btn-get-started  ">
                                        <h4>Selengkapnya</h4>
                                    </a>
                                </div>

                            </div>
                            <img src="{{ asset($carousel->gambar_path) }}" alt="">
                        </div>
                    </div>
                @endif
            @endforeach



            <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

        </div>

    </section>
@endsection
@section('content')
    <main id="main">
        <section id="alt-services" class="alt-services">
            <div class="container" data-aos="fade-up">

                <div class="row justify-content-around gy-4">
                    <div class="col-lg-6 img-bg" style="background-image: url({{ asset('assets/img/logokmfterbaru.png') }});"
                        data-aos="zoom-in" data-aos-delay="100"></div>

                    <div class="col-lg-5 d-flex flex-column justify-content-center">
                        <h3>Tentang Himatika</h3>
                        <p>Himatika FMIPA Unhas resmi berdiri di Ujung Pandang pada tanggal 11 April 1983 untuk waktu yang
                            tidak ditentukan. Himatika FMIPA Unhas berasaskan kekeluargaan dan berdasarkan Tri Darma
                            Perguruan Tinggi. </br></br> Himatika FMIPA Unhas adalah organisasi yang bersifat organisasi
                            kader. Sekarang, Himpunan ini dibawahi oleh tiga prodi yaitu:</p>

                        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
                            <i class="bi bi-infinity flex-shrink-0"></i>
                            <div>
                                <h4><a href="https://math.sci.unhas.ac.id/" class="stretched-link">Matematika</a></h4>
                                <p>Program Studi Matematika merupakan ilmu tentang angka dan perhitungan yang mempelajari
                                    kombinasi matematika murni dan terapan (pure vs applied mathematics) seperti aljabar,
                                    geometri, analisis matematika, juga riset operasi.</p>
                            </div>
                        </div><!-- End Icon Box -->

                        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
                            <i class="bi bi-code-slash flex-shrink-0"></i>
                            <div>
                                <h4><a href="http://is.sci.unhas.ac.id/" class="stretched-link">Sistem Informasi</a></h4>
                                <p>Program Studi Sistem Informasi mempelajari komponen-komponen dari Sistem Informasi /
                                    Teknologi Informasi, mulai dari sistem operasi, jaringan komputer, basis data, maupun
                                    aplikasi. </p>
                            </div>
                        </div><!-- End Icon Box -->

                        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-percent flex-shrink-0"></i>
                            <div>
                                <h4><a href="http://aktuaria.sci.unhas.ac.id/" class="stretched-link">Ilmu Aktuaria</a></h4>
                                <p>Aktuaria merupakan ilmu yang menerapkan matematika dan statistika dalam pengelolaan
                                    risiko keuangan di masa depan atau biasa disebut dengan "matematika asuransi".</p>
                            </div>
                        </div><!-- End Icon Box -->

                    </div>
                </div>

            </div>
        </section><!-- End Alt Services Section -->

        <!-- ======= Bidang Section ======= -->
        <section id="services" class="services section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Tentang kami</h2>
                </div>


                <div class="body1">

                    <div class="row container1" data-aos="fade-up" data-aos-delay="200">

                        <div class="col-lg-4 col-md-6 mb-3">
                            <div class="card" data-aos="fade-up" data-aos-delay="100">
                                <div class="face face1">
                                    <div class="content">
                                        <img src="{{ asset('assets/img/icon/inti.png') }}">
                                        <h3>Struktur Inti</h3>
                                    </div>
                                </div>
                                <div class="face face2">
                                    <div class="content">
                                        <p>Struktur Inti BE Himatika FMIPA Unhas terdiri dari seorang Ketua Umum yang
                                            dibantu oleh Sekretaris Umum dan Bendahara Umum...</p>
                                        <a href="/about/inti">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Projects Item -->

                        <div class="col-lg-4 col-md-6 mb-3">
                            <div class="card" data-aos="fade-up" data-aos-delay="100">
                                <div class="face face1">
                                    <div class="content">
                                        <img src="{{ asset('assets/img/icon/struktur.png') }}">
                                        <h3>Struktur Organisasi</h3>
                                    </div>
                                </div>
                                <div class="face face2">
                                    <div class="content">
                                        <p>Struktur Kepengurusan BE Himatika FMIPA Unhas Periode 2022-2023</p>
                                        <a href="/about/struktur">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Projects Item -->

                        <div class="col-lg-4 col-md-6 mb-3">
                            <div class="card" data-aos="fade-up" data-aos-delay="100">
                                <div class="face face1">
                                    <div class="content">
                                        <img src="{{ asset('assets/img/icon/dewan.png') }}">
                                        <h3>Dewan</h3>
                                    </div>
                                </div>
                                <div class="face face2">
                                    <div class="content">
                                        <p>Dewan Himatika FMIPA Unhas merupakan lembaga legislatif dari Himatika FMIPA
                                            Unhas. Dewan hadir dalam organisasi...</p>
                                        <a href="/about/dewan">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Projects Item -->

                        <div class="col-lg-4 col-md-6 mb-3">
                            <div class="card" data-aos="fade-up" data-aos-delay="100">
                                <div class="face face1">
                                    <div class="content">
                                        <img src="{{ asset('assets/img/icon/rohis.png') }}">
                                        <h3>Kerohanian Islam</h3>
                                    </div>
                                </div>
                                <div class="face face2">
                                    <div class="content">
                                        <p>Bidang kerohanian islam merupakan bidang yang mewadahi anggota Himatika FMIPA
                                            Unhas khususnya untuk muslim dan muslimah yang bertujuan...
                                        </p>
                                        <a href="/about/rohis">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Projects Item -->

                        <div class="col-lg-4 col-md-6 mb-3">
                            <div class="card" data-aos="fade-up" data-aos-delay="100">
                                <div class="face face1">
                                    <div class="content">
                                        <img src="{{ asset('assets/img/icon/pengaderan.png') }}">
                                        <h3>Pengaderan</h3>
                                    </div>
                                </div>
                                <div class="face face2">
                                    <div class="content">
                                        <p>Membentuk kader sesuai dengan tujuan Himatika FMIPA Unhas dan
                                            Melakukan pengawalan terhadap proses pengaderan anggota Himatika FMIPA Unhas...
                                        </p>
                                        <a href="/about/pengaderan">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Projects Item -->

                        <div class="col-lg-4 col-md-6 mb-3">
                            <div class="card" data-aos="fade-up" data-aos-delay="100">
                                <div class="face face1">
                                    <div class="content">
                                        <img src="{{ asset('assets/img/icon/akademik.png') }}">
                                        <h3>Akademik & Kemahasiswaan</h3>
                                    </div>
                                </div>
                                <div class="face face2">
                                    <div class="content">
                                        <p>Bidang Akademik dan Kemahasiswaan hadir untuk menjalankan fungsi pengawalan
                                            urusan akademik anggota Himatika FMIPA Unhas...</p>
                                        <a href="/about/akademik">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Projects Item -->

                        <div class="col-lg-4 col-md-6 mb-3">
                            <div class="card" data-aos="fade-up" data-aos-delay="100">
                                <div class="face face1">
                                    <div class="content">
                                        <img src="{{ asset('assets/img/icon/miba.png') }}">
                                        <h3>Minat & Bakat</h3>
                                    </div>
                                </div>
                                <div class="face face2">
                                    <div class="content">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cum cumque minus
                                            iste veritatis provident at.</p>
                                        <a href="/about/miba">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Projects Item -->

                        <div class="col-lg-4 col-md-6 mb-3">
                            <div class="card" data-aos="fade-up" data-aos-delay="100">
                                <div class="face face1">
                                    <div class="content">
                                        <img src="{{ asset('assets/img/icon/eksternal.png') }}">
                                        <h3>Eksternal</h3>
                                    </div>
                                </div>
                                <div class="face face2">
                                    <div class="content">
                                        <p>Bidang Eksternal berfungsi untuk mengidentifikasi dan mengkaji isu untuk
                                            menentukan sikap yang bijak dalam...</p>
                                        <a href="/about/eksternal">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Projects Item -->

                        <div class="col-lg-4 col-md-6 mb-3">
                            <div class="card" data-aos="fade-up" data-aos-delay="100">
                                <div class="face face1">
                                    <div class="content">
                                        <img src="{{ asset('assets/img/icon/kesek.png') }}">
                                        <h3>Kesekretariatan</h3>
                                    </div>
                                </div>
                                <div class="face face2">
                                    <div class="content">
                                        <p>Bidang kesekretariatan adalah bidang yang bertanggung jawab terhadap sekretariat
                                            Himatika FMIPA Unhas...</p>
                                        <a href="/about/kesek">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Projects Item -->

                    </div><!-- End Projects Container -->
                </div>
                <!---->
            </div>
            </div><!-- End post item -->
            <!-- End Recent Blog Posts Section -->
        @endsection

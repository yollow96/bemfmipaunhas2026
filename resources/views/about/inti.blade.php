@extends('layout')
@section('title', 'Struktur Inti')
@section('content')
    <div class="breadcrumbs d-flex align-items-center" style="background-image: linear-gradient(rgba(0,0,0,0.85), rgba(0,0,0,0.95)), url('{{ asset('assets/img/sekret.jpeg') }}'); min-height: 280px;">
        <div class="container position-relative d-flex flex-column align-items-center text-center" data-aos="fade">
            <span class="fmipa-badge mb-3">Pimpinan Lembaga</span>
            <h2 class="text-white fw-bold mb-2 display-6">Struktur Inti BEM FMIPA Unhas</h2>
            <ol class="d-flex gap-2 p-0 list-unstyled" style="font-size: 14px;">
                <li><a href="/" style="color: #FFE500;">Home</a></li>
                <li style="color: #94a3b8;" aria-hidden="true">/</li>
                <li><a href="/about" style="color: #FFE500;">About</a></li>
                <li style="color: #94a3b8;" aria-hidden="true">/</li>
                <li class="text-white">Struktur Inti</li>
            </ol>
        </div>
    </div><!-- End Breadcrumbs -->

    <main id="main" style="background-color: #000000;">
        <section id="about" class="about py-5">
            <div class="container" data-aos="fade-up">

                <div class="row position-relative">

                    <div class="col-lg-7 about-img"
                        style="background-image: url({{ asset('assets/img/about/inti/inti.jpg') }});"></div>

                    <div class="col-lg-7">
                        <h2>The Core Team</h2>
                        <div class="our-story">
                            <h3>Struktur Inti</h3>
                            <p>Struktur Inti BEM FMIPA Unhas terdiri dari seorang Ketua Umum yang dibantu oleh
                                Sekretaris Umum dan Bendahara Umum. Ketua Umum berkewajiban dalam pelaksanaan konstitusi
                                organisasi dan pertanggungjawaban kebijakan serta proker. Sekretaris Umum berfungsi dalam
                                manajemen utama administrasi organisasi dan dapat menjadi juru bicara lembaga atas izin
                                Ketua Umum. Bendahara Umum berfungsi dalam manajemen keuangan dan pendanaan
                                kegiatan organisasi.
                            </p>

                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- End About Section -->
        <!-- ======= Our Team Section ======= -->
        <section id="team" class="team">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Struktur Inti</h2>
                </div>

                <div class="row gy-5">
                    @foreach ($pengurusInti as $pengurus)
                        <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="100">
                            <div class="member-img">
                                <img src="{{ $pengurus->foto ? asset($pengurus->foto) : asset('assets/img/default.jpg') }}"
                                    class="img-fluid" alt="">
                                <div class="social">
                                    <a href="{{ $pengurus->twitter }}"><i class="bi bi-twitter"></i></a>
                                    <a href="{{ $pengurus->instagram }}"><i class="bi bi-instagram"></i></a>
                                    <a href="{{ $pengurus->facebook }}"><i class="bi bi-facebook"></i></a>
                                    <a href="{{ $pengurus->instagram }}"><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info text-center">
                                <h4> {{ $pengurus->nama }}</h4>
                                <p> {{ $pengurus->jabatan }}
                                    {{ $pengurus->struktur_organisasi === 'inti' ? 'Umum' : ($pengurus->struktur_organisasi === 'dewan' ? 'Dewan' : 'Bidang') }}
                                </p>
                                <span>" {{ $pengurus->quotes }}"</span>
                            </div>
                        </div><!-- End Team Member -->
                    @endforeach
                </div>
            </div>
        </section><!-- End Our Team Section -->
    </main>
@endsection

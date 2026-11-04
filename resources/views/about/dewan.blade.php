@extends('layout')
@section('title', 'Dewan')
@section('content')
    <div class="breadcrumbs d-flex align-items-center" style="background-image: linear-gradient(rgba(0,0,0,0.85), rgba(0,0,0,0.95)), url('{{ asset('assets/img/sekret.jpeg') }}'); min-height: 280px;">
        <div class="container position-relative d-flex flex-column align-items-center text-center" data-aos="fade">
            <span class="fmipa-badge mb-3">Lembaga Legislatif & Pengawasan</span>
            <h2 class="text-white fw-bold mb-2 display-6">Dewan Mahasiswa FMIPA Unhas</h2>
            <ol class="d-flex gap-2 p-0 list-unstyled" style="font-size: 14px;">
                <li><a href="/" style="color: #FFE500;">Home</a></li>
                <li style="color: #94a3b8;" aria-hidden="true">/</li>
                <li><a href="/about" style="color: #FFE500;">About</a></li>
                <li style="color: #94a3b8;" aria-hidden="true">/</li>
                <li class="text-white">Dewan Mahasiswa</li>
            </ol>
        </div>
    </div><!-- End Breadcrumbs -->

    <main id="main" style="background-color: #000000;">
        <section id="about" class="about py-5">
            <div class="container" data-aos="fade-up">

                <div class="row position-relative">

                    <div class="col-lg-7 about-img"
                        style="background-image: url({{ asset('assets/img/about/dewan/dewan.jpg') }});"></div>

                    <div class="col-lg-7">
                        <h2>The Council</h2>
                        <div class="our-story">
                            <h3>Dewan Perwakilan Mahasiswa</h3>
                            <p>
                                Dewan Mahasiswa FMIPA Unhas merupakan lembaga legislatif kemahasiswaan di lingkungan FMIPA Unhas. Dewan
                                hadir dalam organisasi menjalankan fungsi pengawasan terhadap Badan Eksekutif Mahasiswa FMIPA Unhas,
                                pengawalan pelaksanaan amanah Musyawarah Mahasiswa, dan penegakan konstitusi BEM FMIPA
                                Unhas. Dewan dalam pelaksanaan tugasnya dapat memberi masukan, rekomendasi, telaah yuridis, dan teguran
                                konstruktif kepada BEM FMIPA Unhas demi kemajuan seluruh mahasiswa sains.
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
                    <h2>Dewan</h2>
                </div>

                <div class="row gy-5">
                    @foreach ($dewan as $item)
                        <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="100">
                            <div class="member-img">
                                <img src="{{ $item->foto ? asset($item->foto) : asset('assets/img/default.jpg') }}"
                                    class="img-fluid" alt="{{ $item->nama }}">
                                <div class="social">
                                    @if($item->twitter)
                                        <a href="{{ $item->twitter }}" target="_blank"><i class="bi bi-twitter"></i></a>
                                    @endif
                                    @if($item->instagram)
                                        <a href="{{ $item->instagram }}" target="_blank"><i class="bi bi-instagram"></i></a>
                                    @endif
                                    @if($item->facebook)
                                        <a href="{{ $item->facebook }}" target="_blank"><i class="bi bi-facebook"></i></a>
                                    @endif
                                    @if($item->linkedin)
                                        <a href="{{ $item->linkedin }}" target="_blank"><i class="bi bi-linkedin"></i></a>
                                    @endif
                                </div>
                            </div>
                            <div class="member-info text-center">
                                <h4>{{ $item->nama }}</h4>
                                <p>{{ $item->jabatan }}
                                    {{ $item->struktur_organisasi === 'inti' ? 'Umum' : ($item->struktur_organisasi === 'dewan' ? 'Dewan' : 'Bidang') }}
                                </p>
                                @if($item->quotes)
                                    <span>"{{ $item->quotes }}"</span>
                                @endif
                            </div>
                        </div><!-- End Team Member -->
                    @endforeach
                </div>

            </div>
        </section><!-- End Our Team Section -->
    </main>
@endsection

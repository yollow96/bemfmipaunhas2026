@extends('layout')
@section('title', 'Bidang Minat & Bakat - BEM FMIPA Unhas')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/akademik.css') }}">
@endpush

@section('content')
    <div class="breadcrumbs d-flex align-items-center" style="background-image: linear-gradient(rgba(0,0,0,0.85), rgba(0,0,0,0.95)), url('{{ asset('assets/img/sekret.jpeg') }}'); min-height: 280px;">
        <div class="container position-relative d-flex flex-column align-items-center text-center" data-aos="fade">
            <span class="fmipa-badge mb-3">Kreativitas, Seni & Olahraga</span>
            <h2 class="text-white fw-bold mb-2 display-6">Bidang Minat & Bakat</h2>
            <ol class="d-flex gap-2 p-0 list-unstyled" style="font-size: 14px;">
                <li><a href="/" style="color: #FFE500;">Home</a></li>
                <li style="color: #94a3b8;" aria-hidden="true">/</li>
                <li><a href="/about" style="color: #FFE500;">About</a></li>
                <li style="color: #94a3b8;" aria-hidden="true">/</li>
                <li class="text-white">Minat & Bakat</li>
            </ol>
        </div>
    </div><!-- End Breadcrumbs -->

    <main id="main" style="background-color: #000000;">
        <section id="about" class="about py-5">
            <div class="container" data-aos="fade-up">

                <div class="row position-relative">

                    <div class="col-lg-7 about-img"
                        style="background-image: url({{ asset('assets/img/about/miba/minat.jpg') }});"></div>

                    <div class="col-lg-7">
                        <span class="fmipa-badge mb-3">
                            <i class="bi bi-palette-fill"></i> Salurkan Potensi
                        </span>
                        <h2>Interests & Talents Division</h2>
                        <div class="our-story">
                            <h3>Bidang Minat & Bakat</h3>
                            <p>Bidang Minat & Bakat BEM FMIPA Unhas berfungsi sebagai wadah eksplorasi, apresiasi, dan aktualisasi potensi non-akademik mahasiswa sains dalam cabang keolahragaan, turnamen esports, dan seni kreatif demi meraih prestasi gemilang.</p>
                            <ul>
                                <li><i class="bi bi-check-circle-fill"></i> <span>MIPA Olympiad & Sports League (Futsal, Basket, Badminton)</span></li>
                                <li><i class="bi bi-check-circle-fill"></i> <span>MIPA Esports Championship (MLBB & Valorant)</span></li>
                                <li><i class="bi bi-check-circle-fill"></i> <span>Pentas Seni & Eksplorasi Digital Creative</span></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- start About proker -->
        <div data-aos="fade-up" class="section-header text-center" style="margin-top: 4em">
            <span class="fmipa-badge mb-2"><i class="bi bi-briefcase"></i> Program Kerja Nyata</span>
            <h2 class="display-6 fw-bold text-white">Program Kerja <span style="color: #FFFF00;">Bidang Minat & Bakat</span></h2>
        </div>
        
        <!-- Program Kerja Section -->
        <div class="container program-section" data-aos="fade-up">
            <div class="row g-4">
                <!-- Pekan Raya MIPA Program -->
                <div class="col-lg-4 col-md-6">
                    <div class="program-item">
                        <div class="program-photo">
                            <img src="{{ asset('assets/img/about/miba/pekanraya.jpeg') }}" alt="Pekan Raya MIPA BEM FMIPA Unhas" width="600" height="260" class="img-fluid">
                        </div>
                        <div class="program-info">
                            <h4 class="program-title">Pekan Raya FMIPA</h4>
                            <p class="program-subtitle">Festival Kreasi Seni, Bazar Kewirausahaan, dan Apresiasi Talenta Mahasiswa</p>
                            
                            <div class="program-detail">
                                <div class="detail-content">
                                    <div class="tujuan">
                                        <h5>Tujuan Program</h5>
                                        <ul>
                                            <li>Mempererat silaturahmi antar civitas akademika FMIPA Unhas</li>
                                            <li>Mewadahi kreativitas, musik, dan kewirausahaan mahasiswa</li>
                                        </ul>
                                    </div>
                                    <div class="sasaran">
                                        <h5>Sasaran</h5>
                                        <p>Mahasiswa FMIPA Unhas, delegasi fakultas lain, dan umum</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- MIPA Sports Day Program -->
                <div class="col-lg-4 col-md-6">
                    <div class="program-item">
                        <div class="program-photo">
                            <img src="{{ asset('assets/img/about/miba/sport.jpg') }}" alt="MIPA Sports Day BEM FMIPA Unhas" width="600" height="260" class="img-fluid">
                        </div>
                        <div class="program-info">
                            <h4 class="program-title">MIPA Sports & Fun League</h4>
                            <p class="program-subtitle">Kompetisi Futsal, Basket, Tenis Meja, dan Turnamen Game Antar-Departemen</p>
                            
                            <div class="program-detail">
                                <div class="detail-content">
                                    <div class="tujuan">
                                        <h5>Tujuan Program</h5>
                                        <ul>
                                            <li>Menjaga kebugaran jasmani dan sportivitas mahasiswa sains</li>
                                            <li>Menjaring bibit atlet FMIPA untuk ajang rektor cup universitas</li>
                                        </ul>
                                    </div>
                                    <div class="sasaran">
                                        <h5>Sasaran</h5>
                                        <p>Kontingen 6 Himpunan Mahasiswa Departemen FMIPA Unhas</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Digital Creative Program -->
                <div class="col-lg-4 col-md-6">
                    <div class="program-item">
                        <div class="program-photo">
                            <img src="{{ asset('assets/img/about/miba/digital.jpeg') }}" alt="Digital Creative BEM FMIPA Unhas" width="600" height="260" class="img-fluid">
                        </div>
                        <div class="program-info">
                            <h4 class="program-title">Digital & Visual Creative</h4>
                            <p class="program-subtitle">Eksplorasi Desain Grafis, Fotografi, Videografi, dan Branding Digital</p>
                            
                            <div class="program-detail">
                                <div class="detail-content">
                                    <div class="tujuan">
                                        <h5>Tujuan Program</h5>
                                        <ul>
                                            <li>Meningkatkan keahlian visual creative & media content mahasiswa</li>
                                            <li>Menyediakan sarana pameran karya digital mahasiswa FMIPA</li>
                                        </ul>
                                    </div>
                                    <div class="sasaran">
                                        <h5>Sasaran</h5>
                                        <p>Kreator muda mahasiswa FMIPA Unhas</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ======= Our Team Section ======= -->
        <section id="team" class="team py-5" style="background-color: #050505; border-top: 1px solid #1a1a1a;">
            <div class="container" data-aos="fade-up">

                <div class="section-header text-center mb-5">
                    <span class="fmipa-badge mb-2"><i class="bi bi-people-fill"></i> Jajaran Pengurus</span>
                    <h2 class="display-6 fw-bold text-white">Susunan Pengurus <span style="color: #FFFF00;">Bidang Minat & Bakat</span></h2>
                </div>

                <div class="row gy-5">
                    @foreach ($miba as $item)
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

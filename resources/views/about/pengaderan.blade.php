@extends('layout')
@section('title', 'Bidang Pengaderan - BEM FMIPA Unhas')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/akademik.css') }}">
@endpush

@section('content')
    <div class="breadcrumbs d-flex align-items-center" style="background-image: linear-gradient(rgba(0,0,0,0.85), rgba(0,0,0,0.95)), url('{{ asset('assets/img/sekret.jpeg') }}'); min-height: 280px;">
        <div class="container position-relative d-flex flex-column align-items-center text-center" data-aos="fade">
            <span class="fmipa-badge mb-3">Kaderisasi & Kepemimpinan</span>
            <h2 class="text-white fw-bold mb-2 display-6">Bidang Pengaderan</h2>
            <ol class="d-flex gap-2 p-0 list-unstyled" style="font-size: 14px;">
                <li><a href="/" style="color: #FFE500;">Home</a></li>
                <li style="color: #94a3b8;" aria-hidden="true">/</li>
                <li><a href="/about" style="color: #FFE500;">About</a></li>
                <li style="color: #94a3b8;" aria-hidden="true">/</li>
                <li class="text-white">Pengaderan</li>
            </ol>
        </div>
    </div><!-- End Breadcrumbs -->

    <main id="main" style="background-color: #000000;">
        <section id="about" class="about py-5">
            <div class="container" data-aos="fade-up">
                <div class="row position-relative">
                    <div class="col-lg-7 about-img"
                        style="background-image: url({{ asset('assets/img/about/pengaderan/pengaderan.jpg') }});"></div>
                    <div class="col-lg-7">
                        <span class="fmipa-badge mb-3">
                            <i class="bi bi-shield-check"></i> Pembinaan Insan Saintis
                        </span>
                        <h2>Cadre & Leadership Division</h2>
                        <div class="our-story">
                            <h3>Bidang Pengaderan</h3>
                            <p>Bidang Pengaderan BEM FMIPA Unhas bertugas merumuskan kurikulum pengaderan berjenjang, mengawal pembinaan moralitas, etika keilmuan, kedisiplinan, serta menanamkan nalar kritis bagi kader penerus kepengurusan BEM FMIPA Unhas berlandaskan Tri Dharma Perguruan Tinggi.</p>
                            <ul>
                                <li><i class="bi bi-check-circle-fill"></i> <span>Latihan Kepemimpinan Mahasiswa (LKM) FMIPA</span></li>
                                <li><i class="bi bi-check-circle-fill"></i> <span>Pendampingan Orientasi Saintis Baru</span></li>
                                <li><i class="bi bi-check-circle-fill"></i> <span>Sekolah Pemikiran Kritis & Kelembagaan</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- start About proker -->
        <div data-aos="fade-up" class="section-header text-center" style="margin-top: 4em">
            <span class="fmipa-badge mb-2"><i class="bi bi-briefcase"></i> Program Kerja Nyata</span>
            <h2 class="display-6 fw-bold text-white">Program Kerja <span style="color: #FFFF00;">Bidang Pengaderan</span></h2>
        </div>
        
        <!-- Program Kerja Section -->
        <div class="container program-section" data-aos="fade-up">
            <div class="row g-4">
                <!-- 1. PROGRESIP 2026 -->
                <div class="col-lg-4 col-md-12">
                    <div class="program-item h-100">
                        <div class="program-photo">
                            <img src="{{ asset('assets/img/about/pengaderan/binaAkrab2021.JPG') }}" alt="PROGRESIP 2026 BEM FMIPA Unhas" width="600" height="260" class="img-fluid">
                        </div>
                        <div class="program-info">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="badge" style="background-color: #18181c; color: #FFE500; border: 1px solid rgba(255, 229, 0, 0.3);">Triwulan I</span>
                            </div>
                            <h4 class="program-title">PROGRESIP 2026</h4>
                            <p class="program-subtitle">Penerimaan Anggota Baru & Penanaman Nilai Dasar Kemahasiswaan</p>
                            
                            <div class="program-detail">
                                <div class="detail-content">
                                    <div class="tujuan">
                                        <h5>Tujuan Program</h5>
                                        <ul>
                                            <li>Penerimaan anggota baru</li>
                                            <li>Pengenalan KM FMIPA Unhas</li>
                                            <li>Penanaman nilai-nilai dasar kemahasiswaan</li>
                                            <li>Mempererat tali silaturahmi antara anggota dan alumni KM FMIPA Unhas</li>
                                        </ul>
                                    </div>
                                    <div class="sasaran">
                                        <h5>Sasaran</h5>
                                        <p>Mahasiswa baru dan mahasiswa lama FMIPA Unhas yang ingin menjadi anggota, serta Anggota dan Alumni KM FMIPA Unhas</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 2. Program Pengembangan Kader (PPK) -->
                <div class="col-lg-4 col-md-12">
                    <div class="program-item h-100">
                        <div class="program-photo">
                            <img src="{{ asset('assets/img/about/pengaderan/pengaderan.jpg') }}" alt="Program Pengembangan Kader (PPK)" width="600" height="260" class="img-fluid">
                        </div>
                        <div class="program-info">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="badge" style="background-color: #18181c; color: #FFE500; border: 1px solid rgba(255, 229, 0, 0.3);">Triwulan I</span>
                            </div>
                            <h4 class="program-title">Program Pengembangan Kader (PPK)</h4>
                            <p class="program-subtitle">Peningkatan Kapasitas & Kualitas Anggota KM FMIPA Unhas</p>
                            
                            <div class="program-detail">
                                <div class="detail-content">
                                    <div class="tujuan">
                                        <h5>Tujuan Program</h5>
                                        <ul>
                                            <li>Meningkatkan kapasitas dan integritas anggota KM FMIPA Unhas</li>
                                        </ul>
                                    </div>
                                    <div class="sasaran">
                                        <h5>Sasaran</h5>
                                        <p>Anggota KM FMIPA Unhas yang telah lulus LK 1 di HMD (Himpunan Mahasiswa Departemen)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 3. Kader Siang dan Kader Malam -->
                <div class="col-lg-4 col-md-12">
                    <div class="program-item h-100">
                        <div class="program-photo">
                            <img src="{{ asset('assets/img/about/pengaderan/binaAkrab2021.JPG') }}" alt="Kader Siang dan Kader Malam" width="600" height="260" class="img-fluid">
                        </div>
                        <div class="program-info">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="badge" style="background-color: #18181c; color: #FFE500; border: 1px solid rgba(255, 229, 0, 0.3);">Pasca PROGRESIP s.d. Akhir Kepengurusan</span>
                            </div>
                            <h4 class="program-title">Kader Siang & Kader Malam</h4>
                            <p class="program-subtitle">Ruang Pemahaman Dinamika KM FMIPA Unhas & Perluasan Wawasan</p>
                            
                            <div class="program-detail">
                                <div class="detail-content">
                                    <div class="tujuan">
                                        <h5>Tujuan Program</h5>
                                        <ul>
                                            <li>Memberikan ruang kepada mahasiswa baru untuk memahami dinamika KM FMIPA Unhas</li>
                                            <li>Membuka dan menambah wawasan kelembagaan</li>
                                            <li>Mempererat tali silaturahmi antar anggota KM FMIPA Unhas</li>
                                        </ul>
                                    </div>
                                    <div class="sasaran">
                                        <h5>Sasaran</h5>
                                        <p>Mahasiswa Baru dan Mahasiswa Lama yang baru melulusi prosesi penerimaan, serta Anggota KM FMIPA Unhas</p>
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
                    <h2 class="display-6 fw-bold text-white">Susunan Pengurus <span style="color: #FFFF00;">Bidang Pengaderan</span></h2>
                </div>

                <div class="row gy-5">
                    @foreach ($pengaderan as $item)
                        <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="100">
                            <div class="member-img">
                                <img src="{{ $item->foto ? asset($item->foto) : asset('assets/img/default.jpg') }}"
                                    class="img-fluid" width="360" height="420" alt="{{ $item->nama }}">
                                <div class="social">
                                    @if($item->twitter)
                                        <a href="{{ $item->twitter }}" target="_blank" aria-label="Twitter {{ $item->nama }}"><i class="bi bi-twitter" aria-hidden="true"></i></a>
                                    @endif
                                    @if($item->instagram)
                                        <a href="{{ $item->instagram }}" target="_blank" aria-label="Instagram {{ $item->nama }}"><i class="bi bi-instagram" aria-hidden="true"></i></a>
                                    @endif
                                    @if($item->facebook)
                                        <a href="{{ $item->facebook }}" target="_blank" aria-label="Facebook {{ $item->nama }}"><i class="bi bi-facebook" aria-hidden="true"></i></a>
                                    @endif
                                    @if($item->linkedin)
                                        <a href="{{ $item->linkedin }}" target="_blank" aria-label="LinkedIn {{ $item->nama }}"><i class="bi bi-linkedin" aria-hidden="true"></i></a>
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

@extends('layout')
@section('title', 'Bidang Hubungan Masyarakat - BEM FMIPA Unhas')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/akademik.css') }}">
@endpush

@section('content')
    <div class="breadcrumbs d-flex align-items-center" style="background-image: linear-gradient(rgba(0,0,0,0.85), rgba(0,0,0,0.95)), url('{{ asset('assets/img/sekret.jpeg') }}'); min-height: 280px;">
        <div class="container position-relative d-flex flex-column align-items-center text-center" data-aos="fade">
            <span class="fmipa-badge mb-3">Relasi & Pengabdian Masyarakat</span>
            <h2 class="text-white fw-bold mb-2 display-6">Bidang Hubungan Masyarakat</h2>
            <ol class="d-flex gap-2 p-0 list-unstyled" style="font-size: 14px;">
                <li><a href="/" style="color: #FFE500;">Home</a></li>
                <li style="color: #94a3b8;" aria-hidden="true">/</li>
                <li><a href="/about" style="color: #FFE500;">About</a></li>
                <li style="color: #94a3b8;" aria-hidden="true">/</li>
                <li class="text-white">Hubungan Masyarakat</li>
            </ol>
        </div>
    </div><!-- End Breadcrumbs -->

    <main id="main" style="background-color: #000000;">
        <section id="about" class="about py-5">
            <div class="container" data-aos="fade-up">

                <div class="row position-relative">

                    <div class="col-lg-7 about-img"
                        style="background-image: url({{ asset('assets/img/about/eksternal/eksternal.jpg') }});"></div>

                    <div class="col-lg-7">
                        <span class="fmipa-badge mb-3">
                            <i class="bi bi-people-fill"></i> Sinergi Lingkungan & Sosial
                        </span>
                        <h2>Public Relations & Community Service Division</h2>
                        <div class="our-story">
                            <h3>Bidang Hubungan Masyarakat</h3>
                            <p>Bidang Hubungan Masyarakat (Humas) BEM FMIPA Unhas bertindak sebagai jembatan kemitraan eksternal, diseminasi informasi publik, serta pelaksana aksi pengabdian masyarakat nyata berbasis keilmuan sains guna meningkatkan kepedulian sosial dan kelestarian lingkungan hidup.</p>
                            <ul>
                                <li><i class="bi bi-check-circle-fill"></i> <span>MIPA Mengabdi: Edukasi Lingkungan & Solusi Nyata</span></li>
                                <li><i class="bi bi-check-circle-fill"></i> <span>Membangun Sinergi Kemitraan Eksternal dan Alumni</span></li>
                                <li><i class="bi bi-check-circle-fill"></i> <span>Kepedulian Sosial & Pelestarian Alam Berkelanjutan</span></li>
                            </ul>
                        </div>
                    </div>

                </div>

            </div>
        </section>

        <!-- start About proker -->
        <div data-aos="fade-up" class="section-header text-center" style="margin-top: 4em">
            <span class="fmipa-badge mb-2"><i class="bi bi-briefcase"></i> Program Kerja Nyata</span>
            <h2 class="display-6 fw-bold text-white">Program Kerja <span style="color: #FFFF00;">Bidang Hubungan Masyarakat</span></h2>
        </div>
        
        <!-- Program Kerja Section -->
        <div class="container program-section" data-aos="fade-up">
            <div class="row g-4 justify-content-center">
                <!-- MIPA Mengabdi Program -->
                <div class="col-lg-8 col-md-12">
                    <div class="program-item h-100">
                        <div class="program-photo">
                            <img src="{{ asset('assets/img/about/eksternal/binaAkrab.jpg') }}" alt="MIPA Mengabdi BEM FMIPA Unhas" width="600" height="260" class="img-fluid">
                        </div>
                        <div class="program-info">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="badge" style="background-color: #18181c; color: #FFE500; border: 1px solid rgba(255, 229, 0, 0.3);">Triwulan II</span>
                            </div>
                            <h4 class="program-title">MIPA Mengabdi</h4>
                            <p class="program-subtitle">Peningkatan Kualitas Lingkungan Hidup, Edukasi Praktis, dan Aksi Nyata Bagi Masyarakat</p>
                            
                            <div class="program-detail">
                                <div class="detail-content">
                                    <div class="tujuan">
                                        <h5>Tujuan Program</h5>
                                        <ul>
                                            <li>Meningkatkan kualitas lingkungan hidup melalui edukasi dan pemberian solusi praktis</li>
                                            <li>Membentuk kesadaran serta kepedulian masyarakat umum dan anggota KM FMIPA Unhas untuk melestarikan lingkungan</li>
                                        </ul>
                                    </div>
                                    <div class="sasaran">
                                        <h5>Sasaran</h5>
                                        <p>Anggota KM FMIPA Unhas dan Masyarakat Umum</p>
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
                    <h2 class="display-6 fw-bold text-white">Susunan Pengurus <span style="color: #FFFF00;">Bidang Hubungan Masyarakat</span></h2>
                </div>

                <div class="row gy-5 justify-content-center">
                    @forelse ($humas as $item)
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
                                </div>
                            </div>
                            <div class="member-info text-center">
                                <h4>{{ $item->nama }}</h4>
                                <span>{{ $item->jabatan }}</span>
                                <p>{{ $item->departemen }}</p>
                            </div>
                        </div>
                    @empty
                        <div class="col-12 text-center text-muted py-4">
                            <p style="color: #71717a;">Data kepengurusan Bidang Hubungan Masyarakat Periode 2026 sedang dalam proses sinkronisasi.</p>
                        </div>
                    @endforelse
                </div>
            </div>
        </section>
    </main>
@endsection


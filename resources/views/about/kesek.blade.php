@extends('layout')
@section('title', 'Biro Kesekretariatan - BEM FMIPA Unhas')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/akademik.css') }}">
@endpush

@section('content')
    <div class="breadcrumbs d-flex align-items-center" style="background-image: linear-gradient(rgba(0,0,0,0.85), rgba(0,0,0,0.95)), url('{{ asset('assets/img/sekret.jpeg') }}'); min-height: 280px;">
        <div class="container position-relative d-flex flex-column align-items-center text-center" data-aos="fade">
            <span class="fmipa-badge mb-3">Tata Kelola Administrasi</span>
            <h2 class="text-white fw-bold mb-2 display-6">Biro Kesekretariatan</h2>
            <ol class="d-flex gap-2 p-0 list-unstyled" style="font-size: 14px;">
                <li><a href="/" style="color: #FFE500;">Home</a></li>
                <li style="color: #94a3b8;" aria-hidden="true">/</li>
                <li><a href="/about" style="color: #FFE500;">About</a></li>
                <li style="color: #94a3b8;" aria-hidden="true">/</li>
                <li class="text-white">Kesekretariatan</li>
            </ol>
        </div>
    </div><!-- End Breadcrumbs -->

    <main id="main" style="background-color: #000000;">
        <section id="about" class="about py-5">
            <div class="container" data-aos="fade-up">

                <div class="row position-relative">

                    <div class="col-lg-7 about-img"
                        style="background-image: url({{ asset('assets/img/about/kesek/kesek.jpg') }});"></div>

                    <div class="col-lg-7">
                        <span class="fmipa-badge mb-3">
                            <i class="bi bi-building"></i> Rumah Perjuangan
                        </span>
                        <h2>Secretariat Division</h2>
                        <div class="our-story">
                            <h3>Biro Kesekretariatan</h3>
                            <p>Biro Kesekretariatan bertanggung jawab atas tata kelola gedung sekretariat BEM FMIPA Unhas, pengarsipan administrasi dan persuratan digital, optimalisasi sarana prasarana inventaris organisasi, serta kenyamanan ruang diskusi bagi seluruh mahasiswa sains FMIPA Unhas.</p>
                            <ul>
                                <li><i class="bi bi-check-circle-fill"></i> <span>Pengelolaan Sarana & Inventaris Terpadu</span></li>
                                <li><i class="bi bi-check-circle-fill"></i> <span>Digitalisasi Arsip Persuratan Resmi</span></li>
                                <li><i class="bi bi-check-circle-fill"></i> <span>Revitalisasi Kenyamanan Gedung Sekretariat</span></li>
                            </ul>
                        </div>
                    </div>

                </div>

            </div>
        </section>

        <!-- start About proker -->
        <div data-aos="fade-up" class="section-header text-center" style="margin-top: 4em">
            <span class="fmipa-badge mb-2"><i class="bi bi-briefcase"></i> Program Kerja Nyata</span>
            <h2 class="display-6 fw-bold text-white">Program Kerja <span style="color: #FFFF00;">Biro Kesekretariatan</span></h2>
        </div>
        
        <!-- Program Kerja Section -->
        <div class="container program-section" data-aos="fade-up">
            <div class="row g-4">
                <!-- Sarana Prasarana Program -->
                <div class="col-lg-6 col-md-12">
                    <div class="program-item">
                        <div class="program-photo">
                            <img src="{{ asset('assets/img/about/kesek/pendataan.jpg') }}" alt="Sarana Prasarana BEM FMIPA Unhas" width="600" height="260" class="img-fluid">
                        </div>
                        <div class="program-info">
                            <h4 class="program-title">Sarana & Prasarana Digital</h4>
                            <p class="program-subtitle">Pengadaan, Pendataan Sistematis, serta Pemeliharaan Fasilitas Sekretariat</p>
                            
                            <div class="program-detail">
                                <div class="detail-content">
                                    <div class="tujuan">
                                        <h5>Tujuan Program</h5>
                                        <ul>
                                            <li>Menyediakan fasilitas operasional organisasi yang representatif bagi anggota BEM FMIPA Unhas</li>
                                            <li>Menjaga kondisi fasilitas sekretariat agar tetap prima dan siap pakai</li>
                                            <li>Mendata seluruh aset inventaris secara digital dan akuntabel</li>
                                        </ul>
                                    </div>
                                    <div class="sasaran">
                                        <h5>Sasaran</h5>
                                        <p>Pengurus BEM dan seluruh mahasiswa FMIPA Unhas</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- BEM Reset Program -->
                <div class="col-lg-6 col-md-12">
                    <div class="program-item">
                        <div class="program-photo">
                            <img src="{{ asset('assets/img/about/kesek/kesek-th.jpg') }}" alt="MIPA Secretariat Reset BEM FMIPA Unhas" width="600" height="260" class="img-fluid">
                        </div>
                        <div class="program-info">
                            <h4 class="program-title">MIPA Secretariat Revitalization</h4>
                            <p class="program-subtitle">Penataan Estetika, Kebersihan, dan Kenyamanan Sekretariat Bersama</p>
                            
                            <div class="program-detail">
                                <div class="detail-content">
                                    <div class="tujuan">
                                        <h5>Tujuan Program</h5>
                                        <ul>
                                            <li>Melakukan penataan tata ruang kerja dan ruang aspirasi di gedung sekretariat</li>
                                            <li>Menciptakan iklim kerja yang bersih, inklusif, dan harmonis bagi pengurus</li>
                                        </ul>
                                    </div>
                                    <div class="sasaran">
                                        <h5>Sasaran</h5>
                                        <p>Seluruh fungsionaris BEM FMIPA Unhas</p>
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
                    <h2 class="display-6 fw-bold text-white">Susunan Pengurus <span style="color: #FFFF00;">Biro Kesekretariatan</span></h2>
                </div>

                <div class="row gy-5">
                    @foreach ($kesekretariatan as $item)
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

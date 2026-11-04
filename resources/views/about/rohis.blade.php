@extends('layout')
@section('title', 'Bidang Kerohanian Islam - BEM FMIPA Unhas')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/akademik.css') }}">
@endpush

@section('content')
    <div class="breadcrumbs d-flex align-items-center" style="background-image: linear-gradient(rgba(0,0,0,0.85), rgba(0,0,0,0.95)), url('{{ asset('assets/img/sekret.jpeg') }}'); min-height: 280px;">
        <div class="container position-relative d-flex flex-column align-items-center text-center" data-aos="fade">
            <span class="fmipa-badge mb-3">Moral & Spiritual</span>
            <h2 class="text-white fw-bold mb-2 display-6">Bidang Kerohanian Islam</h2>
            <ol class="d-flex gap-2 p-0 list-unstyled" style="font-size: 14px;">
                <li><a href="/" style="color: #FFE500;">Home</a></li>
                <li style="color: #94a3b8;" aria-hidden="true">/</li>
                <li><a href="/about" style="color: #FFE500;">About</a></li>
                <li style="color: #94a3b8;" aria-hidden="true">/</li>
                <li class="text-white">Kerohanian Islam</li>
            </ol>
        </div>
    </div><!-- End Breadcrumbs -->

    <main id="main" style="background-color: #000000;">
        <section id="about" class="about py-5">
            <div class="container" data-aos="fade-up">

                <div class="row position-relative">

                    <div class="col-lg-7 about-img"
                        style="background-image: url({{ asset('assets/img/about/rohis/rohis.jpg') }});"></div>

                    <div class="col-lg-7">
                        <span class="fmipa-badge mb-3">
                            <i class="bi bi-heart-fill"></i> Pembinaan Karakter Mulia
                        </span>
                        <h2>Islamic & Spiritual Affairs Division</h2>
                        <div class="our-story">
                            <h3>Bidang Kerohanian Islam</h3>
                            <p>Bidang Kerohanian Islam BEM FMIPA Unhas mewadahi pembinaan spiritual, ilmu syar'i, pembentukan karakter pecinta Al-Qur'an, serta integrasi nilai-nilai keislaman dengan nalar ilmiah sains demi mempererat silaturahmi dan ukhuwah civitas akademika FMIPA Unhas.</p>
                            <ul>
                                <li><i class="bi bi-check-circle-fill"></i> <span>SIGMA (Studi Islam Generasi Muslim MIPA)</span></li>
                                <li><i class="bi bi-check-circle-fill"></i> <span>SINTESIS (Sinergi Islam, Tren Isu, Sains, dan Silaturahmi)</span></li>
                                <li><i class="bi bi-check-circle-fill"></i> <span>Pamflet Syiar Islam Rutin Setiap Pekan</span></li>
                            </ul>
                        </div>
                    </div>

                </div>

            </div>
        </section>

        <!-- start About proker -->
        <div data-aos="fade-up" class="section-header text-center" style="margin-top: 4em">
            <span class="fmipa-badge mb-2"><i class="bi bi-briefcase"></i> Program Kerja Nyata</span>
            <h2 class="display-6 fw-bold text-white">Program Kerja <span style="color: #FFFF00;">Bidang Kerohanian Islam</span></h2>
        </div>
        
        <!-- Program Kerja Section -->
        <div class="container program-section" data-aos="fade-up">
            <div class="row g-4">
                <!-- 1. SIGMA Program -->
                <div class="col-lg-4 col-md-12">
                    <div class="program-item h-100">
                        <div class="program-photo">
                            <img src="{{ asset('assets/img/about/rohis/islamic.jpeg') }}" alt="SIGMA BEM FMIPA Unhas" width="600" height="260" class="img-fluid">
                        </div>
                        <div class="program-info">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="badge" style="background-color: #18181c; color: #FFE500; border: 1px solid rgba(255, 229, 0, 0.3);">Triwulan II</span>
                            </div>
                            <h4 class="program-title">SIGMA</h4>
                            <p class="program-subtitle">Studi Islam Generasi Muslim MIPA: Menuntut Ilmu Syar'i & Karakter Qur'ani</p>
                            
                            <div class="program-detail">
                                <div class="detail-content">
                                    <div class="tujuan">
                                        <h5>Tujuan Program</h5>
                                        <ul>
                                            <li>Sebagai wasilah untuk menuntut ilmu syar’i dalam meningkatkan iman dan taqwa</li>
                                            <li>Membentuk kader yang memahami ilmu-ilmu dasar agama Islam</li>
                                            <li>Sebagai wasilah untuk mempererat silaturahmi dan ukhuwah</li>
                                            <li>Membentuk karakter mahasiswa yang cinta akan Al-Quran</li>
                                        </ul>
                                    </div>
                                    <div class="sasaran">
                                        <h5>Sasaran</h5>
                                        <p>Mahasiswa Baru Muslim/Muslimah FMIPA Unhas yang Telah Lulus Progresip & Anggota KMF FMIPA Unhas</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 2. SINTESIS Program -->
                <div class="col-lg-4 col-md-12">
                    <div class="program-item h-100">
                        <div class="program-photo">
                            <img src="{{ asset('assets/img/about/rohis/rohis.jpg') }}" alt="SINTESIS BEM FMIPA Unhas" width="600" height="260" class="img-fluid">
                        </div>
                        <div class="program-info">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="badge" style="background-color: #18181c; color: #FFE500; border: 1px solid rgba(255, 229, 0, 0.3);">1 Kali Selama Periode Kepengurusan</span>
                            </div>
                            <h4 class="program-title">SINTESIS</h4>
                            <p class="program-subtitle">Sinergi Islam, Tren Isu, Sains, dan Silaturahmi: Diskusi Logis Ilmiah & Syariat</p>
                            
                            <div class="program-detail">
                                <div class="detail-content">
                                    <div class="tujuan">
                                        <h5>Tujuan Program</h5>
                                        <ul>
                                            <li>Menjadi wadah interaktif pembelajaran agama Islam yang berintegrasi dengan dunia sains</li>
                                            <li>Membahas isu-isu kontemporer saat ini dengan sudut pandang logis ilmiah dan syariat</li>
                                            <li>Mempererat ukhuwah dan keakraban seluruh elemen KM FMIPA Unhas</li>
                                        </ul>
                                    </div>
                                    <div class="sasaran">
                                        <h5>Sasaran</h5>
                                        <p>Anggota KM FMIPA Unhas</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 3. Pamflet Syiar Islam -->
                <div class="col-lg-4 col-md-12">
                    <div class="program-item h-100">
                        <div class="program-photo">
                            <img src="{{ asset('assets/img/about/rohis/islamic.jpeg') }}" alt="Pamflet Syiar Islam BEM FMIPA Unhas" width="600" height="260" class="img-fluid">
                        </div>
                        <div class="program-info">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="badge" style="background-color: #18181c; color: #FFE500; border: 1px solid rgba(255, 229, 0, 0.3);">Rutin Setiap Pekan</span>
                            </div>
                            <h4 class="program-title">Pamflet Syiar Islam</h4>
                            <p class="program-subtitle">Publikasi Konten Dakwah, Nasihat, dan Edukasi Keislaman Berkala</p>
                            
                            <div class="program-detail">
                                <div class="detail-content">
                                    <div class="tujuan">
                                        <h5>Tujuan Program</h5>
                                        <ul>
                                            <li>Menyebarkan syiar dan pengingat kebaikan islami secara konsisten setiap pekan</li>
                                            <li>Menyediakan media literasi digital yang menguatkan spiritualitas mahasiswa</li>
                                        </ul>
                                    </div>
                                    <div class="sasaran">
                                        <h5>Sasaran</h5>
                                        <p>Civitas Akademika FMIPA Unhas dan Masyarakat Umum</p>
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
                    <h2 class="display-6 fw-bold text-white">Susunan Pengurus <span style="color: #FFFF00;">Bidang Kerohanian</span></h2>
                </div>

                <div class="row gy-5">
                    @foreach ($rohis as $item)
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

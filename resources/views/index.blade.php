@extends('layout')
@section('title', 'BEM FMIPA Unhas - Satukan Gerak, Nyalakan Inovasi Sains')

@section('slider')
    <!-- ======= Modern Hero Section (Himastat-Inspired FMIPA Dark & Yellow) ======= -->
    <section id="hero" class="hero position-relative overflow-hidden" 
             style="background: radial-gradient(ellipse 80% 60% at 50% 10%, rgba(255, 255, 0, 0.12) 0%, rgba(5, 5, 5, 0.96) 65%, #000000 100%); min-height: 88vh; display: flex; align-items: center;">
        <div id="hero-carousel" class="carousel slide carousel-fade w-100" data-bs-ride="carousel" data-bs-interval="5000">
            <div class="carousel-inner">
                <!-- Slide 1: Primary BEM FMIPA Slide -->
                <div class="carousel-item active Maincarousel" style="background-image: url('{{ asset('assets/img/slide/pengurus2025.jpg') }}'); min-height: 88vh;">
                    <div class="info d-flex align-items-center" style="background: radial-gradient(circle at center, rgba(0, 0, 0, 0.68) 0%, rgba(0, 0, 0, 0.95) 100%); min-height: 88vh;">
                        <div class="container">
                            <div class="row justify-content-center text-center">
                                <div class="col-lg-10">
                                    <div class="fmipa-badge mb-3" data-aos="fade-down">
                                        <span class="fmipa-badge-dot"></span>
                                        Badan Eksekutif Mahasiswa FMIPA Unhas
                                    </div>

                                    <h1 class="display-3 text-white mb-3" style="font-weight: 900; letter-spacing: -1.5px; line-height: 1.15;" data-aos="fade-down" data-aos-delay="100">
                                        Satukan Gerak, Nyalakan <span style="color: #FFE500;">Inovasi Sains</span>
                                    </h1>

                                    <p class="lead text-light mb-4 mx-auto" style="max-width: 760px; font-size: 17px; line-height: 1.8; color: #d1d5db !important;" data-aos="fade-up" data-aos-delay="200">
                                        Wadah perjuangan, pergerakan advokasi aspiratif, dan katalisator karya mahasiswa Fakultas Matematika dan Ilmu Pengetahuan Alam Universitas Hasanuddin yang berintegritas, adaptif, dan berjiwa Tri Dharma Perguruan Tinggi.
                                    </p>

                                    <div class="d-flex flex-wrap justify-content-center gap-3" data-aos="fade-up" data-aos-delay="300">
                                        <a href="#bidang-showcase" class="fmipa-btn-primary">
                                            <span>Jelajahi Struktur Bidang</span>
                                        </a>

                                        <a href="#sambutan-ketua" class="fmipa-btn-outline">
                                            <span>Sambutan Ketua</span>
                                        </a>

                                        <a href="#visi-misi" class="fmipa-btn-outline">
                                            <span>Visi & Misi</span>
                                        </a>

                                        @auth
                                            <a href="/carousels" class="btn btn-dark px-3 py-2 fw-bold"
                                               style="border: 1px solid #27272a; border-radius: 4px; color: #FFE500; font-size: 13px;">
                                                <i class="bi bi-gear-fill me-1"></i> Kelola Banner
                                            </a>
                                        @endauth
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Dynamic Carousels from Database -->
                @foreach ($carousels as $carousel)
                    @if ($carousel->jenis_corcel === 'biasa')
                        <div class="carousel-item Maincarousel" style="background-image: url('{{ asset($carousel->gambar_path) }}'); min-height: 88vh;">
                            <div class="info d-flex align-items-center" style="background: radial-gradient(circle at center, rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0.94) 100%); min-height: 88vh;">
                                <div class="container">
                                    <div class="row justify-content-center text-center">
                                        <div class="col-lg-8">
                                            <h2 class="display-4 fw-bold text-white mb-3">
                                                <span style="color: #FFFF00;">{{ $carousel->judul }}</span>
                                            </h2>
                                            <p class="lead text-light mb-4" style="color: #d1d5db !important;">
                                                {{ $carousel->deskripsi }}
                                            </p>
                                            <a href="{{ $carousel->link }}" class="fmipa-btn-primary">
                                                Pelajari Selengkapnya <i class="bi bi-arrow-right ms-1"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @elseif ($carousel->jenis_corcel === 'event')
                        <div class="carousel-item Childcarousel" style="min-height: 88vh; background-color: #000000;">
                            <div class="Maincontenthero d-flex align-items-center justify-content-center h-100 py-5" style="background-color: #000000; border-bottom: 2px solid #FFFF00;">
                                <div class="container">
                                    <div class="row align-items-center g-5">
                                        <div class="col-lg-6">
                                            <span class="badge mb-3 px-3 py-1" style="background-color: #FFE500; color: #09090b; font-weight: 700; font-size: 11px; border-radius: 2px;">
                                                {{ $carousel->waktu_pelaksanaan }}
                                            </span>
                                            <h2 class="display-5 fw-bold text-white mb-3">{{ $carousel->judul }}</h2>
                                            <p class="text-light lead mb-4" style="color: #b0b0b0 !important;">{{ $carousel->deskripsi }}</p>
                                            <a href="{{ $carousel->link }}" class="fmipa-btn-primary">
                                                Buka Agenda Event
                                            </a>
                                        </div>
                                        <div class="col-lg-6 text-center">
                                            <img src="{{ asset($carousel->gambar_path) }}" alt="{{ $carousel->judul }}" 
                                                 class="img-fluid" style="max-height: 420px; border: 1px solid #27272a; border-radius: 4px;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>

            <!-- Carousel Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#hero-carousel" data-bs-slide="prev" style="width: 5%;">
                <span class="carousel-control-prev-icon p-3 rounded-circle" style="background-color: #000000; border: 1px solid #FFFF00;" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#hero-carousel" data-bs-slide="next" style="width: 5%;">
                <span class="carousel-control-next-icon p-3 rounded-circle" style="background-color: #000000; border: 1px solid #FFFF00;" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <!-- ======= Dynamic React / Fallback Hero Stats Counter ======= -->
    <!-- ======= Hero Stats Counter (React + Static Utilitarian Fallback) ======= -->
    <div id="react-hero-stats">
        <div style="position: relative; z-index: 10; margin-top: -32px; margin-bottom: 36px;">
            <div class="container">
                <div style="background-color: #111115; border: 1px solid #27272a; border-radius: 4px; padding: 20px 24px;">
                    <div class="row g-3">
                        <div class="col-6 col-lg-3">
                            <div style="border-right: 1px solid #1f1f23; padding-right: 12px;">
                                <div class="d-flex align-items-baseline gap-1">
                                    <span style="font-size: 28px; font-weight: 800; color: #fafafa; line-height: 1.1;">6</span>
                                    <span style="width: 6px; height: 6px; background-color: #FFE500; display: inline-block;"></span>
                                </div>
                                <div style="font-size: 13px; font-weight: 600; color: #a1a1aa; margin-top: 4px;">Departemen Sains</div>
                                <div style="font-size: 11.5px; color: #71717a; margin-top: 2px;">Matematika, Fisika, Kimia, Biologi, Geofisika, Statistika</div>
                            </div>
                        </div>

                        <div class="col-6 col-lg-3">
                            <div style="border-right: 1px solid #1f1f23; padding-right: 12px;">
                                <div class="d-flex align-items-baseline gap-1">
                                    <span style="font-size: 28px; font-weight: 800; color: #fafafa; line-height: 1.1;">8</span>
                                    <span style="width: 6px; height: 6px; background-color: #FFE500; display: inline-block;"></span>
                                </div>
                                <div style="font-size: 13px; font-weight: 600; color: #a1a1aa; margin-top: 4px;">Bidang & Biro Kerja</div>
                                <div style="font-size: 11.5px; color: #71717a; margin-top: 2px;">Pimpinan, dewan perwakilan, advokasi, dan kaderisasi</div>
                            </div>
                        </div>

                        <div class="col-6 col-lg-3">
                            <div style="border-right: 1px solid #1f1f23; padding-right: 12px;">
                                <div class="d-flex align-items-baseline gap-1">
                                    <span style="font-size: 28px; font-weight: 800; color: #fafafa; line-height: 1.1;">50+</span>
                                    <span style="width: 6px; height: 6px; background-color: #FFE500; display: inline-block;"></span>
                                </div>
                                <div style="font-size: 13px; font-weight: 600; color: #a1a1aa; margin-top: 4px;">Program Kerja Nyata</div>
                                <div style="font-size: 11.5px; color: #71717a; margin-top: 2px;">Kompetisi ilmiah, advokasi UKT, dan pengabdian desa</div>
                            </div>
                        </div>

                        <div class="col-6 col-lg-3">
                            <div>
                                <div class="d-flex align-items-baseline gap-1">
                                    <span style="font-size: 28px; font-weight: 800; color: #fafafa; line-height: 1.1;">3.500+</span>
                                    <span style="width: 6px; height: 6px; background-color: #FFE500; display: inline-block;"></span>
                                </div>
                                <div style="font-size: 13px; font-weight: 600; color: #a1a1aa; margin-top: 4px;">Mahasiswa Aktif</div>
                                <div style="font-size: 11.5px; color: #71717a; margin-top: 2px;">Keluarga Mahasiswa FMIPA Universitas Hasanuddin</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <main id="main" style="background-color: #09090b;">

        <!-- ======= Quick Navigation Strip ======= -->
        <section class="py-3" style="background-color: #09090b; border-top: 1px solid #1f1f23; border-bottom: 1px solid #1f1f23;">
            <div class="container">
                <div class="row g-2 justify-content-center">
                    <div class="col-6 col-md-3">
                        <a href="/about" class="d-block p-3 text-decoration-none h-100"
                           style="background-color: #111115; border: 1px solid #27272a; border-radius: 4px; transition: border-color 140ms ease-out;"
                           onmouseover="this.style.borderColor='#3f3f46'" onmouseout="this.style.borderColor='#27272a'">
                            <div class="text-white fw-bold" style="font-size: 13.5px;">Profil & Sejarah BEM</div>
                            <small style="color: #a1a1aa; font-size: 11.5px;">Tata kelola & konstitusi</small>
                        </a>
                    </div>

                    <div class="col-6 col-md-3">
                        <a href="/guest/anggota" class="d-block p-3 text-decoration-none h-100"
                           style="background-color: #111115; border: 1px solid #27272a; border-radius: 4px; transition: border-color 140ms ease-out;"
                           onmouseover="this.style.borderColor='#3f3f46'" onmouseout="this.style.borderColor='#27272a'">
                            <div class="text-white fw-bold" style="font-size: 13.5px;">Database Anggota</div>
                            <small style="color: #a1a1aa; font-size: 11.5px;">Direktori mahasiswa MIPA</small>
                        </a>
                    </div>

                    <div class="col-6 col-md-3">
                        <a href="/guest/blog" class="d-block p-3 text-decoration-none h-100"
                           style="background-color: #111115; border: 1px solid #27272a; border-radius: 4px; transition: border-color 140ms ease-out;"
                           onmouseover="this.style.borderColor='#3f3f46'" onmouseout="this.style.borderColor='#27272a'">
                            <div class="text-white fw-bold" style="font-size: 13.5px;">Kabar & Publikasi</div>
                            <small style="color: #a1a1aa; font-size: 11.5px;">Rilis kegiatan & kajian sains</small>
                        </a>
                    </div>

                    <div class="col-6 col-md-3">
                        <a href="/guest/galeri" class="d-block p-3 text-decoration-none h-100"
                           style="background-color: #111115; border: 1px solid #27272a; border-radius: 4px; transition: border-color 140ms ease-out;"
                           onmouseover="this.style.borderColor='#3f3f46'" onmouseout="this.style.borderColor='#27272a'">
                            <div class="text-white fw-bold" style="font-size: 13.5px;">Galeri Kegiatan</div>
                            <small style="color: #a1a1aa; font-size: 11.5px;">Dokumentasi kegiatan resmi</small>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- ======= SECTION 1: SAMBUTAN KETUA BEM ======= -->
        <section id="sambutan-ketua" class="py-5" style="background-color: #09090b;">
            <div class="container" data-aos="fade-up">
                <div class="sambutan-box p-4 p-lg-5" style="background-color: #111115; border: 1px solid #27272a; border-radius: 4px;">
                    <div class="row align-items-center gy-4">
                        <div class="col-lg-4 text-center">
                            <div class="sambutan-photo-frame mx-auto" style="max-width: 280px; border-radius: 4px; border: 1px solid #27272a;">
                                <img src="{{ asset('assets/img/slide/pengurus2025.jpg') }}" alt="Ketua Umum BEM FMIPA Unhas" class="img-fluid" style="width: 100%; height: 320px; object-fit: cover;">
                            </div>
                            <div class="mt-3">
                                <span class="badge" style="background-color: #18181c; color: #FFE500; border: 1px solid rgba(255, 229, 0, 0.3); font-weight: 700; font-size: 10.5px; letter-spacing: 0.04em;">
                                    KETUA UMUM BEM FMIPA UNHAS
                                </span>
                                <h5 class="text-white fw-bold mt-2 mb-0" style="font-size: 15px;">Kabinet Transformasi Saintis</h5>
                                <small style="color: #71717a; font-size: 12px;">Periode 2025 / 2026</small>
                            </div>
                        </div>

                        <div class="col-lg-8 ps-lg-4">
                            <div>
                                <span style="font-size: 11px; font-weight: 700; color: #FFE500; text-transform: uppercase; letter-spacing: 0.08em;">
                                    Sambutan Kepemimpinan
                                </span>
                                <h2 class="fw-bold text-white mb-3" style="font-size: 1.85rem; line-height: 1.3;">
                                    Satukan Nalar, Melangkah Nyata untuk <span style="color: #FFE500;">Kejayaan FMIPA Unhas</span>
                                </h2>
                                <p style="color: #fafafa; font-size: 15px; line-height: 1.8;">
                                    "Salam hangat untuk seluruh civitas akademika dan mahasiswa Fakultas MIPA Universitas Hasanuddin. BEM FMIPA Unhas hadir bukan sekadar struktur formal kelembagaan, melainkan rumah besar perjuangan aspirasi, kolaborasi lintas disiplin sains, dan laboratorium kepemimpinan yang berintegritas.
                                </p>
                                <p style="color: #a1a1aa; font-size: 13.5px; line-height: 1.7;">
                                    Di era disrupsi digital dan akselerasi riset ilmiah, kita mengedepankan sinergi harmonis antara seluruh himpunan mahasiswa departemen: Matematika, Statistika, Kimia, Fisika, Geofisika, dan Biologi. Mari kita jadikan nalar kritis ilmiah sebagai suluh advokasi dan kepedulian sosial kita bagi kampus dan peradaban."
                                </p>
                                <div class="d-flex align-items-center justify-content-between flex-wrap gap-3 pt-3 border-top mt-3" style="border-color: #1f1f23 !important;">
                                    <div>
                                        <div class="text-white fw-bold" style="font-size: 13.5px;">Dewan Pengurus BEM FMIPA Unhas</div>
                                        <small style="color: #71717a;">Universitas Hasanuddin, Makassar</small>
                                    </div>
                                    <a href="/about/inti" class="btn btn-outline-warning" style="font-size: 12.5px; padding: 6px 14px;">
                                        Lihat Pengurus Inti →
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ======= SECTION 2: VISI & MISI BEM FMIPA UNHAS ======= -->
        <section id="visi-misi" class="py-5" style="background-color: #09090b; border-top: 1px solid #1f1f23;">
            <div class="container" data-aos="fade-up">
                <div class="mb-4 text-center">
                    <span style="font-size: 11px; font-weight: 700; color: #FFE500; text-transform: uppercase; letter-spacing: 0.08em;">
                        Landasan Gerak Organisasi
                    </span>
                    <h2 class="fw-bold text-white" style="font-size: 1.85rem; margin-top: 4px;">
                        Visi & Misi <span style="color: #FFE500;">BEM FMIPA Unhas</span>
                    </h2>
                    <p style="color: #a1a1aa; max-width: 600px; margin: 4px auto 0; font-size: 13.5px;">
                        Pilar komitmen strategis dalam menjalankan amanah kelembagaan, memperjuangkan hak mahasiswa, dan memajukan marwah sains.
                    </p>
                </div>

                <div class="row g-3">
                    <!-- VISI CARD -->
                    <div class="col-lg-5">
                        <div style="background-color: #111115; border: 1px solid #27272a; border-radius: 4px; padding: 28px; height: 100%; display: flex; flex-direction: column; justify-content: space-between;">
                            <div>
                                <span style="background-color: #18181c; color: #FFE500; border: 1px solid rgba(255, 229, 0, 0.3); font-weight: 700; font-size: 10px; letter-spacing: 0.04em; text-transform: uppercase; padding: 2px 6px; border-radius: 2px;">
                                    VISI UTAMA
                                </span>
                                <h3 class="text-white fw-bold my-3" style="font-size: 1.25rem; line-height: 1.4;">
                                    Mewujudkan BEM FMIPA Unhas sebagai Simpul Perjuangan yang <span style="color: #FFE500;">Progresif, Inklusif, dan Berintegritas Ilmiah</span>
                                </h3>
                                <p style="color: #a1a1aa; font-size: 13px; line-height: 1.7; margin: 0;">
                                    Menjadi wadah eksekutif yang adaptif terhadap dinamika zaman, solutif dalam pengawalan hak-hak mahasiswa, dan terdepan dalam mengakselerasi potensi akademik serta karya sains bagi masyarakat.
                                </p>
                            </div>
                            <div class="pt-3 border-top mt-4" style="border-color: #1f1f23 !important;">
                                <div style="font-size: 12px; color: #fafafa; font-weight: 600;">Berasaskan Tri Dharma Perguruan Tinggi</div>
                                <div style="font-size: 11px; color: #71717a;">Fakultas MIPA Universitas Hasanuddin</div>
                            </div>
                        </div>
                    </div>

                    <!-- 4 MISI ITEMS -->
                    <div class="col-lg-7">
                        <div class="row g-2 h-100">
                            <div class="col-md-6">
                                <div style="background-color: #111115; border: 1px solid #27272a; border-radius: 4px; padding: 18px; height: 100%;">
                                    <div class="d-flex align-items-center gap-2 mb-2">
                                        <span style="font-size: 11px; font-weight: 800; color: #FFE500; background-color: #1c1a00; border: 1px solid rgba(255, 229, 0, 0.3); padding: 1px 6px; border-radius: 2px;">01</span>
                                        <h5 class="text-white fw-bold m-0" style="font-size: 14px;">Advokasi Aspiratif</h5>
                                    </div>
                                    <p class="m-0" style="color: #a1a1aa; font-size: 12px; line-height: 1.5;">
                                        Mengawal secara proaktif kebijakan kampus, transparansi penyesuaian UKT, ketersediaan fasilitas laboratorium, dan kesejahteraan seluruh mahasiswa FMIPA.
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div style="background-color: #111115; border: 1px solid #27272a; border-radius: 4px; padding: 18px; height: 100%;">
                                    <div class="d-flex align-items-center gap-2 mb-2">
                                        <span style="font-size: 11px; font-weight: 800; color: #FFE500; background-color: #1c1a00; border: 1px solid rgba(255, 229, 0, 0.3); padding: 1px 6px; border-radius: 2px;">02</span>
                                        <h5 class="text-white fw-bold m-0" style="font-size: 14px;">Katalisator Riset Sains</h5>
                                    </div>
                                    <p class="m-0" style="color: #a1a1aa; font-size: 12px; line-height: 1.5;">
                                        Menumbuhkan iklim intelektual, olimpiade sains, penulisan PKM, publikasi jurnal, dan inovasi teknologi terapan mahasiswa di tingkat nasional.
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div style="background-color: #111115; border: 1px solid #27272a; border-radius: 4px; padding: 18px; height: 100%;">
                                    <div class="d-flex align-items-center gap-2 mb-2">
                                        <span style="font-size: 11px; font-weight: 800; color: #FFE500; background-color: #1c1a00; border: 1px solid rgba(255, 229, 0, 0.3); padding: 1px 6px; border-radius: 2px;">03</span>
                                        <h5 class="text-white fw-bold m-0" style="font-size: 14px;">Kaderisasi Berkarakter</h5>
                                    </div>
                                    <p class="m-0" style="color: #a1a1aa; font-size: 12px; line-height: 1.5;">
                                        Menyelenggarakan pembinaan kepemimpinan mahasiswa bertahap (LKM) yang berkarakter saintis, berintegritas moral, dan adaptif menghadapi tantangan.
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div style="background-color: #111115; border: 1px solid #27272a; border-radius: 4px; padding: 18px; height: 100%;">
                                    <div class="d-flex align-items-center gap-2 mb-2">
                                        <span style="font-size: 11px; font-weight: 800; color: #FFE500; background-color: #1c1a00; border: 1px solid rgba(255, 229, 0, 0.3); padding: 1px 6px; border-radius: 2px;">04</span>
                                        <h5 class="text-white fw-bold m-0" style="font-size: 14px;">Sinergi & Pengabdian</h5>
                                    </div>
                                    <p class="m-0" style="color: #a1a1aa; font-size: 12px; line-height: 1.5;">
                                        Mempererat soliditas 6 himpunan departemen serta terjun langsung mengabdi ke masyarakat melalui program bina desa saintifik yang solutif.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ======= SECTION 3: SIMPUL SAINS: 6 HIMPUNAN MAHASISWA DEPARTEMEN FMIPA ======= -->
        <section id="himpunan" class="py-5" style="background-color: #09090b; border-top: 1px solid #1f1f23;">
            <div class="container" data-aos="fade-up">
                <div class="mb-4 text-center">
                    <span style="font-size: 11px; font-weight: 700; color: #FFE500; text-transform: uppercase; letter-spacing: 0.08em;">
                        Keluarga Mahasiswa MIPA
                    </span>
                    <h2 class="fw-bold text-white" style="font-size: 1.85rem; margin-top: 4px;">
                        Himpunan Mahasiswa Departemen <span style="color: #FFE500;">FMIPA Unhas</span>
                    </h2>
                    <p style="color: #a1a1aa; max-width: 620px; margin: 4px auto 0; font-size: 13.5px;">
                        Enam simpul kekuatan disiplin sains yang bersatu di bawah naungan BEM FMIPA Universitas Hasanuddin.
                    </p>
                </div>

                <div class="row g-3 justify-content-center">
                    <!-- 1. HIMATIKA -->
                    <div class="col-md-6 col-lg-4">
                        <a href="https://math.sci.unhas.ac.id/" target="_blank" class="himpunan-card">
                            <div class="mb-2">
                                <span class="badge" style="background-color: #18181c; color: #FFE500; border: 1px solid rgba(255, 229, 0, 0.3); font-weight: 700; font-size: 10.5px; letter-spacing: 0.04em;">
                                    MATEMATIKA
                                </span>
                            </div>
                            <h4 class="text-white fw-bold mb-1" style="font-size: 15px;">HIMATIKA</h4>
                            <small style="color: #a1a1aa; font-size: 12.5px; line-height: 1.5;">Himpunan Mahasiswa Matematika</small>
                        </a>
                    </div>

                    <!-- 2. HIMASTAT -->
                    <div class="col-md-6 col-lg-4">
                        <a href="https://himastat.sci.unhas.ac.id/" target="_blank" class="himpunan-card">
                            <div class="mb-2">
                                <span class="badge" style="background-color: #18181c; color: #FFE500; border: 1px solid rgba(255, 229, 0, 0.3); font-weight: 700; font-size: 10.5px; letter-spacing: 0.04em;">
                                    STATISTIKA
                                </span>
                            </div>
                            <h4 class="text-white fw-bold mb-1" style="font-size: 15px;">HIMASTAT</h4>
                            <small style="color: #a1a1aa; font-size: 12.5px; line-height: 1.5;">Himpunan Mahasiswa Statistika</small>
                        </a>
                    </div>

                    <!-- 3. HMK -->
                    <div class="col-md-6 col-lg-4">
                        <a href="https://kimia.sci.unhas.ac.id/" target="_blank" class="himpunan-card">
                            <div class="mb-2">
                                <span class="badge" style="background-color: #18181c; color: #FFE500; border: 1px solid rgba(255, 229, 0, 0.3); font-weight: 700; font-size: 10.5px; letter-spacing: 0.04em;">
                                    KIMIA
                                </span>
                            </div>
                            <h4 class="text-white fw-bold mb-1" style="font-size: 15px;">HMK</h4>
                            <small style="color: #a1a1aa; font-size: 12.5px; line-height: 1.5;">Himpunan Mahasiswa Kimia</small>
                        </a>
                    </div>

                    <!-- 4. HIMAFI -->
                    <div class="col-md-6 col-lg-4">
                        <a href="https://fisika.sci.unhas.ac.id/" target="_blank" class="himpunan-card">
                            <div class="mb-2">
                                <span class="badge" style="background-color: #18181c; color: #FFE500; border: 1px solid rgba(255, 229, 0, 0.3); font-weight: 700; font-size: 10.5px; letter-spacing: 0.04em;">
                                    FISIKA
                                </span>
                            </div>
                            <h4 class="text-white fw-bold mb-1" style="font-size: 15px;">HIMAFI</h4>
                            <small style="color: #a1a1aa; font-size: 12.5px; line-height: 1.5;">Himpunan Mahasiswa Fisika</small>
                        </a>
                    </div>

                    <!-- 5. HMGF -->
                    <div class="col-md-6 col-lg-4">
                        <a href="https://geofisika.sci.unhas.ac.id/" target="_blank" class="himpunan-card">
                            <div class="mb-2">
                                <span class="badge" style="background-color: #18181c; color: #FFE500; border: 1px solid rgba(255, 229, 0, 0.3); font-weight: 700; font-size: 10.5px; letter-spacing: 0.04em;">
                                    GEOFISIKA
                                </span>
                            </div>
                            <h4 class="text-white fw-bold mb-1" style="font-size: 15px;">HMGF</h4>
                            <small style="color: #a1a1aa; font-size: 12.5px; line-height: 1.5;">Himpunan Mahasiswa Geofisika</small>
                        </a>
                    </div>

                    <!-- 6. HIMBIO -->
                    <div class="col-md-6 col-lg-4">
                        <a href="https://biologi.sci.unhas.ac.id/" target="_blank" class="himpunan-card">
                            <div class="mb-2">
                                <span class="badge" style="background-color: #18181c; color: #FFE500; border: 1px solid rgba(255, 229, 0, 0.3); font-weight: 700; font-size: 10.5px; letter-spacing: 0.04em;">
                                    BIOLOGI
                                </span>
                            </div>
                            <h4 class="text-white fw-bold mb-1" style="font-size: 15px;">HIMBIO</h4>
                            <small style="color: #a1a1aa; font-size: 12.5px; line-height: 1.5;">Himpunan Mahasiswa Biologi</small>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- ======= SECTION 4: ALT SERVICES (TENTANG BEM FMIPA UNHAS) ======= -->
        <section id="alt-services" class="alt-services py-5" style="background-color: #09090b; border-top: 1px solid #1f1f23;">
            <div class="container" data-aos="fade-up">
                <div class="row align-items-center gy-4">
                    <div class="col-lg-5 text-center">
                        <div style="background-color: #111115; border: 1px solid #27272a; border-radius: 4px; padding: 24px; display: inline-block;">
                            <img src="{{ asset('assets/img/logokmfterbaru.png') }}" alt="Logo BEM FMIPA Unhas" class="img-fluid" style="max-height: 240px;">
                        </div>
                    </div>

                    <div class="col-lg-7">
                        <span style="font-size: 11px; font-weight: 700; color: #FFE500; text-transform: uppercase; letter-spacing: 0.08em;">
                            Lembaga Eksekutif Tertinggi Fakultas
                        </span>

                        <h2 class="fw-bold text-white my-3" style="font-size: 1.85rem; line-height: 1.3;">
                            Mewujudkan FMIPA yang <span style="color: #FFE500;">Progresif, Inklusif & Berprestasi</span>
                        </h2>

                        <p style="color: #a1a1aa; font-size: 14px; line-height: 1.7; margin-bottom: 20px;">
                            Badan Eksekutif Mahasiswa Fakultas Matematika dan Ilmu Pengetahuan Alam Universitas Hasanuddin (BEM FMIPA Unhas) bertindak sebagai simpul advokasi, pengabdian masyarakat, pergerakan intelektual, dan pengawalan nalar kritis ilmiah seluruh mahasiswa sains.
                        </p>

                        <!-- Utilitarian 2-Column Points -->
                        <div class="row g-2">
                            <div class="col-md-6">
                                <div style="background-color: #111115; border: 1px solid #27272a; border-radius: 4px; padding: 14px;">
                                    <h5 class="text-white fw-bold mb-1" style="font-size: 13.5px;">Advokasi Aspiratif</h5>
                                    <p class="m-0" style="color: #a1a1aa; font-size: 12px; line-height: 1.4;">
                                        Menjembatani aspirasi mahasiswa terkait kebijakan UKT, fasilitas laboratorium, dan sarana perkuliahan.
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div style="background-color: #111115; border: 1px solid #27272a; border-radius: 4px; padding: 14px;">
                                    <h5 class="text-white fw-bold mb-1" style="font-size: 13.5px;">Pengembangan Riset</h5>
                                    <p class="m-0" style="color: #a1a1aa; font-size: 12px; line-height: 1.4;">
                                        Menyokong budaya penelitian ilmiah mahasiswa, penulisan karya inovatif PKM, dan kompetisi sains.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ======= SECTION 5: BIDANG & BIRO SHOWCASE ======= -->
        <div id="react-bidang-showcase">
            <section id="bidang-showcase" class="py-5" style="background-color: #050505;">
                <div class="container" data-aos="fade-up">
                    <div class="text-center mb-5">
                        <div class="fmipa-badge mb-2">
                            <span class="fmipa-badge-dot"></span> Struktur & Departemen Kerja
                        </div>
                        <h2 class="display-6 fw-bold text-white">
                            Bidang & Biro <span style="color: #FFFF00;">BEM FMIPA Unhas</span>
                        </h2>
                        <p style="color: #a0a0a0; max-width: 680px; margin: 0 auto; font-size: 15px;">
                            Sinergi pilar organisasi yang bergerak dinamis dalam melayani, mengayomi, dan mengaktualisasikan seluruh potensi mahasiswa FMIPA Unhas.
                        </p>
                    </div>

                    <div class="row g-4">
                        <!-- 1. Inti -->
                        <div class="col-md-6 col-lg-3">
                            <div class="fmipa-card h-100 d-flex flex-column justify-content-between">
                                <div>
                                    <div class="d-flex align-items-center gap-2 mb-3">
                                        <i class="bi bi-award-fill text-warning fs-4"></i>
                                        <h5 class="text-white fw-bold m-0">Struktur Inti</h5>
                                    </div>
                                    <small class="badge mb-2" style="background: rgba(255, 255, 0, 0.1); color: #FFFF00; border: 1px solid rgba(255, 255, 0, 0.3);">Pimpinan & Dewan</small>
                                    <p style="color: #999; font-size: 13px; line-height: 1.6;">
                                        Ketua Umum, Sekretaris Umum, dan Bendahara Umum yang mengarahkan arah gerak strategis organisasi.
                                    </p>
                                </div>
                                <a href="/about/inti" class="fmipa-btn-card">
                                    Detail Struktur <i class="bi bi-arrow-right ms-1"></i>
                                </a>
                            </div>
                        </div>

                        <!-- 2. Dewan -->
                        <div class="col-md-6 col-lg-3">
                            <div class="fmipa-card h-100 d-flex flex-column justify-content-between">
                                <div>
                                    <div class="d-flex align-items-center gap-2 mb-3">
                                        <i class="bi bi-bank2 text-warning fs-4"></i>
                                        <h5 class="text-white fw-bold m-0">Dewan Mahasiswa</h5>
                                    </div>
                                    <small class="badge mb-2" style="background: rgba(255, 255, 0, 0.1); color: #FFFF00; border: 1px solid rgba(255, 255, 0, 0.3);">Pimpinan & Dewan</small>
                                    <p style="color: #999; font-size: 13px; line-height: 1.6;">
                                        Fungsi legislasi, pengawasan kinerja eksekutif, dan perumusan produk hukum formal mahasiswa FMIPA.
                                    </p>
                                </div>
                                <a href="/about/dewan" class="fmipa-btn-card">
                                    Detail Struktur <i class="bi bi-arrow-right ms-1"></i>
                                </a>
                            </div>
                        </div>

                        <!-- 3. Pengaderan -->
                        <div class="col-md-6 col-lg-3">
                            <div class="fmipa-card h-100 d-flex flex-column justify-content-between">
                                <div>
                                    <div class="d-flex align-items-center gap-2 mb-3">
                                        <i class="bi bi-compass-fill text-warning fs-4"></i>
                                        <h5 class="text-white fw-bold m-0">Pengaderan</h5>
                                    </div>
                                    <small class="badge mb-2" style="background: rgba(255, 255, 0, 0.1); color: #FFFF00; border: 1px solid rgba(255, 255, 0, 0.3);">Internal & Kader</small>
                                    <p style="color: #999; font-size: 13px; line-height: 1.6;">
                                        Merumuskan dan mengawal kurikulum kaderisasi Latihan Kepemimpinan Mahasiswa (LKM) berkarakter.
                                    </p>
                                </div>
                                <a href="/about/pengaderan" class="fmipa-btn-card">
                                    Detail Struktur <i class="bi bi-arrow-right ms-1"></i>
                                </a>
                            </div>
                        </div>

                        <!-- 4. Rohis -->
                        <div class="col-md-6 col-lg-3">
                            <div class="fmipa-card h-100 d-flex flex-column justify-content-between">
                                <div>
                                    <div class="d-flex align-items-center gap-2 mb-3">
                                        <i class="bi bi-moon-stars-fill text-warning fs-4"></i>
                                        <h5 class="text-white fw-bold m-0">Kerohanian</h5>
                                    </div>
                                    <small class="badge mb-2" style="background: rgba(255, 255, 0, 0.1); color: #FFFF00; border: 1px solid rgba(255, 255, 0, 0.3);">Internal & Moral</small>
                                    <p style="color: #999; font-size: 13px; line-height: 1.6;">
                                        Pembinaan nilai-nilai spiritual, moralitas intelektual, dan penguatan toleransi civitas akademika.
                                    </p>
                                </div>
                                <a href="/about/rohis" class="fmipa-btn-card">
                                    Detail Struktur <i class="bi bi-arrow-right ms-1"></i>
                                </a>
                            </div>
                        </div>

                        <!-- 5. Akademik & Riset -->
                        <div class="col-md-6 col-lg-3">
                            <div class="fmipa-card h-100 d-flex flex-column justify-content-between">
                                <div>
                                    <div class="d-flex align-items-center gap-2 mb-3">
                                        <i class="bi bi-book-half text-warning fs-4"></i>
                                        <h5 class="text-white fw-bold m-0">Akademik & Riset</h5>
                                    </div>
                                    <small class="badge mb-2" style="background: rgba(255, 255, 0, 0.1); color: #FFFF00; border: 1px solid rgba(255, 255, 0, 0.3);">Akademik & Bakat</small>
                                    <p style="color: #999; font-size: 13px; line-height: 1.6;">
                                        Mengawal isu fasilitas kuliah, klinik advokasi UKT, workshop PKM, dan kompetisi sains ilmiah.
                                    </p>
                                </div>
                                <a href="/about/akademik" class="fmipa-btn-card">
                                    Detail Struktur <i class="bi bi-arrow-right ms-1"></i>
                                </a>
                            </div>
                        </div>

                        <!-- 6. Minat & Bakat -->
                        <div class="col-md-6 col-lg-3">
                            <div class="fmipa-card h-100 d-flex flex-column justify-content-between">
                                <div>
                                    <div class="d-flex align-items-center gap-2 mb-3">
                                        <i class="bi bi-trophy-fill text-warning fs-4"></i>
                                        <h5 class="text-white fw-bold m-0">Minat & Bakat</h5>
                                    </div>
                                    <small class="badge mb-2" style="background: rgba(255, 255, 0, 0.1); color: #FFFF00; border: 1px solid rgba(255, 255, 0, 0.3);">Akademik & Bakat</small>
                                    <p style="color: #999; font-size: 13px; line-height: 1.6;">
                                        Apresiasi potensi mahasiswa dalam cabang keolahragaan, turnamen esports, dan seni budaya.
                                    </p>
                                </div>
                                <a href="/about/miba" class="fmipa-btn-card">
                                    Detail Struktur <i class="bi bi-arrow-right ms-1"></i>
                                </a>
                            </div>
                        </div>

                        <!-- 7. Hubungan Eksternal -->
                        <div class="col-md-6 col-lg-3">
                            <div class="fmipa-card h-100 d-flex flex-column justify-content-between">
                                <div>
                                    <div class="d-flex align-items-center gap-2 mb-3">
                                        <i class="bi bi-globe2 text-warning fs-4"></i>
                                        <h5 class="text-white fw-bold m-0">Hubungan Eksternal</h5>
                                    </div>
                                    <small class="badge mb-2" style="background: rgba(255, 255, 0, 0.1); color: #FFFF00; border: 1px solid rgba(255, 255, 0, 0.3);">Relasi & Isu Publik</small>
                                    <p style="color: #999; font-size: 13px; line-height: 1.6;">
                                        Membangun jejaring antar-BEM kampus, program Bina Desa, serta respons advokasi sosial masyarakat.
                                    </p>
                                </div>
                                <a href="/about/eksternal" class="fmipa-btn-card">
                                    Detail Struktur <i class="bi bi-arrow-right ms-1"></i>
                                </a>
                            </div>
                        </div>

                        <!-- 8. Biro Kesekretariatan -->
                        <div class="col-md-6 col-lg-3">
                            <div class="fmipa-card h-100 d-flex flex-column justify-content-between">
                                <div>
                                    <div class="d-flex align-items-center gap-2 mb-3">
                                        <i class="bi bi-folder-check text-warning fs-4"></i>
                                        <h5 class="text-white fw-bold m-0">Kesekretariatan</h5>
                                    </div>
                                    <small class="badge mb-2" style="background: rgba(255, 255, 0, 0.1); color: #FFFF00; border: 1px solid rgba(255, 255, 0, 0.3);">Administrasi & Rumah</small>
                                    <p style="color: #999; font-size: 13px; line-height: 1.6;">
                                        Digitalisasi administrasi persuratan, inventaris, dan kenyamanan operasional gedung sekretariat BEM.
                                    </p>
                                </div>
                                <a href="/about/kesek" class="fmipa-btn-card">
                                    Detail Struktur <i class="bi bi-arrow-right ms-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- ======= SECTION 6: BERITA & KABAR TERKINI DARI BEM FMIPA ======= -->
        <section id="berita-terkini" class="py-5" style="background-color: #09090b; border-top: 1px solid #1f1f23;">
            <div class="container" data-aos="fade-up">
                <div class="d-flex align-items-end justify-content-between mb-4 flex-wrap gap-3">
                    <div>
                        <span style="font-size: 11px; font-weight: 700; color: #FFE500; text-transform: uppercase; letter-spacing: 0.08em;">
                            Publikasi & Berita
                        </span>
                        <h2 class="fw-bold text-white mb-0" style="font-size: 1.75rem; margin-top: 4px;">
                            Kabar Terkini <span style="color: #FFE500;">FMIPA Unhas</span>
                        </h2>
                    </div>
                    <a href="/guest/blog" class="btn btn-outline-warning" style="font-size: 12.5px; padding: 6px 14px;">
                        <span>Semua Publikasi</span> →
                    </a>
                </div>

                <div class="row g-3">
                    @forelse ($blog->take(3) as $item)
                        <div class="col-lg-4 col-md-6">
                            <div class="fmipa-news-card">
                                <div class="fmipa-news-img">
                                    <img src="{{ asset($item->image) }}" alt="{{ $item->judul }}" onerror="this.src='{{ asset('assets/img/default.jpg') }}'">
                                    <span class="fmipa-news-date">
                                        {{ $item->created_at ? $item->created_at->format('d M Y') : 'Terbaru' }}
                                    </span>
                                </div>
                                <div class="p-3 d-flex flex-column justify-content-between flex-grow-1">
                                    <div>
                                        <div class="d-flex align-items-center gap-2 mb-2">
                                            <span style="font-size: 10px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.04em; color: #FFE500; background-color: #1c1a00; border: 1px solid rgba(255, 229, 0, 0.3); padding: 1px 6px; border-radius: 2px;">
                                                {{ $item->kategori ?? 'Informasi' }}
                                            </span>
                                            <span style="color: #71717a; font-size: 11.5px;">
                                                {{ $item->author ?? 'BEM FMIPA' }}
                                            </span>
                                        </div>
                                        <h4 class="text-white fw-bold mb-2" style="font-size: 14.5px; line-height: 1.4;">
                                            {{ Str::limit($item->judul, 55) }}
                                        </h4>
                                        <p style="color: #a1a1aa; font-size: 12.5px; line-height: 1.5; margin: 0;">
                                            {!! Str::limit(strip_tags($item->desc), 90) !!}
                                        </p>
                                    </div>
                                    <div class="pt-2 border-top mt-3" style="border-color: #1f1f23 !important;">
                                        <a href="{{ url('/guest/blog/' . $item->id) }}" style="color: #FFE500; font-size: 12px; font-weight: 600; text-decoration: none;">
                                            Baca Selengkapnya →
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-12 text-center py-4">
                            <div class="p-3 d-inline-block" style="background: #111115; border: 1px solid #27272a; border-radius: 4px;">
                                <h6 class="text-white mb-1" style="font-size: 14px;">Belum ada artikel yang dipublikasikan.</h6>
                                <p class="text-muted m-0" style="font-size: 12px;">Update informasi akan ditampilkan di sini.</p>
                            </div>
                        </div>
                    @endforelse
                </div>
            </div>
        </section>

        <!-- ======= SECTION 7: AGENDA & PROGRAM UNGGULAN ======= -->
        <div id="react-agenda-feed">
            <section id="agenda" class="py-5" style="background-color: #09090b; border-top: 1px solid #1f1f23;">
                <div class="container" data-aos="fade-up">
                    <div class="text-center mb-4">
                        <span style="font-size: 11px; font-weight: 700; color: #FFE500; text-transform: uppercase; letter-spacing: 0.08em;">
                            Kalender Kegiatan
                        </span>
                        <h2 class="fw-bold text-white" style="font-size: 1.75rem; margin-top: 4px;">
                            Agenda & Program Unggulan
                        </h2>
                    </div>

                    <div class="row g-3">
                        <div class="col-md-6 col-lg-3">
                            <div style="background-color: #111115; border: 1px solid #27272a; border-radius: 4px; padding: 16px; height: 100%;">
                                <span style="font-size: 10px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.04em; color: #FFE500; background-color: #1c1a00; border: 1px solid rgba(255, 229, 0, 0.3); padding: 1px 6px; border-radius: 2px;">
                                    KOMPETISI SAINS
                                </span>
                                <h5 class="text-white fw-bold mt-2 mb-1" style="font-size: 14px;">MIPA Scientific Competition (MSC)</h5>
                                <p style="color: #a1a1aa; font-size: 12px; line-height: 1.4; margin: 0 0 10px;">
                                    Kompetisi karya tulis ilmiah, olimpiade matematika, dan inovasi sains terapan tingkat nasional.
                                </p>
                                <div style="font-size: 11px; color: #71717a; border-top: 1px solid #1f1f23; padding-top: 8px;">
                                    Auditorium Unhas
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-3">
                            <div style="background-color: #111115; border: 1px solid #27272a; border-radius: 4px; padding: 16px; height: 100%;">
                                <span style="font-size: 10px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.04em; color: #FFE500; background-color: #1c1a00; border: 1px solid rgba(255, 229, 0, 0.3); padding: 1px 6px; border-radius: 2px;">
                                    KADERISASI
                                </span>
                                <h5 class="text-white fw-bold mt-2 mb-1" style="font-size: 14px;">Latihan Kepemimpinan Mahasiswa (LKM)</h5>
                                <p style="color: #a1a1aa; font-size: 12px; line-height: 1.4; margin: 0 0 10px;">
                                    Pelatihan kepemimpinan, advokasi, analisis sosial, dan integritas kepengurusan organisasi.
                                </p>
                                <div style="font-size: 11px; color: #71717a; border-top: 1px solid #1f1f23; padding-top: 8px;">
                                    Malino, Kab. Gowa
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-3">
                            <div style="background-color: #111115; border: 1px solid #27272a; border-radius: 4px; padding: 16px; height: 100%;">
                                <span style="font-size: 10px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.04em; color: #FFE500; background-color: #1c1a00; border: 1px solid rgba(255, 229, 0, 0.3); padding: 1px 6px; border-radius: 2px;">
                                    ADVOKASI & AKADEMIK
                                </span>
                                <h5 class="text-white fw-bold mt-2 mb-1" style="font-size: 14px;">Dialog Terbuka Aspirasi Dekanat</h5>
                                <p style="color: #a1a1aa; font-size: 12px; line-height: 1.4; margin: 0 0 10px;">
                                    Ruang dialog interaktif pimpinan dekanat bersama mahasiswa terkait fasilitas laboratorium dan UKT.
                                </p>
                                <div style="font-size: 11px; color: #71717a; border-top: 1px solid #1f1f23; padding-top: 8px;">
                                    Dekanat FMIPA Unhas
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-3">
                            <div style="background-color: #111115; border: 1px solid #27272a; border-radius: 4px; padding: 16px; height: 100%;">
                                <span style="font-size: 10px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.04em; color: #FFE500; background-color: #1c1a00; border: 1px solid rgba(255, 229, 0, 0.3); padding: 1px 6px; border-radius: 2px;">
                                    MINAT & BAKAT
                                </span>
                                <h5 class="text-white fw-bold mt-2 mb-1" style="font-size: 14px;">MIPA Sports & E-Sports League</h5>
                                <p style="color: #a1a1aa; font-size: 12px; line-height: 1.4; margin: 0 0 10px;">
                                    Turnamen keolahragaan dan esports antar-departemen memperebutkan piala bergilir.
                                </p>
                                <div style="font-size: 11px; color: #71717a; border-top: 1px solid #1f1f23; padding-top: 8px;">
                                    GOR PKM Unhas
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- ======= SECTION 8: ADVOKASI & HUBUNGI BANNER ======= -->
        <section class="py-5" style="background-color: #09090b; border-top: 1px solid #1f1f23;">
            <div class="container" data-aos="fade-up">
                <div style="background-color: #111115; border: 1px solid #27272a; border-radius: 4px; padding: 36px 28px; text-align: center;">
                    <div style="max-width: 640px; margin: 0 auto;">
                        <span style="font-size: 10.5px; font-weight: 700; color: #FFE500; text-transform: uppercase; letter-spacing: 0.08em; background-color: #18181c; border: 1px solid rgba(255, 229, 0, 0.3); padding: 2px 8px; border-radius: 2px;">
                            Ruang Aspirasi Mahasiswa
                        </span>
                        <h2 class="fw-bold text-white my-3" style="font-size: 1.65rem;">
                            Membutuhkan Pendampingan Akademik atau Advokasi Fasilitas?
                        </h2>
                        <p style="color: #a1a1aa; font-size: 13.5px; line-height: 1.6; margin-bottom: 24px;">
                            BEM FMIPA Unhas siap mengawal hak dan aspirasi mahasiswa secara terukur. Sampaikan laporan langsung melalui formulir advokasi atau sekretariat kelembagaan.
                        </p>
                        <div class="d-flex justify-content-center gap-2 flex-wrap">
                            <a href="#aspirasi" class="btn btn-warning" style="font-size: 13px; padding: 8px 18px;">
                                Sampaikan Aspirasi Sekarang
                            </a>
                            <a href="mailto:bemfmipaunhas@gmail.com" class="btn btn-outline-warning" style="font-size: 13px; padding: 8px 18px;">
                                Hubungi Sekretariat
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection

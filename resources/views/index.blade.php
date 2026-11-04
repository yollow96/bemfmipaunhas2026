@extends('layout')
@section('title', 'BEM FMIPA Unhas - Satukan Gerak, Nyalakan Inovasi Sains')

@section('slider')
    <!-- ======= Modern Hero Section (Himastat-Inspired FMIPA Dark & Yellow) ======= -->
    <section id="hero" class="hero position-relative overflow-hidden" 
             style="min-height: 88vh; display: flex; align-items: center; background-color: #09090b;">
        <div id="hero-carousel" class="carousel slide carousel-fade w-100" data-bs-ride="carousel" data-bs-interval="5000">
            <!-- Carousel Indicators -->
            <div class="carousel-indicators" style="bottom: 48px; z-index: 10;">
                <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1" style="width: 24px; height: 4px; background-color: #FFE500; border: none; border-radius: 2px;"></button>
                <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="1" aria-label="Slide 2" style="width: 24px; height: 4px; background-color: #FFE500; border: none; border-radius: 2px;"></button>
                <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="2" aria-label="Slide 3" style="width: 24px; height: 4px; background-color: #FFE500; border: none; border-radius: 2px;"></button>
            </div>

            <div class="carousel-inner" style="min-height: 88vh;">
                <!-- Slide 1: Primary BEM FMIPA Slide -->
                <div class="carousel-item active position-relative" style="min-height: 88vh;">
                    <img src="{{ asset('assets/img/slide/pengurus2026.JPG') }}" 
                         alt="Pengurus BEM FMIPA Unhas 2026" 
                         class="position-absolute top-0 start-0 w-100 h-100" 
                         style="object-fit: cover; object-position: center; z-index: 1;">
                    <div class="position-absolute top-0 start-0 w-100 h-100" 
                         style="background: linear-gradient(180deg, rgba(9, 9, 11, 0.45) 0%, rgba(9, 9, 11, 0.78) 100%); z-index: 2;"></div>
                    <div class="info d-flex align-items-center position-relative" style="min-height: 88vh; z-index: 3;">
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

                <!-- Slide 2: Kolaborasi & Sinergi -->
                <div class="carousel-item position-relative" style="min-height: 88vh;">
                    <img src="{{ asset('assets/img/slide/pengurus20261.JPG') }}" 
                         alt="Pengurus BEM FMIPA Unhas 2026" 
                         class="position-absolute top-0 start-0 w-100 h-100" 
                         style="object-fit: cover; object-position: center; z-index: 1;">
                    <div class="position-absolute top-0 start-0 w-100 h-100" 
                         style="background: linear-gradient(180deg, rgba(9, 9, 11, 0.45) 0%, rgba(9, 9, 11, 0.78) 100%); z-index: 2;"></div>
                    <div class="info d-flex align-items-center position-relative" style="min-height: 88vh; z-index: 3;">
                        <div class="container">
                            <div class="row justify-content-center text-center">
                                <div class="col-lg-10">
                                    <div class="fmipa-badge mb-3">
                                        <span class="fmipa-badge-dot"></span>
                                        Badan Eksekutif Mahasiswa FMIPA Unhas
                                    </div>

                                    <h2 class="display-3 text-white mb-3" style="font-weight: 900; letter-spacing: -1.5px; line-height: 1.15;">
                                        Kolaborasi Inklusif, Melangkah <span style="color: #FFE500;">Bersama Mahasiswa</span>
                                    </h2>

                                    <p class="lead text-light mb-4 mx-auto" style="max-width: 760px; font-size: 17px; line-height: 1.8; color: #d1d5db !important;">
                                        Menghubungkan sinergi riset, kepedulian sosial, serta aspirasi seluruh departemen sains demi kemajuan dan martabat sivitas akademika FMIPA Unhas.
                                    </p>

                                    <div class="d-flex flex-wrap justify-content-center gap-3">
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

                <!-- Slide 3: Integritas & Kepemimpinan -->
                <div class="carousel-item position-relative" style="min-height: 88vh;">
                    <img src="{{ asset('assets/img/slide/pengurus20262.JPG') }}" 
                         alt="Pengurus BEM FMIPA Unhas 2026" 
                         class="position-absolute top-0 start-0 w-100 h-100" 
                         style="object-fit: cover; object-position: center; z-index: 1;">
                    <div class="position-absolute top-0 start-0 w-100 h-100" 
                         style="background: linear-gradient(180deg, rgba(9, 9, 11, 0.45) 0%, rgba(9, 9, 11, 0.78) 100%); z-index: 2;"></div>
                    <div class="info d-flex align-items-center position-relative" style="min-height: 88vh; z-index: 3;">
                        <div class="container">
                            <div class="row justify-content-center text-center">
                                <div class="col-lg-10">
                                    <div class="fmipa-badge mb-3">
                                        <span class="fmipa-badge-dot"></span>
                                        Badan Eksekutif Mahasiswa FMIPA Unhas
                                    </div>

                                    <h2 class="display-3 text-white mb-3" style="font-weight: 900; letter-spacing: -1.5px; line-height: 1.15;">
                                        Integritas Saintis, Memimpin <span style="color: #FFE500;">Perubahan Nyata</span>
                                    </h2>

                                    <p class="lead text-light mb-4 mx-auto" style="max-width: 760px; font-size: 17px; line-height: 1.8; color: #d1d5db !important;">
                                        Menjadi episentrum kepemimpinan mahasiswa yang berdaya saing global dengan berlandaskan nilai-nilai nalar ilmiah, moralitas, dan keadilan sosial.
                                    </p>

                                    <div class="d-flex flex-wrap justify-content-center gap-3">
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
                        <div class="carousel-item position-relative" style="min-height: 88vh;">
                            <img src="{{ asset($carousel->gambar_path) }}" 
                                 alt="{{ $carousel->judul }}" 
                                 class="position-absolute top-0 start-0 w-100 h-100" 
                                 style="object-fit: cover; object-position: center; z-index: 1;">
                            <div class="position-absolute top-0 start-0 w-100 h-100" 
                                 style="background: linear-gradient(180deg, rgba(9, 9, 11, 0.45) 0%, rgba(9, 9, 11, 0.78) 100%); z-index: 2;"></div>
                            <div class="info d-flex align-items-center position-relative" style="min-height: 88vh; z-index: 3;">
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

    <!-- ======= Dynamic Hero Stats Counter ======= -->
    <div id="hero-stats-wrapper">
        <div style="position: relative; z-index: 10; margin-top: -32px; margin-bottom: 36px;">
            <div class="container">
                <div style="background-color: #111115; border: 1px solid #27272a; border-radius: 4px; padding: 20px 24px;">
                    <div class="row g-3">
                        <div class="col-6 col-lg-3">
                            <div style="border-right: 1px solid #1f1f23; padding-right: 12px;">
                                <div class="d-flex align-items-baseline gap-1">
                                    <span class="hero-counter-value" data-target="6" data-suffix="" style="font-size: 28px; font-weight: 800; color: #fafafa; line-height: 1.1;">6</span>
                                    <span style="width: 6px; height: 6px; background-color: #FFE500; display: inline-block;"></span>
                                </div>
                                <div style="font-size: 13px; font-weight: 600; color: #a1a1aa; margin-top: 4px;">Departemen Sains</div>
                                <div style="font-size: 11.5px; color: #71717a; margin-top: 2px;">Matematika, Fisika, Kimia, Biologi, Geofisika, Statistika</div>
                            </div>
                        </div>

                        <div class="col-6 col-lg-3">
                            <div style="border-right: 1px solid #1f1f23; padding-right: 12px;">
                                <div class="d-flex align-items-baseline gap-1">
                                    <span class="hero-counter-value" data-target="6" data-suffix="" style="font-size: 28px; font-weight: 800; color: #fafafa; line-height: 1.1;">6</span>
                                    <span style="width: 6px; height: 6px; background-color: #FFE500; display: inline-block;"></span>
                                </div>
                                <div style="font-size: 13px; font-weight: 600; color: #a1a1aa; margin-top: 4px;">Bidang Kerja BEM</div>
                                <div style="font-size: 11.5px; color: #71717a; margin-top: 2px;">Pengaderan, Kastrat, Humas, Akademik, Kesekretariatan, Rohis</div>
                            </div>
                        </div>

                        <div class="col-6 col-lg-3">
                            <div style="border-right: 1px solid #1f1f23; padding-right: 12px;">
                                <div class="d-flex align-items-baseline gap-1">
                                    <span class="hero-counter-value" data-target="10" data-suffix="" style="font-size: 28px; font-weight: 800; color: #fafafa; line-height: 1.1;">10</span>
                                    <span style="width: 6px; height: 6px; background-color: #FFE500; display: inline-block;"></span>
                                </div>
                                <div style="font-size: 13px; font-weight: 600; color: #a1a1aa; margin-top: 4px;">Program Kerja 2026</div>
                                <div style="font-size: 11.5px; color: #71717a; margin-top: 2px;">PROGRESIP, Agora MIPA, MIPA Mengabdi, Harmonia, SIGMA, dll.</div>
                            </div>
                        </div>

                        <div class="col-6 col-lg-3">
                            <div>
                                <div class="d-flex align-items-baseline gap-1">
                                    <span class="hero-counter-value" data-target="1000" data-suffix="+" style="font-size: 28px; font-weight: 800; color: #fafafa; line-height: 1.1;">1.000+</span>
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

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const counters = document.querySelectorAll(".hero-counter-value");
            counters.forEach(counter => {
                const target = +counter.getAttribute("data-target");
                const suffix = counter.getAttribute("data-suffix") || "";
                if (!target) return;
                const duration = 1000;
                const steps = 25;
                const stepTime = duration / steps;
                let step = 0;
                const timer = setInterval(() => {
                    step++;
                    const progress = Math.min(step / steps, 1);
                    const easeOut = 1 - Math.pow(1 - progress, 2);
                    const current = Math.round(target * easeOut);
                    counter.innerText = current.toLocaleString('id-ID') + suffix;
                    if (step >= steps) {
                        clearInterval(timer);
                        counter.innerText = target.toLocaleString('id-ID') + suffix;
                    }
                }, stepTime);
            });
        });
    </script>
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
                                <img src="{{ asset('assets/img/ketuaumum.jpg') }}" alt="Ketua Umum BEM FMIPA Unhas" class="img-fluid" style="width: 100%; height: 320px; object-fit: cover;">
                            </div>
                            <div class="mt-3">
                                <span class="badge" style="background-color: #18181c; color: #FFE500; border: 1px solid rgba(255, 229, 0, 0.3); font-weight: 700; font-size: 10.5px; letter-spacing: 0.04em;">
                                    KETUA UMUM BEM FMIPA UNHAS
                                </span>
                                <h5 class="text-white fw-bold mt-2 mb-0" style="font-size: 15px;">Adrian Tri Saputra</h5>
                                <small style="color: #71717a; font-size: 12px;">Periode 2026</small>
                            </div>
                        </div>

                        <div class="col-lg-8 ps-lg-4">
                            <div>
                                <span style="font-size: 11px; font-weight: 700; color: #FFE500; text-transform: uppercase; letter-spacing: 0.08em;">
                                    Sambutan Ketua Umum BEM FMIPA Unhas
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
                                        <div class="text-white fw-bold" style="font-size: 13.5px;">BEM FMIPA UNHAS PERIODE 2026</div>
                                        <small style="color: #71717a;">Universitas Hasanuddin, Makassar</small>
                                    </div>
                                    <a href="/about/inti" class="btn btn-outline-warning" style="font-size: 12.5px; padding: 6px 14px;">
                                        Lihat Pengurus →
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
                <div class="mb-5 text-center">
                    <h2 class="fw-bold text-white" style="font-size: 1.85rem; margin: 0;">
                        VISI & MISI <span style="color: #FFE500;">BEM FMIPA Unhas Periode 2026</span>
                    </h2>
                </div>

                <div class="row g-4 align-items-stretch">
                    <!-- VISI CARD -->
                    <div class="col-lg-5">
                        <div style="background-color: #111115; border: 1px solid #27272a; border-radius: 4px; padding: 28px; height: 100%; display: flex; flex-direction: column; justify-content: space-between;">
                            <div>
                                <div class="d-flex align-items-center gap-2 mb-3">
                                    <span style="background-color: #18181c; color: #FFE500; border: 1px solid rgba(255, 229, 0, 0.3); font-weight: 800; font-size: 11px; letter-spacing: 0.08em; text-transform: uppercase; padding: 3px 10px; border-radius: 2px;">
                                        VISI
                                    </span>
                                </div>
                                <h3 class="text-white fw-bold mb-3" style="font-size: 1.15rem; line-height: 1.6;">
                                    Mewujudkan KM FMIPA Unhas menjadi rumah inklusif yang <span style="color: #FFE500;">progresip, kolaboratif, dan aspiratif</span> bagi semua anggota sebagai representatif tercapainya tujuan pendidikan nasional yang dilandaskan pada tri dharma perguruan tinggi dengan pendekatan keilmuan sains (MIPA).
                                </h3>
                            </div>
                            <div class="pt-3 border-top mt-4" style="border-color: #1f1f23 !important;">
                                <div style="font-size: 12px; color: #FFE500; font-weight: 600;">Tri Dharma Perguruan Tinggi & Keilmuan Sains</div>
                                <div style="font-size: 11px; color: #71717a;">BEM FMIPA Universitas Hasanuddin Periode 2026</div>
                            </div>
                        </div>
                    </div>

                    <!-- 5 MISI ITEMS -->
                    <div class="col-lg-7">
                        <div class="d-flex flex-column gap-2 h-100 justify-content-between">
                            <!-- 01 -->
                            <div style="background-color: #111115; border: 1px solid #27272a; border-radius: 4px; padding: 14px 16px;">
                                <div class="d-flex align-items-start gap-3">
                                    <span style="font-size: 11px; font-weight: 800; color: #FFE500; background-color: #1c1a00; border: 1px solid rgba(255, 229, 0, 0.3); padding: 2px 7px; border-radius: 2px; flex-shrink: 0; margin-top: 2px;">01</span>
                                    <p class="m-0" style="color: #d4d4d8; font-size: 12.5px; line-height: 1.55;">
                                        Menguatkan nilai-nilai pengaderan dan kulturisasi organisasi antar anggota dan lembaga didalamnya sebagai pilar utama dalam menumbuhkan rasa kepemilikan secara inklusif.
                                    </p>
                                </div>
                            </div>

                            <!-- 02 -->
                            <div style="background-color: #111115; border: 1px solid #27272a; border-radius: 4px; padding: 14px 16px;">
                                <div class="d-flex align-items-start gap-3">
                                    <span style="font-size: 11px; font-weight: 800; color: #FFE500; background-color: #1c1a00; border: 1px solid rgba(255, 229, 0, 0.3); padding: 2px 7px; border-radius: 2px; flex-shrink: 0; margin-top: 2px;">02</span>
                                    <p class="m-0" style="color: #d4d4d8; font-size: 12.5px; line-height: 1.55;">
                                        Mendorong kultur intelektual dengan pendekatan keilmuan sains (MIPA) dalam pengelolaan, kerja-kerja maupun dalam pengambilan keputusan organisasi.
                                    </p>
                                </div>
                            </div>

                            <!-- 03 -->
                            <div style="background-color: #111115; border: 1px solid #27272a; border-radius: 4px; padding: 14px 16px;">
                                <div class="d-flex align-items-start gap-3">
                                    <span style="font-size: 11px; font-weight: 800; color: #FFE500; background-color: #1c1a00; border: 1px solid rgba(255, 229, 0, 0.3); padding: 2px 7px; border-radius: 2px; flex-shrink: 0; margin-top: 2px;">03</span>
                                    <p class="m-0" style="color: #d4d4d8; font-size: 12.5px; line-height: 1.55;">
                                        Meningkatkan sinergi antar lembaga internal yang struktural dan koordinatif sebagai satu integral yang kuat didalam KM FMIPA Unhas, serta memperluas jaringan dengan eksternal sebagai representatif organisasi kemahasiswaan yang mewadahi aspirasi anggota.
                                    </p>
                                </div>
                            </div>

                            <!-- 04 -->
                            <div style="background-color: #111115; border: 1px solid #27272a; border-radius: 4px; padding: 14px 16px;">
                                <div class="d-flex align-items-start gap-3">
                                    <span style="font-size: 11px; font-weight: 800; color: #FFE500; background-color: #1c1a00; border: 1px solid rgba(255, 229, 0, 0.3); padding: 2px 7px; border-radius: 2px; flex-shrink: 0; margin-top: 2px;">04</span>
                                    <p class="m-0" style="color: #d4d4d8; font-size: 12.5px; line-height: 1.55;">
                                        Mendorong kesadaran kritis anggota yang reflektif dan aktif dalam menjalankan peran dan fungsi kemahasiswaan nya, beserta peka terhadap isu-isu dan dinamika sosial yang terjadi di Masyarakat.
                                    </p>
                                </div>
                            </div>

                            <!-- 05 -->
                            <div style="background-color: #111115; border: 1px solid #27272a; border-radius: 4px; padding: 14px 16px;">
                                <div class="d-flex align-items-start gap-3">
                                    <span style="font-size: 11px; font-weight: 800; color: #FFE500; background-color: #1c1a00; border: 1px solid rgba(255, 229, 0, 0.3); padding: 2px 7px; border-radius: 2px; flex-shrink: 0; margin-top: 2px;">05</span>
                                    <p class="m-0" style="color: #d4d4d8; font-size: 12.5px; line-height: 1.55;">
                                        Menghadirkan program kerja yang struktural, sistematis, konstekstual, dan terarah dalam mewadahi ruang pertukaran ilmu pengetahuan, kepemimpinan, dan adovakasi.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
                        Enam simpul kekuatan disiplin sains yang berintegral dengan BEM FMIPA Universitas Hasanuddin.
                    </p>
                </div>

                <div class="row g-3 justify-content-center">
                    <!-- 1. HIMATIKA -->
                    <div class="col-md-6 col-lg-4">
                        <a href="https://himatikafmipaunhas.id" target="_blank" class="himpunan-card">
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
                        <a href="https://himastat.sci.unhas.ac.id" target="_blank" class="himpunan-card">
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
                        <a href="https://sl1nk.com/p2fr9su" target="_blank" class="himpunan-card">
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
                        <a href="https://himafi.sci.unhas.ac.id" target="_blank" class="himpunan-card">
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
                        <a href="https://hmgf.sci.unhas.ac.id" target="_blank" class="himpunan-card">
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
                        <a href="https://himbiofmipaunhas001.blogspot.com" target="_blank" class="himpunan-card">
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

        <!-- ======= SECTION 5: BIDANG KERJA BEM FMIPA UNHAS ======= -->
        <div id="bidang-showcase-section">
            <section id="bidang-showcase" class="py-5" style="background-color: #050505;">
                <div class="container" data-aos="fade-up">
                    <div class="text-center mb-5">
                        <div class="fmipa-badge mb-2">
                            <span class="fmipa-badge-dot"></span> Struktur Organisasi Bidang
                        </div>
                        <h2 class="display-6 fw-bold text-white">
                            Bidang Kerja <span style="color: #FFE500;">BEM FMIPA Unhas</span>
                        </h2>
                        <p style="color: #a0a0a0; max-width: 680px; margin: 0 auto; font-size: 15px;">
                            6 Bidang Kerja resmi BEM FMIPA Unhas Periode 2026 berdasarkan rancangan program kerja yang disahkan oleh Ketua Umum Adrian Tri Saputra.
                        </p>
                    </div>

                    <div class="row g-4">
                        <!-- 1. Bidang Pengaderan -->
                        <div class="col-md-6 col-lg-4">
                            <div class="fmipa-card h-100 d-flex flex-column justify-content-between">
                                <div>
                                    <div class="d-flex align-items-center gap-2 mb-3">
                                        <i class="bi bi-compass-fill text-warning fs-4"></i>
                                        <h5 class="text-white fw-bold m-0">Bidang Pengaderan</h5>
                                    </div>
                                    <small class="badge mb-2" style="background: rgba(255, 255, 0, 0.1); color: #FFE500; border: 1px solid rgba(255, 255, 0, 0.3);">Kaderisasi & Karakter Insan</small>
                                    <p style="color: #999; font-size: 13px; line-height: 1.6; margin-bottom: 14px;">
                                        Merumuskan dan mengawal proses pengaderan anggota BEM FMIPA Unhas yang berkarakter tangguh, kritis, dan berintegritas.
                                    </p>
                                    <div style="border-top: 1px solid #1f1f23; padding-top: 10px; margin-bottom: 14px;">
                                        <div style="font-size: 11px; font-weight: 700; color: #a1a1aa; text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 6px;">Program Prioritas 2026:</div>
                                        <ul style="list-style: none; padding: 0; margin: 0; font-size: 12px; color: #d4d4d8;">
                                            <li class="mb-1"><i class="bi bi-check2 text-warning me-1"></i> PROGRESIP 2026 (TW I)</li>
                                            <li class="mb-1"><i class="bi bi-check2 text-warning me-1"></i> Program Pengembangan Kader / PPK (TW I)</li>
                                            <li><i class="bi bi-check2 text-warning me-1"></i> Kader Siang dan Kader Malam</li>
                                        </ul>
                                    </div>
                                </div>
                                <a href="/about/pengaderan" class="fmipa-btn-card">
                                    Detail Bidang <i class="bi bi-arrow-right ms-1"></i>
                                </a>
                            </div>
                        </div>

                        <!-- 2. Bidang Kajian Strategis dan Advokasi -->
                        <div class="col-md-6 col-lg-4">
                            <div class="fmipa-card h-100 d-flex flex-column justify-content-between">
                                <div>
                                    <div class="d-flex align-items-center gap-2 mb-3">
                                        <i class="bi bi-megaphone-fill text-warning fs-4"></i>
                                        <h5 class="text-white fw-bold m-0">Bidang Kajian Strategis dan Advokasi</h5>
                                    </div>
                                    <small class="badge mb-2" style="background: rgba(255, 255, 0, 0.1); color: #FFE500; border: 1px solid rgba(255, 255, 0, 0.3);">Kajian Isu & Advokasi Aspiratif</small>
                                    <p style="color: #999; font-size: 13px; line-height: 1.6; margin-bottom: 14px;">
                                        Garda terdepan pengawalan isu strategis kebijakan kampus, peradaban, serta advokasi hak dan fasilitas sarana akademik mahasiswa.
                                    </p>
                                    <div style="border-top: 1px solid #1f1f23; padding-top: 10px; margin-bottom: 14px;">
                                        <div style="font-size: 11px; font-weight: 700; color: #a1a1aa; text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 6px;">Program Prioritas 2026:</div>
                                        <ul style="list-style: none; padding: 0; margin: 0; font-size: 12px; color: #d4d4d8;">
                                            <li class="mb-1"><i class="bi bi-check2 text-warning me-1"></i> Agora MIPA (TW II)</li>
                                            <li class="mb-1"><i class="bi bi-check2 text-warning me-1"></i> Kajian Kebijakan & Isu Strategis Kampus</li>
                                            <li><i class="bi bi-check2 text-warning me-1"></i> Advokasi Fasilitas & Sarana Mahasiswa</li>
                                        </ul>
                                    </div>
                                </div>
                                <a href="/about/advokasi" class="fmipa-btn-card">
                                    Detail Bidang <i class="bi bi-arrow-right ms-1"></i>
                                </a>
                            </div>
                        </div>

                        <!-- 3. Bidang Hubungan Masyarakat -->
                        <div class="col-md-6 col-lg-4">
                            <div class="fmipa-card h-100 d-flex flex-column justify-content-between">
                                <div>
                                    <div class="d-flex align-items-center gap-2 mb-3">
                                        <i class="bi bi-people-fill text-warning fs-4"></i>
                                        <h5 class="text-white fw-bold m-0">Bidang Hubungan Masyarakat</h5>
                                    </div>
                                    <small class="badge mb-2" style="background: rgba(255, 255, 0, 0.1); color: #FFE500; border: 1px solid rgba(255, 255, 0, 0.3);">Kemitraan Publik & Pengabdian</small>
                                    <p style="color: #999; font-size: 13px; line-height: 1.6; margin-bottom: 14px;">
                                        Jembatan relasi kemitraan eksternal, diseminasi informasi publik, kelestarian lingkungan, dan aksi pengabdian masyarakat nyata berbasis sains.
                                    </p>
                                    <div style="border-top: 1px solid #1f1f23; padding-top: 10px; margin-bottom: 14px;">
                                        <div style="font-size: 11px; font-weight: 700; color: #a1a1aa; text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 6px;">Program Prioritas 2026:</div>
                                        <ul style="list-style: none; padding: 0; margin: 0; font-size: 12px; color: #d4d4d8;">
                                            <li class="mb-1"><i class="bi bi-check2 text-warning me-1"></i> MIPA Mengabdi (TW II)</li>
                                            <li class="mb-1"><i class="bi bi-check2 text-warning me-1"></i> Kemitraan Strategis & Branding Lembaga</li>
                                            <li><i class="bi bi-check2 text-warning me-1"></i> Aksi Kepedulian Lingkungan Hidup</li>
                                        </ul>
                                    </div>
                                </div>
                                <a href="/about/humas" class="fmipa-btn-card">
                                    Detail Bidang <i class="bi bi-arrow-right ms-1"></i>
                                </a>
                            </div>
                        </div>

                        <!-- 4. Bidang Akademik dan Kemahasiswaan -->
                        <div class="col-md-6 col-lg-4">
                            <div class="fmipa-card h-100 d-flex flex-column justify-content-between">
                                <div>
                                    <div class="d-flex align-items-center gap-2 mb-3">
                                        <i class="bi bi-mortarboard-fill text-warning fs-4"></i>
                                        <h5 class="text-white fw-bold m-0">Bidang Akademik & Kemahasiswaan</h5>
                                    </div>
                                    <small class="badge mb-2" style="background: rgba(255, 255, 0, 0.1); color: #FFE500; border: 1px solid rgba(255, 255, 0, 0.3);">Pelayanan Akademik & Wisuda</small>
                                    <p style="color: #999; font-size: 13px; line-height: 1.6; margin-bottom: 14px;">
                                        Menjalankan pengawalan pelayanan akademik, pendampingan hak-hak mahasiswa, serta seremoni penghargaan status keanggotaan.
                                    </p>
                                    <div style="border-top: 1px solid #1f1f23; padding-top: 10px; margin-bottom: 14px;">
                                        <div style="font-size: 11px; font-weight: 700; color: #a1a1aa; text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 6px;">Program Prioritas 2026:</div>
                                        <ul style="list-style: none; padding: 0; margin: 0; font-size: 12px; color: #d4d4d8;">
                                            <li class="mb-1"><i class="bi bi-check2 text-warning me-1"></i> Pelepasan Wisudawan (Setiap Wisuda)</li>
                                            <li class="mb-1"><i class="bi bi-check2 text-warning me-1"></i> Pusat Layanan Informasi Akademik</li>
                                            <li><i class="bi bi-check2 text-warning me-1"></i> Pendampingan Urusan Mahasiswa</li>
                                        </ul>
                                    </div>
                                </div>
                                <a href="/about/akademik" class="fmipa-btn-card">
                                    Detail Bidang <i class="bi bi-arrow-right ms-1"></i>
                                </a>
                            </div>
                        </div>

                        <!-- 5. Bidang Kesekretariatan -->
                        <div class="col-md-6 col-lg-4">
                            <div class="fmipa-card h-100 d-flex flex-column justify-content-between">
                                <div>
                                    <div class="d-flex align-items-center gap-2 mb-3">
                                        <i class="bi bi-folder-check text-warning fs-4"></i>
                                        <h5 class="text-white fw-bold m-0">Bidang Kesekretariatan</h5>
                                    </div>
                                    <small class="badge mb-2" style="background: rgba(255, 255, 0, 0.1); color: #FFE500; border: 1px solid rgba(255, 255, 0, 0.3);">Tata Kelola & Kesekretariatan</small>
                                    <p style="color: #999; font-size: 13px; line-height: 1.6; margin-bottom: 14px;">
                                        Pengelolaan tertib administrasi, kearsipan surat, inventarisasi aset, dan penciptaan lingkungan sekretariat yang representatif.
                                    </p>
                                    <div style="border-top: 1px solid #1f1f23; padding-top: 10px; margin-bottom: 14px;">
                                        <div style="font-size: 11px; font-weight: 700; color: #a1a1aa; text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 6px;">Program Prioritas 2026:</div>
                                        <ul style="list-style: none; padding: 0; margin: 0; font-size: 12px; color: #d4d4d8;">
                                            <li class="mb-1"><i class="bi bi-check2 text-warning me-1"></i> Harmonia (2 Kali/Periode)</li>
                                            <li class="mb-1"><i class="bi bi-check2 text-warning me-1"></i> Optimalisasi Tata Kelola Persuratan & Aset</li>
                                            <li><i class="bi bi-check2 text-warning me-1"></i> Pengelolaan Rumah Tangga & Inventaris BEM</li>
                                        </ul>
                                    </div>
                                </div>
                                <a href="/about/kesek" class="fmipa-btn-card">
                                    Detail Bidang <i class="bi bi-arrow-right ms-1"></i>
                                </a>
                            </div>
                        </div>

                        <!-- 6. Bidang Kerohanian Islam -->
                        <div class="col-md-6 col-lg-4">
                            <div class="fmipa-card h-100 d-flex flex-column justify-content-between">
                                <div>
                                    <div class="d-flex align-items-center gap-2 mb-3">
                                        <i class="bi bi-moon-stars-fill text-warning fs-4"></i>
                                        <h5 class="text-white fw-bold m-0">Bidang Kerohanian Islam</h5>
                                    </div>
                                    <small class="badge mb-2" style="background: rgba(255, 255, 0, 0.1); color: #FFE500; border: 1px solid rgba(255, 255, 0, 0.3);">Spiritualitas, Sains & Syiar Islam</small>
                                    <p style="color: #999; font-size: 13px; line-height: 1.6; margin-bottom: 14px;">
                                        Pembinaan karakter moral dan spiritual islami, pengintegrasian sains dengan nilai Islam, serta dakwah kreatif civitas akademika.
                                    </p>
                                    <div style="border-top: 1px solid #1f1f23; padding-top: 10px; margin-bottom: 14px;">
                                        <div style="font-size: 11px; font-weight: 700; color: #a1a1aa; text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 6px;">Program Prioritas 2026:</div>
                                        <ul style="list-style: none; padding: 0; margin: 0; font-size: 12px; color: #d4d4d8;">
                                            <li class="mb-1"><i class="bi bi-check2 text-warning me-1"></i> SIGMA (TW II)</li>
                                            <li class="mb-1"><i class="bi bi-check2 text-warning me-1"></i> SINTESIS (1 Kali/Periode)</li>
                                            <li><i class="bi bi-check2 text-warning me-1"></i> Pamflet Syiar Islam (Rutin/Pekan)</li>
                                        </ul>
                                    </div>
                                </div>
                                <a href="/about/rohis" class="fmipa-btn-card">
                                    Detail Bidang <i class="bi bi-arrow-right ms-1"></i>
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
        <div id="agenda-feed-wrapper">
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
                                    PENGADERAN • TW I
                                </span>
                                <h5 class="text-white fw-bold mt-2 mb-1" style="font-size: 14px;">PROGRESIP 2026</h5>
                                <p style="color: #a1a1aa; font-size: 12px; line-height: 1.4; margin: 0 0 10px;">
                                    Penerimaan anggota baru, pengenalan KM FMIPA Unhas, dan penanaman nilai dasar kemahasiswaan.
                                </p>
                                <div style="font-size: 11px; color: #71717a; border-top: 1px solid #1f1f23; padding-top: 8px;">
                                    Kampus FMIPA Unhas
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-3">
                            <div style="background-color: #111115; border: 1px solid #27272a; border-radius: 4px; padding: 16px; height: 100%;">
                                <span style="font-size: 10px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.04em; color: #FFE500; background-color: #1c1a00; border: 1px solid rgba(255, 229, 0, 0.3); padding: 1px 6px; border-radius: 2px;">
                                    KASTRAT & ADVOKASI • TW II
                                </span>
                                <h5 class="text-white fw-bold mt-2 mb-1" style="font-size: 14px;">Agora MIPA</h5>
                                <p style="color: #a1a1aa; font-size: 12px; line-height: 1.4; margin: 0 0 10px;">
                                    Ruang diskusi terbuka dan dialogis kritis isu strategis demi meningkatkan kesadaran bersama.
                                </p>
                                <div style="font-size: 11px; color: #71717a; border-top: 1px solid #1f1f23; padding-top: 8px;">
                                    Pelataran / Aula FMIPA
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-3">
                            <div style="background-color: #111115; border: 1px solid #27272a; border-radius: 4px; padding: 16px; height: 100%;">
                                <span style="font-size: 10px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.04em; color: #FFE500; background-color: #1c1a00; border: 1px solid rgba(255, 229, 0, 0.3); padding: 1px 6px; border-radius: 2px;">
                                    HUMAS & PENGABDIAN • TW II
                                </span>
                                <h5 class="text-white fw-bold mt-2 mb-1" style="font-size: 14px;">MIPA Mengabdi</h5>
                                <p style="color: #a1a1aa; font-size: 12px; line-height: 1.4; margin: 0 0 10px;">
                                    Peningkatan kualitas lingkungan hidup melalui edukasi solutif dan aksi pelestarian alam nyata.
                                </p>
                                <div style="font-size: 11px; color: #71717a; border-top: 1px solid #1f1f23; padding-top: 8px;">
                                    Wilayah Mitra / Masyarakat
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-3">
                            <div style="background-color: #111115; border: 1px solid #27272a; border-radius: 4px; padding: 16px; height: 100%;">
                                <span style="font-size: 10px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.04em; color: #FFE500; background-color: #1c1a00; border: 1px solid rgba(255, 229, 0, 0.3); padding: 1px 6px; border-radius: 2px;">
                                    KEROHANIAN ISLAM • TW II
                                </span>
                                <h5 class="text-white fw-bold mt-2 mb-1" style="font-size: 14px;">SIGMA & SINTESIS</h5>
                                <p style="color: #a1a1aa; font-size: 12px; line-height: 1.4; margin: 0 0 10px;">
                                    Studi Islam Generasi Muslim MIPA dan sinergi pembelajaran syariat berpadu dengan nalar sains.
                                </p>
                                <div style="font-size: 11px; color: #71717a; border-top: 1px solid #1f1f23; padding-top: 8px;">
                                    Musholla / Gedung FMIPA
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

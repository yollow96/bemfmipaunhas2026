@extends('layout')
@section('title', 'Tentang BEM FMIPA Unhas - Profil & Konstitusi')

@section('blog')
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: linear-gradient(rgba(0,0,0,0.85), rgba(0,0,0,0.95)), url('{{ asset('assets/img/sekret.jpeg') }}'); min-height: 280px;">
        <div class="container position-relative d-flex flex-column align-items-center text-center" data-aos="fade">
            <span class="fmipa-badge mb-3">
                <i class="bi bi-info-circle"></i> Profil & Konstitusi
            </span>
            <h2 class="text-white fw-bold mb-2 display-6">Tentang BEM FMIPA Unhas</h2>
            <ol class="d-flex gap-2 p-0 list-unstyled" style="font-size: 14px;">
                <li><a href="/" style="color: #FFE500;">Home</a></li>
                <li style="color: #94a3b8;" aria-hidden="true">/</li>
                <li class="text-white">Tentang BEM</li>
            </ol>
        </div>
    </div><!-- End Breadcrumbs -->

    <main id="main" style="background-color: #000000;">
        <div class="container py-5">
            <!-- ======= Sejarah Section ======= -->
            <section id="sejarah" class="py-4">
                <div class="container" data-aos="fade-up">
                    <div class="fmipa-card p-4 p-lg-5">
                        <div class="d-flex align-items-center gap-3 mb-4 flex-wrap">
                            <div style="width: 44px; height: 44px; border-radius: 4px; background-color: #111115; border: 1px solid #27272a; display: flex; align-items: center; justify-content: center; color: #FFE500; font-size: 20px;">
                                <i class="bi bi-hourglass-split"></i>
                            </div>
                            <div>
                                <span class="badge px-2 py-1 mb-1" style="background: rgba(255, 229, 0, 0.12); color: #FFE500; font-size: 11px; font-weight: 700; border-radius: 2px;">
                                    CATATAN HISTORIS
                                </span>
                                <h3 class="text-white fw-bold m-0" style="font-size: 22px;">Kilas Balik Sejarah Perjuangan Mahasiswa MIPA</h3>
                                <small style="color: #a1a1aa;">Fakultas Matematika dan Ilmu Pengetahuan Alam Universitas Hasanuddin</small>
                            </div>
                        </div>

                        <div class="row align-items-start gy-4 mt-2">
                            <div class="col-lg-4 text-center">
                                <div class="p-3" style="background: #111115; border: 1px solid #27272a; border-radius: 4px;">
                                    <img src="{{ asset('assets/img/alm_prof_diaraya.png') }}" alt="Alm. Dr. Diaraya, M. Ak" class="img-fluid mb-3" style="max-height: 280px; object-fit: cover; border-radius: 2px;">
                                    <h5 class="text-white fw-bold m-0" style="font-size: 16px;">Alm. Dr. Diaraya, M. Ak</h5>
                                    <small style="color: #FFE500; font-weight: 700; font-size: 12px;">Perintis & Tokoh Pendidik FMIPA Unhas</small>
                                </div>
                            </div>

                            <div class="col-lg-8" style="color: #d4d4d8; font-size: 14.5px; line-height: 1.8;">
                                <h4 class="text-white fw-bold mb-3" style="font-size: 19px;">
                                    "25 Tahun yang Lalu: Jejak Awal Kebersamaan Mahasiswa Sains"
                                </h4>
                                <p>
                                    Sulit rasanya memulai menulis kata demi kata untuk menceritakan kembali kenangan awal berdirinya pergerakan mahasiswa di Fakultas Matematika dan Ilmu Pengetahuan Alam Universitas Hasanuddin. Bukan karena peristiwa masa lampau telah dilupakan, sama sekali bukan. Bahkan teramat sulit untuk melupakannya, karena banyaknya suka dan duka yang telah dilewati dalam merajut marwah sains di kampus merah ini.
                                </p>
                                <p>
                                    Sebenarnya, keinginan untuk membentuk wadah persatuan mahasiswa sains sudah ada semenjak awal diterima menjadi mahasiswa pada tahun 1981. Waktu itu, ruang K.13 di Kampus Baraya menjadi saksi bisu tempat perkuliahan, diskusi analitis, perdebatan nalar kritis, hingga perumusan musyawarah kelembagaan mahasiswa.
                                </p>
                                <p>
                                    Meskipun hanya memiliki fasilitas yang sangat terbatas untuk kuliah dan berorganisasi, hal itu bukan halangan untuk melahirkan karya nyata. Mahasiswa secara mandiri menerbitkan modul-modul sains, mengadakan pengabdian bina akrab di Malino, hingga membentuk forum musyawarah kerja dan panitia independen yang menjadi cikal bakal tradisi demokrasi ilmiah mahasiswa FMIPA Unhas hingga hari ini.
                                </p>
                                <div class="p-3 mt-3" style="background: #111115; border-left: 3px solid #FFE500; border-radius: 2px;">
                                    <p class="m-0 text-white" style="font-style: italic; font-size: 13.5px;">
                                        "Semoga generasi penerus senantiasa menjunjung tinggi nalar kritis, integritas ilmiah, akhlak mulia, dan kecintaan tulus terhadap almamater Fakultas MIPA Universitas Hasanuddin di manapun berada."
                                    </p>
                                    <small class="d-block text-warning mt-2 fw-semibold">(Dikutip dari Catatan Sejarah Buletin FMIPA Unhas)</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- ======= Struktur Organisasi Section ======= -->
            <section id="struktur" class="py-5" style="border-top: 1px solid #1a1a1a;">
                <div class="container" data-aos="fade-up">
                    <div class="section-header text-center mb-5">
                        <span class="fmipa-badge mb-2"><i class="bi bi-diagram-3"></i> Tata Kelola Lembaga</span>
                        <h2 class="display-6 fw-bold text-white">Struktur <span style="color: #FFE500;">Organisasi BEM FMIPA</span></h2>
                        <p style="color: #94A3B8; max-width: 650px; margin: 0 auto; font-size: 15px;">
                            Jajaran pimpinan, dewan perwakilan mahasiswa, serta bidang dan biro yang mengawal roda kelembagaan BEM FMIPA Unhas.
                        </p>
                    </div>

                    <div class="body1">
                        <div class="row container1 g-4 justify-content-center" data-aos="fade-up" data-aos-delay="200">

                            <!-- Card 1: Inti -->
                            <div class="col-lg-4 col-md-6">
                                <div class="card" data-aos="fade-up" data-aos-delay="100">
                                    <div class="face face1">
                                        <div class="content">
                                            <img src="{{ asset('assets/img/icon/inti.png') }}" alt="Struktur Inti">
                                            <h3>Struktur Inti</h3>
                                        </div>
                                    </div>
                                    <div class="face face2">
                                        <div class="content">
                                            <p>Ketua Umum, Sekretaris Umum, dan Bendahara Umum yang memimpin arah gerak strategis organisasi.</p>
                                            <a href="/about/inti">Lihat Pengurus</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Card 2: Struktur Organisasi Bagan -->
                            <div class="col-lg-4 col-md-6">
                                <div class="card" data-aos="fade-up" data-aos-delay="100">
                                    <div class="face face1">
                                        <div class="content">
                                            <img src="{{ asset('assets/img/icon/struktur.png') }}" alt="Bagan Struktur">
                                            <h3>Bagan Struktur</h3>
                                        </div>
                                    </div>
                                    <div class="face face2">
                                        <div class="content">
                                            <p>Diagram hierarki matriks kepengurusan lengkap BEM FMIPA Unhas Periode 2025/2026.</p>
                                            <a href="/about/struktur">Lihat Bagan</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Card 3: Dewan Mahasiswa -->
                            <div class="col-lg-4 col-md-6">
                                <div class="card" data-aos="fade-up" data-aos-delay="100">
                                    <div class="face face1">
                                        <div class="content">
                                            <img src="{{ asset('assets/img/icon/dewan.png') }}" alt="Dewan Mahasiswa">
                                            <h3>Dewan Mahasiswa</h3>
                                        </div>
                                    </div>
                                    <div class="face face2">
                                        <div class="content">
                                            <p>Lembaga legislatif dan pengawasan yang mengawal aspirasi serta produk hukum mahasiswa FMIPA.</p>
                                            <a href="/about/dewan">Lihat Pengurus</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Card 4: Kerohanian -->
                            <div class="col-lg-4 col-md-6">
                                <div class="card" data-aos="fade-up" data-aos-delay="100">
                                    <div class="face face1">
                                        <div class="content">
                                            <img src="{{ asset('assets/img/icon/rohis.png') }}" alt="Bidang Kerohanian">
                                            <h3>Bidang Kerohanian</h3>
                                        </div>
                                    </div>
                                    <div class="face face2">
                                        <div class="content">
                                            <p>Pembinaan spiritualitas, nilai moralitas intelektual, dan ketakwaan civitas akademika.</p>
                                            <a href="/about/rohis">Lihat Pengurus</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Card 5: Pengaderan -->
                            <div class="col-lg-4 col-md-6">
                                <div class="card" data-aos="fade-up" data-aos-delay="100">
                                    <div class="face face1">
                                        <div class="content">
                                            <img src="{{ asset('assets/img/icon/pengaderan.png') }}" alt="Bidang Pengaderan">
                                            <h3>Bidang Pengaderan</h3>
                                        </div>
                                    </div>
                                    <div class="face face2">
                                        <div class="content">
                                            <p>Mengawal kurikulum pembinaan LKM, karakter kepemimpinan saintis tangguh dan adaptif.</p>
                                            <a href="/about/pengaderan">Lihat Pengurus</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Card 6: Akademik & Riset -->
                            <div class="col-lg-4 col-md-6">
                                <div class="card" data-aos="fade-up" data-aos-delay="100">
                                    <div class="face face1">
                                        <div class="content">
                                            <img src="{{ asset('assets/img/icon/akademik.png') }}" alt="Akademik & Riset">
                                            <h3>Akademik & Riset</h3>
                                        </div>
                                    </div>
                                    <div class="face face2">
                                        <div class="content">
                                            <p>Advokasi isu perkuliahan, penyesuaian UKT, bimbingan proposal PKM, dan olimpiade sains.</p>
                                            <a href="/about/akademik">Lihat Pengurus</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Card 7: Minat & Bakat -->
                            <div class="col-lg-4 col-md-6">
                                <div class="card" data-aos="fade-up" data-aos-delay="100">
                                    <div class="face face1">
                                        <div class="content">
                                            <img src="{{ asset('assets/img/icon/miba.png') }}" alt="Minat & Bakat">
                                            <h3>Minat & Bakat</h3>
                                        </div>
                                    </div>
                                    <div class="face face2">
                                        <div class="content">
                                            <p>Wadah apresiasi dan pengembangan bakat keolahragaan, turnamen esports, dan seni budaya.</p>
                                            <a href="/about/miba">Lihat Pengurus</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Card 8: Hubungan Eksternal -->
                            <div class="col-lg-4 col-md-6">
                                <div class="card" data-aos="fade-up" data-aos-delay="100">
                                    <div class="face face1">
                                        <div class="content">
                                            <img src="{{ asset('assets/img/icon/eksternal.png') }}" alt="Hubungan Eksternal">
                                            <h3>Hubungan Eksternal</h3>
                                        </div>
                                    </div>
                                    <div class="face face2">
                                        <div class="content">
                                            <p>Mengkaji isu sosial publik, kemitraan strategis, dan pengabdian masyarakat (MIPA Mengabdi).</p>
                                            <a href="/about/eksternal">Lihat Pengurus</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Card 9: Kesekretariatan -->
                            <div class="col-lg-4 col-md-6">
                                <div class="card" data-aos="fade-up" data-aos-delay="100">
                                    <div class="face face1">
                                        <div class="content">
                                            <img src="{{ asset('assets/img/icon/kesek.png') }}" alt="Biro Kesekretariatan">
                                            <h3>Kesekretariatan</h3>
                                        </div>
                                    </div>
                                    <div class="face face2">
                                        <div class="content">
                                            <p>Pengelolaan administrasi persuratan, inventaris fasilitas, dan operasional sekretariat.</p>
                                            <a href="/about/kesek">Lihat Pengurus</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @auth
                                <div class="col-12 text-center mt-4">
                                    <a class="fmipa-btn-primary" href="/about/pengurus">
                                        <i class="bi bi-gear-fill me-1"></i> Panel Kelola Struktur Organisasi
                                    </a>
                                </div>
                            @endauth

                        </div>
                    </div>
                </div>
            </section>

            <!-- ======= Konstitusi PDF Section ======= -->
            <section id="konstitusi" class="py-5" style="border-top: 1px solid #1a1a1a;">
                <div class="container" data-aos="fade-up">
                    <div class="section-header text-center mb-4">
                        <span class="fmipa-badge mb-2"><i class="bi bi-journal-text"></i> Landasan Hukum</span>
                        <h2 class="display-6 fw-bold text-white">Buku Konstitusi & <span style="color: #FFE500;">Pedoman Organisasi</span></h2>
                        <p style="color: #94A3B8; max-width: 650px; margin: 0 auto; font-size: 15px;">
                            Dokumen resmi Anggaran Dasar dan Anggaran Rumah Tangga (AD/ART) BEM FMIPA Universitas Hasanuddin.
                        </p>
                    </div>

                    <div class="text-center mb-4">
                        <a href="{{ asset('assets/pdf/Buku-Konstitusi.pdf') }}" target="_blank" class="fmipa-btn-primary">
                            <i class="bi bi-file-earmark-pdf-fill me-1"></i> Download / Buka Dokumen PDF
                        </a>
                    </div>

                    <div class="ratio ratio-16x9 overflow-hidden" style="border: 1px solid #27272a; border-radius: 4px; min-height: 700px; background-color: #0d0d0f;">
                        <object class="embed-responsive-item w-100 h-100" data="{{ asset('assets/pdf/Buku-Konstitusi.pdf') }}" type="application/pdf">
                            <div class="p-5 text-center text-white d-flex flex-column align-items-center justify-content-center h-100">
                                <h5 class="text-white">Dokumen Konstitusi Resmi BEM FMIPA Unhas</h5>
                                <p class="text-muted" style="font-size: 13px;">Browser Anda memerlukan pembacaan langsung atau pengunduhan file ini.</p>
                                <a href="{{ asset('assets/pdf/Buku-Konstitusi.pdf') }}" class="fmipa-btn-primary mt-2">
                                    Unduh File PDF
                                </a>
                            </div>
                        </object>
                    </div>
                </div>
            </section>
        </div>
    </main>
@endsection

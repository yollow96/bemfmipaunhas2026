@extends('layout')
@section('title', $blog->judul . ' - Kabar BEM FMIPA Unhas')

@section('blog')
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: linear-gradient(rgba(0,0,0,0.85), rgba(0,0,0,0.95)), url('{{ asset('assets/img/sekret.jpeg') }}'); min-height: 280px;">
        <div class="container position-relative d-flex flex-column align-items-center text-center" data-aos="fade">
            <span class="fmipa-badge mb-3">Warta & Publikasi</span>
            <h2 class="text-white fw-bold mb-2 display-6" style="max-width: 800px; line-height: 1.25;">
                {{ $blog->judul }}
            </h2>
            <ol class="d-flex gap-2 p-0 list-unstyled" style="font-size: 14px;">
                <li><a href="/" style="color: #FFE500;">Home</a></li>
                <li style="color: #94a3b8;" aria-hidden="true">/</li>
                <li><a href="/guest/blog" style="color: #FFE500;">Berita</a></li>
                <li style="color: #94a3b8;" aria-hidden="true">/</li>
                <li class="text-white">Detail Artikel</li>
            </ol>
        </div>
    </div><!-- End Breadcrumbs -->

    <main id="main" style="background-color: #000000;">
        <section id="blog" class="blog py-5">
            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row g-5">
                    <!-- Main Article Column -->
                    <div class="col-lg-8">
                        <article class="blog-details">
                            @if($blog->image)
                                <div class="post-img overflow-hidden mb-4" style="border: 1px solid #27272a; border-radius: 4px;">
                                    <img src="{{ asset($blog->image) }}" alt="{{ $blog->judul }}" class="img-fluid w-100" style="max-height: 480px; object-fit: cover;" onerror="this.src='{{ asset('assets/img/default.jpg') }}'">
                                </div>
                            @endif

                            <div class="d-flex align-items-center gap-3 flex-wrap mb-3">
                                <span class="badge" style="background: rgba(255, 229, 0, 0.12); color: #FFE500; border: 1px solid #27272a; padding: 6px 12px; font-size: 12px; font-weight: 700; border-radius: 2px;">
                                    {{ $blog->kategori ?? 'Publikasi Resmi' }}
                                </span>
                                <small style="color: #a1a1aa;">
                                    {{ $blog->author ?? 'BEM FMIPA Unhas' }}
                                </small>
                                <small style="color: #71717a;">
                                    {{ $blog->created_at ? $blog->created_at->format('d F Y') : 'Terbaru' }}
                                </small>
                            </div>

                            <h1 class="title mb-4">
                                {{ $blog->judul }}
                            </h1>

                            <div class="content pt-2 border-top" style="border-color: #1f1f28 !important;">
                                {!! $blog->desc !!}
                            </div>

                            <div class="meta-bottom mt-5 pt-4 d-flex justify-content-between align-items-center flex-wrap gap-3">
                                <div class="d-flex align-items-center gap-2">
                                    <i class="bi bi-folder2-open text-warning fs-5"></i>
                                    <span class="text-white fw-bold" style="font-size: 13.5px;">Kategori:</span>
                                    <span class="badge" style="background: #141418; color: #FFE500; border: 1px solid #2a2a35;">
                                        {{ $blog->kategori ?? 'Informasi' }}
                                    </span>
                                </div>

                                <div>
                                    <a href="/guest/blog" class="fmipa-btn-outline" style="font-size: 13px; padding: 8px 20px !important;">
                                        <i class="bi bi-arrow-left me-1"></i> Kembali ke Semua Berita
                                    </a>
                                </div>
                            </div>
                        </article>
                    </div>

                    <!-- Sidebar Column -->
                    <div class="col-lg-4">
                        <div class="sidebar">
                            <!-- Search Widget -->
                            <div class="sidebar-item search-form mb-4">
                                <h3 class="sidebar-title">Cari Artikel</h3>
                                <form action="/guest/blog" method="GET" class="mt-3">
                                    <input type="text" name="search" placeholder="Kata kunci..." class="fmipa-input w-100">
                                    <button type="submit"><i class="bi bi-search"></i></button>
                                </form>
                            </div>

                            <!-- Recent Posts Widget -->
                            <div class="sidebar-item recent-posts mb-4">
                                <h3 class="sidebar-title">Kabar Terkini Lainnya</h3>
                                <div class="mt-3">
                                    @if(isset($recent) && count($recent) > 0)
                                        @foreach ($recent as $rItem)
                                            <div class="post-item">
                                                <img src="{{ asset($rItem->image) }}" alt="{{ $rItem->judul }}" onerror="this.src='{{ asset('assets/img/default.jpg') }}'">
                                                <div>
                                                    <h4>
                                                        <a href="{{ url('/guest/blog/' . $rItem->id) }}">
                                                            {{ Str::limit($rItem->judul, 45) }}
                                                        </a>
                                                    </h4>
                                                    <time><i class="bi bi-clock me-1"></i>{{ $rItem->created_at ? $rItem->created_at->format('d M Y') : 'Terbaru' }}</time>
                                                </div>
                                            </div>
                                        @endforeach
                                    @else
                                        <p style="color: #a1a1aa; font-size: 13px;">Belum ada berita terkait lainnya.</p>
                                    @endif
                                </div>
                            </div>

                            <!-- Quick Access Banner -->
                            <div class="p-4 mt-4" style="background: #111115; border: 1px solid #27272a; border-radius: 4px;">
                                <span class="badge mb-2 px-2 py-1" style="background-color: #FFE500; color: #09090b; font-weight: 700; font-size: 10px; border-radius: 2px;">
                                    LAYANAN ADVOKASI
                                </span>
                                <h5 class="text-white fw-bold mb-2" style="font-size: 16px;">Ruang Suara Mahasiswa FMIPA</h5>
                                <p style="color: #a0a0a0; font-size: 12.5px; line-height: 1.6;">
                                    Sampaikan aspirasi perkuliahan, fasilitas kampus, dan UKT langsung kepada pengurus BEM FMIPA Unhas.
                                </p>
                                <a href="/#aspirasi" class="fmipa-btn-primary w-100 justify-content-center mt-2" style="font-size: 12px; padding: 9px 18px !important;">
                                    <i class="bi bi-chat-quote-fill me-1"></i> Tulis Aspirasi
                                </a>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </section>
    </main>
@endsection

@extends('layout')
@section('title', 'Kabar & Berita - BEM FMIPA Unhas')

@section('blog')
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: linear-gradient(rgba(0,0,0,0.8), rgba(0,0,0,0.9)), url('{{ asset('assets/img/sekret.jpeg') }}'); min-height: 280px;">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
            <span class="fmipa-badge mb-3">Publikasi Resmi</span>
            <h2 class="text-white fw-bold mb-2">Kabar & Opini Sains</h2>
            <ol class="d-flex gap-2 p-0 list-unstyled" style="font-size: 14px;">
                <li><a href="/" style="color: #FFE500;">Home</a></li>
                <li style="color: #94a3b8;" aria-hidden="true">/</li>
                <li class="text-white">Berita</li>
            </ol>
        </div>
    </div><!-- End Breadcrumbs -->

    <main id="main" style="background-color: #000000;">
        <section id="blog" class="blog py-5">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                @guest
                @else
                    <div class="mb-4">
                        <a href="/blog" class="fmipa-btn-primary" style="font-size: 13px; padding: 8px 20px !important;">
                            <i class="fa fa-regular fa-eye me-1"></i> Panel Kelola Blog
                        </a>
                    </div>
                @endguest

                <div class="section-header text-center mb-5">
                    <h2 class="text-white fw-bold display-6">
                        Arsip Kabar & Berita <span style="color: #FFFF00;">BEM FMIPA</span>
                    </h2>
                    <p style="color: #a0a0a0; max-width: 650px; margin: 0 auto; font-size: 15px;">
                        Kanal resmi publikasi berita, rilis kegiatan mahasiswa, kajian nalar kritis, dan informasi seputar Fakultas MIPA Universitas Hasanuddin.
                    </p>
                </div>

                <div class="row gy-4 posts-list">
                    @forelse ($blog as $item)
                        <div class="col-xl-4 col-md-6">
                            <div class="fmipa-news-card h-100">
                                <div class="fmipa-news-img">
                                    <img src="{{ asset($item->image) }}" alt="{{ $item->judul }}" width="400" height="240" onerror="this.src='{{ asset('assets/img/default.jpg') }}'">
                                    <span class="fmipa-news-date">
                                        <i class="bi bi-calendar3 me-1"></i> {{ $item->created_at ? $item->created_at->format('d M Y') : 'Terbaru' }}
                                    </span>
                                </div>

                                <div class="p-4 d-flex flex-column justify-content-between flex-grow-1">
                                    <div>
                                        <div class="d-flex align-items-center gap-2 mb-2">
                                            <span class="badge" style="background: rgba(255, 255, 0, 0.15); color: #FFFF00; font-size: 11px;">
                                                {{ $item->kategori ?? 'Informasi' }}
                                            </span>
                                            <small style="color: #a1a1aa;">
                                                <i class="bi bi-person me-1"></i> {{ $item->author ?? 'BEM FMIPA' }}
                                            </small>
                                        </div>

                                        <h4 class="text-white fw-bold mb-2" style="font-size: 18px; line-height: 1.4;">
                                            {{ Str::limit($item->judul, 50) }}
                                        </h4>

                                        <p style="color: #b0b0b0; font-size: 13.5px; line-height: 1.6;">
                                            {!! Str::limit(strip_tags($item->desc), 90) !!}
                                        </p>
                                    </div>

                                    <div class="pt-3 border-top mt-3" style="border-color: #222 !important;">
                                        <a href="{{ url('/guest/blog/' . $item->id) }}" class="text-warning fw-bold text-decoration-none d-inline-flex align-items-center gap-1" style="font-size: 13px;">
                                            <span>Baca Artikel Lengkap</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-12 text-center py-5">
                            <div class="p-4 d-inline-block" style="background: #111115; border: 1px solid #27272a; border-radius: 4px;">
                                <h6 class="text-white m-0">Belum ada artikel berita yang dipublikasikan.</h6>
                            </div>
                        </div>
                    @endforelse
                </div>

                <div class="blog-pagination mt-5 d-flex justify-content-center">
                    {{ $blog->links('pagination::bootstrap-4') }}
                </div>
            </div>
        </section>
    </main>
@endsection

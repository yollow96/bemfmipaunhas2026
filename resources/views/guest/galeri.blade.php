@extends('layout')
@section('title', 'Galeri Kegiatan - BEM FMIPA Unhas')

@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: linear-gradient(rgba(0,0,0,0.8), rgba(0,0,0,0.9)), url('{{ asset('assets/img/sekret.jpeg') }}'); min-height: 280px;">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
            <span class="fmipa-badge mb-3">Dokumentasi Visual</span>
            <h2 class="text-white fw-bold mb-2">Galeri Kegiatan Mahasiswa</h2>
            <ol class="d-flex gap-2 p-0 list-unstyled" style="font-size: 14px;">
                <li><a href="/" style="color: #FFE500;">Home</a></li>
                <li style="color: #94a3b8;" aria-hidden="true">/</li>
                <li class="text-white">Galeri</li>
            </ol>
        </div>
    </div><!-- End Breadcrumbs -->

    <main id="main" style="background-color: #000000;">
        <section id="projects" class="projects py-5">
            <div class="container" data-aos="fade-up">
                @guest
                @else
                    <div class="mb-4">
                        <a href="/galeri" class="fmipa-btn-primary" style="font-size: 13px; padding: 8px 20px !important;">
                            Panel Galeri
                        </a>
                    </div>
                @endguest

                <div class="section-header text-center mb-5">
                    <h2 class="text-white fw-bold display-6">
                        Arsip Dokumentasi <span style="color: #FFE500;">BEM FMIPA</span>
                    </h2>
                    <p style="color: #a1a1aa; max-width: 650px; margin: 0 auto; font-size: 15px;">
                        Rekaman jejak perjuangan, pergerakan advokasi, pengabdian masyarakat, dan kebersamaan keluarga besar mahasiswa FMIPA Unhas.
                    </p>
                </div>

                <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order">

                    <ul class="portfolio-flters d-flex justify-content-center flex-wrap gap-2 mb-5 list-unstyled" data-aos="fade-up" data-aos-delay="100" role="tablist" aria-label="Filter kategori galeri">
                        <li data-filter="*" class="filter-active" role="tab" tabindex="0" aria-selected="true" style="cursor: pointer; padding: 6px 16px; border-radius: 4px; font-weight: 700; font-size: 12px; border: 1px solid #27272a;">Semua</li>
                        <li data-filter=".filter-Mathematics" role="tab" tabindex="0" aria-selected="false" style="cursor: pointer; padding: 6px 16px; border-radius: 4px; font-weight: 600; font-size: 12px; border: 1px solid #27272a;">Kegiatan Sains</li>
                        <li data-filter=".filter-Bina" role="tab" tabindex="0" aria-selected="false" style="cursor: pointer; padding: 6px 16px; border-radius: 4px; font-weight: 600; font-size: 12px; border: 1px solid #27272a;">Bina Akrab</li>
                        <li data-filter=".filter-Himatika" role="tab" tabindex="0" aria-selected="false" style="cursor: pointer; padding: 6px 16px; border-radius: 4px; font-weight: 600; font-size: 12px; border: 1px solid #27272a;">Pengabdian Masyarakat</li>
                        <li data-filter=".filter-Latihan" role="tab" tabindex="0" aria-selected="false" style="cursor: pointer; padding: 6px 16px; border-radius: 4px; font-weight: 600; font-size: 12px; border: 1px solid #27272a;">Latihan Kepemimpinan</li>
                    </ul><!-- End Projects Filters -->

                    <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">
                        @forelse ($galeri as $item)
                            <div class="col-lg-4 col-md-6 portfolio-item filter-{{ $item->kegiatan }}">
                                <div class="portfolio-content h-100 overflow-hidden position-relative" style="border: 1px solid #27272a; border-radius: 4px; background: #111115;">
                                    <img src="{{ asset($item->image) }}" class="img-fluid w-100" width="400" height="260" alt="{{ $item->kegiatan }}" style="height: 260px; object-fit: cover;">
                                    <div class="portfolio-info d-flex align-items-center justify-content-between p-3 position-absolute bottom-0 start-0 end-0" style="background: rgba(9, 9, 11, 0.95); border-top: 1px solid #27272a;">
                                        <div>
                                            <h5 class="text-white fw-bold m-0" style="font-size: 14px;">{{ $item->kegiatan }}</h5>
                                            <small style="color: #FFE500; font-size: 11px;">Dokumentasi Resmi</small>
                                        </div>
                                        <a href="{{ asset($item->image) }}" title="{{ $item->kegiatan }}"
                                            aria-label="Lihat foto {{ $item->kegiatan }} layar penuh"
                                            data-gallery="portfolio-gallery-{{ $item->kegiatan }}"
                                            class="glightbox preview-link text-warning fs-5"><i class="bi bi-arrows-fullscreen" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div><!-- End Projects Item -->
                        @empty
                            <div class="col-12 text-center py-5">
                                <div class="p-4 d-inline-block" style="background: #111115; border: 1px solid #27272a; border-radius: 4px;">
                                    <h6 class="text-white m-0">Belum ada dokumentasi galeri yang diunggah.</h6>
                                </div>
                            </div>
                        @endforelse
                    </div><!-- End Projects Container -->
                </div>
            </div>
        </section>
    </main>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const filterTabs = document.querySelectorAll(".portfolio-flters li[role='tab']");
            filterTabs.forEach(tab => {
                tab.addEventListener("keydown", function (e) {
                    if (e.key === "Enter" || e.key === " ") {
                        e.preventDefault();
                        this.click();
                        filterTabs.forEach(t => t.setAttribute("aria-selected", "false"));
                        this.setAttribute("aria-selected", "true");
                    }
                });
            });
        });
    </script>
@endsection

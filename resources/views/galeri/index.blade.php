@extends('layout')
@section('title', 'Galeri')
@section('content')
    <div class="breadcrumbs d-flex align-items-center" style="background-image: linear-gradient(rgba(0,0,0,0.8), rgba(0,0,0,0.9)), url('{{ asset('assets/img/sekret.jpeg') }}'); min-height: 260px;">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

            <h2 class="text-white fw-bold mb-2">Panel Kelola Galeri Kegiatan</h2>
            <ol class="d-flex gap-2 p-0 list-unstyled" style="font-size: 14px;">
                <li><a href="/" style="color: #FFE500;">Home</a></li>
                <li style="color: #94a3b8;" aria-hidden="true">/</li>
                <li class="text-white">Kelola Galeri</li>
            </ol>

        </div>
    </div><!-- End Breadcrumbs -->
    <main id="main" style="background-color: #000000;">

        <section id="projects" class="projects py-5">
            <div class="container" data-aos="fade-up">
                <div class="d-flex gap-2 mb-4">
                    <a href="{{ url('/galeri/create') }}" class="fmipa-btn-primary" style="font-size: 13px; padding: 8px 18px !important;">
                        <i class="fa fa-plus me-1" aria-hidden="true"></i> Upload Foto Baru
                    </a>
                    <a href="{{ url('/guest/galeri') }}" class="fmipa-btn-outline" style="font-size: 13px; padding: 8px 18px !important;">
                        <i class="fa fa-regular fa-eye me-1" aria-hidden="true"></i> Lihat Tampilan Publik
                    </a>
                </div>
                <div class="section-header mt-3">

                </div>

                <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
                    data-portfolio-sort="original-order">

                    <ul class="portfolio-flters" data-aos="fade-up" data-aos-delay="100">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-Mathematics">Mathematics Event</li>
                        <li data-filter=".filter-Bina">Bina Akrab</li>
                        <li data-filter=".filter-Himatika">Premi</li>
                        <li data-filter=".filter-Latihan">Latihan Kepemimpinan</li>
                        <li data-filter=".filter-Reset">Himatika Reset</li>
                    </ul><!-- End Projects Filters -->

                    <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">
                        @foreach ($galeri as $item)
                            <div class="col-lg-4 col-md-6 portfolio-item filter-{{ $item->kegiatan }}">
                                <div class="portfolio-content h-100">
                                    <img src="{{ asset($item->image) }}" class="img-fluid" alt="">
                                    <div class="portfolio-info">
                                        <h4>{{ $item->kegiatan }}</h4>
                                        <a href="{{ asset($item->image) }}" title="{{ $item->kegiatan }}"
                                            data-gallery="portfolio-gallery-{{ $item->kegiatan }}"
                                            class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                        <form method="POST" action="{{ url('/galeri' . '/' . $item->id) }}"
                                            accept-charset="UTF-8" style="display:inline">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-sm"
                                                style="background-color: #ff0000; color:#fff" title="Delete anggota"
                                                onclick="return confirm(&quot;Confirm delete?&quot;)"><i
                                                    class="bi bi-trash3" aria-hidden="true"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div><!-- End Projects Item -->
                        @endforeach
                    </div><!-- End Projects Container -->

                </div>

            </div>
        </section>
    </main><!-- End #main -->
@endsection

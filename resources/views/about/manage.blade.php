@extends('layout')
@section('title', 'Manage Struktur Organisasi')
@section('content')

    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{ asset('assets/img/sekret.jpeg') }}">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

            <h2>Manage Struktur Organisasi</h2>
            <ol>
                <li><a href="/">Home</a></li>
                <li><a href="/about#struktur">about</a></li>
                <li>Manage Struktur Organisasi</li>
            </ol>

        </div>
    </div><!-- End Breadcrumbs -->
    <main id="main">

        <section id="projects" class="projects">
            <div class="container" data-aos="fade-up">
                <a href="{{ url('/about/pengurus/create') }}" class="btn-add ms-3" title="Tambahkan data anggota">
                    <i class="fa fa-plus" aria-hidden="true"></i> Add New
                </a>

                <div class="portfolio-isotope team  mt-4" data-portfolio-filter="*" data-portfolio-layout="masonry"
                    data-portfolio-sort="original-order">

                    <ul class="portfolio-flters" data-aos="fade-up" data-aos-delay="100">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-inti">inti</li>
                        <li data-filter=".filter-dewan">dewan</li>
                        <li data-filter=".filter-kerohanian">kerohanian</li>
                        <li data-filter=".filter-pengaderan">pengaderan</li>
                        <li data-filter=".filter-AkademikDanKemahasiswaan">Akademik Dan Kemahasiswaan</li>
                        <li data-filter=".filter-MinatDanBakat">Minat Dan Bakat</li>
                        <li data-filter=".filter-Eksternal">Eksternal</li>
                        <li data-filter=".filter-Kesekretariatan">Kesekretariatan</li>
                    </ul><!-- End Projects Filters -->

                    <div class="  portfolio-container mt-5 row gy-5" data-aos="fade-up" data-aos-delay="200">

                        @foreach ($pengurus as $pengurus)
                            <div class="col-lg-4 portfolio-item col-md-6 member filter-{{ $pengurus->struktur_organisasi }}"
                                data-aos="fade-up" data-aos-delay="100">
                                <div class="member-img">
                                    <img src="{{ $pengurus->foto ? asset($pengurus->foto) : asset('assets/img/default.jpg') }}"
                                        class="img-fluid" alt="">
                                    <div class="social">
                                        <a href="{{ $pengurus->twitter }}"><i class="bi bi-twitter"></i></a>
                                        <a href="{{ $pengurus->instagram }}"><i class="bi bi-instagram"></i></a>
                                        <a href="{{ $pengurus->facebook }}"><i class="bi bi-facebook"></i></a>
                                        <a href="{{ $pengurus->instagram }}"><i class="bi bi-linkedin"></i></a>

                                        <div class="action">
                                            <a href="{{ route('pengurus.edit', $pengurus->id) }}">
                                                <button type="button" class="btn btn-outline-primary">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                        <path
                                                            d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z">
                                                        </path>
                                                        <path fill-rule="evenodd"
                                                            d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z">
                                                        </path>
                                                    </svg>
                                                    <span class="visually-hidden">Edit</span>
                                                </button>
                                            </a>

                                            <form class="button" method="POST"
                                                action="{{ url('/about/pengurus' . '/' . $pengurus->id) }}"
                                                accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" onclick="return confirm(&quot;Confirm delete?&quot;)"
                                                    title="Delete anggota" class="mx-2 btn btn-outline-danger">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                        <path
                                                            d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z">
                                                        </path>
                                                        <path
                                                            d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z">
                                                        </path>
                                                    </svg>
                                                    <span class="visually-hidden">Delete</span>
                                                </button>Z
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="member-info text-center">
                                    <h4> {{ $pengurus->nama }}</h4>
                                    <p> {{ $pengurus->jabatan }}
                                        {{ $pengurus->struktur_organisasi === 'inti' ? 'Umum' : ($pengurus->struktur_organisasi === 'dewan' ? 'Dewan' : 'Bidang') }}
                                    </p>
                                    <span>" {{ $pengurus->quotes }}"</span>
                                </div>
                            </div><!-- End Team Member -->
                        @endforeach

                    </div>

                </div>

            </div>
        </section>
    </main><!-- End #main -->
@stop

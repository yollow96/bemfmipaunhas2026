@extends('layout')
@section('title', 'Manage carousels')
@section('content')

    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{ asset('assets/img/sekret.jpeg') }}">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

            <h2>Manage carousels</h2>
            <ol>
                <li><a href="/">Home</a></li>
                <li>Manage carousels</li>
            </ol>

        </div>
    </div><!-- End Breadcrumbs -->
    <main id="main">

        <section id="projects" class="projects">
            <div class="container" data-aos="fade-up">
                <a href="{{ url('/carousels/create') }}" class="btn-add ms-3" title="Tambahkan data anggota">
                    <i class="fa fa-plus" aria-hidden="true"></i> Add New
                </a>
                <a href="/" class="btn-add ms-3">
                    Lihat di Home
                </a>

                <div class="portfolio-isotope  mt-4" data-portfolio-filter="*" data-portfolio-layout="masonry"
                    data-portfolio-sort="original-order">

                    <ul class="portfolio-flters" data-aos="fade-up" data-aos-delay="100">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-biasa">Biasa</li>
                        <li data-filter=".filter-event">Event</li>
                    </ul><!-- End Projects Filters -->

                    <div class="carouselsmanage  portfolio-container" data-aos="fade-up" data-aos-delay="200">

                        @foreach ($carousels as $carousel)
                            @if ($carousel->jenis_corcel === 'event')
                                <div class="carouselscard portfolio-item filter-{{ $carousel->jenis_corcel }}"
                                    data-aos="fade-up">
                                    <div class="conten portfolio-content">
                                        <div>
                                            <h2 data-aos="fade-down">{{ $carousel->judul }}</h2>
                                            <p data-aos="fade-down" class="text-secondary fw-semibold">
                                                {{ $carousel->waktu_pelaksanaan }}
                                            </p>
                                            <p data-aos="fade-up">
                                                {{ $carousel->deskripsi }}
                                            </p>
                                            <button class="btn btn-outline-danger">
                                                <a data-aos="fade-up" data-aos-delay="200" href="{{ $carousel->link }}">
                                                    <h4>Selengkapnya</h4>
                                                </a>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="img">
                                        <img src="{{ asset($carousel->gambar_path) }}" alt="">
                                    </div>
                                    <div class="info">
                                        <a class="button" href="{{ route('carousels.edit', $carousel->id) }}">
                                            <button>
                                                <div class="svg-wrapper-1">
                                                    <div class="svg-wrapper">

                                                        <svg class="feather feather-edit"
                                                            fill="none" height="24" stroke="currentColor"
                                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                            viewBox="0 0 24 24" width="24"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7" />
                                                            <path
                                                                d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z" />
                                                        </svg>
                                                    </div>
                                                </div>
                                                <span>Edit</span>
                                            </button>
                                        </a>
                                        <form class="button" method="POST"
                                            action="{{ url('/carousels' . '/' . $carousel->id) }}" accept-charset="UTF-8"
                                            style="display:inline">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" title="Delete anggota"
                                                onclick="return confirm(&quot;Confirm delete?&quot;)">
                                                <div class="svg-wrapper-1">
                                                    <div class="svg-wrapper">
                                                        <svg height="28.8" viewBox="0 0 48 48" width="28.8"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M12 38c0 2.21 1.79 4 4 4h16c2.21 0 4-1.79 4-4V14H12v24zM38 8h-7l-2-2H19l-2 2h-7v4h28V8z" />
                                                            <path d="M0 0h48v48H0z" fill="none" />
                                                        </svg>

                                                    </div>
                                                </div>
                                                <span>Delete</span>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            @elseif ($carousel->jenis_corcel === 'biasa')
                                <div class="carouselscard shadow portfolio-item filter-{{ $carousel->jenis_corcel }}"
                                    data-aos="fade-up" style="background-image: url('{{ asset($carousel->gambar_path) }}">
                                    <div class="conten portfolio-content">
                                        <div>
                                            <h2 data-aos="fade-down">{{ $carousel->judul }}</h2>
                                            {{-- <p data-aos="fade-down" class="text-secondary fw-semibold">
                                            {{ $carousel->waktu_pelaksanaan }}
                                        </p> --}}
                                            <p data-aos="fade-up">
                                                {{ $carousel->deskripsi }}
                                            </p>
                                            <button class="btn btn-outline-danger">
                                                <a data-aos="fade-up" data-aos-delay="200" href="{{ $carousel->link }}">
                                                    <h4>Get Started</h4>
                                                </a>
                                            </button>
                                        </div>
                                    </div>
                                    {{-- <div class="img">
                                    <img src="{{ asset($carousel->gambar_path) }}" alt="">
                                </div> --}}
                                    <div class="info">
                                        <a class="button" href="{{ route('carousels.edit', $carousel->id) }}">
                                            <button>
                                                <div class="svg-wrapper-1">
                                                    <div class="svg-wrapper">

                                                        <svg class="feather feather-edit"
                                                            fill="none" height="24" stroke="currentColor"
                                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                            viewBox="0 0 24 24" width="24"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7" />
                                                            <path
                                                                d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z" />
                                                        </svg>
                                                    </div>
                                                </div>
                                                <span>Edit</span>
                                            </button>
                                        </a>
                                        <form class="button" method="POST"
                                            action="{{ url('/carousels' . '/' . $carousel->id) }}" accept-charset="UTF-8"
                                            style="display:inline">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" title="Delete anggota"
                                                onclick="return confirm(&quot;Confirm delete?&quot;)">
                                                <div class="svg-wrapper-1">
                                                    <div class="svg-wrapper">
                                                        <svg height="28.8" viewBox="0 0 48 48" width="28.8"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M12 38c0 2.21 1.79 4 4 4h16c2.21 0 4-1.79 4-4V14H12v24zM38 8h-7l-2-2H19l-2 2h-7v4h28V8z" />
                                                            <path d="M0 0h48v48H0z" fill="none" />
                                                        </svg>

                                                    </div>
                                                </div>
                                                <span>Delete</span>
                                            </button>
                                        </form>
                                    </div>

                                </div>
                            @endif
                        @endforeach

                    </div><!-- End Projects Container -->

                </div>

            </div>
        </section>
    </main><!-- End #main -->
@stop

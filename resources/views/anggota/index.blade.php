@extends('layout')
@section('title', 'Database Anggota')
@section('content')
    <div class="breadcrumbs d-flex align-items-center" style="background-image: linear-gradient(rgba(0,0,0,0.8), rgba(0,0,0,0.9)), url('{{ asset('assets/img/sekret.jpeg') }}'); min-height: 260px;">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

            <h2 class="text-white fw-bold mb-2">Panel Kelola Data Anggota</h2>
            <ol class="d-flex gap-2 p-0 list-unstyled" style="font-size: 14px;">
                <li><a href="/" style="color: #FFE500;">Home</a></li>
                <li style="color: #94a3b8;" aria-hidden="true">/</li>
                <li class="text-white">Kelola Anggota</li>
            </ol>

        </div>
    </div><!-- End Breadcrumbs -->
    <main id="main" style="background-color: #000000;">
        <div class="container py-5">
            <div class="row">
                <div class="col-12">
                    <section id="anggota">
                        <div data-aos="fade-up">
                            <div class="section-header text-center mb-4">
                                <h2 class="text-white fw-bold display-6">Kelola Database <span style="color: #FFFF00;">Anggota</span></h2>
                            </div>
                            
                            <div class="fmipa-card p-4">
                                <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-4">
                                    <div class="d-flex gap-2">
                                        <a href="{{ url('/anggota/create') }}" class="fmipa-btn-primary" style="font-size: 13px; padding: 8px 18px !important;">
                                            <i class="fa fa-plus me-1" aria-hidden="true"></i> Tambah Anggota
                                        </a>
                                        <a href="{{ url('/guest/anggota') }}" class="fmipa-btn-outline" style="font-size: 13px; padding: 8px 18px !important;">
                                            <i class="fa fa-regular fa-eye me-1" aria-hidden="true"></i> Tampilan Publik
                                        </a>
                                    </div>

                                    <div style="min-width: 280px;">
                                        <form action="{{ route('anggota.search') }}" method="GET" class="d-flex gap-2">
                                            <input type="text" placeholder="Cari anggota..." name="s" value="{{ request('s') }}" class="form-control fmipa-input" style="font-size: 13px;">
                                            <button type="submit" class="fmipa-btn-primary" style="padding: 8px 16px !important;"><i class="bi bi-search"></i></button>
                                        </form>
                                    </div>
                                </div>

                                <div class="table-responsive">
                                    <table class="table table-dark table-hover mb-0" style="background-color: #0d0d0d; border-color: #222;">
                                        <thead>
                                            <tr style="border-bottom: 2px solid #FFFF00;">
                                                <th style="color: #FFFF00;">Nama</th>
                                                <th style="color: #FFFF00;">Angkatan</th>
                                                <th style="color: #FFFF00;">Status</th>
                                                <th style="color: #FFFF00;">Asal Daerah</th>
                                                <th style="color: #FFFF00;">Program Studi</th>
                                                <th style="color: #FFFF00;">Nomor HP/WA</th>
                                                <th style="color: #FFFF00; text-align: center;">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($anggota as $item)
                                                <tr style="border-bottom: 1px solid #1a1a1a;">
                                                    <td class="text-white fw-bold">{{ $item->name }}</td>
                                                    <td style="color: #FFFF00;">{{ $item->angkatan }}</td>
                                                    <td>
                                                        <span class="badge" style="background: rgba(255, 255, 0, 0.1); color: #FFFF00; border: 1px solid rgba(255, 255, 0, 0.4); font-size: 11px;">
                                                            {{ $item->status_anggota }}
                                                        </span>
                                                    </td>
                                                    <td>{{ $item->domisili }}</td>
                                                    <td>{{ $item->prodi }}</td>
                                                    <td>{{ $item->phone }}</td>
                                                    <td style="text-align: center;">
                                                        <div class="d-inline-flex gap-2">
                                                            <a href="{{ url('/anggota/' . $item->id . '/edit') }}"
                                                                title="Edit Anggota" class="btn btn-sm btn-outline-warning rounded-pill px-3 fw-bold" style="border-color: #FFFF00; color: #FFFF00;">
                                                                <i class="fa fa-pencil-square-o me-1"></i> Edit
                                                            </a>
                                                            <form method="POST" action="{{ url('/anggota' . '/' . $item->id) }}"
                                                                accept-charset="UTF-8" style="display:inline">
                                                                {{ method_field('DELETE') }}
                                                                {{ csrf_field() }}
                                                                <button type="submit" class="btn btn-sm btn-outline-danger rounded-pill px-3 fw-bold"
                                                                    title="Hapus Anggota"
                                                                    onclick="return confirm(&quot;Yakin ingin menghapus data anggota ini?&quot;)">
                                                                    <i class="fa fa-trash-o me-1"></i> Hapus
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="7" class="text-center py-4 text-muted">
                                                        Belum ada data anggota.
                                                    </td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>

                                <div class="mt-4 d-flex justify-content-center">
                                    {{ $anggota->withQueryString()->links('pagination::bootstrap-4') }}
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </main><!-- End #main -->
@endsection

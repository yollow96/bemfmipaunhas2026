@extends('layout')
@section('title', 'Database Anggota - BEM FMIPA Unhas')

@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: linear-gradient(rgba(0,0,0,0.8), rgba(0,0,0,0.9)), url('{{ asset('assets/img/sekret.jpeg') }}'); min-height: 280px;">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
            <span class="fmipa-badge mb-3">Data Keanggotaan</span>
            <h2 class="text-white fw-bold mb-2">Database Mahasiswa FMIPA</h2>
            <ol class="d-flex gap-2 p-0 list-unstyled" style="font-size: 14px;">
                <li><a href="/" style="color: #FFE500;">Home</a></li>
                <li style="color: #94a3b8;" aria-hidden="true">/</li>
                <li class="text-white">Database Anggota</li>
            </ol>
        </div>
    </div><!-- End Breadcrumbs -->

    <main id="main" style="background-color: #000000;">
        <section id="anggota" class="py-5">
            <div class="container" data-aos="fade-up">
                
                <div class="section-header text-center mb-5">
                    <h2 class="text-white fw-bold display-6">
                        Direktori Anggota <span style="color: #FFFF00;">BEM FMIPA Unhas</span>
                    </h2>
                    <p style="color: #a0a0a0; max-width: 650px; margin: 0 auto; font-size: 15px;">
                        Pusat data terintegrasi mahasiswa dan alumni Fakultas Matematika dan Ilmu Pengetahuan Alam Universitas Hasanuddin.
                    </p>
                </div>

                <div class="fmipa-card p-4">
                    <div class="d-flex align-items-center justify-content-between flex-wrap gap-3 mb-4">
                        @guest
                            <div>
                                <span class="badge" style="background: rgba(255, 255, 0, 0.15); color: #FFFF00; border: 1px solid #FFFF00;">
                                    Akses Publik (Read-Only)
                                </span>
                            </div>
                        @else
                            <div>
                                <a href="{{ url('/anggota') }}" class="fmipa-btn-primary" style="font-size: 13px; padding: 8px 20px !important;">
                                    <i class="fa fa-regular fa-eye me-1"></i> Panel Kelola Anggota
                                </a>
                            </div>
                        @endguest

                        <!-- Search Form -->
                        <div style="min-width: 280px;">
                            <form action="{{ route('guest.search') }}" method="GET" class="d-flex gap-2">
                                <input type="text" placeholder="Cari nama, angkatan, prodi..." name="s" value="{{ request('s') }}" class="form-control fmipa-input" style="font-size: 13px;" aria-label="Cari nama, angkatan, atau program studi anggota">
                                <button type="submit" class="fmipa-btn-primary" style="padding: 8px 16px !important;" aria-label="Kirim pencarian data anggota">
                                    <i class="bi bi-search" aria-hidden="true"></i>
                                </button>
                            </form>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-dark table-hover mb-0" style="background-color: #111115; border-color: #27272a;">
                            <thead>
                                <tr style="border-bottom: 1px solid #FFE500;">
                                    <th style="color: #FFE500; font-weight: 700; padding: 12px 16px; font-size: 12px; letter-spacing: 0.5px;">NAMA LENGKAP</th>
                                    <th style="color: #FFE500; font-weight: 700; padding: 12px 16px; font-size: 12px; letter-spacing: 0.5px;">ANGKATAN</th>
                                    <th style="color: #FFE500; font-weight: 700; padding: 12px 16px; font-size: 12px; letter-spacing: 0.5px;">STATUS</th>
                                    <th style="color: #FFE500; font-weight: 700; padding: 12px 16px; font-size: 12px; letter-spacing: 0.5px;">ASAL DAERAH</th>
                                    <th style="color: #FFE500; font-weight: 700; padding: 12px 16px; font-size: 12px; letter-spacing: 0.5px;">PROGRAM STUDI</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($anggota as $item)
                                    <tr style="border-bottom: 1px solid #1f1f23;">
                                        <td class="text-white fw-semibold py-3 px-3">{{ $item->name }}</td>
                                        <td class="py-3 px-3" style="color: #FFE500; font-weight: 600;">{{ $item->angkatan }}</td>
                                        <td class="py-3 px-3">
                                            <span class="badge" style="background: rgba(255, 229, 0, 0.12); color: #FFE500; border: 1px solid #27272a; border-radius: 2px; font-size: 11px;">
                                                {{ $item->status_anggota }}
                                            </span>
                                        </td>
                                        <td class="py-3 px-3" style="color: #a1a1aa !important;">{{ $item->domisili }}</td>
                                        <td class="py-3 px-3" style="color: #d4d4d8 !important;">{{ $item->prodi }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center py-5" style="color: #a1a1aa;">
                                            Tidak ditemukan data anggota yang sesuai dengan kata kunci pencarian.
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
    </main>
@endsection

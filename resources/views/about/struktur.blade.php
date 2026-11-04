@extends('layout')
@section('title', 'Bagan Struktur Organisasi - BEM FMIPA Unhas')
@section('content')
    <div class="breadcrumbs d-flex align-items-center" style="background-image: linear-gradient(rgba(0,0,0,0.8), rgba(0,0,0,0.9)), url('{{ asset('assets/img/sekret.jpeg') }}'); min-height: 280px;">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
            <span class="fmipa-badge mb-3">Tata Kelola Organisasi</span>
            <h2 class="text-white fw-bold mb-2">Bagan Struktur Organisasi</h2>
            <ol class="d-flex gap-2 p-0 list-unstyled" style="font-size: 14px;">
                <li><a href="/" style="color: #FFE500;">Home</a></li>
                <li style="color: #94a3b8;" aria-hidden="true">/</li>
                <li><a href="/about" style="color: #FFE500;">About</a></li>
                <li style="color: #94a3b8;" aria-hidden="true">/</li>
                <li class="text-white">Struktur</li>
            </ol>
        </div>
    </div><!-- End Breadcrumbs -->

    <main id="main" style="background-color: #000000;" class="py-5">
        <div class="container text-center" data-aos="fade-up">
            <div class="p-3 p-lg-4 d-inline-block" style="background-color: #111115; border: 1px solid #27272a; border-radius: 4px;">
                <img src="{{ asset('assets/img/struktur_matriks.png') }}" class="img-fluid" style="border-radius: 2px;" alt="Bagan Struktur BEM FMIPA Unhas">
            </div>
        </div>
    </main>
@endsection

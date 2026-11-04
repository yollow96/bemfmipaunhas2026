@extends('layout')
@section('title', 'Edit Galeri')
@section('content')

<div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{ asset('assets/img/sekret.jpeg') }}')">
  <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
    <h2>Edit Galeri</h2>
    <ol>
      <li><a href="/">Home</a></li>
      <li><a href="/galeri">Galeri</a></li>
      <li>Edit Foto</li>
    </ol>
  </div>
</div>

<main id="main">
  <div class="container">
    <div class="card mt-5 mb-5">
      <div class="card-header bg-dark text-warning fw-bold">Edit Galeri</div>
      <div class="card-body">
        <form action="{{ route('galeri.update', $galeri->id) }}" method="post" enctype="multipart/form-data">
          @csrf
          @method('PATCH')

          <div class="form-floating mb-3">
            <select class="form-select" name="kegiatan" id="kegiatan" aria-label="Kategori">
              <option value="Mathematics Event" {{ $galeri->kegiatan == 'Mathematics Event' ? 'selected' : '' }}>Mathematics Event</option>
              <option value="Bina Akrab" {{ $galeri->kegiatan == 'Bina Akrab' ? 'selected' : '' }}>Bina Akrab</option>
              <option value="Himatika Mengabdi" {{ $galeri->kegiatan == 'Himatika Mengabdi' ? 'selected' : '' }}>Premi</option>
              <option value="Latihan Kepemimpinan" {{ $galeri->kegiatan == 'Latihan Kepemimpinan' ? 'selected' : '' }}>Latihan Kepemimpinan</option>
              <option value="Reset" {{ $galeri->kegiatan == 'Reset' ? 'selected' : '' }}>Himatika Reset</option>
            </select>
            <label for="kegiatan">Kategori</label>
          </div>

          @if($galeri->image)
          <div class="mb-3">
            <label class="form-label d-block">Foto Saat Ini:</label>
            <img src="{{ asset($galeri->image) }}" alt="{{ $galeri->kegiatan }}" class="img-thumbnail" style="max-height: 200px;">
          </div>
          @endif

          <div class="input-group mb-3">
            <input type="file" class="form-control" name="image" id="image">
            <label class="input-group-text" for="image">Ganti Foto (opsional)</label>
          </div>

          <button type="submit" class="btn btn-warning text-dark fw-bold">Simpan Perubahan</button>
          <a href="{{ route('galeri.index') }}" class="btn btn-secondary">Batal</a>
        </form>
      </div>
    </div>
  </div>
</main>
@stop

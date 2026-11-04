@extends('layout')
@section('title', 'Tambahkan Foto')
@section('content')

<div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{ asset('assets/img/sekret.jpeg') }}">
  <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

    <h2>Posting Blog</h2>
    <ol>
      <li><a href="/">Home</a></li>
      <li><a href="/galeri">Galeri</a></li>
      <li>Posting Foto</li>
    </ol>

  </div>
</div><!-- End Breadcrumbs -->
<main id="main">
  <div class="container">
<div class="card mt-5 mb-5">
  <div class="card-header">Galeri</div>
  <div class="card-body">
      
      <form action="{{ route('galeri.store') }}" method="post" enctype="multipart/form-data">
        {!! csrf_field() !!}

        <div class="form-floating">
          <select class="form-select" name="kegiatan" id="kegiatan" aria-label="Floating label select example">
            <option value="Mathematics Event">Mathematics Event</option>
            <option value="Bina Akrab">Bina Akrab</option>
            <option value="Himatika Mengabdi">Premi</option>
            <option value="Latihan Kepemimpinan">Latihan Kepemimpinan</option>
            <option value="Reset">Himatika Reset</option>
          </select>
          <label for="floatingSelect">Kategori</label>
        </div></br>

        <div class="input-group mb-3">
          <input type="file" class="form-control" name="image" id="image">
          <label class="input-group-text" for="inputGroupFile02">Upload</label>
        </div>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
</div>
</main><!-- End #main -->
@stop
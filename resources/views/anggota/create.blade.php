@extends('layout')
@section('title', 'Tambahkan database')
@section('content')

<div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{ asset('assets/img/sekret.jpeg') }}">
  <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

    <h2>Database Anggota</h2>
    <ol>
      <li><a href="/">Home</a></li>
      <li><a href="/anggota">Anggota</a></li>
      <li>Tanbah data anggota</li>
    </ol>

  </div>
</div><!-- End Breadcrumbs -->
<main id="main">
  <div class="container">
    <div class="card mt-5 mb-5">
      <div class="card-header">Halaman Input data</div>
      <div class="card-body">
          
          <form action="{{ url('anggota') }}" method="post">
            {!! csrf_field() !!}
            <div class="form-floating mb-3">
              <input type="text" class="form-control" name="name" id="name" placeholder="Ahmad Hamsa">
              <label for="floatingInput">Nama</label>
            </div>
            
            <div class="form-floating">
              <input type="text" class="form-control" name="angkatan" id="angkatan" placeholder="2020">
              <label for="floatingPassword">Angkatan</label>
            </div></br>
            
            <div class="form-floating">
              <select class="form-select" name="status_anggota" id="status_anggota" aria-label="Floating label select example">
                <option selected>Pilih status anggota</option>
                <option value="Anggota Biasa">Anggota Biasa</option>
                <option value="Anggota Luar Biasa">Anggota Luar Biasa</option>
                <option value="Anggota Istimewa">Anggota Istimewa</option>
              </select>
              <label for="floatingSelect">Status Anggota</label>
            </div></br>
            
            <div class="form-floating mb-3">
              <input type="text" class="form-control" name="domisili" id="domisili" placeholder="Kota Jambi, Jambi">
              <label for="floatingInput">Domisili</label>
            </div>
            
            <div class="form-floating">
              <select class="form-select" name="prodi" id="prodi" aria-label="Floating label select example">
                <option selected>Pilih Program Studi</option>
                <option value="Matematika">Matematika</option>
                <option value="Sistem Informasi">Sistem Informasi</option>
                <option value="Ilmu Aktuaria">Ilmu Aktuaria</option>
                <option value="Statistika">Statistika</option>
              </select>
              <label for="floatingSelect">Program Studi</label>
            </div></br>
            
            <div class="form-floating mb-3">
              <input type="text" class="form-control" name="phone" id="phone" placeholder="08xxx">
              <label for="floatingInput">Nomor HP</label>
            </div></br>
            <input type="submit" value="Save" class="btn btn-success"></br>
            
        </form>
      
      </div>
    </div>
</div>
</main><!-- End #main -->
@stop
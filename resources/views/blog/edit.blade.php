@extends('layout')
@section('title', 'Edit artikel')
@section('content')
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{ asset('assets/img/sekret.jpeg') }}">
  <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

    <h2>Posting Blog</h2>
    <ol>
      <li><a href="/">Home</a></li>
      <li><a href="/blog">Blog</a></li>
      <li>Posting Blog</li>
    </ol>

  </div>
</div><!-- End Breadcrumbs -->
<main id="main">
  <div class="container">
  
<div class="card mt-5 mb-5">
  <div class="card-header">Halaman edit blog</div>
  <div class="card-body">
      
      <form action="{{ url('blog/' .$blog->id) }}" method="post" enctype="multipart/form-data">
        {!! csrf_field() !!}
        @method("PATCH")
        <label>Judul</label></br>
        <input type="text" name="judul" id="judul" value="{{$blog->judul}}" class="form-control"></br>
        <label>Kategori</label></br>
        <input type="text" name="kategori" id="kategori" value="{{$blog->kategori}}" class="form-control"></br>
        <label>Author</label></br>
        <input type="text" name="author" id="author" value="{{$blog->author}}" class="form-control"></br>
        <label>Deskripsi</label></br>
        <textarea class="form-control" id="desc" value="{{$blog->desc}}" name="desc">{{$blog->desc}}</textarea>
        <small id="emailHelp" class="form-text text-muted">Jangan masukan foto di awal konten, foto thumbnail akan muncul diawal sebagai gantinya</small></br></br>
        <label>Thumbnail </label></br>
        <input type="file" name="image" id="image" value="{{$blog->image}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
</div>
</main>
@stop
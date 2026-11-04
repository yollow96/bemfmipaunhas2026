@extends('layout')
@section('title', 'Tambahkan Artikel')
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
                <div class="card-header">Halaman input data</div>
                <div class="card-body">

                    <form action="{{ route('blog.store') }}" method="post" enctype="multipart/form-data">
                        {!! csrf_field() !!}


                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="judul" id="judul" placeholder="Isi">
                            <label for="floatingInput">Judul</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="kategori" id="kategori" placeholder="Isi">
                            <label for="floatingInput">Kategori</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control tinymce" name="author" id="author"
                                placeholder="Isi">
                            <label for="floatingInput">Author</label>
                        </div>

                        <div class="form-floating">
                            <textarea class="form-control tiny" id="desc" name="desc" placeholder="Isi"></textarea>
                            <label for="floatingTextarea">Deskripsi</label>
                            <small id="emailHelp" class="form-text text-muted">Jangan masukan foto di awal konten, foto
                                thumbnail akan muncul diawal sebagai gantinya</small>
                        </div></br>

                        <div class="input-group mb-3">
                            <input type="file" class="form-control" name="image" id="image">
                            <label class="input-group-text" for="inputGroupFile02">Upload Thumbnail </label>
                        </div>
                        <input type="submit" value="Save" class="btn btn-success"></br>
                    </form>

                </div>
            </div>
        </div>
    </main><!-- End #main -->
@stop

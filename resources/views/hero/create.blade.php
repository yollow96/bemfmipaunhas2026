@extends('layout')
@section('title', 'Manage carousels')
@section('content')

    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{ asset('assets/img/sekret.jpeg') }}">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

            <h2>Manage carousels</h2>
            <ol>
                <li><a href="/">Home</a></li>
                <li><a href="/carousels">Manage carousels</a></li>
                <li>Add carousels</li>
            </ol>

        </div>
    </div><!-- End Breadcrumbs -->
    <main id="main">

        <section id="projects" class="projectscarousels">
            <div class="container" id="container">
                <div class="form-container log-in-container" data-aos="fade-up">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if(session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                    @if(session('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
                    <form action="{{ route('carousels.store') }}" method="post" enctype="multipart/form-data">
                        {!! csrf_field() !!}
                        <h1>Create Carousels</h1>
                        <span>Create New Carousel</span>
                        <input type="text" name="judul" placeholder="Judul" value="{{ old('judul') }}" required>
                        <input type="text" name="waktu_pelaksanaan" placeholder="Waktu Pelaksanaan" value="{{ old('waktu_pelaksanaan') }}">
                        <textarea name="deskripsi" placeholder="Deskripsi">{{ old('deskripsi') }}</textarea>
                        <input type="url" name="link" placeholder="Link" value="{{ old('link') }}">
                        <input type="file" name="gambar" id="gambar" accept="image/*" required>
                        <small class="text-muted">Maksimal 10MB. Format yang didukung: JPEG, PNG, JPG, GIF, SVG</small>
                        <label for="jenis_corcel">Jenis Carousel :</label>
                        <select name="jenis_corcel" id="jenis_corcel">
                            <option value="event" {{ old('jenis_corcel') == 'event' ? 'selected' : '' }}>event</option>
                            <option value="biasa" {{ old('jenis_corcel') == 'biasa' ? 'selected' : '' }}>biasa</option>
                        </select>


                        <button type="submit" value="Save">Tambah Carousel</button>
                    </form>
                </div>
                <div class="overlay-container">
                    <div class="overlay">
                        <div class="overlay-panel overlay-right" id="overlay-panel"
                            style="background-image: url('{{ asset('assets/img/sekret.jpeg') }}">

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script>
            //event listener to the file input
            document.getElementById('gambar').addEventListener('change', function(event) {
                const file = event.target.files[0];
                if (file) {
                    const imageUrl = URL.createObjectURL(file);
                    document.getElementById('overlay-panel').style.backgroundImage = `url(${imageUrl})`;
                }
            });
        </script>
    </main><!-- End #main -->
@stop

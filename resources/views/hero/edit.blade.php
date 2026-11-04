@extends('layout')
@section('title', 'Manage carousels')
@section('content')

    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{ asset('assets/img/sekret.jpeg') }}">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

            <h2>Edit carousels</h2>
            <ol>
                <li><a href="/">Home</a></li>
                <li><a href="/carousels">Manage carousels</a></li>
                <li>Edit carousels</li>
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
                    <form method="POST" action="{{ route('carousels.update', $carousel->id) }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <h1>Edit Carousels</h1>
                        <span>Edit This Carousel</span>
                        <input type="text" name="judul" value="{{ old('judul', $carousel->judul) }}" placeholder="Judul" required>
                        <input type="text" name="waktu_pelaksanaan" value="{{ old('waktu_pelaksanaan', $carousel->waktu_pelaksanaan) }}"
                            placeholder="Waktu Pelaksanaan">
                        <textarea name="deskripsi" placeholder="Deskripsi">{{ old('deskripsi', $carousel->deskripsi) }}</textarea>
                        <input type="url" name="link" value="{{ old('link', $carousel->link) }}" placeholder="Link">
                        <label for="gambar">Update Image :</label>
                        <input type="file" name="gambar" id="gambar" accept="image/*">
                        <small class="text-muted">Maksimal 10MB. Format yang didukung: JPEG, PNG, JPG, GIF, SVG</small>
                        <label for="jenis_corcel">Jenis Carousel :</label>
                        <select name="jenis_corcel" id="jenis_corcel">
                            <option value="event" {{ old('jenis_corcel', $carousel->jenis_corcel) === 'event' ? 'selected' : '' }}>event
                            </option>
                            <option value="biasa" {{ old('jenis_corcel', $carousel->jenis_corcel) === 'biasa' ? 'selected' : '' }}>biasa
                            </option>
                        </select>
                        <button type="submit" value="update">Update Carousel</button>
                    </form>

                </div>
                <div class="overlay-container">
                    <div class="overlay">
                        <div class="overlay-panel overlay-right " id="overlay-panel"
                            style="background-image: url('{{ asset($carousel->gambar_path) }}">

                        </div>
                    </div>
                </div>
                </form>
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

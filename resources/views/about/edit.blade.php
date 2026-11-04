@extends('layout')
@section('title', 'Edit Anggota')
@section('content')

    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{ asset('assets/img/sekret.jpeg') }}">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

            <h2>Edit Anggota</h2>
            <ol>
                <li><a href="/">Home</a></li>
                <li><a href="/about#struktur">about</a></li>
                <li><a href="/about/pengurus">Manage Struktur Organisasi</a></li>
                <li>Edit Anggota</li>
            </ol>

        </div>
    </div><!-- End Breadcrumbs -->
    <main id="main">
        <section id="projects" class="projectscarousels">
            <div class="container" id="container">
                <div class="form-container log-in-container" data-aos="fade-up">
                    <form method="POST" action="{{ route('pengurus.update', $pengurus->id) }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <h1>Edit Anggota</h1>
                        <span>Edit Anggota Ini</span>
                        <input type="text" name="nama" placeholder="nama" value="{{ $pengurus->nama }}" required>
                        <textarea name="quotes" placeholder="quotes" value="{{ $pengurus->quotes }}"></textarea>
                        <input value="{{ $pengurus->instagram }}" type="text" name="instagram"
                            placeholder="Link instagram">
                        <input value="{{ $pengurus->facebook }}" type="text" name="facebook" placeholder="Link facebook">
                        <input value="{{ $pengurus->twitter }}" type="text" name="twitter" placeholder="Link twitter">
                        <input value="{{ $pengurus->linkedin }}" type="text" name="linkedin" placeholder="Link linkedin">
                        <input value="{{ $pengurus->foto }}" type="file" name="foto" id="foto">
                        <script>
                            //event listener to the file input
                            document.getElementById('foto').addEventListener('change', function(event) {
                                const file = event.target.files[0];
                                if (file) {
                                    const imageUrl = URL.createObjectURL(file);
                                    document.getElementById('overlay-panel').style.backgroundImage = `url(${imageUrl})`;
                                }
                            });
                        </script>
                        <label for="struktur_organisasi">Jenis struktur_organisasi :</label>
                        <select name="struktur_organisasi" id="struktur_organisasi">
                            <option value="inti" {{ $pengurus->inti === 'inti' ? 'selected' : '' }}>inti</option>
                            <option value="dewan" {{ $pengurus->dewan === 'dewan' ? 'selected' : '' }}>dewan</option>
                            <option value="kerohanian" {{ $pengurus->kerohanian === 'kerohanian' ? 'selected' : '' }}>
                                kerohanian</option>
                            <option value="pengaderan" {{ $pengurus->pengaderan === 'pengaderan' ? 'selected' : '' }}>
                                pengaderan</option>
                            <option value="AkademikDanKemahasiswaan"
                                {{ $pengurus->AkademikDanKemahasiswaan === 'AkademikDanKemahasiswaan' ? 'selected' : '' }}>
                                Akademik Dan
                                Kemahasiswaan</option>
                            <option value="MinatDanBakat"
                                {{ $pengurus->MinatDanBakat === 'MinatDanBakat' ? 'selected' : '' }}>Minat Dan Bakat
                            </option>
                            <option value="Eksternal" {{ $pengurus->Eksternal === 'Eksternal' ? 'selected' : '' }}>
                                Eksternal</option>
                            <option value="Kesekretariatan"
                                {{ $pengurus->Kesekretariatan === 'Kesekretariatan' ? 'selected' : '' }}>
                                Kesekretariatan</option>
                        </select>
                        <label for="jabatan">jabatan :</label>
                        <select name="jabatan" id="jabatan">
                            <option value="ketua" {{ $pengurus->ketua === 'ketua' ? 'selected' : '' }}>ketua</option>
                            <option value="Sekretaris" {{ $pengurus->Sekretaris === 'Sekretaris' ? 'selected' : '' }}>
                                Sekretaris</option>
                            <option value="Anggota" {{ $pengurus->Anggota === 'Anggota' ? 'selected' : '' }}>Anggota
                            </option>
                            <option value="Bendahara" {{ $pengurus->Bendahara === 'Bendahara' ? 'selected' : '' }}>
                                Bendahara</option>
                        </select>
                        <button type="submit" value="update">Update Anggotas</button>

                </div>
                <div class="overlay-container">
                    <div class="overlay">
                        <div class="overlay-panel overlay-right " id="overlay-panel"
                            style="background-image: url('{{ asset($pengurus->foto) }}">

                        </div>
                    </div>
                </div>
                </form>
            </div>
        </section>


    </main><!-- End #main -->
@stop

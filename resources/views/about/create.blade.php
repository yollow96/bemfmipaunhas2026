@extends('layout')
@section('title', 'Tambah Anggota')
@section('content')

    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{ asset('assets/img/sekret.jpeg') }}">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

            <h2>Tambah Anggota</h2>
            <ol>
                <li><a href="/">Home</a></li>
                <li><a href="/about#struktur">about</a></li>
                <li><a href="/about/pengurus">Manage Struktur Organisasi</a></li>
                <li>Tambah Anggota</li>
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
                    <form action="{{ route('pengurus.store') }}" method="post" enctype="multipart/form-data">
                        {!! csrf_field() !!}
                        <h1>Create Anggota</h1>
                        <span>Create Anggota Baru</span>
                        <input type="text" name="nama" placeholder="nama" value="{{ old('nama') }}" required>
                        <textarea name="quotes" placeholder="quotes">{{ old('quotes') }}</textarea>
                        <input type="text" name="instagram" placeholder="Link instagram" value="{{ old('instagram') }}">
                        <input type="text" name="facebook" placeholder="Link facebook" value="{{ old('facebook') }}">
                        <input type="text" name="twitter" placeholder="Link twitter" value="{{ old('twitter') }}">
                        <input type="text" name="linkedin" placeholder="Link linkedin" value="{{ old('linkedin') }}">
                        <input type="file" name="foto" id="foto" accept="image/*">
                        <small class="text-muted">Maksimal 10MB. Format yang didukung: JPEG, PNG, JPG, GIF, SVG</small>
                        <label for="struktur_organisasi">Jenis struktur_organisasi :</label>
                        <select name="struktur_organisasi" id="struktur_organisasi">
                            <option value="inti" {{ old('struktur_organisasi') == 'inti' ? 'selected' : '' }}>inti</option>
                            <option value="dewan" {{ old('struktur_organisasi') == 'dewan' ? 'selected' : '' }}>dewan</option>
                            <option value="kerohanian" {{ old('struktur_organisasi') == 'kerohanian' ? 'selected' : '' }}>kerohanian</option>
                            <option value="pengaderan" {{ old('struktur_organisasi') == 'pengaderan' ? 'selected' : '' }}>pengaderan</option>
                            <option value="AkademikDanKemahasiswaan" {{ old('struktur_organisasi') == 'AkademikDanKemahasiswaan' ? 'selected' : '' }}>Akademik Dan Kemahasiswaan</option>
                            <option value="MinatDanBakat" {{ old('struktur_organisasi') == 'MinatDanBakat' ? 'selected' : '' }}>Minat Dan Bakat</option>
                            <option value="Eksternal" {{ old('struktur_organisasi') == 'Eksternal' ? 'selected' : '' }}>Eksternal</option>
                            <option value="Kesekretariatan" {{ old('struktur_organisasi') == 'Kesekretariatan' ? 'selected' : '' }}>Kesekretariatan</option>
                        </select>
                        <label for="jabatan">jabatan :</label>
                        <select name="jabatan" id="jabatan">
                            <option value="ketua" {{ old('jabatan') == 'ketua' ? 'selected' : '' }}>ketua</option>
                            <option value="Sekretaris" {{ old('jabatan') == 'Sekretaris' ? 'selected' : '' }}>Sekretaris</option>
                            <option value="Anggota" {{ old('jabatan') == 'Anggota' ? 'selected' : '' }}>Anggota</option>
                            <option value="Bendahara" {{ old('jabatan') == 'Bendahara' ? 'selected' : '' }}>Bendahara</option>
                        </select>
                        <button type="submit" value="Save">Tambah Pengurus</button>
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
            // Function to update jabatan dropdown based on struktur_organisasi
            function updateJabatanDropdown() {
                var selectedStruktur = document.getElementById('struktur_organisasi').value;
                var jabatanDropdown = document.getElementById('jabatan');
                var oldJabatan = '{{ old("jabatan") }}';
                
                // Clear all options first
                jabatanDropdown.innerHTML = '';
                
                var options = [];
                if (selectedStruktur === 'dewan') {
                    // Add options for dewan structure
                    options = [
                        {value: 'ketua', text: 'ketua'},
                        {value: 'Anggota', text: 'Anggota'}
                    ];
                } else if (selectedStruktur === 'inti') {
                    // Add options for inti structure
                    options = [
                        {value: 'ketua', text: 'ketua'},
                        {value: 'Sekretaris', text: 'Sekretaris'},
                        {value: 'Bendahara', text: 'Bendahara'}
                    ];
                } else {
                    // Add default options
                    options = [
                        {value: 'ketua', text: 'ketua'},
                        {value: 'Sekretaris', text: 'Sekretaris'},
                        {value: 'Anggota', text: 'Anggota'}
                    ];
                }
                
                // Create option elements
                options.forEach(function(option) {
                    var optionElement = document.createElement('option');
                    optionElement.value = option.value;
                    optionElement.textContent = option.text;
                    if (oldJabatan && oldJabatan === option.value) {
                        optionElement.selected = true;
                    }
                    jabatanDropdown.appendChild(optionElement);
                });
            }

            // Event listener for file input
            document.getElementById('foto').addEventListener('change', function(event) {
                const file = event.target.files[0];
                if (file) {
                    const imageUrl = URL.createObjectURL(file);
                    document.getElementById('overlay-panel').style.backgroundImage = `url(${imageUrl})`;
                }
            });

            // Event listener for struktur_organisasi change
            document.getElementById('struktur_organisasi').addEventListener('change', updateJabatanDropdown);
            
            // Initialize jabatan dropdown on page load
            document.addEventListener('DOMContentLoaded', function() {
                updateJabatanDropdown();
            });
        </script>
    </main><!-- End #main -->
@stop

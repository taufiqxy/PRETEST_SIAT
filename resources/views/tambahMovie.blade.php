@extends('layout.movieLayout')
@section('title','Tambah Movie')
@section('menuTambah','active')

@section('content')
<div class="container pt-4 bg-white">
    <div class="row">
        <div class="col-md-8 col-xl-6">
            <h1>Tambahkan Movie Baru</h1>
            <hr>
            @if(session()->has('pesan'))
            <div class="alert alert-success" role="alert">
            {{ session()->get('pesan')}}
            </div>
            @endif

            <form action="/tambah-movie" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label" for="judul">Judul Movie</label>
                    <input type="text" id="judul" name="judul"
                    class="form-control @error('judul') is-invalid @enderror">
                    @error('judul')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label" for="tahun">Tahun</label>
                    <select class="form-select" name="tahun" id="tahun">
                        <script>
                            let max = new Date().getFullYear();
                            select = document.getElementById('tahun');

                            for (let i = max; i>=2010; i--){
                                let opt = document.createElement('option');
                                opt.value = i;
                                opt.innerHTML = i;
                                select.appendChild(opt);
                            }
                        </script>
                    </select>
                    @error('tahun')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label" for="genre">Genre</label>
                    <select class="form-select" name="genre" id="genre">
                        <option value="Aksi" >
                        Aksi
                        </option>
                        <option value="Komedi">
                        Komedi
                        </option>
                        <option value="Drama">
                        Drama
                        </option>
                        <option value="Fiksi Ilmiah">
                        Fiksi Ilmiah
                        </option>
                        <option value="Misteri">
                        Misteri
                        </option>
                        <option value="Horor">
                        Horor
                        </option>
                        <option value="Dokumenter">
                        Dokumenter
                        </option>
                    </select>
                    @error('genre')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label" for="rating">Rating</label>
                    <input type="text" id="rating" name="rating"
                    class="form-control @error('rating') is-invalid @enderror">
                    @error('rating')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label" for="sinopsis">Sinopsis</label>
                    <textarea class="form-control" id="sinopsis" rows="3"
                    name="sinopsis"></textarea>
                    @error('sinopsis')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="berkas" class="form-label">File Video</label>
                    <input type="file" class="form-control" id="berkas" name="berkas">
                    @error('berkas')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary mb-2">Tambahkan Sekarang</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

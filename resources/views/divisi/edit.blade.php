<x-tampilan>
    <x-slot:title>Edit Data Divisi COS</x-slot>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mt-4">
                <img src="{{ asset('images/logo cos.png') }}" alt="" width="120" class="mb-4">
                <p class="fst-italic">Open Mind for The Future with Open Source</p>
            </div>
        </div>
        <div class="container mt-4">
            <h3 class="mb-3">Form Edit Data Divisi</h3>
            <form action="{{ route('divisi.update' , $divisi->id) }}" method="POST">
            @csrf
            @method('PUT')

                <div class="mb-3">
                    <label for="nama_divisi" class="form-label">Nama Divisi</label>
                    <input type="text" class="form-control  @error('nama_divisi') is-invalid @enderror" id="nama_divisi" name="nama_divisi" value="{{ old('nama_divisi', $divisi->nama_divisi) }}">
                    @error('nama_divisi')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <input type="text" class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" name="deskripsi" value="{{ old('deskripsi' , $divisi->deskripsi) }}">@error('deskripsi')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        
                    @enderror
                </div>
            
                
                <div class="mb-3">
                    <label for="ketua_divisi" class="form-label">Nama Ketua</label>
                    <input type="text" class="form-control @error('ketua_divisi') is-invalid @enderror" id="ketua_divisi" name="ketua_divisi" value="{{ old('ketua_divisi' , $divisi->ketua_divisi) }}">
                    @error('ketua_divisi')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                @enderror
                </div>
                

                
                <div class="mb-3">
                <button type="submit" class="btn btn-primary">Edit Data</button>
                <a href="{{ route('index') }}" class="btn btn-secondary">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</x-tampilan>   
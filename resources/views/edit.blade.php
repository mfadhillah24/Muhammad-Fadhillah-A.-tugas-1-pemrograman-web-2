<x-tampilan>
    <x-slot:title>Edit Data Keanggotaan</x-slot>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mt-4">
                <img src="{{ asset('images/logo cos.png') }}" alt="" width="120" class="mb-4">
                <h1>Data Keanggotaan Cyber Open Source</h1>
                <p class="fst-italic">Open Mind for The Future with Open Source</p>
            </div>
        </div>
        <div class="container mt-4">
            <h3 class="mb-3">Form Edit Data Keanggotaan</h3>
            <form action="{{ route('update' , $anggota->id) }}" method="POST">
            @csrf
            @method('PUT')

                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control  @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama', $anggota->nama) }}">
                    @error('nama')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="nia" class="form-label">Nomor Induk Anggota</label>
                    <input type="text" class="form-control @error('nia') is-invalid @enderror" id="nia" name="nia" value="{{ old('nia' , $anggota->nia) }}">@error('nia')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        
                    @enderror
                </div>
            
                <div class="mb-3">
                    <label for="status" class="form-label">Status Anggota</label>
                    <select class="form-select @error('status') is-invalid @enderror" id="status" name="status">
                        <option value="">Pilih Status Anggota</option>
                        <option value="Anggota Kehormatan" {{ old('status', $anggota->status) =='Anggota Kehormatan' ? 'selected' : '' }}>Anggota Kehormatan</option>
                        <option value="Anggota Tetap" {{ old('status', $anggota->status) =='Anggota Tetap' ? 'selected' : '' }}>Anggota Tetap</option>
                        <option value="Anggota Muda" {{ old('status', $anggota->status) =='Anggota Muda' ? 'selected' : '' }}>Anggota Muda</option>
                    </select>
                    @error('status')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        
                    @enderror  
                </div>
                <div class="mb-3">
                    <label for="nama_unix" class="form-label">Nama Unix</label>
                    <input type="text" class="form-control @error('nama_unix') is-invalid @enderror" id="nama_unix" name="nama_unix" value="{{ old('nama_unix' , $anggota->nama_unix) }}">
                    @error('nama_unix')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                @enderror
                </div>
                
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" value="{{ old('alamat' , $anggota->alamat) }}">
                    @error('alamat')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        
                    @enderror  
                </div>
                <div class="mb-3">
                    <label for="no_telp" class="form-label">Nomor Telepon</label>
                    <input type="text" class="form-control @error('no_telp') is-invalid @enderror" id="no_telp" name="no_telp" value="{{ old('no_telp' , $anggota->no_telp) }}">
                    @error('no_telp')
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
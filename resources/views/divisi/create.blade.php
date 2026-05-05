<x-tampilan>
    <x-slot:title>Tambah Data Divisi COS</x-slot>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mt-4">
                <img src="{{ asset('images/logo cos.png') }}" alt="" width="120" class="mb-4">
                
                <p class="fst-italic">Open Mind for The Future with Open Source</p>
            </div>
        </div>
        <div class="container mt-4">
            <h3 class="mb-3">Form Tambah Data Divisi</h3>
            <form action="{{ route('divisi.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label class="form-label">Nama Divisi</label>
        <input type="text" name="nama_divisi"
            class="form-control @error('nama_divisi') is-invalid @enderror"
            value="{{ old('nama_divisi') }}">
        @error('nama_divisi')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Deskripsi</label>
        <input type="text" name="deskripsi"
            class="form-control @error('deskripsi') is-invalid @enderror"
            value="{{ old('deskripsi') }}">
        @error('deskripsi')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Ketua Divisi</label>
        <input type="text" name="ketua_divisi"
            class="form-control @error('ketua_divisi') is-invalid @enderror"
            value="{{ old('ketua_divisi') }}">
        @error('ketua_divisi')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Simpan Data</button>
        <a href="{{ route('divisi.index') }}" class="btn btn-secondary">Kembali</a>
    </div>

</form>
        </div>
    </div>
</x-tampilan>
<x-tampilan>
    <x-slot:title>Detail Data Anggota COS</x-slot>
    
    <div class="container mt-4">
        <div class="row">
            <div class="col-12 text-center mb-4">
                <img src="{{ asset('images/logo cos.png') }}" alt="" width="120" class="mb-3">
                <h1>Detail Data Anggota Cyber Open Source</h1>
                <p class="fst-italic">Open Mind for The Future with Open Source</p>
            </div>
        </div>
                <ul class="list-group">
                    <li class="list-group-item">Nama : {{ $anggota->nama }}</li>
                    <li class="list-group-item">Nomor Induk Anggota : {{ $anggota->nia }}</li>
                    <li class="list-group-item">Status Keanggotaan : {{ $anggota->status }}</li>
                    <li class="list-group-item">Nama Unix : {{ $anggota->nama_unix }}</li>
                    <li class="list-group-item">Divisi : {{ $anggota->divisi->nama_divisi }}</li>
                    <li class="list-group-item">Alamat : {{ $anggota->alamat }}</li>    
                    <li class="list-group-item">Nomor Telepon : {{ $anggota->no_telp }}</li>    
                     <li class="list-group-item">Diterima sebagai Anggota COS pada tanggal : {{ $anggota->created_at->format('d F Y H:i:s')}} ({{$anggota->created_at->diffForHumans() }})</li>    
                    <li class="list-group-item">Terakhir di Update pada tanggal : {{ $anggota->updated_at->format('d F Y H:i:s')}} ({{$anggota->updated_at->diffForHumans() }})</li>
                   


                </ul>   
                 
                <div class="mt-4 d-flex gap-2 mb-5">
                    <a href="{{ route('index') }}" class="btn btn-secondary">Kembali</a>
                    <a href="{{ route('edit', $anggota->id) }}" class="btn btn-warning">Edit</a>
                </div>

            </div>
        </div>

    </div>
</x-tampilan>
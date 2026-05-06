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
                    <li class="list-group-item">Nama Divisi : {{ $divisi->nama_divisi }}</li>
                    <li class="list-group-item">Deskripsi : {{ $divisi->deskripsi }}</li>
                    <li class="list-group-item">Ketua Bidang : {{ $divisi->ketua_divisi }}</li>
                    <li class="list-group-item">Jumlah Anggota : {{ $divisi->anggotas?->count()?? 0}} 
                     <li class="list-group-item">Dibuat pada tanggal : {{ $divisi->created_at->format('d F Y H:i:s')}} ({{$divisi->created_at->diffForHumans() }})</li>    
                    <li class="list-group-item">Terakhir di Update pada tanggal : {{ $divisi->updated_at->format('d F Y H:i:s')}} ({{$divisi->updated_at->diffForHumans() }})</li>
                   


                </ul>   
                 
                <div class="mt-4 d-flex gap-2 mb-5">
                    <a href="{{ route('divisi.index') }}" class="btn btn-secondary">Kembali</a>
                    <a href="{{ route('divisi.edit', $divisi->id) }}" class="btn btn-warning">Edit</a>
                </div>

            </div>
        </div>

    </div>
</x-tampilan>
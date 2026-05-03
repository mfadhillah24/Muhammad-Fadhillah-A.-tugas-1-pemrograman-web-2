<x-tampilan>
    <x-slot:title>Cyber Open Source</x-slot>
    

    <div class="container">
        <div class="row">
            <div class="col-12 text-center mt-4">
                <img src="{{ asset('images/logo cos.png') }}" alt="" width="120" class="mb-4">
                <h1>Data Keanggotaan Cyber Open Source</h1>
                <p class="fst-italic">Open Mind for The Future with Open Source</p>
            </div> 
        </div>
        <hr class="my-3 border-2 border-dark opacity-75">
        <div class="row mb-3">
            <div class="col-md-6">
                <p>Pembina : Tamus bin Tahir, S.Pd., M.Kom.</p>
            </div>
            <div class="col-md-6 text-end">
                <a href="{{ route('create') }}" class="btn btn-primary">+ Tambah Data</a>
            </div>
        </div>
        @session('success')
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endsession

        <div class="card shadow-sm">
            <div class="card-body">
                <table class="table table-bordered table-stripped table-hover align-middle">
                    <thead class="table-primary text-center">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Nomor Induk Anggota</th>
                            <th>Status Anggota</th>
                            <th>Nama Unix</th>
                            <th>Alamat</th>
                            <th>Nomor Telepon</th>
                            <th>Aksi</th>
                    </thead>
                    <tbody>
                        @foreach ($anggota as $item)
                    <tr class="text-center">
                        
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->nia }}</td>
                        <td>{{ $item->status }}</td>
                        <td>{{ $item->nama_unix }}</td>
                        <td>{{ $item->alamat }}</td>
                        <td>{{ $item->no_telp }}</td>
                        <td>
                            <div class="d-flex justify-content-center gap-2">
                            <a href="{{ route('edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            
                            <form action="{{ route('delete', $item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                            </div>
                        </td>    
                    </tr>
                        @endforeach
                    
                        
                </table>

            
            </div>
        </div>

                        
</x-tampilan>




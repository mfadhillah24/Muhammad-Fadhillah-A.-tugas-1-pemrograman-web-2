<x-tampilan>
    <x-slot:title>Data Anggota Terhapus</x-slot>
    
    <div class="container mt-5">
        <h1>Data Anggota Terhapus</h1>
        <a href="{{ route('index') }}" class="btn btn-secondary mb-3">Kembali</a>

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
                            <th>Divisi</th>
                            <th>Alamat</th>
                            <th>Nomor Telepon</th>
                            <th>Email</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($anggotas as $item)
                    <tr class="text-center">
                        
                        <td>{{ $anggotas->firstItem() + $loop->index  }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->nia }}</td>
                        <td>{{ $item->status }}</td>
                        <td>{{ $item->nama_unix }}</td>
                        <td>{{ $item->divisi->nama_divisi ?? '-' }}</td>
                        <td>{{ $item->alamat }}</td>
                        <td>{{ $item->no_telp }}</td>
                        <td>{{ $item->email ?? '-' }}</td>
                        <td>
                            <div class="d-flex justify-content-center gap-2">
                                <form action="{{ route('anggota.restore', $item->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit" class="btn btn-success btn-sm" onclick="return confirm('Apakah anda yakin ingin mengmbalikan data ini?')">Restore</button>
                                    

                                </form>

                                <form action="{{ route('anggota.force-delete', $item->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus data ini secara permanen?')">Delete</button>
                                </form> 
                    </div>
                        </td>    
                    </tr>
                        @endforeach 
                        </tbody>
                </table>
                <div class="mt3 d-flex justify-content-end">
                    {{ $anggotas->links() }}
            </div>
        </div>
    </div>
    </x-tampilan>
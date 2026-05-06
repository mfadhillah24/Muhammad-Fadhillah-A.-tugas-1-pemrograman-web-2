<x-tampilan>
    <x-slot name="title">
        Divisi
    </x-slot>

    <div class="container mt-5">
        <h1>Daftar Divisi</h1>
        <a href="{{ route('divisi.create') }}" class="btn btn-primary mb-3">Tambah Divisi</a>
         @session('success')
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endsession
        <table class="table table-bordered table-hover align-middle text-center text-white border-dark bg-opacity-75">
            <thead class="table-primary text-center">
                <tr>
                    <th>No</th>
                    <th>Nama Divisi</th>
                    <th>Deskripsi</th>
                    <th>Ketua Bidang</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($divisis as $divisi)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $divisi->nama_divisi }}</td>
                        <td>{{ $divisi->deskripsi }}</td>
                        <td>{{ $divisi->ketua_divisi }}</td>
                        <td>
                            <div class="d-flex justify-content-center gap-2">
                            <a href="{{ route('divisi.edit', $divisi->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <a href="{{ route('divisi.show', $divisi->id) }}" class="btn btn-sm btn-info">Details</a>
                            
                            <form action="{{ route('divisi.destroy', $divisi->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                            </div>
                        </td>
                    </form> 
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-tampilan>
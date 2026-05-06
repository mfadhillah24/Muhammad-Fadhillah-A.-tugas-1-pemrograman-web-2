<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\Divisi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   public function index()
{
    $query = Anggota::latest();
    $keyword = request('keyword');

    if($keyword){
        $query->where('nama', 'like', "%$keyword%")
              ->orWhere('nia', 'like', "%$keyword%")
              ->orWhere('status', 'like', "%$keyword%")
              ->orWhere('nama_unix', 'like', "%$keyword%")
              ->orWhere('alamat', 'like', "%$keyword%")
              ->orWhere('no_telp', 'like', "%$keyword%");

    }
    return view('index', [
        'anggota' => $query->paginate(5)->withQueryString(),
    ]);
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create', [
            'divisis' => Divisi::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'nama' => 'required|string|max:255',
            'nia' => 'required|string|max:50',
            'status' => 'required|string|max:50',
            'nama_unix' => 'required|string|max:50',
            'alamat' => 'required|string|max:255',
            'no_telp' => 'required|string|max:20',
            'divisi_id' => 'required|exists:divisis,id',
        ],
        [
            'nama.required' => 'Nama anggota harus diisi.',
            'nia.required' => 'Nomor Induk Anggota harus diisi.',
            'status.required' => 'Status anggota harus diisi.',
            'nama_unix.required' => 'Nama Unix harus diisi.',
            'alamat.required' => 'Alamat harus diisi.',
            'no_telp.required' => 'Nomor Telepon harus diisi.',
            'no_telp.numeric' => 'Nomor Telepon harus berupa angka.',
            'no_telp.max' => 'Nomor Telepon tidak boleh lebih dari 20 karakter.',
            'divisi_id.required' => 'Divisi harus dipilih.',
        ]);

        Anggota::create($validate);

        
        return redirect()->route('index')->withSuccess('Data anggota berhasil disimpan!');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(Anggota $anggota)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Anggota $anggota)
    {
         return view('edit',
        [
            'anggota' => $anggota,
            'divisis' => Divisi::all(),
        ]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Anggota $anggota)
    {
      
        $validate = $request->validate([
            'nama' => 'required|string|max:255',
            'nia' => 'required|string|max:50',
            'status' => 'required|string|max:50',
            'nama_unix' => 'required|string|max:50',
            'alamat' => 'required|string|max:255',
            'no_telp' => 'required|string|max:20',
            'divisi_id' => 'required|exists:divisis,id',

        ],
        [
            'nama.required' => 'Nama anggota harus diisi.',
            'nia.required' => 'Nomor Induk Anggota harus diisi.',
            'status.required' => 'Status anggota harus diisi.',
            'nama_unix.required' => 'Nama Unix harus diisi.',
            'alamat.required' => 'Alamat harus diisi.',
            'no_telp.required' => 'Nomor Telepon harus diisi.',
            'no_telp.numeric' => 'Nomor Telepon harus berupa angka.',
            'no_telp.max' => 'Nomor Telepon tidak boleh lebih dari 20 karakter.',
            'divisi_id.required' => 'Divisi harus dipilih.',
        
        ]);

        $anggota->update($validate);

        return to_route('index')->withSuccess('Data anggota berhasil di edit!');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Anggota $anggota)
    {
        $anggota->delete($anggota);

        return to_route('index')->withSuccess('Data anggota berhasil di hapus!');
    }
}

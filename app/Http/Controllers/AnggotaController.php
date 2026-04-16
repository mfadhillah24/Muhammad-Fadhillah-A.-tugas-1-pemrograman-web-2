<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('index' ,
        [
            'anggota' => Anggota::all()
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
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
            'anggota' => $anggota
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
        ]);

        $anggota->update($validate);

        return to_route('index')->withSuccess('Data anggota berhasil di edit!');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Anggota $anggota)
    {
        //
    }
}

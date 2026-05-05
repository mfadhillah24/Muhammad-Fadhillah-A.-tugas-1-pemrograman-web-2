<?php

namespace App\Http\Controllers;

use App\Models\Divisi;
use Illuminate\Http\Request;


class DivisiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('divisi.index', [
            'divisis' => Divisi::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('divisi.create', [
            'divisis' => Divisi::all()
        ]);

    }

    /**
     * Store a newly created resource in storage.
     */
   public function store(Request $request)
    {
        $validate = $request->validate([
            'nama_divisi' => 'required|string|max:255',
            'deskripsi' => 'required|string|max:255',
            'ketua_divisi' => 'required|string|max:255',
            
        ],
        [
            'nama_divisi.required' => 'Nama Divisi harus diisi.',
            'deskripsi.required' => 'Deskripsi harus diisi.',
            'ketua_divisi.required' => 'Ketua Divisi harus diisi.',
           
        ]);

        Divisi::create($validate);

        
        return redirect()->route('divisi.index')->withSuccess('Data divisi berhasil disimpan!');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(Divisi $divisi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Divisi $divisi)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Divisi $divisi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Divisi $divisi)
    {
        //
    }
}

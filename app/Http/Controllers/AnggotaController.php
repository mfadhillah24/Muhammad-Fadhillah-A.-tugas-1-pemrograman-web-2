<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\Divisi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
    $divisi_id = request('divisi_id');

    if($keyword){
        $query->where('nama', 'like', "%$keyword%")
              ->orWhere('nia', 'like', "%$keyword%")
              ->orWhere('status', 'like', "%$keyword%")
              ->orWhere('nama_unix', 'like', "%$keyword%")
              ->orWhere('alamat', 'like', "%$keyword%")
              ->orWhere('no_telp', 'like', "%$keyword%");
    }

    if($divisi_id){
                $query->where('divisi_id', $divisi_id);
              }


    return view('index', [
        'anggota' => $query->paginate(5)->withQueryString(),
        'divisis' => Divisi::all(), 
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
            'email' => 'nullable|email|max:255',
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
            'email.email' => 'Format email tidak valid.',
        ]);

        try{

        DB::beginTransaction();
        Anggota::create($validate);
        DB::commit();
        return redirect()->route('index')->withSuccess('Data anggota berhasil disimpan!');

        }catch(\Exception $e){
            DB::rollBack();
            return redirect()->route('create')->withError('Terjadi kesalahan saat menyimpan data anggota Harap coba lagi!');

        }
        
    
    }

    /**
     * Display the specified resource.
     */
    public function show(Anggota $anggota)
    {
        return view('show', [
            'anggota' => $anggota->load('divisi'),
        ]);
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
            'email' => 'nullable|email|max:255',
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
            'email.email' => 'Format email tidak valid.',
        ]);

        try{

        DB::beginTransaction();
        $anggota->update($validate);
        DB::commit();
        return redirect()->route('index')->withSuccess('Data anggota berhasil di edit!');

        }catch(\Exception $e){
            DB::rollBack();
            return redirect()->route('edit', $anggota)->withError('Terjadi kesalahan saat menyimpan data anggota Harap coba lagi!');

        }
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Anggota $anggota)
    {
        $anggota->delete();

        return to_route('index')->withSuccess('Data anggota berhasil di hapus!');
    }

    // SOFT DELETES
    public function trash()

    {
        return view('trash', [
            'anggotas' => Anggota::onlyTrashed()->latest()->paginate(5),
        ]);
    }

    public function restore(Anggota $anggota)
    {
        $anggota->restore();
    

        return redirect()->route('anggota.trash')->withSuccess('Data anggota berhasil dikembalikan!');
    }
        
}

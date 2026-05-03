<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use App\Models\Divisi; 

#[Fillable(['nama', 'nia', 'status', 'nama_unix', 'alamat', 'no_telp', 'divisi_id'])]

class Anggota extends Model
{
    /** @use HasFactory<\Database\Factories\AnggotaFactory> */
    use HasFactory;
    public function divisi()
    {
        return $this->belongsTo(Divisi::class);
    }

}

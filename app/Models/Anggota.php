<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use App\Models\Divisi; 
use Illuminate\Database\Eloquent\SoftDeletes;

#[Fillable(['nama', 'nia', 'status', 'nama_unix', 'alamat', 'no_telp', 'divisi_id','email'])]

class Anggota extends Model
{
    /** @use HasFactory<\Database\Factories\AnggotaFactory> */
    use HasFactory, SoftDeletes;
    public function divisi()
    {
        return $this->belongsTo(Divisi::class);
    }

}

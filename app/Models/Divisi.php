<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

#[Fillable(['nama_divisi', 'deskripsi', 'ketua_divisi'])]

class Divisi extends Model
{
    use HasFactory;
    public function anggotas()
    {
        return $this->hasMany(Anggota::class);
    }    
}

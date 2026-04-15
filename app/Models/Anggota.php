<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;
#[Fillable(['nama', 'nia', 'status', 'nama_unix', 'alamat', 'no_telp'])]

class Anggota extends Model
{
    /** @use HasFactory<\Database\Factories\AnggotaFactory> */
    use HasFactory;
}

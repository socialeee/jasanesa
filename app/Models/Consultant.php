<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultant extends Model
{
    use HasFactory;

    protected $fillable = [
        'foto_profil',
        'nama_pakar',
        'bidang',
        'deskripsi',
        'harga_jasa',
    ];
}

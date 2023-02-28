<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

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
    public function showImage(){
        if (Storage::has($this->foto_profil)) {
            return asset('storage/'.$this->foto_profil);
        }
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bidang extends Model
{
    use HasFactory;

    // protected $table = 'bidangs'; // Nama tabel yang digunakan
    // protected $model = 'App\Models\Bidang'; // Nama model yang digunakan

    public function consultants()
    {
        return $this->belongsToMany(Consultant::class, 'consultant_bidang');
    }
}

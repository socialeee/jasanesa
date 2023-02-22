<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sport extends Model
{
    use HasFactory;
    protected $table = 'sports';
    protected $fillable = [
        'foto_lapangan', 
        'nama_lapangan', 
        'deskripsi', 
        'harga_jasa'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diklat extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'informasi_diklat',
        'pembahasan_diklat',
        'date_start',
        'time_start',
        'harga',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'userdiklatpayment');
    }
}

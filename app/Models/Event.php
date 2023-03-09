<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model // ini adalah model transaksi
{
    use HasFactory;

    protected $fillable = [
        'title',
        'start_date',
        'end_date',
        'start_time',
        'end_time',
    ];

    public function user()
    {
        return $this->hasMany(User::class);
    }
}

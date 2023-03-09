<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hari extends Model
{
    use HasFactory;

    protected $fillable = [
        'Hari'
    ];

    public function schedule()
    {
        return $this->hasMany(schedule::class);
    }

    // public function consultant()
    // {
    //     return $this->belongsToMany(Consultant::class, 'schedule');
    // }
}

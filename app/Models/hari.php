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

    // public function schedule()
    // {
    //     return $this->hasMany(schedule::class);
    // }

    // public function consultant()
    // {
    //     return $this->belongsToMany(Consultant::class, 'schedule');
    // }

    // public function schedules()
    // {
    //     return $this->belongsToMany(schedule::class, 'day_schedule', 'hari_id', 'schedule_id');
    // }

    // public function consultants()
    // {
    //     return $this->belongsToMany(Consultant::class, 'consultant_schedule', 'hari_id', 'consultant_id');
    // }
}

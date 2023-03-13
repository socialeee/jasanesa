<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class schedule extends Model
{
    use HasFactory;
    protected $fillable = 'jam';

    // public function hari()
    // {
    //     return $this->belongsTo(hari::class);
    // }

    // public function consultant()
    // {
    //     return $this->belongsTo(Consultant::class);
    // }

    // public function days()
    // {
    //     return $this->belongsToMany(hari::class, 'day_schedule', 'schedule_id', 'hari_id');
    // }

    // public function consultants()
    // {
    //     return $this->belongsToMany(Consultant::class, 'consultant_schedule', 'schedule_id', 'consultant_id');
    // }
}

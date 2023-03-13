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
    public function showImage()
    {
        if (Storage::has($this->foto_profil)) {
            return asset('storage/' . $this->foto_profil);
        }
    }

    public function user()
    {
        return $this->belongsToMany(User::class);
    }

    // public function event()
    // {
    //     return $this->belongsTo(Event::class);
    // }

    // public function schedule()
    // {
    //     return $this->hasMany(schedule::class);
    // }

    // public function hari()
    // {
    //     return $this->hasMany(schedule::class);
    // }

    // public function schedules()
    // {
    //     return $this->belongsToMany(schedule::class, 'consultant_schedule', 'consultant_id', 'schedule_id');
    // }

    // public function days()
    // {
    //     return $this->belongsToMany(hari::class, 'consultant_schedule', 'consultant_id', 'hari_id');
    // }
}

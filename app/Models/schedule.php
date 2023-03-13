<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class schedule extends Model
{
    use HasFactory;
    protected $table = 'schedules';

    public function hari()
    {
        return $this->belongsTo(hari::class);
    }

    public function consultant()
    {
        return $this->belongsTo(Consultant::class);
    }
}

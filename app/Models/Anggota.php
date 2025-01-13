<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    protected $table = 'anggotas';
    protected $fillable = [
        'name',
        'phone',
        'gender',
        'beladiri',
        'membership',
        'coach_id'
    ];


    public function coach()
    {
        return $this->belongsTo(Coach::class);
    }
}
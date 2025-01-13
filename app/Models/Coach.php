<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Coach extends Model
{
    protected $table = 'coach';
    protected $fillable = ['nama', 'kelas_id'];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }
}

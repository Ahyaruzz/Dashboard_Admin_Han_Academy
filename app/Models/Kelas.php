<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $fillable = ['nama_kelas'];

    public function coaches()
    {
        return $this->hasMany(Coach::class);
    }
}

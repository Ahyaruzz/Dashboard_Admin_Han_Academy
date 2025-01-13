<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Coach extends Model
{
    protected $table = 'coach';
    protected $fillable = ['nama', 'kelas_id'];
    
    protected $casts = [
        'kelas_id' => 'integer'
    ];

    public function toArray()
    {
        return [
            'id' => $this->id,
            'nama' => $this->nama,
            'kelas_id' => $this->kelas_id
        ];
    }
}
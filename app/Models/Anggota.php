<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    use HasFactory;

    protected $table = 'anggotas'; // Nama tabel

    protected $fillable = [
        'name', 'phone', 'gender', 'beladiri', 'membership', 'coach',
    ];
}

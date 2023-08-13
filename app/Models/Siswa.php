<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{   
    protected $fillable = [
        'id', 'nisn', 'nama', 'kelas'
    ];
    protected $table = 'siswas';

    use HasFactory;
}
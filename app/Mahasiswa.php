<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $fillable = [
        'nim', 'nama', 'user_id','jurusan','himpunan','laboratorium_id'
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    protected $table = 'penggunas';
    //membatasi tabel yang diisi
    protected $fillable = [
        'username','password'
    ];
}

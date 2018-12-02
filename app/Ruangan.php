<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ruangan extends Model
{
    //ruangans = nama tabelnya
    protected $table = "ruangans";
    //fillable = batasan nilai yang diisikan
    protected $fillable = [
        'nama',
        'deskripsi'
    ];
    
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laboratorium extends Model
{
    protected $table = "himpunans";
    protected $fillable = [
        'nama',
        'dosen_id'
    ];
}

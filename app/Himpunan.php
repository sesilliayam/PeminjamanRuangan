<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Himpunan extends Model
{
    protected $table = "himpunans";
    protected $fillable = [
        'nama',
        'pembina_id'
    ];
}

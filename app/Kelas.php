<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $table = "kelas";
    protected $fillable = [
        'nama',
        'id_dosenwali'
    ];

    public function dosen(){
        return $this->belongsTo(Dosen::class, 'id_dosenwali','id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laboratorium extends Model
{
    protected $table = "laboratoria";
    protected $fillable = [
        'nama',
        'dosen_id'
    ];

    public function dosen()
    {
        return $this->belongsTo(Dosen::class,'dosen_id','id');
    }

}

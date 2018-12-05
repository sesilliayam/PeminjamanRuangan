<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswas';
    protected $fillable = [
        'nim', 'nama', 'user_id','jurusan','kelas_id','himpunan_id','laboratorium_id'
    ];

    public function kelas(){
        return $this->belongsTo(Kelas::class,'kelas_id', 'id');
    }

    public function himpunan(){
        return $this->belongsTo(Himpunan::class,'himpunan_id','id');
    }

    public function laboratorium(){
        return $this->belongsTo(Laboratorium::class,'laboratorium_id','id');
    }
}
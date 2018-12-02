<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    //transaksis = nama tabelnya
    protected $table = "transaksis";
    //fillable = batasan nilai yang diisikan
    protected $fillable = [
        'id_pemesan',
        'no_hp',
        'id_ruangan',
        'tanggal',
        'tanggal',
        'jam_mulai',
        'jam_selesai',
        'tujuan',
        'organisasi_terkait'
    ];
}

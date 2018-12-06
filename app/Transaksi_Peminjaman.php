<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi_Peminjaman extends Model
{
    // transaksi_peminjamen = nama tabelnya
    protected $table = "transaksi__peminjamen";
    // fillable = batasan nilai yang diisikan
    protected $fillable = [
        'id_pemesan',
        'no_hp',
        'id_ruangan',
        'tanggal',
        'tanggal',
        'jam_mulai',
        'jam_selesai',
        'tujuan',
        'organisasi_terkait',
        'status'
    ];
}

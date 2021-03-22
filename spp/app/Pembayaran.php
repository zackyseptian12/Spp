<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    protected $fillable = ([
        'id_pemabayaran',
        'id_petugas',
        'nisn', 
        'tgl_bayar',
        'bulan_bayar',
        'tahun_bayar',
        'id_spp',
        'jumlah_bayar',
    ]);

    protected $table = 'pembayaran';

    protected $primaryKey = 'id';
}

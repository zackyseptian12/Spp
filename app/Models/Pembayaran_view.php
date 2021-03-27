<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran_view extends Model
{
    use HasFactory;

    protected $table = 'view_pembayaran2';

    protected $fillable = ([
        'id',
        'nama_petugas',
        'nisn',
        'tgl_bayar',
        'bulan_bayar',
        'tahun_bayar',
        'id_spp',
        'tahun',
        'nominal',
        'jumlah_bayar'
    ]);
}

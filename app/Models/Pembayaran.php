<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;
use PHPUnit\Framework\MockObject\Stub\ReturnSelf;

class Pembayaran extends Model
{
    protected $fillable = ([
        'id_pembayaran',
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

    public function spp()
    {
        return $this->belongsTo('App\Models\Spp', 'id');
    }

    public function siswa()
    {
        return $this->belongsTo('App\Models\Siswa', 'id');
    }

    public function petugas()
    {
        Return $this->belongsTo('App\Models\Petugas', 'id');
    }
}

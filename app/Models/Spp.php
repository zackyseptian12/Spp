<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Spp extends Model
{
    protected $table = 'spp';

    protected $fillable = ([
        'id_spp',
        'tahun',
        'nominal',
    ]);

    protected $primaryKey = 'id';

    public function pembayaran()
    {
       return $this->hasMany('App/Models/Pembayaran', 'id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
    protected $table = 'petugas';
    protected $fillable = ([
        'id_petugas',
        'username',
        'password',
        'nama_petugas',
        'level',
    ]);

    protected $primaryKey = 'id';

    public function pembayaran()
    {
        return $this->hasMany('App/Models/Pembayaran', 'id');
    }
}

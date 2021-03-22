<?php

namespace App;

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
}

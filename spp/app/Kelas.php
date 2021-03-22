<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $table = 'kelas';
    protected $fillable = ([
        'id_kelas',
        'nama_kelas',
        'major',
    ]);

    protected $primaryKey = 'id';
}

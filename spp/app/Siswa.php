<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
   protected $table = 'siswa';
   protected $fillable = ([
       'nisn',
       'nis',
       'nama',
       'id_kelas',
       'alamat',
       'no_hp',
       'id_spp',
   ]);

   protected $primaryKey = 'id';
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa_view extends Model
{
    use HasFactory;

    protected $table = 'view_siswa';

    protected $fillable = ([
        'id',
        'nisn',
        'nis',
        'nama',
        'nama_kelas',
        'major',
        'alamat',
        'no_hp',
        'tahun',
        'nominal',
    ]);
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Spp;
use App\Models\Kelas;
class SiswaController extends Controller
{
    public function index()
    {
      $siswa = Siswa::all();
      return view('siswa.index', compact('siswa'));
    }

    public function create()
    {
        $kelas = Kelas::pluck('nama_kelas','id');
        $spp = Spp::pluck('nominal','id');
        return view('siswa.create',compact('kelas','spp'));
    }

    public function store(Request $request)
    {
      Siswa::create([
        'nisn'=>$request->nisn,
        'nis'=>$request->nis,
        'nama'=>$request->nama,
        'id_kelas'=>$request->id_kelas,
        'alamat'=>$request->alamat,
        'no_hp'=>$request->no_hp,
        'id_spp'=>$request->id_spp
      ]);
     return redirect()->route('indexsiswa');
    }

    public function edit($id)
    {
      $siswa = Siswa::find($id);
      return view('siswa.edit',compact('siswa'));
    }

    public function update(Request $request,$id)
    {
      $siswa = Siswa::find($id)->update($request->all());
      return redirect()->route('indexsiswa');
    }

    public function delete($nisn)
    {
      $siswa = Siswa::find($nisn);
      $siswa->delete();
      return redirect()->route('indexsiswa');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Spp;
use App\Models\Kelas;
use App\Models\User;
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

      $email = $request->nis.'@siswa.com';
      User::create([
        // 'id' => $request->id,
        'nio' => $request->nis,
        'name' => $request->nama,
        'email' => $email,
        'username' => $request ->nama,
        'password' => bcrypt($request->nis),
        'role' => 'siswa',
        
      
        ]);
     return redirect()->route('indexsiswa');
    }

    public function edit($id)
    {
      $siswa = Siswa::find($id);
      // $kelas = Kelas::get()->all();
      // $spp = Spp::get()->all();

      $kelas = Kelas::pluck('nama_kelas', 'id');
      $spp = Spp::pluck('nominal', 'id');
      // dd($spp);
      return view('siswa.edit',compact('siswa','kelas','spp'));
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

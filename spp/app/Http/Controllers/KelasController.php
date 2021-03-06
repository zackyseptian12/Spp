<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kelas;
class KelasController extends Controller
{
    public function index()
    {
        $kelas = Kelas::all();
        return view('kelas.index', compact('kelas'));
    }

    public function create()
    {
        return view ('kelas.create');
    }

    public function store(Request $request)
    {
        Kelas::create([
            'id_kelas'=>$request->id_kelas,
            'nama_kelas'=>$request->nama_kelas,
            'major'=>$request->major
        ]);
       return redirect()->route('indexkelas');
    }

    public function delete($id_kelas)
    {
      $kelas = Kelas::find($id_kelas);
      $kelas->delete();

      return redirect()->route('indexkelas');


    }

    public function update(Request $request, $id_kelas)
    {
        $kelas = Kelas::find($id_kelas)->update($request->all());
        return redirect()->route('indexkelas');
        # code...
    }

    public function edit($id)
    {
        $kelas = Kelas::find($id);
        return view('kelas.edit', compact('kelas'));
    }
}

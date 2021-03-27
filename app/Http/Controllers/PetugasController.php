<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Petugas;
class PetugasController extends Controller
{
    public function index()
    {
        $petugas = Petugas::all();
        return view('petugas.index', compact('petugas'));
    }

    public function create()
    {
        return view('petugas.create');
    }

    public function store(Request $request)
    {
        Petugas::create([
            // 'id_petugas'=>$request->id_petugas,
            'username'=>$request->username,
            'password'=>$request->password,
            'nama_petugas'=>$request->nama_petugas,
            'level'=>$request->level,
        ]);

        return redirect()->route('indexpetugas');
    }

    public function delete($id)
    {
        $petugas = Petugas::find($id);
        $petugas->delete();
        return redirect()->route('indexpetugas');
    }

    public function edit($id)
    {
        $petugas = Petugas::find($id);
        return view('petugas.edit', compact('petugas'));
    }

    public function update(Request $request, $id)
    {
        $petugas = Petugas::find($id)->update($request->all());
        return redirect()->route('indexpetugas');
    }
}

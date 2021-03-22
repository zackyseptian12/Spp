<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Spp;
class SppController extends Controller
{
    public function index()
    {
        $spp = Spp::all();
        return view('spp.index', compact('spp'));
    }
    public function create()
    {
        return view('spp.create');
    }

    public function store(Request $request)
    {
        Spp::create([
            'id_spp'=>$request->id_spp,
            'tahun'=>$request->tahun,
            'nominal'=>$request->nominal,
        ]);

        return redirect()->route('indexspp');
    }

    public function delete($id_spp)

    {
        $spp = Spp::find($id_spp);
        $spp->delete();
        return redirect()->route('indexspp');

        # code...
    }

    public function update(Request $request, $id_spp)
    {
        $spp = Spp::find($id_spp)->update($request->all());
        return redirect()->route('indexspp');
    }
    public function edit ($id)
    {
        $spp = Spp::find($id);
        return view ('spp.edit', compact('spp'));
    }
}

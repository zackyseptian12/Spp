<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Spp;
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
            // 'id'=>$request->id,
            'tahun'=>$request->tahun,
            'nominal'=>$request->nominal,
        ]);

        return redirect()->route('indexspp');
    }

    public function delete($id)

    {
        $spp = Spp::find($id);
        $spp->delete();
        return redirect()->route('indexspp');

        # code...
    }

    public function update(Request $request, $id)
    {
        $spp = Spp::find($id)->update($request->all());
        return redirect()->route('indexspp');
    }
    public function edit ($id)
    {
        $spp = Spp::find($id);
        return view ('spp.edit', compact('spp'));
    }
}

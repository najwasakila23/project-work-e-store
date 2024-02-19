<?php

namespace App\Http\Controllers;
use RealRashid\SweetAlert\Facades\Alert; 


use Illuminate\Http\Request;
use App\Models\Toko;

class TokoController extends Controller
{
    public function index() {
        $datas = Toko::all();

        return view('toko.index', compact('datas'));
    }

    public function create() {
        $data = new Toko();
        return view('toko.create', compact('data'));
    }

    public function store(Request $request) {
        $req = $request->all();

        Toko::create($req);

        Alert::success('Toko Berhasil ditambahkan');
        return redirect()->route('toko.index');
        
    }

    public function destroy(Request $request, $id)
    {
        Toko::find($id);
        Toko::find($id)->delete();

        Alert::success('Toko Berhasil dihapus');
        return redirect()->route('toko.index');
        
    }

    public function edit(Request $request, $id) 
    {
        $data = Toko::find($id);

        return view('toko.edit', compact('data'));
    }

    public function update(Request $request, Toko $toko)
    {
        $req = $request->all();

        $toko->update($req);

        Alert::success('Toko berhasil diupdate');
        return redirect()->route('toko.index'); 
    }
    
}

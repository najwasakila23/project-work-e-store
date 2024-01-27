<?php

namespace App\Http\Controllers;

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
        return redirect()->route('toko.index');
    }
    
}

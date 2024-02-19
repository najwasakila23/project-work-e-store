<?php

namespace App\Http\Controllers;
use RealRashid\SweetAlert\Facades\Alert; 


use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index() {
        $datas = Product::all();

        return view('product.index', compact('datas'));
    }

    public function create() {
        $data = new Product();
        return view('product.create', compact('data'));
    }
    public function store(Request $request) {
        $req = $request->all();

        Product::create($req);

        Alert::success('Produk Berhasil ditambahkan');
        return redirect()->route('product.index');
        
    }

    public function destroy(Request $request, $id)
    {
        Product::find($id);
        Product::find($id)->delete();

        Alert::success('Produk Berhasil dihapus');
        return redirect()->route('product.index');
        
    }

    public function edit(Request $request, $id) 
    {
        $data = Product::find($id);

        return view('product.edit', compact('data'));
    }

    public function update(Request $request, Product $product)
    {
        $req = $request->all();

        $product->update($req);

        Alert::success('Product berhasil diupdate');
        return redirect()->route('product.index'); 
    }
    

}

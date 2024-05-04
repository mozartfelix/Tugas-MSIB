<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller {
    public function getIndex() {
        $list = Product::get();

        return view('index', compact('list'));
    }

    public function getListProducts() {
        $products = Product::paginate(10);
        return view('list_products', compact('products'));
    }

    public function getForm() {
        return view('form');
    }

    public function postForm(Request $request) {
        if (!$request->filled('gambar')) {
            return redirect()->back()->with('error', 'Error. Field Gambar wajib diisi.');
        } else if (!$request->filled('nama')) {
            return redirect()->back()->with('error', 'Error. Field Nama wajib diisi.');
        } else if (!$request->filled('berat')) {
            return redirect()->back()->with('error', 'Error. Field Berat wajib diisi.');
        } else if (!$request->filled('harga')) {
            return redirect()->back()->with('error', 'Error. Field Harga wajib diisi.');
        } else if (!$request->filled('stok')) {
            return redirect()->back()->with('error', 'Error. Field Stok wajib diisi.');
        } else if ($request->kondisi == 0) {
            return redirect()->back()->with('error', 'Error. Field Kondisi wajib diisi.');
        } else if (!$request->filled('deskripsi')) {
            return redirect()->back()->with('error', 'Error. Field Deskripsi wajib diisi.');
        }
        
        Product::create([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'berat' => $request->berat,
            'gambar' => $request->gambar,
            'kondisi' => $request->kondisi,
            'deskripsi' => $request->deskripsi,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('list_products');
    }

    public function getUpdateForm($id) {
        $product = Product::find($id);
        return view('update_form', compact('product'));
    }

    public function updateProduct(Request $request, $id) {
        $product = Product::findOrFail($id);

        $product->update([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'berat' => $request->berat,
            'gambar' => $request->gambar,
            'kondisi' => $request->kondisi,
            'deskripsi' => $request->deskripsi,
            'updated_at' => now(),
        ]);

        return redirect()->route('list_products');
    }

    public function submitUpdatedProduct(Request $request, $id) {
        $product = Product::findOrFail($id);
        return view('update_form', compact('product'));
    }

    public function deleteProduct($id) {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('list_products');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Price;

class PriceController extends Controller
{
    public function index () {
        $prices = Price::all();
        return view('admin.price.index', compact('prices'));
    }

    public function create(){
        return view('admin.price.form');
    }

    public function store (Request $request) {
        $validatedData = $request->validate([
            'packet_name' => 'required',
            'price' => 'required',
            'unit' => 'required',
            'type' => 'required',
            'feature' => 'required',
        ]);
        Price::create($validatedData);

        return redirect()->route('admin.price.index')->with('success', 'Harga berhasil ditambahkan!');
    }

    public function edit ($id){
        $price = Price::findOrFail($id);
        return view('admin.price.edit', compact('price'));
    }
    
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'packet_name' => 'required',
            'price' => 'required',
            'unit' => 'required',
            'type' => 'required',
            'feature' => 'required',
        ]);

        Price::whereId($id)->update($validatedData);

        return redirect()->route('admin.price.index')->with('success', 'Harga berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $price = Price::findOrFail($id);
        $price->delete();

        return redirect()->route('admin.price.index')->with('success', 'Harga berhasil dihapus!');
    }
}

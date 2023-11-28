<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Icons;

class IconController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $icons = Icons::all();
        return view('admin.icon.index',compact('icons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.icon.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'icon_name'=>'required',
            'icon_code' => 'required'
        ]);
        Icons::create($validatedData);
        return redirect()->route('admin.icon.index')->with('success', 'Icon berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $icons = Icons::findOrFail($id);
        return view('admin.icon.edit',compact('icons'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'icon_name' => 'required',
            'icon_code' => 'required'
        ]);
        Icons::whereId($id)->update($validatedData);
        
        return redirect()->route('admin.icon.index')->with('success', 'Icon berhasil dirubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $icons = Icons::findOrFail($id);
        $icons->delete();

        return redirect()->route('admin.icon.index')->with('success', 'Icon berhasil dihapus');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Started;

class StartedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $started = Started::all();
        return view('admin.started.index',compact('started'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.started.form');
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
            'header' => 'required',
            'details' => 'required',
            'text' => 'required',
        ]);
        Started::create($validatedData);

        return redirect()->route('admin.started.index')->with('success', 'Halaman Started Berhasil Dibuat');

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
        $started = Started::findOrFail($id);
        return view('admin.started.edit',compact('started'));
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
            'header' => 'required',
            'details' => 'required',
            'text' => 'required',
        ]);

        Started::whereId($id)->update($validatedData);

        return redirect()->route('admin.started.index')->with('success', 'Konten Started Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $started = Started::findOrFail($id);
        $started->delete();

        return redirect()->route('admin.started.index')->with('success','Konten Started Berhasil Dihapus');

    }
}

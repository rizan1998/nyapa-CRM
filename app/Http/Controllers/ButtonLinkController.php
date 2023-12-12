<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ButtonLink;

class ButtonLinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buttonlink = ButtonLink::all();
        return view('admin.button-link.index', compact('buttonlink'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.button-link.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'link' => 'required'
        ]);

        $buttonlink = new ButtonLink();
        $buttonlink->link = $request->input('link');

        $buttonlink->save();
        return redirect()->route('admin.button-link.index')->with('success','Tautan berhasil ditambahkan');

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
        $buttonlink = ButtonLink::findOrFail($id);
        return view('admin.button-link.edit',compact('buttonlink'));
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
            'link' => 'required'
        ]);

        $buttonlink = ButtonLink::findOrFail($id);
        $buttonlink->link = $validatedData['link'];

        $buttonlink->save();
        return redirect()->route('admin.button-link.index')->with('success', 'Tautan Berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $buttonlink = ButtonLink::findOrFail($id);
        $buttonlink->delete();

        return redirect()->route('admin.button-link.index')->with('success','Tautan Berhasil dihapus');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{Social,Icons};

class SocialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $social = Social::with('icon')->get();
        return view('admin.footer-social.index',compact('social'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $icons = Icons::pluck('icon_name', 'id');
        return view('admin.footer-social.form',compact('icons'));
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
            'icon_id'=>'required',
            'social' => 'required',
            'link' => 'required'
        ]);
        Social::create($validatedData);
        return redirect()->route('admin.social.index')->with('success', 'social berhasil ditambahkan');
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
        $social = Social::with('icon')->findOrFail($id);
        $icons = Icons::pluck('icon_name', 'id');
        return view('admin.footer-social.edit', compact('social','icons'));
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
            'icon_id' => 'required',
            'social' => 'required',
            'link' => 'required',
        ]);
        Social::whereId($id)->update($validatedData);
        
        return redirect()->route('admin.social.index')->with('success', 'Social berhasil dirubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $social = Social::findOrFail($id);
        $social->delete();

        return redirect()->route('admin.social.index')->with('success', 'social berhasil dihapus');
    }
}

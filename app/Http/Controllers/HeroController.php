<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hero;

class HeroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hero = Hero::all();
        return view('admin.hero.index', compact('hero'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.hero.form');
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
        'header' => 'required',
        'details' => 'required',
        'image1' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',
        'image2' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    $hero = new Hero();
    $hero->header = $request->input('header');
    $hero->details = $request->input('details');

    if ($request->hasFile('image1')) {
        $image1Path = $request->file('image1')->store('images/hero');
        $hero->image1 = $image1Path;
    }

    if ($request->hasFile('image2')) {
        $image2Path = $request->file('image2')->store('images/hero');
        $hero->image2 = $image2Path;
    }

    $hero->save();
    
    return redirect()->route('admin.hero.index')->with('success', 'Hero berhasil ditambahkan');
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
        $hero = Hero::findOrFail($id);
        return view('admin.hero.edit', compact('hero'));
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
        $validatedDate = $request->validate([
        'header' => 'required',
        'details' => 'required',
        'image1' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',
        'image2' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    $hero = Hero::findOrFail($id);
    $hero->header = $validatedDate['header'];
    $hero->details = $validatedDate['details'];

    if ($request->hasFile('image1')) {
        $image1Path = $request->file('image1')->store('images/hero');
        $hero->image1 = $image1Path;
    }

    if ($request->hasFile('image2')) {
        $image2Path = $request->file('image2')->store('images/hero');
        $hero->image2 = $image2Path;
    }

    $hero->save();

    return redirect()->route('admin.hero.index')->with('success', 'hero berhasil diperbaharui');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hero = Hero::findOrFail($id);
        $hero->delete();

        return redirect()->route('admin.hero.index')->with('success','Hero berhasil dihapus');
    }
}

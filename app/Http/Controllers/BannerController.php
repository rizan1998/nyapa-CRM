<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banner;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banner = Banner::all();
        return view ('admin.banner.index', compact('banner'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.banner.form');
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
        'title' => 'required',
        'details' => 'required',
        'images' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    $banner = new Banner();
    $banner->header = $request->input('header');
    $banner->title = $request->input('title');
    $banner->details = $request->input('details');

    if ($request->hasFile('images')) {
        $imagePath = $request->file('images')->storeAs('images/banner', $request->file('images')->getClientOriginalName());
        $banner->images = $imagePath;
    }

    $banner->save();
    
    return redirect()->route('admin.banner.index')->with('success', 'banner berhasil ditambahkan');
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
        $banner = Banner::findOrFail($id);
        return view('admin.banner.edit', compact('banner'));
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
        'title' => 'required',
        'details' => 'required',
        'images' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    $banner = Banner::findOrFail($id);
    $banner->header = $validatedDate['header'];
    $banner->title = $validatedDate['title'];
    $banner->details = $validatedDate['details'];

    if ($request->hasFile('images')) {
        $imagePath = $request->file('images')->storeAs('images/banner', $request->file('images')->getClientOriginalName());
        $banner->images = $imagePath;
    }

    $banner->save();

    return redirect()->route('admin.banner.index')->with('success', 'banner berhasil diperbaharui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $banner = Banner::findOrFail($id);
        $banner->delete();

        return redirect()->route('admin.banner.index')->with('success','banner berhasil dihapus');
    }
}

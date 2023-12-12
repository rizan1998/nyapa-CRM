<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Testimonial;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials = Testimonial::all();
        return view('admin.testimonial.index', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.testimonial.form');
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
        'rating' => 'required',
        'quote' => 'required',
        'name' => 'required',
        'job' => 'required',
        'images' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    $testimonial = new Testimonial();
    $testimonial->rating = $request->input('rating');
    $testimonial->quote = $request->input('quote');
    $testimonial->name = $request->input('name');
    $testimonial->job = $request->input('job');

    if ($request->hasFile('images')) {
        $imagePath = $request->file('images')->storeAs('images/testimonial', $request->file('images')->getClientOriginalName());
        $testimonial->images = $imagePath;
    }

    $testimonial->save();

    return redirect()->route('admin.testimonial.index')->with('success', 'Testimonial berhasil ditambahkan');
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
        $testimonials = Testimonial::findOrFail($id);
        return view('admin.testimonial.edit', compact('testimonials'));
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
        'rating' => 'required',
        'quote' => 'required',
        'name' => 'required',
        'job' => 'required',
        'images' => 'mimes:png,jpg|max:2048',
    ]);

    $testimonial = Testimonial::findOrFail($id);
    $testimonial->rating = $validatedData['rating'];
    $testimonial->quote = $validatedData['quote'];
    $testimonial->name = $validatedData['name'];
    $testimonial->job = $validatedData['job'];

    if ($request->hasFile('images')) {
        $imagePath = $request->file('images')->storeAs('images/testimonial', $request->file('images')->getClientOriginalName());
        $testimonial->images = $imagePath;
    }

    $testimonial->save();

    return redirect()->route('admin.testimonial.index')->with('success', 'Testimonial berhasil diperbaharui');
}


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $testimonials = Testimonial::findOrFail($id);
        $testimonials->delete();

        return redirect()->route('admin.testimonial.index')->with('success','Testimonial berhasil dihapus');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{ServiceCard,Icons};

class ServicesCardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $service_card = ServiceCard::with('icon')->get();
        return view('admin.services.card.index',compact('service_card'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $icons = Icons::pluck('icon_name','id');
        return view('admin.services.card.form', compact('icons'));
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
            'icon_id'=> 'required',
            'title'=> 'required',
            'detail'=> 'required'
        ]);
        ServiceCard::create($validatedData);
        return redirect()->route('admin.service-card.index')->with('success', 'Card Berhasil Dibuat');
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
        $service_card = ServiceCard::with('icon')->findOrFail($id);
        $icon = Icons::pluck('icon_name','id');
        return view('admin.services.card.edit',compact('service_card','icon'));
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
            'title' => 'required',
            'detail' => 'required',
        ]);
        ServiceCard::whereId($id)->update($validatedData);
        
        return redirect()->route('admin.service-card.index')->with('success', 'Card berhasil dirubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service_card = ServiceCard::findOrFail($id);
        $service_card->delete();

        return redirect()->route('admin.service-card.index')->with('success', 'Card Berhasil Dihapus');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{Feature, PacketName, Icons};

class PriceController extends Controller
{
    public function indexFeatures()
    {
        $features = Feature::all();
        return view('admin.pricing.feature.index', compact('features'));
    }

    public function createFeatureForm()
    {
        $icons = Icons::pluck('icon_name', 'icon_code');
        $packetNames = PacketName::all();
        return view('admin.pricing.feature.form', compact('packetNames', 'icons'));
    }

    public function storeFeature(Request $request)
    {
        $validatedData = $request->validate([
            'packet_name_id' => 'required',
            'name.*' => 'required', 
            'icon.*' => 'required', 
        ]);

        $packetNameId = $validatedData['packet_name_id'];
        $features = $validatedData['name'];
        $icons = $validatedData['icon'];

        
        foreach ($features as $key => $feature) {
            $newFeature = new Feature([
                'packet_name_id' => $packetNameId,
                'name' => $feature,
                'icon' => $icons[$key],
            ]);

            $newFeature->save();
        }

        return redirect()->route('admin.pricing.feature.index')->with('success', 'Fitur berhasil ditambahkan!');
    }

    public function editFeatureForm($id)
    {
        $feature = Feature::findOrFail($id);
        $icons = Icons::pluck('icon_name', 'icon_code');
        $packetNames = PacketName::all();
        return view('admin.pricing.feature.edit', compact('feature', 'packetNames', 'icons'));
    }

    public function updateFeature(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'icon' => 'required',
        ]);

        Feature::whereId($id)->update($validatedData);
        
            return redirect()->route('admin.pricing.feature.index')->with('success', 'Data Feature berhasil diperbarui.');
    }


    public function destroyFeature($id)
    {
        $feature = Feature::findOrFail($id);
        $feature->delete();

        return redirect()->route('admin.pricing.feature.index')->with('success', 'Data Feature berhasil dihapus.');
    }


    /**
     * Route PacketName
     */

    public function indexPacketNames()
    {
        $packetNames = PacketName::all();
        return view('admin.pricing.packet-name.index', compact('packetNames'));
    }

    
    public function createPacketNameForm()
    {
        return view('admin.pricing.packet-name.form');
    }


    public function storePacketName(Request $request)
    {
        $validatedData = $request->validate([
            'packet_name' => 'required',
            'price' => 'required',
            'unit' => 'required',
            'type' => 'required',
        ]);

        PacketName::create($validatedData);

        return redirect()->route('admin.pricing.packet-name.index')->with('success', 'Data PacketName berhasil disimpan.');
    }

    
    public function editPacketNameForm($id)
    {
        $packetName = PacketName::findOrFail($id);
        return view('admin.pricing.packet-name.edit', compact('packetName'));
    }

    
    public function updatePacketName(Request $request, $id)
    {
        $validatedData = $request->validate([
            'packet_name' => 'required',
            'price' => 'required',
            'unit' => 'required',
            'type' => 'required',
        ]);

        PacketName::whereId($id)->update($validatedData);

        return redirect()->route('admin.pricing.packet-name.index')->with('success', 'Data PacketName berhasil diperbarui.');
    }

    
    public function destroyPacketName($id)
    {
        $packetName = PacketName::findOrFail($id);
        $packetName->delete();

        return redirect()->route('admin.pricing.packet-name.index')->with('success', 'Data PacketName berhasil dihapus.');
    }
}

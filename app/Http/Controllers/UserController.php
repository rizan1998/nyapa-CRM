<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function edit($id)
    {
        $user = User::find($id);
        // $passwordDefault = Config::where('keyword', 'password_default')->first();
        if (!$user) {
        return redirect()->back()->with('error', 'Pengguna tidak ditemukan');
        
    }
            
        return view('admin.profile', [
                'user' => $user,
                // 'passwordDefault' => $passwordDefault
            ]);
    }
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required|min:6',
            'password' => 'required|min:6|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'required|min:6'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }

        $user = User::where('id', $id)->first();

        // if ($request->file('photo')) {
        //     $photo = $request->file('photo');
        //     $photo->storeAs('public/profiles', $photo->getClientOriginalName());
        // } else {
        // }
        $photo = null;

        $user->username = $request->username;
        $user->password = Hash::make($request->password);
        $user->photo = $photo ? $photo->getClientOriginalName() : $user->photo;
        $user->save();

        Session::flash('success', 'Profile berhasil diubah!');
        return redirect()->route('user.edit', $user->id);
    }
}

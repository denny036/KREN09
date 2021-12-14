<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class ProfilDonaturController extends Controller
{
    public function index()
    {
        return view('donatur.profil');
    }

    public function updateProfile(Request $request)
    {
        $user_id = Auth::user()->id;
        $user = User::findOrFail($user_id);

        $user->name = $request->input('name');
        $user->password = Hash::make($request->input('password'));
        $user->email = $request->input('email');
        $user->no_telepon = $request->input('no_telepon');

        if($request->hasFile('image'))
        {
            $destination = 'img/uploads/profile'. $user->image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = hash('sha256', $extension) . '.' . $extension;
            $file->move('img/uploads/profile/', $filename);
            $user->image = $filename;
        }


        $user->update();

        return redirect()->route('donatur.profil')->with('success', 'Profil Anda berhasil diupdate.');
    }
}

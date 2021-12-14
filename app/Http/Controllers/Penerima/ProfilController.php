<?php

namespace App\Http\Controllers\Penerima;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;


class ProfilController extends Controller
{
    public function index()
    {
        return view('penerima.profil');
    }

    public function updateProfilPenerima(Request $request)
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

        return redirect()->route('penerima.profil')->with('success', 'Profil Anda berhasil diupdate.');
    }
}

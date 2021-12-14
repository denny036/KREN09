<?php

namespace App\Http\Controllers;

use App\Donasi;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DonasiController extends Controller
{

    public function index()
    {
        return view('donatur.home');
    }

    public function donasi()
    {
        return view('donatur.donasi');
    }

    public function simpanDonasi(Request $request)
    {
        $userID = auth()->user()->id;
        $nama_barang = $request->nama_barang;
        $deskripsi_barang = $request->deskripsi_barang;
        $jumlah = $request->jumlah;
        $detail_lokasi = $request->detail_lokasi;

        $file = $request->file('foto');
        $destinationPath = 'img/donasi';
        $file->move($destinationPath, $file->getClientOriginalName());

        DB::table('donasi')->insert([
            'user_id' => $userID,
            'nama_barang' => $nama_barang,
            'deskripsi_barang' => $deskripsi_barang,
            'jumlah' => $jumlah,
            'detail_lokasi' => $detail_lokasi,
            'foto' => $file->getClientOriginalName(),
        ]);


        return redirect()->route('donatur-donasi')->with('success', 'Donasi yang Anda lakukan sukses.');
    }

    public function show()
    {
        $donasi = Donasi::where('user_id', Auth::user()->id)->paginate(10); // mengambil semua data donasi
        // $donasi->deskripsi_barang = Str::limit($donasi->deskripsi_barang, 50);
        return view('donatur.detail-barang', compact('donasi'));
    }


    public function edit($id)
    {
        $donasi = Donasi::findOrFail($id);
        return view('donatur.edit', compact('donasi'));
    }

    public function update(Request $request, $id)
    {
        $donasi = Donasi::findOrFail($id);

        $donasi->nama_barang = $request->input('nama_barang');
        $donasi->deskripsi_barang = $request->input('deskripsi_barang');
        $donasi->jumlah  = $request->input('jumlah');
        $donasi->detail_lokasi = $request->input('detail_lokasi');

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('img/donasi/', $filename);
            $donasi->foto = $filename;
        }

        $donasi->save();

        return redirect()->route('detail-barang')->with('info', 'Berhasil mengubah data donasi');
    }

    public function destroy($id)
    {
        Donasi::find($id)->delete();
        return redirect()->back();
    }
}

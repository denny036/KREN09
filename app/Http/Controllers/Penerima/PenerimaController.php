<?php

namespace App\Http\Controllers\Penerima;

use App\Donasi;
use App\Penerima;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class PenerimaController extends Controller
{
    public function index()
    {
        return view('penerima.index');
    }

    public function viewBarangDonasi()
    {
        $products = Donasi::all();  //mengambil semua data barang donasi
        return view('penerima.data-barang', compact('products'));
    }

    public function detailBarang($id)
    {
        $dataBarang = Donasi::where('id', $id)->first();
        return view('penerima.detail-barang', compact('dataBarang'));
    }

    public function formAmbilBarang($id)
    {
        $dataBarang = Donasi::where('id', $id)->first();
        return view('penerima.form-barang', compact('dataBarang'));
    }

    public function ambilBarang(Request $request, $id)
    {

        // Penerima::create([

        //     'provinsi' => request('provinsi'),
        //     'kabupaten' => request('kabupaten'),
        //     'kecamatan' => request('kecamatan'),
        //     'kode_pos' => request('kode_pos'),
        //     'nomor_telepon' => request('nomor_telepon'),
        //     'jumlah_pesanan' => request('jumlah_pesanan'),
        //     'user_id' => auth()->user()->id,
        //     'donasi_id' => request('donasi_id'),
        // ]);

        $userID = auth()->user()->id;
        $dataBarang = Donasi::findOrFail($id);

        $provinsi = $request->provinsi;
        $kabupaten = $request->kabupaten;
        $kecamatan = $request->kecamatan;
        $kode_pos = $request->kode_pos;
        $nomor_telepon = $request->nomor_telepon;
        $jumlah_pesanan = $request->jumlah_pesanan;
        $donasi_id = $request->donasi_id;

        DB::table('transaksi')->insert([
            'user_id' => $userID,
            'donasi_id' => $donasi_id,
            'provinsi' => $provinsi,
            'kabupaten' => $kabupaten,
            'kecamatan' => $kecamatan,
            'kode_pos' => $kode_pos,
            'nomor_telepon' => $nomor_telepon,
            'jumlah_pesanan' => $jumlah_pesanan,
        ]);

        // $transaksi->save();



        // $userID = auth()->user()->id;

        // $provinsi = $request->provinsi;
        // $kabupaten = $request->kabupaten;
        // $kecamatan = $request->kecamatan;
        // $kode_pos = $request->kode_pos;
        // $nomor_telepon = $request->nomor_telepon;
        // $jumlah_pesanan = $request->jumlah_pesanan;

        // $barangDonasi = Donasi::findOrFail($id);
        // $barangDonasi->jumlah -= $request->jumlah_pesanan;


        // DB::table('transaksi')->insert([
        //     'user_id' => $userID,
        //     'donasi_id' => $ambilIDBarang,
        //     'provinsi' => $provinsi,
        //     'kabupaten' => $kabupaten,
        //     'kecamatan' => $kecamatan,
        //     'kode_pos' => $kode_pos,
        //     'nomor_telepon' => $nomor_telepon,
        //     'jumlah_pesanan' => $jumlah_pesanan,
        // ]);

        // DB::table('donasi')->update([
        //     'jumlah' => $barangDonasi
        // ]);


        return redirect()->route('form.peroleh-barang', $dataBarang->id)->with('success', 'Sukses');


    }

}

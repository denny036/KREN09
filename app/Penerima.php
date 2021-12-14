<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penerima extends Model
{
    protected $table = 'transaksi';

    protected $fillable = [
        'user_id',
        'donasi_id',
        'provinsi',
        'kabupaten',
        'kecamatan',
        'kode_pos',
        'nomor_telepon',
        'jumlah_pesanan'
    ];

    public function user() {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function donasi()
    {
        return $this->belongsTo('App\Donasi', 'donasi_id');
    }

    public function transaksi()
    {
        return $this->belongsTo('App\Donasi', 'donasi_id');
    }
}

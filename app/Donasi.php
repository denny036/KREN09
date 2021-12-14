<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donasi extends Model
{
    protected $table = 'donasi';
    protected $fillable = [
        'user_id',
        'nama_barang',
        'deskripsi_barang',
        'foto',
        'jumlah',
        'detail_lokasi',
    ];

    public function user() {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function donasi()
    {
        return $this->belongsTo('App\Donasi', 'id');
    }

    public function transaksi()
    {
        return $this->hasMany('App\Penerima', 'donasi_id');
    }
}

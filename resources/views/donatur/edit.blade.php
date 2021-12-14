<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit Donasi</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/donatur/edit.css') }}" />
</head>

<body>
    <main>
        <div class="big-wrapper light">
            <img src="./img/shape.png" alt="" class="shape" />

            <header>
                <div class="container">
                    <div class="logo">
                        <a href="{{ route('donatur-home') }}"><img src="{{ asset('img/logo.png')}}" alt="Logo" /></a>
                        <h3>Help Them</h3>
                    </div>
                    <div class="links">
                        <ul>
                            <li><a href="{{ route('donatur-home') }}">Home</a></li>
                            <li><a href="{{ route('donatur-donasi') }}">Donasi</a></li>
                            <li><a href="#">Chat</a></li>
                            <li><a href="{{ route('donatur.profil') }}" class="btn">Profil</a></li>
                        </ul>
                    </div>

                    <div class="overlay"></div>

                    <div class="hamburger-menu">
                        <div class="bar"></div>
                    </div>
                </div>
            </header>

            <div class="container col-md-6 ">
                <h1 class="text-center font-weight-bold">Edit Donasi Anda</h1>
                @if ($message = Session::get('info'))
                <div class="alert alert-primary">
                    <p>{{ $message }}</p>
                </div>
                @endif
                <div class="card">
                    <div class="card-header bg-success text-white">
                        Informasi Barang <span class="float-right">

                            <a href="{{ route('detail-barang') }}" class="text-primary">Lihat Barang</a></span>

                    </div>
                    <div class="card-body">
                        <form action="{{ route('update-donasi', $donasi->id) }}" method="POST" enctype="multipart/form-data"
                            role="form">
                            @csrf
                            {{ method_field('PUT') }}
                            <input type="hidden" name="id" id="id" value="{{ $donasi->id }}">

                            <div class="form-group">
                                <input type="text" name="nama_barang" class="form-control all-input"
                                    placeholder="Nama" value="{{ $donasi->nama_barang }}" required>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control all-input" name="deskripsi_barang"
                                    placeholder="Deskripsi barang" required>{{ $donasi->deskripsi_barang }}</textarea>
                            </div>
                            <label for="actual-btn" class="font-weight-bold">Edit Gambar Barang</label>
                            <div class="input-group my-3">

                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="foto" id="inputGroupFile01"
                                        aria-describedby="inputGroupFileAddon01" value="{{ $donasi->foto }}" />
                                    <label class="custom-file-label" for="inputGroupFile01"></label>
                                </div>
                            </div>

                            <label for="actual-btn" class="font-weight-bold">Jumlah Barang yang ingin
                                didonasikan</label>
                            <div class="input-group my-3">
                                <input type="number" name="jumlah" required="" class="form-control all-input"
                                    placeholder="Jumlah Barang" value="{{ $donasi->jumlah }}" required>
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Detail Lokasi</label>
                                <textarea class="form-control all-input" name="detail_lokasi"
                                    placeholder="Detail Lokasi" required>{{ $donasi->detail_lokasi }}</textarea>
                            </div>
                            <p class="card-text text-center">
                                <button type="submit" class="btn btn-sm btn-donasi font-weight-bold"
                                    name="edit_donasi" value="edit_donasi">Ubah</button>
                                <button type="reset" class="btn btn-sm btn-hapus font-weight-bold"
                                    name="hapus_donasi" value="hapus_donasi">Batal</button>
                            </p>
                            {{-- <button type="submit" class="btn btn-donasi" name="submit" value="donasi">Donasi</button> --}}
                        </form>
                    </div>
                </div>
            </div>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Donasi Barang</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/donatur/donasi.css') }}" />
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.slim.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
                <h1 class="text-center font-weight-bold">Donasi</h1>
                @if ($message = Session::get('success'))
                <script>
                    Swal.fire({
                    icon: 'success',
                    title: 'SELAMAT',
                    text: 'Barang anda berhasil ditambahkan',
                    confirmButtonText: '<a class="text-white" href="{{ route("detail-barang") }}">Lihat Barang</a>',
                    confirmButtonColor: '#319DAB',
                });
                </script>
                {{-- <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div> --}}
                @endif
                <div class="card">
                    <div class="card-header bg-success text-white">
                        Informasi Barang <span class="float-right">

                            <a href="{{ route('detail-barang') }}" class="text-primary">Lihat Barang</a></span>

                    </div>
                    <div class="card-body">
                        <form action="{{ route('simpan-donasi') }}" method="POST" enctype="multipart/form-data"
                            role="form">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="nama_barang" required="" class="form-control all-input"
                                    placeholder="Nama" value="{{ old('nama_barang') }}">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control all-input" name="deskripsi_barang"
                                    placeholder="Deskripsi barang">{{ old('deskripsi_barang') }}</textarea>
                            </div>
                            <label for="actual-btn" class="font-weight-bold">Tambah Gambar Barang</label>
                            <div class="input-group my-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="foto" id="inputGroupFile01"
                                        aria-describedby="inputGroupFileAddon01" value="{{ old('foto') }}" />
                                    <label class="custom-file-label" for="inputGroupFile01"></label>
                                </div>
                            </div>

                            <label for="actual-btn" class="font-weight-bold">Jumlah Barang yang ingin
                                didonasikan</label>
                            <div class="input-group my-3">
                                <input type="number" name="jumlah" required="" class="form-control all-input"
                                    placeholder="Jumlah Barang">
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Detail Lokasi</label>
                                <textarea class="form-control all-input" name="detail_lokasi"
                                    placeholder="Detail Lokasi">{{ old('detail_lokasi') }}</textarea>
                            </div>
                            <button type="submit" class="btn btn-donasi" name="submit" value="donasi">Donasi</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="bottom-area">
                <div class="container">
                    <button class="toggle-btn" hidden>
                    </button>
                </div>
            </div>

        </div>
    </main>

    <!-- JavaScript Files -->

    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <script src="{{ asset('js/donatur/donasi.js') }}"></script>

</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Donasi Barang</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />

    <link rel="stylesheet" href="{{ asset('penerima-barang/css/detail-barang.css') }}" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.slim.js"></script>

</head>

<body>
    <main>
        <div class="big-wrapper light">

            <header>
                <div class="container">
                    <div class="logo">
                        <a href="{{ route('penerima.index') }}"><img src="{{ asset('img/logo.png')}}" alt="Logo" /></a>
                        <h3>Help Them</h3>
                    </div>

                    <div class="links">
                        <ul>
                            <li><a href="{{ route('penerima.index') }}">Home</a></li>
                            <li><a href="{{ route('barang.donasi') }}">Barang Donasi</a></li>
                            <li><a href="#">Chat</a></li>
                            <li><a href="{{ route('penerima.profil') }}" class="btn">Profil</a></li>
                        </ul>
                    </div>

                    <div class="overlay"></div>

                    <div class="hamburger-menu">
                        <div class="bar"></div>
                    </div>
                </div>
            </header>

            <section id="gallery ">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 mb-4">
                            <div class="card" id="bg-card">
                                <img src="{{ asset('img/donasi/' . $dataBarang->foto) }}" width="700" height="400"
                                    alt="" class="card-img-top gambar-detail-barang">
                                <div class="card-body">
                                    <h5 class="card-title text-dark font-weight-bold">{{ $dataBarang->nama_barang }}</h5>
                                    <p class="card-text">{{ $dataBarang->deskripsi_barang }}</p>
                                    <p class="card-text">Jumlah barang yang tersedia: {{ $dataBarang->jumlah }}</p>
                                    <p class="card-text">Pemilik: {{ $dataBarang->user->name }}</p>
                                    <p class="card-text">Kontak: {{ $dataBarang->user->no_telepon }}</p>
                                    <p class="card-text"><i class="fas fa-map-marker-alt"></i> {{ $dataBarang->detail_lokasi }}</p>
                                    <a href="{{ route('form.peroleh-barang', $dataBarang->id) }}" class="btn-peroleh btn-outline-success btn-sm font-weight-bold">Peroleh Barang</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            {{-- <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-8">

                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top crop" width="307" height="240"
                                src="{{ asset('img/donasi/' . $dataBarang->foto) }}" alt="Donasi Anda">
                            <div class="card-body">
                                <h4 class="card-title text-center">{{ $dataBarang->nama_barang }}</h4>
                                <p class="card-text text-primary text-center">{{ $dataBarang->detail_lokasi }}</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div> --}}


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
    <script src="{{ asset('penerima-barang/js/detail-barang.js') }}"></script>

</body>

</html>

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

    <link rel="stylesheet" href="{{ asset('penerima-barang/css/form-barang.css') }}" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.slim.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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

            <div class="container">
                <div class="row">

                    <div class="col-12">
                        <div class="card p-3">
                            @if ($message = Session::get('success'))
                            <script>
                                Swal.fire({
                                    icon: 'success',
                                    title: 'SELAMAT',
                                    text: 'Barang segera diproses. Hubungi pemilik barang dengan menekan tombol Hubungi untuk melakukan proses pengambilan barang.',
                                    confirmButtonText: '<a class="text-white" href="https://api.whatsapp.com/send/?phone=62{{ substr($dataBarang->user->no_telepon, 1) }}&text&app_absent=0" target="_blank">Hubungi Pemilik</a>',
                                    confirmButtonColor: '#319DAB',
                                });
                            </script>
                            {{-- <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div> --}}
                            @endif
                            <div class="card-body border p-0">
                                <p> <a class="btn btn-primary p-2  d-flex align-items-center justify-content-between bg-dark"
                                        data-bs-toggle="collapse" href="#collapseExample" role="button"
                                        aria-expanded="true" aria-controls="collapseExample">
                                        <span class="fw-bold">Barang yang dibutuhkan</span> </a> </p>
                                <div class="collapse show p-3 pt-0" id="collapseExample">
                                    <div class="row">
                                        <div class="col-lg-5 mb-lg-0 mb-3">
                                            <p class="mb-2"><img src="{{ asset('img/donasi/' . $dataBarang->foto) }}"
                                                    class="card-img-top gambar-detail-barang img-thumbnail"></p>
                                            <p class="h2 mb-2">{{ $dataBarang->nama_barang }}</p>
                                            <p class="mb-2 text-informasi"><span class="fw-bold">Lokasi:</span><span
                                                    class="c-green">
                                                    {{ $dataBarang->detail_lokasi }}</span> </p>
                                            <p class="mb-0 text-informasi"> <span class="fw-bold">Kontak:</span> <a
                                                    href="https://api.whatsapp.com/send/?phone=62{{ substr($dataBarang->user->no_telepon, 1) }}&text&app_absent=0"
                                                    target="_blank"><span class="c-green">: {{
                                                        $dataBarang->user->no_telepon }}</span> </a></p>
                                        </div>
                                        <div class="col-lg-6">

                                            <form action="{{ route('ambil.barang', $dataBarang->id) }}" class="form"
                                                method="POST">
                                                @csrf
                                                <input type="text" name="jumlah"
                                                    value="{{ $dataBarang->donasi->jumlah }}" hidden>


                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form__div">
                                                            <input type="text" name="name" class="form-control"
                                                                placeholder="" value="{{ auth()->user()->name }}"
                                                                disabled>
                                                            <label for="Nama Penerima" class="form__label"></label>
                                                        </div>
                                                    </div>

                                                    <div class="col-6">
                                                        <div class="form__div"> <input type="text" name="provinsi"
                                                                class="form-control" placeholder=" "> <label for=""
                                                                class="form__label">Provinsi</label> </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form__div"> <input type="text" name="kabupaten"
                                                                class="form-control" placeholder=" "> <label for=""
                                                                class="form__label">Kabupaten</label> </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form__div"> <input type="text" name="kecamatan"
                                                                class="form-control" placeholder=" "> <label for=""
                                                                class="form__label">Kecamatan</label> </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form__div"> <input type="number" name="kode_pos"
                                                                class="form-control" placeholder=" "> <label for=""
                                                                class="form__label">Kode Pos</label> </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form__div"> <input type="text" name="nomor_telepon"
                                                                class="form-control" placeholder=" "> <label for=""
                                                                class="form__label">Nomor Telepon</label> </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form__div">
                                                            <textarea name="alamat_tambahan" id="alamat_tambahan"
                                                                class="form-control" placeholder=" ">
                                                            </textarea><label for="" class="form__label">Detail
                                                                Alamat</label>
                                                        </div>
                                                        <div class="form__div">
                                                            <input type="number" name="jumlah_pesanan"
                                                                class="form-control" placeholder=" "> <label for=""
                                                                class="form__label">Jumlah Pesanan</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="submit"
                                                    class="btn btn-sm btn-primary ml-0 btn-peroleh-barang"
                                                    style="width: 145px;">Peroleh</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
    <script src="{{ asset('penerima-barang/js/detail-barang.js') }}"></script>

</body>

</html>

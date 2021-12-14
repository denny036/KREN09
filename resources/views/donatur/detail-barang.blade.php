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

    <link rel="stylesheet" href="{{ asset('css/donatur/detail-barang.css') }}" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.slim.js"></script>

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


            <div class="container">
                <div class="row">
                    @foreach ($donasi as $data)
                    <div class="col-lg-3 col-md-8">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top crop" width="307" height="240"
                                src="{{ asset('img/donasi/' . $data->foto) }}" alt="Donasi Anda">
                            <div class="card-body">
                                <h4 class="card-title">{{ $data->nama_barang }}</h4>
                                <p class="card-text"><strong class="text-muted">
                                        {{ Str::limit($data->deskripsi_barang, 70) }}
                                    </strong></p>
                                <p class="card-text">Jumlah Barang yang tersedia: {{ $data->jumlah }}</p>
                                <p class="card-text">Pemilik: {{ Auth::user()->name }}</p>
                                <p>Hubungi:
                                    <a href="https://api.whatsapp.com/send/?phone=62{{ Auth::user()->no_telepon }}&text&app_absent=0"
                                        target="_blank">{{ Auth::user()->no_telepon }}</a>
                                </p>
                                </p>

                                <a href="{{ route('edit-donasi', $data->id) }}"
                                    class="btn btn-sm btn-donasi font-weight-bold">Ubah</a>
                                <a href="#" data-id="{{ $data->id }}" class="btn btn-sm btn-hapus swal-confirm">
                                    <form action="{{ route('delete-donasi', $data-> id) }}" class="d-inline"
                                        id="delete{{ $data->id }}" method="POST">
                                        @csrf
                                        @method('delete')
                                    </form>
                                    Hapus
                                </a>
                            </div>
                        </div>
                    </div>

                    {{-- <div class="col-lg-4 col-md-8">
                        <div class="card shadow">
                            <img class="card-img justify-content-center w-50"
                                src="{{ asset('img/donasi/' . $data->foto) }}" alt="succulent">
                            <div class="card-body">
                                <h4 class="card-title">{{ $data->nama_barang }}</h4>
                                <p class="card-text">
                                    <strong class="text-muted">
                                        {{ $data->deskripsi_barang }}
                                    </strong>

                                </p>
                                <p class="card-text">
                                    <strong>
                                        Jumlah Barang yang tersedia: {{ $data->jumlah }}
                                    </strong>
                                <p>Pemilik: {{ Auth::user()->name }}</p>
                                <p>Hubungi: <a
                                        href="https://api.whatsapp.com/send/?phone=6281823402388&text&app_absent=0"
                                        target="_blank">{{ Auth::user()->no_telepon }}</a></p>
                                <i class="fas fa-map-marker-alt fontsome"></i> {{ $data->detail_lokasi }}
                                </p>
                                <p class="card-text text-center">
                                    <button type="submit" class="btn btn-sm btn-donasi font-weight-bold"
                                        name="edit_donasi" value="edit_donasi">Ubah</button>
                                    <button type="submit" class="btn btn-sm btn-hapus font-weight-bold"
                                        name="hapus_donasi" value="hapus_donasi">Hapus</button>
                                </p>
                            </div>
                        </div>
                    </div> --}}
                    @endforeach
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
    <script src="{{ asset('js/donatur/detail-barang.js') }}"></script>
    <script src="https://demo.getstisla.com/assets/modules/sweetalert/sweetalert.min.js"></script>

    <script>
        $(".swal-confirm").click(function(e) {
        id = e.target.dataset.id;
        swal({
            title: 'Anda yakin hapus data ini?',
            text: 'Anda tidak dapat mengembalikan data ini jika sudah dihapus.',
            icon: 'warning',
            buttons: true,
            dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    swal('Produk donasi berhasil dihapus!', {
                        icon: 'success',
                    });
                    $(`#delete${id}`).submit();
                } else {
                    swal('Donasi Anda tidak jadi dihapus!');
                }
            });
        });
    </script>
</body>

</html>

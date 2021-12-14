<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Donasi Barang</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/donatur/profil.css') }}" />
</head>

<body>
    <main>
        <div class="big-wrapper light">

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

            <section class="py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 mx-auto">
                            @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                            @endif
                            <div class="card">
                                <div class="card-body">
                                    <a class="dropdown-item btn-keluar float-right" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                    <h4>Profil</h4>

                                    <hr>

                                    <form action="{{ route('update.profil') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group circular--portrait">

                                                    <img src="{{ asset('img/uploads/profile/'. Auth::user()->image) }}"
                                                        alt="Profil Donatur" class="img-responsive">
                                                </div>
                                                <input type="file" name="image" id="image" class="form-control"><br>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="nama">Nama</label>
                                                    <input type="text" name="name" id="name" class="form-control"
                                                        value="{{ Auth::user()->name }}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="sandi">Sandi</label>
                                                    <input type="password" name="password" id="password"
                                                        class="form-control" value="">
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="email">Email</label>
                                                    <input type="email" name="email" id="email" class="form-control"
                                                        value="{{ Auth::user()->email }}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="sandi">Nomor Telepon</label>
                                                    <input type="number" name="no_telepon" id="no_telepon"
                                                        class="form-control" value="{{ Auth::user()->no_telepon }}">
                                                </div>

                                            </div>


                                            <div class="col-md-6">
                                                <a href="{{ route('update.profil') }}"><button type="submit"
                                                        class="btn btn-sm btn-donasi font-weight-bold"
                                                        name="edit_profil" value="edit_profil">Simpan</button></a>
                                            </div>


                                        </div>
                                    </form>
                                    <br>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

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
    <script src="{{ asset('js/donatur/profil.js') }}"></script>
</body>

</html>

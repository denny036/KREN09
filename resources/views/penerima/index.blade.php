<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('penerima-barang/css/home.css') }}" />
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

            <div class="showcase-area">
                <div class="container">
                    <div class="left">
                        <div class="big-title">
                            <h1>Gift yours to others</h1>
                        </div>
                        <p class="text">
                            Help them adalah adalah platform digital yang bertujuan mempermudah masyarakat dalam
                            menghibahkan barang-barang bekas yang masih layak pakai, dimana
                            barang tersebut dapat diberikan kepada masyarakat yang lebih membutuhkan.
                        </p>
                        <div class="cta">
                            <a href="{{ route('barang.donasi') }}" class="btn btn-donasi">Peroleh Barang</a>
                        </div>
                    </div>

                    <div class="right">
                        <img src="{{ asset('img/gambar-donatur.svg') }}" alt="Person Image" class="person" />
                    </div>
                </div>
            </div>

            <div class="bottom-area">
                <div class="container">
                    <button class="toggle-btn">
                        <i class="far fa-moon"></i>
                        <i class="far fa-sun"></i>
                    </button>
                </div>
            </div>
        </div>


    </main>

    <!-- JavaScript Files -->

    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <script src="{{ asset('penerima-barang/js/home.js') }}"></script>
</body>

</html>

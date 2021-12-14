<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign in & Sign up Form</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
</head>

<body>
    <main>
        <div class="box">
            <div class="inner-box">
                <div class="forms-wrap">
                    <form method="POST" action="{{ route('login') }}" class="sign-in-form">
                        @csrf
                        <div class="logo">
                            <img src="{{ asset('img/logo.png') }}" alt="HelpThem" />
                            <h4>HelpThem</h4>
                        </div>

                        <div class="heading">
                            <h2>MASUK</h2>
                            <h6>Belum memiliki akun?</h6>
                            <a href="{{ route('register') }}" class="toggle">Daftar sekarang</a>
                        </div>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                        @error('password')
                        <span class="invalid-feedback text-small" role="alert">
                            <p>{{ $message }}</p>
                        </span>
                        @enderror
                        <div class="actual-form">
                            <div class="input-wrap">

                                <input id="email" type="email" class="input-field @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                                    placeholder="Email">

                            </div>

                            <div class="input-wrap">

                                <input id="password" type="password"
                                    class="input-field @error('password') is-invalid @enderror" name="password" required
                                    autocomplete="current-password" placeholder="Sandi">

                            </div>

                            <input type="submit" value="Masuk" class="sign-btn" />

                            <p class="text">
                                Lupa sandi?
                                <a href="{{ route('lupa-sandi') }}">Reset sandi Anda sekarang.</a>
                            </p>
                        </div>
                    </form>

                    <form action="{{ route('verifikasi-email') }}" autocomplete="off" class="sign-up-form">
                        <div class="logo">
                            <img src="{{ asset('img/logo.png') }}" alt="easyclass" />
                            <h4>HelpThem</h4>
                        </div>

                        <div class="heading">
                            <h2>Buat Akun Help Them</h2>
                            <h6>Sudah memiliki akun?</h6>
                            <a href="#" class="toggle">Masuk</a>
                        </div>

                        <div class="actual-form">
                            <div class="input-wrap">
                                <input type="text" maxlength="20" class="input-field" autocomplete="off" required />
                                <label>Nama</label>
                            </div>

                            <div class="input-wrap">
                                <input type="email" class="input-field" autocomplete="off" required />
                                <label>Email</label>
                            </div>

                            <div class="input-wrap">
                                <input type="password" minlength="8" class="input-field" autocomplete="off" required />
                                <label>Password</label>
                            </div>

                            <div class="input-wrap">
                                <select name="role" id="roles" class="input-field" autocomplete="off" required>
                                    <option value="donatur">Donatur</option>
                                    <option value="pnerima_barang">Penerima Barang</option>
                                </select>
                            </div>

                            <input type="submit" value="Daftar" class="sign-btn" />

                            {{-- <p class="text">
                                By signing up, I agree to the
                                <a href="#">Terms of Services</a> and
                                <a href="#">Privacy Policy</a>
                            </p> --}}
                        </div>
                    </form>
                </div>

                <div class="carousel">
                    <div class="images-wrapper">
                        <img src="{{ asset('img/bg-login.png') }}" class="image img-1 show" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Javascript file -->

    <script src="{{ asset('js/index.js') }}"></script>
</body>

</html>

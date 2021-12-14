<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login &mdash; HelpThem</title>
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



{{-- @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address')
                                }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password')
                                }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{
                                        old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

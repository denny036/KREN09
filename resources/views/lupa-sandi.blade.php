<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lupa Sandi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/lupa-sandi.css') }}" />
</head>

<body>
    <main>
        <div class="card login-form">
            <div class="card-body">
                <h3 class="card-title text-center">Lupa Sandi</h3>

                <div class="card-text">
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Silakan masukkan alamat email Anda.</label>
                            <input type="email" class="form-control form-control-sm" placeholder="Alamat Email">
                        </div>
                        <p class="text-lupa-sandi">Anda sudah memiliki akun?<span class="text-masuk"><a href="{{ route('index') }}"> Masuk</a></span></p>


                        <button type="submit" class="btn btn-primary btn-block">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </main>


</body>

</html>

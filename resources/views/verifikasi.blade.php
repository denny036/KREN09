<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Verifikasi Datamu</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/verifikasi-email.css') }}" />
</head>

<body>
    <main>
        <div class="card login-form">
            <div class="card-body">
                <div class="logo">
                    <img src="{{ asset('img/logo.png') }}" alt="easyclass" />
                </div>
                <h3 class="card-title text-center mb-4">Verifikasi</h3>

                <div class="card-text">
                    <form>
                        <div class="form-group">
                            <label for="kode-verifikasi" class="kode-verifikasi text-center">Silakan masukkan kode verifikasi yang Anda terima.</label>
                            <input type="text" class="form-control form-control-sm" placeholder="Kode Verifikasi">
                        </div>

                        <div class="text-center">
                        <p class="text-lupa-sandi">Tidak menerima kode verifikasi?<span class="text-masuk"><a href="#"> Kirim ulang</a></span></p>


                        <button type="submit" class="btn btn-primary">Selesai</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </main>


</body>

</html>

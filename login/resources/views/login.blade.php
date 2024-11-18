<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        #form {
            background-color: #E4B1F0;
        }
    </style>
</head>
<body style="background: #7E60BF">

    <div class="text-center mt-5 text-light">
        <h2>Login Aplikasi</h2>
        <p>Silahkan masuk menggunakan akun yang sudah ada</p>

        <div class="row justify-content-center">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body text-star rounded" id="form">
                        <form action="{{ route('login.submit') }}" method="post">
                            @csrf
                            <label>Email Address</label>
                            <input type="text" name="email" class="form-control mb-2">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control mb-3">
                            <button class="btn btn-light">Submit Login</button>
                            <a class= "d-block mb-2 text-decoration-none text-color text-secondary small pt-3"href="{{ route('registrasi.tampil') }}">Don't have an account? Sign up</a>
                        </form>
                        @if(session('gagal'))
                        <p class="text-danger">{{ session('gagal') }}</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regist</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        #form {
            background-color: #7E60BF;
        }
    </style>
</head>
<body style="background: #E4B1F0">

    <div class="text-center mt-5">
        <h2>Registrasi Aplikasi</h2>
        <p>Silahkan isi formulir berikut untuk registrasi aplikasi</p>

        <div class="row justify-content-center">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body text-star rounded" id="form">
                        <form action="{{ route('registrasi.submit') }}" method="post" class="">
                            @csrf
                            <label>Nama Lengkap</label>
                            <input type="text" name="name" class="form-control mb-2">
                            <label>Email Address</label>
                            <input type="text" name="email" class="form-control mb-2">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control mb-2">
                            <button class="btn btn-light">Submit Registrasi</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

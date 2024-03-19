<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login & Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <style>
    * {
        margin: 0;
        padding: 0;
        text-decoration: none;
    }

    .container-kiri,
    .container-kanan-login {
        height: 100vh;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;

    }

    .container-kiri img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .container-kanan-login .box-kanan {
        width: 100%;
        max-width: 800px;
        padding: 20px;
        background: white;
        display: flex;
        justify-content: center;
    }

    .box-kanan #email,
    #password,
    #nama-lengkap,
    #no-handphone {
        width: 100%;
        height: 6vh;
        margin-bottom: 10px;
        border-radius: 5px;
        border: none;
        background-color: rgba(217, 217, 217, 0.5);
    }

    .box-kanan #submit {
        width: 30%;
        height: 6vh;
        margin: 3vh;
        border-radius: 5px;
        border: none;
    }

    .box-kanan button {
        width: 20vh;
        height: 5vh;
        margin-top: -1vh;
        border-radius: 10px;

    }

    .box-kanan label b {
        text-align: left;
    }

    /* Media Queries */
    @media only screen and (max-width: 768px) {

        .container-kiri,
        .container-kanan-login {
            height: auto;
            flex-direction: column;
        }

        .container-kiri {
            margin-bottom: 20px;
        }

        .container-kanan-login .box-kanan {
            width: 100%;
        }
    }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-5 text-center bg-warning">
                <div class="container-kiri">
                    <img src="assets/background/background-login-register.jpeg" class="img-thumbnail" alt="...">
                </div>
            </div>
            <div class="col-md-7 d-flex align-center  bg-white">
                <div class="container-kanan-login bg-white">
                    <form action="login-register-page.php" method="post">
                        <div class="row box-kanan">
                            <div class="col-12 bg-white text-center">
                                <h1>Masuk</h1>
                                <p>Masukkan email dan password Anda</p>
                                <label class="text-start" for="email"><b>Email </b></label>
                                <input id="email" type="email" name="email" placeholder="   Masukkan email Anda"
                                    required>
                                <label for="password"><b>Password </b></label>
                                <input id="password" type="password" name="password" placeholder="   Masukkan password"
                                    required>
                                <div class="row">
                                    <div class="col-6 text-start">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Ingat saya
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-6 text-end text-danger"><a href="#">Lupa kata sandi?</a></div>
                                </div>
                                <input id="submit" type="submit" name="create" value="Login">
                                <p>ATAU</p>
                                <div class="row justify-content-center">
                                    <div class="col-4 text-end"> <button class="btn btn-primary" type="button">

                                            <img src="assets/icon/icon-google.png" alt="Google"></button>

                                    </div>
                                    <div class="col-4 text-start"> <button class="btn btn-primary" type="button">
                                            <img src="assets/icon/icon-facebook.png" alt="Facebook"></button>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-4 text-end">
                                        Belum punya akun?
                                    </div>
                                    <div class="col-4 text-start text-danger">
                                        Daftar sekarang
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="row justify-content-center bg-warning">
                                <div class="col-4 text-end">
                                    Belum punya akun?
                                </div>
                                <div class="col-4 text-start text-danger">
                                    Daftar sekarang
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="container-kanan-login bg-white">
                    <form action="login-register-page.php" method="post">
                        <div class="row box-kanan">
                            <div class="col-12 bg-white text-center">
                                <h1>Daftar Akun</h1>
                                <p>Masukkan data dengan benar untuk mendaftar</p>
                                <label class="text-start" for="nama-lengkap"><b>Nama Lengkap </b></label>
                                <input id="nama-lengkap" type="text" name="nama-lengkap"
                                    placeholder="   Masukkan nama lengkap Anda" required><br>
                                <label class="text-start" for="email"><b>Email </b></label>
                                <input id="email" type="email" name="email" placeholder="   Masukkan email Anda"
                                    required><br>
                                <label class="text-start" for="no-handphone"><b>No Handphone </b></label>
                                <input id="no-handphone" type="tel" name="no-handphone" pattern="[0-9]{10,}"
                                    placeholder="   Masukkan no handphone Anda" required><br>
                                <label for="password"><b>Password </b></label>
                                <input id="password" type="password" name="password"
                                    placeholder="   Masukkan password minimal 8 karakter" required>
                                <label for="konfirmasi-password"><b>Konfirmasi Password </b></label>
                                <input id="password" type="password" name="konfirmasi-password"
                                    placeholder="   Konfirmasi password Anda" required><br>
                                <div class="row">
                                    <div class="col-6 text-start">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Ingat saya
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-6 text-end text-danger"><a href="#">Lupa kata sandi?</a></div>
                                </div>
                                <input id="submit" type="submit" name="daftar" value="daftar">
                                <p>ATAU</p>
                                <div class="row justify-content-center">
                                    <div class="col-4 text-end"> <button class="btn btn-primary" type="button">

                                            <img src="assets/icon/icon-google.png" alt="Google"></button>

                                    </div>
                                    <div class="col-4 text-start"> <button class="btn btn-primary" type="button">
                                            <img src="assets/icon/icon-facebook.png" alt="Facebook"></button>
                                    </div>
                                </div>

                            </div>
                        </div>
                       
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
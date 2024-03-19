<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <style>
    * {}

    .col-5-left {
        background-image: url(assets/background/background-login-register.jpeg);
        background-repeat: no-repeat;
        background-size: auto;
    }

    .col-5-left,
    .col-7-right {
        background-color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 89vh;
    }

    .row {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .row .col-sm-3 {
        height: 40vh;
    }

    #email,
    #password,
    #nama-lengkap,
    #no-handphone,
    #btnToDaftar,
    #btnMasuk {
        width: 100%;
        height: 6vh;
        margin-bottom: 10px;
        border-radius: 5px;
        border: none;
        background-color: rgba(217, 217, 217, 0.5);
    }

    #btnMasuk:hover {
        background-color: navy;
    }

    .btnGoogle,
    .btnFacebook {
        width: 20vh;
        background-color: rgba(217, 217, 217, 0.5);
    }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-5 col-12 col-5-left"></div>
            <div class="col-lg-7 col-12 col-7-right">
                <form action="login-register-page.php" method="post">
                    <div class="row">
                        <div class="col-sm-12" id="hideLogin">
                            <div class="text-center">
                                <h1>Masuk</h1>
                                <p>Masukkan email dan password Anda</p>
                            </div>
                            <label for="email"><b>Email </b></label>
                            <input id="email" type="email" name="email" placeholder="   Masukkan email Anda" required>
                            <label for="password"><b>Password </b></label>
                            <input id="password" type="password" name="password" placeholder="   Masukkan password"
                                required>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                        Ingat saya
                                    </div>
                                </div>
                                <div class="col-6 text-end text-danger"><a href="#">Lupa kata sandi?</a></div>
                            </div>
                            <input id="btnMasuk" class="bg-primary text-white" type="submit" name="create"
                                value="Login">
                            <div class="text-center mt-2 mb-2">ATAU</div>
                            <div class="row justify-content-center">
                                <div class="col-4 text-end"> <button class="btn btnGoogle" type="button">
                                        <img src="assets/icon/icon-google.png" alt="Google"></button>
                                </div>
                                <div class="col-4 text-start"> <button class="btn btn-primary btnFacebook"
                                        type="button">
                                        <img src="assets/icon/icon-facebook.png" alt="Facebook"></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row d-none" id="hideDaftar">
                        <div class="col-sm-12">
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
                                <div class="col-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                        Ingat saya
                                    </div>
                                </div>
                                <div class="col-6 text-end text-danger"><a href="#">Lupa kata sandi?</a></div>
                            </div>
                            <input id="btnToMasuk" type="submit" name="create" value="Login">
                            <div class="text-center mt-5 mb-2">ATAU</div>
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
    <div class="row">
        <footer class="bg-dark text-center text-white py-3 w-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-4 text-center">
                        <button id="btnnMasuk" class="btn btn-link text-white" type="button">Masuk</button>
                    </div>
                    <div class="col-4 text-center text-danger">
                        <button id="btnnDaftar" class="btn btn-link text-danger" type="button">Daftar</button>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script>
    var daftar = document.getElementById('hideDaftar')
    var login = document.getElementById('hideLogin')
    var toMasuk = document.getElementById('btnnMasuk')
    var toDaftar = document.getElementById('btnnDaftar')


    // Tambahkan event listener untuk tombol 2
    toDaftar.addEventListener('click', function() {
        // Menampilkan tombol 1
        daftar.classList.remove('d-none');
        // Menyembunyikan tombol 2
        login.classList.add('d-none');
    });

    toMasuk.addEventListener('click', function() {
        // Menampilkan tombol 2
        login.classList.remove('d-none');
        // Menyembunyikan tombol 1
        daftar.classList.add('d-none');
    });
    </script>
</body>

</html>
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
    .col-6-left,
    .col-6-right {
        background-color: red;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 92vh;
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
    #no-handphone {
        width: 100%;
        height: 6vh;
        margin-bottom: 10px;
        border-radius: 5px;
        border: none;
        background-color: rgba(217, 217, 217, 0.5);
    }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-6 col-6-left">
                <form action="login-register-page.php" method="post">

                    <div class="row bg-primary">
                        <div class="col-sm-12 bg-secondary" id="hideLogin">
                            <h1>Masuk</h1>
                            <p>Masukkan email dan password Anda</p>
                            <label for="email"><b>Email </b></label>
                            <input id="email" type="email" name="email" placeholder="Masukkan email Anda" required>

                            <label for="password"><b>Password </b></label>
                            <input id="password" type="password" name="password" placeholder="Masukkan password"
                                required>
                            <div class="row">
                                <div class="col-6 text-start">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">

                                        Ingat saya

                                    </div>
                                </div>
                                <div class="col-6 text-end text-danger"><a href="#">Lupa kata sandi?</a></div>
                            </div>
                            <input id="btnToDaftar" type="submit" name="create" value="Login">
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
            <div class="col-6 col-6-left">
                <form action="login-register-page.php" method="post">
                    <div class="row bg-primary" id="hideDaftar">
                        <div class="col-sm-12 bg-secondary">
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

                            </div>
                            <div class="row">
                                <div class="col-6 text-start">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">

                                        Ingat saya

                                    </div>
                                </div>
                                <div class="col-6 text-end text-danger"><a href="#">Lupa kata sandi?</a></div>
                            </div>
                            <input id="btnToMasuk" type="submit" name="create" value="Login">
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

            </div>
        </div>

    </div>
    <footer class="bg-dark text-center text-white py-3">
        <div class="container">
            <div class="row">
                <div class="row justify-content-center">
                    <div class="col-4 text-end">
                        Sudah punya akun?
                    </div>
                    <div class="col-4 text-start text-danger">
                        Masuk
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script>
    var daftar = document.getElementById('hideDaftar')
    var login = document.getElementById('hideLogin')
    var toMasuk = document.getElementById('btnToMasuk')
    var toDaftar = document.getElementById('btnToDaftar')
    daftar.classList.add('d-none');

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
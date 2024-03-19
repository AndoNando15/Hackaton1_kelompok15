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
        height: 100vh;
    }

    .row {

        display: flex;
        align-items: center;
        justify-content: center;

    }

    .row .col-sm-3 {
        height: 40vh;
    }

    a {
        text-decoration: none;
        color: black;
    }

    #email,
    #password,
    #nama-lengkap,
    #no-handphone,
    #btnDaftar,
    #btnMasuk {
        width: 100%;
        height: 6vh;
        margin-bottom: 10px;
        border-radius: 5px;
        border: none;
        background-color: rgba(217, 217, 217, 0.5);
    }

    #btnToDaftar,
    #btnToMasuk {
        cursor: pointer;
    }

    #btnMasuk:hover {
        background-color: navy;
    }

    .btnGoogle {
        width: 20vh;
        background-color: rgba(217, 217, 217, 0.5);
    }

    .btnFacebook {
        width: 20vh;
    }


    .col-1 {

        width: 100%;
    }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-5 col-5-left"></div>
            <div class="col-7 col-7-right">
                <div class="row d-flex flex-column">
                    <div class="col-11">
                        <form action="login-register-page.php" method="post">

                            <div class="row d-flex flex-column">
                                <div class="col-sm-12 " id="hideLogin">
                                    <div class="text-center">
                                        <h1>Masuk</h1>
                                        <p>Masukkan email dan password Anda</p>
                                    </div>

                                    <label for="email"><b>Email </b></label>
                                    <input id="email" type="email" name="email" placeholder="   Masukkan email Anda"
                                        required>

                                    <label for="password"><b>Password </b></label>
                                    <input id="password" type="password" name="password"
                                        placeholder="   Masukkan password" required>
                                    <div class="row">
                                        <div class="col-6 text-start">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="defaultCheck1">

                                                Ingat saya

                                            </div>
                                        </div>
                                        <div class="col-6 text-end text-danger"><a href="#">Lupa kata sandi?</a></div>
                                    </div>
                                    <input id="btnMasuk" class="bg-primary text-white" type="submit" name="create"
                                        value="Login">



                                </div>
                            </div>

                    </div>
                    <div class="col-1 mt-5">

                        <div class="row d-flex justify-content-center">

                            <div id="btnToMasuk" class="col-2 d-flex">
                                <a href="login.php"> Masuk </a>
                            </div>



                            <div id="btnToDaftar" class="col-2 d-flex    text-danger">
                                <a href="register.php">Daftar</a>
                            </div>


                        </div>
                    </div>
                </div>

            </div>
        </div>



    </div>
    </div>

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
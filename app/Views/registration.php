</head>

<body>

    <section id="registration" class="registration">
        <div class="container mt-5 col-4 pt-3 pb-2 card bg-light">
            <h3 class="text-center mb-3">Buat Akun</h3>
            <form>
                <div class="row">
                    <div class="col">

                    </div>
                    <div class="col">

                    </div>
                </div>
                <div class="form-group">
                    <label for="name">Name Lengkap</label>
                    <input type="email" class="form-control" id="name">
                </div>
                <div class="form-group">
                    <label for="email">Alamat Surel/Email</label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="password1">Kata Sandi</label>
                            <input type="password" class="form-control" id="password1">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="password2">Konfirmasi Kata Sandi</label>
                            <input type="password" class="form-control" id="password2">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <a type="submit" class="btn btn-primary" href="<?= base_url('Home/login'); ?>">Daftar</a>
                </div>
                <hr>
                <div class="form-group text-center">
                    <a href="<?= base_url('masuk'); ?>">Sudah punya akun? klik di sini</a>
                </div>

            </form>
        </div>
    </section>
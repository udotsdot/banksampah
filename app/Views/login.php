</style>
</head>

<body>

    <section id="login" class="login">

        <div class="container mt-5 col-4 pt-3 pb-2 card bg-light">
            <h3 class="text-center mb-3">Masuk</h3>
            <form>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" value="" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="password">Kata Sandi</label>
                    <input type="password" class="form-control" id="password">
                </div>
                <div class="form-group">
                    <a type="submit" class="btn btn-primary" href="<?= base_url('/'); ?>">User</a>
                    <a type="submit" class="btn btn-primary" href="<?= base_url('admin'); ?>">Admin</a>
                </div>
                <hr>
                <div class="form-group text-center">
                    <a href=" <?= base_url('daftar'); ?>">Buat akun? klik di sini</a>
                </div>
            </form>
        </div>
    </section>
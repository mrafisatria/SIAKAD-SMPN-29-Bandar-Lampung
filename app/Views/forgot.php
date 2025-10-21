

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lupa Password</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/informasipublik.css') ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia&effect=neon|outline|emboss|shadow-multiple">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #002147; font-family: sans-serif; margin-left: 12px; margin-right: 12px;">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50px" height="50" fill="currentColor" class="bi bi-laptop" viewBox="0 0 20 16">
                        <path d="M13.5 3a.5.5 0 0 1 .5.5V11H2V3.5a.5.5 0 0 1 .5-.5zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2zM0 12.5h16a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5" />
                    </svg>
                    <b>SI</b><i style="color: #ffb606;">AKAD</i>
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item dropdown me-5">
                            <a class="nav-link active dropdown-toggle" href="<?=base_url("/")?>" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                INFORMASI PUBLIK
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="<?=base_url("/")?>">Sejarah Singkat</a></li>
                                <li><a class="dropdown-item" href="<?=base_url("/")?>">Visi Misi</a></li>
                                <li><a class="dropdown-item" href="<?=base_url("/")?>">Struktur Organisasi</a></li>
                                <li><a class="dropdown-item" href="<?=base_url("/")?>">Hymne</a></li>
                            </ul>
                        </li>
                        <li class="nav-item me-5">
                            <a class="nav-link active" aria-current="page" href="<?=base_url("/")?>">GALERI KEGIATAN</a>
                        </li>
                        <li class="nav-item me-5">
                            <a class="nav-link active" aria-current="page" href="<?=base_url("/")?>">PRESTASI</a>
                        </li>
                        <li class="nav-item me-5">
                            <a class="nav-link active" aria-current="page" href="<?=base_url("/")?>">EKSTRAKULIKULER</a>
                        </li>
                </div>
            </div>
        </nav>
    </div>
    
    <div class="container-fluid">
        <section class="d-flex justify-content-center" style="margin-top: 300px;">
            <main class="d-flex justify-content-center">
                <div class="card w-50 shadow-lg" style="margin-bottom: 100px;">
                    <h2 class="card-header d-flex justify-content-center" style="background-color: white; color: #002147"><b><?=lang('Auth.forgotPassword')?></b></h2>
                    <div class="ms-1 me-1 mt-2"><?= view('Myth\Auth\Views\_message_block') ?></div>
                    <div class="card-body">

                        <p><?=lang('Auth.enterEmailForInstructions')?></p>

                        <form action="<?= url_to('forgot') ?>" method="post">
                            <?= csrf_field() ?>
                            <div class="form-group">
                                <input type="email" class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>"
                                    name="email" aria-describedby="emailHelp" placeholder="<?=lang('Auth.email')?>">
                                <div class="invalid-feedback">
                                    <?= session('errors.email') ?>
                                </div>
                            </div>

                            <br>

                            <center><button type="submit" class="btn btn-success w-75" style="background-color: #002147;">Kirim Email</button></center>
                        </form>

                    </div>
                </div>
            </main>
        </section>
    </div>

</body>
</html>

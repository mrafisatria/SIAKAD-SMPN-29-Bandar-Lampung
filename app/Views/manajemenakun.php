<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Akun</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>
        .nav-link.active.dropdown-toggle:hover{
            color: #ffb606;
        }

        @media only screen and (max-width: 576px) {
            table{
                font-size: 15px;;
            }
        }
    </style>

</head>

<body style="font-family: poppins;">
<div class="sticky-top container-fluid">
        <nav class="navbar navbar-expand-lg navbar-dark sticky-top shadow" style="background-color: #002147;">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center" href="<?=base_url("/")?>">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50px" height="50" fill="currentColor" class="bi bi-laptop" viewBox="0 0 20 16">
                        <path d="M13.5 3a.5.5 0 0 1 .5.5V11H2V3.5a.5.5 0 0 1 .5-.5zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2zM0 12.5h16a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5"/>
                    </svg>
                    <b>SI</b><i style="color: #ffb606;">AKAD</i>
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item me-5">
                            <a class="nav-link active" href="<?=base_url("/")?>" role="button" aria-expanded="false">INFORMASI PUBLIK</a>
                        </li>
                        <li class="nav-item dropdown me-5">
                            <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">DATA AKADEMIK</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="<?=base_url("/datasiswa")?>">Data Siswa</a></li>
                                <li><a class="dropdown-item" href="<?=base_url("/datagurupegawai")?>">Data Guru dan Pegawai</a></li>
                                <li><a class="dropdown-item" href="<?=base_url("/jadwalmapel")?>">Jadwal Mata Pelajaran</a></li>
                                <li><a class="dropdown-item" href="<?=base_url("/riwayatadministrasi")?>">Riwayat Administrasi</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown me-5">
                            <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">PEMBELAJARAN</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="<?=base_url("/nilai")?>">Nilai</a></li>
                                <li><a class="dropdown-item" href="<?=base_url("/kemajuanbelajar")?>">Kemajuan Belajar</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown me-5">
                            <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">EVALUASI</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="<?=base_url("/ranking7")?>">Ranking</a></li>
                                <li><a class="dropdown-item" href="<?=base_url("/eraport")?>">E-Raport</a></li>
                            </ul>
                        </li>
                        <?php if(in_groups('admin') || in_groups('waka')){ ?>
                        <li class="nav-item dropdown me-5">
                            <a class="nav-link active " href="<?= base_url('/manajemenakun')?>" aria-expanded="false"><i class="bi bi-person-fill text-light me-1" style="font-size: 17px; padding: 6px 12px;"></i></a>
                        </li>
                        <?php } ?>
                        <li class="nav-item dropdown me-5">
                            <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-gear-fill text-light me-1" style="font-size: 17px;"></i></a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#sejarah" data-bs-toggle="modal" data-bs-target="#logout">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    
    <div class="container-fluid">
        <div class="bg-light" style="height: 832px;">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h3 class="ms-1 mt-3">Data Akun</h3>
                    <nav class="mt-3" style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active">Manajemen Akun</li>
                        </ol>
                    </nav>
                </div>
                
                <?= view('App\Views\Auth\_message_block') ?>

                <div class="rounded shadow" style="background-color: white">
                    <div class="container pt-3 d-flex justify-content-end flex-wrap">
                        <button class="btn btn-success tambah-siswa-btn me-2" data-bs-toggle="modal" data-bs-target="#tambahAkun" style="font-size: 14px; padding: 6px 12px;">
                            <i class="bi bi-person-plus-fill text-light me-1"></i>Tambah Akun
                        </button>
                        <form action="<?=base_url('/manajemenakun')?>" method="post">
                            <div class="input-group" style="max-width: 250px; font-size: 14px;">
                                <span class="input-group-text" id="addon-wrapping"><i class="bi bi-search text-dark"></i></span>
                                <input type="text" class="form-control" placeholder="Cari Email/Username" aria-label="Search" aria-describedby="addon-wrapping" name="keyword">
                            </div>
                        </form>
                    </div>
                    
                    <hr>
                    <div class="ps-4 pb-4 pe-4">
                        <div class="table-responsive">
                        <h3 class="ms-1 mt-3 mb-3">Sudah Diaktivasi</h3>
                            <table class="table border table-striped rounded" style="font-size: 12px;">
                                <thead>
                                    <tr>
                                        <th scope="col" style="background-color: #334d6c; color: white;">No.</th>
                                        <th scope="col" style="background-color: #334d6c; color: white;">Email</th>
                                        <th scope="col" style="background-color: #334d6c; color: white;">Username</th>
                                        <th scope="col" style="background-color: #334d6c; color: white;">Role</th>
                                        <th scope="col" style="background-color: #334d6c; color: white; width:120px;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1; foreach ($userr as $user){ ?>
                                        <tr class="align-middle">
                                            <th scope="row"><?=$no++?></th>
                                            <td><?=$user['email']?></td>
                                            <td><?=$user['username']?></td>
                                            <td><?=$user['role']?></td>
                                            <td>
                                                <button class="btn btn-warning action-button" data-bs-toggle="modal" data-bs-target="#editUser" data-id="<?= $user['id'] ?>" 
                                                                                                                                                data-email="<?= $user['email'] ?>"
                                                                                                                                                data-username="<?= $user['username'] ?>">
                                                <i class="bi bi-pencil text-dark"></i>
                                                </button>
                                                <button class="btn btn-danger action-button" data-bs-toggle="modal" data-bs-target="#hapusUser" data-id="<?= $user['id'] ?>"><i class="bi bi-trash text-dark"></i></button>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        
                        <div class="table-responsive">
                        <h3 class="ms-1 mt-3 mb-3">Belum Diaktivasi</h3>
                            <table class="table border table-striped rounded" style="font-size: 12px;">
                                <thead>
                                    <tr>
                                        <th scope="col" style="background-color: #334d6c; color: white;">No.</th>
                                        <th scope="col" style="background-color: #334d6c; color: white;">Email</th>
                                        <th scope="col" style="background-color: #334d6c; color: white;">Username</th>
                                        <th scope="col" style="background-color: #334d6c; color: white; width:120px;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1; foreach ($usernorolee as $usernorole){ ?>
                                        <tr class="align-middle">
                                            <th scope="row"><?=$no++?></th>
                                            <td><?=$usernorole['email']?></td>
                                            <td><?=$usernorole['username']?></td>
                                            <td style="width: 15%;">
                                                <button class="btn btn-primary action-button" data-bs-toggle="modal" data-bs-target="#aktivasiUser" data-id-u="<?= $usernorole['id'] ?>" data-role-u="<?= $usernorole['role'] ?>"><i class="bi bi-person-check text-dark"></i></button>
                                                <button class="btn btn-warning action-button" data-bs-toggle="modal" data-bs-target="#editUser" data-id="<?= $usernorole['id'] ?>" 
                                                                                                                                                data-email="<?= $usernorole['email'] ?>"
                                                                                                                                                data-username="<?= $usernorole['username'] ?>">
                                                <i class="bi bi-pencil text-dark"></i>
                                                </button>
                                                <button class="btn btn-danger action-button" data-bs-toggle="modal" data-bs-target="#hapusUser" data-id="<?= $usernorole['id'] ?>"><i class="bi bi-trash text-dark"></i></button>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal tambah user -->
    <div class="modal fade" id="tambahAkun" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Akun</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('/manajemenakun/store')?>" method="post">
                        <?= csrf_field() ?>
                        <div class="col-md-12">
                            <label class="form-label">Email</label>
                            <input required type="email" class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" name="email" value="<?= old('email') ?>">
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Username</label>
                            <input required type="text" class="form-control <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" value="<?= old('username') ?>">
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Password</label>
                            <input required type="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" name="password" value="<?= old('password') ?>">
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Confirm Password</label>
                            <input required type="password" class="form-control <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" name="pass_confirm" value="<?= old('pass_confirm') ?>">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                    <button type="submit" class="btn btn-success" name="tambah">Tambah</button>
                </div>
                    </form>
            </div>
        </div>
    </div>

    <!-- Modal edit user -->
    <div class="modal fade" id="editUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form class="modal-content" id="edit-form" method="post">
            <?= csrf_field() ?>
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Akun</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body row g-3">

                <!-- Hidden ID -->
                <input type="hidden" name="id" id="input-id">

                <div class="col-md-12">
                    <label class="form-label">Email</label>
                    <input required type="email" class="form-control" id="input-email" name="email">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Username</label>
                    <input required type="text" class="form-control" id="input-username" name="username">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Password</label>
                    <input required type="password" class="form-control" id="input-password" name="password">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                <button type="submit" class="btn btn-warning">Edit</button>
            </div>
            </form>
        </div>
    </div>

    <!-- Script edit user -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
        const editModal = document.getElementById('editUser');

            editModal.addEventListener('show.bs.modal', function (event) {
                const button = event.relatedTarget;
                const id = button.getAttribute('data-id');

                document.getElementById('input-id').value = id;
                document.getElementById('input-email').value = button.getAttribute('data-email');
                document.getElementById('input-username').value = button.getAttribute('data-username');

                // Set form action dynamically
                const form = document.getElementById('edit-form');
                form.action = `/manajemenakun/update/${id}`;
            });
        });
    </script>

    <!-- Modal hapus user -->
    <div class="modal fade" id="hapusUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Akun</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Apakah anda yakin ingin menghapus akun ini?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                <a href="#" class="btn btn-danger" id="btn-confirm-hapus">Hapus</a>
            </div>
            </div>
        </div>
    </div>

    <!-- Script hapus user -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const hapusModal = document.getElementById('hapusUser');
            const btnConfirm = document.getElementById('btn-confirm-hapus');

            hapusModal.addEventListener('show.bs.modal', function (event) {
                const button = event.relatedTarget;
                const id = button.getAttribute('data-id');
                btnConfirm.href = "<?= base_url('/manajemenakun/delete/') ?>" + id;
            });
        });
    </script>


    <!-- Modal aktivasi user -->
    <div class="modal fade" id="aktivasiUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form class="modal-content" id="edit-form-u" method="post">
            <?= csrf_field() ?>
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Aktivasi Akun</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body row g-3">

                <!-- Hidden ID -->
                <input type="hidden" name="id" id="input-id-u">

                <div class="col-md-12">
                    <label for="inputState" class="form-label">Role</label>
                    <select required id="input-role-u" class="form-select" name="role">
                        <option selected></option>
                        <option value="5">Admin</option>
                        <option value="2">Guru</option>
                        <option value="3">Siswa</option>
                        <option value="6">Wakil Kepala</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                <button type="submit" class="btn btn-primary">Aktivasi</button>
            </div>
            </form>
        </div>
    </div>

    <!-- Script aktivasi user -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
        const editModal = document.getElementById('aktivasiUser');

            editModal.addEventListener('show.bs.modal', function (event) {
                const button = event.relatedTarget;
                const id = button.getAttribute('data-id-u');

                document.getElementById('input-id-u').value = id;
                document.getElementById('input-role-u').value = button.getAttribute('data-role-u');

                // Set form action dynamically
                const form = document.getElementById('edit-form-u');
                form.action = `/manajemenakun/aktivasi/${id}`;
            });
        });
    </script>

    <!-- Modal Logout -->
    <div class="modal fade" id="logout" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Logout SIAKAD</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Apakah anda yakin ingin Logout dari SIAKAD?
            </div>
            <div class="modal-footer">
            <?php if(logged_in()){ ?>
                <form action="<?= url_to('logout') ?>">
                    <?= csrf_field() ?>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                    <button class="btn btn-danger" type="submit">Logout</button>
                </form>
            <?php } ?>
            </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

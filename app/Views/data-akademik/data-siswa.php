<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
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
                    <h3 class="ms-1 mt-3">Data Siswa</h3>
                    <nav class="mt-3" style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active">Data Akademik</li>
                            <li class="breadcrumb-item active" aria-current="page"><b>Data Siswa</b></li>
                        </ol>
                    </nav>
                </div>
                <?php if(session()->getFlashdata('error')): ?>
                  <div class="alert alert-danger">
                    <?= session()->getFlashdata('error') ?>
                  </div>
                <?php endif; ?>
                
                <div class="rounded shadow" style="background-color: white">
                    <div class="container pt-3 d-flex justify-content-end flex-wrap">
                        <?php if(in_groups('admin') || in_groups('waka')){ ?>
                            <button class="btn btn-success tambah-siswa-btn me-2" data-bs-toggle="modal" data-bs-target="#tambahSiswa" style="font-size: 14px; padding: 6px 12px;">
                                <i class="bi bi-person-plus-fill text-light me-1"></i>Tambah Siswa
                            </button>
                        <?php } ?>

                        <form action="<?=base_url('/datasiswa')?>" method="post">
                            <div class="input-group" style="max-width: 250px; font-size: 14px;">
                                <span class="input-group-text" id="addon-wrapping"><i class="bi bi-search text-dark"></i></span>
                                <input type="text" class="form-control" placeholder="Cari Nama/NISN" aria-label="Search" aria-describedby="addon-wrapping" name="keyword">
                            </div>
                        </form>
                    </div>
                    
                    <hr>
                    <div class="ps-4 pb-4 pe-4">
                        <div class="table-responsive">
                            <table class="table border table-striped rounded" style="font-size: 12px;">
                                <thead>
                                    <tr>
                                        <th scope="col" style="background-color: #334d6c; color: white;">No.</th>
                                        <th scope="col" style="background-color: #334d6c; color: white;">Nama</th>
                                        <th scope="col" style="background-color: #334d6c; color: white;">NISN</th>
                                        <th scope="col" style="background-color: #334d6c; color: white;">Kelas</th>
                                        <th scope="col" style="background-color: #334d6c; color: white;">Semester</th>
                                        <th scope="col" style="background-color: #334d6c; color: white;">Jenis Kelamin</th>
                                        <th scope="col" style="background-color: #334d6c; color: white;">Alamat</th>
                                        <th scope="col" style="background-color: #334d6c; color: white;">Nama Wali</th>
                                        <th scope="col" style="background-color: #334d6c; color: white;">Nomor Wali</th>

                                        <?php if(in_groups('admin') || in_groups('waka')){ ?>
                                            <th scope="col" style="background-color: #334d6c; color: white; width:120px;">Aksi</th>
                                        <?php }?>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1; foreach ($siswaa as $siswa){ ?>
                                        <tr class="align-middle">
                                            <th scope="row"><?=$no++?></th>
                                            <td><?=$siswa['nama']?></td>
                                            <td><?=$siswa['nisn']?></td>
                                            <td><?=$siswa['kelas']?></td>
                                            <td><?=$siswa['semester']?></td>
                                            <td><?=$siswa['jeniskelamin']?></td>
                                            <td><?=$siswa['alamat']?></td>
                                            <td><?=$siswa['wali']?></td>
                                            <td><?=$siswa['nowali']?></td>

                                            <?php if(in_groups('admin') || in_groups('waka')){ ?>
                                                <td>
                                                    <button class="btn btn-warning action-button" data-bs-toggle="modal" data-bs-target="#editSiswa" data-id="<?= $siswa['id'] ?>" 
                                                                                                                                                    data-nama="<?= $siswa['nama'] ?>"
                                                                                                                                                    data-nisn="<?= $siswa['nisn'] ?>"
                                                                                                                                                    data-kelas="<?= $siswa['kelas'] ?>"
                                                                                                                                                    data-semester="<?= $siswa['semester'] ?>"
                                                                                                                                                    data-jeniskelamin="<?= $siswa['jeniskelamin'] ?>"
                                                                                                                                                    data-alamat="<?= $siswa['alamat'] ?>"
                                                                                                                                                    data-wali="<?= $siswa['wali'] ?>"
                                                                                                                                                    data-nowali="<?= $siswa['nowali'] ?>">
                                                    <i class="bi bi-pencil text-dark"></i>
                                                    </button>
                                                    <button class="btn btn-danger action-button" data-bs-toggle="modal" data-bs-target="#hapusSiswa" data-id="<?= $siswa['id'] ?>"><i class="bi bi-trash text-dark"></i></button>
                                                </td>
                                            <?php }?>
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

    <!-- Modal tambah siswa -->
    <div class="modal fade" id="tambahSiswa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Siswa</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="row g-3" method="post" action="<?=base_url('/datasiswa/store')?>">
                <?= csrf_field() ?>
                    <div class="col-md-12">
                        <label for="inputPassword4" class="form-label">Nama</label>
                        <input required type="text" class="form-control" id="inputPassword4" name="nama">
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">NISN</label>
                        <input required type="number" min="1" class="form-control" id="inputEmail4" name="nisn">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Kelas</label>
                        <input required type="text" class="form-control" id="inputPassword4" name="kelas" placeholder="Cth: 8.1">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Semester</label>
                        <input required type="number" min="1" max="2" class="form-control" id="inputPassword4" name="semester">
                    </div>
                    <div class="col-md-6">
                        <label for="inputState" class="form-label">Jenis Kelamin</label>
                        <select required id="inputState" class="form-select" name="jeniskelamin">
                            <option selected></option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="col-md-12">
                        <label for="inputPassword4" class="form-label">Alamat</label>
                        <input required type="text" class="form-control" id="inputPassword4" name="alamat">
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Nama Wali</label>
                        <input required type="text" class="form-control" id="inputEmail4" name="wali">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Nomor Wali</label>
                        <input required type="number" min="1" class="form-control" id="inputPassword4" name="nowali">
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

    <!-- Modal edit siswa -->
    <div class="modal fade" id="editSiswa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form class="modal-content" id="edit-form" method="post">
            <?= csrf_field() ?>
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Siswa</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body row g-3">

                <!-- Hidden ID -->
                <input type="hidden" name="id" id="input-id">

                <div class="col-md-12">
                    <label class="form-label">Nama</label>
                    <input required type="text" class="form-control" id="input-nama" name="nama">
                </div>
                <div class="col-md-6">
                    <label class="form-label">NISN</label>
                    <input required type="number" min="1" class="form-control" id="input-nisn" name="nisn">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Kelas</label>
                    <input required type="text" class="form-control" id="input-kelas" name="kelas" placeholder="Cth: 8.1">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Semester</label>
                    <input required type="number" min="1" max="2" class="form-control" id="input-semester" name="semester">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Jenis Kelamin</label>
                    <select required class="form-select" id="input-jeniskelamin" name="jeniskelamin">
                        <option selected disabled>Pilih</option>
                        <option value="Laki-Laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="col-md-12">
                    <label class="form-label">Alamat</label>
                    <input required type="text" class="form-control" id="input-alamat" name="alamat">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Nama Wali</label>
                    <input required type="text" class="form-control" id="input-wali" name="wali">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Nomor Wali</label>
                    <input required type="number" min="1" class="form-control" id="input-nowali" name="nowali">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                <button type="submit" class="btn btn-warning">Edit</button>
            </div>
            </form>
        </div>
    </div>

    <!-- Script edit siswa -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
        const editModal = document.getElementById('editSiswa');

            editModal.addEventListener('show.bs.modal', function (event) {
                const button = event.relatedTarget;
                const id = button.getAttribute('data-id');

                document.getElementById('input-id').value = id;
                document.getElementById('input-nama').value = button.getAttribute('data-nama');
                document.getElementById('input-nisn').value = button.getAttribute('data-nisn');
                document.getElementById('input-kelas').value = button.getAttribute('data-kelas');
                document.getElementById('input-semester').value = button.getAttribute('data-semester');
                document.getElementById('input-jeniskelamin').value = button.getAttribute('data-jeniskelamin');
                document.getElementById('input-alamat').value = button.getAttribute('data-alamat');
                document.getElementById('input-wali').value = button.getAttribute('data-wali');
                document.getElementById('input-nowali').value = button.getAttribute('data-nowali');

                // Set form action dynamically
                const form = document.getElementById('edit-form');
                form.action = `/datasiswa/update/${id}`;
            });
        });
    </script>

    <!-- Modal hapus siswa -->
    <div class="modal fade" id="hapusSiswa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Siswa</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Apakah anda yakin ingin menghapus siswa ini?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                <a href="#" class="btn btn-danger" id="btn-confirm-hapus">Hapus</a>
            </div>
            </div>
        </div>
    </div>

    <!-- Script hapus siswa -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const hapusModal = document.getElementById('hapusSiswa');
            const btnConfirm = document.getElementById('btn-confirm-hapus');

            hapusModal.addEventListener('show.bs.modal', function (event) {
                const button = event.relatedTarget;
                const id = button.getAttribute('data-id');
                btnConfirm.href = "<?= base_url('/datasiswa/delete/') ?>" + id;
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

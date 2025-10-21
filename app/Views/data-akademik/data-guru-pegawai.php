<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Guru dan Pegawai</title>
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
                    <h3 class="ms-1 mt-3">Data Guru dan Pegawai</h3>
                    <nav class="mt-3" style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active">Data Akademik</li>
                        <li class="breadcrumb-item active" aria-current="page"><b>Data Guru dan Pegawai</b></li>
                    </ol>
                    </nav>
                </div>
                <?php if(session()->getFlashdata('error')): ?>
                  <div class="alert alert-danger">
                    <?= session()->getFlashdata('error') ?>
                  </div>
                <?php endif; ?>
                
                <div class="rounded shadow" style="background-color: white">
                    <?php if(in_groups('admin') || in_groups('waka')){ ?>
                        <div class="d-flex justify-content-end">
                            <button class="btn btn-success tambah-siswa-btn me-3 mt-3" data-bs-toggle="modal" data-bs-target="#tambahGuru">
                                <i class="bi bi-person-plus-fill text-light me-1"></i>Tambah Guru
                            </button>
                            <button class="btn btn-success tambah-siswa-btn me-4 mt-3" data-bs-toggle="modal" data-bs-target="#tambahPegawai">
                                <i class="bi bi-person-plus-fill text-light me-1"></i>Tambah Pegawai
                            </button>
                        </div>
                    <?php }?>

                    <hr>
                    <div class="ps-4 pb-4 pe-4">
                        <h3 class="ms-1 mt-3 mb-3">Data Guru</h3>
                        <div class="table-responsive">
                            <table class="table border table-striped rounded" style="font-size: 12px;">
                                <thead>
                                    <tr>
                                        <th scope="col" style="background-color: #334d6c; color: white;">No.</th>
                                        <th scope="col" style="background-color: #334d6c; color: white;">NIP</th>
                                        <th scope="col" style="background-color: #334d6c; color: white;">NUPTK</th>
                                        <th scope="col" style="background-color: #334d6c; color: white;">Nama</th>
                                        <th scope="col" style="background-color: #334d6c; color: white;">Jenis Kelamin</th>
                                        <th scope="col" style="background-color: #334d6c; color: white;">Alamat</th>
                                        <th scope="col" style="background-color: #334d6c; color: white;">Telepon</th>
                                        <th scope="col" style="background-color: #334d6c; color: white;">Email</th>

                                        <?php if(in_groups('admin') || in_groups('waka')){ ?>
                                            <th scope="col" style="background-color: #334d6c; color: white; width:120px;">Aksi</th>
                                        <?php }?>

                                        </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1; foreach ($guruu as $guru){ ?>
                                        <tr class="align-middle">
                                            <th scope="row"><?=$no++?></th>
                                            <td><?=$guru['nip']?></td>
                                            <td><?=$guru['nuptk']?></td>
                                            <td><?=$guru['nama']?></td>
                                            <td><?=$guru['jenis_kelamin']?></td>
                                            <td><?=$guru['alamat']?></td>
                                            <td><?=$guru['telepon']?></td>
                                            <td><?=$guru['email']?></td>

                                            <?php if(in_groups('admin') || in_groups('waka')){ ?>
                                                <td>
                                                    <button class="btn btn-warning action-button" data-bs-toggle="modal" data-bs-target="#editGuru" data-id="<?= $guru['id'] ?>" 
                                                                                                                                                    data-nip="<?= $guru['nip'] ?>"
                                                                                                                                                    data-nuptk="<?= $guru['nuptk'] ?>"
                                                                                                                                                    data-nama="<?= $guru['nama'] ?>"
                                                                                                                                                    data-jenis_kelamin="<?= $guru['jenis_kelamin'] ?>"
                                                                                                                                                    data-alamat="<?= $guru['alamat'] ?>"
                                                                                                                                                    data-telepon="<?= $guru['telepon'] ?>"
                                                                                                                                                    data-email="<?= $guru['email'] ?>">
                                                    <i class="bi bi-pencil text-dark"></i>
                                                    </button>
                                                    <button class="btn btn-danger action-button" data-bs-toggle="modal" data-bs-target="#hapusGuru" data-id="<?= $guru['id'] ?>"><i class="bi bi-trash text-dark"></i></button>
                                                </td>
                                            <?php } ?>
                                        </tr>
                                    <?php } ?> 
                                </tbody>
                            </table>
                        </div>

                        <div class="table-responsive mt-4">
                            <h3 class="ms-1 mt-3 mb-3">Data Pegawai</h3>
                            <table class="table border table-striped rounded" style="font-size: 12px;">
                                <thead>
                                    <tr>
                                        <th scope="col" style="background-color: #334d6c; color: white;">No.</th>
                                        <th scope="col" style="background-color: #334d6c; color: white;">NIP</th>
                                        <th scope="col" style="background-color: #334d6c; color: white;">Nama</th>
                                        <th scope="col" style="background-color: #334d6c; color: white;">Jabatan</th>
                                        <th scope="col" style="background-color: #334d6c; color: white;">Jenis Kelamin</th>
                                        <th scope="col" style="background-color: #334d6c; color: white;">Status Kepegawaian</th>
                                        <th scope="col" style="background-color: #334d6c; color: white;">Alamat</th>
                                        <th scope="col" style="background-color: #334d6c; color: white;">Telepon</th>
                                        <th scope="col" style="background-color: #334d6c; color: white;">Email</th>

                                        <?php if(in_groups('admin') || in_groups('waka')){ ?>
                                            <th scope="col" style="background-color: #334d6c; color: white; width:120px;">Aksi</th>
                                        <?php } ?>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1; foreach ($pegawaii as $pegawai){ ?>
                                        <tr class="align-middle">
                                            <th scope="row"><?=$no++?></th>
                                            <td><?=$pegawai['nip']?></td>
                                            <td><?=$pegawai['nama']?></td>
                                            <td><?=$pegawai['jabatan']?></td>
                                            <td><?=$pegawai['jenis_kelamin']?></td>
                                            <td><?=$pegawai['status_kepegawaian']?></td>
                                            <td><?=$pegawai['alamat']?></td>
                                            <td><?=$pegawai['no_telepon']?></td>
                                            <td><?=$pegawai['email']?></td>

                                            <?php if(in_groups('admin') || in_groups('waka')){ ?>
                                            <td>
                                                <button class="btn btn-warning action-button" data-bs-toggle="modal" data-bs-target="#editPegawai" data-id-p="<?= $pegawai['id'] ?>" 
                                                                                                                                                data-nip-p="<?= $pegawai['nip'] ?>"
                                                                                                                                                data-nama-p="<?= $pegawai['nama'] ?>"
                                                                                                                                                data-jabatan-p="<?= $pegawai['jabatan'] ?>"
                                                                                                                                                data-jenis_kelamin-p="<?= $pegawai['jenis_kelamin'] ?>"
                                                                                                                                                data-status_kepegawaian-p="<?= $pegawai['status_kepegawaian'] ?>"
                                                                                                                                                data-alamat-p="<?= $pegawai['alamat'] ?>"
                                                                                                                                                data-no_telepon-p="<?= $pegawai['no_telepon'] ?>"
                                                                                                                                                data-email-p="<?= $pegawai['email'] ?>">
                                                <i class="bi bi-pencil text-dark"></i>
                                                </button>
                                                <button class="btn btn-danger action-button" data-bs-toggle="modal" data-bs-target="#hapusPegawai" data-id-p="<?= $pegawai['id'] ?>"><i class="bi bi-trash text-dark"></i></button>
                                            </td>
                                            <?php } ?>
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

    <!-- Modal Tambah Guru -->
    <div class="modal fade" id="tambahGuru" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Guru</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="row g-3" method="post" action="<?=base_url('/datagurupegawai/guru/store')?>">
                    <?= csrf_field() ?>
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">NIP</label>
                            <input required type="number" min="1" class="form-control" id="inputEmail4" name="nip">
                        </div>
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">NUPTK</label>
                            <input required type="number" min="1" class="form-control" id="inputEmail4" name="nuptk">
                        </div>
                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">Nama</label>
                            <input required type="text" class="form-control" id="inputPassword4" name="nama">
                        </div>
                        <div class="col-md-6">
                            <label for="inputState" class="form-label">Jenis Kelamin</label>
                            <select required id="inputState" class="form-select" name="jenis_kelamin">
                                <option selected></option>
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label for="inputAddress" class="form-label">Alamat</label>
                            <input required type="text" class="form-control" id="inputAddress" name="alamat">
                        </div>
                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">Telepon</label>
                            <input required type="number" min="1" class="form-control" id="inputPassword4" name="telepon">
                        </div>
                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">Email</label>
                            <input required type="email" class="form-control" id="inputPassword4" name="email">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                    <button type="submit" class="btn btn-success">Tambah</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Edit Guru -->
    <div class="modal fade" id="editGuru" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form class="modal-content" id="edit-form" method="post">
            <?= csrf_field() ?>
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Guru</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body row g-3">
                        <input type="hidden" name="id" id="input-id">
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">NIP</label>
                            <input required type="number" min="1" class="form-control" id="input-nip" name="nip">
                        </div>
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">NUPTK</label>
                            <input required type="number" min="1" class="form-control" id="input-nuptk" name="nuptk">
                        </div>
                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">Nama</label>
                            <input required type="text" class="form-control" id="input-nama" name="nama">
                        </div>
                        <div class="col-md-6">
                            <label for="inputState" class="form-label">Jenis Kelamin</label>
                            <select required id="input-jenis_kelamin" class="form-select" name="jenis_kelamin">
                                <option selected></option>
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label for="inputAddress" class="form-label">Alamat</label>
                            <input required type="text" class="form-control" id="input-alamat" name="alamat">
                        </div>
                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">Telepon</label>
                            <input required type="number" min="1" class="form-control" id="input-telepon" name="telepon">
                        </div>
                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">Email</label>
                            <input required type="email" class="form-control" id="input-email" name="email">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                    <button type="submit" class="btn btn-warning">Edit</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Script edit guru -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
        const editModal = document.getElementById('editGuru');

            editModal.addEventListener('show.bs.modal', function (event) {
                const button = event.relatedTarget;
                const id = button.getAttribute('data-id');

                document.getElementById('input-id').value = id;
                document.getElementById('input-nip').value = button.getAttribute('data-nip');
                document.getElementById('input-nuptk').value = button.getAttribute('data-nuptk');
                document.getElementById('input-nama').value = button.getAttribute('data-nama');
                document.getElementById('input-jenis_kelamin').value = button.getAttribute('data-jenis_kelamin');
                document.getElementById('input-alamat').value = button.getAttribute('data-alamat');
                document.getElementById('input-telepon').value = button.getAttribute('data-telepon');
                document.getElementById('input-email').value = button.getAttribute('data-email');

                // Set form action dynamically
                const form = document.getElementById('edit-form');
                form.action = `/datagurupegawai/guru/update/${id}`;
            });
        });
    </script>

    <!-- Modal Hapus Guru -->
    <div class="modal fade" id="hapusGuru" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Guru</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Apakah anda yakin ingin menghapus Guru ini?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                <a href="#" class="btn btn-danger" id="btn-confirm-hapus">Hapus</a>
            </div>
            </div>
        </div>
    </div>

    <!-- Script hapus guru -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const hapusModal = document.getElementById('hapusGuru');
            const btnConfirm = document.getElementById('btn-confirm-hapus');

            hapusModal.addEventListener('show.bs.modal', function (event) {
                const button = event.relatedTarget;
                const id = button.getAttribute('data-id');
                btnConfirm.href = "<?= base_url('/datagurupegawai/guru/delete/') ?>" + id;
            });
        });
    </script>    



    <!-- Modal tambah pegawai -->
    <div class="modal fade" id="tambahPegawai" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Pegawai</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="row g-3" method="post" action="<?=base_url('/datagurupegawai/pegawai/store')?>">
                <?= csrf_field() ?>
                    <div class="col-md-12">
                        <label for="inputPassword4" class="form-label">Nama</label>
                        <input required type="text" class="form-control" id="inputPassword4" name="nama">
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">NIP</label>
                        <input required type="number" min="1" class="form-control" id="inputEmail4" name="nip">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Jabatan</label>
                        <input required type="text" class="form-control" id="inputPassword4" name="jabatan">
                    </div>
                    <div class="col-md-6">
                        <label for="inputState" class="form-label">Jenis Kelamin</label>
                        <select required id="inputState" class="form-select" name="jenis_kelamin">
                            <option selected></option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="inputState" class="form-label">Status Kepegawaian</label>
                        <select required id="inputState" class="form-select" name="status_kepegawaian">
                            <option selected></option>
                            <option value="Honorer">Honorer</option>
                            <option value="Kontrak">Kontrak</option>
                            <option value="PNS">PNS</option>
                        </select>
                    </div>
                    <div class="col-md-12">
                        <label for="inputPassword4" class="form-label">Alamat</label>
                        <input required type="text" class="form-control" id="inputPassword4" name="alamat">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Telepon</label>
                        <input required type="number" min="1" class="form-control" id="inputPassword4" name="telepon">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Email</label>
                        <input required type="email" class="form-control" id="inputPassword4" name="email">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                <button type="submit" class="btn btn-success">Tambah</button>
            </div>
            </form>
            </div>
        </div>
    </div>

    <!-- Modal edit pegawai -->
    <div class="modal fade" id="editPegawai" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form class="modal-content" id="edit-form-pegawai" method="post">
            <?= csrf_field() ?>
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Pegawai</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body row g-3">
                        <input type="hidden" name="id" id="input-id-p">
                        <div class="col-md-12">
                            <label for="inputEmail4" class="form-label">Nama</label>
                            <input required type="text" class="form-control" id="input-nama-p" name="nama">
                        </div>
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">NIP</label>
                            <input required type="number" min="1" class="form-control" id="input-nip-p" name="nip">
                        </div>
                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">Jabatan</label>
                            <input required type="text" class="form-control" id="input-jabatan-p" name="jabatan">
                        </div>
                        <div class="col-md-6">
                            <label for="inputState" class="form-label">Jenis Kelamin</label>
                            <select required id="input-jenis_kelamin-p" class="form-select" name="jenis_kelamin">
                                <option selected></option>
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="inputState" class="form-label">Status Kepegawaian</label>
                            <select required id="input-status_kepegawaian-p" class="form-select" name="status_kepegawaian">
                                <option selected></option>
                                <option value="Honorer">Honorer</option>
                                <option value="Kontrak">Kontrak</option>
                                <option value="PNS">PNS</option>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <label for="inputPassword4" class="form-label">Alamat</label>
                            <input required type="text" class="form-control" id="input-alamat-p" name="alamat">
                        </div>
                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">Telepon</label>
                            <input required type="number" min="1" class="form-control" id="input-telepon-p" name="telepon">
                        </div>
                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">Email</label>
                            <input required type="email" class="form-control" id="input-email-p" name="email">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                    <button type="submit" class="btn btn-warning">Edit</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Script edit pegawai -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
        const editModal = document.getElementById('editPegawai');

            editModal.addEventListener('show.bs.modal', function (event) {
                const button = event.relatedTarget;
                const id = button.getAttribute('data-id-p');

                document.getElementById('input-id-p').value = id;
                document.getElementById('input-nama-p').value = button.getAttribute('data-nama-p');
                document.getElementById('input-nip-p').value = button.getAttribute('data-nip-p');
                document.getElementById('input-jabatan-p').value = button.getAttribute('data-jabatan-p');
                document.getElementById('input-jenis_kelamin-p').value = button.getAttribute('data-jenis_kelamin-p');
                document.getElementById('input-status_kepegawaian-p').value = button.getAttribute('data-status_kepegawaian-p');
                document.getElementById('input-alamat-p').value = button.getAttribute('data-alamat-p');
                document.getElementById('input-telepon-p').value = button.getAttribute('data-no_telepon-p');
                document.getElementById('input-email-p').value = button.getAttribute('data-email-p');

                // Set form action dynamically
                const form = document.getElementById('edit-form-pegawai');
                form.action = `/datagurupegawai/pegawai/update/${id}`;
            });
        });
    </script>

    <!-- Modal Hapus Pegawai -->
    <div class="modal fade" id="hapusPegawai" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Pegawai</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Apakah anda yakin ingin menghapus Pegawai ini?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                <a href="#" class="btn btn-danger" id="btn-confirm-hapus-p">Hapus</a>
            </div>
            </div>
        </div>
    </div>

    <!-- Script hapus pegawai -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const hapusModal = document.getElementById('hapusPegawai');
            const btnConfirm = document.getElementById('btn-confirm-hapus-p');

            hapusModal.addEventListener('show.bs.modal', function (event) {
                const button = event.relatedTarget;
                const id = button.getAttribute('data-id-p');
                btnConfirm.href = "<?= base_url('/datagurupegawai/pegawai/delete/') ?>" + id;
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

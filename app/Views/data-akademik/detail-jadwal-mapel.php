<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Jadwal Mata Pelajaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.1"></script>
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
                    <h3 class="ms-1 mt-3">Detai Jadwal Mata Pelajaran</h3>
                    <nav class="mt-3" style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active">Data Akademik</li>
                            <li class="breadcrumb-item active" aria-current="page">Jadwal Mata Pelajaran</li>
                            <li class="breadcrumb-item active" aria-current="page"><b>Detail Jadwal Mata Pelajaran</b></li>
                        </ol>
                    </nav>
                </div>
                
                <div class="rounded shadow" style="background-color: white">
                    <div class="d-flex justify-content-end"></div>
                    <hr>
                    <div class="ps-4 pb-4 pe-4">
                        <div class="table-responsive d-flex">
                            <table class="table table-bordered table-striped rounded">
                                <tbody>
                                    <?php $no=1; foreach ($jadwall as $jadwal){ ?>
                                    <tr class="text-center align-middle"> 
                                        <td style="background-color: #334d6c; color: white; width:200px; height: 100px;"><?=$jadwal['hari']?></td>
                                        <td><?=$jadwal['mapel1']?></td>
                                        <td><?=$jadwal['mapel2']?></td>
                                        <td><?=$jadwal['mapel3']?></td>
                                        <td><?=$jadwal['mapel4']?></td>
                                        <td><?=$jadwal['mapel5']?></td>
                                        <td><?=$jadwal['mapel6']?></td>

                                        <?php if(in_groups('admin') || in_groups('waka')){ ?>
                                            <td>
                                                <button class="btn btn-warning action-button" data-bs-toggle="modal" data-bs-target="#editJadwal" data-id="<?= $jadwal['id'] ?>" 
                                                                                                                                                data-kelas="<?= $jadwal['kelas'] ?>"
                                                                                                                                                data-hari="<?= $jadwal['hari'] ?>"
                                                                                                                                                data-mapel1="<?= $jadwal['mapel1'] ?>"
                                                                                                                                                data-mapel2="<?= $jadwal['mapel2'] ?>"
                                                                                                                                                data-mapel3="<?= $jadwal['mapel3'] ?>"
                                                                                                                                                data-mapel4="<?= $jadwal['mapel4'] ?>"
                                                                                                                                                data-mapel5="<?= $jadwal['mapel5'] ?>"
                                                                                                                                                data-mapel6="<?= $jadwal['mapel6'] ?>">
                                                <i class="bi bi-pencil text-dark"></i>
                                                </button>
                                                <button class="btn btn-danger action-button" data-bs-toggle="modal" data-bs-target="#hapusJadwal" data-id="<?= $jadwal['id'] ?>"><i class="bi bi-trash text-dark"></i></button>
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
    <!-- Modal edit jadwal -->
    <div class="modal fade" id="editJadwal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form class="modal-content" id="edit-form" method="post">
            <?= csrf_field() ?>
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Jadwal</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body row g-3">

                <!-- Hidden ID -->
                <input type="hidden" name="id" id="input-id">
                <input type="hidden" class="form-control" id="input-kelas" name="kelas">

                <div class="col-md-6">
                        <label for="inputState" class="form-label">Hari</label>
                        <select required id="input-hari" class="form-select" name="hari">
                            <option selected></option>
                            <option value="Senin">Senin</option>
                            <option value="Selasa">Selasa</option>
                            <option value="Rabu">Rabu</option>
                            <option value="Kamis">Kamis</option>
                            <option value="Jumat">Jumat</option>
                        </select>
                    </div>
                <div class="col-md-6">
                    <label class="form-label">Mata Pelajaran 1</label>
                    <input required type="text" class="form-control" id="input-mapel1" name="mapel1" placeholder="Cth: 8.A">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Mata Pelajaran 2</label>
                    <input required type="text" class="form-control" id="input-mapel2" name="mapel2">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Mata Pelajaran 3</label>
                    <input required type="text" class="form-control" id="input-mapel3" name="mapel3">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Mata Pelajaran 4</label>
                    <input required type="text" class="form-control" id="input-mapel4" name="mapel4">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Mata Pelajaran 5</label>
                    <input required type="text" class="form-control" id="input-mapel5" name="mapel5">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Mata Pelajaran 6</label>
                    <input required type="text" class="form-control" id="input-mapel6" name="mapel6">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                <button type="submit" class="btn btn-warning">Edit</button>
            </div>
            </form>
        </div>
    </div>

    <!-- Script edit jadwal -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
        const editModal = document.getElementById('editJadwal');

            editModal.addEventListener('show.bs.modal', function (event) {
                const button = event.relatedTarget;
                const id = button.getAttribute('data-id');

                document.getElementById('input-id').value = id;
                document.getElementById('input-kelas').value = button.getAttribute('data-kelas');
                document.getElementById('input-hari').value = button.getAttribute('data-hari');
                document.getElementById('input-mapel1').value = button.getAttribute('data-mapel1');
                document.getElementById('input-mapel2').value = button.getAttribute('data-mapel2');
                document.getElementById('input-mapel3').value = button.getAttribute('data-mapel3');
                document.getElementById('input-mapel4').value = button.getAttribute('data-mapel4');
                document.getElementById('input-mapel5').value = button.getAttribute('data-mapel5');
                document.getElementById('input-mapel6').value = button.getAttribute('data-mapel6');

                // Set form action dynamically
                const form = document.getElementById('edit-form');
                form.action = `/jadwalmapel/update/${id}`;
            });
        });
    </script>

    <!-- Modal hapus jadwal -->
    <div class="modal fade" id="hapusJadwal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Jadwal</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Apakah anda yakin ingin menghapus Jadwal ini?
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
            const hapusModal = document.getElementById('hapusJadwal');
            const btnConfirm = document.getElementById('btn-confirm-hapus');

            hapusModal.addEventListener('show.bs.modal', function (event) {
                const button = event.relatedTarget;
                const id = button.getAttribute('data-id');
                btnConfirm.href = "<?= base_url('/jadwalmapel/delete/') ?>" + id;
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

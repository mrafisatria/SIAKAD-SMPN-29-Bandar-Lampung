<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Nilai</title>
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
                    <h3 class="ms-1 mt-3">Detail Nilai</h3>
                    <nav class="mt-3" style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active">Pembelajaran</li>
                        <li class="breadcrumb-item active" aria-current="page">Nilai</li>
                        <li class="breadcrumb-item active" aria-current="page"><b>Detail Nilai</b></li>
                    </ol>
                    </nav>
                </div>
                <?php if(session()->getFlashdata('error')): ?>
                  <div class="alert alert-danger">
                    <?= session()->getFlashdata('error') ?>
                  </div>
                <?php endif; ?>
                
                <div class="rounded shadow" style="background-color: white">
                    <?php if ((in_groups('admin') || in_groups('guru') || in_groups('waka')) && $statusfitur > 0) { ?>
                        <div class="d-flex justify-content-end"><button class="btn btn-success tambah-siswa-btn me-4 mt-3" data-bs-toggle="modal" data-bs-target="#tambahNilai"><i class="bi bi-graph-up-arrow text-light me-2"></i>Tambah Nilai</button></div>
                    <?php }?>
                    
                    <hr>
                    <div class="ps-4 pb-4 pe-4">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped rounded">
                                <thead>
                                    <tr class="align-middle text-center">
                                        <th scope="col" style="background-color: #334d6c; color: white;" rowspan="2">No.</th>
                                        <th scope="col" style="background-color: #334d6c; color: white; width: 300px;" rowspan="2">Mata Pelajaran</th>
                                        <th scope="col" style="background-color: #334d6c; color: white;" colspan="10">Penilaian Harian</th>
                                        <th scope="col" style="background-color: #334d6c; color: white;" colspan="5">Tugas Individu</th>
                                        <th scope="col" style="background-color: #334d6c; color: white;" colspan="3">Tugas Kelompok</th>
                                        <th scope="col" style="background-color: #334d6c; color: white;" rowspan="2">UTS</th>
                                        <th scope="col" style="background-color: #334d6c; color: white;" rowspan="2">UAS</th>
                                        <th scope="col" style="background-color: #334d6c; color: white;" rowspan="2">Rata Rata</th>

                                        <?php if ((in_groups('admin') || in_groups('guru') || in_groups('waka')) && $statusfitur > 0) { ?>
                                            <th scope="col" style="background-color: #334d6c; color: white; width:170px;" rowspan="2">Aksi</th>
                                        <?php }?>

                                    </tr>
                                    <tr class="align-middle text-center">
                                        <td>1</td>
                                        <td>2</td>
                                        <td>3</td>
                                        <td>4</td>
                                        <td>5</td>
                                        <td>6</td>
                                        <td>7</td>
                                        <td>8</td>
                                        <td>9</td>
                                        <td>10</td>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>3</td>
                                        <td>4</td>
                                        <td>5</td>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>3</td>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $no=1; foreach ($nilaii as $nilai){ ?>
                                    <tr class="align-middle text-center">
                                        <th scope="row"><?=$no++?></th>
                                        <td><?=$nilai['mata_pelajaran']?></td>
                                        <td><?=$nilai['ph1']?></td>
                                        <td><?=$nilai['ph2']?></td>
                                        <td><?=$nilai['ph3']?></td>
                                        <td><?=$nilai['ph4']?></td>
                                        <td><?=$nilai['ph5']?></td>
                                        <td><?=$nilai['ph6']?></td>
                                        <td><?=$nilai['ph7']?></td>
                                        <td><?=$nilai['ph8']?></td>
                                        <td><?=$nilai['ph9']?></td>
                                        <td><?=$nilai['ph10']?></td>
                                        <td><?=$nilai['ti1']?></td>
                                        <td><?=$nilai['ti2']?></td>
                                        <td><?=$nilai['ti3']?></td>
                                        <td><?=$nilai['ti4']?></td>
                                        <td><?=$nilai['ti5']?></td>
                                        <td><?=$nilai['tk1']?></td>
                                        <td><?=$nilai['tk2']?></td>
                                        <td><?=$nilai['tk3']?></td>
                                        <td><?=$nilai['uts']?></td>
                                        <td><?=$nilai['uas']?></td>
                                        <td><?=$nilai['rata_rata']?></td>

                                        <?php if ((in_groups('admin') || in_groups('guru') || in_groups('waka')) && $statusfitur > 0) { ?>
                                            <td>
                                                <button class="btn btn-warning action-button" data-bs-toggle="modal" data-bs-target="#editNilai" data-id="<?=$nilai['id'] ?>" 
                                                                                                                                                data-id_siswa="<?=$nilai['id_siswa'] ?>"
                                                                                                                                                data-mata_pelajaran="<?=$nilai['mata_pelajaran'] ?>"
                                                                                                                                                data-kelas="<?=$nilai['kelas'] ?>"
                                                                                                                                                data-semester="<?=$nilai['semester'] ?>"
                                                                                                                                                data-bobot_kognitif="<?=$nilai['bobot_kognitif'] ?>"
                                                                                                                                                data-bobot_uas="<?=$nilai['bobot_uas'] ?>"
                                                                                                                                                data-ph1="<?=$nilai['ph1'] ?>"
                                                                                                                                                data-ph2="<?=$nilai['ph2'] ?>"
                                                                                                                                                data-ph3="<?=$nilai['ph3'] ?>"
                                                                                                                                                data-ph4="<?=$nilai['ph4'] ?>"
                                                                                                                                                data-ph5="<?=$nilai['ph5'] ?>"
                                                                                                                                                data-ph6="<?=$nilai['ph6'] ?>"
                                                                                                                                                data-ph7="<?=$nilai['ph7'] ?>"
                                                                                                                                                data-ph8="<?=$nilai['ph8'] ?>"
                                                                                                                                                data-ph9="<?=$nilai['ph9'] ?>"
                                                                                                                                                data-ph10="<?=$nilai['ph10'] ?>"
                                                                                                                                                data-ti1="<?=$nilai['ti1'] ?>"
                                                                                                                                                data-ti2="<?=$nilai['ti2'] ?>"
                                                                                                                                                data-ti3="<?=$nilai['ti3'] ?>"
                                                                                                                                                data-ti4="<?=$nilai['ti4'] ?>"
                                                                                                                                                data-ti5="<?=$nilai['ti5'] ?>"
                                                                                                                                                data-tk1="<?=$nilai['tk1'] ?>"
                                                                                                                                                data-tk2="<?=$nilai['tk2'] ?>"
                                                                                                                                                data-tk3="<?=$nilai['tk3'] ?>"
                                                                                                                                                data-uts="<?=$nilai['uts'] ?>"
                                                                                                                                                data-uas="<?=$nilai['uas'] ?>">
                                                <i class="bi bi-pencil text-dark"></i></button>
                                                <button class="btn btn-danger action-button" data-bs-toggle="modal" data-bs-target="#hapusNilai" data-id="<?=$nilai['id'] ?>"><i class="bi bi-trash text-dark"></i></button>
                                            </td>
                                        <?php }?>

                                    </tr>
                                <?php } ?>
                                <?php $no=1; foreach ($nilaiakhirr as $nilaiakhir){ ?>
                                    <tr class="align-middle text-center">
                                        <th colspan="13">Nilai Akhir</th>
                                        <th colspan="13" class="text-center"><?=$nilaiakhir['nilai_akhir']?></th>
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


    <!-- Modal tambah nilai -->
    <div class="modal fade" id="tambahNilai" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Nilai</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <?php $no=1; foreach ($siswaa as $siswa){ ?>
            <div class="modal-body">
                <form class="row g-3" action="<?= base_url('/nilai/store')?>">
                <input type="hidden" name="kelas" value="<?=$siswa['kelas']?>">
                <input type="hidden" name="id_siswa" value="<?=$siswa['id']?>">
                <input type="hidden" name="semester" value="<?=$siswa['semester']?>">
            <?php } ?>
                    <div class="col-md-12">
                        <label for="inputState" class="form-label">Mata Pelajaran</label>
                        <select required id="inputState" class="form-select" name="mata_pelajaran">
                            <option selected></option>
                            <option value="IPA">IPA</option>
                            <option value="IPS">IPS</option>
                            <option value="Pendidikan Agama Islam">Pendidikan Agama Islam</option>
                            <option value="PPKN">PPKN</option>
                            <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                            <option value="Bahasa Inggris">Bahasa Inggris</option>
                            <option value="Matematika">Matematika</option>
                            <option value="Seni Budaya">Seni Budaya</option>
                            <option value="Pendidikan Jasmani">Pendidikan Jasmani</option>
                            <option value="Prakarya">Prakarya</option>
                        </select>
                    </div>
                    <div class="col-15 mt-5">
                        <label for="inputAddress" class="form-label fs-5 fw-bold">Bobot Nilai (%)</label>
                    </div>
                    <div class="col-6">
                        <label for="inputAddress" class="form-label">Kognitif (PH, TI, TK, UTS)</label>
                        <input type="number" min="0" max="100" class="form-control" id="inputAddress" name="bobot_kognitif">
                    </div>
                    <div class="col-6">
                        <label for="inputAddress" class="form-label">UAS</label>
                        <input type="number" min="0" max="100" class="form-control" id="inputAddress" name="bobot_uas">
                    </div>
                    <div class="col-15 mt-5">
                        <label for="inputAddress" class="form-label fs-5 fw-bold">Penilaian Harian</label>
                    </div>
                    <div class="col-2">
                        <label for="inputAddress" class="form-label">Nilai 1</label>
                        <input type="number" min="0" max="100" class="form-control" id="inputAddress" name="ph1">
                    </div>
                    <div class="col-2">
                        <label for="inputAddress" class="form-label">Nilai 2</label>
                        <input type="number" min="0" max="100" class="form-control" id="inputAddress" name="ph2">
                    </div>
                    <div class="col-2">
                        <label for="inputAddress" class="form-label">Nilai 3</label>
                        <input type="number" min="0" max="100" class="form-control" id="inputAddress" name="ph3">
                    </div>
                    <div class="col-2">
                        <label for="inputAddress" class="form-label">Nilai 4</label>
                        <input type="number" min="0" max="100" class="form-control" id="inputAddress" name="ph4">
                    </div>
                    <div class="col-2">
                        <label for="inputAddress" class="form-label">Nilai 5</label>
                        <input type="number" min="0" max="100" class="form-control" id="inputAddress" name="ph5">
                    </div>
                    <div class="col-2">
                        <label for="inputAddress" class="form-label">Nilai 6</label>
                        <input type="number" min="0" max="100" class="form-control" id="inputAddress" name="ph6">
                    </div>
                    <div class="col-2">
                        <label for="inputAddress" class="form-label">Nilai 7</label>
                        <input type="number" min="0" max="100" class="form-control" id="inputAddress" name="ph7">
                    </div>
                    <div class="col-2">
                        <label for="inputAddress" class="form-label">Nilai 8</label>
                        <input type="number" min="0" max="100" class="form-control" id="inputAddress" name="ph8">
                    </div>
                    <div class="col-2">
                        <label for="inputAddress" class="form-label">Nilai 9</label>
                        <input type="number" min="0" max="100" class="form-control" id="inputAddress" name="ph9">
                    </div>
                    <div class="col-2">
                        <label for="inputAddress" class="form-label">Nilai 10</label>
                        <input type="number" min="0" max="100" class="form-control" id="inputAddress" name="ph10">
                    </div>

                    <div class="col-15 mt-5">
                        <label for="inputAddress" class="form-label fs-5 fw-bold">Tugas Individu</label>
                    </div>
                    <div class="col-2">
                        <label for="inputAddress" class="form-label">Nilai 1</label>
                        <input type="number" min="0" max="100" class="form-control" id="inputAddress" name="ti1">
                    </div>
                    <div class="col-2">
                        <label for="inputAddress" class="form-label">Nilai 2</label>
                        <input type="number" min="0" max="100" class="form-control" id="inputAddress" name="ti2">
                    </div>
                    <div class="col-2">
                        <label for="inputAddress" class="form-label">Nilai 3</label>
                        <input type="number" min="0" max="100" class="form-control" id="inputAddress" name="ti3">
                    </div>
                    <div class="col-2">
                        <label for="inputAddress" class="form-label">Nilai 4</label>
                        <input type="number" min="0" max="100" class="form-control" id="inputAddress" name="ti4">
                    </div>
                    <div class="col-2">
                        <label for="inputAddress" class="form-label">Nilai 5</label>
                        <input type="number" min="0" max="100" class="form-control" id="inputAddress" name="ti5">
                    </div>

                    <div class="col-15 mt-5">
                        <label for="inputAddress" class="form-label fs-5 fw-bold">Tugas Kelompok</label>
                    </div>
                    <div class="col-2">
                        <label for="inputAddress" class="form-label">Nilai 1</label>
                        <input type="number" min="0" max="100" class="form-control" id="inputAddress" name="tk1">
                    </div>
                    <div class="col-2">
                        <label for="inputAddress" class="form-label">Nilai 2</label>
                        <input type="number" min="0" max="100" class="form-control" id="inputAddress" name="tk2">
                    </div>
                    <div class="col-2">
                        <label for="inputAddress" class="form-label">Nilai 3</label>
                        <input type="number" min="0" max="100" class="form-control" id="inputAddress" name="tk3">
                    </div>

                    <div class="col-15 mt-5">
                        <label for="inputAddress" class="form-label fs-5 fw-bold">UTS & UAS</label>
                    </div>
                    <div class="col-4">
                        <label for="inputAddress" class="form-label">Nilai UTS</label>
                        <input type="number" min="0" max="100" class="form-control" id="inputAddress" name="uts">
                    </div>
                    <div class="col-4">
                        <label for="inputAddress" class="form-label">Nilai UAS</label>
                        <input type="number" min="0" max="100" class="form-control" id="inputAddress" name="uas">
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


    <!-- Modal edit nilai -->
    <div class="modal fade" id="editNilai" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form class="modal-content" id="edit-form" method="post">
            <?= csrf_field() ?>
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Nilai</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body row g-3">
                <input type="hidden" name="id" id="input-id">
                <input type="hidden" name="kelas" id="input-kelas">
                <input type="hidden" name="id_siswa" id="input-id_siswa">
                <input type="hidden" name="semester" id="input-semester">
                <div class="col-md-12">
                    <label for="inputState" class="form-label">Mata Pelajaran</label>
                    <select required class="form-select" id="input-mata_pelajaran" name="mata_pelajaran">
                        <option selected></option>
                        <option value="IPA">IPA</option>
                        <option value="IPS">IPS</option>
                        <option value="Pendidikan Agama Islam">Pendidikan Agama Islam</option>
                        <option value="PPKN">PPKN</option>
                        <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                        <option value="Bahasa Inggris">Bahasa Inggris</option>
                        <option value="Matematika">Matematika</option>
                        <option value="Seni Budaya">Seni Budaya</option>
                        <option value="Pendidikan Jasmani">Pendidikan Jasmani</option>
                        <option value="Prakarya">Prakarya</option>
                    </select>
                </div>
                <div class="col-15 mt-5">
                    <label for="inputAddress" class="form-label fs-5 fw-bold">Bobot Nilai (%)</label>
                </div>
                <div class="col-6">
                    <label for="inputAddress" class="form-label">Kognitif (PH, TI, TK, UTS)</label>
                    <input type="number" min="0" max="100" class="form-control" id="input-bobot_kognitif" name="bobot_kognitif">
                </div>
                <div class="col-6">
                    <label for="inputAddress" class="form-label">UAS</label>
                    <input type="number" min="0" max="100" class="form-control" id="input-bobot_uas" name="bobot_uas">
                </div>
                <div class="col-15">
                    <label for="inputAddress" class="form-label fs-5 fw-bold">Penilaian Harian</label>
                </div>
                <div class="col-2">
                    <label for="inputAddress" class="form-label">Nilai 1</label>
                    <input type="number" min="0" max="100" class="form-control" id="input-ph1" name="ph1">
                </div>
                <div class="col-2">
                    <label for="inputAddress" class="form-label">Nilai 2</label>
                    <input type="number" min="0" max="100" class="form-control" id="input-ph2" name="ph2">
                </div>
                <div class="col-2">
                    <label for="inputAddress" class="form-label">Nilai 3</label>
                    <input type="number" min="0" max="100" class="form-control" id="input-ph3" name="ph3">
                </div>
                <div class="col-2">
                    <label for="inputAddress" class="form-label">Nilai 4</label>
                    <input type="number" min="0" max="100" class="form-control" id="input-ph4" name="ph4">
                </div>
                <div class="col-2">
                    <label for="inputAddress" class="form-label">Nilai 5</label>
                    <input type="number" min="0" max="100" class="form-control" id="input-ph5" name="ph5">
                </div>
                <div class="col-2">
                    <label for="inputAddress" class="form-label">Nilai 6</label>
                    <input type="number" min="0" max="100" class="form-control" id="input-ph6" name="ph6">
                </div>
                <div class="col-2">
                    <label for="inputAddress" class="form-label">Nilai 7</label>
                    <input type="number" min="0" max="100" class="form-control" id="input-ph7" name="ph7">
                </div>
                <div class="col-2">
                    <label for="inputAddress" class="form-label">Nilai 8</label>
                    <input type="number" min="0" max="100" class="form-control" id="input-ph8" name="ph8">
                </div>
                <div class="col-2">
                    <label for="inputAddress" class="form-label">Nilai 9</label>
                    <input type="number" min="0" max="100" class="form-control" id="input-ph9" name="ph9">
                </div>
                <div class="col-2">
                    <label for="inputAddress" class="form-label">Nilai 10</label>
                    <input type="number" min="0" max="100" class="form-control" id="input-ph10" name="ph10">
                </div>

                <div class="col-15 mt-5">
                    <label for="inputAddress" class="form-label fs-5 fw-bold">Tugas Individu</label>
                </div>
                <div class="col-2">
                    <label for="inputAddress" class="form-label">Nilai 1</label>
                    <input type="number" min="0" max="100" class="form-control" id="input-ti1" name="ti1">
                </div>
                <div class="col-2">
                    <label for="inputAddress" class="form-label">Nilai 2</label>
                    <input type="number" min="0" max="100" class="form-control" id="input-ti2" name="ti2">
                </div>
                <div class="col-2">
                    <label for="inputAddress" class="form-label">Nilai 3</label>
                    <input type="number" min="0" max="100" class="form-control" id="input-ti3" name="ti3">
                </div>
                <div class="col-2">
                    <label for="inputAddress" class="form-label">Nilai 4</label>
                    <input type="number" min="0" max="100" class="form-control" id="input-ti4" name="ti4">
                </div>
                <div class="col-2">
                    <label for="inputAddress" class="form-label">Nilai 5</label>
                    <input type="number" min="0" max="100" class="form-control" id="input-ti5" name="ti5">
                </div>

                <div class="col-15 mt-5">
                    <label for="inputAddress" class="form-label fs-5 fw-bold">Tugas Kelompok</label>
                </div>
                <div class="col-2">
                    <label for="inputAddress" class="form-label">Nilai 1</label>
                    <input type="number" min="0" max="100" class="form-control" id="input-tk1" name="tk1">
                </div>
                <div class="col-2">
                    <label for="inputAddress" class="form-label">Nilai 2</label>
                    <input type="number" min="0" max="100" class="form-control" id="input-tk2" name="tk2">
                </div>
                <div class="col-2">
                    <label for="inputAddress" class="form-label">Nilai 3</label>
                    <input type="number" min="0" max="100" class="form-control" id="input-tk3" name="tk3">
                </div>

                <div class="col-15 mt-5">
                    <label for="inputAddress" class="form-label fs-5 fw-bold">UTS & UAS</label>
                </div>
                <div class="col-4">
                    <label for="inputAddress" class="form-label">Nilai UTS</label>
                    <input type="number" min="0" max="100" class="form-control" id="input-uts" name="uts">
                </div>
                <div class="col-4">
                    <label for="inputAddress" class="form-label">Nilai UAS</label>
                    <input type="number" min="0" max="100" class="form-control" id="input-uas" name="uas">
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

    <!-- Script edit nilai -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
        const editModal = document.getElementById('editNilai');

            editModal.addEventListener('show.bs.modal', function (event) {
                const button = event.relatedTarget;
                const id = button.getAttribute('data-id');

                document.getElementById('input-id').value = id;
                document.getElementById('input-id_siswa').value = button.getAttribute('data-id_siswa');
                document.getElementById('input-mata_pelajaran').value = button.getAttribute('data-mata_pelajaran');
                document.getElementById('input-kelas').value = button.getAttribute('data-kelas');
                document.getElementById('input-semester').value = button.getAttribute('data-semester');
                document.getElementById('input-bobot_kognitif').value = button.getAttribute('data-bobot_kognitif') * 100;
                document.getElementById('input-bobot_uas').value = button.getAttribute('data-bobot_uas') * 100;
                document.getElementById('input-ph1').value = button.getAttribute('data-ph1');
                document.getElementById('input-ph2').value = button.getAttribute('data-ph2');
                document.getElementById('input-ph3').value = button.getAttribute('data-ph3');
                document.getElementById('input-ph4').value = button.getAttribute('data-ph4');
                document.getElementById('input-ph5').value = button.getAttribute('data-ph5');
                document.getElementById('input-ph6').value = button.getAttribute('data-ph6');
                document.getElementById('input-ph7').value = button.getAttribute('data-ph7');
                document.getElementById('input-ph8').value = button.getAttribute('data-ph8');
                document.getElementById('input-ph9').value = button.getAttribute('data-ph9');
                document.getElementById('input-ph10').value = button.getAttribute('data-ph10');
                document.getElementById('input-ti1').value = button.getAttribute('data-ti1');
                document.getElementById('input-ti2').value = button.getAttribute('data-ti2');
                document.getElementById('input-ti3').value = button.getAttribute('data-ti3');
                document.getElementById('input-ti4').value = button.getAttribute('data-ti4');
                document.getElementById('input-ti5').value = button.getAttribute('data-ti5');
                document.getElementById('input-tk1').value = button.getAttribute('data-tk1');
                document.getElementById('input-tk2').value = button.getAttribute('data-tk2');
                document.getElementById('input-tk3').value = button.getAttribute('data-tk3');
                document.getElementById('input-uts').value = button.getAttribute('data-uts');
                document.getElementById('input-uas').value = button.getAttribute('data-uas');

                // Set form action dynamically
                const form = document.getElementById('edit-form');
                form.action = `/nilai/update/${id}`;
            });
        });
    </script>


    <!-- Modal hapus nilai -->
    <div class="modal fade" id="hapusNilai" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Nilai</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Apakah anda yakin ingin menghapus Nilai ini?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                <a href="#" class="btn btn-danger" id="btn-confirm-hapus">Hapus</a>
            </div>
            </div>
        </div>
    </div> 
    
    <!-- Script hapus Nilai -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const hapusModal = document.getElementById('hapusNilai');
            const btnConfirm = document.getElementById('btn-confirm-hapus');

            hapusModal.addEventListener('show.bs.modal', function (event) {
                const button = event.relatedTarget;
                const id = button.getAttribute('data-id');
                btnConfirm.href = "<?= base_url('/nilai/delete/') ?>" + id;
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

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri Kegiatan</title>
    <link rel="stylesheet" href="<?=base_url('assets/css/informasipublik.css')?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia&effect=neon|outline|emboss|shadow-multiple">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <?php if (logged_in()){?>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #002147; font-family: sans-serif; margin-left: 12px; margin-right: 12px;">
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
    <?php } else{?>

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
    <?php } ?>

    <div class="container" style="margin-top: 100px; text-align: center; margin-bottom: 50px">
        <section class="galeri">
            <h1 class="font-effect-emboss" style="color: #002147; margin-top: 50px; margin-bottom: 50px;">Galeri Kegiatan</h1>
            
            <?php if(in_groups('admin') || in_groups('waka')){ ?>
                <div class="d-flex justify-content-end me-2"><button class="btn btn-success mb-4" data-bs-toggle="modal" data-bs-target="#tambahKegiatan">Tambah Kegiatan</button></div>
            <?php }?>
            
            <div class="card-group">
                    <?php foreach ($kegiatann as $kegiatan){ ?>
                        <div class="col-md-4 mb-4">
                            <div class="card me-lg-2">
                                <img src="<?=$kegiatan['foto']?>" class="card-img-top" style="height:300px;">
                                <div class="card-body">
                                    <h5 class="card-title"><?=$kegiatan['judul']?></h5>
                                    <p class="card-text">
                                        <?=$kegiatan['isi']?>
                                    </p>
                                    <p class="card-text"> <small class="text-muted"><?=$kegiatan['tanggal']?></small></p>
                                    
                                    <?php if(in_groups('admin') || in_groups('waka')){ ?>
                                        <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editKegiatan" data-id="<?= $kegiatan['id'] ?>" 
                                                                                                                                data-judul="<?= $kegiatan['judul'] ?>" 
                                                                                                                                data-tanggal="<?= $kegiatan['tanggal'] ?>" 
                                                                                                                                data-isi="<?= $kegiatan['isi'] ?>">
                                            <i class="bi bi-pencil"></i>
                                        </button>

                                        <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#hapusKegiatan" data-id="<?= $kegiatan['id'] ?>">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    <?php }?>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
            </div>
        </section>
    </div>

    <div class="modal fade" id="tambahKegiatan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data Kegiatan</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?=base_url("/informasipublik/galerikegiatan/semuagaleri/store")?>"method="post" class="row g-3" enctype="multipart/form-data">
                        <div class="col-12">
                            <label for="inputAddress" class="form-label">Foto Kegiatan</label>
                            <input type="file" class="form-control" id="inputAddress" name="foto" required>
                        </div>
                        <div class="col-6">
                            <label for="inputAddress" class="form-label">Judul Kegiatan</label>
                            <input type="text" class="form-control" id="inputAddress" name="judul" required>
                        </div>
                        <div class="col-6">
                            <label for="inputAddress" class="form-label">Tanggal Kegiatan</label>
                            <input type="date" class="form-control" id="inputAddress" name="tanggal" required>
                        </div>
                        <div class="col-12">
                            <label for="inputAddress" class="form-label">Deskripsi Kegiatan</label>
                            <textarea type="text" class="form-control" id="inputAddress" maxlength="165" name="isi" required></textarea> 
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
                </form>
            </div>
        </div>
    </div> 
3
<!-- modal edit Kegiatan -->
<div class="modal fade" id="editKegiatan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <form class="modal-content" id="edit-form" method="post" enctype="multipart/form-data">
                        <?= csrf_field() ?>
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data Kegiatan</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body row g-3">

                            <input type="hidden" name="id" id="input-id">

                            <div class="col-12">
                                <label for="inputAddress" class="form-label">Foto Kegiatan</label>
                                <input type="file" class="form-control"  name="foto" required>
                            </div>
                            <div class="col-6">
                                <label for="inputAddress" class="form-label">Judul Kegiatan</label>
                                <input type="text" class="form-control" id="input-judul" name="judul" required>
                            </div>
                            <div class="col-6">
                                <label for="inputAddress" class="form-label">Tanggal Kegiatan</label>
                                <input type="date" class="form-control" id="input-tanggal" name="tanggal" required>
                            </div>
                            <div class="col-12">
                                <label for="inputAddress" class="form-label">Deskripsi Kegiatan</label>
                                <textarea type="text" class="form-control" id="input-isi" name="isi" maxlength="165" required></textarea> 
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                            <button type="submit" class="btn btn-primary">Edit</button>
                        </div>
                        </form>
                    </div>
                </div>

<!-- script edit Kegiatan -->
                <script>
                    document.addEventListener('DOMContentLoaded', function () {
                    const editModal = document.getElementById('editKegiatan');

                        editModal.addEventListener('show.bs.modal', function (event) {
                            const button = event.relatedTarget;
                            const id = button.getAttribute('data-id');

                            document.getElementById('input-id').value = id;
                            document.getElementById('input-judul').value = button.getAttribute('data-judul');
                            document.getElementById('input-tanggal').value = button.getAttribute('data-tanggal');
                            document.getElementById('input-isi').value = button.getAttribute('data-isi');

                            const form = document.getElementById('edit-form');
                            form.action = `/informasipublik/galerikegiatan/semuagaleri/update/${id}`;
                        });
                    }); 
                </script>

<!-- modal hapus Kegiatan -->
                <div class="modal fade" id="hapusKegiatan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Data Kegiatan</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Apakah anda yakin ingin menghapus data kegiatan ini?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                            <a href="#" class="btn btn-primary" id="btn-confirm-hapus">Hapus</a>
                        </div>
                        </div>
                    </div>
                </div>

<!-- script hapus Kegiatan -->
                <script>
                    document.addEventListener('DOMContentLoaded', function () {
                        const hapusModal = document.getElementById('hapusKegiatan');
                        const btnConfirm = document.getElementById('btn-confirm-hapus');

                        hapusModal.addEventListener('show.bs.modal', function (event) {
                            const button = event.relatedTarget;
                            const id = button.getAttribute('data-id');
                            btnConfirm.href = "<?= base_url('/informasipublik/galerikegiatan/semuagaleri/delete/') ?>" + id;
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

</body>
</html>
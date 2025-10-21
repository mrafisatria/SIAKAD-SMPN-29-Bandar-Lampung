<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informasi Publik</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/informasipublik.css') ?>">
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
                            <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                INFORMASI PUBLIK
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#sejarah">Sejarah Singkat</a></li>
                                <li><a class="dropdown-item" href="#visimisi">Visi Misi</a></li>
                                <li><a class="dropdown-item" href="#struktur">Struktur Organisasi</a></li>
                                <li><a class="dropdown-item" href="#hymne">Hymne</a></li>
                            </ul>
                        </li>
                        <li class="nav-item me-5">
                            <a class="nav-link active" aria-current="page" href="#galeri">GALERI KEGIATAN</a>
                        </li>
                        <li class="nav-item me-5">
                            <a class="nav-link active" aria-current="page" href="#prestasi">PRESTASI</a>
                        </li>
                        <li class="nav-item me-5">
                            <a class="nav-link active" aria-current="page" href="#ekstrakulikuler">EKSTRAKULIKULER</a>
                        </li>
                </div>
            </div>
        </nav>
    </div>
    <?php } ?>
    
    <div class="container-fluid">
        <section class="landingpage" style="margin-top: 76px;" id="home">
            <main class="isi">
            <?= view('Myth\Auth\Views\_message_block') ?>
                <h1 class="font-effect-emboss">SMPN 29 BANDAR LAMPUNG</h1>
                <p class="font-effect-emboss">Selamat datang di Sistem Informasi Akademik SMPN 29 Bandar Lampung, solusi terpadu untuk mempermudah akses informasi akademik dan mendukung kemajuan pendidikan secara efisien.</p>
                <a href="#sejarah"><button type="button" class="satu btn btn-outline-light">Selengkapnya</button></a>
                <?php if(!logged_in()){?>
                <button type="button" class="dua btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#login">Masuk</button>
                <?php } ?>
            </main>
        </section>
    </div>

    <h1 style="color: #111514; background-color: #111514; margin-left: 12px; margin-right: 12px;" id="sejarah">.</h1>
    <div class="container">
        <section class="sejarah">
            <h1 class="font-effect-emboss" id="h1">Sejarah Singkat</h1>
            <div class="d-flex">
                <table class="table table-bordered" style="width: 200%;">
                    <thead>
                        <tr>
                            <th>Sejarah Kepemimpinan</th>
                            <?php if(in_groups('admin') || in_groups('waka')){ ?>
                            <th>Aksi</th>
                            <?php } ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($sejarahh as $sejarah) { ?>
                            <tr class="align-middle">
                                <td><?= $sejarah['sejarahkepemimpinan'] ?></td>
                                <?php if(in_groups('admin') || in_groups('waka')){ ?>
                                <td>
                                    <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editSejarah" style="color:#ffffff;" data-id="<?= $sejarah['id'] ?>"
                                                                                                                                                                    data-sejarahkepemimpinan="<?= $sejarah['sejarahkepemimpinan'] ?>">
                                        <i class="bi bi-pencil"></i>
                                    </button>

                                    <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#hapusSejarah" data-id="<?= $sejarah['id'] ?>" style="color:#ffffff;">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </td>
                                <?php } ?>
                            </tr>
                        <?php } ?>
                        <?php if(in_groups('admin') || in_groups('waka')){ ?>
                        <tr>
                            <td colspan="2" align="center"><button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#tambahSejarah" style="color:#ffffff;">Tambah Kepemimpinan</button></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>

                <!-- modal tambah sejarah -->
                <div class="modal fade" id="tambahSejarah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data Kepemimpinan</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="<?= base_url("/informasipublik/sejarahsingkat/store") ?>" method="post" class="row g-3">
                                    <div class="col-12">
                                        <label for="inputAddress" class="form-label">Periode Kepemimpinan</label>
                                        <input required type="text" class="form-control" id="inputAddress" name="periodekepemimpinan">
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

                <!-- modal edit sejarah -->
                <div class="modal fade" id="editSejarah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <form class="modal-content" id="edit-form" method="post">
                            <?= csrf_field() ?>
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data Kepemimpinan</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body row g-3">

                                <input type="hidden" name="id" id="input-id">

                                <div class="col-md-12">
                                    <label class="form-label">Periode Kepemimpinan</label>
                                    <input required type="text" class="form-control" id="input-sejarahkepemimpinan" name="periodekepemimpinan">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                                <button type="submit" class="btn btn-primary">Edit</button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- script edit sejarah -->
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        const editModal = document.getElementById('editSejarah');

                        editModal.addEventListener('show.bs.modal', function(event) {
                            const button = event.relatedTarget;
                            const id = button.getAttribute('data-id');

                            document.getElementById('input-id').value = id;
                            document.getElementById('input-sejarahkepemimpinan').value = button.getAttribute('data-sejarahkepemimpinan');

                            const form = document.getElementById('edit-form');
                            form.action = `/informasipublik/sejarahsingkat/update/${id}`;
                        });
                    });
                </script>

                <!-- modal hapus sejarah -->
                <div class="modal fade" id="hapusSejarah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Data Kepemimpinan</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Apakah anda yakin ingin menghapus data kepemimpinan ini?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                                <a href="#" class="btn btn-primary" id="btn-confirm-hapus">Hapus</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- script hapus sejarah -->
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        const hapusModal = document.getElementById('hapusSejarah');
                        const btnConfirm = document.getElementById('btn-confirm-hapus');

                        hapusModal.addEventListener('show.bs.modal', function(event) {
                            const button = event.relatedTarget;
                            const id = button.getAttribute('data-id');
                            btnConfirm.href = "<?= base_url('/informasipublik/sejarahsingkat/delete/') ?>" + id;
                        });
                    });
                </script>

                <p style="width: 200%; padding-left: 50px;">
                    <b style="color: #002147;">SMP Negeri 29 Bandar Lampung </b>didirikan pada tanggal <b style="color: #002147;">20 Oktober 1999</b>, dengan tujuan untuk menyediakan pendidikan berkualitas di daerah Bandar Lampung. Berstatus sebagai sekolah negeri, SMP ini berada di bawah naungan Kementerian Pendidikan dan Kebudayaan Indonesia dan memiliki <b style="color: #002147;">Akreditasi A</b>, diperoleh pada tahun 2019.
                    <br>
                    <br>
                    Pembangunan gedung <b style="color: #002147;">SMP Negeri 29 Bandar Lampung </b>dimulai pada bulan <b style="color: #002147;">Februari 1999 </b>yang terletak diatas tanah seluas <b style="color: #002147;">9.242.50 m2 </b>dijalan Soekarno Hatta Bay Pass Sukarame Bandar Lampung tanah tersebut adalah milik Departemen Pendidikan dan Kebudayaan Provinsi Lampung yang berasal dari hasil proses pembebasan tanah PT WayHalim Permai untuk pembangunan SMA Negeri 5 Bandar Lampung.
                    <br>
                    <br>
                    Kepala sekolah pertama SMP 29 adalah <b style="color: #002147;">Dra. Hj Sumiyati Yusuf</b> yang menjabat pada <b style="color: #002147;">1998-2008</b>
                </p>
            </div>
        </section>
    </div>

    <h1 style="color: #ffffff; background-color: #ffffff; margin-left: 12px; margin-right: 12px;" id="visimisi">.</h1>
    <div style="background-color: #002147; margin-left: 12px; margin-right: 12px;">
        <section class="visimisi container">
            <main class="isi-visimisi" style="margin-left: 100px; margin-right: 100px;">
                <h1 class="font-effect-emboss visi" style="padding-top: 60px;">VISI</h1>
                <hr style="color: #ffb606;">
                <p>SMP Negeri 29 Bandar Lampung memiliki visi untuk menjadi sekolah favorit yang berprestasi dan bermutu, serta membentuk siswa yang bertakwa, berbudaya, dan terampil dalam berbagai aspek kehidupan.</p>

                <h1 class="font-effect-emboss misi">MISI</h1>
                <hr style="color: #ffb606;">
                <ol>
                    <li>Mewujudkan kehidupan warga sekolah yang religius.</li>
                    <li>Mewujudkan warga Sekolah yang menjunjung tinggi nilai-nilai Budaya Bangsa
                        Indonesia.</li>
                    <li>Memberikan layanan pendidikan yang terbaik bagi masyarakat lampung tanpa
                        membedakan status ekonomi, ras, adat istiadat dan budaya. </li>
                    <li>Mewujudkan sekolah yang efektif dan efesien.</li>
                    <li>Mewujudkan warga sekolah yang mempunyai wawasan/pemikiran global
                        untuk mencapai kehidupan yang lebih baik. </li>
                    <li>Meningkatkan prefesionalisme tenaga pendidikan dan kependidikan serta
                        tenaga penunjang pendidikan. </li>
                    <li>Mengembangkan managemen berbasis sekolah yang akuntabel, efektif dan
                        efesien. </li>
                    <li>Mengembangkan fasilitas sekolah berbasis teknologi untuk menunjang
                        pembelajaran dan administrasi sekolah.</li>
                    <li>Mewujudkan warga sekolah yang menguasai ilmu pengetahuan dan teknologi
                        yang up to date. </li>
                </ol>
            </main>
        </section>
    </div>

    <h2 style="color: #002147; background-color: #002147; font-size: 48px; margin-left: 12px; margin-right: 12px;" id="struktur">.</h2>
    <div>
        <section class="struktur" style="text-align: center;">
            <h1 class="font-effect-emboss" style="color: #002147; margin-top: 70px;">Struktur Organisasi</h1>
            <img src="<?=base_url('/assets/img/bagan.png')?>" alt="" id="gambarstruktur" width="50%">
        </section>
    </div>

    <h2 style="background-color: white; color: #ffffff; font-size: 48px; margin-left: 12px; margin-right: 12px;" id="hymne">.</h2>
    <div style="background-color: #002147; margin-left: 12px; margin-right: 12px;">
        <section class="hymne" style="text-align: center;">
            <h1 class="font-effect-emboss" style="color: #ffb606; padding-top: 60px; margin-bottom: 50px;">Hymne</h1>
        </section>
        <div class="container">
            <div class="video-hymne">
                <table class="table">
                    <tr>
                        <th style="background-color: #ffb606;">Video dan Audio</th>
                    </tr>
                    <tr>
                        <td><iframe src="https://www.youtube.com/embed/gRolm6noIBI?si=k8tncGPUEEUE12ew" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe></td>
                    </tr>
                </table>
                <p>
                    ♪ ♪ ♪ <br> Bangkitlah, majulah SMP 29 demi meraih cita cita <br> Kobarkan semangatmu,<br> Tingkatkan prestasimu, untuk bekal dimasa depan <br> Ayo bersatu padu, <br>Bangkit dan terus maju, untuk membangun bangsa <br> Memberi cerminan pelajar pancasila <br>Disiplin dan bertanggung jawab <br>Berbudi pekerti luhur dalam berprilaku <br> Agar selamat dan bahagia <br> ♪ ♪ ♪<br>Beriman, berilmu, cerdas, dan berbudaya. <br>Bersyukurlah kepada tuhan <br> Saling menghargai semua perbedaan, <br>Perduli dan bekerja sama <br> Ayo bersatu padu <br>Bangkit dan terus majudemi membangun bangsa <br> Memberi cerminan pelajar pancasila <br>Disiplin dan bertanggung jawab <br> Berbudi pekerti luhur dalam berprilaku agar selamat dan bahagia <br>♪ ♪ ♪
                </p>
            </div>
            <h2 style="background-color: #002147; font-size: 48px; margin-left: 12px; margin-right: 12px;" id="galeri">.</h2>
        </div>
    </div>

    <div class="container" style="text-align: center; margin-bottom: 50px">
        <section class="galeri">
            <h1 class="font-effect-emboss" style="color: #002147; margin-top: 50px; margin-bottom: 50px;">Galeri Kegiatan</h1>
            <div class="card-group">
                <?php foreach ($kegiatann as $kegiatan) { ?>
                    <div class="card me-lg-2">
                        <img src="<?= $kegiatan['foto'] ?>" class="card-img-top" style="height:300px;">
                        <div class="card-body">
                            <h5 class="card-title"><?= $kegiatan['judul'] ?></h5>
                            <p class="card-text">
                                <?= $kegiatan['isi'] ?>
                            </p>
                            <p class="card-text"> <small class="text-muted"><?= $kegiatan['tanggal'] ?></small></p>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <a href="<?= base_url('/informasipublik/galerikegiatan/semuagaleri') ?>"><button class='btn mt-3' style="color: #002147; border-color:#ffb606"><b>Lihat Seluruh Kegiatan</b></button></a>
        </section>
    </div>

    <div style="background-color: #002147; margin-left: 12px; margin-right: 12px; padding-bottom: 20px;">
        <h2 style="background-color: #002147; font-size: 48px; margin-left: 12px; margin-right: 12px;" id="prestasi">.</h2>
        <div class="container" style="text-align: center;">
            <section class="prestasi">
                <h1 class="font-effect-emboss" style="color: #ffb606; margin-bottom: 50px; ">Prestasi</h1>

                <div class="card-group">
                    <?php foreach ($prestasii as $prestasi){?>
                        <div class="card me-lg-2">
                            <div class="card-header"><?=$prestasi['judul']?></div>
                            <img src="<?=$prestasi['foto']?>" class="card-img-top" alt="..." style="height:300px;">
                            <div class="card-body">
                                <p class="card-text">
                                    <?=$prestasi['isi']?>
                                </p>
                            </div>
                            <div class="card-footer"><?=$prestasi['perwakilan']?></div>
                        </div>
                    <?php } ?>
                </div>
                <a href="<?= base_url('/informasipublik/prestasi/semuaprestasi') ?>"><button class='btn mt-4' style="color:#ffffff; border-color:#ffb606;"><b>Lihat Seluruh Prestasi</b></button></a>
            </section>
        </div>  
    </div>

    

    <h2 style="background-color: #002147; color:#002147; font-size: 48px; margin-left: 12px; margin-right: 12px;" id="ekstrakulikuler">.</h2>
    <section class="ekstrakulikuler" style="margin-bottom: 50px;">
        
        <div class="container text-center">
            <h1></h1>
            <h1 class="font-effect-emboss" style="color: #002147; margin-top: 50px; margin-bottom: 50px;">Ekstrakulikuler</h1>
            
            <?php if(in_groups('admin') || in_groups('waka')){ ?>
                <div class="d-flex justify-content-end">
                <button type="button" class="btn btn-success mb-4" data-bs-toggle="modal" data-bs-target="#tambahEkstrakurikuler">Tambah Ekstrakurikuler</button>
                </div>
            <?php }?>

            <div class="row row-cols-3 row-cols-lg-3 g-2 g-lg-3">
                <?php foreach ($ekstrakurikulerr as $ekstrakurikuler){?>
                
                    <div class="col">
                        <div class="col-xs-6 equal-height" style="background-color:<?=$ekstrakurikuler['warna']?>;"><?= $ekstrakurikuler['nama'] ?></div>
                    
                        <?php if(in_groups('admin') || in_groups('waka')){ ?>
                            <button class="btn btn-warning mt-3" data-bs-toggle="modal" data-bs-target="#editEkstrakurikuler" data-id-e="<?= $ekstrakurikuler['id'] ?>"
                                                                                                                                data-nama-e="<?= $ekstrakurikuler['nama'] ?>">
                                <i class="bi bi-pencil"></i>
                            </button>

                            <button class="btn btn-danger mt-3" data-bs-toggle="modal" data-bs-target="#hapusEkstrakurikuler" data-id-e="<?= $ekstrakurikuler['id'] ?>">
                                <i class="bi bi-trash"></i>
                            </button>
                        <?php }?>
                    </div>
                <?php } ?>
            </div>  
        </div>

        <!-- modal tambah ekstrakurikuler -->
        <div class="modal fade" id="tambahEkstrakurikuler" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Ekstrakurikuler</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url("/informasipublik/ekstrakurikuler/store") ?>" method="post" class="row g-3">
                            <div class="col-12">
                                <label for="inputAddress" class="form-label">Nama Ekstrakurikuler</label>
                                <input type="text" class="form-control" id="inputAddress" name="nama" required>
                            </div>
                            <div class="col-12">
                                <label for="inputAddress" class="form-label">Warna</label>
                                <input type="color" class="form-control" id="inputAddress" name="warna" required>
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

        <!-- modal edit ekstrakurikuler -->
        <div class="modal fade" id="editEkstrakurikuler" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <form class="modal-content" id="edit-form-e" method="post">
                    <?= csrf_field() ?>
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Ekstrakurikuler</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body row g-3">

                        <input type="hidden" name="id" id="input-id-e">

                        <div class="col-md-12">
                            <label class="form-label">Nama Ekstrakurikuler</label>
                            <input type="text" class="form-control" id="input-nama-e" name="nama" required>
                        </div>
                        <div class="col-12">
                                <label for="inputAddress" class="form-label">Warna</label>
                                <input type="color" class="form-control" name="warna" required>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- script edit ekstrakurikuler -->
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const editModal = document.getElementById('editEkstrakurikuler');

                editModal.addEventListener('show.bs.modal', function(event) {
                    const button = event.relatedTarget;
                    const id = button.getAttribute('data-id-e');

                    document.getElementById('input-id-e').value = id;
                    document.getElementById('input-nama-e').value = button.getAttribute('data-nama-e');

                    const form = document.getElementById('edit-form-e');
                    form.action = `/informasipublik/ekstrakurikuler/update/${id}`;
                });
            });
        </script>

        <!-- modal hapus ekstrakurikuler -->
        <div class="modal fade" id="hapusEkstrakurikuler" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus ekstrakurikuler</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Apakah anda yakin ingin menghapus ekstrakurikuler ini?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                        <a href="#" class="btn btn-primary" id="btn-confirm-hapus-e">Hapus</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- script hapus ekstrakurikuler -->
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const hapusModal = document.getElementById('hapusEkstrakurikuler');
                const btnConfirm = document.getElementById('btn-confirm-hapus-e');

                hapusModal.addEventListener('show.bs.modal', function(event) {
                    const button = event.relatedTarget;
                    const id = button.getAttribute('data-id-e');
                    btnConfirm.href = "<?= base_url('/informasipublik/ekstrakurikuler/delete/') ?>" + id;
                });
            });
        </script>
    </section>

    <!-- Modal Login -->
    <div class="modal fade" id="login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Masuk</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="d-flex justify-content-center">
                    <div class="mt-3 d-flex justify-content-center">
                        <img src="<?=base_url('assets/img/kop29.png')?>" width="75%" alt="">
                    </div>
                </div>
                <hr>
                <div class="ps-4 pe-4">
                    <form action="<?= url_to('login') ?>" method="post">
                    <?= csrf_field() ?>
                    <div class="mb-4">
                        <input type="text" name="login" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" id="exampleFormControlInput1" placeholder="Masukan Username" style="border-radius:5px">
                    </div>
                    <div class="mb-3">
                        <input type="password" name="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" id="exampleFormControlInput1" placeholder="Masukan Password" style="border-radius:5px">
                    </div>
                    <p><a href="<?= url_to('forgot') ?>">Lupa Password?</a></p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                <button type="submit" class="btn btn-success">Masuk</button>
            </div>
            </form>
            </div>
        </div>
    </div>

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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGAP PRIMA ASTREA</title>

    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/dist/img/forApps/sigap-icon.png">

    <!-- Theme style -->
    <!-- <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/adminlte.min.css"> -->
    <!-- Javascript jquery -->
    <!-- <script src="<?php echo base_url() ?>assets/plugins/jquery/jquery.min.js"></script> -->
    <style>
        body {
            /* background: url('<?= base_url('assets/dist/img/forApps/sigap-logo.png') ?>');
            height: 500px;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative; */
            font-family: Tahoma, Helvetica, sans-serif;
        }

        .page-break {
            width: 100%;
            height: 95%;
        }

        .col {
            float: left;
            width: 25%;
            padding: 5px;
            /* height: 300px; */
            /* Should be removed. Only for demonstration */
        }

        .col0 {
            float: left;
            width: 15%;
            padding: 5px;
        }

        .col1 {
            float: left;
            width: 20%;
            padding: 5px;
        }

        .col2 {
            float: left;
            width: 25%;
            padding: 5px;
        }

        .col3 {
            float: left;
            width: 55%;
            padding: 5px;
            /* height: 300px; */
            /* Should be removed. Only for demonstration */
        }

        .col4 {
            float: left;
            width: 48%;
            padding: 5px;
            /* height: 300px; */
            /* Should be removed. Only for demonstration */
        }

        .col4-5 {
            float: left;
            width: 33%;
            padding: 5px;
            /* height: 300px; */
            /* Should be removed. Only for demonstration */
        }

        .col5 {
            float: left;
            width: 65%;
            padding: 5px;
            /* height: 300px; */
            /* Should be removed. Only for demonstration */
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        .rowu {
            content: "";
            width: 100%;
            display: table;
            clear: both;
            border: 1px solid;
            padding: 10px;
        }

        .rowu-0 {
            content: "";
            width: 100%;
            display: table;
            clear: both;
            border: 0px solid;
            padding: 10px;
        }

        .rowu-1 {
            content: "";
            width: 100%;
            display: table;
            clear: both;
            border: 1px solid;
            padding: 10px;
            padding-bottom: 100px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        td,
        th {
            border: 1px solid;
            padding: 4px;
        }

        .text-center {
            text-align: center;
        }

        .underline {
            text-decoration: underline;
        }

        .bg-secondary {
            background-color: #e6e6e6;
        }

        .bg-secondary2 {
            background-color: #9fa5a6;
        }
    </style>
</head>

<body>
    <div class="page-break">
        <?php foreach ($isi as $row) { ?>
            <div class="text-center">
                <h1>Hasil Laporan Pelaksanaan Security Assesment <?php echo $row->lokasi ?></h1>
                <div class="text-center">
                    <img style="width: 400px; height: auto; margin-top: 100px; margin-bottom: 100px;" src="<?= base_url('assets/dist/img/forApps/icons2.png') ?>">
                </div>
                <div>
                    <h2>PT SIGAP PRIMA ASTREA</h2>
                    <p>
                        Gd. Koperasi Astra Lantai 6, Jl. A. Yani No.66 RW.3,
                        <br>
                        Cempaka Putih Timur, Kec. Cempaka Putih, Jakarta Pusat 10510
                        <br>
                        T : (021) 2124-2020 ext. 651 | M : 0821-2972-2323
                        <br>
                        website: www.sigap.com
                    </p>
                </div>
            </div>
        <?php } ?>
    </div>
    <div class="page-break">
        <?php foreach ($isi as $row) { ?>
            <div>
                <img style="float:left; width: 200px; height: auto; padding-top: 30px;" src="<?= base_url('assets/dist/img/forApps/sigap-logo.png') ?>" alt="">
                <h1 class="text-center">Form Pelaksanaan Security Assesment</h1>
                <!-- <hr> -->
                <div class="rowu-1">
                    <div class="row">
                        <div class="col">
                            Pemilihan User
                        </div>
                        <div class="col">
                            : <b><?php echo $row->pemilihan_user ?></b>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            Nama PIC Presales
                        </div>
                        <div class="col">
                            : <b><?php echo $row->npp ?></b>
                        </div>
                        <div class="col0">
                            Lokasi
                        </div>
                        <div class="coln">
                            : <b><?php echo $row->lokasi ?></b>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            Nama PIC Sales
                        </div>
                        <div class="col">
                            : <b><?php echo $row->nps ?></b>
                        </div>
                        <div class="col0">
                            Sublokasi
                        </div>
                        <div class="coln">
                            : <b><?php echo $row->sub_lokasi ?></b>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            Nama PIC User
                        </div>
                        <div class="col">
                            : <b><?php echo $row->nama_user ?></b>
                        </div>
                        <div class="col0">
                            Luas Wilayah
                        </div>
                        <div class="coln">
                            : <b><?php echo $row->luas_wilayah ?></b>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            Tanggal Dibuat
                        </div>
                        <div class="col">
                            : <b><?php echo date('d F Y H:i:s', strtotime($row->created_date)) ?></b>
                        </div>
                        <div class="col0">
                            Tanggal Diubah
                        </div>
                        <div class="coln">
                            : <b><?php if ($row->modified_date == null) {
                                        echo '-';
                                    } else {
                                        echo date('d F Y H:i:s', strtotime($row->modified_date));
                                    } ?></b>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col3">
                            Kegiatan yang akan dilakukan:
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-1">
                            <b><?php echo $row->kegiatan_akan ?></b>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
    <div class="page-break">
        <div class="container">
            <img style=" float:left; width: 200px; height: auto;" src="<?= base_url('assets/dist/img/forApps/sigap-logo.png') ?>" alt="">
            <h1 style="text-align: center;">Form Survey Device</h1>
            <hr>
            <div class="text-center" style="margin-top: 0px;">
                <h1>Hasil Laporan Survey Device</h1>
            </div>
            <?php $no = 1;
            foreach ($isiDDetail as $row) { ?>
                <div class="row" style="margin-bottom: 10px;">
                    <div class="col0">
                        Created By
                    </div>
                    <div class="col4-5">
                        : <b><?php echo $row->nama_created ?></b>
                    </div>
                    <div class="col0">
                        Modified By
                    </div>
                    <div class="col4">
                        <?php if ($row->nama_modified == null) {
                            echo ': <b>' . '-' . '</b>';
                        } else {
                            echo ': <b>' . $row->nama_modified . '</b>';
                        } ?>
                    </div>
                </div>
                <div class="row" style="margin-bottom: 20px;">
                    <div class="col0">
                        Created Date
                    </div>
                    <div class="col4-5">
                        : <b><?php echo date('d F Y H:i:s', strtotime($row->created_date)) ?></b>
                    </div>
                    <div class="col0">
                        Modified Date
                    </div>
                    <div class="col4-5">
                        <?php if ($row->modified_date == null) {
                            echo ': <b>' . '-' . '</b>';
                        } else {
                            echo ': <b>' . date('d F Y H:i:s', strtotime($row->modified_date)) . '</b>';
                        } ?>
                    </div>
                </div>
                <div class="card-body">
                    <div class="rowu">
                        <h3 class="bg-secondary text-center" style="padding: 7px; border-radius: 8px;">A. CCTV</h3>
                        <div class="row">
                            <div class="col2">
                                Apakah Perusahaan sudah ada CCTV
                            </div>
                            <div class="col1">
                                : <b class="underline"><?php echo $row->sudah_ada_cctv ?></b>
                            </div>
                            <div class="col1">
                                Berapa Banyak
                            </div>
                            <div class="col1">
                                : <b class="underline"><?php echo $row->berapa_cctv ?></b>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col2"></div>
                            <div class="col1"></div>
                            <div class="col1">
                                Merk CCTV
                            </div>
                            <div class="col1">
                                : <b class="underline"><?php echo $row->merk_cctv ?></b>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col2"></div>
                            <div class="col1"></div>
                            <div class="col1">
                                Type CCTV
                            </div>
                            <div class="col1">
                                : <b class="underline"><?php echo $row->type_cctv ?></b>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col2">
                                Apabila CCTV sudah terpasang apakah perlu tambahan
                            </div>
                            <div class="col1">
                                : <b class="underline"><?php echo $row->tambahan_cctv ?></b>
                            </div>
                            <div class="col1">
                                Berapa Banyak
                            </div>
                            <div class="col1">
                                : <b class="underline"><?php echo $row->berapa_tambahan_cctv ?></b>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col2"></div>
                            <div class="col1"></div>
                            <div class="col1">
                                Catatan Tambahan
                            </div>
                            <div class="col1">
                                : <b class="underline"><?php echo $row->catatan_1 ?></b>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col2">
                                Apakah selama ini CCTV mengalami kendala
                            </div>
                            <div class="col1">
                                : <b class="underline"><?php echo $row->kendala_cctv ?></b>
                            </div>
                            <div class="col1">
                                Berapa Banyak
                            </div>
                            <div class="col1">
                                : <b class="underline"><?php echo $row->berapa_sering_kendala ?></b>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col2"></div>
                            <div class="col1"></div>
                            <div class="col1">
                                Catatan Tambahan
                            </div>
                            <div class="col1">
                                : <b class="underline"><?php echo $row->catatan_2 ?></b>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col2">
                                Apakah CCTV di monitoring oleh petugas keamanan
                            </div>
                            <div class="col1">
                                : <b class="underline"><?php echo $row->monitoring_cctv ?></b>
                            </div>
                            <div class="col1">
                                Jumlah Petugas
                            </div>
                            <div class="col1">
                                : <b class="underline"><?php echo $row->jumlah_petugas ?></b>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col2"></div>
                            <div class="col1"></div>
                            <div class="col1">
                                Jumlah Layar Monitoring
                            </div>
                            <div class="col1">
                                : <b class="underline"><?php echo $row->jumlah_monitor ?></b>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col2"></div>
                            <div class="col1"></div>
                            <div class="col1">
                                Catatan Tambahan
                            </div>
                            <div class="col1">
                                : <b class="underline"><?php echo $row->catatan_3 ?></b>
                            </div>
                        </div>
                    </div>
                    <div class="rowu">
                        <h3 class="bg-secondary text-center" style="padding: 7px; border-radius: 8px;">Fitur Khusus</h3>
                        <div class="row">
                            <div class="col2">
                                Apakah CCTV sudah berfungsi sebagai pengukur suhu tubuh
                            </div>
                            <div class="col1">
                                : <b class="underline"><?php echo $row->cctv_suhu_tubuh ?></b>
                            </div>
                            <div class="col1">
                                Apakah CCTV sudah bergungsi sebagai face recognize
                            </div>
                            <div class="col1">
                                : <b class="underline"><?php echo $row->cctv_face_recognize ?></b>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col2">
                                Apakah CCTV sudah berfungsi sebagai penghitung orang
                            </div>
                            <div class="col1">
                                : <b class="underline"><?php echo $row->cctv_hitung_orang ?></b>
                            </div>
                            <div class="col1">
                                Apakah CCTV sudah bergungsi sebagai line crossing / alarm
                            </div>
                            <div class="col1">
                                : <b class="underline"><?php echo $row->cctv_line_crossing ?></b>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col2">
                                Apakah CCTV sudah berfungsi sebagai heat map
                            </div>
                            <div class="col1">
                                : <b class="underline"><?php echo $row->cctv_heat_map ?></b>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col2">
                                Catatan Tambahan
                            </div>
                            <div class="col3">
                                : <b class="underline"><?php echo $row->catatan_4 ?></b>
                            </div>
                        </div>
                    </div>
                    <div class="rowu" style="margin-top: 10px;">
                        <h3 class="bg-secondary text-center" style="padding: 7px; border-radius: 8px;">B. Access Control</h3>
                        <div class="row">
                            <div class="col2">
                                Apakah Perusahaan sudah memiliki Access control
                            </div>
                            <div class="col1">
                                : <b class="underline"><?php echo $row->memiliki_access_control ?></b>
                            </div>
                            <div class="col1">
                                Berapa Banyak
                            </div>
                            <div class="col1">
                                : <b class="underline"><?php echo $row->berapa_access ?></b>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col2"></div>
                            <div class="col1"></div>
                            <div class="col1">
                                Merk Access
                            </div>
                            <div class="col1">
                                : <b class="underline"><?php echo $row->merk_access ?></b>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col2">
                                Apakah access control yang sudah terpasang terintegrasi dengan sistem lain
                            </div>
                            <div class="col1">
                                : <b class="underline"><?php echo $row->access_terintegrasi ?></b>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col2"></div>
                            <div class="col1"></div>
                            <div class="col1">
                                Catatan
                            </div>
                            <div class="col1">
                                : <b class="underline"><?php echo $row->catatan_5 ?></b>
                            </div>
                        </div>
                        <h3 class="bg-secondary text-center" style="padding: 7px; border-radius: 8px;">Fitur Khusus</h3>
                        <div class="row">
                            <div class="col2">
                                Saat ini access control digunakan dengan
                            </div>
                            <div class="col1"></div>
                            <div class="col3">
                                : <b class="underline"><?php echo $row->access_digunakan_dengan ?></b>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col2">
                                Catatan
                            </div>
                            <div class="col1"></div>
                            <div class="col3">
                                : <b class="underline"><?php echo $row->catatan_6 ?></b>
                            </div>
                        </div>
                    </div>
                    <div class="rowu" style="margin-top: 10px;">
                        <h3 class="bg-secondary text-center" style="padding: 7px; border-radius: 8px;">C. Teknis Pemasangan</h3>
                        <div class="row">
                            <div class="col2">
                                Topologi jaringan sudah fiber optik
                            </div>
                            <div class="col1"></div>
                            <div class="col1">
                                : <b class="underline"><?php echo $row->topologi_fibel_optik ?></b>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col2">
                                Apakah jaringan sudah berdiri sendiri atau tidak
                            </div>
                            <div class="col1"></div>
                            <div class="col1">
                                : <b class="underline"><?php echo $row->jaringan_berdiri_sendiri ?></b>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col2">
                                Catatan & Summary keseluruhan
                            </div>
                            <div class="col1"></div>
                            <div class="col1">
                                : <b class="underline"><?php echo $row->catatan_7 ?></b>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                </div>
        </div>
</body>

</html>
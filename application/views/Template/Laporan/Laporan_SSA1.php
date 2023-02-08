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
    <!-- SSA1 -->
    <div class="page-break">
        <div class="container">
            <div class="page-break">
                <img style=" float:left; width: 200px; height: auto;" src="<?= base_url('assets/dist/img/forApps/sigap-logo.png') ?>" alt="">
                <h1 style="text-align: center;">Form SSA1</h1>
                <hr>
                <div class="text-center" style="margin-top: 0px;">
                    <h1>Hasil Laporan SSA1</h1>
                </div>
                <?php $no = 1;
                foreach ($isiS1Detail as $row) { ?>
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
                    <div class="rowu">
                        <h3 class="bg-secondary text-center" style="padding: 7px; border-radius: 8px;">A. Background Perusahaan</h3>
                        <div class="row">
                            <div class="col1">
                                Nama Perusahaan
                            </div>
                            <div class="col1">
                                : <b class="underline"><?php echo $row->nama_perusahaan ?></b>
                            </div>
                            <div class="col1">
                                Jumlah MP
                            </div>
                            <div class="col1">
                                : <b class="underline"><?php echo $row->jumlah_mp ?></b>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col1">
                                Alamat Perusahaan
                            </div>
                            <!-- <div class="col1">
                            </div> -->
                            <div class="col5">
                                : <b class="underline"><?php echo $row->alamat_perusahaan ?></b>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col1">
                            </div>
                            <div class="col1" style="margin-left: 10px;">
                                Kelurahan
                            </div>
                            <div class="col2">
                                : <b class="underline"><?php echo $row->kelurahan ?></b>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col1">
                            </div>
                            <div class="col1" style="margin-left: 10px;">
                                Kecamatan
                            </div>
                            <div class="col1">
                                : <b class="underline"><?php echo $row->kecamatan ?></b>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col1">
                            </div>
                            <div class="col1" style="margin-left: 10px;">
                                Kode Pos
                            </div>
                            <div class="col1">
                                : <b class="underline"><?php echo $row->kode_pos ?></b>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col1">
                                Nama PIC User
                            </div>
                            <div class="col1">
                                : <b class="underline"><?php echo $row->nama_pic_user ?></b>
                            </div>
                            <div class="col1">
                                Nomor Telephone
                            </div>
                            <div class="col1">
                                : <b class="underline"><?php echo $row->no_telp ?></b>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col1">
                                Jenis Usaha
                            </div>
                            <div class="col1">
                                : <b class="underline"><?php echo $row->jenis_usaha ?></b>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col1">
                                Nama ARH
                            </div>
                            <div class="col1">
                                : <b class="underline"><?php echo $row->nama_arh ?></b>
                            </div>
                        </div>
                    </div>
                    <div class="rowu">
                        <h3 class="bg-secondary text-center" style="padding: 7px; border-radius: 8px;">B. Man Power</h3>
                        <div class="row">
                            <div class="col1">
                                Pola Jaga
                            </div>
                            <div class="col1">
                                : <b class="underline"><?php echo $row->pola_jaga ?></b>
                            </div>
                            <div class="col2">
                                Kartu Tanda Anggota
                            </div>
                            <div class="col1">
                                : <b class="underline"><?php echo $row->kta ?></b>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col1">
                                Jenis Seragam
                            </div>
                            <div class="col1">
                                : <b class="underline"><?php echo $row->jenis_seragam ?></b>
                            </div>
                            <div class="col2">
                                Pendidikan Anggota
                            </div>
                            <div class="col1">
                                : <b class="underline"><?php echo $row->pendidikan_anggota ?></b>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col1">
                            </div>
                            <div class="col1">
                            </div>
                            <div class="col2">
                                Perlengkapan
                            </div>
                            <div class="col1">
                                : <b class="underline"><?php echo $row->perlengkapan ?></b>
                            </div>
                        </div><br>
                        <div class="row">
                            <div style="padding: 5px; border: 1px solid;">
                                <div class="text-center" style="margin-bottom: 5px;">Catatan:</div>
                                <b><?php echo $row->catatan_b ?></b>
                            </div>
                        </div>
                    </div>
                    <div class="rowu">
                        <h3 class="bg-secondary text-center" style="padding: 7px; border-radius: 8px;">C. Man Power</h3>
                        <div class="row">
                            <div class="col1">
                                Pagar
                            </div>
                            <div class="col1">
                                : <b class="underline"><?php echo $row->pagar ?></b>
                            </div>
                            <div class="col1">
                                Gate
                            </div>
                            <div class="col1">
                                : <b class="underline"><?php echo $row->gate ?></b>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col1">
                                Luas Area
                            </div>
                            <div class="col1">
                                : <b class="underline"><?php echo $row->luas_area ?></b>
                            </div>
                            <div class="col1">
                                Penerangan
                            </div>
                            <div class="col1">
                                : <b class="underline"><?php echo $row->penerangan ?></b>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div style="padding: 5px; border: 1px solid;">
                                <div class="text-center" style="margin-bottom: 5px;">Catatan:</div>
                                <b><?php echo $row->catatan_c ?></b>
                            </div>
                        </div>
                    </div>
                    <div class="rowu">
                        <h3 class="bg-secondary text-center" style="padding: 7px; border-radius: 8px;">D. Sarana Penunjang</h3>
                        <div class="row">
                            <div class="col1">
                                Guard Tour
                            </div>
                            <div class="col0">
                                : <b class="underline"><?php echo $row->guard_tour ?></b>
                            </div>
                            <div class="col0">
                                Total
                            </div>
                            <div class="col0">
                                : <b class="underline"><?php echo $row->total_1 ?></b>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col1">
                                Handy Talky
                            </div>
                            <div class="col0">
                                : <b class="underline"><?php echo $row->handy_talky ?></b>
                            </div>
                            <div class="col0">
                                Total
                            </div>
                            <div class="col0">
                                : <b class="underline"><?php echo $row->total_2 ?></b>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col1">
                                Rompi
                            </div>
                            <div class="col0">
                                : <b class="underline"><?php echo $row->rompi ?></b>
                            </div>
                            <div class="col0">
                                Total
                            </div>
                            <div class="col0">
                                : <b class="underline"><?php echo $row->total_3 ?></b>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col1">
                                Lampu Lalin
                            </div>
                            <div class="col0">
                                : <b class="underline"><?php echo $row->lampu_lalin ?></b>
                            </div>
                            <div class="col0">
                                Total
                            </div>
                            <div class="col0">
                                : <b class="underline"><?php echo $row->total_4 ?></b>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col1">
                                Metal Detector
                            </div>
                            <div class="col0">
                                : <b class="underline"><?php echo $row->metal_detector ?></b>
                            </div>
                            <div class="col0">
                                Total
                            </div>
                            <div class="col0">
                                : <b class="underline"><?php echo $row->total_5 ?></b>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col1">
                                Rambu Stop
                            </div>
                            <div class="col0">
                                : <b class="underline"><?php echo $row->rambu_stop ?></b>
                            </div>
                            <div class="col0">
                                Total
                            </div>
                            <div class="col0">
                                : <b class="underline"><?php echo $row->total_6 ?></b>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col1">
                                Mirror
                            </div>
                            <div class="col0">
                                : <b class="underline"><?php echo $row->mirror ?></b>
                            </div>
                            <div class="col0">
                                Total
                            </div>
                            <div class="col0">
                                : <b class="underline"><?php echo $row->total_7 ?></b>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col1">
                                ATK
                            </div>
                            <div class="col0">
                                : <b class="underline"><?php echo $row->atk ?></b>
                            </div>
                            <div class="col0">
                                Deskripsi
                            </div>
                            <div class="col0">
                                : <b class="underline"><?php if ($row->deskripsi_atk != NULL) {
                                                            echo $row->deskripsi_atk;
                                                        } else {
                                                            echo 0;
                                                        } ?></b>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div style="padding: 5px; border: 1px solid;">
                                <div class="text-center" style="margin-bottom: 5px;">Catatan:</div>
                                <b><?php echo $row->catatan_d ?></b>
                            </div>
                        </div>
                    </div>
                    <div class="rowu">
                        <h3 class="bg-secondary text-center" style="padding: 7px; border-radius: 8px;">E. Regulasi dan Kebijakan</h3>
                        <div class="row">
                            <div class="col1">
                                UMP
                            </div>
                            <div class="col1">
                                : <b class="underline"><?php echo $row->ump ?></b>
                            </div>
                            <div class="col1">
                                BPJS
                            </div>
                            <div class="col1">
                                : <b class="underline"><?php echo $row->bpjs ?></b>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div style="padding: 5px; border: 1px solid;">
                                <div class="text-center" style="margin-bottom: 5px;">Catatan:</div>
                                <b><?php echo $row->catatan_e ?></b>
                            </div>
                        </div>
                    </div>
                    <div class="rowu">
                        <h3 class="bg-secondary text-center" style="padding: 7px; border-radius: 8px;">F. Device</h3>
                        <div class="row">
                            <div class="col1">
                                CCTV
                            </div>
                            <div class="col0">
                                : <b class="underline"><?php echo $row->f_cctv ?></b>
                            </div>
                            <div class="col0">
                                Total
                            </div>
                            <div class="col0">
                                : <b class="underline"><?php echo $row->total_1_a ?></b>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col1">
                                Access Control
                            </div>
                            <div class="col0">
                                : <b class="underline"><?php echo $row->f_access ?></b>
                            </div>
                            <div class="col0">
                                Total
                            </div>
                            <div class="col0">
                                : <b class="underline"><?php echo $row->total_1_b ?></b>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col1">
                                Barrier
                            </div>
                            <div class="col0">
                                : <b class="underline"><?php echo $row->f_barrier ?></b>
                            </div>
                            <div class="col0">
                                Total
                            </div>
                            <div class="col0">
                                : <b class="underline"><?php echo $row->total_1_c ?></b>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col1">
                                VMS
                            </div>
                            <div class="col0">
                                : <b class="underline"><?php echo $row->f_vms ?></b>
                            </div>
                            <div class="col0">
                                Total
                            </div>
                            <div class="col0">
                                : <b class="underline"><?php echo $row->total_1_d ?></b>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div style="padding: 5px; border: 1px solid;">
                                <div class="text-center" style="margin-bottom: 5px;">Catatan:</div>
                                <b><?php echo $row->catatan_f ?></b>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</body>

</html>
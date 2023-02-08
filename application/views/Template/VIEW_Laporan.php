<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGAP PRIMA ASTREA</title>

    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/dist/img/forApps/sigap-icon.png">
    <style>
        .wrapper {
            max-width: 90%;
            margin-left: auto;
            margin-right: auto;
        }

        /* A media query for a large screen */
        @media (min-width: 1170px) {
            .wrapper {
                max-width: 1170px;
            }
        }

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

        .page-break2 {
            width: 100%;
            height: 40%;
        }

        .col {
            float: left;
            width: 23%;
            padding: 5px;
            /* height: 300px; */
            /* Should be removed. Only for demonstration */
        }

        .coln {
            float: left;
            width: 35%;
            padding: 5px;
        }

        .col-1 {
            float: left;
            width: 23%;
            padding: 1px;
            padding-left: 5px;
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

        .col5 {
            float: left;
            width: 65%;
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
            <img style=" float:left; width: 200px; height: auto; padding-top: 15px;" src="<?= base_url('assets/dist/img/forApps/sigap-logo.png') ?>" alt="">
            <h1 style="text-align: center;">Form Wawancara</h1>
            <hr>
            <?php $no = 1;
            foreach ($nama as $row) { ?>
                <div class="row">
                    <div class="col">
                        Diwawancarai Oleh
                    </div>
                    <div class="col">
                        : <?php echo $row->diwawancarai ?>
                    </div>
                    <div class="col">
                        Diwawancara
                    </div>
                    <div class="col">
                        : <?php echo $row->diwawancara ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        Jabatan
                    </div>
                    <div class="col">
                        : <?php echo $row->jabatan1 ?>
                    </div>
                    <div class="col">
                        Jabatan
                    </div>
                    <div class="col">
                        : <?php echo $row->jabatan2 ?>
                    </div>
                </div>
            <?php } ?>
            <div class="text-center" style="margin-top: 60px;">
                <?php if ($row->foto_wawancara == null) { ?>
                    <div class="text-center mt-2">
                        <img src="<?php echo base_url('assets/dist/img/forApps/no-image.png') ?>" width="250px" class="img-center img-thumbnail rounded">
                    </div>
                <?php } else { ?>
                    <a href="" data-toggle="modal" data-target="#gambarWawancaraModal<?php echo $row->id_wawancara ?>">
                        <img src="<?php echo base_url('assets/img/wawancara/' . $row->foto_wawancara) ?>" width="350px" class="img-center img-thumbnail rounded">
                    </a>
                <?php } ?>
                <h2>Hasil Laporan Wawancara</h2>
            </div>
            <table>
                <thead>
                    <tr class="text-center">
                        <th>No</th>
                        <th>Pertanyaan</th>
                        <th>Proses</th>
                    </tr>
                </thead>
                <?php $no = 1;
                foreach ($isiWDetail as $row_isi) { ?>
                    <tbody>
                        <tr>
                            <td class="text-center"><?php echo $no++; ?></td>
                            <td><?php echo $row_isi->pertanyaan ?></td>
                            <td><?php echo $row_isi->proses ?></td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <p class="text-center" style="padding: 0; margin: 0;">Jawaban:</p>
                                <h3 style="padding-left: 2px; margin: 2px;"><?php echo $row_isi->jawaban ?></h1>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <div class="row">
                                    <div class="col">
                                        Created By
                                    </div>
                                    <div class="col">
                                        Created Date
                                    </div>
                                    <div class="col">
                                        Modified By
                                    </div>
                                    <div class="col">
                                        Modified Date
                                    </div>
                                </div>
                                <div class="row" style="font-weight: bold; font-size: 13px;">
                                    <div class="col">
                                        <?php echo $row_isi->created_nama ?>
                                    </div>
                                    <div class="col">
                                        <?php if ($row_isi->created_date == null) { ?>
                                            <b class="text-center">-</b>
                                        <?php } else {
                                            echo date('d F Y H:i:s', strtotime($row_isi->created_date));
                                        } ?>
                                    </div>
                                    <div class="col">
                                        <?php if ($row_isi->modified_nama == null) { ?>
                                            <b class="text-center">-</b>
                                        <?php } else {
                                            echo $row_isi->modified_nama;
                                        } ?>
                                    </div>
                                    <div class="col">
                                        <?php if ($row_isi->modified_date == null) { ?>
                                            <b class="text-center">-</b>
                                        <?php } else {
                                            echo date('d F Y H:i:s', strtotime($row_isi->modified_date));
                                        } ?>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                <?php } ?>
            </table>
            <!-- </form> -->
        </div>
    </div>
    <!-- SSA1 -->
    <div class="page-break">
        <div class="container">
            <div class="page-break">
                <img style=" float:left; width: 200px; height: auto; padding-top: 15px;" src="<?= base_url('assets/dist/img/forApps/sigap-logo.png') ?>" alt="">
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
    <!-- Ceklis -->
    <div class="page-break">
        <div class="container">
            <div class="page-break">
                <img style=" float:left; width: 200px; height: auto; padding-top: 15px;" src="<?= base_url('assets/dist/img/forApps/sigap-logo.png') ?>" alt="">
                <h1 style="text-align: center;">Form Ceklis</h1>
                <hr>
                <div class="text-center" style="margin-top: 0px;">
                    <h1>Hasil Laporan Ceklis</h1>
                </div>
                <?php $no = 1;
                foreach ($isiCDetail as $row) { ?>
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
                    <table class="table table-bordered">
                        <thead>
                            <tr class="text-center">
                                <th rowspan="2" style="vertical-align: middle;">No</th>
                                <th colspan="2" rowspan="2" style="vertical-align: middle;">Assesment Requirements</th>
                                <th colspan="2">Kondisi</th>
                                <th rowspan="2" style="vertical-align: middle;">Keterangan</th>
                            </tr>
                            <tr>
                                <th>Ada</th>
                                <th>Tidak</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $r1 = $this->db->query("SELECT * from ms_kategori_ceklis a LEFT JOIN ms_pertanyaan_ceklis b ON a.id_kategori = b.id_kategori LEFT JOIN ms_jawaban_ceklis c ON b.id_pertanyaan_ceklis = c.id_pertanyaan_ceklis LEFT JOIN tbl_cekliss d ON d.id_ceklis = c.id_ceklis WHERE d.id_permintaan = $row->id_permintaan AND c.id_ceklis = $row->id_ceklis")->result_array();
                            $no = 1;
                            foreach ($r1 as $r1) {
                            ?>
                                <input type="hidden" name="id_permintaan" value="<?php echo $r1['id_permintaan'] ?>">
                                <tr>
                                    <?php
                                    $r2 = $this->db->query("SELECT * from ms_jawaban_ceklis a LEFT JOIN ms_pertanyaan_ceklis b ON a.id_pertanyaan_ceklis = b.id_pertanyaan_ceklis LEFT JOIN ms_kategori_ceklis c ON c.id_kategori = b.id_kategori WHERE a.id_jawaban_ceklis = '$r1[id_jawaban_ceklis]' and c.id_kategori = '$r1[id_kategori]'");
                                    $total_r2 = $r2->num_rows();
                                    $r3 = $r2->result_array();
                                    ?>
                                    <td rowspan="<?php echo $total_r2 ?>" style="vertical-align: middle;" class="text-center"><?php echo $no; ?></td>
                                    <td rowspan="<?php echo $total_r2 ?>" style="vertical-align: middle;" class="text-center w-25"><?php echo $r1['kategori_ceklis'] ?></td>
                                    <?php foreach ($r3 as $r3) { ?>
                                        <td style="vertical-align: middle;"><?php echo $r3['pertanyaan_ceklis'] ?></td>
                                        <td style="vertical-align: middle;" class="text-center">
                                            <input type="radio" class="form-control-sm" name="kondisi[]<?php echo $r3['id_pertanyaan_ceklis'] ?>" value="Ada" <?php echo $r3['kondisi'] == 'Ada' ? 'checked' : ''; ?> disabled>
                                        </td>
                                        <td style="vertical-align: middle;" class="text-center">
                                            <input type="radio" class="form-control-sm" name="kondisi[]<?php echo $r3['id_pertanyaan_ceklis'] ?>" value="Tidak" <?php echo $r3['kondisi'] == 'Tidak' ? 'checked' : ''; ?> disabled>
                                        </td>
                                        <td class="text-center">
                                            <b><?php echo $r3['keterangan'] ?> </b>
                                        </td>
                                </tr>
                            <?php } ?>
                        <?php $no++;
                            } ?>
                        </tbody>
                    </table>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- SSA2 -->
    <div class="page-break">
        <div class="container">
            <img style=" float:left; width: 200px; height: auto; padding-top: 15px;" src="<?= base_url('assets/dist/img/forApps/sigap-logo.png') ?>" alt="">
            <h1 style="text-align: center;">Form SSA2</h1>
            <hr>
            <div class="text-center" style="margin-top: 0px;">
                <h1>Hasil Laporan SSA2</h1>
            </div>
            <?php foreach ($isiS2Detail as $row) { ?>
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
                <?php $no = 1;
                foreach ($isi_detail_S2 as $row_detail)
                    if ($row_detail->id_ssa2 == $row->id_ssa2) { ?>
                    <div class="rowu">
                        <h2 class="bg-secondary text-center" style="padding: 7px; border-radius: 8px;">POS <?php echo $no++ ?></h2>
                        <h3 class="bg-secondary2 text-center" style="padding: 7px; border-radius: 8px;">POS</h3>
                        <div class="row">
                            <div class="col2">
                                Nama Pos
                            </div>
                            <div class="col1">
                                : <b class="underline"><?php echo $row_detail->nama_pos ?></b>
                            </div>
                            <div class="col2">
                                Total Keseluruhan Anggota
                            </div>
                            <div class="col1">
                                : <b class="underline"><?php echo $row_detail->total_anggota ?></b>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col2">
                                Jam Kerja
                            </div>
                            <div class="col1">
                                : <b class="underline"><?php echo $row_detail->jam_kerja ?></b>
                            </div>
                            <div class="col2">
                                Lokasi
                            </div>
                            <div class="col1">
                                : <b class="underline"><?php echo $row_detail->lokasi_kerja ?></b>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col2">
                                Foto Pos
                            </div>
                            <div class="col3">
                                <?php if ($row_detail->foto_ssa2 == null) { ?>
                                    <div class="text-center mt-2">
                                        <img src="<?php echo base_url('assets/dist/img/forApps/no-image.png') ?>" width="350px" class="img-center img-thumbnail rounded">
                                    </div>
                                <?php } else { ?>
                                    <img src="<?php echo base_url('assets/img/ssa2/' . $row_detail->foto_ssa2) ?>" width="250px" class="img-center img-thumbnail rounded">
                                <?php } ?>
                            </div>
                        </div>
                        <h3 class="bg-secondary2 text-center" style="padding: 7px; border-radius: 8px;">Analisa Resiko</h3>
                        <div class="row">
                            <div class="col4">
                                <div style="padding: 5px; border: 1px solid;">
                                    <div class="text-center" style="margin-bottom: 5px;">Kerawanan:</div>
                                    <b><?php echo $row_detail->kerawanan ?></b>
                                </div>
                            </div>
                            <div class="col4">
                                <div style="padding: 5px; border: 1px solid;">
                                    <div class="text-center" style="margin-bottom: 5px;">Ancaman:</div>
                                    <b><?php echo $row_detail->ancaman ?></b>
                                </div>
                            </div>
                        </div>
                        <h3 class="bg-secondary2 text-center" style="padding: 7px; border-radius: 8px;">Fungsi dan Job Desk</h3>
                        <div class="row">
                            <div style="padding: 5px; border: 1px solid; height: auto;">
                                <b><?php echo $row_detail->fungsi_job_desk ?></b>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            <?php } ?>
        </div>
    </div>

    <!-- Survey Device -->
    <div class="page-break">
        <div class="container">
            <div class="page-break">
                <img style=" float:left; width: 200px; height: auto; padding-top: 15px;" src="<?= base_url('assets/dist/img/forApps/sigap-logo.png') ?>" alt="">
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
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <!-- CCTV -->
    <div class="page-break">
        <div class="container">
            <div class="page-break">
                <img style=" float:left; width: 200px; height: auto; padding-top: 15px;" src="<?= base_url('assets/dist/img/forApps/sigap-logo.png') ?>" alt="">
                <h1 style="text-align: center;">Form CCTV</h1>
                <hr>
                <div class="text-center" style="margin-top: 0px;">
                    <h1>Hasil Laporan CCTV</h1>
                </div>
                <?php $no = 1;
                foreach ($isiCtDetail as $row) { ?>
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
                    <?php foreach ($isi_detail_Ct as $row_detail)
                        if ($row_detail->id_cctv == $row->id_cctv) { ?>
                        <div class="rowu-0">
                            <div class="row page-break2">
                                <div class="row text-center mt-5" style="margin-top: 30px;">
                                    <h2>CCTV <?php echo $no++ ?></h2>
                                </div>
                                <div class="row">
                                    <div class="col3">Lokasi CCTV</div>
                                    <div class="col3">Kondisi CCTV</div>
                                </div>
                                <div class="row">
                                    <div class="col3"><b class="underline"><?php echo $row_detail->lokasi_cctv ?></b></div>
                                    <div class="col3"><b class="underline"><?php echo $row_detail->kondisi_cctv ?></b></div>
                                </div>
                                <div class="row">
                                    <div class="col3">View Tampak Depan</div>
                                    <div class="col3">View Tampak Belakang</div>
                                </div>
                                <div class="row">
                                    <div class="col3">
                                        <?php if ($row_detail->view_depan == null) { ?>
                                            <div class="text-center mt-2">
                                                <img src="<?php echo base_url('assets/img/img/forApps/no-image.png') ?>" width="350px" class="img-center img-thumbnail rounded">
                                            </div>
                                        <?php } else { ?>
                                            <img src="<?php echo base_url('assets/img/cctv/depan/' . $row_detail->view_depan) ?>" width="250px" height="200px" class="img-center img-thumbnail rounded">
                                        <?php } ?>
                                    </div>
                                    <div class="col3">
                                        <?php if ($row_detail->view_belakang == null) { ?>
                                            <div class="text-center mt-2">
                                                <img src="<?php echo base_url('assets/img/img/forApps/no-image.png') ?>" width="350px" class="img-center img-thumbnail rounded">
                                            </div>
                                        <?php } else { ?>
                                            <img src="<?php echo base_url('assets/img/cctv/belakang/' . $row_detail->view_belakang) ?>" width="250px" height="200px" class="img-center img-thumbnail rounded">
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                <?php } ?>
            </div>
        </div>
    </div>
</body>

</html>
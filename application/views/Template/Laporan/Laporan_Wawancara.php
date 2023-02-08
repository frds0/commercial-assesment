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
                <!-- <?php if ($row->foto_wawancara == null) { ?>
                    <div class="text-center mt-2">
                        <img src="<?php echo base_url('assets/dist/img/forApps/no-image.png') ?>" width="250px" class="img-center img-thumbnail rounded">
                    </div>
                <?php } else { ?> -->
                <a href="" data-toggle="modal" data-target="#gambarWawancaraModal<?php echo $row->id_wawancara ?>">
                    <img src="<?php echo base_url('assets/img/wawancara/' . $row->foto_wawancara) ?>" width="350px" class="img-center img-thumbnail rounded">
                </a>
                <!-- <?php } ?> -->
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
                                <h2 style="padding-left: 2px; margin: 2px;"><?php echo $row_isi->jawaban ?></h1>
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
                                        <?php echo $row_isi->created_date ?>
                                    </div>
                                    <div class="col">
                                        <?php if ($row_isi->modified_nama == null) { ?>
                                            -
                                        <?php } else {
                                            echo $row_isi->modified_nama;
                                        } ?>
                                    </div>
                                    <div class="col">
                                        <?php if ($row_isi->modified_date == null) { ?>
                                            -
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
</body>

</html>
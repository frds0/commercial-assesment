<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo site_url('Presales/CTR_Presales') ?>">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->

        <!-- Main content -->

        <!-- Button trigger modal -->
        <div class="container-fluid mt-4">
            <?php echo $this->session->flashdata('massage'); ?>
            <?php echo $this->session->flashdata('pesan'); ?>
            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flashdata'); ?>"></div>
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Daftar Permintaan</h4>
                </div>
                <!-- /.card-header -->
                <div class="card-body" style="overflow: auto;">
                    <!-- <div class="float-right">
                        <p>Total Assignment: <b><?php echo $assignment ?></b></p>
                    </div> -->
                    <span>
                        <a href="#" onclick="TampilDaftar()" class="btn btn-primary mb-3 right btn-sm"><i class="fas fa-plus"></i> Tambah Data</a>
                    </span>
                    <table id="example2" class="table table1 table-bordered">
                        <thead>
                            <tr class="text-center">
                                <th style="width: 10px; vertical-align: middle;">#</th>
                                <th style="vertical-align: middle;">Nama Perusahaan</th>
                                <th style="vertical-align: middle;">Pemilihan User</th>
                                <th style="vertical-align: middle;">PIC Sales</th>
                                <th style="vertical-align: middle;">Nama ARH</th>
                                <th style="width: 90px; vertical-align: middle;">Status</th>
                                <th style="width: 90px; vertical-align: middle;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($isi as $row) if ($row->status == "Menunggu Assignment" or $row->status == "Pending") { ?>
                                <tr>
                                    <td class="text-center" style="vertical-align: middle;"><?php echo $no++; ?></td>
                                    <td>
                                        Assessment <?php echo $row->lokasi ?>
                                    </td>
                                    <td style="vertical-align: middle;">
                                        <?php echo $row->pemilihan_user ?>
                                    </td>
                                    <td style="vertical-align: middle;"><?php echo $row->nps ?></td>
                                    <td style="vertical-align: middle;"><?php echo $row->nama_arh ?></td>
                                    <td style="width: 200px; vertical-align: middle;">
                                        <?php switch ($row->status) {
                                            case 'Declined':
                                                echo 'Declined <i class="fas fa-times text-danger"></i>';
                                                break;
                                            case 'Pending':
                                                echo 'Segera Diproses <i class="fas fa-check"></i>';
                                                break;
                                            case 'On Progress':
                                                echo 'OnProgress <i class="fas fa-hourglass-half text-secondary"></i>';
                                                break;
                                            case 'Approved':
                                                echo 'Approved <i class="fas fa-check text-success"></i>';
                                                break;
                                            case 'Revisi':
                                                echo 'Revisi <i class="fas fa-times text-warning"></i>';
                                                break;
                                            case 'Menunggu Assignment':
                                                echo 'Menunggu Assignment <i class="fas fa-hourglass-half"></i>';
                                                break;
                                            case 'Menunggu Approval':
                                                echo 'Menunggu Approval <i class="fas fa-hourglass-half"></i>';
                                                break;
                                        } ?></td>
                                    <td class=" text-center" style="vertical-align: middle;">
                                        <?php if ($row->status == 'Menunggu Assignment') { ?>
                                            <a class="btn btn-warning btn-sm text-center" data-toggle="modal" data-target="#permintaanModal<?php echo $row->id_permintaan; ?>" title="Edit Data">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                        <?php } else { ?>
                                            -
                                        <?php } ?>
                                        <!-- <a class="btn btn-warning btn-sm text-center" data-toggle="modal" data-target="#permintaanModal<?php echo $row->id_permintaan; ?>" href="#permintaanModal<?php echo $row->id_permintaan; ?>">
                                        Edit&nbsp;Assesment
                                    </a> -->
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <div class="card" style="display: none;" id="Show_Daftar">
                <div class="card-header d-flex align-items-center">
                    <h4 class="card-title">Pendaftaran Security Assessment</h4>
                </div>
                <div class="card-body">
                    <form class="form-horizontal" name="form1" action="<?php echo site_url('Presales/CTR_Presales/SimpanDaftar') ?>" method="POST">
                        <div class="row">
                            <div class="col-sm-6 form-group-material mb-3">
                                <label class="form-control-label">Pemilihan User :</label>
                                <div>
                                    <input type="radio" value="Evaluasi" id="Evaluasi" class="tampil1" name="pemilihan_user">
                                    <label for="Evaluasi">Evaluasi</label>
                                </div>
                                <div>
                                    <input type="radio" value="New Project" name="pemilihan_user" class="tampil1" checked id="New Project">
                                    <label for="New Project">New Project</label>
                                </div>
                            </div>
                            <div id="form-input1" style="display: none;">
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <label for="">Perusahaan <b class="text-danger">*</b></label>
                                        <select id="id_permintaan" name="id_permintaan" onchange="cek_db()" class="form-control select2bs4" style="width: 325px;">
                                            <option value="" disabled selected>Pilih Perusahaan</option>
                                            <?php foreach ($isi as $row) if ($row->status == 'Approved') { ?>
                                                <option value="<?php echo $row->id_permintaan ?>"><?php echo $row->lokasi ?> (<?php echo date('d F Y', strtotime($row->created_date)) ?>)</option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="font-italic" style="font-size: 12px; text-align: right; font-weight: bold;"><b class="text-danger">*</b> : Data Harus Diisi</p>
                        <div id="form-input">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group-material mb-3">
                                        <label for="NPA" class="label-material">Nama PIC Presales</label>
                                        <input type="text" name="npp" id="npp" readonly class="form-control form-control-sm">
                                    </div>
                                    <div class="form-group-material mb-3">
                                        <label for="NPS" class="label-material">Nama PIC Sales <b class="text-danger">*</b></label>
                                        <input type="text" name="nps" id="nps" readonly class="form-control form-control-sm" value="<?php echo $this->session->userdata('nama') ?>">
                                    </div>
                                    <div class="form-group-material mb-3">
                                        <label for="NU" class="label-material">Nama User <b class="text-danger">*</b></label>
                                        <input type="text" name="nama_user" id="nama_user" required autofocus class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group-material mb-3">
                                        <label for="lokasi" class="label-material">Lokasi <b class="text-danger">*</b></label>
                                        <input type="text" name="lokasi" id="lokasi" maxlength="125" required class="form-control form-control-sm">
                                    </div>
                                    <div class="form-group-material mb-3">
                                        <label for="sub-lokasi" class="label-material">Sub Lokasi <b class="text-danger">*</b></label>
                                        <input type="text" name="sub_lokasi" id="sub_lokasi" required class="form-control form-control-sm">
                                    </div>
                                    <div class="form-group-material mb-3">
                                        <label for="luas-wilayah" class="label-material">Luas Wilayah <b class="text-danger">*</b></label>
                                        <input type="text" name="luas_wilayah" id="luas_wilayah" required class="form-control form-control-sm">
                                    </div>
                                </div>
                            </div>
                            <div class="row" id="barisdetail">
                                <div class="col-sm-6">
                                    <div class="form-group-material">
                                        <label for="" class="label-material">Nama ARH <b class="text-danger">*</b></label>
                                        <select id="id_arh" name="nama_arh[]" onchange="cek_arh()" class="form-control" required>
                                            <option value="" disabled selected>Pilih ARH</option>
                                            <?php $p = $this->db->query('SELECT * FROM tbl_user')->result();
                                            foreach ($p as $row) if ($row->role == 'Admin') { ?>
                                                <option value="<?php echo $row->npk ?>"><?php echo $row->nama ?> (<?php echo $row->sub_lokasi_arh ?>)</option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group-material mb-3">
                                        <label for="luas-wilayah" class="label-material mb-3">Sub Lokasi ARH <b class="text-danger">*</b></label>
                                        <input type="text" name="sub_lokasi_arh[]" id="sub_lokasi_arh" required class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="col-sm-2 text-center">
                                    <label for="luas-wilayah" class="label-material">Aksi</label><br>
                                    <button type="button" class="add btn btn-primary" id="add_row" value="Add Row"><i class='fa fa-plus'></i></button>
                                </div>
                            </div>
                            <!-- Klik Evaluasi dan muncul ini -->
                            <div class="row" id="tampilArh" style="display: none;">
                                <div class="col-sm-6">
                                    <div class="form-group-material">
                                        <label for="" class="label-material">Nama ARH <b class="text-danger">*</b></label>
                                        <input type="text" name="nama_arh2" id="nama_arh2" class="form-control form-control-sm" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group-material mb-3">
                                        <label for="luas-wilayah" class="label-material">Sub Lokasi ARH <b class="text-danger">*</b></label>
                                        <input type="text" name="sub_lokasi_arh2" id="sub_lokasi_arh2" class="form-control form-control-sm">
                                    </div>
                                </div>
                            </div>
                            <!-- !Hide -->
                            <div class="row">
                                <div class="col">
                                    <div class="form-group-material">
                                        <label for="kegiatan-lakukan" class="label-material">Kegiatan Yang Akan di Lakukan</label>
                                        <textarea class="form-control" name="kegiatan_akan" cols="60" rows="5" readonly>Assesment</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="line"></div>
                            <div class="form-group row">
                                <div class="col-sm-12 text-center mt-3">
                                    <button class="btn btn-primary" type="submit">Daftar Assesment</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content-header -->
</div>

<?php foreach ($isi as $row) { ?>
    <div class="modal fade" id="permintaanModal<?php echo $row->id_permintaan; ?>" tabindex="-1" aria-labelledby="permintaanModal<?php echo $row->id_permintaan; ?>" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Assessment</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header d-flex align-items-center text-center">
                                <h3>Pelaksanaan Security Assessment</h3>
                            </div>
                            <form class="form-horizontal" action="<?php echo site_url('Presales/CTR_Presales/EditPermintaan') ?>" method="POST">
                                <input type="hidden" value="<?php echo $row->pemilihan_user ?>" name="pemilihan_user">
                                <input type="hidden" name="id_permintaan" class="form-control form-control-sm" value="<?php echo $row->id_permintaan ?>">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group-material">
                                                <label for="NPA" class="label-material">Nama PIC Presales</label>
                                                <input type="text" name="npp" class="form-control form-control-sm" value="<?php echo $row->npp ?>" readonly>
                                            </div>
                                            <div class="form-group-material mt-2">
                                                <label for="NPS" class="label-material">Nama PIC Sales</label>
                                                <input type="text" name="nps" class="form-control form-control-sm" value="<?php echo $row->nps ?>" readonly>
                                            </div>
                                            <div class="form-group-material mt-2">
                                                <label for="NU" class="label-material">Nama User</label>
                                                <input type="text" name="nama_user" required class="form-control form-control-sm" value="<?php echo $row->nama_user ?>">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group-material">
                                                <label for="lokasi" class="label-material">Lokasi</label>
                                                <input type="text" name="lokasi" required class="form-control form-control-sm" value="<?php echo $row->lokasi ?>">
                                            </div>
                                            <div class="form-group-material mt-2">
                                                <label for="sub-lokasi" class="label-material">Sub Lokasi</label>
                                                <input type="text" name="sub_lokasi" required class="form-control form-control-sm" value="<?php echo $row->sub_lokasi ?>">
                                            </div>
                                            <div class="form-group-material mt-2">
                                                <label for="luas-wilayah" class="label-material">Luas Wilayah</label>
                                                <input type="text" name="luas_wilayah" required class="form-control form-control-sm" value="<?php echo $row->luas_wilayah ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col">
                                            <div class="form-group-material">
                                                <label for="kegiatan-lakukan" class="label-material">Kegiatan Yang Akan di Lakukan</label>
                                                <textarea class="form-control" name="kegiatan_akan" cols="60" rows="5" readonly>Assessment</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <a class="text-white btn btn-secondary" data-dismiss="modal" aria-label="Close" href="#"><i class="fas fa-window-close"></i> Batal</a>
                                    <button type="submit" class="btn btn-primary"><i class="fas fa-check-square"></i> Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript">
    function TampilDaftar() {
        var x = document.getElementById("Show_Daftar");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }

    function cek_db() {
        var id_permintaan = $("#id_permintaan").val();
        $.ajax({
            url: '<?php echo site_url('Presales/CTR_Presales/tampil/') ?>',
            data: "id_permintaan=" + id_permintaan,
            success: function(data) {
                var json = data,
                    obj = JSON.parse(json);
                $('#npp').val(obj.npp);
                $('#nama_user').val(obj.nama_user);
                $('#lokasi').val(obj.lokasi);
                $('#sub_lokasi').val(obj.sub_lokasi);
                $('#luas_wilayah').val(obj.luas_wilayah);
            }
        })
    }
    $(document).ready(function() {
        $(".tampil1").click(function() { //Memberikan even ketika class detail di klik (class detail ialah class radio button)
            if ($("input[name='pemilihan_user']:checked").val() == "Evaluasi") { //Jika radio button "berbeda" dipilih maka tampilkan form-inputan
                $("#form-input1").slideDown("fast"); //Efek Slide Down (Menampilkan Form Input)
                $("#npp").val("");
                $("#nama_user").val("");
                $("#lokasi").val("");
                $("#sub_lokasi").val("");
                $("#luas_wilayah").val("");
                document.getElementById("nama_user").readOnly = true;
                document.getElementById("lokasi").readOnly = true;
                document.getElementById("sub_lokasi").readOnly = true;
                document.getElementById("luas_wilayah").readOnly = true;
                document.getElementById("id_permintaan").required = true;
            } else {
                $("#form-input1").slideUp("fast");
                $("#id_permintaan").remove("option");
                $("#npp").val("");
                $("#nama_user").val("");
                $("#lokasi").val("");
                $("#sub_lokasi").val("");
                $("#luas_wilayah").val("");

                document.getElementById("nama_user").readOnly = false;
                document.getElementById("lokasi").readOnly = false;
                document.getElementById("sub_lokasi").readOnly = false;
                document.getElementById("luas_wilayah").readOnly = false;
            }
        });
    });
</script>

<script type="text/javascript">
    function cek_arh() {
        var id_arh = $("#id_arh").val();
        $.ajax({
            url: '<?php echo site_url('Presales/CTR_Presales/tampilArh/') ?>',
            data: "npk=" + id_arh,
            success: function(data) {
                var json = data,
                    obj = JSON.parse(json);
                $('#sub_lokasi_arh').val(obj.sub_lokasi_arh);
            }
        })
    }
    $(document).ready(function() {
        var count = 1;
        $('body').on('click', '#add_row', function() {
            count++;
            var action = 'item';
            $.ajax({
                url: '<?php echo base_url() ?>Presales/CTR_Presales/TambahBaris',
                method: 'POST',
                data: {
                    action: action,
                    count: count
                },
                success: function(data) {
                    $('#barisdetail').append(data);
                    //$('#baris'+count+' #receiveitem_group').select2();
                }
            });
        });
        $('body').on('click', '#remove_row', function() {
            var barisdetail = $(this).attr('barisdetail');
            $('#barisdetaill' + barisdetail + '').remove();
            //hitung();
        });
    });
</script>
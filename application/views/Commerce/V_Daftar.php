<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid mb-4">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Form Assessment</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo site_url('Commerce/CTR_Commerce') ?>">Home</a></li>
                        <li class="breadcrumb-item active">Daftar Assesment</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="container">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h4>Pendaftaran Security Assessment</h4>
                </div>
                <div class="card-body">
                    <form class="form-horizontal" name="form1" action="<?php echo site_url('Commerce/CTR_Commerce/SimpanDaftar') ?>" method="POST">
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
                            <div class="col-sm-6">
                                <div id="form-input1" style="display: none;">
                                    <div class="form-group">
                                        <label for="">Perusahaan <b class="text-danger">*</b></label>
                                        <select id="id_permintaan" name="id_permintaan" onchange="cek_db()" class="form-control select2bs4">
                                            <option value="" disabled selected>Pilih Perusahaan</option>
                                            <?php foreach ($isi as $row) if ($row->status == 'Approved') { ?>
                                                <option value="<?php echo $row->id_permintaan ?>"><?php echo $row->lokasi ?> (<?= $row->pemilihan_user ?>, <?= date('d F Y', strtotime($row->created_date)) ?>)</option>
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
                                        <input type="text" name="nama_user" id="nama_user" autofocus required class="form-control form-control-sm">
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
                                        <select id="id_arh" name="nama_arh[]" onchange="cek_arh()" class="form-control select2bs4" required>
                                            <option value="" disabled selected>Pilih ARH</option>
                                            <?php $p = $this->db->query('SELECT * FROM tbl_user')->result();
                                            foreach ($p as $row) if ($row->role == 'Admin') { ?>
                                                <option value="<?php echo $row->npk ?>"><?php echo $row->nama ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group-material mb-3">
                                        <label for="luas-wilayah" class="label-material mb-3">Sub Lokasi ARH <b class="text-danger">*</b></label>
                                        <input type="text" name="sub_lokasi_arh[]" id="sub_lokasi_arh" readonly required class="form-control form-control-sm">
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
                                        <input type="text" name="nama_arh2" id="nama_arh2" class="form-control form-control-sm">
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
                        </div>
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
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.content -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript">
    function cek_db() {
        var id_permintaan = $("#id_permintaan").val();
        $.ajax({
            url: '<?php echo site_url('Commerce/CTR_Commerce/tampil/') ?>',
            data: "id_permintaan=" + id_permintaan,
            success: function(data) {
                var json = data,
                    obj = JSON.parse(json);
                $('#npp').val(obj.npp);
                $('#nama_user').val(obj.nama_user);
                $('#lokasi').val(obj.lokasi);
                $('#sub_lokasi').val(obj.sub_lokasi);
                $('#luas_wilayah').val(obj.luas_wilayah);
                $('#nama_arh2').val(obj.nama_arh);
                $('#sub_lokasi_arh2').val(obj.sub_lokasi_arh);
            }
        })
    }

    $(document).ready(function() {
        $(".tampil1").click(function() { //Memberikan even ketika class detail di klik (class detail ialah class radio button)
            if ($("input[name='pemilihan_user']:checked").val() == "Evaluasi") { //Jika radio button "berbeda" dipilih maka tampilkan form-inputan
                $("#form-input1").slideDown("fast"); //Efek Slide Down (Menampilkan Form Input)
                $("#tampilArh").slideDown("fast"); //Efek Slide Down (Menampilkan Form Input)
                $("#barisdetail").slideUp("fast"); //Efek Slide Up (Menutup Form Input)
                // disable name
                document.getElementById("sub_lokasi_arh").disabled = true;
                // document.getElementById("nama_arh").disabled = true;
                // kosongkan inputan
                $("#npp").val("");
                $("#nama_user").val("");
                $("#lokasi").val("");
                $("#sub_lokasi").val("");
                $("#luas_wilayah").val("");
                document.getElementById("nama_user").readOnly = true;
                document.getElementById("lokasi").readOnly = true;
                document.getElementById("sub_lokasi").readOnly = true;
                document.getElementById("luas_wilayah").readOnly = true;
                document.getElementById("nama_arh2").readOnly = true;
                document.getElementById("sub_lokasi_arh2").readOnly = true;
                document.getElementById("id_permintaan").required = true;
            } else {
                $("#form-input1").slideUp("fast");
                $("#tampilArh").slideUp("fast"); //Efek Slide Down (Menampilkan Form Input)
                $("#barisdetail").slideDown("fast"); //Efek Slide Down (Menampilkan Form Input)
                $("#id_permintaan").remove("option");
                $("#npp").val("");
                $("#nama_user").val("");
                $("#lokasi").val("");
                $("#sub_lokasi").val("");
                $("#luas_wilayah").val("");
                $("#nama_arh2").val("");
                $("#sub_lokasi_arh2").val("");

                document.getElementById("nama_user").readOnly = false;
                document.getElementById("lokasi").readOnly = false;
                document.getElementById("sub_lokasi").readOnly = false;
                document.getElementById("luas_wilayah").readOnly = false;
                document.getElementById("nama_arh2").readOnly = false;
                document.getElementById("sub_lokasi_arh2").readOnly = true;
                document.getElementById("sub_lokasi_arh").readOnly = true;
                document.getElementById("sub_lokasi_arh").disabled = false;
            }
        });
    });
</script>

<script type="text/javascript">
    function cek_arh() {
        var id_arh = $("#id_arh").val();
        $.ajax({
            url: '<?php echo site_url('Commerce/CTR_Commerce/tampilArh/') ?>',
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
                url: '<?php echo base_url() ?>Commerce/CTR_Commerce/TambahBaris',
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
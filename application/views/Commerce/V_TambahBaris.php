<!-- Select2 -->
<link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/select2/css/select2.min.css">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/select2/css/select2.css">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
<div class="container-fluid">
    <div class="row" id="barisdetaill<?= $baris ?>">
        <div class="col-sm-6">
            <div class="form-group-material">
                <label for="" class="label-material">Nama ARH <b class="text-danger">*</b></label>
                <select id="id_arh<?= $baris ?>" name="nama_arh[]" onchange="cek_arh1()" class="form-control select2boot<?= $baris ?>" required>
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
                <input type="text" name="sub_lokasi_arh[]" id="sub_lokasi_arh<?= $baris ?>" readonly class="form-control form-control-sm">
            </div>
        </div>
        <div class="col-sm-2 text-center">
            <label for="luas-wilayah" class="label-material">Aksi</label><br>
            <button type="button" class="add btn btn-danger" id="remove_row" value="Add Row" barisdetail="<?= $baris ?>"><i class='fa fa-minus'></i></button>
        </div>
    </div>
</div>
<!-- Select2 -->
<script src="<?php echo base_url() ?>assets/plugins/select2/js/select2.full.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script type="text/javascript">
    // $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2boot' + <?= $baris ?>).select2({
        theme: 'bootstrap4'
    })

    function cek_arh1() {
        var id_arh = $("#id_arh" + <?= $baris ?>).val();
        $.ajax({
            url: '<?php echo site_url('Commerce/CTR_Commerce/tampilArh/') ?>',
            data: "npk=" + id_arh,
            success: function(data) {
                var json = data,
                    obj = JSON.parse(json);
                $('#sub_lokasi_arh' + <?= $baris ?>).val(obj.sub_lokasi_arh);
            }
        })
    }
</script>
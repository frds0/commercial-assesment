<!-- /.content-wrapper -->
<footer class="main-footer">
	<strong>Copyright &copy; 2020 - <?php echo date('Y') ?> <a target="_blank" href="https://sigap.com">IT Sigap</a>.</strong>
	All rights reserved.
	<div class="float-right d-none d-sm-inline-block">
		<b>Version</b> 1.1.0
	</div>
</footer>
</div>

<div class="modal fade" data-backdrop="static" id="logoutModals" tabindex="-1" aria-labelledby="" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header bg-danger">
				<h5 class="modal-title" id="detailModalLabel">Logout</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
			<div class="modal-body">
				Yakin Logout?
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal"><i class="fas fa-window-close"></i> Batal</button>
				<a class="btn btn-danger btn-sm text-center" href="<?php echo base_url(); ?>CTR_Login/logout"><i class="fas fa-check-square"></i> Logout</a>
			</div>
		</div>
	</div>
</div>
<!-- ./wrapper -->
<!-- jQuery -->
<script src="<?php echo base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/jquery/jquery.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url() ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo base_url() ?>assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE for demo purposes -->
<!-- <script src="<?php echo base_url() ?>assets/dist/js/demo.js"></script> -->
<!-- AdminLTE App -->
<script src="<?php echo base_url() ?>assets/dist/js/adminlte.js"></script>
<!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- Select2 -->
<script src="<?php echo base_url() ?>assets/plugins/select2/js/select2.full.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="<?php echo base_url() ?>/assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url() ?>/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url() ?>/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?php echo base_url() ?>/assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url() ?>/assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo base_url() ?>/assets/plugins/jszip/jszip.min.js"></script>
<script src="<?php echo base_url() ?>/assets/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?php echo base_url() ?>/assets/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?php echo base_url() ?>/assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url() ?>/assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo base_url() ?>/assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- Menampilkan Tittle -->
<script>
	// $(function() {
	// 	$('[data-toggle="tooltip"]').tooltip()
	// })
</script>
<script>
	$(function() {
		$('table.table1').DataTable({
			"paging": true,
			"lengthChange": true,
			"searching": true,
			"ordering": true,
			"info": false,
			"autoWidth": false,
			"responsive": true,
			// "buttons": ["print"],
			"language": {
				"emptyTable": "Tidak ada data yang tersedia",
				"sZeroRecords": "Tidak ada data yang dicari"
			},
			"lengthMenu": [
				[10, 25, 50, -1],
				[10, 25, 50, "All"]
			]
		});
	});
</script>
<!-- End Js Data Table -->

<script>
	$(function() {
		//Initialize Select2 Elements
		$('.select2').select2()
		//Initialize Select2 Elements
		$('.select2bs4').select2({
			theme: 'bootstrap4'
		})
	})

	const flashdata = $('.flash-data').data('flashdata')
	if (flashdata == "Login") {
		Swal.fire({
			position: 'top-center',
			icon: 'success',
			title: 'Sign Success!!',
			text: 'Selamat Datang <?php echo $this->session->userdata("nama") ?>',
			showConfirmButton: false,
			timer: 1500
		})
	} else if (flashdata == "Mulai") {
		var Toast = Swal.mixin({
			toast: true,
			position: 'top-end',
			showConfirmButton: false,
			timer: 3500
		});
		Toast.fire({
			icon: 'info',
			title: 'Silahkan Untuk Memulai Assesment!'
		})
	} else if (flashdata == "Pilih Pertanyaan") {
		var Toast = Swal.mixin({
			toast: true,
			position: 'top-end',
			showConfirmButton: false,
			timer: 3500
		});
		Toast.fire({
			icon: 'success',
			title: 'Silahkan Untuk Memulai Mengisi Data!'
		})
	} else if (flashdata == "Insert") {
		var Toast = Swal.mixin({
			toast: true,
			position: 'top-end',
			showConfirmButton: false,
			timer: 3500
		});
		Toast.fire({
			icon: 'success',
			title: 'Data Berhasil Ditambahkan!'
		})
	} else if (flashdata == "Update") {
		var Toast = Swal.mixin({
			toast: true,
			position: 'top-end',
			showConfirmButton: false,
			timer: 3500
		});
		Toast.fire({
			icon: 'success',
			title: 'Data Berhasil Diubah!'
		})
	} else if (flashdata == "Done") {
		Swal.fire({
			position: 'top-center',
			icon: 'success',
			title: 'Assesment Telah Diselesaikan!!',
			// text: '	',
			showConfirmButton: false,
			timer: 1500
		})
	} else if (flashdata == "Approve") {
		Swal.fire({
			position: 'top-center',
			icon: 'success',
			title: 'Assesment Approved!!',
			// text: '	',
			showConfirmButton: false,
			timer: 1500
		})
	} else if (flashdata == "Revisi") {
		Swal.fire({
			position: 'top-center',
			icon: 'error',
			title: 'Assesment Revisi!!',
			// text: '	',
			showConfirmButton: false,
			timer: 1500
		})
	} else if (flashdata == "Declined") {
		Swal.fire({
			position: 'top-center',
			icon: 'error',
			title: 'Assesment Ditolak!!',
			// text: '	',
			showConfirmButton: false,
			timer: 1500
		})
	} else if (flashdata == "Aktif") {
		Swal.fire({
			position: 'top-center',
			icon: 'success',
			title: 'Data Diaktifkan!!',
			// text: '	',
			showConfirmButton: false,
			timer: 1500
		})
	} else if (flashdata == "Nonaktif") {
		Swal.fire({
			position: 'top-center',
			icon: 'error',
			title: 'Data Dinonaktifkan!!',
			// text: '	',
			showConfirmButton: false,
			timer: 1500
		})
	} else if (flashdata == "Terdaftar") {
		Swal.fire({
			position: 'top-center',
			icon: 'error',
			title: 'NPK Sudah Terdaftar!!',
			// text: '	',
			showConfirmButton: false,
			timer: 1500
		})
	}
</script>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <title><?php echo $judul; ?></title> -->
	<title>Assesment Sigap</title>
	<link rel="shortcut icon" href="<?php echo base_url() ?>assets/dist/img/forApps/sigap-icon.png">

	<!-- Google Font: Source Sans Pro -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tahoma:300,400,400i,700&display=fallback">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/fontawesome-free/css/all.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/adminlte.min.css">
	<!-- Select2 -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/select2/css/select2.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/select2/css/select2.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
	<!-- overlayScrollbars -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
	<!-- DataTables -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
	<!-- Sweetalert -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
	<!-- Javascript jquery -->
	<script src="<?php echo base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
</head>

<body class="hold-transition sidebar-mini layout-fixed" style="font-family: Tahoma;">
	<div class="wrapper">

		<!-- Preloader -->
		<!-- <div class="preloader flex-column justify-content-center align-items-center">
			<img class="animation__shake" src="<?php echo base_url() ?>assets/dist/img/forApps/sigap-icon.png" alt="SigapIcon" height="60" width="60">
		</div> -->

		<!-- Navbar -->
		<nav class="main-header navbar navbar-expand navbar-white navbar-light">
			<!-- Left navbar links -->
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
				</li>
			</ul>

			<!-- Right navbar links -->
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
						<i class="fa fa-user"></i>&nbsp;<b>Hai,
							<?php echo $user['nama'] ?> (<?php if ($user['role'] == 'Commerce') {
																echo 'Commercial';
															} else if ($user['role'] == 'Kasie') {
																echo 'Kasie';
															} else if ($user['role'] == 'Presales') {
																echo 'Presales';
															} else if ($user['role'] == 'Admin') {
																echo 'Admin ARH';
															} else if ($user['role'] == 'Super Admin') {
																echo 'Super Admin';
															}  ?>)</b>
					</a>

					<!-- <li class="nav-item">
					<a class="nav-link" data-widget="fullscreen" title="Full Screen" href="#" role="button">
						<i class="fas fa-expand-arrows-alt"></i>
					</a>
				</li> -->
				</li>
			</ul>
		</nav>
		<!-- /.navbar -->

		<!-- Main Sidebar Container -->
		<aside class="main-sidebar sidebar-dark-primary elevation-4">
			<!-- Brand Logo -->
			<a href="#" class="brand-link">
				<img src="<?php echo base_url() ?>assets/dist/img/forApps/sigap-icon.png" alt="SigapIcon" class="brand-image" style="opacity: .8">
				<span class="brand-text font-weight-light">&nbsp;<b>Assesment SIGAP</b></span>
			</a>

			<!-- Sidebar -->
			<div class="sidebar">
				<!-- Sidebar user panel (optional) -->
				<div class="user-panel mt-3 pb-3 mb-3 d-flex">
					<div class="image">
						<img src="<?php echo base_url() ?>assets/dist/img/forApps/def.png" alt="UserImage">
					</div>
					<div class="info">
						<a href="#" class="d-block"><?php echo $user['nama'] ?></a>
					</div>
				</div>
<style>
	.small-box {
		transition: transform 1s;
	}

	.small-box:hover {
		transform: translateY(-5px);
	}
</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->

	<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flashdata'); ?>"></div>
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Dashboard Assesment</h1>
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
		<div class="container-fluid mt-4">
			<?php echo $this->session->flashdata('massage'); ?>
			<div class="card">
				<?php echo $this->session->flashdata('pesan'); ?>
				<?php echo $this->session->flashdata('pesan0'); ?>
				<!-- /.card-header -->
				<div class="card-body " style="overflow: auto;">
					<div class="row justify-content-center">
						<div class="col-lg-4">
							<div class="small-box shadow-lg bg-info">
								<div class="inner">
									<h3><?php echo $seluruh ?></h3>
									<p>Total Seluruh Assesment</p>
								</div>
								<div class="icon">
									<i class="nav-icon fas fa-clipboard"></i>
								</div>
								<a href="<?php echo base_url('Presales/CTR_Presales') ?>" class="small-box-footer">Dashboard <i class="fas fa-arrow-circle-right"></i></a>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="small-box shadow-lg bg-warning">
								<div class="inner">
									<h3><?php echo $tunggu ?></h3>
									<p>Menunggu Assesment</p>
								</div>
								<div class="icon">
									<i class="far fa-clock"></i>
								</div>
								<a href="<?php echo base_url('Presales/CTR_Presales/pending') ?>" class="small-box-footer">Info Selanjutnya <i class="fas fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<div class="row">
						<!-- ./col -->
						<div class="col-lg-3 col-6">
							<!-- small box -->
							<div class="small-box shadow-lg bg-secondary">
								<div class="inner">
									<h3><?php echo $progres ?></h3>
									<p>Assesment Diproses</p>
								</div>
								<div class="icon">
									<i class="fas fa-hourglass-start"></i>
								</div>
								<a href="<?php echo base_url('Presales/CTR_Presales/progres') ?>" class="small-box-footer">Info Selanjutnya <i class="fas fa-arrow-circle-right"></i></a>
							</div>
						</div>
						<div class="col-lg-3 col-6">
							<!-- small box -->
							<div class="small-box shadow-lg bg-dark">
								<div class="inner">
									<h3><?php echo $tungguA ?></h3>
									<p>Menunggu Approval</p>
								</div>
								<div class="icon">
									<i class="fas fa-hourglass-half"></i>
								</div>
								<a href="<?php echo base_url('Presales/CTR_Presales/progres') ?>" class="small-box-footer">Info Selanjutnya <i class="fas fa-arrow-circle-right"></i></a>
							</div>
						</div>
						<!-- ./col -->
						<div class="col-lg-3 col-6">
							<!-- small box -->
							<div class="small-box shadow-lg bg-success">
								<div class="inner">
									<h3><?php echo $setujui ?></h3>
									<p>Assesment Disetujui</p>
								</div>
								<div class="icon">
									<i class="fas fa-check"></i>
								</div>
								<a href="<?php echo base_url('Presales/CTR_Presales/approved') ?>" class="small-box-footer">Info Selanjutnya <i class="fas fa-arrow-circle-right"></i></a>
							</div>
						</div>
						<!-- ./col -->
						<div class="col-lg-3 col-6">
							<!-- small box -->
							<div class="small-box shadow-lg bg-danger">
								<div class="inner">
									<h3><?php echo $revisi ?></h3>
									<p>Assesment Direvisi</p>
								</div>
								<div class="icon">
									<i class="fas fa-times"></i>
								</div>
								<a href="<?php echo base_url('Presales/CTR_Presales/revisi') ?>" class="small-box-footer">Info Selanjutnya <i class="fas fa-arrow-circle-right"></i></a>
							</div>
						</div>
						<!-- ./col -->
					</div>
				</div>
				<!-- Untuk Pagination -->
			</div>
		</div>
		<!-- /.content -->
	</div>
</div>
<!-- /.content-header -->
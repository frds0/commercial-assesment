<!-- Sidebar Menu -->
<nav class="mt-2">
	<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
		<!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
		<li class="nav-item">
			<a href="" data-toggle="modal" data-target="#logoutModals" class="nav-link btn-danger">
				<i class="nav-icon fas fa-sign-out-alt"></i>
				<p>
					Sign Out
				</p>
			</a>
			<!-- <a href="#EditPenggunaModal<?php echo $row['npk'] ?>" data-toggle="modal" data-target="#EditPenggunaModal<?php echo $row['npk'] ?>" class="btn btn-warning btn-sm" data-toggle="tooltip" title="Edit Data"><i class="fas fa-edit"></i></a> -->
		</li>
		<li class="nav-item">
			<a href="<?php echo base_url('Presales/CTR_Presales') ?>" class="nav-link 
			<?php if ($this->uri->uri_string() == 'Presales/CTR_Presales') {
				echo 'active';
			} ?>">
				<i class="nav-icon fas fa-home"></i>
				<p>
					Dashboard
				</p>
			</a>
		</li>

		<?php if ($user['role'] == 'Super Admin') { ?>

			<li class="nav-item menu-open">
				<a href="#" class="nav-link">
					<i class="nav-icon fas fa-circle-notch text-success"></i>
					<p>
						Super Admin
						<i class="right fas fa-angle-left"></i>
					</p>
				</a>
				<ul class="nav nav-treeview">
					<li class="nav-header">Kelola Pertanyaan</li>
					<li class="nav-item">
						<a href="<?php echo base_url('Presales/CTR_Presales/pertanyaan') ?>" class="nav-link
					<?php if ($this->uri->uri_string() == 'Presales/CTR_Presales/pertanyaan') {
						echo 'active';
					} ?>">
							<i class="nav-icon fas fa-user-edit"></i>
							<p class="">Pertanyaan Wawancara</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="<?php echo base_url('Presales/CTR_Presales/KategoriCeklis') ?>" class="nav-link
					<?php if ($this->uri->uri_string() == 'Presales/CTR_Presales/KategoriCeklis') {
						echo 'active';
					} ?>">
							<i class="nav-icon fas fa-user-edit"></i>
							<p class="">Pertanyaan Ceklis</p>
						</a>
					</li>
					<li class="nav-header">Kelola Pengguna</li>
					<li class="nav-item">
						<a href="<?php echo base_url('Presales/CTR_Presales/Pengguna') ?>" class="nav-link
					<?php if ($this->uri->uri_string() == 'Presales/CTR_Presales/Pengguna') {
						echo 'active';
					} ?>">
							<i class="nav-icon fas fa-user-tie"></i>
							<p class="">Pengguna</p>
						</a>
					</li>
				</ul>
			</li>

			<li class="nav-item">
				<a href="#" class="nav-link">
					<i class="nav-icon fas fa-circle-notch text-success"></i>
					<p>
						Commercial
						<i class="right fas fa-angle-left"></i>
					</p>
				</a>
				<ul class="nav nav-treeview">
					<li class="nav-item">
						<a href="<?php echo base_url('Presales/CTR_Presales/Daftar_Commercial') ?>" class="nav-link
					<?php if ($this->uri->uri_string() == 'Presales/CTR_Presales/Daftar_Commercial') {
						echo 'active';
					} ?>">
							<i class="nav-icon fas fa-clipboard"></i>
							<p class="">Daftar Assesment</p>
							<!-- <span class="badge badge-secondary right">
								<?php $query = $this->db->query('SELECT * FROM tbl_permintaan where status = "Menunggu Assignment"');
								$ma = $query->num_rows();
								echo $ma ?>
							</span> -->
						</a>
					</li>
				</ul>
			</li>

			<li class="nav-item">
				<a href="#" class="nav-link">
					<i class="nav-icon fas fa-circle-notch text-success"></i>
					<p>
						Kasie
						<i class="right fas fa-angle-left"></i>
					</p>
				</a>
				<ul class="nav nav-treeview">
					<li class="nav-item">
						<a href="<?php echo base_url('Presales/CTR_Presales/Assigment_Kasie') ?>" class="nav-link
					<?php if ($this->uri->uri_string() == 'Presales/CTR_Presales/Assigment_Kasie') {
						echo 'active';
					} ?>">
							<i class="nav-icon fas fa-clipboard"></i>
							<p class="">Menunggu Assignment</p>
							<span class="badge badge-secondary right">
								<?php $query = $this->db->query('SELECT * FROM tbl_permintaan where status = "Menunggu Assignment"');
								$ma = $query->num_rows();
								echo $ma ?>
							</span>
						</a>
					</li>
					<li class="nav-item">
						<a href="<?php echo base_url('Presales/CTR_Presales/Approval_Kasie') ?>" class="nav-link
					<?php if ($this->uri->uri_string() == 'Presales/CTR_Presales/Approval_Kasie') {
						echo 'active';
					} ?>">
							<i class="nav-icon fas fa-clipboard"></i>
							<p class="">Menunggu Approval</p>
							<span class="badge badge-secondary right">
								<?php $query = $this->db->query('SELECT * FROM tbl_permintaan where status = "Menunggu Approval"');
								$ma = $query->num_rows();
								echo $ma ?>
							</span>
						</a>
					</li>
					<li class="nav-item">
						<a href="<?php echo base_url('Presales/CTR_Presales/Ditolak') ?>" class="nav-link
					<?php if ($this->uri->uri_string() == 'Presales/CTR_Presales/Ditolak') {
						echo 'active';
					} ?>">
							<i class="nav-icon fas fa-clipboard"></i>
							<p class="">Assesment Ditolak</p>
							<span class="badge badge-secondary right">
								<?php $query = $this->db->query('SELECT * FROM tbl_permintaan where status = "Declined"');
								$ma = $query->num_rows();
								echo $ma ?>
							</span>
						</a>
					</li>
				</ul>
			</li>

			<li class="nav-item">
				<a href=" #" class="nav-link">
					<i class="nav-icon fas fa-circle-notch text-success"></i>
					<p>
						Presales
						<i class="right fas fa-angle-left"></i>
					</p>
				</a>
				<ul class="nav nav-treeview">
					<li class="nav-item">
						<a href="<?php echo base_url('Presales/CTR_Presales/pending') ?>" class="nav-link
					<?php if ($this->uri->uri_string() == 'Presales/CTR_Presales/pending') {
						echo 'active';
					} ?>">
							<i class="nav-icon fas fa-clipboard"></i>
							<p class="">Menunggu Assesment</p>
							<span class="badge badge-secondary right">
								<?php echo $tunggu ?>
							</span>
						</a>
					</li>
					<li class="nav-item">
						<a href="<?php echo base_url('Presales/CTR_Presales/progres') ?>" class="nav-link
					<?php if ($this->uri->uri_string() == 'Presales/CTR_Presales/progres') {
						echo 'active';
					} ?>">
							<i class="nav-icon fas fa-clipboard"></i>
							<p class="">Assesment Diproses
								<?php if ($user['role'] == 'Presales') { ?> & &nbsp; &nbsp;Menunggu Approval<?php } ?></p>
							<span class="badge badge-secondary right">
								<?php echo $progres ?>
							</span>
						</a>
					</li>
					<li class="nav-item">
						<a href="<?php echo base_url('Presales/CTR_Presales/approved') ?>" class="nav-link
					<?php if ($this->uri->uri_string() == 'Presales/CTR_Presales/approved') {
						echo 'active';
					} ?>">
							<i class="nav-icon fas fa-clipboard"></i>
							<p class="">Assesment Disetujui</p>
							<span class="badge badge-secondary right">
								<?php echo $setujui ?>
							</span>
						</a>
					</li>
					<li class="nav-item">
						<a href="<?php echo base_url('Presales/CTR_Presales/revisi') ?>" class="nav-link
					<?php if ($this->uri->uri_string() == 'Presales/CTR_Presales/revisi') {
						echo 'active';
					} ?>">
							<i class="nav-icon fas fa-clipboard"></i>
							<p class="">Assesment Revisi</p>
							<span class="badge badge-secondary right">
								<?php echo $revisi ?>
							</span>
						</a>
					</li>
				</ul>
			</li>
		<?php } else if ($user['role'] == 'Presales' or $user['role'] == 'Admin') { ?>
			<li class="nav-header">Assesment</li>
			<li class="nav-item">
				<a href="<?php echo base_url('Presales/CTR_Presales/pending') ?>" class="nav-link
					<?php if ($this->uri->uri_string() == 'Presales/CTR_Presales/pending') {
						echo 'active';
					} ?>">
					<i class="nav-icon fas fa-clipboard"></i>
					<p class="">Menunggu</p>
					<span class="badge badge-warning right">
						<?php echo $tunggu ?>
					</span>
				</a>
			</li>
			<li class="nav-item">
				<a href="<?php echo base_url('Presales/CTR_Presales/progres') ?>" class="nav-link
					<?php if ($this->uri->uri_string() == 'Presales/CTR_Presales/progres') {
						echo 'active';
					} ?>">
					<i class="nav-icon fas fa-clipboard"></i>
					<p class="">Diproses & &nbsp; &nbsp;Menunggu Approval</p>
					<span class="badge badge-secondary right">
						<?php echo $progres ?>
					</span>
				</a>
			</li>
			<li class="nav-item">
				<a href="<?php echo base_url('Presales/CTR_Presales/approved') ?>" class="nav-link
					<?php if ($this->uri->uri_string() == 'Presales/CTR_Presales/approved') {
						echo 'active';
					} ?>">
					<i class="nav-icon fas fa-clipboard"></i>
					<p class="">Disetujui</p>
					<span class="badge badge-success right">
						<?php echo $setujui ?>
					</span>
				</a>
			</li>
			<li class="nav-item">
				<a href="<?php echo base_url('Presales/CTR_Presales/revisi') ?>" class="nav-link
					<?php if ($this->uri->uri_string() == 'Presales/CTR_Presales/revisi') {
						echo 'active';
					} ?>">
					<i class="nav-icon fas fa-clipboard"></i>
					<p class="">Revisi</p>
					<span class="badge badge-danger right">
						<?php echo $revisi ?>
					</span>
				</a>
			</li>
		<?php } ?>
	</ul>
</nav>
<!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>
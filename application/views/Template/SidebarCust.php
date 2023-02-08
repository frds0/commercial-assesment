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
		</li>
		<li class="nav-item">
			<a href="<?php echo base_url('Commerce/CTR_Commerce') ?>" class="nav-link
							<?php if ($this->uri->uri_string() == 'Commerce/CTR_Commerce') {
								echo 'active';
							} ?>">
				<i class="nav-icon fas fa-home"></i>
				<p>
					Dashboard
				</p>
			</a>
		</li>
		<li class="nav-header">Assesment</li>
		<li class="nav-item">
			<a href="<?php echo base_url('Commerce/CTR_Commerce/Diproses') ?>" class="nav-link
							<?php if ($this->uri->uri_string() == 'Commerce/CTR_Commerce/Diproses') {
								echo 'active';
							} ?>">
				<i class="nav-icon fas fa-clipboard"></i>
				<p class="">Diproses</p>
				<span class="badge badge-secondary right">
					<?php echo $proses ?>
				</span>
			</a>
		</li>
		<li class="nav-item">
			<a href="<?php echo base_url('Commerce/CTR_Commerce/Disetujui') ?>" class="nav-link
							<?php if ($this->uri->uri_string() == 'Commerce/CTR_Commerce/Disetujui') {
								echo 'active';
							} ?>">
				<i class="nav-icon fas fa-clipboard"></i>
				<p class="">Disetujui</p>
				<span class="badge badge-success right">
					<?php echo $approve ?>
				</span>
			</a>
		</li>
		<li class="nav-item">
			<a href="<?php echo base_url('Commerce/CTR_Commerce/Direvisi') ?>" class="nav-link
							<?php if ($this->uri->uri_string() == 'Commerce/CTR_Commerce/Direvisi') {
								echo 'active';
							} ?>">
				<i class="nav-icon fas fa-clipboard"></i>
				<p class="">Revisi</p>
				<span class="badge badge-warning right">
					<?php echo $revisi ?>
				</span>
			</a>
		</li>
		<li class="nav-header">Permintaan</li>
		<li class="nav-item">
			<a href="<?php echo base_url('Commerce/CTR_Commerce/Ditolak') ?>" class="nav-link
							<?php if ($this->uri->uri_string() == 'Commerce/CTR_Commerce/Ditolak') {
								echo 'active';
							} ?>">
				<i class="nav-icon fas fa-clipboard"></i>
				<p>
					Ditolak
				</p>
				<span class="badge badge-danger right">
					<?php echo $declined ?>
				</span>
			</a>
		</li>
	</ul>
</nav>
<!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>
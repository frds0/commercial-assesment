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
            <a href="<?php echo base_url('Kasie/CTR_Kasie') ?>" class="nav-link
							<?php if ($this->uri->uri_string() == 'Kasie/CTR_Kasie') {
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
            <a href="<?php echo base_url('Kasie/CTR_Kasie/Diproses') ?>" class="nav-link
					<?php if ($this->uri->uri_string() == 'Kasie/CTR_Kasie/Diproses') {
                        echo 'active';
                    } ?>">
                <i class="nav-icon fas fa-clipboard"></i>
                <p class="">Diproses</p>
                <span class="badge badge-secondary right">
                    <?php echo $diproses ?>
                </span>
            </a>
        </li>
        <li class="nav-item">
            <a href="<?php echo base_url('Kasie/CTR_Kasie/Approval') ?>" class="nav-link
					<?php if ($this->uri->uri_string() == 'Kasie/CTR_Kasie/Approval') {
                        echo 'active';
                    } ?>">
                <i class="nav-icon fas fa-clipboard"></i>
                <p class="">Menunggu Approval</p>
                <span class="badge badge-secondary right">
                    <?php echo $approval ?>
                </span>
            </a>
        </li>
        <li class="nav-item">
            <a href="<?php echo base_url('Kasie/CTR_Kasie/Approved') ?>" class="nav-link
					<?php if ($this->uri->uri_string() == 'Kasie/CTR_Kasie/Approved') {
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
            <a href="<?php echo base_url('Kasie/CTR_Kasie/Revisian') ?>" class="nav-link
					<?php if ($this->uri->uri_string() == 'Kasie/CTR_Kasie/Revisian') {
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
            <a href="<?php echo base_url('Kasie/CTR_Kasie/Ditolak') ?>" class="nav-link
					<?php if ($this->uri->uri_string() == 'Kasie/CTR_Kasie/Ditolak') {
                        echo 'active';
                    } ?>">
                <i class="nav-icon fas fa-clipboard"></i>
                <p class="">Ditolak</p>
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
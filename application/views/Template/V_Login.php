<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <title><?php echo $judul ?></title> -->
    <title>Commercial Assesment</title>
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/dist/img/forApps/sigap-icon.png">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/adminlte.min.css">
    <script src="<?php echo base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
</head>

<body class="hold-transition login-page" style="background: url('<?php echo base_url() ?>assets/img/nilai.jpg'); background-repeat: no-repeat; background-size: cover;">
    <div class="flash-data1" data-flashdata="<?= $this->session->flashdata('flashdata'); ?>"></div>
    <div class="login-box">
        <div class="login-logo">
            <a href="#"><b>Assesment</b>SIGAP</a>
        </div>
        <!-- /.login-logo -->
        <div class="card rounded-lg">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Silahkan Login</p>
                <?php echo $this->session->flashdata('massage'); ?>
                <?php echo $this->session->flashdata('alert'); ?>
                <form method="POST" action="<?php echo site_url('CTR_Login') ?>">
                    <div class="input-group">
                        <input type="text" id="npk" name="npk" class="form-control" placeholder="NPK" autofocus>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user-tie"></span>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <?= form_error('npk', '<small class="text-danger font-weight-bold"><i class="fas fa-exclamation-circle"></i> ', '</small>'); ?>
                    </div>
                    <div class="input-group">
                        <input type="password" id="password" name="password" class="form-control" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <a id="showHide" name="showHide" class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Show Password">
                                    <span toggle="#password" class="fa fa-fw fa-eye toggle-password text-secondary"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <?= form_error('password', '<small class="text-danger font-weight-bold"><i class="fas fa-exclamation-circle"></i> ', '</small>'); ?>
                    </div>
                    <div class="row">
                        <!-- /.col -->
                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="<?php echo base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo base_url() ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url() ?>assets/dist/js/adminlte.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script type="text/javascript">
        $(".toggle-password").click(function() {

            $(this).toggleClass("fa-eye fa-eye-slash");
            var input = $($(this).attr("toggle"));
            if (input.attr("type") == "password") {
                input.attr("type", "text");
                $("#showHide").attr('data-original-title', "Hide Password").tooltip('show');
            } else {
                input.attr("type", "password");
                $("#showHide").attr('data-original-title', "Show Password").tooltip('show');
            }
        });

        const flashdata = $('.flash-data1').data('flashdata')
        if (flashdata == "Logout") {
            var Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 4000
            });
            Toast.fire({
                icon: 'success',
                title: 'Anda Berhasil Logout!'
            })
        }
    </script>
</body>

</html>
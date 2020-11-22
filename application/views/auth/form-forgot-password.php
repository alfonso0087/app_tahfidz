<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Tahfidz App | <?= $title; ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('vendors'); ?>/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?= base_url('vendors'); ?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('vendors'); ?>/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition login-page">
  <div class="login-box">

    <!-- /.login-logo -->
    <div class="card" style="width: 25rem;">
      <div class="card-body login-card-body" style="background-color: #74b3ce; color: white;">
        <div class="row">
          <div class="col-sm-2"></div>
          <div class="col-sm-8">
            <h4 style="text-align: center;">Form Reset Password</h4>

          </div>
          <div class="col-sm-2"></div>
        </div>
        <hr>

        <?= $this->session->flashdata('message'); ?>

        <div class="row mt-5">
          <div class="col">
            <form action="<?= base_url('auth/forgotpassword'); ?>" method="POST">
              <div class="row">
                <label class="ml-2">
                  <h5>Username</h5>
                </label>
                <div class="input-group mb-3 col-auto">
                  <input type="text" class="form-control" placeholder="Username/Email" name="username" autofocus autocomplete="off">
                </div>
                <?= form_error('username', '<small class="text-danger ml-2">', '</small>'); ?>

                <!-- <?= form_error('password', '<small class="text-danger mt-0">', '</small>'); ?>
                <div class="input-group mb-3 col-auto">
                  <input type="password" class="form-control" placeholder="Password" name="password" required>

                </div> -->
              </div>
              <div class="row">
                <!-- /.col -->
                <div class="col-4 mt-2">
                </div>
                <div class="col-4 mt-2">
                </div>
                <div class="col-4 mt-2">
                  <button type="submit" class="btn btn-primary btn-block">CARI</button>
                </div>
                <!-- /.col -->
              </div>
            </form>

          </div>
        </div>

        <hr>

        <p class="mb-1 mt-4">
          <a href="<?= base_url('auth'); ?>" style="color: white;">Kembali</a>
        </p>
      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
  <!-- /.login-box -->

  <!-- jQuery -->
  <script src="<?= base_url('vendors'); ?>/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?= base_url('vendors'); ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url('vendors'); ?>/dist/js/adminlte.min.js"></script>

</body>

</html>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Registration Page</title>
  <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
  <!-- Bootstrap 3.3.2 -->
  <link href="<?php echo base_url('assets') ?>/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <!-- Font Awesome Icons -->
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <!-- Theme style -->
  <link href="<?php echo base_url('assets') ?>/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
  <!-- iCheck -->
  <link href="<?php echo base_url('assets') ?>/plugins/iCheck/square/blue.css" rel="stylesheet" type="text/css" />

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

<body class="register-page">
  <div class="register-box">
    <div class="register-logo">
      <a href="#"><b>Kepakaran</b>USK</a>
    </div>

    <div class="register-box-body">
      <p class="login-box-msg">Register a new membership</p>
      <form method="post" action="<?= base_url('auth/regis'); ?>">
        <div class="form-group has-feedback">
          <input type="text" class="form-control" name="nama" placeholder="Full name" value="<?= set_value('nama'); ?>" />
          <span class="glyphicon glyphicon-user form-control-feedback"></span>
          <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>

        <div class="form-group has-feedback">
          <input type="text" class="form-control" name="email" placeholder="Email" value="<?= set_value('email'); ?>" />
          <span class="glyphicon glyphicon-message form-control-feedback"></span>
          <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>

        <div class="form-group has-feedback">
          <input type="password" class="form-control" name="password1" placeholder="Password" />
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>

        <div class="form-group has-feedback">
          <input type="password" class="form-control" name="password2" placeholder="Retype password" />
          <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
        </div>
        <div class="row">
          <div class="col-xs-8">
            <div class="checkbox icheck">
              <label>
                <input type="checkbox"> I agree to the <a href="#">terms</a>
              </label>
            </div>
          </div><!-- /.col -->
          <div class="col-xs-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
          </div><!-- /.col -->
        </div>
      </form>

      <a href="<?php echo site_url('auth/login') ?>" class="text-center">I already have a membership</a>
    </div><!-- /.form-box -->
  </div><!-- /.register-box -->

  <!-- jQuery 2.1.3 -->
  <script src=".<?php echo base_url('assets') ?>/plugins/jQuery/jQuery-2.1.3.min.js"></script>
  <!-- Bootstrap 3.3.2 JS -->
  <script src="<?php echo base_url('assets') ?>/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
  <!-- iCheck -->
  <script src=".<?php echo base_url('assets') ?>/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
  <script>
    $(function() {
      $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%' // optional
      });
    });
  </script>
</body>

</html>
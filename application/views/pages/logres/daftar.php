<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Daftarkan Diri Anda</title>
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
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs pull-right">
                    <li class="active"><a href="#tab_1-1" data-toggle="tab">Klient</a></li>
                    <li><a href="#tab_2-2" data-toggle="tab">Konsultan</a></li>
                    <li class="pull-left header"><i class="fa fa-th"></i>Daftarkan Diri Anda</li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="tab_1-1">
                        <form method="post" action="<?= base_url('auth/daftar_proses_klient'); ?>">
                            <div class="form-group">
                                <label for="">Id User</label>
                                <input type="text" name="id_user" class="form-control" value="<?= $user['id_user']
                                                                                                ?>" readonly />
                            </div>
                            <div class="form-group">
                                <label for="">Nama</label>
                                <input type="text" name="nama" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" name="email" class="form-control" placeholder="Email Anda" value="<?= $user['email'];
                                                                                                                        ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label for="">Jenis Kelamin</label>
                                <select name="jenis_kelamin" class="form-control">
                                    <option>Laki-Laki</option>
                                    <option>Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Nomor Handphone</label>
                                <input type="text" class="form-control" name="no_hp" placeholder="Nomor Handphone" />
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea class="form-control" rows="3" name="alamat" placeholder="Alamat ..."></textarea>
                            </div>
                            <div class="form-group">
                                <label for="">NIK</label>
                                <input type="text" class="form-control" name="nik" placeholder="NIK" />
                            </div>
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
                        </form>
                    </div><!-- /.tab-pane -->
                    <div class="tab-pane" id="tab_2-2">
                        <form method="post" action="<?= base_url('auth/daftar_proses_konsultan'); ?>">
                            <div class="form-group">
                                <label for="">Id User</label>
                                <input type="text" name="id_user" class="form-control" value="<?= $user['id_user']
                                                                                                ?>" readonly />
                            </div>
                            <div class="form-group">
                                <label for="">Nama</label>
                                <input type="text" name="nama" class="form-control" value="<?= set_value('nama');
                                                                                            ?>" />
                                <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" name="email" class="form-control" placeholder="Email Anda" value="<?= $user['email'];
                                                                                                                        ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label for="">Jenis Kelamin</label>
                                <select name="jenis_kelamin" class="form-control">
                                    <option>Laki-Laki</option>
                                    <option>Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Nomor Handphone</label>
                                <input type="text" class="form-control" name="no_hp" placeholder="Nomor Handphone" />
                            </div>
                            <div class="form-group">
                                <label for="">Fakultas</label>
                                <select name="fakultas" class="form-control">
                                    <option>FEB</option>
                                    <option>FKH</option>
                                    <option>FH</option>
                                    <option>FT</option>
                                    <option>FP</option>
                                    <option>FKIP</option>
                                    <option>FMIPA</option>
                                    <option>FK</option>
                                    <option>FISIP</option>
                                    <option>FKP</option>
                                    <option>FKEP</option>
                                    <option>FKG</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea class="form-control" rows="3" name="alamat" placeholder="Alamat ..."></textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Bidang Keahlian</label>
                                <input type="text" class="form-control" name="keahlian" placeholder="Bidang Keahlian" />
                            </div>
                            <div class="form-group">
                                <label for="">NIP</label>
                                <input type="text" class="form-control" name="nip" placeholder="NIP" />
                            </div>
                            <div class="form-group">
                                <label for="">Harga</label>
                                <input type="text" class="form-control" name="harga" placeholder="Harga" />
                            </div>
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
                        </form>
                    </div><!-- /.tab-pane -->
                </div><!-- /.tab-content -->
            </div><!-- nav-tabs-custom -->
        </div><!-- /.register-box -->

        <!-- jQuery 2.1.3 -->
        <script src=".<?php echo base_url('assets') ?>/plugins/jQuery/jQuery-2.1.3.min.js"></script>
        <!-- Bootstrap 3.3.2 JS -->
        <script src="<?php echo base_url('assets') ?>/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- iCheck -->
        <script src="<?php echo base_url('assets') ?>/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
        <script>
            $(function() {
                $('input').iCheck({
                    checkboxClass: 'icheckbox_square-blue',
                    radioClass: 'iradio_square-blue',
                    increaseArea: '20%' // optional
                });
            });
        </script>
        <!-- jQuery 2.1.3 -->
        <script src="<?php echo base_url('assets') ?>/plugins/jQuery/jQuery-2.1.3.min.js"></script>
        <!-- Bootstrap 3.3.2 JS -->
        <script src="<?php echo base_url('assets') ?>/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- FastClick -->
        <script src='<?php echo base_url('assets') ?>/plugins/fastclick/fastclick.min.js'></script>
        <!-- AdminLTE App -->
        <script src="<?php echo base_url('assets') ?>/dist/js/app.min.js" type="text/javascript"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="<?php echo base_url('assets') ?>/dist/js/demo.js" type="text/javascript"></script>
</body>
</body>

</html>
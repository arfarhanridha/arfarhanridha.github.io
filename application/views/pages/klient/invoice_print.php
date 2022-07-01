<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>PakarUSK. | Invoice</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="<?php echo base_url('assets') ?>/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="<?php echo base_url('assets') ?>/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

<body onload="window.print();">
    <div class="wrapper">
        <!-- Main content -->
        <section class="invoice">
            <!-- title row -->
            <div class="row">
                <div class="col-xs-12">
                    <h2 class="page-header">
                        <i class="fa fa-globe"></i> Pakar USK.
                        <small class="pull-right"><?= date("d/m/Y"); ?></small>
                    </h2>
                </div><!-- /.col -->
            </div>
            <!-- info row -->
            <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                    From
                    <address>
                        <strong>Pakar USK.</strong><br>
                        Jln Tgk Abdurrauf No 8 Leuser Building Lt. 1, Darussalam<br>
                        Banda Aceh, 25111 <br>
                        Phone: (0651) 6303037<br />
                        Email: www.bisnis.unsyiah.ac.id
                    </address>
                </div><!-- /.col -->
                <div class="col-sm-4 invoice-col">
                    To
                    <address>
                        <strong><?= $nama_klient ?></strong><br>
                        Id Klient: <?= $id_klient ?><br>
                    </address>
                </div><!-- /.col -->
                <div class="col-sm-4 invoice-col">
                    <b>Invoice <?= $kode_transaksi ?></b><br />
                    <b>Account:</b> 968-34567
                </div><!-- /.col -->
            </div><!-- /.row -->

            <!-- Table row -->
            <div class="row">
                <div class="col-xs-12 table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Kode Transaksi</th>
                                <th>Nama Klient</th>
                                <th>ID Konsultan</th>
                                <th>Tema</th>
                                <th>Tanggal Konsul</th>
                                <th>Deskripsi</th>
                                <th>Frekuensi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?= $kode_transaksi ?></td>
                                <td><?= $nama_klient ?></td>
                                <td><?= $id_konsultan ?></td>
                                <td><?= $tema_pertemuan ?></td>
                                <td><?= date("d/m/Y", strtotime($tgl_konsul)); ?></td>
                                <td><?= $desk_konsultasi ?></td>
                                <td><?= $frekuensi_pertemuan ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div><!-- /.col -->
            </div><!-- /.row -->

            <div class="row">
                <!-- accepted payments column -->
                <div class="col-xs-6">
                    <p class="lead">Pakar USK. adalah bagian dari:</p>
                    <img src="<?php echo base_url('assets') ?>/dist/img/credit/bpbu.png" alt="BPBU" />
                    <img src="<?php echo base_url('assets') ?>/dist/img/credit/usk.png" alt="Logo USK  " />
                    <p>
                        1. Print Bukti Invoice Ini<br>
                        2. Bawa Bukti Invoice Ini Saat Pertemuan Konsultasi Perdana<br>
                        3. Bubuhkan Tanda Tangan Anda dan Pihak Konsultan<br>
                    </p>
                </div><!-- /.col -->
                <div class="col-xs-6">
                    <p class="lead">Pertemuan Perdana : <?= date("d/m/Y", strtotime($tgl_konsul)); ?></p>
                    <div class="table-responsive">
                        <table class="table" border="0">
                            <tr>
                                <td style="width:50%" align="center"><b>Klient</b></td><br>
                                <td style="width:50%" align="center"><b>Konsultan</b></td><br>
                            </tr>
                            <tr>
                                <td align="center"><br><br>(................................)</td>
                                <td align="center"><br><br>(................................)</td>
                            </tr>
                        </table>
                    </div>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </section><!-- /.content -->
    </div><!-- ./wrapper -->
    <!-- AdminLTE App -->
    <script src="<?php echo base_url('assets') ?>/dist/js/app.min.js" type="text/javascript"></script>
</body>

</html>
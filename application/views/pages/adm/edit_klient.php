<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Data
            <small>Klient</small>
        </h1>

    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-navy">
                    <div class="inner">
                        <h3>
                            0<?= $this->db->count_all('tb_klient'); ?>
                        </h3>
                        <p>Klient</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-maroon">
                    <div class="inner">
                        <h3>
                            0<?= $this->db->count_all('tb_konsultan'); ?>
                        </h3>
                        <p>Konsultan</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-purple">
                    <div class="inner">
                        <h3>
                            0<?= $this->db->count_all('tb_transaksi'); ?>
                        </h3>
                        <p>Transaksi</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3>
                            0<?= $this->db->count_all('tb_user'); ?>
                        </h3>
                        <p>User Aktif</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>

        <h1>Detail Konsultan</h1>

        <div class="row">
            <div class="col-md-12">
                <!-- Main content -->
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Detail Konsultan</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <form method="post" enctype="multipart/form-data" action="<?= base_url('adm/proses_edit_klient'); ?>">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <div class="form-group">
                                        <label for="">Id Klient</label>
                                        <input type="text" name="id_klient" class="form-control" value="<?= $id_klient ?>" readonly />
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="form-group">
                                        <label for="">Nama Klient</label>
                                        <input type="text" name="nama_klient" class="form-control" value="<?= $nama_klient ?>">
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="form-group">
                                        <label for="">Email Klient</label>
                                        <input type="text" name="email_klient" class="form-control" value="<?= $email_klient ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <div class="form-group">
                                        <label for="">Nomor HP</label>
                                        <input type="text" name="no_hp" class="form-control" value="<?= $no_hp ?>" />
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="form-group">
                                        <label for="">Jenis Kelamin</label>
                                        <input type="text" name="jenis_kelamin" class="form-control" value="<?= $jenis_kelamin ?>">
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="form-group">
                                        <label for="">Alamat</label>
                                        <input type="text" name="alamat" class="form-control" value="<?= $alamat ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <div class="form-group">
                                        <label for="">NIK</label>
                                        <input type="text" name="nik" class="form-control" value="<?= $nik ?>">
                                    </div>
                                </div>
                            </div>



                        </div><!-- /.box-body -->
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Edit</button>
                        </div>
                </div>
            </div>
        </div>
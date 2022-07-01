<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Jadwal
            <small>Konsultasi</small>
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

        <h1>Jadwal Konsultan</h1>
        <a href="<?php echo site_url('konsultan/index') ?>">Konsultan</a>

        <div class="row">
            <div class="col-md-12">
                <!-- Main content -->
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Edit Konsultasi</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <form method="post" enctype="multipart/form-data" action="<?= base_url('klient/proses_e_konsul'); ?>">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <div class="form-group">
                                        <label for="">Kode Transaksi</label>
                                        <input type="text" name="kd_transaksi" class="form-control" value="<?= $kode_transaksi ?>" readonly />
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="form-group">
                                        <label for="">Nama Klient</label>
                                        <input type="text" name="nama_klient" class="form-control" value="<?= $nama_klient ?>" readonly>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="form-group">
                                        <label for="">Tema Pertemuan</label>
                                        <input type="text" name="tema" class="form-control" value="<?= $tema_pertemuan ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <div class="form-group">
                                        <label for="">Tanggal Konsultasi</label>
                                        <input type="text" name="tgl_konsul" class="form-control" value="<?= $tgl_konsul ?>" />
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="form-group">
                                        <label for="">Deskripsi</label>
                                        <input type="text" name="desk" class="form-control" value="<?= $desk_konsultasi ?>">
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="form-group">
                                        <label for="">Frekuensi Pertemuan</label>
                                        <input type="text" name="frekuensi" class="form-control" value="<?= $frekuensi_pertemuan ?>">
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.box-body -->
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                </div>
            </div>
        </div>


    </section><!-- /.content -->
</div><!-- /.content-wrapper -->
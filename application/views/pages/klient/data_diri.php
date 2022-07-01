<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Profil
            <small>Konsultan</small>
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

        <h1>Detail Klient</h1>
        <a href="<?php echo site_url('klient/index') ?>">Klient</a>

        <div class="row">
            <div class="col-md-6">
                <!-- Main content -->
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Profil Data Diri </h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <form role="form">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="">Nama</label>
                                <input type="text" name="nama" class="form-control" placeholder="Isi Nama Lengkap Anda" value="<?= $nama; ?>" />
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" name="email" class="form-control" placeholder="Email Anda" value="<?= $email; ?>">
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
                                <input type="text" class="form-control" name="no_hp" value="<?= $no_hp; ?>">
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea class="form-control" rows="3" name="alamat" value="<?= $alamat; ?>"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="">NIK</label>
                                <input type="text" class="form-control" name="NIK" value="<?= $nik; ?>" />
                            </div>

                        </div><!-- /.box-body -->
                        <div class="box-footer">
                        </div>
                </div>
            </div>
        </div>


    </section><!-- /.content -->
</div><!-- /.content-wrapper -->
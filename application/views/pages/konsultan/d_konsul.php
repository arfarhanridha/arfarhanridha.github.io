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

        <h1>Detail Konsultan</h1>
        <a href="<?php echo site_url('konsultan/index') ?>">Konsultan</a>

        <div class="row">
            <div class="col-md-12">
                <!-- Main content -->
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Detail Konsultasi</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <form method="post" enctype="multipart/form-data" action="<?= base_url('konsultan/proses_edit'); ?>">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <div class="form-group">
                                        <label for="">Kode Transaksi</label>
                                        <input type="text" name="nama" class="form-control" placeholder="Isi Nama Lengkap Anda" readonly />
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="form-group">
                                        <label for="">Nama Klient</label>
                                        <input type="text" name="email" class="form-control" placeholder="Email Anda" readonly>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="form-group">
                                        <label for="">Tema Pertemuan</label>
                                        <input type="text" name="email" class="form-control" placeholder="Email Anda" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <div class="form-group">
                                        <label for="">Tanggal Konsultasi</label>
                                        <input type="text" name="nama" class="form-control" placeholder="Isi Nama Lengkap Anda" />
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="form-group">
                                        <label for="">Deskripsi</label>
                                        <input type="text" name="email" class="form-control" placeholder="Email Anda" readonly>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="form-group">
                                        <label for="">Harga</label>
                                        <input type="text" name="email" class="form-control" placeholder="Email Anda" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <div class="form-group">
                                        <label for="">Frekuensi Pertemuan</label>
                                        <input type="text" name="email" class="form-control" placeholder="Email Anda" readonly>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="form-group">
                                        <label for="">Keterangan</label>
                                        <input type="text" name="email" class="form-control" placeholder="Email Anda" readonly>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="form-group">
                                        <label for="">Approval Anda</label><br>
                                        <select class="form-control">
                                            <option>1. Menunggu</option>
                                            <option>2. Diterima</option>
                                            <option>3. Jadwal Ulang</option>
                                            <option>4. Batal</option>
                                        </select>
                                    </div>
                                </div>
                            </div>



                        </div><!-- /.box-body -->
                        <div class="box-footer">
                        </div>
                </div>
            </div>
        </div>


    </section><!-- /.content -->
</div><!-- /.content-wrapper -->
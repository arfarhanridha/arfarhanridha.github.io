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
                        <h3>150</h3>
                        <p>New Orders</p>
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
                        <h3>150</h3>
                        <p>New Orders</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-blue">
                    <div class="inner">
                        <h3>150</h3>
                        <p>New Orders</p>
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
                        <h3>150</h3>
                        <p>New Orders</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>

        <h1>Edit Konsultan</h1>
        <a href="<?php echo site_url('konsultan/index') ?>">Konsultan</a>

        <div class="row">
            <div class="col-md-6">
                <!-- Main content -->
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Edit Data Diri </h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <form method="post" enctype="multipart/form-data" action="<?= base_url('konsultan/proses_edit'); ?>">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="">Nama</label>
                                <input type="text" name="nama" class="form-control" placeholder="Isi Nama Lengkap Anda" value="<?= $nama; ?>" />
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" name="email" class="form-control" placeholder="Email Anda" value="<?= $email; ?>" readonly>
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
                                <label for="">Fakultas</label>
                                <select name="fakultas" class="form-control" value="<?= $fakultas; ?>">
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
                                <textarea class="form-control" rows="3" name="alamat" value="<?= $alamat; ?>"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Bidang Keahlian</label>
                                <input type="text" class="form-control" name="keahlian" value="<?= $keahlian; ?>" />
                            </div>
                            <div class="form-group">
                                <label for="">NIP</label>
                                <input type="text" class="form-control" name="nip" value="<?= $nip; ?>" />
                            </div>
                            <div class="form-group">
                                <label for="">Deskripsi Diri Anda</label>
                                <textarea class="form-control" rows="3" name="desk" value=""></textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Sertifikasi<small>(Harus Berupa JPG, PNG)</small></label>
                                <input type="file" class="form-control" name="file" multiple="" value="" />
                            </div>
                            <div class="form-group">
                                <label for="">Harga</label>
                                <input type="text" class="form-control" name="harga" value="<?= $harga; ?>" />
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
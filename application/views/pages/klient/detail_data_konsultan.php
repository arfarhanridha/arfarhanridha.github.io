<style>
    #yourContainer {
        width: 500px;
        height: 170px;
    }

    #yourContainer img {
        max-width: 100%;
        max-height: 100%;
    }
</style>
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
        <h1>Detail Konsultan</h1>

        <div class="row">
            <div class="col-md-6">
                <!-- Main content -->
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Atur Pertemuan</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" action="<?= base_url('transaksi/insert_transaksi'); ?>" method="POST">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="">Nama</label>
                                <input type="text" name="nama_klient" class="form-control" placeholder="Isi Nama Lengkap Anda" />
                            </div>
                            <input type="hidden" name="id_klient" class="form-control" value="<?= $id_klient ?>" readonly />
                            <div class="form-group">
                                <label for="">Id Konsultan</label>
                                <input type="text" name="id_konsultan" class="form-control" value="<?= $id_konsultan ?>" readonly />
                            </div>
                            <div class="form-group">
                                <label for="">Tema Pertemuan</label>
                                <input type="textarea" name="tema" class="form-control" placeholder="Tema Pertemuan" />
                            </div> 
                            <div class="form-group">
                                <label for="">Tanggal Konsultasi</label>
                                <input type="date" name="tgl_konsul" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask />
                            </div>
                            <div class="form-group">
                                <label for="">Deskripsi</label>
                                <textarea type="text" name="desk" class="form-control" placeholder="Deskripsi"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Harga</label>
                                <input type="text" name="harga" class="form-control" value="<?= $harga; ?>" readonly />
                            </div>
                            <input type="hidden" name="nohp_konsultan" class="form-control" value="<?= $no_hp; ?>" readonly />

                            <div class="form-group">
                                <label for="">Frekuensi Pertemuan</label>
                                <select name="frekuensi" class="form_control">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>

                                </select>
                            </div>


                        </div><!-- /.box-body -->
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>

                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <!-- Custom Tabs (Pulled to the right) -->
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs pull-right">
                        <li class="active"><a href="#tab_1-1" data-toggle="tab">Deskripsi</a></li>
                        <li><a href="#tab_2-2" data-toggle="tab">Profil</a></li>
                        <li><a href="#tab_3-3" data-toggle="tab">Sertifikasi</a></li>
                        <li class="pull-left header"><i class="fa fa-th"></i>Profil Konsultan</li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab_1-1">
                            <b>Deskripsi Konsultan:</b>
                            <p><?= $deskripsi ?></p>
                        </div><!-- /.tab-pane -->
                        <div class="tab-pane" id="tab_2-2">
                            <dl class="">
                                <dt>Nama</dt>
                                <dd><?= $nama ?></dd>
                                <dt>Email</dt>
                                <dd><?= $email ?></dd>
                                <dt>Jenis Kelamin</dt>
                                <dd><?= $jenis_kelamin ?></dd>
                                <dt>Fakultas</dt>
                                <dd><?= $fakultas ?></dd>
                                <dt>Keahlian</dt>
                                <dd><?= $keahlian ?></dd>
                                <dt>NIP</dt>
                                <dd><?= $nip ?></dd>
                                <dt>Harga</dt>
                                <dd><?= $harga ?></dd>
                            </dl>
                        </div><!-- /.tab-pane -->
                        <div class="tab-pane" id="tab_3-3">
                            <b>Sertifikasi</b>
                            <?= $sertifikasi ?>
                            <div id="yourContainer">
                                <img class="img-user" src="<?php echo base_url('assets/dist/sertifikasi_konsultan/') . $sertifikasi; ?>">
                            </div>
                        </div><!-- /.tab-pane -->
                    </div><!-- /.tab-content -->
                </div><!-- nav-tabs-custom -->
                <!-- END CUSTOM TABS -->
            </div><!-- ./col -->
        </div>


    </section><!-- /.content -->
</div><!-- /.content-wrapper -->
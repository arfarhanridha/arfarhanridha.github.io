<!-- Right side column. Contains the navbar and content of the page -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1> Dashboard
            <small>Admin</small>
        </h1>

    </section>

    <!-- Main content -->
    <section class="contents">
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
        <div class="col-xs-12">
            <div class="box box-primary">
                <div class="box-header">
                    <i class="fa fa-tasks"></i>
                    <h3 class="box-title">Data Klient</h3>
                    <div class="box-tools">
                        <div class="input-group">
                            <input type="text" name="table_search" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Search" />
                            <div class="input-group-btn">
                                <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode Transaksi</th>
                                <th>Nama Klient</th>
                                <th>Tema Pertemuan</th>
                                <th>Tanggal Konsultasi</th>
                                <th>Frekuensi</th>
                                <th>Approval Konsultan</th>
                                <?php ?>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($user as $data) {
                            ?>

                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $data->kode_transaksi ?></td>
                                    <td><?php echo $data->nama_klient ?></td>
                                    <td><?php echo $data->tema_pertemuan ?></td>
                                    <td><?php echo $data->tgl_konsul ?></td>
                                    <td><?php echo $data->frekuensi_pertemuan ?></td>
                                    <td><?php echo $data->approval ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>
    </section><!-- /.content -->
</div>
</div><!-- /.content-wrapper -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>Profil
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

        <h1>Detail Klient</h1>
        <a href="<?php echo site_url('klient/index') ?>">Klient</a>

        <div class="row">
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
              <div class="box-header">
                <h3 class="box-title">Informasi Login Anda</h3>
              </div><!-- /.box-header -->
              <!-- form start -->
              <form role="form">
                <div class="box-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Id-User</label>
                    <input type="text" class="form-control" id="iduser" placeholder="<?= $user['id_user']; ?>" readonly />
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                    <input type="text" class="form-control" id="username" placeholder="<?= $user['nama']; ?>" readonly />
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="<?= $user['password']; ?>" readonly />
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="<?= $user['email']; ?>" readonly />
                  </div>

                  <label for="">Foto Profil</label>
                  <div class="user-panel">
                    <div class="pull-left image">
                      <img src="<?php echo base_url('assets/dist/image_user/') . $user['foto_profile']; ?>" class="img-circle" alt="User Image" />
                    </div>
                  </div>

                </div><!-- /.box-body -->
            </div>
          </div>


      </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
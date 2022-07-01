<!-- Right side column. Contains the navbar and content of the page -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>Dashboard
      <small>Klient</small>
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

    <div class='col-md-8'>
      <div class="box box-solid box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Konsultan Kami</h3>
          <div class="box-tools pull-right">
            <span class="label label-success"><?= $this->db->count_all('tb_konsultan'); ?></span>
            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
          </div>
        </div><!-- /.box-header -->

        <div class="box-body no-padding">
          <ul class="users-list clearfix">
            <?php
            foreach ($user as $data) :
            ?>
              <li>
                <img src="<?php echo base_url('assets/dist/image_user/') . $data['foto_profile']; ?>" alt="User Image" />
                <a class="users-list-name" href="<?= base_url('data_konsultan/' . $data['id_konsultan']); ?>"><?= $data['nama'] ?></a>
                <span class="users-list-date"><?= $data['keahlian'] ?></span>
              </li>
            <?php
            endforeach;
            ?>
          </ul>
        </div>
        <div class="box-footer clearfix">
          <a href="#" class="btn btn-sm btn-success btn-flat pull-right">Konsultasi</a>
        </div><!-- /.box-footer -->


      </div>
    </div>
</div>



</section><!-- /.content -->
</div><!-- /.content-wrapper -->
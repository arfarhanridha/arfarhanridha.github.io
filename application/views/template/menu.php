<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo base_url('assets/dist/image_user/') . $this->session->userdata('foto_profile'); ?>" class="img-circle" alt="User Image" />
      </div>
      <div class="pull-left info">
        <p><?= $this->session->userdata('nama'); ?></p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search..." />
        <span class="input-group-btn">
          <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
        </span>
      </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <li></li>
      <!-- Menu Untuk Admin-->
      <?php if ($this->session->userdata('role_id') == 1) { ?>
        <a href="<?= base_url('adm/index') ?>">
          <li class="header">ADMIN</li>
        </a>
        <li class="treeview">
          <a href="<?= base_url('adm/data_klient') ?>">
            <i class="fa fa-user"></i>
            <span>Klient</span>
          </a>
        </li>
        <li class="treeview ">
          <a href="<?= base_url('adm/data_konsultan') ?>">
            <i class="fa fa-cogs"></i>
            <span>Konsultan</span>
          </a>
        </li>
        <li class="treeview ">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Laporan Konsultan</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dollar"></i>
            <span>Laporan Keuangan</span>
          </a>
        </li>
      <?php } ?>

      <!-- Menu Untuk Klient -->
      <?php if ($this->session->userdata('role_id') == 2) { ?>
        <a href="<?= base_url('klient/index') ?>">
          <li class="header">KLIENT</li>
        </a>
        <li class="treeview">
          <a href="<?= site_url('konsultan/profil') ?>">
            <i class="fa fa-user"></i>
            <span>Profil</span>
            <span class="label label-primary pull-right">3</span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= site_url('detail_login_klient') ?>"><i class="fa fa-circle-o"></i> Detail Login</a></li>
            <li><a href="<?= site_url('profil_klient') ?>"><i class="fa fa-circle-o"></i> Profil Data</a></li>
            <li><a href="<?= site_url('edit_klient') ?>"><i class="fa fa-circle-o"></i> Edit Profil</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="<?= site_url('klient/j_klient') ?>">
            <i class="fa fa-tasks"></i> <span>Konsultasi</span> <small class="label pull-right bg-green">3</small>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= site_url('list_konsultan') ?>"><i class="fa fa-circle-o"></i>Konsultasi</a></li>
            <li><a href="<?= site_url('klient/j_klient') ?>"><i class="fa fa-circle-o"></i> Data Konsultasi</a></li>
            <li><a href="<?= site_url('klient/jadwal') ?>"><i class="fa fa-circle-o"></i> Jadwal</a></li>
          </ul>
        </li>
        <li>
          <a href="<?= site_url('klient/riwayat') ?>">
            <i class="fa fa-archive"></i> <span>Riwayat</span> <small class="label pull-right bg-green">Hot</small>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-file-text"></i> <span>Detail Pembayaran</span> <small class="label pull-right bg-green">Hot</small>
          </a>
        </li>
      <?php } ?>

      <!-- Menu Untuk Konsultan-->
      <?php if ($this->session->userdata('role_id') == 3) { ?>
        <a href="<?= base_url('konsultan/index') ?>">
          <li class="header">KONSULTAN</li>
        </a>
        <li class="treeview">
          <a href="<?= site_url('konsultan/profil') ?>">
            <i class="fa fa-user"></i>
            <span>Profil</span>
            <span class="label label-primary pull-right">3</span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= site_url('detail_login_konsultan') ?>"><i class="fa fa-circle-o"></i> Detail Login</a></li>
            <li><a href="<?= site_url('profil_konsultan') ?>"><i class="fa fa-circle-o"></i> Profil Data</a></li>
            <li><a href="<?= site_url('edit_konsultan') ?>"><i class="fa fa-circle-o"></i> Edit Profil</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="<?= site_url('jadwal_konsultan') ?>">
            <i class="fa fa-tasks"></i> <span>Jadwal Konsultasi</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-thumb-tack"></i> <span>Notifikasi</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-calendar"></i> <span>Kalender</span>
          </a>
        </li>


      <?php } ?>

      <?php if ($this->session->userdata('role_id') == 1) { ?>
        <li><a href="#"><i class="fa fa-book"></i> Documentation</a></li>
      <?php } ?>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>

<!-- Kode trx
Tema Pembahasan
Tanggal Konsul
deskripsi konsultasi
approval
keterangan
frekuensi pertemuan
status -->
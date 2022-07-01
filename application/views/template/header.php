<nav class="navbar navbar-static-top" role="navigation">
  <!-- Sidebar toggle button-->
  <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
    <span class="sr-only">Toggle navigation</span>
  </a>
  <div class="navbar-custom-menu">
    <ul class="nav navbar-nav">

      <li>
        <a>
          <i class="fa fa-flag-o"></i>
        </a>
      </li>
      <!-- User Account: style can be found in dropdown.less -->
      <li class="dropdown user user-menu">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <img src="<?php echo base_url('assets/dist/image_user/') . $this->session->userdata('foto_profile'); ?>" class="user-image" alt="User Image" />
          <span class="hidden-xs"><?= $this->session->userdata('nama');  ?></span>
        </a>
        <ul class="dropdown-menu">
          <!-- User image -->
          <li class="user-header">
            <img src="<?php echo base_url('assets/dist/image_user/') . $this->session->userdata('foto_profile'); ?>" class="img-circle" alt="User Image" />
            <p>
              <?= $this->session->userdata('nama'); ?>
              <small>Member since <?= date('d F Y', $user['date_created']) ?></small>
            </p>
          </li>
          <!-- Menu Footer-->
          <li class="user-footer">

            <div class="pull-left">
              <form role="form" method="post" enctype="multipart/form-data" action="<?php echo base_url('auth/edit_foto_profil') ?>">
                <input type="hidden" name="email" value="<?= $this->session->userdata('email'); ?>">
                <input type="file" name="foto" class="">

              </form>
            </div>
            <div class="pull-left">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            <div class="pull-right">
              <a href="<?= base_url('auth/logout'); ?>" class="btn btn-danger"><i class="fa fa-sign-out"></i>Log out</a>
            </div>

          </li>
        </ul>
      </li>
    </ul>
  </div>
</nav>
</header>
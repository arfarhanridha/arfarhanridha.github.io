<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Lengkapi
            <small>Data Diri Klient</small>
        </h1>

    </section>

    <!-- Main content -->
    <section class="content">

        <h1>Daftar Klient</h1>
        <a href="<?php echo site_url('klient/index') ?>">Klient</a>

        <div class="row">
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Daftarkan Diri Data </h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <form method="post" action="<?= base_url('klient/daftar_proses'); ?>">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="">Id User</label>
                                <input type="text" name="id_user" class="form-control" value="<?= $user['id_user'] ?>" readonly />
                            </div>
                            <div class="form-group">
                                <label for="">Nama</label>
                                <input type="text" name="nama" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" name="email" class="form-control" placeholder="Email Anda" value="<?= $user['email']; ?>" readonly>
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
                                <input type="text" class="form-control" name="no_hp" placeholder="Nomor Handphone" />
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea class="form-control" rows="3" name="alamat" placeholder="Alamat ..."></textarea>
                            </div>
                            <div class="form-group">
                                <label for="">NIK</label>
                                <input type="text" class="form-control" name="nik" placeholder="NIK" />
                            </div>

                        </div><!-- /.box-body -->
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>

    </section><!-- /.content -->
</div><!-- /.content-wrapper -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Lengkapi
            <small>Data Diri Konsultan</small>
        </h1>

    </section>

    <!-- Main content -->
    <section class="content">

        <h1>Daftar Konsultan</h1>
        <a href="<?php echo site_url('konsultan/index') ?>">Konsultan</a>

        <div class="row">
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Daftarkan Diri Data </h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <form method="post" action="<?= base_url('konsultan/prosesdaftar'); ?>">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="">Id User</label>
                                <input type="text" name="id_user" class="form-control" value="<?= $user['id_user'] ?>" readonly />
                            </div>
                            <div class="form-group">
                                <label for="">Nama</label>
                                <input type="text" name="nama" class="form-control" value="<?= set_value('nama'); ?>" />
                                <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
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
                                <label for="">Fakultas</label>
                                <select name="fakultas" class="form-control">
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
                                <textarea class="form-control" rows="3" name="alamat" placeholder="Alamat ..."></textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Bidang Keahlian</label>
                                <input type="text" class="form-control" name="keahlian" placeholder="Bidang Keahlian" />
                            </div>
                            <div class="form-group">
                                <label for="">NIP</label>
                                <input type="text" class="form-control" name="nip" placeholder="NIP" />
                            </div>
                            <div class="form-group">
                                <label for="">Harga</label>
                                <input type="text" class="form-control" name="harga" placeholder="Harga" />
                            </div>

                        </div><!-- /.box-body -->
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>

    </section><!-- /.content -->
</div><!-- /.content-wrapper -->
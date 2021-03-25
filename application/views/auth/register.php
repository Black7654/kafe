    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-5">

                    <div class="login-wrap p-0">
                        <h5 class="text-center text-muted">Sign in your Account</h5>
                        <hr>
                        <?= $this->session->flashdata('pesan'); ?>
                        <?= form_open('', ['class' => 'user']); ?>

                        <div class="form-group">

                            <input autofocus="autofocus" autocomplete="off" value="<?= set_value('username'); ?>" type="text" name="username" class="form-control form-control-user" placeholder="Username">
                            <?= form_error('username', '<small class="text-danger">', '</small>'); ?>


                        </div>

                        <div class="form-group">

                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control form-control-user" placeholder="Password">
                                        <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <input type="password" name="password2" class="form-control form-control-user" placeholder="Konfirmasi Password">
                                        <?= form_error('password2', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="form-group">
                            <input value="<?= set_value('nama'); ?>" type="text" name="nama" class="form-control form-control-user" placeholder="Nama">
                            <?= form_error('nama', '<small class="text-danger">', '</small>'); ?>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <input value="<?= set_value('email'); ?>" type="text" name="email" class="form-control form-control-user" placeholder="Email">
                                    <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <input value="<?= set_value('no_telp'); ?>" type="text" name="no_telp" class="form-control form-control-user" placeholder="Telepon">
                                    <?= form_error('no_telp', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>
                        </div>

                        <div class="col-md">
                            <input type="file" class="form-control form-control-user" name="foto" id="foto" accept="image/jpg, image/jpeg" placeholder="Upload Foto">
                            <?= form_error('foto', '<small class="text-danger">', '</small>'); ?>
                        </div>

                        <hr>
                        <div class="form-group">
                            <button type="submit" class="form-control btn btn-black submit px-3"><span class="fa fa-sign-up"></span>&nbsp&nbspSign Up</button>
                        </div>
                        <div class="form-group d-md-flex">
                            <div class="w-50">
                                <label class="checkbox-wrap checkbox-light text-light">Remember Me
                                    <input type="checkbox" checked>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="w-50 text-md-right">
                                <a href="<?php echo base_url(); ?>auth/login" style="color: #fff">Sudah Punya Akun ??</a>
                            </div>
                        </div>
                        <?= form_close(); ?>
                    </div>

                </div>
            </div>
        </div>
    </section>
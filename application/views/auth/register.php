<!-- Outer Row -->
<main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container">

        <div class="card login-card">

            <div class="row no-gutters">

                <div class="col-md-6">
                    <img src="<?php echo base_url() . 'assets/'; ?>login/images/caffe.jpg" alt="login" class="login-card-img">
                </div>

                <div class="col-md-6">
                    <!-- <div class="container"> -->
                    <div class="card-body">
                        <div class="brand-wrapper">
                            <img src="<?php echo base_url() . 'assets/'; ?>login/images/apple.svg" alt="logo" class="logo">
                        </div>

                        <p class="login-card-description">Signup to your account</p>
                        <?= $this->session->flashdata('pesan'); ?>
                        <?= form_open('', ['class' => 'user']); ?>

                        <div class="form-group">
                            <input autofocus="autofocus" autocomplete="off" value="<?= set_value('username'); ?>" type="text" name="username" class="form-control form-control-user" placeholder="Username">
                            <?= form_error('username', '<small class="text-danger">', '</small>'); ?>
                        </div>

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

                        <button class="btn btn-block login-btn mb-4" type="submit">
                            <span class="fa fa-sign-in-alt"></span>&nbsp&nbspSIGN UP
                        </button>
                        <p class="forgot-password-link">Already your account?</p>
                        <p class="login-card-footer-text"><a href="<?php echo base_url(); ?>auth/login" class="text-reset">Sign In</a></p>
                        <?= form_close(); ?>
                    </div>
                    <!-- </div> -->
                </div>
            </div>
        </div>
        <!-- <div class="card login-card">
        <img src="assets/images/login.jpg" alt="login" class="login-card-img">
        <div class="card-body">
          <h2 class="login-card-title">Login</h2>
          <p class="login-card-description">Sign in to your account to continue.</p>
          <form action="#!">
            <div class="form-group">
              <label for="email" class="sr-only">Email</label>
              <input type="email" name="email" id="email" class="form-control" placeholder="Email">
            </div>
            <div class="form-group">
              <label for="password" class="sr-only">Password</label>
              <input type="password" name="password" id="password" class="form-control" placeholder="Password">
            </div>
            <div class="form-prompt-wrapper">
              <div class="custom-control custom-checkbox login-card-check-box">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Remember me</label>
              </div>              
              <a href="#!" class="text-reset">Forgot password?</a>
            </div>
            <input name="login" id="login" class="btn btn-block login-btn mb-4" type="button" value="Login">
          </form>
          <p class="login-card-footer-text">Don't have an account? <a href="#!" class="text-reset">Register here</a></p>
        </div>
      </div> -->
    </div>
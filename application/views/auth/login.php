<main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
  <div class="container">
    <div class="card login-card">
      <div class="row">

        <div class="col-md-6">
          <img src="<?php echo base_url() . 'assets/'; ?>login/images/login2.jpg" alt="login" class="login-card-img">
        </div>

        <div class="col-md-6">
          <div class="card-body">
            <div class="brand-wrapper">
              <img src="<?php echo base_url() . 'assets/'; ?>login/images/apple.svg" alt="logo" class="logo">
            </div>

            <p class="login-card-description">Silahkan Login untuk menjadi member kami</p>

            <?= $this->session->flashdata('pesan'); ?>
            <?= form_open('', ['class' => 'user']); ?>

            <div class="form-group">
              <input value="<?= set_value('username'); ?>" type="text" name="username" class="form-control" placeholder="Username">
              <?= form_error('username', '<small class="text-danger">', '</small>'); ?>
            </div>

            <div class="form-group">
              <input value="<?= set_value('password'); ?>" type="password" name="password" class="form-control" placeholder="Password">
              <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
            </div>

            <div class="form-group">
              <button type="submit" name="login" id="login" class="btn btn-block login-btn mb-4">
                <span class="fa fa-sign-in-alt"></span>&nbsp&nbspLOGIN
              </button>
            </div>


            <p class="forgot-password-link">Lupa Password?</p>
            <p class="login-card-footer-text"><a href="<?php echo base_url(); ?>register" class="text-reset">Daftar</a></p>
            <?= form_close(); ?>

          </div>
        </div>

      </div>
    </div>
  </div>
</main>
<section class="ftco-section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6 text-center mb-0">
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-6 col-lg-5">
        <div class="login-wrap p-0">
          <div class="text-center">
            <img src="<?php echo base_url() . 'assets/'; ?>login/images/apple.svg" alt="logo" width="70px">
          </div>
          <hr>
          <?= $this->session->flashdata('pesan'); ?>
          <?= form_open('', ['class' => 'user']); ?>
          <div class="form-group">
            <input value="<?= set_value('username'); ?>" type="text" name="username" class="form-control" placeholder="Username">
            <span toggle="#password-field" class="fa fa-fw fa-lock field-icon"></span>
            <?= form_error('username', '<small class="text-danger">', '</small>'); ?>

          </div>
          <div class="form-group">
            <input value="<?= set_value('password'); ?>" type="password" name="password" class="form-control" placeholder="Password">
            <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
            <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
          </div>
          <hr>
          <div class="form-group">
            <button type="submit" class="form-control btn btn-black submit px-3"><span class="fa fa-sign-in"></span>&nbsp&nbspSign In</button>
          </div>
          <div class="form-group d-md-flex">
            <div class="w-50">
              <label class="checkbox-wrap checkbox-light text-light">Remember Me
                <input type="checkbox" checked>
                <span class="checkmark"></span>
              </label>
            </div>
            <div class="w-50 text-md-right">
              <a href="<?php echo base_url(); ?>register" style="color: #fff">Lupa Password ??</a>
            </div>
          </div>

          <?= form_close(); ?>

          <p class="w-100 text-center">&mdash; Atau bisa Login dengan &mdash;</p>
          <div class="social d-flex text-center">
            <a href="#" class="px-2 py-2 mr-md-1 rounded text-primary"><span class="fa fa-facebook"></span> Facebook</a>
            <a href="#" class="px-2 py-2 ml-md-1 rounded text-danger"><span class="fa fa-instagram"></span> Instagram</a>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>
<body class="hold-transition register-page">
	<div class="register-box">
		<div class="register-logo">
			<a href="<?= base_url('auth/registration'); ?>"><b>My</b>Gudang</a>
		</div>
		<div class="card">
    	<div class="card-body register-card-body">
      <p class="login-box-msg">Register a new membership</p>

      <form action="<?= base_url('auth/registration');?>" method="post">
        <div class="input-group mb-3">
          <input id="name" type="text" name="name" class="form-control" placeholder="Fullname" value="<?= set_value('name'); ?>">
          <?= form_error('name', '<small class="text-danger">', '</small>'); ?>
        <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
              <div class="input-group mb-3">
          <input id="email" type="email" name="email" class="form-control" placeholder="Email" value="<?= set_value('email'); ?>">
          <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input id="password1" name="password1" type="password" class="form-control" placeholder="Password">
          <?= form_error('password1','<small class="text-danger">','</small>')?>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input id="password2" name="password2" type="password" class="form-control" placeholder="Retype Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
          <div class="row">
          <div class="col-8"></div>
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>

          </div>
        </div>
    </form>

    	<div class="sosial-auth-links text-center mb-3">
        <p>- OR -</p>
        <a href="<?= base_url('auth/registration'); ?>" class="btn brn-block btn-primary"><i class="fab fa-facebook mr-2"></i>Al new membership</a>
	</div>
	
</body>
<body class="bg-gradient-primary">
  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Register a new membership</h1>
                    <?= $this->session->flashdata('message') ?>
                  </div>
                  <form class="user" action="<?= base_url('auth/registration'); ?>" method="post">
                    <div class="form-group input-group mb-3">
                      <input id="name" type="text" name="name" class="form-control" placeholder="Fullname" value="<?= set_value('name'); ?>">
                      <?= form_error('name', '<small class="text-danger">', '</small>'); ?>
                      <div class="input-group-append">
                        <div class="input-group-text">
                          <span class="fas fa-user"></span>
                        </div>
                      </div>
                    </div>
                    <div class="form-group input-group mb-3">
                      <input id="email" type="email" name="email" class="form-control" placeholder="Email" value="<?= set_value('email'); ?>">
                      <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                      <div class="input-group-append">
                        <div class="input-group-text">
                          <span class="fas fa-envelope"></span>
                        </div>
                      </div>
                    </div>
                    <div class="form-group input-group mb-3">
                      <input id="password1" name="password1" type="password" class="form-control" placeholder="Password">
                      <?= form_error('password1', '<small class="text-danger">', '</small>') ?>
                      <div class="input-group-append">
                        <div class="input-group-text">
                          <span class="fas fa-lock"></span>
                        </div>
                      </div>
                    </div>
                    <div class="form-group input-group mb-3">
                      <input id="password2" name="password2" type="password" class="form-control" placeholder="Retype Password">
                      <div class="input-group-append">
                        <div class="input-group-text">
                          <span class="fas fa-lock"></span>
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
                  </form>

                  <div class="sosial-auth-links text-center mb-0">
                    <p>- OR -</p>
                    <a href="<?= base_url('/'); ?>" class="btn btn-block btn-primary">Login</a>
                    <!-- <a href="#" class="btn btn-block btn-danger">
                      <i class="fab fa-google-plus mr-2"></i> I forgot my password
                    </a> -->

                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

</body>
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
                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                    <?= $this->session->flashdata('message') ?>
                  </div>
                  <form class="user" action="<?= base_url('auth/ambilData'); ?>">
                    <div class="form-group">
                      <input id="email" name="email" type="email" class="form-control form-control-user" aria-describedby="emailHelp" placeholder="Enter Email" value="<?= set_value('name') ?>">
                      <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                      <input id="password" name="password" type="password" class="form-control form-control-user" placeholder="Password">
                      <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Login</button>
                    <hr>
                  </form>

                  <div class="sosial-auth-links text-center mb-3">
                    <p>- OR -</p>
                    <a href="<?= base_url('auth/registration'); ?>" class="btn btn-block btn-primary">Register a new membership</a>
                    <a href="#" class="btn btn-block btn-danger">
                      <i class="fab fa-google-plus mr-2"></i> I forgot my password
                    </a>

                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>

  </div>
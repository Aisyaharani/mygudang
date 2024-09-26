  <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Main row -->
            <div class="row justify-content-center">
                <div class="col-">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="d-lg-inline">Data User</h4>
                        </div>

                        <div class="card-body">
                            <form action="<?= base_url('ManageUsername/Lihatdata');?>" method="post">
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
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->

    </section>
  
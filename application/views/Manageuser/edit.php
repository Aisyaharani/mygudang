  <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Main row -->
            <div class="row justify-content-center">
                <div class="col-">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="d-lg-inline">Edit Data supplier</h4>
                        </div>

                        <div class="card-body">
                            <form action="<?= site_url('ManageUser/Ambil/' . $data->id_suplier) ?>" method="POST" role="form">
                                <div class="form-group row">
                                    <label for="supplier" class=" col-form-label">Supplier</label>
                                    <div class="col-10">
                                        <input type="text" name="supplier" id="supplier" class="form-control" value="<?= empty(set_value('supplier')) ? $data->supplier : set_value('supplier')?>">
                                        <?= form_error('supplier') ?>
                                    </div>
                                </div>
                                 <div class="form-group row">
                                    <label for="alamat" class=" col-form-label">Alamat</label>
                                    <div class="col-10">
                                        <input type="text" name="alamat" id="alamat" class="form-control" value="<?= empty(set_value('alamat')) ? $data->alamat : set_value('alamat')?>">
                                        <?= form_error('alamat') ?>
                                    </div>
                                </div>
                                 <div class="form-group row">
                                    <label for="kota" class=" col-form-label">Kota</label>
                                    <div class="col-10">
                                        <input type="text" name="kota" id="kota" class="form-control" value="<?= empty(set_value('kota')) ? $data->kota : set_value('kota')?>">
                                        <?= form_error('kota') ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email" class=" col-form-label">Email</label>
                                    <div class="col-10">
                                        <input type="text" name="email" id="email" class="form-control" value="<?= empty(set_value('email')) ? $data->email : set_value('email')?>">
                                        <?= form_error('email') ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nohp" class=" col-form-label">Telepon</label>
                                    <div class="col-10">
                                        <input type="text" name="nohp" id="nohp" class="form-control" value="<?= empty(set_value('nohp')) ? $data->nohp : set_value('nohp')?>">
                                        <?= form_error('nohp') ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-info btn-block">Edit</button>
                                    <a href="<?= site_url('Manageuser') ?>" class="btn btn-default btn-block">Kembali</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->

    </section>
  
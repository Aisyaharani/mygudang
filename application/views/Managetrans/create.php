    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Main row -->
            <div class="row justify-content-center">
                <div class="col-40">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="d-lg-inline">Request</h4>
                        </div>

                        <div class="card-body">
                             <form action="<?= site_url('ManageTrans/Lihatdata/')?>" method="POST" role="form">
                                 <div class="form-group row">
                                    <label for="pelanggan" class=" col-form-label">pelanggan</label>
                                    <div class="col-10">
                                        <input type="text" name="pelanggan" id="pelanggan" class="form-control" value="<?= set_value('pelanggan')?>">
                                        <?= form_error('pelanggan') ?>
                                    </div>
                                </div>
                                 <div class="form-group row">
                                    <label for="stok" class=" col-form-label">Alamat</label>
                                    <div class="col-10">
                                        <input type="text" name="alamat" id="alamat" class="form-control" value="<?=  set_value('alamat')?>">
                                        <?= form_error('alamat') ?>
                                    </div>
                                </div>
                                 <div class="form-group row">
                                    <label for="email" class=" col-form-label">email</label>
                                    <div class="col-10">
                                        <input type="text" name="email" id="email" class="form-control" value="<?= set_value('email')?>">
                                        <?= form_error('email') ?>
                                    </div>
                                </div>
                                 <div class="form-group row">
                                    <label for="produk" class=" col-form-label">produk</label>
                                    <div class="col-10">
                                        <input type="text" name="produk" id="produk" class="form-control" value="<?=  set_value('produk')?>">
                                        <?= form_error('produk') ?>
                                    </div>
                                </div>
                                 <div class="form-group row">
                                    <label for="permintaan" class=" col-form-label">permintaan</label>
                                    <div class="col-10">
                                        <input type="text" name="permintaan" id="permintaan" class="form-control" value="<?= set_value('permintaan')?>">
                                        <?= form_error('permintaan') ?>
                                    </div>
                                </div>
                                 <div class="form-group row">
                                    <label for="satuan" class=" col-form-label">satuan</label>
                                    <div class="col-10">
                                        <input type="text" name="satuan" id="satuan" class="form-control" value="<?= set_value('satuan')?>">
                                        <?= form_error('satuan') ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-info btn-block">Tambah</button>
                                    <a href="<?= site_url('Managetrans') ?>" class="btn btn-default btn-block">Kembali</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->

    </section>
  
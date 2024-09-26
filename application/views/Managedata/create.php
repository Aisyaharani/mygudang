    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Main row -->
            <div class="row justify-content-center">
                <div class="col-40">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="d-lg-inline">Tambah Data Barang</h4>
                        </div>

                        <div class="card-body">
                            <form action="<?= site_url('ManageData/Lihatdata') ?>" method="POST" role="form">
                                <div class="form-group row">
                                    <label for="supplier" class=" col-form-label">Supplier</label>
                                    <div class="col-10">
                                       <input type="text" name="supplier" id="supplier" class="form-control" value="<?= set_value('supplier') ?>">
                                        <?= form_error('supplier') ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nama" class=" col-form-label">Nama</label>
                                    <div class="col-10">
                                        <input type="text" name="nama" id="nama" class="form-control" value="<?= set_value('nama') ?>">
                                        <?= form_error('nama') ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="harga" class=" col-form-label">Harga</label>
                                    <div class="col-10">
                                        <input type="text" name="harga" id="harga" class="form-control" value="<?= set_value('harga') ?>">
                                        <?= form_error('harga') ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="stok" class=" col-form-label">stok</label>
                                    <div class="col-10">
                                        <input type="text" name="stok" id="stok" class="form-control" value="<?= set_value('stok') ?>">
                                        <?= form_error('stok') ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="satuan" class=" col-form-label">satuan</label>
                                    <div class="col-10">
                                        <input type="text" name="satuan" id="satuan" class="form-control" value="<?= set_value('satuan') ?>">
                                        <?= form_error('satuan') ?>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <button type="submit" class="btn btn-info btn-block">Submit</button>
                                    <a href="<?= site_url('Managedata') ?>" class="btn btn-default btn-block">Kembali</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->

    </section>
  
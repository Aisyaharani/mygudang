    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Main row -->
            <div class="row justify-content-center">
                <div class="col col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="d-lg-inline">Data Supllier</h4>
                            <?php if ( $role['role'] == 2) : ?>
                            <a href="<?= site_url('Manageuser/Create') ?>" class="btn btn-info float-lg-right"><i class="fas fa-plus mr-1"></i>Tambah</a>
                        <?php endif; ?>
                        </div>

                        <div class="card-body p-1" >
                            <table class="table table-striped mb-2">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Supplier </th>
                                        <th>Alamat</th>
                                        <th>Kota</th>
                                        <th>Email</th>
                                        <th>Telepon</th>
                                        <th style="width: 250px">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <?php $no = 1;
                                    foreach ($ManageUser as $item) : ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $item->supplier?></td>
                                            <td><?= $item->alamat?></td>
                                            <td><?= $item->kota ?></td>
                                            <td><?= $item->email ?></td>
                                            <td><?= $item->nohp ?></td>
                                            <?php if ( $role['role'] == 2) : ?>
                                            <td>
                                                <a href="<?= site_url('Manageuser/edit/' . $item->id_suplier) ?>" class="btn btn-warning btn-sm m-1">Edit</a>
                                                <a href="<?= site_url('Manageuser/delete/' . $item->id_suplier) ?>" class="btn btn-danger btn-sm m-1" onclick="return confirm('Anda yakin ingin menghapus data?')">Delete</a>
                                            </td>
                                        <?php endif; ?>
                                        </tr>
                                    <?php endforeach;?>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->

    </section>
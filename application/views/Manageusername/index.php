    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Main row -->
            <div class="row justify-content-center">
                <div class="col col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="d-lg-inline">data user</h4>
                            <?php if ( $role['role'] == 2) : ?>
                            <a href="<?= site_url('Manageusername/Create') ?>" class="btn btn-info float-lg-right"><i class="fas fa-plus mr-1"></i>Tambah</a>
                        <?php endif;  ?>
                        </div>

                        <div class="card-body p-1" >
                            <table class="table table-striped mb-2" position="fixed">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama </th>
                                        <th>Email</th>
                                        <th>Password</th>
                                        <th>level</th>
                                        <th style="width: 250px">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <?php $no = 1;
                                    foreach ($Managename as $item) : ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $item->name?></td>
                                            <td><?= $item->email ?></td>
                                            <td><?= $item->password ?></td>
                                            <td><?= $item->role ?></td>
                                            <td>
                                                <?php if ( $role['role'] == 2) : ?>
                                                <a href="<?= site_url('Manageusername/ganti/') . $item->id ?>" type="submit" name="role" class="btn btn-info"value="1">Make</a>
                                                <a href="<?= site_url('Manageusername/delete/' . $item->id) ?>" class="btn btn-danger btn-sm m-1" onclick="return confirm('Anda yakin ingin menghapus data?')">Delete</a>
                                            </td>
                                            <?php endif; ?>
                                        </tr>
                                    <?php endforeach; ?>
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
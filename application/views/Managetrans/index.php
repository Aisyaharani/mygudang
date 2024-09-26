    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Main row -->
            <div class="row justify-content-center">
                <div class="col col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="d-lg-inline">Data Request</h4>
                            <?php if ( $role['role'] == 1) : ?>
                            <a href="<?= site_url('ManageTrans/Create') ?>" class="btn btn-info float-lg-right"><i class="fas fa-plus mr-1"></i>Request</a>
                        <?php endif;  ?>
                        </div>

                        <div class="card-body p-1" >
                            <table class="table table-striped mb-2" position="fixed">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Pelanggan </th>
                                        <th>ALamat Pelanggan</th>
                                        <th>Email</th>
                                        <th>Produk</th>
                                        <th>Permintaan</th>
                                        <th>Satuan</th>
                                        <th style="width: 250px">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <?php $no = 1;
                                    foreach ($ManageTrans as $item) : ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $item->pelanggan?></td>
                                            <td><?= $item->alamat ?></td>
                                            <td><?= $item->email ?></td>
                                            <td><?= $item->produk ?></td>
                                            <td><?= $item->permintaan?></td>
                                            <td><?= $item->satuan ?></td>
                                            <td>
                                                <?php
                                                 if ( $role['role'] == 1) : ?>
                                                <a href="<?= site_url('Managetrans/edit/' . $item->id_pelanggan) ?>" class="btn btn-warning btn-sm m-1">Edit</a>
                                                <a href="<?= site_url('Managetrans/delete/' . $item->id_pelanggan) ?>" class="btn btn-danger btn-sm m-1" onclick="return confirm('Anda yakin ingin menghapus data?')">Delete</a>
                                                 <?php endif;  ?>
                                            </td>
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
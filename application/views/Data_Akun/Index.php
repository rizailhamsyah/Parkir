<div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3><?= $title; ?></h3>
                            <p class="text-subtitle text-muted">Parkir</p>
                            <?= $this->session->flashdata('msg') ?>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?= base_url(); ?>Dashboard">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><?= $title; ?></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                        <div class="card-header">
                            Daftar <?= $title ?>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-12 mb-3">
                                    <button class="btn btn-block btn-primary" data-bs-toggle="modal" data-bs-target="#tambah">Tambah Data</button>
                                </div>
                            </div>
                            <table class="table table-striped" id="table1">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>No. Telephone</th>
                                        <th>Instansi</th>
                                        <th>Role</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1; foreach ($value->result() as $key) : ?>
                                    <tr>
                                        <td><?= $i++ ?></td>
                                        <td><?= $key->name ?></td>
                                        <td><?= $key->email ?></td>
                                        <td><?= $key->telp ?></td>
                                        <td><?= $key->nama_perusahaan ?></td>
                                        <td><?php 
                                            
                                            if ($key->RoleID == 0){
                                                echo "Superuser";
                                            } else if ($key->RoleID == 1){
                                                echo "Admin";
                                            } else if ($key->RoleID == 2){
                                                echo "Kepala Parkir";
                                            } else if ($key->RoleID == 3){
                                                echo "Operator Parkir";
                                            } else if ($key->RoleID == 4){
                                                echo "Personal Parkir";
                                            } else {
                                                echo "Tidak Ada Role";
                                            }
                                            
                                        ?></td>
                                        <td>
                                            <button class="btn btn-warning res" data-id="<?= $key->id ?>" data-bs-toggle="modal" data-bs-target="#reset"><i class="fas fa-sync-alt"></i></button>
                                            <button class="btn btn-success edt" data-id="<?= $key->id ?>" data-bs-toggle="modal" data-bs-target="#edit"><i class="fas fa-pencil-alt"></i></button>
                                            <?php if ($this->userdata->row()->id != $key->id): ?>
                                                <button type="button" class="btn btn-danger del" data-nama="<?= $key->name ?>" data-id="<?= $key->id ?>" data-bs-toggle="modal" data-bs-target="#hapus"><i class="fas fa-trash-alt"></i></button>
                                            <?php endif; ?>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </section>
            </div>

            <!-- Modal Tambah Data Start -->  
            <?php include 'tambah_data.php' ?>
            <!-- Modal Tambah Data End -->

            <!-- Modal Edit Data Start -->  
            <?php include 'edit.php' ?>
            <!-- Modal Edit Data End -->

            <!-- Modal Hapus Data Start -->  
            <?php include 'delete.php' ?>
            <!-- Modal Hapus Data End -->

            <!-- Modal Reset Password Start -->
            <?php include 'reset.php'; ?>
            <!-- Modal Reset Password End-->

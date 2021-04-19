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
                                    <tr>
                                        <td>1</td>
                                        <td>Riza Ilhamsyah</td>
                                        <td>rizailhamsyah021@gmail.com</td>
                                        <td>0895396580287</td>
                                        <td>Perusahaan</td>
                                        <td>Administrator</td>
                                        <td>
                                            <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#reset"><i class="fas fa-sync-alt"></i></button>
                                            <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#edit"><i class="fas fa-pencil-alt"></i></button>
                                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#hapus"><i class="fas fa-trash-alt"></i></button>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </section>
            </div>

            <!-- Modal Tambah Data Start -->  
            <div class="modal fade text-left" id="tambah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="myModalLabel1">Tambah Data</h5>
                                <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close"><i data-feather="x"></i></button>
                        </div>
                            <div class="modal-body">
                                <form action="<?= base_url(); ?>Data_Akun/Simpan_Data/" method="post">
                                    <div class="form-group">
                                        <label for="Nama" class="form-label">Nama</label>
                                        <input type="text" class="form-control" id="Nama" name="Nama" placeholder="Masukkan Nama">
                                    </div>
                                    <div class="form-group">
                                        <label for="Email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="Email" name="Email" placeholder="Masukkan Email">
                                    </div>
                                    <div class="form-group">
                                        <label for="Password" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="Password" name="Password" placeholder="Massukkan Password">
                                    </div>
                                    <div class="form-group">
                                        <label for="No_Handphone" class="form-label">No. Handphone</label>
                                        <input type="password" class="form-control" id="No_Handphone" name="No_Handphone" placeholder="Massukkan No. Handphone">
                                    </div>
                                    <div class="form-group">
                                        <label for="Perusahaan" class="form-label">Perusahaan</label>
                                        <input type="text" class="form-control" id="Perusahaan" name="Perusahaan" placeholder="Massukkan Perusahaan">
                                    </div>
                                    <div class="form-group">
                                        <label for="Perusahaan" class="form-label">Role</label>
                                        <select class="form-select" aria-label="Default select example">
                                          <option value="1">Admin</option>
                                          <option value="2">Kepala Parkir</option>
                                          <option value="3">Operator Parkir</option>
                                        </select>
                                    </div>
                            </div>
                        <div class="modal-footer">
                            <button type="button" class="btn" data-bs-dismiss="modal">
                                <i class="bx bx-x d-block d-sm-none"></i><span class="d-none d-sm-block">Close</span>
                            </button>
                            <button type="submit" class="btn btn-primary ml-1" value="1"><i class="bx bx-check d-block d-sm-none"></i><span class="d-none d-sm-block">Simpan Data</span></button>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal Tambah Data End -->

            <!-- Modal Edit Data Start -->  
            <div class="modal fade text-left" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="myModalLabel1">Edit Data</h5>
                                <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close"><i data-feather="x"></i></button>
                        </div>
                            <div class="modal-body">
                                <form action="<?= base_url(); ?>Data_Akun/Edit_Data/" method="post">
                                    <div class="form-group">
                                        <label for="Nama" class="form-label">Nama</label>
                                        <input type="text" class="form-control" id="Nama" name="Nama" placeholder="Masukkan Nama">
                                    </div>
                                    <div class="form-group">
                                        <label for="Email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="Email" name="Email" placeholder="Masukkan Email">
                                    </div>
                                    <div class="form-group">
                                        <label for="No_Handphone" class="form-label">No. Handphone</label>
                                        <input type="password" class="form-control" id="No_Handphone" name="No_Handphone" placeholder="Massukkan No. Handphone">
                                    </div>
                                    <div class="form-group">
                                        <label for="Perusahaan" class="form-label">Perusahaan</label>
                                        <input type="text" class="form-control" id="Perusahaan" name="Perusahaan" placeholder="Massukkan Perusahaan">
                                    </div>
                                    <div class="form-group">
                                        <label for="Perusahaan" class="form-label">Role</label>
                                        <select class="form-select" aria-label="Default select example">
                                          <option value="1">Admin</option>
                                          <option value="2">Kepala Parkir</option>
                                          <option value="3">Operator Parkir</option>
                                        </select>
                                    </div>
                            </div>
                        <div class="modal-footer">
                            <button type="button" class="btn" data-bs-dismiss="modal">
                                <i class="bx bx-x d-block d-sm-none"></i><span class="d-none d-sm-block">Close</span>
                            </button>
                            <button type="submit" class="btn btn-success ml-1" value="1"><i class="bx bx-check d-block d-sm-none"></i><span class="d-none d-sm-block">Edit Data</span></button>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal Edit Data End -->

            <!-- Modal Hapus Data Start -->  
            <div class="modal fade text-left" id="hapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="myModalLabel1">Hapus Data</h5>
                                <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close"><i data-feather="x"></i></button>
                        </div>
                            <div class="modal-body">
                                <form action="<?= base_url(); ?>Data_Akun/Delete_Data/" method="post">
                                    <!-- <input type="hidden" name="ID_Assesor" value=""> -->
                                <p>Apakah Anda Yakin Ingin Menghapus Data Ini?</p>
                            </div>
                        <div class="modal-footer">
                            <button type="button" class="btn" data-bs-dismiss="modal">
                                <i class="bx bx-x d-block d-sm-none"></i><span class="d-none d-sm-block">Close</span>
                            </button>
                            <button type="submit" class="btn btn-danger ml-1" value="1"><i class="bx bx-check d-block d-sm-none"></i><span class="d-none d-sm-block">Hapus Data</span></button>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal Hapus Data End -->

            <!-- Modal Reset Password Start -->
            <div class="modal fade text-left" id="reset" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="myModalLabel1">Reset Password</h5>
                                <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close"><i data-feather="x"></i></button>
                        </div>
                            <div class="modal-body">
                                <form action="<?= base_url(); ?>Data_Akun/Reset_Password/" method="post">
                                    <input type="hidden" name="ID_Assesor" value="">
                                <p>Apakah Anda Yakin Ingin Reset Password Data Ini?</p>
                            </div>
                        <div class="modal-footer">
                            <button type="button" class="btn" data-bs-dismiss="modal">
                                <i class="bx bx-x d-block d-sm-none"></i><span class="d-none d-sm-block">Close</span>
                            </button>
                            <button type="submit" class="btn btn-warning ml-1" value="1"><i class="bx bx-check d-block d-sm-none"></i><span class="d-none d-sm-block">Reset Password</span></button>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal Reset Password End-->

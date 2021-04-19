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
                <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h6 class="text-muted font-semibold">Data Keluar Hari Ini</h6>
                                                <h6 class="font-extrabold mb-0">112.000 Kendaraan</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h6 class="text-muted font-semibold">Data Keluar Bulan Ini</h6>
                                                <h6 class="font-extrabold mb-0">183.000 Kendaraan</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h6 class="text-muted font-semibold">Data Keluar Tahun Ini</h6>
                                                <h6 class="font-extrabold mb-0">183.000 Kendaraan</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h6 class="text-muted font-semibold">Total Data Keluar</h6>
                                                <h6 class="font-extrabold mb-0">183.000 Kendaraan</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                <section class="section">
                    <div class="card">
                        <div class="card-header">
                            Daftar <?= $title ?>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped" id="table1">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nomor Polisi</th>
                                        <th>Tanggal</th>
                                        <th>Jam</th>
                                        <th>Nama Perusahaan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>E 4935 YAH</td>
                                        <td>12-04-2021</td>
                                        <td>08:30:00</td>
                                        <td>PT. Karya Abadi</td>
                                        <td>
                                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#hapus"><i class="fas fa-trash-alt"></i></button>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </section>
            </div>

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
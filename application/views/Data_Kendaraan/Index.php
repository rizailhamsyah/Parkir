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
                                        <th>NIK</th>
                                        <th>Nomor Polisi</th>
                                        <th>Perusahaan</th>
                                        <th>Jenis Kendaraan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1; foreach ($kendaraan as $key) : ?>
                                    <tr>
                                        <td><?= $i++ ?></td>
                                        <td><?= $key->nama_pemilik ?></td>
                                        <td><?= $key->nik_pemilik?></td>
                                        <td><?= $key->no_polisi ?></td>
                                        <td><?= $this->db->get_where('parkir_agency', ['perusahaan_id' => $key->id_perusahaan])->row()->nama_perusahaan ?></td>
                                        <td>
                                            <?php 
                                                if ($key->Jenis_Kendaraan == 1){
                                                    echo "Roda Dua";
                                                } else if ($key->Jenis_Kendaraan == 2){
                                                    echo "Roda Tiga";
                                                } else if ($key->Jenis_Kendaraan == 3){
                                                    echo "Roda Empat";
                                                }
                                            ?>
                                        </td>
                                        <td>
                                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#view_qrcode"><i class="fas fa-qrcode"></i></button>
                                            <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#edit"><i class="fas fa-pencil-alt"></i></button>
                                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#hapus"><i class="fas fa-trash-alt"></i></button>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </section>
            </div>

            <!-- Modal Tambah Data Start -->  
            <?php include 'tambah.php' ?>
            <!-- Modal Tambah Data End -->

            <!-- Modal Hapus Data Start -->  
            <div class="modal fade text-left" id="hapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="myModalLabel1">Hapus Data</h5>
                                <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close"><i data-feather="x"></i></button>
                        </div>
                            <div class="modal-body">
                                <form action="<?= base_url(); ?>Data_Kendaraan/Delete_Data/" method="post">
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

            <!-- Modal Edit Start -->
            <div class="modal fade text-left" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="myModalLabel1">Edit Data</h5>
                                <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close"><i data-feather="x"></i></button>
                        </div>
                            <div class="modal-body">
                                <form action="<?= base_url(); ?>Data_Kendaraan/Edit_Data/" method="post">
                                    <div class="form-group">
                                        <label for="Nama" class="form-label">Nama</label>
                                        <input type="text" class="form-control" id="Nama" name="Nama" placeholder="Masukkan Nama">
                                    </div>
                                    <div class="form-group">
                                        <label for="NIK" class="form-label">NIK</label>
                                        <input type="text" class="form-control" id="NIK" name="NIK" placeholder="Masukkan NIK">
                                    </div>
                                    <div class="form-group">
                                        <label for="Nomor_Polisi" class="form-label">Nomor Polisi</label>
                                        <input type="text" class="form-control" id="Nomor_Polisi" name="Nomor_Polisi" placeholder="Masukkan Nomor Polisi">
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
            <!-- Modal Edit End-->

            <!-- Modal View Barcode Start -->
            <div class="modal fade text-left" id="view_qrcode" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="myModalLabel1">QR Code</h5>
                                <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close"><i data-feather="x"></i></button>
                        </div>
                            <div class="modal-body">
                                <form action="<?= base_url(); ?>Data_Kendaraan/Edit_Data/" method="post">
                                    <img src="<?= base_url(); ?>assets/Uploads/qrcode.png" class="img-thumbnail col-6 rounded mx-auto d-block" alt="QR Code">
                            </div>
                        <div class="modal-footer">
                            <button type="button" class="btn" data-bs-dismiss="modal">
                                <i class="bx bx-x d-block d-sm-none"></i><span class="d-none d-sm-block">Close</span>
                            </button>
                            <button type="submit" class="btn btn-primary ml-1" value="1"><i class="bx bx-check d-block d-sm-none"></i><span class="d-none d-sm-block">Print</span></button>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal View Barcode End-->

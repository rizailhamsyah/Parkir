<div class="modal fade text-left" id="tambah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="myModalLabel1">Tambah Data</h5>
                                <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close"><i data-feather="x"></i></button>
                        </div>
                            <div class="modal-body">
                                <form action="<?= base_url(); ?>Data_Kendaraan/Simpan_Data/" method="post">
                                    <div class="form-group">
                                        <label for="Nama" class="form-label">Nama</label>
                                        <input type="text" class="form-control" id="Nama" name="nama" placeholder="Masukkan Nama">
                                    </div>
                                    <div class="form-group">
                                        <label for="NIK" class="form-label">NIK</label>
                                        <input type="text" class="form-control" id="NIK" name="nik" placeholder="Masukkan NIK">
                                    </div>
                                    <div class="form-group">
                                        <label for="Nomor_Polisi" class="form-label">Nomor Polisi</label>
                                        <input type="text" class="form-control" id="Nomor_Polisi" name="nopol" placeholder="Masukkan Nomor Polisi">
                                    </div>
                                    <div class="form-group">
                                        <label for="jenis">Jenis Kendaraan</label>
                                        <select name="jenis" class="form-control">
                                            <option value="1">Roda Dua</option> 
                                            <option value="2">Roda Tiga</option>
                                            <option value="3">Roda Empat</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="Perusahaan" class="form-label">Perusahaan</label>
                                        <select name="perusahaan" class="form-control">
                                            <?php foreach ($this->db->get('parkir_agency')->result() as $key ) : ?>
                                            <option value="<?= $key->perusahaan_id ?>"><?= $key->nama_perusahaan ?></option>
                                            <?php endforeach; ?>
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
<div class="modal fade text-left" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel1">Edit Data</h5>
                    <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close"><i data-feather="x"></i></button>
            </div>
                <div class="modal-body">
                    <form action="<?= base_url(); ?>Data_Akun/Edit_Data/" method="post">
                        <div class="edts">
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

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script>
    $(function(){
        $('.edt').on('click', function(){
            var id = $(this).data('id');
            $.ajax({
                url: '<?= base_url('Data_Akun/getAkun') ?>',
                method: 'POST',
                dataType: 'json',
                data: {id : id},
                success : function(data){
                    var pers = data.perusahaan_id;
                    $('.edts').html(`
                        <div class="form-group">
                            <label for="Nama" class="form-label">Nama</label>
                            <input type="hidden" name="id" value="`+ data.id +`">
                            <input type="text" class="form-control" id="Nama" name="nama" value="`+ data.name +`">
                        </div>
                        <div class="form-group">
                            <label for="Email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="Email" name="email" value="`+ data.email +`">
                        </div>
                        <div class="form-group">
                            <label for="No_Handphone" class="form-label">No. Handphone</label>
                            <input type="password" class="form-control" id="No_Handphone" name="telp" value="`+ data.telp  +`">
                        </div>
                        <div class="form-group">
                            <label for="Perusahaan" class="form-label">Perusahaan</label>
                            <select name="perusahaan" class="form-control">
                                <?php foreach ($this->db->get('parkir_agency')->result() as $key ) : ?>
                                    <option value="<?= $key->perusahaan_id ?>"><?= $key->nama_perusahaan ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="Perusahaan" class="form-label">Role</label>
                            <select class="form-select" name="role" aria-label="Default select example">
                                <option value="1">Admin</option>
                                <option value="2">Kepala Parkir</option>
                                <option value="3">Operator Parkir</option>
                                <option value="4">Personal Parkir</option>
                            </select>
                        </div>
                    `);
                }
            })
        })
    })
</script>
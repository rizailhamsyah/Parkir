<div class="modal fade text-left" id="hapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title tdel" id="myModalLabel1">Hapus Data</h5>
                    <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close"><i data-feather="x"></i></button>
            </div>
                <div class="modal-body">
                    <form action="<?= base_url(); ?>Data_Akun/Delete_Data/" method="post">
                    <div class="restaa"></div>
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

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script>
    $(function(){
        $('.del').on('click', function(){
            var id = $(this).data('id');
            var nama = $(this).data('nama');
            $('.restaa').html('<input type="hidden" name="id" value="'+ id +'">');
            $('.tdel').html('Hapus Data ' + nama)
        })
    })
</script>

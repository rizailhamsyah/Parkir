<div class="modal fade text-left" id="reset" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel1">Reset Password</h5>
                    <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close"><i data-feather="x"></i></button>
            </div>
                <div class="modal-body">
                    <form action="<?= base_url(); ?>Data_Akun/Reset_Password/" method="post">
                        <div class="restaa">
                        </div>
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
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script>
    $(function(){
        $('.res').on('click', function(){
            var id = $(this).data('id');
            $('.restaa').html('<input type="hidden" name="id" value="'+ id +'">');
        })
    })
</script>

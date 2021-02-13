<a href="<?php echo base_url();?>driver/tambah" class="btn btn-primary">Tambah</a>   
<div class="card mb-4 mt-2">
    <div class="card-header">
        <i class="fas fa-table mr-1"></i>
        List Driver
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011/04/25</td>
                        <td>$320,800</td>
                    </tr>                        
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="modal fade" id="modalHapus" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Konfirmasi!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Anda Yakin Ingin Menghapus Data???
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a type="button" class="btn btn-danger" id="btn-hapus">Hapus</a>
            </div>
        </div>
    </div>
</div>

<script>
    setTimeout(function() {
        $('#alert_flash').addClass('collapse');
    }, 2000);

    function modal_hapus(id){
        $('#btn-hapus').attr('href','<?=base_url();?>driver/doHapus/'+id);
        $('#modalHapus').modal('show');
    }
</script>
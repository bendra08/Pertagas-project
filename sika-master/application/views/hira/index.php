<div class="row">
    <div class="col-md-12">
        <?= fs_show_alert() ?>
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Data Registrasi</h3>
                <div class="box-tools">

                </div>
            </div>
            <div class="box-body table-responsive">
                <table id="dtable" class="table table-bordered table-hover">
                    <thead>
                        <th>No</th>
                        <th>Judul Pekerjaan</th>
                        <th>Jenis SIKA</th>
                        <th>No Notifikasi/WO</th>
                        <th>Lampiran</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </thead>
                    
                </table>

            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <div class="form-group col-md-1">
                    <?= anchor('hira/add/','<i class="fa fa-plus"></i> Tambah', array('class' => 'btn btn-primary'));?>
                </div>
            </div>
            <!-- /.box-footer-->
        </div>
    </div>
</div>
</div>
</div>
<?php $this->load->view('hira/modal_comment') ?>
<?php $this->load->view('hira/modal_pending') ?>
<script>
function showMsg(msg) {
    $('#alasan_pending').html(msg);
    $('#modal-comment').modal();
}
function loadtable() {
    //datatables
    table = $('#dtable').DataTable({
        'paging': true,
        'lengthChange': true,
        'searching': true,
        'ordering': true,
        'info': true,
        'autoWidth': true,
        'columns': [{
                'width': '50px'
            },
            null,
            null,
            null,
            null,
            null,
            null,
            
            
        ],
        'bDestroy': true,
        'processing': true, //Feature control the processing indicator.\
        'serverSide': true, //Feature control DataTables' server-side processing mode.\
        'order': [], //Initial no order.

        // Load data for the table's content from an Ajax source
        'ajax': {
            'url': "<?= site_url('hira/ajax_list') ?>",
            'type': "POST",
        },

        //Set column definition initialisation properties.
        'columnDefs': [{
            'targets': [0], //first column / numbering column
            'orderable': false, //set not orderable
        }, ],

    });
}

function showPending(id){
    $('#form_pending').attr('action','<?= base_url('hira/pending_detail/').'/' ?>' + id);
    $('#modal-pending').modal();
  }
</script>
<div class="row">
    <div class="col-md-12">
        <?= fs_show_alert() ?>
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Data User</h3>
                <div class="box-tools">

                </div>
            </div>
            <div class="box-body table-responsive">
                <table id="dtable" class="table table-bordered table-hover">
                    <thead>
                        <th>Username</th>
                        <th>Nama Lengkap</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </thead>
                    
                </table>

            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <div class="form-group col-md-1">
                    <?= anchor('user/add/','<i class="fa fa-plus"></i> Tambah', array('class' => 'btn btn-primary'));?>
                </div>
            </div>
            <!-- /.box-footer-->
        </div>
    </div>
</div>
</div>
</div>

<script>
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
            
            
        ],
        'bDestroy': true,
        'processing': true, //Feature control the processing indicator.\
        'serverSide': true, //Feature control DataTables' server-side processing mode.\
        'order': [], //Initial no order.

        // Load data for the table's content from an Ajax source
        'ajax': {
            'url': "<?= site_url('user/ajax_list') ?>",
            'type': "POST",
        },

        //Set column definition initialisation properties.
        'columnDefs': [{
            'targets': [0], //first column / numbering column
            'orderable': false, //set not orderable
        }, ],

    });
}
</script>
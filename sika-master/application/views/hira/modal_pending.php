<div class="modal fade" id="modal-pending">
    <div class="modal-dialog">
    <?= form_open('hira/pending/',array('id' => 'form_pending', 'method'=>'post')) ?>
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Pending</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Alasan Pending <b style="color:red">*</b></label>
                    <div class="col-sm-8">
                        <input id="comment" name="comment" type="text" class="form-control" placeholder="Alasan Pending" required>
                    </div>
                </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-danger" >Tolak</button>
            </div>
        </div>
        <!-- /.modal-content -->

        <?= form_close() ?>
    </div>
    <!-- /.modal-dialog -->
</div>
<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Ruang Rapat Add</h3>
            </div>
            <?php echo form_open('ruang_rapat/add'); ?>
            <div class="box-body">
                <div class="row clearfix">
                    <div class="col-md-6">
                        <label for="no" class="control-label">No</label>
                        <div class="form-group">
                            <input name="no" class="form-control" id="no" type="text"
                                value="<?php echo $this->input->post('no'); ?>" required />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="tempat" class="control-label">Tempat</label>
                        <div class="form-group">
                            <textarea name="tempat" class="form-control"
                                id="tempat"><?php echo $this->input->post('tempat'); ?></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-footer">
                <button type="submit" class="btn btn-success">
                    <i class="fa fa-check"></i> Save
                </button>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>
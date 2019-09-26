<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Fungsi Add</h3>
            </div>
            <?php echo form_open('fungsi/add'); ?>
            <div class="box-body">
                <div class="row clearfix">
                    <div class="col-md-6">
                        <label for="id_fungsi" class="control-label">Kode Fungsi</label>
                        <div class="form-group">
                            <input type="text" name="id_fungsi" value="<?php echo $this->input->post('id_fungsi'); ?>"
                                class="form-control" id="id_fungsi" required />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="fungsi" class="control-label">Fungsi</label>
                        <div class="form-group">
                            <input type="text" name="fungsi" value="<?php echo $this->input->post('fungsi'); ?>"
                                class="form-control" id="fungsi" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="nama_pejabat" class="control-label">Nama Pejabat</label>
                        <div class="form-group">
                            <input type="text" name="nama_pejabat"
                                value="<?php echo $this->input->post('nama_pejabat'); ?>" class="form-control"
                                id="nama_pejabat" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="no_kbo" class="control-label">No Kbo</label>
                        <div class="form-group">
                            <input type="text" name="no_kbo" value="<?php echo $this->input->post('no_kbo'); ?>"
                                class="form-control" id="no_kbo" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="nama_kbo" class="control-label">Nama Kbo</label>
                        <div class="form-group">
                            <input type="text" name="nama_kbo" value="<?php echo $this->input->post('nama_kbo'); ?>"
                                class="form-control" id="nama_kbo" />
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
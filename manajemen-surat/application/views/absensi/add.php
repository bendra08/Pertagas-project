<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Absensi Add</h3>
            </div>
            <?php echo form_open('absensi/add'); ?>
            <div class="box-body">
                <div class="row clearfix">
								<div class="col-md-6">
                        <label for="no_absensi" class="control-label">No Absensi</label>
                        <div class="form-group">
                            <input type="text" name="no_absensi" value="<?php echo date('Y-m-d'); ?>"
                                class="form-control" id="no_absensi" required />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="agenda" class="control-label">Agenda</label>
                        <div class="form-group">
                            <input type="text" name="agenda" value="<?php echo $this->input->post('agenda'); ?>"
                                class="form-control" id="agenda" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="hari_tanggal" class="control-label">Hari Tanggal</label>
                        <div class="form-group">
                            <input type="text" name="hari_tanggal"
                                value="<?php echo $this->input->post('hari_tanggal'); ?>" class="form-control"
                                id="hari_tanggal" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="pukul" class="control-label">Pukul</label>
                        <div class="form-group">
                            <input type="text" name="pukul" value="<?php echo $this->input->post('pukul'); ?>"
                                class="form-control" id="pukul" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="no" class="control-label">Tempat</label>
                        <div class="form-group">
                            <?php echo form_dropdown('tempat', $tempat,@$selected['tempat'],[ 'id' => 'tempat','class' => 'form-control','required' => 'true']); ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="tipe" class="control-label">Tipe</label>
                        <div class="form-group">
                            <?php echo form_dropdown('tipe', $tipe,@$selected['tipe'],[ 'id' => 'tipe','class' => 'form-control','required' => 'true']); ?>
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
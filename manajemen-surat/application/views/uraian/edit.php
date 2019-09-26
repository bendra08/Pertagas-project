<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Uraian Edit</h3>
            </div>
            <?php echo form_open('uraian/edit/'.base64_encode($uraian['no_uraian'])); ?>
            <div class="box-body">
                <div class="row clearfix">
                    <div class="col-md-12">
                        <label for="id_notulen" class="control-label">ID Notulen</label>
                        <div class="form-group">
                            <input type="text" name="id_notulen"
                                value="<?php echo ($this->input->post('id_notulen')) ? $this->input->post('id_notulen') : $uraian['id_notulen']; ?>"
                                class="form-control" id="id_notulen" disabled />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="no_uraian" class="control-label">No. Uraian</label>
                        <div class="form-group">
                            <input type="text" name="no_uraian"
                                value="<?php echo ($this->input->post('no_uraian') ? $this->input->post('no_uraian') : $uraian['no_uraian']); ?>"
                                class="form-control" id="no_uraian" required />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="rencana" class="control-label">Rencana</label>
                        <div class="form-group">
                            <input type="text" name="rencana"
                                value="<?php echo ($this->input->post('rencana') ? $this->input->post('rencana') : $uraian['rencana']); ?>"
                                class="form-control" id="rencana" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="jangka_waktu" class="control-label">Jangka Waktu</label>
                        <div class="input-group date">
                            <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </div>
                            <input type="text" name="jangka_waktu"
                                value="<?php echo ($this->input->post('jangka_waktu') ? $this->input->post('jangka_waktu') : $uraian['jangka_waktu']); ?>"
                                placeholder="YYYY-MM-DD" data-date-format="yyyy-mm-dd" class="form-control pull-right"
                                id="tanggal_po" autocomplete="off" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="penanggung_jawab" class="control-label">Penanggung Jawab</label>
                        <div class="form-group">
                            <input type="text" name="penanggung_jawab"
                                value="<?php echo ($this->input->post('penanggung_jawab') ? $this->input->post('penanggung_jawab') : $uraian['penanggung_jawab']); ?>"
                                class="form-control" id="penanggung_jawab" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="uraian" class="control-label">Uraian</label>
                        <div class="form-group">
                            <textarea name="uraian" class="form-control"
                                id="uraian"><?php echo ($this->input->post('uraian') ? $this->input->post('uraian') : $uraian['uraian']); ?></textarea>
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
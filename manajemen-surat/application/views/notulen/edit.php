<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Notulen Edit</h3>
            </div>
            <?php echo form_open('notulen/edit/'.$notulen['no_notulen']); ?>
            <div class="box-body">
                <div class="row clearfix">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="col-md-12">
                                <label for="perihal" class="control-label">Perihal</label>
                                <div class="form-group">
                                    <input type="text" name="perihal"
                                        value="<?php echo ($this->input->post('perihal')) ? $this->input->post('perihal') : $notulen['perihal']; ?>"
                                        class="form-control" id="perihal" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="tempat" class="control-label">Tempat</label>
                                <div class="form-group">
                                    <?php echo form_dropdown('tempat', $tempat,@$selected['tempat'],[ 'id' => 'tempat','class' => 'form-control','required' => 'true']); ?>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="waktu" class="control-label">Waktu</label>
                                <div class="form-group">
                                    <input type="text" name="waktu"
                                        value="<?php echo ($this->input->post('waktu')) ? $this->input->post('waktu') : $notulen['waktu']; ?>"
                                        class="form-control" id="waktu" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="daftar_hadir" class="control-label">Daftar Hadir</label>
                                <div class="form-group">
                                    <input type="text" name="daftar_hadir"
                                        value="<?php echo ($this->input->post('daftar_hadir')) ? $this->input->post('daftar_hadir') : $notulen['daftar_hadir']; ?>"
                                        class="form-control" id="daftar_hadir" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-12">
                                <label for="id_fungsi" class="control-label">Kode Fungsi</label>
                                <div class="form-group">
                                    <input type="text" name="id_fungsi" value="<?php echo $notulen['id_fungsi'] ?>"
                                        class="form-control" id="id_fungsi" readonly />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="no_kbo" class="control-label">No KBO</label>
                                <div class="form-group">
                                    <input type="text" name="no_kbo" value="<?php echo $notulen['no_kbo'] ?>"
                                        class="form-control" id="no_kbo" readonly />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="ttd_1" class="control-label">Penanda tangan 1</label>
                                <div class="form-group">
                                    <input type="text" name="ttd_1"
                                        value="<?php echo ($this->input->post('ttd_1')) ? $this->input->post('ttd_1') : $notulen['ttd_1']; ?>"
                                        class="form-control" id="ttd_1" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="jabatan1" class="control-label">Jabatan</label>
                                <div class="form-group">
                                    <input type="text" name="jabatan1"
                                        value="<?php echo ($this->input->post('jabatan1')) ? $this->input->post('jabatan1') : $notulen['jabatan1']; ?>"
                                        class="form-control" id="jabatan1" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="ttd_2" class="control-label">Penanda tangan 2</label>
                                <div class="form-group">
                                    <input type="text" name="ttd_2"
                                        value="<?php echo ($this->input->post('ttd_2')) ? $this->input->post('ttd_2') : $notulen['ttd_2']; ?>"
                                        class="form-control" id="ttd_2" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="jabatan2" class="control-label">Jabatan</label>
                                <div class="form-group">
                                    <input type="text" name="jabatan2"
                                        value="<?php echo ($this->input->post('jabatan2')) ? $this->input->post('jabatan2') : $notulen['jabatan2']; ?>"
                                        class="form-control" id="jabatan2" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="ttd_3" class="control-label">Penanda tangan 3</label>
                                <div class="form-group">
                                    <input type="text" name="ttd_3"
                                        value="<?php echo ($this->input->post('ttd_3')) ? $this->input->post('ttd_3') : $notulen['ttd_3']; ?>"
                                        class="form-control" id="ttd_3" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="jabatan3" class="control-label">Jabatan</label>
                                <div class="form-group">
                                    <input type="text" name="jabatan3"
                                        value="<?php echo ($this->input->post('jabatan3')) ? $this->input->post('jabatan3') : $notulen['jabatan3']; ?>"
                                        class="form-control" id="jabatan3" />
                                </div>
                            </div>
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
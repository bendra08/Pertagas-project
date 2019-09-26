<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Po Edit</h3>
            </div>
            <?php echo form_open('po/edit/'.urlencode($po['no_po'])); ?>
            <div class="box-body">
                <div class="row clearfix">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="col-md-12">
                                <label for="no_po" class="control-label">No PO</label>
                                <div class="form-group">
                                    <input type="text" name="no_po"
                                        value="<?php echo ($this->input->post('no_po') ? $this->input->post('no_po') : $po['no_po']); ?>"
                                        class="form-control" id="no_po" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="gl_account" class="control-label">G/L Account</label>
                                <div class="form-group">
                                    <input type="text" name="gl_account"
                                        value="<?php echo ($this->input->post('gl_account') ? $this->input->post('gl_account') : $po['gl_account']); ?>"
                                        class="form-control" id="gl_account" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="cost_center" class="control-label">Cost Center</label>
                                <div class="form-group">
                                    <input type="text" name="cost_center"
                                        value="<?php echo ($this->input->post('cost_center') ? $this->input->post('cost_center') : $po['cost_center']); ?>"
                                        class="form-control" id="cost_center" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="nama_perusahaan" class="control-label">Nama Perusahaan</label>
                                <div class="form-group">
                                    <input type="text" name="nama_perusahaan"
                                        value="<?php echo ($this->input->post('nama_perusahaan') ? $this->input->post('nama_perusahaan') : $po['nama_perusahaan']); ?>"
                                        class="form-control" id="nama_perusahaan" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="pemilik_pekerjaan" class="control-label">Pemilik Pekerjaan</label>
                                <div class="form-group">
                                    <input type="text" name="pemilik_pekerjaan"
                                        value="<?php echo ($this->input->post('pemilik_pekerjaan') ? $this->input->post('pemilik_pekerjaan') : $po['pemilik_pekerjaan']); ?>"
                                        class="form-control" id="pemilik_pekerjaan" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-12">
                                <label for="jabatan" class="control-label">Jabatan</label>
                                <div class="form-group">
                                    <input type="text" name="jabatan"
                                        value="<?php echo ($this->input->post('jabatan') ? $this->input->post('jabatan') : $po['jabatan']); ?>"
                                        class="form-control" id="jabatan" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="no_rek" class="control-label">No Rek</label>
                                <div class="form-group">
                                    <input type="text" name="no_rek"
                                        value="<?php echo ($this->input->post('no_rek') ? $this->input->post('no_rek') : $po['no_rek']); ?>"
                                        class="form-control" id="no_rek" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="nama_bank" class="control-label">Nama Bank</label>
                                <div class="form-group">
                                    <input type="text" name="nama_bank"
                                        value="<?php echo ($this->input->post('nama_bank') ? $this->input->post('nama_bank') : $po['nama_bank']); ?>"
                                        class="form-control" id="nama_bank" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="judul_pembayaran" class="control-label">Judul Pembayaran</label>
                                <div class="form-group">
                                    <textarea name="judul_pembayaran" class="form-control"
                                        id="judul_pembayaran"><?php echo ($this->input->post('judul_pembayaran') ? $this->input->post('judul_pembayaran') : $po['judul_pembayaran']); ?></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="tanggal_po" class="control-label">Tanggal Po</label>
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" name="tanggal_po" placeholder="YYYY-MM-DD" data-date-format="yyyy-mm-dd"
                                        value="<?php echo ($this->input->post('tanggal_po') ? $this->input->post('tanggal_po') : $po['tanggal_po']); ?>"
                                        class="form-control pull-right" id="tanggal_po" />
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
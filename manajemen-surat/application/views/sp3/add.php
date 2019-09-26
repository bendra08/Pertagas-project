<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Sp3 Add</h3>
            </div>
            <?php echo form_open('sp3/add'); ?>
            <div class="box-body">
                <div class="row clearfix">
                    <div class="col-md-4">
                        <div class="col-md-12">
                            <label for="tanggal" class="control-label">Tanggal Surat</label>
                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" name="tanggal" value="<?php echo date('Y-m-d'); ?>"
                                    placeholder="YYYY-MM-DD" data-date-format="yyyy-mm-dd"
                                    class="form-control pull-right" id="datepicker" autocomplete="off" />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="kepada" class="control-label">Kepada</label>
                            <div class="form-group">
                                <input type="text" name="kepada" value="VP Financial Controller" class="form-control"
                                    id="kepada" disabled />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="dari" class="control-label">Dari</label>
                            <div class="form-group">
                                <?php echo form_dropdown('dari', $fungsi,@$selected['fungsi'],[ 'id' => 'dari','class' => 'form-control','required' => 'true','onchange'=>'getFungsi()']); ?>
                            </div>
                            <label id="loading" hidden>Loading...</label>
                        </div>
                        <div class="col-md-12">
                            <label for="no_invoice" class="control-label">No Invoice</label>
                            <div class="form-group">
                                <input type="text" name="no_invoice"
                                    value="<?php echo $this->input->post('no_invoice'); ?>" class="form-control"
                                    id="no_invoice" />
                            </div>
                        </div>
                    
                        <div class="col-md-12">
                            <label for="lampiran_doc" class="control-label">Lampiran Doc</label>
                            <div class="form-group">
                                <textarea name="lampiran_doc" class="form-control"
                                    id="lampiran_doc"><?php echo $this->input->post('lampiran_doc'); ?></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="nilai_invoice" class="control-label">Jumlah Pembayaran</label>
                            <div class="form-group">
                                <input type="text" name="nilai_invoice"
                                    value="<?php echo $this->input->post('nilai_invoice'); ?>" class="form-control"
                                    id="nilai_invoice" />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="no_sa_gr" class="control-label">No Sa Gr</label>
                            <div class="form-group">
                                <input type="text" name="no_sa_gr" value="<?php echo $this->input->post('no_sa_gr'); ?>"
                                    class="form-control" id="no_sa_gr" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="col-md-12">
                            <label for="no_po" class="control-label">No Po</label>
                            <div class="form-group row">
                                <div class="col-md-10">
                                    <input type="text" name="no_po" value="<?php echo $this->input->post('no_po'); ?>"
                                        class="form-control" id="no_po" />
                                </div>
                                <div class="col-md-2">
                                    <button type="button" class="btn btn-primary" onclick="getPO()"><i
                                            class="fa fa-search"></i></button>
                                </div>
                                <label id="loading_po" hidden>Loading...</label>

                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="judul_pembayaran" class="control-label">Untuk Pembayaran</label>
                            <div class="form-group">
                                <input type="text" tabindex="-1" name="judul_pembayaran"
                                    value="<?php echo $this->input->post('judul_pembayaran'); ?>" class="form-control"
                                    id="judul_pembayaran" readonly />
                            </div>
                        </div>

                        <div class="col-md-12">
                            <label for="tahap" class="control-label">Proses</label>
                            <div class="form-group">
                                <input type="text" tabindex="-1" name="tahap"
                                    value="<?php echo $this->input->post('tahap'); ?>" class="form-control"
                                    id="tahap" />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="tanggal_po" class="control-label">Tanggal Po</label>
                            <div class="form-group">
                                <input type="text" tabindex="-1" name="tanggal_po"
                                    value="<?php echo $this->input->post('tanggal_po'); ?>" class="form-control"
                                    id="tanggal_po" readonly />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="gl_account" class="control-label">Gl Account</label>
                            <div class="form-group">
                                <input type="text" tabindex="-1" name="gl_account"
                                    value="<?php echo $this->input->post('gl_account'); ?>" class="form-control"
                                    id="gl_account" readonly />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="cost_center" class="control-label">Cost Center</label>
                            <div class="form-group">
                                <input type="text" tabindex="-1" name="cost_center"
                                    value="<?php echo $this->input->post('cost_center'); ?>" class="form-control"
                                    id="cost_center" readonly />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="pemilik_pekerjaan" class="control-label">Pemilik Pekerjaan</label>
                            <div class="form-group">
                                <input type="text" tabindex="-1" name="pemilik_pekerjaan"
                                    value="<?php echo $this->input->post('pemilik_pekerjaan'); ?>" class="form-control"
                                    id="pemilik_pekerjaan" readonly />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="jabatan" class="control-label">Jabatan</label>
                            <div class="form-group">
                                <input type="text" tabindex="-1" name="jabatan"
                                    value="<?php echo $this->input->post('jabatan'); ?>" class="form-control"
                                    id="jabatan" readonly />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="col-md-12">
                            <label for="nama_perusahaan" class="control-label">Dibayarkan kepada</label>
                            <div class="form-group">
                                <input type="text" name="nama_perusahaan"
                                    value="<?php echo $this->input->post('nama_perusahaan'); ?>" class="form-control"
                                    id="nama_perusahaan" tabindex="-1" readonly />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="nama_bank" class="control-label">Nama Bank</label>
                            <div class="form-group">
                                <input type="text" name="nama_bank"
                                    value="<?php echo $this->input->post('nama_bank'); ?>" class="form-control"
                                    id="nama_bank" tabindex="-1" readonly />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="no_rek" class="control-label">No Rek</label>
                            <div class="form-group">
                                <input type="text" name="no_rek" value="<?php echo $this->input->post('no_rek'); ?>"
                                    class="form-control" id="no_rek" tabindex="-1" readonly />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="lokasi" class="control-label">Lokasi</label>
                            <div class="form-group">
                                <input type="text" name="lokasi" value="<?php echo $this->input->post('lokasi'); ?>"
                                    class="form-control" id="lokasi" />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="tanggal_invoice" class="control-label">Tanggal Invoice</label>
                            <div class="input-group date">

                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" name="tanggal_invoice"
                                    value="<?php echo $this->input->post('tanggal_invoice'); ?>"
                                    placeholder="YYYY-MM-DD" data-date-format="yyyy-mm-dd"
                                    class="form-control pull-right" id="datepicker2" autocomplete="off" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="nama_user" class="control-label">Nama User</label>
                            <div class="form-group">
                                <input type="text" name="nama_user"
                                    value="<?php echo $this->input->post('nama_user'); ?>" class="form-control"
                                    id="nama_user" tabindex="-1" readonly />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="jabatan_user" class="control-label">Jabatan User</label>
                            <div class="form-group">
                                <input type="text" name="jabatan_user"
                                    value="<?php echo $this->input->post('jabatan_user'); ?>" class="form-control"
                                    id="jabatan_user" tabindex="-1" readonly />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="id_fungsi" class="control-label">Kode Fungsi</label>
                            <div class="form-group">
                                <input type="text" name="id_fungsi"
                                    value="<?php echo $this->input->post('id_fungsi'); ?>" class="form-control"
                                    id="id_fungsi" tabindex="-1" readonly />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="no_kbo" class="control-label">No Kbo</label>
                            <div class="form-group">
                                <input type="text" name="no_kbo" value="<?php echo $this->input->post('no_kbo'); ?>"
                                    class="form-control" id="no_kbo" tabindex="-1" readonly />
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
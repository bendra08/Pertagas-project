<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Konsumsi Edit</h3>
            </div>
            <?php echo form_open('konsumsi/edit/'.$konsumsi['no_konsumsi']); ?>
            <div class="box-body">
                <div class="row clearfix">
                    <div class="col-md-4">
                        <div class="col-md-12">
                            <label for="kepada" class="control-label">Kepada</label>
                            <div class="form-group">
                                <input type="text" name="kepada" value="Manager Corporate Support" class="form-control"
                                    id="kepada" disabled />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="no" class="control-label">No</label>
                            <div class="form-group">
                                <input type="text" name="no" placeholder="Generate Otomatis" value="<?php echo ($this->input->post('no_konsumsi_origin')) ? $this->input->post('no_konsumsi_origin') : $konsumsi['no_konsumsi_origin']; ?>"
                                    class="form-control" id="no" disabled />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="no_kbo" class="control-label">No KBO</label>
                            <div class="form-group">
                                <input type="text" name="no_kbo" value="<?php echo ($this->input->post('no_kbo')) ? $this->input->post('no_kbo') : $konsumsi['no_kbo']; ?>"
                                    class="form-control" id="no_kbo" disabled />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="tanggal" class="control-label">Tanggal</label>
                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" name="tanggal" value="<?php echo ($this->input->post('tanggal')) ? $this->input->post('tanggal') : $konsumsi['tanggal']; ?>"
                                    placeholder="YYYY-MM-DD" data-date-format="yyyy-mm-dd"
                                    class="form-control pull-right" id="datepicker" autocomplete="off" />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="acara" class="control-label">Acara</label>
                            <div class="form-group">
                                <?php echo form_dropdown('acara', @$acara,@$selected['acara'],[ 'id' => 'acara','class' => 'form-control','required' => 'true','onchange'=>'getAcara()']); ?>
                            </div>
                            <label id="loading" hidden>Loading...</label>
                        </div>
                        <div class="col-md-12">
                            <label for="hari_tanggal" class="control-label">Hari Tanggal</label>
                            <div class="form-group">
                                <input type="text" name="hari_tanggal"
                                    value="<?php echo ($this->input->post('hari_tanggal')) ? $this->input->post('hari_tanggal') : $konsumsi['hari_tanggal']; ?>" class="form-control"
                                    id="hari_tanggal" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="mulai" class="control-label">Mulai Jam</label>
                            <div class="form-group">
                                <?php echo form_dropdown('mulai', @$mulai,@$selected['mulai'],[ 'id' => 'mulai','class' => 'form-control','required' => 'true','onchange'=>'getAcara()']); ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="selesai" class="control-label">Sampai Jam</label>
                            <div class="form-group">
                                <?php echo form_dropdown('selesai', @$selesai,@$selected['selesai'],[ 'id' => 'selesai','class' => 'form-control','required' => 'true','onchange'=>'getAcara()']); ?>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <label for="tempat" class="control-label">Tempat</label>
                            <div class="form-group">
                                <input type="text" name="tempat" value="<?php echo ($this->input->post('tempat')) ? $this->input->post('tempat') : $konsumsi['tempat']; ?>"
                                    class="form-control" id="tempat" />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="peserta" class="control-label">Peserta</label>
                            <div class="form-group">
                                <input type="text" name="peserta" value="<?php echo ($this->input->post('peserta')) ? $this->input->post('peserta') : $konsumsi['peserta']; ?>"
                                    class="form-control" id="peserta" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="col-md-12">
                            <label for="pg_direksi" class="control-label">Direksi</label>
                            <div class="form-group">
                                <input type="text" name="pg_direksi"
                                    value="<?php echo ($this->input->post('pg_direksi')) ? $this->input->post('pg_direksi') : $konsumsi['pg_direksi']; ?>" class="form-control"
                                    id="pg_direksi" onchange="jmlPgJumlah()" onblur="jmlPgJumlah()" />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="pg_vicepresident" class="control-label">Vice President</label>
                            <div class="form-group">
                                <input type="text" name="pg_vicepresident"
                                    value="<?php echo ($this->input->post('pg_vicepresident')) ? $this->input->post('pg_vicepresident') : $konsumsi['pg_vicepresident']; ?>" class="form-control"
                                    id="pg_vicepresident" onchange="jmlPgJumlah()" onblur="jmlPgJumlah()" />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="pg_manajer" class="control-label">Manajer</label>
                            <div class="form-group">
                                <input type="text" name="pg_manajer"
                                    value="<?php echo ($this->input->post('pg_manajer')) ? $this->input->post('pg_manajer') : $konsumsi['pg_manajer']; ?>" class="form-control"
                                    id="pg_manajer" onchange="jmlPgJumlah()" onblur="jmlPgJumlah()" />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="pg_staff" class="control-label">Staff</label>
                            <div class="form-group">
                                <input type="text" name="pg_staff" value="<?php echo ($this->input->post('pg_staff')) ? $this->input->post('pg_staff') : $konsumsi['pg_staff']; ?>"
                                    class="form-control" id="pg_staff" onchange="jmlPgJumlah()" onblur="jmlPgJumlah()" />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="pg_jumlah" class="control-label">Jumlah</label>
                            <div class="form-group">
                                <input type="text" name="pg_jumlah"  onchange="jmlPeserta()" onblur="jmlPeserta()" 
                                    value="<?php echo ($this->input->post('pg_jumlah')) ? $this->input->post('pg_jumlah') : $konsumsi['pg_jumlah']; ?>" class="form-control"
                                    id="pg_jumlah" readonly />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="peserta_undangan" class="control-label">Peserta Undangan</label>
                            <div class="form-group">
                                <input type="text" name="peserta_undangan"  onchange="jmlPeserta()" onblur="jmlPeserta()" 
                                    value="<?php echo ($this->input->post('peserta_undangan')) ? $this->input->post('peserta_undangan') : $konsumsi['peserta_undangan']; ?>" class="form-control"
                                    id="peserta_undangan" />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="keterangan" class="control-label">Keterangan</label>
                            <div class="form-group">
                                <input type="text" name="keterangan"
                                    value="<?php echo ($this->input->post('keterangan')) ? $this->input->post('keterangan') : $konsumsi['keterangan']; ?>" class="form-control"
                                    id="keterangan" />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="id_fungsi" class="control-label">Id Fungsi</label>
                            <div class="form-group">
                                <input type="text" name="id_fungsi"
                                    value="<?php echo ($this->input->post('id_fungsi')) ? $this->input->post('id_fungsi') : $konsumsi['id_fungsi']; ?>" class="form-control"
                                    id="id_fungsi" readonly />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="col-md-12">
                            <label for="kategori_konsumsi" class="control-label">Kategori Konsumsi</label>
                            <div class="form-group">
                                <input type="radio" name="kategori_konsumsi[]" value="VVIP" <?= (strtolower($kategori[0])=='vvip') ? 'checked' : '' ?>> VVIP &nbsp; 
                                <input type="radio" name="kategori_konsumsi[]" value="VIP" <?= (strtolower($kategori[0])=='vip') ? 'checked' : '' ?>> VIP &nbsp;
                                <input type="radio" name="kategori_konsumsi[]" value="Biasa" <?= (strtolower($kategori[0])=='biasa') ? 'checked' : '' ?>> Biasa &nbsp;
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="jenis_konsumsi" class="control-label">Jenis Konsumsi</label>
                            <div class="form-group">
                                <input type="checkbox" name="jenis_konsumsi[]" value="Snack Pagi" <?= (!empty(strtolower(@$snack1))) ? 'checked' : '' ?> > Snack Pagi &nbsp;
                                <input type="checkbox" name="jenis_konsumsi[]" value="Makan Siang" <?= (!empty(strtolower(@$snack2))) ? 'checked' : '' ?>> Makan Siang &nbsp;
                                <input type="checkbox" name="jenis_konsumsi[]" value="Snack / Buah Sore" <?= (!empty(strtolower(@$snack3))) ? 'checked' : '' ?>> Snack / Buah
                                Sore &nbsp;
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="diminta" class="control-label">Diminta Oleh</label>
                            <div class="form-group">
                                <input type="text" name="diminta" value="<?php echo ($this->input->post('diminta')) ? $this->input->post('diminta') : $konsumsi['diminta']; ?>"
                                    class="form-control" id="diminta" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="jabatan_diminta" class="control-label">Jabatan</label>
                            <div class="form-group">
                                <input type="text" name="jabatan_diminta"
                                    value="<?php echo ($this->input->post('jabatan_diminta')) ? $this->input->post('jabatan_diminta') : $konsumsi['jabatan_diminta']; ?>" class="form-control"
                                    id="jabatan_diminta" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="diverifikasi" class="control-label">Diverifikasi Oleh</label>
                            <div class="form-group">
                                <input type="text" name="diverifikasi"
                                    value="<?php echo ($this->input->post('diverifikasi')) ? $this->input->post('diverifikasi') : $konsumsi['diverifikasi']; ?>" class="form-control"
                                    id="diverifikasi" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="jabatan_verifikasi" class="control-label">Jabatan</label>
                            <div class="form-group">
                                <input type="text" name="jabatan_verifikasi"
                                    value="<?php echo ($this->input->post('jabatan_verifikasi')) ? $this->input->post('jabatan_verifikasi') : $konsumsi['jabatan_verifikasi']; ?>" class="form-control"
                                    id="jabatan_verifikasi" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="diproses" class="control-label">Diproses Oleh</label>
                            <div class="form-group">
                                <input type="text" name="diproses" value="<?php echo ($this->input->post('diproses')) ? $this->input->post('diproses') : $konsumsi['diproses']; ?>"
                                    class="form-control" id="diproses" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="jabatan_proses" class="control-label">Jabatan</label>
                            <div class="form-group">
                                <input type="text" name="jabatan_proses"
                                    value="<?php echo ($this->input->post('jabatan_proses')) ? $this->input->post('jabatan_proses') : $konsumsi['jabatan_proses']; ?>" class="form-control"
                                    id="jabatan_proses" />
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
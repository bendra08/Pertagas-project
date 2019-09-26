<div id="myForm" class="row">
        <div class="col-md-12">
            <?= fs_show_alert() ?>
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Form Hira</h3>
                </div>
                <div class="box-body">
                    <div class="row clearfix">
                        <div class="col-md-4">
                            <div class="col-md-12">
                                <label for="date_mulai" class="control-label">Tanggal Mulai</label>
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" name="date_mulai"
                                        value="<?= ($this->input->post('date_mulai')) ? $this->input->post('date_mulai') : $hira['date_mulai'] ?>"
                                        placeholder="YYYY-MM-DD" data-date-format="yyyy-mm-dd"
                                        class="form-control pull-right" id="datepicker" autocomplete="off" />
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="row clearfix">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="date_selesai" class="control-label">Tanggal Selesai</label>
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" name="date_selesai"
                                        value="<?= ($this->input->post('date_selesai')) ? $this->input->post('date_selesai') : $hira['date_selesai'] ?>"
                                        placeholder="YYYY-MM-DD" data-date-format="yyyy-mm-dd"
                                        class="form-control pull-right" id="datepicker2" autocomplete="off" />
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="row clearfix">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label> Judul Pekerjaan <b style="color:red">*</b></label>
                                <div class="form-group">
                                    <input type="text" name="pekerjaan"
                                        value="<?= ($this->input->post('pekerjaan')) ? $this->input->post('pekerjaan') : $hira['pekerjaan'] ?>"
                                        class="form-control" id="pekerjaan" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label> Fungsi/Vendor Pelaksana <b style="color:red">*</b></label>
                                <div class="form-group">
                                    <input type="text" name="fungsi"
                                        value="<?= ($this->input->post('fungsi')) ? $this->input->post('fungsi') : $hira['fungsi'] ?>"
                                        class="form-control" id="fungsi" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label> Pengawas Pekerjaan <b style="color:red">*</b></label>
                                <div class="form-group">
                                    <input type="text" name="pengawas"
                                        value="<?= ($this->input->post('pengawas')) ? $this->input->post('pengawas') : $hira['pengawas'] ?>"
                                        class="form-control" id="pengawas" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label> Ringkasan Pekerjaan Yang Akan Dilakukan <b style="color:red">*</b></label>
                                <span class="form-group">
                                    <textarea name="ringkasan_pek" class="form-control"
                                        id="ringkasan_pek"><?= ($this->input->post('ringkasan_pek')) ? $this->input->post('ringkasan_pek') : $hira['ringkasan_pek'] ?></textarea>
                                </span>
                                <div class="form-group"></div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="col-md-12">
                                <label> Equipment Number <b style="color:red">*</b></label>
                                <div class="form-group">
                                    <input type="text" name="equip_number"
                                        value="<?= ($this->input->post('equip_number')) ? $this->input->post('equip_number') : $hira['equip_number'] ?>"
                                        class="form-control" id="equip_number" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label> Equipment Status <b style="color:red">*</b></label>
                                <div class="form-group">
                                    <?php echo form_dropdown('equip_status', $equip_status,@$hira['equip_status'],
								[ 'kode' => 'equip_status','class' => 'form-control','required' => 'true']); ?>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label> No.Notifikasi/No.Wo <b style="color:red">*</b></label>
                                <div class="form-group">
                                    <input type="text" name="no_notifikasi"
                                        value="<?= ($this->input->post('no_notifikasi')) ? $this->input->post('no_notifikasi') : $hira['no_notifikasi'] ?>"
                                        class="form-control" id="no_notifikasi" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label> Work Status <b style="color:red">*</b></label>
                                <div class="form-group">
                                    <?php echo form_dropdown('work_status', $work_status,@$hira['work_status'],
									[ 'kode' => 'work_status','class' => 'form-control','required' => 'true']); ?>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label> Lokasi/Owner (Issuing Authority) <b style="color:red">*</b></label>
                                <div class="form-group">
                                    <?php echo form_dropdown('lokasi_owner', $lokasi_owner,@$hira['lokasi_owner'],
									[ 'kode' => 'lokasi_owner','class' => 'form-control','required' => 'true']); ?>

                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="tools" class="control-label">Tools Yang Digunakan</label>
                                <div class="form-group">
                                    <textarea name="tools" class="form-control"
                                        id="tools"><?= ($this->input->post('tools')) ? $this->input->post('tools') : $hira['tools'] ?></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="col-md-12">
                                <label> Jenis SIKA <b style="color:red">*</b></label>
                                <div class="form-group">
                                    <?php echo form_dropdown('jenis_sika', $jenis_sika,@$hira['jenis_sika'],
									[ 'kode' => 'jenis_sika','class' => 'form-control','required' => 'true']); ?>

                                </div>
                            </div>
                            <div class="col-md-12">
                                <label> Dokumen (*.pdf,*.doc,*.docx)</label>
                                <div class="form-group">
                                    <?= (empty($hira['upload']) || $hira['upload'] === NULL) ? '' : anchor('assets/lampiran/'.$hira['upload'],'Lihat Lampiran',array('target'=>'_blank','class'=>'btn btn-primary btn-xs')) ; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <?= fs_show_alert() ?>
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Form Detail</h3>
                </div>
                <div class="box-body">
                    <table class="table table-bordered">
                        <thead>
                            <th>Urutan Kegiatan<br><i>Step Of activities</i></th>
                            <th>Bahaya<br><i>Hazards</i></th>
                            <th>Konsekwensi<br><i>Consequences</i></th>
                            <th>P</th>
                            <th>C</th>
                            <th>R</th>
                            <th>Pengendalian bahaya<br><i>Control Meassures</i></th>
                            <th>Penanggungjawab<br><i>Person Incharge</i></th>
                            <th>P</th>
                            <th>C</th>
                            <th>R</th>
                        </thead>
                        <tbody>
                            <?php foreach($hira_detail as $row){ ?>
                                <tr>
                                    <td><?= $row['dh_kegiatan'] ?></td>
                                    <td><?= $row['dh_bahaya'] ?></td>
                                    <td><?= $row['dh_konsekwensi'] ?></td>
                                    <td><?= $row['dh_p2'] ?></td>
                                    <td><?= $row['dh_c1'] ?></td>
                                    <td><?= $row['dh_r1'] ?></td>
                                    <td><?= $row['dh_pengendalian'] ?></td>
                                    <td><?= $row['dh_penanggungjawab'] ?></td>
                                    <td><?= $row['dh_p2'] ?></td>
                                    <td><?= $row['dh_c2'] ?></td>
                                    <td><?= $row['dh_r2'] ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<div id="myForm">
    <div class="row" hidden>
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
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title"><strong>Form Izin Kerja Panas</strong></h3>
                </div>
                <div class="box-body">
                    <div class="row clearfix">
                        <div class="col-md-4">
                            <div class="col-md-7">
                                <label for="lanjutan_no" class="control-label">Lanjutan SIKA No.</label>
                                <div class="form-group">
                                    <input type="text" name="lanjutan_no" value="<?= $ikp['lanjutan_no'] ?>"
                                        class="form-control" id="lanjutan_no" disabled />
                                </div>
                            </div>
                            <div class="col-md-8">
                                <label for="tanggal_terbit" class="control-label">Tanggal Diterbitkan </label>
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" name="tanggal_terbit" value="<?= $ikp['tanggal_terbit'] ?>"
                                        placeholder="YYYY-MM-DD" data-date-format="yyyy-mm-dd"
                                        class="form-control pull-right" id="datepicker" autocomplete="off" disabled />
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="row clearfix">
                                </div>
                            </div>

                            <div class="col-md-8">
                                <label for="tgl_akhir_terbit" class="control-label">Sampai Dengan Tanggal </label>
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" name="tgl_akhir_terbit" value="<?= $ikp['tgl_akhir_terbit'] ?>"
                                        placeholder="YYYY-MM-DD" data-date-format="yyyy-mm-dd"
                                        class="form-control pull-right" id="datepicker2" autocomplete="off" disabled />
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="row clearfix">
                                </div>
                            </div>

                            <div class="col-md-5">
                                <label for="jam_kerja" class="control-label">Jam Kerja Awal</label>
                                <div class="form-group">
                                    <?php $selected['jam_kerja'] =  $ikp['jam_kerja'] ?>
                                    <?php echo form_dropdown('jam_kerja', @$jam_kerja,@$selected['jam_kerja'],[ 'no' => 'jam_kerja','class' => 'form-control','required' => 'true','disabled'=>'disabled' ]); ?>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <label for="jam_akhir_kerja" class="control-label">Jam Kerja Akhir</label>
                                <div class="form-group">
                                    <?php $selected['jam_akhir_kerja'] =  $ikp['jam_akhir_kerja'] ?>
                                    <?php echo form_dropdown('jam_akhir_kerja', @$jam_akhir_kerja,$selected['jam_akhir_kerja'],[ 'no' => 'jam_akhir_kerja','class' => 'form-control','required' => 'true','disabled'=>'disabled' ]); ?>
                                </div>
                            </div>

                            <div class="col-md-10">
                                <label for="nama_pelaksana" class="control-label">Nama Pelaksana Kerja</label>
                                <div class="form-group">
                                    <input type="text" name="nama_pelaksana"
                                        value="<?php echo $ikp['nama_pelaksana']; ?>" class="form-control"
                                        id="nama_pelaksana" disabled />
                                </div>
                            </div>
                            <div class="col-md-10">
                                <label for="perusahaan" class="control-label">Perusahaan</label>
                                <div class="form-group">
                                    <input type="text" name="perusahaan" value="<?php echo  $ikp['perusahaan']; ?>"
                                        class="form-control" id="perusahaan" disabled />
                                </div>
                            </div>
                            <div class="col-md-10">
                                <label for="jumlah_pekerja" class="control-label">Jumlah Pekerja</label>
                                <div class="form-group">
                                    <input type="text" name="jumlah_pekerja"
                                        value="<?php echo  $ikp['jumlah_pekerja']; ?>" class="form-control"
                                        id="jumlah_pekerja" disabled />
                                </div>
                            </div>
                            <div class="col-md-10">
                                <label for="lokasi" class="control-label">Lokasi/Fasilitas</label>
                                <div class="form-group">
                                    <input type="text" name="lokasi" value="<?php echo  $ikp['lokasi']; ?>"
                                        class="form-control" id="lokasi" disabled />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="uraian_pekerjaan" class="control-label">Uraian Pekerjaan</label>
                                <div class="form-group">
                                    <textarea name="uraian_pekerjaan" class="form-control"
                                        id="uraian_pekerjaan"><?= $ikp['uraian_pekerjaan'] ?></textarea>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <label for="peralatan" class="control-label">Peralatan Yang Digunakan</label>
                                <div class="form-group">
                                    <input type="text" name="peralatan" value="<?= $ikp['peralatan']?>"
                                        class="form-control" id="peralatan" />
                                </div>
                            </div>
                            <div class="col-md-10">
                                <label for="isolasi_peralatan" class="control-label">Isolasi Peralatan</label>
                                <div class="form-group">
                                    <input type="checkbox" name="isolasi_peralatan[]" value="LOTO Electric Circuits"
                                        <?= (array_search("LOTO Electric Circuits",json_decode($ikp["isolasi_peralatan"])) !== false) ? 'checked' : '' ?>>
                                    LOTO Electric Circuits &nbsp;
                                    <br><input type="checkbox" name="isolasi_peralatan[]" value="LOTO Valve Gas"
                                        <?= (array_search("LOTO Valve Gas",json_decode($ikp["isolasi_peralatan"])) !== false) ? 'checked' : '' ?>>
                                    LOTO Valve Gas &nbsp;
                                    <br><input type="checkbox" name="isolasi_peralatan[]" value="LOTO Valve Water"
                                        <?= (array_search("LOTO Valve Water",json_decode($ikp["isolasi_peralatan"])) !== false) ? 'checked' : '' ?>>
                                    LOTO Valve Water &nbsp;
                                    <br><input type="checkbox" name="isolasi_peralatan[]"
                                        value="LOTO Valve Air Instrument"
                                        <?= (array_search("LOTO Valve Air Instrument",json_decode($ikp["isolasi_peralatan"])) !== false) ? 'checked' : '' ?>>
                                    LOTO Valve Air Instrument &nbsp;
                                </div>
                            </div>
                            <div class="col-md-10">
                                <label for="lampiran" class="control-label">Lampiran</label>
                                <div class="form-group">
                                    <input type="checkbox" name="lampiran[]" value="Prosedur Khusus"
                                        <?= (array_search("Prosedur Khusus",json_decode($ikp["lampiran"])) !== false) ? 'checked' : '' ?>>
                                    Prosedur Khusus &nbsp;
                                    <br><input type="checkbox" name="lampiran[]" value="Gambar P&ID"
                                        <?= (array_search("Gambar P&ID",json_decode($ikp["lampiran"])) !== false) ? 'checked' : '' ?>>
                                    Gambar P&ID &nbsp;
                                    <br><input type="checkbox" name="lampiran[]" value="TKO, TKI, TKPA"
                                        <?= (array_search("TKO, TKI, TKPA",json_decode($ikp["lampiran"])) !== false) ? 'checked' : '' ?>>
                                    TKO, TKI, TKPA &nbsp;
                                    <br><input type="checkbox" name="lampiran[]" value="HIRA"
                                        <?= (array_search("HIRA",json_decode($ikp["lampiran"])) !== false) ? 'checked' : '' ?>>
                                    HIRA &nbsp;
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <label for="identiikasi_bahaya" class="control-label">Identifikasi Bahaya</label>
                                <div class="form-group">
                                    <input type="checkbox" name="identiikasi_bahaya[]" value="Nyala api, percikan api"
                                        <?= (array_search("Nyala api, percikan api",json_decode($ikp["identiikasi_bahaya"])) !== false) ? 'checked' : '' ?>>
                                    Nyala api, percikan api &nbsp;
                                    <br><input type="checkbox" name="identiikasi_bahaya[]" value="Bahan mudah terbakar"
                                        <?= (array_search("Bahan mudah terbakar",json_decode($ikp["identiikasi_bahaya"])) !== false) ? 'checked' : '' ?>>
                                    Bahan mudah terbakar &nbsp;
                                    <br><input type="checkbox" name="identiikasi_bahaya[]" value="Gas/Uap Beracun"
                                        <?= (array_search("Gas/Uap Beracun",json_decode($ikp["identiikasi_bahaya"])) !== false) ? 'checked' : '' ?>>
                                    Gas/Uap Beracun &nbsp;
                                    <br><input type="checkbox" name="identiikasi_bahaya[]" value="Bising"
                                        <?= (array_search("Bising",json_decode($ikp["identiikasi_bahaya"])) !== false) ? 'checked' : '' ?>>
                                    Bising &nbsp;
                                    <br><input type="checkbox" name="identiikasi_bahaya[]"
                                        value="Bahan Berbahaya dan beracun"
                                        <?= (array_search("Bahan Berbahaya dan beracun",json_decode($ikp["identiikasi_bahaya"])) !== false) ? 'checked' : '' ?>>
                                    Bahan Berbahaya dan beracun &nbsp;
                                    <br><input type="checkbox" name="identiikasi_bahaya[]"
                                        value="Peralatan jalan/listrik hidup/tersengat"
                                        <?= (array_search("Peralatan jalan/listrik hidup/tersengat",json_decode($ikp["identiikasi_bahaya"])) !== false) ? 'checked' : '' ?>>
                                    Peralatan jalan/listrik hidup/tersengat &nbsp;
                                    <br><input type="checkbox" name="identiikasi_bahaya[]" value="Ledakan"
                                        <?= (array_search("Ledakan",json_decode($ikp["identiikasi_bahaya"])) !== false) ? 'checked' : '' ?>>
                                    Ledakan &nbsp;
                                    <br><input type="checkbox" name="identiikasi_bahaya[]" value="Cairan/gas bertekanan"
                                        <?= (array_search("Cairan/gas bertekanan",json_decode($ikp["identiikasi_bahaya"])) !== false) ? 'checked' : '' ?>>
                                    Cairan/gas bertekanan &nbsp;
                                    <br><input type="checkbox" name="identiikasi_bahaya[]" value="Longsoran"
                                        <?= (array_search("Longsoran",json_decode($ikp["identiikasi_bahaya"])) !== false) ? 'checked' : '' ?>>
                                    Longsoran &nbsp;
                                    <br><input type="checkbox" name="identiikasi_bahaya[]" value="Benda bergerak"
                                        <?= (array_search("Benda bergerak",json_decode($ikp["identiikasi_bahaya"])) !== false) ? 'checked' : '' ?>>
                                    Benda bergerak &nbsp;
                                    <br><input type="checkbox" name="identiikasi_bahaya[]"
                                        value="Pengangkatan Benda berat"
                                        <?= (array_search("Pengangkatan Benda berat",json_decode($ikp["identiikasi_bahaya"])) !== false) ? 'checked' : '' ?>>Pengangkatan
                                    Benda berat &nbsp;
                                    <br><input type="checkbox" name="identiikasi_bahaya[]" value="Kerja di ketinggian"
                                        <?= (array_search("Kerja di ketinggian",json_decode($ikp["identiikasi_bahaya"])) !== false) ? 'checked' : '' ?>>
                                    Kerja di ketinggian &nbsp;
                                    <br><input type="checkbox" name="identiikasi_bahaya[]" value="Radiasi Radio Aktif"
                                        <?= (array_search("Radiasi Radio Aktif",json_decode($ikp["identiikasi_bahaya"])) !== false) ? 'checked' : '' ?>>
                                    Radiasi Radio Aktif &nbsp;
                                    <br><input type="checkbox" name="identiikasi_bahaya[]" value="Kontaminasi Tanah"
                                        <?= (array_search("Kontaminasi Tanah",json_decode($ikp["identiikasi_bahaya"])) !== false) ? 'checked' : '' ?>>
                                    Kontaminasi Tanah &nbsp;
                                    <br><input type="checkbox" name="identiikasi_bahaya[]"
                                        value="Temperatur ekstrim (dingin/panas)"
                                        <?= (array_search("Temperatur ekstrim (dingin/panas)",json_decode($ikp["identiikasi_bahaya"])) !== false) ? 'checked' : '' ?>>Temperatur
                                    ekstrim (dingin/panas) &nbsp;
                                    <br><input type="checkbox" name="identiikasi_bahaya[]"
                                        value="Pengangkatan Manual/alat angkat"
                                        <?= (array_search("Pengangkatan Manual/alat angkat",json_decode($ikp["identiikasi_bahaya"])) !== false) ? 'checked' : '' ?>>
                                    Pengangkatan Manual/alat angkat &nbsp;
                                    <br><input type="checkbox" name="identiikasi_bahaya[]"
                                        value="Ruang terbatas/kekurangan oksigen"
                                        <?= (array_search("Ruang terbatas/kekurangan oksigen",json_decode($ikp["identiikasi_bahaya"])) !== false) ? 'checked' : '' ?>>
                                    Ruang terbatas/kekurangan oksigen &nbsp;
                                    <br><input type="checkbox" name="identiikasi_bahaya[]"
                                        value="Bahaya Pencemaran Lingkungan"
                                        <?= (array_search("Bahaya Pencemaran Lingkungan",json_decode($ikp["identiikasi_bahaya"])) !== false) ? 'checked' : '' ?>>
                                    Bahaya Pencemaran Lingkungan &nbsp;
                                    <br><input type="checkbox" name="identiikasi_bahaya[]" value="Faktor Ergonomis"
                                        <?= (array_search("Faktor Ergonomis",json_decode($ikp["identiikasi_bahaya"])) !== false) ? 'checked' : '' ?>>
                                    Faktor Ergonomis &nbsp;
                                    <br><input type="checkbox" name="identiikasi_bahaya[]" value="Paparan Debu"
                                        <?= (array_search("Paparan Debu",json_decode($ikp["identiikasi_bahaya"])) !== false) ? 'checked' : '' ?>>
                                    Paparan Debu &nbsp;
                                    <br><input type="checkbox" name="identiikasi_bahaya[]" value="Kebersihan Makanan"
                                        <?= (array_search("Kebersihan Makanan",json_decode($ikp["identiikasi_bahaya"])) !== false) ? 'checked' : '' ?>>
                                    Kebersihan Makanan &nbsp;
                                    <br><input type="checkbox" name="identiikasi_bahaya[]" value="Biohazard"
                                        <?= (array_search("Biohazard",json_decode($ikp["identiikasi_bahaya"])) !== false) ? 'checked' : '' ?>>
                                    Biohazard &nbsp;
                                    <br><input type="checkbox" name="identiikasi_bahaya[]" value="Iritasi Mata/Kulit"
                                        <?= (array_search("Iritasi Mata/Kulit",json_decode($ikp["identiikasi_bahaya"])) !== false) ? 'checked' : '' ?>>
                                    Iritasi Mata/Kulit &nbsp;
                                    <br><input type="checkbox" name="identiikasi_bahaya[]" value="Gangguan Pernafasan"
                                        <?= (array_search("Gangguan Pernafasan",json_decode($ikp["identiikasi_bahaya"])) !== false) ? 'checked' : '' ?>>
                                    Gangguan Pernafasan &nbsp;
                                    <br><input type="checkbox" name="identiikasi_bahaya[]" value="Faktor fisik/biologis"
                                        <?= (array_search("Faktor fisik/biologis",json_decode($ikp["identiikasi_bahaya"])) !== false) ? 'checked' : '' ?>>
                                    Faktor fisik/biologis &nbsp;
                                    <br><input type="checkbox" name="identiikasi_bahaya[]" value="Gangguan Keamanan"
                                        <?= (array_search("Gangguan Keamanan",json_decode($ikp["identiikasi_bahaya"])) !== false) ? 'checked' : '' ?>>
                                    Gangguan Keamanan &nbsp;
                                    <br><input type="checkbox" name="identiikasi_bahaya[]"
                                        value="Mesin-mesin yang bergerak/berputar"
                                        <?= (array_search("Mesin-mesin yang bergerak/berputar",json_decode($ikp["identiikasi_bahaya"])) !== false) ? 'checked' : '' ?>>
                                    Mesin-mesin yang bergerak/berputar &nbsp;
                                    <br><input type="checkbox" name="identiikasi_bahaya[]" value="Pencurian"
                                        <?= (array_search("Pencurian",json_decode($ikp["identiikasi_bahaya"])) !== false) ? 'checked' : '' ?>>
                                    Pencurian &nbsp;
                                </div>
                            </div>
                            <div class="col-md-10">
                                <label for="izin_diperlukan" class="control-label">Izin Kerja Khusus Yang
                                    Diperlukan</label>
                                <div class="form-group">
                                    <input type="checkbox" name="izin_diperlukann[]"
                                        value="Izin Kerja masuk ruang Terbatas"
                                        <?= (array_search("Izin Kerja masuk ruang Terbatas",json_decode($ikp["izin_diperlukan"])) !== false) ? 'checked' : '' ?>>
                                    Izin Kerja masuk ruang Terbatas&nbsp;
                                    <br><input type="checkbox" name="izin_diperlukan[]" value="Izin Kerja Radiografi"
                                        <?= (array_search("Izin Kerja Radiografi",json_decode($ikp["izin_diperlukan"])) !== false) ? 'checked' : '' ?>>
                                    Izin Kerja Radiografi&nbsp;
                                    <br><input type="checkbox" name="izin_diperlukan[]"
                                        value="Izin Kerja Isolasi Listrik"
                                        <?= (array_search("Izin Kerja Isolasi Listrik",json_decode($ikp["izin_diperlukan"])) !== false) ? 'checked' : '' ?>>
                                    Izin Kerja Isolasi Listrik &nbsp;
                                    <br><input type="checkbox" name="izin_diperlukan[]" value="Izin Kerja Penggalian"
                                        <?= (array_search("Izin Kerja Penggalian",json_decode($ikp["izin_diperlukan"])) !== false) ? 'checked' : '' ?>>
                                    Izin Kerja Penggalian &nbsp;
                                    <br><input type="checkbox" name="izin_diperlukan[]" value="Izin Kerja Pengangkatan"
                                        <?= (array_search("Izin Kerja Pengangkatan",json_decode($ikp["izin_diperlukan"])) !== false) ? 'checked' : '' ?>>
                                    Izin Kerja Pengangkatan &nbsp;
                                    <br><input type="checkbox" name="izin_diperlukan[]" value="Izin Kerja Ketinggian"
                                        <?= (array_search("Izin Kerja Ketinggian",json_decode($ikp["izin_diperlukan"])) !== false) ? 'checked' : '' ?>>
                                    Izin Kerja Ketinggian &nbsp;
                                </div>
                            </div>
                            <div class="col-md-10">
                                <label for="sifat_pekerjaan" class="control-label">Sifat Pekerjaan</label>
                                <div class="form-group">
                                    <input type="checkbox" name="sifat_pekerjaan[]" value="Normal"
                                        <?= (array_search("Normal",json_decode($ikp["sifat_pekerjaan"])) !== false) ? 'checked' : '' ?>>
                                    Normal &nbsp;
                                    <br><input type="checkbox" name="sifat_pekerjaan[]" value="T/A"
                                        <?= (array_search("T/A",json_decode($ikp["sifat_pekerjaan"])) !== false) ? 'checked' : '' ?>>
                                    T/A &nbsp;
                                    <br><input type="checkbox" name="sifat_pekerjaan[]" value="Emergency"
                                        <?= (array_search("Emergency",json_decode($ikp["sifat_pekerjaan"])) !== false) ? 'checked' : '' ?>>
                                    Emergency &nbsp;
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="col-md-12	">
                                <label for="identifikasi_tambahan" class="control-label">Identifikasi
                                    Tambahan</label>
                                <div class="form-group">
                                    <textarea name="identifikasi_tambahan" class="form-control"
                                        id="identifikasi_tambahan"><?php echo $this->input->post('identifikasi_tambahan'); ?></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <label for="pengendalian_bahaya" class="control-label">Pengendalian Bahaya</label>
                                <div class="form-group">
                                    <input type="checkbox" name="pengendalian_bahaya[]"
                                        value="Topi Keselamatan yang sesuai"
                                        <?= (array_search("Topi Keselamatan yang sesuai",json_decode($ikp["pengendalian_bahaya"])) !== false) ? 'checked' : '' ?>>
                                    Topi Keselamatan yang sesuai &nbsp;
                                    <br><input type="checkbox" name="pengendalian_bahaya[]"
                                        value="Sepatu Keselamatan yang sesuai"
                                        <?= (array_search("Sepatu Keselamatan yang sesuai",json_decode($ikp["pengendalian_bahaya"])) !== false) ? 'checked' : '' ?>>
                                    Sepatu Keselamatan yang sesuai &nbsp;
                                    <br><input type="checkbox" name="pengendalian_bahaya[]"
                                        value="Kacamata Keselamatan yang sesuai"
                                        <?= (array_search("Kacamata Keselamatan yang sesuai",json_decode($ikp["pengendalian_bahaya"])) !== false) ? 'checked' : '' ?>>
                                    Kacamata Keselamatan yang sesuai &nbsp;
                                    <br><input type="checkbox" name="pengendalian_bahaya[]"
                                        value="Pelindung Telinga yang sesuai"
                                        <?= (array_search("Pelindung Telinga yang sesuai",json_decode($ikp["pengendalian_bahaya"])) !== false) ? 'checked' : '' ?>>
                                    Pelindung Telinga yang sesuai &nbsp;
                                    <br><input type="checkbox" name="pengendalian_bahaya[]"
                                        value="Sarung Tangan Keselamatan"
                                        <?= (array_search("Sarung Tangan Keselamatan",json_decode($ikp["pengendalian_bahaya"])) !== false) ? 'checked' : '' ?>>
                                    Sarung Tangan Keselamatan &nbsp;
                                    <br><input type="checkbox" name="pengendalian_bahaya[]" value="Harnes/Tali Pengaman"
                                        <?= (array_search("Harnes/Tali Pengaman",json_decode($ikp["pengendalian_bahaya"])) !== false) ? 'checked' : '' ?>>
                                    Harnes/Tali Pengaman &nbsp;
                                    <br><input type="checkbox" name="pengendalian_bahaya[]" value="Masker debu/gas"
                                        <?= (array_search("Masker debu/gas",json_decode($ikp["pengendalian_bahaya"])) !== false) ? 'checked' : '' ?>>
                                    Masker debu/gas &nbsp;
                                    <br><input type="checkbox" name="pengendalian_bahaya[]" value="Masker Kimia"
                                        <?= (array_search("Masker Kimia",json_decode($ikp["pengendalian_bahaya"])) !== false) ? 'checked' : '' ?>>
                                    Masker Kimia &nbsp;
                                    <br><input type="checkbox" name="pengendalian_bahaya[]" value="Tali Pembatas Daerah"
                                        <?= (array_search("Tali Pembatas Daerah",json_decode($ikp["pengendalian_bahaya"])) !== false) ? 'checked' : '' ?>>
                                    Tali Pembatas Daerah &nbsp;
                                    <br><input type="checkbox" name="pengendalian_bahaya[]"
                                        value="Peralatan Dikosongkan/dibersihkan/difhusing"
                                        <?= (array_search("Peralatan Dikosongkan/dibersihkan/difhusing",json_decode($ikp["pengendalian_bahaya"])) !== false) ? 'checked' : '' ?>>
                                    Peralatan Dikosongkan/dibersihkan/difhusing &nbsp;
                                    <br><input type="checkbox" name="pengendalian_bahaya[]"
                                        value="Lapisan penahan percikan las"
                                        <?= (array_search("Lapisan penahan percikan las",json_decode($ikp["pengendalian_bahaya"])) !== false) ? 'checked' : '' ?>>
                                    Lapisan penahan percikan las &nbsp;
                                    <br><input type="checkbox" name="pengendalian_bahaya[]"
                                        value="Tirai Pelindung Pengelasan"
                                        <?= (array_search("Tirai Pelindung Pengelasan",json_decode($ikp["pengendalian_bahaya"])) !== false) ? 'checked' : '' ?>>
                                    Tirai Pelindung Pengelasan &nbsp;
                                    <br><input type="checkbox" name="pengendalian_bahaya[]" value="Tirai Air"
                                        <?= (array_search("Tirai Air",json_decode($ikp["pengendalian_bahaya"])) !== false) ? 'checked' : '' ?>>
                                    Tirai Air &nbsp;
                                    <br><input type="checkbox" name="pengendalian_bahaya[]"
                                        value="Area Kerja Selalu Dibasahi"
                                        <?= (array_search("Area Kerja Selalu Dibasahi",json_decode($ikp["pengendalian_bahaya"])) !== false) ? 'checked' : '' ?>>
                                    Area Kerja Selalu Dibasahi &nbsp;
                                    <br><input type="checkbox" name="pengendalian_bahaya[]"
                                        value="Tanda Peringatan/rintangan"
                                        <?= (array_search("Tanda Peringatan/rintangan",json_decode($ikp["pengendalian_bahaya"])) !== false) ? 'checked' : '' ?>>
                                    Tanda Peringatan/rintangan &nbsp;
                                    <br><input type="checkbox" name="pengendalian_bahaya[]"
                                        value="Pengetesan HC gas terus menerus"
                                        <?= (array_search("Pengetesan HC gas terus menerus",json_decode($ikp["pengendalian_bahaya"])) !== false) ? 'checked' : '' ?>>
                                    Pengetesan HC gas terus menerus &nbsp;
                                    <br><input type="checkbox" name="pengendalian_bahaya[]"
                                        value="Pengetesan Gas Sebelum mulai"
                                        <?= (array_search("Pengetesan Gas Sebelum mulai",json_decode($ikp["pengendalian_bahaya"])) !== false) ? 'checked' : '' ?>>
                                    Pengetesan Gas Sebelum mulai &nbsp;
                                    <br><input type="checkbox" name="pengendalian_bahaya[]"
                                        value="Tempat Kerja di-ventilasi"
                                        <?= (array_search("Tempat Kerja di-ventilasi",json_decode($ikp["pengendalian_bahaya"])) !== false) ? 'checked' : '' ?>>
                                    Tempat Kerja di-ventilasi &nbsp;
                                    <br><input type="checkbox" name="pengendalian_bahaya[]"
                                        value="Peralatan disolasi/dilepas"
                                        <?= (array_search("Peralatan disolasi/dilepas",json_decode($ikp["pengendalian_bahaya"])) !== false) ? 'checked' : '' ?>>
                                    Peralatan disolasi/dilepas &nbsp;
                                    <br><input type="checkbox" name="pengendalian_bahaya[]"
                                        value="Sekering dicabut/dimatikan dan dipasang LOTO"
                                        <?= (array_search("Sekering dicabut/dimatikan dan dipasang LOTO",json_decode($ikp["pengendalian_bahaya"])) !== false) ? 'checked' : '' ?>>
                                    Sekering dicabut/dimatikan dan dipasang LOTO &nbsp;
                                    <br><input type="checkbox" name="pengendalian_bahaya[]"
                                        value="Alat bantu pernafasan udara tekan"
                                        <?= (array_search("Alat bantu pernafasan udara tekan",json_decode($ikp["pengendalian_bahaya"])) !== false) ? 'checked' : '' ?>>
                                    Alat bantu pernafasan udara tekan &nbsp;
                                    <br><input type="checkbox" name="pengendalian_bahaya[]"
                                        value="Alat Pemadam Api Ringan (APAR)"
                                        <?= (array_search("Alat Pemadam Api Ringan (APAR)",json_decode($ikp["pengendalian_bahaya"])) !== false) ? 'checked' : '' ?>>
                                    Alat Pemadam Api Ringan (APAR) &nbsp;
                                    <br><input type="checkbox" name="pengendalian_bahaya[]" value="PPE Bahan Kimia"
                                        <?= (array_search("PPE Bahan Kimia",json_decode($ikp["pengendalian_bahaya"])) !== false) ? 'checked' : '' ?>>
                                    PPE Bahan Kimia &nbsp;
                                    <br><input type="checkbox" name="pengendalian_bahaya[]"
                                        value="Alat Penanggulangan pencemaran"
                                        <?= (array_search("Alat Penanggulangan pencemaran",json_decode($ikp["pengendalian_bahaya"])) !== false) ? 'checked' : '' ?>>
                                    Alat Penanggulangan pencemaran &nbsp;
                                    <br><input type="checkbox" name="pengendalian_bahaya[]" value="Tanda Keseleamatan"
                                        <?= (array_search("Tanda Keseleamatan",json_decode($ikp["pengendalian_bahaya"])) !== false) ? 'checked' : '' ?>>
                                    Tanda Keseleamatan &nbsp;
                                    <br><input type="checkbox" name="pengendalian_bahaya[]"
                                        value="Peralatan di-purging dengan N2"
                                        <?= (array_search("Peralatan di-purging dengan N2",json_decode($ikp["pengendalian_bahaya"])) !== false) ? 'checked' : '' ?>>
                                    Peralatan di-purging dengan N2 &nbsp;
                                    <br><input type="checkbox" name="pengendalian_bahaya[]"
                                        value="Dipassang Scaffolding/perancah/tanggah"
                                        <?= (array_search("Dipassang Scaffolding/perancah/tanggah",json_decode($ikp["pengendalian_bahaya"])) !== false) ? 'checked' : '' ?>>
                                    Dipassang Scaffolding/perancah/tanggah &nbsp;
                                    <br><input type="checkbox" name="pengendalian_bahaya[]"
                                        value="Dibebaskan dari tekanan"
                                        <?= (array_search("Dibebaskan dari tekanan",json_decode($ikp["pengendalian_bahaya"])) !== false) ? 'checked' : '' ?>>
                                    Dibebaskan dari tekanan &nbsp;
                                    <br><input type="checkbox" name="pengendalian_bahaya[]"
                                        value="Didinginkan Secara Mekanis"
                                        <?= (array_search("Didinginkan Secara Mekanis",json_decode($ikp["pengendalian_bahaya"])) !== false) ? 'checked' : '' ?>>
                                    Didinginkan Secara Mekanis &nbsp;
                                    <br><input type="checkbox" name="pengendalian_bahaya[]"
                                        value="Bebas dari endapan yg explosive/toxic"
                                        <?= (array_search("Bebas dari endapan yg explosive/toxic",json_decode($ikp["pengendalian_bahaya"])) !== false) ? 'checked' : '' ?>>
                                    Bebas dari endapan yg explosive/toxic &nbsp;
                                    <br><input type="checkbox" name="pengendalian_bahaya[]"
                                        value="Semua sewer dalam jarak 15 m ditutup"
                                        <?= (array_search("Semua sewer dalam jarak 15 m ditutup",json_decode($ikp["pengendalian_bahaya"])) !== false) ? 'checked' : '' ?>>
                                    Semua sewer dalam jarak 15 m ditutup &nbsp;
                                    <br><input type="checkbox" name="pengendalian_bahaya[]" value="Fire Blanket"
                                        <?= (array_search("Fire Blanket",json_decode($ikp["pengendalian_bahaya"])) !== false) ? 'checked' : '' ?>>
                                    Fire Blanket &nbsp;
                                    <br><input type="checkbox" name="pengendalian_bahaya[]" value="Non Sparking Tools"
                                        <?= (array_search("Non Sparking Tools",json_decode($ikp["pengendalian_bahaya"])) !== false) ? 'checked' : '' ?>>
                                    Peralatan di-purging dengan N2 &nbsp;
                                    <br><input type="checkbox" name="pengendalian_bahaya[]"
                                        value="Disiapkan Jalur Evakuasi"
                                        <?= (array_search("Disiapkan Jalur Evakuasi",json_decode($ikp["pengendalian_bahaya"])) !== false) ? 'checked' : '' ?>>
                                    Disiapkan Jalur Evakuasi &nbsp;
                                    <br><input type="checkbox" name="pengendalian_bahaya[]"
                                        value="Kacamata Las dan Apron"
                                        <?= (array_search("Kacamata Las dan Apron",json_decode($ikp["pengendalian_bahaya"])) !== false) ? 'checked' : '' ?>>
                                    Kacamata Las dan Apron &nbsp;
                                    <br><input type="checkbox" name="pengendalian_bahaya[]"
                                        value="Alat penampung cairan B3"
                                        <?= (array_search("Alat penampung cairan B3",json_decode($ikp["pengendalian_bahaya"])) !== false) ? 'checked' : '' ?>>
                                    Alat penampung cairan B3 &nbsp;
                                    <br><input type="checkbox" name="pengendalian_bahaya[]" value="Absorben"
                                        <?= (array_search("Absorben",json_decode($ikp["pengendalian_bahaya"])) !== false) ? 'checked' : '' ?>>
                                    Absorben &nbsp;
                                </div>
                            </div>

                            <div class="col-md-12">
                                <label for="permintaan_tambahan" class="control-label">Permintaan Tambahan</label>
                                <div class="form-group">
                                    <input type="text" name="permintaan_tambahan"
                                        value="<?php echo $ikp['permintaan_tambahan']; ?>" class="form-control"
                                        id="permintaan_tambahan" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="nama1" class="control-label">Diminta Oleh Penerima</label>
                                <div class="form-group">
                                    <input type="text" name="nama1" value="<?php echo $ikp['nama1'];?>"
                                        class="form-control" id="nama1" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="date1" class="control-label">Tanggal Penerima</label>
                                <div class="form-group">
                                    <input type="text" name="date1" data-date-format="YYYY-MM-DD"
                                        value="<?php echo $ikp['date1']; ?>" class="has-datepicker form-control"
                                        id="date1" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="nama2" class="control-label">Diperiksa Oleh Pengawas</label>
                                <div class="form-group">
                                    <input type="text" name="nama2" value="<?php echo $ikp['nama2']; ?>"
                                        class="form-control" id="nama2" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="date2" class="control-label">Tanggal Diperiksa</label>
                                <div class="form-group">
                                    <input type="text" name="date2" data-date-format="YYYY-MM-DD"
                                        value="<?php echo $ikp['date2']; ?>" class="has-datepicker form-control"
                                        id="date2" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="nama3" class="control-label">Dikaji Pengawas HSE</label>
                                <div class="form-group">
                                    <input type="text" name="nama3" value="<?php echo $ikp['nama3']; ?>"
                                        class="form-control" id="nama3" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="date3" class="control-label">Tanggal Dikaji HSE</label>
                                <div class="form-group">
                                    <input type="text" name="date3" data-date-format="YYYY-MM-DD"
                                        value="<?php echo $ikp['date3']; ?>" class="has-datepicker form-control"
                                        id="date3" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="nama4" class="control-label">Disetujui Oleh</label>
                                <div class="form-group">
                                    <input type="text" name="nama4" value="<?php echo $ikp['nama4']; ?>"
                                        class="form-control" id="nama4" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="date4" class="control-label">Tanggal Disetujui</label>
                                <div class="form-group">
                                    <input type="text" name="date4" data-date-format="YYYY-MM-DD"
                                        value="<?php echo $ikp['date4']; ?>" class="has-datepicker form-control"
                                        id="date4" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="nama" class="control-label">Nama</label>
                                <div class="form-group">
                                    <input type="text" name="nama" value="<?php echo $ikp['nama']; ?>"
                                        class="form-control" id="nama" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="date" class="control-label">Tanggal</label>
                                <div class="form-group">
                                    <input type="text" name="date" data-date-format="YYYY-MM-DD"
                                        value="<?php echo $ikp['date']; ?>" class="has-datepicker form-control"
                                        id="date" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="col-md-10">
                                <label for="alasan" class="control-label">Alasan</label>
                                <div class="form-group">
                                    <textarea name="alasan" class="form-control"
                                        id="alasan"><?php echo $ikp['alasan']; ?></textarea>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <label for="catatan" class="control-label">Catatan</label>
                                <div class="form-group">
                                    <textarea name="catatan" class="form-control"
                                        id="catatan"><?php echo $ikp['catatan']; ?></textarea>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <label for="date_penghentian" class="control-label">Tanggal Penghentian Izin</label>
                                <div class="form-group">
                                    <input type="text" data-date-format="YYYY-MM-DD" name="date_penghentian"
                                        value="<?php echo $ikp['date_penghentian']; ?>"
                                        class="has-datepicker form-control" id="date_penghentian" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="waktu_penghentian" class="control-label">Waktu Penghentian Izin</label>
                                <div class="form-group">
                                    <input type="text" name="waktu_penghentian"
                                        value="<?php echo $ikp['waktu_penghentian']; ?>" class="form-control"
                                        id="waktu_penghentian" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="nama_penghentian" class="control-label">Nama Penghentian</label>
                                <div class="form-group">
                                    <input type="text" name="nama_penghentian"
                                        value="<?php echo $ikp['nama_penghentian']; ?>" class="form-control"
                                        id="nama_penghentian" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="date_pengesahan" class="control-label">Tanggal Pengesahan Izin</label>
                                <div class="form-group">
                                    <input type="text" name="date_pengesahan" data-date-format="YYYY-MM-DD"
                                        value="<?php echo $ikp['date_pengesahan']; ?>"
                                        class="has-datepicker form-control" id="date_pengesahan" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="waktu_pengesahan" class="control-label">Waktu Pengesahan</label>
                                <div class="form-group">
                                    <input type="text" name="waktu_pengesahan"
                                        value="<?php echo $ikp['waktu_pengesahan']; ?>" class="form-control"
                                        id="waktu_pengesahan" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="nama_pengesahan" class="control-label">Nama Pengesahan</label>
                                <div class="form-group">
                                    <input type="text" name="nama_pengesahan"
                                        value="<?php echo $ikp['nama_pengesahan']; ?>" class="form-control"
                                        id="nama_pengesahan" />
                                </div>
                            </div>

                            <div class="col-md-12">
                                <label for="penutupan_izin" class="control-label">Penutupan Izin</label>
                                <div class="form-group">
                                    <input type="text" name="penutupan_izin"
                                        value="<?php echo $ikp['penutupan_izin']; ?>" class="form-control"
                                        id="penutupan_izin" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="nama_penerima" class="control-label">Disiapkan Oleh</label>
                                <div class="form-group">
                                    <input type="text" name="nama_penerima" value="<?php echo $ikp['nama_penerima']; ?>"
                                        class="form-control" id="nama_penerima" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="date_penerima" class="control-label">Tanggal Disiapkan</label>
                                <div class="form-group">
                                    <input type="text" name="date_penerima" data-date-format="YYYY-MM-DD"
                                        value="<?php echo $ikp['date_penerima']; ?>" class="has-datepicker form-control"
                                        id="date_penerima" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="nama_pengawas" class="control-label">Diperiksa Oleh</label>
                                <div class="form-group">
                                    <input type="text" name="nama_pengawas" value="<?php echo $ikp['nama_pengawas']; ?>"
                                        class="form-control" id="nama_pengawas" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="date_pengawas" class="control-label">Tanggal Diperiksa</label>
                                <div class="form-group">
                                    <input type="text" name="date_pengawas" data-date-format="YYYY-MM-DD"
                                        value="<?php echo $ikp['date_pengawas']; ?>" class="has-datepicker form-control"
                                        id="date_pengawas" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="nama_pemberi" class="control-label">Disetujui Oleh</label>
                                <div class="form-group">
                                    <input type="text" name="nama_pemberi" value="<?php echo $ikp['nama_pemberi']; ?>"
                                        class="form-control" id="nama_pemberi" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="date_pemberi" class="control-label">Tanggal Disetujui</label>
                                <div class="form-group">
                                    <input type="text" name="date_pemberi" data-date-format="YYYY-MM-DD"
                                        value="<?php echo $ikp['date_pemberi']; ?>" class="has-datepicker form-control"
                                        id="date_pemberi" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-footer">
                        <?= anchor('ikp','Kembali',array('class'=>'btn btn-default ')) ?>
                    </div>

                </div>
            </div>
        </div>
    </div>
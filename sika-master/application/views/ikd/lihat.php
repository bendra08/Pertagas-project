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
                    <h3 class="box-title"><strong>Form Izin Kerja Dingin</strong></h3>
                </div>
                <div class="box-body">
                    <div class="row clearfix">
                        <div class="col-md-4">
                            <div class="col-md-10">
                                <label for="lanjutan_no" class="control-label">Lanjutan SIKA No.</label>
                                <div class="form-group">
                                    <input type="text" name="lanjutan_no" value="<?php echo $ikd['lanjutan_no']; ?>"
                                        class="form-control" id="lanjutan_no" />
                                </div>
                            </div>

                            <div class="col-md-7">
                                <label for="tanggal_terbit" class="control-label">Tanggal Diterbitkan </label>
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" name="tanggal_terbit" value="<?= $ikd['tanggal_terbit'] ?>"
                                        placeholder="YYYY-MM-DD" data-date-format="yyyy-mm-dd"
                                        class="form-control pull-right" id="datepicker" autocomplete="off" />
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="row clearfix">
                                </div>
                            </div>

                            <div class="col-md-7">
                                <label for="tgl_akhir_terbit" class="control-label">Sampai Dengan Tanggal </label>
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" name="tgl_akhir_terbit" value="<?= $ikd['tgl_akhir_terbit'] ?>"
                                        placeholder="YYYY-MM-DD" data-date-format="yyyy-mm-dd"
                                        class="form-control pull-right" id="datepicker2" autocomplete="off" />
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="row clearfix">
                                </div>
                            </div>

                            <div class="col-md-5">
                                <label for="jam_kerja" class="control-label">Jam Kerja Awal</label>
                                <div class="form-group">
                                    <?php $selected['jam_kerja'] =  $ikd['jam_kerja'] ?>
                                    <?php echo form_dropdown('jam_kerja', @$jam_kerja,@$selected['jam_kerja'],[ 'no' => 'jam_kerja','class' => 'form-control','required' => 'true' ]); ?>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <label for="jam_akhir_kerja" class="control-label">Jam Kerja Akhir</label>
                                <div class="form-group">
                                    <?php $selected['jam_akhir_kerja'] =  $ikd['jam_akhir_kerja'] ?>
                                    <?php echo form_dropdown('jam_akhir_kerja', @$jam_akhir_kerja,$selected['jam_akhir_kerja'],[ 'no' => 'jam_akhir_kerja','class' => 'form-control','required' => 'true' ]); ?>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <label for="nama_pelaksana" class="control-label">Nama Pelaksana Kerja</label>
                                <div class="form-group">
                                    <input type="text" name="nama_pelaksana"
                                        value="<?php echo $ikd['nama_pelaksana'] ?>" class="form-control"
                                        id="nama_pelaksana" />
                                </div>
                            </div>
                            <div class="col-md-10">
                                <label for="perusahaan" class="control-label">Perusahaan</label>
                                <div class="form-group">
                                    <input type="text" name="perusahaan" value="<?php echo $ikd['perusahaan'] ?>"
                                        class="form-control" id="perusahaan" />
                                </div>
                            </div>
                            <div class="col-md-10">
                                <label for="jumlah_pekerja" class="control-label">Jumlah Pekerja</label>
                                <div class="form-group">
                                    <input type="text" name="jumlah_pekerja"
                                        value="<?php echo $ikd['jumlah_pekerja'] ?>" class="form-control"
                                        id="jumlah_pekerja" />
                                </div>
                            </div>
                            <div class="col-md-10">
                                <label for="lokasi" class="control-label">Lokasi/Fasilitas</label>
                                <div class="form-group">
                                    <input type="text" name="lokasi" value="<?php echo $ikd['lokasi'] ?>"
                                        class="form-control" id="lokasi" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="uraian_pekerjaan" class="control-label">Uraian Pekerjaan</label>
                                <div class="form-group">
                                    <textarea name="uraian_pekerjaan" class="form-control"
                                        id="uraian_pekerjaan"><?= $ikd['uraian_pekerjaan'] ?></textarea>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <label for="peralatan" class="control-label">Peralatan Yang Digunakan</label>
                                <div class="form-group">
                                    <input type="text" name="peralatan" value="<?= $ikd['peralatan'] ?>"
                                        class="form-control" id="peralatan" />
                                </div>
                            </div>
                            <div class="col-md-10">
                                <label for="isolasi_peralatan" class="control-label">Isolasi Peralatan</label>
                                <div class="form-group">
                                    <input type="checkbox" name="isolasi_peralatan[]" value="LOTO Electric Circuits"
                                        <?= (array_search("LOTO Electric Circuits",json_decode($ikd["isolasi_peralatan"])) !== false) ? 'checked' : '' ?>>
                                    LOTO Electric Circuits &nbsp;
                                    <br><input type="checkbox" name="isolasi_peralatan[]" value="LOTO Valve Gas"
                                        <?= (array_search("LOTO Valve Gas",json_decode($ikd["isolasi_peralatan"])) !== false) ? 'checked' : '' ?>>
                                    LOTO Valve Gas &nbsp;
                                    <br><input type="checkbox" name="isolasi_peralatan[]" value="LOTO Valve Water"
                                        <?= (array_search("LOTO Valve Water",json_decode($ikd["isolasi_peralatan"])) !== false) ? 'checked' : '' ?>>
                                    LOTO Valve Water &nbsp;
                                    <br><input type="checkbox" name="isolasi_peralatan[]"
                                        value="LOTO Valve Air Instrument"
                                        <?= (array_search("LOTO Valve Air Instrument",json_decode($ikd["isolasi_peralatan"])) !== false) ? 'checked' : '' ?>>
                                    LOTO Valve Air Instrument &nbsp;
                                </div>
                            </div>
                            <div class="col-md-10">
                                <label for="lampiran" class="control-label">Lampiran</label>
                                <div class="form-group">
                                    <input type="checkbox" name="lampiran[]" value="Prosedur Khusus"
                                        <?= (array_search("Prosedur Khusus",json_decode($ikd["lampiran"])) !== false) ? 'checked' : '' ?>>
                                    Prosedur Khusus &nbsp;
                                    <br><input type="checkbox" name="lampiran[]" value="Gambar P&ID"
                                        <?= (array_search("Gambar P&ID",json_decode($ikd["lampiran"])) !== false) ? 'checked' : '' ?>>
                                    Gambar P&ID &nbsp;
                                    <br><input type="checkbox" name="lampiran[]" value="TKO, TKI, TKPA"
                                        <?= (array_search("TKO, TKI, TKPA",json_decode($ikd["lampiran"])) !== false) ? 'checked' : '' ?>>
                                    TKO, TKI, TKPA &nbsp;
                                    <br><input type="checkbox" name="lampiran[]" value="HIRA"
                                        <?= (array_search("HIRA",json_decode($ikd["lampiran"])) !== false) ? 'checked' : '' ?>>
                                    JHSEA/HIRA &nbsp;
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <label for="identiikasi_bahaya" class="control-label">Identifikasi Bahaya</label>
                                <div class="form-group">
                                    <input type="checkbox" name="identiikasi_bahaya[]" value="Gas Lemas"
                                        <?= (array_search("Gas Lemas",json_decode($ikd["identiikasi_bahaya"])) !== false) ? 'checked' : '' ?>>
                                    Gas Lemas &nbsp;
                                    <br><input type="checkbox" name="identiikasi_bahaya[]" value="Kekurangan Oksigen"
                                        <?= (array_search("Kekurangan Oksigen",json_decode($ikd["identiikasi_bahaya"])) !== false)  ? 'checked' : '' ?>>
                                    Kekurangan Oksigen &nbsp;
                                    <br><input type="checkbox" name="identiikasi_bahaya[]" value="Gas/Uap Beracun"
                                        <?= (array_search("Gas/Uap Beracun",json_decode($ikd["identiikasi_bahaya"])) !== false)  ? 'checked' : '' ?>>
                                    Gas/Uap Beracun &nbsp;
                                    <br><input type="checkbox" name="identiikasi_bahaya[]" value="Bising"
                                        <?= (array_search("Bising",json_decode($ikd["identiikasi_bahaya"])) !== false) ? 'checked' : '' ?>>
                                    Bising &nbsp;
                                    <br><input type="checkbox" name="identiikasi_bahaya[]"
                                        value="Bahan Berbahaya dan beracun"
                                        <?= (array_search("Bahan Berbahaya dan beracun",json_decode($ikd["identiikasi_bahaya"])) !== false)  ? 'checked' : '' ?>>
                                    Bahan Berbahaya dan beracun &nbsp;
                                    <br><input type="checkbox" name="identiikasi_bahaya[]"
                                        value="Peralatan jalan/listrik hidup/tersengat"
                                        <?= (array_search("Peralatan jalan/listrik hidup/tersengat",json_decode($ikd["identiikasi_bahaya"])) !== false) ? 'checked' : '' ?>>
                                    Peralatan jalan/listrik hidup/tersengat &nbsp;
                                    <br><input type="checkbox" name="identiikasi_bahaya[]"
                                        value="Mesin bergerak/berputar"
                                        <?= (array_search("Mesin bergerak/berputar",json_decode($ikd["identiikasi_bahaya"])) !== false)  ? 'checked' : '' ?>>
                                    Mesin bergerak/berputar &nbsp;
                                    <br><input type="checkbox" name="identiikasi_bahaya[]" value="Cairan/gas bertekanan"
                                        <?= (array_search("Cairan/gas bertekanan",json_decode($ikd["identiikasi_bahaya"])) !== false) ? 'checked' : '' ?>>
                                    Cairan/gas bertekanan &nbsp;
                                    <br><input type="checkbox" name="identiikasi_bahaya[]" value="Longsoran"
                                        <?= (array_search("Longsoran",json_decode($ikd["identiikasi_bahaya"])) !== false)  ? 'checked' : '' ?>>
                                    Longsoran &nbsp;
                                    <br><input type="checkbox" name="identiikasi_bahaya[]" value="Benda bergerak"
                                        <?= (array_search("Benda bergerak",json_decode($ikd["identiikasi_bahaya"])) !== false)  ? 'checked' : '' ?>>
                                    Benda bergerak &nbsp;
                                    <br><input type="checkbox" name="identiikasi_bahaya[]"
                                        value="Pengangkatan Benda berat"
                                        <?= (array_search("Pengangkatan Benda berat",json_decode($ikd["identiikasi_bahaya"])) !== false)  ? 'checked' : '' ?>>Pengangkatan
                                    Benda berat &nbsp;
                                    <br><input type="checkbox" name="identiikasi_bahaya[]" value="Kerja di ketinggian"
                                        <?= (array_search("Kerja di ketinggian",json_decode($ikd["identiikasi_bahaya"])) !== false) ? 'checked' : '' ?>>
                                    Kerja di ketinggian &nbsp;
                                    <br><input type="checkbox" name="identiikasi_bahaya[]" value="Radiasi Radio Aktif"
                                        <?= (array_search("Radiasi Radio Aktif",json_decode($ikd["identiikasi_bahaya"])) !== false)  ? 'checked' : '' ?>>
                                    Radiasi Radio Aktif &nbsp;
                                    <br><input type="checkbox" name="identiikasi_bahaya[]" value="Kontaminasi Tanah"
                                        <?= (array_search("Kontaminasi Tanah",json_decode($ikd["identiikasi_bahaya"])) !== false)  ? 'checked' : '' ?>>
                                    Kontaminasi Tanah &nbsp;
                                    <br><input type="checkbox" name="identiikasi_bahaya[]"
                                        value="Temperatur ekstrim (dingin/panas)"
                                        <?= (array_search("Temperatur ekstrim (dingin/panas)",json_decode($ikd["identiikasi_bahaya"])) !== false) ? 'checked' : '' ?>>Temperatur
                                    ekstrim (dingin/panas) &nbsp;
                                    <br><input type="checkbox" name="identiikasi_bahaya[]"
                                        value="Pengangkatan Manual/alat angkat"
                                        <?= (array_search("Pengangkatan Manual/alat angkat",json_decode($ikd["identiikasi_bahaya"])) !== false)  ? 'checked' : '' ?>>
                                    Pengangkatan Manual/alat angkat &nbsp;
                                    <br><input type="checkbox" name="identiikasi_bahaya[]"
                                        value="Ruang terbatas/kekurangan oksigen"
                                        <?= (array_search("Ruang terbatas/kekurangan oksigen",json_decode($ikd["identiikasi_bahaya"])) !== false)  ? 'checked' : '' ?>>
                                    Ruang terbatas/kekurangan oksigen &nbsp;
                                    <br><input type="checkbox" name="identiikasi_bahaya[]"
                                        value="Bahaya Pencemaran Lingkungan"
                                        <?= (array_search("Bahaya Pencemaran Lingkungan",json_decode($ikd["identiikasi_bahaya"])) !== false)  ? 'checked' : '' ?>>
                                    Bahaya Pencemaran Lingkungan &nbsp;
                                    <br><input type="checkbox" name="identiikasi_bahaya[]" value="Faktor Ergonomis"
                                        <?= (array_search("Faktor Ergonomis",json_decode($ikd["identiikasi_bahaya"])) !== false) ? 'checked' : '' ?>>
                                    Faktor Ergonomis &nbsp;
                                    <br><input type="checkbox" name="identiikasi_bahaya[]" value="Paparan Debu"
                                        <?= (array_search("Paparan Debu",json_decode($ikd["identiikasi_bahaya"])) !== false)  ? 'checked' : '' ?>>
                                    Paparan Debu &nbsp;
                                    <br><input type="checkbox" name="identiikasi_bahaya[]" value="Dampak visual"
                                        <?= (array_search("Dampak visual",json_decode($ikd["identiikasi_bahaya"])) !== false)  ? 'checked' : '' ?>>
                                    Dampak visual &nbsp;
                                    <br><input type="checkbox" name="identiikasi_bahaya[]" value="Biohazard"
                                        <?= (array_search("Biohazard",json_decode($ikd["identiikasi_bahaya"])) !== false)  ? 'checked' : '' ?>>
                                    Biohazard &nbsp;
                                    <br><input type="checkbox" name="identiikasi_bahaya[]" value="Iritasi Mata/Kulit"
                                        <?= (array_search("Iritasi Mata/Kulit",json_decode($ikd["identiikasi_bahaya"])) !== false)  ? 'checked' : '' ?>>
                                    Iritasi Mata/Kulit &nbsp;
                                    <br><input type="checkbox" name="identiikasi_bahaya[]" value="Gangguan Pernafasan"
                                        <?= (array_search("Gangguan Pernafasan",json_decode($ikd["identiikasi_bahaya"])) !== false)  ? 'checked' : '' ?>>
                                    Gangguan Pernafasan &nbsp;
                                    <br><input type="checkbox" name="identiikasi_bahaya[]" value="Faktor fisik/biologis"
                                        <?= (array_search("Faktor fisik/biologis",json_decode($ikd["identiikasi_bahaya"])) !== false) ? 'checked' : '' ?>>
                                    Faktor fisik/biologis &nbsp;
                                    <br><input type="checkbox" name="identiikasi_bahaya[]" value="Gangguan Keamanan"
                                        <?= (array_search("Gangguan Keamanan",json_decode($ikd["identiikasi_bahaya"])) !== false)  ? 'checked' : '' ?>>
                                    Gangguan Keamanan &nbsp;
                                    <br><input type="checkbox" name="identiikasi_bahaya[]" value="Pencurian"
                                        <?= (array_search("Pencurian",json_decode($ikd["identiikasi_bahaya"])) !== false)  ? 'checked' : '' ?>>
                                    Pencurian &nbsp;
                                </div>
                            </div>
                            <div class="col-md-10">
                                <label for="izin_diperlukan" class="control-label">Izin Diperlukan</label>
                                <div class="form-group">
                                    <input type="checkbox" name="izin_diperlukann[]"
                                        value="Izin Kerja masuk ruang Terbatas"
                                        <?= (array_search("Izin Kerja masuk ruang Terbatas",json_decode($ikd["izin_diperlukan"])) !== false) ? 'checked' : '' ?>>
                                    Izin Kerja masuk ruang Terbatas&nbsp;
                                    <br><input type="checkbox" name="izin_diperlukan[]" value="Izin Kerja Radiografi"
                                        <?= (array_search("Izin Kerja Radiografi",json_decode($ikd["izin_diperlukan"])) !== false) ? 'checked' : '' ?>>
                                    Izin Kerja Radiografi&nbsp;
                                    <br><input type="checkbox" name="izin_diperlukan[]"
                                        value="Izin Kerja Isolasi  Listrik"
                                        <?= (array_search("Izin Kerja Isolasi  Listrik",json_decode($ikd["izin_diperlukan"])) !== false)? 'checked' : '' ?>>
                                    Izin Kerja Isolasi Listrik &nbsp;
                                    <br><input type="checkbox" name="izin_diperlukan[]" value="Izin Kerja Penggalian"
                                        <?= (array_search("Izin Kerja Penggalian",json_decode($ikd["izin_diperlukan"])) !== false) ? 'checked' : '' ?>>
                                    Izin Kerja Penggalian &nbsp;
                                    <br><input type="checkbox" name="izin_diperlukan[]" value="Izin Kerja Pengangkatan"
                                        <?= (array_search("Izin Kerja Pengangkatan",json_decode($ikd["izin_diperlukan"])) !== false) ? 'checked' : '' ?>>
                                    Izin Kerja Pengangkatan &nbsp;
                                    <br><input type="checkbox" name="izin_diperlukan[]" value="Izin Kerja Ketinggian"
                                        <?= (array_search("Izin Kerja Ketinggian",json_decode($ikd["izin_diperlukan"])) !== false) ? 'checked' : '' ?>>
                                    Izin Kerja Ketinggian &nbsp;
                                </div>
                            </div>
                            <div class="col-md-10">
                                <label for="sifat_pekerjaan" class="control-label">Sifat Pekerjaan</label>
                                <div class="form-group">
                                    <input type="checkbox" name="sifat_pekerjaan[]" value="Normal"
                                        <?= (array_search("Normal",json_decode($ikd["sifat_pekerjaan"])) !== false) ? 'checked' : '' ?>>
                                    Normal &nbsp;
                                    <br><input type="checkbox" name="sifat_pekerjaan[]" value="T/A"
                                        <?= (array_search("T/A",json_decode($ikd["sifat_pekerjaan"])) !== false) ? 'checked' : '' ?>>
                                    T/A &nbsp;
                                    <br><input type="checkbox" name="sifat_pekerjaan[]" value="Emergency"
                                        <?= (array_search("Emergency",json_decode($ikd["sifat_pekerjaan"])) !== false) ? 'checked' : '' ?>>
                                    Emergency &nbsp;
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="col-md-12	">
                                <label for="identifikasi_tambahan" class="control-label">Identifikasi Tambahan</label>
                                <div class="form-group">
                                    <textarea name="identifikasi_tambahan" class="form-control"
                                        id="identifikasi_tambahan"><?php echo $ikd['identifikasi_tambahan']; ?></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <label for="pengendalian_bahaya" class="control-label">Pengendalian Bahaya</label>
                                <div class="form-group">
                                    <input type="checkbox" name="pengendalian_bahaya[]"
                                        value="Topi Keselamatan yang sesuai"
                                        <?= (array_search("Topi Keselamatan yang sesuai",json_decode($ikd["sifat_pekerjaan"])) !== false) ? 'checked' : '' ?>>
                                    Topi Keselamatan yang sesuai &nbsp;
                                    <br><input type="checkbox" name="pengendalian_bahaya[]"
                                        value="Sepatu Keselamatan yang sesuai"
                                        <?= (array_search("Sepatu Keselamatan yang sesuai",json_decode($ikd["pengendalian_bahaya"])) !== false) ? 'checked' : '' ?>>
                                    Sepatu Keselamatan yang sesuai &nbsp;
                                    <br><input type="checkbox" name="pengendalian_bahaya[]"
                                        value="Kacamata Keselamatan yang sesuai"
                                        <?= (array_search("Kacamata Keselamatan yang sesuai",json_decode($ikd["pengendalian_bahaya"])) !== false) ? 'checked' : '' ?>>
                                    Kacamata Keselamatan yang sesuai &nbsp;
                                    <br><input type="checkbox" name="pengendalian_bahaya[]"
                                        value="Pelindung Telinga yang sesuai"
                                        <?= (array_search("Pelindung Telinga yang sesuai",json_decode($ikd["pengendalian_bahaya"])) !== false) ? 'checked' : '' ?>>
                                    Pelindung Telinga yang sesuai &nbsp;
                                    <br><input type="checkbox" name="pengendalian_bahaya[]"
                                        value="Sarung Tangan Keselamatan"
                                        <?= (array_search("Sarung Tangan Keselamatan",json_decode($ikd["pengendalian_bahaya"])) !== false) ? 'checked' : '' ?>>
                                    Sarung Tangan Keselamatan &nbsp;
                                    <br><input type="checkbox" name="pengendalian_bahaya[]" value="Harnes/Tali Pengaman"
                                        <?= (array_search("Harnes/Tali Pengaman",json_decode($ikd["pengendalian_bahaya"])) !== false) ? 'checked' : '' ?>>
                                    Harnes/Tali Pengaman &nbsp;
                                    <br><input type="checkbox" name="pengendalian_bahaya[]" value="Masker debu/gas"
                                        <?= (array_search("Masker debu/gas",json_decode($ikd["pengendalian_bahaya"])) !== false) ? 'checked' : '' ?>>
                                    Masker debu/gas &nbsp;
                                    <br><input type="checkbox" name="pengendalian_bahaya[]" value="Masker Kimia"
                                        <?= (array_search("Masker Kimia",json_decode($ikd["pengendalian_bahaya"])) !== false) ? 'checked' : '' ?>>
                                    Masker Kimia &nbsp;
                                    <br><input type="checkbox" name="pengendalian_bahaya[]" value="Tali Pembatas Daerah"
                                        <?= (array_search("Tali Pembatas Daerah",json_decode($ikd["pengendalian_bahaya"])) !== false) ? 'checked' : '' ?>>
                                    Tali Pembatas Daerah &nbsp;
                                    <br><input type="checkbox" name="pengendalian_bahaya[]" value="Absorben"
                                        <?= (array_search("Absorben",json_decode($ikd["pengendalian_bahaya"])) !== false) ? 'checked' : '' ?>>
                                    Absorben &nbsp;
                                    <br><input type="checkbox" name="pengendalian_bahaya[]"
                                        value="Peralatan disolasi/dilepas"
                                        <?= (array_search("Peralatan disolasi/dilepas",json_decode($ikd["pengendalian_bahaya"])) !== false) ? 'checked' : '' ?>>
                                    Peralatam disolasi/dilepas &nbsp;
                                    <br><input type="checkbox" name="pengendalian_bahaya[]"
                                        value="Pengesahan Gas sebelum mulai kerja (LEL, 02, Toxic)"
                                        <?= (array_search("Pengesahan Gas sebelum mulai kerja (LEL, 02, Toxic)",json_decode($ikd["pengendalian_bahaya"])) !== false) ? 'checked' : '' ?>>
                                    Pengesahan Gas sebelum mulai kerja (LEL, 02, Toxic) &nbsp;
                                    <br><input type="checkbox" name="pengendalian_bahaya[]"
                                        value="Pengetesan HC gas terus menerus"
                                        <?= (array_search("Pengetesan HC gas terus menerus",json_decode($ikd["pengendalian_bahaya"])) !== false) ? 'checked' : '' ?>>
                                    Pengetesan HC gas terus menerus &nbsp;
                                    <br><input type="checkbox" name="pengendalian_bahaya[]"
                                        value=" Alat anti percikan api (Non sparking Tools)"
                                        <?= (array_search(" Alat anti percikan api (Non sparking Tools)",json_decode($ikd["pengendalian_bahaya"])) !== false) ? 'checked' : '' ?>>
                                    Alat anti percikan api (Non sparking Tools) &nbsp;
                                    <br><input type="checkbox" name="pengendalian_bahaya[]"
                                        value="Tanda Peringatan/rintangan"
                                        <?= (array_search("Tanda Peringatan/rintangan",json_decode($ikd["pengendalian_bahaya"])) !== false) ? 'checked' : '' ?>>
                                    Tanda Peringatan/rintangan &nbsp;
                                    <br><input type="checkbox" name="pengendalian_bahaya[]"
                                        value="Peralatan tanpa tekanan"
                                        <?= (array_search("Peralatan tanpa tekanan",json_decode($ikd["pengendalian_bahaya"])) !== false) ? 'checked' : '' ?>>
                                    Peralatan tanpa tekanan &nbsp;
                                    <br><input type="checkbox" name="pengendalian_bahaya[]"
                                        value="Peralatan dikuras(flushing)"
                                        <?= (array_search("Peralatan dikuras(flushing)",json_decode($ikd["pengendalian_bahaya"])) !== false) ? 'checked' : '' ?>>
                                    Peralatan dikuras(flushing) &nbsp;
                                    <br><input type="checkbox" name="pengendalian_bahaya[]"
                                        value="Peralatan disolasi/dilepas"
                                        <?= (array_search("Peralatan disolasi/dilepas",json_decode($ikd["pengendalian_bahaya"])) !== false) ? 'checked' : '' ?>>
                                    Peralatan disolasi/dilepas &nbsp;
                                    <br><input type="checkbox" name="pengendalian_bahaya[]" value="PPE sand blasting"
                                        <?= (array_search("PPE sand blasting",json_decode($ikd["pengendalian_bahaya"])) !== false) ? 'checked' : '' ?>>
                                    PPE sand blasting &nbsp;
                                    <br><input type="checkbox" name="pengendalian_bahaya[]"
                                        value="Alat bantu pernafasan udara tekan"
                                        <?= (array_search("Alat bantu pernafasan udara tekan",json_decode($ikd["pengendalian_bahaya"])) !== false) ? 'checked' : '' ?>>
                                    Alat bantu pernafasan udara tekan &nbsp;
                                    <br><input type="checkbox" name="pengendalian_bahaya[]"
                                        value="Tirai pelindung semprotan pasir"
                                        <?= (array_search("Tirai pelindung semprotan pasir",json_decode($ikd["pengendalian_bahaya"])) !== false) ? 'checked' : '' ?>>
                                    Tirai pelindung semprotan pasir &nbsp;
                                    <br><input type="checkbox" name="pengendalian_bahaya[]" value="PPE Bahan Kimia"
                                        <?= (array_search("PPE Bahan Kimia",json_decode($ikd["pengendalian_bahaya"])) !== false) ? 'checked' : '' ?>>
                                    PPE Bahan Kimia &nbsp;
                                    <br><input type="checkbox" name="pengendalian_bahaya[]"
                                        value="Alat Penanggulangan pencemaran"
                                        <?= (array_search("Alat Penanggulangan pencemaran",json_decode($ikd["pengendalian_bahaya"])) !== false) ? 'checked' : '' ?>>
                                    Alat Penanggulangan pencemaran &nbsp;
                                    <br><input type="checkbox" name="pengendalian_bahaya[]" value="Tanda Keselamatan"
                                        <?= (array_search("Tanda Keselamatan",json_decode($ikd["pengendalian_bahaya"])) !== false) ? 'checked' : '' ?>>
                                    Tanda Keselamatan &nbsp;
                                    <br><input type="checkbox" name="pengendalian_bahaya[]"
                                        value="Tambahan Lampu Penerangan"
                                        <?= (array_search("Tambahan Lampu Penerangan",json_decode($ikd["pengendalian_bahaya"])) !== false) ? 'checked' : '' ?>>
                                    Tambahan Lampu Penerangan &nbsp;
                                    <br><input type="checkbox" name="pengendalian_bahaya[]"
                                        value="Scaffolding/perancah/tanggah"
                                        <?= (array_search("Scaffolding/perancah/tanggah",json_decode($ikd["pengendalian_bahaya"])) !== false) ? 'checked' : '' ?>>
                                    Scaffolding/perancah/tanggah &nbsp;
                                    <br><input type="checkbox" name="pengendalian_bahaya[]"
                                        value="Pos Pemeriksaan (barang dan data pribadi) "
                                        <?= (array_search("Pos Pemeriksaan (barang dan data pribadi) ",json_decode($ikd["pengendalian_bahaya"])) !== false) ? 'checked' : '' ?>>
                                    Pos Pemeriksaan (barang dan data pribadi) &nbsp;
                                    <br><input type="checkbox" name="pengendalian_bahaya[]"
                                        value="Alat penampung cairan B3"
                                        <?= (array_search("Alat penampung cairan B3",json_decode($ikd["pengendalian_bahaya"])) !== false) ? 'checked' : '' ?>>
                                    Alat penampung cairan B3 &nbsp;
                                </div>
                            </div>

                            <div class="col-md-12">
                                <label for="permintaan_tambahan" class="control-label">Permintaan Tambahan</label>
                                <div class="form-group">
                                    <input type="text" name="permintaan_tambahan"
                                        value="<?php echo $ikd['permintaan_tambahan']; ?>" class="form-control"
                                        id="permintaan_tambahan" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="nama1" class="control-label">Diminta Oleh Penerima</label>
                                <div class="form-group">
                                    <input type="text" name="nama1" value="<?php echo $ikd['nama1']; ?>"
                                        class="form-control" id="nama1" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="date1" class="control-label">Tanggal Penerima</label>
                                <div class="form-group">
                                    <input type="text" name="date1" data-date-format="YYYY-MM-DD"
                                        value="<?php echo $ikd['date1']; ?>" class="has-datepicker form-control"
                                        id="date1" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="nama2" class="control-label">Diperiksa Oleh Pengawas</label>
                                <div class="form-group">
                                    <input type="text" name="nama2" value="<?php echo $ikd['nama2']; ?>"
                                        class="form-control" id="nama2" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="date2" class="control-label">Tanggal Diperiksa</label>
                                <div class="form-group">
                                    <input type="text" name="date2" data-date-format="YYYY-MM-DD"
                                        value="<?php echo $ikd['date2']; ?>" class="has-datepicker form-control"
                                        id="date2" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="nama3" class="control-label">Dikaji Pengawas HSE</label>
                                <div class="form-group">
                                    <input type="text" name="nama3" value="<?php echo $ikd['nama3']; ?>"
                                        class="form-control" id="nama3" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="date3" class="control-label">Tanggal Dikaji HSE</label>
                                <div class="form-group">
                                    <input type="text" name="date3" data-date-format="YYYY-MM-DD"
                                        value="<?php echo $ikd['date3']; ?>" class="has-datepicker form-control"
                                        id="date3" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="nama4" class="control-label">Disetujui Oleh</label>
                                <div class="form-group">
                                    <input type="text" name="nama4" value="<?php echo $ikd['nama4']; ?>"
                                        class="form-control" id="nama4" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="date4" class="control-label">Tanggal Disetujui</label>
                                <div class="form-group">
                                    <input type="text" name="date4" data-date-format="YYYY-MM-DD"
                                        value="<?php echo $ikd['date4']; ?>" class="has-datepicker form-control"
                                        id="date4" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="nama" class="control-label">Nama</label>
                                <div class="form-group">
                                    <input type="text" name="nama" value="<?php echo $ikd['nama']; ?>"
                                        class="form-control" id="nama" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="date" class="control-label">Tanggal</label>
                                <div class="form-group">
                                    <input type="text" name="date" data-date-format="YYYY-MM-DD"
                                        value="<?php echo $ikd['date']; ?>" class="has-datepicker form-control"
                                        id="date" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="col-md-10">
                                <label for="alasan" class="control-label">Alasan</label>
                                <div class="form-group">
                                    <textarea name="alasan" class="form-control"
                                        id="alasan"><?php echo $ikd['alasan']; ?></textarea>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <label for="catatan" class="control-label">Catatan</label>
                                <div class="form-group">
                                    <textarea name="catatan" class="form-control"
                                        id="catatan"><?php echo $ikd['catatan']; ?></textarea>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <label for="date_penghentian" class="control-label">Tanggal Penghentian Izin</label>
                                <div class="form-group">
                                    <input type="text" name="date_penghentian" data-date-format="YYYY-MM-DD"
                                        value="<?php echo $ikd['date_penghentian']; ?>"
                                        class="has-datepicker form-control" id="date_penghentian" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="waktu_penghentian" class="control-label">Waktu Penghentian Izin</label>
                                <div class="form-group">
                                    <input type="text" name="waktu_penghentian"
                                        value="<?php echo $ikd['waktu_penghentian']; ?>" class="form-control"
                                        id="waktu_penghentian" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="nama_penghentian" class="control-label">Nama Penghentian</label>
                                <div class="form-group">
                                    <input type="text" name="nama_penghentian"
                                        value="<?php echo $ikd['nama_penghentian']; ?>" class="form-control"
                                        id="nama_penghentian" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="date_pengesahan" class="control-label">Tanggal Pengesahan Izin</label>
                                <div class="form-group">
                                    <input type="text" name="date_pengesahan" data-date-format="YYYY-MM-DD"
                                        value="<?php echo $ikd['date_pengesahan']; ?>"
                                        class="has-datepicker form-control" id="date_pengesahan" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="waktu_pengesahan" class="control-label">Waktu Pengesahan Izin</label>
                                <div class="form-group">
                                    <input type="text" name="waktu_pengesahan"
                                        value="<?php echo $ikd['waktu_pengesahan']; ?>" class="form-control"
                                        id="waktu_pengesahan" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="nama_pengesahan" class="control-label">Nama Pengesahan Izin</label>
                                <div class="form-group">
                                    <input type="text" name="nama_pengesahan"
                                        value="<?php echo $ikd['nama_pengesahan']; ?>" class="form-control"
                                        id="nama_pengesahan" />
                                </div>
                            </div>

                            <div class="col-md-12">
                                <label for="penutupan_izin" class="control-label">Penutupan Izin</label>
                                <div class="form-group">
                                    <input type="text" name="penutupan_izin"
                                        value="<?php echo $ikd['penutupan_izin']; ?>" class="form-control"
                                        id="penutupan_izin" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="nama_penerima" class="control-label">Disiapkan Oleh</label>
                                <div class="form-group">
                                    <input type="text" name="nama_penerima" value="<?php echo $ikd['nama_penerima']; ?>"
                                        class="form-control" id="nama_penerima" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="date_penerima" class="control-label">Tanggal Disiapkan</label>
                                <div class="form-group">
                                    <input type="text" name="date_penerima" data-date-format="YYYY-MM-DD"
                                        value="<?php echo $ikd['date_penerima']; ?>" class="has-datepicker form-control"
                                        id="date_penerima" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="nama_pengawas" class="control-label">Diperiksa Oleh</label>
                                <div class="form-group">
                                    <input type="text" name="nama_pengawas" value="<?php echo $ikd['nama_pengawas']; ?>"
                                        class="form-control" id="nama_pengawas" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="date_pengawas" class="control-label">Tanggal Diperiksa</label>
                                <div class="form-group">
                                    <input type="text" name="date_pengawas" data-date-format="YYYY-MM-DD"
                                        value="<?php echo $ikd['date_pengawas']; ?>" class="has-datepicker form-control"
                                        id="date_pengawas" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="nama_pemberi" class="control-label">Disetujui Oleh</label>
                                <div class="form-group">
                                    <input type="text" name="nama_pemberi" value="<?php echo $ikd['nama_pemberi']; ?>"
                                        class="form-control" id="nama_pemberi" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="date_pemberi" class="control-label">Tanggal Disetujui</label>
                                <div class="form-group">
                                    <input type="text" name="date_pemberi" data-date-format="YYYY-MM-DD"
                                        value="<?php echo $ikd['date_pemberi']; ?>" class="has-datepicker form-control"
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
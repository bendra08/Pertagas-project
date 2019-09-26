<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title"><strong>Form Izin Kerja Dingin</strong></h3>
            </div>
            <?php echo form_open('ikd/add/'.$id); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-4">
					<div class="col-md-10">
					<label for="lanjutan_no" class="control-label">Lanjutan SIKA No.</label>
						<div class="form-group">
							<input type="text" name="lanjutan_no" value="<?php echo $this->input->post('lanjutan_no'); ?>" class="form-control" id="lanjutan_no" />
						</div>
						</div>

					<div class="col-md-7">
							<label for="tanggal_terbit" class="control-label">Tanggal Diterbitkan </label>
								<div class="input-group date">
									<div class="input-group-addon">
										<i class="fa fa-calendar"></i>
									</div>
									<input type="text" name="tanggal_terbit" value="<?= ($hira->no===NULL) ? $this->input->post('tanggal_terbit') : $hira->tanggal_terbit ?>"
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
									<input type="text" name="tgl_akhir_terbit" value="<?= ($hira->no===NULL) ? $this->input->post('tgl_akhir_terbit') : $hira->tgl_akhir_terbit ?>""
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
							<?php $selected['jam_kerja'] =  ($hira->no===NULL) ? $this->input->post('jam_kerja') : $hira->jam_kerja ?>
								<?php echo form_dropdown('jam_kerja', @$jam_kerja,@$selected['jam_kerja'],[ 'no' => 'jam_kerja','class' => 'form-control','required' => 'true' ]); ?>
						</div>
					</div>
						<div class="col-md-5">
								<label for="jam_akhir_kerja" class="control-label">Jam Kerja Akhir</label>
								<div class="form-group">
								<?php $selected['jam_akhir_kerja'] =  ($hira->no===NULL) ? $this->input->post('jam_akhir_kerja') : $hira->jam_akhir_kerja ?>
										<?php echo form_dropdown('jam_akhir_kerja', @$jam_akhir_kerja,$selected['jam_akhir_kerja'],[ 'no' => 'jam_akhir_kerja','class' => 'form-control','required' => 'true' ]); ?>
								</div>
						</div>
					<div class="col-md-10">
						<label for="nama_pelaksana" class="control-label">Nama Pelaksana Kerja</label>
						<div class="form-group">
							<input type="text" name="nama_pelaksana" value="<?php echo $this->input->post('nama_pelaksana'); ?>" class="form-control" id="nama_pelaksana" />
						</div>
					</div>
					<div class="col-md-10">
						<label for="perusahaan" class="control-label">Perusahaan</label>
						<div class="form-group">
							<input type="text" name="perusahaan" value="<?php echo $this->input->post('perusahaan'); ?>" class="form-control" id="perusahaan" />
						</div>
					</div>
					<div class="col-md-10">
						<label for="jumlah_pekerja" class="control-label">Jumlah Pekerja</label>
						<div class="form-group">
							<input type="text" name="jumlah_pekerja" value="<?php echo $this->input->post('jumlah_pekerja'); ?>" class="form-control" id="jumlah_pekerja" />
						</div>
					</div>
					<div class="col-md-10">
						<label for="lokasi" class="control-label">Lokasi/Fasilitas</label>
						<div class="form-group">
							<input type="text" name="lokasi" value="<?php echo $this->input->post('lokasi'); ?>" class="form-control" id="lokasi" />
						</div>
					</div>
					<div class="col-md-12">
						<label for="uraian_pekerjaan" class="control-label">Uraian Pekerjaan</label>
						<div class="form-group">
							<textarea name="uraian_pekerjaan" class="form-control" id="uraian_pekerjaan"><?= @$hira->ringkasan_pek ?></textarea>
						</div>
					</div>
					<div class="col-md-10">
						<label for="peralatan" class="control-label">Peralatan Yang Digunakan</label>
						<div class="form-group">
							<input type="text" name="peralatan" value="<?= @$hira->tools ?>" class="form-control" id="peralatan" />
						</div>
					</div>
					<div class="col-md-10">
						<label for="isolasi_peralatan" class="control-label">Isolasi Peralatan</label>
						<div class="form-group">
							<input type="checkbox" name="isolasi_peralatan[]" value="LOTO Electric Circuits"> LOTO Electric Circuits &nbsp;
							<br><input type="checkbox" name="isolasi_peralatan[]" value="LOTO Valve Gas"> LOTO Valve Gas &nbsp;
							<br><input type="checkbox" name="isolasi_peralatan[]" value="LOTO Valve Water"> LOTO Valve Water &nbsp;	
							<br><input type="checkbox" name="isolasi_peralatan[]" value="LOTO Valve Air Instrument"> LOTO Valve Air Instrument &nbsp;
						</div>
					</div>
					<div class="col-md-10">
						<label for="lampiran" class="control-label">Lampiran</label>
						<div class="form-group">
							<input type="checkbox" name="lampiran[]" value="Prosedur Khusus"> Prosedur Khusus &nbsp;
							<br><input type="checkbox" name="lampiran[]" value="Gambar P&ID"> Gambar P&ID &nbsp;
							<br><input type="checkbox" name="lampiran[]" value="TKO, TKI, TKPA"> TKO, TKI, TKPA &nbsp;	
							<br><input type="checkbox" name="lampiran[]" value="HIRA"> JHSEA/HIRA &nbsp;
						</div>
					</div>
					<div class="col-lg-12">
						<label for="identiikasi_bahaya" class="control-label">Identifikasi Bahaya</label>
						<div class="form-group">
						<input type="checkbox" name="identiikasi_bahaya[]" value="Gas Lemas"> Gas Lemas &nbsp;
						<br><input type="checkbox" name="identiikasi_bahaya[]" value="Kekurangan Oksigen"> Kekurangan Oksigen &nbsp;
						<br><input type="checkbox" name="identiikasi_bahaya[]" value="Gas/Uap Beracun"> Gas/Uap Beracun &nbsp;	
						<br><input type="checkbox" name="identiikasi_bahaya[]" value="Bising"> Bising &nbsp;
						<br><input type="checkbox" name="identiikasi_bahaya[]" value="Bahan Berbahaya dan beracun"> Bahan Berbahaya dan beracun &nbsp;
						<br><input type="checkbox" name="identiikasi_bahaya[]" value="Peralatan jalan/listrik hidup/tersengat"> Peralatan jalan/listrik hidup/tersengat &nbsp;	
						<br><input type="checkbox" name="identiikasi_bahaya[]" value="Mesin bergerak/berputar"> Mesin bergerak/berputar &nbsp;
						<br><input type="checkbox" name="identiikasi_bahaya[]" value="Cairan/gas bertekanan"> Cairan/gas bertekanan &nbsp;
						<br><input type="checkbox" name="identiikasi_bahaya[]" value="Longsoran"> Longsoran &nbsp;	
						<br><input type="checkbox" name="identiikasi_bahaya[]" value="Benda bergerak"> Benda bergerak &nbsp;
						<br><input type="checkbox" name="identiikasi_bahaya[]" value="Pengangkatan Benda berat">Pengangkatan Benda berat &nbsp;
						<br><input type="checkbox" name="identiikasi_bahaya[]" value="Kerja di ketinggian"> Kerja di ketinggian &nbsp;	
						<br><input type="checkbox" name="identiikasi_bahaya[]" value="Radiasi Radio Aktif"> Radiasi Radio Aktif &nbsp;
						<br><input type="checkbox" name="identiikasi_bahaya[]" value="Kontaminasi Tanah"> Kontaminasi Tanah &nbsp;
						<br><input type="checkbox" name="identiikasi_bahaya[]" value="Temperatur ekstrim (dingin/panas)">Temperatur ekstrim (dingin/panas) &nbsp;	
						<br><input type="checkbox" name="identiikasi_bahaya[]" value="Pengangkatan Manual/alat angkat"> Pengangkatan Manual/alat angkat &nbsp;
						<br><input type="checkbox" name="identiikasi_bahaya[]" value="Ruang terbatas/kekurangan oksigen"> Ruang terbatas/kekurangan oksigen &nbsp;
						<br><input type="checkbox" name="identiikasi_bahaya[]" value="Bahaya Pencemaran Lingkungan"> Bahaya Pencemaran Lingkungan &nbsp;	
						<br><input type="checkbox" name="identiikasi_bahaya[]" value="Faktor Ergonomis"> Faktor Ergonomis &nbsp;
						<br><input type="checkbox" name="identiikasi_bahaya[]" value="Paparan Debu"> Paparan Debu &nbsp;
						<br><input type="checkbox" name="identiikasi_bahaya[]" value="Dampak visual"> Dampak visual &nbsp;	
						<br><input type="checkbox" name="identiikasi_bahaya[]" value="Biohazard"> Biohazard &nbsp;
						<br><input type="checkbox" name="identiikasi_bahaya[]" value="Iritasi Mata/Kulit"> Iritasi Mata/Kulit &nbsp;
						<br><input type="checkbox" name="identiikasi_bahaya[]" value="Gangguan Pernafasan"> Gangguan Pernafasan &nbsp;	
						<br><input type="checkbox" name="identiikasi_bahaya[]" value="Faktor fisik/biologis"> Faktor fisik/biologis &nbsp;
						<br><input type="checkbox" name="identiikasi_bahaya[]" value="Gangguan Keamanan"> Gangguan Keamanan &nbsp;
						<br><input type="checkbox" name="identiikasi_bahaya[]" value="Pencurian"> Pencurian &nbsp;
						</div>
					</div>
					<div class="col-md-10">
						<label for="izin_diperlukan" class="control-label">Izin Diperlukan</label>
						<div class="form-group">
							<input type="checkbox" name="izin_diperlukann[]" value="Izin Kerja masuk ruang Terbatas"> Izin Kerja masuk ruang Terbatas&nbsp;
							<br><input type="checkbox" name="izin_diperlukan[]" value="Izin Kerja Radiografi"> Izin Kerja Radiografi&nbsp;
							<br><input type="checkbox" name="izin_diperlukan[]" value="Izin Kerja Isolasi  Listrik"> Izin Kerja Isolasi  Listrik &nbsp;	
							<br><input type="checkbox" name="izin_diperlukan[]" value="Izin Kerja Penggalian"> Izin Kerja Penggalian &nbsp;
							<br><input type="checkbox" name="izin_diperlukan[]" value="Izin Kerja Pengangkatan"> Izin Kerja Pengangkatan &nbsp;	
							<br><input type="checkbox" name="izin_diperlukan[]" value="Izin Kerja Ketinggian"> Izin Kerja Ketinggian &nbsp;	
						</div>
					</div>
					<div class="col-md-10">
						<label for="sifat_pekerjaan" class="control-label">Sifat Pekerjaan</label>
						<div class="form-group">
							<input type="checkbox" name="sifat_pekerjaan[]" value="Normal"> Normal &nbsp;
							<br><input type="checkbox" name="sifat_pekerjaan[]" value="T/A"> T/A &nbsp;
							<br><input type="checkbox" name="sifat_pekerjaan[]" value="Emergency"> Emergency &nbsp;	
						</div>
					</div>
					</div>
					<div class="col-md-4">
					<div class="col-md-12	">
						<label for="identifikasi_tambahan" class="control-label">Identifikasi Tambahan</label>
						<div class="form-group">
							<textarea name="identifikasi_tambahan" class="form-control" id="identifikasi_tambahan"><?php echo $this->input->post('identifikasi_tambahan'); ?></textarea>
						</div>
					</div>
					<div class="col-lg-12">
						<label for="pengendalian_bahaya" class="control-label">Pengendalian Bahaya</label>
						<div class="form-group">
						<input type="checkbox" name="pengendalian_bahaya[]" value="Topi Keselamatan yang sesuai"> Topi Keselamatan yang sesuai &nbsp;
						<br><input type="checkbox" name="pengendalian_bahaya[]" value="Sepatu Keselamatan yang sesuai"> Sepatu Keselamatan yang sesuai &nbsp;
						<br><input type="checkbox" name="pengendalian_bahaya[]" value="Kacamata Keselamatan yang sesuai"> Kacamata Keselamatan yang sesuai &nbsp;	
						<br><input type="checkbox" name="pengendalian_bahaya[]" value="Pelindung Telinga yang sesuai"> Pelindung Telinga yang sesuai &nbsp;
						<br><input type="checkbox" name="pengendalian_bahaya[]" value="Sarung Tangan Keselamatan"> Sarung Tangan Keselamatan &nbsp;
						<br><input type="checkbox" name="pengendalian_bahaya[]" value="Harnes/Tali Pengaman"> Harnes/Tali Pengaman &nbsp;	
						<br><input type="checkbox" name="pengendalian_bahaya[]" value="Masker debu/gas"> Masker debu/gas &nbsp;
						<br><input type="checkbox" name="pengendalian_bahaya[]" value="Masker Kimia"> Masker Kimia &nbsp;
						<br><input type="checkbox" name="pengendalian_bahaya[]" value="Tali Pembatas Daerah"> Tali Pembatas Daerah &nbsp;	
						<br><input type="checkbox" name="pengendalian_bahaya[]" value="Absorben"> Absorben &nbsp;
						<br><input type="checkbox" name="pengendalian_bahaya[]" value="Peralatan disolasi/dilepas"> Peralatam disolasi/dilepas &nbsp;
						<br><input type="checkbox" name="pengendalian_bahaya[]" value="Pengesahan Gas sebelum mulai kerja (LEL, 02, Toxic)"> Pengesahan Gas sebelum mulai kerja (LEL, 02, Toxic) &nbsp;	
						<br><input type="checkbox" name="pengendalian_bahaya[]" value="Pengetesan HC gas terus menerus"> Pengetesan HC gas terus menerus &nbsp;
						<br><input type="checkbox" name="pengendalian_bahaya[]" value=" Alat anti percikan api (Non sparking Tools)">  Alat anti percikan api (Non sparking Tools) &nbsp;	
						<br><input type="checkbox" name="pengendalian_bahaya[]" value="Tanda Peringatan/rintangan"> Tanda Peringatan/rintangan &nbsp;
						<br><input type="checkbox" name="pengendalian_bahaya[]" value="Peralatan tanpa tekanan"> Peralatan tanpa tekanan &nbsp;
						<br><input type="checkbox" name="pengendalian_bahaya[]" value="Peralatan dikuras(flushing)"> Peralatan dikuras(flushing) &nbsp;	
						<br><input type="checkbox" name="pengendalian_bahaya[]" value="Peralatan disolasi/dilepas"> Peralatan disolasi/dilepas &nbsp;
						<br><input type="checkbox" name="pengendalian_bahaya[]" value="PPE sand blasting"> PPE sand blasting &nbsp;	
						<br><input type="checkbox" name="pengendalian_bahaya[]" value="Alat bantu pernafasan udara tekan"> Alat bantu pernafasan udara tekan &nbsp;	
						<br><input type="checkbox" name="pengendalian_bahaya[]" value="Tirai pelindung semprotan pasir"> Tirai pelindung semprotan pasir &nbsp;
						<br><input type="checkbox" name="pengendalian_bahaya[]" value="PPE Bahan Kimia"> PPE Bahan Kimia &nbsp;	
						<br><input type="checkbox" name="pengendalian_bahaya[]" value="Alat Penanggulangan pencemaran"> Alat Penanggulangan pencemaran &nbsp;
						<br><input type="checkbox" name="pengendalian_bahaya[]" value="Tanda Keselamatan"> Tanda Keselamatan &nbsp;
						<br><input type="checkbox" name="pengendalian_bahaya[]" value="Tambahan Lampu Penerangan"> Tambahan Lampu Penerangan &nbsp;	
						<br><input type="checkbox" name="pengendalian_bahaya[]" value="Scaffolding/perancah/tanggah"> Scaffolding/perancah/tanggah &nbsp;
						<br><input type="checkbox" name="pengendalian_bahaya[]" value="Pos Pemeriksaan (barang dan data pribadi) "> Pos Pemeriksaan (barang dan data pribadi)  &nbsp;
						<br><input type="checkbox" name="pengendalian_bahaya[]" value="Alat penampung cairan B3"> Alat penampung cairan B3 &nbsp;	
					</div>
				</div>

				<div class="col-md-12">
						<label for="permintaan_tambahan" class="control-label">Permintaan Tambahan</label>
						<div class="form-group">
							<input type="text" name="permintaan_tambahan" value="<?php echo $this->input->post('permintaan_tambahan'); ?>" class="form-control" id="permintaan_tambahan" />
						</div>
					</div>
					<div class="col-md-12">
						<label for="nama1" class="control-label">Diminta Oleh Penerima</label>
						<div class="form-group">
							<input type="text" name="nama1" value="<?php echo $this->input->post('nama1'); ?>" class="form-control" id="nama1" />
						</div>
					</div>
					<div class="col-md-12">
						<label for="date1" class="control-label">Tanggal Penerima</label>
						<div class="input-group date">
							<div class="input-group-addon">
								<i class="fa fa-calendar"></i>
							</div>
							<input type="text" name="date1"data-date-format="YYYY-MM-DD" value="<?php echo $this->input->post('date1'); ?>" class="has-datepicker form-control" id="date1" />
						</div>
					</div>
					<div class="col-md-12">
						<label for="nama2" class="control-label">Diperiksa Oleh Pengawas</label>
						<div class="form-group">
							<input type="text" name="nama2" value="<?php echo $this->input->post('nama2'); ?>" class="form-control" id="nama2" />
						</div>
					</div>
					<div class="col-md-12">
						<label for="date2" class="control-label">Tanggal Diperiksa</label>
						<div class="input-group date">
							<div class="input-group-addon">
								<i class="fa fa-calendar"></i>
							</div>
							<input type="text" name="date2" data-date-format="YYYY-MM-DD" value="<?php echo $this->input->post('date2'); ?>" class="has-datepicker form-control" id="date2" />
						</div>
					</div>
					<div class="col-md-12">
						<label for="nama3" class="control-label">Dikaji Pengawas HSE</label>
						<div class="form-group">
							<input type="text" name="nama3" value="<?php echo $this->input->post('nama3'); ?>" class="form-control" id="nama3" />
						</div>
					</div>
					<div class="col-md-12">
						<label for="date3" class="control-label">Tanggal Dikaji HSE</label>
						<div class="input-group date">
							<div class="input-group-addon">
								<i class="fa fa-calendar"></i>
							</div>
							<input type="text" name="date3"  data-date-format="YYYY-MM-DD" value="<?php echo $this->input->post('date3'); ?>" class="has-datepicker form-control" id="date3" />
						</div>
					</div>
					<div class="col-md-12">
						<label for="nama4" class="control-label">Disetujui Oleh</label>
						<div class="form-group">
							<input type="text" name="nama4" value="<?php echo $this->input->post('nama4'); ?>" class="form-control" id="nama4" />
						</div>
					</div>
					<div class="col-md-12">
						<label for="date4" class="control-label">Tanggal Disetujui</label>
						<div class="input-group date">
							<div class="input-group-addon">
								<i class="fa fa-calendar"></i>
							</div>
							<input type="text" name="date4" data-date-format="YYYY-MM-DD"  value="<?php echo $this->input->post('date4'); ?>" class="has-datepicker form-control" id="date4" />
						</div>
					</div>
					<div class="col-md-12">
						<label for="nama" class="control-label">Nama</label>
						<div class="form-group">
							<input type="text" name="nama" value="<?php echo $this->input->post('nama'); ?>" class="form-control" id="nama" />
						</div>
					</div>
					<div class="col-md-12">
						<label for="date" class="control-label">Tanggal</label>
						<div class="input-group date">
							<div class="input-group-addon">
								<i class="fa fa-calendar"></i>
							</div>
							<input type="text" name="date" data-date-format="YYYY-MM-DD"  value="<?php echo $this->input->post('date'); ?>" class="has-datepicker form-control" id="date" />
						</div>
					</div>
					</div>
					<div class="col-md-4">
					<div class="col-md-10">
						<label for="alasan" class="control-label">Alasan</label>
						<div class="form-group">
							<textarea name="alasan" class="form-control" id="alasan"><?php echo $this->input->post('alasan'); ?></textarea>
						</div>
					</div>
					<div class="col-md-10">
						<label for="catatan" class="control-label">Catatan</label>
						<div class="form-group">
							<textarea name="catatan" class="form-control" id="catatan"><?php echo $this->input->post('catatan'); ?></textarea>
						</div>
					</div>
					<div class="col-md-10">
						<label for="date_penghentian" class="control-label">Tanggal Penghentian Izin</label>
						<div class="input-group date">
							<div class="input-group-addon">
								<i class="fa fa-calendar"></i>
							</div>
							<input type="text" name="date_penghentian" data-date-format="YYYY-MM-DD"  value="<?php echo $this->input->post('date_penghentian'); ?>" class="has-datepicker form-control" id="date_penghentian" />
						</div>
					</div>
					<div class="col-md-12">
						<label for="waktu_penghentian" class="control-label">Waktu Penghentian Izin</label>
						<div class="form-group">
							<input type="text" name="waktu_penghentian" value="<?php echo $this->input->post('waktu_penghentian'); ?>" class="form-control" id="waktu_penghentian" />
						</div>
					</div>
					<div class="col-md-12">
						<label for="nama_penghentian" class="control-label">Nama Penghentian</label>
						<div class="form-group">
							<input type="text" name="nama_penghentian" value="<?php echo $this->input->post('nama_penghentian'); ?>" class="form-control" id="nama_penghentian" />
						</div>
					</div>
					<div class="col-md-12">
						<label for="date_pengesahan" class="control-label">Tanggal Pengesahan Izin</label>
						<div class="input-group date">
							<div class="input-group-addon">
								<i class="fa fa-calendar"></i>
							</div>
							<input type="text" name="date_pengesahan" data-date-format="YYYY-MM-DD"  value="<?php echo $this->input->post('date_pengesahan'); ?>" class="has-datepicker form-control" id="date_pengesahan" />
						</div>
					</div>
					<div class="col-md-12">
						<label for="waktu_pengesahan" class="control-label">Waktu Pengesahan Izin</label>
						<div class="form-group">
							<input type="text" name="waktu_pengesahan" value="<?php echo $this->input->post('waktu_pengesahan'); ?>" class="form-control" id="waktu_pengesahan" />
						</div>
					</div>
					<div class="col-md-12">
						<label for="nama_pengesahan" class="control-label">Nama Pengesahan Izin</label>
						<div class="form-group">
							<input type="text" name="nama_pengesahan" value="<?php echo $this->input->post('nama_pengesahan'); ?>" class="form-control" id="nama_pengesahan" />
						</div>
					</div>

					<div class="col-md-12">
						<label for="penutupan_izin" class="control-label">Penutupan Izin</label>
						<div class="form-group">
							<input type="text" name="penutupan_izin" value="<?php echo $this->input->post('penutupan_izin'); ?>" class="form-control" id="penutupan_izin" />
						</div>
					</div>
					<div class="col-md-12">
						<label for="nama_penerima" class="control-label">Disiapkan Oleh</label>
						<div class="form-group">
							<input type="text" name="nama_penerima" value="<?php echo $this->input->post('nama_penerima'); ?>" class="form-control" id="nama_penerima" />
						</div>
					</div>
					<div class="col-md-12">
						<label for="date_penerima" class="control-label">Tanggal Disiapkan</label>
						<div class="input-group date">
							<div class="input-group-addon">
								<i class="fa fa-calendar"></i>
							</div>
							<input type="text" name="date_penerima" data-date-format="YYYY-MM-DD"  value="<?php echo $this->input->post('date_penerima'); ?>" class="has-datepicker form-control" id="date_penerima" />
						</div>
					</div>
					<div class="col-md-12">
						<label for="nama_pengawas" class="control-label">Diperiksa Oleh</label>
						<div class="form-group">
							<input type="text" name="nama_pengawas" value="<?php echo $this->input->post('nama_pengawas'); ?>" class="form-control" id="nama_pengawas" />
						</div>
					</div>
					<div class="col-md-12">
						<label for="date_pengawas" class="control-label">Tanggal Diperiksa</label>
						<div class="input-group date">
							<div class="input-group-addon">
								<i class="fa fa-calendar"></i>
							</div>
							<input type="text" name="date_pengawas" data-date-format="YYYY-MM-DD"  value="<?php echo $this->input->post('date_pengawas'); ?>" class="has-datepicker form-control" id="date_pengawas" />
						</div>
					</div>
					<div class="col-md-12">
						<label for="nama_pemberi" class="control-label">Disetujui Oleh</label>
						<div class="form-group">
							<input type="text" name="nama_pemberi" value="<?php echo $this->input->post('nama_pemberi'); ?>" class="form-control" id="nama_pemberi" />
						</div>
					</div>
					<div class="col-md-12">
						<label for="date_pemberi" class="control-label">Tanggal Disetujui</label>
						<div class="input-group date">
							<div class="input-group-addon">
								<i class="fa fa-calendar"></i>
							</div>
							<input type="text" name="date_pemberi" data-date-format="YYYY-MM-DD"  value="<?php echo $this->input->post('date_pemberi'); ?>" class="has-datepicker form-control" id="date_pemberi" />
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
				<button type="submit" class="btn btn-success">
					<i class="fa fa-check"></i>Simpan &nbsp; <i class="fa fa-database"></i></button>
				</button>
			</div>
			<?php echo form_close(); ?>
      	</div>
    </div>
</div>
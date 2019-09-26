<div class="row">
    <div class="col-md-12">
	<div class="box">
        <div class="box-header with-border">
                <h3 class="box-title">Data SP3</h3>
            	<div class="box-tools">
                    <!-- <a href="<?php echo site_url('sp3/add'); ?>" class="btn btn-success btn-sm">Tambah</a>  -->
                </div>
            </div>
            <div class="box-body table-responsive">
			<table id="dtable" class="table table-bordered table-hover">
                    <thead>
						<th>No Kontrak</th>
						<th>Dari</th>
						<th>Tanggal</th>
						<th>No Po</th>
						<th>Judul Pembayaran</th>
						<th>Tanggal Po</th>
						<!-- <th>Gl Account</th>
						<th>Cost Center</th> 
						<th>Nama Perusahaan</th>
						<th>Pemilik Pekerjaan</th>
						<th>Jabatan</th>-->
						<th>No Invoice</th>
						<th>Tanggal Invoice</th>
						<th>Nama User</th>
						<th>Jabatan User</th>
						<!-- <th>Id Fungsi</th>
						<th>No Kbo</th> -->
						<th>Actions</th>
					</thead>	
                    </tr>
                    <?php foreach($sp3 as $s){ ?>
                    <tr>
						<td><?php echo $s['no_kontrak']; ?></td>
						<td><?php echo $s['dari']; ?></td>
						<td><?php echo $s['tanggal']; ?></td>
						<td><?php echo $s['no_po']; ?></td>
						<td><?php echo $s['judul_pembayaran']; ?></td>
						<td><?php echo $s['tanggal_po']; ?></td>
						<!-- <td><?php echo $s['gl_account']; ?></td>
						<td><?php echo $s['cost_center']; ?></td> 
						<td><?php echo $s['nama_perusahaan']; ?></td>
						<td><?php echo $s['pemilik_pekerjaan']; ?></td>
						<td><?php echo $s['jabatan']; ?></td>-->
						<td><?php echo $s['no_invoice']; ?></td>
						<td><?php echo $s['tanggal_invoice']; ?></td>
						<td><?php echo $s['nama_user']; ?></td>
						<td><?php echo $s['jabatan_user']; ?></td>
						<!-- <td><?php echo $s['id_fungsi']; ?></td>
						<td><?php echo $s['no_kbo']; ?></td> -->
						<td>
                            <a href="<?php echo site_url('sp3/edit/'.urlencode($s['no_sp3'])); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
							<a href="<?php echo site_url('sp3/remove/'.urlencode($s['no_sp3'])); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
							<a href="<?php echo site_url('sp3/cetak/'.urlencode($s['no_sp3'])); ?>" class="btn btn-success btn-xs"><span class="fa fa-print"></span> Print</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
				</div class="box-footer">
				<?= anchor('sp3/add','Tambah',array('class'=>'btn btn-primary')) ?>
            </div>
        </div>
    </div>
</div>

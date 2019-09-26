<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Data Notulen</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('notulen/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
			<table id="table1" class="table table-bordered table-hover">
                    <tr>
						<th>No Notulen</th>
						<th>Perihal</th>
						<th>No</th>
						<th>Waktu</th>
						<th>Tempat</th>
						<th>Penanda Tangan 1</th>
						<th>Jabatan 1</th>
						<th>Penanda Tangan 2</th>
						<th>Jabatan 2</th>
						<th>Penanda Tangan 3</th>
						<th>Jabatan 3</th>
						<th>Id Fungsi</th>
						<th>No Kbo</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($notulen as $n){ ?>
                    <tr>
						<td><?php echo $n['no_notulen']; ?></td>
						<td><?php echo $n['perihal']; ?></td>
						<td><?php echo $n['no']; ?></td>
						<td><?php echo $n['waktu']; ?></td>
						<td><?php echo $n['tempat']; ?></td>
						<td><?php echo $n['ttd_1']; ?></td>
						<td><?php echo $n['jabatan1']; ?></td>
						<td><?php echo $n['ttd_2']; ?></td>
						<td><?php echo $n['jabatan2']; ?></td>
						<td><?php echo $n['ttd_3']; ?></td>
						<td><?php echo $n['jabatan3']; ?></td>
						<td><?php echo $n['id_fungsi']; ?></td>
						<td><?php echo $n['no_kbo']; ?></td>
						<td>
                            <a href="<?php echo site_url('notulen/edit/'.base64_encode($n['no_notulen'])); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('notulen/remove/'.(base64_encode($n['no_notulen']))); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
							<a href="<?php echo site_url('uraian/index/'.(base64_encode($n['no_notulen']))); ?>" class="btn btn-warning btn-xs"><span class="fa fa-file-text"></span> Uraian</a>
							<a href="<?php echo site_url('notulen/cetak/'.(base64_encode($n['no_notulen']))); ?>" class="btn btn-success btn-xs"><span class="fa fa-print"></span> Print</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>

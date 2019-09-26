<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Data Konsumsi</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('konsumsi/add'); ?>" class="btn btn-success btn-sm">Tambah</a> 
                </div>
            </div>
            <div class="box-body">
            <table id="table1" class="table table-bordered table-hover">
            <thead>
                    <tr>
						<th>No Konsumsi</th>
						<th>Dari</th>
						<th>No Kbo</th>
						<th>Tanggal</th>
						<th>Acara</th>
						<th>Hari Tanggal</th>
						<th>Mulai</th>
						<th>Selesai</th>
						<th>Tempat</th>
						<th>Peserta</th>
						<th>Actions</th>
                    </tr>
                    </thead>
                    <?php foreach($konsumsi as $k){ 
                        $acara = $this->Notulen_model->get_notulen($k['acara']);
                        $k['acara'] = $acara['perihal'];
                        ?>
                    <tr>
						<td><?php echo $k['no_konsumsi']; ?></td>
						<td><?php echo $k['dari']; ?></td>
					   	<td><?php echo $k['no_kbo']; ?></td>
						<td><?php echo $k['tanggal']; ?></td>
						<td><?php echo $k['acara']; ?></td>
						<td><?php echo $k['hari_tanggal']; ?></td>
						<td><?php echo $k['mulai']; ?></td>
						<td><?php echo $k['selesai']; ?></td>
						<td><?php echo $k['tempat']; ?></td>
						<td><?php echo $k['peserta']; ?></td>
						<td>
                            <a href="<?php echo site_url('konsumsi/edit/'.urlencode($k['no_konsumsi'])); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('konsumsi/remove/'.urlencode($k['no_konsumsi'])); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                            <a href="<?php echo site_url('konsumsi/cetak/'.urlencode($k['no_konsumsi'])); ?>" class="btn btn-success btn-xs"><span class="fa fa-print"></span> Print</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>

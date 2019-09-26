<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Po Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('po/add'); ?>" class="btn btn-success btn-sm">Tambah</a> 
                </div>
            </div>
            <div class="box-body">
              <table id="table1" class="table table-bordered table-hover">
            <thead>
                    <tr>
						<th>No Po</th>
						<th>Gl Account</th>
						<th>Cost Center</th>
						<th>Nama Perusahaan</th>
						<th>Pemilik Pekerjaan</th>
						<th>Jabatan</th>
						<th>No Rek</th>
						<th>Nama Bank</th>
						<th>Tanggal Po</th>
						<th>Judul Pembayaran</th>
						<th>Actions</th>
                    </tr>
					<thead>
                    <?php foreach($po as $p){ ?>
                    <tr>
						<td><?php echo $p['no_po']; ?></td>
						<td><?php echo $p['gl_account']; ?></td>
						<td><?php echo $p['cost_center']; ?></td>
						<td><?php echo $p['nama_perusahaan']; ?></td>
						<td><?php echo $p['pemilik_pekerjaan']; ?></td>
						<td><?php echo $p['jabatan']; ?></td>
						<td><?php echo $p['no_rek']; ?></td>
						<td><?php echo $p['nama_bank']; ?></td>
						<td><?php echo $p['tanggal_po']; ?></td>
						<td><?php echo $p['judul_pembayaran']; ?></td>
						<td>
                            <a href="<?php echo site_url('po/edit/'.urlencode($p['no_po'])); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('po/remove/'.urlencode($p['no_po'])); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>

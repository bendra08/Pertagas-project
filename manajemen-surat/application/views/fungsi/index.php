<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Fungsi Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('fungsi/add'); ?>" class="btn btn-success btn-sm">Tambah</a> 
                </div>
            </div>
            <div class="box-body">
            <table id="table1" class="table table-bordered table-hover">
            <thead>
                    <tr>
						<th>Id Fungsi</th>
						<th>Fungsi</th>
						<th>Nama Pejabat</th>
						<th>No Kbo</th>
						<th>Nama Kbo</th>
						<th>Actions</th>
                    </tr>
                    <thead>
                    <?php foreach($fungsi as $f){ ?>
                    <tr>
						<td><?php echo $f['id_fungsi']; ?></td>
						<td><?php echo $f['fungsi']; ?></td>
						<td><?php echo $f['nama_pejabat']; ?></td>
						<td><?php echo $f['no_kbo']; ?></td>
						<td><?php echo $f['nama_kbo']; ?></td>
						<td>
                            <a href="<?php echo site_url('fungsi/edit/'.urlencode($f['id_fungsi'])); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('fungsi/remove/'.urlencode($f['id_fungsi'])); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>

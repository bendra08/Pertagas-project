<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Ruang Rapat Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('ruang_rapat/add'); ?>" class="btn btn-success btn-sm">Tambah</a> 
                </div>
            </div>
            <div class="box-body">
            <table id="table1" class="table table-bordered table-hover">
            <thead>
                    <tr>
						<th>No</th>
						<th>Tempat</th>
						<th>Actions</th>
                    </tr>
                    <thead>
                    <?php foreach($ruang_rapat as $r){ ?>
                    <tr>
						<td><?php echo $r['no']; ?></td>
						<td><?php echo $r['tempat']; ?></td>
						<td>
                            <a href="<?php echo site_url('ruang_rapat/edit/'.$r['no']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('ruang_rapat/remove/'.$r['no']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
     
             </div>
    </div>
</div>

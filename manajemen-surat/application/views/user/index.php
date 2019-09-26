<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">User Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('user/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
            <table id="table1" class="table table-bordered table-hover">
            <thead>
                    <tr>
						<th>No Pek</th>
						<th>Username</th>
						<th>Role</th>
						<th>Fungsi</th>
						<th>Actions</th>
                    </tr>
                    <thead>
                    <?php foreach($user as $f){ ?>
                    <tr>
						<td><?php echo $f['no_pek']; ?></td>
						<td><?php echo $f['username']; ?></td>
						<td><?php echo $f['role']; ?></td>
						<td><?php echo $f['fungsi']; ?></td>
						<td>
                            <a href="<?php echo site_url('user/edit/'.urlencode($f['no_pek'])); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('user/remove/'.urlencode($f['no_pek'])); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>

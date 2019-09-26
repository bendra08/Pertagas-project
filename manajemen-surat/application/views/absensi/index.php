<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Data Absensi</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('absensi/add'); ?>" class="btn btn-success btn-sm">Tambah</a> 
                </div>
            </div>
            <div class="box-body">
            <table id="table1" class="table table-bordered table-hover">
            <thead>
                    <tr>
						<th>No Absensi</th>
						<th>Agenda</th>
						<th>Hari Tanggal</th>
						<th>Pukul</th>
						<th>No</th>
						<th>Tempat</th>
						<th>Tipe</th>
						<th>Actions</th>
                    </tr>
                    <thead>
                    <?php foreach($absensi as $a){ ?>
                    <tr>
						<td><?php echo $a['no_absensi']; ?></td>
						<td><?php echo $a['agenda']; ?></td>
						<td><?php echo $a['hari_tanggal']; ?></td>
						<td><?php echo $a['pukul']; ?></td>
						<td><?php echo $a['no']; ?></td>
						<td><?php echo $a['tempat']; ?></td>
						<td><?php echo $a['tipe']; ?></td>
						<td>
                            <a href="<?php echo site_url('absensi/edit/'.urlencode($a['no_absensi'])); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('absensi/remove/'.urlencode($a['no_absensi'])); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                            <a href="<?php echo site_url('absensi/cetak/'.urlencode($a['no_absensi'])); ?>" class="btn btn-success btn-xs"><span class="fa fa-print"></span> Print</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>

          </div>
    </div>
</div>

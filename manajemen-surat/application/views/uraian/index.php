<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Uraian Listing</h3>
                <div class="box-tools">
                    <a href="<?php echo site_url('uraian/add').'/'.base64_encode($notulen); ?>"
                        class="btn btn-success btn-sm">Add</a>
                    <a href="<?php echo site_url('notulen/index'); ?>"
                        class="btn btn-default btn-sm">Back</a>
                </div>
            </div>
            <div class="box-body">
                <div class="col-md-12">
                    <label for="id_notulen" class="control-label">ID Notulen</label>
                    <div class="form-group">
                        <input type="text" name="id_notulen" value="<?php echo $notulen; ?>" class="form-control"
                            id="id_notulen" readonly />
                    </div>
                </div>
                <table id="table1" class="table table-bordered table-hover">
                    <tr>
                        <th>No Uraian</th>
                        <th>Rencana</th>
                        <th>Jangka Waktu</th>
                        <th>Penanggung Jawab</th>
                        <th>Uraian</th>
                        <th>Actions</th>
                    </tr>
                    <?php foreach($uraian as $u){ ?>
                    <tr>
                        <td><?php echo $u['no_uraian']; ?></td>
                        <td><?php echo $u['rencana']; ?></td>
                        <td><?php echo $u['jangka_waktu']; ?></td>
                        <td><?php echo $u['penanggung_jawab']; ?></td>
                        <td><?php echo $u['uraian']; ?></td>
                        <td>
                            <a href="<?php echo site_url('uraian/edit/'.base64_encode($u['no_uraian']).'/'.base64_encode($notulen)); ?>"
                                class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
                            <a href="<?php echo site_url('uraian/remove/'.base64_encode($u['no_uraian']).'/'.base64_encode($notulen)); ?>"
                                class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>

            </div>
        </div>
    </div>
</div>
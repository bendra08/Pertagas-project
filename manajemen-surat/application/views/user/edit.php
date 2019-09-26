<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">User Edit</h3>
            </div>
            <?php echo form_open('user/edit/'.urlencode($user['no_pek'])); ?>
            <div class="box-body">
                <div class="row clearfix">
                    <div class="col-md-6">
                        <label for="no_pek" class="control-label">Kode Fungsi</label>
                        <div class="form-group">
                            <input type="text" name="no_pek"
                                value="<?php echo ($this->input->post('no_pek') ? $this->input->post('no_pek') : $user['no_pek']); ?>"
                                class="form-control" id="no_pek" required />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="username" class="control-label">Username</label>
                        <div class="form-group">
                            <input type="text" name="username"
                                value="<?php echo ($this->input->post('username') ? $this->input->post('username') : $user['username']); ?>"
                                class="form-control" id="username" required />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="password" class="control-label">Password</label>
                        <div class="form-group">
                            <input type="password" name="password"
                                placeholder="Kosongkan jika tidak ada perubahan"
                                class="form-control" id="password" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="jabatan" class="control-label">Role</label>
                        <div class="form-group">
                        <?php
                             echo form_dropdown('role', $role,@$selected['role'],[ 'id' => 'role','class' => 'form-control','required' => 'true']); ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="id_fungsi" class="control-label">Fungsi</label>
                        <div class="form-group">
                            <input type="text" name="id_fungsi" value="<?php echo ($this->input->post('id_fungsi') ? $this->input->post('id_fungsi') : $user['id_fungsi']); ?>"
                                class="form-control" id="id_fungsi" autocomplete="off" required />
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-footer">
                <button type="submit" class="btn btn-success">
                    <i class="fa fa-check"></i> Save
                </button>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>
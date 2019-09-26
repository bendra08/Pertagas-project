<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">User Add</h3>
            </div>
            <?php echo form_open('user/add'); ?>
            <div class="box-body">
                <div class="row clearfix">
                    <div class="col-md-6">
                        <label for="no_pek" class="control-label">No Pek</label>
                        <div class="form-group">
                            <input type="text" name="no_pek" value="<?php echo $this->input->post('no_pek'); ?>"
                                class="form-control" id="no_pek" required />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="username" class="control-label">Username</label>
                        <div class="form-group">
                            <input type="text" name="username" value="<?php echo $this->input->post('username'); ?>"
                                class="form-control" id="username" autocomplete="off" required />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="password" class="control-label">Password</label>
                        <div class="form-group">
                            <input type="password" name="password"
                                value="<?php echo $this->input->post('password'); ?>" autocomplete="off"  class="form-control"
                                id="password" required />
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
                            <input type="text" name="id_fungsi" value="<?php echo $this->input->post('id_fungsi'); ?>"
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
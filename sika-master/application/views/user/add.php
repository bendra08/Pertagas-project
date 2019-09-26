<div class="row">
    <div class="col-md-12">
        <?= fs_show_alert() ?>
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title"><strong>Formulir User</strong></h3>
            </div>
            <?php echo form_open('user/add'); ?>
            <div class="box-body">
                <div class="col-md-12">
                    <label> Username <b style="color:red">*</b></label>
                    <div class="form-group">
                        <input type="text" name="username" value="<?php echo $this->input->post('username'); ?>"
                            class="form-control" id="username" required />
                    </div>
                </div>
                <div class="col-md-12">
                    <label> Password <b style="color:red">*</b></label>
                    <div class="form-group">
                        <input type="password" name="password" value="<?php echo $this->input->post('password'); ?>"
                            class="form-control" id="password" required />
                    </div>
                </div>
                <div class="col-md-12">
                    <label> Nama Lengkap <b style="color:red">*</b></label>
                    <div class="form-group">
                        <input type="text" name="nama" value="<?php echo $this->input->post('nama'); ?>"
                            class="form-control" id="nama" required />
                    </div>
                </div>
                <div class="col-md-12">
                    <label> Email <b style="color:red">*</b></label>
                    <div class="form-group">
                        <input type="email" name="email" value="<?php echo $this->input->post('email'); ?>"
                            class="form-control" id="email" required />
                    </div>
                </div>
                <div class="col-md-12">
                    <label> Role <b style="color:red">*</b></label>
                    <div class="form-group">
                        <?php echo form_dropdown('role', @$role,'',[ 'id' => 'role','class' => 'form-control','required' => 'true' ]); ?>
                    </div>
                </div>
                <div class="col-md-12">
                    <label> Status <b style="color:red">*</b></label>
                    <div class="form-group">
                        <?php echo form_dropdown('status', @$status,'',[ 'id' => 'status','class' => 'form-control','required' => 'true' ]); ?>
                    </div>
                </div>
            </div>
            <div class="box-footer">
                <button type="submit" class="btn btn-success">
                    <i class="fa fa-check"></i>Simpan &nbsp; <i class="fa fa-database"></i></button>
                </button>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>
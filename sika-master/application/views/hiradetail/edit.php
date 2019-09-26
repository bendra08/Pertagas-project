<div class="row">
    <div class="col-md-12">
        <?= fs_show_alert() ?>
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title"><strong>Formulir HIRA detail</strong></h3>
            </div>
            <?php echo form_open('hiradetail/edit/'.$hira['dh_id'].'/'.$id_hira); ?>
            <div class="box-body">
                <div class="row clearfix">
                    <div class="col-md-4">

                        <div class="col-md-12">
                            <label> Urutan Kegiatan <b style="color:red">*</b></label>
                            <div class="form-group">
                                <textarea name="kegiatan" class="form-control" id="kegiatan"
                                    required><?php echo $hira['dh_kegiatan']; ?></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label> Bahaya</label>
                            <div class="form-group">
                                <textarea name="bahaya" class="form-control"
                                    id="bahaya"><?php echo $hira['dh_bahaya']; ?></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label> Konsekwensi</label>
                            <div class="form-group">
                                <textarea name="konsekwensi" class="form-control"
                                    id="konsekwensi"><?php echo $hira['dh_konsekwensi']; ?></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label> P </label>
                            <div class="form-group">
                                <input type="text" name="p1"
                                    value="<?php echo $hira['dh_p1']; ?>" class="form-control"
                                    id="p1" />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label> C </label>
                            <div class="form-group">
                                <input type="text" name="c1"
                                    value="<?php echo $hira['dh_c1']; ?>" class="form-control"
                                    id="c1" />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label> R </label>
                            <div class="form-group">
                                <input type="text" name="r1"
                                    value="<?php echo $hira['dh_r1']; ?>" class="form-control"
                                    id="r1" />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label> Pengendalian</label>
                            <div class="form-group">
                                <textarea name="pengendalian" class="form-control"
                                    id="pengendalian"><?php echo $hira['dh_pengendalian']; ?></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label> Penanggungjawab</label>
                            <div class="form-group">
                                <textarea name="penanggungjawab" class="form-control"
                                    id="penanggungjawab"><?php echo $hira['dh_penanggungjawab']; ?></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label> P </label>
                            <div class="form-group">
                                <input type="text" name="p2"
                                    value="<?php echo $hira['dh_p2']; ?>" class="form-control"
                                    id="p2" />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label> C </label>
                            <div class="form-group">
                                <input type="text" name="c2"
                                    value="<?php echo $hira['dh_c2']; ?>" class="form-control"
                                    id="c2" />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label> R </label>
                            <div class="form-group">
                                <input type="text" name="r2"
                                    value="<?php echo $hira['dh_r1']; ?>" class="form-control"
                                    id="r2" />
                            </div>
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
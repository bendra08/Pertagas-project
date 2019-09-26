<div class="row">
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
            <div class="inner">
                <h3><?= number_format($sp3) ?></h3>
                <p>SP3</p>
            </div>
            <div class="icon">
                <i class="fa fa-envelope"></i>
            </div>
            <?= anchor('sp3/add','<i class="fa fa-arrow-circle-right"></i> Create New',array('class'=>'small-box-footer')) ?>
        </div>
    </div>
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
            <div class="inner">
                <h3><?= number_format($konsumsi) ?></h3>
                <p>Surat Konsumsi</p>
            </div>
            <div class="icon">
                <i class="fa fa-envelope"></i>
            </div>
            <?= anchor('konsumsi/add','<i class="fa fa-arrow-circle-right"></i> Create New',array('class'=>'small-box-footer')) ?>
        </div>
    </div>
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
            <div class="inner">
                <h3><?= number_format($absensi) ?></h3>
                <p>Absensi</p>
            </div>
            <div class="icon">
                <i class="fa fa-file-text"></i>
            </div>
            <?= anchor('absensi/add','<i class="fa fa-arrow-circle-right"></i> Create New',array('class'=>'small-box-footer')) ?>
        </div>
    </div>
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
            <div class="inner">
                <h3><?= number_format($notulen) ?></h3>
                <p>Notulen</p>
            </div>
            <div class="icon">
                <i class="fa fa-file-text"></i>
            </div>
            <?= anchor('notulen/add','<i class="fa fa-arrow-circle-right"></i> Create New',array('class'=>'small-box-footer')) ?>
        </div>
    </div>
</div>
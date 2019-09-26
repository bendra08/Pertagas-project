
<div class="row-fluid">
	<div class="span12">
		<div class="box">
			<div class="box-title">
				
			<div class="box-content">
				<?php echo form_open('upload/simpan_dok',array('name'=>'bb', 'id'=>'bb','class'=>'form-horizontal form-validate form-wysiwyg','enctype'=>'multipart/form-data'));?>
				<input type="hidden" name="id" id="id">
				<div class="control-group">
                	<label for="textfield" class="control-label">Format File</label>
                		<div class="controls">
                			<input type="file" name="path_file" id="path_file" class="input-xxlarge" data-rule-required="true" >
						</div>
				</div>
				<div class="form-actions">
					<button class="btn btn-primary" type="submit">Simpan</button>
					<a class="btn btn-danger"  href="<?php echo site_url();?>user/dashboard/">Kembali</a>
				</div>
				</form>
			</div>       
		</div>
	</div>						
</div>
